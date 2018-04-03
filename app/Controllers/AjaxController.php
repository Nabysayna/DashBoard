<?php
namespace App\Controllers;
use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;
use \App\Controller;
class AjaxController extends Controller {
  	public function connexion(Request $request, Response $response, $args){
        $data = $request->getParsedBody();
        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_URL => "http://bbstvnet.com/authentify.php",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_SSL_VERIFYPEER => 0,
            CURLOPT_SSL_VERIFYHOST => 0,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "POST",
            CURLOPT_POSTFIELDS => $data,
            CURLOPT_HTTPHEADER => array(
                "content-type: multipart/form-data"
            )
        ));

        $res = curl_exec($curl); $err = curl_error($curl); curl_close($curl);
        if ($err) {
            return $response->withJson(array('etat'=>false, 'message'=>"Erreur interne" ));
        } else {
            $donnee = json_decode($res);
            if ($donnee->etat) {
                $_SESSION['authToken'] = $donnee->token;
                return json_encode($donnee);
            } else {
                return json_encode($donnee);
            }
        }
        return json_encode($data);
    }
}