# Use PHP 7.4.26 with Apache
FROM php:7.4.26-apache

# Install PHP extensions to work with MySQL
RUN docker-php-ext-install mysqli pdo pdo_mysql

# Copy your whole app into the Apache root
COPY . /var/www/html/

# Enable Apache mod_rewrite (optional)
RUN a2enmod rewrite
