<?php


namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class BlogController extends AbstractController
{
    /**
     * @Route("/post/{id<\d+>}", name="view_blog_post", methods={"POST", "GET"})
     */
    public function blogPost(int $id) {
        // Version longue
//        $view = $this->renderView("pages/home.html.twig", ["title" => "POST numéro ".$id]);
        return new Response("affichage du post ".$id);
        // Version courte
//        return $this->render("pages/home.html.twig", ["title" => "POST numéro ".$id]);
    }

}