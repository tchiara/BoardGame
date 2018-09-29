<?php

/* @App/User/login.html.twig */
class __TwigTemplate_d973a575f8c59d89abd7d3db5ce987f23587fa5ad9df961112cb0c4be7ab58ce extends Twig_Template
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
        $__internal_2b25462ddea493211c62651998d74b879c69e31d116e8d9ace7c4d4e0ee01858 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2b25462ddea493211c62651998d74b879c69e31d116e8d9ace7c4d4e0ee01858->enter($__internal_2b25462ddea493211c62651998d74b879c69e31d116e8d9ace7c4d4e0ee01858_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@App/User/login.html.twig"));

        $__internal_a574c23b941b18a8c9278139623913feb39f701311eb1f60d4eae34487b69687 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a574c23b941b18a8c9278139623913feb39f701311eb1f60d4eae34487b69687->enter($__internal_a574c23b941b18a8c9278139623913feb39f701311eb1f60d4eae34487b69687_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@App/User/login.html.twig"));

        // line 1
        echo "<li>
    ";
        // line 2
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["formLogin"]) ? $context["formLogin"] : $this->getContext($context, "formLogin")), 'form_start', array("action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("login")));
        echo "
    Login : ";
        // line 3
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["formLogin"]) ? $context["formLogin"] : $this->getContext($context, "formLogin")), "emailLogin", array()), 'widget');
        echo "
    Mot de Passe : ";
        // line 4
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["formLogin"]) ? $context["formLogin"] : $this->getContext($context, "formLogin")), "password", array()), 'widget');
        echo "
    ";
        // line 5
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["formLogin"]) ? $context["formLogin"] : $this->getContext($context, "formLogin")), "save", array()), 'widget');
        echo "
    ";
        // line 6
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["formLogin"]) ? $context["formLogin"] : $this->getContext($context, "formLogin")), 'widget');
        echo "
    ";
        // line 7
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["formLogin"]) ? $context["formLogin"] : $this->getContext($context, "formLogin")), 'form_end');
        echo "
</li>
";
        
        $__internal_2b25462ddea493211c62651998d74b879c69e31d116e8d9ace7c4d4e0ee01858->leave($__internal_2b25462ddea493211c62651998d74b879c69e31d116e8d9ace7c4d4e0ee01858_prof);

        
        $__internal_a574c23b941b18a8c9278139623913feb39f701311eb1f60d4eae34487b69687->leave($__internal_a574c23b941b18a8c9278139623913feb39f701311eb1f60d4eae34487b69687_prof);

    }

    public function getTemplateName()
    {
        return "@App/User/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 7,  44 => 6,  40 => 5,  36 => 4,  32 => 3,  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<li>
    {{form_start(formLogin, {'action' : path('login')})}}
    Login : {{form_widget(formLogin.emailLogin)}}
    Mot de Passe : {{form_widget(formLogin.password)}}
    {{form_widget(formLogin.save)}}
    {{form_widget(formLogin)}}
    {{form_end(formLogin)}}
</li>
", "@App/User/login.html.twig", "C:\\www\\Web2\\src\\AppBundle\\Resources\\views\\User\\login.html.twig");
    }
}
