<?php

/* TreewalkerPaginationBundle:Default:paginator_navigation.html.twig */
class __TwigTemplate_a07f52ee52cb9068c7f4953f98c5f09bc10b0e8e5e6febe8e3bac27f90756ee0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $context["currentPath"] = $this->env->getExtension('routing')->getPath($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "_route"), "method"), $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "_route_params"), "method"));
        // line 2
        $context["currentPage"] = $this->getAttribute((isset($context["paginator"]) ? $context["paginator"] : $this->getContext($context, "paginator")), "getCurrentPage", array(), "method");
        // line 3
        $context["totalPages"] = $this->getAttribute((isset($context["paginator"]) ? $context["paginator"] : $this->getContext($context, "paginator")), "getTotalPages", array(), "method");
        // line 4
        echo " 
<div class=\"pagination\" id=\"paging\">
    
    ";
        // line 7
        if (((isset($context["currentPage"]) ? $context["currentPage"] : $this->getContext($context, "currentPage")) > 1)) {
            // line 8
            echo "      <a href=\"";
            echo twig_escape_filter($this->env, (isset($context["currentPath"]) ? $context["currentPath"] : $this->getContext($context, "currentPath")), "html", null, true);
            echo "?page=1\" class=\"page\">&laquo;</a>
      <a href=\"";
            // line 9
            echo twig_escape_filter($this->env, (isset($context["currentPath"]) ? $context["currentPath"] : $this->getContext($context, "currentPath")), "html", null, true);
            echo "?page=";
            echo twig_escape_filter($this->env, ((((isset($context["currentPage"]) ? $context["currentPage"] : $this->getContext($context, "currentPage")) > 1)) ? (((isset($context["currentPage"]) ? $context["currentPage"] : $this->getContext($context, "currentPage")) - 1)) : (1)), "html", null, true);
            echo "\" class=\"page\"><</a>
    ";
        }
        // line 11
        echo "    ";
        if ((((isset($context["currentPage"]) ? $context["currentPage"] : $this->getContext($context, "currentPage")) - 3) > 0)) {
            // line 12
            echo "      <a href=\"#\">...</a>
    ";
        }
        // line 14
        echo "    ";
        if ((((isset($context["currentPage"]) ? $context["currentPage"] : $this->getContext($context, "currentPage")) - 2) > 0)) {
            // line 15
            echo "        <a href=\"";
            echo twig_escape_filter($this->env, (isset($context["currentPath"]) ? $context["currentPath"] : $this->getContext($context, "currentPath")), "html", null, true);
            echo "?page=";
            echo twig_escape_filter($this->env, ((isset($context["currentPage"]) ? $context["currentPage"] : $this->getContext($context, "currentPage")) - 2), "html", null, true);
            echo "\" class=\"page\">";
            echo twig_escape_filter($this->env, ((isset($context["currentPage"]) ? $context["currentPage"] : $this->getContext($context, "currentPage")) - 2), "html", null, true);
            echo "</a>
    ";
        }
        // line 17
        echo "    ";
        if ((((isset($context["currentPage"]) ? $context["currentPage"] : $this->getContext($context, "currentPage")) - 1) > 0)) {
            // line 18
            echo "        <a href=\"";
            echo twig_escape_filter($this->env, (isset($context["currentPath"]) ? $context["currentPath"] : $this->getContext($context, "currentPath")), "html", null, true);
            echo "?page=";
            echo twig_escape_filter($this->env, ((isset($context["currentPage"]) ? $context["currentPage"] : $this->getContext($context, "currentPage")) - 1), "html", null, true);
            echo "\" class=\"page\">";
            echo twig_escape_filter($this->env, ((isset($context["currentPage"]) ? $context["currentPage"] : $this->getContext($context, "currentPage")) - 1), "html", null, true);
            echo "</a>
    ";
        }
        // line 20
        echo "    <a href=\"#\" class=\"page active\">";
        echo twig_escape_filter($this->env, (isset($context["currentPage"]) ? $context["currentPage"] : $this->getContext($context, "currentPage")), "html", null, true);
        echo "</a>
   ";
        // line 21
        if ((((isset($context["currentPage"]) ? $context["currentPage"] : $this->getContext($context, "currentPage")) + 1) <= (isset($context["totalPages"]) ? $context["totalPages"] : $this->getContext($context, "totalPages")))) {
            // line 22
            echo "    <a href=\"";
            echo twig_escape_filter($this->env, (isset($context["currentPath"]) ? $context["currentPath"] : $this->getContext($context, "currentPath")), "html", null, true);
            echo "?page=";
            echo twig_escape_filter($this->env, ((isset($context["currentPage"]) ? $context["currentPage"] : $this->getContext($context, "currentPage")) + 1), "html", null, true);
            echo "\" class=\"page\">";
            echo twig_escape_filter($this->env, ((isset($context["currentPage"]) ? $context["currentPage"] : $this->getContext($context, "currentPage")) + 1), "html", null, true);
            echo "</a>
";
        }
        // line 24
        if ((((isset($context["currentPage"]) ? $context["currentPage"] : $this->getContext($context, "currentPage")) + 2) <= (isset($context["totalPages"]) ? $context["totalPages"] : $this->getContext($context, "totalPages")))) {
            // line 25
            echo "    <a href=\"";
            echo twig_escape_filter($this->env, (isset($context["currentPath"]) ? $context["currentPath"] : $this->getContext($context, "currentPath")), "html", null, true);
            echo "?page=";
            echo twig_escape_filter($this->env, ((isset($context["currentPage"]) ? $context["currentPage"] : $this->getContext($context, "currentPage")) + 2), "html", null, true);
            echo "\" class=\"page\">";
            echo twig_escape_filter($this->env, ((isset($context["currentPage"]) ? $context["currentPage"] : $this->getContext($context, "currentPage")) + 2), "html", null, true);
            echo "</a>
";
        }
        // line 27
        if ((((isset($context["currentPage"]) ? $context["currentPage"] : $this->getContext($context, "currentPage")) + 2) < (isset($context["totalPages"]) ? $context["totalPages"] : $this->getContext($context, "totalPages")))) {
            // line 28
            echo "    <a href=\"#\" >...</a>
";
        }
        // line 30
        echo " 
