DROP DATABASE IF EXISTS `blog`;
CREATE DATABASE IF NOT EXISTS `blog` CHARACTER SET utf8mb4 COLLATE utf8mb4_hungarian_ci;

USE `blog`;

 DROP TABLE IF EXISTS `felhasznalok`;
CREATE TABLE IF NOT EXISTS `felhasznalok` (
`id` int NOT NULL AUTO_INCREMENT PRIMARY KEY,
`felhasznalonev` varchar(50),
`jelszo` varchar(100),
`email_cim` varchar(50),
`letrehozas_datuma` timestamp DEFAULT CURRENT_TIMESTAMP
);

INSERT INTO `felhasznalok` (`felhasznalonev`, `jelszo`, `email_cim`) VALUES('gipszj','jelszo', 'gipszj@mail.com'); 

  DROP TABLE IF EXISTS `bejegyzesek`;
CREATE TABLE IF NOT EXISTS `bejegyzesek` (
`id` int NOT NULL AUTO_INCREMENT PRIMARY KEY,
`felhasznalo_id` int  NOT NULL,
`cim` varchar(150),
`tartalom` text,
`letrehozas_datuma` timestamp DEFAULT CURRENT_TIMESTAMP,
`modositasas_datuma` timestamp DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
 CONSTRAINT  FOREIGN KEY (`felhasznalo_id`) REFERENCES `felhasznalok` (`id`)
);

INSERT INTO `bejegyzesek` (`felhasznalo_id`, `cim`, `tartalom`) VALUES(1,'bejegyzes cime', 'bejegyzes tartalma'); 

  DROP TABLE IF EXISTS  `hozzaszolasok`;
CREATE TABLE IF NOT EXISTS `hozzaszolasok` (
`id` int NOT NULL AUTO_INCREMENT PRIMARY KEY,
`felhasznalo_id` int  NOT NULL,
`bejegyzes_id` int  NOT NULL,
`tartalom` text,
`letrehozas_datuma` timestamp DEFAULT CURRENT_TIMESTAMP,
 CONSTRAINT  FOREIGN KEY (`felhasznalo_id`) REFERENCES `felhasznalok` (`id`),
 CONSTRAINT  FOREIGN KEY (`bejegyzes_id`) REFERENCES `bejegyzesek` (`id`)
);

INSERT INTO `hozzaszolasok` (`felhasznalo_id`, `bejegyzes_id`, `tartalom`) VALUES(1, 1 , 'hozzászólás tartalma'); 

  DROP TABLE IF EXISTS `cimkek`;
CREATE TABLE IF NOT EXISTS `cimkek` (
`id` int NOT NULL AUTO_INCREMENT PRIMARY KEY,
`nev` varchar(50)
);

INSERT INTO `cimkek` ( `nev`) VALUES('cimke neve'); 

  DROP TABLE IF EXISTS `bejegyzes_cimkek`;
CREATE TABLE IF NOT EXISTS `bejegyzes_cimkek` (
`bejegyzes_id` int  NOT NULL,
`cimke_id` int  NOT NULL,
CONSTRAINT  FOREIGN KEY (`bejegyzes_id`) REFERENCES `bejegyzesek` (`id`),
CONSTRAINT  FOREIGN KEY (`cimke_id`) REFERENCES `cimkek` (`id`)
);

INSERT INTO `bejegyzes_cimkek` ( `bejegyzes_id`, `cimke_id`) VALUES(1,1); 


