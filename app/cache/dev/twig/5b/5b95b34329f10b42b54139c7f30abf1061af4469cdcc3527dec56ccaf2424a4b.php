<?php

/* BenDoctorsBundle:Person:ajax_list.html.twig */
class __TwigTemplate_a4719bbc173fcaaf7c3d3e21933c0507aa62282fd277a8e818f5c1e599139ea0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["entities"] ?? $this->getContext($context, "entities")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 2
            echo "    <tr>
        <td class=\"hidden-print\"><input type=\"checkbox\" name=\"entities[]\" value=\"";
            // line 3
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "id", array()), "html", null, true);
            echo "\"></td>
        <td>";
            // line 4
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "familyname", array()), "html", null, true);
            echo "</td>
        <td>";
            // line 5
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "firstname", array()), "html", null, true);
            echo "</td>
        <td>";
            // line 6
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "cin", array()), "html", null, true);
            echo "</td>
        <td>";
            // line 7
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "cne", array()), "html", null, true);
            echo "</td>
        <td>";
            // line 8
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "city", array()), "html", null, true);
            echo "</td>
        <td>";
            // line 9
            if ($this->getAttribute($context["entity"], "birthday", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["entity"], "birthday", array()), "d/m/Y"), "html", null, true);
            }
            echo "</td>
        <td class=\"hidden-print\">
            <div class=\"text-center\">
                <a class=\"btn btn-primary btn-xs\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"afficher\" href=\"";
            // line 12
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("person_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\"><span class=\"glyphicon glyphicon-search\"></span></a>
                <a class=\"btn btn-danger btn-xs\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"modifier\" href=\"";
            // line 13
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("person_edit", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\"><span class=\"glyphicon glyphicon-edit\"></span></a>
            </div>
        </td>
    </tr>
";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 18
            echo "    <tr class=\"mypagination\">            
        <td colspan=\"10\">
            <div id=\"msgbox\" class=\"alert alert-danger fade in\" role=\"alert\"> 
                <button type=\"button\" class=\"close\" data-dismiss=\"alert\">×</button>
                <strong>info !</strong> aucun résultat ne correspond à vos critères
            </div>
        </td>
    </tr>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        $this->loadTemplate("BenDoctorsBundle:Default:pagination.html.twig", "BenDoctorsBundle:Person:ajax_list.html.twig", 27)->display($context);
        // line 28
        echo "
<script>   
(function(\$) {

    /* tooltip */
    \$('a[data-toggle=\"tooltip\"]').tooltip();

})(jQuery);
</script>";
    }

    public function getTemplateName()
    {
        return "BenDoctorsBundle:Person:ajax_list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 28,  87 => 27,  73 => 18,  63 => 13,  59 => 12,  51 => 9,  47 => 8,  43 => 7,  39 => 6,  35 => 5,  31 => 4,  27 => 3,  24 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% for entity in entities %}
    <tr>
        <td class=\"hidden-print\"><input type=\"checkbox\" name=\"entities[]\" value=\"{{ entity.id }}\"></td>
        <td>{{ entity.familyname }}</td>
        <td>{{ entity.firstname }}</td>
        <td>{{ entity.cin }}</td>
        <td>{{ entity.cne }}</td>
        <td>{{ entity.city }}</td>
        <td>{% if entity.birthday %}{{ entity.birthday|date('d/m/Y') }}{% endif %}</td>
        <td class=\"hidden-print\">
            <div class=\"text-center\">
                <a class=\"btn btn-primary btn-xs\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"afficher\" href=\"{{ path('person_show', { 'id': entity.id }) }}\"><span class=\"glyphicon glyphicon-search\"></span></a>
                <a class=\"btn btn-danger btn-xs\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"modifier\" href=\"{{ path('person_edit', { 'id': entity.id }) }}\"><span class=\"glyphicon glyphicon-edit\"></span></a>
            </div>
        </td>
    </tr>
{% else %}
    <tr class=\"mypagination\">            
        <td colspan=\"10\">
            <div id=\"msgbox\" class=\"alert alert-danger fade in\" role=\"alert\"> 
                <button type=\"button\" class=\"close\" data-dismiss=\"alert\">×</button>
                <strong>info !</strong> aucun résultat ne correspond à vos critères
            </div>
        </td>
    </tr>
{% endfor %}
{% include \"BenDoctorsBundle:Default:pagination.html.twig\" %}

<script>   
(function(\$) {

    /* tooltip */
    \$('a[data-toggle=\"tooltip\"]').tooltip();

})(jQuery);
</script>", "BenDoctorsBundle:Person:ajax_list.html.twig", "/home/pacifik/Dev./Stuxnet/src/Ben/DoctorsBundle/Resources/views/Person/ajax_list.html.twig");
    }
}
