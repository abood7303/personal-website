<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(
            \App\Services\WhatsApp\WhatsAppProviderInterface::class,
            function ($app) {
                $driver = env('WHATSAPP_DRIVER', 'meta');
                if ($driver === 'log') {
                    return new \App\Services\WhatsApp\LogWhatsAppProvider();
                }
                if ($driver === 'twilio') {
                    // Implement Twilio if needed, or fallback
                }
                return new \App\Services\WhatsApp\MetaWhatsAppProvider();
            }
        );
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);
    }
}
