<?php

namespace App\Repository;

use App\Entity\PartRegion;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method PartRegion|null find($id, $lockMode = null, $lockVersion = null)
 * @method PartRegion|null findOneBy(array $criteria, array $orderBy = null)
 * @method PartRegion[]    findAll()
 * @method PartRegion[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PartRegionRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, PartRegion::class);
    }

    // /**
    //  * @return PartRegion[] Returns an array of PartRegion objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('p.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?PartRegion
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
