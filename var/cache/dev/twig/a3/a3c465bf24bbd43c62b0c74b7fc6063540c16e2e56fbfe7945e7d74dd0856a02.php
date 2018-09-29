<?php

/* @App/Default/rules.html.twig */
class __TwigTemplate_8b98e4640fee76976473486bf086a95607e06562d8fce6d4b607edd7388d3d09 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AppBundle::base.html.twig", "@App/Default/rules.html.twig", 1);
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
        $__internal_cc2695591552fbc07f9bcb94165c1735a65e0df839467a4fe47c39b24b4f0204 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cc2695591552fbc07f9bcb94165c1735a65e0df839467a4fe47c39b24b4f0204->enter($__internal_cc2695591552fbc07f9bcb94165c1735a65e0df839467a4fe47c39b24b4f0204_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@App/Default/rules.html.twig"));

        $__internal_915d625b35c44abc454c89633257812fccd4df1451fe55f8acc5ce3fb04a7b71 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_915d625b35c44abc454c89633257812fccd4df1451fe55f8acc5ce3fb04a7b71->enter($__internal_915d625b35c44abc454c89633257812fccd4df1451fe55f8acc5ce3fb04a7b71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@App/Default/rules.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cc2695591552fbc07f9bcb94165c1735a65e0df839467a4fe47c39b24b4f0204->leave($__internal_cc2695591552fbc07f9bcb94165c1735a65e0df839467a4fe47c39b24b4f0204_prof);

        
        $__internal_915d625b35c44abc454c89633257812fccd4df1451fe55f8acc5ce3fb04a7b71->leave($__internal_915d625b35c44abc454c89633257812fccd4df1451fe55f8acc5ce3fb04a7b71_prof);

    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        $__internal_36e1b80ec34d8761d07b27effe1baf866788321249ec5dfac0f7a3c548dd747d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_36e1b80ec34d8761d07b27effe1baf866788321249ec5dfac0f7a3c548dd747d->enter($__internal_36e1b80ec34d8761d07b27effe1baf866788321249ec5dfac0f7a3c548dd747d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_1e732ff768ac2ce02236cbaf8e23308ad482988240e7bbe5f37da92b91b811ec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1e732ff768ac2ce02236cbaf8e23308ad482988240e7bbe5f37da92b91b811ec->enter($__internal_1e732ff768ac2ce02236cbaf8e23308ad482988240e7bbe5f37da92b91b811ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_1e732ff768ac2ce02236cbaf8e23308ad482988240e7bbe5f37da92b91b811ec->leave($__internal_1e732ff768ac2ce02236cbaf8e23308ad482988240e7bbe5f37da92b91b811ec_prof);

        
        $__internal_36e1b80ec34d8761d07b27effe1baf866788321249ec5dfac0f7a3c548dd747d->leave($__internal_36e1b80ec34d8761d07b27effe1baf866788321249ec5dfac0f7a3c548dd747d_prof);

    }

    public function getTemplateName()
    {
        return "@App/Default/rules.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 41,  90 => 40,  49 => 3,  40 => 2,  11 => 1,);
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
    <audio id=\"testaudio\" src=\"{{ asset('sounds/ane.mp3')}}\"></audio>
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
                    <img id=\"logo\" src=\"{{ asset('images/jeu_de_l_oie.png')}}\" alt=\"logo\" title=\"jeu_de_l_oie_1\" />
                    <img id=\"logo\" src=\"{{ asset('images/jeu_de_l_oie_2.jpg')}}\" alt=\"logo\" title=\"jeu_de_l_oie_2\" />


                </div>
            </div>
        </div>
    </div>
{% endblock %}{# empty Twig template #}
", "@App/Default/rules.html.twig", "C:\\www\\Web2\\src\\AppBundle\\Resources\\views\\Default\\rules.html.twig");
    }
}
