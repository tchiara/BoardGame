<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_36cb82f75196bf9e4aab021893c45f899aca6e790c49083d9bb97811da40c120 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_deb5603680efd298d66705bf0459a5bf613c3fa9089acdaf9bebae67f56a37e0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_deb5603680efd298d66705bf0459a5bf613c3fa9089acdaf9bebae67f56a37e0->enter($__internal_deb5603680efd298d66705bf0459a5bf613c3fa9089acdaf9bebae67f56a37e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_b8b31079479da5c8f347f8f7a93e363415a89744584c5c3d6f3acc815262f7d6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b8b31079479da5c8f347f8f7a93e363415a89744584c5c3d6f3acc815262f7d6->enter($__internal_b8b31079479da5c8f347f8f7a93e363415a89744584c5c3d6f3acc815262f7d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_deb5603680efd298d66705bf0459a5bf613c3fa9089acdaf9bebae67f56a37e0->leave($__internal_deb5603680efd298d66705bf0459a5bf613c3fa9089acdaf9bebae67f56a37e0_prof);

        
        $__internal_b8b31079479da5c8f347f8f7a93e363415a89744584c5c3d6f3acc815262f7d6->leave($__internal_b8b31079479da5c8f347f8f7a93e363415a89744584c5c3d6f3acc815262f7d6_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_ce4731dfa320870ace607d65dd0536654f1e3cc9bb8abe5b9f058d3bebb433c2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ce4731dfa320870ace607d65dd0536654f1e3cc9bb8abe5b9f058d3bebb433c2->enter($__internal_ce4731dfa320870ace607d65dd0536654f1e3cc9bb8abe5b9f058d3bebb433c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_710b1eb4f7ac4cd601c192cd70ecc7b72fac026913c07114696c995c590033d7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_710b1eb4f7ac4cd601c192cd70ecc7b72fac026913c07114696c995c590033d7->enter($__internal_710b1eb4f7ac4cd601c192cd70ecc7b72fac026913c07114696c995c590033d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_710b1eb4f7ac4cd601c192cd70ecc7b72fac026913c07114696c995c590033d7->leave($__internal_710b1eb4f7ac4cd601c192cd70ecc7b72fac026913c07114696c995c590033d7_prof);

        
        $__internal_ce4731dfa320870ace607d65dd0536654f1e3cc9bb8abe5b9f058d3bebb433c2->leave($__internal_ce4731dfa320870ace607d65dd0536654f1e3cc9bb8abe5b9f058d3bebb433c2_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_37f413616396c70f1c7f62914440717930382986cd8c606c79772262df9968c4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_37f413616396c70f1c7f62914440717930382986cd8c606c79772262df9968c4->enter($__internal_37f413616396c70f1c7f62914440717930382986cd8c606c79772262df9968c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_121c8b02e60725141ca4e5f767c184732e715bc3aae7ddd93a7a2eb7fb9d32b0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_121c8b02e60725141ca4e5f767c184732e715bc3aae7ddd93a7a2eb7fb9d32b0->enter($__internal_121c8b02e60725141ca4e5f767c184732e715bc3aae7ddd93a7a2eb7fb9d32b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_121c8b02e60725141ca4e5f767c184732e715bc3aae7ddd93a7a2eb7fb9d32b0->leave($__internal_121c8b02e60725141ca4e5f767c184732e715bc3aae7ddd93a7a2eb7fb9d32b0_prof);

        
        $__internal_37f413616396c70f1c7f62914440717930382986cd8c606c79772262df9968c4->leave($__internal_37f413616396c70f1c7f62914440717930382986cd8c606c79772262df9968c4_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_0263f03f666471be7560ea47b51492fa2e352eeb19d87eeb4f237ae6912076b6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0263f03f666471be7560ea47b51492fa2e352eeb19d87eeb4f237ae6912076b6->enter($__internal_0263f03f666471be7560ea47b51492fa2e352eeb19d87eeb4f237ae6912076b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_f91a433a4aa6173903f13b7bf3e28ae33d3b7b6d961ffa3bd8d9c4c3c6a17b20 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f91a433a4aa6173903f13b7bf3e28ae33d3b7b6d961ffa3bd8d9c4c3c6a17b20->enter($__internal_f91a433a4aa6173903f13b7bf3e28ae33d3b7b6d961ffa3bd8d9c4c3c6a17b20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_f91a433a4aa6173903f13b7bf3e28ae33d3b7b6d961ffa3bd8d9c4c3c6a17b20->leave($__internal_f91a433a4aa6173903f13b7bf3e28ae33d3b7b6d961ffa3bd8d9c4c3c6a17b20_prof);

        
        $__internal_0263f03f666471be7560ea47b51492fa2e352eeb19d87eeb4f237ae6912076b6->leave($__internal_0263f03f666471be7560ea47b51492fa2e352eeb19d87eeb4f237ae6912076b6_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "C:\\www\\Web2\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
