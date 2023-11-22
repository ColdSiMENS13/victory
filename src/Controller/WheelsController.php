<?php

namespace App\Controller;

use App\Services\WheelsService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class WheelsController extends AbstractController
{
    public function __construct(private WheelsService $wheelsService)
    {
    }

    #[Route(path: 'api/v1/wheels', name: 'wheels')]
    public function getBrands(): Response
    {
        return $this->json($this->wheelsService->getAllWheels());
    }
}