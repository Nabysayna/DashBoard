<?php

namespace App\Controllers;

use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;

use \App\Controller;

use \App\Models\UserModel;


class HomeController extends Controller {

  	public function accueil(Request $request, Response $response, $args){
  		header("Access-Control-Allow-Origin: *");
  		if($request->getParsedBody()){ // verifie requete Post
  			$this->_logger->addInfo("Fist Accueil");
  			$response = $this->view->render($response, 'accueil.php');
  		}
  		else { //requte get
  			$this->_logger->addInfo("Fist Use");
	        $response = $this->view->render($response, 'index.php');
  		}
        return $response;
    }
    
}