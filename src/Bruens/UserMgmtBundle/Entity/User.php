<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of User
 *
 * @author berjan
 */
namespace Bruens\UserMgmtBundle\Entity;

use FOS\UserBundle\Entity\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @ORM\Entity
 * @ORM\Table(name="br_user")
 */
class User extends BaseUser
{
    /**
     * @ORM\OneToMany(targetEntity="Bruens\FlexConnectBundle\Entity\FlexConnect", mappedBy="br_user")
     */
    
    protected $flex_connects;
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    public function __construct()
    {
        parent::__construct();
        
        $this->flex_connects = new ArrayCollection();
        // your own logic
    }

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Add flex_connects
     *
     * @param Bruens\FlexConnectBundle\Entity\FlexConnect $flexConnects
     */
    public function addFlexConnects(\Bruens\FlexConnectBundle\Entity\FlexConnect $flexConnects)
    {
        $this->flex_connects[] = $flexConnects;
    }

    /**
     * Get flex_connects
     *
     * @return Doctrine\Common\Collections\Collection 
     */
    public function getFlexConnects()
    {
        return $this->flex_connects;
    }
}