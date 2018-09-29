<?php

/* @WebProfiler/Profiler/open.html.twig */
class __TwigTemplate_f883b6a7c0dbfac7b8c4653515fe37fe9d3d7508a4afdf9ff4b8c355492cc82b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "@WebProfiler/Profiler/open.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0ff46363e187e0ee4362592d01279be67401baa17b69a6be43bc3b193f4ccdf1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0ff46363e187e0ee4362592d01279be67401baa17b69a6be43bc3b193f4ccdf1->enter($__internal_0ff46363e187e0ee4362592d01279be67401baa17b69a6be43bc3b193f4ccdf1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $__internal_caa1a0e1415644c8c0ba8b14bb63f47d8eefc20b914063dc3db630fcb79f6e5e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_caa1a0e1415644c8c0ba8b14bb63f47d8eefc20b914063dc3db630fcb79f6e5e->enter($__internal_caa1a0e1415644c8c0ba8b14bb63f47d8eefc20b914063dc3db630fcb79f6e5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0ff46363e187e0ee4362592d01279be67401baa17b69a6be43bc3b193f4ccdf1->leave($__internal_0ff46363e187e0ee4362592d01279be67401baa17b69a6be43bc3b193f4ccdf1_prof);

        
        $__internal_caa1a0e1415644c8c0ba8b14bb63f47d8eefc20b914063dc3db630fcb79f6e5e->leave($__internal_caa1a0e1415644c8c0ba8b14bb63f47d8eefc20b914063dc3db630fcb79f6e5e_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_64ab4b788f8d60121643c6963be92213ee978721774790ee7c9adba8a4889360 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_64ab4b788f8d60121643c6963be92213ee978721774790ee7c9adba8a4889360->enter($__internal_64ab4b788f8d60121643c6963be92213ee978721774790ee7c9adba8a4889360_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_5248e15f40f805868bfc923cb70b680a6834e7ba2b4b93b292c83f57274fb39a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5248e15f40f805868bfc923cb70b680a6834e7ba2b4b93b292c83f57274fb39a->enter($__internal_5248e15f40f805868bfc923cb70b680a6834e7ba2b4b93b292c83f57274fb39a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_5248e15f40f805868bfc923cb70b680a6834e7ba2b4b93b292c83f57274fb39a->leave($__internal_5248e15f40f805868bfc923cb70b680a6834e7ba2b4b93b292c83f57274fb39a_prof);

        
        $__internal_64ab4b788f8d60121643c6963be92213ee978721774790ee7c9adba8a4889360->leave($__internal_64ab4b788f8d60121643c6963be92213ee978721774790ee7c9adba8a4889360_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_9d744733ee92771a5e13a569a4ced590d5ac0ef36bad418c90d0336b2958dd5d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9d744733ee92771a5e13a569a4ced590d5ac0ef36bad418c90d0336b2958dd5d->enter($__internal_9d744733ee92771a5e13a569a4ced590d5ac0ef36bad418c90d0336b2958dd5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_6906b6673457fb1c715b065cc9c348347613a37b93081b6ef446922c372d36c8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6906b6673457fb1c715b065cc9c348347613a37b93081b6ef446922c372d36c8->enter($__internal_6906b6673457fb1c715b065cc9c348347613a37b93081b6ef446922c372d36c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<div class=\"header\">
    <h1>";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["file"]) ? $context["file"] : $this->getContext($context, "file")), "html", null, true);
        echo " <small>line ";
        echo twig_escape_filter($this->env, (isset($context["line"]) ? $context["line"] : $this->getContext($context, "line")), "html", null, true);
        echo "</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/";
        // line 12
        echo twig_escape_filter($this->env, twig_constant("Symfony\\Component\\HttpKernel\\Kernel::VERSION"), "html", null, true);
        echo "/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->fileExcerpt((isset($context["filename"]) ? $context["filename"] : $this->getContext($context, "filename")), (isset($context["line"]) ? $context["line"] : $this->getContext($context, "line")),  -1);
        echo "
</div>
";
        
        $__internal_6906b6673457fb1c715b065cc9c348347613a37b93081b6ef446922c372d36c8->leave($__internal_6906b6673457fb1c715b065cc9c348347613a37b93081b6ef446922c372d36c8_prof);

        
        $__internal_9d744733ee92771a5e13a569a4ced590d5ac0ef36bad418c90d0336b2958dd5d->leave($__internal_9d744733ee92771a5e13a569a4ced590d5ac0ef36bad418c90d0336b2958dd5d_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/open.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 15,  84 => 12,  78 => 11,  75 => 10,  66 => 9,  53 => 5,  50 => 4,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/base.html.twig' %}

{% block head %}
    <style>
        {{ include('@WebProfiler/Profiler/open.css.twig') }}
    </style>
{% endblock %}

{% block body %}
<div class=\"header\">
    <h1>{{ file }} <small>line {{ line }}</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/{{ constant('Symfony\\\\Component\\\\HttpKernel\\\\Kernel::VERSION') }}/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    {{ filename|file_excerpt(line, -1) }}
</div>
{% endblock %}
", "@WebProfiler/Profiler/open.html.twig", "C:\\www\\Web2\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\open.html.twig");
    }
}
