<?php

namespace App\Repository;

use App\Entity\Assign;
use App\Entity\User;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\ORM\QueryBuilder;

use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Assign>
 *
 * @method Assign|null find($id, $lockMode = null, $lockVersion = null)
 * @method Assign|null findOneBy(array $criteria, array $orderBy = null)
 * @method Assign[]    findAll()
 * @method Assign[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class AssignRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Assign::class);
    }

    public function add(Assign $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(Assign $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function findEquipmentWithUserQueryBuilder(User $user): QueryBuilder{
      
        return $this->createQueryBuilder('a')
            ->innerJoin("a.equipment", "e")
            ->innerJoin("e.category", "c")
           ->select('e.name', 'e.description', 'c.name as asd')
           ->andWhere("a.user = :val")
          
           ->setParameter('val', $user->getId())
           ->orderBy('a.id', 'ASC')
       ;
   }

//    /**
//     * @return Assign[] Returns an array of Assign objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('a.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?Assign
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}