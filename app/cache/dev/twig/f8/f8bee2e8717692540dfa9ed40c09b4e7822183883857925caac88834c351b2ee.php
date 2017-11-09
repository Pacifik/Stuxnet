<?php

/* BenDoctorsBundle:Form:fields.html.twig */
class __TwigTemplate_3c50f12663c3848f8b113eb6a0ab3c214939dd698349bb4937a79f3e81e198ef extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("form_div_layout.html.twig", "BenDoctorsBundle:Form:fields.html.twig", 1);
        $this->blocks = array(
            'form_label' => array($this, 'block_form_label'),
            'form_widget_simple' => array($this, 'block_form_widget_simple'),
            'form_row' => array($this, 'block_form_row'),
            'textarea_widget' => array($this, 'block_textarea_widget'),
            'choice_widget_collapsed' => array($this, 'block_choice_widget_collapsed'),
            'date_widget' => array($this, 'block_date_widget'),
            'checkbox_widget' => array($this, 'block_checkbox_widget'),
            'choice_widget_expanded' => array($this, 'block_choice_widget_expanded'),
            'form_errors' => array($this, 'block_form_errors'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "form_div_layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_form_label($context, array $blocks = array())
    {
        // line 5
        ob_start();
        // line 6
        echo "    ";
        if ( !($context["compound"] ?? $this->getContext($context, "compound"))) {
            // line 7
            echo "        ";
            $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("for" => ($context["id"] ?? $this->getContext($context, "id"))));
            // line 8
            echo "    ";
        }
        // line 9
        echo "    ";
        if (($context["required"] ?? $this->getContext($context, "required"))) {
            // line 10
            echo "        ";
            $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " required"))));
            // line 11
            echo "    ";
        }
        // line 12
        echo "    ";
        if (twig_test_empty(($context["label"] ?? $this->getContext($context, "label")))) {
            // line 13
            echo "        ";
            $context["label"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->humanize(($context["name"] ?? $this->getContext($context, "name")));
            // line 14
            echo "    ";
        }
        // line 15
        echo "    <label class=\"col-md-6 control-label\" ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["label_attr"] ?? $this->getContext($context, "label_attr")));
        foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
            echo " ";
            echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
            echo "=\"";
            echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
            echo "\"";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo ">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["label"] ?? $this->getContext($context, "label")), array(), ($context["translation_domain"] ?? $this->getContext($context, "translation_domain"))), "html", null, true);
        echo "</label>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 21
    public function block_form_widget_simple($context, array $blocks = array())
    {
        // line 22
        ob_start();
        // line 23
        echo "\t";
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter(($context["type"] ?? $this->getContext($context, "type")), "text")) : ("text"));
        // line 24
        echo "\t\t<div class=\"col-md-6\">
\t    \t<input ";
        // line 25
        if ((($context["type"] ?? $this->getContext($context, "type")) != "file")) {
            echo "class=\"form-control\"";
        } else {
            echo "class=\"input-md\"";
        }
        echo " id=\"";
        echo twig_escape_filter($this->env, ($context["id"] ?? $this->getContext($context, "id")), "html", null, true);
        echo "\" type=\"";
        echo twig_escape_filter($this->env, ($context["type"] ?? $this->getContext($context, "type")), "html", null, true);
        echo "\" ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo " ";
        if ( !twig_test_empty(($context["value"] ?? $this->getContext($context, "value")))) {
            echo "value=\"";
            echo twig_escape_filter($this->env, ($context["value"] ?? $this->getContext($context, "value")), "html", null, true);
            echo "\" ";
        }
        echo "/>
