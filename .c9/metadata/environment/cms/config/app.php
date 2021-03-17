{"changed":true,"filter":false,"title":"app.php","tooltip":"/cms/config/app.php","value":"<?php\n\nreturn [\n\n    /*\n    |--------------------------------------------------------------------------\n    | Application Name\n    |--------------------------------------------------------------------------\n    |\n    | This value is the name of your application. This value is used when the\n    | framework needs to place the application's name in a notification or\n    | any other location as required by the application or its packages.\n    |\n    */\n\n    'name' => env('APP_NAME', 'Laravel'),\n\n    /*\n    |--------------------------------------------------------------------------\n    | Application Environment\n    |--------------------------------------------------------------------------\n    |\n    | This value determines the \"environment\" your application is currently\n    | running in. This may determine how you prefer to configure various\n    | services the application utilizes. Set this in your \".env\" file.\n    |\n    */\n\n    'env' => env('APP_ENV', 'production'),\n\n    /*\n    |--------------------------------------------------------------------------\n    | Application Debug Mode\n    |--------------------------------------------------------------------------\n    |\n    | When your application is in debug mode, detailed error messages with\n    | stack traces will be shown on every error that occurs within your\n    | application. If disabled, a simple generic error page is shown.\n    |\n    */\n\n    'debug' => (bool) env('APP_DEBUG', false),\n\n    /*\n    |--------------------------------------------------------------------------\n    | Application URL\n    |--------------------------------------------------------------------------\n    |\n    | This URL is used by the console to properly generate URLs when using\n    | the Artisan command line tool. You should set this to the root of\n    | your application so that it is used when running Artisan tasks.\n    |\n    */\n\n    'url' => env('APP_URL', 'http://localhost'),\n\n    'asset_url' => env('ASSET_URL', null),\n\n    /*\n    |--------------------------------------------------------------------------\n    | Application Timezone\n    |--------------------------------------------------------------------------\n    |\n    | Here you may specify the default timezone for your application, which\n    | will be used by the PHP date and date-time functions. We have gone\n    | ahead and set this to a sensible default for you out of the box.\n    |\n    */\n\n    'timezone' => 'UTC',\n\n    /*\n    |--------------------------------------------------------------------------\n    | Application Locale Configuration\n    |--------------------------------------------------------------------------\n    |\n    | The application locale determines the default locale that will be used\n    | by the translation service provider. You are free to set this value\n    | to any of the locales which will be supported by the application.\n    |\n    */\n\n    'locale' => 'en',\n\n    /*\n    |--------------------------------------------------------------------------\n    | Application Fallback Locale\n    |--------------------------------------------------------------------------\n    |\n    | The fallback locale determines the locale to use when the current one\n    | is not available. You may change the value to correspond to any of\n    | the language folders that are provided through your application.\n    |\n    */\n\n    'fallback_locale' => 'en',\n\n    /*\n    |--------------------------------------------------------------------------\n    | Faker Locale\n    |--------------------------------------------------------------------------\n    |\n    | This locale will be used by the Faker PHP library when generating fake\n    | data for your database seeds. For example, this will be used to get\n    | localized telephone numbers, street address information and more.\n    |\n    */\n\n    'faker_locale' => 'en_US',\n\n    /*\n    |--------------------------------------------------------------------------\n    | Encryption Key\n    |--------------------------------------------------------------------------\n    |\n    | This key is used by the Illuminate encrypter service and should be set\n    | to a random, 32 character string, otherwise these encrypted strings\n    | will not be safe. Please do this before deploying an application!\n    |\n    */\n\n    'key' => env('APP_KEY'),\n\n    'cipher' => 'AES-256-CBC',\n\n    /*\n    |--------------------------------------------------------------------------\n    | Autoloaded Service Providers\n    |--------------------------------------------------------------------------\n    |\n    | The service providers listed here will be automatically loaded on the\n    | request to your application. Feel free to add your own services to\n    | this array to grant expanded functionality to your applications.\n    |\n    */\n\n    'providers' => [\n\n        /*\n         * Laravel Framework Service Providers...\n         */\n        Illuminate\\Auth\\AuthServiceProvider::class,\n        Illuminate\\Broadcasting\\BroadcastServiceProvider::class,\n        Illuminate\\Bus\\BusServiceProvider::class,\n        Illuminate\\Cache\\CacheServiceProvider::class,\n        Illuminate\\Foundation\\Providers\\ConsoleSupportServiceProvider::class,\n        Illuminate\\Cookie\\CookieServiceProvider::class,\n        Illuminate\\Database\\DatabaseServiceProvider::class,\n        Illuminate\\Encryption\\EncryptionServiceProvider::class,\n        Illuminate\\Filesystem\\FilesystemServiceProvider::class,\n        Illuminate\\Foundation\\Providers\\FoundationServiceProvider::class,\n        Illuminate\\Hashing\\HashServiceProvider::class,\n        Illuminate\\Mail\\MailServiceProvider::class,\n        Illuminate\\Notifications\\NotificationServiceProvider::class,\n        Illuminate\\Pagination\\PaginationServiceProvider::class,\n        Illuminate\\Pipeline\\PipelineServiceProvider::class,\n        Illuminate\\Queue\\QueueServiceProvider::class,\n        Illuminate\\Redis\\RedisServiceProvider::class,\n        Illuminate\\Auth\\Passwords\\PasswordResetServiceProvider::class,\n        Illuminate\\Session\\SessionServiceProvider::class,\n        Illuminate\\Translation\\TranslationServiceProvider::class,\n        Illuminate\\Validation\\ValidationServiceProvider::class,\n        Illuminate\\View\\ViewServiceProvider::class,\n\n        /*\n         * Package Service Providers...\n         */\n\n        /*\n         * Application Service Providers...\n         */\n        App\\Providers\\AppServiceProvider::class,\n        App\\Providers\\AuthServiceProvider::class,\n        // App\\Providers\\BroadcastServiceProvider::class,\n        App\\Providers\\EventServiceProvider::class,\n        App\\Providers\\RouteServiceProvider::class,\n\n    ],\n\n    /*\n    |--------------------------------------------------------------------------\n    | Class Aliases\n    |--------------------------------------------------------------------------\n    |\n    | This array of class aliases will be registered when this application\n    | is started. However, feel free to register as many as you wish as\n    | the aliases are \"lazy\" loaded so they don't hinder performance.\n    |\n    */\n\n    'aliases' => [\n\n        'App' => Illuminate\\Support\\Facades\\App::class,\n        'Arr' => Illuminate\\Support\\Arr::class,\n        'Artisan' => Illuminate\\Support\\Facades\\Artisan::class,\n        'Auth' => Illuminate\\Support\\Facades\\Auth::class,\n        'Blade' => Illuminate\\Support\\Facades\\Blade::class,\n        'Broadcast' => Illuminate\\Support\\Facades\\Broadcast::class,\n        'Bus' => Illuminate\\Support\\Facades\\Bus::class,\n        'Cache' => Illuminate\\Support\\Facades\\Cache::class,\n        'Config' => Illuminate\\Support\\Facades\\Config::class,\n        'Cookie' => Illuminate\\Support\\Facades\\Cookie::class,\n        'Crypt' => Illuminate\\Support\\Facades\\Crypt::class,\n        'DB' => Illuminate\\Support\\Facades\\DB::class,\n        'Eloquent' => Illuminate\\Database\\Eloquent\\Model::class,\n        'Event' => Illuminate\\Support\\Facades\\Event::class,\n        'File' => Illuminate\\Support\\Facades\\File::class,\n        'Gate' => Illuminate\\Support\\Facades\\Gate::class,\n        'Hash' => Illuminate\\Support\\Facades\\Hash::class,\n        'Lang' => Illuminate\\Support\\Facades\\Lang::class,\n        'Log' => Illuminate\\Support\\Facades\\Log::class,\n        'Mail' => Illuminate\\Support\\Facades\\Mail::class,\n        'Notification' => Illuminate\\Support\\Facades\\Notification::class,\n        'Password' => Illuminate\\Support\\Facades\\Password::class,\n        'Queue' => Illuminate\\Support\\Facades\\Queue::class,\n        'Redirect' => Illuminate\\Support\\Facades\\Redirect::class,\n        'Redis' => Illuminate\\Support\\Facades\\Redis::class,\n        'Request' => Illuminate\\Support\\Facades\\Request::class,\n        'Response' => Illuminate\\Support\\Facades\\Response::class,\n        'Route' => Illuminate\\Support\\Facades\\Route::class,\n        'Schema' => Illuminate\\Support\\Facades\\Schema::class,\n        'Session' => Illuminate\\Support\\Facades\\Session::class,\n        'Storage' => Illuminate\\Support\\Facades\\Storage::class,\n        'Str' => Illuminate\\Support\\Str::class,\n        'URL' => Illuminate\\Support\\Facades\\URL::class,\n        'Validator' => Illuminate\\Support\\Facades\\Validator::class,\n        'View' => Illuminate\\Support\\Facades\\View::class,\n\n    ],\n\n];\n","undoManager":{"mark":1,"position":-1,"stack":[[{"start":{"row":15,"column":31},"end":{"row":15,"column":32},"action":"insert","lines":["o"],"id":3},{"start":{"row":15,"column":32},"end":{"row":15,"column":33},"action":"insert","lines":["n"]},{"start":{"row":15,"column":33},"end":{"row":15,"column":34},"action":"insert","lines":["e"]}],[{"start":{"row":15,"column":37},"end":{"row":15,"column":38},"action":"remove","lines":["l"],"id":3},{"start":{"row":15,"column":36},"end":{"row":15,"column":37},"action":"remove","lines":["e"]},{"start":{"row":15,"column":35},"end":{"row":15,"column":36},"action":"remove","lines":["v"]},{"start":{"row":15,"column":34},"end":{"row":15,"column":35},"action":"remove","lines":["a"]},{"start":{"row":15,"column":33},"end":{"row":15,"column":34},"action":"remove","lines":["r"]},{"start":{"row":15,"column":32},"end":{"row":15,"column":33},"action":"remove","lines":["a"]},{"start":{"row":15,"column":31},"end":{"row":15,"column":32},"action":"remove","lines":["L"]}]]},"ace":{"folds":[],"scrolltop":1140,"scrollleft":0,"selection":{"start":{"row":10,"column":70},"end":{"row":10,"column":70},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":{"row":80,"state":"php-start","mode":"ace/mode/php"}},"timestamp":1614260921047}