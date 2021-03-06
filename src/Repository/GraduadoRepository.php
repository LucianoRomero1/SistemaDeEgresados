<?php

namespace App\Repository;

use App\Entity\Graduado;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Graduado|null find($id, $lockMode = null, $lockVersion = null)
 * @method Graduado|null findOneBy(array $criteria, array $orderBy = null)
 * @method Graduado[]    findAll()
 * @method Graduado[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class GraduadoRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Graduado::class);
    }

    // /**
    //  * @return Graduado[] Returns an array of Graduado objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('g')
            ->andWhere('g.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('g.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Graduado
    {
        return $this->createQueryBuilder('g')
            ->andWhere('g.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
