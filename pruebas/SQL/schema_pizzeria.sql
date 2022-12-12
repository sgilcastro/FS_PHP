DROP DATABASE IF EXISTS pizzeria;
CREATE DATABASE pizzeria CHARACTER SET utf8mb4;
USE pizzeria;

CREATE TABLE cliente (
	id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(25) NOT NULL,
    apellidos VARCHAR(50) NOT NULL,
    direccion VARCHAR(50) NOT NULL,
    codigo_postal VARCHAR(5) NOT NULL,
    localidad VARCHAR(25) NOT NULL,
    provincia VARCHAR(25) NOT NULL,
    telefono INT(9) UNIQUE 
);

-- mirar esto https://learn.microsoft.com/es-es/sql/t-sql/statements/create-table-transact-sql-identity-property?view=sql-server-ver16

CREATE TABLE pedido (
    id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    fecha_hora DATETIME DEFAULT NOW() NOT NULL
    id_cliente INT UNSIGNED NOT NULL UNIQUE,
    tipo ENUM('local', 'domicilio') NOT NULL,
    FOREIGN KEY(id_cliente) REFERENCES cliente(id)
);

CREATE TABLE producto (
    id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(25) NOT NULL,
    descripcion VARCHAR(225) NOT NULL,
    img VARCHAR(225) DEFAULT 'imagen_no_disponible.jpg' NOT NULL,
    precio FLOAT(6,2) NOT NULL,
    tipo ENUM('pizza', 'hamburguesa', 'bebida') NOT NULL
);

CREATE TABLE detalle_pedido (
    id_pedido INT UNSIGNED NOT NULL,
    id_producto INT UNSIGNED NOT NULL,
    --unidades_producto INT UNSIGNED DEFAULT 1 NOT NULL,
    PRIMARY KEY (id_pedido, id_producto),
    FOREIGN KEY(id_pedido) REFERENCES pedido(id),
    FOREIGN KEY(id_producto) REFERENCES producto(id)
);

CREATE TABLE categoria (
    id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(25) NOT NULL
);

CREATE TABLE categoria_producto_pizza (
    id_pizza INT UNSIGNED PRIMARY KEY,
    id_categoria INT UNSIGNED NOT NULL,
    FOREIGN KEY(id_pizza) REFERENCES producto(id),
    FOREIGN KEY(id_categoria) REFERENCES categoria(id)
);

CREATE TABLE tienda (
    id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    direccion VARCHAR(50) NOT NULL,
    codigo_postal VARCHAR(5) NOT NULL,
    localidad VARCHAR(25) NOT NULL,
    provincia VARCHAR(25) NOT NULL
);

CREATE TABLE empleado (
    id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(25) NOT NULL,
    apellidos VARCHAR(50) NOT NULL,
    NIF VARCHAR(10) NOT NULL,
    telefono VARCHAR(9), 
    puesto ENUM('repartidor', 'cocinero') NOT NULL,
    id_tienda INT UNSIGNED NOT NULL
);

CREATE TABLE detalle_empleados_tienda (
    id_tienda INT UNSIGNED PRIMARY KEY,
    id_empleado INT UNSIGNED NOT NULL,
    FOREIGN KEY(id_tienda) REFERENCES tienda(id),
    FOREIGN KEY(id_empleado) REFERENCES empleado(id)
);

CREATE TABLE pedido_a_domicilio (
    id_pedido INT UNSIGNED PRIMARY KEY,
    id_empleado INT UNSIGNED NOT NULL,
    fecha_hora_entrega DATETIME DEFAULT NOW() NOT NULL
    FOREIGN KEY(id_pedido) REFERENCES pedido(id),
    FOREIGN KEY(id_empleado) REFERENCES empleado(id)
);

