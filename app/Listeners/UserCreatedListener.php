<?php

namespace App\Listeners;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use App\Events\UserCreated;

class UserCreatedListener implements ShouldQueue
{
    /**
     * Create the event listener.
     */
    use InteractsWithQueue;
    
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(UserCreated $event): void
    {
        // Save the user data to a log file
        \Log::info('User created: ' . json_encode($event->user->toArray()));
    }
}
