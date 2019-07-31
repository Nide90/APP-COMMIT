CREATE TABLE IF NOT EXISTS Trabajadores(
    TrabajadorId INT AUTO_INCREMENT,
    UsuarioT VARCHAR(255) NOT NULL UNIQUE,
    Email VARCHAR(255) NOT NULL UNIQUE,
    Password VARCHAR(255) NOT NULL,
    NombreTrabajador VARCHAR(255),
    Telefono INT,
    PRIMARY KEY(TrabajadorId)
);

CREATE TABLE IF NOT EXISTS Clientes(
    ClienteId INT AUTO_INCREMENT,
    UsuarioC VARCHAR(255) NOT NULL UNIQUE,
    Email VARCHAR(255) NOT NULL UNIQUE,
    Password VARCHAR(255) NOT NULL,
    NombreCliente VARCHAR (255),
    Telefono INT,
    PRIMARY KEY(ClienteId)
);

CREATE TABLE IF NOT EXISTS Disponibilidad(
    DisponibilidadId INT AUTO_INCREMENT,
    Dia INT,
    TrabajadorId INT,
    PRIMARY KEY(DisponibilidadId),
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
    ProfesionId INT AUTO_INCREMENT,
    Profesion VARCHAR(255)
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
    RemitenteTrabajadorId INT,
    DestinatarioTrabajadorId INT,
    RemitenteClienteId INT,
    DestinatarioClienteId INT,
    PRIMARY KEY(MensajeId),
    FOREIGN KEY(RemitenteTrabajadorId) REFERENCES Trabajadores(TrabajadorId),
    FOREIGN KEY(DestinatarioTrabajadorId) REFERENCES Trabajadores(TrabajadorId),
    FOREIGN KEY(RemitenteClienteId) REFERENCES Clientes(ClienteId),
    FOREIGN KEY(DestinatarioClienteId) REFERENCES Clientes(ClienteId)
);

CREATE TABLE IF NOT EXISTS Publicaciones(
    PublicacionId INT AUTO_INCREMENT,
    Titulo TEXT NOT NULL,
    Descripcion TEXT NOT NULL,
    Fecha DATETIME NOT NULL,
    RemitenteTrabajadorId INT,
    RemitenteClienteId INT,
    PRIMARY KEY(PublicacionId),
    FOREIGN KEY(RemitenteTrabajadorId) REFERENCES Trabajadores(TrabajadorId),
    FOREIGN KEY(RemitenteClienteId) REFERENCES Clientes(ClienteId)
);


SELECT p.*, t.Usuario as Trabajador, c.Usuario as Cliente FROM `publicaciones` p LEFT JOIN `trabajadores` t ON p.RemitenteTrabajadorId = t.TrabajadorId LEFT JOIN `clientes` c ON p.RemitenteClienteId = c.ClienteId GROUP BY(p.PublicacionId)

CREATE TABLE IF NOT EXISTS Citas(
    CitaId INT AUTO_INCREMENT,
    FechaCita DATETIME,
    Hora DATETIME,
    MotivoCita VARCHAR(255),
    LugarCita VARCHAR(255),
    Trabajador VARCHAR(255),
    Cliente VARCHAR (255),
    PRIMARY KEY(CitaId),
    FOREIGN KEY(Trabajador) REFERENCES Trabajadores(UsuarioT),
    FOREIGN KEY(Cliente) REFERENCES Clientes(UsuarioC)
);