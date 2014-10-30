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
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_d32d6e4_0") : $this->env->getExtension('assets')->getAssetUrl("css/d32d6e4_blog_1.css");
            // line 11
            echo "       <link type=\"text/css\"  href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\" rel=\"stylesheet\" >
    ";
        } else {
            // asset "d32d6e4"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_d32d6e4") : $this->env->getExtension('assets')->getAssetUrl("css/d32d6e4.css");
            echo "       <link type=\"text/css\"  href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\" rel=\"stylesheet\" >
    ";
        }
        unset($context["asset_url"]);
        // line 13
        echo "    ";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "6f2aa8e_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_6f2aa8e_0") : $this->env->getExtension('assets')->getAssetUrl("css/6f2aa8e_part_1_admin_1.css");
            // line 14
            echo "       <link type=\"text/css\"  href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\" rel=\"stylesheet\" >
    ";
            // asset "6f2aa8e_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_6f2aa8e_1") : $this->env->getExtension('assets')->getAssetUrl("css/6f2aa8e_part_1_menu_2.css");
            echo "       <link type=\"text/css\"  href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\" rel=\"stylesheet\" >
    ";
        } else {
            // asset "6f2aa8e"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_6f2aa8e") : $this->env->getExtension('assets')->getAssetUrl("css/6f2aa8e.css");
            echo "       <link type=\"text/css\"  href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
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
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["websitetitle"]) ? $context["websitetitle"] : null)), "html", null, true);
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
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "firstname", array()), "html", null, true);
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
        return array (  167 => 37,  152 => 30,  148 => 28,  146 => 27,  120 => 41,  97 => 47,  90 => 45,  84 => 16,  215 => 61,  212 => 60,  205 => 53,  202 => 52,  197 => 47,  192 => 48,  190 => 47,  184 => 45,  178 => 41,  172 => 41,  165 => 34,  160 => 33,  153 => 31,  145 => 29,  139 => 27,  104 => 9,  96 => 36,  76 => 50,  74 => 45,  37 => 9,  77 => 27,  70 => 19,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 66,  214 => 69,  177 => 46,  169 => 60,  140 => 24,  132 => 51,  128 => 19,  111 => 12,  107 => 40,  61 => 13,  273 => 96,  269 => 94,  254 => 92,  246 => 90,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 34,  143 => 28,  135 => 26,  131 => 20,  119 => 42,  108 => 36,  102 => 32,  71 => 17,  67 => 41,  63 => 19,  59 => 13,  47 => 11,  87 => 25,  55 => 14,  94 => 28,  89 => 34,  85 => 25,  79 => 18,  75 => 21,  72 => 16,  68 => 14,  56 => 9,  50 => 15,  41 => 10,  28 => 3,  29 => 1,  21 => 2,  38 => 5,  26 => 6,  24 => 1,  35 => 6,  31 => 4,  25 => 4,  98 => 67,  93 => 28,  88 => 18,  78 => 21,  46 => 7,  44 => 12,  27 => 4,  22 => 2,  43 => 8,  40 => 8,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 67,  156 => 32,  151 => 63,  142 => 59,  138 => 54,  136 => 23,  123 => 47,  121 => 46,  117 => 14,  115 => 38,  105 => 40,  101 => 38,  91 => 63,  69 => 22,  66 => 15,  62 => 23,  49 => 9,  32 => 4,  19 => 1,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 46,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 59,  154 => 58,  149 => 51,  147 => 58,  144 => 49,  141 => 48,  133 => 55,  130 => 24,  125 => 21,  122 => 42,  116 => 41,  112 => 19,  109 => 18,  106 => 33,  103 => 8,  99 => 37,  95 => 46,  92 => 21,  86 => 28,  82 => 55,  80 => 52,  73 => 19,  64 => 14,  60 => 13,  57 => 20,  54 => 11,  51 => 13,  48 => 8,  45 => 11,  42 => 10,  39 => 9,  36 => 5,  33 => 8,  30 => 7,);
    }
}
