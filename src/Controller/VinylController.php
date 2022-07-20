<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class VinylController extends  AbstractController
{
    #[Route('/', name: 'app_dashboard')]
    public  function  homepage(){

        $categories = [
            ["title" => "newTitle", "desc" => "best name"],
            ["title" => "newTitle", "desc" => "best name"],
            ["title" => "newTitle", "desc" => "best name"],
            ["title" => "newTitle", "desc" => "best name"],

        ];
        return $this->render('index.html.twig',[
            "title" => "Index page",
            "categories" => $categories
        ]);
    }

    #[Route('/browse/{name}')]
    public  function  Browse($name = null){
        if($name){
            $title = "My name is: " . $name;
        }else{
            $title = "WTF is my name ?";
        }

        return new Response($title);
    }

}