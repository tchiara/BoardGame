<?php

/* AppBundle:User:login.html.twig */
class __TwigTemplate_c4f157694f5a8cd8bc1d0bf4aae2222b0b741d11feaf4ea6afb43ba73ae6537f extends Twig_Template
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
        $__internal_9da73fbded599820081b2f407c5ad8ee8166cbea1682f6005594660f9e2671ad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9da73fbded599820081b2f407c5ad8ee8166cbea1682f6005594660f9e2671ad->enter($__internal_9da73fbded599820081b2f407c5ad8ee8166cbea1682f6005594660f9e2671ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:User:login.html.twig"));

        $__internal_799f5f639566da5fc0c2bee3161e7f0b2da620c889f0fe79121c952ac50960d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_799f5f639566da5fc0c2bee3161e7f0b2da620c889f0fe79121c952ac50960d1->enter($__internal_799f5f639566da5fc0c2bee3161e7f0b2da620c889f0fe79121c952ac50960d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:User:login.html.twig"));

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
        
        $__internal_9da73fbded599820081b2f407c5ad8ee8166cbea1682f6005594660f9e2671ad->leave($__internal_9da73fbded599820081b2f407c5ad8ee8166cbea1682f6005594660f9e2671ad_prof);

        
        $__internal_799f5f639566da5fc0c2bee3161e7f0b2da620c889f0fe79121c952ac50960d1->leave($__internal_799f5f639566da5fc0c2bee3161e7f0b2da620c889f0fe79121c952ac50960d1_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:User:login.html.twig";
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
", "AppBundle:User:login.html.twig", "C:\\www\\Web2\\src\\AppBundle/Resources/views/User/login.html.twig");
    }
}
