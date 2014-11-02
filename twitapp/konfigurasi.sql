## skrip sql

CREATE DATABASE testdb;
CREATE USER 'twitapp'@'localhost' IDENTIFIED BY 'tw1t4pp';
GRANT ALL ON testdb.* TO 'twitapp'@'localhost';

## Create table for admin
CREATE TABLE admin(id INT PRIMARY KEY AUTO_INCREMENT, name VARCHAR(30), username VARCHAR(30) UNIQUE, password VARCHAR(30), email VARCHAR(30)); 
# Input data default
INSERT INTO admin(name, username, password, email) VALUES ('admin','admin','admin','estu@btech.co.id');

## Create table for result of mining
CREATE TABLE Lapor(Id INT PRIMARY KEY AUTO_INCREMENT, Date VARCHAR(25), Name VARCHAR(25), Isi VARCHAR (160), Status VARCHAR(15));

## Create table for twitter api;
CREATE TABLE Twitter(CONSUMER_KEY VARCHAR(50), CONSUMER_SECRET VARCHAR(50), OAUTH_TOKEN VARCHAR(50), OAUTH_TOKEN_SECRET VARCHAR(50), HASTAG VARCHAR(25), app VARCHAR(15));
# Input data default
INSERT INTO Twitter(CONSUMER_KEY, CONSUMER_SECRET, OAUTH_TOKEN, OAUTH_TOKEN_SECRET, HASTAG, app) VALUES ('C5lJE7T2QoQ4kCLmCYRj61SaD','DULtzlHgGfnkO0GNtIpyYBvqW1M4hEfHuWrZ0m5JKnmedj2ljy','79529075-6fLXfXus6xyJN42KJG7vm2Apyqq5xQwanKM68vnMv','dSteIYhb9FGPoeyX3gz6b5zVJT4ny0nlNNhQ31evGn0sr','#JMR2014', 'twitter');