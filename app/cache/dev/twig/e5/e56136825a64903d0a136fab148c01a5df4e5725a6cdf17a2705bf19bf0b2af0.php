<?php

/* BenDoctorsBundle:Meds:form.html.twig */
class __TwigTemplate_76f83ba775f7f7f83b81359ae4cff8ea6b6c0369b1be5b66e3a8f5235e0f221f extends Twig_Template
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
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "name", array()), 'row', array("label" => "Nom"));
        echo "
";
        // line 2
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "count", array()), 'row', array("label" => "Quantité"));
        echo "
";
        // line 3
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "type", array()), 'row', array("label" => "type"));
        echo "
";
        // line 4
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "about", array()), 'row', array("label" => "description"));
        echo "

  ";
        // line 6
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'rest');
        echo " 
      ";
    }

    public function getTemplateName()
    {
        return "BenDoctorsBundle:Meds:form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  36 => 6,  31 => 4,  27 => 3,  23 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ form_row(form.name, { 'label': 'Nom'}) }}
{{ form_row(form.count, { 'label': 'Quantité'}) }}
{{ form_row(form.type, { 'label': 'type'}) }}
{{ form_row(form.about, { 'label': 'description'}) }}

  {{ form_rest(form) }} 
      ", "BenDoctorsBundle:Meds:form.html.twig", "/home/pacifik/Desktop/Doctors-master/src/Ben/DoctorsBundle/Resources/views/Meds/form.html.twig");
    }
}
