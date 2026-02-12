<?php
namespace App\Services\WhatsApp;

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class MetaWhatsAppProvider implements WhatsAppProviderInterface
{
    public function sendText(string $to, string $text): bool
    {
        $version = env('META_WA_API_VERSION', 'v20.0');
        $phoneId = env('META_WA_PHONE_NUMBER_ID');
        $token = env('META_WA_ACCESS_TOKEN');

        if (!$phoneId || !$token) {
            Log::warning('WhatsApp Meta credentials missing. Message not sent: ' . $text);
            return false;
        }

        $url = "https://graph.facebook.com/{$version}/{$phoneId}/messages";

        $response = Http::withToken($token)->post($url, [
            'messaging_product' => 'whatsapp',
            'to' => $to,
            'type' => 'text',
            'text' => ['body' => $text],
        ]);

        if ($response->successful()) {
            return true;
        }

        Log::error('WhatsApp Meta Send Failed', ['response' => $response->body()]);
        return false;
    }
}
