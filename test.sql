SET FOREIGN_KEY_CHECKS = 0;

DROP TABLE IF EXISTS usuarios;
CREATE TABLE usuarios (
    id INT NOT NULL AUTO_INCREMENT,
    usuario VARCHAR(250) UNIQUE NOT NULL,
    email VARCHAR(250) UNIQUE NOT NULL,
    contrasenia VARCHAR(32) NOT NULL,
    PRIMARY KEY (id)
);

DROP TABLE IF EXISTS productos;
CREATE TABLE productos (
    id INT NOT NULL AUTO_INCREMENT,
    id_usuario INT NOT NULL,
    nombre VARCHAR(150) NOT NULL,
    descripcion VARCHAR(1000) NULL,
    precio DECIMAL(10, 2) NOT NULL,
    imagen_portada VARCHAR(300) NULL,
    visitas INT NOT NULL DEFAULT 0,
    PRIMARY KEY(id),
    FOREIGN KEY (id_usuario) REFERENCES usuarios (id)
);

DROP TABLE IF EXISTS imagenes_productos;
CREATE TABLE imagenes_productos (
    id_producto INT NOT NULL,
    imagen VARCHAR(300) NULL,
    FOREIGN KEY (id_producto) REFERENCES productos (id)
);

TRUNCATE TABLE usuarios;
INSERT INTO usuarios (usuario, email, contrasenia )
VALUES ('admin','admin@bike-sports.com.ar','926e27eecdbc7a18858b3798ba99bddd');

TRUNCATE TABLE productos;
INSERT INTO productos (id_usuario, nombre, descripcion, precio, imagen_portada)
VALUES (1, 'Producto 1','1 Is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum',1450.46, '260x180.gif'),
(1, 'Producto 2','2 Is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum',1600.70, '260x180.gif'),
(1, 'Producto 3','3 Is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum',1888.43, '260x180.gif'),
(1, 'Producto 4','4 Is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum',1900.10, '260x180.gif'),
(1, 'Producto 5','5 Is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum',1780.11, '260x180.gif'),
(1, 'Producto 6','6 Is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum',1980.15, '260x180.gif'),
(1, 'Producto 7','7 Is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum',1099.99, '260x180.gif'),
(1, 'Producto 8','8 Is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum',1520.12, '260x180.gif'),
(1, 'Producto 9','9 Is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum',1987.18, '260x180.gif');
