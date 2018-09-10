<?php
namespace App\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
/**
 * Um Annotationen ausführen zu können muss man [composer require annotations] und
 * 
 */


class ArticleController {
/**
      * @Route("/lucky/number")
      */

    public function index(){
        return new Response("<html><body><h1>Hello</h1></body></html>");
    }
}



?>