<?php

/* WebProfilerBundle:Collector:ajax.html.twig */
class __TwigTemplate_241906b11f803f080a874a9c8c0e998510e8ebf583454ce878d49508fd577c67 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_33b47b90917b959824102402cbbc62cf22eeb41e033d9b3541fca18193f15466 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_33b47b90917b959824102402cbbc62cf22eeb41e033d9b3541fca18193f15466->enter($__internal_33b47b90917b959824102402cbbc62cf22eeb41e033d9b3541fca18193f15466_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:ajax.html.twig"));

        $__internal_8812e64cc943087326b56ffd9c7913c41d264a1274ce4bdf91df6c626d90d560 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8812e64cc943087326b56ffd9c7913c41d264a1274ce4bdf91df6c626d90d560->enter($__internal_8812e64cc943087326b56ffd9c7913c41d264a1274ce4bdf91df6c626d90d560_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_33b47b90917b959824102402cbbc62cf22eeb41e033d9b3541fca18193f15466->leave($__internal_33b47b90917b959824102402cbbc62cf22eeb41e033d9b3541fca18193f15466_prof);

        
        $__internal_8812e64cc943087326b56ffd9c7913c41d264a1274ce4bdf91df6c626d90d560->leave($__internal_8812e64cc943087326b56ffd9c7913c41d264a1274ce4bdf91df6c626d90d560_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_c50bc58e29c178ac477880f114390ba03c9526a377eecd2228d5d8e4f2baf65a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c50bc58e29c178ac477880f114390ba03c9526a377eecd2228d5d8e4f2baf65a->enter($__internal_c50bc58e29c178ac477880f114390ba03c9526a377eecd2228d5d8e4f2baf65a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_9d05256599294c6422cfd6c8cd13d9adacab5b7b732a70b810266ee57242ad65 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d05256599294c6422cfd6c8cd13d9adacab5b7b732a70b810266ee57242ad65->enter($__internal_9d05256599294c6422cfd6c8cd13d9adacab5b7b732a70b810266ee57242ad65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-requests\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_9d05256599294c6422cfd6c8cd13d9adacab5b7b732a70b810266ee57242ad65->leave($__internal_9d05256599294c6422cfd6c8cd13d9adacab5b7b732a70b810266ee57242ad65_prof);

        
        $__internal_c50bc58e29c178ac477880f114390ba03c9526a377eecd2228d5d8e4f2baf65a->leave($__internal_c50bc58e29c178ac477880f114390ba03c9526a377eecd2228d5d8e4f2baf65a_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
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

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-requests\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "WebProfilerBundle:Collector:ajax.html.twig", "C:\\www\\Web2\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}
