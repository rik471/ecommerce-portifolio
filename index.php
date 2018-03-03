<?php

require_once("vendor/autoload.php");

$app = new Slim\Slim();

$app->config('debug', true);

$app->get('/', function() {

	$page = new Rickdb\Page();

	$page->setTpl("index");

});

$app->run();

?>
