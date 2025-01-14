-- USE `tutorialbase`;

DELIMITER $$
CREATE OR REPLACE PROCEDURE get_comments(
    IN vid_id INTEGER UNSIGNED,
    IN offset INTEGER UNSIGNED
)
BEGIN
    SELECT comments.id, username, text
    FROM comments
             INNER JOIN videos
                        ON videos.id = comments.video_id
             INNER JOIN users
                        ON users.id = comments.user_id
    WHERE video_id = vid_id
      AND comments.is_deleted = 0
    ORDER BY 1
    LIMIT offset, 5;
END;
$$
DELIMITER ;

CALL get_comments(1, 0);

DELIMITER $$
CREATE OR REPLACE PROCEDURE create_comment(
    IN usr_id INTEGER UNSIGNED,
    IN vid_id INTEGER UNSIGNED,
    IN comm_text VARCHAR(100)
)
BEGIN
    INSERT INTO comments (user_id, video_id, text, created_at)
    VALUES (usr_id,
            vid_id,
            comm_text,
            NOW());
END;
$$
DELIMITER ;

CALL create_comment(16, 1, 'Hello from another World! 😁');
CALL get_comments(1, 3);

DELIMITER $$
CREATE OR REPLACE PROCEDURE modify_comment(
    IN comm_id INTEGER UNSIGNED,
    IN comm_text VARCHAR(100)
)
BEGIN
    UPDATE comments SET text = comm_text WHERE id = comm_id;
    UPDATE comments SET modified_at = NOW() WHERE id = comm_id;
END;
$$
DELIMITER ;

CALL modify_comment(1, 'The best video I have seen ever!');
CALL get_comments(1, 0);

DELIMITER $$
CREATE OR REPLACE PROCEDURE delete_comment(IN comm_id INTEGER UNSIGNED)
BEGIN
    UPDATE comments SET is_deleted = TRUE WHERE id = comm_id;
END;
$$
DELIMITER ;

CALL delete_comment(2);
CALL get_comments(1, 0);

DELIMITER $$
CREATE OR REPLACE PROCEDURE reset_wish()
BEGIN
    UPDATE users SET wishes = 5 WHERE id != 0;
END;
$$
DELIMITER ;

CALL reset_wish();
SELECT *
FROM users;

DELIMITER $$
CREATE OR REPLACE PROCEDURE get_random_parent_categories(IN quantity TINYINT UNSIGNED)
BEGIN
    SELECT name
    FROM categories
    WHERE parent_id IS NULL
    ORDER BY RAND()
    LIMIT quantity;
END;
$$
DELIMITER ;

CALL get_random_parent_categories(6);

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