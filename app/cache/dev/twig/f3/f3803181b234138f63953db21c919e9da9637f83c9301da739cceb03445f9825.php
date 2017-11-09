<?php

/* BenDoctorsBundle:Antecedent:new.html.twig */
class __TwigTemplate_eaa7d11fd1ba3c7c76066b77c415c8beeb23f8014c1ee1e1c701f91322cc720b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("BenDoctorsBundle::layout.html.twig", "BenDoctorsBundle:Antecedent:new.html.twig", 1);
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
        echo "<h3><span class=\"glyphicon glyphicon-tag\"></span> Ajout d'un Antecedent</h3>
<form action=\"";
        // line 7
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("antecedent_create");
        echo "\" class=\"form-horizontal col-md-8\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'enctype');
        echo ">
    <div class=\"form-group \">
\t\t<label class=\"col-md-6 control-label\" for=\"user\">Etudiant</label>
\t\t<div class=\"col-md-6\">
\t\t\t<input id=\"user\" class=\"form-control disabled\" disabled=\"disabled\" type=\"text\" name=\"unused\" value=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["entity"] ?? $this->getContext($context, "entity")), "person", array()), "fullName", array()), "html", null, true);
        echo "\">
\t\t</div>
\t</div>

    ";
        // line 15
        $this->loadTemplate("BenDoctorsBundle:antecedent:form.html.twig", "BenDoctorsBundle:Antecedent:new.html.twig", 15)->display($context);
        // line 16
        echo "
    <div class=\"form-group\">
      <div class=\"col-md-offset-6 col-md-6\">
        <button type=\"submit\" name=\"subvalider\" class=\"btn btn-primary\"><span class=\"glyphicon glyphicon-edit\"></span> Ajouter</button>
      </div>
    </div>
</form>

";
    }

    // line 25
    public function block_javascripts($context, array $blocks = array())
    {
        // line 26
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
<script> 
    (function(\$) {
        \$('#ben_antecedent_person').closest('.form-group').hide();
        \$('select').removeClass('form-control').select2({minimumResultsForSearch: -1});
    })(jQuery);
</script>
";
    }

    public function getTemplateName()
    {
        return "BenDoctorsBundle:Antecedent:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 26,  76 => 25,  64 => 16,  62 => 15,  55 => 11,  46 => 7,  43 => 6,  40 => 5,  33 => 3,  30 => 2,  11 => 1,);
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
<h3><span class=\"glyphicon glyphicon-tag\"></span> Ajout d'un Antecedent</h3>
<form action=\"{{ path('antecedent_create') }}\" class=\"form-horizontal col-md-8\" method=\"post\" {{ form_enctype(form) }}>
    <div class=\"form-group \">
\t\t<label class=\"col-md-6 control-label\" for=\"user\">Etudiant</label>
\t\t<div class=\"col-md-6\">
\t\t\t<input id=\"user\" class=\"form-control disabled\" disabled=\"disabled\" type=\"text\" name=\"unused\" value=\"{{ entity.person.fullName }}\">
\t\t</div>
\t</div>

    {% include \"BenDoctorsBundle:antecedent:form.html.twig\" %}

    <div class=\"form-group\">
      <div class=\"col-md-offset-6 col-md-6\">
        <button type=\"submit\" name=\"subvalider\" class=\"btn btn-primary\"><span class=\"glyphicon glyphicon-edit\"></span> Ajouter</button>
      </div>
    </div>
</form>

{% endblock body %}
{% block javascripts %}
{{ parent() }}
<script> 
    (function(\$) {
        \$('#ben_antecedent_person').closest('.form-group').hide();
        \$('select').removeClass('form-control').select2({minimumResultsForSearch: -1});
    })(jQuery);
</script>
{% endblock %}
", "BenDoctorsBundle:Antecedent:new.html.twig", "/home/pacifik/Desktop/Doctors-master/src/Ben/DoctorsBundle/Resources/views/Antecedent/new.html.twig");
    }
}
