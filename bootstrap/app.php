<?php

session_start();
error_reporting(E_ALL);
ini_set("display_errors", 1);

require __DIR__ . "/../vendor/autoload.php";

$app = new \Slim\App([
	'settings' => [
		'displayErrorDetails' => true,
	]
]);

$container = $app->getContainer();

$container['view'] = function($container) {
	$view = new \Slim\Views\Twig(__DIR__ . "/../resources/views", [
		'cache' => false,
	]);

	$view->addExtension(new \Slim\Views\TwigExtension(
		$container->router,
		$container->request->getUri()
	));

	return $view;
};

require __DIR__ . "/../app/routes.php";
