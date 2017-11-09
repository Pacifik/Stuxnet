<?php

/* BenDoctorsBundle::layout.html.twig */
class __TwigTemplate_0bb8a1da2d8e057df06349df0d6efca0ee40eec09f1fbe5c664ecd431d50c430 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'meta' => array($this, 'block_meta'),
            'stylesheet' => array($this, 'block_stylesheet'),
            'title' => array($this, 'block_title'),
            'container' => array($this, 'block_container'),
            'breadcrumb' => array($this, 'block_breadcrumb'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<!--
         ===================================================================
        ||          designed & developed by matondomatondo.mm@gmail.com          ||
         ===================================================================
-->
<html>
  <head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <meta name=\"application-name\" content=\"doctors\"/>
    <meta name=\"author\" content=\"matondomatondo.mm@gmail.com\">
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\"/>
    ";
        // line 14
        $this->displayBlock('meta', $context, $blocks);
        // line 15
        echo "    ";
        $this->displayBlock('stylesheet', $context, $blocks);
        // line 22
        echo "    <title>";
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    <link rel=\"shortcut icon\" type=\"image/x-icon\" href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("icon.png"), "html", null, true);
        echo "\" />
    <style>";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute(($context["app_config"] ?? $this->getContext($context, "app_config")), "app_css", array()), "html", null, true);
        echo "</style>
    <!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
    <!--[if lt IE 9]>
      <script src=\"js/html5shiv.js\"></script>
    <![endif]-->
</head>

";
        // line 31
        $this->displayBlock('container', $context, $blocks);
        // line 98
        echo "</html>
";
    }

    // line 14
    public function block_meta($context, array $blocks = array())
    {
    }

    // line 15
    public function block_stylesheet($context, array $blocks = array())
    {
        // line 16
        echo "        <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("bootstrap/css/bootstrap.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("css/layout.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("css/main.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("css/select2.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <!--<link href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">-->
    ";
    }

    // line 22
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->getAttribute(($context["app_config"] ?? $this->getContext($context, "app_config")), "app_name", array()), "html", null, true);
    }

    // line 31
    public function block_container($context, array $blocks = array())
    {
        // line 32
        echo "<body class=\"theme1\">
    ";
        // line 33
        $this->loadTemplate("BenDoctorsBundle:Default:menu.html.twig", "BenDoctorsBundle::layout.html.twig", 33)->display($context);
        // line 34
        echo "
    <div class=\"visible-print col-md-12 text-left\"><img src=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("images/header.png"), "html", null, true);
        echo "\" alt=\"logo\" /></div>
    <section class=\"wrap\">
        <header id=\"adminbar\">
            <div id=\"logo\"><img src=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl($this->getAttribute(($context["app_config"] ?? $this->getContext($context, "app_config")), "app_logo", array())), "html", null, true);
        echo "\" alt=\"logo\" class=\"img-small\" /> <span>";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["app_config"] ?? $this->getContext($context, "app_config")), "app_name", array()), "html", null, true);
        echo "</span></div>

                 <div class=\"dropdown pull-right user-profile\">
                  <a href=\"#\" id=\"drop3\" role=\"button\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
                  <img class=\"img-small\" src=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "image", array()), "getwebpath", array())), "html", null, true);
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
        echo "\">
                  ";
        // line 43
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "fullName", array()), "html", null, true);
        echo " <span class=\"glyphicon glyphicon-chevron-down\"></span></a>

                    <ul class=\"dropdown-menu\">
                        <li>
                            <div class=\"navbar-content\">
                                <div class=\"row\">
                                    <div class=\"col-md-5\">
                                        <img src=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "image", array()), "getwebpath", array())), "html", null, true);
        echo "\" alt=\"Alternate Text\" class=\"img-responsive\" />
                                        <div class=\"clearfix\"></div>
                                        <p></p>
                                    </div>
                                    <div class=\"col-md-7\">
                                        <span>";
        // line 55
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
        echo "</span>
                                        <p class=\"text-muted small\">";
        // line 56
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "email", array()), "html", null, true);
        echo "</p>
                                        <div class=\"divider\"></div>
                                        <a href=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ben_profile_edit", array("name" => $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "username", array()))), "html", null, true);
        echo "\" class=\"btn btn-primary btn-sm\">Profil</a>
                                    </div>
                                </div>
                            </div>
                            <div class=\"navbar-footer\">
                                <div class=\"navbar-footer-content\">
                                    <div class=\"row\">
                                        <div class=\"col-md-6\">
                                            <a href=\"";
        // line 66
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_profile_edit");
        echo "\" class=\"btn btn-default btn-sm\">Account</a>
                                        </div>
                                        <div class=\"col-md-6\">
                                            <a href=\"";
        // line 69
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
        echo "\" class=\"btn btn-default btn-sm pull-right\">Sign Out</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
        </header>

        <div class=\"container\">
            ";
        // line 80
        $this->loadTemplate("BenDoctorsBundle:Default:flashes.html.twig", "BenDoctorsBundle::layout.html.twig", 80)->display($context);
        // line 81
        echo "            ";
        $this->displayBlock('breadcrumb', $context, $blocks);
        // line 82
        echo "            ";
        $this->displayBlock('body', $context, $blocks);
        // line 83
        echo "        </div>
    </section>

    ";
        // line 86
        $this->displayBlock('javascripts', $context, $blocks);
        // line 96
        echo "</body>
