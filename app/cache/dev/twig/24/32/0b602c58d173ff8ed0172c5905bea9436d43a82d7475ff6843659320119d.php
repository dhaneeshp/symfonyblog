<?php

/* knp_menu_base.html.twig */
class __TwigTemplate_24320b602c58d173ff8ed0172c5905bea9436d43a82d7475ff6843659320119d extends Twig_Template
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
        if ($this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "compressed", array())) {
            $this->displayBlock("compressed_root", $context, $blocks);
        } else {
            $this->displayBlock("root", $context, $blocks);
        }
    }

    public function getTemplateName()
    {
        return "knp_menu_base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,  269 => 6,  267 => 5,  263 => 4,  252 => 3,  242 => 101,  231 => 99,  218 => 97,  209 => 92,  207 => 91,  205 => 90,  203 => 89,  199 => 86,  195 => 84,  193 => 83,  189 => 82,  186 => 81,  183 => 78,  181 => 77,  179 => 76,  176 => 73,  173 => 72,  170 => 71,  168 => 70,  165 => 69,  162 => 68,  159 => 66,  156 => 64,  154 => 63,  151 => 61,  149 => 60,  146 => 58,  143 => 56,  141 => 55,  139 => 54,  137 => 52,  134 => 51,  130 => 48,  128 => 47,  111 => 44,  94 => 43,  91 => 41,  86 => 37,  84 => 36,  82 => 34,  80 => 33,  64 => 25,  61 => 24,  59 => 23,  56 => 22,  52 => 19,  50 => 18,  40 => 13,  38 => 12,  107 => 40,  101 => 38,  99 => 37,  96 => 36,  89 => 40,  77 => 31,  69 => 26,  63 => 19,  55 => 14,  51 => 13,  47 => 17,  42 => 10,  35 => 11,  31 => 4,  28 => 3,);
    }
}
