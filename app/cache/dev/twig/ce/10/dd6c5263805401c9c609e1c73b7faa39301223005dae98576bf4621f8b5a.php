<?php

/* TreewalkerBlogBundle:Home:view.html.twig */
class __TwigTemplate_ce10dd6c5263805401c9c609e1c73b7faa39301223005dae98576bf4621f8b5a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("TreewalkerBlogBundle:Layout:layout.html.twig");

        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "TreewalkerBlogBundle:Layout:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    public function getTemplateName()
    {
        return "TreewalkerBlogBundle:Home:view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 26,  97 => 25,  90 => 23,  81 => 19,  75 => 18,  71 => 17,  64 => 13,  60 => 12,  55 => 10,  47 => 7,  40 => 5,  37 => 4,  31 => 3,  28 => 2,);
    }
}
