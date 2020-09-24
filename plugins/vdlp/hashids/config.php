<?php

declare(strict_types=1);

return [

    /*
    |--------------------------------------------------------------------------
    | Default Hashid Configuration
    |--------------------------------------------------------------------------
    |
    | This option controls the default configuration that gets used while
    | using this hashids plugin. This configuration is used when another is
    | not explicitly specified.
    |
    */

    'default' => 'different-configuration',

    /*
    |--------------------------------------------------------------------------
    | Hashid Configurations
    |--------------------------------------------------------------------------
    |
    | Here you may define all of the hashid "configurations" for
    | your application.
    |
    */

    'configurations' => [
        'main' => [
            'salt' => 'Z4iOJvx9xzPa2k9q9MY0fiDRBAb8Ua6kWCBLyGFQNhDmJKmPe9Qod71jRENjXSP7eeKUuCkT6ouQv727OMwwCw012kUq80hMQTl3',
            'length' => 4,
        ],

        'different-configuration' => [
            'salt' => 'AnCoMhPsYpOxYCwJV39fPkvzwkW0EEuPp0rdduxtRjK2lOcmNjVUCNQAc7DhrlR51LMiI2SXils23YE1hNwHEzrjmkVucrwVtVPP',
            'length' => 6,
            'alphabet' => 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890', # Default alphabet
        ],
    ],
];
