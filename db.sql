CREATE DATABASE blogpp;
USE blogpp;

CREATE TABLE Posts (
id INT AUTO_INCREMENT NOT NULL PRIMARY KEY,
content VARCHAR(1000) NOT NULL
)


INSERT INTO Posts (content) VALUES ("Hello world!");