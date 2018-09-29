<?php

/* AppBundle:Default:joinParty.html.twig */
class __TwigTemplate_5e8b4ac54cef0984afbf67fc83230df756336cf2f06bf94a875dafe486cd097c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AppBundle::base.html.twig", "AppBundle:Default:joinParty.html.twig", 1);
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
        $__internal_51c43995ef4b3ccf818538a06a22b852cb413d39b9e84246bb059e700be59ef2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_51c43995ef4b3ccf818538a06a22b852cb413d39b9e84246bb059e700be59ef2->enter($__internal_51c43995ef4b3ccf818538a06a22b852cb413d39b9e84246bb059e700be59ef2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Default:joinParty.html.twig"));

        $__internal_68c42546c2ed0ab22cda2ff4e94025bf6b99a91bab0918978774435e916a6c89 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_68c42546c2ed0ab22cda2ff4e94025bf6b99a91bab0918978774435e916a6c89->enter($__internal_68c42546c2ed0ab22cda2ff4e94025bf6b99a91bab0918978774435e916a6c89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Default:joinParty.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_51c43995ef4b3ccf818538a06a22b852cb413d39b9e84246bb059e700be59ef2->leave($__internal_51c43995ef4b3ccf818538a06a22b852cb413d39b9e84246bb059e700be59ef2_prof);

        
        $__internal_68c42546c2ed0ab22cda2ff4e94025bf6b99a91bab0918978774435e916a6c89->leave($__internal_68c42546c2ed0ab22cda2ff4e94025bf6b99a91bab0918978774435e916a6c89_prof);

    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        $__internal_7a51c15e7a4681915cc9ea0b23cb0992bae34db7e008a3d654147db9ca05ef85 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7a51c15e7a4681915cc9ea0b23cb0992bae34db7e008a3d654147db9ca05ef85->enter($__internal_7a51c15e7a4681915cc9ea0b23cb0992bae34db7e008a3d654147db9ca05ef85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_87afd4150c3609f3c9bba183e298f330dc0c552ed273689143356cd90dc8eb01 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_87afd4150c3609f3c9bba183e298f330dc0c552ed273689143356cd90dc8eb01->enter($__internal_87afd4150c3609f3c9bba183e298f330dc0c552ed273689143356cd90dc8eb01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 3
        echo "    <audio src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("sounds/porc_1.mp3"), "html", null, true);
        echo "\" autoplay></audio>
    <div class=\"row\">
        <div id=\"creation\" class=\"col-md-12\">
            <div class=\"panel panel-default\">
                <div class=\"panel-heading\"> Voici toutes les parties :</div>
                <div class=\"panel-body\">
                    <table class=\"table table-striped\" >
                        <thead>
                            <tr>
                                <th>Nom de la partie</th>
                                <th>Statut de la partie</th>
                                <th>Thème de la partie</th>
                                <th>Lien de la partie</th>

                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["games"]) ? $context["games"] : $this->getContext($context, "games")));
        foreach ($context['_seq'] as $context["_key"] => $context["game"]) {
            // line 22
            echo "                                </tr><tr>
                                    <td>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["game"], "name", array()), "html", null, true);
            echo "</td>
                                    <td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["game"], "status", array()), "html", null, true);
            echo "</td>
                                    <td>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["game"], "theme", array()), "wording", array()), "html", null, true);
            echo "</td>
                                    <td>
                                        ";
            // line 27
            if (($this->getAttribute($context["game"], "status", array()) == "waiting")) {
                // line 28
                echo "                                            <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("game_join", array("iGame" => $this->getAttribute($context["game"], "id", array()))), "html", null, true);
                echo "\" class=\"btn btn-warning\" role=\"button\">Rejoindre la partie</a>
                                        ";
            }
            // line 30
            echo "                                    </td>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['game'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_87afd4150c3609f3c9bba183e298f330dc0c552ed273689143356cd90dc8eb01->leave($__internal_87afd4150c3609f3c9bba183e298f330dc0c552ed273689143356cd90dc8eb01_prof);

        
        $__internal_7a51c15e7a4681915cc9ea0b23cb0992bae34db7e008a3d654147db9ca05ef85->leave($__internal_7a51c15e7a4681915cc9ea0b23cb0992bae34db7e008a3d654147db9ca05ef85_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Default:joinParty.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 32,  99 => 30,  93 => 28,  91 => 27,  86 => 25,  82 => 24,  78 => 23,  75 => 22,  71 => 21,  49 => 3,  40 => 2,  11 => 1,);
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
    <audio src=\"{{ asset('sounds/porc_1.mp3')}}\" autoplay></audio>
    <div class=\"row\">
        <div id=\"creation\" class=\"col-md-12\">
            <div class=\"panel panel-default\">
                <div class=\"panel-heading\"> Voici toutes les parties :</div>
                <div class=\"panel-body\">
                    <table class=\"table table-striped\" >
                        <thead>
                            <tr>
                                <th>Nom de la partie</th>
                                <th>Statut de la partie</th>
                                <th>Thème de la partie</th>
                                <th>Lien de la partie</th>

                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                {% for game in games %}
                                </tr><tr>
                                    <td>{{ game.name }}</td>
                                    <td>{{ game.status }}</td>
                                    <td>{{ game.theme.wording }}</td>
                                    <td>
                                        {% if game.status == 'waiting' %}
                                            <a href=\"{{path( 'game_join', {'iGame' : game.id} )}}\" class=\"btn btn-warning\" role=\"button\">Rejoindre la partie</a>
                                        {% endif %}
                                    </td>
                                {% endfor %}
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
{% endblock %}
", "AppBundle:Default:joinParty.html.twig", "C:\\www\\Web2\\src\\AppBundle/Resources/views/Default/joinParty.html.twig");
    }
}
