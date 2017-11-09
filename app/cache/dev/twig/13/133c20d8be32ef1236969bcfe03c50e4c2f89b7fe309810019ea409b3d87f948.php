<?php

/* BenDoctorsBundle:Consultation:form.html.twig */
class __TwigTemplate_b0bcc6b0e1879ac4abe94cd49cc42614c4b46eba272d89e2b1b64ebaddca669d extends Twig_Template
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
        // line 9
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
    }

    public function getTemplateName()
    {
        return "BenDoctorsBundle:Consultation:form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  19 => 9,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# 
  {{ form_row(form.name, { 'label': 'Cause'}) }}
  {{ form_row(form.diagnosis, { 'label': 'Diagnosis'}) }}
  {{ form_row(form.treatment, { 'label': 'Treatment'}) }}
  {{ form_row(form.person) }}
  {{ form_row(form.consultationmeds, { 'label': 'Medicine delivered'}) }}
  {{ form_rest(form) }} 
       #}
{{ form_widget(form) }}", "BenDoctorsBundle:Consultation:form.html.twig", "/home/pacifik/Desktop/Doctors-master/src/Ben/DoctorsBundle/Resources/views/Consultation/form.html.twig");
    }
}
