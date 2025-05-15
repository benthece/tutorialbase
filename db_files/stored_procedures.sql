-- USE `tutorialbase`;

/*DELIMITER $$
CREATE OR REPLACE FUNCTION uuid_v4s()
    RETURNS CHAR(36)
    NOT DETERMINISTIC
BEGIN
    -- 1st and 2nd block are made of 6 random bytes
    SET @h1 = HEX(RANDOM_BYTES(4));
    SET @h2 = HEX(RANDOM_BYTES(2));

    -- 3th block will start with a 4 indicating the version, remaining is random
    SET @h3 = SUBSTR(HEX(RANDOM_BYTES(2)), 2, 3);

    -- 4th block first nibble can only be 8, 9 A or B, remaining is random
    SET @h4 = CONCAT(HEX(FLOOR(ASCII(RANDOM_BYTES(1)) / 64) + 8),
                     SUBSTR(HEX(RANDOM_BYTES(2)), 2, 3));

    -- 5th block is made of 6 random bytes
    SET @h5 = HEX(RANDOM_BYTES(6));

    -- Build the complete UUID
    RETURN LOWER(CONCAT(
            @h1, '-', @h2, '-', '4', @h3, '-', @h4, '-', @h5
                 ));
END;
$$
DELIMITER ;*/

DELIMITER $$
CREATE OR REPLACE TRIGGER uuid_v4_user
    BEFORE INSERT
    ON users
    FOR EACH ROW
BEGIN
    SET NEW.guid = uuid_v4();
END;
$$
DELIMITER ;

DELIMITER $$
CREATE OR REPLACE TRIGGER uuid_v4_vid
    BEFORE INSERT
    ON videos
    FOR EACH ROW
BEGIN
    SET NEW.guid = uuid_v4();
END;
$$
DELIMITER ;

DELIMITER $$
CREATE OR REPLACE TRIGGER uuid_v4_com
    BEFORE INSERT
    ON comments
    FOR EACH ROW
BEGIN
    SET NEW.guid = uuid_v4();
END;
$$
DELIMITER ;

DELIMITER $$
CREATE OR REPLACE TRIGGER uuid_v4_cat
    BEFORE INSERT
    ON categories
    FOR EACH ROW
BEGIN
    SET NEW.guid = uuid_v4();
END;
$$
DELIMITER ;

DELIMITER $$
CREATE OR REPLACE PROCEDURE is_admin(IN usr_guid CHAR(36))
BEGIN
    IF (SELECT privilege_id
        FROM users
        WHERE id = (SELECT id
                    FROM users
                    WHERE guid = usr_guid)) = 1 THEN
        SELECT 'true' AS message;
    ELSE
        SELECT 'false' AS message;
    END IF;
END;
$$
DELIMITER ;

DELIMITER $$
CREATE OR REPLACE PROCEDURE get_comments(
    IN vid_guid CHAR(36),
    IN offset_val INTEGER UNSIGNED
)
BEGIN
    DECLARE vid INTEGER UNSIGNED;

    SELECT id INTO vid FROM videos WHERE guid = vid_guid;

    SELECT comments.guid,
           username,
           users.guid      AS 'user_guid',
           profile_pic_url AS 'user_pic',
           text,
           comments.created_at,
           comments.modified_at
    FROM comments
             INNER JOIN videos
                        ON videos.id = comments.video_id
             INNER JOIN users
                        ON users.id = comments.user_id
    WHERE videos.id = vid
      AND comments.is_deleted = 0
    ORDER BY 6 DESC
    LIMIT offset_val, 5;
END;
$$
DELIMITER ;

