<?php

use Illuminate\Support\Str;

return [

    /*
    |--------------------------------------------------------------------------
    | Default Session Driver - Driver de sessão padrão
    |--------------------------------------------------------------------------
    |
    | Esta opção determina o driver de sessão padrão usado para
    | solicitações recebidas. Laravel suporta uma variedade de opções de armazenamento para
    | persistir os dados da sessão. O armazenamento de banco de dados é uma ótima opção padrão.
    |
    | Supported: "file", "cookie", "database", "apc",
    |            "memcached", "redis", "dynamodb", "array"
    |
    */

    'driver' => env('SESSION_DRIVER', 'database'),

    /*
    |--------------------------------------------------------------------------
    | Session Lifetime - Duração da sessão
    |--------------------------------------------------------------------------
    |
    | Aqui você pode especificar o número de minutos que deseja que a sessão dure
    | ser autorizado a permanecer ocioso antes de expirar. Se você os quiser
    | expirar imediatamente quando o navegador for fechado, você poderá
    | indique isso por meio da opção de configuração expire_on_close.
    |
    */

    'lifetime' => env('SESSION_LIFETIME', 120),

    'expire_on_close' => env('SESSION_EXPIRE_ON_CLOSE', false),

    /*
    |--------------------------------------------------------------------------
    | Session Encryption - Criptografia de sessão
    |--------------------------------------------------------------------------
    |
    | Esta opção permite especificar facilmente que todos os dados da sua sessão
    | deve ser criptografado antes de ser armazenado. Toda a criptografia é realizada
    | automaticamente pelo Laravel e você pode usar a sessão normalmente.
    |
    */

    'encrypt' => env('SESSION_ENCRYPT', false),

    /*
    |--------------------------------------------------------------------------
    | Session File Location - Localização do arquivo da sessão
    |--------------------------------------------------------------------------
    |
    | Ao utilizar o driver de sessão "arquivo", os arquivos da sessão são colocados
    | no disco. O local de armazenamento padrão é definido aqui; no entanto, você
    | são livres para fornecer outro local onde devem ser armazenados.
    |
    */

    'files' => storage_path('framework/sessions'),

    /*
    |--------------------------------------------------------------------------
    | Session Database Connection - Conexão de banco de dados de sessão
    |--------------------------------------------------------------------------
    |
    | Ao usar os drivers de sessão "database" ou "redis", você pode especificar um
    | conexão que deve ser usada para gerenciar essas sessões. Isso deveria
    | correspondem a uma conexão nas opções de configuração do seu banco de dados.
    |
    */

    'connection' => env('SESSION_CONNECTION'),

    /*
    |--------------------------------------------------------------------------
    | Session Database Table - Tabela de banco de dados de sessão
    |--------------------------------------------------------------------------
    |
    | Ao usar o driver de sessão "banco de dados", você pode especificar a tabela a ser
    | usado para armazenar sessões. Claro, um padrão sensato é definido
    | para você no entanto, você pode alterar isso para outra tabela.
    |
    */

    'table' => env('SESSION_TABLE', 'sessions'),

    /*
    |--------------------------------------------------------------------------
    | Session Cache Store - Armazenamento de cache de sessão
    |--------------------------------------------------------------------------
    |
    | Ao usar um dos back-ends de sessão orientados por cache da estrutura, você pode
    | definir o armazenamento de cache que deve ser usado para armazenar os dados da sessão
    | entre solicitações. Deve corresponder a um dos armazenamentos de cache definidos.
    |
    | Affects: "apc", "dynamodb", "memcached", "redis"
    |
    */

    'store' => env('SESSION_STORE'),

    /*
    |--------------------------------------------------------------------------
    | Session Sweeping Lottery - Loteria de varredura de sessão
    |--------------------------------------------------------------------------
    |
    | Alguns drivers de sessão devem varrer manualmente seu local de armazenamento para obter
    | livrar-se de sessões antigas do armazenamento. Aqui estão as chances de que isso aconteça
    | acontecer em uma determinada solicitação. Por padrão, as probabilidades são de 2 em 100.
    |
    */

    'lottery' => [2, 100],

    /*
    |--------------------------------------------------------------------------
    | Session Cookie Name - Nome do cookie de sessão
    |--------------------------------------------------------------------------
    |
    | Aqui você pode alterar o nome do cookie de sessão criado por
    | o quadro. Normalmente, você não precisará alterar esse valor
    | já que isso não garante uma melhoria significativa na segurança.
    |
    */

    'cookie' => env(
        'SESSION_COOKIE',
        Str::slug(env('APP_NAME', 'laravel'), '_').'_session'
    ),

    /*
    |--------------------------------------------------------------------------
    | Session Cookie Path - Caminho do cookie de sessão
    |--------------------------------------------------------------------------
    |
    | O caminho do cookie de sessão determina o caminho pelo qual o cookie será
    | ser considerado disponível. Normalmente, este será o caminho raiz do
    | seu aplicativo, mas você pode alterar isso quando necessário.
    |
    */

    'path' => env('SESSION_PATH', '/'),

    /*
    |--------------------------------------------------------------------------
    | Session Cookie Domain - Domínio de cookie de sessão
    |--------------------------------------------------------------------------
    |
    | Este valor determina o domínio e subdomínios em que o cookie de sessão está
    | disponível para. Por padrão, o cookie estará disponível para o root
    | domínio e todos os subdomínios. Normalmente, isso não deve ser alterado.
    |
    */

    'domain' => env('SESSION_DOMAIN'),

    /*
    |--------------------------------------------------------------------------
    | HTTPS Only Cookies - Cookies somente HTTPS
    |--------------------------------------------------------------------------
    |
    | Ao definir esta opção como verdadeira, os cookies de sessão só serão devolvidos
    | para o servidor se o navegador tiver uma conexão HTTPS. Isso vai manter
    | o cookie seja enviado a você quando não puder ser feito com segurança.
    |
    */

    'secure' => env('SESSION_SECURE_COOKIE'),

    /*
    |--------------------------------------------------------------------------
    | HTTP Access Only - Apenas acesso HTTP
    |--------------------------------------------------------------------------
    |
    | Definir este valor como verdadeiro impedirá que o JavaScript acesse o
    | valor do cookie e o cookie só será acessível através
    | o protocolo HTTP. É improvável que você desative esta opção.
    |
    */

    'http_only' => env('SESSION_HTTP_ONLY', true),

    /*
    |--------------------------------------------------------------------------
    | Same-Site Cookies - Cookies do mesmo site
    |--------------------------------------------------------------------------
    |
    | Esta opção determina como seus cookies se comportam quando solicitações entre sites
    | ocorrer e pode ser usado para mitigar ataques CSRF. Por padrão, nós
    | definirá esse valor como "relaxado" para permitir solicitações seguras entre sites.
    |
    | See: https://developer.mozilla.org/en-US/docs/Web/HTTP/Headers/Set-Cookie#samesitesamesite-value
    |
    | Supported: "lax", "strict", "none", null
    |
    */

    'same_site' => env('SESSION_SAME_SITE', 'lax'),

    /*
    |--------------------------------------------------------------------------
    | Partitioned Cookies - Cookies particionados
    |--------------------------------------------------------------------------
    |
    | Definir esse valor como verdadeiro vinculará o cookie ao site de nível superior para
    | um contexto entre sites. Cookies particionados são aceitos pelo navegador
    | quando sinalizado como "seguro" e o atributo Same-Site estiver definido como "nenhum".
    |
    */

    'partitioned' => env('SESSION_PARTITIONED_COOKIE', false),

];
