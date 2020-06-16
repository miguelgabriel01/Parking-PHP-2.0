DROP DATABASE IF EXISTS Parking;
CREATE DATABASE Parking;

USE Parking;


CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    cpf VARCHAR(255) NOT NULL,
    number VARCHAR(11) NOT NULL,
    password VARCHAR(255) NOT NULL
);

CREATE TABLE vehicles (
    id INT AUTO_INCREMENT PRIMARY KEY,/*id do veiculo*/
    model VARCHAR(50) NOT NULL,/*modelo*/
    color VARCHAR(50) NOT NULL,/*cor*/
    board VARCHAR(50) NOT NULL,/*placa*/
    doors VARCHAR(1) NOT NULL,/*quantidade de portas*/
    launch INT NOT NULL,/*ano de lancamento*/
    description VARCHAR(1000) NOT NULL,/*descriição doveiculo*/
    price INT NOT NULL,/*preco do veiculo*/
    owners VARCHAR(50) NOT NULL/*quantidade de propietario do veiculo*/
);
