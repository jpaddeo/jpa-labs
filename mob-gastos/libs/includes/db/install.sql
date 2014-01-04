DROP TABLE IF EXISTS tipo_gastos;
CREATE TABLE tipo_gastos (
    id INT NOT NULL AUTO_INCREMENT,
    tg_valor VARCHAR(100) NOT NULL,
    tg_descripcion VARCHAR(200) NOT NULL,
    PRIMARY KEY(id)
);

INSERT INTO tipo_gastos (tg_valor, tg_descripcion)
VALUES ('AUTO','Auto'),('VACACIONES','Vacaciones'),('VIATICOS','Viáticos');

DROP TABLE IF EXISTS gastos;
CREATE TABLE gastos (
    id INT NOT NULL AUTO_INCREMENT,
    g_monto DECIMAL(10, 2) NOT NULL,
    g_tipo_gasto INT NOT NULL,
    PRIMARY KEY(id),
    FOREIGN KEY(g_tipo_gasto) REFERENCES tipo_gastos(id)
);