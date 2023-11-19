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

    public function getBrandById(int $brandId): ListCollection
    {
        $brand = $this->wheelsBrandRepository->find($brandId);

        if($brand === null)
        {
            throw new BrandNotFoundException();
        }

        return new ListCollection($this->wheelsBrandRepository->findBrandById($brandId));
    }
}