FROM php:8.3-cli

# تثبيت الحزم المطلوبة
RUN apt-get update && apt-get install -y \
    git unzip curl libzip-dev libpng-dev libonig-dev libxml2-dev \
    && docker-php-ext-install \
    pdo \
    pdo_mysql \
    mbstring \
    zip \
    exif \
    pcntl \
    bcmath \
    gd

# تثبيت Composer
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

WORKDIR /app
COPY . .

# إنشاء env مؤقت إذا غير موجود
RUN cp .env.example .env || true

# تثبيت dependencies
RUN composer install --no-dev --optimize-autoloader --no-interaction

EXPOSE 10000

CMD php artisan serve --host=0.0.0.0 --port=10000