FROM php:8.3-cli

# تثبيت مكتبات النظام
RUN apt-get update && apt-get install -y \
    git unzip curl zip \
    libzip-dev libpng-dev libonig-dev libxml2-dev \
    libpq-dev libicu-dev

# تثبيت إضافات PHP
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

# مجلد العمل
WORKDIR /app

# نسخ المشروع
COPY . .

# تثبيت الحزم
RUN composer install --no-dev --optimize-autoloader --no-interaction

# فتح البورت
EXPOSE 10000

# تشغيل التطبيق (الأهم 🔥)
CMD sh -c "\
    php artisan config:clear && \
    php artisan cache:clear && \
    php artisan route:clear && \
    php artisan view:clear && \
    php artisan serve --host=0.0.0.0 --port=${PORT:-10000}\
    "