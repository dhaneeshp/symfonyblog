<?php
namespace Treewalker\Bundle\MediaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;
use Treewalker\Bundle\PaginationBundle\Entity\Paginator;
use Treewalker\Bundle\MediaBundle\Entity\Article;
use Treewalker\Bundle\MediaBundle\Form\ArticleType;

class MediaAdminController extends Controller {
    
    /**
     * The index action
     *
     * @Route("/", name="treewalker_admin_media_homepage")
     */    
    public function indexAction(Request $request){
       
        $em = $this->getDoctrine()->getManager();
        
        $media = $em->createQueryBuilder()
                    ->select('b')
                    ->from('TreewalkerMediaBundle:Article',  'b')
                    ->getQuery();
        
        $paginator = new Paginator();
        $page = $this->get('request')->query->get('page',1);
        
        $pagination = $paginator->paginate($media,$page,2);
        
        return $this->render('TreewalkerMediaBundle:Media:manage.html.twig',array(
           'paginator' => $paginator, 'pagination'  => $pagination
        ));
        
    }
    
    
}
