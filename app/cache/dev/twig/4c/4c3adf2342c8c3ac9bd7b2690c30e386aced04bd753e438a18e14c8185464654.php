<?php

/* BenUserBundle:admin:ajax_list.html.twig */
class __TwigTemplate_871ce0b0133ca60f7138c7db4398cf682575cd42c9adc7907844ac60e0e399da extends Twig_Template
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
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 2
            echo "  <tr>
    <td ";
            // line 3
            if ($this->getAttribute($context["entity"], "enabled", array())) {
                echo "class=\"active-row\"";
            }
            echo "><input type=\"checkbox\" name=\"users[]\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "id", array()), "html", null, true);
            echo "\"></td>
    <td>";
            // line 4
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "username", array()), "html", null, true);
            echo "</td>
    <td>";
            // line 5
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "fullName", array()), "html", null, true);
            echo "</td>
    <td>";
            // line 6
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "email", array()), "html", null, true);
            echo "</td>
    <td>";
            // line 7
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "tel", array()), "html", null, true);
            echo "</td>
    <td>";
            // line 8
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "role", array()), "html", null, true);
            echo "</td>
    <td class=\"hidden-print\">
        <div class=\"text-center\">
            <a class=\"btn btn-primary btn-xs\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"afficher\" href=\"";
            // line 11
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ben_show_user", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\"><span class=\"glyphicon glyphicon-search\"></span></a>
            <a class=\"btn btn-danger btn-xs\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"modifier\" href=\"";
            // line 12
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ben_edit_user", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\"><span class=\"glyphicon glyphicon-edit\"></span></a>
        </div>
    </td>
  </tr>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "                
";
        // line 18
        $this->loadTemplate("BenDoctorsBundle:Default:pagination.html.twig", "BenUserBundle:admin:ajax_list.html.twig", 18)->display($context);
        // line 19
        echo "<script>   
(function(\$) {

    /* tooltip */
    \$('a[data-toggle=\"tooltip\"]').tooltip();

})(jQuery);
</script>
";
    }

    public function getTemplateName()
    {
        return "BenUserBundle:admin:ajax_list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 19,  74 => 18,  71 => 17,  60 => 12,  56 => 11,  50 => 8,  46 => 7,  42 => 6,  38 => 5,  34 => 4,  26 => 3,  23 => 2,  19 => 1,);
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
    <td {% if entity.enabled %}class=\"active-row\"{% endif %}><input type=\"checkbox\" name=\"users[]\" value=\"{{ entity.id }}\"></td>
    <td>{{ entity.username }}</td>
    <td>{{ entity.fullName }}</td>
    <td>{{ entity.email }}</td>
    <td>{{ entity.tel }}</td>
    <td>{{ entity.role}}</td>
    <td class=\"hidden-print\">
        <div class=\"text-center\">
            <a class=\"btn btn-primary btn-xs\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"afficher\" href=\"{{ path('ben_show_user', { 'id': entity.id }) }}\"><span class=\"glyphicon glyphicon-search\"></span></a>
            <a class=\"btn btn-danger btn-xs\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"modifier\" href=\"{{ path('ben_edit_user', { 'id': entity.id }) }}\"><span class=\"glyphicon glyphicon-edit\"></span></a>
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
</script>
", "BenUserBundle:admin:ajax_list.html.twig", "/home/pacifik/Desktop/Doctors-master/src/Ben/UserBundle/Resources/views/admin/ajax_list.html.twig");
    }
}
