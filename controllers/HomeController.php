<?php
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

include __DIR__.'./../views/Home.php';

class HomeController{
    function home (Request $request, Response $response, $args){
        $data = array("planet" => "pianeta");
        $view = new Home();
        $view->setData($data);

        $response->getBody()->write($view->render());
        return $response;
    }
}