<?php

namespace Treewalker\Bundle\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\AdvancedUserInterface;



/**
* Treewalker\Bundle\UserBundle\Entity\Users
*
* @ORM\Table(name="Users")
* @ORM\Entity(repositoryClass="UsersRepository")
*/
class Users implements AdvancedUserInterface, \Serializable{
    
    
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
    
    /**
    * @ORM\Column(name="city", type="string", length=60)
    */
    private $city;
    
    /**
    * @ORM\Column(name="country", type="string", length=60)
    */
    private $country;
    
    /**
     * 
     * @ORM\Column(name="dob", type="date")
     */
    private $dob;
    
    public function getFirstname() {
        return $this->firstname;
    }

    public function getLastname() {
        return $this->lastname;
    }

    public function getCity() {
        return $this->city;
    }

    public function getCountry() {
        return $this->country;
    }

    public function setFirstname($firstname) {
        $this->firstname = $firstname;
    }

    public function setLastname($lastname) {
        $this->lastname = $lastname;
    }

    public function setCity($city) {
        $this->city = $city;
    }

    public function setCountry($country) {
        $this->country = $country;
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
    
    public function __construct()
    {
        $this->isActive = true;
        $this->salt = md5(uniqid(null, true));
    }

    public function eraseCredentials() {
        
    }

    public function getPassword() {
       return $this->password; 
    }

    public function getRoles() {
       
        return array('ROLE_USER'); 
        
    }

    public function getSalt() {
        
        return $this->salt;
        
    }
    
    public function setUsername($username){
        $this->username = $username;
    }
    
    public function setPassword($password){
        $this->password = $password;
    }

    public function getUsername() {
        
        return $this->username;
        
    }
    public function getId() {
        
        return $this->id;
        
    }

    public function getEmail() {
        
        return $this->email;
        
    }

    public function getIsActive() {
        
        return $this->isActive;
        
    }

    public function setId($id) {
        
        $this->id = $id;
        
    }

    public function setEmail($email) {
        
        $this->email = $email;
        
    }

    public function setIsActive($isActive) {
        
        $this->isActive = $isActive;
        
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
    
    public function getDob(){
        return $this->dob;
    }
    
    public function setDob($dob){
      $this->dob = $dob;  
    }
    
}