<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_a51f3695669ca2b7a1da6af81355efc27dc4c2b30a776f845dfb0dbfb8eb941c extends Twig_Template
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
        $__internal_44aa62d93d7abefe6940157981198b240c3d7cd60254de5699262c609da91932 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_44aa62d93d7abefe6940157981198b240c3d7cd60254de5699262c609da91932->enter($__internal_44aa62d93d7abefe6940157981198b240c3d7cd60254de5699262c609da91932_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        $__internal_3ba1d688a22e0319cd58a3edcaf1e982aeb3444f13ecc180c8505832af640999 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ba1d688a22e0319cd58a3edcaf1e982aeb3444f13ecc180c8505832af640999->enter($__internal_3ba1d688a22e0319cd58a3edcaf1e982aeb3444f13ecc180c8505832af640999_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_44aa62d93d7abefe6940157981198b240c3d7cd60254de5699262c609da91932->leave($__internal_44aa62d93d7abefe6940157981198b240c3d7cd60254de5699262c609da91932_prof);

        
        $__internal_3ba1d688a22e0319cd58a3edcaf1e982aeb3444f13ecc180c8505832af640999->leave($__internal_3ba1d688a22e0319cd58a3edcaf1e982aeb3444f13ecc180c8505832af640999_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?xml version=\"1.0\" encoding=\"{{ _charset }}\" ?>

<error code=\"{{ status_code }}\" message=\"{{ status_text }}\" />
", "TwigBundle:Exception:error.xml.twig", "C:\\www\\Web2\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.xml.twig");
    }
}
