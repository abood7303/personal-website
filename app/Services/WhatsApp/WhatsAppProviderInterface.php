<?php
namespace App\Services\WhatsApp;

interface WhatsAppProviderInterface
{
    public function sendText(string $to, string $text): bool;
}
