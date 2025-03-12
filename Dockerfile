# Stage 1: Base Image for PHP
FROM serversideup/php:8.4-fpm as base

# Switch to root to install system dependencies
USER root

# Install system dependencies
RUN apt-get update && apt-get install -y \
    unzip \
    git \
    curl \
    && rm -rf /var/lib/apt/lists/*

# Switch back to non-root user (for security)
USER www-data

# Stage 2: Build Backend (Composer)
FROM base as backend

# Copy composer files
COPY composer.json composer.lock ./

# Install dependencies
RUN composer install --no-dev --no-scripts --optimize-autoloader

# Stage 3: Build Frontend (Node.js)
FROM node:20-alpine as frontend

WORKDIR /app

# Copy package files first to leverage Docker cache
COPY package.json package-lock.json ./

# Install ALL dependencies (including devDependencies, so Vite is available)
RUN npm install

# Copy the rest of the frontend source code
COPY resources resources
COPY vite.config.js vite.config.js

# Build frontend
RUN npm run build

# Stage 4: Final Image
FROM base as final

# Set working directory
WORKDIR /var/www/html

# Copy Laravel app from backend stage
COPY --from=backend /var/www/html /var/www/html

# Copy built frontend assets
COPY --from=frontend /app/public /var/www/html/public

# Copy application files
COPY . .

# Set permissions for storage and bootstrap/cache
# Set correct permissions for Laravel
USER root
RUN chown -R www-data:www-data storage bootstrap/cache
USER www-data


# Expose port
EXPOSE 9000

CMD ["php-fpm"]
