<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_e98221e83f4914e05a079f5d15cd9c5996ba072fac47f9096aca5f2f6f26719f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_fe8f6e5ad31b624bc4a2cca5fc3b17d78fad8bc05b2751dd6bb1ae9f5236819d = $this->env->getExtension("native_profiler");
        $__internal_fe8f6e5ad31b624bc4a2cca5fc3b17d78fad8bc05b2751dd6bb1ae9f5236819d->enter($__internal_fe8f6e5ad31b624bc4a2cca5fc3b17d78fad8bc05b2751dd6bb1ae9f5236819d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fe8f6e5ad31b624bc4a2cca5fc3b17d78fad8bc05b2751dd6bb1ae9f5236819d->leave($__internal_fe8f6e5ad31b624bc4a2cca5fc3b17d78fad8bc05b2751dd6bb1ae9f5236819d_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_b8037df4b89554b25ea202619aa3a439636e3b0bc358c4c7b0c2db0bab5eddad = $this->env->getExtension("native_profiler");
        $__internal_b8037df4b89554b25ea202619aa3a439636e3b0bc358c4c7b0c2db0bab5eddad->enter($__internal_b8037df4b89554b25ea202619aa3a439636e3b0bc358c4c7b0c2db0bab5eddad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_b8037df4b89554b25ea202619aa3a439636e3b0bc358c4c7b0c2db0bab5eddad->leave($__internal_b8037df4b89554b25ea202619aa3a439636e3b0bc358c4c7b0c2db0bab5eddad_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_19e7f203f5ff43395dcc414dd8ae285fa0d12d3195be3a2f2b764739d7ee9d31 = $this->env->getExtension("native_profiler");
        $__internal_19e7f203f5ff43395dcc414dd8ae285fa0d12d3195be3a2f2b764739d7ee9d31->enter($__internal_19e7f203f5ff43395dcc414dd8ae285fa0d12d3195be3a2f2b764739d7ee9d31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_19e7f203f5ff43395dcc414dd8ae285fa0d12d3195be3a2f2b764739d7ee9d31->leave($__internal_19e7f203f5ff43395dcc414dd8ae285fa0d12d3195be3a2f2b764739d7ee9d31_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_3d9e58e7baf626544d84f59930f03c1673e91231a715ac508b8b4fac4acf060a = $this->env->getExtension("native_profiler");
        $__internal_3d9e58e7baf626544d84f59930f03c1673e91231a715ac508b8b4fac4acf060a->enter($__internal_3d9e58e7baf626544d84f59930f03c1673e91231a715ac508b8b4fac4acf060a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_3d9e58e7baf626544d84f59930f03c1673e91231a715ac508b8b4fac4acf060a->leave($__internal_3d9e58e7baf626544d84f59930f03c1673e91231a715ac508b8b4fac4acf060a_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
