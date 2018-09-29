<?php

/* AppBundle:Default:rules.html.twig */
class __TwigTemplate_103ae03b14428eda90b7bc9f30297a7a346af2c06deb2d85d8e23ffe5c8e4295 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AppBundle::base.html.twig", "AppBundle:Default:rules.html.twig", 1);
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
        echo "    <audio id=\"testaudio\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("sounds/ane.mp3"), "html", null, true);
        echo "\"></audio>
    <div class=\"row\">
        <div id=\"creation\" class=\"col-md-12\">
            <div class=\"panel panel-default\">
                <div class=\"panel-heading\">Le Quizz de l'Oie</div>
                <div class=\"panel-body\">
                    <p>Chaque joueur joue chacun son tour en lançant le dés.
                        <br></br>
                        Suivant le nombre ou chiffre obtenue, le pion du joueur avance jusqu'à la case.
                        <br></br>
                        A ce moment là une question s'affiche.
                        <br></br>
                        Le niveau de difficulté de la question est en fonction de la couleur de la case :
                        <br></br>
                        <strong>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbspOrange => Niveau facile<br>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbspVer => Niveau moyen<br>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbspRouge => Niveau difficile<br>
                        </strong>
                        <br></br>
                        Selon que votre réponse soit bonne ou mauvaise vous avancez ou reculez de x cases.
                        <br></br>
                        Le joeur qui gagne est le premier arrivé à la 63.
                        <br></br<br></br>
                        <strong>Si la case est de niveau facile :</strong><br>
                        &nbsp;&nbsp;&nbsp;&nbsp;- Vous avancez de 1 case si la réponse est bonne<br>
                        &nbsp;&nbsp;&nbsp;&nbsp;- Vous reculer de 4 cases si la réponse est fausse<br>
                        <br></br>
                        <strong>Si la case est de niveau moyen :</strong><br>
                        &nbsp;&nbsp;&nbsp;&nbsp;- Vous avancez de 2 case si la réponse est bonne<br>
                        &nbsp;&nbsp;&nbsp;&nbsp;- Vous reculer de 2 cases si la réponse est fausse<br>
                        <br></br>
                        <strong>Si la case est de niveau difficile:</strong><br>
                        &nbsp;&nbsp;&nbsp;&nbsp;- Vous avancez de 1 case si la réponse est bonne<br>
                        &nbsp;&nbsp;&nbsp;&nbsp;- Vous reculer de 1 cases si la réponse est fausse<br>
                        <br>
                    </p>
                    <img id=\"logo\" src=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/jeu_de_l_oie.png"), "html", null, true);
        echo "\" alt=\"logo\" title=\"jeu_de_l_oie_1\" />
                    <img id=\"logo\" src=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/jeu_de_l_oie_2.jpg"), "html", null, true);
        echo "\" alt=\"logo\" title=\"jeu_de_l_oie_2\" />


                </div>
            </div>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "AppBundle:Default:rules.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 41,  72 => 40,  31 => 3,  28 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "AppBundle:Default:rules.html.twig", "C:\\www\\Web2\\src\\AppBundle/Resources/views/Default/rules.html.twig");
    }
}
