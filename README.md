# Arik Portfolio - Abdulrahman Ahmed

A premium portfolio website matching the "Arik" Framer template design.
Built with Laravel 9, TailwindCSS, Alpine.js, GSAP, and Filament v2.

## Prerequisites
- PHP 8.0+
- Composer
- SQLite (built-in)

## Installation

1. Navigate to project directory.
2. `composer install`
3. `php artisan migrate --seed`
4. `php artisan storage:link`

## Running
`php artisan serve`

## Admin Panel
URL: `/admin`
User: `admin@admin.com`
Pass: `password`

## WhatsApp Configuration
Update `.env`:
`WHATSAPP_DRIVER=meta` (or `log` to test locally in `storage/logs/laravel.log`)
`META_WA_PHONE_NUMBER_ID=...`
`META_WA_ACCESS_TOKEN=...`

## Architecture & Design
- **Frontend**: Blade components with TailwindCSS (CDN) and Alpine.js.
- **Animations**: GSAP ScrollTrigger for scroll reveals and marquee effects.
- **Bilingual**: Full RTL/LTR support handled via `SetLocale` middleware. Toggle in Navbar.
- **Backend**: Filament v2 for easy content management.

## Limitation Notes
- **Laravel Version**: Downgraded to Laravel 9 to match the PHP 8.0 environment.
- **Node/NPM**: CDN assets are used as Node is not available in the current environment.
