<?php

namespace App\Tests\Services;

use App\Entity\WheelsBrand;
use App\Exceptions\BrandNotFoundException;
use App\Model\ListCollection;
use App\Repository\WheelsBrandRepository;
use App\Services\WheelsBrandService;
use PHPUnit\Framework\TestCase;

class WheelsBrandServiceTest extends TestCase
{
    public function testGetAllBrands(): void
    {
        $brands = (new WheelsBrand())->setId(1)->setName('Test');
        $repository = $this->createMock(WheelsBrandRepository::class);
        $repository->expects($this->once())
            ->method('findAllBrands')
            ->willReturn([$brands]);

        $service = new WheelsBrandService($repository);
        $expected = new ListCollection([$brands]);

        $this->assertEquals($expected, $service->getAllBrands());
    }

    public function testGetBrandByIdNotFound(): void
    {
        $brandRepository = $this->createMock(WheelsBrandRepository::class);
        $brandRepository->expects($this->once())
            ->method('find')
            ->with(140)
            ->willThrowException(new BrandNotFoundException());

        $this->expectException(BrandNotFoundException::class);

        (new WheelsBrandService($brandRepository))->getBrandById(140);
    }

    public function testGetBrandById(): void
    {
        $brands = (new WheelsBrand())->setId(130)->setName('Test');
        $brandRepository = $this->createMock(WheelsBrandRepository::class);
        $brandRepository->expects($this->once())
            ->method('find')
            ->with(130)
            ->willReturn([$brands]);

        $service = new WheelsBrandService($brandRepository);
        $expected = new ListCollection([$brands]);

        $this->assertEquals($expected, $service->getBrandById(130));
    }
}
