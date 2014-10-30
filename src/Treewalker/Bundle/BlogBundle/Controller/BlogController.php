<?php
namespace Treewalker\Bundle\BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Treewalker\Bundle\PaginationBundle\Entity\Paginator;

class BlogController extends Controller{

    public function indexAction(){

        $em = $this->getDoctrine()
                   ->getManager();

        $blogs = $em->createQueryBuilder()
                    ->select('b')
                    ->from('TreewalkerBlogBundle:Blog',  'b')
                    ->addOrderBy('b.created', 'DESC')
                    ->getQuery()           
                    ;
                    
        
//        $repository = $this->getDoctrine()->getRepository("TreewalkerBlogBundle:Blog");
//        
//        $queryProcesses = $repository->getProcessesNativeQuery();
        
        $paginator = new Paginator();
        
        $page = $this->get('request')->query->get('page',1);
        
        $pagination = $paginator->paginate($blogs,$page,2);
        

        return $this->render('TreewalkerBlogBundle:Default:index.html.twig', array('paginator' => $paginator,
               'website_title'=> 'Sample Custom Blog','pagination'=>$pagination));
    }

    
    
    public function showAction($id){

        $em= $this->getDoctrine()->getManager();
        $blog = $em->getRepository('TreewalkerBlogBundle:Blog')->find($id);
        if (!$blog) {
            throw $this->createNotFoundException('Unable to find Blog post.');
        }
        $comments = $em->getRepository('TreewalkerBlogBundle:Comment')
                   ->getCommentsForBlog($blog->getId());
        return $this->render('TreewalkerBlogBundle:Blog:show.html.twig', array(
            'blog'      => $blog, 'comments' => $comments,
        ));

    }
    
    
    public function aboutAction(){
        return $this->render('TreewalkerBlogBundle:Page:about.html.twig', array('name' => 'dhaneesh',
               'website_title'=> 'Sample Custom Blog'));
    }
    
    public function contactAction(){
        return $this->render('TreewalkerBlogBundle:Page:contact.html.twig', array('name' => 'dhaneesh',
               'website_title'=> 'Sample Custom Blog'));
    }
    
    
    public function sidebarAction()
    {
        $em = $this->getDoctrine()
                   ->getManager();

        $tags = $em->getRepository('TreewalkerBlogBundle:Blog')->getTags();

        $tagWeights = $em->getRepository('TreewalkerBlogBundle:Blog')
                         ->getTagWeights($tags); 
        
      

        return $this->render('TreewalkerBlogBundle:Blog:sidebar.html.twig', array(
            'tags' => $tagWeights
        ));
    }

}
