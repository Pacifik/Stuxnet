<?php

/* BenDoctorsBundle:Person:index.html.twig */
class __TwigTemplate_980404e3bf89132c7d8a067227161d2fae6a023582833ac758447089684c1c56 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("BenDoctorsBundle::layout.html.twig", "BenDoctorsBundle:Person:index.html.twig", 1);
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
        echo "<h3><span class=\"glyphicon glyphicon-user\"></span> Person list</h3>
<form  id=\"jsForm\" role=\"form\" method=\"post\" action=\"\">
        <input id=\"pagenumber\" type=\"hidden\" name=\"searchParam[page]\" value=\"1\"> 
        <input id=\"sortBy\" type=\"hidden\" name=\"searchParam[sortBy]\" value=\"all\"> 
        <input id=\"sortDir\" type=\"hidden\" name=\"searchParam[sortDir]\" value=\"ASC\"> 

        <div class=\"row hidden-print\">
          <div class=\"col-md-5 form-group\">
            <div class=\"input-group\">
              <input type=\"text\" name=\"searchParam[keyword]\" class=\"form-control\" placeholder=\"Search\">
              <div class=\"input-group-btn\">
              <button class=\"btn btn-default\" type=\"submit\"><span class=\"glyphicon glyphicon-search\"></span></button>
              </div><!-- /btn-group -->
            </div><!-- /input-group -->
          </div><!-- /.col-md-6 -->
          <div class=\"col-md-7\">
            <div class=\"btn-group pull-right\">                       
              <button class=\"btn btn-primary \"><span class=\"glyphicon glyphicon-cog\"></span>  Select action</button>
              <button class=\"btn btn-primary dropdown-toggle\" data-toggle=\"dropdown\">
                <span class=\"caret\"></span>
              </button>
              <ul class=\"dropdown-menu\" role=\"menu\">
                <li><a href=\"#\" data-toggle=\"modal\" data-target=\"#searchModal\"><span class=\"glyphicon glyphicon-search\"></span> Advanced research</a></li>
                <li><a href=\"";
        // line 29
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("person_new");
        echo "\"><span class=\"glyphicon glyphicon-plus\"></span> Ajouter</a></li>
                <li><a href=\"#\" id=\"js-delete\"><span class=\"glyphicon glyphicon-trash\"></span> Delete</a></li>
              </ul>
            </div>
          </div>
        </div><!-- /.row --> 
        <table class=\"table table-striped table-hover table-bordered\">
            <thead>
            <tr>
                <th class=\"hidden-print\"><input id=\"checkall\" type=\"checkbox\" value=\"\"></th>
                <th class=\"sortable\"><a href=\"#\" class=\"js-sort\" data-order=\"familyname\">Nom<span class=\"glyphicon glyphicon-sort pull-right\"></span></a></th>
                <th class=\"sortable\"><a href=\"#\" class=\"js-sort\" data-order=\"firstname\">Prenom<span class=\"glyphicon glyphicon-sort pull-right\"></span></a></th>
                <th>Cin</th>
                <th>Cne</th>
                <th>Province</th>
                <th class=\"sortable\"><a href=\"#\" class=\"js-sort\" data-order=\"birthday\">Date de naissance<span class=\"glyphicon glyphicon-sort pull-right\"></span></a></th>
                <th class=\"hidden-print\">Actions</th>
            </tr>
            </thead>
            <tbody id=\"dataContainer\"></tbody>
        </table>
        <div class=\"caption\">
          <strong>Total:</strong> <em>";
        // line 51
        echo twig_escape_filter($this->env, ($context["entitiesLength"] ?? $this->getContext($context, "entitiesLength")), "html", null, true);
        echo " Etudiants</em>
        </div>
    <!-- Modal advanced search -->
