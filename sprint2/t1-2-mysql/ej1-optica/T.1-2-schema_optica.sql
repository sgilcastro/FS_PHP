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
    nombre VARCHAR(25) NOT NULL
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
    FOREIGN KEY(id_marca) REFERENCES marca(id)
);

CREATE TABLE politica_de_compra (
	id_marca INT UNSIGNED NOT NULL UNIQUE,
    id_proveedor INT UNSIGNED NOT NULL,
    PRIMARY KEY (id_marca, id_proveedor),
    FOREIGN KEY(id_marca) REFERENCES marca(id),
    FOREIGN KEY(id_proveedor) REFERENCES proveedor(id)
);

CREATE TABLE cliente (
    id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(25) NOT NULL,
    direccion VARCHAR(50) NOT NULL,
    telefono VARCHAR(9)  NOT NULL,
    email VARCHAR(50) NOT NULL,
    fecha_registro DATE NOT NULL
);

CREATE TABLE cliente_recomienda_otro_cliente (
    id_cliente_recomienda INT UNSIGNED NOT NULL,
    id_cliente_recomendado INT UNSIGNED NOT NULL,
    PRIMARY KEY (id_cliente_recomienda, id_cliente_recomendado),
    FOREIGN KEY(id_cliente_recomienda) REFERENCES cliente(id),
    FOREIGN KEY(id_cliente_recomendado) REFERENCES cliente(id)
);

CREATE TABLE empleado (
	id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(40) NOT NULL
);

CREATE TABLE tiempo_de_venta (
    id_gafa INT UNSIGNED PRIMARY KEY,
    fecha_venta_max DATE NOT NULL,
    FOREIGN KEY(id_gafa) REFERENCES gafa(id)
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

/* Marca */
INSERT INTO marca VALUES ('1','Unno');

/* Gafa */
INSERT INTO gafa VALUES ('1','1', 'Portaite', 9.75, 0.25, 'pasta','Negro', NULL, NULL, 98.99);
INSERT INTO gafa (id_marca, nombre, graduacion_od, graduacion_oi, tipo, color_montura, color_cristal_od, color_cristal_oi, precio) VALUES (1, 'Gafas de sol Ray-Ban', 2.75, 2.75, 'pasta', 'negro', 'azul', 'azul', 125.00);
INSERT INTO gafa (id_marca, nombre, graduacion_od, graduacion_oi, tipo, color_montura, color_cristal_od, color_cristal_oi, precio) VALUES (2, 'Gafas de sol Oakley', 3.00, 3.00, 'flotante', 'verde', 'verde', 'verde', 150.00);
INSERT INTO gafa (id_marca, nombre, graduacion_od, graduacion_oi, tipo, color_montura, color_cristal_od, color_cristal_oi, precio) VALUES (3, 'Gafas de sol Gucci', 2.50, 2.50, 'metálica', 'dorado', 'transparente', 'transparente', 200.00);

/* Política de compra */
INSERT INTO politica_de_compra VALUES ('1','1');

/* Cliente */
INSERT INTO cliente VALUES (1, 'Susana Gil', 'c/Escòcia, 60, 1º 1ª', '649826075', 'susanagilcastro@gmail.com', '2021/12/08');
INSERT INTO cliente VALUES (2, 'Pepe Martínez', 'Rambla Nova, 42, 6º', '932658956', 'ppp@gmail.com', '2022/01/09');

/* Cliente recomienda a otro cliente */
INSERT INTO cliente_recomienda_otro_cliente VALUES (1, 2);

/* Empleado */
INSERT INTO empleado VALUES (1, 'Maria García');

/* Tiempo de venta */
INSERT INTO tiempo_de_venta VALUES (1, '2022/12/31');

/* Venta de gafa */
INSERT INTO venta_de_gafa VALUES (1, 1, 2, 1, '2022/11/20');
INSERT INTO venta_de_gafa VALUES (2, 3, 3, 1, '2022/11/20');


/* Òptica:
Llista el total de compres d’un client/a.
Llista les diferents ulleres que ha venut un empleat durant un any.
Llista els diferents proveïdors que han subministrat ulleres venudes amb èxit per l'òptica.
*/

SELECT COUNT(vg.id) 'Compras realizadas por cliente 2'
FROM venta_de_gafa vg INNER JOIN cliente cl ON vg.id_cliente = cl.id
WHERE cl.id = 2;

SELECT ga.nombre
FROM gafa ga INNER JOIN venta_de_gafa vdg ON ga.id = vdg.id_gafa
INNER JOIN empleado em ON vdg.id_empleado = em.id
WHERE em.id = 1;
 