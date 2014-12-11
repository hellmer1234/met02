<?php
require 'vendor/autoload.php';
$app = new \Slim\Slim();

$app->get('/transaction/:id',  'getTransaction');

function getTransaction($id)
{
    echo $id ;
}


$app->run();