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
        $__internal_4912bb360649820df66b88adaa31d14c9c3fea60db407daf21a352d7e55ddad6 = $this->env->getExtension("native_profiler");
        $__internal_4912bb360649820df66b88adaa31d14c9c3fea60db407daf21a352d7e55ddad6->enter($__internal_4912bb360649820df66b88adaa31d14c9c3fea60db407daf21a352d7e55ddad6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4912bb360649820df66b88adaa31d14c9c3fea60db407daf21a352d7e55ddad6->leave($__internal_4912bb360649820df66b88adaa31d14c9c3fea60db407daf21a352d7e55ddad6_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_d84d1e7b9e8294379d98aeb2478a4588a98552d8e2d166ba2a54c79ed72bfeac = $this->env->getExtension("native_profiler");
        $__internal_d84d1e7b9e8294379d98aeb2478a4588a98552d8e2d166ba2a54c79ed72bfeac->enter($__internal_d84d1e7b9e8294379d98aeb2478a4588a98552d8e2d166ba2a54c79ed72bfeac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_d84d1e7b9e8294379d98aeb2478a4588a98552d8e2d166ba2a54c79ed72bfeac->leave($__internal_d84d1e7b9e8294379d98aeb2478a4588a98552d8e2d166ba2a54c79ed72bfeac_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_eb845324081207ffcba060bde94555930a57d74a2fb4914f4ad54b4ad0ba6cc8 = $this->env->getExtension("native_profiler");
        $__internal_eb845324081207ffcba060bde94555930a57d74a2fb4914f4ad54b4ad0ba6cc8->enter($__internal_eb845324081207ffcba060bde94555930a57d74a2fb4914f4ad54b4ad0ba6cc8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_eb845324081207ffcba060bde94555930a57d74a2fb4914f4ad54b4ad0ba6cc8->leave($__internal_eb845324081207ffcba060bde94555930a57d74a2fb4914f4ad54b4ad0ba6cc8_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_d983819df017292d900ce1a279636f3fdd4e9ddf69de39c240540b160dee615d = $this->env->getExtension("native_profiler");
        $__internal_d983819df017292d900ce1a279636f3fdd4e9ddf69de39c240540b160dee615d->enter($__internal_d983819df017292d900ce1a279636f3fdd4e9ddf69de39c240540b160dee615d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_d983819df017292d900ce1a279636f3fdd4e9ddf69de39c240540b160dee615d->leave($__internal_d983819df017292d900ce1a279636f3fdd4e9ddf69de39c240540b160dee615d_prof);

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
