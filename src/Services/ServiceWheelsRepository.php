<?php

namespace App\Services;

use App\Model\WheelsBrandListCollection;
use App\Repository\WheelsBrandRepository;

class ServiceWheelsRepository
{
    private WheelsBrandRepository $wheelsRepository;

    public function __construct(WheelsBrandRepository $wheelsRepository)
    {
        $this->wheelsRepository = $wheelsRepository;
    }

    public function getBrands(): WheelsBrandListCollection
    {
        $brands = $this->wheelsRepository->findAllBrands();

        return new WheelsBrandListCollection($brands);
    }
}