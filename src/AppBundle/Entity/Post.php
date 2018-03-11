<?php

namespace AppBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Post
 *
 * @ORM\Table(name="post")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\PostRepository")
 */
class Post
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
     * @ORM\Column(name="title_fr", type="string", length=255)
     */
    private $titleFr;

    /**
     * @var string
     *
     * @ORM\Column(name="title_en", type="string", length=255)
     */
    private $titleEn;

    /**
     * @var \DateTime $postDate
     * @ORM\Column(name="post_date", type="datetime")
     */
    private $postDate;

    /**
     * @var User
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\User", cascade={"persist"}, inversedBy="postList")
     * @ORM\JoinColumn(name="owner", referencedColumnName="id")
     *
     */
    private $owner;

    /**
     * @var Address
     *
     * @ORM\OneToOne(targetEntity="AppBundle\Entity\Address")
     * @ORM\JoinColumn(name="address", referencedColumnName="id")
     */
    private $address;

    /**
     * @var integer
     *
     * @ORM\Column(name="total_capacity", type="integer")
     */
    private $totalCapacity;

    /**
     * @var float
     *
     * @ORM\Column(name="coast", type="float")
     */
    private $coast;

    /**
     * @var string
     *
     * @ORM\Column(name="description_fr", type="string", length=500)
     */
    private $descriptionFr;

    /**
     * @var string
     *
     * @ORM\Column(name="description_en", type="string", length=500, nullable=true)
     */
    private $descriptionEn;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\OneToMany(targetEntity="AppBundle\Entity\Comment", mappedBy="post")
     */
    private $commentList;

    /**
     * @var integer
     */
    private $leftCapacity;

    /**
     * @var string
     */
    private $descriptionDisplay;

    /**
     * @var string
     *
     */
    private $titleDisplay;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->commentList = new ArrayCollection();
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
     * Set titleFr
     *
     * @param string $titleFr
     *
     * @return Post
     */
    public function setTitleFr($titleFr)
    {
        $this->titleFr = $titleFr;

        return $this;
    }

    /**
     * Get titleFr
     *
     * @return string
     */
    public function getTitleFr()
    {
        return $this->titleFr;
    }

    /**
     * Set titleEn
     *
     * @param string $titleEn
     *
     * @return Post
     */
    public function setTitleEn($titleEn)
    {
        $this->titleEn = $titleEn;

        return $this;
    }

    /**
     * Get titleEn
     *
     * @return string
     */
    public function getTitleEn()
    {
        return $this->titleEn;
    }

    /**
     * Set postDate
     *
     * @param \DateTime $postDate
     *
     * @return Post
     */
    public function setPostDate($postDate)
    {
        $this->postDate = $postDate;

        return $this;
    }

    /**
     * Get postDate
     *
     * @return \DateTime
     */
    public function getPostDate()
    {
        return $this->postDate;
    }

    /**
     * Set totalCapacity
     *
     * @param integer $totalCapacity
     *
     * @return Post
     */
    public function setTotalCapacity($totalCapacity)
    {
        $this->totalCapacity = $totalCapacity;

        return $this;
    }

    /**
     * Get totalCapacity
     *
     * @return integer
     */
    public function getTotalCapacity()
    {
        return $this->totalCapacity;
    }

    /**
     * Set coast
     *
     * @param float $coast
     *
     * @return Post
     */
    public function setCoast($coast)
    {
        $this->coast = $coast;

        return $this;
    }

    /**
     * Get coast
     *
     * @return float
     */
    public function getCoast()
    {
        return $this->coast;
    }

    /**
     * Set descriptionFr
     *
     * @param string $descriptionFr
     *
     * @return Post
     */
    public function setDescriptionFr($descriptionFr)
    {
        $this->descriptionFr = $descriptionFr;

        return $this;
    }

    /**
     * Get descriptionFr
     *
     * @return string
     */
    public function getDescriptionFr()
    {
        return $this->descriptionFr;
    }

    /**
     * Set descriptionEn
     *
     * @param string $descriptionEn
     *
     * @return Post
     */
    public function setDescriptionEn($descriptionEn)
    {
        $this->descriptionEn = $descriptionEn;

        return $this;
    }

    /**
     * Get descriptionEn
     *
     * @return string
     */
    public function getDescriptionEn()
    {
        return $this->descriptionEn;
    }

    /**
     * Set owner
     *
     * @param \AppBundle\Entity\User $owner
     *
     * @return Post
     */
    public function setOwner(User $owner = null)
    {
        $this->owner = $owner;

        return $this;
    }

    /**
     * Get owner
     *
     * @return \AppBundle\Entity\User
     */
    public function getOwner()
    {
        return $this->owner;
    }

    /**
     * Set address
     *
     * @param \AppBundle\Entity\Address $address
     *
     * @return Post
     */
    public function setAddress(Address $address = null)
    {
        $this->address = $address;

        return $this;
    }

    /**
     * Get address
     *
     * @return \AppBundle\Entity\Address
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Add commentList
     *
     * @param \AppBundle\Entity\Comment $commentList
     *
     * @return Post
     */
    public function addCommentList(Comment $commentList)
    {
        $this->commentList[] = $commentList;

        return $this;
    }

    /**
     * Remove commentList
     *
     * @param \AppBundle\Entity\Comment $commentList
     */
    public function removeCommentList(Comment $commentList)
    {
        $this->commentList->removeElement($commentList);
    }

    /**
     * Get commentList
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getCommentList()
    {
        return $this->commentList;
    }

    /**
     * @return int
     */
    public function getLeftCapacity()
    {
        return $this->leftCapacity;
    }

    /**
     * @param int $leftCapacity
     */
    public function setLeftCapacity($leftCapacity)
    {
        $this->leftCapacity = $leftCapacity;
    }

    /**
     * @return string
     */
    public function getDescriptionDisplay()
    {
        return $this->descriptionDisplay;
    }

    /**
     * @param string $descriptionDisplay
     */
    public function setDescriptionDisplay($descriptionDisplay)
    {
        $this->descriptionDisplay = $descriptionDisplay;
    }

    /**
     * @return string
     */
    public function getTitleDisplay()
    {
        return $this->titleDisplay;
    }

    /**
     * @param string $titleDisplay
     */
    public function setTitleDisplay($titleDisplay)
    {
        $this->titleDisplay = $titleDisplay;
    }
}
