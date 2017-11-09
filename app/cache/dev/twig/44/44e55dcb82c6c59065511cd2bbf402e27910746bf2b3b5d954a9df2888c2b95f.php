<?php

/* BenDoctorsBundle:Meds:ajax_list.html.twig */
class __TwigTemplate_11e4645c667d5e215f7e676fb7d4f5ca2074456397baf9656176f00a66ff2b0b extends Twig_Template
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
            echo "    <tr ";
            if (( !$this->getAttribute($context["entity"], "count", array()) || $this->getAttribute($context["entity"], "isExpired", array()))) {
                echo "class=\"danger\"";
            }
            echo ">
        <td class=\"hidden-print\"><input type=\"checkbox\" name=\"entities[]\" value=\"";
            // line 3
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "id", array()), "html", null, true);
            echo "\"></td>
        <td>";
            // line 4
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "name", array()), "html", null, true);
            echo "</td>
        <td>";
            // line 5
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "count", array()), "html", null, true);
            echo "</td>
        <td>";
            // line 6
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "type", array()), "html", null, true);
            echo "</td>
        <td>";
            // line 7
            echo twig_escape_filter($this->env, twig_truncate_filter($this->env, $this->getAttribute($context["entity"], "about", array()), 50), "html", null, true);
            echo "</td>
        <td>";
            // line 8
            echo twig_escape_filter($this->env, (($this->getAttribute($context["entity"], "expdate", array())) ? (twig_date_format_filter($this->env, $this->getAttribute($context["entity"], "expdate", array()), "d/m/Y")) : ("-")), "html", null, true);
            echo "</td>

        <td class=\"hidden-print\">
            <div class=\"text-center\">
                <a class=\"btn btn-primary btn-xs\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"afficher\" href=\"";
            // line 12
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("meds_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\"><span class=\"glyphicon glyphicon-search\"></span></a>
                <a class=\"btn btn-danger btn-xs\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"modifier\" href=\"";
            // line 13
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("meds_edit", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
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
        $this->loadTemplate("BenDoctorsBundle:Default:pagination.html.twig", "BenDoctorsBundle:Meds:ajax_list.html.twig", 27)->display($context);
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
        return "BenDoctorsBundle:Meds:ajax_list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 28,  86 => 27,  72 => 18,  62 => 13,  58 => 12,  51 => 8,  47 => 7,  43 => 6,  39 => 5,  35 => 4,  31 => 3,  24 => 2,  19 => 1,);
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
    <tr {% if not entity.count or entity.isExpired %}class=\"danger\"{% endif %}>
        <td class=\"hidden-print\"><input type=\"checkbox\" name=\"entities[]\" value=\"{{ entity.id }}\"></td>
        <td>{{ entity.name }}</td>
        <td>{{ entity.count }}</td>
        <td>{{ entity.type }}</td>
        <td>{{ entity.about | truncate(50) }}</td>
        <td>{{ entity.expdate ? entity.expdate|date('d/m/Y') : '-' }}</td>

        <td class=\"hidden-print\">
            <div class=\"text-center\">
                <a class=\"btn btn-primary btn-xs\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"afficher\" href=\"{{ path('meds_show', { 'id': entity.id }) }}\"><span class=\"glyphicon glyphicon-search\"></span></a>
                <a class=\"btn btn-danger btn-xs\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"modifier\" href=\"{{ path('meds_edit', { 'id': entity.id }) }}\"><span class=\"glyphicon glyphicon-edit\"></span></a>
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
</script>", "BenDoctorsBundle:Meds:ajax_list.html.twig", "/home/pacifik/Desktop/Doctors-master/src/Ben/DoctorsBundle/Resources/views/Meds/ajax_list.html.twig");
    }
}
