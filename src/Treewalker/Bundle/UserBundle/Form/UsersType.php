<?php

namespace Treewalker\Bundle\UserBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class UsersType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('firstname')
            ->add('lastname')
            ->add('city')
            ->add('country')
            ->add('email')
            ->add('dob','date',array('widget'=>'choice','years'=> range(date('Y')-100, date('Y')),
                            'days' => range(1,31)))    
            ->add('username')
            ->add('password','repeated',array(
                    'first_name' => 'password',
                    'second_name' => 'confirm',
                    'type' => 'password',
                ))
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Treewalker\Bundle\UserBundle\Entity\Users'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'treewalker_bundle_userbundle_users';
    }
    
    
}
