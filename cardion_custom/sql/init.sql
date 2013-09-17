TRUNCATE TABLE `menues`;
INSERT INTO `menues` 
(`menu_id`, `menu_nombre`, `menu_id_padre`, `menu_link`, `menu_orden`, `menu_activo`) 
VALUES 
(1,'Administración',0,'-',0,1),
(2,'Perfiles',1,'/modulos/perfiles/index.php',0,1);

TRUNCATE TABLE `perfiles`;
INSERT INTO `perfiles` 
(`perfil_id`, `perfil_nombre`) 
VALUES 
(1,'Administrador');

TRUNCATE TABLE `usuarios`;
INSERT INTO `usuarios` 
(`usuario_id`, `usuario_nombre`, `usuario_login`, `usuario_password`, `usuario_activo`, `perfil_id`, `usuario_email`) 
VALUES 
(1,'Gustavo Lizarraga','glizarraga','bfd59291e825b5f2bbf1eb76569f8fe7',1,1,'gustavo.lizarraga@gmail.com'),
(2,'Juan Pablo','jppwm','bfd59291e825b5f2bbf1eb76569f8fe7',1,1,'jp.pwm.2011@gmail.com');

COMMIT;
