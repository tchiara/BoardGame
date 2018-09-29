<?php

/* @Twig/Exception/exception.rdf.twig */
class __TwigTemplate_bba644c250feb8fb328919e8985ef1a90e4a5e9714a9d826e71df8c21de31ab9 extends Twig_Template
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
        $__internal_9e5f620152bb69840de9f86640af232e22aaec900383d456207cd4c354db9e5a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9e5f620152bb69840de9f86640af232e22aaec900383d456207cd4c354db9e5a->enter($__internal_9e5f620152bb69840de9f86640af232e22aaec900383d456207cd4c354db9e5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        $__internal_10f05c5cfc7c3333465b327ef6ce7dc6d92fcbd53499d307d494ec6e31246e3f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_10f05c5cfc7c3333465b327ef6ce7dc6d92fcbd53499d307d494ec6e31246e3f->enter($__internal_10f05c5cfc7c3333465b327ef6ce7dc6d92fcbd53499d307d494ec6e31246e3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_9e5f620152bb69840de9f86640af232e22aaec900383d456207cd4c354db9e5a->leave($__internal_9e5f620152bb69840de9f86640af232e22aaec900383d456207cd4c354db9e5a_prof);

        
        $__internal_10f05c5cfc7c3333465b327ef6ce7dc6d92fcbd53499d307d494ec6e31246e3f->leave($__internal_10f05c5cfc7c3333465b327ef6ce7dc6d92fcbd53499d307d494ec6e31246e3f_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.rdf.twig";
    }

    public function isTraitable()
    {
        return false;
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
        return new Twig_Source("{% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}
", "@Twig/Exception/exception.rdf.twig", "C:\\www\\Web2\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.rdf.twig");
    }
}
