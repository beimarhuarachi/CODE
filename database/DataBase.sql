CREATE TABLE Usuario (
	usuarioID int AUTO_INCREMENT,
	nombre varchar(255),
	apellidos varchar(255),
	nombreUsuario varchar(255),
	password varchar(255) NOT NULL,

	PRIMARY KEY (usuarioID, nombreUsuario)
);
-----------------------------------------------------------------------
CREATE TABLE Ejercicio (
	ejercicioID int AUTO_INCREMENT,
	descripcion varchar (255),
	recorridoBFS varchar(255),
	recorridoDFS varchar(255),
	tipoEjercicio int,

	PRIMARY KEY (ejercicioID),
	FOREIGN KEY (tipoEjercicio) REFERENCES TipoEjercicio(tipoEjercicioID)
);

-----------------------------------------------------------------------

CREATE TABLE TipoEjercicio (
	tipoEjercicioID int,
	tipo varchar(255),

	PRIMARY KEY (tipoEjercicioID)
);
-----------------------------------------------------------------------

CREATE TABLE Conversacion (
	conversacionID int AUTO_INCREMENT,
	idEstudiante int NOT NULL,
	idProfesor int NOT NULL,
	mensaje varchar(255),
	fechaMensaje TIMESTAMP,

	PRIMARY KEY (conversacionID),
	FOREIGN KEY (idProfesor) REFERENCES Usuario (usuarioID),
	FOREIGN KEY (idEstudiante) REFERENCES Usuario (usuarioID)

);

-----------------------------------------------------------------------

CREATE TABLE Calificacion (
	calificacionID int,
	idEstudiante int,
	nota int DEFAULT 0,
	idEjercicio int,
	idSolucion int,

	PRIMARY KEY (calificacionID),
	FOREIGN KEY (idEstudiante) REFERENCES Usuario (usuarioID),
	FOREIGN KEY (idEjercicio) REFERENCES Ejercicio (ejercicioID),
	FOREIGN KEY (idSolucion) REFERENCES Solucion (solucionID)

);
-----------------------------------------------------------------------

CREATE TABLE Solucion (
	solucionID int,
	idEjercicio int,
	idEstudiante int,
	recorridoDFS varchar(255),
	recorridoBFS varchar(255),

	PRIMARY KEY (solucionID),
	FOREIGN KEY (idEjercicio) REFERENCES Ejercicio (ejercicioID),
	FOREIGN KEY (idEstudiante) REFERENCES Usuario (usuarioID)
);
-----------------------------------------------------------------------