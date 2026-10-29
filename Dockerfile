FROM php:7.4-apache

# Install sistem dependensi dan ekstensi PHP yang diperlukan
RUN apt-get update && apt-get install -y --no-install-recommends \
    libpng-dev \
    libjpeg-dev \
    libfreetype6-dev \
    libzip-dev \
    zip \
    unzip \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install -j$(nproc) gd mysqli pdo pdo_mysql zip \
    && a2enmod rewrite \
    && rm -rf /var/lib/apt/lists/*

# Direktori kerja di Apache
WORKDIR /var/www/html

# Salin source code aplikasi
COPY . /var/www/html/

# Atur kepemilikan dan hak akses direktori file/gambar
RUN chown -R www-data:www-data /var/www/html \
    && chmod -R 755 /var/www/html \
    && chmod -R 775 /var/www/html/img /var/www/html/file

# Environment variables default
ENV DB_HOST=db \
    DB_USER=root \
    DB_PASS=root \
    DB_NAME=asetdisdik \
    BASE_URL=http://localhost:8080

EXPOSE 80

CMD ["apache2-foreground"]

