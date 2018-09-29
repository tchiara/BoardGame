<?php

/* @App/Game/gameBoard.html.twig */
class __TwigTemplate_35a22d24f4cd92cb3944b756528bfdddbb743a3fbaf36d87defc8a382c30ce31 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AppBundle::base.html.twig", "@App/Game/gameBoard.html.twig", 1);
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
        $__internal_fcbf4c7e6276f47478bdec674579cc083876970fa75363b334a01c2ea565d287 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fcbf4c7e6276f47478bdec674579cc083876970fa75363b334a01c2ea565d287->enter($__internal_fcbf4c7e6276f47478bdec674579cc083876970fa75363b334a01c2ea565d287_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@App/Game/gameBoard.html.twig"));

        $__internal_975f7cf603903aac0be34f282ed89a73d93a5f801b2c91365818cea5701a0318 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_975f7cf603903aac0be34f282ed89a73d93a5f801b2c91365818cea5701a0318->enter($__internal_975f7cf603903aac0be34f282ed89a73d93a5f801b2c91365818cea5701a0318_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@App/Game/gameBoard.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fcbf4c7e6276f47478bdec674579cc083876970fa75363b334a01c2ea565d287->leave($__internal_fcbf4c7e6276f47478bdec674579cc083876970fa75363b334a01c2ea565d287_prof);

        
        $__internal_975f7cf603903aac0be34f282ed89a73d93a5f801b2c91365818cea5701a0318->leave($__internal_975f7cf603903aac0be34f282ed89a73d93a5f801b2c91365818cea5701a0318_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_ef5db3ac9de1a8168a582f9cad5b77c3f28e7d9730b077f4f975afeb267cdad4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ef5db3ac9de1a8168a582f9cad5b77c3f28e7d9730b077f4f975afeb267cdad4->enter($__internal_ef5db3ac9de1a8168a582f9cad5b77c3f28e7d9730b077f4f975afeb267cdad4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_55d8a8c57bab0953611347be5d7e8301bb395920abf1f6699327e9ccc6381deb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_55d8a8c57bab0953611347be5d7e8301bb395920abf1f6699327e9ccc6381deb->enter($__internal_55d8a8c57bab0953611347be5d7e8301bb395920abf1f6699327e9ccc6381deb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "    <audio id=\"sound_vache\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("sounds/vache.mp3"), "html", null, true);
        echo "\" autoplay></audio>

    <div id=\"board\">
        ";
        // line 7
        $this->loadTemplate("AppBundle:Game:board.html.twig", "@App/Game/gameBoard.html.twig", 7)->display($context);
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
        
        $__internal_55d8a8c57bab0953611347be5d7e8301bb395920abf1f6699327e9ccc6381deb->leave($__internal_55d8a8c57bab0953611347be5d7e8301bb395920abf1f6699327e9ccc6381deb_prof);

        
        $__internal_ef5db3ac9de1a8168a582f9cad5b77c3f28e7d9730b077f4f975afeb267cdad4->leave($__internal_ef5db3ac9de1a8168a582f9cad5b77c3f28e7d9730b077f4f975afeb267cdad4_prof);

    }

    public function getTemplateName()
    {
        return "@App/Game/gameBoard.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 53,  104 => 47,  89 => 34,  71 => 19,  56 => 7,  49 => 4,  40 => 3,  11 => 1,);
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
    <audio id=\"sound_vache\" src=\"{{ asset('sounds/vache.mp3')}}\" autoplay></audio>

    <div id=\"board\">
        {% include \"AppBundle:Game:board.html.twig\" %}   <!-- avec include il n'est pas possible d'utiliser de Route -->
    </div>

    <script>
        var refreshIntervalId;

        \$('#board').on('click', '#the-dice', function () {   // #the-dice est l'identifiant de l'image du dè mais il va être écrasé à chaque clique, c'est pourquoi on le met en option / #board est l'identifiant en dur qui ne va pas être écrasé au rechargement de la page
            \$('#sound_vache').get(0).play();
            clearInterval(refreshIntervalId);
            \$.ajax({
                async: true,
                type: 'GET',
                url: '{{ path('gameaction', {'action' : 'dice'}) }}', // on va recharger dynamiquement cette vue : board.html.twig
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
                url: '{{ path('gameaction', {'action' : 'answerQuizz'}) }}', // on va recharger dynamiquement cette vue : board.html.twig
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
        {#        rafraichiseemnt automatique#}

            function enableAutoRefresh() {
                refreshIntervalId = setInterval(function () {
                    \$.ajax({
                        async: true,
                        type: 'GET',
                        url: '{{ path('gameaction', {'action' : 'refresh'}) }}',
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
{% endblock %}

", "@App/Game/gameBoard.html.twig", "C:\\www\\Web2\\src\\AppBundle\\Resources\\views\\Game\\gameBoard.html.twig");
    }
}
