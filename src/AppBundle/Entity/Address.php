<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Address
 *
 * @ORM\Table(name="address")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\AddressRepository")
 */
class Address
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
     * @ORM\Column(name="street_name_fr", type="string", length=255)
     */
    private $streetNameFr;

    /**
     * @var string
     *
     * @ORM\Column(name="street_name_en", type="string", length=255)
     */
    private $streetNameEn;

    /**
     * @var int
     *
     * @ORM\Column(name="street_number", type="integer")
     */
    private $streetNumber;

    /**
     * @var string
     *
     * @ORM\Column(name="city", type="string", length=255)
     */
    private $city;

    /**
     * @var string
     *
     * @ORM\Column(name="zip", type="string", length=255)
     */
    private $zip;

    /**
     * @var string
     *
     */
    private $streetNameDisplay;

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
     * Set streetNameFr
     *
     * @param string $streetNameFr
     *
     * @return Address
     */
    public function setStreetNameFr($streetNameFr)
    {
        $this->streetNameFr = $streetNameFr;

        return $this;
    }

    /**
     * Get streetNameFr
     *
     * @return string
     */
    public function getStreetNameFr()
    {
        return $this->streetNameFr;
    }

    /**
     * Set streetNameEn
     *
     * @param string $streetNameEn
     *
     * @return Address
     */
    public function setStreetNameEn($streetNameEn)
    {
        $this->streetNameEn = $streetNameEn;

        return $this;
    }

    /**
     * Get streetNameEn
     *
     * @return string
     */
    public function getStreetNameEn()
    {
        return $this->streetNameEn;
    }

    /**
     * Set streetNumber
     *
     * @param integer $streetNumber
     *
     * @return Address
     */
    public function setStreetNumber($streetNumber)
    {
        $this->streetNumber = $streetNumber;

        return $this;
    }

    /**
     * Get streetNumber
     *
     * @return integer
     */
    public function getStreetNumber()
    {
        return $this->streetNumber;
    }

    /**
     * Set city
     *
     * @param string $city
     *
     * @return Address
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
     * Set zip
     *
     * @param string $zip
     *
     * @return Address
     */
    public function setZip($zip)
    {
        $this->zip = $zip;

        return $this;
    }

    /**
     * Get zip
     *
     * @return string
     */
    public function getZip()
    {
        return $this->zip;
    }

    /**
     * @return string
     */
    public function getStreetNameDisplay()
    {
        return $this->streetNameDisplay;
    }

    /**
     * @param string $streetNameDisplay
     */
    public function setStreetNameDisplay($streetNameDisplay)
    {
        $this->streetNameDisplay = $streetNameDisplay;
    }

}
