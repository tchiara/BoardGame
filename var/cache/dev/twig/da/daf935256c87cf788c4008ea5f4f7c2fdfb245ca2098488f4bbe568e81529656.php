<?php

/* WebProfilerBundle:Profiler:info.html.twig */
class __TwigTemplate_3ef180f7cf420af9489c2d5dc041c2e1ceae1ddd3fa89dc4635cf0fabb08ef99 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Profiler:info.html.twig", 1);
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
        $__internal_ce3df7da5d64e2fb668f77c80f61ec431fa69b88d2001ccc660c4fb906473e30 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ce3df7da5d64e2fb668f77c80f61ec431fa69b88d2001ccc660c4fb906473e30->enter($__internal_ce3df7da5d64e2fb668f77c80f61ec431fa69b88d2001ccc660c4fb906473e30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        $__internal_8b0749b2303b7415993cdbd0b22776e00dc552274a29d7118b650e51831eba76 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8b0749b2303b7415993cdbd0b22776e00dc552274a29d7118b650e51831eba76->enter($__internal_8b0749b2303b7415993cdbd0b22776e00dc552274a29d7118b650e51831eba76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        // line 3
        $context["messages"] = array("purge" => array("status" => "success", "title" => "The profiler database was purged successfully", "message" => "Now you need to browse some pages with the Symfony Profiler enabled to collect data."), "no_token" => array("status" => "error", "title" => (((((        // line 11
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 12
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))), "upload_error" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "No file given or the file was not uploaded successfully."), "already_exists" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "The token already exists in the database."));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ce3df7da5d64e2fb668f77c80f61ec431fa69b88d2001ccc660c4fb906473e30->leave($__internal_ce3df7da5d64e2fb668f77c80f61ec431fa69b88d2001ccc660c4fb906473e30_prof);

        
        $__internal_8b0749b2303b7415993cdbd0b22776e00dc552274a29d7118b650e51831eba76->leave($__internal_8b0749b2303b7415993cdbd0b22776e00dc552274a29d7118b650e51831eba76_prof);

    }

    // line 26
    public function block_summary($context, array $blocks = array())
    {
        $__internal_eb53d98e8fba2116041e3685483009668b978b32435e2af5e3061fe2a550eb83 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eb53d98e8fba2116041e3685483009668b978b32435e2af5e3061fe2a550eb83->enter($__internal_eb53d98e8fba2116041e3685483009668b978b32435e2af5e3061fe2a550eb83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_55cae3381bed303fd424d935da17b63efc83d39fd0703151d46ede5d9fecd93f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_55cae3381bed303fd424d935da17b63efc83d39fd0703151d46ede5d9fecd93f->enter($__internal_55cae3381bed303fd424d935da17b63efc83d39fd0703151d46ede5d9fecd93f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

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
        
        $__internal_55cae3381bed303fd424d935da17b63efc83d39fd0703151d46ede5d9fecd93f->leave($__internal_55cae3381bed303fd424d935da17b63efc83d39fd0703151d46ede5d9fecd93f_prof);

        
        $__internal_eb53d98e8fba2116041e3685483009668b978b32435e2af5e3061fe2a550eb83->leave($__internal_eb53d98e8fba2116041e3685483009668b978b32435e2af5e3061fe2a550eb83_prof);

    }

    // line 34
    public function block_panel($context, array $blocks = array())
    {
        $__internal_40ad8f925e72463f427f53b76e60d877844c13ac132f7d8e731bb33d701accd8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_40ad8f925e72463f427f53b76e60d877844c13ac132f7d8e731bb33d701accd8->enter($__internal_40ad8f925e72463f427f53b76e60d877844c13ac132f7d8e731bb33d701accd8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_8dfd5eda233234408d0e265c80aed80d2211957e4842899b07fd69a2461808af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8dfd5eda233234408d0e265c80aed80d2211957e4842899b07fd69a2461808af->enter($__internal_8dfd5eda233234408d0e265c80aed80d2211957e4842899b07fd69a2461808af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 35
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_8dfd5eda233234408d0e265c80aed80d2211957e4842899b07fd69a2461808af->leave($__internal_8dfd5eda233234408d0e265c80aed80d2211957e4842899b07fd69a2461808af_prof);

        
        $__internal_40ad8f925e72463f427f53b76e60d877844c13ac132f7d8e731bb33d701accd8->leave($__internal_40ad8f925e72463f427f53b76e60d877844c13ac132f7d8e731bb33d701accd8_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:info.html.twig";
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
", "WebProfilerBundle:Profiler:info.html.twig", "C:\\www\\Web2\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/info.html.twig");
    }
}
