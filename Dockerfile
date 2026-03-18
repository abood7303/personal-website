FROM php:8.3-cli

# تثبيت مكتبات النظام المطلوبة
RUN apt-get update && apt-get install -y \
    git unzip curl zip \
    libzip-dev libpng-dev libonig-dev libxml2-dev \
    libpq-dev libicu-dev

# تثبيت امتدادات PHP الضرورية
RUN docker-php-ext-install \
    pdo \
    pdo_mysql \
    pdo_pgsql \
    mbstring \
    zip \
    exif \
    pcntl \
    bcmath \
    gd \
    intl

# تثبيت Composer
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

WORKDIR /app
COPY . .

# إنشاء .env مؤقت إذا لم يوجد
RUN cp .env.example .env || true

# تثبيت حزم Composer
RUN composer install --no-dev --optimize-autoloader --no-interaction

# تنظيف cache Laravel
RUN php artisan config:clear && php artisan cache:clear && php artisan route:clear && php artisan view:clear

EXPOSE 10000

CMD php artisan serve --host=0.0.0.0 --port=10000