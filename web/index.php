<?php
/**
 * Created by PhpStorm.
 * User: Luis Solorzano
 * Date: 08-20-16
 * Time: 10:42 PM
 */

use Davis\http\thunder\route\router\Routing;
use Davis\loader\Loader;
use Dotenv\Dotenv;

require __DIR__ . '/../vendor/autoload.php';
Routing::Load();
Loader::Routing();
Routing::start();
Loader::Load();
$dotenv = Dotenv::createUnsafeImmutable(__DIR__);
$dotenv->load();