DELIMITER $$
CREATE OR REPLACE PROCEDURE create_comment(
    IN usr_guid CHAR(36),
    IN vid_guid CHAR(36),
    IN comm_text VARCHAR(100)
)
BEGIN
    DECLARE uid INTEGER UNSIGNED;
    DECLARE vid INTEGER UNSIGNED;

    SELECT id INTO uid FROM users WHERE guid = usr_guid;
    SELECT id INTO vid FROM videos WHERE guid = vid_guid;

    INSERT INTO comments (guid, user_id, video_id, text, created_at)
    VALUES (uuid_v4(),
            uid,
            vid,
            comm_text,
            NOW());
    SELECT 'success' AS message;
END;
$$
DELIMITER ;

DELIMITER $$
CREATE OR REPLACE PROCEDURE modify_comment(
    IN comm_guid CHAR(36),
    IN user_guid CHAR(36),
    IN comm_text VARCHAR(100)
)
BEGIN
    DECLARE comm_id INTEGER UNSIGNED;
    DECLARE commenter_id CHAR(36);

    SELECT id INTO comm_id FROM comments WHERE guid = comm_guid;
    SELECT user_id INTO commenter_id FROM comments WHERE id = comm_id;

    IF commenter_id = (SELECT id FROM users WHERE guid = user_guid) THEN
        UPDATE comments SET text = comm_text WHERE id = comm_id;
        UPDATE comments SET modified_at = NOW() WHERE id = comm_id;
        SELECT 'success' AS message;
    ELSE
        SELECT 'forbidden' AS message;
    END IF;
END;
$$
DELIMITER ;

DELIMITER $$
CREATE OR REPLACE PROCEDURE delete_comment(IN comm_guid CHAR(36), IN user_guid CHAR(36))
BEGIN
    DECLARE comment_id INT;
    DECLARE commenter_id CHAR(36);

    SELECT id INTO comment_id FROM comments WHERE guid = comm_guid;
    SELECT user_id INTO commenter_id FROM comments WHERE id = comment_id;

    IF commenter_id = (SELECT id FROM users WHERE guid = user_guid) THEN
        UPDATE comments SET is_deleted = 1 WHERE id = comment_id;
        SELECT 'Comment successfully deleted.' AS message;
    ELSE
        SELECT 'Deleting is forbidden.' AS message;
    END IF;
END;
$$
DELIMITER ;

DELIMITER $$
CREATE OR REPLACE PROCEDURE video_reactions(IN vid_guid CHAR(36))
BEGIN
    DECLARE vid_id INTEGER UNSIGNED;
    DECLARE upvote INT UNSIGNED DEFAULT 0;
    DECLARE downvote INT UNSIGNED DEFAULT 0;

    SELECT id INTO vid_id FROM videos WHERE guid = vid_guid;

    SELECT COUNT(IF(is_useful = TRUE, 1, 0)),
           COUNT(IF(is_useful = FALSE, 1, 0))
    INTO upvote, downvote
    FROM reactions
    WHERE video_id = vid_id
      AND is_removed = 0
    GROUP BY video_id;

    SELECT upvote, downvote;
END;
$$
DELIMITER ;

DELIMITER $$
CREATE OR REPLACE PROCEDURE reaction(
    IN vid_guid CHAR(36),
    IN user_guid CHAR(36),
    IN action VARCHAR(7)
)
BEGIN
    DECLARE present BOOL DEFAULT 0;
    DECLARE vid_id INT;
    DECLARE usr_id INT;

    SELECT id INTO vid_id FROM videos WHERE guid = vid_guid;
    SELECT id INTO usr_id FROM users WHERE guid = user_guid;

    SET present = NOT (SELECT ISNULL((SELECT video_id
                                      FROM reactions
                                      WHERE user_id = usr_id
                                        AND video_id = vid_id)));

    IF present = 1 THEN
        CASE action
            WHEN 'like'
                THEN UPDATE reactions SET is_useful = 1 WHERE (user_id = usr_id AND video_id = vid_id);
                     UPDATE reactions SET is_removed = 0 WHERE (user_id = usr_id AND video_id = vid_id);
            WHEN 'dislike'
                THEN UPDATE reactions SET is_useful = 0 WHERE (user_id = usr_id AND video_id = vid_id);
                     UPDATE reactions SET is_removed = 0 WHERE (user_id = usr_id AND video_id = vid_id);
            WHEN 'delete'
                THEN UPDATE reactions SET is_removed = 1 WHERE (user_id = usr_id AND video_id = vid_id);
            END CASE;
        SELECT 'Reaction modified successfully.' AS message;
    ELSE
        CASE action
            WHEN 'like'
                THEN INSERT INTO reactions (user_id, video_id, is_useful) VALUES (usr_id, vid_id, 1);
            WHEN 'dislike'
                THEN INSERT INTO reactions (user_id, video_id, is_useful) VALUES (usr_id, vid_id, 0);
            END CASE;
        SELECT 'Reaction created successfully.' AS message;
    END IF;
