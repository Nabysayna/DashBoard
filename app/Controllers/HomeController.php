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
  			$response = $this->view->render($response, 'accueil.php');
  		}
  		else { //requte get
        $data = array('titlePage' => 'BBSINVEST', 'baseUrl' => $request->getUri()->getBasePath() );

	        $response = $this->view->render($response, 'index.php',$data);

  		}
        return $response;
    }
    
}