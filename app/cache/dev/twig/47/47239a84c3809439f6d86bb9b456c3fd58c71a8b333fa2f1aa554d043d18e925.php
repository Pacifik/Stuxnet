<?php

/* BenDoctorsBundle:Default:ajaxStats.html.twig */
class __TwigTemplate_a3d8486b808e357b329389f3fbbe85ad6d7d41e8196f4c3041acaa69eaa105b0 extends Twig_Template
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
        if ($this->getAttribute(($context["stats"] ?? null), "cnss", array(), "any", true, true)) {
            // line 2
            echo "\t<div class=\"col-md-6\">  
\t    <div class=\"box\">
\t\t    <header>
\t\t        <h4><span class=\"glyphicon glyphicon-file\"></span> Medical insurance</h4>
\t\t    </header>
\t\t    <table class=\"table table-striped table-bordered\">
\t\t    <thead>
\t\t\t    <tr>
\t\t\t    \t<th>Type of insurance</th>
\t\t\t    \t<th>Number</th>
\t\t\t    </tr>
\t\t    </thead>
\t\t        ";
            // line 14
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["stats"] ?? $this->getContext($context, "stats")), "cnss", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 15
                echo "\t\t        <tr>
\t\t            <td>";
                // line 16
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "label", array()), "html", null, true);
                echo "</td>
\t\t            <td>";
                // line 17
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "data", array()), "html", null, true);
                echo "</td>
\t\t        </tr>
\t\t        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 20
            echo "\t\t    </table>
\t    </div>
\t</div>
";
        }
        // line 23
        echo "  
";
        // line 24
        if ($this->getAttribute(($context["stats"] ?? null), "meds", array(), "any", true, true)) {
            echo "  
\t<div class=\"col-md-6\"> 
\t    <div class=\"box\">
\t\t    <header>
\t\t        <h4><span class=\"glyphicon glyphicon-file\"></span> Medicine delivered</h4>
\t\t    </header>
\t\t    <table class=\"table table-striped table-bordered\">
\t\t    <thead>
\t\t\t    <tr>
\t\t\t    \t<th>Medicine</th>
\t\t\t    \t<th>Number</th>
\t\t\t    </tr>
\t\t    </thead>
\t\t        ";
            // line 37
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["stats"] ?? $this->getContext($context, "stats")), "meds", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 38
                echo "\t\t        <tr>
\t\t            <td>";
                // line 39
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "label", array()), "html", null, true);
                echo "</td>
\t\t            <td>";
                // line 40
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "data", array()), "html", null, true);
                echo "</td>
\t\t        </tr>
\t\t        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 43
            echo "\t\t    </table>
\t    </div>
\t</div>
";
        }
        // line 46
        echo "  
";
        // line 47
        if ($this->getAttribute(($context["stats"] ?? null), "consultations_structures", array(), "any", true, true)) {
            echo "    
\t<div class=\"col-md-6\"> 
\t    <div class=\"box\">
\t\t    <header>
\t\t        <h4><span class=\"glyphicon glyphicon-file\"></span> Sanitary infrastructures by reference of structure</h4>
\t\t    </header>
\t\t    <table class=\"table table-striped table-bordered\">
\t\t    <thead>
\t\t\t    <tr>
\t\t\t    \t<th>Speciality</th>
\t\t\t    \t<th>Number</th>
\t\t\t    </tr>
\t\t    </thead>
\t\t        ";
            // line 60
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["stats"] ?? $this->getContext($context, "stats")), "consultations_structures", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 61
                echo "\t\t        <tr>
\t\t            <td>";
                // line 62
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "label", array()), "html", null, true);
                echo "</td>
\t\t            <td>";
                // line 63
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "data", array()), "html", null, true);
                echo "</td>
\t\t        </tr>
\t\t        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 66
            echo "\t\t    </table>
\t    </div>
\t</div>
";
        }
        // line 69
        echo "  
