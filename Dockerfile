# 1️⃣ Imagen base: PHP con Apache
FROM php:8.2-apache

# 2️⃣ Instalar extensiones necesarias para Laravel y GD
RUN apt-get update && apt-get install -y \
    libpng-dev \
    libjpeg-dev \
    libfreetype6-dev \
    zip unzip git curl \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install gd pdo pdo_mysql

# 3️⃣ Instalar Composer
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

# 4️⃣ Configurar directorio de trabajo
WORKDIR /var/www/html

# 5️⃣ Copiar todo tu proyecto al contenedor
COPY . .

# 6️⃣ Instalar dependencias PHP con Composer
RUN composer install --no-interaction --optimize-autoloader

# 7️⃣ Exponer el puerto que usa Railway
EXPOSE 8080

# 8️⃣ Start command de Laravel
CMD ["php", "artisan", "serve", "--host=0.0.0.0", "--port=8080"]
