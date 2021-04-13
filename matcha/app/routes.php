<?php

$app->get('/', function (Request $request, Response $response, $args) {
    $response->getBody()->write("Hello world!");
    return $response;
});

$app->get('/hello/{name}', function ($request, $response, $args) {
    return $this->get('view')->render($response, 'layout.twig', [
        'name' => $args['name']
    ]);
});