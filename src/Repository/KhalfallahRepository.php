<?php

namespace App\Repository;

use App\Entity\Khalfallah;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method Khalfallah|null find($id, $lockMode = null, $lockVersion = null)
 * @method Khalfallah|null findOneBy(array $criteria, array $orderBy = null)
 * @method Khalfallah[]    findAll()
 * @method Khalfallah[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class KhalfallahRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Khalfallah::class);
    }

    // /**
    //  * @return Khalfallah[] Returns an array of Khalfallah objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('k')
            ->andWhere('k.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('k.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Khalfallah
    {
        return $this->createQueryBuilder('k')
            ->andWhere('k.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
