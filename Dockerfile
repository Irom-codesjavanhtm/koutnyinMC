FROM php:8.3-cli

# Install system dependencies
RUN apt-get update && apt-get install -y \
    git curl unzip libpq-dev libzip-dev libpng-dev \
    && docker-php-ext-install pdo pdo_pgsql zip \
    && apt-get clean && rm -rf /var/lib/apt/lists/*

# Install Composer
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

WORKDIR /app

# Copy project files
COPY . .

# Install PHP dependencies
RUN composer install --no-dev --optimize-autoloader

# Cache Laravel config/routes/views
RUN php artisan config:cache \
 && php artisan route:cache \
 && php artisan view:cache

# Expose port
EXPOSE 8000

# Migrate and serve on start
CMD php artisan migrate --force && php artisan serve --host=0.0.0.0 --port=${PORT:-8000}
