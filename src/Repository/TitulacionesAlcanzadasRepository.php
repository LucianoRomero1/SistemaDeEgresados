<?php

namespace App\Repository;

use App\Entity\TitulacionesAlcanzadas;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method TitulacionesAlcanzadas|null find($id, $lockMode = null, $lockVersion = null)
 * @method TitulacionesAlcanzadas|null findOneBy(array $criteria, array $orderBy = null)
 * @method TitulacionesAlcanzadas[]    findAll()
 * @method TitulacionesAlcanzadas[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TitulacionesAlcanzadasRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, TitulacionesAlcanzadas::class);
    }

    // /**
    //  * @return TitulacionesAlcanzadas[] Returns an array of TitulacionesAlcanzadas objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('t')
            ->andWhere('t.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('t.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?TitulacionesAlcanzadas
    {
        return $this->createQueryBuilder('t')
            ->andWhere('t.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
