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
namespace Bruens\CompanyBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @ORM\Entity
 * @ORM\Table(name="company")
 * @ORM\Entity(repositoryClass="Bruens\CompanyBundle\Repository\CompanyRepository")
 */
class Company {
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
     * @ORM\Column(type="string", length=100)
     */
    protected $name;
    
    

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
     * Set name
     *
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }
    
    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }
    
    /**
     * @ORM\OneToMany(targetEntity="Bruens\FlexConnectBundle\Entity\FlexConnect", mappedBy="company")
     */
    protected $flex_connects;
  

    

   
   

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