<?php

require __DIR__.'/vendor/autoload.php';

$settings = require __DIR__.'/src/settings.php';

// var_dump($settings);

$app = new \Slim\App($settings);

require __DIR__.'/src/dependencies.php';

require __DIR__.'/src/routes.php';

$app->run();
