<?php

namespace App\Services;

use App\Exceptions\WheelNotFoundException;
use App\Model\ListCollection;
use App\Repository\WheelsRepository;

class WheelsService
{
    public function __construct(private WheelsRepository $wheelsRepository)
    {
    }

    public function getAllWheels(): ListCollection
    {
        $wheels = $this->wheelsRepository->findAllWheels();

        return new ListCollection($wheels);
    }

    public function getWheelById(int $wheelId): array
    {
        $brand = $this->wheelsRepository->find($wheelId);

        if($brand === null)
        {
            throw new WheelNotFoundException();
        }

        return $this->wheelsRepository->findWheelById($wheelId);
    }
}