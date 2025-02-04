# Use the official PHP image with Apache
FROM php:8.1-apache

# Install PHP extensions
RUN docker-php-ext-install pdo pdo_mysql

# Copy PHP files into the container's web directory
COPY . /var/www/html/

# Expose port 80 to make the app accessible in the browser
EXPOSE 80
