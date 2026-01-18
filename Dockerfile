FROM php:8.2-fpm

# =====================
# SYSTEM DEPENDENCIES
# =====================
RUN apt-get update && apt-get install -y \
    git \
    unzip \
    curl \
    libzip-dev \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    nodejs \
    npm \
    && docker-php-ext-install \
        pdo \
        pdo_mysql \
        zip \
        mbstring \
        exif \
        pcntl \
        bcmath \
        gd

# =====================
# WORKDIR
# =====================
WORKDIR /var/www

# =====================
# COPY PROJECT
# =====================
COPY . .

# =====================
# COMPOSER
# =====================
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer
RUN composer install --no-dev --optimize-autoloader

# =====================
# FRONTEND BUILD
# =====================
RUN npm install && npm run build

# =====================
# PERMISSIONS
# =====================
RUN chown -R www-data:www-data \
    storage \
    bootstrap/cache

# =====================
# EXPOSE PORT
# =====================
EXPOSE 9000

CMD ["php-fpm"]
