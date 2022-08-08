<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Twig\Environment;
use function Symfony\Component\String\u;

class VinylController extends AbstractController
{
    #[Route('/', name: 'app_homepage')]
    public function homepage(): Response
    {
//        return new Response('Title: Hi');
        $tracks = [
            ['song' => 'Gangsta\'s Paradise', 'artist' => 'Coolio'],
            ['song' => 'Waterfalls', 'artist' => 'TLC'],
            ['song' => 'Creep', 'artist' => 'Radiohead'],
            ['song' => 'Kiss from a Rose', 'artist' => 'Seal'],
            ['song' => 'On Bended Knee', 'artist' => 'Boyz II Men'],
            ['song' => 'Fantasy', 'artist' => 'Mariah Carey'],
        ];
        return $this->render('vinyl/homepage.html.twig', [
            'title'  => 'PB & Jams',
            'tracks' => $tracks,
        ]);
    }

    #[Route('/browse/{slug}', name: 'app_browse')]
    public function browse(string $slug = null): Response
    {
//        $title = str_replace('-', ' ', $slug);
        /*if ($slug) {
            $title = 'Genre: ' . u(str_replace('-', ' ', $slug))->title(true);
        } else {
            $title = 'All Genres';
        }*/
        $genre = $slug ? u(str_replace('-', ' ', $slug))->title(true) : null;

//        return new  Response($title);
        return $this->render('vinyl/browse.html.twig', [
           'genre' => $genre,
        ]);
    }
}
