<?php

/* BenUserBundle:admin:index.html.twig */
class __TwigTemplate_9671ae36e7092a2193e574577d1a206cc8b0bf095848324ab93fa48bcfeddf66 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("BenUserBundle::layout.html.twig", "BenUserBundle:admin:index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "BenUserBundle::layout.html.twig";
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
        echo "
<h3><span class=\"glyphicon glyphicon-user\"></span> Manage Users</h3>
        <form  id=\"jsForm\" role=\"form\" method=\"post\" action=\"\">
          <input id=\"pagenumber\" type=\"hidden\" name=\"searchParam[page]\" value=\"1\"> 
            <div class=\"row hide-print\">
              <div class=\"col-md-5 form-group\">
                <div class=\"input-group\">
                  <input type=\"text\" name=\"searchParam[keyword]\" class=\"form-control\" placeholder=\"Search\">
                  <div class=\"input-group-btn\">
                  <button class=\"btn btn-default\" type=\"button\"><span class=\"glyphicon glyphicon-search\"></span></button>
                  </div><!-- /btn-group -->
                </div><!-- /input-group -->
              </div><!-- /.col-md-6 -->

              <div class=\"col-md-2\">
                <div class=\"col-md-9\">
                <select id=\"js-perpage\" name=\"searchParam[perPage]\" class=\"form-control\">
                  <option value=\"10\" ";
        // line 23
        if (($this->getAttribute(($context["app_config"] ?? $this->getContext($context, "app_config")), "rows_per_page", array()) == 10)) {
            echo "selected";
        }
        echo ">10</option>
                  <option value=\"20\" ";
        // line 24
        if (($this->getAttribute(($context["app_config"] ?? $this->getContext($context, "app_config")), "rows_per_page", array()) == 20)) {
            echo "selected";
        }
        echo ">20</option>
                  <option value=\"50\" ";
        // line 25
        if (($this->getAttribute(($context["app_config"] ?? $this->getContext($context, "app_config")), "rows_per_page", array()) == 50)) {
            echo "selected";
        }
        echo ">50</option>
                  <option value=\"100\" ";
        // line 26
        if (($this->getAttribute(($context["app_config"] ?? $this->getContext($context, "app_config")), "rows_per_page", array()) == 100)) {
            echo "selected";
        }
        echo ">100</option>
                </select>
                </div>
              </div>

              <div class=\"col-lg-5\">
                <div class=\"btn-group pull-right\">              
                  <button class=\"btn btn-primary \"><span class=\"glyphicon glyphicon-cog\"></span>  Select action</button>
                  <button class=\"btn btn-primary dropdown-toggle\" data-toggle=\"dropdown\">
                    <span class=\"caret\"></span>
                  </button>
                  <span class=\"dropdown-arrow dropdown-arrow-inverse\"></span>
                  <ul class=\"dropdown-menu dropdown-inverse\">
                      <li><a href=\"";
        // line 39
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ben_new_user");
        echo "\"><span class=\"glyphicon glyphicon-plus\"></span> Add user</a></li>
                      <li><a href=\"#\" class=\"js-enable\" data-action=\"1\"><span class=\"glyphicon glyphicon-ok-circle\"></span> Activate</a></li>
                      <li><a href=\"#\" class=\"js-enable\" data-action=\"0\"><span class=\"glyphicon glyphicon-ban-circle\"></span> Deactivate</a></li>
                      <li><a href=\"#\" class=\"js-promote\" data-action=\"USER\"><span class=\"glyphicon glyphicon-user\"></span> Promote to user</a></li>
                      <li><a href=\"#\" class=\"js-promote\" data-action=\"MANAGER\"><span class=\"glyphicon glyphicon-user\"></span> Promote to manager</a></li>
                      <li><a href=\"#\" class=\"js-promote\" data-action=\"ADMIN\"><span class=\"glyphicon glyphicon-user\"></span> Promote to Admin</a></li>
                      <li class=\"divider\"></li>
                      <li><a href=\"";
        // line 46
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ben_users_export");
        echo "\"><span class=\"glyphicon glyphicon-export\"></span> Export to csv</a></li>
                      <li><a id=\"btnPrint\"><span class=\"glyphicon glyphicon-print\"></span> Print</a></li>
                      <li><a href=\"#\" id=\"js-delete\"><span class=\"glyphicon glyphicon-trash\"></span> Delete</a></li>
                  </ul>
                </div>
              </div><!-- /.col-lg-2 -->
            </div><!-- /.row -->

            <table class=\"table table-striped table-hover table-bordered\">
                <thead>
                    <tr>
                        <th><input id=\"checkall\" type=\"checkbox\" value=\"\"></th>
                        <th class=\"col-md-2\">Status</th>
                        <th>Full Name</th>
                        <th>Email</th>
                        <th>Number</th>
                        <th>Role</th>
                        <th class=\"hide-print\">Action</th>
                    </tr>
                </thead>
                <tbody id=\"dataContainer\"></tbody>
            </table>
            <div>
              <em><strong>Total:</strong> ";
        // line 69
        echo twig_escape_filter($this->env, ($context["entitiesLength"] ?? $this->getContext($context, "entitiesLength")), "html", null, true);
        echo " user(s)</em>
            </div>
        </form>
   
<div class=\"clearfix\"></div> 
";
    }

    // line 76
    public function block_javascripts($context, array $blocks = array())
    {
        // line 77
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
<script> 
    (function(\$) {

      /* helper functions */
      function getUrl(id){
        var url = '";
        // line 83
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ben_show_user", array("id" => 1111));
        echo "';
        return url.replace(\"1111\", id);
      }
      function updateLink (link) {
        moreBtn.attr('href', link);
      }
      function getCheckedRows () {
        var users = [];
        dataContainer.find('input:checkbox:checked').each(function() {
          users.push(\$(this).val());
        });
        return users.join(',');
      }
      function init(){
        pageInput.val('1');
        checkboxBtn.prop(\"checked\",false);
        jsFormUrl = '";
        // line 99
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ben_users_ajax");
        echo "';
      }
      function ajaxPost(action) {
        container.addClass('working');
        \$.ajax({ 
          type: \"POST\", 
          data: form.serialize(),
          url: jsFormUrl, 
          success: function(data){ 
            container.removeClass('working');
            init();
            if(!action){
              dataContainer.empty().hide().html(data).fadeIn();
            }else ajaxPost();
          },
          error:function(){
              alert('service denied');
              container.removeClass('working');
          }
        });
        return false;
      }

      /* ajax dashboard*/
      var container= \$('.container'),
          form = \$('#jsForm'),
          dataContainer = form.find('#dataContainer');
          enableBtn = form.find('.js-enable'),
          promoteBtn = form.find('.js-promote'),
          deleteBtn = form.find('#js-delete'),
          pageInput = form.find('#pagenumber'),
          perPageBtn = form.find('#js-perpage'),
          jsFormUrl = '',
          checkboxBtn = form.find(\"input:checkbox\");

      /* pagination */    
      form.on('click', '.js-page', function(){
          pageInput.val(\$(this).data('page'));
          ajaxPost();
      });

      /* number of rows per page */
      perPageBtn.on('change', ajaxPost);

      /* enable or disable a user*/
      enableBtn.on('click', function(){
        var url = '";
        // line 145
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ben_enable_users", array("etat" => 1111));
        echo "',
            etat = \$(this).data('action');
        jsFormUrl = url.replace(\"1111\", etat);
        ajaxPost('enable');
      });

      /* promote a user */
      promoteBtn.on('click', function(){
        var url='";
        // line 153
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ben_promote_users", array("role" => 1111));
        echo "',
            etat = \$(this).data('action');
        jsFormUrl = url.replace(\"1111\", etat);
        ajaxPost('promote');
      });

      /* delete a user */
      deleteBtn.on('click', function(){
        if(!confirmation()) return false;
        jsFormUrl = '";
        // line 162
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ben_remove_users");
        echo "';
        ajaxPost('delete');
      });
      form.on('submit', ajaxPost);

      /* submit the form after loading the page*/
      init();
      setTimeout(ajaxPost, 1);

      /* dropdown sub menu */
      \$('.dropdown-submenu').hover(function() {
        \$(this).find('.dropdown-menu').toggleClass('open');
      });

    })(jQuery);
</script>
";
    }

    public function getTemplateName()
    {
        return "BenUserBundle:admin:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  247 => 162,  235 => 153,  224 => 145,  175 => 99,  156 => 83,  147 => 77,  144 => 76,  134 => 69,  108 => 46,  98 => 39,  80 => 26,  74 => 25,  68 => 24,  62 => 23,  43 => 6,  40 => 5,  33 => 3,  30 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"BenUserBundle::layout.html.twig\" %}
{% block title %}
Tableau de bord | {{ parent() }}
{% endblock %}
{% block body %}

<h3><span class=\"glyphicon glyphicon-user\"></span> Manage Users</h3>
        <form  id=\"jsForm\" role=\"form\" method=\"post\" action=\"\">
          <input id=\"pagenumber\" type=\"hidden\" name=\"searchParam[page]\" value=\"1\"> 
            <div class=\"row hide-print\">
              <div class=\"col-md-5 form-group\">
                <div class=\"input-group\">
                  <input type=\"text\" name=\"searchParam[keyword]\" class=\"form-control\" placeholder=\"Search\">
                  <div class=\"input-group-btn\">
                  <button class=\"btn btn-default\" type=\"button\"><span class=\"glyphicon glyphicon-search\"></span></button>
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

              <div class=\"col-lg-5\">
                <div class=\"btn-group pull-right\">              
                  <button class=\"btn btn-primary \"><span class=\"glyphicon glyphicon-cog\"></span>  Select action</button>
                  <button class=\"btn btn-primary dropdown-toggle\" data-toggle=\"dropdown\">
                    <span class=\"caret\"></span>
                  </button>
                  <span class=\"dropdown-arrow dropdown-arrow-inverse\"></span>
                  <ul class=\"dropdown-menu dropdown-inverse\">
                      <li><a href=\"{{ path('ben_new_user') }}\"><span class=\"glyphicon glyphicon-plus\"></span> Add user</a></li>
                      <li><a href=\"#\" class=\"js-enable\" data-action=\"1\"><span class=\"glyphicon glyphicon-ok-circle\"></span> Activate</a></li>
                      <li><a href=\"#\" class=\"js-enable\" data-action=\"0\"><span class=\"glyphicon glyphicon-ban-circle\"></span> Deactivate</a></li>
                      <li><a href=\"#\" class=\"js-promote\" data-action=\"USER\"><span class=\"glyphicon glyphicon-user\"></span> Promote to user</a></li>
                      <li><a href=\"#\" class=\"js-promote\" data-action=\"MANAGER\"><span class=\"glyphicon glyphicon-user\"></span> Promote to manager</a></li>
                      <li><a href=\"#\" class=\"js-promote\" data-action=\"ADMIN\"><span class=\"glyphicon glyphicon-user\"></span> Promote to Admin</a></li>
                      <li class=\"divider\"></li>
                      <li><a href=\"{{ path('ben_users_export') }}\"><span class=\"glyphicon glyphicon-export\"></span> Export to csv</a></li>
                      <li><a id=\"btnPrint\"><span class=\"glyphicon glyphicon-print\"></span> Print</a></li>
                      <li><a href=\"#\" id=\"js-delete\"><span class=\"glyphicon glyphicon-trash\"></span> Delete</a></li>
                  </ul>
                </div>
              </div><!-- /.col-lg-2 -->
            </div><!-- /.row -->

            <table class=\"table table-striped table-hover table-bordered\">
                <thead>
                    <tr>
                        <th><input id=\"checkall\" type=\"checkbox\" value=\"\"></th>
                        <th class=\"col-md-2\">Status</th>
                        <th>Full Name</th>
                        <th>Email</th>
                        <th>Number</th>
                        <th>Role</th>
                        <th class=\"hide-print\">Action</th>
                    </tr>
                </thead>
                <tbody id=\"dataContainer\"></tbody>
            </table>
            <div>
              <em><strong>Total:</strong> {{ entitiesLength }} user(s)</em>
            </div>
        </form>
   
<div class=\"clearfix\"></div> 
{% endblock body %}

 {% block javascripts %}
{{ parent() }}
<script> 
    (function(\$) {

      /* helper functions */
      function getUrl(id){
        var url = '{{ path('ben_show_user', {'id': 1111 }) }}';
        return url.replace(\"1111\", id);
      }
      function updateLink (link) {
        moreBtn.attr('href', link);
      }
      function getCheckedRows () {
        var users = [];
        dataContainer.find('input:checkbox:checked').each(function() {
          users.push(\$(this).val());
        });
        return users.join(',');
      }
      function init(){
        pageInput.val('1');
        checkboxBtn.prop(\"checked\",false);
        jsFormUrl = '{{ path('ben_users_ajax') }}';
      }
      function ajaxPost(action) {
        container.addClass('working');
        \$.ajax({ 
          type: \"POST\", 
          data: form.serialize(),
          url: jsFormUrl, 
          success: function(data){ 
            container.removeClass('working');
            init();
            if(!action){
              dataContainer.empty().hide().html(data).fadeIn();
            }else ajaxPost();
          },
          error:function(){
              alert('service denied');
              container.removeClass('working');
          }
        });
        return false;
      }

      /* ajax dashboard*/
      var container= \$('.container'),
          form = \$('#jsForm'),
          dataContainer = form.find('#dataContainer');
          enableBtn = form.find('.js-enable'),
          promoteBtn = form.find('.js-promote'),
          deleteBtn = form.find('#js-delete'),
          pageInput = form.find('#pagenumber'),
          perPageBtn = form.find('#js-perpage'),
          jsFormUrl = '',
          checkboxBtn = form.find(\"input:checkbox\");

      /* pagination */    
      form.on('click', '.js-page', function(){
          pageInput.val(\$(this).data('page'));
          ajaxPost();
      });

      /* number of rows per page */
      perPageBtn.on('change', ajaxPost);

      /* enable or disable a user*/
      enableBtn.on('click', function(){
        var url = '{{ path('ben_enable_users', {'etat': 1111 }) }}',
            etat = \$(this).data('action');
        jsFormUrl = url.replace(\"1111\", etat);
        ajaxPost('enable');
      });

      /* promote a user */
      promoteBtn.on('click', function(){
        var url='{{ path('ben_promote_users', {'role': 1111 }) }}',
            etat = \$(this).data('action');
        jsFormUrl = url.replace(\"1111\", etat);
        ajaxPost('promote');
      });

      /* delete a user */
      deleteBtn.on('click', function(){
        if(!confirmation()) return false;
        jsFormUrl = '{{ path('ben_remove_users') }}';
        ajaxPost('delete');
      });
      form.on('submit', ajaxPost);

      /* submit the form after loading the page*/
      init();
      setTimeout(ajaxPost, 1);

      /* dropdown sub menu */
      \$('.dropdown-submenu').hover(function() {
        \$(this).find('.dropdown-menu').toggleClass('open');
      });

    })(jQuery);
</script>
{% endblock %}
", "BenUserBundle:admin:index.html.twig", "/home/pacifik/Desktop/Doctors-master/src/Ben/UserBundle/Resources/views/admin/index.html.twig");
    }
}
