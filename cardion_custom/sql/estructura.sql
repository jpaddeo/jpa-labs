DROP TABLE IF EXISTS menues;
CREATE TABLE menues (
  menu_id int(11) NOT NULL AUTO_INCREMENT,
  menu_nombre varchar(100) NOT NULL,
  menu_id_padre int(11) NOT NULL,
  menu_link varchar(100) DEFAULT NULL,
  menu_orden int(11) NOT NULL,
  menu_activo tinyint(1) NOT NULL,
  PRIMARY KEY (menu_id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

DROP TABLE IF EXISTS perfiles;
CREATE TABLE perfiles (
  perfil_id int(11) NOT NULL AUTO_INCREMENT,
  perfil_nombre varchar(50) NOT NULL,
  PRIMARY KEY (perfil_id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

DROP TABLE IF EXISTS perfiles_menues;
CREATE TABLE perfiles_menues (
  perfil_id int(11) NOT NULL,
  menu_id int(11) NOT NULL,
  PRIMARY KEY (perfil_id,menu_id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

DROP TABLE IF EXISTS usuarios;
CREATE TABLE usuarios (
  usuario_id int(11) NOT NULL AUTO_INCREMENT,
  usuario_nombre varchar(100) NOT NULL,
  usuario_login varchar(50) NOT NULL,
  usuario_password varchar(100) NOT NULL,
  usuario_activo tinyint(1) NOT NULL,
  usuario_email varchar(100) NOT NULL,
  perfil_id int(11) NOT NULL,
  PRIMARY KEY (usuario_id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

DROP TABLE IF EXISTS mensajes;
CREATE TABLE mensajes (
  mensaje_id int(11) NOT NULL AUTO_INCREMENT,
  mensaje_fecha datetime NOT NULL,
  mensaje_fecha_envio datetime DEFAULT NULL,
  mensaje_from varchar(100) DEFAULT NULL,
  mensaje_to varchar(3000) DEFAULT NULL,
  mensaje_subject varchar(100) DEFAULT NULL,
  mensaje_body text,
  mensaje_attachments varchar(2000) DEFAULT NULL,
  mensaje_estado varchar(100) DEFAULT NULL,
  mensaje_intentos int(11) DEFAULT NULL,
  mensaje_error varchar(500) DEFAULT NULL,
  mensaje_funcion varchar(100) DEFAULT NULL,
  mensaje_datos varchar(500) DEFAULT NULL,
  PRIMARY KEY (mensaje_id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

DROP TABLE IF EXISTS botones_home;
CREATE TABLE botones_home (
  boton_id int(11) NOT NULL AUTO_INCREMENT,
  boton_funcion varchar(200) NOT NULL,
  boton_orden int(11) NOT NULL,
  boton_refresco int(11) NOT NULL,
  boton_div_name varchar(200) NOT NULL,
  boton_icon_name varchar(200) NOT NULL,
  boton_url_destino varchar(300) NOT NULL,
  boton_descripcion varchar(200) NOT NULL,
  boton_estado varchar(20) NOT NULL,
  boton_color varchar(20) DEFAULT NULL,
  boton_alerta varchar(50) DEFAULT NULL,
  PRIMARY KEY (boton_id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

DROP TABLE IF EXISTS botones_home_perfiles;
CREATE TABLE botones_home_perfiles (
  boton_id int(11) NOT NULL,
  perfil_id int(11) NOT NULL,
  PRIMARY KEY (boton_id,perfil_id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;