<?php

/* WebProfilerBundle:Collector:exception.html.twig */
class __TwigTemplate_b61b6d4b2311c6a1b78b3f98bdff4cbcf7218a103aabcdd7a573ad5b5daaf7e8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:exception.html.twig", 1);
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
        $__internal_933a53e078e5bbdb1ea6831f9d0002d79d810a2c010709a8d3d1de7d2e695f8a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_933a53e078e5bbdb1ea6831f9d0002d79d810a2c010709a8d3d1de7d2e695f8a->enter($__internal_933a53e078e5bbdb1ea6831f9d0002d79d810a2c010709a8d3d1de7d2e695f8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $__internal_44295c968d09d6249da249923e84aa70e95bc19699fdf78769335ff6a2918204 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_44295c968d09d6249da249923e84aa70e95bc19699fdf78769335ff6a2918204->enter($__internal_44295c968d09d6249da249923e84aa70e95bc19699fdf78769335ff6a2918204_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_933a53e078e5bbdb1ea6831f9d0002d79d810a2c010709a8d3d1de7d2e695f8a->leave($__internal_933a53e078e5bbdb1ea6831f9d0002d79d810a2c010709a8d3d1de7d2e695f8a_prof);

        
        $__internal_44295c968d09d6249da249923e84aa70e95bc19699fdf78769335ff6a2918204->leave($__internal_44295c968d09d6249da249923e84aa70e95bc19699fdf78769335ff6a2918204_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_b58cb6a8a1e2de969d9a6af5b8c7ecd7ba0c1edf843e88ba0fdaeb01db50a24f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b58cb6a8a1e2de969d9a6af5b8c7ecd7ba0c1edf843e88ba0fdaeb01db50a24f->enter($__internal_b58cb6a8a1e2de969d9a6af5b8c7ecd7ba0c1edf843e88ba0fdaeb01db50a24f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_2da42e32f11bf2244a409a97755fe0c710a8680e6d52f601360d1a3a3ead80b6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2da42e32f11bf2244a409a97755fe0c710a8680e6d52f601360d1a3a3ead80b6->enter($__internal_2da42e32f11bf2244a409a97755fe0c710a8680e6d52f601360d1a3a3ead80b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_2da42e32f11bf2244a409a97755fe0c710a8680e6d52f601360d1a3a3ead80b6->leave($__internal_2da42e32f11bf2244a409a97755fe0c710a8680e6d52f601360d1a3a3ead80b6_prof);

        
        $__internal_b58cb6a8a1e2de969d9a6af5b8c7ecd7ba0c1edf843e88ba0fdaeb01db50a24f->leave($__internal_b58cb6a8a1e2de969d9a6af5b8c7ecd7ba0c1edf843e88ba0fdaeb01db50a24f_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_25d047cbe9180af5b85d2f4045da774a55959c32dc5c481075f9c50723558fb8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_25d047cbe9180af5b85d2f4045da774a55959c32dc5c481075f9c50723558fb8->enter($__internal_25d047cbe9180af5b85d2f4045da774a55959c32dc5c481075f9c50723558fb8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_44d9c818fe8c189d10f31886083981f45347c246c63a40f9993edcbe2547b591 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_44d9c818fe8c189d10f31886083981f45347c246c63a40f9993edcbe2547b591->enter($__internal_44d9c818fe8c189d10f31886083981f45347c246c63a40f9993edcbe2547b591_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_44d9c818fe8c189d10f31886083981f45347c246c63a40f9993edcbe2547b591->leave($__internal_44d9c818fe8c189d10f31886083981f45347c246c63a40f9993edcbe2547b591_prof);

        
        $__internal_25d047cbe9180af5b85d2f4045da774a55959c32dc5c481075f9c50723558fb8->leave($__internal_25d047cbe9180af5b85d2f4045da774a55959c32dc5c481075f9c50723558fb8_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_005263965e6e8a93ad0b2a38eb09064375c82b2fa91de50e65824e1105f7d21a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_005263965e6e8a93ad0b2a38eb09064375c82b2fa91de50e65824e1105f7d21a->enter($__internal_005263965e6e8a93ad0b2a38eb09064375c82b2fa91de50e65824e1105f7d21a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_a971c86130a14ac48b68d8c89e72fb24df1a389a4754a7e5d9810e5fdb2a4d03 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a971c86130a14ac48b68d8c89e72fb24df1a389a4754a7e5d9810e5fdb2a4d03->enter($__internal_a971c86130a14ac48b68d8c89e72fb24df1a389a4754a7e5d9810e5fdb2a4d03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_a971c86130a14ac48b68d8c89e72fb24df1a389a4754a7e5d9810e5fdb2a4d03->leave($__internal_a971c86130a14ac48b68d8c89e72fb24df1a389a4754a7e5d9810e5fdb2a4d03_prof);

        
        $__internal_005263965e6e8a93ad0b2a38eb09064375c82b2fa91de50e65824e1105f7d21a->leave($__internal_005263965e6e8a93ad0b2a38eb09064375c82b2fa91de50e65824e1105f7d21a_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.html.twig";
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
", "WebProfilerBundle:Collector:exception.html.twig", "C:\\www\\Web2\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
