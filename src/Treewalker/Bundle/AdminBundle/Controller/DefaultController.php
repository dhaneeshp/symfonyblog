<?php

namespace Treewalker\Bundle\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('TreewalkerAdminBundle:Default:index.html.twig', array(
                                    'name' => 'You are inside Admin Bundle',
                                'websitetitle' => 'Treewalker Blog Demo','adminmenu'=> array('home')));
    }
}
