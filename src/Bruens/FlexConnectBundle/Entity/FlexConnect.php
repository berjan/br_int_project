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
    /**
     * @ORM\ManyToOne(targetEntity="Bruens\TimeEntryBundle\Entity\TimeEntry", inversedBy="flex_connects")
     * @ORM\JoinColumn(name="time_entry_id", referencedColumnName="id")
     */
    protected $time_entries;


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
     *
     * @ORM\Column(type="integer")
     */
    protected $type;
  

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

    

    /**
     * Set type
     *
     * @param integer $type
     * Types:
     * 1 => created
     * 2 => updated
     */
    public function setType($type)
    {
        $this->type = $type;
    }

    /**
     * Get type
     *
     * @return integer 
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set time_entries
     *
     * @param Bruens\TimeEntryBundle\Entity\TimeEntry $timeEntries
     */
    public function setTimeEntries(\Bruens\TimeEntryBundle\Entity\TimeEntry $timeEntries)
    {
        $this->time_entries = $timeEntries;
    }

    /**
     * Get time_entries
     *
     * @return Bruens\TimeEntryBundl\Entity\TimeEntry 
     */
    public function getTimeEntries()
    {
        return $this->time_entries;
    }
}