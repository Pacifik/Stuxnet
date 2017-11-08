<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_025ae564799e88e350282d43e317508b9d2a084bcf9919d50ac7a2fe69d8ca35 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("BenDoctorsBundle::layout.html.twig", "FOSUserBundle:Security:login.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'container' => array($this, 'block_container'),
            'javascripts' => array($this, 'block_javascripts'),
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
    public function block_title($context, array $blocks = array())
    {
        // line 3
        echo "Login - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
    }

    // line 6
    public function block_container($context, array $blocks = array())
    {
        // line 7
        echo "
<body class=\"sign-in-bg\">
    <div id=\"particles-js\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-sm-6 col-md-4 col-md-offset-4\">

                    ";
        // line 14
        if (($context["error"] ?? $this->getContext($context, "error"))) {
            // line 15
            echo "                        <div class=\"alert alert-danger fade in\">
                            <strong><i class=\"icon-warning-sign\"></i> erreur : </strong> ";
            // line 16
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["error"] ?? $this->getContext($context, "error")), array(), "FOSUserBundle"), "html", null, true);
            echo "
                        </div>
                    ";
        }
        // line 19
        echo "                    ";
        // line 20
        echo "                    <div class=\"sign-in-head text-center\">
                        <h1>";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute(($context["app_config"] ?? $this->getContext($context, "app_config")), "app_name", array()), "html", null, true);
        echo "</h1>
                    </div>
                    <div class=\"account-wall\">
                        <img class=\"profile-img\" src=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("uploads/img/anonymous.png"), "html", null, true);
        echo "\"
                            alt=\"\">
                        <form action=\"";
        // line 26
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_check");
        echo "\" method=\"post\" class=\"form-signin\">
                        <input type=\"text\" class=\"form-control\" placeholder=\"Username\" name=\"_username\" value=\"";
        // line 27
        echo twig_escape_filter($this->env, ($context["last_username"] ?? $this->getContext($context, "last_username")), "html", null, true);
        echo "\" required autofocus>
                        <input type=\"password\" class=\"form-control\" placeholder=\"Password\" name=\"_password\" required>
                        <button class=\"btn btn-lg btn-primary btn-block\" type=\"submit\">
                            Sign in</button>
                        <label class=\"checkbox pull-left\">
                            <input type=\"checkbox\" name=\"_remember_me\" value=\"on\">
                            Keep my session active
                        </label>
                        <span class=\"clearfix\"></span>
                        </form>
                    </div>
                    <!--<a href=\"#\" class=\"text-center new-account\">Mots de pass oublié ?</a>-->
                        <a href=\"#\" class=\"text-center new-account\">Forgot Password ?</a>
                </div>
            </div>
        </div>
    </div>
</body>
    ";
        // line 45
        $this->displayBlock('javascripts', $context, $blocks);
    }

    public function block_javascripts($context, array $blocks = array())
    {
        // line 46
        echo "        <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("js/app.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("js/particles.js"), "html", null, true);
        echo "\"></script>
    ";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  115 => 47,  110 => 46,  104 => 45,  83 => 27,  79 => 26,  74 => 24,  68 => 21,  65 => 20,  63 => 19,  57 => 16,  54 => 15,  52 => 14,  43 => 7,  40 => 6,  33 => 3,  30 => 2,  11 => 1,);
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
{% block title %}
Login - {{ parent() }}
{% endblock %}

{% block container %}

<body class=\"sign-in-bg\">
    <div id=\"particles-js\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-sm-6 col-md-4 col-md-offset-4\">

                    {% if error %}
                        <div class=\"alert alert-danger fade in\">
                            <strong><i class=\"icon-warning-sign\"></i> erreur : </strong> {{ error|trans({}, 'FOSUserBundle') }}
                        </div>
                    {% endif %}
                    {# <h1 class=\"text-center login-title\">Sign in to continue to Bootsnipp</h1> #}
                    <div class=\"sign-in-head text-center\">
                        <h1>{{ app_config.app_name }}</h1>
                    </div>
                    <div class=\"account-wall\">
                        <img class=\"profile-img\" src=\"{{ asset(\"uploads/img/anonymous.png\") }}\"
                            alt=\"\">
                        <form action=\"{{ path(\"fos_user_security_check\") }}\" method=\"post\" class=\"form-signin\">
                        <input type=\"text\" class=\"form-control\" placeholder=\"Username\" name=\"_username\" value=\"{{ last_username }}\" required autofocus>
                        <input type=\"password\" class=\"form-control\" placeholder=\"Password\" name=\"_password\" required>
                        <button class=\"btn btn-lg btn-primary btn-block\" type=\"submit\">
                            Sign in</button>
                        <label class=\"checkbox pull-left\">
                            <input type=\"checkbox\" name=\"_remember_me\" value=\"on\">
                            Keep my session active
                        </label>
                        <span class=\"clearfix\"></span>
                        </form>
                    </div>
                    <!--<a href=\"#\" class=\"text-center new-account\">Mots de pass oublié ?</a>-->
                        <a href=\"#\" class=\"text-center new-account\">Forgot Password ?</a>
                </div>
            </div>
        </div>
    </div>
</body>
    {% block javascripts %}
        <script src=\"{{ asset('js/app.js') }}\"></script>
        <script src=\"{{ asset('js/particles.js') }}\"></script>
    {% endblock javascripts %}
{% endblock container %}

", "FOSUserBundle:Security:login.html.twig", "/home/pacifik/Desktop/Doctors-master/src/Ben/UserBundle/Resources/views/Security/login.html.twig");
    }
}
