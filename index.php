<?php

use Slim\Factory\AppFactory;

require __DIR__ . '/vendor/autoload.php';
require_once __DIR__.'/controllers/AlunniController.php';
require_once __DIR__.'/controllers/AlunniControllerJson.php';

$app = AppFactory::create();

$app->get('/alunni', 'AlunniController:index');
$app->get('/alunni/{nome}', 'AlunniController:alunno');
$app->get('/json/alunni', 'AlunniControllerJson:aal');
$app->get('/json/alunni/{nome}', 'AlunniControllerJson:alunno');

$app->run();
