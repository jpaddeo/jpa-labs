DROP TABLE IF EXISTS mob_barrios;
CREATE TABLE mob_barrios (
    id INT NOT NULL AUTO_INCREMENT,
    nombre VARCHAR(100) NOT NULL,
    comuna VARCHAR(100) NOT NULL,
    PRIMARY KEY(id)
);
INSERT INTO mob_barrios (comuna, nombre) VALUES
(1, 'Constitución'),(1, 'Montserrat'),(1, 'Retiro'),(1, 'San Nicolás'),(1, 'San Telmo'),(2, 'Recoleta'),(3, 'Balvanera'),
(3, 'San Cristóbal'),(4, 'Barracas'),(4, 'Boca'),(4, 'Nueva Pompeya'),(4, 'Parque Patricios'),(5, 'Almagro'),
(5, 'Boedo'),(6, 'Caballito'),(7, 'Flores'),(7, 'Parque Chacabuco'),(8, 'Villa Lugano'),(8, 'Villa Riachuelo'),
(8, 'Villa Soldati'),(9, 'Liniers'),(9, 'Mataderos'),(9, 'Parque Avellaneda'),(10, 'Floresta'),(10, 'Montecastro'),
(10, 'Vélez Sársfield'),(10, 'Versalles'),(10, 'Villa Luro'),(10, 'Villa Real'),(11, 'Villa Del Parque'),(11, 'Villa Devoto'),
(11, 'Villa Gral. Mitre'),(11, 'Villa Sta. Rita'),(12, 'Coghlan'),(12, 'Saavedra'),(12, 'Villa Pueyrredón'),(12, 'Villa Urquiza'),
(13, 'Belgrano'),(13, 'Colegiales'),(13, 'Núñez'),(14, 'Palermo'),(15, 'Agronomía'),(15, 'Chacarita'),(15, 'Parque Chas'),
(15, 'Paternal'),(15, 'Villa Crespo'),(15, 'Villa Ortúzar');


DROP TABLE IF EXISTS mob_comidas;
CREATE TABLE mob_comidas (
    id INT NOT NULL AUTO_INCREMENT,
    nombre VARCHAR(100) NOT NULL,
    imagen VARCHAR(200) NOT NULL,
    PRIMARY KEY(id)
);
INSERT INTO mob_comidas (nombre, imagen)
VALUES ('Sushi', 'sushis.jpg'),('Pizza', 'pizza.jpg'),('Hamburguesa', 'burger.jpg');

DROP TABLE IF EXISTS mob_restaurantes;
CREATE TABLE mob_restaurantes (
    id INT NOT NULL AUTO_INCREMENT,
    nombre VARCHAR(100) NOT NULL,
    descripcion VARCHAR(1000) NOT NULL,
    imagen VARCHAR(200) NOT NULL,
    coordx VARCHAR(50) NULL,
    coordy VARCHAR(50) NULL,
    telefono VARCHAR(30) NULL,
    mail VARCHAR(200) NULL,
    cant_estrellas INT NULL,
    PRIMARY KEY (id)
);
INSERT INTO mob_restaurantes (nombre, imagen, cant_estrellas)
VALUES ('Puerto Calvo','restau01_mini.jpg', 2),('Telmo','restau02_mini.jpg', 4),('Nikos','restau03_mini.jpg', 1);

DROP TABLE IF EXISTS mob_restaurantes_comidas;
CREATE TABLE mob_restaurantes_comidas (
    id_restaurant INT NOT NULL,
    id_comida INT NOT NULL,
    PRIMARY KEY (id_restaurant, id_comida)
);
INSERT INTO mob_restaurantes_comidas (id_restaurant, id_comida)
VALUES (1, 2), (1, 3), (2, 1), (2, 2), (2, 3), (3, 3);


DROP TABLE IF EXISTS mob_barrios_restaurantes;
CREATE TABLE mob_barrios_restaurantes (
    id_barrio INT NOT NULL,
    id_restaurant INT NOT NULL,
    PRIMARY KEY (id_barrio, id_restaurant)
);
INSERT INTO mob_barrios_restaurantes (id_barrio, id_restaurant)
VALUES (5, 1), (5, 2), (5, 3);