<?php

/* default/homepage.html.twig */
class __TwigTemplate_d18770a55bdd4f2926ab1709001514c5442be3ebc9187dcbcf475d258d30c2c7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/homepage.html.twig", 1);
        $this->blocks = array(
            'body_id' => array($this, 'block_body_id'),
            'header' => array($this, 'block_header'),
            'footer' => array($this, 'block_footer'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a06b2ab0a71d76895e93f522f3547166c71c20a38e0da74373840e2a293b24e9 = $this->env->getExtension("native_profiler");
        $__internal_a06b2ab0a71d76895e93f522f3547166c71c20a38e0da74373840e2a293b24e9->enter($__internal_a06b2ab0a71d76895e93f522f3547166c71c20a38e0da74373840e2a293b24e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/homepage.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a06b2ab0a71d76895e93f522f3547166c71c20a38e0da74373840e2a293b24e9->leave($__internal_a06b2ab0a71d76895e93f522f3547166c71c20a38e0da74373840e2a293b24e9_prof);

    }

    // line 3
    public function block_body_id($context, array $blocks = array())
    {
        $__internal_1e45e28dfb44b11b5ecbf2f9d820636fb6fd283948624366d6fb9a3b891f5f67 = $this->env->getExtension("native_profiler");
        $__internal_1e45e28dfb44b11b5ecbf2f9d820636fb6fd283948624366d6fb9a3b891f5f67->enter($__internal_1e45e28dfb44b11b5ecbf2f9d820636fb6fd283948624366d6fb9a3b891f5f67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        echo "homepage";
        
        $__internal_1e45e28dfb44b11b5ecbf2f9d820636fb6fd283948624366d6fb9a3b891f5f67->leave($__internal_1e45e28dfb44b11b5ecbf2f9d820636fb6fd283948624366d6fb9a3b891f5f67_prof);

    }

    // line 9
    public function block_header($context, array $blocks = array())
    {
        $__internal_cd8d391e821019580eef0a00ee7046cd0b72452b6eee1008f2f3fcf5477a4cc6 = $this->env->getExtension("native_profiler");
        $__internal_cd8d391e821019580eef0a00ee7046cd0b72452b6eee1008f2f3fcf5477a4cc6->enter($__internal_cd8d391e821019580eef0a00ee7046cd0b72452b6eee1008f2f3fcf5477a4cc6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        
        $__internal_cd8d391e821019580eef0a00ee7046cd0b72452b6eee1008f2f3fcf5477a4cc6->leave($__internal_cd8d391e821019580eef0a00ee7046cd0b72452b6eee1008f2f3fcf5477a4cc6_prof);

    }

    // line 10
    public function block_footer($context, array $blocks = array())
    {
        $__internal_1fe689391671176718dada83675346d77451fde919cd2eb269e551acedf2919d = $this->env->getExtension("native_profiler");
        $__internal_1fe689391671176718dada83675346d77451fde919cd2eb269e551acedf2919d->enter($__internal_1fe689391671176718dada83675346d77451fde919cd2eb269e551acedf2919d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        
        $__internal_1fe689391671176718dada83675346d77451fde919cd2eb269e551acedf2919d->leave($__internal_1fe689391671176718dada83675346d77451fde919cd2eb269e551acedf2919d_prof);

    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        $__internal_1ce015a9c9ec8efa64dc879db6d817833a5ab7a1ca7ee22c96e9526f30325365 = $this->env->getExtension("native_profiler");
        $__internal_1ce015a9c9ec8efa64dc879db6d817833a5ab7a1ca7ee22c96e9526f30325365->enter($__internal_1ce015a9c9ec8efa64dc879db6d817833a5ab7a1ca7ee22c96e9526f30325365_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 13
        echo "    <div class=\"page-header\">
        <h1>";
        // line 14
        echo $this->env->getExtension('translator')->trans("title.homepage");
        echo "</h1>
    </div>

    <div class=\"row\">
        <div class=\"col-sm-6\">
            <div class=\"jumbotron\">
                <p>
                    ";
        // line 21
        echo $this->env->getExtension('translator')->trans("help.browse_app");
        echo "
                </p>
                <p>
                    <a class=\"btn btn-primary btn-lg\" href=\"";
        // line 24
        echo $this->env->getExtension('routing')->getPath("blog_index");
        echo "\">
                        <i class=\"fa fa-users\"></i> ";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.browse_app"), "html", null, true);
        echo "
                    </a>
                </p>
            </div>
        </div>

        <div class=\"col-sm-6\">
            <div class=\"jumbotron\">
                <p>
                    ";
        // line 34
        echo $this->env->getExtension('translator')->trans("help.browse_admin");
        echo "
                </p>
                <p>
                    <a class=\"btn btn-primary btn-lg\" href=\"";
        // line 37
        echo $this->env->getExtension('routing')->getPath("admin_index");
        echo "\">
                        <i class=\"fa fa-lock\"></i> ";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.browse_admin"), "html", null, true);
        echo "
                    </a>
                </p>
            </div>
        </div>
    </div>
";
        
        $__internal_1ce015a9c9ec8efa64dc879db6d817833a5ab7a1ca7ee22c96e9526f30325365->leave($__internal_1ce015a9c9ec8efa64dc879db6d817833a5ab7a1ca7ee22c96e9526f30325365_prof);

    }

    public function getTemplateName()
    {
        return "default/homepage.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  122 => 38,  118 => 37,  112 => 34,  100 => 25,  96 => 24,  90 => 21,  80 => 14,  77 => 13,  71 => 12,  60 => 10,  49 => 9,  37 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body_id 'homepage' %}*/
/* */
/* {#*/
/*     the homepage is a special page which displays neither a header nor a footer.*/
/*     this is done with the 'trick' of defining empty Twig blocks without any content*/
/* #}*/
/* {% block header %}{% endblock %}*/
/* {% block footer %}{% endblock %}*/
/* */
/* {% block body %}*/
/*     <div class="page-header">*/
/*         <h1>{{ 'title.homepage'|trans|raw }}</h1>*/
/*     </div>*/
/* */
/*     <div class="row">*/
/*         <div class="col-sm-6">*/
/*             <div class="jumbotron">*/
/*                 <p>*/
/*                     {{ 'help.browse_app'|trans|raw }}*/
/*                 </p>*/
/*                 <p>*/
/*                     <a class="btn btn-primary btn-lg" href="{{ path('blog_index') }}">*/
/*                         <i class="fa fa-users"></i> {{ 'action.browse_app'|trans }}*/
/*                     </a>*/
/*                 </p>*/
/*             </div>*/
/*         </div>*/
/* */
/*         <div class="col-sm-6">*/
/*             <div class="jumbotron">*/
/*                 <p>*/
/*                     {{ 'help.browse_admin'|trans|raw }}*/
/*                 </p>*/
/*                 <p>*/
/*                     <a class="btn btn-primary btn-lg" href="{{ path('admin_index') }}">*/
/*                         <i class="fa fa-lock"></i> {{ 'action.browse_admin'|trans }}*/
/*                     </a>*/
/*                 </p>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
