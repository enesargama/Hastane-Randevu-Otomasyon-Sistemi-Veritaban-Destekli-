CREATE DATABASE IF NOT EXISTS hastane_db;
USE hastane_db;

CREATE TABLE users (
id INT AUTO_INCREMENT PRIMARY KEY,
username VARCHAR(50),
password VARCHAR(50)
);

INSERT INTO users (username,password) VALUES ('admin','1234');

CREATE TABLE randevular (
id INT AUTO_INCREMENT PRIMARY KEY,
hasta_adi VARCHAR(100),
doktor_adi VARCHAR(100),
tarih DATETIME,
durum VARCHAR(50)
);
