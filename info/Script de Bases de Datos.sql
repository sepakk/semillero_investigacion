CREATE DATABASE bancohojas;
USE bancohojas;

CREATE TABLE paises (
	cod_pais INT UNSIGNED NOT NULL AUTO_INCREMENT,
	nombre_pais VARCHAR(45) NOT NULL,
	PRIMARY KEY(cod_pais)
);

CREATE TABLE departamentos (
	cod_departamento INT UNSIGNED NOT NULL AUTO_INCREMENT,
	nombre_departamento VARCHAR(45) NOT NULL,
	cod_pais INT UNSIGNED NOT NULL,
	PRIMARY KEY(cod_departamento),
	FOREIGN KEY (cod_pais) REFERENCES paises(cod_pais) ON UPDATE CASCADE ON DELETE CASCADE
);

CREATE TABLE ciudades (
	cod_ciudad INT UNSIGNED NOT NULL AUTO_INCREMENT,
	nombre_ciudad VARCHAR(90) NOT NULL,
	cod_departamento INT UNSIGNED NOT NULL,
	PRIMARY KEY(cod_ciudad),
	FOREIGN KEY (cod_departamento) REFERENCES departamentos(cod_departamento) ON UPDATE CASCADE ON DELETE CASCADE
);

CREATE TABLE informacion_personal (
	documento_identificacion VARCHAR(30) NOT NULL,
	nombre VARCHAR(40) NOT NULL,
	apellidos VARCHAR(40) NOT NULL,
	genero TINYINT(1) NOT NULL,
	nacionalidad INT UNSIGNED NOT NULL,
	residencia INT UNSIGNED NOT NULL,
	libreta_militar TINYINT(1) NOT NULL,
	cod_libreta VARCHAR(15) NOT NULL,
	fecha_naicmiento DATE NOT NULL,
	lugar_nacimiento INT UNSIGNED NOT NULL,
	direccion VARCHAR(100) NOT NULL,
	estado_civil INT(3) NOT NULL,
	PRIMARY KEY(documento_identificacion)
);

CREATE TABLE telefonos(
	numero VARCHAR(20) NOT NULL,
	documento_identificacion VARCHAR(30) NOT NULL,
	PRIMARY key (numero, documento_identificacion),
	FOREIGN KEY (documento_identificacion) REFERENCES informacion_personal(documento_identificacion) ON UPDATE CASCADE ON DELETE CASCADE
);

CREATE TABLE correos(
	correo_nombre VARCHAR(60) NOT NULL,
	documento_identificacion VARCHAR(30) NOT NULL,
	PRIMARY key (correo_nombre, documento_identificacion),
	FOREIGN KEY (documento_identificacion) REFERENCES informacion_personal(documento_identificacion) ON UPDATE CASCADE ON DELETE CASCADE
);

CREATE TABLE perfeccionamiento_actividades (
	cod_perfeccionamiento INT UNSIGNED NOT NULL AUTO_INCREMENT,
	nombre_perfeccionamiento VARCHAR(50) NOT NULL,
	PRIMARY KEY(cod_perfeccionamiento)
);

CREATE TABLE productividades_academicas (
	cod_produccion INT UNSIGNED NOT NULL AUTO_INCREMENT,
	nombre_produccion VARCHAR(50) NOT NULL,
	PRIMARY KEY(cod_produccion)
);

CREATE TABLE produccion_categorias (
	cod_categoria INT UNSIGNED NOT NULL AUTO_INCREMENT,
	nombre_categoria VARCHAR(50) NOT NULL,
	cod_produccion INT UNSIGNED NOT NULL,
	PRIMARY KEY(cod_categoria),
	FOREIGN KEY (cod_produccion) REFERENCES productividades_academicas(cod_produccion) ON UPDATE CASCADE ON DELETE CASCADE
);

CREATE TABLE idiomas (
	cod_idioma INT UNSIGNED NOT NULL AUTO_INCREMENT,
	nombre_idioma VARCHAR(30) NOT NULL,
	PRIMARY KEY(cod_idioma)
);

CREATE TABLE escalafones (
	cod_escalafon INT UNSIGNED NOT NULL AUTO_INCREMENT,
	tipo_escalafon VARCHAR(20) NOT NULL,
	anexo VARCHAR(150) NOT NULL,
	documento_identificacion VARCHAR(30) NOT NULL,
	PRIMARY KEY(cod_escalafon),
	FOREIGN KEY (documento_identificacion) REFERENCES informacion_personal(documento_identificacion) ON UPDATE CASCADE ON DELETE CASCADE
);

