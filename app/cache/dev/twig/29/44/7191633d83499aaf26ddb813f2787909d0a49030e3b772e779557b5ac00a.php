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
        echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
        echo "</textarea>

    <script type=\"text/javascript\">
    ";
        // line 7
        echo "        var CKEDITOR_BASEPATH = '";
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "basePath", array()) . "/") . (isset($context["base_path"]) ? $context["base_path"] : $this->getContext($context, "base_path"))), "js", null, true);
        echo "';
    ";
        // line 9
        echo "    </script>

    <script type=\"text/javascript\" src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(((isset($context["base_path"]) ? $context["base_path"] : $this->getContext($context, "base_path")) . "ckeditor.js")), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\">
    ";
        // line 14
        echo "        ";
        $context["plugins"] = "";
        // line 15
        echo "        ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["external_plugins"]) ? $context["external_plugins"] : $this->getContext($context, "external_plugins")));
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
            echo (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name"));
            echo "', '";
            echo ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "basePath", array()) . $this->getAttribute((isset($context["external_plugin"]) ? $context["external_plugin"] : $this->getContext($context, "external_plugin")), "path", array()));
            echo "', '";
            echo $this->getAttribute((isset($context["external_plugin"]) ? $context["external_plugin"] : $this->getContext($context, "external_plugin")), "file", array());
            echo "');
            ";
            // line 17
            if ((!$this->getAttribute((isset($context["loop"]) ? $context["loop"] : $this->getContext($context, "loop")), "first", array()))) {
                // line 18
                echo "                ";
                $context["plugins"] = ((isset($context["plugins"]) ? $context["plugins"] : $this->getContext($context, "plugins")) . ",");
                // line 19
                echo "            ";
            }
            // line 20
            echo "            ";
            $context["plugins"] = ((isset($context["plugins"]) ? $context["plugins"] : $this->getContext($context, "plugins")) . (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")));
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
        if ((!(null === (isset($context["width"]) ? $context["width"] : $this->getContext($context, "width"))))) {
            // line 25
            echo "                width: '";
            echo (isset($context["width"]) ? $context["width"] : $this->getContext($context, "width"));
            echo "',
            ";
        }
        // line 27
        echo "\t\t\t";
        if ((twig_length_filter($this->env, (isset($context["templates_files"]) ? $context["templates_files"] : $this->getContext($context, "templates_files"))) > 0)) {
            // line 28
            echo "\t\t\t\ttemplates_files: ['";
            echo twig_join_filter((isset($context["templates_files"]) ? $context["templates_files"] : $this->getContext($context, "templates_files")), ",");
            echo "'],
            ";
        }
        // line 30
        echo "            ";
        if ((!(null === (isset($context["extra_allowed_content"]) ? $context["extra_allowed_content"] : $this->getContext($context, "extra_allowed_content"))))) {
            // line 31
            echo "                extraAllowedContent: '";
            echo (isset($context["extra_allowed_content"]) ? $context["extra_allowed_content"] : $this->getContext($context, "extra_allowed_content"));
            echo "',
            ";
        }
        // line 33
        echo "            ";
        if ((!(null === (isset($context["height"]) ? $context["height"] : $this->getContext($context, "height"))))) {
            // line 34
            echo "                height: '";
            echo (isset($context["height"]) ? $context["height"] : $this->getContext($context, "height"));
            echo "',
            ";
        }
        // line 36
        echo "            ";
        if ((!(null === (isset($context["force_paste_as_plaintext"]) ? $context["force_paste_as_plaintext"] : $this->getContext($context, "force_paste_as_plaintext"))))) {
            // line 37
            echo "                forcePasteAsPlainText: ";
            echo (isset($context["force_paste_as_plaintext"]) ? $context["force_paste_as_plaintext"] : $this->getContext($context, "force_paste_as_plaintext"));
            echo ",
            ";
        }
        // line 39
        echo "            ";
        if ((!(null === (isset($context["language"]) ? $context["language"] : $this->getContext($context, "language"))))) {
            // line 40
            echo "                language: '";
            echo (isset($context["language"]) ? $context["language"] : $this->getContext($context, "language"));
            echo "',
            ";
        }
        // line 42
        echo "            ";
        if ((!(null === (isset($context["ui_color"]) ? $context["ui_color"] : $this->getContext($context, "ui_color"))))) {
            // line 43
            echo "                uiColor: \"";
            echo (isset($context["ui_color"]) ? $context["ui_color"] : $this->getContext($context, "ui_color"));
            echo "\",
            ";
        }
        // line 45
        echo "            ";
        if (((isset($context["startup_outline_blocks"]) ? $context["startup_outline_blocks"] : $this->getContext($context, "startup_outline_blocks")) == true)) {
            // line 46
            echo "                startupOutlineBlocks: ";
            echo (isset($context["startup_outline_blocks"]) ? $context["startup_outline_blocks"] : $this->getContext($context, "startup_outline_blocks"));
            echo ",
            ";
        }
        // line 48
        echo "            ";
        if (($this->getAttribute((isset($context["filebrowser_browse_url"]) ? $context["filebrowser_browse_url"] : null), "route", array(), "any", true, true) && (!(null === $this->getAttribute((isset($context["filebrowser_browse_url"]) ? $context["filebrowser_browse_url"] : $this->getContext($context, "filebrowser_browse_url")), "route", array()))))) {
            // line 49
            echo "                filebrowserBrowseUrl: '";
            echo $this->env->getExtension('routing')->getPath($this->getAttribute((isset($context["filebrowser_browse_url"]) ? $context["filebrowser_browse_url"] : $this->getContext($context, "filebrowser_browse_url")), "route", array()), $this->getAttribute((isset($context["filebrowser_browse_url"]) ? $context["filebrowser_browse_url"] : $this->getContext($context, "filebrowser_browse_url")), "route_parameters", array()));
            echo "',
            ";
        } elseif (($this->getAttribute((isset($context["filebrowser_browse_url"]) ? $context["filebrowser_browse_url"] : null), "url", array(), "any", true, true) && (!(null === $this->getAttribute((isset($context["filebrowser_browse_url"]) ? $context["filebrowser_browse_url"] : $this->getContext($context, "filebrowser_browse_url")), "url", array()))))) {
            // line 51
            echo "                filebrowserBrowseUrl: '";
            echo $this->getAttribute((isset($context["filebrowser_browse_url"]) ? $context["filebrowser_browse_url"] : $this->getContext($context, "filebrowser_browse_url")), "url", array());
            echo "',
            ";
        }
        // line 53
        echo "            ";
        if (($this->getAttribute((isset($context["filebrowser_upload_url"]) ? $context["filebrowser_upload_url"] : null), "route", array(), "any", true, true) && (!(null === $this->getAttribute((isset($context["filebrowser_upload_url"]) ? $context["filebrowser_upload_url"] : $this->getContext($context, "filebrowser_upload_url")), "route", array()))))) {
            // line 54
            echo "                filebrowserUploadUrl: '";
            echo $this->env->getExtension('routing')->getPath($this->getAttribute((isset($context["filebrowser_upload_url"]) ? $context["filebrowser_upload_url"] : $this->getContext($context, "filebrowser_upload_url")), "route", array()), $this->getAttribute((isset($context["filebrowser_upload_url"]) ? $context["filebrowser_upload_url"] : $this->getContext($context, "filebrowser_upload_url")), "route_parameters", array()));
            echo "',
            ";
        } elseif (($this->getAttribute((isset($context["filebrowser_upload_url"]) ? $context["filebrowser_upload_url"] : null), "url", array(), "any", true, true) && (!(null === $this->getAttribute((isset($context["filebrowser_upload_url"]) ? $context["filebrowser_upload_url"] : $this->getContext($context, "filebrowser_upload_url")), "url", array()))))) {
            // line 56
            echo "                filebrowserUploadUrl: '";
            echo $this->getAttribute((isset($context["filebrowser_upload_url"]) ? $context["filebrowser_upload_url"] : $this->getContext($context, "filebrowser_upload_url")), "url", array());
            echo "',
            ";
        }
        // line 58
        echo "            ";
        if (($this->getAttribute((isset($context["filebrowser_image_browse_url"]) ? $context["filebrowser_image_browse_url"] : null), "route", array(), "any", true, true) && (!(null === $this->getAttribute((isset($context["filebrowser_image_browse_url"]) ? $context["filebrowser_image_browse_url"] : $this->getContext($context, "filebrowser_image_browse_url")), "route", array()))))) {
            // line 59
            echo "                filebrowserImageBrowseUrl: '";
            echo $this->env->getExtension('routing')->getPath($this->getAttribute((isset($context["filebrowser_image_browse_url"]) ? $context["filebrowser_image_browse_url"] : $this->getContext($context, "filebrowser_image_browse_url")), "route", array()), $this->getAttribute((isset($context["filebrowser_image_browse_url"]) ? $context["filebrowser_image_browse_url"] : $this->getContext($context, "filebrowser_image_browse_url")), "route_parameters", array()));
            echo "',
            ";
        } elseif (($this->getAttribute((isset($context["filebrowser_image_browse_url"]) ? $context["filebrowser_image_browse_url"] : null), "url", array(), "any", true, true) && (!(null === $this->getAttribute((isset($context["filebrowser_image_browse_url"]) ? $context["filebrowser_image_browse_url"] : $this->getContext($context, "filebrowser_image_browse_url")), "url", array()))))) {
            // line 61
            echo "                filebrowserImageBrowseUrl: '";
            echo $this->getAttribute((isset($context["filebrowser_image_browse_url"]) ? $context["filebrowser_image_browse_url"] : $this->getContext($context, "filebrowser_image_browse_url")), "url", array());
            echo "',
            ";
        }
        // line 63
        echo "
            ";
        // line 64
        if (($this->getAttribute((isset($context["filebrowser_image_upload_url"]) ? $context["filebrowser_image_upload_url"] : null), "route", array(), "any", true, true) && (!(null === $this->getAttribute((isset($context["filebrowser_image_upload_url"]) ? $context["filebrowser_image_upload_url"] : $this->getContext($context, "filebrowser_image_upload_url")), "route", array()))))) {
            // line 65
            echo "                filebrowserImageUploadUrl: '";
            echo $this->env->getExtension('routing')->getPath($this->getAttribute((isset($context["filebrowser_image_upload_url"]) ? $context["filebrowser_image_upload_url"] : $this->getContext($context, "filebrowser_image_upload_url")), "route", array()), $this->getAttribute((isset($context["filebrowser_image_upload_url"]) ? $context["filebrowser_image_upload_url"] : $this->getContext($context, "filebrowser_image_upload_url")), "route_parameters", array()));
            echo "',
            ";
        } elseif (($this->getAttribute((isset($context["filebrowser_image_upload_url"]) ? $context["filebrowser_image_upload_url"] : null), "url", array(), "any", true, true) && (!(null === $this->getAttribute((isset($context["filebrowser_image_upload_url"]) ? $context["filebrowser_image_upload_url"] : $this->getContext($context, "filebrowser_image_upload_url")), "url", array()))))) {
            // line 67
            echo "                filebrowserImageUploadUrl: '";
            echo $this->getAttribute((isset($context["filebrowser_image_upload_url"]) ? $context["filebrowser_image_upload_url"] : $this->getContext($context, "filebrowser_image_upload_url")), "url", array());
            echo "',
            ";
        }
        // line 69
        echo "            ";
        if (($this->getAttribute((isset($context["filebrowser_flash_browse_url"]) ? $context["filebrowser_flash_browse_url"] : null), "route", array(), "any", true, true) && (!(null === $this->getAttribute((isset($context["filebrowser_flash_browse_url"]) ? $context["filebrowser_flash_browse_url"] : $this->getContext($context, "filebrowser_flash_browse_url")), "route", array()))))) {
            // line 70
            echo "                filebrowserFlashBrowseUrl: '";
            echo $this->env->getExtension('routing')->getPath($this->getAttribute((isset($context["filebrowser_flash_browse_url"]) ? $context["filebrowser_flash_browse_url"] : $this->getContext($context, "filebrowser_flash_browse_url")), "route", array()), $this->getAttribute((isset($context["filebrowser_flash_browse_url"]) ? $context["filebrowser_flash_browse_url"] : $this->getContext($context, "filebrowser_flash_browse_url")), "route_parameters", array()));
            echo "',
            ";
        } elseif (($this->getAttribute((isset($context["filebrowser_flash_browse_url"]) ? $context["filebrowser_flash_browse_url"] : null), "url", array(), "any", true, true) && (!(null === $this->getAttribute((isset($context["filebrowser_flash_browse_url"]) ? $context["filebrowser_flash_browse_url"] : $this->getContext($context, "filebrowser_flash_browse_url")), "url", array()))))) {
            // line 72
            echo "                filebrowserFlashBrowseUrl: '";
            echo $this->getAttribute((isset($context["filebrowser_flash_browse_url"]) ? $context["filebrowser_flash_browse_url"] : $this->getContext($context, "filebrowser_flash_browse_url")), "url", array());
            echo "',
            ";
        }
        // line 74
        echo "            ";
        if (($this->getAttribute((isset($context["filebrowser_flash_upload_url"]) ? $context["filebrowser_flash_upload_url"] : null), "route", array(), "any", true, true) && (!(null === $this->getAttribute((isset($context["filebrowser_flash_upload_url"]) ? $context["filebrowser_flash_upload_url"] : $this->getContext($context, "filebrowser_flash_upload_url")), "route", array()))))) {
            // line 75
            echo "                filebrowserFlashUploadUrl: '";
            echo $this->env->getExtension('routing')->getPath($this->getAttribute((isset($context["filebrowser_flash_upload_url"]) ? $context["filebrowser_flash_upload_url"] : $this->getContext($context, "filebrowser_flash_upload_url")), "route", array()), $this->getAttribute((isset($context["filebrowser_flash_upload_url"]) ? $context["filebrowser_flash_upload_url"] : $this->getContext($context, "filebrowser_flash_upload_url")), "route_parameters", array()));
            echo "',
            ";
        } elseif (($this->getAttribute((isset($context["filebrowser_flash_upload_url"]) ? $context["filebrowser_flash_upload_url"] : null), "url", array(), "any", true, true) && (!(null === $this->getAttribute((isset($context["filebrowser_flash_upload_url"]) ? $context["filebrowser_flash_upload_url"] : $this->getContext($context, "filebrowser_flash_upload_url")), "url", array()))))) {
            // line 77
            echo "                filebrowserFlashUploadUrl: '";
            echo $this->getAttribute((isset($context["filebrowser_flash_upload_url"]) ? $context["filebrowser_flash_upload_url"] : $this->getContext($context, "filebrowser_flash_upload_url")), "url", array());
            echo "',
            ";
        }
        // line 79
        echo "            ";
        if ((!(null === (isset($context["skin"]) ? $context["skin"] : $this->getContext($context, "skin"))))) {
            // line 80
            echo "                skin: '";
            echo (isset($context["skin"]) ? $context["skin"] : $this->getContext($context, "skin"));
            echo "',
            ";
        }
        // line 82
        echo "            ";
        if ((twig_length_filter($this->env, (isset($context["format_tags"]) ? $context["format_tags"] : $this->getContext($context, "format_tags"))) > 0)) {
            // line 83
            echo "                format_tags: '";
            echo twig_join_filter((isset($context["format_tags"]) ? $context["format_tags"] : $this->getContext($context, "format_tags")), ";");
            echo "',
            ";
        }
        // line 85
        echo "            ";
        if ((!(null === (isset($context["body_class"]) ? $context["body_class"] : $this->getContext($context, "body_class"))))) {
            // line 86
            echo "                bodyClass: '";
            echo (isset($context["body_class"]) ? $context["body_class"] : $this->getContext($context, "body_class"));
            echo "',
            ";
        }
        // line 88
        echo "            ";
        if ((!(null === (isset($context["contents_css"]) ? $context["contents_css"] : $this->getContext($context, "contents_css"))))) {
            // line 89
            echo "                ";
            if (twig_test_iterable((isset($context["contents_css"]) ? $context["contents_css"] : $this->getContext($context, "contents_css")))) {
                // line 90
                echo "                    ";
                $context["contents_css_array"] = array();
                // line 91
                echo "                    ";
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["contents_css"]) ? $context["contents_css"] : $this->getContext($context, "contents_css")));
                foreach ($context['_seq'] as $context["_key"] => $context["file"]) {
                    // line 92
                    echo "                        ";
                    $context["contents_css_array"] = twig_array_merge((isset($context["contents_css_array"]) ? $context["contents_css_array"] : $this->getContext($context, "contents_css_array")), array(0 => $this->env->getExtension('assets')->getAssetUrl((isset($context["file"]) ? $context["file"] : $this->getContext($context, "file")))));
                    // line 93
                    echo "                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['file'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 94
                echo "                    contentsCss: ";
                echo twig_jsonencode_filter((isset($context["contents_css_array"]) ? $context["contents_css_array"] : $this->getContext($context, "contents_css_array")));
                echo ",
                ";
            } else {
                // line 96
                echo "                    contentsCss: '";
                echo $this->env->getExtension('assets')->getAssetUrl((isset($context["contents_css"]) ? $context["contents_css"] : $this->getContext($context, "contents_css")));
                echo "',
                ";
            }
            // line 98
            echo "            ";
        }
        // line 99
        echo "            ";
        if ((!(null === (isset($context["basic_entities"]) ? $context["basic_entities"] : $this->getContext($context, "basic_entities"))))) {
            // line 100
            echo "                basicEntities: '";
            echo (isset($context["basic_entities"]) ? $context["basic_entities"] : $this->getContext($context, "basic_entities"));
            echo "',
            ";
        }
        // line 102
        echo "            ";
        if ((!(null === (isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities"))))) {
            // line 103
            echo "                entities: '";
            echo (isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities"));
            echo "',
            ";
        }
        // line 105
        echo "            ";
        if ((!(null === (isset($context["entities_latin"]) ? $context["entities_latin"] : $this->getContext($context, "entities_latin"))))) {
            // line 106
            echo "                entities_latin: '";
            echo (isset($context["entities_latin"]) ? $context["entities_latin"] : $this->getContext($context, "entities_latin"));
            echo "',
            ";
        }
        // line 108
        echo "            ";
        if ((!(null === (isset($context["startup_mode"]) ? $context["startup_mode"] : $this->getContext($context, "startup_mode"))))) {
            // line 109
            echo "                startupMode: '";
            echo (isset($context["startup_mode"]) ? $context["startup_mode"] : $this->getContext($context, "startup_mode"));
            echo "',
            ";
        }
        // line 111
        echo "            ";
        if ((!(null === (isset($context["enter_mode"]) ? $context["enter_mode"] : $this->getContext($context, "enter_mode"))))) {
            // line 112
            echo "                enterMode: CKEDITOR.";
            echo (isset($context["enter_mode"]) ? $context["enter_mode"] : $this->getContext($context, "enter_mode"));
            echo ",
            ";
        }
        // line 114
        echo "            ";
        if ((isset($context["plugins"]) ? $context["plugins"] : $this->getContext($context, "plugins"))) {
            // line 115
            echo "                extraPlugins: '";
            echo (isset($context["plugins"]) ? $context["plugins"] : $this->getContext($context, "plugins"));
            echo "',
            ";
        }
        // line 117
        echo "            ";
        if ((isset($context["custom_config"]) ? $context["custom_config"] : $this->getContext($context, "custom_config"))) {
            // line 118
            echo "                customConfig: '";
            echo $this->env->getExtension('assets')->getAssetUrl((isset($context["custom_config"]) ? $context["custom_config"] : $this->getContext($context, "custom_config")));
            echo "',
            ";
        }
        // line 120
        echo "            toolbar: ";
        echo twig_jsonencode_filter((isset($context["toolbar"]) ? $context["toolbar"] : $this->getContext($context, "toolbar")));
        echo ",
            baseHref: '";
        // line 121
        echo (((isset($context["base_href"]) ? $context["base_href"] : $this->getContext($context, "base_href"))) ? ((isset($context["base_href"]) ? $context["base_href"] : $this->getContext($context, "base_href"))) : ((($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "schemeAndHttpHost", array()) . $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "baseUrl", array())) . "/")));
        echo "'
        };

        CKEDITOR.replace(\"";
        // line 124
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo "\", trsteelConfig);
        CKEDITOR.instances[\"";
        // line 125
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
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
        return array (  421 => 128,  416 => 125,  412 => 124,  406 => 121,  401 => 120,  395 => 118,  392 => 117,  386 => 115,  383 => 114,  377 => 112,  374 => 111,  368 => 109,  365 => 108,  359 => 106,  356 => 105,  350 => 103,  347 => 102,  341 => 100,  338 => 99,  335 => 98,  329 => 96,  323 => 94,  317 => 93,  314 => 92,  309 => 91,  306 => 90,  303 => 89,  300 => 88,  294 => 86,  291 => 85,  285 => 83,  282 => 82,  276 => 80,  273 => 79,  267 => 77,  261 => 75,  258 => 74,  252 => 72,  246 => 70,  243 => 69,  237 => 67,  231 => 65,  229 => 64,  226 => 63,  220 => 61,  214 => 59,  211 => 58,  205 => 56,  199 => 54,  196 => 53,  190 => 51,  184 => 49,  181 => 48,  175 => 46,  172 => 45,  166 => 43,  163 => 42,  157 => 40,  154 => 39,  148 => 37,  145 => 36,  139 => 34,  136 => 33,  130 => 31,  127 => 30,  121 => 28,  118 => 27,  112 => 25,  110 => 24,  106 => 22,  92 => 21,  89 => 20,  86 => 19,  83 => 18,  81 => 17,  72 => 16,  54 => 15,  51 => 14,  46 => 11,  42 => 9,  37 => 7,  26 => 2,  20 => 1,  40 => 6,  36 => 5,  31 => 4,  28 => 3,);
    }
}
