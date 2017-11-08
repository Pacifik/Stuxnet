<?php

/* BenUserBundle:admin:form.html.twig */
class __TwigTemplate_c83ac8de735dd00321dd45837e7c586562ee518e66cd39602ae0134cd5f15fa3 extends Twig_Template
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
        echo "  <div class=\"form-group\">
    <label for=\"\" class=\"col-sm-6 control-label\">Photo</label>
    <div class=\"col-sm-6\">
      <img class=\"myavatar col-md-4\" src=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl($this->getAttribute(($context["entity"] ?? $this->getContext($context, "entity")), "avatar", array())), "html", null, true);
        echo "\">
    </div>
  </div>
  ";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "image", array()), "file", array()), 'row', array("label" => " "));
        echo "
  ";
        // line 8
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "username", array()), 'row', array("label" => "Identifiant"));
        echo "
  ";
        // line 9
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "plainpassword", array()), 'row', array("label" => "Mot de passe"));
        echo "
  ";
        // line 10
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "family_name", array()), 'row', array("label" => "Nom"));
        echo "
  ";
        // line 11
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "first_name", array()), 'row', array("label" => "Prénom"));
        echo "
  ";
        // line 12
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "email", array()), 'row', array("label" => "Adresse email"));
        echo "
  ";
        // line 13
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "tel", array()), 'row', array("label" => "Tél"));
        echo "
  ";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "enabled", array()), 'row', array("label" => "Activé"));
        echo "
  ";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'rest');
    }

    public function getTemplateName()
    {
        return "BenUserBundle:admin:form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 15,  58 => 14,  54 => 13,  50 => 12,  46 => 11,  42 => 10,  38 => 9,  34 => 8,  30 => 7,  24 => 4,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("  <div class=\"form-group\">
    <label for=\"\" class=\"col-sm-6 control-label\">Photo</label>
    <div class=\"col-sm-6\">
      <img class=\"myavatar col-md-4\" src=\"{{ asset( entity.avatar)}}\">
    </div>
  </div>
  {{ form_row(form.image.file, { 'label': ' '}) }}
  {{ form_row(form.username, { 'label': 'Identifiant'}) }}
  {{ form_row(form.plainpassword, { 'label': 'Mot de passe'}) }}
  {{ form_row(form.family_name, { 'label': 'Nom'}) }}
  {{ form_row(form.first_name, { 'label': 'Prénom'}) }}
  {{ form_row(form.email, { 'label': 'Adresse email'}) }}
  {{ form_row(form.tel, { 'label': 'Tél'}) }}
  {{ form_row(form.enabled, { 'label': 'Activé'}) }}
  {{ form_rest(form) }}", "BenUserBundle:admin:form.html.twig", "/home/pacifik/Desktop/Doctors-master/src/Ben/UserBundle/Resources/views/admin/form.html.twig");
    }
}