";
        // line 70
        if ($this->getAttribute(($context["stats"] ?? null), "consultations_visual_issue", array(), "any", true, true)) {
            echo "     
\t<div class=\"col-md-6\"> 
\t    <div class=\"box\">
\t\t    <header>
\t\t        <h4><span class=\"glyphicon glyphicon-file\"></span> Cases with visual disorders</h4>
\t\t    </header>
\t\t    <table class=\"table table-striped table-bordered\">
\t\t    <thead>
\t\t\t    <tr>
\t\t\t    \t<th>Speciality</th>
\t\t\t    \t<th>Number</th>
\t\t\t    </tr>
\t\t    </thead>
\t\t        ";
            // line 83
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["stats"] ?? $this->getContext($context, "stats")), "consultations_visual_issue", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 84
                echo "\t\t        <tr>
\t\t            <td>";
                // line 85
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "label", array()), "html", null, true);
                echo "</td>
\t\t            <td>";
                // line 86
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "data", array()), "html", null, true);
                echo "</td>
\t\t        </tr>
\t\t        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 89
            echo "\t\t    </table>
\t    </div>
\t</div>
";
        }
        // line 92
        echo "  
";
        // line 93
        if ($this->getAttribute(($context["stats"] ?? null), "consultations_demande", array(), "any", true, true)) {
            echo "     
\t<div class=\"col-md-6\"> 
\t    <div class=\"box\">
\t\t    <header>
\t\t        <h4><span class=\"glyphicon glyphicon-file\"></span> Number of medical consultations by appointment <span class=\"badge pull-right\">";
            // line 97
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["stats"] ?? $this->getContext($context, "stats")), "consultations_demande", array()), 0, array(), "array"), "data", array()), "html", null, true);
            echo "</span></h4>
\t\t    </header>
\t\t</div>
    </div>
";
        }
        // line 101
        echo " 
";
        // line 102
        if ($this->getAttribute(($context["stats"] ?? null), "consultations_demande_gender", array(), "any", true, true)) {
            echo "     
    <div class=\"col-md-6\">
\t    <div class=\"box\">
\t\t    <header>
\t\t        <h4><span class=\"glyphicon glyphicon-file\"></span> Medical consultations on appointment by gender</h4>
\t\t    </header>
\t\t    <table class=\"table table-striped table-bordered\">
\t\t    <thead>
\t\t\t    <tr>
\t\t\t    \t<th>Gender</th>
\t\t\t    \t<th>Number</th>
\t\t\t    </tr>
\t\t    </thead>
\t\t        ";
            // line 115
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["stats"] ?? $this->getContext($context, "stats")), "consultations_demande_gender", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 116
                echo "\t\t        <tr>
\t\t            <td>";
                // line 117
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "label", array()), "html", null, true);
                echo "</td>
\t\t            <td>";
                // line 118
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "data", array()), "html", null, true);
                echo "</td>
\t\t        </tr>
\t\t        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 121
            echo "\t\t    </table>
\t    </div>
\t</div>
";
        }
        // line 125
        if ($this->getAttribute(($context["stats"] ?? null), "consultations_demande_resident", array(), "any", true, true)) {
            echo "     
\t<div class=\"col-md-6\"> 
\t    <div class=\"box\">
\t\t    <header>
\t\t        <h4><span class=\"glyphicon glyphicon-file\"></span> Number of medical consultations on appointment for residents<span class=\"badge pull-right\">";
            // line 129
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["stats"] ?? $this->getContext($context, "stats")), "consultations_demande_resident", array()), 0, array(), "array"), "data", array()), "html", null, true);
            echo "</span></h4>
\t\t    </header>
\t\t</div>
    </div>
";
        }
        // line 133
        echo " 
