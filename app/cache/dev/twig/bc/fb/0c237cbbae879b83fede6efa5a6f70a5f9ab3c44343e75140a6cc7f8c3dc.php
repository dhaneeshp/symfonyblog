<?php

/* TreewalkerAdminBundle:Login:login.html.twig */
class __TwigTemplate_bcfb0c237cbbae879b83fede6efa5a6f70a5f9ab3c44343e75140a6cc7f8c3dc extends Twig_Template
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
        echo "    ";
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 4
            echo "    <div>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "message", array()), "html", null, true);
            echo "</div>
    ";
        }
        // line 6
        echo "    <form action=\"";
        echo $this->env->getExtension('routing')->getPath("admin_login_check");
        echo "\" method=\"post\">
        <div class=\"row\" >
            <label for=\"username\">Username:</label>
            <input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 9
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" />
        </div>
        <div class=\"row\" >
            <label for=\"password\">Password:</label>
            <input type=\"password\" id=\"password\" name=\"_password\" />
        </div>
        <div class=\"row\">
            <input type=\"hidden\" name=\"_target_path\" value=\"treewalker_blog_admin_homepage\" />
            <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderer->renderCsrfToken("authenticate"), "html", null, true);
        echo "\" >
            <input type=\"submit\" name=\"login\" />
        </div>
    </form>
    
";
    }

    public function getTemplateName()
    {
        return "TreewalkerAdminBundle:Login:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 17,  47 => 9,  40 => 6,  34 => 4,  31 => 3,  28 => 2,);
    }
}
