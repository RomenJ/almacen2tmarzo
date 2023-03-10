<?php

namespace App\Repository;

use App\Entity\Objetosalmacen;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Objetosalmacen>
 *
 * @method Objetosalmacen|null find($id, $lockMode = null, $lockVersion = null)
 * @method Objetosalmacen|null findOneBy(array $criteria, array $orderBy = null)
 * @method Objetosalmacen[]    findAll()
 * @method Objetosalmacen[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ObjetosalmacenRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Objetosalmacen::class);
    }

    public function save(Objetosalmacen $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(Objetosalmacen $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return Objetosalmacen[] Returns an array of Objetosalmacen objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('o')
//            ->andWhere('o.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('o.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?Objetosalmacen
//    {
//        return $this->createQueryBuilder('o')
//            ->andWhere('o.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
