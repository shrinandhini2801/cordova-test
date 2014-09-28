<?php

use Transfluent\MobileApp\ServiceFactory;

error_reporting(E_ALL);

require __DIR__ . '/vendor/autoload.php';

$factory = new ServiceFactory();

$app = $factory->serviceInstance('Silex\Application');
$client = $factory->serviceInstance('Transfluent\BackendClient\BackendClient');
$log = $factory->serviceInstance('Monolog\Logger', 'Mobile-App');

$log_streamer = $factory->serviceInstance('Monolog\Handler\StreamHandler', '/var/log/transfluent/tf-mob.log');
$log->pushHandler($log_streamer);

$twig_filesystem = $factory->serviceInstance('Twig_Loader_Filesystem', __DIR__ . '/public/templates');
$twig = $factory->serviceInstance('Twig_Environment', $twig_filesystem);

$lang = $factory->modelInstance('Language', $client);

$title = $factory->libraryInstance('Title');
$header = $factory->libraryInstance('PageHeader');

$routes = $factory->newInstance('Routes');

$routes->home($app, $twig, $lang, $title, $header);

###########################################################################################
# For Development purpose debug mode is true and should be changed in Production to false #
###########################################################################################
$app['debug'] = true;

$app->run();
