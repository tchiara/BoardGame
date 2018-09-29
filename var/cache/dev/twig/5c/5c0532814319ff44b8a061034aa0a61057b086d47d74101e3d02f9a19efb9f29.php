<?php

/* WebProfilerBundle:Profiler:open.html.twig */
class __TwigTemplate_057478bdcf90d85b8ea886c8d9f2b01914788a473d36bee6b30bb02cdcf387ad extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "WebProfilerBundle:Profiler:open.html.twig", 1);
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
        $__internal_fcae76a5bc1b8aca46871f407243a21149ed74e1305589f9d627a40ca0175dad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fcae76a5bc1b8aca46871f407243a21149ed74e1305589f9d627a40ca0175dad->enter($__internal_fcae76a5bc1b8aca46871f407243a21149ed74e1305589f9d627a40ca0175dad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $__internal_d483573b70350fdfedbe9a1aa4c1b904f0330736ffe30e5ac156d3250dc0a93e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d483573b70350fdfedbe9a1aa4c1b904f0330736ffe30e5ac156d3250dc0a93e->enter($__internal_d483573b70350fdfedbe9a1aa4c1b904f0330736ffe30e5ac156d3250dc0a93e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fcae76a5bc1b8aca46871f407243a21149ed74e1305589f9d627a40ca0175dad->leave($__internal_fcae76a5bc1b8aca46871f407243a21149ed74e1305589f9d627a40ca0175dad_prof);

        
        $__internal_d483573b70350fdfedbe9a1aa4c1b904f0330736ffe30e5ac156d3250dc0a93e->leave($__internal_d483573b70350fdfedbe9a1aa4c1b904f0330736ffe30e5ac156d3250dc0a93e_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_97da953863cc11a4121e9901bd0e395498b5b487fbc154c71a22ae6559f28924 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_97da953863cc11a4121e9901bd0e395498b5b487fbc154c71a22ae6559f28924->enter($__internal_97da953863cc11a4121e9901bd0e395498b5b487fbc154c71a22ae6559f28924_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_3f9976d82b90679d0a10bd61bd233836f94321c2acb5db581ed164390409924c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3f9976d82b90679d0a10bd61bd233836f94321c2acb5db581ed164390409924c->enter($__internal_3f9976d82b90679d0a10bd61bd233836f94321c2acb5db581ed164390409924c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_3f9976d82b90679d0a10bd61bd233836f94321c2acb5db581ed164390409924c->leave($__internal_3f9976d82b90679d0a10bd61bd233836f94321c2acb5db581ed164390409924c_prof);

        
        $__internal_97da953863cc11a4121e9901bd0e395498b5b487fbc154c71a22ae6559f28924->leave($__internal_97da953863cc11a4121e9901bd0e395498b5b487fbc154c71a22ae6559f28924_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_68e87ebd8fa58c6753fc227b4da05f05c7cdd47f90bb390cac97cfffcabe89b8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_68e87ebd8fa58c6753fc227b4da05f05c7cdd47f90bb390cac97cfffcabe89b8->enter($__internal_68e87ebd8fa58c6753fc227b4da05f05c7cdd47f90bb390cac97cfffcabe89b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_7dd558ce754fca769cf9856b7f26d18e22083d476308f2cd3f086c8a71cc99da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7dd558ce754fca769cf9856b7f26d18e22083d476308f2cd3f086c8a71cc99da->enter($__internal_7dd558ce754fca769cf9856b7f26d18e22083d476308f2cd3f086c8a71cc99da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_7dd558ce754fca769cf9856b7f26d18e22083d476308f2cd3f086c8a71cc99da->leave($__internal_7dd558ce754fca769cf9856b7f26d18e22083d476308f2cd3f086c8a71cc99da_prof);

        
        $__internal_68e87ebd8fa58c6753fc227b4da05f05c7cdd47f90bb390cac97cfffcabe89b8->leave($__internal_68e87ebd8fa58c6753fc227b4da05f05c7cdd47f90bb390cac97cfffcabe89b8_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:open.html.twig";
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
", "WebProfilerBundle:Profiler:open.html.twig", "C:\\www\\Web2\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/open.html.twig");
    }
}
