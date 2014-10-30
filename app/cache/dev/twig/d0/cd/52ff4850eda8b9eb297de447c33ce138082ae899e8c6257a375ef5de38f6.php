<?php

/* SensioDistributionBundle:Configurator:form.html.twig */
class __TwigTemplate_d0cd52ff4850eda8b9eb297de447c33ce138082ae899e8c6257a375ef5de38f6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("form_div_layout.html.twig");

        $this->blocks = array(
            'form_rows' => array($this, 'block_form_rows'),
            'form_row' => array($this, 'block_form_row'),
            'form_label' => array($this, 'block_form_label'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "form_div_layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_form_rows($context, array $blocks = array())
    {
        // line 4
        echo "    <div class=\"symfony-form-errors\">
        ";
        // line 5
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
    </div>
    ";
        // line 7
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 8
            echo "        ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["child"]) ? $context["child"] : $this->getContext($context, "child")), 'row');
            echo "
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    // line 12
    public function block_form_row($context, array $blocks = array())
    {
        // line 13
        echo "    <div class=\"symfony-form-row\">
        ";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'label');
        echo "
        <div class=\"symfony-form-field\">
            ";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
            <div class=\"symfony-form-errors\">
                ";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
            </div>
        </div>
    </div>
";
    }

    // line 24
    public function block_form_label($context, array $blocks = array())
    {
        // line 25
        echo "    ";
        if (twig_test_empty((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")))) {
            // line 26
            echo "        ";
            $context["label"] = call_user_func_array($this->env->getFilter('humanize')->getCallable(), array((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name"))));
            // line 27
            echo "    ";
        }
        // line 28
        echo "    <label for=\"";
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "\">
        ";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label"))), "html", null, true);
        echo "
        ";
        // line 30
        if ((isset($context["required"]) ? $context["required"] : $this->getContext($context, "required"))) {
            // line 31
            echo "            <span class=\"symfony-form-required\" title=\"This field is required\">*</span>
        ";
        }
        // line 33
        echo "    </label>
";
    }

    public function getTemplateName()
    {
        return "SensioDistributionBundle:Configurator:form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  357 => 123,  332 => 116,  327 => 114,  324 => 113,  318 => 111,  263 => 95,  174 => 65,  161 => 63,  389 => 160,  378 => 157,  371 => 156,  363 => 126,  358 => 151,  345 => 147,  343 => 146,  340 => 145,  334 => 141,  331 => 140,  328 => 139,  326 => 138,  321 => 112,  307 => 128,  296 => 121,  293 => 120,  281 => 114,  253 => 100,  232 => 88,  222 => 83,  210 => 77,  155 => 47,  672 => 345,  668 => 344,  664 => 342,  651 => 337,  647 => 336,  644 => 335,  640 => 334,  631 => 327,  626 => 325,  613 => 320,  609 => 319,  602 => 317,  593 => 310,  591 => 309,  588 => 308,  585 => 307,  581 => 305,  577 => 303,  569 => 300,  563 => 298,  559 => 296,  557 => 295,  552 => 293,  548 => 292,  545 => 291,  541 => 290,  533 => 284,  531 => 283,  525 => 280,  519 => 278,  515 => 276,  509 => 272,  505 => 270,  499 => 268,  497 => 267,  489 => 262,  483 => 258,  479 => 256,  473 => 254,  471 => 253,  465 => 249,  463 => 248,  459 => 246,  454 => 244,  448 => 240,  438 => 236,  436 => 235,  428 => 230,  418 => 224,  410 => 221,  400 => 214,  397 => 213,  376 => 205,  367 => 155,  353 => 121,  313 => 183,  304 => 181,  297 => 104,  295 => 178,  288 => 101,  810 => 492,  807 => 491,  796 => 489,  792 => 488,  788 => 486,  775 => 485,  749 => 479,  746 => 478,  727 => 476,  710 => 475,  706 => 473,  702 => 472,  698 => 471,  694 => 470,  690 => 469,  686 => 468,  682 => 467,  679 => 466,  677 => 465,  660 => 340,  649 => 462,  634 => 456,  629 => 326,  625 => 453,  622 => 323,  620 => 451,  606 => 318,  601 => 446,  567 => 414,  549 => 411,  532 => 410,  529 => 409,  527 => 281,  522 => 279,  517 => 404,  188 => 102,  170 => 56,  462 => 202,  449 => 198,  446 => 197,  441 => 196,  439 => 195,  431 => 189,  429 => 188,  422 => 226,  415 => 180,  408 => 176,  394 => 168,  380 => 158,  373 => 156,  351 => 120,  348 => 140,  342 => 137,  325 => 129,  320 => 127,  315 => 110,  289 => 113,  286 => 112,  275 => 105,  262 => 98,  256 => 96,  248 => 97,  233 => 87,  216 => 79,  213 => 78,  207 => 75,  200 => 72,  194 => 68,  191 => 67,  185 => 74,  150 => 55,  134 => 54,  113 => 48,  361 => 152,  349 => 323,  344 => 119,  302 => 125,  277 => 34,  265 => 96,  259 => 103,  255 => 93,  284 => 43,  266 => 32,  251 => 19,  274 => 97,  270 => 102,  290 => 119,  250 => 18,  421 => 128,  416 => 125,  412 => 222,  406 => 121,  401 => 172,  395 => 118,  392 => 117,  386 => 159,  383 => 207,  377 => 112,  359 => 106,  356 => 105,  350 => 103,  347 => 191,  338 => 135,  335 => 134,  329 => 188,  323 => 128,  317 => 185,  306 => 107,  303 => 106,  300 => 105,  291 => 102,  282 => 42,  276 => 111,  267 => 101,  261 => 75,  237 => 67,  231 => 83,  226 => 84,  211 => 58,  181 => 65,  175 => 65,  127 => 35,  110 => 38,  20 => 1,  124 => 33,  58 => 14,  23 => 7,  53 => 11,  81 => 24,  34 => 5,  118 => 49,  100 => 39,  65 => 17,  167 => 37,  152 => 46,  148 => 37,  146 => 27,  97 => 25,  90 => 27,  84 => 25,  215 => 61,  212 => 78,  205 => 108,  202 => 77,  197 => 69,  192 => 48,  190 => 76,  184 => 63,  178 => 66,  172 => 64,  165 => 83,  160 => 33,  153 => 77,  104 => 31,  76 => 31,  77 => 20,  70 => 19,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 245,  453 => 199,  444 => 238,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 215,  398 => 129,  393 => 211,  387 => 164,  384 => 121,  381 => 120,  379 => 119,  374 => 111,  368 => 109,  365 => 197,  362 => 110,  360 => 109,  355 => 150,  341 => 118,  337 => 103,  322 => 101,  314 => 92,  312 => 109,  309 => 108,  305 => 95,  298 => 120,  294 => 51,  285 => 175,  283 => 100,  278 => 98,  268 => 85,  264 => 84,  258 => 94,  252 => 72,  247 => 78,  241 => 93,  229 => 87,  220 => 81,  214 => 59,  177 => 46,  169 => 60,  140 => 58,  132 => 51,  128 => 49,  107 => 37,  61 => 15,  273 => 174,  269 => 107,  254 => 92,  243 => 92,  240 => 86,  238 => 85,  235 => 85,  230 => 82,  227 => 86,  224 => 81,  221 => 77,  219 => 76,  217 => 75,  208 => 76,  204 => 72,  179 => 98,  159 => 90,  143 => 51,  135 => 26,  119 => 40,  102 => 30,  71 => 23,  67 => 16,  63 => 18,  59 => 13,  87 => 26,  94 => 21,  89 => 30,  85 => 26,  75 => 22,  68 => 30,  56 => 12,  28 => 3,  21 => 2,  38 => 7,  26 => 6,  24 => 3,  31 => 4,  25 => 5,  93 => 28,  88 => 30,  78 => 24,  46 => 13,  44 => 8,  27 => 3,  201 => 106,  196 => 92,  183 => 82,  171 => 61,  166 => 54,  163 => 53,  158 => 62,  156 => 62,  151 => 59,  142 => 59,  138 => 54,  136 => 48,  121 => 50,  117 => 39,  105 => 25,  91 => 29,  62 => 14,  49 => 12,  19 => 1,  79 => 21,  72 => 18,  69 => 17,  47 => 9,  40 => 11,  37 => 7,  22 => 2,  246 => 96,  157 => 89,  145 => 52,  139 => 49,  131 => 45,  123 => 61,  120 => 31,  115 => 40,  111 => 47,  108 => 33,  101 => 33,  98 => 29,  96 => 37,  83 => 33,  74 => 22,  66 => 25,  55 => 12,  52 => 12,  50 => 10,  43 => 12,  41 => 7,  35 => 4,  32 => 5,  29 => 3,  209 => 82,  203 => 73,  199 => 93,  193 => 73,  189 => 66,  187 => 75,  182 => 87,  176 => 86,  173 => 85,  168 => 61,  164 => 59,  162 => 59,  154 => 60,  149 => 51,  147 => 43,  144 => 42,  141 => 73,  133 => 51,  130 => 46,  125 => 51,  122 => 41,  116 => 57,  112 => 39,  109 => 35,  106 => 51,  103 => 36,  99 => 23,  95 => 39,  92 => 31,  86 => 19,  82 => 26,  80 => 24,  73 => 16,  64 => 11,  60 => 20,  57 => 19,  54 => 19,  51 => 13,  48 => 10,  45 => 8,  42 => 7,  39 => 6,  36 => 5,  33 => 4,  30 => 3,);
    }
}
