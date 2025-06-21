# Use the official PHP image with Apache
FROM php:8.2-apache

# Install system dependencies and PHP extensions, then clean up
RUN apt-get update && apt-get install -y \
    git \
    curl \
    vim \
    zip \
    unzip \
    && docker-php-ext-install pdo_mysql mbstring exif pcntl bcmath gd \
    && apt-get clean && rm -rf /var/lib/apt/lists/*

# Install Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

