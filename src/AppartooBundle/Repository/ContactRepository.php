<?php

namespace AppartooBundle\Repository;

/**
 * UserRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class ContactRepository extends \Doctrine\ORM\EntityRepository
{
    public function findByContact($id_contact)
    {
        $query = $this->createQueryBuilder('c')
            ->leftJoin('c.id_contact', 'u')
            ->where('u.id = :parameter')
            ->setParameter('parameter', $id_contact)
            ->getQuery();

        return $query->getResult();
    }
}