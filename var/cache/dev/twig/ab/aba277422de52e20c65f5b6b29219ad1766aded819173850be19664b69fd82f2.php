<?php

/* @WebProfiler/Profiler/info.html.twig */
class __TwigTemplate_f4e1a530875719e2a321231d3e9ebcc2435b31852ba14835009c158ce5499c84 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Profiler/info.html.twig", 1);
        $this->blocks = array(
            'summary' => array($this, 'block_summary'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2a00d8833cb5d971cbbfd0e3b35edef4a94aac4368d0f0dddc6b3999ff0d1ffd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2a00d8833cb5d971cbbfd0e3b35edef4a94aac4368d0f0dddc6b3999ff0d1ffd->enter($__internal_2a00d8833cb5d971cbbfd0e3b35edef4a94aac4368d0f0dddc6b3999ff0d1ffd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/info.html.twig"));

        $__internal_dcd2d8a49d0b5f96cf41c0ce4df37f63cb7be8a013a4f5047076b9a0f8f2a159 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dcd2d8a49d0b5f96cf41c0ce4df37f63cb7be8a013a4f5047076b9a0f8f2a159->enter($__internal_dcd2d8a49d0b5f96cf41c0ce4df37f63cb7be8a013a4f5047076b9a0f8f2a159_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/info.html.twig"));

        // line 3
        $context["messages"] = array("purge" => array("status" => "success", "title" => "The profiler database was purged successfully", "message" => "Now you need to browse some pages with the Symfony Profiler enabled to collect data."), "no_token" => array("status" => "error", "title" => (((((        // line 11
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 12
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))), "upload_error" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "No file given or the file was not uploaded successfully."), "already_exists" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "The token already exists in the database."));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2a00d8833cb5d971cbbfd0e3b35edef4a94aac4368d0f0dddc6b3999ff0d1ffd->leave($__internal_2a00d8833cb5d971cbbfd0e3b35edef4a94aac4368d0f0dddc6b3999ff0d1ffd_prof);

        
        $__internal_dcd2d8a49d0b5f96cf41c0ce4df37f63cb7be8a013a4f5047076b9a0f8f2a159->leave($__internal_dcd2d8a49d0b5f96cf41c0ce4df37f63cb7be8a013a4f5047076b9a0f8f2a159_prof);

    }

    // line 26
    public function block_summary($context, array $blocks = array())
    {
        $__internal_2409d2d6fe6c45252638406b992c70a3ceef60c5168f599593f1828c60290c07 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2409d2d6fe6c45252638406b992c70a3ceef60c5168f599593f1828c60290c07->enter($__internal_2409d2d6fe6c45252638406b992c70a3ceef60c5168f599593f1828c60290c07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_839078ac3c874ae8bdb9d05d17afe6a8261bcb6874df3728862abbf528c17d6f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_839078ac3c874ae8bdb9d05d17afe6a8261bcb6874df3728862abbf528c17d6f->enter($__internal_839078ac3c874ae8bdb9d05d17afe6a8261bcb6874df3728862abbf528c17d6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        // line 27
        echo "    <div class=\"status status-";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "status", array()), "html", null, true);
        echo "\">
        <div class=\"container\">
            <h2>";
        // line 29
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "status", array())), "html", null, true);
        echo "</h2>
        </div>
    </div>
";
        
        $__internal_839078ac3c874ae8bdb9d05d17afe6a8261bcb6874df3728862abbf528c17d6f->leave($__internal_839078ac3c874ae8bdb9d05d17afe6a8261bcb6874df3728862abbf528c17d6f_prof);

        
        $__internal_2409d2d6fe6c45252638406b992c70a3ceef60c5168f599593f1828c60290c07->leave($__internal_2409d2d6fe6c45252638406b992c70a3ceef60c5168f599593f1828c60290c07_prof);

    }

    // line 34
    public function block_panel($context, array $blocks = array())
    {
        $__internal_a2a844ddb929c4a9e7f7b625b760b3bf93502351400fe20637cb55614c944dfe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a2a844ddb929c4a9e7f7b625b760b3bf93502351400fe20637cb55614c944dfe->enter($__internal_a2a844ddb929c4a9e7f7b625b760b3bf93502351400fe20637cb55614c944dfe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_0ef81bbe13d04eb3fd7b1ae16fd7a516201e6a8a3bb02912bdfd5e079563d3f6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0ef81bbe13d04eb3fd7b1ae16fd7a516201e6a8a3bb02912bdfd5e079563d3f6->enter($__internal_0ef81bbe13d04eb3fd7b1ae16fd7a516201e6a8a3bb02912bdfd5e079563d3f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 35
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_0ef81bbe13d04eb3fd7b1ae16fd7a516201e6a8a3bb02912bdfd5e079563d3f6->leave($__internal_0ef81bbe13d04eb3fd7b1ae16fd7a516201e6a8a3bb02912bdfd5e079563d3f6_prof);

        
        $__internal_a2a844ddb929c4a9e7f7b625b760b3bf93502351400fe20637cb55614c944dfe->leave($__internal_a2a844ddb929c4a9e7f7b625b760b3bf93502351400fe20637cb55614c944dfe_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 36,  84 => 35,  75 => 34,  61 => 29,  55 => 27,  46 => 26,  36 => 1,  34 => 12,  33 => 11,  32 => 3,  11 => 1,);
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

{% set messages = {
    'purge' : {
        status:  'success',
        title:   'The profiler database was purged successfully',
        message: 'Now you need to browse some pages with the Symfony Profiler enabled to collect data.'
    },
    'no_token' : {
        status:  'error',
        title:   (token|default('') == 'latest') ? 'There are no profiles' : 'Token not found',
        message: (token|default('') == 'latest') ? 'No profiles found in the database.' : 'Token \"' ~ token|default('') ~ '\" was not found in the database.'
    },
    'upload_error' : {
        status:  'error',
        title:   'A problem occurred when uploading the data',
        message: 'No file given or the file was not uploaded successfully.'
    },
    'already_exists' : {
        status:  'error',
        title:   'A problem occurred when uploading the data',
        message: 'The token already exists in the database.'
    }
} %}

{% block summary %}
    <div class=\"status status-{{ messages[about].status }}\">
        <div class=\"container\">
            <h2>{{ messages[about].status|title }}</h2>
        </div>
    </div>
{% endblock %}

{% block panel %}
    <h2>{{ messages[about].title }}</h2>
    <p>{{ messages[about].message }}</p>
{% endblock %}
", "@WebProfiler/Profiler/info.html.twig", "C:\\www\\Web2\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\info.html.twig");
    }
}
