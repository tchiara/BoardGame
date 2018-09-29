<?php

/* @Twig/Exception/exception.css.twig */
class __TwigTemplate_b5a038303d2bf32b4b2b87323e4fbdc47897dc032901cd53264627a645eef7cf extends Twig_Template
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
        $__internal_9f3fa3e3cfa07f63c10c25c1d54b5c8732efbb29268a69315a18ac31b6b266aa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9f3fa3e3cfa07f63c10c25c1d54b5c8732efbb29268a69315a18ac31b6b266aa->enter($__internal_9f3fa3e3cfa07f63c10c25c1d54b5c8732efbb29268a69315a18ac31b6b266aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        $__internal_d182879f194c197bd80db834dce3101596b014501725359e63b627e23cdfd5fd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d182879f194c197bd80db834dce3101596b014501725359e63b627e23cdfd5fd->enter($__internal_d182879f194c197bd80db834dce3101596b014501725359e63b627e23cdfd5fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_9f3fa3e3cfa07f63c10c25c1d54b5c8732efbb29268a69315a18ac31b6b266aa->leave($__internal_9f3fa3e3cfa07f63c10c25c1d54b5c8732efbb29268a69315a18ac31b6b266aa_prof);

        
        $__internal_d182879f194c197bd80db834dce3101596b014501725359e63b627e23cdfd5fd->leave($__internal_d182879f194c197bd80db834dce3101596b014501725359e63b627e23cdfd5fd_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 3,  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}
*/
", "@Twig/Exception/exception.css.twig", "C:\\www\\Web2\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.css.twig");
    }
}
