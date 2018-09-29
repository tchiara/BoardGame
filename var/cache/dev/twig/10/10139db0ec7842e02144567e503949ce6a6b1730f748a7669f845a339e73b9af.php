<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_8e340f7fc21c468ae34188b011f0a77ce04653697dac808cfae2fef3a9223058 extends Twig_Template
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
        $__internal_18fdb16d3db4d3b934aaf0f9b51c171d5439fc48bb16c75a092d6fc3b4eee983 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_18fdb16d3db4d3b934aaf0f9b51c171d5439fc48bb16c75a092d6fc3b4eee983->enter($__internal_18fdb16d3db4d3b934aaf0f9b51c171d5439fc48bb16c75a092d6fc3b4eee983_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        $__internal_997a68647545f412f19a332c57922223d72d691818b2712142308c0b2374cc0c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_997a68647545f412f19a332c57922223d72d691818b2712142308c0b2374cc0c->enter($__internal_997a68647545f412f19a332c57922223d72d691818b2712142308c0b2374cc0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_18fdb16d3db4d3b934aaf0f9b51c171d5439fc48bb16c75a092d6fc3b4eee983->leave($__internal_18fdb16d3db4d3b934aaf0f9b51c171d5439fc48bb16c75a092d6fc3b4eee983_prof);

        
        $__internal_997a68647545f412f19a332c57922223d72d691818b2712142308c0b2374cc0c->leave($__internal_997a68647545f412f19a332c57922223d72d691818b2712142308c0b2374cc0c_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
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
", "TwigBundle:Exception:exception.atom.twig", "C:\\www\\Web2\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.atom.twig");
    }
}
