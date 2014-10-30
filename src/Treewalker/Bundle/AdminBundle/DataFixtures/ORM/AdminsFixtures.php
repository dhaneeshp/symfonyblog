<?php
namespace Treewalker\Bundle\AdminBundle\DataFixtures\ORM;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Treewalker\Bundle\UserBundle\Entity\Admins;

class AdminsFixtures implements FixtureInterface {
    
    public function load(ObjectManager $manager){
        
        $admins  = new Admins();
        
        $factory = $this->container->get('security.encoder_factory');
        
        $admins->setUsername('admin');
        $admins->setFirstname('Admin First Name');
        $admins->setLastname('Admin Last Name');
        $admins->setEmail('dhaneeshp@yahoo.com');
        
        $encoder = $factory->getEncoder($admins);
        $password = $encoder->encodePassword('admin',$admins->getSalt());
        $admins->setPassword($password);
        
        $manager->persist($admins);
    }
}
