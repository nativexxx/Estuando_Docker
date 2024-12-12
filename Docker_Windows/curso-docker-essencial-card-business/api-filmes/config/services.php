<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services - Serviços de Terceiros
    |--------------------------------------------------------------------------
    |
    | Este arquivo serve para armazenar as credenciais de serviços de terceiros,
    | como Mailgun, Postmark, AWS e muito mais. Este arquivo fornece o de fato
    | local para esse tipo de informação, permitindo que os pacotes tenham
    | um arquivo convencional para localizar as diversas credenciais de serviço.
    |
    */

    'postmark' => [
        'token' => env('POSTMARK_TOKEN'),
    ],

    'ses' => [
        'key' => env('AWS_ACCESS_KEY_ID'),
        'secret' => env('AWS_SECRET_ACCESS_KEY'),
        'region' => env('AWS_DEFAULT_REGION', 'us-east-1'),
    ],

    'resend' => [
        'key' => env('RESEND_KEY'),
    ],

    'slack' => [
        'notifications' => [
            'bot_user_oauth_token' => env('SLACK_BOT_USER_OAUTH_TOKEN'),
            'channel' => env('SLACK_BOT_USER_DEFAULT_CHANNEL'),
        ],
    ],

];
