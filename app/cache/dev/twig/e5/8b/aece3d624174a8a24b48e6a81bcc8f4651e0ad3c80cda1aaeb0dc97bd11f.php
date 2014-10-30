<?php

/* TreewalkerAdminBundle:Layout:layout.html.twig */
class __TwigTemplate_e58baece3d624174a8a24b48e6a81bcc8f4651e0ad3c80cda1aaeb0dc97bd11f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("TreewalkerAdminBundle:Layout:base.html.twig");

        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "TreewalkerAdminBundle:Layout:base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    public function getTemplateName()
    {
        return "TreewalkerAdminBundle:Layout:layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 17,  47 => 9,  40 => 6,  34 => 4,  31 => 3,  28 => 2,);
    }
}
