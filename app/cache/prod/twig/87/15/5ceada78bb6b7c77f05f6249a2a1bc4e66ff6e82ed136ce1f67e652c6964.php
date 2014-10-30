<?php

/* FMElfinderBundle:Elfinder/compressed:simple.html.twig */
class __TwigTemplate_87155ceada78bb6b7c77f05f6249a2a1bc4e66ff6e82ed136ce1f67e652c6964 extends Twig_Template
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
        echo "<!DOCTYPE html>
<html>
<head>
        ";
        // line 4
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "6a8b946_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_6a8b946_0") : $this->env->getExtension('assets')->getAssetUrl("assetic/css/compiled/fmelfinder/main_part_1_elfinder.min_1.css");
            // line 6
            echo "            <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\" />
        ";
            // asset "6a8b946_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_6a8b946_1") : $this->env->getExtension('assets')->getAssetUrl("assetic/css/compiled/fmelfinder/main_part_1_jquery-ui-1.8.21.custom_2.css");
            echo "            <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\" />
        ";
            // asset "6a8b946_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_6a8b946_2") : $this->env->getExtension('assets')->getAssetUrl("assetic/css/compiled/fmelfinder/main_part_1_theme_3.css");
            echo "            <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\" />
        ";
        } else {
            // asset "6a8b946"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_6a8b946") : $this->env->getExtension('assets')->getAssetUrl("assetic/css/compiled/fmelfinder/main.css");
            echo "            <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\" />
        ";
        }
        unset($context["asset_url"]);
        // line 8
        echo "</head>
