<?php


namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class BlogController extends AbstractController
{
    /**
     * @Route("/post/{year<\d{4}>}/{id<\d+>}", name="view_blog_post", methods={"POST", "GET"})
     */
    public function blogPost(int $id, string $year) {
        // Version longue
//        $view = $this->renderView("pages/home.html.twig", ["title" => "POST numéro ".$id]);
//        return new Response($view);
        // Version courte
        return $this->render("pages/home.html.twig", ["title" => "POST numéro ".$id]);
    }

}