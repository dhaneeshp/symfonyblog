<?php

/* TreewalkerBlogBundle:Blog:sidebar.html.twig */
class __TwigTemplate_dfb0b680a7ba6d699b66be805ae9c4803bb13351895f5c92e6651081eaff42c6 extends Twig_Template
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
        echo "<section class=\"section\">
    <header>
        <h3>Tag Cloud</h3>
    </header>
    <p class=\"tags\">
        ";
        // line 6
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tags"]) ? $context["tags"] : $this->getContext($context, "tags")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["tag"] => $context["weight"]) {
            // line 7
            echo "            <span class=\"weight-";
            echo twig_escape_filter($this->env, (isset($context["weight"]) ? $context["weight"] : $this->getContext($context, "weight")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, (isset($context["tag"]) ? $context["tag"] : $this->getContext($context, "tag")), "html", null, true);
            echo "</span>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 9
            echo "            <p>There are no tags</p>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['tag'], $context['weight'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 11
        echo "    </p>
</section>";
    }

    public function getTemplateName()
    {
        return "TreewalkerBlogBundle:Blog:sidebar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 11,  26 => 6,  19 => 1,  220 => 66,  215 => 61,  212 => 60,  205 => 53,  202 => 52,  197 => 47,  192 => 48,  190 => 47,  187 => 46,  184 => 45,  178 => 41,  172 => 40,  165 => 34,  160 => 33,  156 => 32,  153 => 31,  145 => 29,  143 => 28,  139 => 27,  135 => 26,  130 => 24,  125 => 21,  122 => 20,  117 => 14,  111 => 12,  107 => 10,  104 => 9,  98 => 67,  96 => 66,  91 => 63,  89 => 60,  82 => 55,  80 => 52,  76 => 50,  74 => 45,  67 => 41,  63 => 40,  59 => 38,  57 => 20,  50 => 15,  45 => 9,  41 => 9,  29 => 1,  36 => 5,  100 => 26,  97 => 25,  90 => 23,  81 => 19,  75 => 18,  71 => 17,  64 => 13,  60 => 12,  55 => 10,  47 => 14,  40 => 5,  37 => 7,  31 => 7,  28 => 3,);
    }
}
