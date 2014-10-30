<?php

namespace Treewalker\Bundle\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\SecurityContextInterface;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('TreewalkerUserBundle:Default:index.html.twig', array('name' => $name));
    }
    
    
    
}
