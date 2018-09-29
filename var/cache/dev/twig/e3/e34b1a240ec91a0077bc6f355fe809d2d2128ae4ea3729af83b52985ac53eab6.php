<?php

/* @Twig/Exception/error.css.twig */
class __TwigTemplate_1708668572bc921be6fdd0b8ab1809c26ef45dffce78c54987c85bd2e3fff2e1 extends Twig_Template
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
        $__internal_618c52737d4ed3462362c6a76ceefef1007d20e0f4663c4517beafa8ec7f8ff7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_618c52737d4ed3462362c6a76ceefef1007d20e0f4663c4517beafa8ec7f8ff7->enter($__internal_618c52737d4ed3462362c6a76ceefef1007d20e0f4663c4517beafa8ec7f8ff7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

        $__internal_9696c7cfaa8e8e8fe350045daa5d6bfa77efa213f0d83a75731711e0c8a3cd02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9696c7cfaa8e8e8fe350045daa5d6bfa77efa213f0d83a75731711e0c8a3cd02->enter($__internal_9696c7cfaa8e8e8fe350045daa5d6bfa77efa213f0d83a75731711e0c8a3cd02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_618c52737d4ed3462362c6a76ceefef1007d20e0f4663c4517beafa8ec7f8ff7->leave($__internal_618c52737d4ed3462362c6a76ceefef1007d20e0f4663c4517beafa8ec7f8ff7_prof);

        
        $__internal_9696c7cfaa8e8e8fe350045daa5d6bfa77efa213f0d83a75731711e0c8a3cd02->leave($__internal_9696c7cfaa8e8e8fe350045daa5d6bfa77efa213f0d83a75731711e0c8a3cd02_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{{ status_code }} {{ status_text }}

*/
", "@Twig/Exception/error.css.twig", "C:\\www\\Web2\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.css.twig");
    }
}