CREATE TABLE experiencias_calificadas (
	cod_experiencia_calificada INT UNSIGNED NOT NULL AUTO_INCREMENT,
	nombre_experiencia_calificada VARCHAR(20) NOT NULL,
	PRIMARY KEY(cod_experiencia_calificada)
);

CREATE TABLE formaciones_academicas (
	cod_formacion INT UNSIGNED NOT NULL AUTO_INCREMENT,
	modalidad_academica VARCHAR(30) NOT NULL,
	programa_academico VARCHAR(50) NOT NULL,
	no_semestres INT UNSIGNED NOT NULL,
	graduado TINYINT(1) NOT NULL,
	titulo_obtenido VARCHAR(60) NOT NULL,
	fecha_terminacion DATE NOT NULL,
	no_tarjeta_profesional VARCHAR(30) NOT NULL,
	documento_identificacion VARCHAR(30) NOT NULL,
	PRIMARY KEY(cod_formacion),
	FOREIGN KEY (documento_identificacion) REFERENCES informacion_personal(documento_identificacion) ON UPDATE CASCADE ON DELETE CASCADE
);


CREATE TABLE informacion_actividades(
	cod_perfeccionamiento INT UNSIGNED NOT NULL,
	documento_identificacion VARCHAR(30) NOT NULL,
	entidad VARCHAR(40) NOT NULL,
	fecha_inicio DATE NOT NULL,
	fecha_fin DATE NOT NULL,
	intensidad_horaria DOUBLE NOT NULL,
	puntaje_perfeccionamiento DOUBLE NOT NULL,
	PRIMARY KEY(cod_perfeccionamiento, documento_identificacion),
	FOREIGN KEY (cod_perfeccionamiento) REFERENCES perfeccionamiento_actividades(cod_perfeccionamiento) ON UPDATE CASCADE ON DELETE CASCADE,
	FOREIGN KEY (documento_identificacion) REFERENCES informacion_personal(documento_identificacion) ON UPDATE CASCADE ON DELETE CASCADE
);


CREATE TABLE informacion_categorias (
	cod_info_cat INT UNSIGNED NOT NULL AUTO_INCREMENT,
	cod_categoria INT UNSIGNED NOT NULL,
	documento_identificacion  VARCHAR(30) NOT NULL,
	fecha DATE NOT NULL,
	anexo VARCHAR(200) NOT NULL,
	PRIMARY KEY(cod_info_cat),
	FOREIGN KEY (documento_identificacion) REFERENCES informacion_personal(documento_identificacion) ON UPDATE CASCADE ON DELETE CASCADE,
	FOREIGN KEY (cod_categoria) REFERENCES produccion_categorias(cod_categoria) ON UPDATE CASCADE ON DELETE CASCADE
);

CREATE TABLE informacion_experiencias (
	cod_info_exp INT UNSIGNED NOT NULL AUTO_INCREMENT,
	documento_identificacion VARCHAR(30) NOT NULL,
	cod_experiencia_calificada INT UNSIGNED NOT NULL,
	entidad VARCHAR(40) NOT NULL,
	direccion_entidad VARCHAR(100) NOT NULL,
	cod_ciudad INT UNSIGNED NOT NULL,
	telefono VARCHAR(30) NOT NULL,
	correo_electronico VARCHAR(30) NOT NULL,
	fecha_inicio DATE NOT NULL,
	fecha_retiro DATE NOT NULL,
	PRIMARY KEY(cod_info_exp),
	FOREIGN KEY (documento_identificacion) REFERENCES informacion_personal(documento_identificacion) ON UPDATE CASCADE ON DELETE CASCADE,
	FOREIGN KEY (cod_experiencia_calificada) REFERENCES experiencias_calificadas(cod_experiencia_calificada) ON UPDATE CASCADE ON DELETE CASCADE,
	FOREIGN KEY (cod_ciudad) REFERENCES ciudades(cod_ciudad) ON UPDATE CASCADE ON DELETE CASCADE
);

CREATE TABLE informacion_idioma (
	documento_identificacion VARCHAR(30) NOT NULL,
	cod_idioma INT UNSIGNED NOT NULL,
	habla VARCHAR(10) NOT NULL,
	lectura VARCHAR(10) NOT NULL,
	escritura VARCHAR(10) NOT NULL,
	PRIMARY KEY(documento_identificacion, cod_idioma),
	FOREIGN KEY (documento_identificacion) REFERENCES informacion_personal(documento_identificacion) ON UPDATE CASCADE ON DELETE CASCADE,
	FOREIGN KEY (cod_idioma) REFERENCES idiomas(cod_idioma) ON UPDATE CASCADE ON DELETE CASCADE
);




