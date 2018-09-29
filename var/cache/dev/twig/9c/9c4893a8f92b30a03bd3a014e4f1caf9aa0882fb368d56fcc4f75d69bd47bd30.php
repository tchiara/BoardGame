<?php

/* AppBundle:Default:createParty.html.twig */
class __TwigTemplate_af092d6d22b83a795405c5d15dd4052b8a17f3a4ea033e6220f98d080579693e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AppBundle::base.html.twig", "AppBundle:Default:createParty.html.twig", 1);
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
        $__internal_2d14e19c94587d06c45162dae8be36f775fb2a1fd8a7f110863c950c609913c9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2d14e19c94587d06c45162dae8be36f775fb2a1fd8a7f110863c950c609913c9->enter($__internal_2d14e19c94587d06c45162dae8be36f775fb2a1fd8a7f110863c950c609913c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Default:createParty.html.twig"));

        $__internal_ab1f0f3b03adf7c5096914e47418ca0a51bae970d53cfeeb1d9701e5efe397ba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ab1f0f3b03adf7c5096914e47418ca0a51bae970d53cfeeb1d9701e5efe397ba->enter($__internal_ab1f0f3b03adf7c5096914e47418ca0a51bae970d53cfeeb1d9701e5efe397ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Default:createParty.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2d14e19c94587d06c45162dae8be36f775fb2a1fd8a7f110863c950c609913c9->leave($__internal_2d14e19c94587d06c45162dae8be36f775fb2a1fd8a7f110863c950c609913c9_prof);

        
        $__internal_ab1f0f3b03adf7c5096914e47418ca0a51bae970d53cfeeb1d9701e5efe397ba->leave($__internal_ab1f0f3b03adf7c5096914e47418ca0a51bae970d53cfeeb1d9701e5efe397ba_prof);

    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        $__internal_8005d0333f20c2b9225c851584738eb18015047dd2744bd4bdacb2f3dbec3d49 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8005d0333f20c2b9225c851584738eb18015047dd2744bd4bdacb2f3dbec3d49->enter($__internal_8005d0333f20c2b9225c851584738eb18015047dd2744bd4bdacb2f3dbec3d49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_ece763b1c87093cdfdb5e047d88b064fbb336912ad4c248d1cc8306b1ce047b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ece763b1c87093cdfdb5e047d88b064fbb336912ad4c248d1cc8306b1ce047b4->enter($__internal_ece763b1c87093cdfdb5e047d88b064fbb336912ad4c248d1cc8306b1ce047b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_ece763b1c87093cdfdb5e047d88b064fbb336912ad4c248d1cc8306b1ce047b4->leave($__internal_ece763b1c87093cdfdb5e047d88b064fbb336912ad4c248d1cc8306b1ce047b4_prof);

        
        $__internal_8005d0333f20c2b9225c851584738eb18015047dd2744bd4bdacb2f3dbec3d49->leave($__internal_8005d0333f20c2b9225c851584738eb18015047dd2744bd4bdacb2f3dbec3d49_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Default:createParty.html.twig";
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
", "AppBundle:Default:createParty.html.twig", "C:\\www\\Web2\\src\\AppBundle/Resources/views/Default/createParty.html.twig");
    }
}
