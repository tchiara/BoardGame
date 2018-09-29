<?php

/* AppBundle:Default:home.html.twig */
class __TwigTemplate_63ea8a3de9697878ee34d7e4d52a622c9d28a12cf069a171df091e5e9f26c461 extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
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
        return array (  76 => 29,  70 => 26,  65 => 24,  60 => 22,  51 => 16,  39 => 7,  31 => 3,  28 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "AppBundle:Default:home.html.twig", "C:\\www\\Web2\\src\\AppBundle\\Resources\\views\\Default\\home.html.twig");
    }
}
