<?php

namespace App\Repository;

use App\Entity\TitulacionesAlcanzadasOrig;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method TitulacionesAlcanzadasOrig|null find($id, $lockMode = null, $lockVersion = null)
 * @method TitulacionesAlcanzadasOrig|null findOneBy(array $criteria, array $orderBy = null)
 * @method TitulacionesAlcanzadasOrig[]    findAll()
 * @method TitulacionesAlcanzadasOrig[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TitulacionesAlcanzadasOrigRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, TitulacionesAlcanzadasOrig::class);
    }

    // /**
    //  * @return TitulacionesAlcanzadasOrig[] Returns an array of TitulacionesAlcanzadasOrig objects
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
    public function findOneBySomeField($value): ?TitulacionesAlcanzadasOrig
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
