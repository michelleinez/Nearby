-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema nearby
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema nearby
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `nearby` DEFAULT CHARACTER SET utf8 ;
USE `nearby` ;

-- -----------------------------------------------------
-- Table `nearby`.`users`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `nearby`.`users` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `email` VARCHAR(45) NULL,
  `password` VARCHAR(45) NULL,
  `updated_at` DATETIME NULL,
  `created_at` DATETIME NULL,
  `clientID` VARCHAR(255) NULL,
  `accessToken` VARCHAR(255) NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
