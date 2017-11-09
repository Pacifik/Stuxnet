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
  ";
        // line 7
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN")) {
            echo "          
    <button class=\"btn btn-primary \"><span class=\"glyphicon glyphicon-cog\"></span> Select action</button>
    <button class=\"btn btn-primary dropdown-toggle\" data-toggle=\"dropdown\">
      <span class=\"caret\"></span>
    </button>
    <ul class=\"dropdown-menu\" role=\"menu\">
      <li><a href=\"";
            // line 13
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("person_edit", array("id" => $this->getAttribute(($context["entity"] ?? $this->getContext($context, "entity")), "id", array()))), "html", null, true);
            echo "\"><span class=\"glyphicon glyphicon-edit\"></span> Edit</a></li>
      <!--<li><a href=\"";
            // line 14
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("antecedent_new", array("id" => $this->getAttribute(($context["entity"] ?? $this->getContext($context, "entity")), "id", array()))), "html", null, true);
            echo "\"><span class=\"glyphicon glyphicon-plus\"></span> Antécedent</a></li>-->
      <li><a href=\"";
            // line 15
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("consultation_new", array("id" => $this->getAttribute(($context["entity"] ?? $this->getContext($context, "entity")), "id", array()))), "html", null, true);
            echo "\"><span class=\"glyphicon glyphicon-plus\"></span> General consultation </a></li>
      <li><a href=\"";
            // line 16
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("consultation_new", array("id" => $this->getAttribute(($context["entity"] ?? $this->getContext($context, "entity")), "id", array()), "type" => 1)), "html", null, true);
            echo "\"><span class=\"glyphicon glyphicon-plus\"></span> Specialized consultation </a></li>
      <li><a id=\"btnPrint\"><span class=\"glyphicon glyphicon-print\"></span> Print</a></li>
      <li><a href=\"#\" id=\"js-delete\"><span class=\"glyphicon glyphicon-trash\"></span> Delete</a></li>
    </ul>
  ";
        }
        // line 21
        echo "</div>
<h3><span class=\"glyphicon glyphicon-user\"></span> ";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute(($context["entity"] ?? $this->getContext($context, "entity")), "fullName", array()), "html", null, true);
        echo "</h3>

<div class=\"row\">
<div class=\"col-md-4\">
    <div class=\"box\">
      <header>
          <h4><span class=\"glyphicon glyphicon-file\"></span> Patient identity</h4>
      </header>
        <ul class=\"list-group\">

          <li class=\"list-group-item\"><strong>Firstname :</strong>  ";
        // line 32
        echo twig_escape_filter($this->env, $this->getAttribute(($context["entity"] ?? $this->getContext($context, "entity")), "firstname", array()), "html", null, true);
        echo " </li>
          <li class=\"list-group-item\"><strong>Surname :</strong> ";
        // line 33
        echo twig_escape_filter($this->env, $this->getAttribute(($context["entity"] ?? $this->getContext($context, "entity")), "familyname", array()), "html", null, true);
        echo "</li>
          <li class=\"list-group-item\"><strong>ID :</strong> ";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute(($context["entity"] ?? $this->getContext($context, "entity")), "cin", array()), "html", null, true);
        echo "</li>
          <li class=\"list-group-item\"><strong>FID :</strong> ";
        // line 35
        echo twig_escape_filter($this->env, $this->getAttribute(($context["entity"] ?? $this->getContext($context, "entity")), "cne", array()), "html", null, true);
        echo "</li>
          <li class=\"list-group-item\"><strong>Sex :</strong> ";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute(($context["entity"] ?? $this->getContext($context, "entity")), "gender", array()), "html", null, true);
        echo "</li>
          <li class=\"list-group-item\"><strong>Date of birth :</strong> ";
        // line 37
        if ($this->getAttribute(($context["entity"] ?? $this->getContext($context, "entity")), "birthday", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["entity"] ?? $this->getContext($context, "entity")), "birthday", array()), "d/m/Y"), "html", null, true);
        }
        echo "</li>
          <li class=\"list-group-item\"><strong>Place of birth :</strong> ";
        // line 38
        echo twig_escape_filter($this->env, $this->getAttribute(($context["entity"] ?? $this->getContext($context, "entity")), "birthcity", array()), "html", null, true);
        echo "</li>
          <li class=\"list-group-item\"><strong>Resident :</strong> ";
        // line 39
        echo (($this->getAttribute(($context["entity"] ?? $this->getContext($context, "entity")), "resident", array())) ? ("Yes") : ("No"));
        echo "</li>
        </ul>
    </div>
