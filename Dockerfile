FROM php:8.2-fpm

WORKDIR /var/www

# Installation des dépendances
RUN apt-get update && apt-get install -y \
    git \
    curl \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    libpq-dev \
    zip \
    unzip

# Nettoyage du cache APT
RUN apt-get clean && rm -rf /var/lib/apt/lists/*

# Installation des extensions PHP
RUN docker-php-ext-install pdo_pgsql mbstring exif pcntl bcmath gd

# Installation de Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Copie des fichiers de l'application
COPY . /var/www

# Vérifiez que les dossiers existent avant de modifier les permissions
RUN mkdir -p /var/www/storage /var/www/bootstrap/cache
RUN chmod -R 777 /var/www/storage /var/www/bootstrap/cache

# Exposition du port PHP-FPM
EXPOSE 9000

CMD ["php-fpm"]