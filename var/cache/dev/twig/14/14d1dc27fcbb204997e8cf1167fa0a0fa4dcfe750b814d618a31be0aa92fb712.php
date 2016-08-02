<?php

/* examination/index.html.twig */
class __TwigTemplate_1257efb24105cf7215fa4bbfc03c68cedfa5ebe6bfed8dd4ba3da6c33edc8f0d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "examination/index.html.twig", 1);
        $this->blocks = array(
            'body_id' => array($this, 'block_body_id'),
            'main' => array($this, 'block_main'),
            'styles' => array($this, 'block_styles'),
            'sidebar' => array($this, 'block_sidebar'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3b510a475a0a12eb2d3b3936bf08bd599d030008e0591fa04c668887b22b033d = $this->env->getExtension("native_profiler");
        $__internal_3b510a475a0a12eb2d3b3936bf08bd599d030008e0591fa04c668887b22b033d->enter($__internal_3b510a475a0a12eb2d3b3936bf08bd599d030008e0591fa04c668887b22b033d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "examination/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3b510a475a0a12eb2d3b3936bf08bd599d030008e0591fa04c668887b22b033d->leave($__internal_3b510a475a0a12eb2d3b3936bf08bd599d030008e0591fa04c668887b22b033d_prof);

    }

    // line 3
    public function block_body_id($context, array $blocks = array())
    {
        $__internal_968a14aee7001fda0d00515a4f267c5f8b1b3ca12ec21641798ffc95514526b9 = $this->env->getExtension("native_profiler");
        $__internal_968a14aee7001fda0d00515a4f267c5f8b1b3ca12ec21641798ffc95514526b9->enter($__internal_968a14aee7001fda0d00515a4f267c5f8b1b3ca12ec21641798ffc95514526b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        echo "exam_index";
        
        $__internal_968a14aee7001fda0d00515a4f267c5f8b1b3ca12ec21641798ffc95514526b9->leave($__internal_968a14aee7001fda0d00515a4f267c5f8b1b3ca12ec21641798ffc95514526b9_prof);

    }

    // line 6
    public function block_main($context, array $blocks = array())
    {
        $__internal_7e44e5c509ce017ade1f2a96733177d05705d7356205306a67fd0d42ad01d08a = $this->env->getExtension("native_profiler");
        $__internal_7e44e5c509ce017ade1f2a96733177d05705d7356205306a67fd0d42ad01d08a->enter($__internal_7e44e5c509ce017ade1f2a96733177d05705d7356205306a67fd0d42ad01d08a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 7
        echo "    <script type=\"text/template\" id=\"entries-index\">
        <h1>Examinations</h1>

        <div class=\"alert alert-error fade in\" style=\"display:none\">
            <button class=\"close\"  type=\"button\">&times;</button>
            <div class=\"message\">test</div>
        </div>
        <form id=\"new_entry\">
            <select name=\"doctors\" id=\"new_entry_doctor\" class=\"input-medium\">
                <option value=\"\"> - Select Doctor - </option>
                ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["doctors"]) ? $context["doctors"] : $this->getContext($context, "doctors")));
        foreach ($context['_seq'] as $context["_key"] => $context["doctor"]) {
            // line 18
            echo "                    <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["doctor"], "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["doctor"], "name", array()), "html", null, true);
            echo "</option>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['doctor'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "            </select>
            <select name=\"patients\" id=\"new_entry_patient\" class=\"input-medium\">
                <option value=\"\"> - Select Patient - </option>
                ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["patients"]) ? $context["patients"] : $this->getContext($context, "patients")));
        foreach ($context['_seq'] as $context["_key"] => $context["patient"]) {
            // line 24
            echo "                    <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["patient"], "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["patient"], "name", array()), "html", null, true);
            echo "</option>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['patient'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "            </select>
            <textarea placeholder=\"Symptoms\" name=\"symptoms\" id=\"new_entry_symptoms\" class=\"input-large\"></textarea>
            <textarea placeholder=\"Treatment\" name=\"treatment\" id=\"new_entry_treatment\" class=\"input-large\"></textarea>
            <input type=\"date\" name=\"examination_date\" id=\"new_entry_examination_date\" class=\"input-medium\">
            <input type=\"time\" name=\"examination_time\" id=\"new_entry_examination_time\" class=\"input-small\">
            <input type=\"submit\" value=\"Add\" class=\"btn btn-success\">
        </form>
        <table class=\"table table-striped\" id=\"entries\">
            <tr>
                <th>Doctor</th>
                <th>Patient</th>
                <th>Symptoms</th>
                <th>Treatment</th>
                <th>Examination Date</th>
                <th>Remove</th>
            </tr>
        </table>

    </script>
    <script type=\"text/template\" id=\"entry\">
        <td><%=entry.get('doctor')%></td>
        <td><%=entry.get('patient')%></td>
        <td><%=entry.get('symptoms')%></td>
        <td><%=entry.get('treatment')%></td>
        <td><%=entry.get('examinationDate')%></td>
        <td><input type=\"button\" id=\"Entry<%=entry.get('id')%>\" value=\"Remove\" class=\"removeButton btn btn-success\"></td>
    </script>

    ";
        // line 54
        $this->displayBlock('styles', $context, $blocks);
        // line 57
        echo "
    <div class=\"container-fluid\">
        <div class=\"row-fluid\">
            <div class=\"span10\">
                <div id=\"container\" >
                </div>
            </div>
        </div>
    </div>

    <div class=\"navigation text-center\">
        ";
        // line 68
        echo $this->env->getExtension('pagerfanta')->renderPagerfanta((isset($context["examinations"]) ? $context["examinations"] : $this->getContext($context, "examinations")), "twitter_bootstrap3_translated", array("routeName" => "exam_index_paginated"));
        echo "
    </div>
