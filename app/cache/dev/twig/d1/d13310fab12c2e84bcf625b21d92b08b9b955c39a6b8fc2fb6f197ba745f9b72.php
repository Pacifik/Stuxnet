<?php

/* BenDoctorsBundle:Consultation:show.html.twig */
class __TwigTemplate_8c174e64caede125940bb684aa037103ffd7c323ab558de26f9b04f281e11289 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("BenDoctorsBundle::layout.html.twig", "BenDoctorsBundle:Consultation:show.html.twig", 1);
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
        echo "<h3><span class=\"glyphicon glyphicon-tag\"></span> ";
        echo (($this->getAttribute(($context["entity"] ?? $this->getContext($context, "entity")), "isSpecial", array())) ? ("Orientation vers une consultation spécialisée") : ("Consultation médicale générale "));
        echo "</h3>
<div id=\"mycontainer\" class=\"row\">
    <div class=\"col-md-10\">    
        <table class=\"table table-striped table-hover table-bordered\">
            <tbody>
                ";
        // line 11
        if ($this->getAttribute(($context["entity"] ?? $this->getContext($context, "entity")), "isSpecial", array())) {
            // line 12
            echo "                <tr>
                    <th>Infrastructure sanitaire de reference</th>
                    <td>";
            // line 14
            echo twig_escape_filter($this->env, $this->getAttribute(($context["entity"] ?? $this->getContext($context, "entity")), "infrastructure", array()), "html", null, true);
            echo "</td>
                </tr>
                <tr>
                    <th>Specialité</th>
                    <td>";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute(($context["entity"] ?? $this->getContext($context, "entity")), "name", array()), "html", null, true);
            echo "</td>
                </tr>
                ";
        } else {
            // line 21
            echo "                <tr>
                    <th>Motif</th>
                    <td>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute(($context["entity"] ?? $this->getContext($context, "entity")), "name", array()), "html", null, true);
            echo "</td>
                </tr>
                ";
        }
        // line 26
        echo "                <tr>
                    <th>Patient</th>
                    <td><a href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("person_show", array("id" => $this->getAttribute($this->getAttribute(($context["entity"] ?? $this->getContext($context, "entity")), "person", array()), "id", array()))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["entity"] ?? $this->getContext($context, "entity")), "person", array()), "fullname", array()), "html", null, true);
        echo "</a></td>
                </tr>
                <tr>
                    <th>Medecin</th>
                    <td>";
        // line 32
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["entity"] ?? $this->getContext($context, "entity")), "user", array()), "fullname", array()), "html", null, true);
        echo "</td>
                </tr>
                <tr>
                    <th>Type de consultation</th>
                    <td>";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute(($context["entity"] ?? $this->getContext($context, "entity")), "type", array()), "html", null, true);
        echo "</td>
                </tr>
                <tr>
                    <th>Date de consultation</th>
                    <td>";
        // line 40
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["entity"] ?? $this->getContext($context, "entity")), "created", array()), "m/d/Y"), "html", null, true);
        echo "</td>
                </tr>
                <tr>
                    <th>Diagnostic</th>
                    <td>
                    <ul>
                    ";
        // line 46
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_split_filter($this->env, $this->getAttribute(($context["entity"] ?? $this->getContext($context, "entity")), "diagnosis", array()), ","));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 47
            echo "                        <li>";
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "</li>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
        echo "                    </ul>
                    </td>
                </tr>
                ";
        // line 52
        if ( !$this->getAttribute(($context["entity"] ?? $this->getContext($context, "entity")), "isSpecial", array())) {
            // line 53
            echo "                <tr>
                    <th>Décision prise</th>
                    <td>";
            // line 55
            echo nl2br(twig_escape_filter($this->env, $this->getAttribute(($context["entity"] ?? $this->getContext($context, "entity")), "decision", array()), "html", null, true));
            echo "</td>
                </tr>
                <tr>
                    <th>Maladie chronique</th>
                    <td>";
            // line 59
            echo (($this->getAttribute(($context["entity"] ?? $this->getContext($context, "entity")), "chronic", array())) ? ("Oui") : ("Non"));
            echo "</td>
                </tr>
                ";
        }
        // line 62
        echo "                <tr>
                    <th>Traitement</th>
                    <td>
                        <button class=\"btn btn-sm btn-default pull-right print-only-this\"><span class=\"glyphicon glyphicon-print\"></span></button>
                        <p>";
        // line 66
        echo nl2br(twig_escape_filter($this->env, $this->getAttribute(($context["entity"] ?? $this->getContext($context, "entity")), "treatment", array()), "html", null, true));
        echo "</p>
                    </td>
                </tr>
            </tbody>
        </table>
        <div class=\"row\">
        ";
        // line 72
        if ( !$this->getAttribute(($context["entity"] ?? $this->getContext($context, "entity")), "isSpecial", array())) {
            // line 73
            echo "            <div class=\"col-md-7\">
            <h3>Liste des exameins effectuées 
                <span class=\"btn-group pull-right\">       
                  <button class=\"btn btn-info btn-sm dropdown-toggle\" data-toggle=\"dropdown\">
                    <span class=\"glyphicon glyphicon-plus\"></span>
                  </button>
                  <ul class=\"dropdown-menu\" role=\"menu\">
                    <li><a href=\"";
            // line 80
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("test_new", array("id" => $this->getAttribute(($context["entity"] ?? $this->getContext($context, "entity")), "id", array()))), "html", null, true);
            echo "\"> Ajouter un examen </a></li>
                    <li><a href=\"";
            // line 81
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("test_new", array("id" => $this->getAttribute(($context["entity"] ?? $this->getContext($context, "entity")), "id", array()), "type" => 1)), "html", null, true);
            echo "\"> Ajouter un examen général</a></li>
                  </ul>
                </span>
            </h3>
            
            ";
            // line 86
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["entity"], "tests", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
                // line 87
                echo "                <table class=\"table table-striped table-hover table-bordered\">
                <thead>
                    <tr>
                        <th colspan=\"2\" class=\"text-center\"><a href=\"";
                // line 90
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("test_edit", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "type", array()), "html", null, true);
                echo "</a></th>
                    </tr>
                </thead>
                <tbody>
                    ";
                // line 94
                if ($this->getAttribute($context["entity"], "isGeneral", array())) {
                    // line 95
                    echo "                    <tr>
                        <th style=\"width: 150px;\">Taille</th>
                        <td>";
                    // line 97
                    echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "taille", array()), "html", null, true);
                    echo "</td>
                    </tr>
                    <tr>
                        <th>Poids</th>
                        <td>";
                    // line 101
                    echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "poids", array()), "html", null, true);
                    echo "</td>
                    </tr>
                    <tr>
                        <th>TA</th>
                        <td>";
                    // line 105
                    echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "ta", array()), "html", null, true);
                    echo "</td>
                    </tr>
                    <tr>
                        <th>Acuité visuelle - OD</th>
                        <td>";
                    // line 109
                    echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "od", array()), "html", null, true);
                    echo "</td>
                    </tr>
                    <tr>
                        <th>Acuité visuelle - OG</th>
                        <td>";
                    // line 113
                    echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "og", array()), "html", null, true);
                    echo "</td>
                    </tr>
                    <tr>
                        <th>Trouble visuel</th>
                        <td>";
                    // line 117
                    echo twig_escape_filter($this->env, (($this->getAttribute($context["entity"], "hasvisualissue", array())) ? ($this->getAttribute($context["entity"], "fixedvisualissue", array())) : ("Non")), "html", null, true);
                    echo "</td>
                    </tr>
                    ";
                } else {
                    // line 120
                    echo "                    <tr>
                        <th>Demande</th>
                        <td>
                            <button class=\"btn btn-sm btn-default pull-right print-only-this\"><span class=\"glyphicon glyphicon-print\"></span></button>
                            <p>";
                    // line 124
                    echo nl2br(twig_escape_filter($this->env, $this->getAttribute($context["entity"], "request", array()), "html", null, true));
                    echo "</p>
                        </td>
                    </tr>
                    <tr>
                        <th>Resultats</th>
                        <td>
                            <button class=\"btn btn-sm btn-default pull-right print-only-this\"><span class=\"glyphicon glyphicon-print\"></span></button>
                            <p>";
                    // line 131
                    echo nl2br(twig_escape_filter($this->env, $this->getAttribute($context["entity"], "result", array()), "html", null, true));
                    echo "</p>
                        </td>
                    </tr>
                    ";
                }
                // line 135
                echo "                </tbody>
                </table>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 138
            echo "            </div>
        ";
        }
        // line 140
        echo "            <div class=\"col-md-5\">
                <h3>Médicaments délivrées <a class=\"btn btn-info btn-sm pull-right\" href=\"";
        // line 141
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("consultation_edit", array("id" => $this->getAttribute(($context["entity"] ?? $this->getContext($context, "entity")), "id", array()))), "html", null, true);
        echo "\"> <span class=\"glyphicon glyphicon-plus\"></span></a></h3>
                
                <table class=\"table table-striped table-hover table-bordered\">
                    <tr>
                        <th>Médicament</th>
                        <th>Nombre d'unités</th>
                    </tr>
                    ";
        // line 148
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["entity"] ?? $this->getContext($context, "entity")), "consultationmeds", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 149
            echo "                    <tr>
                        <td>";
            // line 150
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["item"], "meds", array()), "name", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 151
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "count", array()), "html", null, true);
            echo "</td>
                    </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 154
        echo "                </table>
            </div>
        </div>
    </div>
    <div class=\"col-md-2\">
        <form id=\"deleteForm\" action=\"";
        // line 159
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("consultation_delete", array("id" => $this->getAttribute(($context["entity"] ?? $this->getContext($context, "entity")), "id", array()))), "html", null, true);
        echo "\" method=\"DELETE\">
            <a class=\"btn btn-primary btn-block\" href=\"";
        // line 160
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("consultation");
        echo "\">Vers la liste</a>
            <a class=\"btn btn-info btn-block\" href=\"";
        // line 161
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("consultation_edit", array("id" => $this->getAttribute(($context["entity"] ?? $this->getContext($context, "entity")), "id", array()))), "html", null, true);
        echo "\">Mettre à jour</a>
            <a class=\"btn btn-info btn-block\" id=\"btnPrint\"><span class=\"glyphicon glyphicon-print\"></span> Imprimer</a>
            <hr>
            <button class=\"btn btn-danger btn-block\" type=\"submit\">Supprimer</button>
            ";
        // line 165
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'widget');
        echo "
        </form> 
    </div>
