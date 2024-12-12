<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Default Mailer - Mailer padrão
    |--------------------------------------------------------------------------
    |
    | Esta opção controla o mailer padrão que é usado para enviar todos os emails
    | mensagens, a menos que outro mailer seja explicitamente especificado ao enviar
    | a mensagem. Todos os mailers adicionais podem ser configurados dentro do
    | Matriz "mailers". São fornecidos exemplos de cada tipo de mala direta.
    |
    */

    'default' => env('MAIL_MAILER', 'log'),

    /*
    |--------------------------------------------------------------------------
    | Mailer Configurations - Configurações do Mailer
    |--------------------------------------------------------------------------
    |
    | Aqui você pode configurar todos os mailers usados ​​pela sua aplicação mais
    | suas respectivas configurações. Vários exemplos foram configurados para
    | você e você são livres para adicionar os seus próprios conforme exigido pelo seu aplicativo.
    |
    | Laravel suporta uma variedade de drivers de "transporte" de correio que podem ser usados
    | ao entregar um e-mail. Você pode especificar qual você está usando
    | seus mailers abaixo. Você também pode adicionar mailers adicionais, se necessário.
    |
    | Supported: "smtp", "sendmail", "mailgun", "ses", "ses-v2",
    |            "postmark", "resend", "log", "array",
    |            "failover", "roundrobin"
    |
    */

    'mailers' => [

        'smtp' => [
            'transport' => 'smtp',
            'url' => env('MAIL_URL'),
            'host' => env('MAIL_HOST', '127.0.0.1'),
            'port' => env('MAIL_PORT', 2525),
            'encryption' => env('MAIL_ENCRYPTION', 'tls'),
            'username' => env('MAIL_USERNAME'),
            'password' => env('MAIL_PASSWORD'),
            'timeout' => null,
            'local_domain' => env('MAIL_EHLO_DOMAIN', parse_url(env('APP_URL', 'http://localhost'), PHP_URL_HOST)),
        ],

        'ses' => [
            'transport' => 'ses',
        ],

        'postmark' => [
            'transport' => 'postmark',
            // 'message_stream_id' => env('POSTMARK_MESSAGE_STREAM_ID'),
            // 'client' => [
            //     'timeout' => 5,
            // ],
        ],

        'resend' => [
            'transport' => 'resend',
        ],

        'sendmail' => [
            'transport' => 'sendmail',
            'path' => env('MAIL_SENDMAIL_PATH', '/usr/sbin/sendmail -bs -i'),
        ],

        'log' => [
            'transport' => 'log',
            'channel' => env('MAIL_LOG_CHANNEL'),
        ],

        'array' => [
            'transport' => 'array',
        ],

        'failover' => [
            'transport' => 'failover',
            'mailers' => [
                'smtp',
                'log',
            ],
        ],

        'roundrobin' => [
            'transport' => 'roundrobin',
            'mailers' => [
                'ses',
                'postmark',
            ],
        ],

    ],

    /*
    |--------------------------------------------------------------------------
    | Global "From" Address - Endereço global "De"
    |--------------------------------------------------------------------------
    |
    | Você pode desejar que todos os e-mails enviados pelo seu aplicativo sejam enviados de
    | o mesmo endereço. Aqui você pode especificar um nome e endereço que seja
    | usado globalmente para todos os emails enviados pelo seu aplicativo.
    |
    */

    'from' => [
        'address' => env('MAIL_FROM_ADDRESS', 'hello@example.com'),
        'name' => env('MAIL_FROM_NAME', 'Example'),
    ],

];
