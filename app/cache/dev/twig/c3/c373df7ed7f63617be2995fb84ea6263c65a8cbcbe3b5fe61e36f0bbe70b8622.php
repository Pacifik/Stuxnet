<?php

/* BenUserBundle:admin:show.html.twig */
class __TwigTemplate_15632f6962ab46e7668a5f74beecd676d1ef3196fbd0c315087833848a56ec2d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("BenUserBundle::layout.html.twig", "BenUserBundle:admin:show.html.twig", 1);
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

    // line 6
    public function block_body($context, array $blocks = array())
    {
        // line 7
        echo "<h3><span class=\"glyphicon glyphicon-user\"></span> ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["entity"] ?? $this->getContext($context, "entity")), "fullName", array()), "html", null, true);
        echo "</h3>

<div class=\"row\">
\t<div class=\"col-md-12\">
    <div class=\"box\">
      <header>
          <h4><span class=\"glyphicon glyphicon-file\"></span> Medecin</h4>
      </header>
        <ul class=\"list-group\">
          <li class=\"list-group-item\"><strong>Nom :</strong> ";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute(($context["entity"] ?? $this->getContext($context, "entity")), "familyname", array()), "html", null, true);
        echo "</li>
          <li class=\"list-group-item\"><strong>Preom :</strong>  ";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute(($context["entity"] ?? $this->getContext($context, "entity")), "firstname", array()), "html", null, true);
        echo " </li>
          <li class=\"list-group-item\"><strong>Tél :</strong> ";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute(($context["entity"] ?? $this->getContext($context, "entity")), "tel", array()), "html", null, true);
        echo "</li>
          <li class=\"list-group-item\"><strong>Ajouté le :</strong> ";
        // line 19
        if ($this->getAttribute(($context["entity"] ?? $this->getContext($context, "entity")), "created", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["entity"] ?? $this->getContext($context, "entity")), "created", array()), "d/m/Y"), "html", null, true);
        }
        echo "</li>
        </ul>
    </div>
\t</div>
\t<div class=\"col-md-12\">
\t\t
      <div class=\"box\">
        <header>
            <h4><span class=\"glyphicon glyphicon-tag\"></span> Historique des consultations</h4>
        </header>
        <table class=\"table table-hover table-bordered\">
            <thead>
                <tr>
                    <th>Motif</th>
                    <th>Date</th>
                    <th>Patient</th>
                    <th>Diagnostic</th>
                    <th>Traitement</th>
                </tr>
            </thead>
            <tbody>
            ";
        // line 40
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["entity"] ?? $this->getContext($context, "entity")), "consultations", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 41
            echo "              <tr>
                <td><a href=\"";
            // line 42
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("consultation_show", array("id" => $this->getAttribute($context["item"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "name", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 43
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["item"], "created", array()), "d/m/Y"), "html", null, true);
            echo "</td>
                <td>";
            // line 44
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["item"], "person", array()), "fullname", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 45
            echo nl2br(twig_escape_filter($this->env, $this->getAttribute($context["item"], "diagnosis", array()), "html", null, true));
            echo "</td>
                <td>";
            // line 46
            echo nl2br(twig_escape_filter($this->env, $this->getAttribute($context["item"], "treatment", array()), "html", null, true));
            echo "</td>
              </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
        echo "            </tbody>
        </table>
    </div> 
\t</div>
</div>

";
    }

    // line 57
    public function block_javascripts($context, array $blocks = array())
    {
        // line 58
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
        return "BenUserBundle:admin:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  141 => 58,  138 => 57,  128 => 49,  119 => 46,  115 => 45,  111 => 44,  107 => 43,  101 => 42,  98 => 41,  94 => 40,  68 => 19,  64 => 18,  60 => 17,  56 => 16,  43 => 7,  40 => 6,  33 => 3,  30 => 2,  11 => 1,);
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
<h3><span class=\"glyphicon glyphicon-user\"></span> {{ entity.fullName }}</h3>

<div class=\"row\">
\t<div class=\"col-md-12\">
    <div class=\"box\">
      <header>
          <h4><span class=\"glyphicon glyphicon-file\"></span> Medecin</h4>
      </header>
        <ul class=\"list-group\">
          <li class=\"list-group-item\"><strong>Nom :</strong> {{ entity.familyname }}</li>
          <li class=\"list-group-item\"><strong>Preom :</strong>  {{ entity.firstname }} </li>
          <li class=\"list-group-item\"><strong>Tél :</strong> {{ entity.tel }}</li>
          <li class=\"list-group-item\"><strong>Ajouté le :</strong> {% if entity.created %}{{ entity.created|date('d/m/Y') }}{% endif %}</li>
        </ul>
    </div>
\t</div>
\t<div class=\"col-md-12\">
\t\t
      <div class=\"box\">
        <header>
            <h4><span class=\"glyphicon glyphicon-tag\"></span> Historique des consultations</h4>
        </header>
        <table class=\"table table-hover table-bordered\">
            <thead>
                <tr>
                    <th>Motif</th>
                    <th>Date</th>
                    <th>Patient</th>
                    <th>Diagnostic</th>
                    <th>Traitement</th>
                </tr>
            </thead>
            <tbody>
            {% for item in entity.consultations %}
              <tr>
                <td><a href=\"{{ path('consultation_show', { 'id': item.id }) }}\">{{ item.name }}</a></td>
                <td>{{ item.created|date('d/m/Y') }}</td>
                <td>{{ item.person.fullname }}</td>
                <td>{{ item.diagnosis|nl2br }}</td>
                <td>{{ item.treatment|nl2br }}</td>
              </tr>
            {% endfor %}
            </tbody>
        </table>
    </div> 
\t</div>
</div>

{% endblock body %}

 {% block javascripts %}
{{ parent() }}
<script> 
    (function(\$) {
    })(jQuery);
</script>
{% endblock %}", "BenUserBundle:admin:show.html.twig", "/home/pacifik/Desktop/Doctors-master/src/Ben/UserBundle/Resources/views/admin/show.html.twig");
    }
}
