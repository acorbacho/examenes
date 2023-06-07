-- Datos de ejemplo para la tabla Viajeros

INSERT INTO
    Viajeros (
        id_viajero,
        nombre,
        apellido,
        fecha_nacimiento,
        nacionalidad
    )
VALUES (
        1,
        'Juan',
        'Perez',
        '1990-05-12',
        'Espanol'
    ), (
        2,
        'Ana',
        'Lopez',
        '1985-09-22',
        'Espanola'
    ), (
        3,
        'Carlos',
        'Garcia',
        '1992-03-05',
        'Espanol'
    ), (
        4,
        'Maria',
        'Rodriguez',
        '1998-11-30',
        'Espanola'
    );

-- Datos de ejemplo para la tabla Vuelos

INSERT INTO
    Vuelos (
        id_vuelo,
        id_viajero,
        ciudad_origen,
        ciudad_destino,
        fecha_salida,
        fecha_llegada
    )
VALUES (
        1,
        1,
        'Madrid',
        'Barcelona',
        '2023-06-01',
        '2023-06-01'
    ), (
        2,
        2,
        'Barcelona',
        'Sevilla',
        '2023-06-02',
        '2023-06-02'
    ), (
        3,
        3,
        'Valencia',
        'Madrid',
        '2023-06-03',
        '2023-06-03'
    ), (
        4,
        4,
        'Sevilla',
        'Valencia',
        '2023-06-04',
        '2023-06-04'
    );

-- Datos de ejemplo para la tabla Ciudades

INSERT INTO
    Ciudades (
        id_ciudad,
        nombre,
        habitantes,
        descripcion
    )
VALUES (
        1,
        'Madrid',
        3200000,
        'Madrid es la capital de Espana y ofrece una gran variedad de museos y lugares historicos.'
    ), (
        2,
        'Barcelona',
        1600000,
        'Barcelona es conocida por su arquitectura modernista, sus playas y su animada vida nocturna.'
    ), (
        3,
        'Valencia',
        800000,
        'Valencia es famosa por su Ciudad de las Artes y las Ciencias, sus playas y su deliciosa paella.'
    ), (
        4,
        'Sevilla',
        700000,
        'Sevilla es famosa por su catedral, la Giralda, y su celebracion de la Feria de Abril.'
    );