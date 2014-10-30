<?php

namespace Treewalker\Bundle\BlogBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @ORM\Entity(repositoryClass="Treewalker\Bundle\BlogBundle\Entity\Repository\BlogRepository")
 * @ORM\Table(name="blog")
 * @ORM\HasLifecycleCallbacks
 */
class Blog 
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    public $id;

    /**
     * @ORM\Column(type="string")
     */
    public $title;

    /**
     * @ORM\Column(type="string", length=100)
     */
    public $author;

    /**
     * @ORM\Column(type="text")
     */
    public $blog;

    /**
     * @ORM\Column(type="string", length=20)
     */
    public $image;

    /**
     * @ORM\Column(type="text")
     */
    public $tags;

    
    /**
     * @ORM\Column(type="datetime")
     */
    public $created;

    /**
     * @ORM\Column(type="datetime")
     */
    public $updated;
    
    /**
     * @ORM\OneToMany(targetEntity="Comment", mappedBy="blog", cascade={"remove"}, orphanRemoval=true)
     */
    protected $comments;
    
    public function __construct() {
        $this->comments = new ArrayCollection();
        $this->setCreated(new \DateTime());
        $this->setUpdated(new \DateTime());
    }
    
    public  function getId() {
    return $this->id;
    }

    public  function getTitle() {
    return $this->title;
    }

    public  function getAuthor() {
        return $this->author;
    }

    public  function getBlog($length=null) {
        if (false === is_null($length) && $length > 0)
            return substr($this->blog, 0, $length);
        else
            return $this->blog;
    }

    public  function getImage() {
        return $this->image;
    }

    public  function getTags() {
        return $this->tags;
    }

    public  function getComments() {
      return $this->comments;
    }

    public  function getCreated() {
    return $this->created;
    }

    public  function getUpdated() {
     return $this->updated;
    }

    public  function setId($id) {
    $this->id = $id;
    }

    public  function setTitle($title) {
       $this->title = $title;
    }

    public  function setAuthor($author) {
      $this->author = $author;
    }

    public  function setBlog($blog) {
       $this->blog = $blog;
    }

    public  function setImage($image) {
      $this->image = $image;
    }

    public  function setTags($tags) {
      $this->tags = $tags;
    }

    public  function setComments($comments) {
      $this->comments = $comments;
    }

    public  function setCreated($created) {
        $this->created = $created;
    }

    public  function setUpdated($updated) {
      $this->updated = $updated;
    }   
    
    public function __toString()
    {
        return $this->getTitle();
    }
}

?>