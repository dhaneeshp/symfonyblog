<?php
namespace Treewalker\Bundle\NewsletterBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="newsletter")
 */
class Newsletter {
   
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    public $id;
    
    
    /**
     * @ORM\Column(type="text",name="newslettercontent")
     */  
    public $newslettercontent;
    
    /**
     * @ORM\Column(name="nl_name", type="string", length=155)
     */
    public $nlname;
    
    
    public function getId() {
        return $this->id;
    }

    public function getNewslettercontent() {
        
        //ob_start();
        $template1 = @file_get_contents('templates/template1.html');
        //echo $template1;
        
       // $template1 = ob_get_contents();
        //$this->newslettercontent = $template1;
        $this->setNewslettercontent($template1) ;
        return $this->newslettercontent;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function setNewslettercontent($newslettercontent) {
        $this->newslettercontent = $newslettercontent;
    }

    public function getNlname() {
        return $this->nlname;
    }

    public function setNlname($nlname) {
        $this->nlname = $nlname;
    }


}
