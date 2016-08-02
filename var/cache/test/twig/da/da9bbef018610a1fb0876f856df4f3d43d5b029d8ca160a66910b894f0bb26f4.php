<?php

/* base.html.twig */
class __TwigTemplate_3d72d42b2429762bd6f2b5d940a8220a1dcfdaebcb59ea415fa74660b01e39eb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body_id' => array($this, 'block_body_id'),
            'header' => array($this, 'block_header'),
            'header_navigation_links' => array($this, 'block_header_navigation_links'),
            'body' => array($this, 'block_body'),
            'main' => array($this, 'block_main'),
            'sidebar' => array($this, 'block_sidebar'),
            'footer' => array($this, 'block_footer'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_66681bb48e4e3ee31be9a19cc46e1208c99ec0b99b346eaab6debb5aaa4630d2 = $this->env->getExtension("native_profiler");
        $__internal_66681bb48e4e3ee31be9a19cc46e1208c99ec0b99b346eaab6debb5aaa4630d2->enter($__internal_66681bb48e4e3ee31be9a19cc46e1208c99ec0b99b346eaab6debb5aaa4630d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 6
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\"/>
        <title>";
        // line 11
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

        ";
        // line 13
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 28
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>

    <body id=\"";
        // line 31
        $this->displayBlock('body_id', $context, $blocks);
        echo "\">

        ";
        // line 33
        $this->displayBlock('header', $context, $blocks);
        // line 92
        echo "
        <div class=\"container body-container\" style=\"width:1280px;\">
            ";
        // line 94
        $this->displayBlock('body', $context, $blocks);
        // line 113
        echo "        </div>

        ";
        // line 115
        $this->displayBlock('footer', $context, $blocks);
        // line 134
        echo "
        ";
        // line 135
        $this->displayBlock('javascripts', $context, $blocks);
        // line 150
        echo "
        ";
        // line 154
        echo "        <!-- Page rendered on ";
        echo twig_escape_filter($this->env, twig_localized_date_filter($this->env, "now", "long", "long", null, "UTC"), "html", null, true);
        echo " -->
    </body>
</html>
";
        
        $__internal_66681bb48e4e3ee31be9a19cc46e1208c99ec0b99b346eaab6debb5aaa4630d2->leave($__internal_66681bb48e4e3ee31be9a19cc46e1208c99ec0b99b346eaab6debb5aaa4630d2_prof);

    }

    // line 11
    public function block_title($context, array $blocks = array())
    {
        $__internal_74a01ff34b3fc6a4a68872c68d90c00c99f2849c256ef4193ec23471c5d29919 = $this->env->getExtension("native_profiler");
        $__internal_74a01ff34b3fc6a4a68872c68d90c00c99f2849c256ef4193ec23471c5d29919->enter($__internal_74a01ff34b3fc6a4a68872c68d90c00c99f2849c256ef4193ec23471c5d29919_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Symfony Demo application for Medicore";
        
        $__internal_74a01ff34b3fc6a4a68872c68d90c00c99f2849c256ef4193ec23471c5d29919->leave($__internal_74a01ff34b3fc6a4a68872c68d90c00c99f2849c256ef4193ec23471c5d29919_prof);

    }

    // line 13
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_189d1e1008a326f3f0195cbdbeb0a96fa312ff766c5b8040419e192dd1c66ed7 = $this->env->getExtension("native_profiler");
        $__internal_189d1e1008a326f3f0195cbdbeb0a96fa312ff766c5b8040419e192dd1c66ed7->enter($__internal_189d1e1008a326f3f0195cbdbeb0a96fa312ff766c5b8040419e192dd1c66ed7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 14
        echo "        ";
        // line 25
        echo "
            <link rel=\"stylesheet\" href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/app.css"), "html", null, true);
        echo "\">
        ";
        
        $__internal_189d1e1008a326f3f0195cbdbeb0a96fa312ff766c5b8040419e192dd1c66ed7->leave($__internal_189d1e1008a326f3f0195cbdbeb0a96fa312ff766c5b8040419e192dd1c66ed7_prof);

    }

    // line 31
    public function block_body_id($context, array $blocks = array())
    {
        $__internal_85020b3725365129b54526d12540bb3364caf26572f52e7951131c802b05bffc = $this->env->getExtension("native_profiler");
        $__internal_85020b3725365129b54526d12540bb3364caf26572f52e7951131c802b05bffc->enter($__internal_85020b3725365129b54526d12540bb3364caf26572f52e7951131c802b05bffc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        
        $__internal_85020b3725365129b54526d12540bb3364caf26572f52e7951131c802b05bffc->leave($__internal_85020b3725365129b54526d12540bb3364caf26572f52e7951131c802b05bffc_prof);

    }

    // line 33
    public function block_header($context, array $blocks = array())
    {
        $__internal_bca78416f9da6f0ac003a46bfaa22a56cbade48cbb253f2ab2f700b64919e9ad = $this->env->getExtension("native_profiler");
        $__internal_bca78416f9da6f0ac003a46bfaa22a56cbade48cbb253f2ab2f700b64919e9ad->enter($__internal_bca78416f9da6f0ac003a46bfaa22a56cbade48cbb253f2ab2f700b64919e9ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 34
        echo "            <header>
                <div class=\"navbar navbar-default navbar-static-top\" role=\"navigation\">
                    <div class=\"container\">
                        <div class=\"navbar-header\">
                            <a class=\"navbar-brand\" href=\"";
        // line 38
        echo $this->env->getExtension('routing')->getPath("homepage");
        echo "\">
                                Symfony Demo for Medicore
                            </a>

                            <button type=\"button\" class=\"navbar-toggle\"
                                    data-toggle=\"collapse\"
                                    data-target=\".navbar-collapse\">
                                <span class=\"sr-only\">Toggle navigation</span>
                                <span class=\"icon-bar\"></span>
                                <span class=\"icon-bar\"></span>
                                <span class=\"icon-bar\"></span>
                            </button>
                        </div>
                        <div class=\"navbar-collapse collapse\">
                            <ul class=\"nav navbar-nav navbar-right\">

                                ";
        // line 54
        $this->displayBlock('header_navigation_links', $context, $blocks);
        // line 69
        echo "
                                ";
        // line 70
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array())) {
            // line 71
            echo "                                    <li>
                                        <a href=\"";
            // line 72
            echo $this->env->getExtension('routing')->getPath("security_logout");
            echo "\">
                                            <i class=\"fa fa-sign-out\"></i> ";
            // line 73
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("menu.logout"), "html", null, true);
            echo "
                                        </a>
                                    </li>
                                ";
        }
        // line 77
        echo "
                                <li class=\"dropdown\">
                                    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-expanded=\"false\"><i class=\"fa fa-globe\"></i> <span class=\"caret\"></span></a>
                                    <ul class=\"dropdown-menu locales\" role=\"menu\">
                                        ";
        // line 81
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->env->getExtension('app.extension')->getLocales());
        foreach ($context['_seq'] as $context["_key"] => $context["locale"]) {
            // line 82
            echo "                                            <li ";
            if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "locale", array()) == $this->getAttribute($context["locale"], "code", array()))) {
                echo "class=\"active\"";
            }
            echo "><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "_route", 1 => "blog_index"), "method"), twig_array_merge($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "_route_params", 1 => array()), "method"), array("_locale" => $this->getAttribute($context["locale"], "code", array())))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($context["locale"], "name", array())), "html", null, true);
            echo "</a></li>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['locale'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 84
        echo "                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </header>
        ";
        
        $__internal_bca78416f9da6f0ac003a46bfaa22a56cbade48cbb253f2ab2f700b64919e9ad->leave($__internal_bca78416f9da6f0ac003a46bfaa22a56cbade48cbb253f2ab2f700b64919e9ad_prof);

    }

    // line 54
    public function block_header_navigation_links($context, array $blocks = array())
    {
        $__internal_8352c3aa692210197b700fa641dde3243095e97942f68053834948f15a177186 = $this->env->getExtension("native_profiler");
        $__internal_8352c3aa692210197b700fa641dde3243095e97942f68053834948f15a177186->enter($__internal_8352c3aa692210197b700fa641dde3243095e97942f68053834948f15a177186_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_navigation_links"));

        // line 55
        echo "                                    <li>
                                        <a href=\"";
        // line 56
        echo $this->env->getExtension('routing')->getPath("blog_index");
        echo "\">
                                            <i class=\"fa fa-home\"></i> ";
        // line 57
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("menu.homepage"), "html", null, true);
        echo "
                                        </a>
                                    </li>

                                    ";
        // line 61
        if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
            // line 62
            echo "                                        <li>
                                            <a href=\"";
            // line 63
            echo $this->env->getExtension('routing')->getPath("admin_post_index");
            echo "\">
                                                <i class=\"fa fa-lock\"></i> ";
            // line 64
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("menu.admin"), "html", null, true);
            echo "
                                            </a>
                                        </li>
                                    ";
        }
        // line 68
        echo "                                ";
        
        $__internal_8352c3aa692210197b700fa641dde3243095e97942f68053834948f15a177186->leave($__internal_8352c3aa692210197b700fa641dde3243095e97942f68053834948f15a177186_prof);

    }

    // line 94
    public function block_body($context, array $blocks = array())
    {
        $__internal_34677b0961e789fa3b3d0d3e6c351cdd8770594881f0faebb3b29244dc1a33f0 = $this->env->getExtension("native_profiler");
        $__internal_34677b0961e789fa3b3d0d3e6c351cdd8770594881f0faebb3b29244dc1a33f0->enter($__internal_34677b0961e789fa3b3d0d3e6c351cdd8770594881f0faebb3b29244dc1a33f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 95
        echo "                <div class=\"row\">
                    <div id=\"main\" class=\"col-sm-12\">
                        ";
        // line 97
        echo twig_include($this->env, $context, "default/_flash_messages.html.twig");
        echo "

                        ";
        // line 99
        $this->displayBlock('main', $context, $blocks);
        // line 100
        echo "                    </div>

                    <div id=\"sidebar\" class=\"col-sm-3\">
                        ";
        // line 103
        $this->displayBlock('sidebar', $context, $blocks);
        // line 110
        echo "                    </div>
                </div>
            ";
        
        $__internal_34677b0961e789fa3b3d0d3e6c351cdd8770594881f0faebb3b29244dc1a33f0->leave($__internal_34677b0961e789fa3b3d0d3e6c351cdd8770594881f0faebb3b29244dc1a33f0_prof);

    }

    // line 99
    public function block_main($context, array $blocks = array())
    {
        $__internal_7813eaad788c459e4b937a92376cfce539e5457ffd0ee07e1b1e9f7cb0adfcb0 = $this->env->getExtension("native_profiler");
        $__internal_7813eaad788c459e4b937a92376cfce539e5457ffd0ee07e1b1e9f7cb0adfcb0->enter($__internal_7813eaad788c459e4b937a92376cfce539e5457ffd0ee07e1b1e9f7cb0adfcb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        
        $__internal_7813eaad788c459e4b937a92376cfce539e5457ffd0ee07e1b1e9f7cb0adfcb0->leave($__internal_7813eaad788c459e4b937a92376cfce539e5457ffd0ee07e1b1e9f7cb0adfcb0_prof);

    }

    // line 103
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_6ed87e148b4997b191b277c8331779ae52ffb805f5665f7789427298faa62ddf = $this->env->getExtension("native_profiler");
        $__internal_6ed87e148b4997b191b277c8331779ae52ffb805f5665f7789427298faa62ddf->enter($__internal_6ed87e148b4997b191b277c8331779ae52ffb805f5665f7789427298faa62ddf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 104
        echo "                            ";
        echo $this->env->getExtension('http_kernel')->renderFragmentStrategy("esi", $this->env->getExtension('http_kernel')->controller("FrameworkBundle:Template:template", array("template" => "blog/about.html.twig", "sharedAge" => 600, "_locale" => $this->getAttribute($this->getAttribute(        // line 107
(isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "locale", array()))));
        // line 108
        echo "
                        ";
        
        $__internal_6ed87e148b4997b191b277c8331779ae52ffb805f5665f7789427298faa62ddf->leave($__internal_6ed87e148b4997b191b277c8331779ae52ffb805f5665f7789427298faa62ddf_prof);

    }

    // line 115
    public function block_footer($context, array $blocks = array())
    {
        $__internal_7fab58c9dec145bf245db8defac54ec4814dd331bdf08310024cfc8a105930bc = $this->env->getExtension("native_profiler");
        $__internal_7fab58c9dec145bf245db8defac54ec4814dd331bdf08310024cfc8a105930bc->enter($__internal_7fab58c9dec145bf245db8defac54ec4814dd331bdf08310024cfc8a105930bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 116
        echo "            <footer>
                <div class=\"container\">
                    <div class=\"row\">
                        <div id=\"footer-copyright\" class=\"col-md-6\">
                            <p>&copy; ";
        // line 120
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo " - The Symfony Project</p>
                            <p>";
        // line 121
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("mit_license"), "html", null, true);
        echo "</p>
                        </div>
                        <div id=\"footer-resources\" class=\"col-md-6\">
                            <p>
                                <a href=\"https://twitter.com/symfony\"><i class=\"fa fa-twitter\"></i></a>
                                <a href=\"https://www.facebook.com/SensioLabs\"><i class=\"fa fa-facebook\"></i></a>
                                <a href=\"http://symfony.com/blog\"><i class=\"fa fa-rss\"></i></a>
                            </p>
                        </div>
                    </div>
                </div>
            </footer>
        ";
        
        $__internal_7fab58c9dec145bf245db8defac54ec4814dd331bdf08310024cfc8a105930bc->leave($__internal_7fab58c9dec145bf245db8defac54ec4814dd331bdf08310024cfc8a105930bc_prof);

    }

    // line 135
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_cd2ce361246ae803923cea68db11e862714b77dd587a6c7cafa9334691e0bb43 = $this->env->getExtension("native_profiler");
        $__internal_cd2ce361246ae803923cea68db11e862714b77dd587a6c7cafa9334691e0bb43->enter($__internal_cd2ce361246ae803923cea68db11e862714b77dd587a6c7cafa9334691e0bb43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 136
        echo "        ";
        // line 147
        echo "
            <script src=\"";
        // line 148
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/app.js"), "html", null, true);
        echo "\"></script>
        ";
        
        $__internal_cd2ce361246ae803923cea68db11e862714b77dd587a6c7cafa9334691e0bb43->leave($__internal_cd2ce361246ae803923cea68db11e862714b77dd587a6c7cafa9334691e0bb43_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  378 => 148,  375 => 147,  373 => 136,  367 => 135,  347 => 121,  343 => 120,  337 => 116,  331 => 115,  323 => 108,  321 => 107,  319 => 104,  313 => 103,  302 => 99,  293 => 110,  291 => 103,  286 => 100,  284 => 99,  279 => 97,  275 => 95,  269 => 94,  262 => 68,  255 => 64,  251 => 63,  248 => 62,  246 => 61,  239 => 57,  235 => 56,  232 => 55,  226 => 54,  212 => 84,  197 => 82,  193 => 81,  187 => 77,  180 => 73,  176 => 72,  173 => 71,  171 => 70,  168 => 69,  166 => 54,  147 => 38,  141 => 34,  135 => 33,  124 => 31,  115 => 26,  112 => 25,  110 => 14,  104 => 13,  92 => 11,  80 => 154,  77 => 150,  75 => 135,  72 => 134,  70 => 115,  66 => 113,  64 => 94,  60 => 92,  58 => 33,  53 => 31,  46 => 28,  44 => 13,  39 => 11,  32 => 6,);
    }
}
/* {#*/
/*    This is the base template used as the application layout which contains the*/
/*    common elements and decorates all the other templates.*/
/*    See http://symfony.com/doc/current/book/templating.html#template-inheritance-and-layouts*/
/* #}*/
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <meta name="viewport" content="width=device-width, initial-scale=1"/>*/
/*         <title>{% block title %}Symfony Demo application for Medicore{% endblock %}</title>*/
/* */
/*         {% block stylesheets %}*/
/*         {# uncomment the following lines to compile SCSS assets with Assetic*/
/* */
/*             {% stylesheets filter="scssphp" output="css/app.css"*/
/*                 "%kernel.root_dir%/Resources/assets/scss/bootstrap-flatly.scss"*/
/*                 "%kernel.root_dir%/Resources/assets/scss/font-awesome.scss"*/
/*                 "%kernel.root_dir%/Resources/assets/css/*.css"*/
/*                 "%kernel.root_dir%/Resources/assets/scss/main.scss"*/
/*             %}*/
/*                 <link rel="stylesheet" href="{{ asset_url }}" />*/
/*             {% endstylesheets %}*/
/*         #}*/
/* */
/*             <link rel="stylesheet" href="{{ asset('css/app.css') }}">*/
/*         {% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/* */
/*     <body id="{% block body_id %}{% endblock %}">*/
/* */
/*         {% block header %}*/
/*             <header>*/
/*                 <div class="navbar navbar-default navbar-static-top" role="navigation">*/
/*                     <div class="container">*/
/*                         <div class="navbar-header">*/
/*                             <a class="navbar-brand" href="{{ path('homepage') }}">*/
/*                                 Symfony Demo for Medicore*/
/*                             </a>*/
/* */
/*                             <button type="button" class="navbar-toggle"*/
/*                                     data-toggle="collapse"*/
/*                                     data-target=".navbar-collapse">*/
/*                                 <span class="sr-only">Toggle navigation</span>*/
/*                                 <span class="icon-bar"></span>*/
/*                                 <span class="icon-bar"></span>*/
/*                                 <span class="icon-bar"></span>*/
/*                             </button>*/
/*                         </div>*/
/*                         <div class="navbar-collapse collapse">*/
/*                             <ul class="nav navbar-nav navbar-right">*/
/* */
/*                                 {% block header_navigation_links %}*/
/*                                     <li>*/
/*                                         <a href="{{ path('blog_index') }}">*/
/*                                             <i class="fa fa-home"></i> {{ 'menu.homepage'|trans }}*/
/*                                         </a>*/
/*                                     </li>*/
/* */
/*                                     {% if is_granted('ROLE_ADMIN') %}*/
/*                                         <li>*/
/*                                             <a href="{{ path('admin_post_index') }}">*/
/*                                                 <i class="fa fa-lock"></i> {{ 'menu.admin'|trans }}*/
/*                                             </a>*/
/*                                         </li>*/
/*                                     {% endif %}*/
/*                                 {% endblock %}*/
/* */
/*                                 {% if app.user %}*/
/*                                     <li>*/
/*                                         <a href="{{ path('security_logout') }}">*/
/*                                             <i class="fa fa-sign-out"></i> {{ 'menu.logout'|trans }}*/
/*                                         </a>*/
/*                                     </li>*/
/*                                 {% endif %}*/
/* */
/*                                 <li class="dropdown">*/
/*                                     <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-globe"></i> <span class="caret"></span></a>*/
/*                                     <ul class="dropdown-menu locales" role="menu">*/
/*                                         {% for locale in locales() %}*/
/*                                             <li {% if app.request.locale == locale.code %}class="active"{% endif %}><a href="{{ path(app.request.get('_route', 'blog_index'), app.request.get('_route_params', [])|merge({ _locale: locale.code })) }}">{{ locale.name|capitalize }}</a></li>*/
/*                                         {% endfor %}*/
/*                                     </ul>*/
/*                                 </li>*/
/*                             </ul>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*             </header>*/
/*         {% endblock %}*/
/* */
/*         <div class="container body-container" style="width:1280px;">*/
/*             {% block body %}*/
/*                 <div class="row">*/
/*                     <div id="main" class="col-sm-12">*/
/*                         {{ include('default/_flash_messages.html.twig') }}*/
/* */
/*                         {% block main %}{% endblock %}*/
/*                     </div>*/
/* */
/*                     <div id="sidebar" class="col-sm-3">*/
/*                         {% block sidebar %}*/
/*                             {{ render_esi(controller('FrameworkBundle:Template:template', {*/
/*                                 'template': 'blog/about.html.twig',*/
/*                                 'sharedAge': 600,*/
/*                                 '_locale': app.request.locale*/
/*                             })) }}*/
/*                         {% endblock %}*/
/*                     </div>*/
/*                 </div>*/
/*             {% endblock %}*/
/*         </div>*/
/* */
/*         {% block footer %}*/
/*             <footer>*/
/*                 <div class="container">*/
/*                     <div class="row">*/
/*                         <div id="footer-copyright" class="col-md-6">*/
/*                             <p>&copy; {{ 'now'|date('Y') }} - The Symfony Project</p>*/
/*                             <p>{{ 'mit_license'|trans }}</p>*/
/*                         </div>*/
/*                         <div id="footer-resources" class="col-md-6">*/
/*                             <p>*/
/*                                 <a href="https://twitter.com/symfony"><i class="fa fa-twitter"></i></a>*/
/*                                 <a href="https://www.facebook.com/SensioLabs"><i class="fa fa-facebook"></i></a>*/
/*                                 <a href="http://symfony.com/blog"><i class="fa fa-rss"></i></a>*/
/*                             </p>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*             </footer>*/
/*         {% endblock %}*/
/* */
/*         {% block javascripts %}*/
/*         {# uncomment the following lines to combine and minimize JavaScript assets with Assetic*/
/*             {% javascripts filter="?jsqueeze" output="js/app.js"*/
/*                 "%kernel.root_dir%/Resources/assets/js/jquery-2.1.4.js"*/
/*                 "%kernel.root_dir%/Resources/assets/js/moment.min.js"*/
/*                 "%kernel.root_dir%/Resources/assets/js/bootstrap-3.3.4.js"*/
/*                 "%kernel.root_dir%/Resources/assets/js/highlight.pack.js"*/
/*                 "%kernel.root_dir%/Resources/assets/js/bootstrap-datetimepicker.min.js"*/
/*                 "%kernel.root_dir%/Resources/assets/js/main.js" %}*/
/*                 <script src="{{ asset_url }}"></script>*/
/*             {% endjavascripts %}*/
/*         #}*/
/* */
/*             <script src="{{ asset('js/app.js') }}"></script>*/
/*         {% endblock %}*/
/* */
/*         {# it's not mandatory to set the timezone in localizeddate(). This is done to*/
/*            avoid errors when the 'intl' PHP extension is not available and the application*/
/*            is forced to use the limited "intl polyfill", which only supports UTC and GMT #}*/
/*         <!-- Page rendered on {{ 'now'|localizeddate('long', 'long', null, 'UTC') }} -->*/
/*     </body>*/
/* </html>*/
/* */
