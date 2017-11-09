<?php

/* BenDoctorsBundle:Consultation:edit.html.twig */
class __TwigTemplate_8141ec8088387ecf3ebbbff7ed329c8aa3faee58bbf49c503bd2692f47713462 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("BenDoctorsBundle::layout.html.twig", "BenDoctorsBundle:Consultation:edit.html.twig", 1);
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
        echo "<h3><span class=\"glyphicon glyphicon-file\"></span> Update consultation form</h3>
<form action=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("consultation_update", array("id" => $this->getAttribute(($context["entity"] ?? $this->getContext($context, "entity")), "id", array()))), "html", null, true);
        echo "\"  class=\"form-horizontal col-md-8\" method=\"post\">
    <div class=\"form-group \">
        <label class=\"col-md-6 control-label\" for=\"user\">Patient</label>
        <div class=\"col-md-6\">
            <input id=\"user\" class=\"form-control disabled\" disabled=\"disabled\" type=\"text\" name=\"unused\" value=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["entity"] ?? $this->getContext($context, "entity")), "person", array()), "fullName", array()), "html", null, true);
        echo "\">
        </div>
    </div>
    ";
        // line 14
        $this->loadTemplate("BenDoctorsBundle:Consultation:form.html.twig", "BenDoctorsBundle:Consultation:edit.html.twig", 14)->display($context);
        // line 15
        echo "
    <div class=\"form-group\">
      <div class=\"col-sm-offset-6 col-sm-6\">
        <button type=\"button\" id=\"add-another-item\" class=\"btn btn-info\"><span class=\"glyphicon glyphicon-plus\"></span></button>
        <button type=\"submit\" class=\"btn btn-primary\"><span class=\"glyphicon glyphicon-edit\"></span> Update</button>
        <a href=\"#\" id=\"js-delete\" class=\"btn btn-danger\"><span class=\"glyphicon glyphicon-trash\"></span> Delete</a>
      </div>
    </div>
</form>
<form id=\"deleteForm\" action=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("consultation_delete", array("id" => $this->getAttribute(($context["entity"] ?? $this->getContext($context, "entity")), "id", array()))), "html", null, true);
        echo "\" method=\"POST\" class=\"\">
    ";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'widget');
        echo "
