<?php

/* TreewalkerBlogBundle:Blog:edit.html.twig */
class __TwigTemplate_2e765655050d218864bb9b0aee6daf9e3f9262efe099395286ac3193d7870a97 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("TreewalkerAdminBundle:Layout:layout.html.twig");

        $this->blocks = array(
            'content' => array($this, 'block_content'),
            'extra_javascript_footer' => array($this, 'block_extra_javascript_footer'),
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
        echo "   ";
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_start', array("attr" => array("class" => "edit_blog_form")));
        echo "
    ";
        // line 4
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'errors');
        echo "
    
    ";
        // line 6
        if (file_exists(($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "vars", array()), "value", array()), "path", array()) . $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "vars", array()), "value", array()), "image", array())))) {
            // line 7
            echo "      <div class=\"field_row\" id=\"uploaded_image\">
          <label>Blog Image : </label>
        <img src=\"";
            // line 9
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(("uploads/images/" . $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "vars", array()), "value", array()), "image", array()))), "html", null, true);
            echo "\" width=\"200\" >
        <br /><a href=\"javascript:void(0)\" onclick=\"return removeImage('";
            // line 10
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "vars", array()), "value", array()), "image", array()), "html", null, true);
            echo "')\"> Remove
        </a>
      </div>
      <div class=\"field_row\" style=\"display:none\" id=\"upload_image_file\">
            ";
            // line 14
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "blog_image", array()), 'row');
            echo "
     </div>
    ";
        } else {
            // line 17
            echo "        ";
            echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "vars", array()), "value", array()), "path", array()) . $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "vars", array()), "value", array()), "image", array())), "html", null, true);
            echo " image doesn't exists 
        <div class=\"field_row\" id=\"upload_image_file\">
            ";
            // line 19
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "blog_image", array()), 'row');
            echo "
        </div>
    ";
        }
        // line 21
        echo "    
 
    <div class=\"field_row\">
        ";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "blog", array()), "title", array()), 'row');
        echo "
    </div>
    <div class=\"field_row\">
        ";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "blog", array()), "blog", array()), 'row');
        echo "
    </div>
    <div class=\"field_row\">
        ";
        // line 30
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "blog", array()), "author", array()), 'row');
        echo "
    </div>
    <div class=\"field_row\">
        ";
        // line 33
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "blog", array()), "tags", array()), 'row');
        echo "
    </div>

    <div class=\"field_row\">
        ";
        // line 37
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "submit", array()), 'row');
        echo "
    </div>
  ";
        // line 39
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_end');
        echo "
";
    }

    // line 43
    public function block_extra_javascript_footer($context, array $blocks = array())
    {
        // line 44
        echo "    <script type=\"text/javascript\">
        
        function removeImage(filename){
            
            \$.ajax({
               url:\"";
        // line 49
        echo $this->env->getExtension('routing')->getPath("treewalker_blog_admin_ajax_remove_image");
        echo "\",
               type:'post',
               data:[{'name':'filename',value:filename},{'name':'blog_id',value:'";
        // line 51
        echo twig_escape_filter($this->env, (isset($context["blog_id"]) ? $context["blog_id"] : null), "html", null, true);
        echo "' }],
               dataType:'json',
               success:function(response){
                            //alert(response.filename);
                            \$(\"#uploaded_image\").hide();
                            \$(\"#upload_image_file\").show();
               }   ,
               error:function(response){
                   alert(response.responseText);
               }
            });
        }
        
        \$(document).ready(function(){
           
        });
    </script>
    
    
";
    }

    public function getTemplateName()
    {
        return "TreewalkerBlogBundle:Blog:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  118 => 43,  100 => 33,  65 => 17,  52 => 10,  167 => 37,  152 => 30,  148 => 28,  146 => 27,  120 => 41,  97 => 47,  90 => 45,  84 => 16,  215 => 61,  212 => 60,  205 => 53,  202 => 52,  197 => 47,  192 => 48,  190 => 47,  184 => 45,  178 => 41,  172 => 41,  165 => 34,  160 => 33,  153 => 31,  145 => 29,  139 => 27,  104 => 9,  96 => 36,  76 => 50,  74 => 45,  37 => 4,  77 => 21,  70 => 19,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 66,  214 => 69,  177 => 46,  169 => 60,  140 => 24,  132 => 51,  128 => 49,  111 => 12,  107 => 37,  61 => 13,  273 => 96,  269 => 94,  254 => 92,  246 => 90,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 34,  143 => 28,  135 => 26,  131 => 20,  119 => 42,  108 => 36,  102 => 32,  71 => 19,  67 => 41,  63 => 19,  59 => 14,  47 => 11,  87 => 25,  55 => 14,  94 => 30,  89 => 34,  85 => 25,  79 => 18,  75 => 21,  72 => 16,  68 => 14,  56 => 9,  50 => 15,  41 => 9,  28 => 3,  29 => 2,  21 => 2,  38 => 5,  26 => 6,  24 => 1,  35 => 6,  31 => 7,  25 => 4,  98 => 67,  93 => 28,  88 => 27,  78 => 21,  46 => 7,  44 => 7,  27 => 4,  22 => 2,  43 => 8,  40 => 8,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 67,  156 => 32,  151 => 63,  142 => 59,  138 => 54,  136 => 23,  123 => 47,  121 => 44,  117 => 14,  115 => 38,  105 => 40,  101 => 38,  91 => 63,  69 => 22,  66 => 15,  62 => 23,  49 => 9,  32 => 3,  19 => 1,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 46,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 59,  154 => 58,  149 => 51,  147 => 58,  144 => 49,  141 => 48,  133 => 51,  130 => 24,  125 => 21,  122 => 42,  116 => 41,  112 => 39,  109 => 18,  106 => 33,  103 => 8,  99 => 37,  95 => 46,  92 => 21,  86 => 28,  82 => 24,  80 => 52,  73 => 19,  64 => 14,  60 => 13,  57 => 20,  54 => 11,  51 => 13,  48 => 9,  45 => 11,  42 => 6,  39 => 9,  36 => 5,  33 => 8,  30 => 7,);
    }
}
