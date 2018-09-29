<?php

/* AppBundle:User:login.html.twig */
class __TwigTemplate_be8a3ffdd3bd05c9b086102fd0a2b72d251dcfc3db192cd32938ece35661999e extends Twig_Template
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
        $__internal_acdc7e6bb381a92c51dad0e33e02fc0ea037de07e2ea15006fb7fee948df2bc8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_acdc7e6bb381a92c51dad0e33e02fc0ea037de07e2ea15006fb7fee948df2bc8->enter($__internal_acdc7e6bb381a92c51dad0e33e02fc0ea037de07e2ea15006fb7fee948df2bc8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:User:login.html.twig"));

        $__internal_c9cde474cf8ed239f36a20e62b354df46754d8166f1ae732f4e80967a3b365f6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c9cde474cf8ed239f36a20e62b354df46754d8166f1ae732f4e80967a3b365f6->enter($__internal_c9cde474cf8ed239f36a20e62b354df46754d8166f1ae732f4e80967a3b365f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:User:login.html.twig"));

        // line 1
        echo "<li>
    ";
        // line 2
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["formLogin"] ?? $this->getContext($context, "formLogin")), 'form_start', array("action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("login")));
        echo "
    Login : ";
        // line 3
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["formLogin"] ?? $this->getContext($context, "formLogin")), "emailLogin", array()), 'widget');
        echo "
    Mot de Passe : ";
        // line 4
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["formLogin"] ?? $this->getContext($context, "formLogin")), "password", array()), 'widget');
        echo "
    ";
        // line 5
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["formLogin"] ?? $this->getContext($context, "formLogin")), "save", array()), 'widget');
        echo "
    ";
        // line 6
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["formLogin"] ?? $this->getContext($context, "formLogin")), 'widget');
        echo "
    ";
        // line 7
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["formLogin"] ?? $this->getContext($context, "formLogin")), 'form_end');
        echo "
</li>
";
        
        $__internal_acdc7e6bb381a92c51dad0e33e02fc0ea037de07e2ea15006fb7fee948df2bc8->leave($__internal_acdc7e6bb381a92c51dad0e33e02fc0ea037de07e2ea15006fb7fee948df2bc8_prof);

        
        $__internal_c9cde474cf8ed239f36a20e62b354df46754d8166f1ae732f4e80967a3b365f6->leave($__internal_c9cde474cf8ed239f36a20e62b354df46754d8166f1ae732f4e80967a3b365f6_prof);

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
", "AppBundle:User:login.html.twig", "C:\\www\\Web2\\src\\AppBundle\\Resources\\views\\User\\login.html.twig");
    }
}
