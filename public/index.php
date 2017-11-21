<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once __DIR__ . '/../vendor/autoload.php';

use SONFin\Application;
use SONFin\ServiceContainer;
use SONFin\Plugins\RoutePlugin;
use SONFin\Plugins\PluginInterface;

use Psr\Http\Message\ServerRequestInterface;

$serviceContainer = new ServiceContainer;
$app = new Application($serviceContainer);

$app->plugin(new RoutePlugin);

$app->get('/home', function(ServerRequestInterface $request) {
    return response('Resposta com emitter do diactoros!');
});

$app->start();