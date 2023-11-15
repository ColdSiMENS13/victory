<?php

namespace App\Services;

use App\Model\ListCollection;
use App\Repository\WheelsRepository;

class WheelsService
{
    public function __construct(private WheelsRepository $wheelsRepository)
    {
    }

    public function getAllBrands(): ListCollection
    {
        $wheels = $this->wheelsRepository->findAllWheels();
        return new ListCollection($wheels);
    }
}