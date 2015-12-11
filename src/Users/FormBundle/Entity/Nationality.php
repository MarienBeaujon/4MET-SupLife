<?php

namespace Users\FormBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Nationality
 *
 * @ORM\Table(name="nationality")
 * @ORM\Entity(repositoryClass="Users\FormBundle\Repository\NationalityRepository")
 */
class Nationality
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="Nat_Name", type="string", length=255)
     */
    private $natName;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set natName
     *
     * @param string $natName
     *
     * @return Nationality
     */
    public function setNatName($natName)
    {
        $this->natName = $natName;

        return $this;
    }

    /**
     * Get natName
     *
     * @return string
     */
    public function getNatName()
    {
        return $this->natName;
    }
}

