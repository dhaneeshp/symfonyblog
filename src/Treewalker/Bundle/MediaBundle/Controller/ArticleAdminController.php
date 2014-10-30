<?php


namespace Treewalker\Bundle\MediaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

use Treewalker\Bundle\MediaBundle\Entity\Article;
use Treewalker\Bundle\MediaBundle\Form\ArticleType;
use Treewalker\Bundle\PaginationBundle\Entity\Paginator;

class ArticleAdminController extends Controller {
   
    /**
     * The index action
     *
     * @Route("/", name="treewalker_admin_article_homepage")
     */    
    public function indexAction(){
        
        $em = $this->getDoctrine()->getManager();
        
        $media = $em->createQueryBuilder()
                      ->select('b')
                      ->from('TreewalkerMediaBundle:Article',  'b')
                      ->getQuery();

        
          $paginator = new Paginator();
          $page = $this->get('request')->query->get('page',1);

          $pagination = $paginator->paginate($media,$page,20);

         
          return $this->render('TreewalkerMediaBundle:Media:manage.html.twig',array(
             'paginator' => $paginator, 'pagination'  => $pagination
          ));
        
        
    }
    
    /**
     * The index action
     *
     * @Route("/add", name="treewalker_admin_article_add")
     */    
    
    public function addArticleAction(Request $request){
        
        $form = $this->createForm(new ArticleType(),new Article());
        
        $form->bind($request);
        
        if($form->isValid()){
            
            $manager = $this->getDoctrine()->getManager();
            
            $article = $form->getData();
            
            $article->setClass_type('type');
            
           
            $manager->persist($article);
                 
            
            $manager->flush();
          
            return $this->redirect($this->generateUrl('treewalker_admin_article_homepage'));
            
        }
        return $this->render('TreewalkerMediaBundle:Article:add.html.twig',array('form'=>$form->createView()));
    }
    
}
