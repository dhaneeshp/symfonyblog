<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Treewalker\Bundle\BlogBundle\Form;


use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Treewalker\Bundle\BlogBundle\Form\BlogType;
/**
 * Description of BlogEntryType
 *
 * @author dhaneeshp
 */
class BlogEntryType extends AbstractType{
   
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('blog',new BlogType());
        $builder->add('image','hidden');
        $builder->add('path','hidden');
        $builder->add('blog_image','file',array('required'=>false));
        $builder->add('submit','submit');
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Treewalker\Bundle\BlogBundle\Entity\BlogEntry'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'treewalker_bundle_blogbundle_blogentry';
    }
}
