<?php

namespace Treewalker\Bundle\CharityBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('TreewalkerCharityBundle:Default:index.html.twig', array('name' => $name));
    }
}
