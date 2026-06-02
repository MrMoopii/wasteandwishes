FROM php:8.2-apache

# 1. Aktifkan modul rewrite Apache agar file .htaccess kamu bisa berfungsi
RUN a2enmod rewrite

# 2. Install ekstensi PDO MySQL agar class Database PHP kamu bisa terhubung ke MySQL Cloud
RUN docker-php-ext-install pdo pdo_mysql

# 3. Salin seluruh file proyek kamu ke dalam folder web server Apache
COPY . /var/www/html/

# 4. Berikan izin akses folder yang tepat
RUN chown -R www-data:www-data /var/www/html

# 5. Buka port 80 untuk akses web
EXPOSE 80