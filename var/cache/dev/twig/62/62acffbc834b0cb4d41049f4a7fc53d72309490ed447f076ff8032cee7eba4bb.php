<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_deaf84387804f983f536b2148d97baa1f821895251e92db3f06215e7a1a3d1cc extends Twig_Template
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
        $__internal_14c0a3c1895bfbcdf59fa6656a3ee84d2be2e3254578450528324d97b085413a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_14c0a3c1895bfbcdf59fa6656a3ee84d2be2e3254578450528324d97b085413a->enter($__internal_14c0a3c1895bfbcdf59fa6656a3ee84d2be2e3254578450528324d97b085413a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        $__internal_eba3660415ed47a58d6a1ba9c1d50f2b18f2c1b3c394e76480e8f74f71c41537 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eba3660415ed47a58d6a1ba9c1d50f2b18f2c1b3c394e76480e8f74f71c41537->enter($__internal_eba3660415ed47a58d6a1ba9c1d50f2b18f2c1b3c394e76480e8f74f71c41537_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_14c0a3c1895bfbcdf59fa6656a3ee84d2be2e3254578450528324d97b085413a->leave($__internal_14c0a3c1895bfbcdf59fa6656a3ee84d2be2e3254578450528324d97b085413a_prof);

        
        $__internal_eba3660415ed47a58d6a1ba9c1d50f2b18f2c1b3c394e76480e8f74f71c41537->leave($__internal_eba3660415ed47a58d6a1ba9c1d50f2b18f2c1b3c394e76480e8f74f71c41537_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_55703c8cfaf31e3b20696b379168b32d3c31a393329e4f79ddcdde62ed6b8abf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_55703c8cfaf31e3b20696b379168b32d3c31a393329e4f79ddcdde62ed6b8abf->enter($__internal_55703c8cfaf31e3b20696b379168b32d3c31a393329e4f79ddcdde62ed6b8abf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_4a1fd3228d012b01bb9a99203c7d259a703f350cb031a96288a367fa597579b6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a1fd3228d012b01bb9a99203c7d259a703f350cb031a96288a367fa597579b6->enter($__internal_4a1fd3228d012b01bb9a99203c7d259a703f350cb031a96288a367fa597579b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_4a1fd3228d012b01bb9a99203c7d259a703f350cb031a96288a367fa597579b6->leave($__internal_4a1fd3228d012b01bb9a99203c7d259a703f350cb031a96288a367fa597579b6_prof);

        
        $__internal_55703c8cfaf31e3b20696b379168b32d3c31a393329e4f79ddcdde62ed6b8abf->leave($__internal_55703c8cfaf31e3b20696b379168b32d3c31a393329e4f79ddcdde62ed6b8abf_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
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
", "WebProfilerBundle:Profiler:ajax_layout.html.twig", "C:\\www\\Web2\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
