<?php

/* BenDoctorsBundle:Default:menu.html.twig */
class __TwigTemplate_da933d75d1bc729302cc5f2416075641952e58b67efc01212b311b896d78b6b9 extends Twig_Template
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
        $context["route"] = $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method");
        echo " 

";
        // line 3
        $context["personMenu"] = array(0 => "person", 1 => "person_elegible", 2 => "person_show", 3 => "person_new", 4 => "person_edit");
        echo " 
";
        // line 4
        $context["medsMenu"] = array(0 => "meds", 1 => "meds_elegible", 2 => "meds_show", 3 => "meds_new", 4 => "meds_edit");
        echo " 
";
        // line 5
        $context["consultationMenu"] = array(0 => "consultation", 1 => "consultation_elegible", 2 => "consultation_show", 3 => "consultation_new", 4 => "consultation_edit");
        echo " 
";
        // line 6
        $context["testMenu"] = array(0 => "test", 1 => "test_elegible", 2 => "test_show", 3 => "test_new", 4 => "test_edit");
        echo " 
";
        // line 7
        $context["configMenu"] = array(0 => "config");
        echo " 
";
        // line 8
        $context["userMenu"] = array(0 => "ben_users", 1 => "ben_show_user", 2 => "ben_new_user", 3 => "ben_edit_user");
        echo " 


<nav id=\"adminmenu\">
    <ul class=\"top-menu\">
        <li class=\"";
        // line 13
        if ((($context["route"] ?? $this->getContext($context, "route")) != "ben_dashboard")) {
            echo "not-";
        }
        echo "current\"><a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ben_dashboard");
        echo "\"><span class=\"glyphicon glyphicon-stats block\"></span> <span class=\"menu-title\">Stats</span></a></li>
        ";
        // line 14
        if (( !$this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_MANAGER") || $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN"))) {
            // line 15
            echo "        <li class=\"";
            if (!twig_in_filter(($context["route"] ?? $this->getContext($context, "route")), ($context["personMenu"] ?? $this->getContext($context, "personMenu")))) {
                echo "not-";
            }
            echo "current\"><a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("person");
            echo "\"><span class=\"glyphicon glyphicon-user block\"></span> <span class=\"menu-title\">Patients</span></a>
        </li>
        <!--<li class=\"";
            // line 17
            if (!twig_in_filter(($context["route"] ?? $this->getContext($context, "route")), ($context["consultationMenu"] ?? $this->getContext($context, "consultationMenu")))) {
                echo "not-";
            }
            echo "current\"><a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("consultation");
            echo "\"><span class=\"glyphicon glyphicon-list-alt block\"></span> <span class=\"menu-title\">Consultations</span></a></li>
        <li class=\"";
            // line 18
            if (!twig_in_filter(($context["route"] ?? $this->getContext($context, "route")), ($context["testMenu"] ?? $this->getContext($context, "testMenu")))) {
                echo "not-";
            }
            echo "current\"><a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("test");
            echo "\"><span class=\"glyphicon glyphicon-file block\"></span> <span class=\"menu-title\">Exams</span></a></li>-->
        ";
        }
        // line 20
        echo "        ";
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_MANAGER")) {
            // line 21
            echo "        <li class=\"";
            if (!twig_in_filter(($context["route"] ?? $this->getContext($context, "route")), ($context["medsMenu"] ?? $this->getContext($context, "medsMenu")))) {
                echo "not-";
            }
            echo "current\"><a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("meds");
            echo "\"><span class=\"glyphicon glyphicon-leaf block\"></span> <span class=\"menu-title\">Pharmacy</span></a></li>
        ";
        }
        // line 23
        echo "        ";
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN")) {
            // line 24
            echo "        <li class=\"";
            if (!twig_in_filter(($context["route"] ?? $this->getContext($context, "route")), ($context["userMenu"] ?? $this->getContext($context, "userMenu")))) {
                echo "not-";
            }
            echo "current\"><a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ben_users");
            echo "\"><span class=\"glyphicon glyphicon-user block\"></span> <span class=\"menu-title\">Doctors</span></a></li>
        <li class=\"";
            // line 25
            if (!twig_in_filter(($context["route"] ?? $this->getContext($context, "route")), ($context["configMenu"] ?? $this->getContext($context, "configMenu")))) {
                echo "not-";
            }
            echo "current\"><a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("config");
            echo "\"><span class=\"glyphicon glyphicon-wrench block\"></span> <span class=\"menu-title\">Settings</span></a>
        </li>
        ";
        }
        // line 28
        echo "        <li class=\"not-current\"><a href=\"#\" id=\"trigger-shelf\"><span class=\"glyphicon glyphicon-chevron-left block\"></span>  <span class=\"menu-title\">Collapse menu</span></a></li>
    </ul>