<body>
        ";
        // line 10
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "1dadbbb_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_1dadbbb_0") : $this->env->getExtension('assets')->getAssetUrl("bundles/fmelfinder/js/main_jquery-1.8.0.min_1.js");
            // line 16
            echo "            <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
        ";
            // asset "1dadbbb_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_1dadbbb_1") : $this->env->getExtension('assets')->getAssetUrl("bundles/fmelfinder/js/main_jquery-ui-1.8.23.custom.min_2.js");
            echo "            <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
        ";
            // asset "1dadbbb_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_1dadbbb_2") : $this->env->getExtension('assets')->getAssetUrl("bundles/fmelfinder/js/main_elfinder.min_3.js");
            echo "            <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
        ";
            // asset "1dadbbb_3"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_1dadbbb_3") : $this->env->getExtension('assets')->getAssetUrl("bundles/fmelfinder/js/main_part_4_elfinder.LANG_1.js");
            echo "            <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
        ";
            // asset "1dadbbb_4"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_1dadbbb_4") : $this->env->getExtension('assets')->getAssetUrl("bundles/fmelfinder/js/main_part_4_elfinder.ar_2.js");
            echo "            <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
        ";
            // asset "1dadbbb_5"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_1dadbbb_5") : $this->env->getExtension('assets')->getAssetUrl("bundles/fmelfinder/js/main_part_4_elfinder.bg_3.js");
            echo "            <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
        ";
            // asset "1dadbbb_6"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_1dadbbb_6") : $this->env->getExtension('assets')->getAssetUrl("bundles/fmelfinder/js/main_part_4_elfinder.ca_4.js");
            echo "            <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
        ";
            // asset "1dadbbb_7"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_1dadbbb_7") : $this->env->getExtension('assets')->getAssetUrl("bundles/fmelfinder/js/main_part_4_elfinder.cs_5.js");
            echo "            <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
        ";
            // asset "1dadbbb_8"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_1dadbbb_8") : $this->env->getExtension('assets')->getAssetUrl("bundles/fmelfinder/js/main_part_4_elfinder.da_6.js");
            echo "            <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
        ";
            // asset "1dadbbb_9"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_1dadbbb_9") : $this->env->getExtension('assets')->getAssetUrl("bundles/fmelfinder/js/main_part_4_elfinder.de_7.js");
            echo "            <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
        ";
            // asset "1dadbbb_10"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_1dadbbb_10") : $this->env->getExtension('assets')->getAssetUrl("bundles/fmelfinder/js/main_part_4_elfinder.el_8.js");
            echo "            <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
        ";
            // asset "1dadbbb_11"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_1dadbbb_11") : $this->env->getExtension('assets')->getAssetUrl("bundles/fmelfinder/js/main_part_4_elfinder.es_9.js");
            echo "            <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
        ";
            // asset "1dadbbb_12"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_1dadbbb_12") : $this->env->getExtension('assets')->getAssetUrl("bundles/fmelfinder/js/main_part_4_elfinder.fa_10.js");
            echo "            <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
        ";
            // asset "1dadbbb_13"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_1dadbbb_13") : $this->env->getExtension('assets')->getAssetUrl("bundles/fmelfinder/js/main_part_4_elfinder.fr_11.js");
            echo "            <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
        ";
            // asset "1dadbbb_14"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_1dadbbb_14") : $this->env->getExtension('assets')->getAssetUrl("bundles/fmelfinder/js/main_part_4_elfinder.hu_12.js");
            echo "            <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
        ";
            // asset "1dadbbb_15"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_1dadbbb_15") : $this->env->getExtension('assets')->getAssetUrl("bundles/fmelfinder/js/main_part_4_elfinder.it_13.js");
            echo "            <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
        ";
            // asset "1dadbbb_16"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_1dadbbb_16") : $this->env->getExtension('assets')->getAssetUrl("bundles/fmelfinder/js/main_part_4_elfinder.jp_14.js");
            echo "            <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
        ";
            // asset "1dadbbb_17"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_1dadbbb_17") : $this->env->getExtension('assets')->getAssetUrl("bundles/fmelfinder/js/main_part_4_elfinder.ko_15.js");
            echo "            <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
        ";
            // asset "1dadbbb_18"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_1dadbbb_18") : $this->env->getExtension('assets')->getAssetUrl("bundles/fmelfinder/js/main_part_4_elfinder.nl_16.js");
            echo "            <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
        ";
            // asset "1dadbbb_19"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_1dadbbb_19") : $this->env->getExtension('assets')->getAssetUrl("bundles/fmelfinder/js/main_part_4_elfinder.no_17.js");
            echo "            <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
        ";
            // asset "1dadbbb_20"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_1dadbbb_20") : $this->env->getExtension('assets')->getAssetUrl("bundles/fmelfinder/js/main_part_4_elfinder.pl_18.js");
            echo "            <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
        ";
            // asset "1dadbbb_21"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_1dadbbb_21") : $this->env->getExtension('assets')->getAssetUrl("bundles/fmelfinder/js/main_part_4_elfinder.pt_BR_19.js");
            echo "            <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
        ";
            // asset "1dadbbb_22"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_1dadbbb_22") : $this->env->getExtension('assets')->getAssetUrl("bundles/fmelfinder/js/main_part_4_elfinder.ru_20.js");
            echo "            <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
        ";
            // asset "1dadbbb_23"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_1dadbbb_23") : $this->env->getExtension('assets')->getAssetUrl("bundles/fmelfinder/js/main_part_4_elfinder.sk_21.js");
            echo "            <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
        ";
            // asset "1dadbbb_24"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_1dadbbb_24") : $this->env->getExtension('assets')->getAssetUrl("bundles/fmelfinder/js/main_part_4_elfinder.sl_22.js");
            echo "            <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
        ";
            // asset "1dadbbb_25"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_1dadbbb_25") : $this->env->getExtension('assets')->getAssetUrl("bundles/fmelfinder/js/main_part_4_elfinder.sv_23.js");
            echo "            <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
        ";
            // asset "1dadbbb_26"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_1dadbbb_26") : $this->env->getExtension('assets')->getAssetUrl("bundles/fmelfinder/js/main_part_4_elfinder.tr_24.js");
            echo "            <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
        ";
            // asset "1dadbbb_27"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_1dadbbb_27") : $this->env->getExtension('assets')->getAssetUrl("bundles/fmelfinder/js/main_part_4_elfinder.vi_25.js");
            echo "            <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
        ";
            // asset "1dadbbb_28"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_1dadbbb_28") : $this->env->getExtension('assets')->getAssetUrl("bundles/fmelfinder/js/main_part_4_elfinder.zh_CN_26.js");
            echo "            <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
        ";
            // asset "1dadbbb_29"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_1dadbbb_29") : $this->env->getExtension('assets')->getAssetUrl("bundles/fmelfinder/js/main_part_4_elfinder.zh_TW_27.js");
            echo "            <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
        ";
        } else {
            // asset "1dadbbb"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_1dadbbb") : $this->env->getExtension('assets')->getAssetUrl("bundles/fmelfinder/js/main.js");
            echo "            <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
        ";
        }
        unset($context["asset_url"]);
        // line 18
        echo "<script type=\"text/javascript\" charset=\"utf-8\">
    \$().ready(function() {
        var \$f = \$('#elfinder').elfinder({
            url: '";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ef_connect", array("instance" => (isset($context["instance"]) ? $context["instance"] : null))), "html", null, true);
        echo "'
            lang : '";
        // line 22
        echo twig_escape_filter($this->env, (isset($context["locale"]) ? $context["locale"] : null), "html", null, true);
        echo "'
        });

        ";
        // line 25
        if ((isset($context["fullscreen"]) ? $context["fullscreen"] : null)) {
            // line 26
            echo "        var \$window = \$(window);
        \$window.resize(function(){
            var \$win_height = \$window.height();
            if( \$f.height() != \$win_height ){
                \$f.height(\$win_height).resize();
            }
        });
        ";
        }
        // line 34
        echo "    });
</script>
<div id=\"elfinder\"></div>
</body>
</html>
";
    }

    public function getTemplateName()
    {
        return "FMElfinderBundle:Elfinder/compressed:simple.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  277 => 34,  265 => 25,  259 => 22,  255 => 21,  284 => 43,  266 => 32,  251 => 19,  274 => 37,  270 => 33,  290 => 54,  250 => 18,  421 => 128,  416 => 125,  412 => 124,  406 => 121,  401 => 120,  395 => 118,  392 => 117,  386 => 115,  383 => 114,  377 => 112,  359 => 106,  356 => 105,  350 => 103,  347 => 102,  338 => 99,  335 => 98,  329 => 96,  323 => 94,  317 => 93,  306 => 90,  303 => 89,  300 => 88,  291 => 85,  282 => 42,  276 => 80,  267 => 26,  261 => 75,  237 => 67,  231 => 65,  226 => 63,  211 => 58,  181 => 48,  175 => 46,  157 => 40,  127 => 30,  110 => 24,  20 => 1,  124 => 33,  83 => 18,  58 => 10,  23 => 3,  53 => 15,  81 => 17,  34 => 9,  118 => 27,  100 => 35,  65 => 21,  52 => 11,  167 => 37,  152 => 30,  148 => 37,  146 => 27,  120 => 41,  97 => 25,  90 => 23,  84 => 47,  215 => 61,  212 => 60,  205 => 56,  202 => 52,  197 => 47,  192 => 48,  190 => 51,  184 => 49,  178 => 41,  172 => 45,  165 => 34,  160 => 33,  153 => 31,  145 => 36,  139 => 34,  104 => 9,  96 => 25,  76 => 50,  74 => 45,  37 => 10,  77 => 20,  70 => 9,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 111,  368 => 109,  365 => 108,  362 => 110,  360 => 109,  355 => 106,  341 => 100,  337 => 103,  322 => 101,  314 => 92,  312 => 98,  309 => 91,  305 => 95,  298 => 91,  294 => 51,  285 => 83,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 74,  252 => 72,  247 => 78,  241 => 77,  229 => 64,  220 => 61,  214 => 59,  177 => 46,  169 => 60,  140 => 24,  132 => 51,  128 => 49,  111 => 12,  107 => 37,  61 => 26,  273 => 79,  269 => 94,  254 => 92,  246 => 70,  243 => 69,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 34,  143 => 28,  135 => 26,  131 => 35,  119 => 42,  108 => 28,  102 => 32,  71 => 24,  67 => 18,  63 => 17,  59 => 11,  47 => 15,  87 => 31,  55 => 9,  94 => 24,  89 => 20,  85 => 44,  79 => 18,  75 => 36,  72 => 16,  68 => 23,  56 => 9,  50 => 15,  41 => 9,  28 => 6,  29 => 7,  21 => 2,  38 => 10,  26 => 5,  24 => 4,  35 => 6,  31 => 4,  25 => 5,  98 => 39,  93 => 33,  88 => 34,  78 => 34,  46 => 11,  44 => 11,  27 => 6,  22 => 2,  43 => 13,  40 => 12,  201 => 92,  196 => 53,  183 => 82,  171 => 61,  166 => 43,  163 => 42,  158 => 67,  156 => 32,  151 => 63,  142 => 59,  138 => 54,  136 => 33,  123 => 47,  121 => 28,  117 => 32,  115 => 31,  105 => 37,  101 => 38,  91 => 63,  69 => 28,  66 => 20,  62 => 16,  49 => 17,  32 => 7,  19 => 1,  209 => 82,  203 => 78,  199 => 54,  193 => 73,  189 => 71,  187 => 46,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 59,  154 => 39,  149 => 51,  147 => 58,  144 => 49,  141 => 48,  133 => 51,  130 => 31,  125 => 21,  122 => 42,  116 => 41,  112 => 25,  109 => 18,  106 => 22,  103 => 36,  99 => 39,  95 => 46,  92 => 21,  86 => 19,  82 => 21,  80 => 46,  73 => 35,  64 => 17,  60 => 12,  57 => 19,  54 => 8,  51 => 16,  48 => 10,  45 => 10,  42 => 12,  39 => 11,  36 => 9,  33 => 8,  30 => 7,);
    }
}
