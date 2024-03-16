<?php

declare(strict_types=1);

return [

    'connections' => [
        'pulse' => [
            'driver' => 'sqlite',
            'url' => env('DB_URL'),
            'database' => env('PULSE_DATABASE', database_path('pulse.sqlite')),
            'prefix' => '',
            'foreign_key_constraints' => env('DB_FOREIGN_KEYS', true),
        ],
    ],

];
