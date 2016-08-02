<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_05bb548332ab32305a93d82653c64b3c5414c3db26e7760e8ee76a0e268a09d8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8b307dfd8df6e8b575c71d3a29b86955f0e03061a71558afccdfff272664ac8c = $this->env->getExtension("native_profiler");
        $__internal_8b307dfd8df6e8b575c71d3a29b86955f0e03061a71558afccdfff272664ac8c->enter($__internal_8b307dfd8df6e8b575c71d3a29b86955f0e03061a71558afccdfff272664ac8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8b307dfd8df6e8b575c71d3a29b86955f0e03061a71558afccdfff272664ac8c->leave($__internal_8b307dfd8df6e8b575c71d3a29b86955f0e03061a71558afccdfff272664ac8c_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_d1d6aed216d24beef9f8a21c3c33deed88bf355dc45b0dec085a959da5c9aeea = $this->env->getExtension("native_profiler");
        $__internal_d1d6aed216d24beef9f8a21c3c33deed88bf355dc45b0dec085a959da5c9aeea->enter($__internal_d1d6aed216d24beef9f8a21c3c33deed88bf355dc45b0dec085a959da5c9aeea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_d1d6aed216d24beef9f8a21c3c33deed88bf355dc45b0dec085a959da5c9aeea->leave($__internal_d1d6aed216d24beef9f8a21c3c33deed88bf355dc45b0dec085a959da5c9aeea_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_0ceaa51d3e49ef2c68496197a3130bb5f37d242543f86fac8be4bc9ce77f518f = $this->env->getExtension("native_profiler");
        $__internal_0ceaa51d3e49ef2c68496197a3130bb5f37d242543f86fac8be4bc9ce77f518f->enter($__internal_0ceaa51d3e49ef2c68496197a3130bb5f37d242543f86fac8be4bc9ce77f518f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_0ceaa51d3e49ef2c68496197a3130bb5f37d242543f86fac8be4bc9ce77f518f->leave($__internal_0ceaa51d3e49ef2c68496197a3130bb5f37d242543f86fac8be4bc9ce77f518f_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_6f3c5689869692ef5e99159b4c107700c34130cb275b792a42da45dfe4cc509f = $this->env->getExtension("native_profiler");
        $__internal_6f3c5689869692ef5e99159b4c107700c34130cb275b792a42da45dfe4cc509f->enter($__internal_6f3c5689869692ef5e99159b4c107700c34130cb275b792a42da45dfe4cc509f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_6f3c5689869692ef5e99159b4c107700c34130cb275b792a42da45dfe4cc509f->leave($__internal_6f3c5689869692ef5e99159b4c107700c34130cb275b792a42da45dfe4cc509f_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
