<?php

/* @App/Game/board.html.twig */
class __TwigTemplate_52a026957475f6f56afe27628cbc3110b03786ca220efdcea8c141ffd989f316 extends Twig_Template
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
        $__internal_f681d2f17a0ac844478cd64fd5fa5bab2e2945890dda9701565fdc37d29f7142 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f681d2f17a0ac844478cd64fd5fa5bab2e2945890dda9701565fdc37d29f7142->enter($__internal_f681d2f17a0ac844478cd64fd5fa5bab2e2945890dda9701565fdc37d29f7142_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@App/Game/board.html.twig"));

        $__internal_21413c084d532b0fb2367fac10c40bbd51b975ec2de2afd330a8cf5b83b74070 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_21413c084d532b0fb2367fac10c40bbd51b975ec2de2afd330a8cf5b83b74070->enter($__internal_21413c084d532b0fb2367fac10c40bbd51b975ec2de2afd330a8cf5b83b74070_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@App/Game/board.html.twig"));

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
        if ($this->getAttribute((isset($context["board"]) ? $context["board"] : $this->getContext($context, "board")), "question", array())) {
            // line 8
            echo "                    <div id=\"the-question\">

                        <strong>";
            // line 10
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["board"]) ? $context["board"] : $this->getContext($context, "board")), "question", array()), "wording", array()), "html", null, true);
            echo "</strong><br/><br/>

                    </div>
                    ";
            // line 13
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["board"]) ? $context["board"] : $this->getContext($context, "board")), "question", array()), "replies", array()));
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
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["board"]) ? $context["board"] : $this->getContext($context, "board")), "cells", array()));
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
            echo twig_escape_filter($this->env, (isset($context["background"]) ? $context["background"] : $this->getContext($context, "background")), "html", null, true);
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
            echo twig_escape_filter($this->env, (isset($context["image"]) ? $context["image"] : $this->getContext($context, "image")), "html", null, true);
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
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["board"]) ? $context["board"] : $this->getContext($context, "board")), "messagesToPlayers", array()));
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
        echo twig_escape_filter($this->env, (isset($context["nameGame"]) ? $context["nameGame"] : $this->getContext($context, "nameGame")), "html", null, true);
        echo "</h5>

    </div>

    <div id=\"joueurs\" class=\"col-md-6\">
        ";
        // line 86
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["board"]) ? $context["board"] : $this->getContext($context, "board")), "pawns", array()));
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
            if (($this->getAttribute($context["loop"], "index0", array()) == $this->getAttribute((isset($context["board"]) ? $context["board"] : $this->getContext($context, "board")), "playerTurn", array()))) {
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
        if (((($this->getAttribute((isset($context["board"]) ? $context["board"] : $this->getContext($context, "board")), "question", array()) == null) && ($this->getAttribute((isset($context["game"]) ? $context["game"] : $this->getContext($context, "game")), "status", array()) == "in-process")) && ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["board"]) ? $context["board"] : $this->getContext($context, "board")), "pawns", array()), $this->getAttribute((isset($context["board"]) ? $context["board"] : $this->getContext($context, "board")), "playerTurn", array()), array(), "array"), "user", array()), "id", array()) == $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "oUser"), "method"), "id", array())))) {
            // line 104
            echo "            <img id=\"the-dice\" src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/dice_.gif"), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["board"]) ? $context["board"] : $this->getContext($context, "board")), "dice", array()), "html", null, true);
            echo "\"/>
        ";
        } else {
            // line 106
            echo "            <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl((("images/dice_" . $this->getAttribute((isset($context["board"]) ? $context["board"] : $this->getContext($context, "board")), "dice", array())) . ".gif")), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["board"]) ? $context["board"] : $this->getContext($context, "board")), "dice", array()), "html", null, true);
            echo "\"/>
        ";
        }
        // line 108
        echo "    </div>


    ";
        // line 112
        echo "    ";
        if (((isset($context["bEndGame"]) ? $context["bEndGame"] : $this->getContext($context, "bEndGame")) == 1)) {
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
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["board"]) ? $context["board"] : $this->getContext($context, "board")), "cells", array()), 7, array(), "array"), "pawns", array()), 0, array(), "array"), "user", array()), "firstname", array()), "html", null, true);
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
        if (((isset($context["sStatusGame"]) ? $context["sStatusGame"] : $this->getContext($context, "sStatusGame")) == "waiting")) {
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
            echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute((isset($context["game"]) ? $context["game"] : $this->getContext($context, "game")), "players", array())), "html", null, true);
            echo " joueurs dans cette partie. </H4>
                        <H4> Il manque encore ";
            // line 152
            echo twig_escape_filter($this->env, ($this->getAttribute((isset($context["game"]) ? $context["game"] : $this->getContext($context, "game")), "nbPlayerMax", array()) - twig_length_filter($this->env, $this->getAttribute((isset($context["game"]) ? $context["game"] : $this->getContext($context, "game")), "players", array()))), "html", null, true);
            echo " joueurs pour que la partie commence</H4>
                        <HR>
                        <BR><BR>
                        ";
            // line 156
            echo "                        <div class=\"center\">
                            ";
            // line 157
            if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "oUser"), "method"), "id", array()) == $this->getAttribute($this->getAttribute((isset($context["game"]) ? $context["game"] : $this->getContext($context, "game")), "gameCreator", array()), "id", array()))) {
                // line 158
                echo "                                <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("changeNbPlayerMax", array("iGame" => $this->getAttribute((isset($context["game"]) ? $context["game"] : $this->getContext($context, "game")), "id", array()), "newNbPlayerMax" => twig_length_filter($this->env, $this->getAttribute((isset($context["game"]) ? $context["game"] : $this->getContext($context, "game")), "players", array())))), "html", null, true);
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
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("leaveGame", array("iGame" => $this->getAttribute((isset($context["game"]) ? $context["game"] : $this->getContext($context, "game")), "id", array()))), "html", null, true);
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
        
        $__internal_f681d2f17a0ac844478cd64fd5fa5bab2e2945890dda9701565fdc37d29f7142->leave($__internal_f681d2f17a0ac844478cd64fd5fa5bab2e2945890dda9701565fdc37d29f7142_prof);

        
        $__internal_21413c084d532b0fb2367fac10c40bbd51b975ec2de2afd330a8cf5b83b74070->leave($__internal_21413c084d532b0fb2367fac10c40bbd51b975ec2de2afd330a8cf5b83b74070_prof);

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
        return array (  422 => 173,  410 => 164,  407 => 163,  398 => 158,  396 => 157,  393 => 156,  387 => 152,  383 => 151,  373 => 143,  371 => 142,  368 => 141,  366 => 140,  353 => 130,  344 => 125,  342 => 124,  330 => 113,  327 => 112,  322 => 108,  314 => 106,  306 => 104,  303 => 103,  298 => 99,  279 => 94,  275 => 93,  269 => 90,  260 => 87,  243 => 86,  235 => 81,  227 => 75,  218 => 73,  214 => 72,  205 => 65,  188 => 61,  179 => 59,  175 => 58,  168 => 55,  165 => 54,  162 => 53,  159 => 52,  156 => 51,  153 => 50,  150 => 49,  148 => 48,  142 => 45,  135 => 43,  132 => 42,  129 => 41,  126 => 40,  123 => 39,  120 => 38,  117 => 37,  114 => 36,  112 => 35,  109 => 34,  105 => 32,  102 => 31,  85 => 30,  79 => 26,  73 => 21,  70 => 20,  60 => 16,  54 => 15,  51 => 14,  47 => 13,  41 => 10,  37 => 8,  35 => 7,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<audio src=\"{{ asset('sounds/sweet_home_chicago.mp3')}}\" autoplay loop></audio>
<div class=\"row\">
    <div id=\"questions\" class=\"col-md-3 game-aside-info\">
        <div class=\"panel panel-default\">
            <div class=\"panel-heading\">La Question</div>
            <div class=\"panel-body\">
                {% if board.question %}
                    <div id=\"the-question\">

                        <strong>{{ board.question.wording }}</strong><br/><br/>

                    </div>
                    {% for reply in board.question.replies %}
                        <div id=\"responses\">
                            <div class=\"answer alert-info\" data-id-question=\"{{ reply.question.id }}\" data-id-reply=\"{{ reply.id }}\">
                                {{ reply.wording }}<br/>
                            </div><br/>
                        </div>
                    {% endfor %}
                {% endif %}
            </div>
        </div>
    </div>
    <div id=\"plateau\" class=\"col-md-6\" style=\"position:relative;\" >
        {# Creation of the view board with the corresponding number inside#}
        <div id=\"plateau-overlay\"></div>
        <BR>
        <table class=\"table table-bordered\">
            <tr>
                {% for value in board.cells %}
                    {% if loop.index0 % 8 == 0 and loop.index0 != 0 %}
                    </tr><tr>
                    {% endif %}

                    {% if value.level == 0 %}
                        {% set background = 'orange' %}
                    {% elseif value.level  == 1 %}
                        {% set background = '#36A100' %}
                    {% elseif value.level  == 2 %}
                        {% set background = '#E91700' %}
                    {% endif %}

                    <td style=\"background: {{ background }}; opacity:1;\" id=\"{{value.num}}\">
                        <div class=\"cell-overlay\">
                            {{ value.num }}
                        </div>
                        <div class=\"cell-overlay\">
                            {% if value.level == 0 %}
                                {% set image = asset('images/easy.png') %}
                            {% elseif value.level  == 1 %}
                                {% set image = asset('images/medium.png') %}
                            {% elseif value.level  == 2 %}
                                {% set image = asset('images/hard.png') %}
                            {% endif %}
                            <img src=\"{{ image }}\" height=\"\" width=\"\">
                        </div>
                        <div>
                            {% for pawn in value.pawns %}
                                <span class=\"glyphicon glyphicon-user\" style=\"color:{{pawn.pawnColor}}\"></span>
                            {% endfor %}
                        </div>

                    </td>
                {% endfor %}
            </tr>
        </table>
    </div>
    <div id=\"reponses\" class=\"col-md-3 game-aside-info\">
        <div class=\"panel panel-default\">
            <div class=\"panel-heading\">Commentaires</div>
            <div id=\"comments\" class=\"panel-body\">
                {% for msg in board.messagesToPlayers %}
                    {{ msg | raw }}<br /><br />
                {% endfor %}
            </div>
        </div>
    </div>
</div>
<div class=\"row\">
    <div id=\"partie\" class=\"col-md-3\">
        <h5>Partie de {{ nameGame }}</h5>

    </div>

    <div id=\"joueurs\" class=\"col-md-6\">
        {% for pawn in board.pawns %}
            <div class=\"players_info_turn {% if loop.index0 == board.playerTurn%}active{% endif %}\">
                <div class=\" panel panel-danger text-center\" >
                    <div class=\"panel-heading\">
                        <span class=\"glyphicon glyphicon-user\" style=\"color:{{pawn.pawnColor}}\"></span>
                    </div>
                    <div class=\"panel-body row\">
                        <img id=\"img_logo\" src=\"{{ asset('uploads/' ~ pawn.user.icone)}}\" alt=\"logo\" title=\"logo Player\" />
                        <p>{{pawn.user.pseudo}}</p>
                    </div>
                </div>
            </div>
        {% endfor %}
    </div>

    <div id=\"de\" class=\"col-md-3\">
        {# DES Cliquable si pas de reponse en attente && Joueur Session est le joueura joué &&  que la partie est in-process (sinon des=NULL}#}
        {% if ((board.question == null)  and (game.status == 'in-process') and (board.pawns[board.playerTurn].user.id == app.session.get('oUser').id)) %}
            <img id=\"the-dice\" src=\"{{ asset('images/dice_.gif') }}\" alt=\"{{board.dice}}\"/>
        {% else %}
            <img src=\"{{ asset('images/dice_' ~ board.dice ~ '.gif') }}\" alt=\"{{board.dice}}\"/>
        {% endif %}
    </div>


    {#    gestion de la fin de la partie#}
    {% if bEndGame == 1 %}
        <!-- Modal --> <!-- Popup Bootstrap bien fait, pratique -->
        <div class=\"modal fade\" id=\"myModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
            <div class=\"modal-dialog\">
                <div class=\"modal-content\">
                    <div class=\"modal-header\">

                        <h4 class=\"modal-title\" id=\"myModalLabel\">Fin de partie</h4>
                    </div>
                    <div class=\"modal-body\">
                        <H2> Partie terminée ! </H2>
                            {#                        board.cells[7] coorespond à la case twig 63#}
                            {#                        pawns[1] On ne sais pas pourquoi le tableau commence à 1 et non 0#}
                        <H3> Bien joué {{ board.cells[7].pawns[0].user.firstname }} ! Tu es super Fort(e)! Tu as gagné la partie !!!</H3>
                        <HR>
                        Que voulez vous faire ?
                        <BR><BR>
                        <div class=\"center\">
                            <a href=\"{{path('home')}}\"<button type=\"button\" class=\"btn btn-primary\">Rejouer une partie</button></a>&nbsp;&nbsp;&nbsp;&nbsp;  <!--  app.request.getBasePath()  est une fonction twig pour indiquer la page d'acceuil du site -->
                            &nbsp;&nbsp;<a href=\"http://www.yahoo.fr\"><button type=\"button\" class=\"btn btn-danger\">Quitter le plateau de jeu</button></a>
                        </div>
                    </div>
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->

        <script> \$('#myModal').modal('show')</script> <!-- on affiche la fenêtre popup Bootstrap avec Jquery au chargement de la page si la partie est terminée, sinon il faudrait mettre un bouton bootstrap-->
    {% endif %}
    {#    gestion du status de la partie#}

    {% if sStatusGame == 'waiting' %}
        <!-- Modal --> <!-- Popup Bootstrap bien fait, pratique -->
        <div class=\"modal fade\" id=\"StatusModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
            <div class=\"modal-dialog\">
                <div class=\"modal-content\">
                    <div class=\"modal-header\">
                        <h4 class=\"modal-title\" id=\"myModalLabel\"> Partie en attente de Joueur !</h4>
                    </div>
                    <div class=\"modal-body\">
                        <H4>il y a actuellement {{game.players | length}} joueurs dans cette partie. </H4>
                        <H4> Il manque encore {{game.nbPlayerMax - game.players | length}} joueurs pour que la partie commence</H4>
                        <HR>
                        <BR><BR>
                        {# Si le user en cours est celui qui a créé la session alors on affiche :#}
                        <div class=\"center\">
                            {% if app.session.get('oUser').id == game.gameCreator.id %}
                                <a href=\"{{path('changeNbPlayerMax',{'iGame': game.id, 'newNbPlayerMax' : game.players | length} ) }}\">
                                    <button type=\"button\" class=\"btn btn-primary\">Lancer quand-même la partie</button>
                                </a>
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            {% endif %}

                            <a href=\"{{path('leaveGame',{'iGame': game.id})}}\">
                                <button type=\"button\" class=\"btn btn-danger\">Sortir du jeu</button>
                            </a>
                        </div>
                    </div>
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->
    {% endif %}
    <script> \$('#StatusModal').modal('show')</script> <!-- on affiche la fenêtre popup Bootstrap avec Jquery au chargement de la page si la partie est terminée, sinon il faudrait mettre un bouton bootstrap-->

</div>

", "@App/Game/board.html.twig", "C:\\www\\Web2\\src\\AppBundle\\Resources\\views\\Game\\board.html.twig");
    }
}
