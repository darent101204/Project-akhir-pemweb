FROM php:8.2-apache

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
# NODE (STABLE)
# =====================
RUN curl -fsSL https://deb.nodesource.com/setup_18.x | bash - \
    && apt-get install -y nodejs

# =====================
# APACHE — FORCE PREFORK ONLY
# =====================
RUN rm -f /etc/apache2/mods-enabled/mpm_event.load \
    && rm -f /etc/apache2/mods-enabled/mpm_worker.load \
    && rm -f /etc/apache2/mods-enabled/mpm_event.conf \
    && rm -f /etc/apache2/mods-enabled/mpm_worker.conf

RUN a2enmod mpm_prefork rewrite

# =====================
# WORKDIR
# =====================
WORKDIR /var/www/html

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
# APACHE DOC ROOT
# =====================
ENV APACHE_DOCUMENT_ROOT=/var/www/html/public
RUN sed -ri 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/sites-available/*.conf
RUN sed -ri 's!/var/www/!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/apache2.conf

# =====================
# PERMISSIONS
# =====================
RUN chown -R www-data:www-data \
    /var/www/html/storage \
    /var/www/html/bootstrap/cache

# =====================
# START APACHE
# =====================
CMD ["apache2-foreground"]
