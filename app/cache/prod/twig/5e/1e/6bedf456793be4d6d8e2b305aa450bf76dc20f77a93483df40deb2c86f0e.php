<?php

/* TreewalkerBlogBundle:Page:about.html.twig */
class __TwigTemplate_5e1e6bedf456793be4d6d8e2b305aa450bf76dc20f77a93483df40deb2c86f0e extends Twig_Template
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

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "About";
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "    <header>
        <h1>About symblog</h1>
    </header>
    <article>
        <p>Donec imperdiet ante sed diam consequat et dictum erat faucibus. Aliquam sit
        amet vehicula leo. Morbi urna dui, tempor ac posuere et, rutrum at dui.
        Curabitur neque quam, ultricies ut imperdiet id, ornare varius arcu. Ut congue
        urna sit amet tellus malesuada nec elementum risus molestie. Donec gravida
        tellus sed tortor adipiscing fringilla. Donec nulla mauris, mollis egestas
        condimentum laoreet, lacinia vel lorem. Morbi vitae justo sit amet felis
        vehicula commodo a placerat lacus. Mauris at est elit, nec vehicula urna. Duis a
        lacus nisl. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices
        posuere cubilia Curae.</p>
    </article>
";
    }

    public function getTemplateName()
    {
        return "TreewalkerBlogBundle:Page:about.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 29,  34 => 5,  118 => 43,  100 => 33,  65 => 17,  52 => 10,  167 => 37,  152 => 30,  148 => 28,  146 => 27,  120 => 41,  97 => 47,  90 => 45,  84 => 16,  215 => 61,  212 => 60,  205 => 53,  202 => 52,  197 => 47,  192 => 48,  190 => 47,  184 => 45,  178 => 41,  172 => 41,  165 => 34,  160 => 33,  153 => 31,  145 => 29,  139 => 27,  104 => 9,  96 => 36,  76 => 50,  74 => 45,  37 => 2,  77 => 21,  70 => 9,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 66,  214 => 69,  177 => 46,  169 => 60,  140 => 24,  132 => 51,  128 => 49,  111 => 12,  107 => 37,  61 => 17,  273 => 96,  269 => 94,  254 => 92,  246 => 90,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 34,  143 => 28,  135 => 26,  131 => 20,  119 => 42,  108 => 36,  102 => 32,  71 => 19,  67 => 41,  63 => 19,  59 => 14,  47 => 9,  87 => 25,  55 => 14,  94 => 30,  89 => 34,  85 => 25,  79 => 18,  75 => 21,  72 => 16,  68 => 14,  56 => 9,  50 => 15,  41 => 9,  28 => 3,  29 => 3,  21 => 2,  38 => 6,  26 => 2,  24 => 1,  35 => 5,  31 => 4,  25 => 4,  98 => 67,  93 => 28,  88 => 31,  78 => 21,  46 => 7,  44 => 7,  27 => 4,  22 => 2,  43 => 8,  40 => 8,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 67,  156 => 32,  151 => 63,  142 => 59,  138 => 54,  136 => 23,  123 => 47,  121 => 44,  117 => 14,  115 => 38,  105 => 40,  101 => 38,  91 => 63,  69 => 22,  66 => 20,  62 => 23,  49 => 9,  32 => 3,  19 => 1,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 46,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 59,  154 => 58,  149 => 51,  147 => 58,  144 => 49,  141 => 48,  133 => 51,  130 => 24,  125 => 21,  122 => 42,  116 => 41,  112 => 39,  109 => 18,  106 => 33,  103 => 8,  99 => 37,  95 => 46,  92 => 21,  86 => 28,  82 => 24,  80 => 52,  73 => 19,  64 => 14,  60 => 17,  57 => 20,  54 => 6,  51 => 13,  48 => 11,  45 => 4,  42 => 8,  39 => 6,  36 => 5,  33 => 8,  30 => 7,);
    }
}
