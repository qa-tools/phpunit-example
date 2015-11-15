<?php

use Silex\Application;
use Silex\Provider\TwigServiceProvider;
use Silex\Provider\UrlGeneratorServiceProvider;
use Symfony\Component\HttpFoundation\Request;

require_once '../vendor/autoload.php';

$app = new Application();
$app['debug'] = true;


// Register middlewares.
$app->before(function (Request $request, Application $app) {
	$app['asset_path'] = $request->getBasePath() . '/assets';
});


// Register service providers.
$app->register(new TwigServiceProvider(), array(
	'twig.path' => dirname(__DIR__) . '/views',
));
$app->register(new UrlGeneratorServiceProvider());


// Define routes.
$app->get('/', function () use ($app) {
	return $app['twig']->render('index.twig');
})->bind('index');

$app->get('/PageObject/', function () use ($app) {
	return $app['twig']->render('PageObject/index.twig');
})->bind('PageObject.index');

$app->post('/PageObject/', function () use ($app) {
	return $app['twig']->render('PageObject/index.twig', array('login_error' => 1));
});

$app->get('/HtmlElements/', function () use ($app) {
	return $app['twig']->render('HtmlElements/index.twig');
})->bind('HtmlElements.index');

$app->post('/HtmlElements/', function () use ($app) {
	return $app['twig']->render('HtmlElements/index.twig', array('login_error' => 1));
});

$app->get('/BEM/', function () use ($app) {
	return $app['twig']->render('BEM/index.twig');
})->bind('BEM.index');

$app->post('/BEM/', function () use ($app) {
	return $app['twig']->render('BEM/index.twig', array('login_error' => 1));
});

// Run the app.
$app->run();
