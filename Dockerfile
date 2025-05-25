FROM php:8.2-fpm

# Instala dependencias del sistema y extensiones PHP necesarias para Laravel + PostgreSQL
RUN apt-get update && apt-get install -y \
    build-essential \
    libpng-dev \
    libjpeg62-turbo-dev \
    libfreetype6-dev \
    zip unzip git curl vim \
    jpegoptim optipng pngquant gifsicle \
    libpq-dev \
    && docker-php-ext-install pdo pdo_pgsql

# Instala Composer globalmente
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Establece el directorio de trabajo
WORKDIR /var/www

# Copia el contenido del proyecto
COPY . .

# Instala dependencias PHP de producción
RUN composer install --no-dev --optimize-autoloader

# Da permisos adecuados para Laravel
RUN chown -R www-data:www-data /var/www \
    && chmod -R 755 /var/www/storage \
    && chmod -R 755 /var/www/bootstrap/cache

# Exponer puerto 8000 (Laravel servirá aquí)
EXPOSE 8000

# Comando para servir la aplicación Laravel
CMD ["php", "artisan", "serve", "--host=0.0.0.0", "--port=8000"]
