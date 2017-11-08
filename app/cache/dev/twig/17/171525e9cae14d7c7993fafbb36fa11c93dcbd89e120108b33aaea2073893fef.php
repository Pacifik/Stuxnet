<?php

/* BenDoctorsBundle:Test:ajax_list.html.twig */
class __TwigTemplate_eac557bf91aefa76566e96c2fd8913015e2c7a609d7e76363b97d4803793a6d4 extends Twig_Template
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
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "type", array()), "html", null, true);
            echo "</td>
        <td>";
            // line 5
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["entity"], "consultation", array()), "person", array()), "fullname", array()), "html", null, true);
            echo "</td>
        <td>";
            // line 6
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["entity"], "consultation", array()), "user", array()), "fullname", array()), "html", null, true);
            echo "</td>
        <td>";
            // line 7
            echo twig_escape_filter($this->env, twig_truncate_filter($this->env, $this->getAttribute($context["entity"], "request", array()), 50), "html", null, true);
            echo "</td>
        <td class=\"hidden-print\">
            <div class=\"text-center\">
                <a class=\"btn btn-primary btn-xs\"  data-toggle=\"tooltip\" data-placement=\"top\" title=\"afficher\" href=\"";
            // line 10
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("test_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\"><span class=\"glyphicon glyphicon-search\"></span></a>
                <a class=\"btn btn-danger btn-xs\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"modifier\" href=\"";
            // line 11
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("test_edit", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\"><span class=\"glyphicon glyphicon-edit\"></span></a>
            </div>
        </td>
    </tr>
";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 16
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
        // line 25
        $this->loadTemplate("BenDoctorsBundle:Default:pagination.html.twig", "BenDoctorsBundle:Test:ajax_list.html.twig", 25)->display($context);
        // line 26
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
        return "BenDoctorsBundle:Test:ajax_list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 26,  77 => 25,  63 => 16,  53 => 11,  49 => 10,  43 => 7,  39 => 6,  35 => 5,  31 => 4,  27 => 3,  24 => 2,  19 => 1,);
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
        <td>{{ entity.type }}</td>
        <td>{{ entity.consultation.person.fullname }}</td>
        <td>{{ entity.consultation.user.fullname }}</td>
        <td>{{ entity.request | truncate(50) }}</td>
        <td class=\"hidden-print\">
            <div class=\"text-center\">
                <a class=\"btn btn-primary btn-xs\"  data-toggle=\"tooltip\" data-placement=\"top\" title=\"afficher\" href=\"{{ path('test_show', { 'id': entity.id }) }}\"><span class=\"glyphicon glyphicon-search\"></span></a>
                <a class=\"btn btn-danger btn-xs\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"modifier\" href=\"{{ path('test_edit', { 'id': entity.id }) }}\"><span class=\"glyphicon glyphicon-edit\"></span></a>
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
</script>", "BenDoctorsBundle:Test:ajax_list.html.twig", "/home/pacifik/Desktop/Doctors-master/src/Ben/DoctorsBundle/Resources/views/Test/ajax_list.html.twig");
    }
}