</div>
<div class=\"col-md-4\">
    <div class=\"box\">
      <header>
          <h4><span class=\"glyphicon glyphicon-pushpin\"></span> General informations</h4>
      </header>
      <ul class=\"list-group\">
          <li class=\"list-group-item\"><strong>High school :</strong> ";
        // line 49
        echo twig_escape_filter($this->env, $this->getAttribute(($context["entity"] ?? $this->getContext($context, "entity")), "etablissement", array()), "html", null, true);
        echo "</li>
          <li class=\"list-group-item\"><strong>University :</strong> ";
        // line 50
        echo twig_escape_filter($this->env, $this->getAttribute(($context["entity"] ?? $this->getContext($context, "entity")), "university", array()), "html", null, true);
        echo "</li>
          <li class=\"list-group-item\"><strong>Adress :</strong> ";
        // line 51
        echo twig_escape_filter($this->env, $this->getAttribute(($context["entity"] ?? $this->getContext($context, "entity")), "address", array()), "html", null, true);
        echo "</li>
          <li class=\"list-group-item\"><strong>City :</strong> ";
        // line 52
        echo twig_escape_filter($this->env, $this->getAttribute(($context["entity"] ?? $this->getContext($context, "entity")), "city", array()), "html", null, true);
        echo "</li>
          <li class=\"list-group-item\"><strong>Nationality :</strong> ";
        // line 53
        echo twig_escape_filter($this->env, $this->getAttribute(($context["entity"] ?? $this->getContext($context, "entity")), "contry", array()), "html", null, true);
        echo "</li>
          <li class=\"list-group-item\"><strong>Cell :</strong> ";
        // line 54
        echo twig_escape_filter($this->env, $this->getAttribute(($context["entity"] ?? $this->getContext($context, "entity")), "gsm", array()), "html", null, true);
        echo "</li>
          <li class=\"list-group-item\"><strong>E-mail :</strong> <a href=\"mailto:";
        // line 55
        echo twig_escape_filter($this->env, $this->getAttribute(($context["entity"] ?? $this->getContext($context, "entity")), "email", array()), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["entity"] ?? $this->getContext($context, "entity")), "email", array()), "html", null, true);
        echo "</a></li>
          <li class=\"list-group-item\"><strong>Medical insurance :</strong> ";
        // line 56
        echo twig_escape_filter($this->env, $this->getAttribute(($context["entity"] ?? $this->getContext($context, "entity")), "cnsstype", array()), "html", null, true);
        echo "</li>
          <li class=\"list-group-item\"><strong>CNNS :</strong> ";
        // line 57
        echo twig_escape_filter($this->env, $this->getAttribute(($context["entity"] ?? $this->getContext($context, "entity")), "cnss", array()), "html", null, true);
        echo "</li>
      </ul>
    </div>
