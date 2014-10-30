<?php

/* TreewalkerAdminBundle:Layout:base.html.twig */
class __TwigTemplate_ba4c55f23334703804498996cc219b2e572ab71e81f549a3387575ec4de408d1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'top_menu' => array($this, 'block_top_menu'),
            'content' => array($this, 'block_content'),
            'extra_javascript_footer' => array($this, 'block_extra_javascript_footer'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
 <head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge,chrome=1\">
    <meta name=\"robots\" content=\"noindex, nofollow\">

    <title>";
        // line 8
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    <script type=\"text/javascript\" src=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.js"), "html", null, true);
        echo "\"></script>
    ";
        // line 10
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "d32d6e4_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_d32d6e4_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/d32d6e4_blog_1.css");
            // line 11
            echo "       <link type=\"text/css\"  href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" rel=\"stylesheet\" >
    ";
        } else {
            // asset "d32d6e4"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_d32d6e4") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/d32d6e4.css");
            echo "       <link type=\"text/css\"  href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" rel=\"stylesheet\" >
    ";
        }
        unset($context["asset_url"]);
        // line 13
        echo "    ";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "6f2aa8e_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_6f2aa8e_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/6f2aa8e_part_1_admin_1.css");
            // line 14
            echo "       <link type=\"text/css\"  href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" rel=\"stylesheet\" >
    ";
            // asset "6f2aa8e_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_6f2aa8e_1") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/6f2aa8e_part_1_menu_2.css");
            echo "       <link type=\"text/css\"  href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" rel=\"stylesheet\" >
    ";
        } else {
            // asset "6f2aa8e"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_6f2aa8e") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/6f2aa8e.css");
            echo "       <link type=\"text/css\"  href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" rel=\"stylesheet\" >
    ";
        }
        unset($context["asset_url"]);
        // line 16
        echo " </head>
 <body>
 ";
        // line 18
        $this->displayBlock('body', $context, $blocks);
        // line 45
        echo " ";
        echo $this->env->getExtension('stfalcon_tinymce')->tinymceInit();
        echo "
 ";
        // line 46
        $this->displayBlock('extra_javascript_footer', $context, $blocks);
        // line 47
        echo " 
 </body>
</html>";
    }

    // line 8
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["websitetitle"]) ? $context["websitetitle"] : $this->getContext($context, "websitetitle"))), "html", null, true);
    }

    // line 18
    public function block_body($context, array $blocks = array())
    {
        // line 19
        echo "         ";
        $this->displayBlock('top_menu', $context, $blocks);
        // line 38
        echo "  
        
        <div class=\"content\">
        ";
        // line 41
        $this->displayBlock('content', $context, $blocks);
        // line 42
        echo "        
        </div>
 ";
    }

    // line 19
    public function block_top_menu($context, array $blocks = array())
    {
        // line 20
        echo "            <!--=========Top menu=========-->
            <header>
                <div class=\"logo\">
                    <a class=\"brand\" href=\"";
        // line 23
        echo $this->env->getExtension('routing')->getPath("treewalker_admin_homepage");
        echo "\">
                        <img src=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("uploads/images/images.jpg"), "html", null, true);
        echo "\" style=\"height:25px;width:75px\">
                    </a>
                </div>
                ";
        // line 27
        if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
            // line 28
            echo "                    <div class=\"navbar\">
                         <div id=\"cssmenu\">
                         ";
            // line 30
            echo $this->env->getExtension('knp_menu')->render("TreewalkerAdminBundle:Builder:mainMenu");
            echo "
                         </div>
                    </div>
                    <div class=\"user_info_section\" >                    
                        Welcome ";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "firstname", array()), "html", null, true);
            echo "! <a href=\"";
            echo $this->env->getExtension('routing')->getPath("admin_logout");
            echo "\">Logout</a>                    
                    </div>
                ";
        }
        // line 37
        echo "            </header>
        ";
    }

    // line 41
    public function block_content($context, array $blocks = array())
    {
    }

    // line 46
    public function block_extra_javascript_footer($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "TreewalkerAdminBundle:Layout:base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  177 => 46,  172 => 41,  167 => 37,  159 => 34,  152 => 30,  148 => 28,  146 => 27,  140 => 24,  136 => 23,  131 => 20,  128 => 19,  122 => 42,  120 => 41,  115 => 38,  112 => 19,  109 => 18,  103 => 8,  97 => 47,  95 => 46,  90 => 45,  88 => 18,  84 => 16,  64 => 14,  59 => 13,  45 => 11,  41 => 10,  37 => 9,  33 => 8,  24 => 1,  58 => 17,  47 => 9,  40 => 6,  34 => 4,  31 => 3,  28 => 2,);
    }
}
