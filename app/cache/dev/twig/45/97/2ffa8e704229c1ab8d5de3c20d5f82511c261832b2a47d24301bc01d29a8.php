<?php

/* WebProfilerBundle:Profiler:admin.html.twig */
class __TwigTemplate_45972ffa8e704229c1ab8d5de3c20d5f82511c261832b2a47d24301bc01d29a8 extends Twig_Template
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
        echo "<div class=\"search import clearfix\" id=\"adminBar\">
    <h3>
        <img style=\"margin: 0 5px 0 0; vertical-align: middle; height: 16px\" width=\"16\" height=\"16\" alt=\"Import\" src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAYAAABzenr0AAADo0lEQVR42u2XS0hUURjHD5njA1oYbXQ2MqCmIu2iEEISUREEEURxFB8ovt+DEsLgaxBRQQeUxnQ0ZRYSQasgiDaFqxAy2jUtCjdCoEjFwHj6/+F+dbvN6PQAN37wm++c7/z/35x7uPcOo7TW58rFBs59A7GGQ51XBAIBlZmZuYOhE1zm/A/4PxvY3NwMO53OYEJCgp+nccqXXQc94D54boAxalyLNayNtra2NJmbmzvOyMj4cRqoKYK4AsZzc3Nft7e3f5qZmTnCpk8Ix6xxjRpDGzmkUU5Ozuu2trZP09PTR+vr6ycbGxtaWFtbC9fU1AQTExPdmNNzLSUlZXt4ePhANNGghlp6lDWkkcvlOsCX6LNYXV0N8BTS0tK2cDJfWIsFaumhV0lIIxzXl5WVFX0aPp8vhDwJbMnJyc6JiYkji8YP7oI4YowfmDX00KskOHG73UfLy8vahB/cBXFSW1pa2kPOA7RdqqysfGtaCyOXA2VGgmvUiJ5e9lD8qKioeOv1ejVZXFwMI5eLEWOFWgh5Etg4J0lJSTdwYiHxLSwseFi3Yg5qRE8veyh+TE1Nhebn5zWZnZ31mE2okTxmM6WlpS7xeDyeQ2Qb61bMQQ214mMPVVxc7MJuNBkfHz9EtplNmEcET4JPfL29va+i6azR19f3UnzV1dUrqqqqyocT0KSzs/OV1YB6ROrr67fF19TU9DSazhp1dXXPxdfS0vJQNTY2+sfGxjSpra19YTWgHhHs/pn40OhRNJ0lLuON+kF8ra2tY9yAe3R0VBMc6wfr84n6b1BDrfiam5snImgczObAq7ylv7//q/hGRkbuqMHBwTt4Q2nS3d39jSKzCfXfoKarq+ur+NhD1owLcNrt9h3OTXGrqKgoKJ6hoaFD5DhuIA43xiGyJoWFhUGKxYXaL3CNGtH39PR8Zg9jzREfH+8vKCgI4krDRu0GcGVnZ78ZGBg4ER/Wf+4OVzOMRhrwFE6ysrLe0EQzaopII65RI3p478lVp6am7uDmPJY11F44HI7dsrKyfc5Nnj1km5Lo6Oiw4cdnD1kLJSUl++np6btsQjhmzayB5x29uGp3fn5+EPMw66eBX8b3yHZlDdyRdtzN75F1LED7kR6gMA7E6HsMrqpogbv5KngM9Bk8MbTKwAYmQSiCdhd4wW0VazQ0NNwEXrALNDHGS+A2UFHIA3smj/rX4JvrT7GBSRDi/J8Db8e/JY/5jLj4Y3KxgfPfwHc53iL+IQDMOgAAAABJRU5ErkJggg==\">
        Admin
    </h3>

    <form action=\"";
        // line 7
        echo $this->env->getExtension('routing')->getPath("_profiler_import");
        echo "\" method=\"post\" enctype=\"multipart/form-data\">
        ";
        // line 8
        if ((!twig_test_empty((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token"))))) {
            // line 9
            echo "            <div style=\"margin-bottom: 10px\">
                &#187;&#160;<a href=\"";
            // line 10
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_profiler_purge", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))), "html", null, true);
            echo "\">Purge</a>
            </div>
            <div style=\"margin-bottom: 10px\">
                &#187;&#160;<a href=\"";
            // line 13
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_profiler_export", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))), "html", null, true);
            echo "\">Export</a>
            </div>
        ";
        }
        // line 16
        echo "        &#187;&#160;<label for=\"file\">Import</label><br>
        <input type=\"file\" name=\"file\" id=\"file\"><br>
        <button type=\"submit\" class=\"sf-button\">
            <span class=\"border-l\">
                <span class=\"border-r\">
                    <span class=\"btn-bg\">UPLOAD</span>
                </span>
            </span>
        </button>
        <div class=\"clear-fix\"></div>
    </form>
</div>
";
    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:admin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  277 => 34,  265 => 25,  259 => 22,  255 => 21,  284 => 43,  266 => 32,  251 => 19,  274 => 37,  270 => 33,  290 => 54,  250 => 18,  421 => 128,  416 => 125,  412 => 124,  406 => 121,  401 => 120,  395 => 118,  392 => 117,  386 => 115,  383 => 114,  377 => 112,  359 => 106,  356 => 105,  350 => 103,  347 => 102,  338 => 99,  335 => 98,  329 => 96,  323 => 94,  317 => 93,  306 => 90,  303 => 89,  300 => 88,  291 => 85,  282 => 42,  276 => 80,  267 => 26,  261 => 75,  237 => 67,  231 => 65,  226 => 63,  211 => 58,  181 => 48,  175 => 46,  127 => 30,  110 => 24,  20 => 1,  124 => 33,  58 => 18,  23 => 7,  53 => 15,  81 => 17,  34 => 9,  118 => 27,  100 => 35,  65 => 11,  167 => 37,  152 => 30,  148 => 37,  146 => 27,  97 => 25,  90 => 23,  84 => 27,  215 => 61,  212 => 60,  205 => 56,  202 => 52,  197 => 47,  192 => 48,  190 => 51,  184 => 49,  178 => 41,  172 => 45,  165 => 34,  160 => 33,  153 => 31,  104 => 9,  76 => 27,  77 => 20,  70 => 24,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 111,  368 => 109,  365 => 108,  362 => 110,  360 => 109,  355 => 106,  341 => 100,  337 => 103,  322 => 101,  314 => 92,  312 => 98,  309 => 91,  305 => 95,  298 => 91,  294 => 51,  285 => 83,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 74,  252 => 72,  247 => 78,  241 => 77,  229 => 64,  220 => 61,  214 => 59,  177 => 46,  169 => 60,  140 => 24,  132 => 51,  128 => 49,  107 => 37,  61 => 26,  273 => 79,  269 => 94,  254 => 92,  243 => 69,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 34,  143 => 28,  135 => 26,  119 => 42,  102 => 33,  71 => 23,  67 => 22,  63 => 21,  59 => 11,  87 => 32,  94 => 24,  89 => 30,  85 => 23,  75 => 24,  68 => 12,  56 => 16,  28 => 3,  21 => 2,  38 => 12,  26 => 6,  24 => 2,  31 => 8,  25 => 5,  93 => 33,  88 => 34,  78 => 18,  46 => 13,  44 => 11,  27 => 7,  201 => 92,  196 => 53,  183 => 82,  171 => 61,  166 => 43,  163 => 42,  158 => 67,  156 => 32,  151 => 63,  142 => 59,  138 => 54,  136 => 33,  121 => 28,  117 => 32,  105 => 37,  91 => 35,  62 => 24,  49 => 17,  19 => 1,  79 => 29,  72 => 16,  69 => 28,  47 => 15,  40 => 12,  37 => 7,  22 => 2,  246 => 70,  157 => 40,  145 => 36,  139 => 34,  131 => 35,  123 => 47,  120 => 41,  115 => 31,  111 => 12,  108 => 28,  101 => 38,  98 => 34,  96 => 30,  83 => 31,  74 => 45,  66 => 25,  55 => 38,  52 => 11,  50 => 18,  43 => 13,  41 => 9,  35 => 6,  32 => 4,  29 => 3,  209 => 82,  203 => 78,  199 => 54,  193 => 73,  189 => 71,  187 => 46,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 57,  154 => 39,  149 => 51,  147 => 58,  144 => 49,  141 => 48,  133 => 51,  130 => 31,  125 => 21,  122 => 42,  116 => 41,  112 => 25,  109 => 18,  106 => 22,  103 => 36,  99 => 39,  95 => 34,  92 => 28,  86 => 19,  82 => 21,  80 => 46,  73 => 35,  64 => 21,  60 => 12,  57 => 20,  54 => 19,  51 => 37,  48 => 16,  45 => 10,  42 => 13,  39 => 10,  36 => 10,  33 => 9,  30 => 5,);
    }
}
