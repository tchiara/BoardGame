<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_d6205aa200191499e338b35e586f74564abb8cd01f8fa93ad85bae60e70facc9 extends Twig_Template
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
        $__internal_ed9040395eeb0f18ea8f4a10eda2160fbc0ae775d89eb74b1112b86543d35d11 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ed9040395eeb0f18ea8f4a10eda2160fbc0ae775d89eb74b1112b86543d35d11->enter($__internal_ed9040395eeb0f18ea8f4a10eda2160fbc0ae775d89eb74b1112b86543d35d11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        $__internal_2b29dae0a46f06da1249621496b929f10443793976043b38fef2203ae5e4a3fc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2b29dae0a46f06da1249621496b929f10443793976043b38fef2203ae5e4a3fc->enter($__internal_2b29dae0a46f06da1249621496b929f10443793976043b38fef2203ae5e4a3fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_ed9040395eeb0f18ea8f4a10eda2160fbc0ae775d89eb74b1112b86543d35d11->leave($__internal_ed9040395eeb0f18ea8f4a10eda2160fbc0ae775d89eb74b1112b86543d35d11_prof);

        
        $__internal_2b29dae0a46f06da1249621496b929f10443793976043b38fef2203ae5e4a3fc->leave($__internal_2b29dae0a46f06da1249621496b929f10443793976043b38fef2203ae5e4a3fc_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}
", "TwigBundle:Exception:error.json.twig", "C:\\www\\Web2\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.json.twig");
    }
}