<div class=\"modal fade\" id=\"searchModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"searchModalLabel\" aria-hidden=\"true\">
  <div class=\"modal-dialog\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">×</button>
        <h4 class=\"modal-title\" id=\"searchModalLabel\">Recherche avancée</h4>
      </div>
      <div class=\"modal-body form-horizontal\">
          <div class=\"form-group\">
            <label for=\"\" class=\"col-sm-5 control-label\">CIN</label>
            <div class=\"col-sm-6\">
              <input type=\"text\" name=\"searchParam[cin]\" class=\"form-control\">
            </div>
          </div>
          <div class=\"form-group\">
            <label for=\"\" class=\"col-sm-5 control-label\">Sexe</label>
            <div class=\"col-sm-6\">
              <select id=\"genderselect\" name=\"searchParam[gender]\" class=\"select2 no-search\">
                <option value=\"\">Tous</option>
                <option value=\"Masculin\">Masculin</option>
                <option value=\"Féminin\">Féminin</option>
              </select>
            </div>
          </div>
          <div class=\"form-group\">
            <label for=\"\" class=\"col-sm-5 control-label\">Ville</label>
            <div class=\"col-sm-6\">
              <select id=\"cityselect\" name=\"searchParam[city]\" class=\"select2 search\">
                <option value=\"\">Tous</option>
                ";
        // line 83
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["cities"] ?? $this->getContext($context, "cities")));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 84
            echo "                  <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "label", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "label", array()), "html", null, true);
            echo "</option>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 86
        echo "              </select>
            </div>
          </div>
          <div class=\"form-group\">
            <label for=\"\" class=\"col-sm-5 control-label\">Lignes par page</label>
            <div class=\"col-sm-6\">
                <select id=\"js-perpage\" name=\"searchParam[perPage]\" class=\"select2 no-search\">
                  <option value=\"10\" ";
        // line 93
        if (($this->getAttribute(($context["app_config"] ?? $this->getContext($context, "app_config")), "rows_per_page", array()) == 10)) {
            echo "selected";
        }
        echo ">10</option>
                  <option value=\"20\" ";
        // line 94
        if (($this->getAttribute(($context["app_config"] ?? $this->getContext($context, "app_config")), "rows_per_page", array()) == 20)) {
            echo "selected";
        }
        echo ">20</option>
                  <option value=\"50\" ";
        // line 95
        if (($this->getAttribute(($context["app_config"] ?? $this->getContext($context, "app_config")), "rows_per_page", array()) == 50)) {
            echo "selected";
        }
        echo ">50</option>
                  <option value=\"100\" ";
        // line 96
        if (($this->getAttribute(($context["app_config"] ?? $this->getContext($context, "app_config")), "rows_per_page", array()) == 100)) {
            echo "selected";
        }
        echo ">100</option>
                </select>
            </div>
          </div>
      </div>
      <div class=\"modal-footer\">
        <button type=\"submit\" class=\"btn btn-primary\">Rechercher</button>
      </div>
    </div>
  </div>
