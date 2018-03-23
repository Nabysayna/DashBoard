<?php

namespace App\Controllers;

use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;

use \App\Controller;

use \App\Models\UserModel;


class HomeController extends Controller {

  	public function accueil(Request $request, Response $response, $args){
  		if($request->getParsedBody()){ // requete Post
  			$this->_logger->addInfo("Page Accueil");
  			$response = $this->view->render($response, 'accueil.php');
  		}
  		else { //requete get
            $data = array('titlePage' => 'BBSINVEST');
            $this->_logger->addInfo("Page Principal");
	        $response = $this->view->render($response, 'index.php', $data);
  		}

        return $response;
    }
    
}