\t  \t</div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 30
    public function block_form_row($context, array $blocks = array())
    {
        // line 31
        ob_start();
        // line 32
        echo "\t<div class=\"form-group ";
        if ((twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0)) {
            echo "has-error";
        }
        echo "\">
        ";
        // line 33
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label');
        echo "
        ";
        // line 34
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
        ";
        // line 35
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        echo "
    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 41
    public function block_textarea_widget($context, array $blocks = array())
    {
        // line 42
        ob_start();
        // line 43
        echo "    <div class=\"col-md-6\">
    <textarea ";
        // line 44
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo " class=\"form-control\">";
        echo twig_escape_filter($this->env, ($context["value"] ?? $this->getContext($context, "value")), "html", null, true);
        echo "</textarea>
    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 51
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        // line 52
        ob_start();
        // line 53
        echo "
    <div class=\"col-md-6\">
    <select ";
        // line 55
        $this->displayBlock("widget_attributes", $context, $blocks);
        if (($context["multiple"] ?? $this->getContext($context, "multiple"))) {
            echo " multiple=\"multiple\"";
        }
        echo " class=\"form-control\">
        ";
        // line 56
        if ( !(null === ($context["empty_value"] ?? $this->getContext($context, "empty_value")))) {
            // line 57
            echo "            <option value=\"\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["empty_value"] ?? $this->getContext($context, "empty_value")), array(), ($context["translation_domain"] ?? $this->getContext($context, "translation_domain"))), "html", null, true);
            echo "</option>
        ";
        }
        // line 59
        echo "        ";
        if ((twig_length_filter($this->env, ($context["preferred_choices"] ?? $this->getContext($context, "preferred_choices"))) > 0)) {
            // line 60
            echo "            ";
            $context["options"] = ($context["preferred_choices"] ?? $this->getContext($context, "preferred_choices"));
            // line 61
            echo "            ";
            $this->displayBlock("choice_widget_options", $context, $blocks);
            echo "
            ";
            // line 62
            if (((twig_length_filter($this->env, ($context["choices"] ?? $this->getContext($context, "choices"))) > 0) &&  !(null === ($context["separator"] ?? $this->getContext($context, "separator"))))) {
                // line 63
                echo "                <option disabled=\"disabled\">";
                echo twig_escape_filter($this->env, ($context["separator"] ?? $this->getContext($context, "separator")), "html", null, true);
                echo "</option>
            ";
            }
            // line 65
            echo "        ";
        }
        // line 66
        echo "        ";
        $context["options"] = ($context["choices"] ?? $this->getContext($context, "choices"));
        // line 67
        echo "        ";
        $this->displayBlock("choice_widget_options", $context, $blocks);
        echo "
    </select>
    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 74
    public function block_date_widget($context, array $blocks = array())
    {
        // line 75
        ob_start();
        // line 76
        echo "<div class=\"col-md-6\">
<div class=\"input-group\">
      <input type=\"text\" class=\"form-control has-datepicker\" ";
        // line 78
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo " ";
        if (array_key_exists("value", $context)) {
            echo " value=\"";
            echo twig_escape_filter($this->env, ($context["value"] ?? $this->getContext($context, "value")), "html", null, true);
            echo "\"";
        }
        echo " />
  <span class=\"input-group-addon\"><span class=\"glyphicon glyphicon-calendar\"></span></span>
</div>
</div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 86
    public function block_checkbox_widget($context, array $blocks = array())
    {
        // line 87
        ob_start();
        // line 88
        echo "<input type=\"checkbox\" ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo " ";
        if (array_key_exists("value", $context)) {
            echo " value=\"";
            echo twig_escape_filter($this->env, ($context["value"] ?? $this->getContext($context, "value")), "html", null, true);
            echo "\"";
        }
        if (($context["checked"] ?? $this->getContext($context, "checked"))) {
            echo " checked=\"checked\"";
        }
        echo "/>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 106
    public function block_choice_widget_expanded($context, array $blocks = array())
    {
        // line 107
        ob_start();
        // line 108
        echo "    <div class=\"col-md-6\" ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">
    ";
        // line 109
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["form"] ?? $this->getContext($context, "form")));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 110
            echo "    <label class=\"checkbox\" for=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["child"], "vars", array()), "id", array()), "html", null, true);
            echo "\">
    ";
            // line 111
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["child"], 'widget', array("attr" => array("data-toggle" => "checkbox")));
            echo "
    ";
            // line 112
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["child"], "vars", array()), "label", array()), "html", null, true);
            echo "</label>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 114
        echo "    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 119
    public function block_form_errors($context, array $blocks = array())
    {
        // line 120
        ob_start();
        // line 121
        echo "    ";
        if ((twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0)) {
            // line 122
            echo "    <div class=\"help-block col-md-6 \">
    <ul>
        ";
            // line 124
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["errors"] ?? $this->getContext($context, "errors")));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 125
                echo "            <li>";
                echo twig_escape_filter($this->env, (((null === $this->getAttribute(                // line 126
$context["error"], "messagePluralization", array()))) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(                // line 127
$context["error"], "messageTemplate", array()), $this->getAttribute($context["error"], "messageParameters", array()), "validators")) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->transchoice($this->getAttribute(                // line 128
$context["error"], "messageTemplate", array()), $this->getAttribute($context["error"], "messagePluralization", array()), $this->getAttribute($context["error"], "messageParameters", array()), "validators"))), "html", null, true);
                // line 129
                echo "</li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 131
            echo "    </ul>
    </div>
    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    public function getTemplateName()
    {
        return "BenDoctorsBundle:Form:fields.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  342 => 131,  335 => 129,  333 => 128,  332 => 127,  331 => 126,  329 => 125,  325 => 124,  321 => 122,  318 => 121,  316 => 120,  313 => 119,  307 => 114,  299 => 112,  295 => 111,  290 => 110,  286 => 109,  281 => 108,  279 => 107,  276 => 106,  259 => 88,  257 => 87,  254 => 86,  238 => 78,  234 => 76,  232 => 75,  229 => 74,  219 => 67,  216 => 66,  213 => 65,  207 => 63,  205 => 62,  200 => 61,  197 => 60,  194 => 59,  188 => 57,  186 => 56,  179 => 55,  175 => 53,  173 => 52,  170 => 51,  160 => 44,  157 => 43,  155 => 42,  152 => 41,  144 => 35,  140 => 34,  136 => 33,  129 => 32,  127 => 31,  124 => 30,  100 => 25,  97 => 24,  94 => 23,  92 => 22,  89 => 21,  68 => 15,  65 => 14,  62 => 13,  59 => 12,  56 => 11,  53 => 10,  50 => 9,  47 => 8,  44 => 7,  41 => 6,  39 => 5,  36 => 4,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'form_div_layout.html.twig' %}

{# Labels #}
{% block form_label %}
{% spaceless %}
    {% if not compound %}
        {% set label_attr = label_attr|merge({'for': id}) %}
    {% endif %}
    {% if required %}
        {% set label_attr = label_attr|merge({'class': (label_attr.class|default('') ~ ' required')|trim}) %}
    {% endif %}
    {% if label is empty %}
        {% set label = name|humanize %}
    {% endif %}
    <label class=\"col-md-6 control-label\" {% for attrname, attrvalue in label_attr %} {{ attrname }}=\"{{ attrvalue }}\"{% endfor %}>{{ label|trans({}, translation_domain) }}</label>
{% endspaceless %}
{% endblock form_label %}



{% block form_widget_simple %}
{% spaceless %}
\t{% set type = type|default('text') %}
\t\t<div class=\"col-md-6\">
\t    \t<input {% if type != 'file' %}class=\"form-control\"{% else %}class=\"input-md\"{% endif %} id=\"{{ id }}\" type=\"{{ type }}\" {{ block('widget_attributes') }} {% if value is not empty %}value=\"{{ value }}\" {% endif %}/>
\t  \t</div>
{% endspaceless %}
{% endblock form_widget_simple %}

{% block form_row %}
{% spaceless %}
\t<div class=\"form-group {% if errors|length > 0 %}has-error{% endif %}\">
        {{ form_label(form) }}
        {{ form_widget(form) }}
        {{ form_errors(form) }}
    </div>
{% endspaceless %}
{% endblock form_row %}

{# Textarea #}
{% block textarea_widget %}
{% spaceless %}
    <div class=\"col-md-6\">
    <textarea {{ block('widget_attributes') }} class=\"form-control\">{{ value }}</textarea>
    </div>
{% endspaceless %}
{% endblock textarea_widget %}


{# Select #}
{% block choice_widget_collapsed %}
{% spaceless %}

    <div class=\"col-md-6\">
    <select {{ block('widget_attributes') }}{% if multiple %} multiple=\"multiple\"{% endif %} class=\"form-control\">
        {% if empty_value is not none %}
            <option value=\"\">{{ empty_value|trans({}, translation_domain) }}</option>
        {% endif %}
        {% if preferred_choices|length > 0 %}
            {% set options = preferred_choices %}
            {{ block('choice_widget_options') }}
            {% if choices|length > 0 and separator is not none %}
                <option disabled=\"disabled\">{{ separator }}</option>
            {% endif %}
        {% endif %}
        {% set options = choices %}
        {{ block('choice_widget_options') }}
    </select>
    </div>
{% endspaceless %}
{% endblock choice_widget_collapsed %}

{# Date #}
{% block date_widget %}
{% spaceless %}
<div class=\"col-md-6\">
<div class=\"input-group\">
      <input type=\"text\" class=\"form-control has-datepicker\" {{ block('widget_attributes') }} {% if value is defined %} value=\"{{ value}}\"{% endif %} />
  <span class=\"input-group-addon\"><span class=\"glyphicon glyphicon-calendar\"></span></span>
</div>
</div>
{% endspaceless %}
{% endblock date_widget %} 

{# checkbox #}
{% block checkbox_widget %}
{% spaceless %}
<input type=\"checkbox\" {{ block('widget_attributes') }} {% if value is defined %} value=\"{{ value }}\"{% endif %}{% if checked %} checked=\"checked\"{% endif %}/>
{% endspaceless %}
{% endblock checkbox_widget %}

{# {% block number_widget %}
{% spaceless %}
    <span class=\"ui-spinner ui-widget ui-widget-content ui-corner-all\">
    <input type=\"text\" {{ block('widget_attributes') }}  class=\"form-control spinner ui-spinner-input\" aria-valuemin=\"-99\" aria-valuemax=\"99\" aria-valuenow=\"-1\" autocomplete=\"off\" role=\"spinbutton\">
    <a class=\"ui-spinner-button ui-spinner-up ui-corner-tr\" tabindex=\"-1\">
        <span class=\"ui-icon ui-icon-triangle-1-n\"></span>
    </a>
    <a class=\"ui-spinner-button ui-spinner-down ui-corner-br\" tabindex=\"-1\">
        <span class=\"ui-icon ui-icon-triangle-1-s\"></span>
    </a>
    </span>
{% endspaceless %}
{% endblock number_widget %} #}

{% block choice_widget_expanded %}
{% spaceless %}
    <div class=\"col-md-6\" {{ block('widget_container_attributes') }}>
    {% for child in form %}
    <label class=\"checkbox\" for=\"{{child.vars.id}}\">
    {{ form_widget(child, { 'attr': {'data-toggle':'checkbox'}}) }}
    {{child.vars.label}}</label>
    {% endfor %}
    </div>
{% endspaceless %}
{% endblock choice_widget_expanded %}


{% block form_errors %}
{% spaceless %}
    {% if errors|length > 0 %}
    <div class=\"help-block col-md-6 \">
    <ul>
        {% for error in errors %}
            <li>{{
                error.messagePluralization is null
                    ? error.messageTemplate|trans(error.messageParameters, 'validators')
                    : error.messageTemplate|transchoice(error.messagePluralization, error.messageParameters, 'validators')
            }}</li>
        {% endfor %}
    </ul>
    </div>
    {% endif %}
{% endspaceless %}
{% endblock form_errors %}

", "BenDoctorsBundle:Form:fields.html.twig", "/home/pacifik/Desktop/Doctors-master/src/Ben/DoctorsBundle/Resources/views/Form/fields.html.twig");
    }
}
