ALTER TABLE  `chocobos` CHANGE  `energy`  `hp` INT( 11 ) NOT NULL DEFAULT  '0',
CHANGE  `spirit`  `mp` INT( 11 ) NOT NULL DEFAULT  '0'

UPDATE chocobos SET nb_rides = nb_rides + nb_compets + nb_trainings

ALTER TABLE  `chocobos` DROP  `nb_trainings` ,
DROP  `nb_compets` ;

ALTER TABLE  `chocobos` CHANGE  `nb_rides`  `nb_races` INT( 11 ) NOT NULL DEFAULT  '0'

ALTER TABLE  `circuits` ADD  `script` TEXT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULLIF

ALTER TABLE  `circuits` DROP  `surface`

ALTER TABLE  `circuits` DROP  `race`

ALTER TABLE  `circuits` ADD  `owner` INT UNSIGNED NOT NULL DEFAULT  '0' AFTER  `start`

ALTER TABLE  `results` ADD  `deleted` TINYINT( 1 ) UNSIGNED NOT NULL DEFAULT  '0' AFTER  `rage`

ALTER TABLE  `results` DROP  `breath` ,
DROP  `energy` ,
DROP  `spirit` ,
DROP  `moral` ,
DROP  `xp` ,
DROP  `gils` ,
DROP  `fame` ,
DROP  `rage` ;

ALTER TABLE  `results` CHANGE  `avg_speed`  `course_avg` FLOAT UNSIGNED NOT NULL

ALTER TABLE  `results` ADD  `notified` TINYINT( 1 ) UNSIGNED NOT NULL DEFAULT  '0' AFTER  `course_avg`

ALTER TABLE  `results` ADD  `time` FLOAT UNSIGNED NOT NULL AFTER  `position`

ALTER TABLE  `results` ADD  `name` VARCHAR( 12 ) NOT NULL AFTER  `chocobo_id` ,
ADD  `box` INT UNSIGNED NOT NULL AFTER  `name`

ALTER TABLE  `circuits` DROP  `status` ,
DROP  `finished` ;
