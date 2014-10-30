<?php

namespace Treewalker\Bundle\BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Security\Core\SecurityContextInterface;
use Treewalker\Bundle\BlogBundle\Entity\BlogEntry;
use Treewalker\Bundle\BlogBundle\Form\BlogEntryType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;

class BlogAjaxController extends Controller {
    
    /**
     * The file removing function
     *
     * @Route("/", name="treewalker_blog_admin_ajax")
     */
    public function indexAction(){
        
        
    }
    
    
    /**
     * The file removing function
     *
     * @Route("/remove/image", name="treewalker_blog_admin_ajax_remove_image")
     * @Method({"POST"})
     * @return  array
     */
    public function removefileAction(Request $request){
        
        $filename = $request->request->get('filename');
        $blog_id = $request->request->get('blog_id');
        
        $manager = $this->getDoctrine()->getManager();
        
        $blog = $manager->getRepository("TreewalkerBlogBundle:Blog")->find($blog_id);
        
        $entry = new BlogEntry();
        
        $path = $entry->getPath();
        
        if(file_exists($path.$filename)){
            unlink($path.$filename);
            
            $blog->setImage('');
        }
        
        $manager->flush();
        
        return new JsonResponse(array('code' => '100','success' => 'success') );
        
    }
}
