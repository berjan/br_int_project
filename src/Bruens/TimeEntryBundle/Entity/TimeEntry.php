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
namespace Bruens\TimeEntryBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @ORM\Entity
 * @ORM\Table(name="time_entry")
 * @ORM\Entity(repositoryClass="Bruens\TimeEntryBundle\Repository\TimeEntryRepository")
 */
class TimeEntry {
    /**
     * @ORM\OneToMany(targetEntity="Bruens\FlexConnectBundle\Entity\FlexConnect", mappedBy="time_entry")
     */
    protected $flex_connects;
    public function __construct() {
        $this->flex_connects = new ArrayCollection();
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
     * @ORM\Column(type="text")
     */
    protected $description;
    
    /**
     *
     * @ORM\Column(type="time")
     */
    protected $off;
    
    /**
     *
     * @ORM\Column(type="time")
     */
    protected $till;
    
    /**
     *
     * @ORM\Column(type="date")
     */
    protected $date_entry;
    
    

    

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
     * Set description
     *
     * @param text $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * Get description
     *
     * @return text 
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set off
     *
     * @param time $off
     */
    public function setOff($off)
    {
        $this->off = $off;
    }

    /**
     * Get off
     *
     * @return time 
     */
    public function getOff()
    {
        return $this->off;
    }

    /**
     * Set till
     *
     * @param time $till
     */
    public function setTill($till)
    {
        $this->till = $till;
    }

    /**
     * Get till
     *
     * @return time 
     */
    public function getTill()
    {
        return $this->till;
    }

    /**
     * Set date_entry
     *
     * @param date $dateEntry
     */
    public function setDateEntry($dateEntry)
    {
        $this->date_entry = $dateEntry;
    }

    /**
     * Get date_entry
     *
     * @return date 
     */
    public function getDateEntry()
    {
        return $this->date_entry;
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