</nav>
";
    }

    public function getTemplateName()
    {
        return "BenDoctorsBundle:Default:menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  124 => 28,  114 => 25,  105 => 24,  102 => 23,  92 => 21,  89 => 20,  80 => 18,  72 => 17,  62 => 15,  60 => 14,  52 => 13,  44 => 8,  40 => 7,  36 => 6,  32 => 5,  28 => 4,  24 => 3,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set route = app.request.attributes.get('_route') %} 

{% set personMenu = ['person','person_elegible','person_show','person_new','person_edit'] %} 
{% set medsMenu = ['meds','meds_elegible','meds_show','meds_new','meds_edit'] %} 
{% set consultationMenu = ['consultation','consultation_elegible','consultation_show','consultation_new','consultation_edit'] %} 
{% set testMenu = ['test','test_elegible','test_show','test_new','test_edit'] %} 
{% set configMenu = ['config'] %} 
{% set userMenu = ['ben_users','ben_show_user','ben_new_user','ben_edit_user'] %} 


<nav id=\"adminmenu\">
    <ul class=\"top-menu\">
        <li class=\"{% if route!='ben_dashboard' %}not-{% endif %}current\"><a href=\"{{ path('ben_dashboard') }}\"><span class=\"glyphicon glyphicon-stats block\"></span> <span class=\"menu-title\">Stats</span></a></li>
        {% if not is_granted(\"ROLE_MANAGER\") or is_granted(\"ROLE_ADMIN\") %}
        <li class=\"{% if route not in personMenu %}not-{% endif %}current\"><a href=\"{{ path('person') }}\"><span class=\"glyphicon glyphicon-user block\"></span> <span class=\"menu-title\">Patients</span></a>
        </li>
        <!--<li class=\"{% if route not in consultationMenu %}not-{% endif %}current\"><a href=\"{{ path('consultation') }}\"><span class=\"glyphicon glyphicon-list-alt block\"></span> <span class=\"menu-title\">Consultations</span></a></li>
        <li class=\"{% if route not in testMenu %}not-{% endif %}current\"><a href=\"{{ path('test') }}\"><span class=\"glyphicon glyphicon-file block\"></span> <span class=\"menu-title\">Exams</span></a></li>-->
        {% endif %}
        {% if is_granted(\"ROLE_MANAGER\") %}
        <li class=\"{% if route not in medsMenu %}not-{% endif %}current\"><a href=\"{{ path('meds') }}\"><span class=\"glyphicon glyphicon-leaf block\"></span> <span class=\"menu-title\">Pharmacy</span></a></li>
        {% endif %}
        {% if is_granted(\"ROLE_ADMIN\") %}
        <li class=\"{% if route not in userMenu %}not-{% endif %}current\"><a href=\"{{ path('ben_users') }}\"><span class=\"glyphicon glyphicon-user block\"></span> <span class=\"menu-title\">Doctors</span></a></li>
        <li class=\"{% if route not in configMenu %}not-{% endif %}current\"><a href=\"{{ path('config') }}\"><span class=\"glyphicon glyphicon-wrench block\"></span> <span class=\"menu-title\">Settings</span></a>
        </li>
        {% endif %}
        <li class=\"not-current\"><a href=\"#\" id=\"trigger-shelf\"><span class=\"glyphicon glyphicon-chevron-left block\"></span>  <span class=\"menu-title\">Collapse menu</span></a></li>
    </ul>
</nav>
", "BenDoctorsBundle:Default:menu.html.twig", "/home/pacifik/Dev./Stuxnet/src/Ben/DoctorsBundle/Resources/views/Default/menu.html.twig");
    }
}
