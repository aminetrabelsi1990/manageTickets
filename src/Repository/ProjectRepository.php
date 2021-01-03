<?php

namespace App\Repository;

use App\Entity\Project;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Project|null find($id, $lockMode = null, $lockVersion = null)
 * @method Project|null findOneBy(array $criteria, array $orderBy = null)
 * @method Project[]    findAll()
 * @method Project[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ProjectRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Project::class);
    }

    public function findByUser($user)
    {
        return $this->createQueryBuilder('p')
        ->join('p.user', 'u')
        ->where('u = :user')
        ->setParameter('user', $user)
        ->getQuery()
        ->getResult();
    }

    public function countProjects()
    {
        $qb = $this->createQueryBuilder('p');
        $qb->select('COUNT(p)');

        return $qb->getQuery()->getSingleScalarResult();
    }

}
