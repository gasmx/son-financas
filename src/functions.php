<?php

use Zend\Diactoros\Response;
use Psr\Http\Message\ServerRequestInterface;

function response($data) {
    $response = new Response;
    $response->getBody()->write($data);
    return $response;
}