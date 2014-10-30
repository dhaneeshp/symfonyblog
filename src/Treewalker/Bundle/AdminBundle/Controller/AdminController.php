<?php


namespace Treewalker\Bundle\AdminBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\SecurityContextInterface;
use Treewalker\Bundle\UserBundle\Entity\Admins;

class AdminController extends Controller{
    
    /**
     * The login action
     *
     * @Route("/login", name="treewalker_admin_login")
     */ 
    public function loginAction(Request $request){
        
        $session = $request->getSession();
        
        // get the login error if there is one
        if ($request->attributes->has(SecurityContextInterface::AUTHENTICATION_ERROR)) {
            $error = $request->attributes->get(
                SecurityContextInterface::AUTHENTICATION_ERROR
            );
        } elseif (null !== $session && $session->has(SecurityContextInterface::AUTHENTICATION_ERROR)) {
            $error = $session->get(SecurityContextInterface::AUTHENTICATION_ERROR);
            $session->remove(SecurityContextInterface::AUTHENTICATION_ERROR);
        } else {
            $error = '';
        }

        // last username entered by the user
        $lastUsername = (null === $session) ? '' : $session->get(SecurityContextInterface::LAST_USERNAME);
        
        return $this->render(
            'TreewalkerAdminBundle:Login:login.html.twig',
            array(
                // last username entered by the user
                'last_username' => $lastUsername,
                'error'         => $error,
                'websitetitle' =>'Treewalker Blog Admin Login'
            )
        );
        
//        return $this->render('TreewalkerAdminBundle:Login:login.html.twig', array(
//                                    'name' => 'You are inside Admin Bundle',
//                                'websitetitle' => 'Treewalker Blog Demo','adminmenu'=> array('home'),
//                                'error'=> $error));
    }
    
    
    /**
     * The login action
     *
     * @Route("/", name="treewalker_admin_homepage")
     */ 
    public function dashboardAction(){
        return $this->render('TreewalkerAdminBundle:Default:index.html.twig', array(
                                    'name' => 'You are inside Admin Bundle',
                                'websitetitle' => 'Treewalker Blog Demo','adminmenu'=> array('home')));
    }
    
    
}
