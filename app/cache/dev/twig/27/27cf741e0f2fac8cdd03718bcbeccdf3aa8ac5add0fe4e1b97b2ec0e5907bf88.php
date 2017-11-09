<?php

/* FOSUserBundle:ChangePassword:changePassword.html.twig */
class __TwigTemplate_a10c1831ab235936672170472496b69cbf00259f4672ce3be7f2470a2f63b986 extends Twig_Template
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
        echo "<form class=\"form-horizontal\" method=\"POST\" action=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_change_password");
        echo "\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock(($context["passwordform"] ?? $this->getContext($context, "passwordform")), 'enctype');
        echo " >
    <fieldset>
        <legend><span class=\"glyphicon glyphicon-lock\"></span> Change Password</legend>

        ";
        // line 5
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute(($context["passwordform"] ?? $this->getContext($context, "passwordform")), "current_password", array()), 'row', array("label" => "Current password"));
        echo "
        ";
        // line 6
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["passwordform"] ?? $this->getContext($context, "passwordform")), "new", array()), "first", array()), 'row', array("label" => "New password"));
        echo "
        ";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["passwordform"] ?? $this->getContext($context, "passwordform")), "new", array()), "second", array()), 'row', array("label" => "Confirme new password"));
        echo "

        ";
        // line 9
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock(($context["passwordform"] ?? $this->getContext($context, "passwordform")), 'rest');
        echo "

    <div class=\"form-group\">
        <div class=\"col-md-offset-6 col-md-6\">
            <button type=\"submit\" name=\"subvalider\" class=\"btn btn-primary\"><span class=\"glyphicon glyphicon-edit\"></span> Update</button>
        </div>
    </div>
    </fieldset>
</form>

           ";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:ChangePassword:changePassword.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 9,  37 => 7,  33 => 6,  29 => 5,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<form class=\"form-horizontal\" method=\"POST\" action=\"{{ path('fos_user_change_password') }}\" {{ form_enctype(passwordform) }} >
    <fieldset>
        <legend><span class=\"glyphicon glyphicon-lock\"></span> Change Password</legend>

        {{ form_row(passwordform.current_password, { 'label': 'Current password'}) }}
        {{ form_row(passwordform.new.first, { 'label': 'New password'}) }}
        {{ form_row(passwordform.new.second, { 'label': 'Confirme new password'}) }}

        {{ form_rest(passwordform) }}

    <div class=\"form-group\">
        <div class=\"col-md-offset-6 col-md-6\">
            <button type=\"submit\" name=\"subvalider\" class=\"btn btn-primary\"><span class=\"glyphicon glyphicon-edit\"></span> Update</button>
        </div>
    </div>
    </fieldset>
</form>

           ", "FOSUserBundle:ChangePassword:changePassword.html.twig", "/home/pacifik/Desktop/Doctors-master/src/Ben/UserBundle/Resources/views/ChangePassword/changePassword.html.twig");
    }
}