";
        // line 31
        if (((isset($context["currentPage"]) ? $context["currentPage"] : $this->getContext($context, "currentPage")) < (isset($context["totalPages"]) ? $context["totalPages"] : $this->getContext($context, "totalPages")))) {
            // line 32
            echo "    <a href=\"";
            echo twig_escape_filter($this->env, (isset($context["currentPath"]) ? $context["currentPath"] : $this->getContext($context, "currentPath")), "html", null, true);
            echo "?page=";
            echo twig_escape_filter($this->env, ((((isset($context["currentPage"]) ? $context["currentPage"] : $this->getContext($context, "currentPage")) < (isset($context["totalPages"]) ? $context["totalPages"] : $this->getContext($context, "totalPages")))) ? (((isset($context["currentPage"]) ? $context["currentPage"] : $this->getContext($context, "currentPage")) + 1)) : ((isset($context["currentPage"]) ? $context["currentPage"] : $this->getContext($context, "currentPage")))), "html", null, true);
            echo "\" class=\"page\">></a>
    <a href=\"";
            // line 33
            echo twig_escape_filter($this->env, (isset($context["currentPath"]) ? $context["currentPath"] : $this->getContext($context, "currentPath")), "html", null, true);
            echo "?page=";
            echo twig_escape_filter($this->env, (isset($context["totalPages"]) ? $context["totalPages"] : $this->getContext($context, "totalPages")), "html", null, true);
            echo "\" class=\"page\">&raquo;</a>
";
        }
        // line 35
        echo "    ";
    }

    public function getTemplateName()
    {
        return "TreewalkerPaginationBundle:Default:paginator_navigation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  131 => 35,  124 => 33,  117 => 32,  115 => 31,  112 => 30,  108 => 28,  106 => 27,  67 => 18,  54 => 15,  44 => 11,  37 => 9,  32 => 8,  30 => 7,  25 => 4,  23 => 3,  21 => 2,  19 => 1,  269 => 6,  267 => 5,  263 => 4,  252 => 3,  242 => 101,  231 => 99,  218 => 97,  209 => 92,  207 => 91,  205 => 90,  203 => 89,  199 => 86,  195 => 84,  193 => 83,  189 => 82,  186 => 81,  183 => 78,  181 => 77,  179 => 76,  176 => 73,  173 => 72,  170 => 71,  168 => 70,  165 => 69,  162 => 68,  159 => 66,  156 => 64,  154 => 63,  151 => 61,  149 => 60,  146 => 58,  143 => 56,  141 => 55,  139 => 54,  137 => 52,  134 => 51,  130 => 48,  128 => 47,  111 => 44,  94 => 24,  91 => 41,  86 => 37,  84 => 22,  82 => 21,  80 => 33,  64 => 17,  61 => 24,  59 => 23,  56 => 22,  52 => 19,  50 => 18,  40 => 13,  38 => 12,  107 => 40,  101 => 38,  99 => 37,  96 => 25,  89 => 40,  77 => 20,  69 => 26,  63 => 19,  55 => 14,  51 => 14,  47 => 12,  42 => 10,  35 => 11,  31 => 4,  28 => 3,);
    }
}