</div>
</form>
";
    }

    // line 109
    public function block_javascripts($context, array $blocks = array())
    {
        // line 110
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
<script> 
    (function(\$) {

      /* helper functions */
      function getCheckedRows () {
        var users = [];
        dataContainer.find('input:checkbox:checked').each(function() {
          users.push(\$(this).val());
        });
        return users.join(',');
      }
      function isSelected () {
        if (!getCheckedRows()) {
          alert('vous devez selectionner au moin un adhérant');
          return false;
        };
        return true;
      }
      function init(){
        pageInput.val('1');
        checkboxBtn.prop(\"checked\",false);
        jsFormUrl = '";
        // line 132
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("person_ajax");
        echo "';
      }
      function ajaxPost(action, callback) {
        form.addClass('working');
        searchModal.modal('hide');
        \$.ajax({ 
          type: \"POST\", 
          data: form.serialize(),
          url: jsFormUrl, 
          success: function(data){ 
            form.removeClass('working');
            if(callback) callback(data);
            init();
            if(!action) dataContainer.empty().hide().html(data).fadeIn();
            else ajaxPost();
          },
          error:function(){
              form.removeClass('working');
          }
        });
        return false;
      }

      /* ajax dashboard*/
      var form = \$('#jsForm'),
          dataContainer = form.find('#dataContainer'),
          deleteBtn = form.find('#js-delete'),
          pageInput = form.find('#pagenumber'),
          sortByInput = form.find('#sortBy'),
          sortDirInput = form.find('#sortDir'),
          sortBtn = form.find('.js-sort'),
          searchModal = form.find('#searchModal'),
          jsFormUrl = '',
          checkboxBtn = form.find(\"input:checkbox\");


      /* pagination */    
      form.on('click', '.js-page', function(){
          pageInput.val(\$(this).data('page'));
          ajaxPost();
      });

      /* change sort order */
      sortBtn.on('click', function(){
        var th = \$(this).parent();
        th.addClass('sorted').toggleClass('asc').siblings().removeClass('sorted');
        sortByInput.val(\$(this).data('order'));
        if (th.hasClass('asc')) sortDirInput.val('ASC');
        else sortDirInput.val('DESC');
        ajaxPost();
        return false;
      });

      /* delete a user */
      deleteBtn.on('click', function(){
        if (!isSelected() || !confirmation('voullez-vous vraiment supprimer les adhérants séléctionnées')) return false;
        jsFormUrl='";
        // line 188
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("person_remove");
        echo "';
        ajaxPost('delete');
      });
      form.on('submit', ajaxPost);
      /* submit the form after loading the page*/
      init();
      ajaxPost();
      
    })(jQuery);
</script>
";
    }

    public function getTemplateName()
    {
        return "BenDoctorsBundle:Person:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  276 => 188,  217 => 132,  192 => 110,  189 => 109,  170 => 96,  164 => 95,  158 => 94,  152 => 93,  143 => 86,  132 => 84,  128 => 83,  93 => 51,  68 => 29,  43 => 6,  40 => 5,  33 => 3,  30 => 2,  11 => 1,);
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
<h3><span class=\"glyphicon glyphicon-user\"></span> Person list</h3>
<form  id=\"jsForm\" role=\"form\" method=\"post\" action=\"\">
        <input id=\"pagenumber\" type=\"hidden\" name=\"searchParam[page]\" value=\"1\"> 
        <input id=\"sortBy\" type=\"hidden\" name=\"searchParam[sortBy]\" value=\"all\"> 
        <input id=\"sortDir\" type=\"hidden\" name=\"searchParam[sortDir]\" value=\"ASC\"> 

        <div class=\"row hidden-print\">
          <div class=\"col-md-5 form-group\">
            <div class=\"input-group\">
              <input type=\"text\" name=\"searchParam[keyword]\" class=\"form-control\" placeholder=\"Search\">
              <div class=\"input-group-btn\">
              <button class=\"btn btn-default\" type=\"submit\"><span class=\"glyphicon glyphicon-search\"></span></button>
              </div><!-- /btn-group -->
            </div><!-- /input-group -->
          </div><!-- /.col-md-6 -->
          <div class=\"col-md-7\">
            <div class=\"btn-group pull-right\">                       
              <button class=\"btn btn-primary \"><span class=\"glyphicon glyphicon-cog\"></span>  Select action</button>
              <button class=\"btn btn-primary dropdown-toggle\" data-toggle=\"dropdown\">
                <span class=\"caret\"></span>
              </button>
              <ul class=\"dropdown-menu\" role=\"menu\">
                <li><a href=\"#\" data-toggle=\"modal\" data-target=\"#searchModal\"><span class=\"glyphicon glyphicon-search\"></span> Advanced research</a></li>
                <li><a href=\"{{ path('person_new') }}\"><span class=\"glyphicon glyphicon-plus\"></span> Ajouter</a></li>
                <li><a href=\"#\" id=\"js-delete\"><span class=\"glyphicon glyphicon-trash\"></span> Delete</a></li>
              </ul>
            </div>
          </div>
        </div><!-- /.row --> 
        <table class=\"table table-striped table-hover table-bordered\">
            <thead>
            <tr>
                <th class=\"hidden-print\"><input id=\"checkall\" type=\"checkbox\" value=\"\"></th>
                <th class=\"sortable\"><a href=\"#\" class=\"js-sort\" data-order=\"familyname\">Nom<span class=\"glyphicon glyphicon-sort pull-right\"></span></a></th>
                <th class=\"sortable\"><a href=\"#\" class=\"js-sort\" data-order=\"firstname\">Prenom<span class=\"glyphicon glyphicon-sort pull-right\"></span></a></th>
                <th>Cin</th>
                <th>Cne</th>
                <th>Province</th>
                <th class=\"sortable\"><a href=\"#\" class=\"js-sort\" data-order=\"birthday\">Date de naissance<span class=\"glyphicon glyphicon-sort pull-right\"></span></a></th>
                <th class=\"hidden-print\">Actions</th>
            </tr>
            </thead>
            <tbody id=\"dataContainer\"></tbody>
        </table>
        <div class=\"caption\">
          <strong>Total:</strong> <em>{{ entitiesLength }} Etudiants</em>
        </div>
    <!-- Modal advanced search -->
<div class=\"modal fade\" id=\"searchModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"searchModalLabel\" aria-hidden=\"true\">
  <div class=\"modal-dialog\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">×</button>
        <h4 class=\"modal-title\" id=\"searchModalLabel\">Recherche avancée</h4>
      </div>
      <div class=\"modal-body form-horizontal\">
          <div class=\"form-group\">
            <label for=\"\" class=\"col-sm-5 control-label\">CIN</label>
            <div class=\"col-sm-6\">
              <input type=\"text\" name=\"searchParam[cin]\" class=\"form-control\">
            </div>
          </div>
          <div class=\"form-group\">
            <label for=\"\" class=\"col-sm-5 control-label\">Sexe</label>
            <div class=\"col-sm-6\">
              <select id=\"genderselect\" name=\"searchParam[gender]\" class=\"select2 no-search\">
                <option value=\"\">Tous</option>
                <option value=\"Masculin\">Masculin</option>
                <option value=\"Féminin\">Féminin</option>
              </select>
            </div>
          </div>
          <div class=\"form-group\">
            <label for=\"\" class=\"col-sm-5 control-label\">Ville</label>
            <div class=\"col-sm-6\">
              <select id=\"cityselect\" name=\"searchParam[city]\" class=\"select2 search\">
                <option value=\"\">Tous</option>
                {% for item in cities %}
                  <option value=\"{{ item.label }}\">{{ item.label }}</option>
                {% endfor %}
              </select>
            </div>
          </div>
          <div class=\"form-group\">
            <label for=\"\" class=\"col-sm-5 control-label\">Lignes par page</label>
            <div class=\"col-sm-6\">
                <select id=\"js-perpage\" name=\"searchParam[perPage]\" class=\"select2 no-search\">
                  <option value=\"10\" {% if app_config.rows_per_page == 10 %}selected{% endif %}>10</option>
                  <option value=\"20\" {% if app_config.rows_per_page == 20 %}selected{% endif %}>20</option>
                  <option value=\"50\" {% if app_config.rows_per_page == 50 %}selected{% endif %}>50</option>
                  <option value=\"100\" {% if app_config.rows_per_page == 100 %}selected{% endif %}>100</option>
                </select>
            </div>
          </div>
      </div>
      <div class=\"modal-footer\">
        <button type=\"submit\" class=\"btn btn-primary\">Rechercher</button>
      </div>
    </div>
  </div>
</div>
</form>
{% endblock body %}
{% block javascripts %}
{{ parent() }}
<script> 
    (function(\$) {

      /* helper functions */
      function getCheckedRows () {
        var users = [];
        dataContainer.find('input:checkbox:checked').each(function() {
          users.push(\$(this).val());
        });
        return users.join(',');
      }
      function isSelected () {
        if (!getCheckedRows()) {
          alert('vous devez selectionner au moin un adhérant');
          return false;
        };
        return true;
      }
      function init(){
        pageInput.val('1');
        checkboxBtn.prop(\"checked\",false);
        jsFormUrl = '{{ path('person_ajax') }}';
      }
      function ajaxPost(action, callback) {
        form.addClass('working');
        searchModal.modal('hide');
        \$.ajax({ 
          type: \"POST\", 
          data: form.serialize(),
          url: jsFormUrl, 
          success: function(data){ 
            form.removeClass('working');
            if(callback) callback(data);
            init();
            if(!action) dataContainer.empty().hide().html(data).fadeIn();
            else ajaxPost();
          },
          error:function(){
              form.removeClass('working');
          }
        });
        return false;
      }

      /* ajax dashboard*/
      var form = \$('#jsForm'),
          dataContainer = form.find('#dataContainer'),
          deleteBtn = form.find('#js-delete'),
          pageInput = form.find('#pagenumber'),
          sortByInput = form.find('#sortBy'),
          sortDirInput = form.find('#sortDir'),
          sortBtn = form.find('.js-sort'),
          searchModal = form.find('#searchModal'),
          jsFormUrl = '',
          checkboxBtn = form.find(\"input:checkbox\");


      /* pagination */    
      form.on('click', '.js-page', function(){
          pageInput.val(\$(this).data('page'));
          ajaxPost();
      });

      /* change sort order */
      sortBtn.on('click', function(){
        var th = \$(this).parent();
        th.addClass('sorted').toggleClass('asc').siblings().removeClass('sorted');
        sortByInput.val(\$(this).data('order'));
        if (th.hasClass('asc')) sortDirInput.val('ASC');
        else sortDirInput.val('DESC');
        ajaxPost();
        return false;
      });

      /* delete a user */
      deleteBtn.on('click', function(){
        if (!isSelected() || !confirmation('voullez-vous vraiment supprimer les adhérants séléctionnées')) return false;
        jsFormUrl='{{ path('person_remove') }}';
        ajaxPost('delete');
      });
      form.on('submit', ajaxPost);
      /* submit the form after loading the page*/
      init();
      ajaxPost();
      
    })(jQuery);
</script>
{% endblock %}
", "BenDoctorsBundle:Person:index.html.twig", "/home/pacifik/Desktop/Doctors-master/src/Ben/DoctorsBundle/Resources/views/Person/index.html.twig");
    }
}
