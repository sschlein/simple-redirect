<?php
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

require '../vendor/autoload.php';

$dotenv = new Dotenv\Dotenv('../');
$dotenv->load();

$app = new \Slim\App;

$app->get('/', function (Request $request, Response $response) {

    return $response->withStatus(302)->withHeader('Location', getenv('SLACK_URL'));
});

$app->run();