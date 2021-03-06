DROP DATABASE IF EXISTS blog;

CREATE DATABASE IF NOT EXISTS blog;

USE blog;

CREATE TABLE users(
	name_user VARCHAR(16) PRIMARY KEY,
	pass VARCHAR(32) NOT NULL
);

CREATE TABLE post(
	id_post INTEGER UNSIGNED PRIMARY KEY AUTO_INCREMENT,
	fecha DATETIME NOT NULL,
	titulo VARCHAR(60) NOT NULL,
	url VARCHAR(120) NOT NULL,
	user VARCHAR(16) NOT NULL,
	subtitulo VARCHAR(256) NOT NULL,
	cuerpo TEXT NOT NULL,
	FULLTEXT KEY search(titulo,user,subtitulo),
	FOREIGN KEY (user) REFERENCES users(name_user) 
	ON UPDATE CASCADE ON DELETE CASCADE
);