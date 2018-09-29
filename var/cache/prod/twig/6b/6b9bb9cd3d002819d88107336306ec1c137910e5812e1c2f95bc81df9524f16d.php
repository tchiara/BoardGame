<?php

/* AppBundle:Game:gameBoard.html.twig */
class __TwigTemplate_992191526e19beef5411d539c3d455183559489026a1135ed137930474404c69 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AppBundle::base.html.twig", "AppBundle:Game:gameBoard.html.twig", 1);
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

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "    <audio id=\"sound_vache\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("sounds/vache.mp3"), "html", null, true);
        echo "\" autoplay></audio>

    <div id=\"board\">
        ";
        // line 7
        $this->loadTemplate("AppBundle:Game:board.html.twig", "AppBundle:Game:gameBoard.html.twig", 7)->display($context);
        echo "   <!-- avec include il n'est pas possible d'utiliser de Route -->
    </div>

    <script>
        var refreshIntervalId;

        \$('#board').on('click', '#the-dice', function () {   // #the-dice est l'identifiant de l'image du dè mais il va être écrasé à chaque clique, c'est pourquoi on le met en option / #board est l'identifiant en dur qui ne va pas être écrasé au rechargement de la page
            \$('#sound_vache').get(0).play();
            clearInterval(refreshIntervalId);
            \$.ajax({
                async: true,
                type: 'GET',
                url: '";
        // line 19
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("gameaction", array("action" => "dice"));
        echo "', // on va recharger dynamiquement cette vue : board.html.twig
                error: function (data) {
                    console.log(data);
                },
                success: function (view) {   // view est le résultat du champs Url, c'est à dire de la route gameaction
                    \$('#board').html(view); // on remplace le code qui est situé en haut dans le div avec l'identifiant #board par le résultat du champs Url (nouvel vue du plateau = view)
                }
            });
        });

        \$('#board').on('click', '#responses .answer', function () {   // .answer est la classe l'identifiante du bouton réponse dans l'environnement des questino
            enableAutoRefresh();
            \$.ajax({
                async: true,
                type: 'POST',
                url: '";
        // line 34
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("gameaction", array("action" => "answerQuizz"));
        echo "', // on va recharger dynamiquement cette vue : board.html.twig
                data: {
                    idQuestion: \$(this).data('id-question'),
                    idReply: \$(this).data('id-reply')
                },
                success: function (view) {   // view est le résultat du champs Url, c'est à dire de la route gameaction
                    \$('#board').html(view);

                    // on remplace le code qui est situé en haut dans le div avec l'identifiant #board par le résultat du champs Url (nouvel vue du plateau = view)
                }
            });
        });
        ";
        // line 47
        echo "
            function enableAutoRefresh() {
                refreshIntervalId = setInterval(function () {
                    \$.ajax({
                        async: true,
                        type: 'GET',
                        url: '";
        // line 53
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("gameaction", array("action" => "refresh"));
        echo "',
                        error: function (data) {
                            console.log(data);
                        },
                        success: function (view) {
                            \$('.modal-backdrop').remove(); // bootstrap modal envoie la popUp avec calque noir en fond. C'est calque ne se supprime pas automatiquement et avec le refresh cela devient de plus en plus noir. Donc a chaque refresh on supprime le calques
                            \$('#board').html(view);
                        }
                    });
                }, 5000);
            }
            enableAutoRefresh();
    </script>
";
    }

    public function getTemplateName()
    {
        return "AppBundle:Game:gameBoard.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 53,  86 => 47,  71 => 34,  53 => 19,  38 => 7,  31 => 4,  28 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "AppBundle:Game:gameBoard.html.twig", "C:\\www\\Web2\\src\\AppBundle/Resources/views/Game/gameBoard.html.twig");
    }
}
