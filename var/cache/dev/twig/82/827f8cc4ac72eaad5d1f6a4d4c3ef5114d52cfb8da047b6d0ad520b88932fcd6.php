<?php

/* @App/base.html.twig */
class __TwigTemplate_8bc26acb1a7051370cda012d06bd7ae18a664495097bc6d6f1d775efabfe2b6f extends Twig_Template
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
        $__internal_580e129646ad02fdd4c305120741fc250b43e8d9fcbeb7158b6a32b7bf37176b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_580e129646ad02fdd4c305120741fc250b43e8d9fcbeb7158b6a32b7bf37176b->enter($__internal_580e129646ad02fdd4c305120741fc250b43e8d9fcbeb7158b6a32b7bf37176b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@App/base.html.twig"));

        $__internal_c0f68986443b272dfa4444f4ac23720d96005bb329d3e569e4c8c0677c621bf8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c0f68986443b272dfa4444f4ac23720d96005bb329d3e569e4c8c0677c621bf8->enter($__internal_c0f68986443b272dfa4444f4ac23720d96005bb329d3e569e4c8c0677c621bf8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@App/base.html.twig"));

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
        
        $__internal_580e129646ad02fdd4c305120741fc250b43e8d9fcbeb7158b6a32b7bf37176b->leave($__internal_580e129646ad02fdd4c305120741fc250b43e8d9fcbeb7158b6a32b7bf37176b_prof);

        
        $__internal_c0f68986443b272dfa4444f4ac23720d96005bb329d3e569e4c8c0677c621bf8->leave($__internal_c0f68986443b272dfa4444f4ac23720d96005bb329d3e569e4c8c0677c621bf8_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_94c4083150d59da4fa3695c2ebcf7da0f45b81862e2f849eea84868a2e5eaaeb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_94c4083150d59da4fa3695c2ebcf7da0f45b81862e2f849eea84868a2e5eaaeb->enter($__internal_94c4083150d59da4fa3695c2ebcf7da0f45b81862e2f849eea84868a2e5eaaeb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_9d217ac66b52699cbdf5ee9ade120dca466cbdbcdda74d3fdd1220b2b4fad705 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d217ac66b52699cbdf5ee9ade120dca466cbdbcdda74d3fdd1220b2b4fad705->enter($__internal_9d217ac66b52699cbdf5ee9ade120dca466cbdbcdda74d3fdd1220b2b4fad705_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Snakes_ladders_game!";
        
        $__internal_9d217ac66b52699cbdf5ee9ade120dca466cbdbcdda74d3fdd1220b2b4fad705->leave($__internal_9d217ac66b52699cbdf5ee9ade120dca466cbdbcdda74d3fdd1220b2b4fad705_prof);

        
        $__internal_94c4083150d59da4fa3695c2ebcf7da0f45b81862e2f849eea84868a2e5eaaeb->leave($__internal_94c4083150d59da4fa3695c2ebcf7da0f45b81862e2f849eea84868a2e5eaaeb_prof);

    }

    // line 34
    public function block_content($context, array $blocks = array())
    {
        $__internal_6e69600a9f38f5c82e20825a166201551401a9ce0213e66e6fabace56a562c1e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6e69600a9f38f5c82e20825a166201551401a9ce0213e66e6fabace56a562c1e->enter($__internal_6e69600a9f38f5c82e20825a166201551401a9ce0213e66e6fabace56a562c1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_0b1541b8952d162f11c2e1b3cdaac06087a8cfac738443649d43a0971c8ff8f8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b1541b8952d162f11c2e1b3cdaac06087a8cfac738443649d43a0971c8ff8f8->enter($__internal_0b1541b8952d162f11c2e1b3cdaac06087a8cfac738443649d43a0971c8ff8f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        echo " ";
        
        $__internal_0b1541b8952d162f11c2e1b3cdaac06087a8cfac738443649d43a0971c8ff8f8->leave($__internal_0b1541b8952d162f11c2e1b3cdaac06087a8cfac738443649d43a0971c8ff8f8_prof);

        
        $__internal_6e69600a9f38f5c82e20825a166201551401a9ce0213e66e6fabace56a562c1e->leave($__internal_6e69600a9f38f5c82e20825a166201551401a9ce0213e66e6fabace56a562c1e_prof);

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
        return array (  132 => 34,  114 => 4,  101 => 39,  99 => 38,  94 => 35,  92 => 34,  87 => 31,  85 => 30,  76 => 24,  70 => 21,  61 => 16,  56 => 13,  52 => 12,  48 => 11,  41 => 8,  36 => 5,  32 => 4,  27 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Snakes_ladders_game!{% endblock %}</title>
        <script src=\"{{asset('js/jquery-3.1.1.min.js')}}\"></script>

        {# Create the favicon icon #}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\">

        <!-- Bootstrap CSS, theme and JS -->
        <link rel=\"stylesheet\" href=\"{{ asset('css/bootstrap.min.css')}}\">
        <link rel=\"stylesheet\" href=\"{{ asset('css/bootstrap-theme.min.css')}}\">
        <script src=\"{{ asset('js/bootstrap.min.js')}}\" ></script>

        {#correlation with the css file#}
        <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('css/style.css')}}\" >

        <!- on ne peut pas utiliser twig dans le fichier externe style.css, alors on rajoute ci dessous les styles utilisant twig -->
        <style>
            body {
                background-image: url({{ asset('images/ferme.png') }});
            }
            #plateau-overlay {
                background-image: url({{ asset('images/board.png') }});
            }
        </style>
    </head>
    <body>
        <header>
            {% include 'AppBundle:Default:_header.html.twig' %}
        </header>

        <div id=\"mainContent\">
            {% block content %} {% endblock %}
        </div>

        <footer>
            {% include 'AppBundle:Default:_footer.html.twig' %}
        </footer>
    </body>
</html>
", "@App/base.html.twig", "C:\\www\\Web2\\src\\AppBundle\\Resources\\views\\base.html.twig");
    }
}
