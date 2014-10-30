<?php
namespace Treewalker\Bundle\NewsletterBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class NewsletterType extends AbstractType {
    
   /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nlname','text',array('label'=> 'Name'))
            ->add('newslettercontent','ckeditor', array(
                'transformers' => array(),
                'filebrowser_image_browse_url' => array(
                    'route'            => 'elfinder',
                    'route_parameters' => array('instance' => 'ckeditor'),
                )))
        ;
    }
    
    
    public function getName() {
      return 'Newsletter'  ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Treewalker\Bundle\NewsletterBundle\Entity\Newsletter'
        ));
    }
}
