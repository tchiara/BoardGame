<?php

/* @App/Game/board.html.twig */
class __TwigTemplate_ba07fa36f3c4589de5b21963218082b85d6ab000213457ed4ffe81c69658d789 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<audio src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("sounds/sweet_home_chicago.mp3"), "html", null, true);
        echo "\" autoplay loop></audio>
<div class=\"row\">
    <div id=\"questions\" class=\"col-md-3 game-aside-info\">
        <div class=\"panel panel-default\">
            <div class=\"panel-heading\">La Question</div>
            <div class=\"panel-body\">
                ";
        // line 7
        if ($this->getAttribute((isset($context["board"]) ? $context["board"] : null), "question", array())) {
            // line 8
            echo "                    <div id=\"the-question\">

                        <strong>";
            // line 10
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["board"]) ? $context["board"] : null), "question", array()), "wording", array()), "html", null, true);
            echo "</strong><br/><br/>

                    </div>
                    ";
            // line 13
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["board"]) ? $context["board"] : null), "question", array()), "replies", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["reply"]) {
                // line 14
                echo "                        <div id=\"responses\">
                            <div class=\"answer alert-info\" data-id-question=\"";
                // line 15
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["reply"], "question", array()), "id", array()), "html", null, true);
                echo "\" data-id-reply=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["reply"], "id", array()), "html", null, true);
                echo "\">
                                ";
                // line 16
                echo twig_escape_filter($this->env, $this->getAttribute($context["reply"], "wording", array()), "html", null, true);
                echo "<br/>
                            </div><br/>
                        </div>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['reply'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 20
            echo "                ";
        }
        // line 21
        echo "            </div>
        </div>
    </div>
    <div id=\"plateau\" class=\"col-md-6\" style=\"position:relative;\" >
        ";
        // line 26
        echo "        <div id=\"plateau-overlay\"></div>
        <BR>
        <table class=\"table table-bordered\">
            <tr>
                ";
        // line 30
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["board"]) ? $context["board"] : null), "cells", array()));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["value"]) {
            // line 31
            echo "                    ";
            if (((($this->getAttribute($context["loop"], "index0", array()) % 8) == 0) && ($this->getAttribute($context["loop"], "index0", array()) != 0))) {
                // line 32
                echo "                    </tr><tr>
                    ";
            }
            // line 34
            echo "
                    ";
            // line 35
            if (($this->getAttribute($context["value"], "level", array()) == 0)) {
                // line 36
                echo "                        ";
                $context["background"] = "orange";
                // line 37
                echo "                    ";
            } elseif (($this->getAttribute($context["value"], "level", array()) == 1)) {
                // line 38
                echo "                        ";
                $context["background"] = "#36A100";
                // line 39
                echo "                    ";
            } elseif (($this->getAttribute($context["value"], "level", array()) == 2)) {
                // line 40
                echo "                        ";
                $context["background"] = "#E91700";
                // line 41
                echo "                    ";
            }
            // line 42
            echo "
                    <td style=\"background: ";
            // line 43
            echo twig_escape_filter($this->env, (isset($context["background"]) ? $context["background"] : null), "html", null, true);
            echo "; opacity:1;\" id=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["value"], "num", array()), "html", null, true);
            echo "\">
                        <div class=\"cell-overlay\">
                            ";
            // line 45
            echo twig_escape_filter($this->env, $this->getAttribute($context["value"], "num", array()), "html", null, true);
            echo "
                        </div>
                        <div class=\"cell-overlay\">
                            ";
            // line 48
            if (($this->getAttribute($context["value"], "level", array()) == 0)) {
                // line 49
                echo "                                ";
                $context["image"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/easy.png");
                // line 50
                echo "                            ";
            } elseif (($this->getAttribute($context["value"], "level", array()) == 1)) {
                // line 51
                echo "                                ";
                $context["image"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/medium.png");
                // line 52
                echo "                            ";
            } elseif (($this->getAttribute($context["value"], "level", array()) == 2)) {
                // line 53
                echo "                                ";
                $context["image"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/hard.png");
                // line 54
                echo "                            ";
            }
            // line 55
            echo "                            <img src=\"";
            echo twig_escape_filter($this->env, (isset($context["image"]) ? $context["image"] : null), "html", null, true);
            echo "\" height=\"\" width=\"\">
                        </div>
                        <div>
                            ";
            // line 58
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["value"], "pawns", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["pawn"]) {
                // line 59
                echo "                                <span class=\"glyphicon glyphicon-user\" style=\"color:";
                echo twig_escape_filter($this->env, $this->getAttribute($context["pawn"], "pawnColor", array()), "html", null, true);
                echo "\"></span>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pawn'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 61
            echo "                        </div>

                    </td>
                ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 65
        echo "            </tr>
        </table>
    </div>
    <div id=\"reponses\" class=\"col-md-3 game-aside-info\">
        <div class=\"panel panel-default\">
            <div class=\"panel-heading\">Commentaires</div>
            <div id=\"comments\" class=\"panel-body\">
                ";
        // line 72
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["board"]) ? $context["board"] : null), "messagesToPlayers", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["msg"]) {
            // line 73
            echo "                    ";
            echo $context["msg"];
            echo "<br /><br />
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['msg'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 75
        echo "            </div>
        </div>
    </div>
</div>
<div class=\"row\">
    <div id=\"partie\" class=\"col-md-3\">
        <h5>Partie de ";
        // line 81
        echo twig_escape_filter($this->env, (isset($context["nameGame"]) ? $context["nameGame"] : null), "html", null, true);
        echo "</h5>

    </div>

    <div id=\"joueurs\" class=\"col-md-6\">
        ";
        // line 86
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["board"]) ? $context["board"] : null), "pawns", array()));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["pawn"]) {
            // line 87
            echo "            <div class=\"players_info_turn ";
            if (($this->getAttribute($context["loop"], "index0", array()) == $this->getAttribute((isset($context["board"]) ? $context["board"] : null), "playerTurn", array()))) {
                echo "active";
            }
            echo "\">
                <div class=\" panel panel-danger text-center\" >
                    <div class=\"panel-heading\">
                        <span class=\"glyphicon glyphicon-user\" style=\"color:";
            // line 90
            echo twig_escape_filter($this->env, $this->getAttribute($context["pawn"], "pawnColor", array()), "html", null, true);
            echo "\"></span>
                    </div>
                    <div class=\"panel-body row\">
                        <img id=\"img_logo\" src=\"";
            // line 93
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("uploads/" . $this->getAttribute($this->getAttribute($context["pawn"], "user", array()), "icone", array()))), "html", null, true);
            echo "\" alt=\"logo\" title=\"logo Player\" />
                        <p>";
            // line 94
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["pawn"], "user", array()), "pseudo", array()), "html", null, true);
            echo "</p>
                    </div>
                </div>
            </div>
        ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pawn'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 99
        echo "    </div>

    <div id=\"de\" class=\"col-md-3\">
        ";
        // line 103
        echo "        ";
        if (((($this->getAttribute((isset($context["board"]) ? $context["board"] : null), "question", array()) == null) && ($this->getAttribute((isset($context["game"]) ? $context["game"] : null), "status", array()) == "in-process")) && ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["board"]) ? $context["board"] : null), "pawns", array()), $this->getAttribute((isset($context["board"]) ? $context["board"] : null), "playerTurn", array()), array(), "array"), "user", array()), "id", array()) == $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array()), "get", array(0 => "oUser"), "method"), "id", array())))) {
            // line 104
            echo "            <img id=\"the-dice\" src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/dice_.gif"), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["board"]) ? $context["board"] : null), "dice", array()), "html", null, true);
            echo "\"/>
        ";
        } else {
            // line 106
            echo "            <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl((("images/dice_" . $this->getAttribute((isset($context["board"]) ? $context["board"] : null), "dice", array())) . ".gif")), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["board"]) ? $context["board"] : null), "dice", array()), "html", null, true);
            echo "\"/>
        ";
        }
        // line 108
        echo "    </div>


    ";
        // line 112
        echo "    ";
        if (((isset($context["bEndGame"]) ? $context["bEndGame"] : null) == 1)) {
            // line 113
            echo "        <!-- Modal --> <!-- Popup Bootstrap bien fait, pratique -->
        <div class=\"modal fade\" id=\"myModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
            <div class=\"modal-dialog\">
                <div class=\"modal-content\">
                    <div class=\"modal-header\">

                        <h4 class=\"modal-title\" id=\"myModalLabel\">Fin de partie</h4>
                    </div>
                    <div class=\"modal-body\">
                        <H2> Partie terminée ! </H2>
                            ";
            // line 124
            echo "                            ";
            // line 125
            echo "                        <H3> Bien joué ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["board"]) ? $context["board"] : null), "cells", array()), 7, array(), "array"), "pawns", array()), 0, array(), "array"), "user", array()), "firstname", array()), "html", null, true);
            echo " ! Tu es super Fort(e)! Tu as gagné la partie !!!</H3>
                        <HR>
                        Que voulez vous faire ?
                        <BR><BR>
                        <div class=\"center\">
                            <a href=\"";
            // line 130
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("home");
            echo "\"<button type=\"button\" class=\"btn btn-primary\">Rejouer une partie</button></a>&nbsp;&nbsp;&nbsp;&nbsp;  <!--  app.request.getBasePath()  est une fonction twig pour indiquer la page d'acceuil du site -->
                            &nbsp;&nbsp;<a href=\"http://www.yahoo.fr\"><button type=\"button\" class=\"btn btn-danger\">Quitter le plateau de jeu</button></a>
                        </div>
                    </div>
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->

        <script> \$('#myModal').modal('show')</script> <!-- on affiche la fenêtre popup Bootstrap avec Jquery au chargement de la page si la partie est terminée, sinon il faudrait mettre un bouton bootstrap-->
    ";
        }
        // line 140
        echo "    ";
        // line 141
        echo "
    ";
        // line 142
        if (((isset($context["sStatusGame"]) ? $context["sStatusGame"] : null) == "waiting")) {
            // line 143
            echo "        <!-- Modal --> <!-- Popup Bootstrap bien fait, pratique -->
        <div class=\"modal fade\" id=\"StatusModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
            <div class=\"modal-dialog\">
                <div class=\"modal-content\">
                    <div class=\"modal-header\">
                        <h4 class=\"modal-title\" id=\"myModalLabel\"> Partie en attente de Joueur !</h4>
                    </div>
                    <div class=\"modal-body\">
                        <H4>il y a actuellement ";
            // line 151
            echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute((isset($context["game"]) ? $context["game"] : null), "players", array())), "html", null, true);
            echo " joueurs dans cette partie. </H4>
                        <H4> Il manque encore ";
            // line 152
            echo twig_escape_filter($this->env, ($this->getAttribute((isset($context["game"]) ? $context["game"] : null), "nbPlayerMax", array()) - twig_length_filter($this->env, $this->getAttribute((isset($context["game"]) ? $context["game"] : null), "players", array()))), "html", null, true);
            echo " joueurs pour que la partie commence</H4>
                        <HR>
                        <BR><BR>
                        ";
            // line 156
            echo "                        <div class=\"center\">
                            ";
            // line 157
            if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array()), "get", array(0 => "oUser"), "method"), "id", array()) == $this->getAttribute($this->getAttribute((isset($context["game"]) ? $context["game"] : null), "gameCreator", array()), "id", array()))) {
                // line 158
                echo "                                <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("changeNbPlayerMax", array("iGame" => $this->getAttribute((isset($context["game"]) ? $context["game"] : null), "id", array()), "newNbPlayerMax" => twig_length_filter($this->env, $this->getAttribute((isset($context["game"]) ? $context["game"] : null), "players", array())))), "html", null, true);
                echo "\">
                                    <button type=\"button\" class=\"btn btn-primary\">Lancer quand-même la partie</button>
                                </a>
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            ";
            }
            // line 163
            echo "
                            <a href=\"";
            // line 164
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("leaveGame", array("iGame" => $this->getAttribute((isset($context["game"]) ? $context["game"] : null), "id", array()))), "html", null, true);
            echo "\">
                                <button type=\"button\" class=\"btn btn-danger\">Sortir du jeu</button>
                            </a>
                        </div>
                    </div>
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->
    ";
        }
        // line 173
        echo "    <script> \$('#StatusModal').modal('show')</script> <!-- on affiche la fenêtre popup Bootstrap avec Jquery au chargement de la page si la partie est terminée, sinon il faudrait mettre un bouton bootstrap-->

