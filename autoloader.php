<?php

require_once __DIR__.'/vendor/symfony/class-loader/Symfony/Component/ClassLoader/ClassLoader.php';

use Symfony\Component\ClassLoader\ClassLoader;

$loader = new ClassLoader();
$loader->register();

$loader->addPrefix('Symfony', __DIR__.'/vendor/symfony/class-loader');
$loader->addPrefix('Symfony', __DIR__.'/vendor/symfony/finder');
$loader->addPrefix('Visualizer', __DIR__.'/src');
