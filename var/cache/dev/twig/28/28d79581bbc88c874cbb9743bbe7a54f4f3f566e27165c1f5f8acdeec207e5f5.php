<?php

/* @App/User/register.html.twig */
class __TwigTemplate_423b5f71f519d3e99e647fbc5331ae96ad77ff83b4d622baebe632349c2a67d6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AppBundle::base.html.twig", "@App/User/register.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AppBundle::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b17eadb40f0aa4f957fa339d88aa3af72651757883a804bf0ed4b276c5a64cc5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b17eadb40f0aa4f957fa339d88aa3af72651757883a804bf0ed4b276c5a64cc5->enter($__internal_b17eadb40f0aa4f957fa339d88aa3af72651757883a804bf0ed4b276c5a64cc5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@App/User/register.html.twig"));

        $__internal_1becdbf20dc2db25e1bd11e7092fd7fb061b6d5c17e2b5e3a2363fa5a1589e3f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1becdbf20dc2db25e1bd11e7092fd7fb061b6d5c17e2b5e3a2363fa5a1589e3f->enter($__internal_1becdbf20dc2db25e1bd11e7092fd7fb061b6d5c17e2b5e3a2363fa5a1589e3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@App/User/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b17eadb40f0aa4f957fa339d88aa3af72651757883a804bf0ed4b276c5a64cc5->leave($__internal_b17eadb40f0aa4f957fa339d88aa3af72651757883a804bf0ed4b276c5a64cc5_prof);

        
        $__internal_1becdbf20dc2db25e1bd11e7092fd7fb061b6d5c17e2b5e3a2363fa5a1589e3f->leave($__internal_1becdbf20dc2db25e1bd11e7092fd7fb061b6d5c17e2b5e3a2363fa5a1589e3f_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_6d4faccad53dfd42b02dc5725313e35c793e74bd7dd4addecefdc3068dd53d7d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6d4faccad53dfd42b02dc5725313e35c793e74bd7dd4addecefdc3068dd53d7d->enter($__internal_6d4faccad53dfd42b02dc5725313e35c793e74bd7dd4addecefdc3068dd53d7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_1f5da2caf2ded30b125e5e2b4b2abd78a6bea349d27e1dd86f60f6858d9bf890 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f5da2caf2ded30b125e5e2b4b2abd78a6bea349d27e1dd86f60f6858d9bf890->enter($__internal_1f5da2caf2ded30b125e5e2b4b2abd78a6bea349d27e1dd86f60f6858d9bf890_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "    <div class=\"row\">
        <div id=\"questions\" class=\"col-md-12\">
            <div class=\"panel panel-default\">
                <div class=\"panel-heading\">Inscris-toi pour jouer :</div>
                <div class=\"panel-body\">
                    ";
        // line 9
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["formRegister"]) ? $context["formRegister"] : $this->getContext($context, "formRegister")), 'form_start');
        echo "
                    ";
        // line 10
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["formRegister"]) ? $context["formRegister"] : $this->getContext($context, "formRegister")), 'widget');
        echo "
                    ";
        // line 11
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["formRegister"]) ? $context["formRegister"] : $this->getContext($context, "formRegister")), 'form_end');
        echo "
                </div>
            </div>
        </div>
    </div>


";
        
        $__internal_1f5da2caf2ded30b125e5e2b4b2abd78a6bea349d27e1dd86f60f6858d9bf890->leave($__internal_1f5da2caf2ded30b125e5e2b4b2abd78a6bea349d27e1dd86f60f6858d9bf890_prof);

        
        $__internal_6d4faccad53dfd42b02dc5725313e35c793e74bd7dd4addecefdc3068dd53d7d->leave($__internal_6d4faccad53dfd42b02dc5725313e35c793e74bd7dd4addecefdc3068dd53d7d_prof);

    }

    public function getTemplateName()
    {
        return "@App/User/register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 11,  60 => 10,  56 => 9,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'AppBundle::base.html.twig' %}

{% block content %}
    <div class=\"row\">
        <div id=\"questions\" class=\"col-md-12\">
            <div class=\"panel panel-default\">
                <div class=\"panel-heading\">Inscris-toi pour jouer :</div>
                <div class=\"panel-body\">
                    {{form_start(formRegister)}}
                    {{form_widget(formRegister)}}
                    {{form_end(formRegister)}}
                </div>
            </div>
        </div>
    </div>


{% endblock %}

", "@App/User/register.html.twig", "C:\\www\\Web2\\src\\AppBundle\\Resources\\views\\User\\register.html.twig");
    }
}
