<?php
namespace Treewalker\Bundle\MediaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Vlabs\MediaBundle\Annotation\Vlabs;

/**
 * @ORM\Table(name="article")
 * @ORM\Entity
 * 
 */
class Article {
    
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    public $id;
    
    /**
     * 
     * @ORM\Column(type="string", length=40, name="class_type")
     */
    public $class_type='image';
    
    /**
     * @var VlabsFile
     *
     * @ORM\OneToOne(targetEntity="Image", cascade={"persist", "remove"}, orphanRemoval=true))
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="image", referencedColumnName="id")
     * })
     * 
     * @Vlabs\Media(identifier="image_entity", upload_dir="files/images")
     * @Assert\Valid()
     */
    private $image;

    /**
     * Set image
     *
     * @param Treewalker\Bundle\MediaBundle\Entity\Image $image
     * @return Article
     */
    public function setImage(Image $image = null)
    {
        $this->image = $image;

        return $this;
    }

    /**
     * Get image
     *
     * @return Treewalker\Bundle\MediaBundle\Entity\Image
     */
    public function getImage()
    {
        return $this->image;
    }   
    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function getClass_type() {
        $image = $this->getImage();
        
        $conent_type = $image->getContentType();
        
        if(strstr($conent_type,"image") !== FALSE){
            $this->class_type = 'image';
        }else{
            $this->class_type = 'doc';
        }
        
        
        return $this->class_type;
    }

    public function setClass_type($class_type) {
        $image = $this->getImage();
        
        $conent_type = $image->getContentType();
        
        if(strstr($conent_type,"image") !== FALSE){
            $this->class_type = 'image';
        }else{
            $this->class_type = 'doc';
        }
        //$this->class_type = $class_type;
    }
    
    
    


 }
?>