";
    }

    // line 81
    public function block_breadcrumb($context, array $blocks = array())
    {
        echo " ";
    }

    // line 82
    public function block_body($context, array $blocks = array())
    {
    }

    // line 86
    public function block_javascripts($context, array $blocks = array())
    {
        // line 87
        echo " 
    <script src=\"";
        // line 88
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("js/jquery.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 89
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script> 
    <script src=\"";
        // line 90
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("js/jquery.cookie.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 91
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("js/select2.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 92
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("js/application.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 93
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("js/app.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 94
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("js/particles.js"), "html", null, true);
        echo "\"></script>
    ";
    }

    public function getTemplateName()
    {
        return "BenDoctorsBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  260 => 94,  256 => 93,  252 => 92,  248 => 91,  244 => 90,  240 => 89,  236 => 88,  233 => 87,  230 => 86,  225 => 82,  219 => 81,  214 => 96,  212 => 86,  207 => 83,  204 => 82,  201 => 81,  199 => 80,  185 => 69,  179 => 66,  168 => 58,  163 => 56,  159 => 55,  151 => 50,  141 => 43,  135 => 42,  126 => 38,  120 => 35,  117 => 34,  115 => 33,  112 => 32,  109 => 31,  103 => 22,  97 => 20,  93 => 19,  89 => 18,  85 => 17,  80 => 16,  77 => 15,  72 => 14,  67 => 98,  65 => 31,  55 => 24,  51 => 23,  46 => 22,  43 => 15,  41 => 14,  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<!--
         ===================================================================
        ||          designed & developed by matondomatondo.mm@gmail.com          ||
         ===================================================================
-->
<html>
  <head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <meta name=\"application-name\" content=\"doctors\"/>
    <meta name=\"author\" content=\"matondomatondo.mm@gmail.com\">
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\"/>
    {% block meta %}{% endblock %}
    {% block stylesheet %}
        <link href=\"{{ asset('bootstrap/css/bootstrap.css') }}\" rel=\"stylesheet\">
        <link href=\"{{ asset('css/layout.css') }}\" rel=\"stylesheet\">
        <link href=\"{{ asset('css/main.css') }}\" rel=\"stylesheet\">
        <link href=\"{{ asset('css/select2.css') }}\" rel=\"stylesheet\">
        <!--<link href=\"{{ asset('css/style.css') }}\" rel=\"stylesheet\">-->
    {% endblock %}
    <title>{% block title %}{{ app_config.app_name }}{% endblock %}</title>
    <link rel=\"shortcut icon\" type=\"image/x-icon\" href=\"{{ asset('icon.png') }}\" />
    <style>{{ app_config.app_css }}</style>
    <!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
    <!--[if lt IE 9]>
      <script src=\"js/html5shiv.js\"></script>
    <![endif]-->
</head>

{% block container %}
<body class=\"theme1\">
    {% include \"BenDoctorsBundle:Default:menu.html.twig\" %}

    <div class=\"visible-print col-md-12 text-left\"><img src=\"{{ asset( 'images/header.png' )}}\" alt=\"logo\" /></div>
    <section class=\"wrap\">
        <header id=\"adminbar\">
            <div id=\"logo\"><img src=\"{{ asset( app_config.app_logo )}}\" alt=\"logo\" class=\"img-small\" /> <span>{{ app_config.app_name }}</span></div>

                 <div class=\"dropdown pull-right user-profile\">
                  <a href=\"#\" id=\"drop3\" role=\"button\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
                  <img class=\"img-small\" src=\"{{ asset( app.user.image.getwebpath)}}\" alt=\"{{ app.user.username }}\">
                  {{ app.user.fullName }} <span class=\"glyphicon glyphicon-chevron-down\"></span></a>

                    <ul class=\"dropdown-menu\">
                        <li>
                            <div class=\"navbar-content\">
                                <div class=\"row\">
                                    <div class=\"col-md-5\">
                                        <img src=\"{{ asset( app.user.image.getwebpath)}}\" alt=\"Alternate Text\" class=\"img-responsive\" />
                                        <div class=\"clearfix\"></div>
                                        <p></p>
                                    </div>
                                    <div class=\"col-md-7\">
                                        <span>{{ app.user.username }}</span>
                                        <p class=\"text-muted small\">{{ app.user.email }}</p>
                                        <div class=\"divider\"></div>
                                        <a href=\"{{ path('ben_profile_edit', { 'name': app.user.username}) }}\" class=\"btn btn-primary btn-sm\">Profil</a>
                                    </div>
                                </div>
                            </div>
                            <div class=\"navbar-footer\">
                                <div class=\"navbar-footer-content\">
                                    <div class=\"row\">
                                        <div class=\"col-md-6\">
                                            <a href=\"{{ path('fos_user_profile_edit') }}\" class=\"btn btn-default btn-sm\">Account</a>
                                        </div>
                                        <div class=\"col-md-6\">
                                            <a href=\"{{ path('fos_user_security_logout') }}\" class=\"btn btn-default btn-sm pull-right\">Sign Out</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
        </header>

        <div class=\"container\">
            {% include \"BenDoctorsBundle:Default:flashes.html.twig\" %}
            {% block breadcrumb %} {% endblock %}
            {% block body %}{% endblock %}
        </div>
    </section>

    {% block javascripts %}
 
    <script src=\"{{ asset('js/jquery.min.js') }}\"></script>
    <script src=\"{{ asset('bootstrap/js/bootstrap.min.js') }}\"></script> 
    <script src=\"{{ asset('js/jquery.cookie.js') }}\"></script>
    <script src=\"{{ asset('js/select2.min.js') }}\"></script>
    <script src=\"{{ asset('js/application.js') }}\"></script>
    <script src=\"{{ asset('js/app.js') }}\"></script>
    <script src=\"{{ asset('js/particles.js') }}\"></script>
    {% endblock javascripts %}
</body>
{% endblock container %}
</html>
", "BenDoctorsBundle::layout.html.twig", "/home/pacifik/Desktop/Doctors-master/src/Ben/DoctorsBundle/Resources/views/layout.html.twig");
    }
}