</div>
<div class=\"col-md-4\">
    <div class=\"box\">
      <header>
          <h4><span class=\"glyphicon glyphicon-user\"></span> Kin</h4>
      </header>
      <ul class=\"list-group\">
          <li class=\"list-group-item\"><strong>Nom :</strong> ";
        // line 67
        echo twig_escape_filter($this->env, $this->getAttribute(($context["entity"] ?? $this->getContext($context, "entity")), "parentName", array()), "html", null, true);
        echo "</li>
          <li class=\"list-group-item\"><strong>Adress :</strong> ";
        // line 68
        echo twig_escape_filter($this->env, $this->getAttribute(($context["entity"] ?? $this->getContext($context, "entity")), "parentAddress", array()), "html", null, true);
        echo "</li>
          <li class=\"list-group-item\"><strong>Office number :</strong> ";
        // line 69
        echo twig_escape_filter($this->env, $this->getAttribute(($context["entity"] ?? $this->getContext($context, "entity")), "parentGsm", array()), "html", null, true);
        echo "</li>
          <li class=\"list-group-item\"><strong>Home number :</strong> ";
        // line 70
        echo twig_escape_filter($this->env, $this->getAttribute(($context["entity"] ?? $this->getContext($context, "entity")), "parentFixe", array()), "html", null, true);
        echo "</li>
      </ul>
    </div>
    ";
        // line 73
        if ($this->getAttribute(($context["entity"] ?? $this->getContext($context, "entity")), "ishandicap", array())) {
            // line 74
            echo "    <div class=\"box\">
      <header>
          <h4><span class=\"glyphicon glyphicon-tag\"></span> Handicap</h4>
      </header>
      <ul class=\"list-group\">
          <li class=\"list-group-item\"><strong>Nature of disability :</strong> ";
            // line 79
            echo twig_escape_filter($this->env, $this->getAttribute(($context["entity"] ?? $this->getContext($context, "entity")), "handicap", array()), "html", null, true);
            echo "</li>
          <li class=\"list-group-item\"><strong>Needs :</strong> ";
            // line 80
            echo nl2br(twig_escape_filter($this->env, $this->getAttribute(($context["entity"] ?? $this->getContext($context, "entity")), "needs", array()), "html", null, true));
            echo "</li>
      </ul>
    </div>
    ";
        }
        // line 84
        echo "</div>
