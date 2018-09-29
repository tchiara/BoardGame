<?php

/* @App/Default/joinParty.html.twig */
class __TwigTemplate_883a1dd84a125addaa63bdd71c98cb12ac4bb2bc19d0718893f981d48cfc89bf extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
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
        $context['_seq'] = twig_ensure_traversable((isset($context["games"]) ? $context["games"] : null));
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
        return array (  88 => 32,  81 => 30,  75 => 28,  73 => 27,  68 => 25,  64 => 24,  60 => 23,  57 => 22,  53 => 21,  31 => 3,  28 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@App/Default/joinParty.html.twig", "C:\\www\\Web2\\src\\AppBundle\\Resources\\views\\Default\\joinParty.html.twig");
    }
}
