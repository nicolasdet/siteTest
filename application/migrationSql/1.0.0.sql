CREATE TABLE `produit` 
( 
	`produit_id` INT NOT NULL AUTO_INCREMENT , 
	`intituler` VARCHAR(255) NOT NULL , 
	`description` TEXT NULL , 
	`prix` INT NOT NULL , 
	PRIMARY KEY (`produit_id`)
) 
ENGINE = InnoDB;


INSERT INTO `produit` (`produit_id`, `intituler`, `description`, `prix`) 
VALUES (NULL, 'Produit gratuit', '10 users included 2 GB of storage Email support Help center access ', '0'), 
(NULL, 'Professionnel', '20 users included 10 GB of storage Priority email support Help center access ', '15'), 
(NULL, 'Enterprise', '30 users included 15 GB of storage Phone and email support Help center access ', '29');
