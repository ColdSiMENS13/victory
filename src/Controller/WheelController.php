<?php

namespace App\Controller;

use App\Services\WheelsService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class WheelController extends AbstractController
{
    public function __construct(private WheelsService $wheelsService)
    {
    }

    #[Route('/brands')]
    public function getBrands(): Response
    {
        return $this->json($this->wheelsService->getAllBrands());
    }
}