</form> 
";
    }

    // line 28
    public function block_javascripts($context, array $blocks = array())
    {
        // line 29
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
<script> 
    (function(\$) {
        \$('#ben_consultation_person').closest('.form-group').hide();
        \$('#js-delete').on('click', function(){
            \$('#deleteForm').submit();
            return false;
        });

        var itemCount = '";
        // line 38
        echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "consultationmeds", array())), "html", null, true);
        echo "',
            datacontainer = \$('#ben_consultation_consultationmeds'),
            prototype = datacontainer.attr('data-prototype')
            diagnosticInput = \$('#ben_consultation_diagnosis');

        datacontainer.find('label').removeClass('col-md-6').addClass('col-md-4');

        \$('#add-another-item').on('click', function() {
            newWidget = prototype.replace(/__name__/g, itemCount++);
            item = \$(newWidget);
            item.find('label').removeClass('col-md-6').addClass('col-md-4');
            item.appendTo(datacontainer);
            addTagFormDeleteLink(item);
            \$('select').removeClass('form-control').select2();

            return false;
        });

        datacontainer.children('.form-group').each(function() {
            addTagFormDeleteLink(\$(this));
        });

        function addTagFormDeleteLink(tagFormLi) {
            var removeFormA = \$('<a class=\"js-remove\" href=\"#\">x</a>');
            tagFormLi.append(removeFormA);
        }

        datacontainer.on('click', '.js-remove', function(e) {
            e.preventDefault();
            \$(this).parent().remove();
        });


        \$('select').removeClass('form-control').select2();
        diagnosticData = \"Grippe_Angines_Bronchite_Caries dentaires_Colopathie_Pharyngites_Déficiences visuelles_Conjonctivites_Dysménorrhée_Acnés_Intoxications Alimentaires_Asthme_Leucorrhées_Phtiriasis_Urétrites_Depression nerveuse_Rhinites_Gastrite_Gâle_Diabète_Hypertension artérielle_Cardiopathies_Hystérie_Otites_Céphalées_Allergies_Traumatismes_Lombalgies_Psoriasis_Stress_Rhinopharyngite_Toxicomanie_Arthralgies_RAA_Dysurie_Tuberculose_Hépatite virale_Migraine_Parasitose_Syphilis_Eczéma_Leshmaniose_Brûlures_Paludisme_Méningites_Typhoide_Appendicite_Herpès buccal_Obésité_Arthroses_Hypotension artérielle_Varicelle_Epilépsie_Anxiété_Blennoragies_Stomatites_Dermatoses_Anémie_Pneumopathie_scoliose_dhysthyroîdie_diarhées infectieuse_dysenterie_courbatures musculaires\".split('_');
        diagnosticInput.removeClass('form-control').select2({ tags: diagnosticData });
        // diagnosticData = \$.map(diagnosticData, function(val,index){return {id:val, text:val};});
        // diagnosticInput.removeClass('form-control').select2({
        //   createSearchChoice:function(term, data) { if (\$(data).filter(function() { return this.text.localeCompare(term)===0; }).length===0) {return {id:term, text:term};} },
        //   multiple: false,
        //   data: diagnosticData
        // });
        var typeInput = \$('#ben_consultation_motiftype'),
            motifInput = typeInput.closest('.form-group').next().hide()
        typeInput.on('change', function(){
            html = (\$(this)[0].selectedIndex === 1) 
                ? '<select name=\"ben_consultation[name]\" class=\"form-control\"><option value=\"Certificat d\\'aptitude physique\">Certificat d\\'aptitude physique</option><option value=\"Certificat de bonne santé\">Certificat de bonne santé</option></select>'
                : '<input class=\"form-control\" id=\"ben_consultation_name\" type=\"text\" name=\"ben_consultation[name]\" required=\"required\">';
                
            motifInput.show().find('div').html(html);
        });

        infrastructureData = [\"CMSU\", \"Centre de diagnostic\", \"Hopital public\", \"CHU\", \"structure privée\"];
        infrastructureData = \$.map(infrastructureData, function(val,index){return {id:val, text:val};});
        \$('#ben_consultation_infrastructure').removeClass('form-control').select2({
          createSearchChoice:function(term, data) { if (\$(data).filter(function() { return this.text.localeCompare(term)===0; }).length===0) {return {id:term, text:term};} },
          multiple: false,
          data: infrastructureData
        });

    })(jQuery);
