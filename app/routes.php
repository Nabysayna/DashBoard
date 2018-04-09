<?php

$app->get('/', App\Controllers\HomeController::class .':index');

$app->get('/accueil', App\Controllers\HomeController::class .':accueil');

$app->get('/erreur', App\Controllers\HomeController::class .':erreur');

$app->get('/essaie', App\Controllers\HomeController::class .':essaie');

$app->post('/ajaxconnexion', App\Controllers\AjaxController::class .':connexion');

$app->group('/ajax', function () {

    $this->post('/rechercheom', App\Controllers\AjaxController::class .':rechercheom');


});