<?php

/* VlabsMediaBundle:Form:vlabs_del_file.html.twig */
class __TwigTemplate_505737b4fd82b0cb4c3e2bbdc6fb30bbef9c6990328e8fbb2f24b494ef9fbe30 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'vlabs_del_file_widget' => array($this, 'block_vlabs_del_file_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('vlabs_del_file_widget', $context, $blocks);
    }

    public function block_vlabs_del_file_widget($context, array $blocks = array())
    {
        // line 2
        echo "    ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
";
    }

    public function getTemplateName()
    {
        return "VlabsMediaBundle:Form:vlabs_del_file.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  421 => 128,  416 => 125,  412 => 124,  406 => 121,  401 => 120,  395 => 118,  392 => 117,  386 => 115,  383 => 114,  377 => 112,  374 => 111,  368 => 109,  365 => 108,  359 => 106,  356 => 105,  350 => 103,  347 => 102,  341 => 100,  338 => 99,  335 => 98,  329 => 96,  323 => 94,  317 => 93,  314 => 92,  309 => 91,  306 => 90,  303 => 89,  300 => 88,  294 => 86,  291 => 85,  285 => 83,  282 => 82,  276 => 80,  273 => 79,  267 => 77,  261 => 75,  258 => 74,  252 => 72,  246 => 70,  243 => 69,  237 => 67,  231 => 65,  229 => 64,  226 => 63,  220 => 61,  214 => 59,  211 => 58,  205 => 56,  199 => 54,  196 => 53,  190 => 51,  184 => 49,  181 => 48,  175 => 46,  172 => 45,  166 => 43,  163 => 42,  157 => 40,  154 => 39,  148 => 37,  145 => 36,  139 => 34,  136 => 33,  130 => 31,  127 => 30,  121 => 28,  118 => 27,  112 => 25,  110 => 24,  106 => 22,  92 => 21,  89 => 20,  86 => 19,  83 => 18,  81 => 17,  72 => 16,  54 => 15,  51 => 14,  46 => 11,  42 => 9,  37 => 7,  26 => 2,  20 => 1,  40 => 6,  36 => 5,  31 => 4,  28 => 3,);
    }
}
