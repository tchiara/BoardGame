<?php

/* ::base.html.twig */
class __TwigTemplate_3ea59ae5df692ebf5ad296f987e9a2f56f8e14ea50d3bb5fece9bed50b91a10a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_21c8c0c0d5259812ee6497887f24454f4f98bd3893f9a711b9b096d5305047e2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_21c8c0c0d5259812ee6497887f24454f4f98bd3893f9a711b9b096d5305047e2->enter($__internal_21c8c0c0d5259812ee6497887f24454f4f98bd3893f9a711b9b096d5305047e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        $__internal_24e3c2e636a75ec741206674d1a96b063f016e019a03707e04ac76db8feac4a0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_24e3c2e636a75ec741206674d1a96b063f016e019a03707e04ac76db8feac4a0->enter($__internal_24e3c2e636a75ec741206674d1a96b063f016e019a03707e04ac76db8feac4a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_21c8c0c0d5259812ee6497887f24454f4f98bd3893f9a711b9b096d5305047e2->leave($__internal_21c8c0c0d5259812ee6497887f24454f4f98bd3893f9a711b9b096d5305047e2_prof);

        
        $__internal_24e3c2e636a75ec741206674d1a96b063f016e019a03707e04ac76db8feac4a0->leave($__internal_24e3c2e636a75ec741206674d1a96b063f016e019a03707e04ac76db8feac4a0_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_1d61c2e85e831114d5985cd59589f749467ca15c0d39a189981296f78692254f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1d61c2e85e831114d5985cd59589f749467ca15c0d39a189981296f78692254f->enter($__internal_1d61c2e85e831114d5985cd59589f749467ca15c0d39a189981296f78692254f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_c58af71ea614a678f17897a35b427b6c4b46c0419e4c2e0f6da848c72a0d57d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c58af71ea614a678f17897a35b427b6c4b46c0419e4c2e0f6da848c72a0d57d5->enter($__internal_c58af71ea614a678f17897a35b427b6c4b46c0419e4c2e0f6da848c72a0d57d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_c58af71ea614a678f17897a35b427b6c4b46c0419e4c2e0f6da848c72a0d57d5->leave($__internal_c58af71ea614a678f17897a35b427b6c4b46c0419e4c2e0f6da848c72a0d57d5_prof);

        
        $__internal_1d61c2e85e831114d5985cd59589f749467ca15c0d39a189981296f78692254f->leave($__internal_1d61c2e85e831114d5985cd59589f749467ca15c0d39a189981296f78692254f_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_7e98b5e20f27bceed51cae639abcbb54d23f8e3861e2929c4e010eafbcf91740 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7e98b5e20f27bceed51cae639abcbb54d23f8e3861e2929c4e010eafbcf91740->enter($__internal_7e98b5e20f27bceed51cae639abcbb54d23f8e3861e2929c4e010eafbcf91740_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_5ba7f06e743fd53d30146f7508bd9e523a4bd8609d25368fe99400559e8ddc68 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5ba7f06e743fd53d30146f7508bd9e523a4bd8609d25368fe99400559e8ddc68->enter($__internal_5ba7f06e743fd53d30146f7508bd9e523a4bd8609d25368fe99400559e8ddc68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_5ba7f06e743fd53d30146f7508bd9e523a4bd8609d25368fe99400559e8ddc68->leave($__internal_5ba7f06e743fd53d30146f7508bd9e523a4bd8609d25368fe99400559e8ddc68_prof);

        
        $__internal_7e98b5e20f27bceed51cae639abcbb54d23f8e3861e2929c4e010eafbcf91740->leave($__internal_7e98b5e20f27bceed51cae639abcbb54d23f8e3861e2929c4e010eafbcf91740_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_db9a055600e98b7e021be8f6f5ab8a89df565d88e81382dcae17f40842ea6d19 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_db9a055600e98b7e021be8f6f5ab8a89df565d88e81382dcae17f40842ea6d19->enter($__internal_db9a055600e98b7e021be8f6f5ab8a89df565d88e81382dcae17f40842ea6d19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_9dbc1288932571696b96162b32feb4e291dd2e51837c227906240f8dee04eed1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9dbc1288932571696b96162b32feb4e291dd2e51837c227906240f8dee04eed1->enter($__internal_9dbc1288932571696b96162b32feb4e291dd2e51837c227906240f8dee04eed1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_9dbc1288932571696b96162b32feb4e291dd2e51837c227906240f8dee04eed1->leave($__internal_9dbc1288932571696b96162b32feb4e291dd2e51837c227906240f8dee04eed1_prof);

        
        $__internal_db9a055600e98b7e021be8f6f5ab8a89df565d88e81382dcae17f40842ea6d19->leave($__internal_db9a055600e98b7e021be8f6f5ab8a89df565d88e81382dcae17f40842ea6d19_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_ce5063f3dc7a7c4cfdcc465e8a9c160a98f6a010f99b13465787a057d1955f22 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ce5063f3dc7a7c4cfdcc465e8a9c160a98f6a010f99b13465787a057d1955f22->enter($__internal_ce5063f3dc7a7c4cfdcc465e8a9c160a98f6a010f99b13465787a057d1955f22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_8bab8b912612dd7c2dfd1721f4d36903d46d9df1a564fa44adda0010005bd34c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8bab8b912612dd7c2dfd1721f4d36903d46d9df1a564fa44adda0010005bd34c->enter($__internal_8bab8b912612dd7c2dfd1721f4d36903d46d9df1a564fa44adda0010005bd34c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_8bab8b912612dd7c2dfd1721f4d36903d46d9df1a564fa44adda0010005bd34c->leave($__internal_8bab8b912612dd7c2dfd1721f4d36903d46d9df1a564fa44adda0010005bd34c_prof);

        
        $__internal_ce5063f3dc7a7c4cfdcc465e8a9c160a98f6a010f99b13465787a057d1955f22->leave($__internal_ce5063f3dc7a7c4cfdcc465e8a9c160a98f6a010f99b13465787a057d1955f22_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 11,  100 => 10,  83 => 6,  65 => 5,  53 => 12,  50 => 11,  48 => 10,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "::base.html.twig", "C:\\www\\Web2\\app/Resources\\views/base.html.twig");
    }
}
