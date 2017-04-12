<?php

// Psr Request e Response
use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;

// [/{name}] -> segmento, ele é opicional, posso passar apenas hello/, hello, hello/cleiton
$app->get('/hello[/{name}]', function (Request $request, Response $response) {

    $name = $request->getAttribute('name') ?? 'World';

    $response->getBody()->write("Hello, {$name}");

    return $response;

});

$app->get('/html/{name}', function (Request $request, Response $response, $args) {

    // $this->renderer é o container configurado no dependecies

    $this->logger->info("Slim-App / route");
    return $this->renderer->render($response, 'index.phtml', $args);

});