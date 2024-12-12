<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Padrões de autenticação
    |--------------------------------------------------------------------------
    |
    | Esta opção define o "guarda" e a senha de autenticação padrão
    | redefina o "corretor" para seu aplicativo. Você pode alterar esses valores
    | conforme necessário, mas são um começo perfeito para a maioria das aplicações.
    |
    */

    'defaults' => [
        'guard' => env('AUTH_GUARD', 'web'),
        'passwords' => env('AUTH_PASSWORD_BROKER', 'users'),
    ],

    /*
    |--------------------------------------------------------------------------
    | Protetores de autenticação
    |--------------------------------------------------------------------------
    |
    | A seguir, você pode definir cada proteção de autenticação para seu aplicativo.
    | Claro, uma ótima configuração padrão foi definida para você
    | que utiliza armazenamento de sessão mais o provedor de usuário Eloquent.
    |
    | Todos os protetores de autenticação possuem um provedor de usuário, que define como o
    | os usuários são realmente recuperados do seu banco de dados ou outro armazenamento
    | sistema utilizado pela aplicação. Normalmente, o Eloquent é usado.
    |
    | Suportado: "sessão"
    |
    */

    'guards' => [
        'web' => [
            'driver' => 'session',
            'provider' => 'users',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Provedores de usuários
    |--------------------------------------------------------------------------
    |
    | Todos os protetores de autenticação possuem um provedor de usuário, que define como o
    | os usuários são realmente recuperados do seu banco de dados ou outro armazenamento
    | sistema utilizado pela aplicação. Normalmente, o Eloquent é usado.
    |
    | Se você tiver várias tabelas ou modelos de usuários, poderá configurar vários
    | provedores para representar o modelo/tabela. Esses provedores então
    | ser atribuído a quaisquer guardas de autenticação extras que você definiu.
    |
    | Suportado: "banco de dados", "eloquente"
    |
    */

    'providers' => [
        'users' => [
            'driver' => 'eloquent',
            'model' => env('AUTH_MODEL', App\Models\User::class),
        ],

        // 'users' => [
        //     'driver' => 'database',
        //     'table' => 'users',
        // ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Redefinindo senhas
    |--------------------------------------------------------------------------
    |
    | Estas opções de configuração especificam o comportamento da senha do Laravel
    | funcionalidade de redefinição, incluindo a tabela usada para armazenamento de token
    | e o provedor de usuário que é invocado para realmente recuperar usuários.
    |
    | O tempo de expiração é o número de minutos que cada token de redefinição será
    | considerado válido. Este recurso de segurança mantém os tokens de curta duração, então
    | eles têm menos tempo para serem adivinhados. Você pode alterar isso conforme necessário.
    |
    | A configuração do acelerador é o número de segundos que um usuário deve esperar antes
    | gerando mais tokens de redefinição de senha. Isso evita que o usuário
    | gerando rapidamente uma grande quantidade de tokens de redefinição de senha.
    |
    */

    'passwords' => [
        'users' => [
            'provider' => 'users',
            'table' => env('AUTH_PASSWORD_RESET_TOKEN_TABLE', 'password_reset_tokens'),
            'expire' => 60,
            'throttle' => 60,
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Tempo limite de confirmação de senha
    |--------------------------------------------------------------------------
    |
    | Aqui você pode definir quantos segundos antes da confirmação da senha
    | janela expira e os usuários são solicitados a digitar novamente sua senha por meio do
    | tela de confirmação. Por padrão, o tempo limite dura três horas.
    |
    */

    'password_timeout' => env('AUTH_PASSWORD_TIMEOUT', 10800),

];
