<?php

namespace Treewalker\Bundle\UserBundle\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Treewalker\Bundle\UserBundle\Entity\Users;
use Treewalker\Bundle\UserBundle\Form\UsersType;
/**
 * Description of RegistrationController
 *
 * @author dhaneeshp
 */
class RegistrationController extends Controller {
    
    /**
     * The index action
     *
     * @Route("/", name="treewalker_user_register")
     */
    public function registerAction() {
       
            $form = $this->createForm(
                new UsersType(),
                new Users()
                );
            
            $manager = $this->getDoctrine()->getManager();
            
            $form->bind($this->getRequest());
            
            if($form->isValid()){
                
                $users = $form->getData();
                $factory = $this->get('security.encoder_factory');
                //$users = new Users();
                
                $encoder = $factory->getEncoder($users);
                $password = $encoder->encodePassword($users->getPassword(),$users->getSalt());
                $users->setPassword($password);
                
                $manager->persist($users);
                try{
                 $manager->flush();
                }catch ( Exception $e){
                    
                }
                
                return $this->redirect($this->generateUrl('login'));
                
            }
            
            return $this->render(
                'TreewalkerUserBundle:Account:register.html.twig',
                array('form' => $form->createView())
                );
    }
    
     
    
    
}
