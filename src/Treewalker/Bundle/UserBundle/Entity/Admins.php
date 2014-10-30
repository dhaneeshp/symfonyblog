<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Treewalker\Bundle\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\AdvancedUserInterface;



/**
* Treewalker\Bundle\UserBundle\Entity\Users
*
* @ORM\Table(name="Admins")
* @ORM\Entity(repositoryClass="AdminsRepository")
*/

class Admins  implements AdvancedUserInterface, \Serializable {
        /**
    * @ORM\Column(type="integer")
    * @ORM\Id
    * @ORM\GeneratedValue(strategy="AUTO")
    */
    private $id;
    
    /**
    * @ORM\Column(type="string", length=25, unique=true)
    */
    private $username;
    /**
    * @ORM\Column(type="string", length=32)
    */
    private $salt;
    /**
    * @ORM\Column(type="string", length=40)
    */
    private $password;
    /**
    * @ORM\Column(type="string", length=60, unique=true)
    */
    private $email;
    /**
    * @ORM\Column(name="is_active", type="boolean")
    */
    private $isActive;
    
    /**
    * @ORM\Column(name="firstname", type="string", length=60)
    */
    private $firstname;
    
    /**
    * @ORM\Column(name="lastname", type="string", length=60)
    */
    private $lastname;
    
 
    
    public function __construct()
    {
        $this->isActive = true;
        $this->salt = md5(uniqid(null, true));
    }

    
    public function getFirstname() {
        return $this->firstname;
    }

    public function getLastname() {
        return $this->lastname;
    }
    
    public function setFirstname($firstname) {
        $this->firstname = $firstname;
    }

    public function setLastname($lastname) {
        $this->lastname = $lastname;
    }
    
    
    public function isAccountNonExpired() {
        return true;
    }

    public function isAccountNonLocked() {
        return true;
    }

    public function isCredentialsNonExpired() {
        return true;
    }

    public function isEnabled() {
       return $this->isActive; 
    }

    public function equals(AdvancedUserInterface $user){
        
        return $this->id === $user->getId();
    }
    
    public function serialize(){
        
        return serialize(array($this->id));
    }

    public function unserialize($serialized){
        list($this->id , ) = unserialize($serialized);
    }

    public function eraseCredentials() {
        
    }

    public function getPassword() {
        return $this->password;
    }

    public function getRoles() {
        return array('ROLE_ADMIN');
    }

    public function getSalt() {
        return $this->salt;
    }

    public function getUsername() {
        return $this->username;
    }
    public function setUsername($username){
        $this->username = $username;
    }
    
    public function setPassword($password){
        $this->password = $password;
    }
    
    public function getId() {
        
        return $this->id;
        
    }
    
    public function setEmail($email){
        $this->email = $email;
    }

    public function getEmail() {
        
        return $this->email;
        
    }
    
    public function setId($id){
        $this->id = $id;
    }

}
