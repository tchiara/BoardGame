<?php

/* AppBundle:Default:home.html.twig */
class __TwigTemplate_b9c9bd0f546e36eca84cec40adff31226f45f84c6d81e26189b9e8836aca3266 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AppBundle::base.html.twig", "AppBundle:Default:home.html.twig", 1);
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
        $__internal_c9c55bc3d5ef713e1e0cb90608c101e5da50af71c6af79f5137c98eea0b0224b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c9c55bc3d5ef713e1e0cb90608c101e5da50af71c6af79f5137c98eea0b0224b->enter($__internal_c9c55bc3d5ef713e1e0cb90608c101e5da50af71c6af79f5137c98eea0b0224b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Default:home.html.twig"));

        $__internal_ac134756e4a139fabcb0580ff144b53210545dcbc5b360e2a6ddb7a00cacc95a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ac134756e4a139fabcb0580ff144b53210545dcbc5b360e2a6ddb7a00cacc95a->enter($__internal_ac134756e4a139fabcb0580ff144b53210545dcbc5b360e2a6ddb7a00cacc95a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Default:home.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c9c55bc3d5ef713e1e0cb90608c101e5da50af71c6af79f5137c98eea0b0224b->leave($__internal_c9c55bc3d5ef713e1e0cb90608c101e5da50af71c6af79f5137c98eea0b0224b_prof);

        
        $__internal_ac134756e4a139fabcb0580ff144b53210545dcbc5b360e2a6ddb7a00cacc95a->leave($__internal_ac134756e4a139fabcb0580ff144b53210545dcbc5b360e2a6ddb7a00cacc95a_prof);

    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        $__internal_91f472daaf357d37a3312ca2f1af79db02e6abd2da0421a55fc7e6770508c304 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_91f472daaf357d37a3312ca2f1af79db02e6abd2da0421a55fc7e6770508c304->enter($__internal_91f472daaf357d37a3312ca2f1af79db02e6abd2da0421a55fc7e6770508c304_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_54713e2a326b8cc6c6fee83bd05ebb60f791d59ba193620593ad7890e692f4f7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_54713e2a326b8cc6c6fee83bd05ebb60f791d59ba193620593ad7890e692f4f7->enter($__internal_54713e2a326b8cc6c6fee83bd05ebb60f791d59ba193620593ad7890e692f4f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_54713e2a326b8cc6c6fee83bd05ebb60f791d59ba193620593ad7890e692f4f7->leave($__internal_54713e2a326b8cc6c6fee83bd05ebb60f791d59ba193620593ad7890e692f4f7_prof);

        
        $__internal_91f472daaf357d37a3312ca2f1af79db02e6abd2da0421a55fc7e6770508c304->leave($__internal_91f472daaf357d37a3312ca2f1af79db02e6abd2da0421a55fc7e6770508c304_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Default:home.html.twig";
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
", "AppBundle:Default:home.html.twig", "C:\\www\\Web2\\src\\AppBundle\\Resources\\views\\Default\\home.html.twig");
    }
}
