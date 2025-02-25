-- USE `tutorialbase`;

DELIMITER $$
CREATE OR REPLACE PROCEDURE get_comments(
    IN vid_guid CHAR(36),
    IN offset_val INTEGER UNSIGNED
)
BEGIN
    DECLARE vid INTEGER UNSIGNED;

    SELECT id INTO vid FROM videos WHERE guid = vid_guid;

    SELECT comments.guid, username, text, comments.created_at, comments.modified_at
    FROM comments
             INNER JOIN videos
                        ON videos.id = comments.video_id
             INNER JOIN users
                        ON users.id = comments.user_id
    WHERE videos.id = vid
      AND comments.is_deleted = 0
    ORDER BY 4
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
    VALUES (uuid_v4s(),
            uid,
            vid,
            comm_text,
            NOW());
END;
$$
DELIMITER ;

DELIMITER $$
CREATE OR REPLACE PROCEDURE modify_comment(
    IN comm_guid CHAR(36),
    IN comm_text VARCHAR(100)
)
BEGIN
    DECLARE comm_id INTEGER UNSIGNED;

    SELECT id INTO comm_id FROM comments WHERE guid = comm_guid;

    UPDATE comments SET text = comm_text WHERE id = comm_id;
    UPDATE comments SET modified_at = NOW() WHERE id = comm_id;
END;
$$
DELIMITER ;

DELIMITER $$
CREATE OR REPLACE PROCEDURE delete_comment(IN comm_guid CHAR(36))
BEGIN
    UPDATE comments SET is_deleted = TRUE WHERE id = comm_id;
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
    SELECT id, name
    FROM categories
    WHERE parent_id IS NULL;
END;
$$
DELIMITER ;

DELIMITER $$
CREATE OR REPLACE PROCEDURE get_subcategories(IN quantity MEDIUMINT UNSIGNED)
BEGIN
    SELECT id, name
    FROM categories
    WHERE parent_id IS NOT NULL
    LIMIT quantity;
END;
$$
DELIMITER ;

DELIMITER $$
CREATE OR REPLACE PROCEDURE get_videos_for_subcategory(
    IN subcat_guid CHAR(36),
    -- IN offset INTEGER UNSIGNED,
    IN quantity INTEGER UNSIGNED)
BEGIN
    SELECT videos.id, title, url, base_image_url
    FROM videos
             INNER JOIN video_category vc on videos.id = vc.video_id
             INNER JOIN categories c on vc.category_id = c.id
    WHERE c.id = subcat_id
    ORDER BY RAND()
    LIMIT quantity;
END;
$$
DELIMITER ;

DELIMITER $$
CREATE OR REPLACE PROCEDURE get_profile_data(IN user_guid CHAR(36))
BEGIN
    SELECT users.id, username, profile_pic_url, bg_image_url, bio
    FROM users
    WHERE users.id = uid;
END;
$$
DELIMITER ;

DELIMITER $$
CREATE OR REPLACE PROCEDURE get_user_uploaded(IN user_guid CHAR(36))
BEGIN
    SELECT id, title, url, base_image_url
    FROM videos
    WHERE user_id = uid;
END;
$$
DELIMITER ;

DELIMITER $$
CREATE OR REPLACE PROCEDURE user_login(
    IN uname VARCHAR(20),
    IN pword CHAR(32),
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