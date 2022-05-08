CREATE DATABASE IF NOT EXISTS p33639001;
USE p33639001;
CREATE TABLE sender(
	id			INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
	name		TEXT,
	phone		TEXT,
	address		TEXT,
	district	TEXT,
	amphoe		TEXT,
	province	TEXT,
	zipcode		TEXT
);

CREATE TABLE recipient(
	id			INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
	name		TEXT,
	phone		TEXT,
	address		TEXT,
	district	TEXT,
	amphoe		TEXT,
	province	TEXT,
	zipcode		TEXT,
	cash		DECIMAL(10,2)
);
