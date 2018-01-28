CREATE TABLE `user` 
( 
	`user_id` INT NOT NULL AUTO_INCREMENT ,
	 `login` VARCHAR(255) NOT NULL , 
	 `password` VARCHAR(255) NOT NULL , 
	 PRIMARY KEY (`user_id`)
) 
ENGINE = InnoDB;



CREATE TABLE `commandes` 
( 
	`command_id` INT NOT NULL AUTO_INCREMENT , 
	`user_id` INT NOT NULL , 
	`produit_id` INT NOT NULL , 
	PRIMARY KEY (`command_id`)
)
ENGINE = InnoDB;

ALTER TABLE `commandes` ADD INDEX(` user_id `);
ALTER TABLE `commandes` ADD INDEX(` produit_id `);


ALTER TABLE `commandes` ADD FOREIGN KEY (`user_id`) 
REFERENCES `user`(`user_id`) 
ON DELETE NO ACTION 
ON UPDATE NO ACTION;

ALTER TABLE `commandes` ADD FOREIGN KEY (`produit_id`) 
REFERENCES `produit`(`produit_id`) 
ON DELETE NO ACTION 
ON UPDATE NO ACTION;