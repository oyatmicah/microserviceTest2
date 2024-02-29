<?php

namespace App\Services;

use Illuminate\Support\Facades\Log;

class NotificationService
{
    public function sendUserCreatedNotification(array $userData)
    {
        Log::info('User created: ' . json_encode($userData));
    }
}
