<?php

/* BenDoctorsBundle:Person:show.html.twig */
class __TwigTemplate_1119f17fa41d4e53ebf290921aa8834cefa3ee5fe100cb80db7a7350221cf910 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("BenDoctorsBundle::layout.html.twig", "BenDoctorsBundle:Person:show.html.twig", 1);
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
        echo "<div class=\"btn-group pull-right\" style=\"margin-top: 15px;\">              
  <button class=\"btn btn-primary \"><span class=\"glyphicon glyphicon-cog\"></span> Selectioner une action</button>
  <button class=\"btn btn-primary dropdown-toggle\" data-toggle=\"dropdown\">
    <span class=\"caret\"></span>
  </button>
  <ul class=\"dropdown-menu\" role=\"menu\">
    <li><a href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("person_edit", array("id" => $this->getAttribute(($context["entity"] ?? $this->getContext($context, "entity")), "id", array()))), "html", null, true);
        echo "\"><span class=\"glyphicon glyphicon-edit\"></span> modifier</a></li>
    <li><a href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("antecedent_new", array("id" => $this->getAttribute(($context["entity"] ?? $this->getContext($context, "entity")), "id", array()))), "html", null, true);
        echo "\"><span class=\"glyphicon glyphicon-plus\"></span> Antécedent</a></li>
    <li><a href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("consultation_new", array("id" => $this->getAttribute(($context["entity"] ?? $this->getContext($context, "entity")), "id", array()))), "html", null, true);
        echo "\"><span class=\"glyphicon glyphicon-plus\"></span> Consultation générale</a></li>
    <li><a href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("consultation_new", array("id" => $this->getAttribute(($context["entity"] ?? $this->getContext($context, "entity")), "id", array()), "type" => 1)), "html", null, true);
        echo "\"><span class=\"glyphicon glyphicon-plus\"></span> Consultation specialisé</a></li>
    <li><a id=\"btnPrint\"><span class=\"glyphicon glyphicon-print\"></span> imprimer</a></li>
    <li><a href=\"#\" id=\"js-delete\"><span class=\"glyphicon glyphicon-trash\"></span> Supprimer</a></li>
  </ul>
</div>
<h3><span class=\"glyphicon glyphicon-user\"></span> ";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute(($context["entity"] ?? $this->getContext($context, "entity")), "fullName", array()), "html", null, true);
        echo "</h3>

<div class=\"row\">
<div class=\"col-md-4\">
    <div class=\"box\">
      <header>
          <h4><span class=\"glyphicon glyphicon-file\"></span> Patient identity</h4>
      </header>
        <ul class=\"list-group\">
          <li class=\"list-group-item\"><strong>Nom :</strong> ";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute(($context["entity"] ?? $this->getContext($context, "entity")), "familyname", array()), "html", null, true);
        echo "</li>
          <li class=\"list-group-item\"><strong>Preom :</strong>  ";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute(($context["entity"] ?? $this->getContext($context, "entity")), "firstname", array()), "html", null, true);
        echo " </li>
          <li class=\"list-group-item\"><strong>CIN :</strong> ";
        // line 31
        echo twig_escape_filter($this->env, $this->getAttribute(($context["entity"] ?? $this->getContext($context, "entity")), "cin", array()), "html", null, true);
        echo "</li>
          <li class=\"list-group-item\"><strong>CNE :</strong> ";
        // line 32
        echo twig_escape_filter($this->env, $this->getAttribute(($context["entity"] ?? $this->getContext($context, "entity")), "cne", array()), "html", null, true);
        echo "</li>
          <li class=\"list-group-item\"><strong>Sexe :</strong> ";
        // line 33
        echo twig_escape_filter($this->env, $this->getAttribute(($context["entity"] ?? $this->getContext($context, "entity")), "gender", array()), "html", null, true);
        echo "</li>
          <li class=\"list-group-item\"><strong>Date de naissance :</strong> ";
        // line 34
        if ($this->getAttribute(($context["entity"] ?? $this->getContext($context, "entity")), "birthday", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["entity"] ?? $this->getContext($context, "entity")), "birthday", array()), "d/m/Y"), "html", null, true);
        }
        echo "</li>
          <li class=\"list-group-item\"><strong>Lieu de naissance :</strong> ";
        // line 35
        echo twig_escape_filter($this->env, $this->getAttribute(($context["entity"] ?? $this->getContext($context, "entity")), "birthcity", array()), "html", null, true);
        echo "</li>
          <li class=\"list-group-item\"><strong>Résident :</strong> ";
        // line 36
        echo (($this->getAttribute(($context["entity"] ?? $this->getContext($context, "entity")), "resident", array())) ? ("Oui") : ("Non"));
        echo "</li>
        </ul>
    </div>
