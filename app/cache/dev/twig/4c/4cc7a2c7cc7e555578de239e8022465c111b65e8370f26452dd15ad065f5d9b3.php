<?php

/* BenUserBundle:admin:edit.html.twig */
class __TwigTemplate_3945d83e440c3011e211487759a42eef789c790bc7452213098e469af95c0f19 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("BenUserBundle::layout.html.twig", "BenUserBundle:admin:edit.html.twig", 1);
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
        echo "<div class=\"col-md-12\">      
\t<h3><span class=\"glyphicon glyphicon-user\"></span> Mise à jour d'un utilisateur</h3>
\t<form class=\"form-horizontal col-md-8\" action=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ben_update_user", array("id" => $this->getAttribute(($context["entity"] ?? $this->getContext($context, "entity")), "id", array()))), "html", null, true);
        echo "\" method=\"POST\" role=\"form\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'enctype');
        echo ">
\t\t";
        // line 9
        $this->loadTemplate("BenUserBundle:admin:form.html.twig", "BenUserBundle:admin:edit.html.twig", 9)->display($context);
        // line 10
        echo "  
  <div class=\"form-group\">
      <div class=\"col-sm-offset-6 col-sm-6\">
        <button type=\"submit\" name=\"subvalider\" class=\"btn btn-primary\"><span class=\"glyphicon glyphicon-edit\"></span>  Mettre à jour</button>
      </div>
    </div>

\t</form> 
</div>
";
    }

    // line 21
    public function block_javascripts($context, array $blocks = array())
    {
        // line 22
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
        return "BenUserBundle:admin:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 22,  68 => 21,  55 => 10,  53 => 9,  47 => 8,  43 => 6,  40 => 5,  33 => 3,  30 => 2,  11 => 1,);
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
<div class=\"col-md-12\">      
\t<h3><span class=\"glyphicon glyphicon-user\"></span> Mise à jour d'un utilisateur</h3>
\t<form class=\"form-horizontal col-md-8\" action=\"{{ path('ben_update_user', {id: entity.id})}}\" method=\"POST\" role=\"form\" {{ form_enctype(form) }}>
\t\t{% include \"BenUserBundle:admin:form.html.twig\" %}
  
  <div class=\"form-group\">
      <div class=\"col-sm-offset-6 col-sm-6\">
        <button type=\"submit\" name=\"subvalider\" class=\"btn btn-primary\"><span class=\"glyphicon glyphicon-edit\"></span>  Mettre à jour</button>
      </div>
    </div>

\t</form> 
</div>
{% endblock body %}

 {% block javascripts %}
{{ parent() }}
<script> 
    (function(\$) {
    })(jQuery);
</script>
{% endblock %}", "BenUserBundle:admin:edit.html.twig", "/home/pacifik/Desktop/Doctors-master/src/Ben/UserBundle/Resources/views/admin/edit.html.twig");
    }
}
