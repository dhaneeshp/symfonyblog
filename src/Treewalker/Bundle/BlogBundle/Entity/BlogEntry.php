<?php

namespace Treewalker\Bundle\BlogBundle\Entity;

use Treewalker\Bundle\BlogBundle\Entity\Blog;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\ORM\Mapping as ORM;
/**
 * @ORM\Entity
 */
class BlogEntry {
    
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;
    
    /**
    * @Assert\Type(type="Treewalker\Bundle\BlogBundle\Entity\Blog")
    */
    protected $blog;
    
   /**
     * @Assert\File(maxSize="6000000")
     */
    public $blog_image;
    
    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    public $path;
    
    
    
    public function __construct() {
        $this->blog = new Blog();
        $this->path = '/home/dhaneesh/public_html/symfonyblog/web/uploads/images/';
    }
    public function setPath($path){
        $this->path = '/home/dhaneesh/public_html/symfonyblog/web/uploads/images/';
    }
    
    public function getPath(){
        return $this->path;
    }
    
    public function setBlog(Blog $blog){
        $this->blog = $blog;
    }
    
    public function getBlog(){
        return $this->blog;
    }
    
    
    /**
     * Sets file.
     *
     * @param UploadedFile $blog_image
     */
    public function setBlogimage(UploadedFile $blog_image = null)
    {
        $this->blog_image = $blog_image;
    }

    /**
     * Get file.
     *
     * @return UploadedFile
     */
    public function getBlogimage()
    {
        return $this->blog_image;
    }
    
    
    public function getImage(){
        return $this->getBlog()->getImage();
    }
    
    public function setImage($image){
        $this->getBlog()->setImage($image);
    }
    
    
 
}
