<?php

namespace App\Services;

use App\Exceptions\BrandNotFoundException;
use App\Model\ListCollection;
use App\Repository\WheelsBrandRepository;

class WheelsBrandService
{
    public function __construct(private WheelsBrandRepository $wheelsBrandRepository)
    {
    }

    public function getAllBrands(): ListCollection
    {
        $brands = $this->wheelsBrandRepository->findAllBrands();

        return new ListCollection($brands);
    }

    public function getBrandById(int $brandId): array
    {
        $brand = $this->wheelsBrandRepository->find($brandId);

        if($brand === null)
        {
            throw new BrandNotFoundException();
        }

        return $this->wheelsBrandRepository->findBrandById($brandId);
    }
}