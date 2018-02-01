<?php 

namespace AppBundle\Repository;

use Doctrine\ORM\EntityManagerInterface;

class SideRepository extends TranslatableRepository
{
    public function __construct(EntityManagerInterface $entityManager)
    {
        parent::__construct($entityManager, $entityManager->getClassMetadata('AppBundle\Entity\Side'));
    }
}
