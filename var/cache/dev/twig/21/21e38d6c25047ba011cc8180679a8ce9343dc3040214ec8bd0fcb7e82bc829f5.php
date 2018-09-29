<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_d5d8fc3e296f87608a0eb96a2f850f1c091ee04cd5fbe7bd843c4b4f2ec3dee3 extends Twig_Template
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
        $__internal_a06ee4ce68a14ced1490a1a96e5280a3ac035d7462e8865910159fc36817b31f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a06ee4ce68a14ced1490a1a96e5280a3ac035d7462e8865910159fc36817b31f->enter($__internal_a06ee4ce68a14ced1490a1a96e5280a3ac035d7462e8865910159fc36817b31f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        $__internal_3905a7c1a61c7a335d77f8fa14601d43a168492c75a2522d732f48602dbbcfe6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3905a7c1a61c7a335d77f8fa14601d43a168492c75a2522d732f48602dbbcfe6->enter($__internal_3905a7c1a61c7a335d77f8fa14601d43a168492c75a2522d732f48602dbbcfe6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_a06ee4ce68a14ced1490a1a96e5280a3ac035d7462e8865910159fc36817b31f->leave($__internal_a06ee4ce68a14ced1490a1a96e5280a3ac035d7462e8865910159fc36817b31f_prof);

        
        $__internal_3905a7c1a61c7a335d77f8fa14601d43a168492c75a2522d732f48602dbbcfe6->leave($__internal_3905a7c1a61c7a335d77f8fa14601d43a168492c75a2522d732f48602dbbcfe6_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
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
", "TwigBundle:Exception:exception.css.twig", "C:\\www\\Web2\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.css.twig");
    }
}
