<?php

$app->get('/', App\Controllers\HomeController::class .':accueil');

$app->post('/', App\Controllers\HomeController::class .':accueil');
