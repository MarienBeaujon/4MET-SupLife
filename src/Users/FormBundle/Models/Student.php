<?php

namespace Users\FormBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Student
 *
 * @ORM\Table(name="student")
 * @ORM\Entity(repositoryClass="Users\FormBundle\Repository\StudentRepository")
 */
class Student
{
    /**
     * @var int
     *
     * @ORM\Column(name="Stu_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="Stu_Fname", type="string", length=255)
     */
    private $fname;

    /**
     * @var string
     *
     * @ORM\Column(name="Stu_Lname", type="string", length=255)
     */
    private $lname;

    /**
     * @var string
     *
     * @ORM\Column(name="Stu_Email", type="string", length=255)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="Stu_Tel", type="integer")
     */
    private $tel;

    /**
     * @var string
     *
     * @ORM\Column(name="Stu_Addr1", type="string", length=255)
     */
    private $addr1;

    /**
     * @var string
     *
     * @ORM\Column(name="Stu_Addr2", type="string", length=255)
     */
    private $addr2;

    /**
     * @var string
     *
     * @ORM\Column(name="Stu_City", type="string", length=255)
     */
    private $city;

    /**
     * @var int
     *
     * @ORM\Column(name="Stu_Pc", type="integer")
     */
    private $pc;

    /**
     * @var int
     *
     * @ORM\Column(name="Stu_Nat_Id", type="integer", unique=true)
     */
    private $natId;

    /**
     * @var string
     *
     * @ORM\Column(name="Stu_Picture", type="string", length=255)
     */
    private $picture;

    /**
     * @var string
     *
     * @ORM\Column(name="Stu_Year", type="string", length=255)
     */
    private $year;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Stu_DOB", type="datetime")
     */
    private $dOB;

    /**
     * @var string
     *
     * @ORM\Column(name="Stu_Gender", type="string", length=255)
     */
    private $gender;

    /**
     * @var string
     *
     * @ORM\Column(name="Stu_HashPwd", type="string", length=255)
     */
    private $hashPwd;


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
     * Set fname
     *
     * @param string $fname
     *
     * @return Student
     */
    public function setFname($fname)
    {
        $this->fname = $fname;

        return $this;
    }

    /**
     * Get fname
     *
     * @return string
     */
    public function getFname()
    {
        return $this->fname;
    }

    /**
     * Set lname
     *
     * @param string $lname
     *
     * @return Student
     */
    public function setLname($lname)
    {
        $this->lname = $lname;

        return $this;
    }

    /**
     * Get lname
     *
     * @return string
     */
    public function getLname()
    {
        return $this->lname;
    }

    /**
     * Set email
     *
     * @param string $email
     *
     * @return Student
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set tel
     *
     * @param string $tel
     *
     * @return Student
     */
    public function setTel($tel)
    {
        $this->tel = $tel;

        return $this;
    }

    /**
     * Get tel
     *
     * @return string
     */
    public function getTel()
    {
        return $this->tel;
    }

    /**
     * Set addr1
     *
     * @param string $addr1
     *
     * @return Student
     */
    public function setAddr1($addr1)
    {
        $this->addr1 = $addr1;

        return $this;
    }

    /**
     * Get addr1
     *
     * @return string
     */
    public function getAddr1()
    {
        return $this->addr1;
    }

    /**
     * Set addr2
     *
     * @param string $addr2
     *
     * @return Student
     */
    public function setAddr2($addr2)
    {
        $this->addr2 = $addr2;

        return $this;
    }

    /**
     * Get addr2
     *
     * @return string
     */
    public function getAddr2()
    {
        return $this->addr2;
    }

    /**
     * Set city
     *
     * @param string $city
     *
     * @return Student
     */
    public function setCity($city)
    {
        $this->city = $city;

        return $this;
    }

    /**
     * Get city
     *
     * @return string
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * Set pc
     *
     * @param integer $pc
     *
     * @return Student
     */
    public function setPc($pc)
    {
        $this->pc = $pc;

        return $this;
    }

    /**
     * Get pc
     *
     * @return int
     */
    public function getPc()
    {
        return $this->pc;
    }

    /**
     * Set natId
     *
     * @param integer $natId
     *
     * @return Student
     */
    public function setNatId($natId)
    {
        $this->natId = $natId;

        return $this;
    }

    /**
     * Get natId
     *
     * @return int
     */
    public function getNatId()
    {
        return $this->natId;
    }

    /**
     * Set picture
     *
     * @param string $picture
     *
     * @return Student
     */
    public function setPicture($picture)
    {
        $this->picture = $picture;

        return $this;
    }

    /**
     * Get picture
     *
     * @return string
     */
    public function getPicture()
    {
        return $this->picture;
    }

    /**
     * Set year
     *
     * @param string $year
     *
     * @return Student
     */
    public function setYear($year)
    {
        $this->year = $year;

        return $this;
    }

    /**
     * Get year
     *
     * @return string
     */
    public function getYear()
    {
        return $this->year;
    }

    /**
     * Set dOB
     *
     * @param \DateTime $dOB
     *
     * @return Student
     */
    public function setDOB($dOB)
    {
        $this->dOB = $dOB;

        return $this;
    }

    /**
     * Get dOB
     *
     * @return \DateTime
     */
    public function getDOB()
    {
        return $this->dOB;
    }

    /**
     * Set gender
     *
     * @param string $gender
     *
     * @return Student
     */
    public function setGender($gender)
    {
        $this->gender = $gender;

        return $this;
    }

    /**
     * Get gender
     *
     * @return string
     */
    public function getGender()
    {
        return $this->gender;
    }

    /**
     * Set hashPwd
     *
     * @param string $hashPwd
     *
     * @return Student
     */
    public function setHashPwd($hashPwd)
    {
        $this->hashPwd = $hashPwd;

        return $this;
    }

    /**
     * Get hashPwd
     *
     * @return string
     */
    public function getHashPwd()
    {
        return $this->hashPwd;
    }
}

