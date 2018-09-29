<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_0407d5f2dbe15f52dc2a268045508202bec27dad657e8d8ad357a809b0cb6f3a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_5326f1a840fcd9068b3b842f4d3e1eb6b11aff4fb37f3c9a6e2b2201d6f83b99 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5326f1a840fcd9068b3b842f4d3e1eb6b11aff4fb37f3c9a6e2b2201d6f83b99->enter($__internal_5326f1a840fcd9068b3b842f4d3e1eb6b11aff4fb37f3c9a6e2b2201d6f83b99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_9c8278a0dcbfbdb54a023d9eed0cae5805ace418f21d6ceade6842a4d59b16f4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9c8278a0dcbfbdb54a023d9eed0cae5805ace418f21d6ceade6842a4d59b16f4->enter($__internal_9c8278a0dcbfbdb54a023d9eed0cae5805ace418f21d6ceade6842a4d59b16f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5326f1a840fcd9068b3b842f4d3e1eb6b11aff4fb37f3c9a6e2b2201d6f83b99->leave($__internal_5326f1a840fcd9068b3b842f4d3e1eb6b11aff4fb37f3c9a6e2b2201d6f83b99_prof);

        
        $__internal_9c8278a0dcbfbdb54a023d9eed0cae5805ace418f21d6ceade6842a4d59b16f4->leave($__internal_9c8278a0dcbfbdb54a023d9eed0cae5805ace418f21d6ceade6842a4d59b16f4_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_bf226a0c3f3fc8990494bf266614f6c738a547a5f82ab4f35c140488b9c01065 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bf226a0c3f3fc8990494bf266614f6c738a547a5f82ab4f35c140488b9c01065->enter($__internal_bf226a0c3f3fc8990494bf266614f6c738a547a5f82ab4f35c140488b9c01065_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_272d89d596abb21627714b2a43c802fc87d6bd02377a04b3854baa9d1e4445e3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_272d89d596abb21627714b2a43c802fc87d6bd02377a04b3854baa9d1e4445e3->enter($__internal_272d89d596abb21627714b2a43c802fc87d6bd02377a04b3854baa9d1e4445e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_272d89d596abb21627714b2a43c802fc87d6bd02377a04b3854baa9d1e4445e3->leave($__internal_272d89d596abb21627714b2a43c802fc87d6bd02377a04b3854baa9d1e4445e3_prof);

        
        $__internal_bf226a0c3f3fc8990494bf266614f6c738a547a5f82ab4f35c140488b9c01065->leave($__internal_bf226a0c3f3fc8990494bf266614f6c738a547a5f82ab4f35c140488b9c01065_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_aff72f11146064ef3729b88df37e0490247b15bd0f46e51f4b25590ee8070fee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aff72f11146064ef3729b88df37e0490247b15bd0f46e51f4b25590ee8070fee->enter($__internal_aff72f11146064ef3729b88df37e0490247b15bd0f46e51f4b25590ee8070fee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_425a393dd3eefa3582065b1b1464a019aa07877af3e5120a6d16e2c7be673cb1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_425a393dd3eefa3582065b1b1464a019aa07877af3e5120a6d16e2c7be673cb1->enter($__internal_425a393dd3eefa3582065b1b1464a019aa07877af3e5120a6d16e2c7be673cb1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_425a393dd3eefa3582065b1b1464a019aa07877af3e5120a6d16e2c7be673cb1->leave($__internal_425a393dd3eefa3582065b1b1464a019aa07877af3e5120a6d16e2c7be673cb1_prof);

        
        $__internal_aff72f11146064ef3729b88df37e0490247b15bd0f46e51f4b25590ee8070fee->leave($__internal_aff72f11146064ef3729b88df37e0490247b15bd0f46e51f4b25590ee8070fee_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_088e1a422393b41b9a35b9032d4a422b5419a25abd94b1eb6b211de9dc6d2612 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_088e1a422393b41b9a35b9032d4a422b5419a25abd94b1eb6b211de9dc6d2612->enter($__internal_088e1a422393b41b9a35b9032d4a422b5419a25abd94b1eb6b211de9dc6d2612_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_9fa9ce47011d1538e03f7c9165969d01fe1a3ce01485df12463913c07d8c2697 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9fa9ce47011d1538e03f7c9165969d01fe1a3ce01485df12463913c07d8c2697->enter($__internal_9fa9ce47011d1538e03f7c9165969d01fe1a3ce01485df12463913c07d8c2697_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_9fa9ce47011d1538e03f7c9165969d01fe1a3ce01485df12463913c07d8c2697->leave($__internal_9fa9ce47011d1538e03f7c9165969d01fe1a3ce01485df12463913c07d8c2697_prof);

        
        $__internal_088e1a422393b41b9a35b9032d4a422b5419a25abd94b1eb6b211de9dc6d2612->leave($__internal_088e1a422393b41b9a35b9032d4a422b5419a25abd94b1eb6b211de9dc6d2612_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "C:\\www\\Web2\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\exception.html.twig");
    }
}
