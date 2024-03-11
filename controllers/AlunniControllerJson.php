<?php

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

require_once (__DIR__.'/../Classe.php');

class AlunniControllerJson{
    function aal(Request $request, Response $response, $args){
        $classe = new Classe();
        $response->getBody()->write(json_encode($classe));
        return $response->withHeader("Content-type", "application/json")->withStatus(200);
    }
}
