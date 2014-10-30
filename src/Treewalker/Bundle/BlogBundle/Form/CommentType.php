<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Treewalker\Bundle\BlogBundle\Form;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
/**
 * Description of CommentType
 *
 * @author dhaneeshp
 */
class CommentType extends AbstractType{
   
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('user')
            ->add('comment')
//            ->add('approved')
//            ->add('created')
//            ->add('updated')
//            ->add('blog')
        ;
    }

    public function getName()
    {
        return 'treewalker_blogbundle_commenttype';
    }
}
