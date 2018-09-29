<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_3d247cff8d10cfae73e1c8094ec0ea72bbb8afeb337d15de4177ed93e4e1b4e2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9896edf9464bf0f786bbab47e66beb44cddd3d78feb7b1bada7120542419ca00 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9896edf9464bf0f786bbab47e66beb44cddd3d78feb7b1bada7120542419ca00->enter($__internal_9896edf9464bf0f786bbab47e66beb44cddd3d78feb7b1bada7120542419ca00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $__internal_205205c2357eb3d4d45671bc4be9fede24d246ab9e69926e615b4f7254a64424 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_205205c2357eb3d4d45671bc4be9fede24d246ab9e69926e615b4f7254a64424->enter($__internal_205205c2357eb3d4d45671bc4be9fede24d246ab9e69926e615b4f7254a64424_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9896edf9464bf0f786bbab47e66beb44cddd3d78feb7b1bada7120542419ca00->leave($__internal_9896edf9464bf0f786bbab47e66beb44cddd3d78feb7b1bada7120542419ca00_prof);

        
        $__internal_205205c2357eb3d4d45671bc4be9fede24d246ab9e69926e615b4f7254a64424->leave($__internal_205205c2357eb3d4d45671bc4be9fede24d246ab9e69926e615b4f7254a64424_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_d6e2ce8f737ecd701ea963aa37952498b5716aff36979f3e4d192515cbda82d6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d6e2ce8f737ecd701ea963aa37952498b5716aff36979f3e4d192515cbda82d6->enter($__internal_d6e2ce8f737ecd701ea963aa37952498b5716aff36979f3e4d192515cbda82d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_f47f6025f41dc964c57a571780bf1ff6581adb3f003d7e9903551b63fb08147f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f47f6025f41dc964c57a571780bf1ff6581adb3f003d7e9903551b63fb08147f->enter($__internal_f47f6025f41dc964c57a571780bf1ff6581adb3f003d7e9903551b63fb08147f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_f47f6025f41dc964c57a571780bf1ff6581adb3f003d7e9903551b63fb08147f->leave($__internal_f47f6025f41dc964c57a571780bf1ff6581adb3f003d7e9903551b63fb08147f_prof);

        
        $__internal_d6e2ce8f737ecd701ea963aa37952498b5716aff36979f3e4d192515cbda82d6->leave($__internal_d6e2ce8f737ecd701ea963aa37952498b5716aff36979f3e4d192515cbda82d6_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_340270aa4241491e17601aa7519d66654fb2faba18754e1007a37a280ecf4954 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_340270aa4241491e17601aa7519d66654fb2faba18754e1007a37a280ecf4954->enter($__internal_340270aa4241491e17601aa7519d66654fb2faba18754e1007a37a280ecf4954_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_214d8d5a22442688a55c13442af853592c948bb74d9b6869b57061409d14ff56 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_214d8d5a22442688a55c13442af853592c948bb74d9b6869b57061409d14ff56->enter($__internal_214d8d5a22442688a55c13442af853592c948bb74d9b6869b57061409d14ff56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_214d8d5a22442688a55c13442af853592c948bb74d9b6869b57061409d14ff56->leave($__internal_214d8d5a22442688a55c13442af853592c948bb74d9b6869b57061409d14ff56_prof);

        
        $__internal_340270aa4241491e17601aa7519d66654fb2faba18754e1007a37a280ecf4954->leave($__internal_340270aa4241491e17601aa7519d66654fb2faba18754e1007a37a280ecf4954_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_0e5e4f1f47d60da1ffb718a88cf10972bec0117ffdf9324e6d7d7cfccbbaeadb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0e5e4f1f47d60da1ffb718a88cf10972bec0117ffdf9324e6d7d7cfccbbaeadb->enter($__internal_0e5e4f1f47d60da1ffb718a88cf10972bec0117ffdf9324e6d7d7cfccbbaeadb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_05fd977c6d76c69919ddc12465bf6ce67fac9350ecff0230342d5a58185868ca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_05fd977c6d76c69919ddc12465bf6ce67fac9350ecff0230342d5a58185868ca->enter($__internal_05fd977c6d76c69919ddc12465bf6ce67fac9350ecff0230342d5a58185868ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_05fd977c6d76c69919ddc12465bf6ce67fac9350ecff0230342d5a58185868ca->leave($__internal_05fd977c6d76c69919ddc12465bf6ce67fac9350ecff0230342d5a58185868ca_prof);

        
        $__internal_0e5e4f1f47d60da1ffb718a88cf10972bec0117ffdf9324e6d7d7cfccbbaeadb->leave($__internal_0e5e4f1f47d60da1ffb718a88cf10972bec0117ffdf9324e6d7d7cfccbbaeadb_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "WebProfilerBundle:Collector:router.html.twig", "C:\\www\\Web2\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
