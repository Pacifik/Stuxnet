<?php

/* BenDoctorsBundle:Meds:index.html.twig */
class __TwigTemplate_fe0c81f857e99857ebbc7ed2de7c2a543a3b6ebbec3423a09855a02ada6abd11 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("BenDoctorsBundle::layout.html.twig", "BenDoctorsBundle:Meds:index.html.twig", 1);
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
        echo "<h3><span class=\"glyphicon glyphicon-leaf\"></span> Liste des médicaments</h3>
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


              <div class=\"col-md-2\">
                <div class=\"col-md-9\">
                <select id=\"js-perpage\" name=\"searchParam[perPage]\" class=\"form-control\">
                  <option value=\"10\" ";
        // line 26
        if (($this->getAttribute(($context["app_config"] ?? $this->getContext($context, "app_config")), "rows_per_page", array()) == 10)) {
            echo "selected";
        }
        echo ">10</option>
                  <option value=\"20\" ";
        // line 27
        if (($this->getAttribute(($context["app_config"] ?? $this->getContext($context, "app_config")), "rows_per_page", array()) == 20)) {
            echo "selected";
        }
        echo ">20</option>
                  <option value=\"50\" ";
        // line 28
        if (($this->getAttribute(($context["app_config"] ?? $this->getContext($context, "app_config")), "rows_per_page", array()) == 50)) {
            echo "selected";
        }
        echo ">50</option>
                  <option value=\"100\" ";
        // line 29
        if (($this->getAttribute(($context["app_config"] ?? $this->getContext($context, "app_config")), "rows_per_page", array()) == 100)) {
            echo "selected";
        }
        echo ">100</option>
                </select>
                </div>
              </div>

          <div class=\"col-md-5\">
            <div class=\"btn-group pull-right\">                       
                  <a href=\"#\" data-toggle=\"modal\" data-target=\"#searchModal\" class=\"btn btn-primary\"><span class=\"glyphicon glyphicon-cog\"></span> Selectioner une action</a>
              <button class=\"btn btn-primary dropdown-toggle\" data-toggle=\"dropdown\">
                <span class=\"caret\"></span>
              </button>
              <ul class=\"dropdown-menu\" role=\"menu\">
                <li><a href=\"";
        // line 41
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("meds_new");
        echo "\"><span class=\"glyphicon glyphicon-plus\"></span> Nouveau</a></li>
                <li><a href=\"#\" id=\"js-delete\"><span class=\"glyphicon glyphicon-trash\"></span> Supprimer</a></li>
              </ul>
            </div>
          </div>
        </div><!-- /.row --> 
        <table class=\"table table-striped table-hover table-bordered\">
        <thead>
            <tr>
                <th class=\"hidden-print\"><input id=\"checkall\" type=\"checkbox\" value=\"\"></th>
                <th class=\"sortable\"><a href=\"#\" class=\"js-sort\" data-order=\"name\">Nom<span class=\"glyphicon glyphicon-sort pull-right\"></span></a></th>
                <th class=\"sortable\"><a href=\"#\" class=\"js-sort\" data-order=\"count\">Quantité<span class=\"glyphicon glyphicon-sort pull-right\"></span></a></th>
                <th>Type</th>
                <th>Description</th>
                <th class=\"sortable\"><a href=\"#\" class=\"js-sort\" data-order=\"expdate\">Date d'expiration<span class=\"glyphicon glyphicon-sort pull-right\"></span></a></th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody id=\"dataContainer\"></tbody>
        </table>
        <div class=\"caption\">
          <strong>Total:</strong> <em>";
        // line 62
        echo twig_escape_filter($this->env, ($context["entitiesLength"] ?? $this->getContext($context, "entitiesLength")), "html", null, true);
        echo " Médicaments</em>
        </div>
