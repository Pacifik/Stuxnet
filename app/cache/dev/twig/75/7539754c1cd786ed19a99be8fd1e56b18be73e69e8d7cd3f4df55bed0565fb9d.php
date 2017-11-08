<?php

/* BenDoctorsBundle:Config:index.html.twig */
class __TwigTemplate_5ba3e2851e05260adf270c9bc1125fc25147c5ace58a8b8fb2e9a985bd48980d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("BenDoctorsBundle::layout.html.twig", "BenDoctorsBundle:Config:index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
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
        echo "Tableau de bord | ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "<h3><span class=\"glyphicon glyphicon-cog\"></span> Préférences</h3>
<form class=\"form-horizontal\" action=\"";
        // line 7
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("config_update");
        echo "\" method=\"POST\" enctype=\"multipart/form-data\">        
    <div class=\"tabbable\">
        <ul class=\"nav nav-tabs\">
          <li class=\"active\"><a href=\"#tab1\" data-toggle=\"tab\"><span class=\"glyphicon glyphicon-cog\"></span> Général</a></li>
          <li><a href=\"#tab2\" data-toggle=\"tab\"><span class=\"glyphicon glyphicon-wrench\"></span> Paramètres</a></li>
        </ul> <!-- /tabs -->

    <div class=\"tab-content\">
        <div class=\"tab-pane active\" id=\"tab1\">
        <div class=\"form-group\">
          <label for=\"\" class=\"col-md-4 control-label\">Logo</label>
          <div class=\"col-md-4\">
            <img class=\"myavatar col-md-4\" src=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl($this->getAttribute(($context["app_config"] ?? $this->getContext($context, "app_config")), "app_logo", array())), "html", null, true);
        echo "\">
          </div>
        </div>              
        ";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute(($context["imgform"] ?? $this->getContext($context, "imgform")), "file", array()), 'row', array("label" => " "));
        echo "
        <div class=\"form-group\">
          <label for=\"\" class=\"col-md-4 control-label\">Nom de l'application</label>
          <div class=\"col-md-4\">
            <input type=\"text\" name=\"config[app_name]\" value=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute(($context["app_config"] ?? $this->getContext($context, "app_config")), "app_name", array()), "html", null, true);
        echo "\" class=\"form-control\">
          </div>
        </div>
        <div class=\"form-group\">
          <label for=\"\" class=\"col-md-4 control-label\">Description</label>
          <div class=\"col-md-4\">
            <textarea rows=\"3\" name=\"config[app_description]\" placeholder=\"ajouter une description...\" class=\"form-control\">";
        // line 32
        echo twig_escape_filter($this->env, $this->getAttribute(($context["app_config"] ?? $this->getContext($context, "app_config")), "app_description", array()), "html", null, true);
        echo "</textarea>
          </div>
        </div>
        <div class=\"form-group\">
          <label for=\"\" class=\"col-md-4 control-label\">Adresse</label>
          <div class=\"col-md-4\">
            <input type=\"text\" name=\"config[app_address]\" value=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->getAttribute(($context["app_config"] ?? $this->getContext($context, "app_config")), "app_address", array()), "html", null, true);
        echo "\" class=\"form-control\">
          </div>
        </div>
        <div class=\"form-group\">
          <label for=\"\" class=\"col-md-4 control-label\">Code Postal</label>
          <div class=\"col-md-4\">
            <input type=\"text\" name=\"config[app_cp]\" value=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->getAttribute(($context["app_config"] ?? $this->getContext($context, "app_config")), "app_cp", array()), "html", null, true);
        echo "\" class=\"form-control\">
          </div>
        </div>
        <div class=\"form-group\">
          <label for=\"\" class=\"col-md-4 control-label\">Ville</label>
          <div class=\"col-md-4\">
            <input type=\"text\" name=\"config[app_city]\" value=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->getAttribute(($context["app_config"] ?? $this->getContext($context, "app_config")), "app_city", array()), "html", null, true);
        echo "\" class=\"form-control\">
          </div>
        </div>
        <div class=\"form-group\">
          <label for=\"\" class=\"col-md-4 control-label\">Tél </label>
          <div class=\"col-md-4\">
            <input type=\"text\" name=\"config[app_tel]\" value=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->getAttribute(($context["app_config"] ?? $this->getContext($context, "app_config")), "app_tel", array()), "html", null, true);
        echo "\" class=\"form-control\">
          </div>
        </div>
        <div class=\"form-group\">
          <label for=\"\" class=\"col-md-4 control-label\">GSM </label>
          <div class=\"col-md-4\">
            <input type=\"text\" name=\"config[app_gsm]\" value=\"";
        // line 62
        echo twig_escape_filter($this->env, $this->getAttribute(($context["app_config"] ?? $this->getContext($context, "app_config")), "app_gsm", array()), "html", null, true);
        echo "\" class=\"form-control\">
          </div>
        </div>
      </div><!-- /tab1 -->
        <div class=\"tab-pane\" id=\"tab2\">
        <div class=\"form-group\">
          <label for=\"\" class=\"col-md-4 control-label\">Lignes / Page </label>
          <div class=\"col-md-4\">
            <select name=\"config[rows_per_page]\">
                  <option ";
        // line 71
        if (($this->getAttribute(($context["app_config"] ?? $this->getContext($context, "app_config")), "rows_per_page", array()) == "10")) {
            echo "selected=\"selected\"";
        }
        echo " value=\"10\">10</option>
                  <option ";
        // line 72
        if (($this->getAttribute(($context["app_config"] ?? $this->getContext($context, "app_config")), "rows_per_page", array()) == "50")) {
            echo "selected=\"selected\"";
        }
        echo " value=\"50\">50</option>
                  <option ";
        // line 73
        if (($this->getAttribute(($context["app_config"] ?? $this->getContext($context, "app_config")), "rows_per_page", array()) == "100")) {
            echo "selected=\"selected\"";
        }
        echo " value=\"100\">100</option>
                  <option ";
        // line 74
        if (($this->getAttribute(($context["app_config"] ?? $this->getContext($context, "app_config")), "rows_per_page", array()) == "200")) {
            echo "selected=\"selected\"";
        }
        echo " value=\"200\">200</option>
              </select>
          </div>
        </div>
        <div class=\"form-group\">
          <label for=\"\" class=\"col-md-4 control-label\">Style CSS </label>
          <div class=\"col-md-4\">
            <textarea rows=\"3\" name=\"config[app_css]\" placeholder=\"ajouter une description...\" class=\"form-control\">";
        // line 81
        echo twig_escape_filter($this->env, $this->getAttribute(($context["app_config"] ?? $this->getContext($context, "app_config")), "app_css", array()), "html", null, true);
        echo "</textarea>
          </div>
        </div>
        </div><!-- /tab2 -->
    </div> <!-- /tab-content -->
   </div>
       <div class=\"form-group\">
         <div class=\"col-md-offset-4 col-md-4\">
           <button type=\"submit\" name=\"subvalider\" class=\"btn btn-primary btn-embossed\"><span class=\"fui-check-inverted\"></span> Mettre à jour</button>
         </div>
       </div>
</form>
   
";
    }

    // line 95
    public function block_javascripts($context, array $blocks = array())
    {
        // line 96
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
<script> 
    (function(\$) {

        \$('.form-group').find('.col-md-6').removeClass('col-md-6').addClass('col-md-4');
        \$('select').removeClass('form-control').select2({minimumResultsForSearch: -1});
    })(jQuery);
</script>
";
    }

    public function getTemplateName()
    {
        return "BenDoctorsBundle:Config:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  191 => 96,  188 => 95,  170 => 81,  158 => 74,  152 => 73,  146 => 72,  140 => 71,  128 => 62,  119 => 56,  110 => 50,  101 => 44,  92 => 38,  83 => 32,  74 => 26,  67 => 22,  61 => 19,  46 => 7,  43 => 6,  40 => 5,  33 => 3,  30 => 2,  11 => 1,);
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
Tableau de bord | {{ parent() }}
{% endblock %}
{% block body %}
<h3><span class=\"glyphicon glyphicon-cog\"></span> Préférences</h3>
<form class=\"form-horizontal\" action=\"{{ path('config_update')}}\" method=\"POST\" enctype=\"multipart/form-data\">        
    <div class=\"tabbable\">
        <ul class=\"nav nav-tabs\">
          <li class=\"active\"><a href=\"#tab1\" data-toggle=\"tab\"><span class=\"glyphicon glyphicon-cog\"></span> Général</a></li>
          <li><a href=\"#tab2\" data-toggle=\"tab\"><span class=\"glyphicon glyphicon-wrench\"></span> Paramètres</a></li>
        </ul> <!-- /tabs -->

    <div class=\"tab-content\">
        <div class=\"tab-pane active\" id=\"tab1\">
        <div class=\"form-group\">
          <label for=\"\" class=\"col-md-4 control-label\">Logo</label>
          <div class=\"col-md-4\">
            <img class=\"myavatar col-md-4\" src=\"{{ asset( app_config.app_logo )}}\">
          </div>
        </div>              
        {{ form_row(imgform.file, { 'label': ' '}) }}
        <div class=\"form-group\">
          <label for=\"\" class=\"col-md-4 control-label\">Nom de l'application</label>
          <div class=\"col-md-4\">
            <input type=\"text\" name=\"config[app_name]\" value=\"{{app_config.app_name}}\" class=\"form-control\">
          </div>
        </div>
        <div class=\"form-group\">
          <label for=\"\" class=\"col-md-4 control-label\">Description</label>
          <div class=\"col-md-4\">
            <textarea rows=\"3\" name=\"config[app_description]\" placeholder=\"ajouter une description...\" class=\"form-control\">{{app_config.app_description}}</textarea>
          </div>
        </div>
        <div class=\"form-group\">
          <label for=\"\" class=\"col-md-4 control-label\">Adresse</label>
          <div class=\"col-md-4\">
            <input type=\"text\" name=\"config[app_address]\" value=\"{{app_config.app_address}}\" class=\"form-control\">
          </div>
        </div>
        <div class=\"form-group\">
          <label for=\"\" class=\"col-md-4 control-label\">Code Postal</label>
          <div class=\"col-md-4\">
            <input type=\"text\" name=\"config[app_cp]\" value=\"{{app_config.app_cp}}\" class=\"form-control\">
          </div>
        </div>
        <div class=\"form-group\">
          <label for=\"\" class=\"col-md-4 control-label\">Ville</label>
          <div class=\"col-md-4\">
            <input type=\"text\" name=\"config[app_city]\" value=\"{{app_config.app_city}}\" class=\"form-control\">
          </div>
        </div>
        <div class=\"form-group\">
          <label for=\"\" class=\"col-md-4 control-label\">Tél </label>
          <div class=\"col-md-4\">
            <input type=\"text\" name=\"config[app_tel]\" value=\"{{app_config.app_tel}}\" class=\"form-control\">
          </div>
        </div>
        <div class=\"form-group\">
          <label for=\"\" class=\"col-md-4 control-label\">GSM </label>
          <div class=\"col-md-4\">
            <input type=\"text\" name=\"config[app_gsm]\" value=\"{{app_config.app_gsm}}\" class=\"form-control\">
          </div>
        </div>
      </div><!-- /tab1 -->
        <div class=\"tab-pane\" id=\"tab2\">
        <div class=\"form-group\">
          <label for=\"\" class=\"col-md-4 control-label\">Lignes / Page </label>
          <div class=\"col-md-4\">
            <select name=\"config[rows_per_page]\">
                  <option {% if app_config.rows_per_page ==\"10\" %}selected=\"selected\"{% endif %} value=\"10\">10</option>
                  <option {% if app_config.rows_per_page ==\"50\" %}selected=\"selected\"{% endif %} value=\"50\">50</option>
                  <option {% if app_config.rows_per_page ==\"100\" %}selected=\"selected\"{% endif %} value=\"100\">100</option>
                  <option {% if app_config.rows_per_page ==\"200\" %}selected=\"selected\"{% endif %} value=\"200\">200</option>
              </select>
          </div>
        </div>
        <div class=\"form-group\">
          <label for=\"\" class=\"col-md-4 control-label\">Style CSS </label>
          <div class=\"col-md-4\">
            <textarea rows=\"3\" name=\"config[app_css]\" placeholder=\"ajouter une description...\" class=\"form-control\">{{app_config.app_css}}</textarea>
          </div>
        </div>
        </div><!-- /tab2 -->
    </div> <!-- /tab-content -->
   </div>
       <div class=\"form-group\">
         <div class=\"col-md-offset-4 col-md-4\">
           <button type=\"submit\" name=\"subvalider\" class=\"btn btn-primary btn-embossed\"><span class=\"fui-check-inverted\"></span> Mettre à jour</button>
         </div>
       </div>
</form>
   
{% endblock body %}
{% block javascripts %}
{{ parent() }}
<script> 
    (function(\$) {

        \$('.form-group').find('.col-md-6').removeClass('col-md-6').addClass('col-md-4');
        \$('select').removeClass('form-control').select2({minimumResultsForSearch: -1});
    })(jQuery);
</script>
{% endblock %}
", "BenDoctorsBundle:Config:index.html.twig", "/home/pacifik/Desktop/Doctors-master/src/Ben/DoctorsBundle/Resources/views/Config/index.html.twig");
    }
}
