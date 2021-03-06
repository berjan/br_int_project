<?php

namespace Bruens\TimeEntryBundle\Repository;

use Doctrine\ORM\EntityRepository;

/**
 * TimeEntryRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class TimeEntryRepository extends EntityRepository
{
public function save($time, $user)
{
    $flexConnect = new \Bruens\FlexConnectBundle\Entity\FlexConnect();
        $flexConnect->setType(1);
        //$flexConnect->setCompanies($company);
        
        $flexConnect->setUsers($user);
        $flexConnect->setTimeEntries($time);
        //print_r($user);
        //$user->addFlexConnects($flexConnect);
        
        $em = $this->getEntityManager();
        $em->persist($flexConnect);
        //$em->persist($company);
        $em->persist($time);
        $em->persist($user);
        //$em->persist($user);
        
        $em->flush();
}
}