</script>
";
    }

    public function getTemplateName()
    {
        return "BenDoctorsBundle:Consultation:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 38,  86 => 29,  83 => 28,  76 => 25,  72 => 24,  61 => 15,  59 => 14,  53 => 11,  46 => 7,  43 => 6,  40 => 5,  33 => 3,  30 => 2,  11 => 1,);
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
<h3><span class=\"glyphicon glyphicon-file\"></span> Update consultation form</h3>
<form action=\"{{ path('consultation_update', { 'id': entity.id }) }}\"  class=\"form-horizontal col-md-8\" method=\"post\">
    <div class=\"form-group \">
        <label class=\"col-md-6 control-label\" for=\"user\">Patient</label>
        <div class=\"col-md-6\">
            <input id=\"user\" class=\"form-control disabled\" disabled=\"disabled\" type=\"text\" name=\"unused\" value=\"{{ entity.person.fullName }}\">
        </div>
    </div>
    {% include \"BenDoctorsBundle:Consultation:form.html.twig\" %}

    <div class=\"form-group\">
      <div class=\"col-sm-offset-6 col-sm-6\">
        <button type=\"button\" id=\"add-another-item\" class=\"btn btn-info\"><span class=\"glyphicon glyphicon-plus\"></span></button>
        <button type=\"submit\" class=\"btn btn-primary\"><span class=\"glyphicon glyphicon-edit\"></span> Update</button>
        <a href=\"#\" id=\"js-delete\" class=\"btn btn-danger\"><span class=\"glyphicon glyphicon-trash\"></span> Delete</a>
      </div>
    </div>
</form>
<form id=\"deleteForm\" action=\"{{ path('consultation_delete', { 'id': entity.id }) }}\" method=\"POST\" class=\"\">
    {{ form_widget(delete_form) }}
</form> 
{% endblock %}
{% block javascripts %}
{{ parent() }}
<script> 
    (function(\$) {
        \$('#ben_consultation_person').closest('.form-group').hide();
        \$('#js-delete').on('click', function(){
            \$('#deleteForm').submit();
            return false;
        });

        var itemCount = '{{ form.consultationmeds|length }}',
            datacontainer = \$('#ben_consultation_consultationmeds'),
            prototype = datacontainer.attr('data-prototype')
            diagnosticInput = \$('#ben_consultation_diagnosis');

        datacontainer.find('label').removeClass('col-md-6').addClass('col-md-4');

        \$('#add-another-item').on('click', function() {
            newWidget = prototype.replace(/__name__/g, itemCount++);
            item = \$(newWidget);
            item.find('label').removeClass('col-md-6').addClass('col-md-4');
            item.appendTo(datacontainer);
            addTagFormDeleteLink(item);
            \$('select').removeClass('form-control').select2();

            return false;
        });

        datacontainer.children('.form-group').each(function() {
            addTagFormDeleteLink(\$(this));
        });

        function addTagFormDeleteLink(tagFormLi) {
            var removeFormA = \$('<a class=\"js-remove\" href=\"#\">x</a>');
            tagFormLi.append(removeFormA);
        }

        datacontainer.on('click', '.js-remove', function(e) {
            e.preventDefault();
            \$(this).parent().remove();
        });


        \$('select').removeClass('form-control').select2();
        diagnosticData = \"Grippe_Angines_Bronchite_Caries dentaires_Colopathie_Pharyngites_Déficiences visuelles_Conjonctivites_Dysménorrhée_Acnés_Intoxications Alimentaires_Asthme_Leucorrhées_Phtiriasis_Urétrites_Depression nerveuse_Rhinites_Gastrite_Gâle_Diabète_Hypertension artérielle_Cardiopathies_Hystérie_Otites_Céphalées_Allergies_Traumatismes_Lombalgies_Psoriasis_Stress_Rhinopharyngite_Toxicomanie_Arthralgies_RAA_Dysurie_Tuberculose_Hépatite virale_Migraine_Parasitose_Syphilis_Eczéma_Leshmaniose_Brûlures_Paludisme_Méningites_Typhoide_Appendicite_Herpès buccal_Obésité_Arthroses_Hypotension artérielle_Varicelle_Epilépsie_Anxiété_Blennoragies_Stomatites_Dermatoses_Anémie_Pneumopathie_scoliose_dhysthyroîdie_diarhées infectieuse_dysenterie_courbatures musculaires\".split('_');
        diagnosticInput.removeClass('form-control').select2({ tags: diagnosticData });
        // diagnosticData = \$.map(diagnosticData, function(val,index){return {id:val, text:val};});
        // diagnosticInput.removeClass('form-control').select2({
        //   createSearchChoice:function(term, data) { if (\$(data).filter(function() { return this.text.localeCompare(term)===0; }).length===0) {return {id:term, text:term};} },
        //   multiple: false,
        //   data: diagnosticData
        // });
        var typeInput = \$('#ben_consultation_motiftype'),
            motifInput = typeInput.closest('.form-group').next().hide()
        typeInput.on('change', function(){
            html = (\$(this)[0].selectedIndex === 1) 
                ? '<select name=\"ben_consultation[name]\" class=\"form-control\"><option value=\"Certificat d\\'aptitude physique\">Certificat d\\'aptitude physique</option><option value=\"Certificat de bonne santé\">Certificat de bonne santé</option></select>'
                : '<input class=\"form-control\" id=\"ben_consultation_name\" type=\"text\" name=\"ben_consultation[name]\" required=\"required\">';
                
            motifInput.show().find('div').html(html);
        });

        infrastructureData = [\"CMSU\", \"Centre de diagnostic\", \"Hopital public\", \"CHU\", \"structure privée\"];
        infrastructureData = \$.map(infrastructureData, function(val,index){return {id:val, text:val};});
        \$('#ben_consultation_infrastructure').removeClass('form-control').select2({
          createSearchChoice:function(term, data) { if (\$(data).filter(function() { return this.text.localeCompare(term)===0; }).length===0) {return {id:term, text:term};} },
          multiple: false,
          data: infrastructureData
        });

    })(jQuery);
</script>
{% endblock %}

", "BenDoctorsBundle:Consultation:edit.html.twig", "/home/pacifik/Desktop/Doctors-master/src/Ben/DoctorsBundle/Resources/views/Consultation/edit.html.twig");
    }
}
