<?php

/* @App/base.html.twig */
class __TwigTemplate_ea3d912eabdf770f4a5b3536d92f944c940acf714248ee85e3513ddceee2c694 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 4
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <script src=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery-3.1.1.min.js"), "html", null, true);
        echo "\"></script>

        ";
        // line 8
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\">

        <!-- Bootstrap CSS, theme and JS -->
        <link rel=\"stylesheet\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/bootstrap-theme.min.css"), "html", null, true);
        echo "\">
        <script src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\" ></script>

        ";
        // line 16
        echo "        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\" >

        <!- on ne peut pas utiliser twig dans le fichier externe style.css, alors on rajoute ci dessous les styles utilisant twig -->
        <style>
            body {
                background-image: url(";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/ferme.png"), "html", null, true);
        echo ");
            }
            #plateau-overlay {
                background-image: url(";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/board.png"), "html", null, true);
        echo ");
            }
        </style>
    </head>
    <body>
        <header>
            ";
        // line 30
        $this->loadTemplate("AppBundle:Default:_header.html.twig", "@App/base.html.twig", 30)->display($context);
        // line 31
        echo "        </header>

        <div id=\"mainContent\">
            ";
        // line 34
        $this->displayBlock('content', $context, $blocks);
        // line 35
        echo "        </div>

        <footer>
            ";
        // line 38
        $this->loadTemplate("AppBundle:Default:_footer.html.twig", "@App/base.html.twig", 38)->display($context);
        // line 39
        echo "        </footer>
    </body>
</html>
";
    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        echo "Snakes_ladders_game!";
    }

    // line 34
    public function block_content($context, array $blocks = array())
    {
        echo " ";
    }

    public function getTemplateName()
    {
        return "@App/base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  108 => 34,  102 => 4,  95 => 39,  93 => 38,  88 => 35,  86 => 34,  81 => 31,  79 => 30,  70 => 24,  64 => 21,  55 => 16,  50 => 13,  46 => 12,  42 => 11,  35 => 8,  30 => 5,  26 => 4,  21 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@App/base.html.twig", "C:\\www\\Web2\\src\\AppBundle\\Resources\\views\\base.html.twig");
    }
}
