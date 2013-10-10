DROP TABLE mensajes;
CREATE TABLE IF NOT EXISTS `mensajes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `em_fecha` datetime NOT NULL,
  `em_fecha_envio` datetime DEFAULT NULL,
  `em_from` varchar(100) DEFAULT NULL,
  `em_from_nombre` varchar(100) DEFAULT NULL,
  `em_to` varchar(3000) DEFAULT NULL,
  `em_subject` varchar(100) DEFAULT NULL,
  `em_body` text,
  `em_attachments` varchar(2000) DEFAULT NULL,
  `em_estado` varchar(100) DEFAULT NULL,
  `em_intentos` int(11) DEFAULT '0',
  `em_error` varchar(500) DEFAULT NULL,
  `em_funcion` varchar(100) DEFAULT NULL,
  `em_datos` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `pk_mensajes` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8;