</form>
";
    }

    // line 66
    public function block_javascripts($context, array $blocks = array())
    {
        // line 67
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
        // line 89
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("meds_ajax");
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
        // line 145
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("meds_remove");
        echo "';
        ajaxPost('delete');
      });
      form.on('submit', function(){
        ajaxPost();
        return false;
      });
      /* submit the form after loading the page*/
      init();
      ajaxPost();

    })(jQuery);
</script>
";
    }

    public function getTemplateName()
    {
        return "BenDoctorsBundle:Meds:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  219 => 145,  160 => 89,  135 => 67,  132 => 66,  124 => 62,  100 => 41,  83 => 29,  77 => 28,  71 => 27,  65 => 26,  43 => 6,  40 => 5,  33 => 3,  30 => 2,  11 => 1,);
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
<h3><span class=\"glyphicon glyphicon-leaf\"></span> Liste des médicaments</h3>
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


              <div class=\"col-md-2\">
                <div class=\"col-md-9\">
                <select id=\"js-perpage\" name=\"searchParam[perPage]\" class=\"form-control\">
                  <option value=\"10\" {% if app_config.rows_per_page == 10 %}selected{% endif %}>10</option>
                  <option value=\"20\" {% if app_config.rows_per_page == 20 %}selected{% endif %}>20</option>
                  <option value=\"50\" {% if app_config.rows_per_page == 50 %}selected{% endif %}>50</option>
                  <option value=\"100\" {% if app_config.rows_per_page == 100 %}selected{% endif %}>100</option>
                </select>
                </div>
              </div>

          <div class=\"col-md-5\">
            <div class=\"btn-group pull-right\">                       
                  <a href=\"#\" data-toggle=\"modal\" data-target=\"#searchModal\" class=\"btn btn-primary\"><span class=\"glyphicon glyphicon-cog\"></span> Selectioner une action</a>
              <button class=\"btn btn-primary dropdown-toggle\" data-toggle=\"dropdown\">
                <span class=\"caret\"></span>
              </button>
              <ul class=\"dropdown-menu\" role=\"menu\">
                <li><a href=\"{{ path('meds_new') }}\"><span class=\"glyphicon glyphicon-plus\"></span> Nouveau</a></li>
                <li><a href=\"#\" id=\"js-delete\"><span class=\"glyphicon glyphicon-trash\"></span> Supprimer</a></li>
              </ul>
            </div>
          </div>
        </div><!-- /.row --> 
        <table class=\"table table-striped table-hover table-bordered\">
        <thead>
            <tr>
                <th class=\"hidden-print\"><input id=\"checkall\" type=\"checkbox\" value=\"\"></th>
                <th class=\"sortable\"><a href=\"#\" class=\"js-sort\" data-order=\"name\">Nom<span class=\"glyphicon glyphicon-sort pull-right\"></span></a></th>
                <th class=\"sortable\"><a href=\"#\" class=\"js-sort\" data-order=\"count\">Quantité<span class=\"glyphicon glyphicon-sort pull-right\"></span></a></th>
                <th>Type</th>
                <th>Description</th>
                <th class=\"sortable\"><a href=\"#\" class=\"js-sort\" data-order=\"expdate\">Date d'expiration<span class=\"glyphicon glyphicon-sort pull-right\"></span></a></th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody id=\"dataContainer\"></tbody>
        </table>
        <div class=\"caption\">
          <strong>Total:</strong> <em>{{ entitiesLength }} Médicaments</em>
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
        jsFormUrl = '{{ path('meds_ajax') }}';
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
        jsFormUrl='{{ path('meds_remove') }}';
        ajaxPost('delete');
      });
      form.on('submit', function(){
        ajaxPost();
        return false;
      });
      /* submit the form after loading the page*/
      init();
      ajaxPost();

    })(jQuery);
</script>
{% endblock %}





", "BenDoctorsBundle:Meds:index.html.twig", "/home/pacifik/Desktop/Doctors-master/src/Ben/DoctorsBundle/Resources/views/Meds/index.html.twig");
    }
}
