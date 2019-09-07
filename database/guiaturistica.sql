DROP SCHEMA IF EXISTS 'guiaturistica' ;

CREATE DATABASE`guiaturistica` DEFAULT CHARACTER SET latin1 ;
USE `guiaturistica` ;


DROP TABLE IF EXISTS `guiaturistica`.`persona` ;

CREATE TABLE IF NOT EXISTS `guiaturistica`.`persona` (
  `idPersona` INT(11) NOT NULL AUTO_INCREMENT,
  `nombreCompleto` VARCHAR(55) NOT NULL,
  `Apellidos` VARCHAR(55) NOT NULL,
  `numeroIdentidad` VARCHAR(55) NOT NULL,
  `telefono` VARCHAR(55) NOT NULL,
  `genero` VARCHAR(45) NOT NULL,
  `direccion` VARCHAR(55) NOT NULL,
  PRIMARY KEY (`idPersona`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `guiaturistica`.`usuario`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `guiaturistica`.`usuario` ;

CREATE TABLE IF NOT EXISTS `guiaturistica`.`usuario` (
  `idUsuario` INT(11) NOT NULL AUTO_INCREMENT,
  `nombreUsuario` VARCHAR(45) NULL DEFAULT NULL,
  `email` VARCHAR(45) NULL DEFAULT NULL,
  `contrasena` VARCHAR(255) NULL DEFAULT NULL,
  `idPersona` INT(11) NOT NULL,
  PRIMARY KEY (`idUsuario`),
  INDEX `FK_Persona_Usuario` (`idPersona` ASC) ,
  CONSTRAINT `FK_Persona_Usuario`
    FOREIGN KEY (`idPersona`)
    REFERENCES `guiaturistica`.`persona` (`idPersona`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `guiaturistica`.`administrador`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `guiaturistica`.`administrador` ;

CREATE TABLE IF NOT EXISTS `guiaturistica`.`administrador` (
  `idAdministrador` INT(11) NOT NULL AUTO_INCREMENT,
  `idUsuario` INT(11) NOT NULL,
  PRIMARY KEY (`idAdministrador`),
  INDEX `FK_Usuario_Administrador` (`idUsuario` ASC) ,
  CONSTRAINT `FK_Usuario_Administrador`
    FOREIGN KEY (`idUsuario`)
    REFERENCES `guiaturistica`.`usuario` (`idUsuario`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `guiaturistica`.`guia`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `guiaturistica`.`guia` ;

CREATE TABLE IF NOT EXISTS `guiaturistica`.`guia` (
  `idGuia` INT(11) NOT NULL AUTO_INCREMENT,
  `idUsuario` INT(11) NOT NULL,
  PRIMARY KEY (`idGuia`),
  INDEX `FK_Usuario_Guia` (`idUsuario` ASC) ,
  CONSTRAINT `FK_Usuario_Guia`
    FOREIGN KEY (`idUsuario`)
    REFERENCES `guiaturistica`.`usuario` (`idUsuario`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `guiaturistica`.`pagos`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `guiaturistica`.`pagos` ;

CREATE TABLE IF NOT EXISTS `guiaturistica`.`pagos` (
  `idPagos` INT(11) NOT NULL AUTO_INCREMENT,
  `impuestoSV` INT(11) NOT NULL,
  `totalPagar` DOUBLE NULL DEFAULT NULL,
  PRIMARY KEY (`idPagos`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `guiaturistica`.`tours`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `guiaturistica`.`tours` ;

CREATE TABLE IF NOT EXISTS `guiaturistica`.`tours` (
  `idTours` INT(11) NOT NULL AUTO_INCREMENT,
  `nombre` VARCHAR(45) NULL DEFAULT NULL,
  `descripcion` VARCHAR(255) NULL DEFAULT NULL,
  `fechaInicio` DATETIME NULL DEFAULT NULL,
  `fechaFin` DATETIME NULL DEFAULT NULL,
  `precio` DOUBLE NULL DEFAULT NULL,
  `cupos` INT(11) NULL DEFAULT NULL,
  `calificacion` INT(11) NULL DEFAULT NULL,
  `idPagos` INT(11) NOT NULL,
  `idGuia` INT(11) NOT NULL,
  PRIMARY KEY (`idTours`),
  INDEX `FK_TOURS_GUIA` (`idGuia` ASC) ,
  INDEX `FK_TOURS_PAGOS` (`idPagos` ASC) ,
  CONSTRAINT `FK_TOURS_GUIA`
    FOREIGN KEY (`idGuia`)
    REFERENCES `guiaturistica`.`guia` (`idGuia`),
  CONSTRAINT `FK_TOURS_PAGOS`
    FOREIGN KEY (`idPagos`)
    REFERENCES `guiaturistica`.`pagos` (`idPagos`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `guiaturistica`.`comentarios`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `guiaturistica`.`comentarios` ;

CREATE TABLE IF NOT EXISTS `guiaturistica`.`comentarios` (
  `idComentarios` INT(11) NOT NULL AUTO_INCREMENT,
  `Comentario` VARCHAR(255) NULL DEFAULT NULL,
  `fechaComentario` DATE NULL DEFAULT NULL,
  `idUsuario` INT(11) NOT NULL,
  `idTours` INT(11) NOT NULL,
  PRIMARY KEY (`idComentarios`),
  INDEX `FK_COMENTARIOS_USUARIO` (`idUsuario` ASC) ,
  INDEX `FK_COMENTARIOS_TOURS` (`idTours` ASC) ,
  CONSTRAINT `FK_COMENTARIOS_TOURS`
    FOREIGN KEY (`idTours`)
    REFERENCES `guiaturistica`.`tours` (`idTours`),
  CONSTRAINT `FK_COMENTARIOS_USUARIO`
    FOREIGN KEY (`idUsuario`)
    REFERENCES `guiaturistica`.`usuario` (`idUsuario`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `guiaturistica`.`turista`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `guiaturistica`.`turista` ;

CREATE TABLE IF NOT EXISTS `guiaturistica`.`turista` (
  `idTurista` INT(11) NOT NULL AUTO_INCREMENT,
  `idUsuario` INT(11) NOT NULL,
  PRIMARY KEY (`idTurista`),
  INDEX `FK_Usuario_Turista` (`idUsuario` ASC) ,
  CONSTRAINT `FK_Usuario_Turista`
    FOREIGN KEY (`idUsuario`)
    REFERENCES `guiaturistica`.`usuario` (`idUsuario`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `guiaturistica`.`toursturista`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `guiaturistica`.`toursturista` ;

CREATE TABLE IF NOT EXISTS `guiaturistica`.`toursturista` (
  `idToursTurista` INT(11) NOT NULL AUTO_INCREMENT,
  `idTours` INT(11) NOT NULL,
  `idTurista` INT(11) NOT NULL,
  PRIMARY KEY (`idToursTurista`),
  INDEX `FK_TOURSTURISTA_TURISTA01` (`idTours` ASC) ,
  INDEX `FK_TOURSTURISTA_TURISTA02` (`idTurista` ASC) ,
  CONSTRAINT `FK_TOURSTURISTA_TURISTA01`
    FOREIGN KEY (`idTours`)
    REFERENCES `guiaturistica`.`tours` (`idTours`),
  CONSTRAINT `FK_TOURSTURISTA_TURISTA02`
    FOREIGN KEY (`idTurista`)
    REFERENCES `guiaturistica`.`turista` (`idTurista`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;