</div>
<div id=\"printzone\" class=\"visible-print\"></div>
";
    }

    // line 172
    public function block_javascripts($context, array $blocks = array())
    {
        // line 173
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
<script> 
    (function(\$) {
        var mycontainer = \$('#mycontainer'),
            printOnly = mycontainer.find('.print-only-this'),
            printzone = \$('#printzone');
        printOnly.on('click', function(){
            mycontainer.addClass('hidden-print');
            printzone.html(\$(this).next().html());
            window.print();
            printzone.html('');
        });
    })(jQuery);
</script>
";
    }

    public function getTemplateName()
    {
        return "BenDoctorsBundle:Consultation:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  360 => 173,  357 => 172,  347 => 165,  340 => 161,  336 => 160,  332 => 159,  325 => 154,  316 => 151,  312 => 150,  309 => 149,  305 => 148,  295 => 141,  292 => 140,  288 => 138,  280 => 135,  273 => 131,  263 => 124,  257 => 120,  251 => 117,  244 => 113,  237 => 109,  230 => 105,  223 => 101,  216 => 97,  212 => 95,  210 => 94,  201 => 90,  196 => 87,  192 => 86,  184 => 81,  180 => 80,  171 => 73,  169 => 72,  160 => 66,  154 => 62,  148 => 59,  141 => 55,  137 => 53,  135 => 52,  130 => 49,  121 => 47,  117 => 46,  108 => 40,  101 => 36,  94 => 32,  85 => 28,  81 => 26,  75 => 23,  71 => 21,  65 => 18,  58 => 14,  54 => 12,  52 => 11,  43 => 6,  40 => 5,  33 => 3,  30 => 2,  11 => 1,);
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
{% block body -%}
<h3><span class=\"glyphicon glyphicon-tag\"></span> {{ entity.isSpecial ? 'Orientation vers une consultation spécialisée' : 'Consultation médicale générale '}}</h3>
<div id=\"mycontainer\" class=\"row\">
    <div class=\"col-md-10\">    
        <table class=\"table table-striped table-hover table-bordered\">
            <tbody>
                {% if entity.isSpecial %}
                <tr>
                    <th>Infrastructure sanitaire de reference</th>
                    <td>{{ entity.infrastructure }}</td>
                </tr>
                <tr>
                    <th>Specialité</th>
                    <td>{{ entity.name }}</td>
                </tr>
                {% else %}
                <tr>
                    <th>Motif</th>
                    <td>{{ entity.name }}</td>
                </tr>
                {% endif %}
                <tr>
                    <th>Patient</th>
                    <td><a href=\"{{ path('person_show', { 'id': entity.person.id }) }}\">{{ entity.person.fullname }}</a></td>
                </tr>
                <tr>
                    <th>Medecin</th>
                    <td>{{ entity.user.fullname }}</td>
                </tr>
                <tr>
                    <th>Type de consultation</th>
                    <td>{{ entity.type }}</td>
                </tr>
                <tr>
                    <th>Date de consultation</th>
                    <td>{{ entity.created|date('m/d/Y') }}</td>
                </tr>
                <tr>
                    <th>Diagnostic</th>
                    <td>
                    <ul>
                    {% for item in entity.diagnosis|split(',') %}
                        <li>{{ item }}</li>
                    {% endfor %}
                    </ul>
                    </td>
                </tr>
                {% if not entity.isSpecial %}
                <tr>
                    <th>Décision prise</th>
                    <td>{{ entity.decision|nl2br }}</td>
                </tr>
                <tr>
                    <th>Maladie chronique</th>
                    <td>{{ entity.chronic ? 'Oui' : 'Non' }}</td>
                </tr>
                {% endif %}
                <tr>
                    <th>Traitement</th>
                    <td>
                        <button class=\"btn btn-sm btn-default pull-right print-only-this\"><span class=\"glyphicon glyphicon-print\"></span></button>
                        <p>{{ entity.treatment|nl2br }}</p>
                    </td>
                </tr>
            </tbody>
        </table>
        <div class=\"row\">
        {% if not entity.isSpecial %}
            <div class=\"col-md-7\">
            <h3>Liste des exameins effectuées 
                <span class=\"btn-group pull-right\">       
                  <button class=\"btn btn-info btn-sm dropdown-toggle\" data-toggle=\"dropdown\">
                    <span class=\"glyphicon glyphicon-plus\"></span>
                  </button>
                  <ul class=\"dropdown-menu\" role=\"menu\">
                    <li><a href=\"{{ path('test_new', { 'id': entity.id }) }}\"> Ajouter un examen </a></li>
                    <li><a href=\"{{ path('test_new', { 'id': entity.id, 'type': 1 }) }}\"> Ajouter un examen général</a></li>
                  </ul>
                </span>
            </h3>
            
            {% for entity in entity.tests %}
                <table class=\"table table-striped table-hover table-bordered\">
                <thead>
                    <tr>
                        <th colspan=\"2\" class=\"text-center\"><a href=\"{{ path('test_edit', { 'id': entity.id }) }}\">{{ entity.type }}</a></th>
                    </tr>
                </thead>
                <tbody>
                    {% if entity.isGeneral %}
                    <tr>
                        <th style=\"width: 150px;\">Taille</th>
                        <td>{{ entity.taille }}</td>
                    </tr>
                    <tr>
                        <th>Poids</th>
                        <td>{{ entity.poids }}</td>
                    </tr>
                    <tr>
                        <th>TA</th>
                        <td>{{ entity.ta }}</td>
                    </tr>
                    <tr>
                        <th>Acuité visuelle - OD</th>
                        <td>{{ entity.od }}</td>
                    </tr>
                    <tr>
                        <th>Acuité visuelle - OG</th>
                        <td>{{ entity.og }}</td>
                    </tr>
                    <tr>
                        <th>Trouble visuel</th>
                        <td>{{ entity.hasvisualissue ? entity.fixedvisualissue : 'Non'}}</td>
                    </tr>
                    {% else %}
                    <tr>
                        <th>Demande</th>
                        <td>
                            <button class=\"btn btn-sm btn-default pull-right print-only-this\"><span class=\"glyphicon glyphicon-print\"></span></button>
                            <p>{{ entity.request|nl2br }}</p>
                        </td>
                    </tr>
                    <tr>
                        <th>Resultats</th>
                        <td>
                            <button class=\"btn btn-sm btn-default pull-right print-only-this\"><span class=\"glyphicon glyphicon-print\"></span></button>
                            <p>{{ entity.result|nl2br }}</p>
                        </td>
                    </tr>
                    {% endif %}
                </tbody>
                </table>
            {% endfor %}
            </div>
        {% endif %}
            <div class=\"col-md-5\">
                <h3>Médicaments délivrées <a class=\"btn btn-info btn-sm pull-right\" href=\"{{ path('consultation_edit', { 'id': entity.id }) }}\"> <span class=\"glyphicon glyphicon-plus\"></span></a></h3>
                
                <table class=\"table table-striped table-hover table-bordered\">
                    <tr>
                        <th>Médicament</th>
                        <th>Nombre d'unités</th>
                    </tr>
                    {% for item in entity.consultationmeds %}
                    <tr>
                        <td>{{ item.meds.name }}</td>
                        <td>{{ item.count}}</td>
                    </tr>
                    {% endfor %}
                </table>
            </div>
        </div>
    </div>
    <div class=\"col-md-2\">
        <form id=\"deleteForm\" action=\"{{ path('consultation_delete', { 'id': entity.id }) }}\" method=\"DELETE\">
            <a class=\"btn btn-primary btn-block\" href=\"{{ path('consultation') }}\">Vers la liste</a>
            <a class=\"btn btn-info btn-block\" href=\"{{ path('consultation_edit', { 'id': entity.id }) }}\">Mettre à jour</a>
            <a class=\"btn btn-info btn-block\" id=\"btnPrint\"><span class=\"glyphicon glyphicon-print\"></span> Imprimer</a>
            <hr>
            <button class=\"btn btn-danger btn-block\" type=\"submit\">Supprimer</button>
            {{ form_widget(delete_form) }}
        </form> 
    </div>
</div>
<div id=\"printzone\" class=\"visible-print\"></div>
{% endblock %}

{% block javascripts %}
{{ parent() }}
<script> 
    (function(\$) {
        var mycontainer = \$('#mycontainer'),
            printOnly = mycontainer.find('.print-only-this'),
            printzone = \$('#printzone');
        printOnly.on('click', function(){
            mycontainer.addClass('hidden-print');
            printzone.html(\$(this).next().html());
            window.print();
            printzone.html('');
        });
    })(jQuery);
</script>
{% endblock %}
", "BenDoctorsBundle:Consultation:show.html.twig", "/home/pacifik/Desktop/Doctors-master/src/Ben/DoctorsBundle/Resources/views/Consultation/show.html.twig");
    }
}
