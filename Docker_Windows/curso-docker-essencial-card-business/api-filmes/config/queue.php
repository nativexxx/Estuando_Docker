<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Default Queue Connection Name - Nome de conexão de fila padrão
    |--------------------------------------------------------------------------
    |
    | A fila do Laravel suporta uma variedade de backends através de um único e unificado
    | API, oferecendo acesso conveniente a cada back-end usando idêntico
    | sintaxe para cada um. A conexão da fila padrão é definida abaixo.
    |
    */

    'default' => env('QUEUE_CONNECTION', 'database'),

    /*
    |--------------------------------------------------------------------------
    | Queue Connections - Conexões de fila
    |--------------------------------------------------------------------------
    |
    | Aqui você pode configurar as opções de conexão para cada backend de fila
    | usado pela sua aplicação. Um exemplo de configuração é fornecido para
    | cada backend suportado pelo Laravel. Você também está livre para adicionar mais.
    |
    | Drivers: "sync", "database", "beanstalkd", "sqs", "redis", "null"
    |
    */

    'connections' => [

        'sync' => [
            'driver' => 'sync',
        ],

        'database' => [
            'driver' => 'database',
            'connection' => env('DB_QUEUE_CONNECTION'),
            'table' => env('DB_QUEUE_TABLE', 'jobs'),
            'queue' => env('DB_QUEUE', 'default'),
            'retry_after' => (int) env('DB_QUEUE_RETRY_AFTER', 90),
            'after_commit' => false,
        ],

        'beanstalkd' => [
            'driver' => 'beanstalkd',
            'host' => env('BEANSTALKD_QUEUE_HOST', 'localhost'),
            'queue' => env('BEANSTALKD_QUEUE', 'default'),
            'retry_after' => (int) env('BEANSTALKD_QUEUE_RETRY_AFTER', 90),
            'block_for' => 0,
            'after_commit' => false,
        ],

        'sqs' => [
            'driver' => 'sqs',
            'key' => env('AWS_ACCESS_KEY_ID'),
            'secret' => env('AWS_SECRET_ACCESS_KEY'),
            'prefix' => env('SQS_PREFIX', 'https://sqs.us-east-1.amazonaws.com/your-account-id'),
            'queue' => env('SQS_QUEUE', 'default'),
            'suffix' => env('SQS_SUFFIX'),
            'region' => env('AWS_DEFAULT_REGION', 'us-east-1'),
            'after_commit' => false,
        ],

        'redis' => [
            'driver' => 'redis',
            'connection' => env('REDIS_QUEUE_CONNECTION', 'default'),
            'queue' => env('REDIS_QUEUE', 'default'),
            'retry_after' => (int) env('REDIS_QUEUE_RETRY_AFTER', 90),
            'block_for' => null,
            'after_commit' => false,
        ],

    ],

    /*
    |--------------------------------------------------------------------------
    | Job Batching - Lote de trabalhos
    |--------------------------------------------------------------------------
    |
    | As opções a seguir configuram o banco de dados e a tabela que armazenam tarefas
    | informações de lote. Essas opções podem ser atualizadas para qualquer banco de dados
    | conexão e tabela que foi definida pelo seu aplicativo.
    |
    */

    'batching' => [
        'database' => env('DB_CONNECTION', 'sqlite'),
        'table' => 'job_batches',
    ],

    /*
    |--------------------------------------------------------------------------
    | Failed Queue Jobs - Trabalhos de fila com falha
    |--------------------------------------------------------------------------
    |
    | Estas opções configuram o comportamento do registro de tarefas da fila com falha para que você
    | pode controlar como e onde os trabalhos com falha são armazenados. Laravel vem com
    | suporte para armazenar trabalhos com falha em um arquivo simples ou em um banco de dados.
    |
    | Supported drivers: "database-uuids", "dynamodb", "file", "null"
    |
    */

    'failed' => [
        'driver' => env('QUEUE_FAILED_DRIVER', 'database-uuids'),
        'database' => env('DB_CONNECTION', 'sqlite'),
        'table' => 'failed_jobs',
    ],

];
