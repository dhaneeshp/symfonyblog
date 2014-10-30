<?php
namespace Treewalker\Bundle\AdminBundle\Menu;

use Knp\Menu\FactoryInterface;
use Symfony\Component\DependencyInjection\ContainerAware;

class Builder extends ContainerAware {

    public function mainMenu(FactoryInterface $factory,array $options){
        
        $menu = $factory->createItem('root');
        
        $menu->addChild("Blog",array('route'=>'treewalker_blog_admin_homepage'));
        $menu->addChild('Users', array(
            'route' => 'treewalker_admin_users_homepage'
        ));
        
        $article = $factory->createItem('article');
        
        
        $menu->addChild('Article', array('route' => 'treewalker_admin_article_homepage'))
        ->addChild('Manage Article', array(
                    'route' => 'treewalker_admin_article_add'
                ))->getParent()->addChild('Sum',array('route'=>'treewalker_admin_article_homepage'));
        
       // $menu->addChild($article);
        
        return $menu;
    }
}
