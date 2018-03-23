<?php

$app->get('/', App\Controllers\HomeController::class .':index');

$app->get('/accueil', App\Controllers\HomeController::class .':accueil');


$app->get('/logout', App\Controllers\HomeController::class .':logout');

