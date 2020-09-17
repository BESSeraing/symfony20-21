<?php
namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{

    /**
     * @Route("/", name="home")
     */
    public function home(){
        $view = $this->renderView("pages/home.html.twig", ["title" => "Bonjour Tout Le Monde !"]);
        return new Response($view);
    }



}