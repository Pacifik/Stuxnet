<?php

/* BenDoctorsBundle:Person:edit.html.twig */
class __TwigTemplate_bd4b9a47f420f29cab7b2db055eeabbca7a2c3802e70f9932c3c162613f799e9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("BenDoctorsBundle::layout.html.twig", "BenDoctorsBundle:Person:edit.html.twig", 1);
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
        echo "<h3><span class=\"glyphicon glyphicon-user\"></span> Register new patient</h3>
<form action=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("person_update", array("id" => $this->getAttribute(($context["entity"] ?? $this->getContext($context, "entity")), "id", array()))), "html", null, true);
        echo "\"  class=\"form-horizontal col-md-8\" method=\"post\">
    ";
        // line 8
        $this->loadTemplate("BenDoctorsBundle:Person:form.html.twig", "BenDoctorsBundle:Person:edit.html.twig", 8)->display($context);
        // line 9
        echo "
    <div class=\"form-group\">
      <div class=\"col-sm-offset-6 col-sm-6\">
        <button type=\"submit\" class=\"btn btn-primary\"><span class=\"glyphicon glyphicon-edit\"></span> Update</button>
        <a href=\"#\" id=\"js-delete\" class=\"btn btn-danger\"><span class=\"glyphicon glyphicon-trash\"></span> Delete</a>
      </div>
    </div>
</form>
<form id=\"deleteForm\" action=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("person_delete", array("id" => $this->getAttribute(($context["entity"] ?? $this->getContext($context, "entity")), "id", array()))), "html", null, true);
        echo "\" method=\"DELETE\" class=\"\">
    ";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'widget');
        echo "
</form> 
";
    }

    // line 22
    public function block_javascripts($context, array $blocks = array())
    {
        // line 23
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
<script> 
    (function(\$) {
        
        \$('#js-delete').on('click', function(){
            \$('#deleteForm').submit();
            return false;
        });

        cityData = \$.map(cityData, function(val,index){return {id:val, text:val};});
        \$('#ben_person_city').removeClass('form-control').select2({
          createSearchChoice:function(term, data) { if (\$(data).filter(function() { return this.text.localeCompare(term)===0; }).length===0) {return {id:term, text:term};} },
          multiple: false,
          data: cityData
        });
        \$('select').removeClass('form-control').select2({minimumResultsForSearch: -1});

        /* handicap */
        var ishandicap = \$('#ben_person_ishandicap'),
            handicap = ishandicap.closest('.form-group').next().hide();
            needs = handicap.closest('.form-group').next().hide();

        if(ishandicap.is(\":checked\")){
            handicap.show();
            needs.show();
        }
        ishandicap.on('change', function(){
          if(ishandicap.is(\":checked\")){
            handicap.show();
            needs.show();
          }
          else {
            handicap.hide();
            needs.hide();
          }
        });

        universityData = \$.map(universityData, function(val,index){return {id:val, text:val};});
        \$('#ben_person_university').removeClass('form-control').select2({
          createSearchChoice:function(term, data) { if (\$(data).filter(function() { return this.text.localeCompare(term)===0; }).length===0) {return {id:term, text:term};} },
          multiple: false,
          data: universityData
        });

    })(jQuery);
</script>
";
    }

    public function getTemplateName()
    {
        return "BenDoctorsBundle:Person:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 23,  73 => 22,  66 => 18,  62 => 17,  52 => 9,  50 => 8,  46 => 7,  43 => 6,  40 => 5,  33 => 3,  30 => 2,  11 => 1,);
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
<h3><span class=\"glyphicon glyphicon-user\"></span> Register new patient</h3>
<form action=\"{{ path('person_update', { 'id': entity.id }) }}\"  class=\"form-horizontal col-md-8\" method=\"post\">
    {% include \"BenDoctorsBundle:Person:form.html.twig\" %}

    <div class=\"form-group\">
      <div class=\"col-sm-offset-6 col-sm-6\">
        <button type=\"submit\" class=\"btn btn-primary\"><span class=\"glyphicon glyphicon-edit\"></span> Update</button>
        <a href=\"#\" id=\"js-delete\" class=\"btn btn-danger\"><span class=\"glyphicon glyphicon-trash\"></span> Delete</a>
      </div>
    </div>
</form>
<form id=\"deleteForm\" action=\"{{ path('person_delete', { 'id': entity.id }) }}\" method=\"DELETE\" class=\"\">
    {{ form_widget(delete_form) }}
</form> 
{% endblock %}

{% block javascripts %}
{{ parent() }}
<script> 
    (function(\$) {
        
        \$('#js-delete').on('click', function(){
            \$('#deleteForm').submit();
            return false;
        });

        cityData = \$.map(cityData, function(val,index){return {id:val, text:val};});
        \$('#ben_person_city').removeClass('form-control').select2({
          createSearchChoice:function(term, data) { if (\$(data).filter(function() { return this.text.localeCompare(term)===0; }).length===0) {return {id:term, text:term};} },
          multiple: false,
          data: cityData
        });
        \$('select').removeClass('form-control').select2({minimumResultsForSearch: -1});

        /* handicap */
        var ishandicap = \$('#ben_person_ishandicap'),
            handicap = ishandicap.closest('.form-group').next().hide();
            needs = handicap.closest('.form-group').next().hide();

        if(ishandicap.is(\":checked\")){
            handicap.show();
            needs.show();
        }
        ishandicap.on('change', function(){
          if(ishandicap.is(\":checked\")){
            handicap.show();
            needs.show();
          }
          else {
            handicap.hide();
            needs.hide();
          }
        });

        universityData = \$.map(universityData, function(val,index){return {id:val, text:val};});
        \$('#ben_person_university').removeClass('form-control').select2({
          createSearchChoice:function(term, data) { if (\$(data).filter(function() { return this.text.localeCompare(term)===0; }).length===0) {return {id:term, text:term};} },
          multiple: false,
          data: universityData
        });

    })(jQuery);
</script>
{% endblock %}", "BenDoctorsBundle:Person:edit.html.twig", "/home/pacifik/Desktop/Doctors-master/src/Ben/DoctorsBundle/Resources/views/Person/edit.html.twig");
    }
}
