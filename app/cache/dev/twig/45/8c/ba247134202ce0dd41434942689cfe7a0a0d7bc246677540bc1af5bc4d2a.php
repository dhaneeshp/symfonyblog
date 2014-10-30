<?php

/* TreewalkerBlogBundle:Comment:create.html.twig */
class __TwigTemplate_458cba247134202ce0dd41434942689cfe7a0a0d7bc246677540bc1af5bc4d2a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("TreewalkerBlogBundle:Layout:layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
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

    // line 4
    public function block_title($context, array $blocks = array())
    {
        echo "Add Comment";
    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        // line 7
        echo "    <h1>Add comment for blog post \"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["comment"]) ? $context["comment"] : $this->getContext($context, "comment")), "blog", array()), "title", array()), "html", null, true);
        echo "\"</h1>
    ";
        // line 8
        $this->env->loadTemplate("TreewalkerBlogBundle:Comment:form.html.twig")->display(array_merge($context, array("form" => (isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")))));
    }

    public function getTemplateName()
    {
        return "TreewalkerBlogBundle:Comment:create.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 29,  34 => 5,  118 => 43,  100 => 33,  65 => 17,  167 => 37,  152 => 30,  148 => 28,  146 => 27,  97 => 47,  90 => 45,  84 => 16,  215 => 61,  212 => 60,  205 => 53,  202 => 52,  197 => 47,  192 => 48,  190 => 47,  184 => 45,  178 => 41,  172 => 41,  165 => 34,  160 => 33,  153 => 31,  104 => 9,  76 => 50,  77 => 21,  70 => 19,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 66,  214 => 69,  177 => 46,  169 => 60,  140 => 24,  132 => 51,  128 => 49,  107 => 37,  61 => 17,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 34,  143 => 28,  135 => 26,  119 => 42,  102 => 32,  71 => 19,  67 => 41,  63 => 19,  59 => 14,  87 => 25,  94 => 30,  89 => 34,  85 => 25,  75 => 21,  68 => 14,  56 => 9,  28 => 3,  21 => 2,  38 => 7,  26 => 6,  24 => 1,  31 => 4,  25 => 4,  93 => 28,  88 => 31,  78 => 21,  46 => 7,  44 => 7,  27 => 4,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 67,  156 => 32,  151 => 63,  142 => 59,  138 => 54,  136 => 23,  121 => 44,  117 => 14,  105 => 40,  91 => 63,  62 => 23,  49 => 9,  19 => 1,  79 => 18,  72 => 16,  69 => 22,  47 => 9,  40 => 8,  37 => 4,  22 => 2,  246 => 90,  157 => 56,  145 => 29,  139 => 27,  131 => 20,  123 => 47,  120 => 41,  115 => 38,  111 => 12,  108 => 36,  101 => 38,  98 => 67,  96 => 36,  83 => 25,  74 => 45,  66 => 20,  55 => 14,  52 => 10,  50 => 15,  43 => 8,  41 => 9,  35 => 6,  32 => 3,  29 => 4,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 46,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 57,  154 => 58,  149 => 51,  147 => 58,  144 => 49,  141 => 48,  133 => 51,  130 => 24,  125 => 21,  122 => 42,  116 => 41,  112 => 39,  109 => 18,  106 => 36,  103 => 8,  99 => 37,  95 => 46,  92 => 21,  86 => 28,  82 => 24,  80 => 52,  73 => 19,  64 => 14,  60 => 17,  57 => 20,  54 => 14,  51 => 13,  48 => 11,  45 => 11,  42 => 8,  39 => 6,  36 => 5,  33 => 8,  30 => 7,);
    }
}
