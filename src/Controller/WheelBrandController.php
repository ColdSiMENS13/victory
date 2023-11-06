<?php

namespace App\Controller;

use App\Services\ServiceWheelsRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class WheelBrandController extends AbstractController
{
    public function __construct(private ServiceWheelsRepository $serviceWheelsRepository)
    {
    }

    #[Route('/wheelBrands')]
    public function getBrands(): Response
    {
        return $this->json($this->serviceWheelsRepository->getBrands());
    }

    #[Route(path: '/wheelBrands/{id}')]
    public function getBrandsBySize(int $id): Response
    {
        return $this->json($this->serviceWheelsRepository->getBrandsBySize($id));
    }
}