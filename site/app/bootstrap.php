<?php
require_once __DIR__.'/../vendor/autoload.php';

$containerBuilder = new \DI\ContainerBuilder();

// Set up settings
$settings = require __DIR__.'/../app/settings.php';
$settings($containerBuilder);

// Set up dependencies
$dependencies = require __DIR__.'/../app/dependencies.php';
$dependencies($containerBuilder);

// Set up repositories
$repositories = require __DIR__.'/../app/repositories.php';
$repositories($containerBuilder);

return $containerBuilder->build();
