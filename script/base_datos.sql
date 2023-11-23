-- MySQL Workbench Forward Engineering
drop database if exists base_datos;
SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema base_datos
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema base_datos
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `base_datos` DEFAULT CHARACTER SET utf8 ;
USE `base_datos` ;

-- -----------------------------------------------------
-- Table `base_datos`.`Vacuna`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `base_datos`.`Vacuna` (
  `id` INT NOT NULL,
  `nombre` VARCHAR(150) NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `base_datos`.`TipoMascota`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `base_datos`.`TipoMascota` (
  `id` INT NOT NULL auto_increment,
  `nombre` VARCHAR(150) NULL,
  `EdadEquivalenteJoven` INT NULL,
  `EdadEquivalenteAdulto` INT NULL,
  `EdadAdulto` INT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `base_datos`.`Raza`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `base_datos`.`Raza` (
  `id` INT NOT NULL auto_increment,
  `nombre` VARCHAR(150) NULL,
  `TipoMascota_id` INT NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_Raza_TipoMascota_idx` (`TipoMascota_id` ASC) VISIBLE,
  CONSTRAINT `fk_Raza_TipoMascota`
    FOREIGN KEY (`TipoMascota_id`)
    REFERENCES `base_datos`.`TipoMascota` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `base_datos`.`Role`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `base_datos`.`Role` (
  `id` INT NOT NULL,
  `nombre` VARCHAR(150) NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `base_datos`.`User`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `base_datos`.`User` (
  `id` INT NOT NULL auto_increment,
  `nombre` VARCHAR(45) NULL,
  `username` VARCHAR(45) NULL,
  `email` VARCHAR(45) NULL,
  `password` VARCHAR(250) NULL,
  `Role_id` INT NOT NULL,
  `foto` BLOB NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_User_Role1_idx` (`Role_id` ASC) VISIBLE,
  UNIQUE INDEX `username_UNIQUE` (`username` ASC) VISIBLE,
  UNIQUE INDEX `email_UNIQUE` (`email` ASC) VISIBLE,
  CONSTRAINT `fk_User_Role1`
    FOREIGN KEY (`Role_id`)
    REFERENCES `base_datos`.`Role` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `base_datos`.`Mascota`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `base_datos`.`Mascota` (
  `id` INT NOT NULL auto_increment,
  `nombre` VARCHAR(150) NULL,
  `FechaNacimiento` DATETIME NULL,
  `foto` BLOB NULL,
  `User_id` INT NOT NULL,
  `TipoMascota_id` INT NOT NULL,
  `Raza_id` INT NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_Mascota_User1_idx` (`User_id` ASC) VISIBLE,
  INDEX `fk_Mascota_TipoMascota1_idx` (`TipoMascota_id` ASC) VISIBLE,
  INDEX `fk_Mascota_Raza1_idx` (`Raza_id` ASC) VISIBLE,
  CONSTRAINT `fk_Mascota_User1`
    FOREIGN KEY (`User_id`)
    REFERENCES `base_datos`.`User` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Mascota_TipoMascota1`
    FOREIGN KEY (`TipoMascota_id`)
    REFERENCES `base_datos`.`TipoMascota` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Mascota_Raza1`
    FOREIGN KEY (`Raza_id`)
    REFERENCES `base_datos`.`Raza` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `base_datos`.`ControlVacuna`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `base_datos`.`ControlVacuna` (
  `Mascota_id` INT NOT NULL,
  `Vacuna_id` INT NOT NULL,
  `fecha` DATETIME NULL,
  PRIMARY KEY (`Mascota_id`, `Vacuna_id`),
  INDEX `fk_Mascota_has_Vacuna_Vacuna1_idx` (`Vacuna_id` ASC) VISIBLE,
  INDEX `fk_Mascota_has_Vacuna_Mascota1_idx` (`Mascota_id` ASC) VISIBLE,
  CONSTRAINT `fk_Mascota_has_Vacuna_Mascota1`
    FOREIGN KEY (`Mascota_id`)
    REFERENCES `base_datos`.`Mascota` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Mascota_has_Vacuna_Vacuna1`
    FOREIGN KEY (`Vacuna_id`)
    REFERENCES `base_datos`.`Vacuna` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;

insert into Role value ("1","user"),("2", "Admin");
insert into TipoMascota (nombre) value ("Otro"),("perro"),("gato"),("raton"),("pez"),("Hamster");
ALTER TABLE Raza MODIFY TipoMascota_id INT NOT NULL DEFAULT 0;
insert into Raza (nombre) value ("Otro"),("Grande"),("Mediano"),("Pequeño");

-- SHOW TABLES LIKE 'roles';
-- SELECT * from User;
-- select * from TipoMascota;
-- select * from Raza;
-- select * from Role;
-- select * from Mascota;

SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
