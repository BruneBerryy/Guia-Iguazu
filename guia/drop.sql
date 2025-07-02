DROP DATABASE IF EXISTS inicio;

CREATE DATABASE inicio;

USE inicio;

CREATE TABLE registro (
    id INT AUTO_INCREMENT PRIMARY KEY, -- ID único y auto-incremental
    nombre VARCHAR(50) NOT NULL,       -- Nombre obligatorio
    apellido VARCHAR(50) NOT NULL,    -- Apellido obligatorio
    email VARCHAR(100) NOT NULL UNIQUE, -- Email único y obligatorio
    telefono VARCHAR(15) NOT NULL,    -- Más espacio por si incluye códigos de área
    fecha_nacimiento DATE NOT NULL,   -- Fecha de nacimiento obligatoria
    comentarios TEXT                  -- Comentarios adicionales
);

-- Opcional: Crear un usuario para contraseñas (si necesitas manejar login)
CREATE TABLE login (
    id INT AUTO_INCREMENT PRIMARY KEY,
    email VARCHAR(100) NOT NULL UNIQUE, -- Email único para el login
    password VARCHAR(255) NOT NULL      -- Contraseña en formato hash
);
