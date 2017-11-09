<?php

/* BenDoctorsBundle:Meds:new.html.twig */
class __TwigTemplate_c79de5ae332ba78937aa4ac7880acb879c7ceb6ef064d01f77240ba019fb4c91 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("BenDoctorsBundle::layout.html.twig", "BenDoctorsBundle:Meds:new.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "BenDoctorsBundle::layout.html.twig";
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
        echo "
<h3><span class=\"glyphicon glyphicon-user\"></span> Inscription d'un nouveau meds</h3>

<form action=\"";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("meds_create");
        echo "\"  class=\"form-horizontal col-md-8\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'enctype');
        echo ">
    ";
        // line 10
        $this->loadTemplate("BenDoctorsBundle:Meds:form.html.twig", "BenDoctorsBundle:Meds:new.html.twig", 10)->display($context);
        // line 11
        echo "
    <div class=\"form-group\">
      <div class=\"col-sm-offset-6 col-sm-6\">
        <button type=\"submit\" name=\"subvalider\" class=\"btn btn-primary\"><span class=\"glyphicon glyphicon-edit\"></span> Ajouter</button>
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
        return "BenDoctorsBundle:Meds:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 21,  68 => 20,  56 => 11,  54 => 10,  48 => 9,  43 => 6,  40 => 5,  33 => 3,  30 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"BenDoctorsBundle::layout.html.twig\" %}
{% block title %}
Tableau de bord | {{ parent() }}
{% endblock %}
{% block body %}

<h3><span class=\"glyphicon glyphicon-user\"></span> Inscription d'un nouveau meds</h3>

<form action=\"{{ path('meds_create') }}\"  class=\"form-horizontal col-md-8\" method=\"post\" {{ form_enctype(form) }}>
    {% include \"BenDoctorsBundle:Meds:form.html.twig\" %}

    <div class=\"form-group\">
      <div class=\"col-sm-offset-6 col-sm-6\">
        <button type=\"submit\" name=\"subvalider\" class=\"btn btn-primary\"><span class=\"glyphicon glyphicon-edit\"></span> Ajouter</button>
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
{% endblock javascripts %}", "BenDoctorsBundle:Meds:new.html.twig", "/home/pacifik/Desktop/Doctors-master/src/Ben/DoctorsBundle/Resources/views/Meds/new.html.twig");
    }
}
