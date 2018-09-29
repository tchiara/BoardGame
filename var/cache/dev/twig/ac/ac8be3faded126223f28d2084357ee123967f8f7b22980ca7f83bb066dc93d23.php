<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_60b558f13f212622b71429dd386fc723affe025f7fe41bce03aef6d62d5c4bda extends Twig_Template
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
        $__internal_c7e0f351bc6ed2af5940b1cbd29d1676134252bebcf992549dca9e8636e46c68 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c7e0f351bc6ed2af5940b1cbd29d1676134252bebcf992549dca9e8636e46c68->enter($__internal_c7e0f351bc6ed2af5940b1cbd29d1676134252bebcf992549dca9e8636e46c68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_23055c409b6178cd5076f09e3d95adef9b79acb59fee79c5ea794dd5c92aa8ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_23055c409b6178cd5076f09e3d95adef9b79acb59fee79c5ea794dd5c92aa8ee->enter($__internal_23055c409b6178cd5076f09e3d95adef9b79acb59fee79c5ea794dd5c92aa8ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c7e0f351bc6ed2af5940b1cbd29d1676134252bebcf992549dca9e8636e46c68->leave($__internal_c7e0f351bc6ed2af5940b1cbd29d1676134252bebcf992549dca9e8636e46c68_prof);

        
        $__internal_23055c409b6178cd5076f09e3d95adef9b79acb59fee79c5ea794dd5c92aa8ee->leave($__internal_23055c409b6178cd5076f09e3d95adef9b79acb59fee79c5ea794dd5c92aa8ee_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_dc837a821255b8c7d96ba24a5cf1bba9927c2d00c340f82b2aa29f3b170c3d52 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dc837a821255b8c7d96ba24a5cf1bba9927c2d00c340f82b2aa29f3b170c3d52->enter($__internal_dc837a821255b8c7d96ba24a5cf1bba9927c2d00c340f82b2aa29f3b170c3d52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_d12dfb8deca1daecc6de213d85c385ba547fdc596ec0ec4b9b395325bc8c4797 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d12dfb8deca1daecc6de213d85c385ba547fdc596ec0ec4b9b395325bc8c4797->enter($__internal_d12dfb8deca1daecc6de213d85c385ba547fdc596ec0ec4b9b395325bc8c4797_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_d12dfb8deca1daecc6de213d85c385ba547fdc596ec0ec4b9b395325bc8c4797->leave($__internal_d12dfb8deca1daecc6de213d85c385ba547fdc596ec0ec4b9b395325bc8c4797_prof);

        
        $__internal_dc837a821255b8c7d96ba24a5cf1bba9927c2d00c340f82b2aa29f3b170c3d52->leave($__internal_dc837a821255b8c7d96ba24a5cf1bba9927c2d00c340f82b2aa29f3b170c3d52_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_ce787a51c114e745841bc129972eb9df0ef4e55586cad9d1e12f766715bc4803 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ce787a51c114e745841bc129972eb9df0ef4e55586cad9d1e12f766715bc4803->enter($__internal_ce787a51c114e745841bc129972eb9df0ef4e55586cad9d1e12f766715bc4803_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_ac58e93fd4d2f0e761c441585d5d648e389c232d762174ea60e7e6585e66fd0f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ac58e93fd4d2f0e761c441585d5d648e389c232d762174ea60e7e6585e66fd0f->enter($__internal_ac58e93fd4d2f0e761c441585d5d648e389c232d762174ea60e7e6585e66fd0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_ac58e93fd4d2f0e761c441585d5d648e389c232d762174ea60e7e6585e66fd0f->leave($__internal_ac58e93fd4d2f0e761c441585d5d648e389c232d762174ea60e7e6585e66fd0f_prof);

        
        $__internal_ce787a51c114e745841bc129972eb9df0ef4e55586cad9d1e12f766715bc4803->leave($__internal_ce787a51c114e745841bc129972eb9df0ef4e55586cad9d1e12f766715bc4803_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_c9d2a07232852eabe0a383b83f4dd5d8a720d356feb59fe63e32ec752b9a797a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c9d2a07232852eabe0a383b83f4dd5d8a720d356feb59fe63e32ec752b9a797a->enter($__internal_c9d2a07232852eabe0a383b83f4dd5d8a720d356feb59fe63e32ec752b9a797a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_fa1bc0c96cf48316c2102dbc9f99a2bedd88804caf8e1b8da16a63200166ee5c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fa1bc0c96cf48316c2102dbc9f99a2bedd88804caf8e1b8da16a63200166ee5c->enter($__internal_fa1bc0c96cf48316c2102dbc9f99a2bedd88804caf8e1b8da16a63200166ee5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_fa1bc0c96cf48316c2102dbc9f99a2bedd88804caf8e1b8da16a63200166ee5c->leave($__internal_fa1bc0c96cf48316c2102dbc9f99a2bedd88804caf8e1b8da16a63200166ee5c_prof);

        
        $__internal_c9d2a07232852eabe0a383b83f4dd5d8a720d356feb59fe63e32ec752b9a797a->leave($__internal_c9d2a07232852eabe0a383b83f4dd5d8a720d356feb59fe63e32ec752b9a797a_prof);

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
