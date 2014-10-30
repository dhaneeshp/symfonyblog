<?php

/* TreewalkerBlogBundle:Layout:layout.html.twig */
class __TwigTemplate_f6e1ce092c58a77249df75d35eca72f37ed03c81fe5010db636a796bb3e66dd2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("TreewalkerBlogBundle:Layout:base.html.twig");

        $this->blocks = array(
            'extra_stylesheets' => array($this, 'block_extra_stylesheets'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TreewalkerBlogBundle:Layout:base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_extra_stylesheets($context, array $blocks = array())
    {
        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/blog.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
    <link href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/sidebar.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
";
    }

    public function getTemplateName()
    {
        return "TreewalkerBlogBundle:Layout:layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  36 => 5,  100 => 26,  97 => 25,  90 => 23,  81 => 19,  75 => 18,  71 => 17,  64 => 13,  60 => 12,  55 => 10,  47 => 7,  40 => 5,  37 => 4,  31 => 4,  28 => 3,);
    }
}
