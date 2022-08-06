<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use function Symfony\Component\String\u;

class VinylController
{
    #[Route('/')]
    public function homepage(): Response
    {
        return new Response('Title: Hi');
    }

    #[Route('/browse/{slug}')]
    public function browse(string $slug): Response
    {
//        $title = str_replace('-', ' ', $slug);
        $title = u(str_replace('-', ' ', $slug))->title(true);

        return new  Response('Genre: ' . $title);
    }
}
