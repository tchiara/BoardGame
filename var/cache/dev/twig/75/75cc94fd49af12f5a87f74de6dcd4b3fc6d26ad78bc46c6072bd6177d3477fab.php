<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_822f2919a17980553449eaea0ecdb79c7c80cdece5f90af3b967f820b1a85983 extends Twig_Template
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
        $__internal_13a4dec174be755f26fb35d7e77aab3ef2727ebcce7f3ac6d312819bacf71734 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_13a4dec174be755f26fb35d7e77aab3ef2727ebcce7f3ac6d312819bacf71734->enter($__internal_13a4dec174be755f26fb35d7e77aab3ef2727ebcce7f3ac6d312819bacf71734_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        $__internal_75e78b43107f29fe1b5a6e0bf2f067e80aae5565f7d3fcfd98310bfc99de3c8c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_75e78b43107f29fe1b5a6e0bf2f067e80aae5565f7d3fcfd98310bfc99de3c8c->enter($__internal_75e78b43107f29fe1b5a6e0bf2f067e80aae5565f7d3fcfd98310bfc99de3c8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_13a4dec174be755f26fb35d7e77aab3ef2727ebcce7f3ac6d312819bacf71734->leave($__internal_13a4dec174be755f26fb35d7e77aab3ef2727ebcce7f3ac6d312819bacf71734_prof);

        
        $__internal_75e78b43107f29fe1b5a6e0bf2f067e80aae5565f7d3fcfd98310bfc99de3c8c->leave($__internal_75e78b43107f29fe1b5a6e0bf2f067e80aae5565f7d3fcfd98310bfc99de3c8c_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
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
", "TwigBundle:Exception:exception.rdf.twig", "C:\\www\\Web2\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.rdf.twig");
    }
}
