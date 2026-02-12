<?php
namespace App\Services\WhatsApp;

use Illuminate\Support\Facades\Log;

class LogWhatsAppProvider implements WhatsAppProviderInterface
{
    public function sendText(string $to, string $text): bool
    {
        Log::info("WhatsApp Message to {$to}: {$text}");
        return true;
    }
}
