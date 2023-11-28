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
        $query = $this->_em->createQuery('SELECT w.id, b.name, w.wheelsDiameter, w.wheelsHeight, w.wheelsWidth
        FROM App\Entity\Wheels w
        JOIN w.wheelsBrand b');

        return $query->getResult();
    }

    public function findWheelById(int $wheelId): array
    {
        $query = $this->_em->createQuery('SELECT w.id, b.name, w.wheelsDiameter, w.wheelsHeight, w.wheelsWidth
        FROM App\Entity\Wheels w
        JOIN w.wheelsBrand b
        WHERE w.id = :wheelId');

        $query->setParameter('wheelId', $wheelId);

        return $query->getResult();
    }
}
