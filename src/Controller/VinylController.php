<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

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
        return new  Response('Genre: ' . $slug);
    }
}
