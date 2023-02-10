CREATE DATABASE products_api;

CREATE TABLE IF NOT EXISTS products_api(
    id INT NOT NULL AUTO_INCREMENT,
    name VARCHAR (128) NOT NULL,
    size INT NOT NULL DEFAULT 0,
    is_available BOOLEAN NOT NULL DEFAULT FALSE,
    PRIMARY KEY (id)
);