<?php

namespace App\Repository;

use App\Entity\Egresado;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Egresado|null find($id, $lockMode = null, $lockVersion = null)
 * @method Egresado|null findOneBy(array $criteria, array $orderBy = null)
 * @method Egresado[]    findAll()
 * @method Egresado[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class EgresadoRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Egresado::class);
    }

    // /**
    //  * @return Egresado[] Returns an array of Egresado objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('e')
            ->andWhere('e.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('e.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Egresado
    {
        return $this->createQueryBuilder('e')
            ->andWhere('e.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
