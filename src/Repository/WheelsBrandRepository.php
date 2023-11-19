<?php

namespace App\Repository;

use App\Entity\WheelsBrand;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Collections\Criteria;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Book>
 *
 * @method WheelsBrand|null find($id, $lockMode = null, $lockVersion = null)
 * @method WheelsBrand|null findOneBy(array $criteria, array $orderBy = null)
 * @method WheelsBrand[]    findAll()
 * @method WheelsBrand[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class WheelsBrandRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, WheelsBrand::class);
    }

    public function findAllBrands(): array
    {
        return $this->findBy([], ['name' => Criteria::ASC]);
    }

    public function findBrandById(int $brandId): array
    {
        $query = $this->_em->createQuery('SELECT b FROM App\Entity\WheelsBrand b WHERE b.id = :brandId');
        $query->setParameter('brandId', $brandId);

        return $query->getResult();
    }
}
