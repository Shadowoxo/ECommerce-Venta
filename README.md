Reporte de Actividad 2 - ECommerce Laravel

Nombre del proyecto

ECommerce-Venta

Descripción general

Este proyecto es una tienda virtual desarrollada con Laravel que permite a los usuarios explorar productos, agregarlos al carrito, gestionar su perfil, y realizar compras. El sistema incorpora roles de usuario (admin y cliente), CRUD de productos, autenticación, y validaciones.

Actividad 2: Seeders y Validación Básica

Objetivo

Implementar seeders personalizados para cargar datos esenciales en la base de datos del sistema, tales como usuarios, categorías y productos.

Migraciones:

create_users_table: Añade el campo is_admin para definir roles.

create_categories_table: Permite almacenar las categorías como 'Electrónica', 'Ropa', 'Hogar'.

create_products_table: Se agregó el campo category y tags.

🌱 Seeders creados:

1. UserSeeder

Se generaron:

2 usuarios administradores (admin@tienda.com, admin2@tienda.com)

4 usuarios clientes (cliente1@tienda.com, ..., cliente4@tienda.com)

Contraseñas conocidas para pruebas: cl13nt3004@, admin123

2. CategorySeeder

Se insertaron 3 categorías:

Electrónicos

Ropa

Hogar

3. ProductSeeder

Se crearon 10 productos con:

Nombres y descripciones usando Faker

Precios aleatorios

Categorías asignadas aleatoriamente

Imágenes placeholder

🧪 Validación:

Se probaron las migraciones con php artisan migrate:fresh --seed

Se validó que las tablas y datos fueron insertados correctamente desde MySQL y desde la interfaz web.

🧩 Ramas y control de versiones:

Rama creada: feature/basic-seeding-validation

Commit asociado: Creación de seeders básicos con validaciones y datos iniciales

