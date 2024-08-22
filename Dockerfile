# Utiliser une image de base PHP avec Composer préinstallé
FROM php:8.1-fpm

# Définir le répertoire de travail
WORKDIR /var/www/html

# Installer les dépendances système nécessaires
RUN apt-get update && apt-get install -y \
    libzip-dev \
    unzip \
    && docker-php-ext-install pdo_mysql zip bcmath

# Installer Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Copier les fichiers composer.json et composer.lock
COPY composer.json composer.lock /var/www/html/

# Installer les dépendances
