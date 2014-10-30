<?php

/* TrsteelCkeditorBundle:Form:ckeditor_widget.html.twig */
class __TwigTemplate_29447191633d83499aaf26ddb813f2787909d0a49030e3b772e779557b5ac00a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'ckeditor_widget' => array($this, 'block_ckeditor_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('ckeditor_widget', $context, $blocks);
    }

    public function block_ckeditor_widget($context, array $blocks = array())
    {
        // line 2
        ob_start();
        // line 3
        echo "    <textarea ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo ">";
        echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : null), "html", null, true);
        echo "</textarea>

    <script type=\"text/javascript\">
    ";
        // line 7
        echo "        var CKEDITOR_BASEPATH = '";
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "basePath", array()) . "/") . (isset($context["base_path"]) ? $context["base_path"] : null)), "js", null, true);
        echo "';
    ";
        // line 9
        echo "    </script>

    <script type=\"text/javascript\" src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(((isset($context["base_path"]) ? $context["base_path"] : null) . "ckeditor.js")), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\">
    ";
        // line 14
        echo "        ";
        $context["plugins"] = "";
        // line 15
        echo "        ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["external_plugins"]) ? $context["external_plugins"] : null));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["name"] => $context["external_plugin"]) {
            // line 16
            echo "            CKEDITOR.plugins.addExternal('";
            echo (isset($context["name"]) ? $context["name"] : null);
            echo "', '";
            echo ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "basePath", array()) . $this->getAttribute((isset($context["external_plugin"]) ? $context["external_plugin"] : null), "path", array()));
            echo "', '";
            echo $this->getAttribute((isset($context["external_plugin"]) ? $context["external_plugin"] : null), "file", array());
            echo "');
            ";
            // line 17
            if ((!$this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "first", array()))) {
                // line 18
                echo "                ";
                $context["plugins"] = ((isset($context["plugins"]) ? $context["plugins"] : null) . ",");
                // line 19
                echo "            ";
            }
            // line 20
            echo "            ";
            $context["plugins"] = ((isset($context["plugins"]) ? $context["plugins"] : null) . (isset($context["name"]) ? $context["name"] : null));
            // line 21
            echo "        ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['name'], $context['external_plugin'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "
        var trsteelConfig = {
            ";
        // line 24
        if ((!(null === (isset($context["width"]) ? $context["width"] : null)))) {
            // line 25
            echo "                width: '";
            echo (isset($context["width"]) ? $context["width"] : null);
            echo "',
            ";
        }
        // line 27
        echo "\t\t\t";
        if ((twig_length_filter($this->env, (isset($context["templates_files"]) ? $context["templates_files"] : null)) > 0)) {
            // line 28
            echo "\t\t\t\ttemplates_files: ['";
            echo twig_join_filter((isset($context["templates_files"]) ? $context["templates_files"] : null), ",");
            echo "'],
            ";
        }
        // line 30
        echo "            ";
        if ((!(null === (isset($context["extra_allowed_content"]) ? $context["extra_allowed_content"] : null)))) {
            // line 31
            echo "                extraAllowedContent: '";
            echo (isset($context["extra_allowed_content"]) ? $context["extra_allowed_content"] : null);
            echo "',
            ";
        }
        // line 33
        echo "            ";
        if ((!(null === (isset($context["height"]) ? $context["height"] : null)))) {
            // line 34
            echo "                height: '";
            echo (isset($context["height"]) ? $context["height"] : null);
            echo "',
            ";
        }
        // line 36
        echo "            ";
        if ((!(null === (isset($context["force_paste_as_plaintext"]) ? $context["force_paste_as_plaintext"] : null)))) {
            // line 37
            echo "                forcePasteAsPlainText: ";
            echo (isset($context["force_paste_as_plaintext"]) ? $context["force_paste_as_plaintext"] : null);
            echo ",
            ";
        }
        // line 39
        echo "            ";
        if ((!(null === (isset($context["language"]) ? $context["language"] : null)))) {
            // line 40
            echo "                language: '";
            echo (isset($context["language"]) ? $context["language"] : null);
            echo "',
            ";
        }
        // line 42
        echo "            ";
        if ((!(null === (isset($context["ui_color"]) ? $context["ui_color"] : null)))) {
            // line 43
            echo "                uiColor: \"";
            echo (isset($context["ui_color"]) ? $context["ui_color"] : null);
            echo "\",
            ";
        }
        // line 45
        echo "            ";
        if (((isset($context["startup_outline_blocks"]) ? $context["startup_outline_blocks"] : null) == true)) {
            // line 46
            echo "                startupOutlineBlocks: ";
            echo (isset($context["startup_outline_blocks"]) ? $context["startup_outline_blocks"] : null);
            echo ",
            ";
        }
        // line 48
        echo "            ";
        if (($this->getAttribute((isset($context["filebrowser_browse_url"]) ? $context["filebrowser_browse_url"] : null), "route", array(), "any", true, true) && (!(null === $this->getAttribute((isset($context["filebrowser_browse_url"]) ? $context["filebrowser_browse_url"] : null), "route", array()))))) {
            // line 49
            echo "                filebrowserBrowseUrl: '";
            echo $this->env->getExtension('routing')->getPath($this->getAttribute((isset($context["filebrowser_browse_url"]) ? $context["filebrowser_browse_url"] : null), "route", array()), $this->getAttribute((isset($context["filebrowser_browse_url"]) ? $context["filebrowser_browse_url"] : null), "route_parameters", array()));
            echo "',
            ";
        } elseif (($this->getAttribute((isset($context["filebrowser_browse_url"]) ? $context["filebrowser_browse_url"] : null), "url", array(), "any", true, true) && (!(null === $this->getAttribute((isset($context["filebrowser_browse_url"]) ? $context["filebrowser_browse_url"] : null), "url", array()))))) {
            // line 51
            echo "                filebrowserBrowseUrl: '";
            echo $this->getAttribute((isset($context["filebrowser_browse_url"]) ? $context["filebrowser_browse_url"] : null), "url", array());
            echo "',
            ";
        }
        // line 53
        echo "            ";
        if (($this->getAttribute((isset($context["filebrowser_upload_url"]) ? $context["filebrowser_upload_url"] : null), "route", array(), "any", true, true) && (!(null === $this->getAttribute((isset($context["filebrowser_upload_url"]) ? $context["filebrowser_upload_url"] : null), "route", array()))))) {
            // line 54
            echo "                filebrowserUploadUrl: '";
            echo $this->env->getExtension('routing')->getPath($this->getAttribute((isset($context["filebrowser_upload_url"]) ? $context["filebrowser_upload_url"] : null), "route", array()), $this->getAttribute((isset($context["filebrowser_upload_url"]) ? $context["filebrowser_upload_url"] : null), "route_parameters", array()));
            echo "',
            ";
        } elseif (($this->getAttribute((isset($context["filebrowser_upload_url"]) ? $context["filebrowser_upload_url"] : null), "url", array(), "any", true, true) && (!(null === $this->getAttribute((isset($context["filebrowser_upload_url"]) ? $context["filebrowser_upload_url"] : null), "url", array()))))) {
            // line 56
            echo "                filebrowserUploadUrl: '";
            echo $this->getAttribute((isset($context["filebrowser_upload_url"]) ? $context["filebrowser_upload_url"] : null), "url", array());
            echo "',
            ";
        }
        // line 58
        echo "            ";
        if (($this->getAttribute((isset($context["filebrowser_image_browse_url"]) ? $context["filebrowser_image_browse_url"] : null), "route", array(), "any", true, true) && (!(null === $this->getAttribute((isset($context["filebrowser_image_browse_url"]) ? $context["filebrowser_image_browse_url"] : null), "route", array()))))) {
            // line 59
            echo "                filebrowserImageBrowseUrl: '";
            echo $this->env->getExtension('routing')->getPath($this->getAttribute((isset($context["filebrowser_image_browse_url"]) ? $context["filebrowser_image_browse_url"] : null), "route", array()), $this->getAttribute((isset($context["filebrowser_image_browse_url"]) ? $context["filebrowser_image_browse_url"] : null), "route_parameters", array()));
            echo "',
            ";
        } elseif (($this->getAttribute((isset($context["filebrowser_image_browse_url"]) ? $context["filebrowser_image_browse_url"] : null), "url", array(), "any", true, true) && (!(null === $this->getAttribute((isset($context["filebrowser_image_browse_url"]) ? $context["filebrowser_image_browse_url"] : null), "url", array()))))) {
            // line 61
            echo "                filebrowserImageBrowseUrl: '";
            echo $this->getAttribute((isset($context["filebrowser_image_browse_url"]) ? $context["filebrowser_image_browse_url"] : null), "url", array());
            echo "',
            ";
        }
        // line 63
        echo "
            ";
        // line 64
        if (($this->getAttribute((isset($context["filebrowser_image_upload_url"]) ? $context["filebrowser_image_upload_url"] : null), "route", array(), "any", true, true) && (!(null === $this->getAttribute((isset($context["filebrowser_image_upload_url"]) ? $context["filebrowser_image_upload_url"] : null), "route", array()))))) {
            // line 65
            echo "                filebrowserImageUploadUrl: '";
            echo $this->env->getExtension('routing')->getPath($this->getAttribute((isset($context["filebrowser_image_upload_url"]) ? $context["filebrowser_image_upload_url"] : null), "route", array()), $this->getAttribute((isset($context["filebrowser_image_upload_url"]) ? $context["filebrowser_image_upload_url"] : null), "route_parameters", array()));
            echo "',
            ";
        } elseif (($this->getAttribute((isset($context["filebrowser_image_upload_url"]) ? $context["filebrowser_image_upload_url"] : null), "url", array(), "any", true, true) && (!(null === $this->getAttribute((isset($context["filebrowser_image_upload_url"]) ? $context["filebrowser_image_upload_url"] : null), "url", array()))))) {
            // line 67
            echo "                filebrowserImageUploadUrl: '";
            echo $this->getAttribute((isset($context["filebrowser_image_upload_url"]) ? $context["filebrowser_image_upload_url"] : null), "url", array());
            echo "',
            ";
        }
        // line 69
        echo "            ";
        if (($this->getAttribute((isset($context["filebrowser_flash_browse_url"]) ? $context["filebrowser_flash_browse_url"] : null), "route", array(), "any", true, true) && (!(null === $this->getAttribute((isset($context["filebrowser_flash_browse_url"]) ? $context["filebrowser_flash_browse_url"] : null), "route", array()))))) {
            // line 70
            echo "                filebrowserFlashBrowseUrl: '";
            echo $this->env->getExtension('routing')->getPath($this->getAttribute((isset($context["filebrowser_flash_browse_url"]) ? $context["filebrowser_flash_browse_url"] : null), "route", array()), $this->getAttribute((isset($context["filebrowser_flash_browse_url"]) ? $context["filebrowser_flash_browse_url"] : null), "route_parameters", array()));
            echo "',
            ";
        } elseif (($this->getAttribute((isset($context["filebrowser_flash_browse_url"]) ? $context["filebrowser_flash_browse_url"] : null), "url", array(), "any", true, true) && (!(null === $this->getAttribute((isset($context["filebrowser_flash_browse_url"]) ? $context["filebrowser_flash_browse_url"] : null), "url", array()))))) {
            // line 72
            echo "                filebrowserFlashBrowseUrl: '";
            echo $this->getAttribute((isset($context["filebrowser_flash_browse_url"]) ? $context["filebrowser_flash_browse_url"] : null), "url", array());
            echo "',
            ";
        }
        // line 74
        echo "            ";
        if (($this->getAttribute((isset($context["filebrowser_flash_upload_url"]) ? $context["filebrowser_flash_upload_url"] : null), "route", array(), "any", true, true) && (!(null === $this->getAttribute((isset($context["filebrowser_flash_upload_url"]) ? $context["filebrowser_flash_upload_url"] : null), "route", array()))))) {
            // line 75
            echo "                filebrowserFlashUploadUrl: '";
            echo $this->env->getExtension('routing')->getPath($this->getAttribute((isset($context["filebrowser_flash_upload_url"]) ? $context["filebrowser_flash_upload_url"] : null), "route", array()), $this->getAttribute((isset($context["filebrowser_flash_upload_url"]) ? $context["filebrowser_flash_upload_url"] : null), "route_parameters", array()));
            echo "',
            ";
        } elseif (($this->getAttribute((isset($context["filebrowser_flash_upload_url"]) ? $context["filebrowser_flash_upload_url"] : null), "url", array(), "any", true, true) && (!(null === $this->getAttribute((isset($context["filebrowser_flash_upload_url"]) ? $context["filebrowser_flash_upload_url"] : null), "url", array()))))) {
            // line 77
            echo "                filebrowserFlashUploadUrl: '";
            echo $this->getAttribute((isset($context["filebrowser_flash_upload_url"]) ? $context["filebrowser_flash_upload_url"] : null), "url", array());
            echo "',
            ";
        }
        // line 79
        echo "            ";
        if ((!(null === (isset($context["skin"]) ? $context["skin"] : null)))) {
            // line 80
            echo "                skin: '";
            echo (isset($context["skin"]) ? $context["skin"] : null);
            echo "',
            ";
        }
        // line 82
        echo "            ";
        if ((twig_length_filter($this->env, (isset($context["format_tags"]) ? $context["format_tags"] : null)) > 0)) {
            // line 83
            echo "                format_tags: '";
            echo twig_join_filter((isset($context["format_tags"]) ? $context["format_tags"] : null), ";");
            echo "',
            ";
        }
        // line 85
        echo "            ";
        if ((!(null === (isset($context["body_class"]) ? $context["body_class"] : null)))) {
            // line 86
            echo "                bodyClass: '";
            echo (isset($context["body_class"]) ? $context["body_class"] : null);
            echo "',
            ";
        }
        // line 88
        echo "            ";
        if ((!(null === (isset($context["contents_css"]) ? $context["contents_css"] : null)))) {
            // line 89
            echo "                ";
            if (twig_test_iterable((isset($context["contents_css"]) ? $context["contents_css"] : null))) {
                // line 90
                echo "                    ";
                $context["contents_css_array"] = array();
                // line 91
                echo "                    ";
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["contents_css"]) ? $context["contents_css"] : null));
                foreach ($context['_seq'] as $context["_key"] => $context["file"]) {
                    // line 92
                    echo "                        ";
                    $context["contents_css_array"] = twig_array_merge((isset($context["contents_css_array"]) ? $context["contents_css_array"] : null), array(0 => $this->env->getExtension('assets')->getAssetUrl((isset($context["file"]) ? $context["file"] : null))));
                    // line 93
                    echo "                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['file'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 94
                echo "                    contentsCss: ";
                echo twig_jsonencode_filter((isset($context["contents_css_array"]) ? $context["contents_css_array"] : null));
                echo ",
                ";
            } else {
                // line 96
                echo "                    contentsCss: '";
                echo $this->env->getExtension('assets')->getAssetUrl((isset($context["contents_css"]) ? $context["contents_css"] : null));
                echo "',
                ";
            }
            // line 98
            echo "            ";
        }
        // line 99
        echo "            ";
        if ((!(null === (isset($context["basic_entities"]) ? $context["basic_entities"] : null)))) {
            // line 100
            echo "                basicEntities: '";
            echo (isset($context["basic_entities"]) ? $context["basic_entities"] : null);
            echo "',
            ";
        }
        // line 102
        echo "            ";
        if ((!(null === (isset($context["entities"]) ? $context["entities"] : null)))) {
            // line 103
            echo "                entities: '";
            echo (isset($context["entities"]) ? $context["entities"] : null);
            echo "',
            ";
        }
        // line 105
        echo "            ";
        if ((!(null === (isset($context["entities_latin"]) ? $context["entities_latin"] : null)))) {
            // line 106
            echo "                entities_latin: '";
            echo (isset($context["entities_latin"]) ? $context["entities_latin"] : null);
            echo "',
            ";
        }
        // line 108
        echo "            ";
        if ((!(null === (isset($context["startup_mode"]) ? $context["startup_mode"] : null)))) {
            // line 109
            echo "                startupMode: '";
            echo (isset($context["startup_mode"]) ? $context["startup_mode"] : null);
            echo "',
            ";
        }
        // line 111
        echo "            ";
        if ((!(null === (isset($context["enter_mode"]) ? $context["enter_mode"] : null)))) {
            // line 112
            echo "                enterMode: CKEDITOR.";
            echo (isset($context["enter_mode"]) ? $context["enter_mode"] : null);
            echo ",
            ";
        }
        // line 114
        echo "            ";
        if ((isset($context["plugins"]) ? $context["plugins"] : null)) {
            // line 115
            echo "                extraPlugins: '";
            echo (isset($context["plugins"]) ? $context["plugins"] : null);
            echo "',
            ";
        }
        // line 117
        echo "            ";
        if ((isset($context["custom_config"]) ? $context["custom_config"] : null)) {
            // line 118
            echo "                customConfig: '";
            echo $this->env->getExtension('assets')->getAssetUrl((isset($context["custom_config"]) ? $context["custom_config"] : null));
            echo "',
            ";
        }
        // line 120
        echo "            toolbar: ";
        echo twig_jsonencode_filter((isset($context["toolbar"]) ? $context["toolbar"] : null));
        echo ",
            baseHref: '";
        // line 121
        echo (((isset($context["base_href"]) ? $context["base_href"] : null)) ? ((isset($context["base_href"]) ? $context["base_href"] : null)) : ((($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "schemeAndHttpHost", array()) . $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "baseUrl", array())) . "/")));
        echo "'
        };

        CKEDITOR.replace(\"";
        // line 124
        echo (isset($context["id"]) ? $context["id"] : null);
        echo "\", trsteelConfig);
        CKEDITOR.instances[\"";
        // line 125
        echo (isset($context["id"]) ? $context["id"] : null);
        echo "\"].rawConfig = trsteelConfig;

    ";
        // line 128
        echo "    </script>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    public function getTemplateName()
    {
        return "TrsteelCkeditorBundle:Form:ckeditor_widget.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  421 => 128,  416 => 125,  412 => 124,  406 => 121,  401 => 120,  395 => 118,  392 => 117,  386 => 115,  383 => 114,  377 => 112,  359 => 106,  356 => 105,  350 => 103,  347 => 102,  338 => 99,  335 => 98,  329 => 96,  323 => 94,  317 => 93,  306 => 90,  303 => 89,  300 => 88,  291 => 85,  282 => 82,  276 => 80,  267 => 77,  261 => 75,  237 => 67,  231 => 65,  226 => 63,  211 => 58,  181 => 48,  175 => 46,  157 => 40,  127 => 30,  110 => 24,  20 => 1,  124 => 33,  83 => 18,  58 => 17,  23 => 3,  53 => 15,  81 => 17,  34 => 5,  118 => 27,  100 => 35,  65 => 21,  52 => 11,  167 => 37,  152 => 30,  148 => 37,  146 => 27,  120 => 41,  97 => 25,  90 => 23,  84 => 22,  215 => 61,  212 => 60,  205 => 56,  202 => 52,  197 => 47,  192 => 48,  190 => 51,  184 => 49,  178 => 41,  172 => 45,  165 => 34,  160 => 33,  153 => 31,  145 => 36,  139 => 34,  104 => 9,  96 => 25,  76 => 50,  74 => 45,  37 => 7,  77 => 20,  70 => 9,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 111,  368 => 109,  365 => 108,  362 => 110,  360 => 109,  355 => 106,  341 => 100,  337 => 103,  322 => 101,  314 => 92,  312 => 98,  309 => 91,  305 => 95,  298 => 91,  294 => 86,  285 => 83,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 74,  252 => 72,  247 => 78,  241 => 77,  229 => 64,  220 => 61,  214 => 59,  177 => 46,  169 => 60,  140 => 24,  132 => 51,  128 => 49,  111 => 12,  107 => 37,  61 => 19,  273 => 79,  269 => 94,  254 => 92,  246 => 70,  243 => 69,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 34,  143 => 28,  135 => 26,  131 => 35,  119 => 42,  108 => 28,  102 => 32,  71 => 24,  67 => 18,  63 => 19,  59 => 18,  47 => 12,  87 => 31,  55 => 14,  94 => 24,  89 => 20,  85 => 25,  79 => 18,  75 => 25,  72 => 16,  68 => 23,  56 => 9,  50 => 15,  41 => 9,  28 => 3,  29 => 6,  21 => 2,  38 => 7,  26 => 2,  24 => 4,  35 => 6,  31 => 4,  25 => 4,  98 => 39,  93 => 33,  88 => 34,  78 => 34,  46 => 11,  44 => 11,  27 => 5,  22 => 2,  43 => 9,  40 => 6,  201 => 92,  196 => 53,  183 => 82,  171 => 61,  166 => 43,  163 => 42,  158 => 67,  156 => 32,  151 => 63,  142 => 59,  138 => 54,  136 => 33,  123 => 47,  121 => 28,  117 => 32,  115 => 31,  105 => 37,  101 => 38,  91 => 63,  69 => 22,  66 => 20,  62 => 20,  49 => 17,  32 => 4,  19 => 1,  209 => 82,  203 => 78,  199 => 54,  193 => 73,  189 => 71,  187 => 46,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 59,  154 => 39,  149 => 51,  147 => 58,  144 => 49,  141 => 48,  133 => 51,  130 => 31,  125 => 21,  122 => 42,  116 => 41,  112 => 25,  109 => 18,  106 => 22,  103 => 36,  99 => 39,  95 => 46,  92 => 21,  86 => 19,  82 => 21,  80 => 52,  73 => 21,  64 => 17,  60 => 12,  57 => 13,  54 => 15,  51 => 14,  48 => 10,  45 => 10,  42 => 9,  39 => 7,  36 => 5,  33 => 4,  30 => 7,);
    }
}
