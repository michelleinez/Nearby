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
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `email` VARCHAR(45) NULL DEFAULT NULL,
  `password` VARCHAR(45) NULL DEFAULT NULL,
  `updated_at` DATETIME NULL DEFAULT NULL,
  `created_at` DATETIME NULL DEFAULT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB
AUTO_INCREMENT = 3
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `nearby`.`table1`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `nearby`.`table1` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `table1col` VARCHAR(45) NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `nearby`.`fb_users`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `nearby`.`fb_users` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `first_name` VARCHAR(45) NULL,
  `last_name` VARCHAR(45) NULL,
  `email` VARCHAR(255) NULL,
  `clientID` VARCHAR(255) NULL,
  `accessToken` VARCHAR(255) NULL,
  `created_at` DATETIME NULL,
  `updated_at` DATETIME NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
