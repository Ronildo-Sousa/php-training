FROM php:8.1-fpm

RUN apt-get update && apt-get upgrade

COPY . /var/www/html/app

COPY --from=composer /usr/bin/composer /usr/bin/composer

WORKDIR app