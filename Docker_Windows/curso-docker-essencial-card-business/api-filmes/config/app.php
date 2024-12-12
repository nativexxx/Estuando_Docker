<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Nome do aplicativo
    |--------------------------------------------------------------------------
    |
    | Este valor é o nome da sua aplicação, que será usado quando o
    | framework precisa colocar o nome do aplicativo em uma notificação ou
    | outros elementos da UI onde um nome de aplicativo precisa ser exibido.
    |
    */

    'name' => env('APP_NAME', 'Laravel'),

    /*
    |--------------------------------------------------------------------------
    | Ambiente de aplicação
    |--------------------------------------------------------------------------
    |
    | Este valor determina o "ambiente" em que seu aplicativo está atualmente
    | correndo. Isto pode determinar como você prefere configurar vários
    | serviços que o aplicativo utiliza. Defina isso em seu arquivo ".env".
    |
    */

    'env' => env('APP_ENV', 'production'),

    /*
    |--------------------------------------------------------------------------
    | Modo de depuração do aplicativo
    |--------------------------------------------------------------------------
    |
    | Quando seu aplicativo está no modo de depuração, mensagens de erro detalhadas com
    | rastreamentos de pilha serão mostrados em cada erro que ocorrer em seu
    | aplicativo. Se desativado, uma página de erro genérica simples será mostrada.
    |
    */

    'debug' => (bool) env('APP_DEBUG', false),

    /*
    |--------------------------------------------------------------------------
    | URL do aplicativo
    |--------------------------------------------------------------------------
    |
    | Este URL é usado pelo console para gerar URLs corretamente ao usar
    | a ferramenta de linha de comando Artisan. Você deve definir isso para a raiz de
    | o aplicativo para que fique disponível nos comandos do Artisan.
    |
    */

    'url' => env('APP_URL', 'http://localhost'),

    /*
    |--------------------------------------------------------------------------
    | Fuso horário do aplicativo
    |--------------------------------------------------------------------------
    |
    | Aqui você pode especificar o fuso horário padrão para sua aplicação, que
    | será usado pelas funções de data e hora do PHP. O fuso horário
    | é definido como "UTC" por padrão, pois é adequado para a maioria dos casos de uso.
    |
    */

    'timezone' => env('APP_TIMEZONE', 'UTC'),

    /*
    |--------------------------------------------------------------------------
    | Configuração de localidade do aplicativo
    |--------------------------------------------------------------------------
    |
    | A localidade do aplicativo determina a localidade padrão que será usada
    | pelos métodos de tradução/localização do Laravel. Esta opção pode ser
    | definido como qualquer localidade para a qual você planeja ter strings de tradução.
    |
    */

    'locale' => env('APP_LOCALE', 'en'),

    'fallback_locale' => env('APP_FALLBACK_LOCALE', 'en'),

    'faker_locale' => env('APP_FAKER_LOCALE', 'en_US'),

    /*
    |--------------------------------------------------------------------------
    | Chave de criptografia
    |--------------------------------------------------------------------------
    |
    | Esta chave é usada pelos serviços de criptografia do Laravel e deve ser definida
    | para uma sequência aleatória de 32 caracteres para garantir que todos os valores criptografados
    | estão seguros. Você deve fazer isso antes de implantar o aplicativo.
    |
    */

    'cipher' => 'AES-256-CBC',

    'key' => env('APP_KEY'),

    'previous_keys' => [
        ...array_filter(
            explode(',', env('APP_PREVIOUS_KEYS', ''))
        ),
    ],

    /*
    |--------------------------------------------------------------------------
    | Driver do modo de manutenção
    |--------------------------------------------------------------------------
    |
    | Estas opções de configuração determinam o driver usado para determinar e
    | gerenciar o status do "modo de manutenção" do Laravel. O driver "cache" irá
    | permitir que o modo de manutenção seja controlado em várias máquinas.
    |
    | Drivers suportados: “arquivo”, “cache”
    |
    */

    'maintenance' => [
        'driver' => env('APP_MAINTENANCE_DRIVER', 'file'),
        'store' => env('APP_MAINTENANCE_STORE', 'database'),
    ],

];
