FROM php:8.4-apache
COPY src/ /var/www/html/
RUN a2enmod rewrite
