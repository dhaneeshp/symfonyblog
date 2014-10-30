<?php

namespace Treewalker\Bundle\SocialLoginBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('TreewalkerSocialLoginBundle:Default:index.html.twig', array('name' => $name));
    }
}
