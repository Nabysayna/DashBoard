<?php

namespace App\Controllers;

use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;

use \App\Controller;

use \App\Models\UserModel;


class HomeController extends Controller {

  	public function accueil(Request $request, Response $response, $args){
  		header("Access-Control-Allow-Origin: *");
        $this->_logger->addInfo("Fist Use");
        $response = $this->view->render($response, 'index.php');
        return $response;
    }
    
}