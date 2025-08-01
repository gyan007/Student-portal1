FROM php:8.2-apache

# Enable mod_rewrite (required by some frameworks, optional)
RUN a2enmod rewrite

# Copy all files to Apache's root folder
COPY . /var/www/html/

# Set working directory
WORKDIR /var/www/html

# Set permissions (optional, if needed)
RUN chown -R www-data:www-data /var/www/html
