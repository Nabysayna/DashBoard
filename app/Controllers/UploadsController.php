<?php

namespace App\Controllers;

use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;

use \App\Controller;


class UploadsController extends Controller {

    public function importfile(Request $request, Response $response, $args){
        $uploadedFiles = $request->getUploadedFiles();
        $uploadedFile = $uploadedFiles['file'];

        if($uploadedFile->getError() === UPLOAD_ERR_OK){
            $originalName = $uploadedFile->getClientFilename();
            $uploadedFile->moveTo("./uploads/".$originalName);
            return $response->withJson(['status'=>true, 'originalName'=>$originalName]);
        }
        else{
            return $response->withJson(['status'=> false]);
        }
    }

}