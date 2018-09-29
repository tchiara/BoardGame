<?php

/* @WebProfiler/Profiler/toolbar_redirect.html.twig */
class __TwigTemplate_dd1dba4fb6a778294c47686bf80f695d13ccbf28ca5ac67a6f977fa42b51b2f5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@WebProfiler/Profiler/toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_59d3f3f037de517a87e2daa6b9f3cd0becc48a7c9daedab6343d4162ddc55861 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_59d3f3f037de517a87e2daa6b9f3cd0becc48a7c9daedab6343d4162ddc55861->enter($__internal_59d3f3f037de517a87e2daa6b9f3cd0becc48a7c9daedab6343d4162ddc55861_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $__internal_0bd7b86596c1ef8da0626de5367720e0e66d8eadc64ea402ac0f93a9c4459ad2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0bd7b86596c1ef8da0626de5367720e0e66d8eadc64ea402ac0f93a9c4459ad2->enter($__internal_0bd7b86596c1ef8da0626de5367720e0e66d8eadc64ea402ac0f93a9c4459ad2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_59d3f3f037de517a87e2daa6b9f3cd0becc48a7c9daedab6343d4162ddc55861->leave($__internal_59d3f3f037de517a87e2daa6b9f3cd0becc48a7c9daedab6343d4162ddc55861_prof);

        
        $__internal_0bd7b86596c1ef8da0626de5367720e0e66d8eadc64ea402ac0f93a9c4459ad2->leave($__internal_0bd7b86596c1ef8da0626de5367720e0e66d8eadc64ea402ac0f93a9c4459ad2_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_b6846a20b345389956b94282b99f086a5cd4423c1b7cd1fa08fec9c6f2e5dd36 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b6846a20b345389956b94282b99f086a5cd4423c1b7cd1fa08fec9c6f2e5dd36->enter($__internal_b6846a20b345389956b94282b99f086a5cd4423c1b7cd1fa08fec9c6f2e5dd36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_70fab107cd49b4079e89caf48d88faebef4e9cd7c38f79aec21ca50f473668a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_70fab107cd49b4079e89caf48d88faebef4e9cd7c38f79aec21ca50f473668a9->enter($__internal_70fab107cd49b4079e89caf48d88faebef4e9cd7c38f79aec21ca50f473668a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_70fab107cd49b4079e89caf48d88faebef4e9cd7c38f79aec21ca50f473668a9->leave($__internal_70fab107cd49b4079e89caf48d88faebef4e9cd7c38f79aec21ca50f473668a9_prof);

        
        $__internal_b6846a20b345389956b94282b99f086a5cd4423c1b7cd1fa08fec9c6f2e5dd36->leave($__internal_b6846a20b345389956b94282b99f086a5cd4423c1b7cd1fa08fec9c6f2e5dd36_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_423c3dc6e50a9462e4c656e2688988c9ea110cfead0ba769da1191ff07fad783 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_423c3dc6e50a9462e4c656e2688988c9ea110cfead0ba769da1191ff07fad783->enter($__internal_423c3dc6e50a9462e4c656e2688988c9ea110cfead0ba769da1191ff07fad783_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_25df8647d8fd1530d4500b9e4089b9e3c93e762f624132b08b1546776ce85f68 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_25df8647d8fd1530d4500b9e4089b9e3c93e762f624132b08b1546776ce85f68->enter($__internal_25df8647d8fd1530d4500b9e4089b9e3c93e762f624132b08b1546776ce85f68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_25df8647d8fd1530d4500b9e4089b9e3c93e762f624132b08b1546776ce85f68->leave($__internal_25df8647d8fd1530d4500b9e4089b9e3c93e762f624132b08b1546776ce85f68_prof);

        
        $__internal_423c3dc6e50a9462e4c656e2688988c9ea110cfead0ba769da1191ff07fad783->leave($__internal_423c3dc6e50a9462e4c656e2688988c9ea110cfead0ba769da1191ff07fad783_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 8,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "@WebProfiler/Profiler/toolbar_redirect.html.twig", "C:\\www\\Web2\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\toolbar_redirect.html.twig");
    }
}
