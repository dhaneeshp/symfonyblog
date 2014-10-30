<?php

/* TreewalkerBlogBundle:Layout:base.html.twig */
class __TwigTemplate_a4adfbc23bbb4b698373d65f53caa4e2cc98b4e164c45270b09abbd7c64fe14c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'extra_stylesheets' => array($this, 'block_extra_stylesheets'),
            'navigation' => array($this, 'block_navigation'),
            'blog_title' => array($this, 'block_blog_title'),
            'blog_tagline' => array($this, 'block_blog_tagline'),
            'body' => array($this, 'block_body'),
            'content' => array($this, 'block_content'),
            'sidebar' => array($this, 'block_sidebar'),
            'footer' => array($this, 'block_footer'),
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
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <title>";
        // line 7
        echo twig_escape_filter($this->env, (isset($context["website_title"]) ? $context["website_title"] : null), "html", null, true);
        echo "</title>
    <script type=\"text/javascript\" src=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.js"), "html", null, true);
        echo "\"></script>
    ";
        // line 9
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 14
        echo "    ";
        $this->displayBlock('extra_stylesheets', $context, $blocks);
        // line 15
        echo "    </head>
    <body>
        <section id=\"wrapper\">
            <header id=\"header\">
                <div class=\"top\">
                    ";
        // line 20
        $this->displayBlock('navigation', $context, $blocks);
        // line 38
        echo "                </div>
                <hgroup>
                    <h2>";
        // line 40
        $this->displayBlock('blog_title', $context, $blocks);
        echo "</h2>
                    <h3>";
        // line 41
        $this->displayBlock('blog_tagline', $context, $blocks);
        echo "</h3>
                </hgroup>
            </header>
            <section class=\"main-col\">
                ";
        // line 45
        $this->displayBlock('body', $context, $blocks);
        // line 50
        echo "            </section>
            <aside class=\"sidebar\">
                ";
        // line 52
        $this->displayBlock('sidebar', $context, $blocks);
        // line 55
        echo "            </aside>
        <!-- Main -->
        
    </section>
    <div id=\"footer\">
                ";
        // line 60
        $this->displayBlock('footer', $context, $blocks);
        // line 63
        echo "            </div>
            
            
      ";
        // line 66
        $this->displayBlock('extra_javascript_footer', $context, $blocks);
        // line 67
        echo "    </body>
    
</html>";
    }

    // line 9
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 10
        echo "            <link href='http://fonts.googleapis.com/css?family=Irish+Grover' rel='stylesheet' type='text/css'>
            <link href='http://fonts.googleapis.com/css?family=La+Belle+Aurore' rel='stylesheet' type='text/css'>
            <link href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/screen.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
        ";
    }

    // line 14
    public function block_extra_stylesheets($context, array $blocks = array())
    {
    }

    // line 20
    public function block_navigation($context, array $blocks = array())
    {
        // line 21
        echo "                        <nav>
                             
                            <ul class=\"navigation\">
                                <li><a href=\"";
        // line 24
        echo $this->env->getExtension('routing')->getPath("treewalker_blog_homepage");
        echo "\">Home</a></li> 
                                 
                               <li><a href=\"";
        // line 26
        echo $this->env->getExtension('routing')->getPath("treewalker_blog_about");
        echo "\">About</a></li>
                                <li><a href=\"";
        // line 27
        echo $this->env->getExtension('routing')->getPath("treewalker_blog_contact");
        echo "\">Contact</a></li>                                 
                                ";
        // line 28
        if ($this->env->getExtension('security')->isGranted("ROLE_USER")) {
            // line 29
            echo "                                <li><a href=\"";
            echo $this->env->getExtension('routing')->getPath("logout");
            echo "\" > Welcome ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "firstname", array()), "html", null, true);
            echo " Logout</a></li>
                                ";
        } else {
            // line 31
            echo "                                    
                                    <li><a href=\"";
            // line 32
            echo $this->env->getExtension('routing')->getPath("login");
            echo "\">Login</a></li>
                                    <li><a href=\"";
            // line 33
            echo $this->env->getExtension('routing')->getPath("treewalker_user_register");
            echo "\">Register</a></li>
                                ";
        }
        // line 34
        echo "   
                            </ul>
                        </nav>
                    ";
    }

    // line 40
    public function block_blog_title($context, array $blocks = array())
    {
        echo "<a href=\"#\">symblog</a>";
    }

    // line 41
    public function block_blog_tagline($context, array $blocks = array())
    {
        echo "<a href=\"#\">creating a blog in Symfony2</a>";
    }

    // line 45
    public function block_body($context, array $blocks = array())
    {
        // line 46
        echo "                    <main role=\"main\">
                        ";
        // line 47
        $this->displayBlock('content', $context, $blocks);
        // line 48
        echo "                    </main>
                ";
    }

    // line 47
    public function block_content($context, array $blocks = array())
    {
    }

    // line 52
    public function block_sidebar($context, array $blocks = array())
    {
        // line 53
        echo "                   ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("TreewalkerBlogBundle:Blog:sidebar"));
        echo "
                ";
    }

    // line 60
    public function block_footer($context, array $blocks = array())
    {
        // line 61
        echo "                    Symfony2 blog tutorial - created by <a href=\"http://www.treewalkerlabs.com\">Treewalker Technologies</a>
                ";
    }

    // line 66
    public function block_extra_javascript_footer($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "TreewalkerBlogBundle:Layout:base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  215 => 61,  212 => 60,  205 => 53,  202 => 52,  197 => 47,  192 => 48,  190 => 47,  184 => 45,  178 => 41,  172 => 40,  165 => 34,  160 => 33,  153 => 31,  145 => 29,  139 => 27,  104 => 9,  96 => 66,  76 => 50,  74 => 45,  37 => 7,  77 => 22,  70 => 19,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 66,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 51,  128 => 49,  111 => 12,  107 => 10,  61 => 13,  273 => 96,  269 => 94,  254 => 92,  246 => 90,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 28,  135 => 26,  131 => 52,  119 => 42,  108 => 36,  102 => 32,  71 => 17,  67 => 41,  63 => 40,  59 => 38,  47 => 14,  87 => 25,  55 => 15,  94 => 28,  89 => 60,  85 => 25,  79 => 18,  75 => 21,  72 => 16,  68 => 14,  56 => 9,  50 => 15,  41 => 8,  28 => 3,  29 => 1,  21 => 2,  38 => 5,  26 => 6,  24 => 4,  35 => 4,  31 => 4,  25 => 4,  98 => 67,  93 => 28,  88 => 6,  78 => 21,  46 => 7,  44 => 12,  27 => 4,  22 => 2,  43 => 8,  40 => 8,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 67,  156 => 32,  151 => 63,  142 => 59,  138 => 54,  136 => 56,  123 => 47,  121 => 46,  117 => 14,  115 => 43,  105 => 40,  101 => 32,  91 => 63,  69 => 25,  66 => 15,  62 => 23,  49 => 9,  32 => 4,  19 => 1,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 46,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 59,  154 => 58,  149 => 51,  147 => 58,  144 => 49,  141 => 48,  133 => 55,  130 => 24,  125 => 21,  122 => 20,  116 => 41,  112 => 42,  109 => 34,  106 => 33,  103 => 32,  99 => 31,  95 => 28,  92 => 21,  86 => 28,  82 => 55,  80 => 52,  73 => 19,  64 => 14,  60 => 13,  57 => 20,  54 => 11,  51 => 14,  48 => 8,  45 => 9,  42 => 7,  39 => 9,  36 => 5,  33 => 4,  30 => 7,);
    }
}
