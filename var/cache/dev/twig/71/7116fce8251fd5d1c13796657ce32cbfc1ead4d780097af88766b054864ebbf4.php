<?php

/* @App/Default/joinParty.html.twig */
class __TwigTemplate_f91c000cd85fd435216910d044680628e815b6c6d5a6360958ee569ea302cf82 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AppBundle::base.html.twig", "@App/Default/joinParty.html.twig", 1);
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
        $__internal_6d3314ded4f5c34c7059602c53dac907f93411b770cc2265758142037b7679c3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6d3314ded4f5c34c7059602c53dac907f93411b770cc2265758142037b7679c3->enter($__internal_6d3314ded4f5c34c7059602c53dac907f93411b770cc2265758142037b7679c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@App/Default/joinParty.html.twig"));

        $__internal_9170517cf27c49b945e4dd4edd3422ad1ad77636244996f4920db8dc6d4cf0b3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9170517cf27c49b945e4dd4edd3422ad1ad77636244996f4920db8dc6d4cf0b3->enter($__internal_9170517cf27c49b945e4dd4edd3422ad1ad77636244996f4920db8dc6d4cf0b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@App/Default/joinParty.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6d3314ded4f5c34c7059602c53dac907f93411b770cc2265758142037b7679c3->leave($__internal_6d3314ded4f5c34c7059602c53dac907f93411b770cc2265758142037b7679c3_prof);

        
        $__internal_9170517cf27c49b945e4dd4edd3422ad1ad77636244996f4920db8dc6d4cf0b3->leave($__internal_9170517cf27c49b945e4dd4edd3422ad1ad77636244996f4920db8dc6d4cf0b3_prof);

    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        $__internal_40d758e2f5d4419db3706310c61aaea4f2ddeafa76ae430c976af8e656207a0f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_40d758e2f5d4419db3706310c61aaea4f2ddeafa76ae430c976af8e656207a0f->enter($__internal_40d758e2f5d4419db3706310c61aaea4f2ddeafa76ae430c976af8e656207a0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_e0567003b248ecda2473011c4d97a627b27686ebb60aeffffdfdec377ece6fe3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e0567003b248ecda2473011c4d97a627b27686ebb60aeffffdfdec377ece6fe3->enter($__internal_e0567003b248ecda2473011c4d97a627b27686ebb60aeffffdfdec377ece6fe3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_e0567003b248ecda2473011c4d97a627b27686ebb60aeffffdfdec377ece6fe3->leave($__internal_e0567003b248ecda2473011c4d97a627b27686ebb60aeffffdfdec377ece6fe3_prof);

        
        $__internal_40d758e2f5d4419db3706310c61aaea4f2ddeafa76ae430c976af8e656207a0f->leave($__internal_40d758e2f5d4419db3706310c61aaea4f2ddeafa76ae430c976af8e656207a0f_prof);

    }

    public function getTemplateName()
    {
        return "@App/Default/joinParty.html.twig";
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
", "@App/Default/joinParty.html.twig", "C:\\www\\Web2\\src\\AppBundle\\Resources\\views\\Default\\joinParty.html.twig");
    }
}
