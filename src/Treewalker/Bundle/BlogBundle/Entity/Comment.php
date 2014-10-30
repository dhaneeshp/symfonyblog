<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Treewalker\Bundle\BlogBundle\Entity;


use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="Treewalker\Bundle\BlogBundle\Entity\Repository\CommentRepository")
 * @ORM\Table(name="comment")
 * @ORM\HasLifecycleCallbacks
 */
class Comment
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\Column(type="string")
     */
    protected $user;

    /**
     * @ORM\Column(type="text")
     */
    protected $comment;

    /**
     * @ORM\Column(type="boolean")
     */
    protected $approved;

    /**
     * @ORM\ManyToOne(targetEntity="Blog", inversedBy="comments")
     * @ORM\JoinColumn(name="blog_id", referencedColumnName="id")
     */
    protected $blog;

    /**
     * @ORM\Column(type="datetime")
     */
    protected $created;

    /**
     * @ORM\Column(type="datetime")
     */
    protected $updated;

    public function __construct()
    {
        $this->setCreated(new \DateTime());
        $this->setUpdated(new \DateTime());
        $this->setApproved(true);
    }

    
    public function setUpdated($updated){
        $this->updated = $updated;
    }
    
    public function setCreated($created){
        $this->created = $created;
        
    }
    
    public function getUpdated(){
        return $this->updated;
    }
    
    public function getCreated(){
        return $this->created;
    }
    
    public function setApproved($approved){
        $this->approved = $approved;
    }
    
    public function getApproved(){
        return $this->approved;
    }
   
    public function setUpdatedValue()
    {
       $this->setUpdated(new \DateTime());
    }
    
    public function setBlog(Blog $blog){
        $this->blog = $blog;
    }
    
    public function getBlog(){
        return $this->blog;
    }
    
    public function getUser(){
       return $this->user; 
    }
    
   public function setComment($comment){
       $this->comment = $comment;
   }
    public function getComment(){
       return $this->comment; 
    }
    
    public function setUser($user){
        $this->user = $user;
    }
         
    
    public function getId(){
        return $this->id;
    }
    
    public function setId($id){
        $this->id = $id;
    }
}
?>