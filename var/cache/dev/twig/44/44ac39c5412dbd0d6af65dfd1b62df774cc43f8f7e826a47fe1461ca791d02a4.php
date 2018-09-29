<?php

/* AppBundle:Default:createParty.html.twig */
class __TwigTemplate_169b5bfc1e03f7598e41bffa5124bba29bfbf5f968434215d78082231a7f7606 extends Twig_Template
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
        $__internal_2cf92d01c59b8910b563394c2947337aaee205b1e544bf9fde5bbf08d6ea6bfe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2cf92d01c59b8910b563394c2947337aaee205b1e544bf9fde5bbf08d6ea6bfe->enter($__internal_2cf92d01c59b8910b563394c2947337aaee205b1e544bf9fde5bbf08d6ea6bfe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Default:createParty.html.twig"));

        $__internal_52bf41e28995e6f1b1d521fda3081d0d2a9a54264678ff753933fdb782ae404e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_52bf41e28995e6f1b1d521fda3081d0d2a9a54264678ff753933fdb782ae404e->enter($__internal_52bf41e28995e6f1b1d521fda3081d0d2a9a54264678ff753933fdb782ae404e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Default:createParty.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2cf92d01c59b8910b563394c2947337aaee205b1e544bf9fde5bbf08d6ea6bfe->leave($__internal_2cf92d01c59b8910b563394c2947337aaee205b1e544bf9fde5bbf08d6ea6bfe_prof);

        
        $__internal_52bf41e28995e6f1b1d521fda3081d0d2a9a54264678ff753933fdb782ae404e->leave($__internal_52bf41e28995e6f1b1d521fda3081d0d2a9a54264678ff753933fdb782ae404e_prof);

    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        $__internal_a4e860ad9496f95b560e687b0b23a53c9c6f5690ac3ef7076c1e570543ce6ef0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a4e860ad9496f95b560e687b0b23a53c9c6f5690ac3ef7076c1e570543ce6ef0->enter($__internal_a4e860ad9496f95b560e687b0b23a53c9c6f5690ac3ef7076c1e570543ce6ef0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_19e48d493de04669e9b544d566c68a3678dbaf773a00ed81ddcb4da095af18a5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_19e48d493de04669e9b544d566c68a3678dbaf773a00ed81ddcb4da095af18a5->enter($__internal_19e48d493de04669e9b544d566c68a3678dbaf773a00ed81ddcb4da095af18a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["formCreate"] ?? $this->getContext($context, "formCreate")), 'form_start');
        echo "
                    ";
        // line 11
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["formCreate"] ?? $this->getContext($context, "formCreate")), 'widget');
        echo "
                    ";
        // line 12
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["formCreate"] ?? $this->getContext($context, "formCreate")), 'form_end');
        echo "
                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_19e48d493de04669e9b544d566c68a3678dbaf773a00ed81ddcb4da095af18a5->leave($__internal_19e48d493de04669e9b544d566c68a3678dbaf773a00ed81ddcb4da095af18a5_prof);

        
        $__internal_a4e860ad9496f95b560e687b0b23a53c9c6f5690ac3ef7076c1e570543ce6ef0->leave($__internal_a4e860ad9496f95b560e687b0b23a53c9c6f5690ac3ef7076c1e570543ce6ef0_prof);

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
", "AppBundle:Default:createParty.html.twig", "C:\\www\\Web2\\src\\AppBundle\\Resources\\views\\Default\\createParty.html.twig");
    }
}
