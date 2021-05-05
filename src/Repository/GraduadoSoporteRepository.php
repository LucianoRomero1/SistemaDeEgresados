<?php

namespace App\Repository;

use App\Entity\GraduadoSoporte;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method GraduadoSoporte|null find($id, $lockMode = null, $lockVersion = null)
 * @method GraduadoSoporte|null findOneBy(array $criteria, array $orderBy = null)
 * @method GraduadoSoporte[]    findAll()
 * @method GraduadoSoporte[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class GraduadoSoporteRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, GraduadoSoporte::class);
    }

    // /**
    //  * @return GraduadoSoporte[] Returns an array of GraduadoSoporte objects
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
    public function findOneBySomeField($value): ?GraduadoSoporte
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
