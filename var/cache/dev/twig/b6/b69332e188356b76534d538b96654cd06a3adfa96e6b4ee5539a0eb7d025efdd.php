<?php

/* AppBundle::base.html.twig */
class __TwigTemplate_30ff715dd37225a636dc8d515fca5e57ba5e363417ff1f74ea6189af44c1fe72 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_83b19cf7bad0acaf46d3aa29fc4dc2f8082178fe10ce9683b313b956f6c8a0bd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_83b19cf7bad0acaf46d3aa29fc4dc2f8082178fe10ce9683b313b956f6c8a0bd->enter($__internal_83b19cf7bad0acaf46d3aa29fc4dc2f8082178fe10ce9683b313b956f6c8a0bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle::base.html.twig"));

        $__internal_891ad914737a8a81108f732e5fa62354733881d5b8d35ecf205961411f4a4829 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_891ad914737a8a81108f732e5fa62354733881d5b8d35ecf205961411f4a4829->enter($__internal_891ad914737a8a81108f732e5fa62354733881d5b8d35ecf205961411f4a4829_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle::base.html.twig"));

        // line 1
        echo "<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 4
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <script src=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery-3.1.1.min.js"), "html", null, true);
        echo "\"></script>

        ";
        // line 8
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\">

        <!-- Bootstrap CSS, theme and JS -->
        <link rel=\"stylesheet\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/bootstrap-theme.min.css"), "html", null, true);
        echo "\">
        <script src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\" ></script>

        ";
        // line 16
        echo "        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\" >

        <!- on ne peut pas utiliser twig dans le fichier externe style.css, alors on rajoute ci dessous les styles utilisant twig -->
        <style>
            body {
                background-image: url(";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/ferme.png"), "html", null, true);
        echo ");
            }
            #plateau-overlay {
                background-image: url(";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/board.png"), "html", null, true);
        echo ");
            }
        </style>
    </head>
    <body>
        <header>
            ";
        // line 30
        $this->loadTemplate("AppBundle:Default:_header.html.twig", "AppBundle::base.html.twig", 30)->display($context);
        // line 31
        echo "        </header>

        <div id=\"mainContent\">
            ";
        // line 34
        $this->displayBlock('content', $context, $blocks);
        // line 35
        echo "        </div>

        <footer>
            ";
        // line 38
        $this->loadTemplate("AppBundle:Default:_footer.html.twig", "AppBundle::base.html.twig", 38)->display($context);
        // line 39
        echo "        </footer>
    </body>
</html>
";
        
        $__internal_83b19cf7bad0acaf46d3aa29fc4dc2f8082178fe10ce9683b313b956f6c8a0bd->leave($__internal_83b19cf7bad0acaf46d3aa29fc4dc2f8082178fe10ce9683b313b956f6c8a0bd_prof);

        
        $__internal_891ad914737a8a81108f732e5fa62354733881d5b8d35ecf205961411f4a4829->leave($__internal_891ad914737a8a81108f732e5fa62354733881d5b8d35ecf205961411f4a4829_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_b8626f89c5b322bfc21deed5f1ebd150e3bf84e70cfedb7fe4a0342fb8620723 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b8626f89c5b322bfc21deed5f1ebd150e3bf84e70cfedb7fe4a0342fb8620723->enter($__internal_b8626f89c5b322bfc21deed5f1ebd150e3bf84e70cfedb7fe4a0342fb8620723_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_3489545e7a080a3cf64488d549c0cb29bfe5215e816c2bc9efeb943d907578b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3489545e7a080a3cf64488d549c0cb29bfe5215e816c2bc9efeb943d907578b4->enter($__internal_3489545e7a080a3cf64488d549c0cb29bfe5215e816c2bc9efeb943d907578b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Snakes_ladders_game!";
        
        $__internal_3489545e7a080a3cf64488d549c0cb29bfe5215e816c2bc9efeb943d907578b4->leave($__internal_3489545e7a080a3cf64488d549c0cb29bfe5215e816c2bc9efeb943d907578b4_prof);

        
        $__internal_b8626f89c5b322bfc21deed5f1ebd150e3bf84e70cfedb7fe4a0342fb8620723->leave($__internal_b8626f89c5b322bfc21deed5f1ebd150e3bf84e70cfedb7fe4a0342fb8620723_prof);

    }

    // line 34
    public function block_content($context, array $blocks = array())
    {
        $__internal_eafdce8d927f2afaadec5bb2f8e7f0cfbc93564d0b648082a73d7207c2cbc62b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eafdce8d927f2afaadec5bb2f8e7f0cfbc93564d0b648082a73d7207c2cbc62b->enter($__internal_eafdce8d927f2afaadec5bb2f8e7f0cfbc93564d0b648082a73d7207c2cbc62b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_c9b9c557352255891618ace426e7755bb2d5cf8396d06a97fe38c2a2a3edf6a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c9b9c557352255891618ace426e7755bb2d5cf8396d06a97fe38c2a2a3edf6a9->enter($__internal_c9b9c557352255891618ace426e7755bb2d5cf8396d06a97fe38c2a2a3edf6a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        echo " ";
        
        $__internal_c9b9c557352255891618ace426e7755bb2d5cf8396d06a97fe38c2a2a3edf6a9->leave($__internal_c9b9c557352255891618ace426e7755bb2d5cf8396d06a97fe38c2a2a3edf6a9_prof);

        
        $__internal_eafdce8d927f2afaadec5bb2f8e7f0cfbc93564d0b648082a73d7207c2cbc62b->leave($__internal_eafdce8d927f2afaadec5bb2f8e7f0cfbc93564d0b648082a73d7207c2cbc62b_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  132 => 34,  114 => 4,  101 => 39,  99 => 38,  94 => 35,  92 => 34,  87 => 31,  85 => 30,  76 => 24,  70 => 21,  61 => 16,  56 => 13,  52 => 12,  48 => 11,  41 => 8,  36 => 5,  32 => 4,  27 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Snakes_ladders_game!{% endblock %}</title>
        <script src=\"{{asset('js/jquery-3.1.1.min.js')}}\"></script>

        {# Create the favicon icon #}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\">

        <!-- Bootstrap CSS, theme and JS -->
        <link rel=\"stylesheet\" href=\"{{ asset('css/bootstrap.min.css')}}\">
        <link rel=\"stylesheet\" href=\"{{ asset('css/bootstrap-theme.min.css')}}\">
        <script src=\"{{ asset('js/bootstrap.min.js')}}\" ></script>

        {#correlation with the css file#}
        <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('css/style.css')}}\" >

        <!- on ne peut pas utiliser twig dans le fichier externe style.css, alors on rajoute ci dessous les styles utilisant twig -->
        <style>
            body {
                background-image: url({{ asset('images/ferme.png') }});
            }
            #plateau-overlay {
                background-image: url({{ asset('images/board.png') }});
            }
        </style>
    </head>
    <body>
        <header>
            {% include 'AppBundle:Default:_header.html.twig' %}
        </header>

        <div id=\"mainContent\">
            {% block content %} {% endblock %}
        </div>

        <footer>
            {% include 'AppBundle:Default:_footer.html.twig' %}
        </footer>
    </body>
</html>
", "AppBundle::base.html.twig", "C:\\www\\Web2\\src\\AppBundle/Resources/views/base.html.twig");
    }
}
