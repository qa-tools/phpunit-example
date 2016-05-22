<?php

use Silex\Application;
use Silex\Provider\SessionServiceProvider;
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
$app->register(new SessionServiceProvider());

// Define routes.
$routes = array(
	'/' => 'index',
	'/register/' => 'register',
);

foreach ( $routes as $path => $template ) {
	$app->match($path, function () use ($app, $template) {
		/** @var Request $request */
		$request = $app['request'];
		$template_params = array(
			'form_data' => array(
				'login' => array(),
				'register' => array(),
			),
			'logged_in' => $app['session']->get('logged_in'),
		);

		if ( $request->getMethod() === 'GET' && $request->query->get('logout') ) {
			$app['session']->set('logged_in', false);

			list($request_uri, ) = explode('?', $request->getRequestUri(), 2);

			return $app->redirect($request_uri);
		}

		if ( $request->getMethod() === 'POST' ) {
			$events = $request->request->get('events', array());

			// Process "Login Sidebox" form.
			if ( is_array($events) && array_key_exists('u.login-sidebox', $events) ) {
				$form_data = $request->request->get('u_login-sidebox');
				$form_data = $form_data[-2];
				$template_params['form_data']['login_sidebox'] = $form_data;

				if ( $form_data['UserLogin'] === 'username' && $form_data['UserPassword'] === 'password' ) {
					$app['session']->set('logged_in', true);

					return $app->redirect($request->request->get('success_url'));
				}
				else {
					$template_params['login_error'] = 1;
				}
			}

			// Process "Registration" form.
			if ( is_array($events) && array_key_exists('u.register', $events) ) {
				$form_data = $request->request->get('u_register');
				$form_data = $form_data[-2];
				$template_params['form_data']['register'] = $form_data;

				$errors = array();
				$required_fields = array('Username', 'Password', 'VerifyPassword');

				foreach ( $required_fields as $required_field ) {
					if ( !strlen($form_data[$required_field]) ) {
						$errors[$required_field] = 'Field is required.';
					}
				}

				if ( strlen($form_data['Password'])
					&& strlen($form_data['VerifyPassword'])
					&& $form_data['Password'] !== $form_data['VerifyPassword']
				) {
					$errors['VerifyPassword'] = 'The value doesn\'t match one in "Password" field.';
				}

				if ( $errors ) {
					$template_params['register_errors'] = $errors;
				}
				else {
					return $app->redirect($request->request->get('success_url'));
				}
			}
		}

		return $app['twig']->render($template . '.twig', $template_params);
	})->bind(str_replace('/', '.', $template));
}

$app->get('/category/{category_name}/', function ($category_name) use ($app) {
	return $app['twig']->render('category.twig', array(
		'category_name' => $category_name,
	));
});

// Run the app.
$app->run();
