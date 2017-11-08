<?php

/* FOSUserBundle:Profile:edit.html.twig */
class __TwigTemplate_cf77d924ac84518104da52cd7bd5e25cf54cd1c82d679be929e1c9f9e07c061b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Profile:edit.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        // line 3
        echo "Paramètres - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
    }

    // line 6
    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 7
        echo "<div class=\"col-md-8\"><h3></h3>
";
        // line 8
        $this->loadTemplate("FOSUserBundle:ChangePassword:changePassword.html.twig", "FOSUserBundle:Profile:edit.html.twig", 8)->display($context);
        // line 9
        echo "<form action=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_profile_edit");
        echo "\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'enctype');
        echo " method=\"POST\" class=\"form-horizontal\">
<fieldset>
    <legend><span class=\"glyphicon glyphicon-envelope\"></span> Change e-mail </legend>    
    
        ";
        // line 13
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "username", array()), 'row', array("label" => "Username"));
        echo "
        ";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "email", array()), 'row', array("label" => "e-mail"));
        echo "
        ";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "current_password", array()), 'row', array("label" => "Current password"));
        echo "

        ";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'rest');
        echo "
    <div class=\"form-group\">
        <div class=\"col-md-offset-6 col-md-6\">
            <button type=\"submit\" name=\"subvalider\" class=\"btn btn-primary\"><span class=\"glyphicon glyphicon-edit\"></span> Update</button>
        </div>
    </div>
</fieldset>
</form>

</div>

";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 17,  65 => 15,  61 => 14,  57 => 13,  47 => 9,  45 => 8,  42 => 7,  39 => 6,  32 => 3,  29 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"FOSUserBundle::layout.html.twig\" %}
{% block title %}
Paramètres - {{ parent() }}
{% endblock %}

{% block fos_user_content %}
<div class=\"col-md-8\"><h3></h3>
{% include \"FOSUserBundle:ChangePassword:changePassword.html.twig\" %}
<form action=\"{{ path('fos_user_profile_edit') }}\" {{ form_enctype(form) }} method=\"POST\" class=\"form-horizontal\">
<fieldset>
    <legend><span class=\"glyphicon glyphicon-envelope\"></span> Change e-mail </legend>    
    
        {{ form_row(form.username, { 'label': 'Username'}) }}
        {{ form_row(form.email, { 'label': 'e-mail'}) }}
        {{ form_row(form.current_password, { 'label': 'Current password'}) }}

        {{ form_rest(form) }}
    <div class=\"form-group\">
        <div class=\"col-md-offset-6 col-md-6\">
            <button type=\"submit\" name=\"subvalider\" class=\"btn btn-primary\"><span class=\"glyphicon glyphicon-edit\"></span> Update</button>
        </div>
    </div>
</fieldset>
</form>

</div>

{% endblock fos_user_content %}", "FOSUserBundle:Profile:edit.html.twig", "/home/pacifik/Desktop/Doctors-master/src/Ben/UserBundle/Resources/views/Profile/edit.html.twig");
    }
}
