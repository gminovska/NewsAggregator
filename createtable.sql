use surveysez_gm;
-- -----------------------------------------------------
-- Table `surveysez_news`.`categories`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `surveysez_gm`.`categories` ;

CREATE TABLE IF NOT EXISTS `surveysez_gm`.`categories` (
  `CategoryID` INT NOT NULL AUTO_INCREMENT,
  `CategoryName` VARCHAR(255) NOT NULL,
  `CategoryDescription` TEXT NULL,
  PRIMARY KEY (`CategoryID`))
  ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `surveysez_news`.`subcategories`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `surveysez_gm`.`subcategories` ;

CREATE TABLE IF NOT EXISTS `surveysez_gm`.`subcategories` (
  `SubcategoryID` INT NOT NULL AUTO_INCREMENT,
  `SubcategoryName` VARCHAR(255) NOT NULL,
  `SubcategoryDescription` TEXT NULL,
  `SubcategoryRSS` TEXT NULL,
  `CategoryID` INT NOT NULL,
  PRIMARY KEY (`SubcategoryID`),
  INDEX `FK_categories_subcategories_idx` (`CategoryID` ASC),
  CONSTRAINT `FK_categories_subcategories`
  FOREIGN KEY (`CategoryID`)
  REFERENCES `surveysez_gm`.`categories` (`CategoryID`)
    ON DELETE CASCADE
    ON UPDATE NO ACTION)
  ENGINE = InnoDB;
