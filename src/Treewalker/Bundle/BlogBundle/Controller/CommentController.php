<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
namespace Treewalker\Bundle\BlogBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Treewalker\Bundle\BlogBundle\Entity\Comment;
use Treewalker\Bundle\BlogBundle\Form\CommentType;

class CommentController extends Controller{
    
    public function newAction($blog_id){
        $blog = $this->getBlog($blog_id);
        $comment = new Comment();
        $comment->setBlog($blog);
        $form   = $this->createForm(new CommentType(), $comment);

        return $this->render('TreewalkerBlogBundle:Comment:form.html.twig', array(
            'comment' => $comment,
            'form'   => $form->createView()
        ));
    }
    
    
    public function createAction($blog_id)
    {
        $blog = $this->getBlog($blog_id);

        $comment  = new Comment();
        $comment->setBlog($blog);
        $request = $this->getRequest();
        $form    = $this->createForm(new CommentType(), $comment);
         $form->handleRequest($request);

        if ($form->isValid()) {
            // TODO: Persist the comment entity
            $em = $this->getDoctrine()->getManager();
            
            $comments = $form->getData();
           
            $em->persist($comments);
            
            $em->flush();
            
            return $this->redirect($this->generateUrl('TreewalkerBlogBundle_blog_show', array(
                'id' => $comment->getBlog()->getId())) .
                '#comment-' . $comment->getId()
            );
        }

        return $this->render('TreewalkerBlogBundle:Comment:create.html.twig', array(
            'comment' => $comment,
            'form'    => $form->createView()
        ));
    }
    
    
    protected function getBlog($blog_id)
    {
        $em = $this->getDoctrine()
                    ->getManager();

        $blog = $em->getRepository('TreewalkerBlogBundle:Blog')->find($blog_id);

        if (!$blog) {
            throw $this->createNotFoundException('Unable to find Blog post.');
        }

        return $blog;
    }
}
