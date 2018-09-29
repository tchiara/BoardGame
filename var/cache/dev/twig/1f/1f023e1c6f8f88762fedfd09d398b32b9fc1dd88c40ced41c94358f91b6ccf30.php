<?php

/* @WebProfiler/Profiler/ajax_layout.html.twig */
class __TwigTemplate_98a9a4396d6e89c7b6d1714fa615b21d3f45d75d12f624041c54d4d2d30fe328 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8d56bd43d513147ec03ca8c7ef006ec1e479960554ab6837c2af4bba5758d982 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8d56bd43d513147ec03ca8c7ef006ec1e479960554ab6837c2af4bba5758d982->enter($__internal_8d56bd43d513147ec03ca8c7ef006ec1e479960554ab6837c2af4bba5758d982_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        $__internal_0291e117927db7e074ed264ed2b1864af79a23c36a4d563abbd8f3391c6774ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0291e117927db7e074ed264ed2b1864af79a23c36a4d563abbd8f3391c6774ff->enter($__internal_0291e117927db7e074ed264ed2b1864af79a23c36a4d563abbd8f3391c6774ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_8d56bd43d513147ec03ca8c7ef006ec1e479960554ab6837c2af4bba5758d982->leave($__internal_8d56bd43d513147ec03ca8c7ef006ec1e479960554ab6837c2af4bba5758d982_prof);

        
        $__internal_0291e117927db7e074ed264ed2b1864af79a23c36a4d563abbd8f3391c6774ff->leave($__internal_0291e117927db7e074ed264ed2b1864af79a23c36a4d563abbd8f3391c6774ff_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_f8244074a0444d81650d19bde4fffc7a376b2bc7cde5ae7f8d2f5a4921e12b83 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f8244074a0444d81650d19bde4fffc7a376b2bc7cde5ae7f8d2f5a4921e12b83->enter($__internal_f8244074a0444d81650d19bde4fffc7a376b2bc7cde5ae7f8d2f5a4921e12b83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_30fa3bc065940269a3ca310aa28f9e4500e077e244bd81728f505e362d2bba98 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_30fa3bc065940269a3ca310aa28f9e4500e077e244bd81728f505e362d2bba98->enter($__internal_30fa3bc065940269a3ca310aa28f9e4500e077e244bd81728f505e362d2bba98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_30fa3bc065940269a3ca310aa28f9e4500e077e244bd81728f505e362d2bba98->leave($__internal_30fa3bc065940269a3ca310aa28f9e4500e077e244bd81728f505e362d2bba98_prof);

        
        $__internal_f8244074a0444d81650d19bde4fffc7a376b2bc7cde5ae7f8d2f5a4921e12b83->leave($__internal_f8244074a0444d81650d19bde4fffc7a376b2bc7cde5ae7f8d2f5a4921e12b83_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "@WebProfiler/Profiler/ajax_layout.html.twig", "C:\\www\\Web2\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\ajax_layout.html.twig");
    }
}
