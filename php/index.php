<?php
require 'vendor/autoload.php';
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Yaml\Yaml;
use Symfony\Component\Yaml\Exception\ParseException;

use Formstack\ApiClient;

try {
    $config = Yaml::parse(file_get_contents('../config/api.yml'));
} catch (ParseExcetion $e) {
    throw new ParseException("Could not parse YML file: %s" . $e->getMessage());
}

print_r($config);

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
