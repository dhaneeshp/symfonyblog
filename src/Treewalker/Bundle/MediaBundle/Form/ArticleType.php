<?php

namespace Treewalker\Bundle\MediaBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ArticleType  extends AbstractType{
   
    public function getName() {
        return 'treewalker_media_article';
    }

    public function buildForm(FormBuilderInterface $builder, array $options) {
       
        $builder->add('image','vlabs_file', array(
                'required' => false
            ))
            ->add('submit','submit');
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Treewalker\Bundle\MediaBundle\Entity\Article'
        ));
    }

}
