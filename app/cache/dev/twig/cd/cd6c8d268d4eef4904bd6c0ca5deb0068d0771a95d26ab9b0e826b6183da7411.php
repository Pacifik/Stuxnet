<?php

/* BenUserBundle::layout.html.twig */
class __TwigTemplate_99b7c6f4bdf16ff586887e5a92b6979456b5ee77d2f4f80fd59e0617e8a3297c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("BenDoctorsBundle::layout.html.twig", "BenUserBundle::layout.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
            'outcontainer' => array($this, 'block_outcontainer'),
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
    public function block_body($context, array $blocks = array())
    {
        // line 3
        echo "

 ";
        // line 5
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 8
        echo " 
";
        // line 9
        $this->displayBlock('outcontainer', $context, $blocks);
        // line 11
        echo "    </section>
 ";
    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 6
        echo "
 ";
    }

    // line 9
    public function block_outcontainer($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "BenUserBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 9,  52 => 6,  49 => 5,  44 => 11,  42 => 9,  39 => 8,  37 => 5,  33 => 3,  30 => 2,  11 => 1,);
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
{% block body %}


 {% block fos_user_content %}

 {% endblock fos_user_content %}
 
{% block outcontainer %}
{% endblock outcontainer %}
    </section>
 {% endblock body %}", "BenUserBundle::layout.html.twig", "/home/pacifik/Desktop/Doctors-master/src/Ben/UserBundle/Resources/views/layout.html.twig");
    }
}
