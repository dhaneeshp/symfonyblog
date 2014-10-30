<?php

namespace Treewalker\Bundle\BlogBundle\Twig;


class priceExtension  extends \Twig_Extension{
    
    public function getFilters() {
        return array(
                'price' => new \Twig_Filter_Method($this, 'priceFilter'),
                );
    }
    
    public function priceFilter($number,$decimals=0, $desPoint=".",$sep=","){
       
        $price = number_format($number,$decimals,$desPoint,$sep);        
        $price = "$".$price;
        return $price;
    }
    
    
    public function getName(){
        return 'price';
    }
}
    