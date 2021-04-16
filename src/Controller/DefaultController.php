<?php

// attribution du namespace
namespace App\Controller;

//chargement de la classe abstraite gérant les controller dans symfony
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

//chargement du module de reponse
use Symfony\Component\HttpFoundation\Response;

//chargement des annotations de routes
use Symfony\Component\Routing\Annotation\Route;

/**
 * Description of defaultController extends de AbstarctController
 */

class DefaultController extends AbstractController
{
    public function index(){
        return new Response("Hello World!",200);

    }

    public function api(){
        $array = ["identité" => 
        ["nom"=>"Benze", "prénom"=>"Golaso"],
        ["nom"=>"chichi", "prénom"=>"benzegoal"],
        ];
        return $this->json($array);
    }
    public function helloToYou($name){
        return new Response("Hello $name",200);
    }
    /**
     * @Route(name="page",path="/page/{idPage}",requirements={"idPage"="\d+"})
     * 
     */
    public function page($idPage){
        $array = [1=>"lulu",2=>"lala",3=>"boubou"];
        return new Response($array[$idPage]);

    }
}