/* Cliente */
INSERT INTO cliente VALUES (1, 'Sergio', 'Michi', 'c/flor, 50, 1º 2ª', '08016','Barcelona', 'Barcelona', '655555555');
INSERT INTO cliente (nombre, apellidos, direccion, codigo_postal, localidad, provincia, telefono) VALUES ('Jose', 'García', 'Calle Falsa 123', '28012', 'Madrid', 'Madrid', '987454321');
INSERT INTO cliente (nombre, apellidos, direccion, codigo_postal, localidad, provincia, telefono) VALUES ('María', 'López', 'Calle del Sol 456', '28023', 'Madrid', 'Madrid', '666766866');
INSERT INTO cliente (nombre, apellidos, direccion, codigo_postal, localidad, provincia) VALUES ('Juan', 'Pérez', 'Calle de la Luna 789', '28005', 'Madrid', 'Madrid');
INSERT INTO cliente (nombre, apellidos, direccion, codigo_postal, localidad, provincia, telefono) VALUES ('Ana', 'Martínez', 'Calle del Sol 456', '28023', 'Madrid', 'Madrid', '777677577');
INSERT INTO cliente (nombre, apellidos, direccion, codigo_postal, localidad, provincia, telefono) VALUES ('Luisa', 'Díaz', 'Calle del Sol 456', '28023', 'Madrid', 'Madrid', '888988888');
INSERT INTO cliente (nombre, apellidos, direccion, codigo_postal, localidad, provincia, telefono) VALUES ('Juan', 'Pérez', 'Calle Mayor 123', '08001', 'Barcelona', 'Barcelona', '123456789');
INSERT INTO cliente (nombre, apellidos, direccion, codigo_postal, localidad, provincia, telefono) VALUES ('Maria', 'Rodriguez', 'Plaza Cataluña 4', '08002', 'Barcelona', 'Barcelona', '987654321');
INSERT INTO cliente (nombre, apellidos, direccion, codigo_postal, localidad, provincia, telefono) VALUES ('Antonio', 'Garcia', 'Paseo Marítimo 22', '08003', 'Barcelona', 'Barcelona', '123789456');
INSERT INTO cliente (nombre, apellidos, direccion, codigo_postal, localidad, provincia, telefono) VALUES ('Sara', 'Sanchez', 'Calle Aragón 87', '08004', 'Barcelona', 'Barcelona', '456789123');
INSERT INTO cliente (nombre, apellidos, direccion, codigo_postal, localidad, provincia, telefono) VALUES ('Pablo', 'Martinez', 'Calle Gran Vía 123', '08005', 'Barcelona', 'Barcelona', '789456123');
INSERT INTO cliente (nombre, apellidos, direccion, codigo_postal, localidad, provincia, telefono) VALUES ('Laura', 'Gonzalez', 'Calle Valencia 65', '08006', 'Barcelona', 'Barcelona', '456123789');
INSERT INTO cliente (nombre, apellidos, direccion, codigo_postal, localidad, provincia, telefono) VALUES ('Mario', 'Santos', 'Calle Mallorca 98', '08007', 'Barcelona', 'Barcelona', '789123654');

/* Pedido */
INSERT INTO pedido (id, fecha_hora, id_cliente, tipo) VALUES (1, '2022/05/01 01:00', 1, 'local');
INSERT INTO pedido (fecha_hora, id_cliente, tipo) VALUES ('2022-12-12 12:00:00', 1, 'local');
INSERT INTO pedido (fecha_hora, id_cliente, tipo) VALUES ('2022-12-12 12:30:00', 2, 'domicilio');
INSERT INTO pedido (fecha_hora, id_cliente, tipo) VALUES ('2022-12-12 13:00:00', 3, 'local');
INSERT INTO pedido (fecha_hora, id_cliente, tipo) VALUES ('2022-12-12 13:30:00', 4, 'domicilio');

/* Producto */
CREATE TABLE producto (
    id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(25) NOT NULL,
    descripcion VARCHAR(225) NOT NULL,
    img VARCHAR(225) DEFAULT 'imagen_no_disponible.jpg' NOT NULL,
    precio FLOAT(6,2) NOT NULL,
    tipo ENUM('pizza', 'hamburguesa', 'bebida') NOT NULL
);
INSERT INTO producto VALUES (1, 'Pizza margarita', 'Pizza con queso y tomate', '000001.jpg', '9', 'pizza');
INSERT INTO producto (nombre, descripcion, img, precio, tipo) VALUES ('Hamburguesa clásica', 'Hamburguesa con carne, queso, lechuga, tomate y cebolla', 'hamburguesa_clasica.jpg', 8.50, 'hamburguesa');
INSERT INTO producto (nombre, descripcion, img, precio, tipo) VALUES ('Coca-Cola', 'Bebida gaseosa de cola', 'cocacola.jpg', 2.00, 'bebida');
INSERT INTO producto (nombre, descripcion, img, precio, tipo) VALUES ('Pizza pepperoni', 'Pizza con pepperoni y queso', 'pizza_pepperoni.jpg', 11.50, 'pizza');
INSERT INTO producto (nombre, descripcion, img, precio, tipo) VALUES ('Hamburguesa de pollo', 'Hamburguesa con carne de pollo, queso, lechuga, tomate y cebolla', 'hamburguesa_pollo.jpg', 9.00, 'hamburguesa');
INSERT INTO producto (nombre, descripcion, img, precio, tipo) VALUES ('Agua mineral', 'Bebida sin gas', 'agua_mineral.jpg', 1.50, 'bebida');
INSERT INTO producto (nombre, descripcion, img, precio, tipo) VALUES ('Pizza de champiñones', 'Pizza con champiñones y queso', 'pizza_champinones.jpg', 12.00, 'pizza');
INSERT INTO producto (nombre, descripcion, img, precio, tipo) VALUES ('Pepsi', 'Bebida gaseosa de cola', 'pepsi.jpg', 2.00, 'bebida');
INSERT INTO producto (nombre, descripcion, img, precio, tipo) VALUES ('Pizza de pepperoni y champiñones', 'Pizza con pepperoni, champiñones y queso', 'pizza_pepperoni_champinones.jpg', 14.00, 'pizza');
INSERT INTO producto (nombre, descripcion, img, precio, tipo) VALUES ('Hamburguesa vegetariana', 'Hamburguesa con verduras y queso', 'hamburguesa_vegetariana.jpg', 7.50, 'hamburguesa');
INSERT INTO producto (nombre, descripcion, img, precio, tipo) VALUES ('Agua con gas', 'Bebida con gas', 'agua_con_gas.jpg', 1.75, 'bebida');


