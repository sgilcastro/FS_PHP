DROP DATABASE IF EXISTS pizzeria;
CREATE DATABASE pizzeria CHARACTER SET utf8mb4;
USE pizzeria;

CREATE TABLE pedido (
    id VARCHAR(20) DEFAULT REPLACE('mi casa',' ',''),
    -- REPLACE(replace(replace(NOW(),'-',''),' ','-'),':','')
    -- 1968-10-23 12:45:37.1237 
    -- REPLACE(input_string, substring, new_substring);
    -- REPLACE(REPLACE(phone, '(', ''), ')', '') 
    fecha TIMESTAMP DEFAULT NOW(),
    id_cliente INT UNSIGNED NOT NULL UNIQUE,
    tipo ENUM('local', 'domicilio') NOT NULL,
    PRIMARY KEY (id),
    FOREIGN KEY(id_cliente) REFERENCES cliente(id)
);

CREATE TABLE cliente (
	id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(25) NOT NULL,
    apellido VARCHAR(50) NOT NULL,
    direccion VARCHAR(50) NOT NULL,
    codigo_postal VARCHAR(5) NOT NULL,
    localidad VARCHAR(25) NOT NULL,
    provincia VARCHAR(25) NOT NULL,
    telefono VARCHAR(9)
);

/* Cliente */
INSERT INTO cliente VALUES (id, 'Sergio', 'Michi', 'c/flor, 50, 1º 2ª', '08016','Barcelona', 'Barcelona', '655555555');

/* Pedido */
INSERT INTO pedido VALUES (id, fecha, 1, 'local');


