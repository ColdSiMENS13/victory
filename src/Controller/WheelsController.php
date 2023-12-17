<?php

namespace App\Controller;

use App\Exceptions\BrandNotFoundException;
use App\Repository\WheelsRepository;
use App\Services\WheelsService;
use Doctrine\DBAL\Schema\View;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\HttpException;
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

    #[Route(path: 'api/v1/wheels/{wheelId}')]
    public function getBrandById(int $wheelId): Response
    {
        try {
            return $this->json($this->wheelsService->getWheelById($wheelId));
        } catch (BrandNotFoundException $exception) {
            throw new HttpException($exception->getCode(), $exception->getMessage());
        }
    }
}