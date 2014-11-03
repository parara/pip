####################
#
# Crawling Twitter
#
# Copyright (c) 2014, Estu Fardani <estu@di.blankon.in>
# All rights reserved. Released under the MIT license.
# Populate database

CREATE DATABASE testdb;
CREATE USER 'twitapp'@'localhost' IDENTIFIED BY 'tw1t4pp';
GRANT ALL ON testdb.* TO 'twitapp'@'localhost';
USE testdb;

## Create table for admin
CREATE TABLE admin(id INT PRIMARY KEY AUTO_INCREMENT, name VARCHAR(30), username VARCHAR(30) UNIQUE, password VARCHAR(30), email VARCHAR(30)); 
INSERT INTO admin(name, username, password, email) VALUES ('admin','admin','admin','estu@btech.co.id');

## Create table for result of mining
CREATE TABLE Lapor(Id INT PRIMARY KEY AUTO_INCREMENT, Tanggal VARCHAR(25), Name VARCHAR(25), Isi VARCHAR (160), Status VARCHAR(15));

## Create table for twitter api;
CREATE TABLE Twitter(CONSUMER_KEY VARCHAR(50), CONSUMER_SECRET VARCHAR(50), OAUTH_TOKEN VARCHAR(50), OAUTH_TOKEN_SECRET VARCHAR(50), HASTAG VARCHAR(25), app VARCHAR(15));
# Input data default
INSERT INTO Twitter(CONSUMER_KEY, CONSUMER_SECRET, OAUTH_TOKEN, OAUTH_TOKEN_SECRET, HASTAG, app) VALUES ('C5lJE7T2QoQ4kCLmCYRj61SaD','DULtzlHgGfnkO0GNtIpyYBvqW1M4hEfHuWrZ0m5JKnmedj2ljy','79529075-6fLXfXus6xyJN42KJG7vm2Apyqq5xQwanKM68vnMv','dSteIYhb9FGPoeyX3gz6b5zVJT4ny0nlNNhQ31evGn0sr','#JogjaAsat', 'twitter');

## Create table for target fordwarding, it contain email, category, name, id,
CREATE TABLE langganan (id INT PRIMARY KEY AUTO_INCREMENT, name VARCHAR(30), email VARCHAR(30), kategori VARCHAR(15), status VARCHAR(15)); 
INSERT INTO langganan(name, email, kategori, status) VALUES ('admin','andro.medh4@gmail.com','izin','true');

## bkin tabel daftar langganan
CREATE TABLE mailserver (username VARCHAR(30), password VARCHAR(30), server VARCHAR(30), port VARCHAR(10));
INSERT INTO mailserver(username, password, server, port) VALUES ('estu@btech.co.id','bengkalis','smtp.gmail.com','587');