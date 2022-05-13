<?php
// config for Ikoncept/IkonceptOauth
return [
    'client_id' => env('IKONCEPT_CLIENT_ID'),         // Your Ikoncept Client ID
    'client_secret' => env('IKONCEPT_CLIENT_SECRET'), // Your Ikoncept Client Secret
    'redirect' => env('IKONCEPT_CLIENT_REDIRECT'),
    'user_model' => env('IKONCEPT_USER_MODEL', \App\Models\User::class)
];
