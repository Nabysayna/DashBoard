<?php

namespace App\Controllers;

use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;

use \App\Controller;

use \App\Models\UserModel;


class HomeController extends Controller {

  	public function index(Request $request, Response $response, $args){
      header("Access-Control-Allow-Origin: *");
      $data = array('titlePage' => 'BBSINVEST', 'baseUrl' => $request->getUri()->getBasePath() );
      $response = $this->view->render($response, 'index.php',$data);
      return $response;
    }

  public function accueil(Request $request, Response $response, $args){
  	header("Access-Control-Allow-Origin: *");
  	$response = $this->view->render($response, 'accueil.php');
    return $response;
  }

  public function logout(Request $request, Response $response, $args){
    header("Access-Control-Allow-Origin: *");
    return $this->view->render($response, 'logout.php'); 
  }
 
    
}