</div>
<div class=\"col-md-4\">
    <div class=\"box\">
      <header>
          <h4><span class=\"glyphicon glyphicon-pushpin\"></span> Informations générale</h4>
      </header>
      <ul class=\"list-group\">
          <li class=\"list-group-item\"><strong>Etablissement :</strong> ";
        // line 46
        echo twig_escape_filter($this->env, $this->getAttribute(($context["entity"] ?? $this->getContext($context, "entity")), "etablissement", array()), "html", null, true);
        echo "</li>
          <li class=\"list-group-item\"><strong>Université :</strong> ";
        // line 47
        echo twig_escape_filter($this->env, $this->getAttribute(($context["entity"] ?? $this->getContext($context, "entity")), "university", array()), "html", null, true);
        echo "</li>
          <li class=\"list-group-item\"><strong>Adresse :</strong> ";
        // line 48
        echo twig_escape_filter($this->env, $this->getAttribute(($context["entity"] ?? $this->getContext($context, "entity")), "address", array()), "html", null, true);
        echo "</li>
          <li class=\"list-group-item\"><strong>Province :</strong> ";
        // line 49
        echo twig_escape_filter($this->env, $this->getAttribute(($context["entity"] ?? $this->getContext($context, "entity")), "city", array()), "html", null, true);
        echo "</li>
          <li class=\"list-group-item\"><strong>Pay :</strong> ";
        // line 50
        echo twig_escape_filter($this->env, $this->getAttribute(($context["entity"] ?? $this->getContext($context, "entity")), "contry", array()), "html", null, true);
        echo "</li>
          <li class=\"list-group-item\"><strong>Tél :</strong> ";
        // line 51
        echo twig_escape_filter($this->env, $this->getAttribute(($context["entity"] ?? $this->getContext($context, "entity")), "gsm", array()), "html", null, true);
        echo "</li>
          <li class=\"list-group-item\"><strong>adresse email :</strong> <a href=\"mailto:";
        // line 52
        echo twig_escape_filter($this->env, $this->getAttribute(($context["entity"] ?? $this->getContext($context, "entity")), "email", array()), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["entity"] ?? $this->getContext($context, "entity")), "email", array()), "html", null, true);
        echo "</a></li>
          <li class=\"list-group-item\"><strong>type de couverture sociale :</strong> ";
        // line 53
        echo twig_escape_filter($this->env, $this->getAttribute(($context["entity"] ?? $this->getContext($context, "entity")), "cnsstype", array()), "html", null, true);
        echo "</li>
          <li class=\"list-group-item\"><strong>N° de couverture sociale :</strong> ";
        // line 54
        echo twig_escape_filter($this->env, $this->getAttribute(($context["entity"] ?? $this->getContext($context, "entity")), "cnss", array()), "html", null, true);
        echo "</li>
      </ul>
    </div>
</div>
<div class=\"col-md-4\">
    <div class=\"box\">
      <header>
          <h4><span class=\"glyphicon glyphicon-user\"></span> Tuteur</h4>
      </header>
      <ul class=\"list-group\">
          <li class=\"list-group-item\"><strong>Nom :</strong> ";
        // line 64
        echo twig_escape_filter($this->env, $this->getAttribute(($context["entity"] ?? $this->getContext($context, "entity")), "parentName", array()), "html", null, true);
        echo "</li>
          <li class=\"list-group-item\"><strong>Adresse :</strong> ";
        // line 65
        echo twig_escape_filter($this->env, $this->getAttribute(($context["entity"] ?? $this->getContext($context, "entity")), "parentAddress", array()), "html", null, true);
        echo "</li>
          <li class=\"list-group-item\"><strong>Gsm :</strong> ";
        // line 66
        echo twig_escape_filter($this->env, $this->getAttribute(($context["entity"] ?? $this->getContext($context, "entity")), "parentGsm", array()), "html", null, true);
        echo "</li>
          <li class=\"list-group-item\"><strong>Fixe :</strong> ";
        // line 67
        echo twig_escape_filter($this->env, $this->getAttribute(($context["entity"] ?? $this->getContext($context, "entity")), "parentFixe", array()), "html", null, true);
        echo "</li>
      </ul>
    </div>
    ";
        // line 70
        if ($this->getAttribute(($context["entity"] ?? $this->getContext($context, "entity")), "ishandicap", array())) {
            // line 71
            echo "    <div class=\"box\">
      <header>
          <h4><span class=\"glyphicon glyphicon-tag\"></span> Handicap</h4>
      </header>
      <ul class=\"list-group\">
          <li class=\"list-group-item\"><strong>Nature de l’handicap :</strong> ";
            // line 76
            echo twig_escape_filter($this->env, $this->getAttribute(($context["entity"] ?? $this->getContext($context, "entity")), "handicap", array()), "html", null, true);
            echo "</li>
          <li class=\"list-group-item\"><strong>Besoins spécifiques :</strong> ";
            // line 77
            echo nl2br(twig_escape_filter($this->env, $this->getAttribute(($context["entity"] ?? $this->getContext($context, "entity")), "needs", array()), "html", null, true));
            echo "</li>
      </ul>
    </div>
    ";
        }
        // line 81
        echo "</div>
