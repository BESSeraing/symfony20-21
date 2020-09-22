<?php
namespace App\Controller;


use App\Entity\BlogPost;
use DateTime;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{

    /**
     * @Route("/", name="home")
     */
    public function home(){

        $blogPosts = [
            new BlogPost(1, new DateTime(), 'D. Pavlovic', 'Titre de blogpost', 'https://i.ytimg.com/vi/AjvdnzWfuDU/maxresdefault.jpg', 3.33),
            new BlogPost(22, new DateTime("27-06-1992"), 'A. Tazief', 'Quel beau volcan', 'https://blogs.alternatives-economiques.fr/system/files/styles/visuel_580x323/private/2019-05/fonds-ecran-volcan-en-eruption-11.jpg?itok=E47tuS8-', 13.99),
            new BlogPost(333, new DateTime("14-08-2015"), 'L. Prima', 'Meilleurs films de trompetistes', 'https://cdn.radiofrance.fr/s3/cruiser-production/2020/04/798bba4c-f3db-4a77-a9a1-b3cee2551eb8/600x337_wallace_roney_getty_david_redfern_jazz_a_vienne_96.jpg', 100000)
        ];

        $view = $this->renderView("pages/home.html.twig", ["blogPosts" => $blogPosts]);
        return new Response($view);
    }



}