END;
$$
DELIMITER ;

DELIMITER $$
CREATE OR REPLACE PROCEDURE reset_wish()
BEGIN
    UPDATE users SET wishes = 5 WHERE id != 0;
END;
$$
DELIMITER ;

DELIMITER $$
CREATE OR REPLACE PROCEDURE get_maincategories()
BEGIN
    SELECT guid, name
    FROM categories
    WHERE parent_id IS NULL
    ORDER BY rand()
    LIMIT 5;
END;
$$
DELIMITER ;

DELIMITER $$
CREATE OR REPLACE PROCEDURE get_subcategories_for_main(IN main_guid CHAR(36))
BEGIN
    SELECT guid, name
    FROM categories
    WHERE parent_id = (SELECT id FROM categories WHERE guid = main_guid);
END;
$$
DELIMITER ;

DELIMITER $$
CREATE OR REPLACE PROCEDURE get_subcategories(IN quantity MEDIUMINT UNSIGNED)
BEGIN
    SELECT id, name
    FROM categories
    WHERE parent_id IS NOT NULL
    ORDER BY RAND()
    LIMIT quantity;
END;
$$
DELIMITER ;

DELIMITER $$
CREATE OR REPLACE PROCEDURE get_videos_for_category(
    IN subcat_guid CHAR(36),
    -- IN offset INTEGER UNSIGNED,
    IN quantity INTEGER UNSIGNED)
BEGIN
    DECLARE subcat_id INT;
    SELECT id INTO subcat_id FROM categories WHERE guid = subcat_guid;

    SELECT videos.guid,
           title,
           (SELECT IFNULL((SELECT name FROM categories WHERE id = c.parent_id), name))   AS category,
           (SELECT NULLIF(name, category))                                               AS subcategory,
           (SELECT IFNULL((SELECT guid FROM categories WHERE id = c.parent_id), c.guid)) AS categ_id,
           (SELECT NULLIF(c.guid, categ_id))                                             AS subcateg_id,
           username,
           profile_pic_url,
           url,
           base_image_url
    FROM videos
             INNER JOIN video_category vc on videos.id = vc.video_id
             INNER JOIN categories c on vc.category_id = c.id
             INNER JOIN users u on u.id = videos.user_id
    WHERE c.id = subcat_id
       OR c.parent_id = subcat_id
    ORDER BY RAND()
    LIMIT quantity;
END;
$$
DELIMITER ;

DELIMITER $$
CREATE OR REPLACE PROCEDURE get_profile_data(IN user_name VARCHAR(36))
BEGIN
    SELECT users.id, username, profile_pic_url, bg_image_url, bio
    FROM users
    WHERE users.username = user_name;
END;
$$
DELIMITER ;

DELIMITER $$
CREATE OR REPLACE PROCEDURE get_user_uploaded(IN user_guid CHAR(36))
BEGIN
    SELECT id, title, url, base_image_url
    FROM videos
    WHERE user_id = user_guid;
END;
$$
DELIMITER ;

