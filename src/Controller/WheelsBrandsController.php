<?php

namespace App\Controller;

use App\Exceptions\BrandNotFoundException;
use Symfony\Component\HttpFoundation\Session\Session;
use App\Services\WheelsBrandService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\HttpException;
use Symfony\Component\Routing\Annotation\Route;

class WheelsBrandsController extends AbstractController
{
    private $session;

    public function __construct(private WheelsBrandService $wheelsBrandService)
    {
        $this->session = new Session();
    }

    #[Route(path: 'api/v1/brands', name: 'brands')]
    public function getBrands(): Response
    {
        $this->session->start();
        return $this->render('brands.html.twig', ['brands' => $this->wheelsBrandService->getAllBrands()]);
    }

    #[Route(path: 'api/v1/brands/{brandId}')]
    public function getBrandById(int $brandId): Response
    {
        $this->session->set('brandId', $brandId);
        try {
            return $this->render('brand.html.twig', ['brand' => $this->wheelsBrandService->getBrandById($brandId)]);
        } catch (BrandNotFoundException $exception) {
            throw new HttpException($exception->getCode(), $exception->getMessage());
        }
    }
}