/* Detalle pedido */

INSERT INTO detalle_pedido VALUES (1, 5);
INSERT INTO detalle_pedido (id_pedido, id_producto) VALUES (1, 5);
INSERT INTO detalle_pedido (id_pedido, id_producto) VALUES (1, 5);
INSERT INTO detalle_pedido (id_pedido, id_producto) VALUES (1, 7);
INSERT INTO detalle_pedido (id_pedido, id_producto) VALUES (1, 3);
INSERT INTO detalle_pedido (id_pedido, id_producto) VALUES (1, 6);
INSERT INTO detalle_pedido (id_pedido, id_producto) VALUES (1, 2);
INSERT INTO detalle_pedido (id_pedido, id_producto) VALUES (1, 8);
INSERT INTO detalle_pedido (id_pedido, id_producto) VALUES (1, 1);
INSERT INTO detalle_pedido (id_pedido, id_producto) VALUES (1, 10);
INSERT INTO detalle_pedido (id_pedido, id_producto) VALUES (1, 9);
INSERT INTO detalle_pedido (id_pedido, id_producto) VALUES (1, 4);
INSERT INTO detalle_pedido (id_pedido, id_producto) VALUES (2, 7);
INSERT INTO detalle_pedido (id_pedido, id_producto) VALUES (2, 5);
INSERT INTO detalle_pedido (id_pedido, id_producto) VALUES (2, 7);
INSERT INTO detalle_pedido (id_pedido, id_producto) VALUES (2, 3);
INSERT INTO detalle_pedido (id_pedido, id_producto) VALUES (2, 6);
INSERT INTO detalle_pedido (id_pedido, id_producto) VALUES (2, 2);
INSERT INTO detalle_pedido (id_pedido, id_producto) VALUES (3, 3);
INSERT INTO detalle_pedido (id_pedido, id_producto) VALUES (3, 5);
INSERT INTO detalle_pedido (id_pedido, id_producto) VALUES (3, 7);
INSERT INTO detalle_pedido (id_pedido, id_producto) VALUES (3, 3);
INSERT INTO detalle_pedido (id_pedido, id_producto) VALUES (3, 6);
INSERT INTO detalle_pedido (id_pedido, id_producto) VALUES (4, 6);
INSERT INTO detalle_pedido (id_pedido, id_producto) VALUES (4, 5);
INSERT INTO detalle_pedido (id_pedido, id_producto) VALUES (4, 7);
INSERT INTO detalle_pedido (id_pedido, id_producto) VALUES (4, 3);
INSERT INTO detalle_pedido (id_pedido, id_producto) VALUES (4, 6);
INSERT INTO detalle_pedido (id_pedido, id_producto) VALUES (4, 5);
INSERT INTO detalle_pedido (id_pedido, id_producto) VALUES (4, 7);
INSERT INTO detalle_pedido (id_pedido, id_producto) VALUES (5, 2);
INSERT INTO detalle_pedido (id_pedido, id_producto) VALUES (5, 5);
INSERT INTO detalle_pedido (id_pedido, id_producto) VALUES (5, 7);

/* Categoria */
INSERT INTO categoria VALUES (1,'Pizzas especiales');
INSERT INTO categoria (nombre) VALUES ('Pizzas clásicas');
INSERT INTO categoria (nombre) VALUES ('Pizzas vegetarianas');

CREATE TABLE categoria_producto_pizza (
    id_pizza INT UNSIGNED PRIMARY KEY,
    id_categoria INT UNSIGNED NOT NULL,
    FOREIGN KEY(id_pizza) REFERENCES producto(id),
    FOREIGN KEY(id_categoria) REFERENCES categoria(id)
);

CREATE TABLE tienda (
    id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    direccion VARCHAR(50) NOT NULL,
    codigo_postal VARCHAR(5) NOT NULL,
    localidad VARCHAR(25) NOT NULL,
    provincia VARCHAR(25) NOT NULL
);

CREATE TABLE empleado (
    id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(25) NOT NULL,
    apellidos VARCHAR(50) NOT NULL,
    NIF VARCHAR(10) NOT NULL,
    telefono VARCHAR(9), 
    puesto ENUM('repartidor', 'cocinero') NOT NULL,
    id_tienda INT UNSIGNED NOT NULL
);

CREATE TABLE detalle_empleados_tienda (
    id_tienda INT UNSIGNED PRIMARY KEY,
    id_empleado INT UNSIGNED NOT NULL,
    FOREIGN KEY(id_tienda) REFERENCES tienda(id),
    FOREIGN KEY(id_empleado) REFERENCES empleado(id)
);

CREATE TABLE pedido_a_domicilio (
    id_pedido INT UNSIGNED PRIMARY KEY,
    id_empleado INT UNSIGNED NOT NULL,
    fecha_hora_entrega DATETIME DEFAULT NOW() NOT NULL
    FOREIGN KEY(id_pedido) REFERENCES pedido(id),
    FOREIGN KEY(id_empleado) REFERENCES empleado(id)
);






