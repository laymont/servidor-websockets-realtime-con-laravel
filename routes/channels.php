<?php

/*
|--------------------------------------------------------------------------
| Broadcast Channels
|--------------------------------------------------------------------------
|
| Here you may register all of the event broadcasting channels that your
| application supports. The given channel authorization callbacks are
| used to check if an authenticated user can listen to the channel.
|
*/

use Illuminate\Support\Facades\Broadcast;

Broadcast::channel('messages.{userId}', function ($user, $userId) {
    return (int) $user->id === (int) $userId;
});

Broadcast::event(MessageEvent::class, function ($message, $channel) {
    // Realiza las acciones necesarias con el mensaje recibido
    // Puedes emitir eventos de vuelta si es necesario
});
