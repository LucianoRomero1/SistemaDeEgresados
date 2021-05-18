<?php

namespace App\Repository;

use App\Entity\Carreras;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Carreras|null find($id, $lockMode = null, $lockVersion = null)
 * @method Carreras|null findOneBy(array $criteria, array $orderBy = null)
 * @method Carreras[]    findAll()
 * @method Carreras[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CarrerasRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Carreras::class);
    }

    public function validarCarrera($carrera){
        if(is_numeric($carrera -> getNombreCarrera())){
            return false;
        }
        return true;
    }


    // /**
    //  * @return Carreras[] Returns an array of Carreras objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('c.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Carreras
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
