<?php

    /*
    
    CREATE TABLE `businessdb`.`users` (`id` INT NOT NULL AUTO_INCREMENT , 
                                       `user` VARCHAR(25) NOT NULL , 
                                       `password` CHAR(255) NOT NULL , 
                                       `reg_date` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP , 
                                       PRIMARY KEY (`id`), UNIQUE (`user`)) ENGINE = InnoDB;

    password (255) = has 255 as the value for future-proof in hashing. Hashing always updates, 
                     and the hashed value may change in the future.

                     Better to have 255 as the value to be safe from the amount of hashed values,
                     MySQL injection, and other cybersecurity attacks.


    INSERT INTO `users` (`id`, `user`, `password`, `reg_date`) 
                VALUES (NULL, 'TestingUsername', 'ananabanananana', 
                        current_timestamp());
    */
    
?>