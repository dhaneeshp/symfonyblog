<?php

use Symfony\Component\HttpKernel\Kernel;
use Symfony\Component\Config\Loader\LoaderInterface;

class AppKernel extends Kernel
{
    public function registerBundles()
    {
        $bundles = array(
            new Symfony\Bundle\FrameworkBundle\FrameworkBundle(),
            new Symfony\Bundle\SecurityBundle\SecurityBundle(),
            new Symfony\Bundle\TwigBundle\TwigBundle(),
            new Symfony\Bundle\MonologBundle\MonologBundle(),
            new Symfony\Bundle\SwiftmailerBundle\SwiftmailerBundle(),
            new Symfony\Bundle\AsseticBundle\AsseticBundle(),
            new Doctrine\Bundle\DoctrineBundle\DoctrineBundle(),
            new Sensio\Bundle\FrameworkExtraBundle\SensioFrameworkExtraBundle(),
            new Treewalker\Bundle\BlogBundle\TreewalkerBlogBundle(),
            //new FOS\UserBundle\FOSUserBundle(),
            new Treewalker\Bundle\UserBundle\TreewalkerUserBundle(),
            new Treewalker\Bundle\AdminBundle\TreewalkerAdminBundle(),
            new Stfalcon\Bundle\TinymceBundle\StfalconTinymceBundle(),
            new Doctrine\Bundle\FixturesBundle\DoctrineFixturesBundle(),
            new Treewalker\Bundle\PaginationBundle\TreewalkerPaginationBundle(),
            new Knp\Bundle\MenuBundle\KnpMenuBundle(),
            new Treewalker\Bundle\MediaBundle\TreewalkerMediaBundle(),
            new Vlabs\MediaBundle\VlabsMediaBundle(),
            new Treewalker\Bundle\SocialLoginBundle\TreewalkerSocialLoginBundle(),
            new Treewalker\Bundle\CharityBundle\TreewalkerCharityBundle(),            
            new Treewalker\Bundle\NewsletterBundle\TreewalkerNewsletterBundle(),
            new Trsteel\CkeditorBundle\TrsteelCkeditorBundle(),
            new FM\ElfinderBundle\FMElfinderBundle(),
        );

        if (in_array($this->getEnvironment(), array('dev', 'test'))) {            
            $bundles[] = new Symfony\Bundle\WebProfilerBundle\WebProfilerBundle();
            $bundles[] = new Sensio\Bundle\DistributionBundle\SensioDistributionBundle();
            $bundles[] = new Sensio\Bundle\GeneratorBundle\SensioGeneratorBundle();
        }

        return $bundles;
    }

    public function registerContainerConfiguration(LoaderInterface $loader)
    {
        $loader->load(__DIR__.'/config/config_'.$this->getEnvironment().'.yml');
    }
}
