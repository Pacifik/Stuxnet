<?php

/* BenUserBundle:admin:new.html.twig */
class __TwigTemplate_64cb0b226a3449f4d75f53996833bc29268cc1066a0312153593747eb54050f1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("BenUserBundle::layout.html.twig", "BenUserBundle:admin:new.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "BenUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        // line 3
        echo "Tableau de bord | ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "<div class=\"col-md-12\"><h3><span class=\" glyphicon glyphicon-user\"></span> Inscription d'un utilisateur</h3></div>
<form class=\"form-horizontal col-md-8\" action=\"";
        // line 7
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ben_add_user");
        echo "\" method=\"POST\" role=\"form\"  ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'enctype');
        echo ">
\t
";
        // line 9
        $this->loadTemplate("BenUserBundle:admin:form.html.twig", "BenUserBundle:admin:new.html.twig", 9)->display($context);
        // line 10
        echo "

    <div class=\"form-group\">
      <div class=\"col-sm-offset-6 col-sm-6\">
        <button type=\"submit\" name=\"subvalider\" class=\"btn btn-primary\"><span class=\"glyphicon glyphicon-plus\"></span> Ajouter</button>
      </div>
    </div>
</form>
";
    }

    // line 20
    public function block_javascripts($context, array $blocks = array())
    {
        // line 21
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
<script> 
    (function(\$) {
    })(jQuery);
</script>
";
    }

    public function getTemplateName()
    {
        return "BenUserBundle:admin:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 21,  67 => 20,  55 => 10,  53 => 9,  46 => 7,  43 => 6,  40 => 5,  33 => 3,  30 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"BenUserBundle::layout.html.twig\" %}
{% block title %}
Tableau de bord | {{ parent() }}
{% endblock %}
{% block body %}
<div class=\"col-md-12\"><h3><span class=\" glyphicon glyphicon-user\"></span> Inscription d'un utilisateur</h3></div>
<form class=\"form-horizontal col-md-8\" action=\"{{ path('ben_add_user')}}\" method=\"POST\" role=\"form\"  {{ form_enctype(form) }}>
\t
{% include \"BenUserBundle:admin:form.html.twig\" %}


    <div class=\"form-group\">
      <div class=\"col-sm-offset-6 col-sm-6\">
        <button type=\"submit\" name=\"subvalider\" class=\"btn btn-primary\"><span class=\"glyphicon glyphicon-plus\"></span> Ajouter</button>
      </div>
    </div>
</form>
{% endblock body %}

 {% block javascripts %}
{{ parent() }}
<script> 
    (function(\$) {
    })(jQuery);
</script>
{% endblock %}", "BenUserBundle:admin:new.html.twig", "/home/pacifik/Desktop/Doctors-master/src/Ben/UserBundle/Resources/views/admin/new.html.twig");
    }
}
