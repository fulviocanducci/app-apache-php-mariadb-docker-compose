FROM php:8.0.3-apache

RUN apt-get update && apt-get upgrade -y libpq-dev
RUN docker-php-ext-install mysqli pdo_mysql pgsql pdo_pgsql

COPY src/ /var/www/html/

WORKDIR /var/www/html

EXPOSE 80
EXPOSE 8000