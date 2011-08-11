<?php
/**
 * @ignoreAnnotation("author")
 */
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Company
 *
 * @author berjan
 */
namespace Bruens\FlexConnectBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections;

/**
 * @ORM\Entity
 * @ORM\Table(name="flex_connect")
 * @ORM\Entity(repositoryClass="Bruens\FlexConnectBundle\Repository\FlexConnectRepository")
 */
class FlexConnect {
    /**
     * @ORM\ManyToOne(targetEntity="Bruens\CompanyBundle\Entity\Company", inversedBy="flex_connects")
     * @ORM\JoinColumn(name="company_id", referencedColumnName="id")
     */
    protected $companies;
    
    /**
     * @ORM\ManyToOne(targetEntity="Bruens\UserMgmtBundle\Entity\User", inversedBy="flex_connects")
     * @ORM\JoinColumn(name="user_id", referencedColumnName="id")
     */
    protected $users;


    public function __construct()
    {
        
    }
    /**
     *
     * @ORM\id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;
  
    
  

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
     * Set companies
     *
     * @param Bruens\CompanyBundle\Entity\Company $companies
     */
    public function setCompanies(\Bruens\CompanyBundle\Entity\Company $companies)
    {
        $this->companies = $companies;
    }

    /**
     * Get companies
     *
     * @return Bruens\CompanyBundle\Entity\Company 
     */
    public function getCompanies()
    {
        return $this->companies;
    }

    

    /**
     * Set users
     *
     * @param Bruens\UserMgmtBundle\Entity\User $users
     */
    public function setUsers(\Bruens\UserMgmtBundle\Entity\User $users)
    {
        $this->users = $users;
    }

    /**
     * Get users
     *
     * @return Bruens\UserMgmtBundle\Entity\User 
     */
    public function getUsers()
    {
        return $this->users;
    }
}