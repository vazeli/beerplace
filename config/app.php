<?php

return [
    'basePath' => dirname(__DIR__),

    'classMap' => [
        'app\folder' => 'app'
    ],

    'pathToLogFile' => dirname(__DIR__) . '\\' . 'log\log.txt',

    'defaultRoute' => 'main/index',
    'project_name' => 'beerplace',

    'assetManager' => [
        'css' => [
            '*' => ['assets' . DIRECTORY_SEPARATOR . 'spectre.min.css'],
        ],
        'js' => [
           
        ],
    ],

    'admin_email' => 'manwithjeans@gmail.com',
];