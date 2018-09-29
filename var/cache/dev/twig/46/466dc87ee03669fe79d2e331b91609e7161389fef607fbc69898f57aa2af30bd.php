<?php

/* @Twig/Exception/traces.xml.twig */
class __TwigTemplate_5024325f9bf7acd9b001f7a18df9137a99e4219a4f9185ef6f0f9a51cbd3e836 extends Twig_Template
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
        $__internal_90982fa18b684f0a58485533cca2bd0709f3788bb9dc434b2bcb2acf73655dce = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_90982fa18b684f0a58485533cca2bd0709f3788bb9dc434b2bcb2acf73655dce->enter($__internal_90982fa18b684f0a58485533cca2bd0709f3788bb9dc434b2bcb2acf73655dce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.xml.twig"));

        $__internal_a8649314b9825898b58ce1ac4e43d38076c4c070c0e30132327704da3d37e30b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a8649314b9825898b58ce1ac4e43d38076c4c070c0e30132327704da3d37e30b->enter($__internal_a8649314b9825898b58ce1ac4e43d38076c4c070c0e30132327704da3d37e30b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.xml.twig"));

        // line 1
        echo "        <traces>
";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
            // line 3
            echo "            <trace>
";
            // line 4
            $this->loadTemplate("@Twig/Exception/trace.txt.twig", "@Twig/Exception/traces.xml.twig", 4)->display(array("trace" => $context["trace"]));
            // line 5
            echo "
            </trace>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo "        </traces>
";
        
        $__internal_90982fa18b684f0a58485533cca2bd0709f3788bb9dc434b2bcb2acf73655dce->leave($__internal_90982fa18b684f0a58485533cca2bd0709f3788bb9dc434b2bcb2acf73655dce_prof);

        
        $__internal_a8649314b9825898b58ce1ac4e43d38076c4c070c0e30132327704da3d37e30b->leave($__internal_a8649314b9825898b58ce1ac4e43d38076c4c070c0e30132327704da3d37e30b_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/traces.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 8,  37 => 5,  35 => 4,  32 => 3,  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("        <traces>
{% for trace in exception.trace %}
            <trace>
{% include '@Twig/Exception/trace.txt.twig' with { 'trace': trace } only %}

            </trace>
{% endfor %}
        </traces>
", "@Twig/Exception/traces.xml.twig", "C:\\www\\Web2\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\traces.xml.twig");
    }
}
