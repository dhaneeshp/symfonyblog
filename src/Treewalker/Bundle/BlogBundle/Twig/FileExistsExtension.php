<?php
namespace Treewalker\Bundle\BlogBundle\Twig;

class FileExistsExtension  extends \Twig_Extension{
    
    public function getName() {
        return 'treewalker_blogbundle_file_exists';
    }

    public function getFunctions() {
        
        return array(
                        'file_exists' => new \Twig_Function_Function('file_exists'),
                        );
    }

    
}
?>