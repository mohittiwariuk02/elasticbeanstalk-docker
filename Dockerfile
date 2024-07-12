# Use the official PHP image as the base image
FROM php:7.4-apache

# Copy your PHP file(s) to the Apache server's root directory
COPY . /var/www/html/

# Expose port 80
EXPOSE 80
