<?php
require 'vendor/autoload.php';
require 'config/api.php';
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Formstack\ApiClient;

$apiClient = new ApiClient(1, 2, 3);

$app = new Silex\Application();
$app['debug'] = true;

$app->register(new Silex\Provider\TwigServiceProvider(), array(
    'twig.path' => __DIR__.'/templates',
));

$app->get('/', function () use ($app) {
    return $app['twig']->render('index.twig', []);
});

$app->post('form', function() use ($app) {
    return $app['twig']->render('index.twig', []);
});

$app->post('form', function(Request $request) use ($app) {
    // Handle $_POST here, sanitized way
    $name = $request->get('name');
    // Validate this beast..
    #return new Response('Thank you for your feedback!', 201);
});

$app->run();
