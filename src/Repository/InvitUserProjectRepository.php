<?php

namespace App\Repository;

use App\Entity\InvitUserProject;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method InvitUserProject|null find($id, $lockMode = null, $lockVersion = null)
 * @method InvitUserProject|null findOneBy(array $criteria, array $orderBy = null)
 * @method InvitUserProject[]    findAll()
 * @method InvitUserProject[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class InvitUserProjectRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, InvitUserProject::class);
    }

    // /**
    //  * @return InvitUserProject[] Returns an array of InvitUserProject objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('i')
            ->andWhere('i.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('i.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?InvitUserProject
    {
        return $this->createQueryBuilder('i')
            ->andWhere('i.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
