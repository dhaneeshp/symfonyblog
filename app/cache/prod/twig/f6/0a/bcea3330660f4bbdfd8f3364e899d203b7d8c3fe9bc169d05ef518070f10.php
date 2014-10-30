<?php

/* TreewalkerBlogBundle:Blog:manage_blog.html.twig */
class __TwigTemplate_f60abcea3330660f4bbdfd8f3364e899d203b7d8c3fe9bc169d05ef518070f10 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("TreewalkerAdminBundle:Layout:layout.html.twig");

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TreewalkerAdminBundle:Layout:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "    <div style=\"float:left; width:100%; \">
        <span class=\"btn\" style=\"float:right; margin-right:100px\">
            <a href=\"";
        // line 6
        echo $this->env->getExtension('routing')->getPath("treewalker_blog_admin_add");
        echo "\">Add Blog</a>
        </span>
        
    </div>
    ";
        // line 10
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pagination"]) ? $context["pagination"] : null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["blog"]) {
            // line 11
            echo "        <div class=\"row\">
            <span class=\"column\">
                <a href=\"";
            // line 13
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("treewalker_blog_admin_edit", array("id" => $this->getAttribute((isset($context["blog"]) ? $context["blog"] : null), "id", array()))), "html", null, true);
            echo "\" >
                    ";
            // line 14
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["blog"]) ? $context["blog"] : null), "title", array()), "html", null, true);
            echo "
                </a>                
            </span>
                <span class=\"column\">
                    
                     <img src=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(twig_join_filter(array(0 => "uploads/images/", 1 => $this->getAttribute((isset($context["blog"]) ? $context["blog"] : null), "image", array())))), "html", null, true);
            echo "\"  />
                </span>
                <span class=\"column\">
                    <a href=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("treewalker_blog_admin_edit", array("id" => $this->getAttribute((isset($context["blog"]) ? $context["blog"] : null), "id", array()))), "html", null, true);
            echo "\" >Edit</a>
                   
                    
                </span>
                    <span class=\"column\">
                        <a href=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("treewalker_blog_admin_delete", array("id" => $this->getAttribute((isset($context["blog"]) ? $context["blog"] : null), "id", array()))), "html", null, true);
            echo "\" >
                            Delete
                        </a>
                    </span>
        </div>
        
    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 34
            echo "        There are no Blogs !
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['blog'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "        
    ";
        // line 37
        if (((twig_length_filter($this->env, (isset($context["pagination"]) ? $context["pagination"] : null)) > 0) && ($this->getAttribute((isset($context["paginator"]) ? $context["paginator"] : null), "getTotalPages", array(), "method") > 1))) {
            // line 38
            echo "        ";
            echo twig_include($this->env, $context, "TreewalkerPaginationBundle:Default:paginator_navigation.html.twig", array("paginator" => (isset($context["paginator"]) ? $context["paginator"] : null)));
            echo "
    ";
        }
        // line 40
        echo "    
";
    }

    public function getTemplateName()
    {
        return "TreewalkerBlogBundle:Blog:manage_blog.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  215 => 61,  212 => 60,  205 => 53,  202 => 52,  197 => 47,  192 => 48,  190 => 47,  184 => 45,  178 => 41,  172 => 40,  165 => 34,  160 => 33,  153 => 31,  145 => 29,  139 => 27,  104 => 9,  96 => 36,  76 => 50,  74 => 45,  37 => 7,  77 => 27,  70 => 19,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 66,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 51,  128 => 49,  111 => 12,  107 => 40,  61 => 13,  273 => 96,  269 => 94,  254 => 92,  246 => 90,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 28,  135 => 26,  131 => 52,  119 => 42,  108 => 36,  102 => 32,  71 => 17,  67 => 41,  63 => 19,  59 => 38,  47 => 11,  87 => 25,  55 => 14,  94 => 28,  89 => 34,  85 => 25,  79 => 18,  75 => 21,  72 => 16,  68 => 14,  56 => 9,  50 => 15,  41 => 8,  28 => 3,  29 => 1,  21 => 2,  38 => 5,  26 => 6,  24 => 4,  35 => 6,  31 => 4,  25 => 4,  98 => 67,  93 => 28,  88 => 6,  78 => 21,  46 => 7,  44 => 12,  27 => 4,  22 => 2,  43 => 8,  40 => 8,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 67,  156 => 32,  151 => 63,  142 => 59,  138 => 54,  136 => 56,  123 => 47,  121 => 46,  117 => 14,  115 => 43,  105 => 40,  101 => 38,  91 => 63,  69 => 22,  66 => 15,  62 => 23,  49 => 9,  32 => 4,  19 => 1,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 46,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 59,  154 => 58,  149 => 51,  147 => 58,  144 => 49,  141 => 48,  133 => 55,  130 => 24,  125 => 21,  122 => 20,  116 => 41,  112 => 42,  109 => 34,  106 => 33,  103 => 32,  99 => 37,  95 => 28,  92 => 21,  86 => 28,  82 => 55,  80 => 52,  73 => 19,  64 => 14,  60 => 13,  57 => 20,  54 => 11,  51 => 13,  48 => 8,  45 => 9,  42 => 10,  39 => 9,  36 => 5,  33 => 4,  30 => 7,);
    }
}
