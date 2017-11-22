<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once __DIR__ . '/../vendor/autoload.php';

use SONFin\Application;
use SONFin\ServiceContainer;
use SONFin\Plugins\RoutePlugin;
use SONFin\Plugins\ViewPlugin;
use SONFin\Plugins\PluginInterface;
use Psr\Http\Message\ServerRequestInterface;

$app = new Application(new ServiceContainer);

$app->plugin(new RoutePlugin);
$app->plugin(new ViewPlugin);

$app->get('/', function(ServerRequestInterface $request) use ($app) {
    $view = $app->service('view.renderer');
    return $view->render('category-costs/list.html.twig');
});

$app->get('/home', function(ServerRequestInterface $request) {
    return response('Resposta com emitter do diactoros!');
});

$app->start();