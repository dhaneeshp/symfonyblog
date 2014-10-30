<?php

/* TreewalkerMediaBundle:Article:add.html.twig */
class __TwigTemplate_a1fd192d5e6c911d4ca92b2c25b1d61ce7e63aad97028c307664d4f7627131af extends Twig_Template
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
        echo "    ";
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
    
        <div class=\"field_row\">
              ";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "image", array()), 'row');
        echo "
          </div>
    ";
        // line 9
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
    
";
    }

    public function getTemplateName()
    {
        return "TreewalkerMediaBundle:Article:add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  124 => 33,  58 => 17,  23 => 3,  53 => 15,  81 => 26,  34 => 4,  118 => 43,  100 => 35,  65 => 21,  167 => 37,  152 => 30,  148 => 28,  146 => 27,  97 => 25,  90 => 23,  84 => 22,  215 => 61,  212 => 60,  205 => 53,  202 => 52,  197 => 47,  192 => 48,  190 => 47,  184 => 45,  178 => 41,  172 => 41,  165 => 34,  160 => 33,  153 => 31,  104 => 9,  76 => 50,  77 => 20,  70 => 9,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 66,  214 => 69,  177 => 46,  169 => 60,  140 => 24,  132 => 51,  128 => 49,  107 => 37,  61 => 19,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 34,  143 => 28,  135 => 26,  119 => 42,  102 => 32,  71 => 24,  67 => 18,  63 => 19,  59 => 18,  87 => 31,  94 => 24,  89 => 33,  85 => 25,  75 => 25,  68 => 23,  56 => 9,  28 => 3,  21 => 2,  38 => 7,  26 => 2,  24 => 1,  31 => 4,  25 => 4,  93 => 33,  88 => 34,  78 => 34,  46 => 10,  44 => 11,  27 => 5,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 67,  156 => 32,  151 => 63,  142 => 59,  138 => 54,  136 => 23,  121 => 44,  117 => 32,  105 => 37,  91 => 63,  62 => 20,  49 => 17,  19 => 1,  79 => 18,  72 => 16,  69 => 22,  47 => 12,  40 => 6,  37 => 9,  22 => 2,  246 => 90,  157 => 56,  145 => 29,  139 => 27,  131 => 35,  123 => 47,  120 => 41,  115 => 31,  111 => 12,  108 => 28,  101 => 38,  98 => 39,  96 => 25,  83 => 30,  74 => 45,  66 => 20,  55 => 14,  52 => 12,  50 => 15,  43 => 9,  41 => 9,  35 => 6,  32 => 8,  29 => 5,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 46,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 57,  154 => 58,  149 => 51,  147 => 58,  144 => 49,  141 => 48,  133 => 51,  130 => 24,  125 => 21,  122 => 42,  116 => 41,  112 => 30,  109 => 18,  106 => 27,  103 => 36,  99 => 39,  95 => 46,  92 => 21,  86 => 28,  82 => 21,  80 => 52,  73 => 21,  64 => 17,  60 => 12,  57 => 16,  54 => 15,  51 => 14,  48 => 11,  45 => 10,  42 => 9,  39 => 7,  36 => 5,  33 => 4,  30 => 7,);
    }
}