/*DELIMITER $$
CREATE OR REPLACE PROCEDURE user_login(
    IN uname VARCHAR(20),
    IN pword CHAR(36),
    OUT is_success CHAR(2)
)
BEGIN
    DECLARE un_success INTEGER DEFAULT NULL;

    SELECT id
    INTO un_success
    FROM users
    WHERE uname IN (username);

    IF un_success IS NULL THEN
        SET is_success = 'nn';
    ELSE
        IF pword = (SELECT password FROM users WHERE id = un_success) THEN
            SET is_success = 'up';
        ELSE
            SET is_success = 'un';
        END IF;
    END IF;
END;
$$
DELIMITER ;*/

DELIMITER $$
CREATE OR REPLACE PROCEDURE get_video(IN vid_guid CHAR(36))
BEGIN
    DECLARE vid_id INTEGER UNSIGNED;

    SELECT id INTO vid_id FROM videos WHERE guid = vid_guid;

    SELECT videos.guid,
           title,
           description,
           (SELECT IFNULL((SELECT name FROM categories WHERE id = c.parent_id), name))   AS category,
           (SELECT NULLIF(name, category))                                               AS subcategory,
           (SELECT IFNULL((SELECT guid FROM categories WHERE id = c.parent_id), c.guid)) AS categ_id,
           (SELECT NULLIF(c.guid, categ_id))                                             AS subcateg_id,
           url,
           base_image_url,
           views,
           uploaded_at,
           users.guid                                                                    AS 'uploader_id',
           username                                                                      AS 'uploader',
           profile_pic_url                                                               AS 'uploader_pic'
    FROM videos
             JOIN users ON videos.user_id = users.id
             JOIN video_category vc ON videos.id = vc.video_id
             JOIN categories c ON vc.category_id = c.id
    WHERE videos.id = vid_id;
END;
$$
DELIMITER ;

DELIMITER $$
CREATE OR REPLACE PROCEDURE search(IN srch_string VARCHAR(50), IN lim TINYINT)
BEGIN
    SELECT videos.guid,
           title,
           (SELECT IFNULL((SELECT name FROM categories WHERE id = c.parent_id), name))   AS category,
           (SELECT NULLIF(name, category))                                               AS subcategory,
           (SELECT IFNULL((SELECT guid FROM categories WHERE id = c.parent_id), c.guid)) AS categ_id,
           (SELECT NULLIF(c.guid, categ_id))                                             AS subcateg_id,
           username,
           profile_pic_url,
           description,
           url,
           base_image_url,
           uploaded_at
    FROM videos
             INNER JOIN video_category vc on videos.id = vc.video_id
             INNER JOIN categories c on vc.category_id = c.id
             INNER JOIN users u on u.id = videos.user_id
    WHERE title LIKE srch_string
       OR (SELECT IFNULL((SELECT name FROM categories WHERE id = c.parent_id), name)) LIKE srch_string
    ORDER BY 2 DESC
    LIMIT lim;
END;
$$
DELIMITER ;

/*CREATE OR REPLACE PROCEDURE modify_user_profile(
    IN user_guid CHAR(36),
    IN data JSON
)*/

-- TODO
-- CREATE OR REPLACE PROCEDURE modify_user_profile()

-- primary keyek fix pipa
-- comments legfrissebbek legyenek elöl pipa
-- create update delete mindenre
-- comment delete pipa
-- mi legyen tárolt eljárás?
-- upvote
-- 1 ember 1 videónál 1 megtekintés
-- főoldal alkategóriiák random, azon belül videók sorban
-- profil oldal
-- video megtekinés oldal video suggestions kommentekkel együtt növekszik (ha beszólnak)
-- user guid

-- MIT szeretne az Adri?
-- /api/recommended?catId={category_guid}

-- admin végpont
-- email api
-- search végpont
-- report
-- reaction visszajelzés user_reaction: liked disliked none
-- video data adja a subcategory id-t is
-- user profile CHARACTER SET