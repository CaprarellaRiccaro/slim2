<?php

use Slim\Factory\AppFactory;

require __DIR__ . '/vendor/autoload.php';
require_once __DIR__.'/controllers/AlunniController.php';
$app = AppFactory::create();

$app->get('/alunni', 'AlunniController:index');
$app->get('/alunni/{nome}', 'AlunniController:alunno');

$app->run();
