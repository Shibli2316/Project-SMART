-- SQL Dump

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


-- Table structure for table `monday`

DROP TABLE IF EXISTS `monday`;
CREATE TABLE IF NOT EXISTS `monday` (`sno` INT(2) NOT NULL AUTO_INCREMENT , `stime` TIME NOT NULL , `etime` TIME NOT NULL , `period` INT(2) NOT NULL , `subject` VARCHAR(20) NOT NULL , `teacher` VARCHAR(20) NOT NULL , `location` VARCHAR(5) NOT NULL , `present` BOOLEAN NOT NULL , PRIMARY KEY (`sno`)) ENGINE = InnoDB DEFAULT CHARSET=latin1;


-- Table structure for table `tuesday`

DROP TABLE IF EXISTS `tuesday`;
CREATE TABLE IF NOT EXISTS `tuesday` (`sno` INT(2) NOT NULL AUTO_INCREMENT , `stime` TIME NOT NULL , `etime` TIME NOT NULL , `period` INT(2) NOT NULL , `subject` VARCHAR(20) NOT NULL , `teacher` VARCHAR(20) NOT NULL , `location` VARCHAR(5) NOT NULL , `present` BOOLEAN NOT NULL , PRIMARY KEY (`sno`)) ENGINE = InnoDB DEFAULT CHARSET=latin1;


-- Table structure for table `wednesday`

DROP TABLE IF EXISTS `wednesday`;
CREATE TABLE IF NOT EXISTS `wednesday` (`sno` INT(2) NOT NULL AUTO_INCREMENT , `stime` TIME NOT NULL , `etime` TIME NOT NULL , `period` INT(2) NOT NULL , `subject` VARCHAR(20) NOT NULL , `teacher` VARCHAR(20) NOT NULL , `location` VARCHAR(5) NOT NULL , `present` BOOLEAN NOT NULL , PRIMARY KEY (`sno`)) ENGINE = InnoDB DEFAULT CHARSET=latin1;


-- Table structure for table `thursday`

DROP TABLE IF EXISTS `thursday`;
CREATE TABLE IF NOT EXISTS `thursday` (`sno` INT(2) NOT NULL AUTO_INCREMENT , `stime` TIME NOT NULL , `etime` TIME NOT NULL , `period` INT(2) NOT NULL , `subject` VARCHAR(20) NOT NULL , `teacher` VARCHAR(20) NOT NULL , `location` VARCHAR(5) NOT NULL , `present` BOOLEAN NOT NULL , PRIMARY KEY (`sno`)) ENGINE = InnoDB DEFAULT CHARSET=latin1;


-- Table structure for table `friday`

DROP TABLE IF EXISTS `friday`;
CREATE TABLE IF NOT EXISTS `friday` (`sno` INT(2) NOT NULL AUTO_INCREMENT , `stime` TIME NOT NULL , `etime` TIME NOT NULL , `period` INT(2) NOT NULL , `subject` VARCHAR(20) NOT NULL , `teacher` VARCHAR(20) NOT NULL , `location` VARCHAR(5) NOT NULL , `present` BOOLEAN NOT NULL , PRIMARY KEY (`sno`)) ENGINE = InnoDB DEFAULT CHARSET=latin1;


-- Table structure for table `saturday`

DROP TABLE IF EXISTS `saturday`;
CREATE TABLE IF NOT EXISTS `saturday` (`sno` INT(2) NOT NULL AUTO_INCREMENT , `stime` TIME NOT NULL , `etime` TIME NOT NULL , `period` INT(2) NOT NULL , `subject` VARCHAR(20) NOT NULL , `teacher` VARCHAR(20) NOT NULL , `location` VARCHAR(5) NOT NULL , `present` BOOLEAN NOT NULL , PRIMARY KEY (`sno`)) ENGINE = InnoDB DEFAULT CHARSET=latin1;