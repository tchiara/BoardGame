<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_e8f229c4ee0b268503cb5986d907bd7f0ff2ceb09b8af8d8ef212d7088726996 extends Twig_Template
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
        $__internal_56660d3635bc63773a563816006473da0ec7fcbfd54b5d8a94cbe7dbb34f1f11 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_56660d3635bc63773a563816006473da0ec7fcbfd54b5d8a94cbe7dbb34f1f11->enter($__internal_56660d3635bc63773a563816006473da0ec7fcbfd54b5d8a94cbe7dbb34f1f11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        $__internal_c725c45499385d72175dec1d58ca44e9d29a304cc498912d347d3a479f289a7e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c725c45499385d72175dec1d58ca44e9d29a304cc498912d347d3a479f289a7e->enter($__internal_c725c45499385d72175dec1d58ca44e9d29a304cc498912d347d3a479f289a7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_56660d3635bc63773a563816006473da0ec7fcbfd54b5d8a94cbe7dbb34f1f11->leave($__internal_56660d3635bc63773a563816006473da0ec7fcbfd54b5d8a94cbe7dbb34f1f11_prof);

        
        $__internal_c725c45499385d72175dec1d58ca44e9d29a304cc498912d347d3a479f289a7e->leave($__internal_c725c45499385d72175dec1d58ca44e9d29a304cc498912d347d3a479f289a7e_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
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
", "TwigBundle:Exception:error.atom.twig", "C:\\www\\Web2\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.atom.twig");
    }
}
