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
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("class" => "edit_blog_form")));
        echo "
    ";
        // line 4
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
    
    ";
        // line 6
        if (file_exists(($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "value", array()), "path", array()) . $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "value", array()), "image", array())))) {
            // line 7
            echo "      <div class=\"field_row\" id=\"uploaded_image\">
          <label>Blog Image : </label>
        <img src=\"";
            // line 9
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(("uploads/images/" . $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "value", array()), "image", array()))), "html", null, true);
            echo "\" width=\"200\" >
        <br /><a href=\"javascript:void(0)\" onclick=\"return removeImage('";
            // line 10
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "value", array()), "image", array()), "html", null, true);
            echo "')\"> Remove
        </a>
      </div>
      <div class=\"field_row\" style=\"display:none\" id=\"upload_image_file\">
            ";
            // line 14
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "blog_image", array()), 'row');
            echo "
     </div>
    ";
        } else {
            // line 17
            echo "        ";
            echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "value", array()), "path", array()) . $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "value", array()), "image", array())), "html", null, true);
            echo " image doesn't exists 
        <div class=\"field_row\" id=\"upload_image_file\">
            ";
            // line 19
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "blog_image", array()), 'row');
            echo "
        </div>
    ";
        }
        // line 21
        echo "    
 
    <div class=\"field_row\">
        ";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "blog", array()), "title", array()), 'row');
        echo "
    </div>
    <div class=\"field_row\">
        ";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "blog", array()), "blog", array()), 'row');
        echo "
    </div>
    <div class=\"field_row\">
        ";
        // line 30
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "blog", array()), "author", array()), 'row');
        echo "
    </div>
    <div class=\"field_row\">
        ";
        // line 33
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "blog", array()), "tags", array()), 'row');
        echo "
    </div>

    <div class=\"field_row\">
        ";
        // line 37
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "submit", array()), 'row');
        echo "
    </div>
  ";
        // line 39
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
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
        echo twig_escape_filter($this->env, (isset($context["blog_id"]) ? $context["blog_id"] : $this->getContext($context, "blog_id")), "html", null, true);
        echo "' }],
               dataType:'json',
               success:function(response){
                            alert(response.filename);
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
        return array (  133 => 51,  128 => 49,  121 => 44,  118 => 43,  112 => 39,  107 => 37,  100 => 33,  94 => 30,  88 => 27,  82 => 24,  77 => 21,  71 => 19,  65 => 17,  59 => 14,  52 => 10,  48 => 9,  44 => 7,  42 => 6,  37 => 4,  32 => 3,  29 => 2,);
    }
}
