<?php

/* BenDoctorsBundle:Person:new.html.twig */
class __TwigTemplate_d59496c5d7a9ebe92c1fb3cc2b6c5dddc3bfef8752b6d6b4b3516db84c71b82a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("BenDoctorsBundle::layout.html.twig", "BenDoctorsBundle:Person:new.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheet' => array($this, 'block_stylesheet'),
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
    public function block_stylesheet($context, array $blocks = array())
    {
        // line 6
        echo "    ";
        $this->displayParentBlock("stylesheet", $context, $blocks);
        echo "
    <link href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("bootstrap/css/bootstrap-datetimepicker.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
";
    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        // line 10
        echo "<div class=\"col-md-12\">
    <h3><span class=\"glyphicon glyphicon-user\"></span> Form Application</h3>

<form action=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("person_create");
        echo "\"  class=\"form-horizontal col-md-8\" method=\"post\">

    ";
        // line 15
        $this->loadTemplate("BenDoctorsBundle:Person:form.html.twig", "BenDoctorsBundle:Person:new.html.twig", 15)->display($context);
        // line 16
        echo "
    <div class=\"form-group\">
      <div class=\"col-sm-offset-6 col-sm-6\">
        <button type=\"submit\" name=\"subvalider\" class=\"btn btn-primary\"><span class=\"glyphicon glyphicon-edit\"></span> Add</button>
      </div>
    </div>
</form>
</div>
";
    }

    // line 25
    public function block_javascripts($context, array $blocks = array())
    {
        // line 26
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "

    <script src=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("js/moment.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("bootstrap/js/bootstrap-datetimepicker.js"), "html", null, true);
        echo "\"></script> 
<script> 
    (function(\$) {

        \$('.has-datepicker').attr('data-date-format', 'YYYY-MM-DD').parent().datetimepicker({
          pickTime: false
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
        return "BenDoctorsBundle:Person:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 29,  90 => 28,  85 => 26,  82 => 25,  70 => 16,  68 => 15,  63 => 13,  58 => 10,  55 => 9,  49 => 7,  44 => 6,  41 => 5,  34 => 3,  31 => 2,  11 => 1,);
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
{% block stylesheet %}
    {{ parent() }}
    <link href=\"{{ asset('bootstrap/css/bootstrap-datetimepicker.min.css') }}\" rel=\"stylesheet\">
{% endblock %}
{% block body %}
<div class=\"col-md-12\">
    <h3><span class=\"glyphicon glyphicon-user\"></span> Form Application</h3>

<form action=\"{{ path('person_create') }}\"  class=\"form-horizontal col-md-8\" method=\"post\">

    {% include \"BenDoctorsBundle:Person:form.html.twig\" %}

    <div class=\"form-group\">
      <div class=\"col-sm-offset-6 col-sm-6\">
        <button type=\"submit\" name=\"subvalider\" class=\"btn btn-primary\"><span class=\"glyphicon glyphicon-edit\"></span> Add</button>
      </div>
    </div>
</form>
</div>
{% endblock %}
{% block javascripts %}
{{ parent() }}

    <script src=\"{{ asset('js/moment.js') }}\"></script>
    <script src=\"{{ asset('bootstrap/js/bootstrap-datetimepicker.js') }}\"></script> 
<script> 
    (function(\$) {

        \$('.has-datepicker').attr('data-date-format', 'YYYY-MM-DD').parent().datetimepicker({
          pickTime: false
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
{% endblock %}
", "BenDoctorsBundle:Person:new.html.twig", "/home/pacifik/Desktop/Doctors-master/src/Ben/DoctorsBundle/Resources/views/Person/new.html.twig");
    }
}