";
        // line 134
        if ($this->getAttribute(($context["stats"] ?? null), "consultations_demande_resident_gender", array(), "any", true, true)) {
            echo "     
\t<div class=\"col-md-6\"> 
\t    <div class=\"box\">
\t\t    <header>
\t\t        <h4><span class=\"glyphicon glyphicon-file\"></span> Medical consultations on appointment for residents by gender</h4>
\t\t    </header>
\t\t    <table class=\"table table-striped table-bordered\">
\t\t    <thead>
\t\t\t    <tr>
\t\t\t    \t<th>Gender</th>
\t\t\t    \t<th>Number</th>
\t\t\t    </tr>
\t\t    </thead>
\t\t        ";
            // line 147
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["stats"] ?? $this->getContext($context, "stats")), "consultations_demande_resident_gender", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 148
                echo "\t\t        <tr>
\t\t            <td>";
                // line 149
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "label", array()), "html", null, true);
                echo "</td>
\t\t            <td>";
                // line 150
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "data", array()), "html", null, true);
                echo "</td>
\t\t        </tr>
\t\t        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 153
            echo "\t\t    </table>
\t    </div>
\t</div>
";
        }
        // line 156
        echo "  
";
        // line 157
        if ($this->getAttribute(($context["stats"] ?? null), "consultations_systematique_resident", array(), "any", true, true)) {
            echo "     
\t<div class=\"col-md-6\"> 
\t    <div class=\"box\">
\t\t    <header>
\t\t        <h4><span class=\"glyphicon glyphicon-file\"></span> Number of medical consultations on appointment for residents <span class=\"badge pull-right\">";
            // line 161
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["stats"] ?? $this->getContext($context, "stats")), "consultations_systematique_resident", array()), 0, array(), "array"), "data", array()), "html", null, true);
            echo "</span></h4>
\t\t    </header>
\t\t</div>
    </div>
";
        }
        // line 165
        echo " 
";
        // line 166
        if ($this->getAttribute(($context["stats"] ?? null), "consultations_systematique_resident_gender", array(), "any", true, true)) {
            echo "     
\t<div class=\"col-md-6\"> 
\t    <div class=\"box\">
\t\t    <header>
\t\t        <h4><span class=\"glyphicon glyphicon-file\"></span> Systematic medical consultations by gender</h4>
\t\t    </header>
\t\t    <table class=\"table table-striped table-bordered\">
\t\t    <thead>
\t\t\t    <tr>
\t\t\t    \t<th>Gender</th>
\t\t\t    \t<th>Number</th>
\t\t\t    </tr>
\t\t    </thead>
\t\t        ";
            // line 179
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["stats"] ?? $this->getContext($context, "stats")), "consultations_systematique_resident_gender", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 180
                echo "\t\t        <tr>
\t\t            <td>";
                // line 181
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "label", array()), "html", null, true);
                echo "</td>
\t\t            <td>";
                // line 182
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "data", array()), "html", null, true);
                echo "</td>
\t\t        </tr>
\t\t        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 185
            echo "\t\t    </table>
\t    </div>
\t</div>
";
        }
        // line 188
        echo "  
";
        // line 189
        if ($this->getAttribute(($context["stats"] ?? null), "consultations_special", array(), "any", true, true)) {
            echo "     
\t<div class=\"col-md-6\"> 
\t    <div class=\"box\">
\t\t    <header>
\t\t        <h4><span class=\"glyphicon glyphicon-file\"></span> Specialized medical consultations by speciality</h4>
\t\t    </header>
\t\t    <table class=\"table table-striped table-bordered\">
\t\t    <thead>
\t\t\t    <tr>
\t\t\t    \t<th>Speciality</th>
\t\t\t    \t<th>Number</th>
\t\t\t    </tr>
\t\t    </thead>
\t\t        ";
            // line 202
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["stats"] ?? $this->getContext($context, "stats")), "consultations_special", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 203
                echo "\t\t        <tr>
\t\t            <td>";
                // line 204
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "label", array()), "html", null, true);
                echo "</td>
\t\t            <td>";
                // line 205
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "data", array()), "html", null, true);
                echo "</td>
\t\t        </tr>
\t\t        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 208
            echo "\t\t    </table>
\t    </div>
\t</div>
";
        }
        // line 211
        echo "  
