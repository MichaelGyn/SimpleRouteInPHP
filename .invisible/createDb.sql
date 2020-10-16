create database teste;

use teste;

create table users(id INT NOT NULL AUTO_INCREMENT, user VARCHAR(50) NOT NULL, password VARCHAR(200) NOT NULL, PRIMARY KEY (ID));

INSERT INTO users(user, password) VALUES("michael", "123456");


