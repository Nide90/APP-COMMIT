CREATE TABLE IF NOT EXISTS Trabajadores(
    TrabajadorId INT AUTO_INCREMENT,
    Email VARCHAR(20) NOT NULL UNIQUE,
    Password VARCHAR(255) NOT NULL,
    Nombre VARCHAR,
    Apellido VARCHAR,
    Telefono INT,
    PRIMARY KEY(TrabajadorId)
);

CREATE TABLE IF NOT EXISTS Clientes(
    ClienteId INT AUTO_INCREMENT,
    Email VARCHAR(20) NOT NULL UNIQUE,
    Password VARCHAR(255) NOT NULL,
    Nombre VARCHAR,
    Apellido VARCHAR,
    Telefono INT,
    PRIMARY KEY(ClienteId)
);

CREATE TABLE IF NOT EXISTS Disponibilidad(
    Lunes BOOLEAN,
    Martes BOOLEAN,
    Miercoles BOOLEAN,
    Jueves BOOLEAN,
    Viernes BOOLEAN,
    Sabado BOOLEAN,
    Domingo BOOLEAN,
    DisponibilidadId INT AUTO_INCREMENT,
    TrabajadorId INT,
    PRIMARY KEY(DisponibilidadId)
    FOREIGN KEY(TrabajadorId) REFERENCES Trabajadores(TrabajadorId)
);

CREATE TABLE IF NOT EXISTS Barrios(
    BarrioId INT AUTO_INCREMENT,
    TrabajadorId INT,
    ClienteId INT,
    PRIMARY KEY(BarrioId),
    FOREIGN KEY(TrabajadorId) REFERENCES Trabajadores(TrabajadorId),
    FOREIGN KEY(ClienteId) REFERENCES Clientes(ClienteId)
);

CREATE TABLE IF NOT EXISTS BarriosUsuarios(
    UbicacionId INT AUTO_INCREMENT,
    TrabajadorId INT,
    ClienteId INT,
    BarrioId INT,
    PRIMARY KEY(UbicacionId),
    FOREIGN KEY(TrabajadorId) REFERENCES Trabajadores(TrabajadorId),
    FOREIGN KEY(BarrioId) REFERENCES Barrios(BarrioId),
    FOREIGN KEY(ClienteId) REFERENCES Clientes(ClienteId)
);

CREATE TABLE IF NOT EXISTS Profesiones(
    ProfesionID INT AUTO_INCREMENT,
    TrabajadorId INT,
    PRIMARY KEY(ProfesionId),
    FOREIGN KEY(TrabajadorId) REFERENCES Trabajadores(TrabajadorId)
);

CREATE TABLE IF NOT EXISTS ProfesionesUsuarios(
    TrabajoId INT AUTO_INCREMENT,
    TrabajadorId INT,
    ProfesionId INT,
    PRIMARY KEY(TrabajoId),
    FOREIGN KEY(TrabajadorId) REFERENCES Trabajadores(TrabajadorId),
    FOREIGN KEY(ProfesionId) REFERENCES Profesiones(ProfesionId)
);


CREATE TABLE IF NOT EXISTS Mensajes(
    MensajeId INT AUTO_INCREMENT,
    Texto TEXT NOT NULL,
    Fecha DATETIME NOT NULL,
    RemitenteId INT,
    DestinatarioId INT,
    PRIMARY KEY(MensajeId),
    FOREIGN KEY(RemitenteTrabajadorId) REFERENCES Trabajadores(TrabajadorId),
    FOREIGN KEY(DestinatarioTrabajadorId) REFERENCES Trabajadores(TrabajadorId),
    FOREIGN KEY(RemitenteClienteId) REFERENCES Clientes(ClienteId),
    FOREIGN KEY(DestinatarioClienteId) REFERENCES Clientes(ClienteId)
);