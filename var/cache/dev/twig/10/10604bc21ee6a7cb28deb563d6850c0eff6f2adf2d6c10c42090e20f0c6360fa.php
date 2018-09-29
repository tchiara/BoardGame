<?php

/* AppBundle:Default:home.html.twig */
class __TwigTemplate_ba9399cb6781200635e591d4cd8509c3053855d186e48817ca3254cbfd64b9e2 extends Twig_Template
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
        $__internal_512a14a9d6afa31498a56505d142128d8ce1f428aa6441ac1763e6af2a966fb2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_512a14a9d6afa31498a56505d142128d8ce1f428aa6441ac1763e6af2a966fb2->enter($__internal_512a14a9d6afa31498a56505d142128d8ce1f428aa6441ac1763e6af2a966fb2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Default:home.html.twig"));

        $__internal_139e9c2ee5c4282fbe42d8432805da528f6c4b0da73b83e1f6165c02ac49a1f4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_139e9c2ee5c4282fbe42d8432805da528f6c4b0da73b83e1f6165c02ac49a1f4->enter($__internal_139e9c2ee5c4282fbe42d8432805da528f6c4b0da73b83e1f6165c02ac49a1f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Default:home.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_512a14a9d6afa31498a56505d142128d8ce1f428aa6441ac1763e6af2a966fb2->leave($__internal_512a14a9d6afa31498a56505d142128d8ce1f428aa6441ac1763e6af2a966fb2_prof);

        
        $__internal_139e9c2ee5c4282fbe42d8432805da528f6c4b0da73b83e1f6165c02ac49a1f4->leave($__internal_139e9c2ee5c4282fbe42d8432805da528f6c4b0da73b83e1f6165c02ac49a1f4_prof);

    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        $__internal_f649647fc0dffcab809155ccac18f98c38647d9f9263e1c00627e76cfeecff9b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f649647fc0dffcab809155ccac18f98c38647d9f9263e1c00627e76cfeecff9b->enter($__internal_f649647fc0dffcab809155ccac18f98c38647d9f9263e1c00627e76cfeecff9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_ec4b7dc04aa9a1310b1f9501009e65d21d53b00a6ee2bc41d4d418afda33a4e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ec4b7dc04aa9a1310b1f9501009e65d21d53b00a6ee2bc41d4d418afda33a4e1->enter($__internal_ec4b7dc04aa9a1310b1f9501009e65d21d53b00a6ee2bc41d4d418afda33a4e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_ec4b7dc04aa9a1310b1f9501009e65d21d53b00a6ee2bc41d4d418afda33a4e1->leave($__internal_ec4b7dc04aa9a1310b1f9501009e65d21d53b00a6ee2bc41d4d418afda33a4e1_prof);

        
        $__internal_f649647fc0dffcab809155ccac18f98c38647d9f9263e1c00627e76cfeecff9b->leave($__internal_f649647fc0dffcab809155ccac18f98c38647d9f9263e1c00627e76cfeecff9b_prof);

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
", "AppBundle:Default:home.html.twig", "C:\\www\\Web2\\src\\AppBundle/Resources/views/Default/home.html.twig");
    }
}
