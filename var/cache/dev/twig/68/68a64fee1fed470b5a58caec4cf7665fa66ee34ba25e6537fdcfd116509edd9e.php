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
        $__internal_1292e5388ce72747128c462f2469ab7372de4200c7b849ed35e05c4d7d40f7ad = $this->env->getExtension("native_profiler");
        $__internal_1292e5388ce72747128c462f2469ab7372de4200c7b849ed35e05c4d7d40f7ad->enter($__internal_1292e5388ce72747128c462f2469ab7372de4200c7b849ed35e05c4d7d40f7ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/homepage.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1292e5388ce72747128c462f2469ab7372de4200c7b849ed35e05c4d7d40f7ad->leave($__internal_1292e5388ce72747128c462f2469ab7372de4200c7b849ed35e05c4d7d40f7ad_prof);

    }

    // line 3
    public function block_body_id($context, array $blocks = array())
    {
        $__internal_fb6173de0e274e21f2c0d1b0a2b25d99edcc59b4144c5be4c48f33601cce9272 = $this->env->getExtension("native_profiler");
        $__internal_fb6173de0e274e21f2c0d1b0a2b25d99edcc59b4144c5be4c48f33601cce9272->enter($__internal_fb6173de0e274e21f2c0d1b0a2b25d99edcc59b4144c5be4c48f33601cce9272_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        echo "homepage";
        
        $__internal_fb6173de0e274e21f2c0d1b0a2b25d99edcc59b4144c5be4c48f33601cce9272->leave($__internal_fb6173de0e274e21f2c0d1b0a2b25d99edcc59b4144c5be4c48f33601cce9272_prof);

    }

    // line 9
    public function block_header($context, array $blocks = array())
    {
        $__internal_f347cad875d51c7056a1a6cbe24ea622a99a3b54bcb26bb87134d5c4dfd3d89b = $this->env->getExtension("native_profiler");
        $__internal_f347cad875d51c7056a1a6cbe24ea622a99a3b54bcb26bb87134d5c4dfd3d89b->enter($__internal_f347cad875d51c7056a1a6cbe24ea622a99a3b54bcb26bb87134d5c4dfd3d89b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        
        $__internal_f347cad875d51c7056a1a6cbe24ea622a99a3b54bcb26bb87134d5c4dfd3d89b->leave($__internal_f347cad875d51c7056a1a6cbe24ea622a99a3b54bcb26bb87134d5c4dfd3d89b_prof);

    }

    // line 10
    public function block_footer($context, array $blocks = array())
    {
        $__internal_8bcd2fcb80fbc742db343b90c8ee7ee1762278c2321609061d00c8ac7346050a = $this->env->getExtension("native_profiler");
        $__internal_8bcd2fcb80fbc742db343b90c8ee7ee1762278c2321609061d00c8ac7346050a->enter($__internal_8bcd2fcb80fbc742db343b90c8ee7ee1762278c2321609061d00c8ac7346050a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        
        $__internal_8bcd2fcb80fbc742db343b90c8ee7ee1762278c2321609061d00c8ac7346050a->leave($__internal_8bcd2fcb80fbc742db343b90c8ee7ee1762278c2321609061d00c8ac7346050a_prof);

    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        $__internal_41b756bc3f1e404f388e8672f2f81eeed453a189089fb3ebbc6cdd861f23f866 = $this->env->getExtension("native_profiler");
        $__internal_41b756bc3f1e404f388e8672f2f81eeed453a189089fb3ebbc6cdd861f23f866->enter($__internal_41b756bc3f1e404f388e8672f2f81eeed453a189089fb3ebbc6cdd861f23f866_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_41b756bc3f1e404f388e8672f2f81eeed453a189089fb3ebbc6cdd861f23f866->leave($__internal_41b756bc3f1e404f388e8672f2f81eeed453a189089fb3ebbc6cdd861f23f866_prof);

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
