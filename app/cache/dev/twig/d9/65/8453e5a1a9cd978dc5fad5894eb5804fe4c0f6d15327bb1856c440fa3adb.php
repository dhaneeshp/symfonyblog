<?php

/* VlabsMediaBundle:Form:vlabs_file.html.twig */
class __TwigTemplate_d9658453e5a1a9cd978dc5fad5894eb5804fe4c0f6d15327bb1856c440fa3adb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'vlabs_file_widget' => array($this, 'block_vlabs_file_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('vlabs_file_widget', $context, $blocks);
    }

    public function block_vlabs_file_widget($context, array $blocks = array())
    {
        // line 2
        echo "    ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "

    ";
        // line 4
        $context["file"] = $this->env->getExtension('vlabs_media_twig_extension')->getBaseFile($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "name", array()), $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "parent", array()), "vars", array()), "data", array()));
        // line 5
        echo "
    ";
        // line 6
        if ((!(null === (isset($context["file"]) ? $context["file"] : $this->getContext($context, "file"))))) {
            // line 7
            echo "        ";
            if (twig_in_filter($this->getAttribute((isset($context["file"]) ? $context["file"] : $this->getContext($context, "file")), "contentType", array()), array(0 => "image/jpeg", 1 => "image/png", 2 => "image/gif"))) {
                // line 8
                echo "            ";
                echo twig_escape_filter($this->env, $this->env->getExtension('vlabs_media_twig_extension')->displayTemplate($this->env->getExtension('vlabs_media_twig_extension')->filter((isset($context["file"]) ? $context["file"] : $this->getContext($context, "file")), "resize", array("width" => 90, "height" => 90)), "image"), "html", null, true);
                echo "
        ";
            } else {
                // line 10
                echo "            ";
                echo twig_escape_filter($this->env, $this->env->getExtension('vlabs_media_twig_extension')->displayTemplate((isset($context["file"]) ? $context["file"] : $this->getContext($context, "file")), "form_doc"), "html", null, true);
                echo "
        ";
            }
            // line 12
            echo "    ";
        }
        // line 13
        echo "
";
    }

    public function getTemplateName()
    {
        return "VlabsMediaBundle:Form:vlabs_file.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  57 => 13,  48 => 10,  39 => 7,  34 => 5,  32 => 4,  421 => 128,  416 => 125,  412 => 124,  406 => 121,  401 => 120,  395 => 118,  392 => 117,  386 => 115,  383 => 114,  377 => 112,  374 => 111,  368 => 109,  365 => 108,  359 => 106,  356 => 105,  350 => 103,  347 => 102,  341 => 100,  338 => 99,  335 => 98,  329 => 96,  323 => 94,  317 => 93,  314 => 92,  309 => 91,  306 => 90,  303 => 89,  300 => 88,  294 => 86,  291 => 85,  285 => 83,  282 => 82,  276 => 80,  273 => 79,  267 => 77,  261 => 75,  258 => 74,  252 => 72,  246 => 70,  243 => 69,  237 => 67,  231 => 65,  229 => 64,  226 => 63,  220 => 61,  214 => 59,  211 => 58,  205 => 56,  199 => 54,  196 => 53,  190 => 51,  184 => 49,  181 => 48,  175 => 46,  172 => 45,  166 => 43,  163 => 42,  157 => 40,  154 => 39,  148 => 37,  145 => 36,  139 => 34,  136 => 33,  130 => 31,  127 => 30,  121 => 28,  118 => 27,  112 => 25,  110 => 24,  106 => 22,  92 => 21,  89 => 20,  86 => 19,  83 => 18,  81 => 17,  72 => 16,  54 => 12,  51 => 14,  46 => 11,  42 => 8,  37 => 6,  26 => 2,  20 => 1,  40 => 6,  36 => 5,  31 => 4,  28 => 3,);
    }
}