<!--<div class=\"col-md-12\">
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
        // line 101
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["entity"] ?? $this->getContext($context, "entity")), "antecedents", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 102
            echo "              <tr>
                <td><a href=\"";
            // line 103
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("antecedent_edit", array("id" => $this->getAttribute($context["item"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "type", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 104
            echo nl2br(twig_escape_filter($this->env, $this->getAttribute($context["item"], "allergies", array()), "html", null, true));
            echo "</td>
                <td>";
            // line 105
            echo nl2br(twig_escape_filter($this->env, $this->getAttribute($context["item"], "autres", array()), "html", null, true));
            echo "</td>
                <td>";
            // line 106
            echo nl2br(twig_escape_filter($this->env, $this->getAttribute($context["item"], "traitement", array()), "html", null, true));
            echo "</td>
                <td>";
            // line 107
            echo nl2br(twig_escape_filter($this->env, $this->getAttribute($context["item"], "chirurgicaux", array()), "html", null, true));
            echo "</td>
              </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 110
        echo "            </tbody>
        </table>
    </div> 
</div>-->

<div class=\"col-md-12\">
      <div class=\"box\">
        <header>
            <h4><span class=\"glyphicon glyphicon-tag\"></span> Consultations</h4>
        </header>
        <table class=\"table table-hover table-bordered\">
            <thead>
                <tr>
                    <th>Cause</th>
                    <th>Date</th>
                    <th>Doctor</th>
                    <th>Type</th>
                    <th>Diagnostic</th>
                    <th>Treatment</th>
                </tr>
            </thead>
            <tbody>
            ";
        // line 132
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["entity"] ?? $this->getContext($context, "entity")), "consultations", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 133
            echo "              <tr>
                <td><a href=\"";
            // line 134
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("consultation_show", array("id" => $this->getAttribute($context["item"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "name", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 135
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["item"], "created", array()), "d/m/Y"), "html", null, true);
            echo "</td>
                <td><a href=\"";
            // line 136
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ben_show_user", array("id" => $this->getAttribute($this->getAttribute($context["item"], "user", array()), "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["item"], "user", array()), "fullname", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 137
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "type", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 138
            echo twig_escape_filter($this->env, twig_truncate_filter($this->env, $this->getAttribute($context["item"], "diagnosis", array()), 50), "html", null, true);
            echo "</td>
                <td>";
            // line 139
            echo twig_escape_filter($this->env, twig_truncate_filter($this->env, $this->getAttribute($context["item"], "treatment", array()), 50), "html", null, true);
            echo "</td>
              </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 142
        echo "            </tbody>
        </table>
    </div> 
</div>
</div>
<form id=\"deleteForm\" action=\"";
        // line 147
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("person_delete", array("id" => $this->getAttribute(($context["entity"] ?? $this->getContext($context, "entity")), "id", array()))), "html", null, true);
        echo "\" method=\"POST\">
    ";
        // line 148
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'widget');
        echo "
</form> 
";
    }

    // line 151
    public function block_javascripts($context, array $blocks = array())
    {
        // line 152
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
        return array (  357 => 152,  354 => 151,  347 => 148,  343 => 147,  336 => 142,  327 => 139,  323 => 138,  319 => 137,  313 => 136,  309 => 135,  303 => 134,  300 => 133,  296 => 132,  272 => 110,  263 => 107,  259 => 106,  255 => 105,  251 => 104,  245 => 103,  242 => 102,  238 => 101,  219 => 84,  212 => 80,  208 => 79,  201 => 74,  199 => 73,  193 => 70,  189 => 69,  185 => 68,  181 => 67,  168 => 57,  164 => 56,  158 => 55,  154 => 54,  150 => 53,  146 => 52,  142 => 51,  138 => 50,  134 => 49,  121 => 39,  117 => 38,  111 => 37,  107 => 36,  103 => 35,  99 => 34,  95 => 33,  91 => 32,  78 => 22,  75 => 21,  67 => 16,  63 => 15,  59 => 14,  55 => 13,  46 => 7,  43 => 6,  40 => 5,  33 => 3,  30 => 2,  11 => 1,);
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
  {% if is_granted(\"ROLE_ADMIN\") %}          
    <button class=\"btn btn-primary \"><span class=\"glyphicon glyphicon-cog\"></span> Select action</button>
    <button class=\"btn btn-primary dropdown-toggle\" data-toggle=\"dropdown\">
      <span class=\"caret\"></span>
    </button>
    <ul class=\"dropdown-menu\" role=\"menu\">
      <li><a href=\"{{ path('person_edit', { 'id': entity.id }) }}\"><span class=\"glyphicon glyphicon-edit\"></span> Edit</a></li>
      <!--<li><a href=\"{{ path('antecedent_new', { 'id': entity.id }) }}\"><span class=\"glyphicon glyphicon-plus\"></span> Antécedent</a></li>-->
      <li><a href=\"{{ path('consultation_new', { 'id': entity.id }) }}\"><span class=\"glyphicon glyphicon-plus\"></span> General consultation </a></li>
      <li><a href=\"{{ path('consultation_new', { 'id': entity.id, 'type': 1 }) }}\"><span class=\"glyphicon glyphicon-plus\"></span> Specialized consultation </a></li>
      <li><a id=\"btnPrint\"><span class=\"glyphicon glyphicon-print\"></span> Print</a></li>
      <li><a href=\"#\" id=\"js-delete\"><span class=\"glyphicon glyphicon-trash\"></span> Delete</a></li>
    </ul>
  {% endif %}
</div>
<h3><span class=\"glyphicon glyphicon-user\"></span> {{ entity.fullName }}</h3>

<div class=\"row\">
<div class=\"col-md-4\">
    <div class=\"box\">
      <header>
          <h4><span class=\"glyphicon glyphicon-file\"></span> Patient identity</h4>
      </header>
        <ul class=\"list-group\">

          <li class=\"list-group-item\"><strong>Firstname :</strong>  {{ entity.firstname }} </li>
          <li class=\"list-group-item\"><strong>Surname :</strong> {{ entity.familyname }}</li>
          <li class=\"list-group-item\"><strong>ID :</strong> {{ entity.cin }}</li>
          <li class=\"list-group-item\"><strong>FID :</strong> {{ entity.cne }}</li>
          <li class=\"list-group-item\"><strong>Sex :</strong> {{ entity.gender }}</li>
          <li class=\"list-group-item\"><strong>Date of birth :</strong> {% if entity.birthday %}{{ entity.birthday|date('d/m/Y') }}{% endif %}</li>
          <li class=\"list-group-item\"><strong>Place of birth :</strong> {{ entity.birthcity }}</li>
          <li class=\"list-group-item\"><strong>Resident :</strong> {{ entity.resident ? 'Yes' : 'No' }}</li>
        </ul>
    </div>
</div>
<div class=\"col-md-4\">
    <div class=\"box\">
      <header>
          <h4><span class=\"glyphicon glyphicon-pushpin\"></span> General informations</h4>
      </header>
      <ul class=\"list-group\">
          <li class=\"list-group-item\"><strong>High school :</strong> {{ entity.etablissement }}</li>
          <li class=\"list-group-item\"><strong>University :</strong> {{ entity.university }}</li>
          <li class=\"list-group-item\"><strong>Adress :</strong> {{ entity.address }}</li>
          <li class=\"list-group-item\"><strong>City :</strong> {{ entity.city }}</li>
          <li class=\"list-group-item\"><strong>Nationality :</strong> {{ entity.contry }}</li>
          <li class=\"list-group-item\"><strong>Cell :</strong> {{ entity.gsm }}</li>
          <li class=\"list-group-item\"><strong>E-mail :</strong> <a href=\"mailto:{{ entity.email }}\">{{ entity.email }}</a></li>
          <li class=\"list-group-item\"><strong>Medical insurance :</strong> {{ entity.cnsstype }}</li>
          <li class=\"list-group-item\"><strong>CNNS :</strong> {{ entity.cnss }}</li>
      </ul>
    </div>
</div>
<div class=\"col-md-4\">
    <div class=\"box\">
      <header>
          <h4><span class=\"glyphicon glyphicon-user\"></span> Kin</h4>
      </header>
      <ul class=\"list-group\">
          <li class=\"list-group-item\"><strong>Nom :</strong> {{ entity.parentName }}</li>
          <li class=\"list-group-item\"><strong>Adress :</strong> {{ entity.parentAddress }}</li>
          <li class=\"list-group-item\"><strong>Office number :</strong> {{ entity.parentGsm }}</li>
          <li class=\"list-group-item\"><strong>Home number :</strong> {{ entity.parentFixe }}</li>
      </ul>
    </div>
    {% if entity.ishandicap %}
    <div class=\"box\">
      <header>
          <h4><span class=\"glyphicon glyphicon-tag\"></span> Handicap</h4>
      </header>
      <ul class=\"list-group\">
          <li class=\"list-group-item\"><strong>Nature of disability :</strong> {{ entity.handicap }}</li>
          <li class=\"list-group-item\"><strong>Needs :</strong> {{ entity.needs|nl2br }}</li>
      </ul>
    </div>
    {% endif %}
</div>
<!--<div class=\"col-md-12\">
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
</div>-->

<div class=\"col-md-12\">
      <div class=\"box\">
        <header>
            <h4><span class=\"glyphicon glyphicon-tag\"></span> Consultations</h4>
        </header>
        <table class=\"table table-hover table-bordered\">
            <thead>
                <tr>
                    <th>Cause</th>
                    <th>Date</th>
                    <th>Doctor</th>
                    <th>Type</th>
                    <th>Diagnostic</th>
                    <th>Treatment</th>
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
