<?php

namespace App\Controller;

use App\Entity\WheelsBrand;
use App\Exceptions\BrandNotFoundException;
use App\Repository\WheelsBrandRepository;
use App\Services\WheelsBrandService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\HttpException;
use Symfony\Component\Routing\Annotation\Route;

class WheelsBrandsController extends AbstractController
{
    public function __construct(private WheelsBrandService $wheelsBrandService, private WheelsBrandRepository $wheelsBrandRepository)
    {
    }

    #[Route(path: 'api/v1/brands', name: 'brands')]
    public function getBrands(): Response
    {
        //var_dump($this->wheelsBrandService->getAllBrands());
        return $this->render('brands.html.twig', ['brands' => $this->wheelsBrandService->getAllBrands()]);
    }

    #[Route(path: 'api/v1/brands/{brandId}')]
    public function getBrandById(int $brandId): Response
    {
        try {
            return $this->render('brand.html.twig', ['brand' => $this->wheelsBrandService->getBrandById($brandId)]);
        } catch (BrandNotFoundException $exception) {
            throw new HttpException($exception->getCode(), $exception->getMessage());
        }
    }

    #[Route(path: 'main', name: 'allBrands')]
    public function viewAllBrands(): Response
    {
        $brands = $this->wheelsBrandRepository->findAllBrands();
        return $this->render('brands.html.twig', ['brands' => $brands]);
    }
}