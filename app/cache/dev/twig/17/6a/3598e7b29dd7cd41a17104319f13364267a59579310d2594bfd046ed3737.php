<?php

/* TreewalkerUserBundle:Security:login.html.twig */
class __TwigTemplate_176a3598e7b29dd7cd41a17104319f13364267a59579310d2594bfd046ed3737 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("TreewalkerBlogBundle:Layout:layout.html.twig");

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TreewalkerBlogBundle:Layout:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        // line 3
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 4
            echo "<div>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "message", array()), "html", null, true);
            echo "</div>
";
        }
        // line 6
        echo "<form action=\"";
        echo $this->env->getExtension('routing')->getPath("login_check");
        echo "\" method=\"post\" class=\"form\">
<div class=\"form_row\">
<label for=\"username\">Username:</label>
<input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 9
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" />
</div>
<div class=\"form_row\">
<label for=\"password\">Password:</label>
<input type=\"password\" id=\"password\" name=\"_password\" />
</div>
<input type=\"hidden\" name=\"_target_path\" value=\"treewalker_blog_homepage\" />
<input type=\"hidden\" name=\"_csrf_token\"
        value=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderer->renderCsrfToken("authenticate"), "html", null, true);
        echo "\"
    >
<div class=\"form_row\">
    <input type=\"submit\" name=\"login\" style=\"text-align: center\" />
</div>
</form>

";
    }

    public function getTemplateName()
    {
        return "TreewalkerUserBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 17,  46 => 9,  39 => 6,  33 => 4,  31 => 3,  28 => 2,);
    }
}
