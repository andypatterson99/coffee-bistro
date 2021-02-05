

CREATE TABLE IF NOT EXISTS `clients` (
  `person_id` INT AUTO_INCREMENT,
  `firstname` VARCHAR(45) NOT NULL,
  `lastname` VARCHAR(45) NOT NULL,
  `email` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`person_id`)
);
  ALTER TABLE clients AUTO_INCREMENT = 1;

CREATE TABLE IF NOT EXISTS `order_list` (
  `client_id` INT AUTO_INCREMENT,
  `client_name` VARCHAR(100) NOT NULL,
  `client_email` VARCHAR(45) NOT NULL,
  `client_order` VARCHAR(100) NOT NULL,
  `client_status` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`client_id`)
  );
  ALTER TABLE order_list AUTO_INCREMENT = 1;

CREATE TABLE IF NOT EXISTS `admin` (
  `admin_id` INT AUTO_INCREMENT,
  `username` VARCHAR(45) NOT NULL,
  `password` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`admin_id`)
  );
  ALTER TABLE admin AUTO_INCREMENT = 1;

INSERT INTO `admin` (`admin_id`,`username`, `password`)
VALUES (1,'admin', 'admin');

CREATE TABLE IF NOT EXISTS `coffee_products` (
  `coffee_product_id` INT AUTO_INCREMENT,
  `coffee_type` VARCHAR(45) NULL,
  `coffee_bean` VARCHAR(45) NULL,
  `coffee_price` VARCHAR(45) NULL,
  PRIMARY KEY (`coffee_product_id`)
  );
  ALTER TABLE coffee_products AUTO_INCREMENT = 1;

  CREATE TABLE IF NOT EXISTS `extra_products` (
  `extra_id` INT AUTO_INCREMENT,
  `spice` VARCHAR(45) NULL,
  `extra_price` INT NULL,
  PRIMARY KEY (`extra_id`)
  );
  ALTER TABLE extra_products AUTO_INCREMENT = 1;

