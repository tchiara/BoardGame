<?php

/* @App/Default/home.html.twig */
class __TwigTemplate_8361d766e0584cd151e53e670ac852d501a593b5de32b5cc05bd1e3bf69d5e4a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AppBundle::base.html.twig", "@App/Default/home.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AppBundle::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a38fc9e61c691a645712d54dc05bd7a3bbdffcf008bed4f8c95a1b37d7a77443 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a38fc9e61c691a645712d54dc05bd7a3bbdffcf008bed4f8c95a1b37d7a77443->enter($__internal_a38fc9e61c691a645712d54dc05bd7a3bbdffcf008bed4f8c95a1b37d7a77443_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@App/Default/home.html.twig"));

        $__internal_3aa4270ca510e3997e3083f35562937aae153dd4c16e5e631ba2ce19a85530f7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3aa4270ca510e3997e3083f35562937aae153dd4c16e5e631ba2ce19a85530f7->enter($__internal_3aa4270ca510e3997e3083f35562937aae153dd4c16e5e631ba2ce19a85530f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@App/Default/home.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a38fc9e61c691a645712d54dc05bd7a3bbdffcf008bed4f8c95a1b37d7a77443->leave($__internal_a38fc9e61c691a645712d54dc05bd7a3bbdffcf008bed4f8c95a1b37d7a77443_prof);

        
        $__internal_3aa4270ca510e3997e3083f35562937aae153dd4c16e5e631ba2ce19a85530f7->leave($__internal_3aa4270ca510e3997e3083f35562937aae153dd4c16e5e631ba2ce19a85530f7_prof);

    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        $__internal_8a423d67282f89d742822fd99eb39c6385c250b5fce5ece29c714c1f9888f815 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8a423d67282f89d742822fd99eb39c6385c250b5fce5ece29c714c1f9888f815->enter($__internal_8a423d67282f89d742822fd99eb39c6385c250b5fce5ece29c714c1f9888f815_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_293b7f7bfc84580c1f7fcc0ee38e70fbbb100c0810934f86f0606d6256ab2e10 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_293b7f7bfc84580c1f7fcc0ee38e70fbbb100c0810934f86f0606d6256ab2e10->enter($__internal_293b7f7bfc84580c1f7fcc0ee38e70fbbb100c0810934f86f0606d6256ab2e10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 3
        echo "    <audio src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("sounds/oie_1.mp3"), "html", null, true);
        echo "\" autoplay></audio>
    <div class=\"row\">
        <div id=\"creation\" class=\"col-md-12\">
            <div class=\"panel panel-default\">
                <div class=\"panel-heading center\"><img id=\"intro\" src=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/intro.png"), "html", null, true);
        echo "\" alt=\"Le Quizz de l'Oie\" /></div>
                <div class=\"panel-body\">
                    <br></br>
                    <p>Le jeu de l'oie est un jeu de société de parcours où l'on déplace des pions en fonction des résultats de deux dés.
                        Traditionnellement, le jeu de l'oie comprend 63 cases disposées en spirale enroulée vers l'intérieur et comportant un certain nombre de pièges.
                        Le but est d'arriver le premier à la dernière case. Le jeu de l'oie est un jeu de hasard pur.
                    </p>
                    <br></br>

                    <img id=\"logo\" src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/jeu_de_l_oie.png"), "html", null, true);
        echo "\" alt=\"logo\" title=\"jeu_de_l_oie_1\" />
                    <br></br>
                    <p> Dans ce <strong>SUPER JEU DE L'OIE</strong> nous avons couplé le jeu de l'oie traditionnel à celui des quiz</p>
                    <br></br>
                    <p> Venez découvrir notre  QUIZ jeu de l'oie qui teste vos connaissances <strong>Seul ou en Multijoueurs </strong> !!!! </p>
                    <br></br>
                    <p> Veuillez consulter les règles du jeu modifié <a href=\"";
        // line 22
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("rules");
        echo "\">ici !!!!</a></p>
                    <p>Pour jouer il faut être inscript
                        <a href=\"";
        // line 24
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_register");
        echo "\">lien</a>
                        et connecté
                        <a href=\"";
        // line 26
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("home");
        echo "\">lien</a>
                    </p>
                    <br></br>
                    <img id=\"logo\" src=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/jeu_de_l_oie_2.jpg"), "html", null, true);
        echo "\" alt=\"logo\" title=\"jeu_de_l_oie_2\" />
                    <br></br>
                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_293b7f7bfc84580c1f7fcc0ee38e70fbbb100c0810934f86f0606d6256ab2e10->leave($__internal_293b7f7bfc84580c1f7fcc0ee38e70fbbb100c0810934f86f0606d6256ab2e10_prof);

        
        $__internal_8a423d67282f89d742822fd99eb39c6385c250b5fce5ece29c714c1f9888f815->leave($__internal_8a423d67282f89d742822fd99eb39c6385c250b5fce5ece29c714c1f9888f815_prof);

    }

    public function getTemplateName()
    {
        return "@App/Default/home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 29,  88 => 26,  83 => 24,  78 => 22,  69 => 16,  57 => 7,  49 => 3,  40 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'AppBundle::base.html.twig' %}
{% block content %}
    <audio src=\"{{ asset('sounds/oie_1.mp3')}}\" autoplay></audio>
    <div class=\"row\">
        <div id=\"creation\" class=\"col-md-12\">
            <div class=\"panel panel-default\">
                <div class=\"panel-heading center\"><img id=\"intro\" src=\"{{ asset('images/intro.png')}}\" alt=\"Le Quizz de l'Oie\" /></div>
                <div class=\"panel-body\">
                    <br></br>
                    <p>Le jeu de l'oie est un jeu de société de parcours où l'on déplace des pions en fonction des résultats de deux dés.
                        Traditionnellement, le jeu de l'oie comprend 63 cases disposées en spirale enroulée vers l'intérieur et comportant un certain nombre de pièges.
                        Le but est d'arriver le premier à la dernière case. Le jeu de l'oie est un jeu de hasard pur.
                    </p>
                    <br></br>

                    <img id=\"logo\" src=\"{{ asset('images/jeu_de_l_oie.png')}}\" alt=\"logo\" title=\"jeu_de_l_oie_1\" />
                    <br></br>
                    <p> Dans ce <strong>SUPER JEU DE L'OIE</strong> nous avons couplé le jeu de l'oie traditionnel à celui des quiz</p>
                    <br></br>
                    <p> Venez découvrir notre  QUIZ jeu de l'oie qui teste vos connaissances <strong>Seul ou en Multijoueurs </strong> !!!! </p>
                    <br></br>
                    <p> Veuillez consulter les règles du jeu modifié <a href=\"{{path('rules')}}\">ici !!!!</a></p>
                    <p>Pour jouer il faut être inscript
                        <a href=\"{{path('user_register')}}\">lien</a>
                        et connecté
                        <a href=\"{{path('home')}}\">lien</a>
                    </p>
                    <br></br>
                    <img id=\"logo\" src=\"{{ asset('images/jeu_de_l_oie_2.jpg')}}\" alt=\"logo\" title=\"jeu_de_l_oie_2\" />
                    <br></br>
                </div>
            </div>
        </div>
    </div>
{% endblock %}
", "@App/Default/home.html.twig", "C:\\www\\Web2\\src\\AppBundle\\Resources\\views\\Default\\home.html.twig");
    }
}
