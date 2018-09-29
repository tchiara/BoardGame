<?php

/* @App/Default/createParty.html.twig */
class __TwigTemplate_40be74a7a9d10982b0f1f90a3f2c03f78c36703d4a14173baa43fab3b1115a94 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AppBundle::base.html.twig", "@App/Default/createParty.html.twig", 1);
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
        $__internal_a3540a96255af8af86d42561a9508e3c4de658624f66102bb90e5eb9fd48836b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a3540a96255af8af86d42561a9508e3c4de658624f66102bb90e5eb9fd48836b->enter($__internal_a3540a96255af8af86d42561a9508e3c4de658624f66102bb90e5eb9fd48836b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@App/Default/createParty.html.twig"));

        $__internal_b8f5eed814c836464c1bbbe3b2dc9772bd99f772573066036e945aa83186239d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b8f5eed814c836464c1bbbe3b2dc9772bd99f772573066036e945aa83186239d->enter($__internal_b8f5eed814c836464c1bbbe3b2dc9772bd99f772573066036e945aa83186239d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@App/Default/createParty.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a3540a96255af8af86d42561a9508e3c4de658624f66102bb90e5eb9fd48836b->leave($__internal_a3540a96255af8af86d42561a9508e3c4de658624f66102bb90e5eb9fd48836b_prof);

        
        $__internal_b8f5eed814c836464c1bbbe3b2dc9772bd99f772573066036e945aa83186239d->leave($__internal_b8f5eed814c836464c1bbbe3b2dc9772bd99f772573066036e945aa83186239d_prof);

    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        $__internal_71a95996a566532fab82cc48a26c37f77da02ad184c28eba411e878ebdbb52f3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_71a95996a566532fab82cc48a26c37f77da02ad184c28eba411e878ebdbb52f3->enter($__internal_71a95996a566532fab82cc48a26c37f77da02ad184c28eba411e878ebdbb52f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_1cb6ee70a1ad841a8ebb53818a8cc6cb434b151e7f5b7a011f265963d03c7235 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1cb6ee70a1ad841a8ebb53818a8cc6cb434b151e7f5b7a011f265963d03c7235->enter($__internal_1cb6ee70a1ad841a8ebb53818a8cc6cb434b151e7f5b7a011f265963d03c7235_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 3
        echo "    <audio src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("sounds/canard.mp3"), "html", null, true);
        echo "\" autoplay></audio>
    <div class=\"row\">
        <div id=\"creation\" class=\"col-md-12\">
            <div class=\"panel panel-default\">
                <div class=\"panel-heading\">A votre choix:</div>
                <div class=\"panel-body\">
                    ";
        // line 10
        echo "                    ";
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["formCreate"]) ? $context["formCreate"] : $this->getContext($context, "formCreate")), 'form_start');
        echo "
                    ";
        // line 11
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["formCreate"]) ? $context["formCreate"] : $this->getContext($context, "formCreate")), 'widget');
        echo "
                    ";
        // line 12
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["formCreate"]) ? $context["formCreate"] : $this->getContext($context, "formCreate")), 'form_end');
        echo "
                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_1cb6ee70a1ad841a8ebb53818a8cc6cb434b151e7f5b7a011f265963d03c7235->leave($__internal_1cb6ee70a1ad841a8ebb53818a8cc6cb434b151e7f5b7a011f265963d03c7235_prof);

        
        $__internal_71a95996a566532fab82cc48a26c37f77da02ad184c28eba411e878ebdbb52f3->leave($__internal_71a95996a566532fab82cc48a26c37f77da02ad184c28eba411e878ebdbb52f3_prof);

    }

    public function getTemplateName()
    {
        return "@App/Default/createParty.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 12,  64 => 11,  59 => 10,  49 => 3,  40 => 2,  11 => 1,);
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
    <audio src=\"{{ asset('sounds/canard.mp3')}}\" autoplay></audio>
    <div class=\"row\">
        <div id=\"creation\" class=\"col-md-12\">
            <div class=\"panel panel-default\">
                <div class=\"panel-heading\">A votre choix:</div>
                <div class=\"panel-body\">
                    {#                    formCreate est dans le defualtControler car il n'est associé à aucune entité#}
                    {{form_start(formCreate)}}
                    {{form_widget(formCreate)}}
                    {{form_end(formCreate)}}
                </div>
            </div>
        </div>
    </div>
{% endblock %}
", "@App/Default/createParty.html.twig", "C:\\www\\Web2\\src\\AppBundle\\Resources\\views\\Default\\createParty.html.twig");
    }
}