</div>

";
    }

    public function getTemplateName()
    {
        return "@App/Game/board.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  416 => 173,  404 => 164,  401 => 163,  392 => 158,  390 => 157,  387 => 156,  381 => 152,  377 => 151,  367 => 143,  365 => 142,  362 => 141,  360 => 140,  347 => 130,  338 => 125,  336 => 124,  324 => 113,  321 => 112,  316 => 108,  308 => 106,  300 => 104,  297 => 103,  292 => 99,  273 => 94,  269 => 93,  263 => 90,  254 => 87,  237 => 86,  229 => 81,  221 => 75,  212 => 73,  208 => 72,  199 => 65,  182 => 61,  173 => 59,  169 => 58,  162 => 55,  159 => 54,  156 => 53,  153 => 52,  150 => 51,  147 => 50,  144 => 49,  142 => 48,  136 => 45,  129 => 43,  126 => 42,  123 => 41,  120 => 40,  117 => 39,  114 => 38,  111 => 37,  108 => 36,  106 => 35,  103 => 34,  99 => 32,  96 => 31,  79 => 30,  73 => 26,  67 => 21,  64 => 20,  54 => 16,  48 => 15,  45 => 14,  41 => 13,  35 => 10,  31 => 8,  29 => 7,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@App/Game/board.html.twig", "C:\\www\\Web2\\src\\AppBundle\\Resources\\views\\Game\\board.html.twig");
    }
}
