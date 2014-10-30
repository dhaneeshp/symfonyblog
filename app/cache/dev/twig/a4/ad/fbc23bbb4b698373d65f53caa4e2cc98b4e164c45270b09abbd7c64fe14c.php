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
        echo twig_escape_filter($this->env, (isset($context["website_title"]) ? $context["website_title"] : $this->getContext($context, "website_title")), "html", null, true);
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
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "firstname", array()), "html", null, true);
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
        return array (  220 => 66,  215 => 61,  212 => 60,  205 => 53,  202 => 52,  197 => 47,  192 => 48,  190 => 47,  187 => 46,  184 => 45,  178 => 41,  172 => 40,  165 => 34,  160 => 33,  156 => 32,  153 => 31,  145 => 29,  143 => 28,  139 => 27,  135 => 26,  130 => 24,  125 => 21,  122 => 20,  117 => 14,  111 => 12,  107 => 10,  104 => 9,  98 => 67,  96 => 66,  91 => 63,  89 => 60,  82 => 55,  80 => 52,  76 => 50,  74 => 45,  67 => 41,  63 => 40,  59 => 38,  57 => 20,  50 => 15,  45 => 9,  41 => 8,  29 => 1,  36 => 5,  100 => 26,  97 => 25,  90 => 23,  81 => 19,  75 => 18,  71 => 17,  64 => 13,  60 => 12,  55 => 10,  47 => 14,  40 => 5,  37 => 7,  31 => 4,  28 => 3,);
    }
}
