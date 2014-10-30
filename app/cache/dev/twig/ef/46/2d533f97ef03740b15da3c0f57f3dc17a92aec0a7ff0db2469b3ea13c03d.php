<?php

/* WebProfilerBundle:Profiler:results.html.twig */
class __TwigTemplate_ef462d533f97ef03740b15da3c0f57f3dc17a92aec0a7ff0db2469b3ea13c03d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("@WebProfiler/Profiler/layout.html.twig");

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_panel($context, array $blocks = array())
    {
        // line 4
        echo "    <h2>Search Results</h2>

    ";
        // line 6
        if ((isset($context["tokens"]) ? $context["tokens"] : $this->getContext($context, "tokens"))) {
            // line 7
            echo "        <table>
            <thead>
                <tr>
                    <th scope=\"col\">Token</th>
                    <th scope=\"col\">IP</th>
                    <th scope=\"col\">Method</th>
                    <th scope=\"col\">URL</th>
                    <th scope=\"col\">Time</th>
                </tr>
            </thead>
            <tbody>
                ";
            // line 18
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["tokens"]) ? $context["tokens"] : $this->getContext($context, "tokens")));
            foreach ($context['_seq'] as $context["_key"] => $context["elements"]) {
                // line 19
                echo "                    <tr>
                        <td><a href=\"";
                // line 20
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_profiler", array("token" => $this->getAttribute((isset($context["elements"]) ? $context["elements"] : $this->getContext($context, "elements")), "token", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["elements"]) ? $context["elements"] : $this->getContext($context, "elements")), "token", array()), "html", null, true);
                echo "</a></td>
                        <td>";
                // line 21
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["elements"]) ? $context["elements"] : $this->getContext($context, "elements")), "ip", array()), "html", null, true);
                echo "</td>
                        <td>";
                // line 22
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["elements"]) ? $context["elements"] : $this->getContext($context, "elements")), "method", array()), "html", null, true);
                echo "</td>
                        <td>";
                // line 23
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["elements"]) ? $context["elements"] : $this->getContext($context, "elements")), "url", array()), "html", null, true);
                echo "</td>
                        <td>";
                // line 24
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["elements"]) ? $context["elements"] : $this->getContext($context, "elements")), "time", array()), "r"), "html", null, true);
                echo "</td>
                    </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['elements'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 27
            echo "            </tbody>
        </table>
    ";
        } else {
            // line 30
            echo "        <p>
            <em>The query returned no result.</em>
        </p>
    ";
        }
        // line 34
        echo "
";
    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:results.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  277 => 34,  265 => 25,  259 => 22,  255 => 21,  284 => 43,  266 => 32,  251 => 19,  274 => 37,  270 => 33,  290 => 54,  250 => 18,  421 => 128,  416 => 125,  412 => 124,  406 => 121,  401 => 120,  395 => 118,  392 => 117,  386 => 115,  383 => 114,  377 => 112,  359 => 106,  356 => 105,  350 => 103,  347 => 102,  338 => 99,  335 => 98,  329 => 96,  323 => 94,  317 => 93,  306 => 90,  303 => 89,  300 => 88,  291 => 85,  282 => 42,  276 => 80,  267 => 26,  261 => 75,  237 => 67,  231 => 65,  226 => 63,  211 => 58,  181 => 48,  175 => 46,  127 => 30,  110 => 24,  20 => 1,  124 => 33,  58 => 18,  23 => 7,  53 => 15,  81 => 17,  34 => 9,  118 => 27,  100 => 35,  65 => 11,  167 => 37,  152 => 30,  148 => 37,  146 => 27,  97 => 25,  90 => 23,  84 => 27,  215 => 61,  212 => 60,  205 => 56,  202 => 52,  197 => 47,  192 => 48,  190 => 51,  184 => 49,  178 => 41,  172 => 45,  165 => 34,  160 => 33,  153 => 31,  104 => 9,  76 => 27,  77 => 20,  70 => 24,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 111,  368 => 109,  365 => 108,  362 => 110,  360 => 109,  355 => 106,  341 => 100,  337 => 103,  322 => 101,  314 => 92,  312 => 98,  309 => 91,  305 => 95,  298 => 91,  294 => 51,  285 => 83,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 74,  252 => 72,  247 => 78,  241 => 77,  229 => 64,  220 => 61,  214 => 59,  177 => 46,  169 => 60,  140 => 24,  132 => 51,  128 => 49,  107 => 37,  61 => 26,  273 => 79,  269 => 94,  254 => 92,  243 => 69,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 34,  143 => 28,  135 => 26,  119 => 42,  102 => 33,  71 => 23,  67 => 22,  63 => 21,  59 => 11,  87 => 32,  94 => 24,  89 => 30,  85 => 23,  75 => 24,  68 => 12,  56 => 16,  28 => 3,  21 => 2,  38 => 12,  26 => 6,  24 => 2,  31 => 4,  25 => 5,  93 => 33,  88 => 34,  78 => 18,  46 => 13,  44 => 11,  27 => 6,  201 => 92,  196 => 53,  183 => 82,  171 => 61,  166 => 43,  163 => 42,  158 => 67,  156 => 32,  151 => 63,  142 => 59,  138 => 54,  136 => 33,  121 => 28,  117 => 32,  105 => 37,  91 => 35,  62 => 24,  49 => 17,  19 => 1,  79 => 29,  72 => 16,  69 => 28,  47 => 15,  40 => 12,  37 => 7,  22 => 2,  246 => 70,  157 => 40,  145 => 36,  139 => 34,  131 => 35,  123 => 47,  120 => 41,  115 => 31,  111 => 12,  108 => 28,  101 => 38,  98 => 34,  96 => 30,  83 => 31,  74 => 45,  66 => 25,  55 => 38,  52 => 11,  50 => 18,  43 => 13,  41 => 9,  35 => 6,  32 => 4,  29 => 3,  209 => 82,  203 => 78,  199 => 54,  193 => 73,  189 => 71,  187 => 46,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 57,  154 => 39,  149 => 51,  147 => 58,  144 => 49,  141 => 48,  133 => 51,  130 => 31,  125 => 21,  122 => 42,  116 => 41,  112 => 25,  109 => 18,  106 => 22,  103 => 36,  99 => 39,  95 => 34,  92 => 28,  86 => 19,  82 => 21,  80 => 46,  73 => 35,  64 => 21,  60 => 12,  57 => 20,  54 => 19,  51 => 37,  48 => 10,  45 => 10,  42 => 11,  39 => 10,  36 => 7,  33 => 7,  30 => 5,);
    }
}
