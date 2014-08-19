<?php
/**
 * Created by PhpStorm.
 * User: goku
 * Date: 18/08/2014
 * Time: 19:28
 */
$container = require __DIR__ . '/../app/bootstrap.php';
$container->getService('application')->run();
