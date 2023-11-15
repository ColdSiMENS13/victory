<?php

namespace App\Controller;

use App\Exceptions\BrandNotFoundException;
use App\Services\WheelsBrandService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\HttpException;
use Symfony\Component\Routing\Annotation\Route;

class WheelsBrandsController extends AbstractController
{
    public function __construct(private WheelsBrandService $wheelsBrandService)
    {
    }

    #[Route(path: '/brands', name: 'brands')]
    public function getBrands(): Response
    {
        return $this->json($this->wheelsBrandService->getAllBrands());
    }

    #[Route(path: '/brands/{brandId}')]
    public function getBrandById(int $brandId): Response
    {
        try {
            return $this->json($this->wheelsBrandService->getBrandById($brandId));
        } catch (BrandNotFoundException $exception) {
            throw new HttpException($exception->getCode(), $exception->getMessage());
        }
    }
}