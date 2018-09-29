<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_45dce907d27a40e6934735514931f4cfa806c6c8455173bf727c6611838b4700 extends Twig_Template
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
        $__internal_c12b95564b68f6f47fc861e87873174dcbc9bce91313b99b1fb9cba8861d4491 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c12b95564b68f6f47fc861e87873174dcbc9bce91313b99b1fb9cba8861d4491->enter($__internal_c12b95564b68f6f47fc861e87873174dcbc9bce91313b99b1fb9cba8861d4491_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_8dad06675f1922b47401ebcd86cacaea374d237b8449581408e93dc3aea7a7e3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8dad06675f1922b47401ebcd86cacaea374d237b8449581408e93dc3aea7a7e3->enter($__internal_8dad06675f1922b47401ebcd86cacaea374d237b8449581408e93dc3aea7a7e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c12b95564b68f6f47fc861e87873174dcbc9bce91313b99b1fb9cba8861d4491->leave($__internal_c12b95564b68f6f47fc861e87873174dcbc9bce91313b99b1fb9cba8861d4491_prof);

        
        $__internal_8dad06675f1922b47401ebcd86cacaea374d237b8449581408e93dc3aea7a7e3->leave($__internal_8dad06675f1922b47401ebcd86cacaea374d237b8449581408e93dc3aea7a7e3_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_6b17ab5d0a7cb39831f634c49221c4403fa87e365dc0434c51f697f3fbed2fb7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6b17ab5d0a7cb39831f634c49221c4403fa87e365dc0434c51f697f3fbed2fb7->enter($__internal_6b17ab5d0a7cb39831f634c49221c4403fa87e365dc0434c51f697f3fbed2fb7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_4742e3bb6d516ab3abc87ddc84e737333180137285821c515d12ecac6082da92 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4742e3bb6d516ab3abc87ddc84e737333180137285821c515d12ecac6082da92->enter($__internal_4742e3bb6d516ab3abc87ddc84e737333180137285821c515d12ecac6082da92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_4742e3bb6d516ab3abc87ddc84e737333180137285821c515d12ecac6082da92->leave($__internal_4742e3bb6d516ab3abc87ddc84e737333180137285821c515d12ecac6082da92_prof);

        
        $__internal_6b17ab5d0a7cb39831f634c49221c4403fa87e365dc0434c51f697f3fbed2fb7->leave($__internal_6b17ab5d0a7cb39831f634c49221c4403fa87e365dc0434c51f697f3fbed2fb7_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_c0e98e7cad28263a5979aed38370811c3721548e5834a0c2404070371d93550c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c0e98e7cad28263a5979aed38370811c3721548e5834a0c2404070371d93550c->enter($__internal_c0e98e7cad28263a5979aed38370811c3721548e5834a0c2404070371d93550c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_954f446b0b523e9919c9d731a9c2e11a7019ae25f545071611fc35a4a099e9a6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_954f446b0b523e9919c9d731a9c2e11a7019ae25f545071611fc35a4a099e9a6->enter($__internal_954f446b0b523e9919c9d731a9c2e11a7019ae25f545071611fc35a4a099e9a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_954f446b0b523e9919c9d731a9c2e11a7019ae25f545071611fc35a4a099e9a6->leave($__internal_954f446b0b523e9919c9d731a9c2e11a7019ae25f545071611fc35a4a099e9a6_prof);

        
        $__internal_c0e98e7cad28263a5979aed38370811c3721548e5834a0c2404070371d93550c->leave($__internal_c0e98e7cad28263a5979aed38370811c3721548e5834a0c2404070371d93550c_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_45114fb66abbea9a9c518d5e7b30951af38af759f55dc053e5447dacff1945f9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_45114fb66abbea9a9c518d5e7b30951af38af759f55dc053e5447dacff1945f9->enter($__internal_45114fb66abbea9a9c518d5e7b30951af38af759f55dc053e5447dacff1945f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_f6994ee5a5753a17f34b46b92521fbd6b4b3393bc82ea186ce63fd47c1128a39 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f6994ee5a5753a17f34b46b92521fbd6b4b3393bc82ea186ce63fd47c1128a39->enter($__internal_f6994ee5a5753a17f34b46b92521fbd6b4b3393bc82ea186ce63fd47c1128a39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
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
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_f6994ee5a5753a17f34b46b92521fbd6b4b3393bc82ea186ce63fd47c1128a39->leave($__internal_f6994ee5a5753a17f34b46b92521fbd6b4b3393bc82ea186ce63fd47c1128a39_prof);

        
        $__internal_45114fb66abbea9a9c518d5e7b30951af38af759f55dc053e5447dacff1945f9->leave($__internal_45114fb66abbea9a9c518d5e7b30951af38af759f55dc053e5447dacff1945f9_prof);

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