";
        // line 212
        if ($this->getAttribute(($context["stats"] ?? null), "consultations_special_gender", array(), "any", true, true)) {
            echo "     
\t<div class=\"col-md-6\"> 
\t    <div class=\"box\">
\t\t    <header>
\t\t        <h4><span class=\"glyphicon glyphicon-file\"></span> Specialized medical consultations by speciality and gender </h4>
\t\t    </header>
\t\t    <table class=\"table table-striped table-bordered\">
\t\t    <thead>
\t\t\t    <tr>
\t\t\t    \t<th>Speciality</th>
\t\t\t    \t<th>Gender</th>
\t\t\t    \t<th>Number</th>
\t\t\t    </tr>
\t\t    </thead>
\t\t        ";
            // line 226
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["stats"] ?? $this->getContext($context, "stats")), "consultations_special_gender", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 227
                echo "\t\t        <tr>
\t\t            <td>";
                // line 228
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "label", array()), "html", null, true);
                echo "</td>
\t\t            <td>";
                // line 229
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "gender", array()), "html", null, true);
                echo "</td>
\t\t            <td>";
                // line 230
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "data", array()), "html", null, true);
                echo "</td>
\t\t        </tr>
\t\t        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 233
            echo "\t\t    </table>
\t    </div>
\t</div>
";
        }
        // line 236
        echo "  
";
        // line 237
        if ($this->getAttribute(($context["stats"] ?? null), "stock", array(), "any", true, true)) {
            echo " 
\t<div class=\"col-md-6\"> 
\t    <div class=\"box\">
\t\t    <header>
\t\t        <h4><span class=\"glyphicon glyphicon-file\"></span> Number of medicines in stock <span class=\"badge pull-right\">";
            // line 241
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["stats"] ?? $this->getContext($context, "stats")), "stock", array()), 0, array(), "array"), "data", array()), "html", null, true);
            echo "</span></h4>
\t\t    </header>
\t\t</div>
\t</div>
";
        }
        // line 245
        echo "  
";
        // line 246
        if ($this->getAttribute(($context["stats"] ?? null), "consultations_not_chronic", array(), "any", true, true)) {
            echo "     
\t<div class=\"col-md-6\"> 
\t    <div class=\"box\">
\t\t    <header>
\t\t        <h4><span class=\"glyphicon glyphicon-file\"></span> Number of detected diseases <span class=\"badge pull-right\">";
            // line 250
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["stats"] ?? $this->getContext($context, "stats")), "consultations_not_chronic", array()), 0, array(), "array"), "data", array()), "html", null, true);
            echo "</span></h4>
\t\t    </header>
\t\t</div>
\t</div>
";
        }
        // line 254
        echo "  
";
        // line 255
        if ($this->getAttribute(($context["stats"] ?? null), "consultations_chronic", array(), "any", true, true)) {
            echo "     
\t<div class=\"col-md-6\"> 
\t    <div class=\"box\">
\t\t    <header>
\t\t        <h4><span class=\"glyphicon glyphicon-file\"></span> Number of chronic diseases <span class=\"badge pull-right\">";
            // line 259
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["stats"] ?? $this->getContext($context, "stats")), "consultations_chronic", array()), 0, array(), "array"), "data", array()), "html", null, true);
            echo "</span></h4>
\t\t    </header>
\t\t</div>
    </div>
