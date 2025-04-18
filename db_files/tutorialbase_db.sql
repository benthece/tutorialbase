-- DROP DATABASE IF EXISTS `tutorialbase`;

-- CREATE DATABASE `tutorialbase`;

-- USE `tutorialbase`;

CREATE TABLE `users`
(
    `id`              INTEGER UNSIGNED UNIQUE PRIMARY KEY NOT NULL AUTO_INCREMENT,
    `guid`            CHAR(32)                            NOT NULL UNIQUE DEFAULT '00000000000000000000000000000000',
    `username`        VARCHAR(20) UNIQUE                  NOT NULL,
    `email`           VARCHAR(32) UNIQUE                  NOT NULL,
    `password`        CHAR(32)                            NOT NULL,                     -- SHA3-128
    `profile_pic_url` VARCHAR(50),
    `bg_image_url`    VARCHAR(50),
    `bio`             VARCHAR(100)                        NOT NULL,
    `privilege_id`    TINYINT UNSIGNED                    NOT NULL,
    `wishes`          TINYINT UNSIGNED                    NOT NULL        DEFAULT 5,
    `last_login`      TIMESTAMP                           NOT NULL,
    `pw_modified_at`  TIMESTAMP                           NULL            DEFAULT NULL, -- alapértelmezetten NULL
    `created_at`      TIMESTAMP                                           DEFAULT NOW(),
    `is_deleted`      BOOLEAN                             NOT NULL        DEFAULT 0
);

CREATE TABLE `user_privileges`
(
    `id`   TINYINT UNSIGNED UNIQUE PRIMARY KEY NOT NULL AUTO_INCREMENT,
    `name` VARCHAR(13)
);

CREATE TABLE `videos`
(
    `id`             INTEGER UNSIGNED UNIQUE PRIMARY KEY NOT NULL AUTO_INCREMENT,
    `guid`           CHAR(32) UNIQUE                     NOT NULL DEFAULT RAND(32),
    `title`          VARCHAR(32),
    `description`    VARCHAR(100)                        NOT NULL,
    `url`            VARCHAR(50),
    `base_image_url` VARCHAR(50),
    `is_deleted`     BOOLEAN                             NOT NULL DEFAULT 0,
    `views`          INTEGER UNSIGNED                    NOT NULL DEFAULT 0,
    `user_id`        INTEGER UNSIGNED,
    `uploaded_at`    TIMESTAMP                                    DEFAULT NOW(),
    `modified_at`    TIMESTAMP                           NULL     DEFAULT NULL -- ez is direkt null
);

CREATE TABLE `comments`
(
    `id`          INTEGER UNSIGNED UNIQUE PRIMARY KEY NOT NULL AUTO_INCREMENT,
    `guid`        CHAR(36) UNIQUE                     NOT NULL DEFAULT RAND(32),
    `user_id`     INTEGER UNSIGNED,
    `video_id`    INTEGER UNSIGNED,
    `text`        VARCHAR(100),
    `created_at`  TIMESTAMP                                    DEFAULT NOW(),
    `modified_at` TIMESTAMP                           NULL     DEFAULT NULL, -- alapértelmezetten NULL
    `is_deleted`  BOOLEAN                             NOT NULL DEFAULT 0
);

CREATE TABLE `reactions`
(
    `user_id`    INTEGER UNSIGNED,
    `video_id`   INTEGER UNSIGNED,
    `is_useful`  BOOLEAN NOT NULL, -- direkt nincs alapértelmezett érték
    `is_removed` BOOLEAN NOT NULL DEFAULT 0,
    PRIMARY KEY (`user_id`, `video_id`)
);

CREATE TABLE `categories`
(
    `id`        INTEGER UNSIGNED UNIQUE PRIMARY KEY NOT NULL AUTO_INCREMENT,
    `guid`      CHAR(36) UNIQUE                     NOT NULL DEFAULT RAND(32),
    `parent_id` INTEGER UNSIGNED, -- valszeg csak úgy jó, ha null értéket kap a főkategória
    `name`      VARCHAR(30)
);

CREATE TABLE `wishes`
(
    `id`      INTEGER UNSIGNED UNIQUE PRIMARY KEY NOT NULL AUTO_INCREMENT,
    `guid`    CHAR(36) UNIQUE                     NOT NULL DEFAULT RAND(32),
    `text`    VARCHAR(40),
    `user_id` INTEGER UNSIGNED
);

CREATE TABLE `tags`
(
    `id`   INTEGER UNSIGNED UNIQUE PRIMARY KEY NOT NULL AUTO_INCREMENT,
    `text` VARCHAR(20)
);

CREATE TABLE `watch_history`
(
    `video_id`   INTEGER UNSIGNED,
    `user_id`    INTEGER UNSIGNED,
    `viewed_at`  TIMESTAMP        DEFAULT NOW(),
    `is_deleted` BOOLEAN NOT NULL DEFAULT 0,
    PRIMARY KEY (`video_id`, `user_id`)
);

ALTER TABLE `categories`
    ADD FOREIGN KEY (`parent_id`) REFERENCES `categories` (`id`);

ALTER TABLE `users`
    ADD FOREIGN KEY (`privilege_id`) REFERENCES `user_privileges` (`id`);

ALTER TABLE `videos`
    ADD FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

ALTER TABLE `comments`
    ADD FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

ALTER TABLE `comments`
    ADD FOREIGN KEY (`video_id`) REFERENCES `videos` (`id`);

ALTER TABLE `reactions`
    ADD FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

ALTER TABLE `reactions`
    ADD FOREIGN KEY (`video_id`) REFERENCES `videos` (`id`);

CREATE TABLE `video_category`
(
    `category_id` INTEGER UNSIGNED,
    `video_id`    INTEGER UNSIGNED,
    PRIMARY KEY (`category_id`, `video_id`)
);

ALTER TABLE `video_category`
    ADD FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`);

ALTER TABLE `video_category`
    ADD FOREIGN KEY (`video_id`) REFERENCES `videos` (`id`);

ALTER TABLE `watch_history`
    ADD FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

ALTER TABLE `watch_history`
    ADD FOREIGN KEY (`video_id`) REFERENCES `videos` (`id`);

ALTER TABLE `wishes`
    ADD FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

CREATE TABLE `videos_tags`
(
    `video_id` INTEGER UNSIGNED,
    `tag_id`   INTEGER UNSIGNED,
    PRIMARY KEY (`video_id`, `tag_id`)
);

ALTER TABLE `videos_tags`
    ADD FOREIGN KEY (`video_id`) REFERENCES `videos` (`id`);

ALTER TABLE `videos_tags`
    ADD FOREIGN KEY (`tag_id`) REFERENCES `tags` (`id`);

CREATE TABLE `users_wish_upvote`
(
    `user_id`    INTEGER UNSIGNED,
    `wish_id`    INTEGER UNSIGNED,
    `is_deleted` BOOLEAN NOT NULL DEFAULT 0,
    PRIMARY KEY (`user_id`, `wish_id`)
);

ALTER TABLE `users_wish_upvote`
    ADD FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

ALTER TABLE `users_wish_upvote`
    ADD FOREIGN KEY (`wish_id`) REFERENCES `wishes` (`id`);
