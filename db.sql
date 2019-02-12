CREATE DATABASE db_crud;

CREATE TABLE product(
product_code varchar(15) PRIMARY KEY,
product_name VARCHAR(100),
product_price INT(11)
)ENGINE=INNODB;