<?php

/* AppBundle:User:register.html.twig */
class __TwigTemplate_1f87ddd5061de089fb4cf9bc9dd61e7150ffe00ba5e268e94bd8150ac7ed56ac extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AppBundle::base.html.twig", "AppBundle:User:register.html.twig", 1);
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
        $__internal_3a3c624552c81c54ad06f020c73be16cad047f1a62b5a1ee8f76b286ed9828ee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3a3c624552c81c54ad06f020c73be16cad047f1a62b5a1ee8f76b286ed9828ee->enter($__internal_3a3c624552c81c54ad06f020c73be16cad047f1a62b5a1ee8f76b286ed9828ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:User:register.html.twig"));

        $__internal_0c1b6f5273672dbc0f6672d859820143f923ba2e3c423572654291df4a073f59 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0c1b6f5273672dbc0f6672d859820143f923ba2e3c423572654291df4a073f59->enter($__internal_0c1b6f5273672dbc0f6672d859820143f923ba2e3c423572654291df4a073f59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:User:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3a3c624552c81c54ad06f020c73be16cad047f1a62b5a1ee8f76b286ed9828ee->leave($__internal_3a3c624552c81c54ad06f020c73be16cad047f1a62b5a1ee8f76b286ed9828ee_prof);

        
        $__internal_0c1b6f5273672dbc0f6672d859820143f923ba2e3c423572654291df4a073f59->leave($__internal_0c1b6f5273672dbc0f6672d859820143f923ba2e3c423572654291df4a073f59_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_a71c55b21c654162b2033ae7450ee18375f6077d580ad5fb02608a50a76c0d0f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a71c55b21c654162b2033ae7450ee18375f6077d580ad5fb02608a50a76c0d0f->enter($__internal_a71c55b21c654162b2033ae7450ee18375f6077d580ad5fb02608a50a76c0d0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_658f2a6729c1e27d90f3f214b60ad1490b5c62cc3b6f2ec84aca1547a700d075 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_658f2a6729c1e27d90f3f214b60ad1490b5c62cc3b6f2ec84aca1547a700d075->enter($__internal_658f2a6729c1e27d90f3f214b60ad1490b5c62cc3b6f2ec84aca1547a700d075_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_658f2a6729c1e27d90f3f214b60ad1490b5c62cc3b6f2ec84aca1547a700d075->leave($__internal_658f2a6729c1e27d90f3f214b60ad1490b5c62cc3b6f2ec84aca1547a700d075_prof);

        
        $__internal_a71c55b21c654162b2033ae7450ee18375f6077d580ad5fb02608a50a76c0d0f->leave($__internal_a71c55b21c654162b2033ae7450ee18375f6077d580ad5fb02608a50a76c0d0f_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:User:register.html.twig";
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

", "AppBundle:User:register.html.twig", "C:\\www\\Web2\\src\\AppBundle/Resources/views/User/register.html.twig");
    }
}
