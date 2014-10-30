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
        $context['_seq'] = twig_ensure_traversable((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["blog"]) {
            // line 11
            echo "        <div class=\"row\">
            <span class=\"column\">
                <a href=\"";
            // line 13
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("treewalker_blog_admin_edit", array("id" => $this->getAttribute((isset($context["blog"]) ? $context["blog"] : $this->getContext($context, "blog")), "id", array()))), "html", null, true);
            echo "\" >
                    ";
            // line 14
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["blog"]) ? $context["blog"] : $this->getContext($context, "blog")), "title", array()), "html", null, true);
            echo "
                </a>                
            </span>
                <span class=\"column\">
                    
                     <img src=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(twig_join_filter(array(0 => "uploads/images/", 1 => $this->getAttribute((isset($context["blog"]) ? $context["blog"] : $this->getContext($context, "blog")), "image", array())))), "html", null, true);
            echo "\"  />
                </span>
                <span class=\"column\">
                    <a href=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("treewalker_blog_admin_edit", array("id" => $this->getAttribute((isset($context["blog"]) ? $context["blog"] : $this->getContext($context, "blog")), "id", array()))), "html", null, true);
            echo "\" >Edit</a>
                   
                    
                </span>
                    <span class=\"column\">
                        <a href=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("treewalker_blog_admin_delete", array("id" => $this->getAttribute((isset($context["blog"]) ? $context["blog"] : $this->getContext($context, "blog")), "id", array()))), "html", null, true);
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
        if (((twig_length_filter($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination"))) > 0) && ($this->getAttribute((isset($context["paginator"]) ? $context["paginator"] : $this->getContext($context, "paginator")), "getTotalPages", array(), "method") > 1))) {
            // line 38
            echo "        ";
            echo twig_include($this->env, $context, "TreewalkerPaginationBundle:Default:paginator_navigation.html.twig", array("paginator" => (isset($context["paginator"]) ? $context["paginator"] : $this->getContext($context, "paginator"))));
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
        return array (  107 => 40,  101 => 38,  99 => 37,  96 => 36,  89 => 34,  77 => 27,  69 => 22,  63 => 19,  55 => 14,  51 => 13,  47 => 11,  42 => 10,  35 => 6,  31 => 4,  28 => 3,);
    }
}
