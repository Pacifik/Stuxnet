<?php

/* BenDoctorsBundle:Meds:edit.html.twig */
class __TwigTemplate_53f9fb71febfc2a79cf372c5ed78ad826c9e320dfc877f501004f3a581664df8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("BenDoctorsBundle::layout.html.twig", "BenDoctorsBundle:Meds:edit.html.twig", 1);
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
        echo "Medicament edit | ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "
<h3><span class=\"glyphicon glyphicon-tag\"></span> Mise à jour d'un medicament</h3>

<form action=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("meds_update", array("id" => $this->getAttribute(($context["entity"] ?? $this->getContext($context, "entity")), "id", array()))), "html", null, true);
        echo "\" class=\"form-horizontal col-md-8\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'enctype');
        echo ">
    ";
        // line 10
        $this->loadTemplate("BenDoctorsBundle:Meds:form.html.twig", "BenDoctorsBundle:Meds:edit.html.twig", 10)->display($context);
        // line 11
        echo "    <div class=\"form-group\">
      <div class=\"col-md-offset-5 col-md-7\">
        <button type=\"submit\" name=\"subvalider\" class=\"btn btn-primary\"><span class=\"glyphicon glyphicon-edit\"></span> Modifier</button>
        <a href=\"#\" id=\"js-delete\" class=\"btn btn-danger\"><span class=\"glyphicon glyphicon-trash\"></span> Supprimer</a>
        <a href=\"";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("meds");
        echo "\" class=\"btn btn-success\"><span class=\"glyphicon glyphicon-ok\"></span> Retourner vers la liste</a>
      </div>
    </div>
</form>

<form id=\"deleteForm\" action=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("meds_delete", array("id" => $this->getAttribute(($context["entity"] ?? $this->getContext($context, "entity")), "id", array()))), "html", null, true);
        echo "\" method=\"POST\">
    ";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'widget');
        echo "
</form> 
";
    }

    // line 24
    public function block_javascripts($context, array $blocks = array())
    {
        // line 25
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
<script> 
    (function(\$) {

        \$('#js-delete').on('click', function(){
            \$('#deleteForm').submit();
            return false;
        });
    })(jQuery);
</script>
";
    }

    public function getTemplateName()
    {
        return "BenDoctorsBundle:Meds:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 25,  81 => 24,  74 => 21,  70 => 20,  62 => 15,  56 => 11,  54 => 10,  48 => 9,  43 => 6,  40 => 5,  33 => 3,  30 => 2,  11 => 1,);
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
Medicament edit | {{ parent() }}
{% endblock %}
{% block body %}

<h3><span class=\"glyphicon glyphicon-tag\"></span> Mise à jour d'un medicament</h3>

<form action=\"{{ path('meds_update', { 'id': entity.id }) }}\" class=\"form-horizontal col-md-8\" method=\"post\" {{ form_enctype(form) }}>
    {% include \"BenDoctorsBundle:Meds:form.html.twig\" %}
    <div class=\"form-group\">
      <div class=\"col-md-offset-5 col-md-7\">
        <button type=\"submit\" name=\"subvalider\" class=\"btn btn-primary\"><span class=\"glyphicon glyphicon-edit\"></span> Modifier</button>
        <a href=\"#\" id=\"js-delete\" class=\"btn btn-danger\"><span class=\"glyphicon glyphicon-trash\"></span> Supprimer</a>
        <a href=\"{{ path('meds') }}\" class=\"btn btn-success\"><span class=\"glyphicon glyphicon-ok\"></span> Retourner vers la liste</a>
      </div>
    </div>
</form>

<form id=\"deleteForm\" action=\"{{ path('meds_delete', { 'id': entity.id }) }}\" method=\"POST\">
    {{ form_widget(delete_form) }}
</form> 
{% endblock body %}
{% block javascripts %}
{{ parent() }}
<script> 
    (function(\$) {

        \$('#js-delete').on('click', function(){
            \$('#deleteForm').submit();
            return false;
        });
    })(jQuery);
</script>
{% endblock %}
", "BenDoctorsBundle:Meds:edit.html.twig", "/home/pacifik/Desktop/Doctors-master/src/Ben/DoctorsBundle/Resources/views/Meds/edit.html.twig");
    }
}
