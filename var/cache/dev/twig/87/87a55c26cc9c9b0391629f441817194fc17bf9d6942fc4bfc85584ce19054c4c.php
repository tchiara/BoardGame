<?php

/* AppBundle:Default:_header.html.twig */
class __TwigTemplate_7df819ed8802bf25b4a52b04ad1c7d8138b6aef0089dbb37bb7697786d161870 extends Twig_Template
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
        $__internal_54a1843fcacb8ca93b8e8f50556a01f35c22ffbc494b3a79f343a003489919f7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_54a1843fcacb8ca93b8e8f50556a01f35c22ffbc494b3a79f343a003489919f7->enter($__internal_54a1843fcacb8ca93b8e8f50556a01f35c22ffbc494b3a79f343a003489919f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Default:_header.html.twig"));

        $__internal_5f729ec825c0b534c6478bdf6bfad5983b1470099ba70868d2aad9f74951a547 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f729ec825c0b534c6478bdf6bfad5983b1470099ba70868d2aad9f74951a547->enter($__internal_5f729ec825c0b534c6478bdf6bfad5983b1470099ba70868d2aad9f74951a547_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Default:_header.html.twig"));

        // line 1
        echo "<nav class=\"navbar navbar-default navbar-fixed-top\">
    <div class=\"container\">
        <div class=\"navbar-header\">
            <img id=\"logo\" src=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/logo.jpg"), "html", null, true);
        echo "\" alt=\"logo\" title=\"Mon projet web\" />
            <!-- The mobile navbar-toggle button can be safely removed since you do not need it in a non-responsive implementation -->
            <a class=\"navbar-brand\" href=\"";
        // line 6
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("home");
        echo "\">Le Super Jeu de L'oie</a>
        </div>
        <!-- Note that the .navbar-collapse and .collapse classes have been removed from the #navbar -->
        <div id=\"navbar\">
            <ul class=\"nav navbar-nav\">
                <li class='active'><a href=\"";
        // line 11
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("home");
        echo "\">Accueil</a></li>
                <li><a href=\"";
        // line 12
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("rules");
        echo "\">Règles du Jeu</a></li>

                ";
        // line 14
        if ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "oUser"), "method")) {
            // line 15
            echo "                    <li class=\"dropdown\">
                        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">Jouer <span class=\"caret\"></span></a>
                        <ul class=\"dropdown-menu\">
                            <li><a href=\"";
            // line 18
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("createParty");
            echo "\">Créer une partie</a></li>
                            <li role=\"separator\" class=\"divider\"></li>
                            <li><a href=\"";
            // line 20
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("joinParty");
            echo "\">Rejoindre une partie</a></li>
                        </ul>
                    </li>
                    Bonjour ";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "oUser"), "method"), "emailLogin", array()), "html", null, true);
            echo " vous êtes connecté(e) !

                    <li><a href=\"";
            // line 25
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("logout");
            echo "\">Déconnexion</a></li>

                ";
        } else {
            // line 28
            echo "                    ";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("AppBundle:User:login"));
            echo "
                    <br/>
                    <li><a href=\"";
            // line 30
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_register");
            echo "\">S'inscrire pour jouer</a></li>

                ";
        }
        // line 33
        echo "            </ul>

        </div><!--/.nav-collapse -->
    </div>
</nav>
";
        
        $__internal_54a1843fcacb8ca93b8e8f50556a01f35c22ffbc494b3a79f343a003489919f7->leave($__internal_54a1843fcacb8ca93b8e8f50556a01f35c22ffbc494b3a79f343a003489919f7_prof);

        
        $__internal_5f729ec825c0b534c6478bdf6bfad5983b1470099ba70868d2aad9f74951a547->leave($__internal_5f729ec825c0b534c6478bdf6bfad5983b1470099ba70868d2aad9f74951a547_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Default:_header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 33,  87 => 30,  81 => 28,  75 => 25,  70 => 23,  64 => 20,  59 => 18,  54 => 15,  52 => 14,  47 => 12,  43 => 11,  35 => 6,  30 => 4,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<nav class=\"navbar navbar-default navbar-fixed-top\">
    <div class=\"container\">
        <div class=\"navbar-header\">
            <img id=\"logo\" src=\"{{ asset('images/logo.jpg')}}\" alt=\"logo\" title=\"Mon projet web\" />
            <!-- The mobile navbar-toggle button can be safely removed since you do not need it in a non-responsive implementation -->
            <a class=\"navbar-brand\" href=\"{{path('home')}}\">Le Super Jeu de L'oie</a>
        </div>
        <!-- Note that the .navbar-collapse and .collapse classes have been removed from the #navbar -->
        <div id=\"navbar\">
            <ul class=\"nav navbar-nav\">
                <li class='active'><a href=\"{{path('home')}}\">Accueil</a></li>
                <li><a href=\"{{path('rules')}}\">Règles du Jeu</a></li>

                {% if app.session.get('oUser') %}
                    <li class=\"dropdown\">
                        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">Jouer <span class=\"caret\"></span></a>
                        <ul class=\"dropdown-menu\">
                            <li><a href=\"{{path('createParty')}}\">Créer une partie</a></li>
                            <li role=\"separator\" class=\"divider\"></li>
                            <li><a href=\"{{path('joinParty')}}\">Rejoindre une partie</a></li>
                        </ul>
                    </li>
                    Bonjour {{ app.session.get('oUser').emailLogin }} vous êtes connecté(e) !

                    <li><a href=\"{{ path('logout') }}\">Déconnexion</a></li>

                {% else %}
                    {{ render( controller('AppBundle:User:login') ) }}
                    <br/>
                    <li><a href=\"{{ path('user_register') }}\">S'inscrire pour jouer</a></li>

                {% endif %}
            </ul>

        </div><!--/.nav-collapse -->
    </div>
</nav>
", "AppBundle:Default:_header.html.twig", "C:\\www\\Web2\\src\\AppBundle/Resources/views/Default/_header.html.twig");
    }
}
