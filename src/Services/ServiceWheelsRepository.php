<?php

namespace App\Services;

use App\Model\WheelsListCollection;
use App\Repository\WheelsBrandRepository;
use App\Repository\WheelsSizeRepository;

class ServiceWheelsRepository
{
    public function __construct(private WheelsBrandRepository $wheelsRepository, private WheelsSizeRepository $wheelsSizeRepository)
    {
    }

    public function getBrands(): WheelsListCollection
    {
        $brands = $this->wheelsRepository->findAllBrands();

        return new WheelsListCollection($brands);
    }

    public function getBrandsBySize(int $sizeId): WheelsListCollection
    {
        $items = $this->wheelsSizeRepository->findWheelBrandBySize($sizeId);
        return new WheelsListCollection($items);
    }
}