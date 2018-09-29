<?php

/* @Twig/Exception/error.atom.twig */
class __TwigTemplate_80d6a99a23793ca81696969ea4f35323e35ed20ee3e4b7d0d0c3359762f4ed7d extends Twig_Template
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
        $__internal_d4b974b726352f8fa6eb0d0e9b15e37db363630fd801cd7a078fab689fa3e14b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d4b974b726352f8fa6eb0d0e9b15e37db363630fd801cd7a078fab689fa3e14b->enter($__internal_d4b974b726352f8fa6eb0d0e9b15e37db363630fd801cd7a078fab689fa3e14b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        $__internal_ac261b58bc653b681a56ad7b7889cfda0651acbe0dd1e21d9c0a93f601ac46ed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ac261b58bc653b681a56ad7b7889cfda0651acbe0dd1e21d9c0a93f601ac46ed->enter($__internal_ac261b58bc653b681a56ad7b7889cfda0651acbe0dd1e21d9c0a93f601ac46ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.atom.twig", 1)->display($context);
        
        $__internal_d4b974b726352f8fa6eb0d0e9b15e37db363630fd801cd7a078fab689fa3e14b->leave($__internal_d4b974b726352f8fa6eb0d0e9b15e37db363630fd801cd7a078fab689fa3e14b_prof);

        
        $__internal_ac261b58bc653b681a56ad7b7889cfda0651acbe0dd1e21d9c0a93f601ac46ed->leave($__internal_ac261b58bc653b681a56ad7b7889cfda0651acbe0dd1e21d9c0a93f601ac46ed_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.atom.twig";
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
", "@Twig/Exception/error.atom.twig", "C:\\www\\Web2\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.atom.twig");
    }
}
