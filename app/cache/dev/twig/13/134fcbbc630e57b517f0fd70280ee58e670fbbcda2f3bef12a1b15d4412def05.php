<?php

/* BenDoctorsBundle:Meds:show.html.twig */
class __TwigTemplate_edfa1ec7d22c99fa1f328fb1179961ff407d4cc3092bcacfdbe651b525d61860 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("BenDoctorsBundle::layout.html.twig", "BenDoctorsBundle:Meds:show.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
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
        if ($this->getAttribute(($context["entity"] ?? $this->getContext($context, "entity")), "isExpired", array())) {
            // line 7
            echo "            <div class=\"alert alert-danger fade in\">
                <button type=\"button\" class=\"close\" data-dismiss=\"alert\">×</button>
                <strong>info !</strong>  Product expired since ";
            // line 9
            if ($this->getAttribute(($context["entity"] ?? $this->getContext($context, "entity")), "expdate", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["entity"] ?? $this->getContext($context, "entity")), "expdate", array()), "d/m/Y"), "html", null, true);
            }
            // line 10
            echo "            </div>
";
        }
        // line 12
        echo "<h3><span class=\"glyphicon glyphicon-leaf\"></span> Medication</h3>
<div class=\"row\">
    <div class=\"col-md-10\">   
    <table class=\"table table-striped table-bordered\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute(($context["entity"] ?? $this->getContext($context, "entity")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Name</th>
                <td>";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute(($context["entity"] ?? $this->getContext($context, "entity")), "name", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Quantity</th>
                <td>";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute(($context["entity"] ?? $this->getContext($context, "entity")), "count", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Type</th>
                <td>";
        // line 31
        echo twig_escape_filter($this->env, $this->getAttribute(($context["entity"] ?? $this->getContext($context, "entity")), "type", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Description</th>
                <td>";
        // line 35
        echo nl2br(twig_escape_filter($this->env, $this->getAttribute(($context["entity"] ?? $this->getContext($context, "entity")), "about", array()), "html", null, true));
        echo "</td>
            </tr>
            <tr>
                <th>Date added</th>
                <td>";
        // line 39
        if ($this->getAttribute(($context["entity"] ?? $this->getContext($context, "entity")), "created", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["entity"] ?? $this->getContext($context, "entity")), "created", array()), "d/m/Y"), "html", null, true);
        }
        echo "</td>
            </tr>
            <tr>
                <th>Expiry date</th>
                <td>";
        // line 43
        if ($this->getAttribute(($context["entity"] ?? $this->getContext($context, "entity")), "expdate", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["entity"] ?? $this->getContext($context, "entity")), "expdate", array()), "d/m/Y"), "html", null, true);
        }
        echo "</td>
            </tr>
        </tbody>
    </table>

    </div>
    <div class=\"col-md-2\">
        <form id=\"deleteForm\" action=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("meds_delete", array("id" => $this->getAttribute(($context["entity"] ?? $this->getContext($context, "entity")), "id", array()))), "html", null, true);
        echo "\" method=\"POST\">
            <!--<a class=\"btn btn-primary btn-block\" href=\"";
        // line 51
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("meds");
        echo "\">Vers la liste</a>-->
            <a class=\"btn btn-info btn-block\" href=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("meds_edit", array("id" => $this->getAttribute(($context["entity"] ?? $this->getContext($context, "entity")), "id", array()))), "html", null, true);
        echo "\">Update</a>
            <a class=\"btn btn-info btn-block\" id=\"btnPrint\"><span class=\"glyphicon glyphicon-print\"></span> Print</a>
            <hr>
            <button class=\"btn btn-danger btn-block\" type=\"submit\">Delete</button>
            ";
        // line 56
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'widget');
        echo "
        </form> 
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "BenDoctorsBundle:Meds:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  136 => 56,  129 => 52,  125 => 51,  121 => 50,  109 => 43,  100 => 39,  93 => 35,  86 => 31,  79 => 27,  72 => 23,  65 => 19,  56 => 12,  52 => 10,  48 => 9,  44 => 7,  42 => 6,  39 => 5,  32 => 3,  29 => 2,  11 => 1,);
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
{% if entity.isExpired %}
            <div class=\"alert alert-danger fade in\">
                <button type=\"button\" class=\"close\" data-dismiss=\"alert\">×</button>
                <strong>info !</strong>  Product expired since {% if entity.expdate %}{{ entity.expdate|date('d/m/Y') }}{% endif %}
            </div>
{% endif %}
<h3><span class=\"glyphicon glyphicon-leaf\"></span> Medication</h3>
<div class=\"row\">
    <div class=\"col-md-10\">   
    <table class=\"table table-striped table-bordered\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ entity.id }}</td>
            </tr>
            <tr>
                <th>Name</th>
                <td>{{ entity.name }}</td>
            </tr>
            <tr>
                <th>Quantity</th>
                <td>{{ entity.count }}</td>
            </tr>
            <tr>
                <th>Type</th>
                <td>{{ entity.type }}</td>
            </tr>
            <tr>
                <th>Description</th>
                <td>{{ entity.about|nl2br }}</td>
            </tr>
            <tr>
                <th>Date added</th>
                <td>{% if entity.created %}{{ entity.created|date('d/m/Y') }}{% endif %}</td>
            </tr>
            <tr>
                <th>Expiry date</th>
                <td>{% if entity.expdate %}{{ entity.expdate|date('d/m/Y') }}{% endif %}</td>
            </tr>
        </tbody>
    </table>

    </div>
    <div class=\"col-md-2\">
        <form id=\"deleteForm\" action=\"{{ path('meds_delete', { 'id': entity.id }) }}\" method=\"POST\">
            <!--<a class=\"btn btn-primary btn-block\" href=\"{{ path('meds') }}\">Vers la liste</a>-->
            <a class=\"btn btn-info btn-block\" href=\"{{ path('meds_edit', { 'id': entity.id }) }}\">Update</a>
            <a class=\"btn btn-info btn-block\" id=\"btnPrint\"><span class=\"glyphicon glyphicon-print\"></span> Print</a>
            <hr>
            <button class=\"btn btn-danger btn-block\" type=\"submit\">Delete</button>
            {{ form_widget(delete_form) }}
        </form> 
    </div>
</div>
{% endblock %}
", "BenDoctorsBundle:Meds:show.html.twig", "/home/pacifik/Desktop/Doctors-master/src/Ben/DoctorsBundle/Resources/views/Meds/show.html.twig");
    }
}
