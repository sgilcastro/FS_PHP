DROP DATABASE IF EXISTS optica;
CREATE DATABASE optica CHARACTER SET utf8mb4;
USE optica;

CREATE TABLE proveedor (
	id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(25) NOT NULL,
    calle VARCHAR(50) NOT NULL,
    numero VARCHAR(10) NOT NULL,
    piso VARCHAR(5),
    puerta VARCHAR(5),
    ciudad VARCHAR(25) NOT NULL,
    codigo_postal VARCHAR(5) NOT NULL,
    pais VARCHAR(50) NOT NULL,
    telefono VARCHAR(9) NOT NULL,
    fax VARCHAR(9),
    NIF VARCHAR(10) NOT NULL
);

CREATE TABLE marca (
	id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(25) NOT NULL,
    id_proveedor INT UNSIGNED NOT NULL,
    FOREIGN KEY(id_proveedor) REFERENCES proveedor(id)
);

CREATE TABLE gafa (
	id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    id_marca INT UNSIGNED NOT NULL,
	nombre VARCHAR(25) NOT NULL,
    graduacion_od FLOAT(4,2),
    graduacion_oi FLOAT(4,2),
    tipo ENUM('flotante', 'pasta', 'metálica') NOT NULL,
    color_montura VARCHAR(25),
	color_cristal_od VARCHAR(25),
    color_cristal_oi VARCHAR(25),
    precio FLOAT(6,2) NOT NULL,
    fecha_venta_max DATE,
    FOREIGN KEY(id_marca) REFERENCES marca(id)
);

CREATE TABLE cliente (
    id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(25) NOT NULL,
    direccion VARCHAR(50) NOT NULL,
    telefono VARCHAR(9)  NOT NULL,
    email VARCHAR(50) NOT NULL,
    fecha_registro DATE NOT NULL,
    id_cliente_recomienda INT UNSIGNED,
    FOREIGN KEY(id_cliente_recomienda) REFERENCES cliente(id)

);

CREATE TABLE empleado (
	id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(40) NOT NULL
);

CREATE TABLE venta_de_gafa (
	id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    id_gafa INT UNSIGNED NOT NULL,
	id_cliente INT UNSIGNED NOT NULL,
    id_empleado INT UNSIGNED NOT NULL,
    fecha_venta DATE DEFAULT NOW() NOT NULL,
    FOREIGN KEY(id_gafa) REFERENCES gafa(id),
    FOREIGN KEY(id_cliente) REFERENCES cliente(id),
    FOREIGN KEY(id_empleado) REFERENCES empleado(id)
); 

/* Proveedor */
INSERT INTO proveedor VALUES (1, 'Slatic', 'c/Pepe', '60A', NULL, NULL, 'Barcelona', '08016', 'España','934836765', NULL, 'G38155745');
INSERT INTO proveedor VALUES (2, 'Gafas de verdad', 'c/esa', '34', NULL, NULL, 'Madrid', '80403', 'España','914555555', NULL, 'h44444444');

/* Marca */
INSERT INTO marca VALUES (1,'Ray-Ban',1);
INSERT INTO marca VALUES (2,'Oakley',1);
INSERT INTO marca VALUES (3,'Gucci',2);
/* Gafa */
INSERT INTO gafa VALUES (1, 1, 'Portaite', 9.75, 0.25, 'pasta','Negro', NULL, NULL, 98.99,'2022/12/31');
INSERT INTO gafa (id_marca, nombre, graduacion_od, graduacion_oi, tipo, color_montura, color_cristal_od, color_cristal_oi, precio,fecha_venta_max)
    VALUES (1, 'Gafas de sol Ray-Ban', 2.75, 2.75, 'pasta', 'negro', 'azul', 'azul', 125.00,'2022/06/15');
INSERT INTO gafa (id_marca, nombre, graduacion_od, graduacion_oi, tipo, color_montura, color_cristal_od, color_cristal_oi, precio) 
    VALUES (2, 'Gafas de sol Oakley', 3.00, 3.00, 'flotante', 'verde', 'verde', 'verde', 150.00);
INSERT INTO gafa (id_marca, nombre, graduacion_od, graduacion_oi, tipo, color_montura, color_cristal_od, color_cristal_oi, precio) 
    VALUES (3, 'Gafas de sol Gucci', 2.50, 2.50, 'metálica', 'dorado', 'transparente', 'transparente', 200.00);

/* Cliente */
INSERT INTO cliente VALUES (1, 'Susana Gil', 'c/Escòcia, 60, 1º 1ª', '649826075', 'susanagilcastro@gmail.com', '2021/12/08', NULL);
INSERT INTO cliente VALUES (2, 'Pepe Martínez', 'Rambla Nova, 42, 6º', '932658956', 'ppp@gmail.com', '2022/01/09',1);

/* Empleado */
INSERT INTO empleado VALUES (1, 'Maria García');
INSERT INTO empleado VALUES (2, 'Pepe Robles');

/* Venta de gafa */
INSERT INTO venta_de_gafa (id, id_gafa, id_cliente, id_empleado, fecha_venta) VALUES (1, 1, 2, 1, '2022/11/20');
INSERT INTO venta_de_gafa (id_gafa, id_cliente, id_empleado, fecha_venta)  VALUES (2, 2, 1, '2022/06/10');
INSERT INTO venta_de_gafa (id_gafa, id_cliente, id_empleado, fecha_venta)  VALUES (4, 1, 1, '2022/11/20');
INSERT INTO venta_de_gafa (id_gafa, id_cliente, id_empleado, fecha_venta)  VALUES (2, 1, 2, '2022/11/20');

-- Llista el total de compres d’un client/a.
SELECT COUNT(vg.id) 'Compras realizadas por cliente 2'
FROM venta_de_gafa vg INNER JOIN cliente cl ON vg.id_cliente = cl.id
WHERE cl.id = 2;SELECT COUNT(vg.id) 'Compras realizadas por cliente 2'
FROM venta_de_gafa vg INNER JOIN cliente cl ON vg.id_cliente = cl.id
WHERE cl.id = 2;

-- Llista les diferents ulleres que ha venut un empleat durant un any.
SELECT ga.nombre
FROM gafa ga INNER JOIN venta_de_gafa vdg ON ga.id = vdg.id_gafa
INNER JOIN empleado em ON vdg.id_empleado = em.id
WHERE em.id = 1 AND (vdg.fecha_venta BETWEEN '2022/01/01' AND '2022/12/31');

-- Llista els diferents proveïdors que han subministrat ulleres venudes amb èxit per l'òptica.
SELECT pr.nombre 'Proveedor', ga.nombre 'Gafa', vdg.fecha_venta, ga.fecha_venta_max
FROM proveedor pr INNER JOIN marca ma ON pr.id = ma.id_proveedor
INNER JOIN gafa ga ON ma.id = ga.id_marca
INNER JOIN venta_de_gafa vdg ON ga.id = vdg.id_gafa
WHERE vdg.fecha_venta < ga.fecha_venta_max;