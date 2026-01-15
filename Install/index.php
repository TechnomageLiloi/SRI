<?php

include_once __DIR__ . '/Paper.phar';
$app = new \Liloi\SRI\Application([
    'root' => __DIR__ . '/Sandbox' // Here you must change to real folder
]);

echo $app->compile();