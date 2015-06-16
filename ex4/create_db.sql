-- Crée la base de données
CREATE DATABASE IF NOT EXISTS ch04 DEFAULT CHARACTER SET = "utf8";

USE ch04;

-- Crée la table liste_email
CREATE TABLE IF NOT EXISTS liste_email (
    id BIGINT AUTO_INCREMENT PRIMARY KEY,
    email VARCHAR(100) NOT NULL,
    date_inscription DATETIME NOT NULL
) ENGINE=InnoDB;
