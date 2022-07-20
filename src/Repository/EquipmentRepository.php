<?php

namespace App\Repository;

use App\Entity\Category;
use App\Entity\Equipment;
use App\Entity\User;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\ORM\QueryBuilder;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Equipment>
 *
 * @method Equipment|null find($id, $lockMode = null, $lockVersion = null)
 * @method Equipment|null findOneBy(array $criteria, array $orderBy = null)
 * @method Equipment[]    findAll()
 * @method Equipment[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class EquipmentRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Equipment::class);
    }

    public function add(Equipment $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(Equipment $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function filterByCategory(Category $category)
    {
        return $category->getEquipment();
    }

    public function getAllQueryBuilder(): QueryBuilder{
        return $this->createQueryBuilder('equipment')->orderBy('equipment.id','ASC');
    }

   /**
    * @return Equipment[] Returns an array of Equipment objects
    */
   public function findWithFieldQueryBuilder($field, $category_id): QueryBuilder
   {
       return $this->createQueryBuilder('equipment')
           ->andWhere("equipment.{$field} = :val")
           ->setParameter('val', $category_id)
           ->orderBy('equipment.id', 'ASC')
       ;
   }

   public function findEquipmentWithUserQueryBuilder(User $user): QueryBuilder{
      
    return $this->createQueryBuilder('e')
        ->innerJoin("e.assigns", "a")
        ->innerJoin("a.user", "u")
       ->andWhere("u.id = :val")
       ->setParameter('val', $user->getId())
       ->orderBy('e.id', 'ASC')
   ;
}
   
}