<?php

/* AppBundle::base.html.twig */
class __TwigTemplate_28a5f346b755389a9f1449726b0d2c3540fbb24808330a67a9f8fdf7ef16b11b extends Twig_Template
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
        $__internal_e23a869783d9f8266df9e26fccd2ffe91f087692e27e5fd322d89c3ed3890ec2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e23a869783d9f8266df9e26fccd2ffe91f087692e27e5fd322d89c3ed3890ec2->enter($__internal_e23a869783d9f8266df9e26fccd2ffe91f087692e27e5fd322d89c3ed3890ec2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle::base.html.twig"));

        $__internal_50e3bdc85b0e624c7370f73fcb674332251354bc079cd2961e4b1f277f52af47 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_50e3bdc85b0e624c7370f73fcb674332251354bc079cd2961e4b1f277f52af47->enter($__internal_50e3bdc85b0e624c7370f73fcb674332251354bc079cd2961e4b1f277f52af47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle::base.html.twig"));

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
        
        $__internal_e23a869783d9f8266df9e26fccd2ffe91f087692e27e5fd322d89c3ed3890ec2->leave($__internal_e23a869783d9f8266df9e26fccd2ffe91f087692e27e5fd322d89c3ed3890ec2_prof);

        
        $__internal_50e3bdc85b0e624c7370f73fcb674332251354bc079cd2961e4b1f277f52af47->leave($__internal_50e3bdc85b0e624c7370f73fcb674332251354bc079cd2961e4b1f277f52af47_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_d62254fe73d0c05238d071bd2bb3748ec33f99aae5058760e7127ae5e9f12165 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d62254fe73d0c05238d071bd2bb3748ec33f99aae5058760e7127ae5e9f12165->enter($__internal_d62254fe73d0c05238d071bd2bb3748ec33f99aae5058760e7127ae5e9f12165_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_5a1e613a5271ff0580bd6ba845e28419468c5cab976ec7ff332b155378daeb4f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5a1e613a5271ff0580bd6ba845e28419468c5cab976ec7ff332b155378daeb4f->enter($__internal_5a1e613a5271ff0580bd6ba845e28419468c5cab976ec7ff332b155378daeb4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Snakes_ladders_game!";
        
        $__internal_5a1e613a5271ff0580bd6ba845e28419468c5cab976ec7ff332b155378daeb4f->leave($__internal_5a1e613a5271ff0580bd6ba845e28419468c5cab976ec7ff332b155378daeb4f_prof);

        
        $__internal_d62254fe73d0c05238d071bd2bb3748ec33f99aae5058760e7127ae5e9f12165->leave($__internal_d62254fe73d0c05238d071bd2bb3748ec33f99aae5058760e7127ae5e9f12165_prof);

    }

    // line 34
    public function block_content($context, array $blocks = array())
    {
        $__internal_1df7cad79bebdaf21d3a403e132636980b9d0003832e8fdf7dfb385313679390 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1df7cad79bebdaf21d3a403e132636980b9d0003832e8fdf7dfb385313679390->enter($__internal_1df7cad79bebdaf21d3a403e132636980b9d0003832e8fdf7dfb385313679390_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_2fc97c68583ed398d702f057465cfddfa75f0d2620b6d0db8147c082eeb70ad7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2fc97c68583ed398d702f057465cfddfa75f0d2620b6d0db8147c082eeb70ad7->enter($__internal_2fc97c68583ed398d702f057465cfddfa75f0d2620b6d0db8147c082eeb70ad7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        echo " ";
        
        $__internal_2fc97c68583ed398d702f057465cfddfa75f0d2620b6d0db8147c082eeb70ad7->leave($__internal_2fc97c68583ed398d702f057465cfddfa75f0d2620b6d0db8147c082eeb70ad7_prof);

        
        $__internal_1df7cad79bebdaf21d3a403e132636980b9d0003832e8fdf7dfb385313679390->leave($__internal_1df7cad79bebdaf21d3a403e132636980b9d0003832e8fdf7dfb385313679390_prof);

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
", "AppBundle::base.html.twig", "C:\\www\\Web2\\src\\AppBundle\\Resources\\views\\base.html.twig");
    }
}
