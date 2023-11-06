<?php

namespace App\Repository;

use App\Entity\WheelSize;
use App\Services\ServiceWheelsRepository;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Book>
 *
 * @method WheelSize|null find($id, $lockMode = null, $lockVersion = null)
 * @method WheelSize|null findOneBy(array $criteria, array $orderBy = null)
 * @method WheelSize[]    findAll()
 * @method WheelSize[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class WheelsSizeRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, WheelSize::class);
    }

    public function findWheelBrandBySize(int $id): array
    {
        $query = $this->_em->createQuery('SELECT b FROM App\Entity\WheelsBrand b WHERE :wheelId MEMBER OF b.wheelSize');
        $query->setParameter('wheelId', $id);

        return $query->getResult();
    }
}
