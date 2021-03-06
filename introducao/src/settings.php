<?php

// Develop Mostrar ou ocultar erros slim
return [

    'settings' => [

        'displayErrorDetails' => true,
        
        'renderer' => [

            'template_path' =>__DIR__.'/../template/'

        ],

        'logger' => [

            'name' => 'slim-app',
            'path' => __DIR__.'/../logs/app.log',
            'level' => \Monolog\Logger::DEBUG

        ]

    ]

];