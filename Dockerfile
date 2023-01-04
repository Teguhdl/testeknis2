FROM php:7.4-apache

RUN apt-get update && apt-get install -y \
    libfreetype6-dev \
    libjpeg62-turbo-dev \
    libpng-dev \
    libzip-dev \
    unzip \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install -j$(nproc) gd \
    && docker-php-ext-install -j$(nproc) mysqli \
    && docker-php-ext-install -j$(nproc) pdo_mysql \
    && docker-php-ext-install -j$(nproc) zip

COPY app/ /var/www/html/


RUN apt-get update && apt-get install -y mysql-server
COPY db/testeknis.sql /docker-entrypoint-initdb.d/database.sql
COPY .env /var/www/html/.env

RUN chown -R www-data:www-data /var/www/html/

CMD ["/usr/sbin/apache2ctl", "-D", "FOREGROUND"]
CMD ["mysqld"]
