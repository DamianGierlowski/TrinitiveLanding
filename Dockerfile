#
# PHP Dependencies
#
FROM composer:2.0 as vendor

WORKDIR /app

COPY database/ database/
COPY composer.json composer.json
COPY composer.lock composer.lock

RUN composer install \
    --no-interaction \
    --no-plugins \
    --no-scripts \
    --no-dev \
    --prefer-dist

COPY . .
RUN composer dump-autoload

#
# Frontend
#
FROM node:14.9 as frontend

WORKDIR /app

COPY artisan package.json webpack.mix.js yarn.lock tailwind.js ./

RUN npm install

COPY resources/js ./resources/js
COPY resources/sass ./resources/sass

RUN npm run production



# Base image
FROM php:8.3-fpm-alpine

# Set working directory
WORKDIR /var/www

# Install dependencies (use apk instead of apt-get)
RUN apk update && apk add --no-cache \
    build-base \
    libpng-dev \
    libjpeg-turbo-dev \
    freetype-dev \
    zip \
    jpegoptim optipng pngquant gifsicle \
    vim \
    unzip \
    git \
    curl \
    autoconf \
    pkgconf \
    libzip-dev \
    oniguruma-dev

# Install PHP extensions
RUN docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install gd pdo_mysql mbstring zip exif pcntl

# Install composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Add user for Laravel application
RUN addgroup -g 1000 www && adduser -D -u 1000 -G www www

# Copy Frontend build
COPY --from=frontend /app/node_modules/ ./node_modules/
COPY --from=frontend /app/public/js/ ./public/js/
COPY --from=frontend /app/public/css/ ./public/css/
COPY --from=frontend /app/public/mix-manifest.json ./public/mix-manifest.json

# Copy Composer dependencies
COPY --from=vendor /app/vendor/ ./vendor/
COPY . .

RUN php artisan config:cache
RUN php artisan route:cache


# Copy existing application directory contents
COPY . /var/www

# Copy existing application directory permissions
COPY --chown=www:www . /var/www

# Change current user to www
USER www

# Expose port 9000 and start php-fpm server
EXPOSE 9000
CMD ["php-fpm"]
