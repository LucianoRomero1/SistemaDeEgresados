<?php

namespace App\Repository;

use App\Entity\Titulos;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Titulos|null find($id, $lockMode = null, $lockVersion = null)
 * @method Titulos|null findOneBy(array $criteria, array $orderBy = null)
 * @method Titulos[]    findAll()
 * @method Titulos[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TitulosRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Titulos::class);
    }
    
    public function validarTitulo($titulo){
        if(is_numeric($titulo -> getNombreTitulo())){
            return false;
        }
        return true;
    }

    // /**
    //  * @return Titulos[] Returns an array of Titulos objects
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
    public function findOneBySomeField($value): ?Titulos
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
