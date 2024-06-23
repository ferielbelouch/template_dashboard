<?php

namespace App\Repository;

use App\Entity\Document;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Document>
 */
class DocumentRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Document::class);
    }

    public function findByCategory(string $category): array
    {
        return $this->createQueryBuilder('d') // Utilisez 'd' comme alias pour Document
        ->andWhere('d.category = :category') // Utilisez directement 'category'
        ->setParameter('category', $category)
        ->getQuery()
        ->getResult();
    }

   


}
