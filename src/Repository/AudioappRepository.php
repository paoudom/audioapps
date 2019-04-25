<?php

namespace App\Repository;

use App\Entity\Audioapp;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;
use Doctrine\ORM\QueryBuilder;

/**
 * @method Audioapp|null find($id, $lockMode = null, $lockVersion = null)
 * @method Audioapp|null findOneBy(array $criteria, array $orderBy = null)
 * @method Audioapp[]    findAll()
 * @method Audioapp[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class AudioappRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Audioapp::class);
    }

    /**
    * @return Query
    */
    public function findRecentQuery() : QueryBuilder
    {
        return $this->createQueryBuilder('a')
            ->orderBy('a.currentVersionReleaseDate', 'DESC')
            ->leftJoin('a.categorie', 'cat')
            ->addSelect('cat')
        ;
    }

    /**
    * @return Query
    */
    public function findByGroupeQuery($groupe) : QueryBuilder
    {   
        $query = $this->createQueryBuilder('a')
            ->leftJoin('a.categorie', 'cat')
            ->addSelect('cat')
            ->where('cat.groupe = :groupe')
            ->orderBy('a.currentVersionReleaseDate', 'DESC')
            ->setParameter('groupe', $groupe)
        ;
        return $query;
    }



    /*
    public function findOneBySomeField($value): ?Audioapp
    {
        return $this->createQueryBuilder('a')
            ->andWhere('a.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
