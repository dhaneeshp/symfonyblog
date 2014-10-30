<?php
namespace Treewalker\Bundle\UserBundle\Form;

use Symfony\Component\Form\FormBuilderInterface;


class RegistrationFormType{
    //put your code here
    
    public function buildForm(FormBuilderInterface $builder, array $options) {
       
        
        $builder
            ->add('username',null,array('label'=> 'Username'))    
            ->add('firstname')
            ->add('lastname')
            ->add('city')
            ->add('country')
                ->add('plainPassword','repeated',array(
                    'first_name' => 'password',
                    'second_name' => 'confirm',
                    'type' => 'password',
                ))
        ;
    }
    
    public function getName() {
        return 'treewalker_user_registration';
    }
}
