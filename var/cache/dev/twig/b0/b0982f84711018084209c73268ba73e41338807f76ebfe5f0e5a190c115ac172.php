<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_0efabb0a254e1dd77f2b0e483f9f953b2fd764cdf747306ef18b67c0ba03caa8 extends Twig_Template
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
        $__internal_2d88b7f0eaadde6913272140c088e62607b10fd8a3ab73736d468fab08216dd4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2d88b7f0eaadde6913272140c088e62607b10fd8a3ab73736d468fab08216dd4->enter($__internal_2d88b7f0eaadde6913272140c088e62607b10fd8a3ab73736d468fab08216dd4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        $__internal_61f3e94442c33591cbc3703ba1861fdd9f869399bd873ac36f5dfae1bbebed99 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_61f3e94442c33591cbc3703ba1861fdd9f869399bd873ac36f5dfae1bbebed99->enter($__internal_61f3e94442c33591cbc3703ba1861fdd9f869399bd873ac36f5dfae1bbebed99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_2d88b7f0eaadde6913272140c088e62607b10fd8a3ab73736d468fab08216dd4->leave($__internal_2d88b7f0eaadde6913272140c088e62607b10fd8a3ab73736d468fab08216dd4_prof);

        
        $__internal_61f3e94442c33591cbc3703ba1861fdd9f869399bd873ac36f5dfae1bbebed99->leave($__internal_61f3e94442c33591cbc3703ba1861fdd9f869399bd873ac36f5dfae1bbebed99_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
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
", "TwigBundle:Exception:error.rdf.twig", "C:\\www\\Web2\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.rdf.twig");
    }
}
