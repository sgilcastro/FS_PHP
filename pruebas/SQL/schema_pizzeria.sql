DROP DATABASE IF EXISTS pizzeria;
CREATE DATABASE pizzeria CHARACTER SET utf8mb4;
USE pizzeria;

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

-- mirar esto https://learn.microsoft.com/es-es/sql/t-sql/statements/create-table-transact-sql-identity-property?view=sql-server-ver16

CREATE TABLE pedido (
    id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    fecha_hora DATETIME DEFAULT NOW() NOT NULL
    id_cliente INT UNSIGNED NOT NULL UNIQUE,
    tipo ENUM('local', 'domicilio') NOT NULL,
    FOREIGN KEY(id_cliente) REFERENCES cliente(id)
);

/* Cliente */
INSERT INTO cliente VALUES (1, 'Sergio', 'Michi', 'c/flor, 50, 1º 2ª', '08016','Barcelona', 'Barcelona', '655555555');

/* Pedido */
INSERT INTO pedido VALUES (1, '2022/05/01 01:00', 1, 'local');


