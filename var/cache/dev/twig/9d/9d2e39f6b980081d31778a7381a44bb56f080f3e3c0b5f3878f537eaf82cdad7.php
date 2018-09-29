<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_2ebb90987bdd5b574901d6edc93fb47590ae08b0d8ea4947a9c936d191a84f84 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
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
        $__internal_0f60d07d207a877e655ecb8edf4d8cd4db1d89a79168cc69ce6ca478509bf713 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0f60d07d207a877e655ecb8edf4d8cd4db1d89a79168cc69ce6ca478509bf713->enter($__internal_0f60d07d207a877e655ecb8edf4d8cd4db1d89a79168cc69ce6ca478509bf713_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $__internal_b02e0bc88339aa83a069ef02f10a923270ba989ed8e0addb17426634e07758ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b02e0bc88339aa83a069ef02f10a923270ba989ed8e0addb17426634e07758ac->enter($__internal_b02e0bc88339aa83a069ef02f10a923270ba989ed8e0addb17426634e07758ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0f60d07d207a877e655ecb8edf4d8cd4db1d89a79168cc69ce6ca478509bf713->leave($__internal_0f60d07d207a877e655ecb8edf4d8cd4db1d89a79168cc69ce6ca478509bf713_prof);

        
        $__internal_b02e0bc88339aa83a069ef02f10a923270ba989ed8e0addb17426634e07758ac->leave($__internal_b02e0bc88339aa83a069ef02f10a923270ba989ed8e0addb17426634e07758ac_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_491f8983a9a0a9a19f66ebee6adc3b6b4a13c5542596e1fd4edf56491acf09c7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_491f8983a9a0a9a19f66ebee6adc3b6b4a13c5542596e1fd4edf56491acf09c7->enter($__internal_491f8983a9a0a9a19f66ebee6adc3b6b4a13c5542596e1fd4edf56491acf09c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_d5fc9e6acb0486cddb338565359122779a00913f66d1d7aa7f667b63a883c2e0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d5fc9e6acb0486cddb338565359122779a00913f66d1d7aa7f667b63a883c2e0->enter($__internal_d5fc9e6acb0486cddb338565359122779a00913f66d1d7aa7f667b63a883c2e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_d5fc9e6acb0486cddb338565359122779a00913f66d1d7aa7f667b63a883c2e0->leave($__internal_d5fc9e6acb0486cddb338565359122779a00913f66d1d7aa7f667b63a883c2e0_prof);

        
        $__internal_491f8983a9a0a9a19f66ebee6adc3b6b4a13c5542596e1fd4edf56491acf09c7->leave($__internal_491f8983a9a0a9a19f66ebee6adc3b6b4a13c5542596e1fd4edf56491acf09c7_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_f6c0725a6cb28d138c2c468d2a58de8f36e4ce57376a254ab64557188376efbc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f6c0725a6cb28d138c2c468d2a58de8f36e4ce57376a254ab64557188376efbc->enter($__internal_f6c0725a6cb28d138c2c468d2a58de8f36e4ce57376a254ab64557188376efbc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_b459aefbacd5f8e11f42a79285d8f164cfe85d00c05163a7aab4bd7dd692f44d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b459aefbacd5f8e11f42a79285d8f164cfe85d00c05163a7aab4bd7dd692f44d->enter($__internal_b459aefbacd5f8e11f42a79285d8f164cfe85d00c05163a7aab4bd7dd692f44d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_b459aefbacd5f8e11f42a79285d8f164cfe85d00c05163a7aab4bd7dd692f44d->leave($__internal_b459aefbacd5f8e11f42a79285d8f164cfe85d00c05163a7aab4bd7dd692f44d_prof);

        
        $__internal_f6c0725a6cb28d138c2c468d2a58de8f36e4ce57376a254ab64557188376efbc->leave($__internal_f6c0725a6cb28d138c2c468d2a58de8f36e4ce57376a254ab64557188376efbc_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
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
", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", "C:\\www\\Web2\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