";
        }
        // line 263
        echo " 
    <div class=\"clearfix\"></div>";
    }

    public function getTemplateName()
    {
        return "BenDoctorsBundle:Default:ajaxStats.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  531 => 263,  523 => 259,  516 => 255,  513 => 254,  505 => 250,  498 => 246,  495 => 245,  487 => 241,  480 => 237,  477 => 236,  471 => 233,  462 => 230,  458 => 229,  454 => 228,  451 => 227,  447 => 226,  430 => 212,  427 => 211,  421 => 208,  412 => 205,  408 => 204,  405 => 203,  401 => 202,  385 => 189,  382 => 188,  376 => 185,  367 => 182,  363 => 181,  360 => 180,  356 => 179,  340 => 166,  337 => 165,  329 => 161,  322 => 157,  319 => 156,  313 => 153,  304 => 150,  300 => 149,  297 => 148,  293 => 147,  277 => 134,  274 => 133,  266 => 129,  259 => 125,  253 => 121,  244 => 118,  240 => 117,  237 => 116,  233 => 115,  217 => 102,  214 => 101,  206 => 97,  199 => 93,  196 => 92,  190 => 89,  181 => 86,  177 => 85,  174 => 84,  170 => 83,  154 => 70,  151 => 69,  145 => 66,  136 => 63,  132 => 62,  129 => 61,  125 => 60,  109 => 47,  106 => 46,  100 => 43,  91 => 40,  87 => 39,  84 => 38,  80 => 37,  64 => 24,  61 => 23,  55 => 20,  46 => 17,  42 => 16,  39 => 15,  35 => 14,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if stats.cnss is defined %}
\t<div class=\"col-md-6\">  
\t    <div class=\"box\">
\t\t    <header>
\t\t        <h4><span class=\"glyphicon glyphicon-file\"></span> Medical insurance</h4>
\t\t    </header>
\t\t    <table class=\"table table-striped table-bordered\">
\t\t    <thead>
\t\t\t    <tr>
\t\t\t    \t<th>Type of insurance</th>
\t\t\t    \t<th>Number</th>
\t\t\t    </tr>
\t\t    </thead>
\t\t        {% for item in stats.cnss %}
\t\t        <tr>
\t\t            <td>{{ item.label }}</td>
\t\t            <td>{{ item.data }}</td>
\t\t        </tr>
\t\t        {% endfor %}
\t\t    </table>
\t    </div>
\t</div>
{% endif %}  
{% if stats.meds is defined %}  
\t<div class=\"col-md-6\"> 
\t    <div class=\"box\">
\t\t    <header>
\t\t        <h4><span class=\"glyphicon glyphicon-file\"></span> Medicine delivered</h4>
\t\t    </header>
\t\t    <table class=\"table table-striped table-bordered\">
\t\t    <thead>
\t\t\t    <tr>
\t\t\t    \t<th>Medicine</th>
\t\t\t    \t<th>Number</th>
\t\t\t    </tr>
\t\t    </thead>
\t\t        {% for item in stats.meds %}
\t\t        <tr>
\t\t            <td>{{ item.label }}</td>
\t\t            <td>{{ item.data }}</td>
\t\t        </tr>
\t\t        {% endfor %}
\t\t    </table>
\t    </div>
\t</div>
{% endif %}  
{% if stats.consultations_structures is defined %}    
\t<div class=\"col-md-6\"> 
\t    <div class=\"box\">
\t\t    <header>
\t\t        <h4><span class=\"glyphicon glyphicon-file\"></span> Sanitary infrastructures by reference of structure</h4>
\t\t    </header>
\t\t    <table class=\"table table-striped table-bordered\">
\t\t    <thead>
\t\t\t    <tr>
\t\t\t    \t<th>Speciality</th>
\t\t\t    \t<th>Number</th>
\t\t\t    </tr>
\t\t    </thead>
\t\t        {% for item in stats.consultations_structures %}
\t\t        <tr>
\t\t            <td>{{ item.label }}</td>
\t\t            <td>{{ item.data }}</td>
\t\t        </tr>
\t\t        {% endfor %}
\t\t    </table>
\t    </div>
\t</div>
{% endif %}  
{% if stats.consultations_visual_issue is defined %}     
\t<div class=\"col-md-6\"> 
\t    <div class=\"box\">
\t\t    <header>
\t\t        <h4><span class=\"glyphicon glyphicon-file\"></span> Cases with visual disorders</h4>
\t\t    </header>
\t\t    <table class=\"table table-striped table-bordered\">
\t\t    <thead>
\t\t\t    <tr>
\t\t\t    \t<th>Speciality</th>
\t\t\t    \t<th>Number</th>
\t\t\t    </tr>
\t\t    </thead>
\t\t        {% for item in stats.consultations_visual_issue %}
\t\t        <tr>
\t\t            <td>{{ item.label }}</td>
\t\t            <td>{{ item.data }}</td>
\t\t        </tr>
\t\t        {% endfor %}
\t\t    </table>
\t    </div>
\t</div>
{% endif %}  
{% if stats.consultations_demande is defined %}     
\t<div class=\"col-md-6\"> 
\t    <div class=\"box\">
\t\t    <header>
\t\t        <h4><span class=\"glyphicon glyphicon-file\"></span> Number of medical consultations by appointment <span class=\"badge pull-right\">{{ stats.consultations_demande[0].data }}</span></h4>
\t\t    </header>
\t\t</div>
    </div>
{% endif %} 
{% if stats.consultations_demande_gender is defined %}     
    <div class=\"col-md-6\">
\t    <div class=\"box\">
\t\t    <header>
\t\t        <h4><span class=\"glyphicon glyphicon-file\"></span> Medical consultations on appointment by gender</h4>
\t\t    </header>
\t\t    <table class=\"table table-striped table-bordered\">
\t\t    <thead>
\t\t\t    <tr>
\t\t\t    \t<th>Gender</th>
\t\t\t    \t<th>Number</th>
\t\t\t    </tr>
\t\t    </thead>
\t\t        {% for item in stats.consultations_demande_gender %}
\t\t        <tr>
\t\t            <td>{{ item.label }}</td>
\t\t            <td>{{ item.data }}</td>
\t\t        </tr>
\t\t        {% endfor %}
\t\t    </table>
\t    </div>
\t</div>
{% endif %}
{% if stats.consultations_demande_resident is defined %}     
\t<div class=\"col-md-6\"> 
\t    <div class=\"box\">
\t\t    <header>
\t\t        <h4><span class=\"glyphicon glyphicon-file\"></span> Number of medical consultations on appointment for residents<span class=\"badge pull-right\">{{ stats.consultations_demande_resident[0].data }}</span></h4>
\t\t    </header>
\t\t</div>
    </div>
{% endif %} 
{% if stats.consultations_demande_resident_gender is defined %}     
\t<div class=\"col-md-6\"> 
\t    <div class=\"box\">
\t\t    <header>
\t\t        <h4><span class=\"glyphicon glyphicon-file\"></span> Medical consultations on appointment for residents by gender</h4>
\t\t    </header>
\t\t    <table class=\"table table-striped table-bordered\">
\t\t    <thead>
\t\t\t    <tr>
\t\t\t    \t<th>Gender</th>
\t\t\t    \t<th>Number</th>
\t\t\t    </tr>
\t\t    </thead>
\t\t        {% for item in stats.consultations_demande_resident_gender %}
\t\t        <tr>
\t\t            <td>{{ item.label }}</td>
\t\t            <td>{{ item.data }}</td>
\t\t        </tr>
\t\t        {% endfor %}
\t\t    </table>
\t    </div>
\t</div>
{% endif %}  
{% if stats.consultations_systematique_resident is defined %}     
\t<div class=\"col-md-6\"> 
\t    <div class=\"box\">
\t\t    <header>
\t\t        <h4><span class=\"glyphicon glyphicon-file\"></span> Number of medical consultations on appointment for residents <span class=\"badge pull-right\">{{ stats.consultations_systematique_resident[0].data }}</span></h4>
\t\t    </header>
\t\t</div>
    </div>
{% endif %} 
{% if stats.consultations_systematique_resident_gender is defined %}     
\t<div class=\"col-md-6\"> 
\t    <div class=\"box\">
\t\t    <header>
\t\t        <h4><span class=\"glyphicon glyphicon-file\"></span> Systematic medical consultations by gender</h4>
\t\t    </header>
\t\t    <table class=\"table table-striped table-bordered\">
\t\t    <thead>
\t\t\t    <tr>
\t\t\t    \t<th>Gender</th>
\t\t\t    \t<th>Number</th>
\t\t\t    </tr>
\t\t    </thead>
\t\t        {% for item in stats.consultations_systematique_resident_gender %}
\t\t        <tr>
\t\t            <td>{{ item.label }}</td>
\t\t            <td>{{ item.data }}</td>
\t\t        </tr>
\t\t        {% endfor %}
\t\t    </table>
\t    </div>
\t</div>
{% endif %}  
{% if stats.consultations_special is defined %}     
\t<div class=\"col-md-6\"> 
\t    <div class=\"box\">
\t\t    <header>
\t\t        <h4><span class=\"glyphicon glyphicon-file\"></span> Specialized medical consultations by speciality</h4>
\t\t    </header>
\t\t    <table class=\"table table-striped table-bordered\">
\t\t    <thead>
\t\t\t    <tr>
\t\t\t    \t<th>Speciality</th>
\t\t\t    \t<th>Number</th>
\t\t\t    </tr>
\t\t    </thead>
\t\t        {% for item in stats.consultations_special %}
\t\t        <tr>
\t\t            <td>{{ item.label }}</td>
\t\t            <td>{{ item.data }}</td>
\t\t        </tr>
\t\t        {% endfor %}
\t\t    </table>
\t    </div>
\t</div>
{% endif %}  
{% if stats.consultations_special_gender is defined %}     
\t<div class=\"col-md-6\"> 
\t    <div class=\"box\">
\t\t    <header>
\t\t        <h4><span class=\"glyphicon glyphicon-file\"></span> Specialized medical consultations by speciality and gender </h4>
\t\t    </header>
\t\t    <table class=\"table table-striped table-bordered\">
\t\t    <thead>
\t\t\t    <tr>
\t\t\t    \t<th>Speciality</th>
\t\t\t    \t<th>Gender</th>
\t\t\t    \t<th>Number</th>
\t\t\t    </tr>
\t\t    </thead>
\t\t        {% for item in stats.consultations_special_gender %}
\t\t        <tr>
\t\t            <td>{{ item.label }}</td>
\t\t            <td>{{ item.gender }}</td>
\t\t            <td>{{ item.data }}</td>
\t\t        </tr>
\t\t        {% endfor %}
\t\t    </table>
\t    </div>
\t</div>
{% endif %}  
{% if stats.stock is defined %} 
\t<div class=\"col-md-6\"> 
\t    <div class=\"box\">
\t\t    <header>
\t\t        <h4><span class=\"glyphicon glyphicon-file\"></span> Number of medicines in stock <span class=\"badge pull-right\">{{ stats.stock[0].data }}</span></h4>
\t\t    </header>
\t\t</div>
\t</div>
{% endif %}  
{% if stats.consultations_not_chronic is defined %}     
\t<div class=\"col-md-6\"> 
\t    <div class=\"box\">
\t\t    <header>
\t\t        <h4><span class=\"glyphicon glyphicon-file\"></span> Number of detected diseases <span class=\"badge pull-right\">{{ stats.consultations_not_chronic[0].data }}</span></h4>
\t\t    </header>
\t\t</div>
\t</div>
{% endif %}  
{% if stats.consultations_chronic is defined %}     
\t<div class=\"col-md-6\"> 
\t    <div class=\"box\">
\t\t    <header>
\t\t        <h4><span class=\"glyphicon glyphicon-file\"></span> Number of chronic diseases <span class=\"badge pull-right\">{{ stats.consultations_chronic[0].data }}</span></h4>
\t\t    </header>
\t\t</div>
    </div>
{% endif %} 
    <div class=\"clearfix\"></div>", "BenDoctorsBundle:Default:ajaxStats.html.twig", "/home/pacifik/Desktop/Doctors-master/src/Ben/DoctorsBundle/Resources/views/Default/ajaxStats.html.twig");
    }
}
