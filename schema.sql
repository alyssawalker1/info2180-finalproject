DROP DATABASE IF EXISTS dolphin_crm;
CREATE DATABASE dolphin_crm;
USE dolphin_crm;

DROP TABLE IF EXISTS `Users`;
CREATE table `Users`(
	`id` int(11) NOT NULL auto_increment,
    `firstname` VARCHAR(15) NOT NULL default '',
	`lastname` VARCHAR(15) NOT NULL default '',
	`password` VARCHAR(30) NOT NULL default '',
	`email` VARCHAR(100) NOT NULL default '',
    `role` VARCHAR(30),
    `created_at` DATETIME NOT NULL default current_timestamp,
    PRIMARY KEY (`id`)
    
)ENGINE=MyISAM AUTO_INCREMENT=4080 DEFAULT CHARSET=utf8mb4;


INSERT INTO `Users` VALUES (1,"fake","name","$2y$10$StDdnrk9VnKYVXk8/08uwuHeDdM8CRK8LLkANZ9U0Kz/r7FB4iUa2","admin@project2.com","employee",current_timestamp);

DROP TABLE IF EXISTS `Contacts`;
CREATE table `Contacts`(
    `id` int(11) NOT NULL auto_increment,
    `title`  VARCHAR(40) NOT NULL default '',
    `firstname` VARCHAR(15) NOT NULL default '',
	`lastname` VARCHAR(15) NOT NULL default '',
    `email` VARCHAR(100) NOT NULL default '',
    `telephone` VARCHAR(15) NOT NULL default '',
    `type` VARCHAR(15) NOT NULL default '',/*whether sales lead or sales support*/
    `assigned_to` INT NOT NULL default 0,
	`created_by`  INT NOT NULL default 0,
	`updated_at`  DATETIME NOT NULL default current_timestamp on update current_timestamp,
	PRIMARY KEY(`id`)

)ENGINE=MyISAM AUTO_INCREMENT=4080 DEFAULT CHARSET=utf8mb4;


DROP TABLE IF EXISTS `Notes`;
CREATE table `Notes`(
    `id` int(11) NOT NULL auto_increment,
    `contact-id` INT NOT NULL default 0,
    `comment` char (200) NOT NULL default '',
    `created_by` INT NOT NULL default 0,
    `created_at` DATETIME NOT NULL default current_timestamp,
    PRIMARY KEY (`id`)

)ENGINE=MyISAM AUTO_INCREMENT=4080 DEFAULT CHARSET=utf8mb4;





    
