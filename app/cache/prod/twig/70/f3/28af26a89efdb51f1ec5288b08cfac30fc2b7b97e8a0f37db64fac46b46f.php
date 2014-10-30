<?php

/* TreewalkerUserBundle:Account:register.html.twig */
class __TwigTemplate_70f328af26a89efdb51f1ec5288b08cfac30fc2b7b97e8a0f37db64fac46b46f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("TreewalkerBlogBundle:Layout:layout.html.twig");

        $this->blocks = array(
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
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "    
                
        ";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_start');
        echo "
           
          <div class=\"form_row\">
              ";
        // line 9
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "firstname", array()), 'row');
        echo "
          </div>
          <div class=\"form_row\">
              ";
        // line 12
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "lastname", array()), 'row');
        echo "
          </div>
            <div class=\"form_row\">
                ";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "city", array()), 'row');
        echo "
            </div>
            <div class=\"form_row\">
                ";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "country", array()), 'row');
        echo "
            </div>
            <div class=\"form_row\">
                ";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "dob", array()), 'row');
        echo "
            </div>
            <div class=\"form_row\">
                ";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "email", array()), 'row');
        echo "
            </div>
            <div class=\"form_row\">
                ";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "username", array()), 'row');
        echo "
            </div>
            <div class=\"form_row\">
                ";
        // line 30
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "password", array()), "password", array()), 'row');
        echo "
            </div>
            <div class=\"form_row\">
                ";
        // line 33
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "password", array()), "confirm", array()), 'row');
        echo "
            </div>
          
          
          
          <input type=\"submit\" value=\"Register\">
        ";
        // line 39
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_end');
        echo "
        
    
    
    
";
    }

    public function getTemplateName()
    {
        return "TreewalkerUserBundle:Account:register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 30,  58 => 19,  23 => 1,  53 => 15,  81 => 26,  34 => 5,  118 => 43,  100 => 35,  65 => 21,  52 => 12,  167 => 37,  152 => 30,  148 => 28,  146 => 27,  120 => 41,  97 => 25,  90 => 23,  84 => 16,  215 => 61,  212 => 60,  205 => 53,  202 => 52,  197 => 47,  192 => 48,  190 => 47,  184 => 45,  178 => 41,  172 => 41,  165 => 34,  160 => 33,  153 => 31,  145 => 29,  139 => 27,  104 => 9,  96 => 36,  76 => 50,  74 => 45,  37 => 4,  77 => 27,  70 => 9,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 66,  214 => 69,  177 => 46,  169 => 60,  140 => 24,  132 => 51,  128 => 49,  111 => 12,  107 => 37,  61 => 19,  273 => 96,  269 => 94,  254 => 92,  246 => 90,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 34,  143 => 28,  135 => 26,  131 => 20,  119 => 42,  108 => 36,  102 => 32,  71 => 24,  67 => 41,  63 => 19,  59 => 18,  47 => 12,  87 => 31,  55 => 13,  94 => 37,  89 => 33,  85 => 25,  79 => 18,  75 => 25,  72 => 16,  68 => 23,  56 => 9,  50 => 15,  41 => 9,  28 => 3,  29 => 5,  21 => 2,  38 => 6,  26 => 2,  24 => 1,  35 => 6,  31 => 4,  25 => 4,  98 => 39,  93 => 33,  88 => 34,  78 => 34,  46 => 9,  44 => 11,  27 => 4,  22 => 2,  43 => 8,  40 => 7,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 67,  156 => 32,  151 => 63,  142 => 59,  138 => 54,  136 => 23,  123 => 47,  121 => 44,  117 => 14,  115 => 38,  105 => 37,  101 => 38,  91 => 63,  69 => 22,  66 => 20,  62 => 20,  49 => 17,  32 => 3,  19 => 1,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 46,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 59,  154 => 58,  149 => 51,  147 => 58,  144 => 49,  141 => 48,  133 => 51,  130 => 24,  125 => 21,  122 => 42,  116 => 41,  112 => 39,  109 => 18,  106 => 33,  103 => 36,  99 => 39,  95 => 46,  92 => 21,  86 => 28,  82 => 24,  80 => 52,  73 => 21,  64 => 10,  60 => 12,  57 => 16,  54 => 15,  51 => 12,  48 => 11,  45 => 10,  42 => 9,  39 => 7,  36 => 5,  33 => 4,  30 => 7,);
    }
}
