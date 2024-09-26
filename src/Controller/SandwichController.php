<?php

namespace App\Controller;

use App\Repository\SandwichRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Serializer\Serializer;

class SandwichController extends AbstractController
{
    #[Route('/api/sandwich', name: 'app_sandwich')]
    public function index(SandwichRepository $sandwichRepository): Response
    {
        $sandwiches = $sandwichRepository->findAll();
     //   $sandwichesJson = $serializer->serialize($sandwiches, 'json');
       // dd($sandwichesJson);
      return $this->json($sandwiches, 200, [],['groups' => ['sandwichesJson']]);
    }
    #[Route('/api/me', name: 'app_me')]
    public function me(): Response
    {

        //   $sandwichesJson = $serializer->serialize($sandwiches, 'json');
        // dd($sandwichesJson);
        return $this->json($this->getUser(), 200);
    }
}
