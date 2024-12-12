<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Disco do sistema de arquivos padrão
    |--------------------------------------------------------------------------
    |
    | Aqui você poderá especificar o disco padrão do sistema de arquivos que deverá ser usado
    | pelo quadro. O disco "local", bem como uma variedade de nuvem
    | discos baseados estão disponíveis para seu aplicativo para armazenamento de arquivos.
    |
    */

    'default' => env('FILESYSTEM_DISK', 'local'),

    /*
    |--------------------------------------------------------------------------
    | Discos do sistema de arquivos
    |--------------------------------------------------------------------------
    |
    | Abaixo você pode configurar quantos discos de sistema de arquivos forem necessários e
    | pode até configurar vários discos para o mesmo driver. Exemplos para
    | a maioria dos drivers de armazenamento suportados são configurados aqui para referência.
    |
    | Drivers suportados: "local", "ftp", "sftp", "s3"
    |
    */

    'disks' => [

        'local' => [
            'driver' => 'local',
            'root' => storage_path('app/private'),
            'serve' => true,
            'throw' => false,
        ],

        'public' => [
            'driver' => 'local',
            'root' => storage_path('app/public'),
            'url' => env('APP_URL').'/storage',
            'visibility' => 'public',
            'throw' => false,
        ],

        's3' => [
            'driver' => 's3',
            'key' => env('AWS_ACCESS_KEY_ID'),
            'secret' => env('AWS_SECRET_ACCESS_KEY'),
            'region' => env('AWS_DEFAULT_REGION'),
            'bucket' => env('AWS_BUCKET'),
            'url' => env('AWS_URL'),
            'endpoint' => env('AWS_ENDPOINT'),
            'use_path_style_endpoint' => env('AWS_USE_PATH_STYLE_ENDPOINT', false),
            'throw' => false,
        ],

    ],

    /*
    |--------------------------------------------------------------------------
    | Symbolic Links - Links Simbólicos
    |--------------------------------------------------------------------------
    |
    | Aqui você pode configurar os links simbólicos que serão criados quando o
    | `storage:link` O comando Artisan é executado. As chaves do array devem ser
    | as localizações dos links e os valores deverão ser seus alvos.
    |
    */

    'links' => [
        public_path('storage') => storage_path('app/public'),
    ],

];
