<?php

/* BenUserBundle:myProfile:edit.html.twig */
class __TwigTemplate_fc2d03abdb42a52b4b6770f3b5e31dd0129b8b5038a0a4e9401d2c210b5d8331 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "BenUserBundle:myProfile:edit.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        // line 3
        echo "Profile - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
    }

    // line 6
    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 7
        echo "
<h3><span class=\" glyphicon glyphicon-user\"></span> User Profile</h3>
<form class=\"form-horizontal col-md-8\" action=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ben_profile_update", array("id" => $this->getAttribute(($context["entity"] ?? $this->getContext($context, "entity")), "id", array()))), "html", null, true);
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'enctype');
        echo ">

  <div class=\"form-group\">
    <label for=\"\" class=\"col-md-6 control-label\">Photo</label>
    <div class=\"col-md-6\">
      <img class=\"myavatar col-md-4\" src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl($this->getAttribute(($context["entity"] ?? $this->getContext($context, "entity")), "avatar", array())), "html", null, true);
        echo "\">
    </div>
  </div>
  ";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "image", array()), "file", array()), 'row', array("label" => " "));
        echo "
  ";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "family_name", array()), 'row', array("label" => "First Name"));
        echo "
  ";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "first_name", array()), 'row', array("label" => "Surname"));
        echo "
  ";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "tel", array()), 'row', array("label" => "Cell"));
        echo "
  ";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'rest');
        echo "

    <div class=\"form-group\">
      <div class=\"col-md-offset-6 col-md-6\">
        <button type=\"submit\" name=\"subvalider\" class=\"btn btn-primary\"><span class=\"fui-new\"></span> Update</button>
      </div>
    </div>
</form>

";
    }

    public function getTemplateName()
    {
        return "BenUserBundle:myProfile:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 21,  74 => 20,  70 => 19,  66 => 18,  62 => 17,  56 => 14,  46 => 9,  42 => 7,  39 => 6,  32 => 3,  29 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"FOSUserBundle::layout.html.twig\" %}
{% block title %}
Profile - {{ parent() }}
{% endblock %}

{% block fos_user_content %}

<h3><span class=\" glyphicon glyphicon-user\"></span> User Profile</h3>
<form class=\"form-horizontal col-md-8\" action=\"{{ path('ben_profile_update', { 'id': entity.id }) }}\" method=\"post\" {{ form_enctype(form) }}>

  <div class=\"form-group\">
    <label for=\"\" class=\"col-md-6 control-label\">Photo</label>
    <div class=\"col-md-6\">
      <img class=\"myavatar col-md-4\" src=\"{{ asset( entity.avatar)}}\">
    </div>
  </div>
  {{ form_row(form.image.file, { 'label': ' '}) }}
  {{ form_row(form.family_name, { 'label': 'First Name'}) }}
  {{ form_row(form.first_name, { 'label': 'Surname'}) }}
  {{ form_row(form.tel, { 'label': 'Cell'}) }}
  {{ form_rest(form) }}

    <div class=\"form-group\">
      <div class=\"col-md-offset-6 col-md-6\">
        <button type=\"submit\" name=\"subvalider\" class=\"btn btn-primary\"><span class=\"fui-new\"></span> Update</button>
      </div>
    </div>
</form>

{% endblock fos_user_content %}", "BenUserBundle:myProfile:edit.html.twig", "/home/pacifik/Desktop/Doctors-master/src/Ben/UserBundle/Resources/views/myProfile/edit.html.twig");
    }
}
