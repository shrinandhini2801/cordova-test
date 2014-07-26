<?php

error_reporting(E_ALL);

require __DIR__ . DIRECTORY_SEPARATOR . '../vendor/autoload.php';

$app = new Silex\Application();
$twig = new Twig_Environment(new Twig_Loader_Filesystem(__DIR__ . DIRECTORY_SEPARATOR . '../app/templates'));
$client = new Transfluent\BackendClient\BackendClient();
$lang = new Transfluent\MobileApp\model\Language($client);

$title = new Transfluent\MobileApp\lib\Title();
$header = new Transfluent\MobileApp\lib\PageHeader();

###########################################################################################
# For Development purpose debug mode is true and should be changed in Production to false #
###########################################################################################
$app['debug'] = true;

require __DIR__ . DIRECTORY_SEPARATOR .  '../app/routes.php';

$app->run();