<?php

/* @Twig/Exception/error.rdf.twig */
class __TwigTemplate_48d9a140dbdd2a82d0f0f3384bf26717bb6c632e5405846ff3c606e797f62e52 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d1bfc4f9122c6f3d3f69acc661cdf1a7fb0bad34e0ddf113ac90bf6e6936ae46 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d1bfc4f9122c6f3d3f69acc661cdf1a7fb0bad34e0ddf113ac90bf6e6936ae46->enter($__internal_d1bfc4f9122c6f3d3f69acc661cdf1a7fb0bad34e0ddf113ac90bf6e6936ae46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        $__internal_0abb0e7b2a39c1976beaa13d844e51526a7a9aed31364894e5ee214c1b87a633 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0abb0e7b2a39c1976beaa13d844e51526a7a9aed31364894e5ee214c1b87a633->enter($__internal_0abb0e7b2a39c1976beaa13d844e51526a7a9aed31364894e5ee214c1b87a633_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.rdf.twig", 1)->display($context);
        
        $__internal_d1bfc4f9122c6f3d3f69acc661cdf1a7fb0bad34e0ddf113ac90bf6e6936ae46->leave($__internal_d1bfc4f9122c6f3d3f69acc661cdf1a7fb0bad34e0ddf113ac90bf6e6936ae46_prof);

        
        $__internal_0abb0e7b2a39c1976beaa13d844e51526a7a9aed31364894e5ee214c1b87a633->leave($__internal_0abb0e7b2a39c1976beaa13d844e51526a7a9aed31364894e5ee214c1b87a633_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% include '@Twig/Exception/error.xml.twig' %}
", "@Twig/Exception/error.rdf.twig", "C:\\www\\Web2\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.rdf.twig");
    }
}
