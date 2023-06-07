CREATE TABLE
    Viajeros (
        id_viajero INT PRIMARY KEY,
        nombre VARCHAR(50),
        apellido VARCHAR(50),
        fecha_nacimiento DATE,
        nacionalidad VARCHAR(50)
    );

CREATE TABLE
    Vuelos (
        id_vuelo INT PRIMARY KEY,
        id_viajero INT,
        ciudad_origen VARCHAR(50),
        ciudad_destino VARCHAR(50),
        fecha_salida DATE,
        fecha_llegada DATE,
        FOREIGN KEY (id_viajero) REFERENCES Viajeros(id_viajero)
    );

CREATE TABLE
    Ciudades (
        id_ciudad INT PRIMARY KEY,
        nombre VARCHAR(50),
        habitantes INT,
        descripcion VARCHAR(150)
    );