";
        
        $__internal_7e44e5c509ce017ade1f2a96733177d05705d7356205306a67fd0d42ad01d08a->leave($__internal_7e44e5c509ce017ade1f2a96733177d05705d7356205306a67fd0d42ad01d08a_prof);

    }

    // line 54
    public function block_styles($context, array $blocks = array())
    {
        $__internal_03a1747bcce5596694d3d869daa95c0a4d44bc046fb906e6e15ccc0e75621724 = $this->env->getExtension("native_profiler");
        $__internal_03a1747bcce5596694d3d869daa95c0a4d44bc046fb906e6e15ccc0e75621724->enter($__internal_03a1747bcce5596694d3d869daa95c0a4d44bc046fb906e6e15ccc0e75621724_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "styles"));

        // line 55
        echo "        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("/bundles/devtimeraffler/css/bootstrap.css"), "html", null, true);
        echo "\">
    ";
        
        $__internal_03a1747bcce5596694d3d869daa95c0a4d44bc046fb906e6e15ccc0e75621724->leave($__internal_03a1747bcce5596694d3d869daa95c0a4d44bc046fb906e6e15ccc0e75621724_prof);

    }

    // line 72
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_bbe07ddd32c9821387c31c0ae3bc2c54d6011690b7a62a916a53e2f8b7f3a33e = $this->env->getExtension("native_profiler");
        $__internal_bbe07ddd32c9821387c31c0ae3bc2c54d6011690b7a62a916a53e2f8b7f3a33e->enter($__internal_bbe07ddd32c9821387c31c0ae3bc2c54d6011690b7a62a916a53e2f8b7f3a33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 73
        echo "
";
        
        $__internal_bbe07ddd32c9821387c31c0ae3bc2c54d6011690b7a62a916a53e2f8b7f3a33e->leave($__internal_bbe07ddd32c9821387c31c0ae3bc2c54d6011690b7a62a916a53e2f8b7f3a33e_prof);

    }

    // line 76
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_cda14317b9c5d53df84e9e4095a1e51323e945078b8a98d9b6a9a9134ba6f317 = $this->env->getExtension("native_profiler");
        $__internal_cda14317b9c5d53df84e9e4095a1e51323e945078b8a98d9b6a9a9134ba6f317->enter($__internal_cda14317b9c5d53df84e9e4095a1e51323e945078b8a98d9b6a9a9134ba6f317_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 77
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("/bundles/app/js/jquery.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 78
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("/bundles/app/js/underscore.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 79
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("/bundles/app/js/backbone.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 80
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("/bundles/app/js/app.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 81
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("/bundles/app/js/models/model.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 82
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("/bundles/app/js/collections/models.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 83
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("/bundles/app/js/views/models/model.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 84
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("/bundles/app/js/views/models/models_index.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 85
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("/bundles/app/js/routers/models_router.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
";
        
        $__internal_cda14317b9c5d53df84e9e4095a1e51323e945078b8a98d9b6a9a9134ba6f317->leave($__internal_cda14317b9c5d53df84e9e4095a1e51323e945078b8a98d9b6a9a9134ba6f317_prof);

    }

    public function getTemplateName()
    {
        return "examination/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  227 => 85,  223 => 84,  219 => 83,  215 => 82,  211 => 81,  207 => 80,  203 => 79,  199 => 78,  194 => 77,  188 => 76,  180 => 73,  174 => 72,  164 => 55,  158 => 54,  148 => 68,  135 => 57,  133 => 54,  103 => 26,  92 => 24,  88 => 23,  83 => 20,  72 => 18,  68 => 17,  56 => 7,  50 => 6,  38 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body_id 'exam_index' %}*/
/* */
/* */
/* {% block main %}*/
/*     <script type="text/template" id="entries-index">*/
/*         <h1>Examinations</h1>*/
/* */
/*         <div class="alert alert-error fade in" style="display:none">*/
/*             <button class="close"  type="button">&times;</button>*/
/*             <div class="message">test</div>*/
/*         </div>*/
/*         <form id="new_entry">*/
/*             <select name="doctors" id="new_entry_doctor" class="input-medium">*/
/*                 <option value=""> - Select Doctor - </option>*/
/*                 {% for doctor in doctors %}*/
/*                     <option value="{{ doctor.id }}">{{ doctor.name }}</option>*/
/*                 {% endfor %}*/
/*             </select>*/
/*             <select name="patients" id="new_entry_patient" class="input-medium">*/
/*                 <option value=""> - Select Patient - </option>*/
/*                 {% for patient in patients %}*/
/*                     <option value="{{ patient.id }}">{{ patient.name }}</option>*/
/*                 {% endfor %}*/
/*             </select>*/
/*             <textarea placeholder="Symptoms" name="symptoms" id="new_entry_symptoms" class="input-large"></textarea>*/
/*             <textarea placeholder="Treatment" name="treatment" id="new_entry_treatment" class="input-large"></textarea>*/
/*             <input type="date" name="examination_date" id="new_entry_examination_date" class="input-medium">*/
/*             <input type="time" name="examination_time" id="new_entry_examination_time" class="input-small">*/
/*             <input type="submit" value="Add" class="btn btn-success">*/
/*         </form>*/
/*         <table class="table table-striped" id="entries">*/
/*             <tr>*/
/*                 <th>Doctor</th>*/
/*                 <th>Patient</th>*/
/*                 <th>Symptoms</th>*/
/*                 <th>Treatment</th>*/
/*                 <th>Examination Date</th>*/
/*                 <th>Remove</th>*/
/*             </tr>*/
/*         </table>*/
/* */
/*     </script>*/
/*     <script type="text/template" id="entry">*/
/*         <td><%=entry.get('doctor')%></td>*/
/*         <td><%=entry.get('patient')%></td>*/
/*         <td><%=entry.get('symptoms')%></td>*/
/*         <td><%=entry.get('treatment')%></td>*/
/*         <td><%=entry.get('examinationDate')%></td>*/
/*         <td><input type="button" id="Entry<%=entry.get('id')%>" value="Remove" class="removeButton btn btn-success"></td>*/
/*     </script>*/
/* */
/*     {% block styles %}*/
/*         <link rel="stylesheet" type="text/css" href="{{ asset('/bundles/devtimeraffler/css/bootstrap.css') }}">*/
/*     {% endblock %}*/
/* */
/*     <div class="container-fluid">*/
/*         <div class="row-fluid">*/
/*             <div class="span10">*/
/*                 <div id="container" >*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* */
/*     <div class="navigation text-center">*/
/*         {{ pagerfanta(examinations, 'twitter_bootstrap3_translated', { routeName: 'exam_index_paginated' }) }}*/
/*     </div>*/
/* {% endblock %}*/
/* */
/* {% block sidebar %}*/
/* */
/* {% endblock %}*/
/* */
/* {% block javascripts %}*/
/*     <script src="{{ asset('/bundles/app/js/jquery.min.js') }}" type="text/javascript"></script>*/
/*     <script src="{{ asset('/bundles/app/js/underscore.js') }}" type="text/javascript"></script>*/
/*     <script src="{{ asset('/bundles/app/js/backbone.js') }}" type="text/javascript"></script>*/
/*     <script src="{{ asset('/bundles/app/js/app.js') }}" type="text/javascript"></script>*/
/*     <script src="{{ asset('/bundles/app/js/models/model.js') }}" type="text/javascript"></script>*/
/*     <script src="{{ asset('/bundles/app/js/collections/models.js') }}" type="text/javascript"></script>*/
/*     <script src="{{ asset('/bundles/app/js/views/models/model.js') }}" type="text/javascript"></script>*/
/*     <script src="{{ asset('/bundles/app/js/views/models/models_index.js') }}" type="text/javascript"></script>*/
/*     <script src="{{ asset('/bundles/app/js/routers/models_router.js') }}" type="text/javascript"></script>*/
/* {% endblock %}*/
/* */
/* */
/* */