<div class=\"col-md-12\">
      <div class=\"box\">
        <header>
            <h4><span class=\"glyphicon glyphicon-tag\"></span> Antécedents</h4>
        </header>
        <table class=\"table table-hover table-bordered\">
            <thead>
                <tr>
                    <th>type</th>
                    <th>allergies</th>
                    <th>autres</th>
                    <th>traitement</th>
                    <th>chirurgicaux</th>
                </tr>
            </thead>
            <tbody>
            ";
        // line 98
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["entity"] ?? $this->getContext($context, "entity")), "antecedents", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 99
            echo "              <tr>
                <td><a href=\"";
            // line 100
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("antecedent_edit", array("id" => $this->getAttribute($context["item"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "type", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 101
            echo nl2br(twig_escape_filter($this->env, $this->getAttribute($context["item"], "allergies", array()), "html", null, true));
            echo "</td>
                <td>";
            // line 102
            echo nl2br(twig_escape_filter($this->env, $this->getAttribute($context["item"], "autres", array()), "html", null, true));
            echo "</td>
                <td>";
            // line 103
            echo nl2br(twig_escape_filter($this->env, $this->getAttribute($context["item"], "traitement", array()), "html", null, true));
            echo "</td>
                <td>";
            // line 104
            echo nl2br(twig_escape_filter($this->env, $this->getAttribute($context["item"], "chirurgicaux", array()), "html", null, true));
            echo "</td>
              </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 107
        echo "            </tbody>
        </table>
    </div> 
</div>

<div class=\"col-md-12\">
      <div class=\"box\">
        <header>
            <h4><span class=\"glyphicon glyphicon-tag\"></span> Consultations</h4>
        </header>
        <table class=\"table table-hover table-bordered\">
            <thead>
                <tr>
                    <th>Motif</th>
                    <th>Date</th>
                    <th>Medecin</th>
                    <th>Type</th>
                    <th>Diagnostic</th>
                    <th>Traitement</th>
                </tr>
            </thead>
            <tbody>
            ";
        // line 129
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["entity"] ?? $this->getContext($context, "entity")), "consultations", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 130
            echo "              <tr>
                <td><a href=\"";
            // line 131
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("consultation_show", array("id" => $this->getAttribute($context["item"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "name", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 132
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["item"], "created", array()), "d/m/Y"), "html", null, true);
            echo "</td>
                <td><a href=\"";
            // line 133
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ben_show_user", array("id" => $this->getAttribute($this->getAttribute($context["item"], "user", array()), "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["item"], "user", array()), "fullname", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 134
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "type", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 135
            echo twig_escape_filter($this->env, twig_truncate_filter($this->env, $this->getAttribute($context["item"], "diagnosis", array()), 50), "html", null, true);
            echo "</td>
                <td>";
            // line 136
            echo twig_escape_filter($this->env, twig_truncate_filter($this->env, $this->getAttribute($context["item"], "treatment", array()), 50), "html", null, true);
            echo "</td>
              </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 139
        echo "            </tbody>
        </table>
    </div> 
</div>
</div>
<form id=\"deleteForm\" action=\"";
        // line 144
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("person_delete", array("id" => $this->getAttribute(($context["entity"] ?? $this->getContext($context, "entity")), "id", array()))), "html", null, true);
        echo "\" method=\"POST\">
    ";
        // line 145
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'widget');
        echo "
</form> 
";
    }

    // line 148
    public function block_javascripts($context, array $blocks = array())
    {
        // line 149
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
        return "BenDoctorsBundle:Person:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  349 => 149,  346 => 148,  339 => 145,  335 => 144,  328 => 139,  319 => 136,  315 => 135,  311 => 134,  305 => 133,  301 => 132,  295 => 131,  292 => 130,  288 => 129,  264 => 107,  255 => 104,  251 => 103,  247 => 102,  243 => 101,  237 => 100,  234 => 99,  230 => 98,  211 => 81,  204 => 77,  200 => 76,  193 => 71,  191 => 70,  185 => 67,  181 => 66,  177 => 65,  173 => 64,  160 => 54,  156 => 53,  150 => 52,  146 => 51,  142 => 50,  138 => 49,  134 => 48,  130 => 47,  126 => 46,  113 => 36,  109 => 35,  103 => 34,  99 => 33,  95 => 32,  91 => 31,  87 => 30,  83 => 29,  71 => 20,  63 => 15,  59 => 14,  55 => 13,  51 => 12,  43 => 6,  40 => 5,  33 => 3,  30 => 2,  11 => 1,);
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
<div class=\"btn-group pull-right\" style=\"margin-top: 15px;\">              
  <button class=\"btn btn-primary \"><span class=\"glyphicon glyphicon-cog\"></span> Selectioner une action</button>
  <button class=\"btn btn-primary dropdown-toggle\" data-toggle=\"dropdown\">
    <span class=\"caret\"></span>
  </button>
  <ul class=\"dropdown-menu\" role=\"menu\">
    <li><a href=\"{{ path('person_edit', { 'id': entity.id }) }}\"><span class=\"glyphicon glyphicon-edit\"></span> modifier</a></li>
    <li><a href=\"{{ path('antecedent_new', { 'id': entity.id }) }}\"><span class=\"glyphicon glyphicon-plus\"></span> Antécedent</a></li>
    <li><a href=\"{{ path('consultation_new', { 'id': entity.id }) }}\"><span class=\"glyphicon glyphicon-plus\"></span> Consultation générale</a></li>
    <li><a href=\"{{ path('consultation_new', { 'id': entity.id, 'type': 1 }) }}\"><span class=\"glyphicon glyphicon-plus\"></span> Consultation specialisé</a></li>
    <li><a id=\"btnPrint\"><span class=\"glyphicon glyphicon-print\"></span> imprimer</a></li>
    <li><a href=\"#\" id=\"js-delete\"><span class=\"glyphicon glyphicon-trash\"></span> Supprimer</a></li>
  </ul>
</div>
<h3><span class=\"glyphicon glyphicon-user\"></span> {{ entity.fullName }}</h3>

<div class=\"row\">
<div class=\"col-md-4\">
    <div class=\"box\">
      <header>
          <h4><span class=\"glyphicon glyphicon-file\"></span> Patient identity</h4>
      </header>
        <ul class=\"list-group\">
          <li class=\"list-group-item\"><strong>Nom :</strong> {{ entity.familyname }}</li>
          <li class=\"list-group-item\"><strong>Preom :</strong>  {{ entity.firstname }} </li>
          <li class=\"list-group-item\"><strong>CIN :</strong> {{ entity.cin }}</li>
          <li class=\"list-group-item\"><strong>CNE :</strong> {{ entity.cne }}</li>
          <li class=\"list-group-item\"><strong>Sexe :</strong> {{ entity.gender }}</li>
          <li class=\"list-group-item\"><strong>Date de naissance :</strong> {% if entity.birthday %}{{ entity.birthday|date('d/m/Y') }}{% endif %}</li>
          <li class=\"list-group-item\"><strong>Lieu de naissance :</strong> {{ entity.birthcity }}</li>
          <li class=\"list-group-item\"><strong>Résident :</strong> {{ entity.resident ? 'Oui' : 'Non' }}</li>
        </ul>
    </div>
</div>
<div class=\"col-md-4\">
    <div class=\"box\">
      <header>
          <h4><span class=\"glyphicon glyphicon-pushpin\"></span> Informations générale</h4>
      </header>
      <ul class=\"list-group\">
          <li class=\"list-group-item\"><strong>Etablissement :</strong> {{ entity.etablissement }}</li>
          <li class=\"list-group-item\"><strong>Université :</strong> {{ entity.university }}</li>
          <li class=\"list-group-item\"><strong>Adresse :</strong> {{ entity.address }}</li>
          <li class=\"list-group-item\"><strong>Province :</strong> {{ entity.city }}</li>
          <li class=\"list-group-item\"><strong>Pay :</strong> {{ entity.contry }}</li>
          <li class=\"list-group-item\"><strong>Tél :</strong> {{ entity.gsm }}</li>
          <li class=\"list-group-item\"><strong>adresse email :</strong> <a href=\"mailto:{{ entity.email }}\">{{ entity.email }}</a></li>
          <li class=\"list-group-item\"><strong>type de couverture sociale :</strong> {{ entity.cnsstype }}</li>
          <li class=\"list-group-item\"><strong>N° de couverture sociale :</strong> {{ entity.cnss }}</li>
      </ul>
    </div>
</div>
<div class=\"col-md-4\">
    <div class=\"box\">
      <header>
          <h4><span class=\"glyphicon glyphicon-user\"></span> Tuteur</h4>
      </header>
      <ul class=\"list-group\">
          <li class=\"list-group-item\"><strong>Nom :</strong> {{ entity.parentName }}</li>
          <li class=\"list-group-item\"><strong>Adresse :</strong> {{ entity.parentAddress }}</li>
          <li class=\"list-group-item\"><strong>Gsm :</strong> {{ entity.parentGsm }}</li>
          <li class=\"list-group-item\"><strong>Fixe :</strong> {{ entity.parentFixe }}</li>
      </ul>
    </div>
    {% if entity.ishandicap %}
    <div class=\"box\">
      <header>
          <h4><span class=\"glyphicon glyphicon-tag\"></span> Handicap</h4>
      </header>
      <ul class=\"list-group\">
          <li class=\"list-group-item\"><strong>Nature de l’handicap :</strong> {{ entity.handicap }}</li>
          <li class=\"list-group-item\"><strong>Besoins spécifiques :</strong> {{ entity.needs|nl2br }}</li>
      </ul>
    </div>
    {% endif %}
</div>
<div class=\"col-md-12\">
      <div class=\"box\">
        <header>
            <h4><span class=\"glyphicon glyphicon-tag\"></span> Antécedents</h4>
        </header>
        <table class=\"table table-hover table-bordered\">
            <thead>
                <tr>
                    <th>type</th>
                    <th>allergies</th>
                    <th>autres</th>
                    <th>traitement</th>
                    <th>chirurgicaux</th>
                </tr>
            </thead>
            <tbody>
            {% for item in entity.antecedents %}
              <tr>
                <td><a href=\"{{ path('antecedent_edit', { 'id': item.id }) }}\">{{ item.type }}</a></td>
                <td>{{ item.allergies|nl2br }}</td>
                <td>{{ item.autres|nl2br }}</td>
                <td>{{ item.traitement|nl2br }}</td>
                <td>{{ item.chirurgicaux|nl2br }}</td>
              </tr>
            {% endfor %}
            </tbody>
        </table>
    </div> 
</div>

<div class=\"col-md-12\">
      <div class=\"box\">
        <header>
            <h4><span class=\"glyphicon glyphicon-tag\"></span> Consultations</h4>
        </header>
        <table class=\"table table-hover table-bordered\">
            <thead>
                <tr>
                    <th>Motif</th>
                    <th>Date</th>
                    <th>Medecin</th>
                    <th>Type</th>
                    <th>Diagnostic</th>
                    <th>Traitement</th>
                </tr>
            </thead>
            <tbody>
            {% for item in entity.consultations %}
              <tr>
                <td><a href=\"{{ path('consultation_show', { 'id': item.id }) }}\">{{ item.name }}</a></td>
                <td>{{ item.created|date('d/m/Y') }}</td>
                <td><a href=\"{{ path('ben_show_user', { 'id': item.user.id }) }}\">{{ item.user.fullname }}</a></td>
                <td>{{ item.type }}</td>
                <td>{{ item.diagnosis|truncate(50) }}</td>
                <td>{{ item.treatment|truncate(50) }}</td>
              </tr>
            {% endfor %}
            </tbody>
        </table>
    </div> 
</div>
</div>
<form id=\"deleteForm\" action=\"{{ path('person_delete', { 'id': entity.id }) }}\" method=\"POST\">
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
    })(jQuery);
</script>
{% endblock %}
", "BenDoctorsBundle:Person:show.html.twig", "/home/pacifik/Desktop/Doctors-master/src/Ben/DoctorsBundle/Resources/views/Person/show.html.twig");
    }
}
