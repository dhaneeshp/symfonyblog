<?php

namespace Treewalker\Bundle\BlogBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Treewalker\Bundle\BlogBundle\Entity\BlogEntry;
use Treewalker\Bundle\BlogBundle\Form\BlogEntryType;
use Symfony\Component\HttpFoundation\Request;
use Treewalker\Bundle\BlogBundle\Entity\Image;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;
use Treewalker\Bundle\PaginationBundle\Entity\Paginator;

class BlogAdminListController extends Controller {
      
    /**
     * The index action
     *
     * @Route("/", name="treewalker_blog_admin_homepage")
     */
    public function listAction(){
        //echo "Admin Side Blog listing";exit;
        $em = $this->getDoctrine()
                   ->getManager();

        $blogs = $em->createQueryBuilder()
                    ->select('b')
                    ->from('TreewalkerBlogBundle:Blog',  'b')
                    ->addOrderBy('b.created', 'DESC')
                    ->getQuery();
        $paginator = new Paginator();
        $page = $this->get('request')->query->get('page',1);
        
        $pagination = $paginator->paginate($blogs,$page,2);
                
        return $this->render('TreewalkerBlogBundle:Blog:manage_blog.html.twig', array(
               'websitetitle'=> 'Treewalker Blog','paginator'=>$paginator,'pagination' => $pagination));
    }
    
    /**
     * The add action
     *
     * @Route("/add", name="treewalker_blog_admin_add")
     * @Method({"GET", "POST"})
     * @return array
     */
    public function addAction(Request $request){
        
        
        if (false === $this->get('security.context')->isGranted('ROLE_ADMIN')) {
            throw new AccessDeniedException();
        }
        $form = $this->createForm(new BlogEntryType(),new BlogEntry());        
       // $blogEntry = new BlogEntry();      
        
        $form->handleRequest($request);
        
         
         if($form->isValid()){
            
             $em = $this->getDoctrine()->getManager();
            
             $bentry = $form->getData();
             
             $blog = $bentry->getBlog();           
            
             $image = $form->get('blog_image')->getData();
             
             $filename = '';
             
             if(isset($image)){
                $filename = time().".".$image->guessExtension();

                $dir = __DIR__.'/../../../../../web/uploads/images';
                $image->move($dir,$filename);
             }
             $blog->setImage($filename);
             $blog->setUpdated(new \DateTime("now"));
             $blog->setCreated(new \DateTime("now"));
             $blog->setBlog(strip_tags($blog->getBlog()));
            
             $em->persist($blog);
             $em->flush();
             return $this->redirect($this->generateUrl('treewalker_blog_admin_homepage'));
             exit;
         }
        return $this->render('TreewalkerBlogBundle:Blog:add.html.twig',array(
                'websitetitle' =>  'Add Blog',
                'form' => $form->createView()
                )
    );
        
    }
    
    /**
     * The edit action
     *
     * @param int $id
     *
     * @Route("/{id}", requirements={"id" = "\d+"}, name="treewalker_blog_admin_edit")
     * @Method({"GET", "POST"})
     *
     * @return array
     */
    public function editAction($id,Request $request)
    {
        
        $em = $this->getDoctrine()->getManager();
        $blog = $em->getRepository("TreewalkerBlogBundle:Blog")->find($id);
        
        $blogEntry = new BlogEntry();
        $blogEntry->setBlog($blog);
        $form = $this->createForm(new BlogEntryType(),$blogEntry);
        $form->handleRequest($request);
        
        if($form->isValid()){
           $data = $form->getData();
           $entry = $data->getBlog();
           $filename = $entry->getImage();
           
           $image = $form->get('blog_image')->getData();
           if(isset($image)){
               $filename = time().".".$image->guessExtension();
               $path = $blogEntry->getPath();               
               $dir = rtrim($path,"/");
               $image->move($dir,$filename);
           }
           
                     
           $blog->setImage($filename);
           $blog->setTitle($entry->getTitle());
           $blog->setBlog(strip_tags($entry->getBlog()));
           $em->flush();
           
           return $this->redirect($this->generateUrl('treewalker_blog_admin_homepage'));
             exit;
            
        }
        return $this->render("TreewalkerBlogBundle:Blog:edit.html.twig",array(
                'websitetitle' =>  'Add Blog',
                'form' => $form->createView(),'blog_id' => $id
                ));
        
        //return parent::doEditAction($this->getAdminListConfigurator(), $id);
    }

    /**
     * The delete action
     *
     * @param int $id
     *
     * @Route("/{id}/delete", requirements={"id" = "\d+"}, name="treewalker_blog_admin_delete")
     * @Method({"GET", "POST"})
     *
     * @return array
     */
    public function deleteAction($id)
    {
        
        //echo "delete blog post with id : $id"; exit;
        //
        $em = $this->getDoctrine()->getManager();
        $blog = $em->getRepository("TreewalkerBlogBundle:Blog")->find($id);
        
        $em->remove($blog);
        $em->flush();
        
        return $this->redirect($this->generateUrl('treewalker_blog_admin_homepage'));
        
        //return parent::doDeleteAction($this->getAdminListConfigurator(), $id);
    }

    /**
     * @Route("/export.{_format}", requirements={"_format" = "csv"}, name="treewalker_blog_admin_export")
     * @Method({"GET", "POST"})
     * @return array
     */
    public function exportAction($_format)
    {
        //return parent::doExportAction($this->getAdminListConfigurator(), $_format);
    }
}
