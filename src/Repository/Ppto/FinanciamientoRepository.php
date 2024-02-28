<?php

namespace App\Repository\Ppto;

use App\Entity\Ppto\Financiamiento;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Financiamiento>
 *
 * @method Financiamiento|null find($id, $lockMode = null, $lockVersion = null)
 * @method Financiamiento|null findOneBy(array $criteria, array $orderBy = null)
 * @method Financiamiento[]    findAll()
 * @method Financiamiento[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class FinanciamientoRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Financiamiento::class);
    }

    //    /**
    //     * @return Financiamiento[] Returns an array of Financiamiento objects
    //     */
    //    public function findByExampleField($value): array
    //    {
    //        return $this->createQueryBuilder('f')
    //            ->andWhere('f.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->orderBy('f.id', 'ASC')
    //            ->setMaxResults(10)
    //            ->getQuery()
    //            ->getResult()
    //        ;
    //    }

    //    public function findOneBySomeField($value): ?Financiamiento
    //    {
    //        return $this->createQueryBuilder('f')
    //            ->andWhere('f.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->getQuery()
    //            ->getOneOrNullResult()
    //        ;
    //    }
}
