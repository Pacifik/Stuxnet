<?php

/* BenDoctorsBundle:Default:index.html.twig */
class __TwigTemplate_bd6dbe27fa4b4f6f3d8590f8710968632d77adac54ebf7da9dfbcceede35d9db extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("BenDoctorsBundle::layout.html.twig", "BenDoctorsBundle:Default:index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheet' => array($this, 'block_stylesheet'),
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
    public function block_stylesheet($context, array $blocks = array())
    {
        // line 6
        echo "   ";
        $this->displayParentBlock("stylesheet", $context, $blocks);
        echo "   
        <link href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("css/daterangepicker-bs3.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"><!-- Loading my css -->
        <style>
\t\t\t.links #reportrange, .links .btn {margin-top: 20px; margin-left: 5px;}
\t\t\t.links .btn{padding: 7px 16px !important;}
        </style>
    ";
    }

    // line 13
    public function block_body($context, array $blocks = array())
    {
        // line 15
        echo "<form action=\"#\" id=\"js-form\">
<div class=\"row\">
\t<div class=\"col-md-6\">
\t\t<h3><span class=\"glyphicon glyphicon-stats\"></span> Stats</h3>
\t</div>
\t<div class=\"col-md-6 links hidden-print\">
\t\t<div id=\"reportrange\" class=\"pull-right\">
            <i class=\"glyphicon glyphicon-calendar\"></i>
            <span>August 26, 2014 - August 26, 2014</span> <b class=\"caret\"></b>
        </div>
\t\t<a class=\"btn btn-primary pull-right\" id=\"btnPrint\"><span class=\"glyphicon glyphicon-print\"></span> Print</a>
\t\t<a class=\"btn btn-primary pull-right\" data-toggle=\"modal\" data-target=\"#widgetModal\"><span class=\"glyphicon glyphicon-filter\"></span> Indicators</a>
\t</div>
</div>
<!-- Modal advanced widget -->
<div class=\"modal fade\" id=\"widgetModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"widgetModalLabel\" aria-hidden=\"true\">
  <div class=\"modal-dialog\" style=\"width: 700px;\">
    <div class=\"modal-content\">
      <div class=\"modal-body\" style=\"padding: 0;\">
      <table class=\"table table-striped table-hover table-bordered\" style=\"margin: 0;\">
      \t<thead>
      \t\t<tr>
      \t\t\t<th><input type=\"checkbox\" id=\"checkall\" data-toggle=\"checkbox\"></th>
      \t\t\t<th>Indicators <button type=\"submit\" class=\"btn btn-xs btn-primary pull-right\">Send</button></th>
      \t\t</tr>
      \t</thead>
      \t<tbody>
      \t\t<tr>
\t\t\t\t<td><input type=\"checkbox\" id=\"meds\" name=\"widgets[meds]\" data-toggle=\"checkbox\"></td>
\t\t\t\t<td>Medecines delivered</td>
\t\t\t</tr>   \t\t\t\t\t\t
\t\t\t<tr>
\t\t\t\t<td><input type=\"checkbox\" id=\"stock\" name=\"widgets[stock]\" data-toggle=\"checkbox\"></td>
\t\t\t\t<td>Number of Medecines in stock</td>
\t\t\t</tr>\t\t\t\t
\t\t\t<tr>
\t\t\t\t<td><input type=\"checkbox\" id=\"cnss\" name=\"widgets[cnss]\" data-toggle=\"checkbox\"></td>
\t\t\t\t<td>Patients having a social coverage by each type</td>
\t\t\t</tr>\t\t\t\t
\t\t\t<tr>
\t\t\t\t<td><input type=\"checkbox\" id=\"consultations_demande\" name=\"widgets[consultations_demande]\" data-toggle=\"checkbox\"></td>
\t\t\t\t<td>Number of medical consultations by appointment</td>
\t\t\t</tr>\t\t\t\t 
\t\t\t<tr>
\t\t\t\t<td><input type=\"checkbox\" id=\"consultations_demande_gender\" name=\"widgets[consultations_demande_gender]\" data-toggle=\"checkbox\"></td>
\t\t\t\t<td>Number of medical consultations on appointment by gender</td>
\t\t\t</tr>\t\t\t\t
\t\t\t<tr>
\t\t\t\t<td><input type=\"checkbox\" id=\"consultations_demande_resident\" name=\"widgets[consultations_demande_resident]\" data-toggle=\"checkbox\"></td>
\t\t\t\t<td>Nombre des résidents ayant subi une consultation médicale à la demande</td>
\t\t\t</tr>\t\t\t\t 
\t\t\t<tr>
\t\t\t\t<td><input type=\"checkbox\" id=\"consultations_demande_resident_gender\" name=\"widgets[consultations_demande_resident_gender]\" data-toggle=\"checkbox\"></td>
\t\t\t\t<td>Nombre des résidents ayant subi une consultation médicale à la demande par sexe </td>
\t\t\t</tr>\t\t\t\t
\t\t\t<tr>
\t\t\t\t<td><input type=\"checkbox\" id=\"consultations_systematique_resident\" name=\"widgets[consultations_systematique_resident]\" data-toggle=\"checkbox\"></td>
\t\t\t\t<td>Nombre des résidents ayant subi un examen médical systématique </td>
\t\t\t</tr>\t\t\t\t
\t\t\t<tr>
\t\t\t\t<td><input type=\"checkbox\" id=\"consultations_systematique_resident_gender\" name=\"widgets[consultations_systematique_resident_gender]\" data-toggle=\"checkbox\"></td>
\t\t\t\t<td>Nombre des résidents ayant subi un examen médical systématique </td>
\t\t\t</tr>\t\t\t\t
\t\t\t<tr>
\t\t\t\t<td><input type=\"checkbox\" id=\"consultations_visual_issue\" name=\"widgets[consultations_visual_issue]\" data-toggle=\"checkbox\"></td>
\t\t\t\t<td>Nombre des résidents ayant subi un examen médical systématique </td>
\t\t\t</tr>\t\t\t\t
\t\t\t<tr>
\t\t\t\t<td><input type=\"checkbox\" id=\"consultations_special\" name=\"widgets[consultations_special]\" data-toggle=\"checkbox\"></td>
\t\t\t\t<td>Nombre des malades orientés vers la consultation médicale spécialisée par spécialité médicale </td>
\t\t\t</tr>\t\t\t\t
\t\t\t<tr>
\t\t\t\t<td><input type=\"checkbox\" id=\"consultations_special_gender\" name=\"widgets[consultations_special_gender]\" data-toggle=\"checkbox\"></td>
\t\t\t\t<td>Nombre des malades ayant subi une consultation médicale spécialisée par spécialité et par sexe </td>
\t\t\t</tr>\t\t\t\t
\t\t\t<tr>
\t\t\t\t<td><input type=\"checkbox\" id=\"consultations_chronic\" name=\"widgets[consultations_chronic]\" data-toggle=\"checkbox\"></td>
\t\t\t\t<td>Nombre  de cas des maladies chroniques </td>
\t\t\t</tr>\t\t\t\t
\t\t\t<tr>
\t\t\t\t<td><input type=\"checkbox\" id=\"consultations_not_chronic\" name=\"widgets[consultations_not_chronic]\" data-toggle=\"checkbox\"></td>
\t\t\t\t<td>Nombre  de cas des maladies dépistées </td>
\t\t\t</tr>\t\t\t\t
\t\t\t<tr>
\t\t\t\t<td><input type=\"checkbox\" id=\"consultations_structures\" name=\"widgets[consultations_structures]\" data-toggle=\"checkbox\"></td>
\t\t\t\t<td>Number of chronic diseases</td>
\t\t\t</tr>
      \t</tbody>
      </table>
      </div>
    </div>
  </div>
</div>
</form>
<div class=\"row\" id=\"datacontainer\" style=\"min-height: 400px;\">

</div>
";
    }

    // line 114
    public function block_javascripts($context, array $blocks = array())
    {
        // line 115
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script src=\"";
        // line 116
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("js/moment-with-langs.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 117
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("js/daterangepicker.js"), "html", null, true);
        echo "\"></script>
<script> 
(function(\$) {
\tvar widgetsForm = \$('#js-form'),
\t\twidgetModal = \$('#widgetModal'),
        datacontainer = \$('#datacontainer');
    function ajaxPost(date) {
        datacontainer.addClass('working');
\t\twidgetModal.modal('hide');
        if(!date){
        \t\$('#reportrange span').html(moment().subtract('days', 29).format('D MMMM YYYY') + ' - ' + moment().format('D MMMM YYYY'));
  \t\t\tdate = moment().subtract('days', 29).format('YYYY/MM/DD') + ' - ' + moment().format('YYYY/MM/DD');
  \t\t}
        \$.ajax({ 
          url: '";
        // line 131
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ben_stats");
        echo "?daterange='+date, 
          type: 'POST', 
          data: widgetsForm.serialize(),
          success: function(data){ 
            datacontainer.removeClass('working');
            datacontainer.empty().hide().html(data).fadeIn();
          }
        });
        return false;
    };

    widgetsForm.on('submit', function() {
    \tajaxPost();
    \treturn false;
    });
\twidgetModal.modal('show');
    
    moment.lang('fr');
\t\$('#reportrange').daterangepicker(
\t\t{
\t\t   \tstartDate: moment().subtract('days', 29),
\t\t   \tendDate: moment(),
\t\t   \tminDate: '01/01/2013',
\t\t   \tmaxDate: moment().format('DD/MM/YYYY'),
\t\t   \tdateLimit: { days: 840 },
\t\t   \tshowDropdowns: true,
\t\t   \tshowWeekNumbers: 0,
\t\t   \ttimePicker: false,
\t\t   \ttimePickerIncrement: 1,
\t\t   \ttimePicker12Hour: true,
\t\t   \tranges: {
\t\t   \t   //'Aujourd\\'hui': [moment(), moment()],
\t\t   \t   'Today': [moment(), moment()],
\t\t   \t   'Yesterday': [moment().subtract('days', 1), moment().subtract('days', 1)],
\t\t   \t   '7 days prior': [moment().subtract('days', 6), moment()],
\t\t   \t   '30 days prior': [moment().subtract('days', 29), moment()],
\t\t   \t   'This month': [moment().startOf('month'), moment().endOf('month')],
\t\t   \t   'Last month': [moment().subtract('month', 1).startOf('month'), moment().subtract('month', 1).endOf('month')]
\t\t   \t},
\t\t   \topens: 'left',
\t\t   \tbuttonClasses: ['btn btn-default'],
\t\t   \tapplyClass: 'btn-small btn-primary',
\t\t   \tcancelClass: 'btn-small',
\t\t   \tformat: 'DD/MM/YYYY',
\t\t   \tseparator: ' à ',
\t\t   \tlocale: {
\t\t   \t\tapplyLabel: 'OK',
\t\t   \t\tfromLabel: 'From',
\t\t   \t\ttoLabel: 'To',
\t\t   \t\tcustomRangeLabel: 'Customized range',
\t\t   \t\tdaysOfWeek: \"Sun_Mon_Tue_Wed_Thur_Fri_Sat\".split(\"_\"),
\t\t   \t\tmonthNames: \"january_february_march_april_may_june_july_august_septembre_octobre_novembre_decembre\".split(\"_\"),
\t\t   \t\tfirstDay: 0
\t\t   \t}
\t    },
\t    function(start, end) {
\t\t    \$('#reportrange span').html(start.format('D MMMM YYYY') + ' - ' + end.format('D MMMM YYYY'));
\t\t    ajaxPost(start.format('YYYY/MM/DD') + ' - ' + end.format('YYYY/MM/DD'));
\t    }
\t);

  \t//Set the initial state of the picker label
  \t// ajaxPost();

})(jQuery);
</script>
";
    }

    public function getTemplateName()
    {
        return "BenDoctorsBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  191 => 131,  174 => 117,  170 => 116,  166 => 115,  163 => 114,  62 => 15,  59 => 13,  49 => 7,  44 => 6,  41 => 5,  34 => 3,  31 => 2,  11 => 1,);
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
    {% block stylesheet %}
   {{ parent() }}   
        <link href=\"{{ asset('css/daterangepicker-bs3.css') }}\" rel=\"stylesheet\"><!-- Loading my css -->
        <style>
\t\t\t.links #reportrange, .links .btn {margin-top: 20px; margin-left: 5px;}
\t\t\t.links .btn{padding: 7px 16px !important;}
        </style>
    {% endblock %}
{% block body -%}

<form action=\"#\" id=\"js-form\">
<div class=\"row\">
\t<div class=\"col-md-6\">
\t\t<h3><span class=\"glyphicon glyphicon-stats\"></span> Stats</h3>
\t</div>
\t<div class=\"col-md-6 links hidden-print\">
\t\t<div id=\"reportrange\" class=\"pull-right\">
            <i class=\"glyphicon glyphicon-calendar\"></i>
            <span>August 26, 2014 - August 26, 2014</span> <b class=\"caret\"></b>
        </div>
\t\t<a class=\"btn btn-primary pull-right\" id=\"btnPrint\"><span class=\"glyphicon glyphicon-print\"></span> Print</a>
\t\t<a class=\"btn btn-primary pull-right\" data-toggle=\"modal\" data-target=\"#widgetModal\"><span class=\"glyphicon glyphicon-filter\"></span> Indicators</a>
\t</div>
</div>
<!-- Modal advanced widget -->
<div class=\"modal fade\" id=\"widgetModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"widgetModalLabel\" aria-hidden=\"true\">
  <div class=\"modal-dialog\" style=\"width: 700px;\">
    <div class=\"modal-content\">
      <div class=\"modal-body\" style=\"padding: 0;\">
      <table class=\"table table-striped table-hover table-bordered\" style=\"margin: 0;\">
      \t<thead>
      \t\t<tr>
      \t\t\t<th><input type=\"checkbox\" id=\"checkall\" data-toggle=\"checkbox\"></th>
      \t\t\t<th>Indicators <button type=\"submit\" class=\"btn btn-xs btn-primary pull-right\">Send</button></th>
      \t\t</tr>
      \t</thead>
      \t<tbody>
      \t\t<tr>
\t\t\t\t<td><input type=\"checkbox\" id=\"meds\" name=\"widgets[meds]\" data-toggle=\"checkbox\"></td>
\t\t\t\t<td>Medecines delivered</td>
\t\t\t</tr>   \t\t\t\t\t\t
\t\t\t<tr>
\t\t\t\t<td><input type=\"checkbox\" id=\"stock\" name=\"widgets[stock]\" data-toggle=\"checkbox\"></td>
\t\t\t\t<td>Number of Medecines in stock</td>
\t\t\t</tr>\t\t\t\t
\t\t\t<tr>
\t\t\t\t<td><input type=\"checkbox\" id=\"cnss\" name=\"widgets[cnss]\" data-toggle=\"checkbox\"></td>
\t\t\t\t<td>Patients having a social coverage by each type</td>
\t\t\t</tr>\t\t\t\t
\t\t\t<tr>
\t\t\t\t<td><input type=\"checkbox\" id=\"consultations_demande\" name=\"widgets[consultations_demande]\" data-toggle=\"checkbox\"></td>
\t\t\t\t<td>Number of medical consultations by appointment</td>
\t\t\t</tr>\t\t\t\t 
\t\t\t<tr>
\t\t\t\t<td><input type=\"checkbox\" id=\"consultations_demande_gender\" name=\"widgets[consultations_demande_gender]\" data-toggle=\"checkbox\"></td>
\t\t\t\t<td>Number of medical consultations on appointment by gender</td>
\t\t\t</tr>\t\t\t\t
\t\t\t<tr>
\t\t\t\t<td><input type=\"checkbox\" id=\"consultations_demande_resident\" name=\"widgets[consultations_demande_resident]\" data-toggle=\"checkbox\"></td>
\t\t\t\t<td>Nombre des résidents ayant subi une consultation médicale à la demande</td>
\t\t\t</tr>\t\t\t\t 
\t\t\t<tr>
\t\t\t\t<td><input type=\"checkbox\" id=\"consultations_demande_resident_gender\" name=\"widgets[consultations_demande_resident_gender]\" data-toggle=\"checkbox\"></td>
\t\t\t\t<td>Nombre des résidents ayant subi une consultation médicale à la demande par sexe </td>
\t\t\t</tr>\t\t\t\t
\t\t\t<tr>
\t\t\t\t<td><input type=\"checkbox\" id=\"consultations_systematique_resident\" name=\"widgets[consultations_systematique_resident]\" data-toggle=\"checkbox\"></td>
\t\t\t\t<td>Nombre des résidents ayant subi un examen médical systématique </td>
\t\t\t</tr>\t\t\t\t
\t\t\t<tr>
\t\t\t\t<td><input type=\"checkbox\" id=\"consultations_systematique_resident_gender\" name=\"widgets[consultations_systematique_resident_gender]\" data-toggle=\"checkbox\"></td>
\t\t\t\t<td>Nombre des résidents ayant subi un examen médical systématique </td>
\t\t\t</tr>\t\t\t\t
\t\t\t<tr>
\t\t\t\t<td><input type=\"checkbox\" id=\"consultations_visual_issue\" name=\"widgets[consultations_visual_issue]\" data-toggle=\"checkbox\"></td>
\t\t\t\t<td>Nombre des résidents ayant subi un examen médical systématique </td>
\t\t\t</tr>\t\t\t\t
\t\t\t<tr>
\t\t\t\t<td><input type=\"checkbox\" id=\"consultations_special\" name=\"widgets[consultations_special]\" data-toggle=\"checkbox\"></td>
\t\t\t\t<td>Nombre des malades orientés vers la consultation médicale spécialisée par spécialité médicale </td>
\t\t\t</tr>\t\t\t\t
\t\t\t<tr>
\t\t\t\t<td><input type=\"checkbox\" id=\"consultations_special_gender\" name=\"widgets[consultations_special_gender]\" data-toggle=\"checkbox\"></td>
\t\t\t\t<td>Nombre des malades ayant subi une consultation médicale spécialisée par spécialité et par sexe </td>
\t\t\t</tr>\t\t\t\t
\t\t\t<tr>
\t\t\t\t<td><input type=\"checkbox\" id=\"consultations_chronic\" name=\"widgets[consultations_chronic]\" data-toggle=\"checkbox\"></td>
\t\t\t\t<td>Nombre  de cas des maladies chroniques </td>
\t\t\t</tr>\t\t\t\t
\t\t\t<tr>
\t\t\t\t<td><input type=\"checkbox\" id=\"consultations_not_chronic\" name=\"widgets[consultations_not_chronic]\" data-toggle=\"checkbox\"></td>
\t\t\t\t<td>Nombre  de cas des maladies dépistées </td>
\t\t\t</tr>\t\t\t\t
\t\t\t<tr>
\t\t\t\t<td><input type=\"checkbox\" id=\"consultations_structures\" name=\"widgets[consultations_structures]\" data-toggle=\"checkbox\"></td>
\t\t\t\t<td>Number of chronic diseases</td>
\t\t\t</tr>
      \t</tbody>
      </table>
      </div>
    </div>
  </div>
</div>
</form>
<div class=\"row\" id=\"datacontainer\" style=\"min-height: 400px;\">

</div>
{% endblock %}

{% block javascripts %}
{{ parent() }}
    <script src=\"{{ asset('js/moment-with-langs.min.js') }}\"></script>
    <script src=\"{{ asset('js/daterangepicker.js') }}\"></script>
<script> 
(function(\$) {
\tvar widgetsForm = \$('#js-form'),
\t\twidgetModal = \$('#widgetModal'),
        datacontainer = \$('#datacontainer');
    function ajaxPost(date) {
        datacontainer.addClass('working');
\t\twidgetModal.modal('hide');
        if(!date){
        \t\$('#reportrange span').html(moment().subtract('days', 29).format('D MMMM YYYY') + ' - ' + moment().format('D MMMM YYYY'));
  \t\t\tdate = moment().subtract('days', 29).format('YYYY/MM/DD') + ' - ' + moment().format('YYYY/MM/DD');
  \t\t}
        \$.ajax({ 
          url: '{{ path('ben_stats') }}?daterange='+date, 
          type: 'POST', 
          data: widgetsForm.serialize(),
          success: function(data){ 
            datacontainer.removeClass('working');
            datacontainer.empty().hide().html(data).fadeIn();
          }
        });
        return false;
    };

    widgetsForm.on('submit', function() {
    \tajaxPost();
    \treturn false;
    });
\twidgetModal.modal('show');
    
    moment.lang('fr');
\t\$('#reportrange').daterangepicker(
\t\t{
\t\t   \tstartDate: moment().subtract('days', 29),
\t\t   \tendDate: moment(),
\t\t   \tminDate: '01/01/2013',
\t\t   \tmaxDate: moment().format('DD/MM/YYYY'),
\t\t   \tdateLimit: { days: 840 },
\t\t   \tshowDropdowns: true,
\t\t   \tshowWeekNumbers: 0,
\t\t   \ttimePicker: false,
\t\t   \ttimePickerIncrement: 1,
\t\t   \ttimePicker12Hour: true,
\t\t   \tranges: {
\t\t   \t   //'Aujourd\\'hui': [moment(), moment()],
\t\t   \t   'Today': [moment(), moment()],
\t\t   \t   'Yesterday': [moment().subtract('days', 1), moment().subtract('days', 1)],
\t\t   \t   '7 days prior': [moment().subtract('days', 6), moment()],
\t\t   \t   '30 days prior': [moment().subtract('days', 29), moment()],
\t\t   \t   'This month': [moment().startOf('month'), moment().endOf('month')],
\t\t   \t   'Last month': [moment().subtract('month', 1).startOf('month'), moment().subtract('month', 1).endOf('month')]
\t\t   \t},
\t\t   \topens: 'left',
\t\t   \tbuttonClasses: ['btn btn-default'],
\t\t   \tapplyClass: 'btn-small btn-primary',
\t\t   \tcancelClass: 'btn-small',
\t\t   \tformat: 'DD/MM/YYYY',
\t\t   \tseparator: ' à ',
\t\t   \tlocale: {
\t\t   \t\tapplyLabel: 'OK',
\t\t   \t\tfromLabel: 'From',
\t\t   \t\ttoLabel: 'To',
\t\t   \t\tcustomRangeLabel: 'Customized range',
\t\t   \t\tdaysOfWeek: \"Sun_Mon_Tue_Wed_Thur_Fri_Sat\".split(\"_\"),
\t\t   \t\tmonthNames: \"january_february_march_april_may_june_july_august_septembre_octobre_novembre_decembre\".split(\"_\"),
\t\t   \t\tfirstDay: 0
\t\t   \t}
\t    },
\t    function(start, end) {
\t\t    \$('#reportrange span').html(start.format('D MMMM YYYY') + ' - ' + end.format('D MMMM YYYY'));
\t\t    ajaxPost(start.format('YYYY/MM/DD') + ' - ' + end.format('YYYY/MM/DD'));
\t    }
\t);

  \t//Set the initial state of the picker label
  \t// ajaxPost();

})(jQuery);
</script>
{% endblock %}

", "BenDoctorsBundle:Default:index.html.twig", "/home/pacifik/Desktop/Doctors-master/src/Ben/DoctorsBundle/Resources/views/Default/index.html.twig");
    }
}
