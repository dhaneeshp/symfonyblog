<?php
namespace Treewalker\Bundle\MediaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Vlabs\MediaBundle\Entity\BaseFile as VlabsFile;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity
 * @ORM\Table(name="vlabs_image")
 */
class Image extends VlabsFile{
    
    
    
   /**
     * @var string $path
     *
     * @ORM\Column(name="path", type="string", length=255)
     * @Assert\File()
     */
    private $path;

    /**
     * Set path
     *
     * @param string $path
     * @return Image
     */
    public function setPath($path)
    {
        $this->path = $path;

        return $this;
    }

    /**
     * Get path
     *
     * @return string 
     */
    public function getPath()
    {
        return $this->path;
    }
 
    
 


}
