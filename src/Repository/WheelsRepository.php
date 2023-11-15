<?php

namespace App\Repository;

use App\Entity\Wheels;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Book>
 *
 * @method Wheels|null find($id, $lockMode = null, $lockVersion = null)
 * @method Wheels|null findOneBy(array $criteria, array $orderBy = null)
 * @method Wheels[]    findAll()
 * @method Wheels[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class WheelsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Wheels::class);
    }

    public function findAllWheels(): array
    {
        return $this->findAll();
    }
}
