<?php

/* TreewalkerUserBundle:Account:manage_users.html.twig */
class __TwigTemplate_5edbae660749188933f4f7853649470a641c50b869c964714c25a1742a0ce9c4 extends Twig_Template
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

    // line 2
    public function block_content($context, array $blocks = array())
    {
        // line 3
        echo "    <div style=\"float:left; width:100%; \">
        <span class=\"btn\" style=\"float:right; margin-right:100px\">
            <a href=\"";
        // line 5
        echo $this->env->getExtension('routing')->getPath("treewalker_admin_user_add");
        echo "\">Add User</a>
        </span>
        
    </div>
    ";
        // line 9
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 10
            echo "        <div class=\"row\">
            <span class=\"column\">
                <a href=\"";
            // line 12
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("treewalker_admin_user_edit", array("id" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id", array()))), "html", null, true);
            echo "\" >
                    ";
            // line 13
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "firstname", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "lastname", array()), "html", null, true);
            echo "
                </a>                
            </span>
            <span class=\"column\">

                 ";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "firstname", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "lastname", array()), "html", null, true);
            echo "
            </span>
            <span class=\"column\">
                <a href=\"";
            // line 21
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("treewalker_admin_user_edit", array("id" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id", array()))), "html", null, true);
            echo "\" >Edit</a>


            </span>
            <span class=\"column\">
                <a href=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("treewalker_admin_user_delete", array("id" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id", array()))), "html", null, true);
            echo "\" >
                    Delete
                </a>
            </span>
        </div>
        
    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 33
            echo "        There are no Users !
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "        
    ";
        // line 36
        if (((twig_length_filter($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination"))) > 0) && ($this->getAttribute((isset($context["paginator"]) ? $context["paginator"] : $this->getContext($context, "paginator")), "getTotalPages", array(), "method") > 1))) {
            // line 37
            echo "        ";
            echo twig_include($this->env, $context, "TreewalkerPaginationBundle:Default:paginator_navigation.html.twig", array("paginator" => (isset($context["paginator"]) ? $context["paginator"] : $this->getContext($context, "paginator"))));
            echo "
    ";
        }
    }

    public function getTemplateName()
    {
        return "TreewalkerUserBundle:Account:manage_users.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 19,  23 => 1,  53 => 5,  81 => 26,  34 => 5,  118 => 43,  100 => 35,  65 => 18,  167 => 37,  152 => 30,  148 => 28,  146 => 27,  97 => 25,  90 => 23,  84 => 16,  215 => 61,  212 => 60,  205 => 53,  202 => 52,  197 => 47,  192 => 48,  190 => 47,  184 => 45,  178 => 41,  172 => 41,  165 => 34,  160 => 33,  153 => 31,  104 => 9,  76 => 50,  77 => 21,  70 => 9,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 66,  214 => 69,  177 => 46,  169 => 60,  140 => 24,  132 => 51,  128 => 49,  107 => 37,  61 => 19,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 34,  143 => 28,  135 => 26,  119 => 42,  102 => 32,  71 => 30,  67 => 41,  63 => 19,  59 => 6,  87 => 31,  94 => 37,  89 => 34,  85 => 25,  75 => 25,  68 => 23,  56 => 9,  28 => 2,  21 => 2,  38 => 6,  26 => 2,  24 => 1,  31 => 3,  25 => 4,  93 => 33,  88 => 34,  78 => 34,  46 => 9,  44 => 11,  27 => 4,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 67,  156 => 32,  151 => 63,  142 => 59,  138 => 54,  136 => 23,  121 => 44,  117 => 14,  105 => 37,  91 => 63,  62 => 20,  49 => 17,  19 => 1,  79 => 18,  72 => 16,  69 => 22,  47 => 10,  40 => 7,  37 => 4,  22 => 2,  246 => 90,  157 => 56,  145 => 29,  139 => 27,  131 => 20,  123 => 47,  120 => 41,  115 => 38,  111 => 12,  108 => 36,  101 => 38,  98 => 67,  96 => 36,  83 => 25,  74 => 45,  66 => 20,  55 => 13,  52 => 12,  50 => 15,  43 => 8,  41 => 7,  35 => 5,  32 => 3,  29 => 5,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 46,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 57,  154 => 58,  149 => 51,  147 => 58,  144 => 49,  141 => 48,  133 => 51,  130 => 24,  125 => 21,  122 => 42,  116 => 41,  112 => 39,  109 => 18,  106 => 36,  103 => 36,  99 => 39,  95 => 46,  92 => 21,  86 => 28,  82 => 24,  80 => 52,  73 => 21,  64 => 10,  60 => 12,  57 => 16,  54 => 15,  51 => 12,  48 => 11,  45 => 10,  42 => 9,  39 => 7,  36 => 5,  33 => 4,  30 => 7,);
    }
}
