<?php

namespace AppBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="fos_user")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\UserRepository")
 */
class User extends BaseUser
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\OneToMany(targetEntity="AppBundle\Entity\Post", mappedBy="owner")
     */
    private $postList;

    /**
     * Add postList
     *
     * @param \AppBundle\Entity\Post $postList
     *
     * @return User
     */
    public function addPostList(Post $postList)
    {
        $this->postList[] = $postList;

        return $this;
    }

    /**
     * Remove postList
     *
     * @param \AppBundle\Entity\Post $postList
     */
    public function removePostList(Post $postList)
    {
        $this->postList->removeElement($postList);
    }

    /**
     * Get postList
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getPostList()
    {
        return $this->postList;
    }

}