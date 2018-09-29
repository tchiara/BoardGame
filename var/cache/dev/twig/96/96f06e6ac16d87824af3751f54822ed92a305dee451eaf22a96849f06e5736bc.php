<?php

/* @Twig/Exception/error.txt.twig */
class __TwigTemplate_482170560928885b13281afc77b75879daee511d68bdfa1948a5fad4b86674c8 extends Twig_Template
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
        $__internal_b786bfaa21ce25adb96edfd8105f60d1dfbb5d70a98aa27d38a70b4c2099ae43 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b786bfaa21ce25adb96edfd8105f60d1dfbb5d70a98aa27d38a70b4c2099ae43->enter($__internal_b786bfaa21ce25adb96edfd8105f60d1dfbb5d70a98aa27d38a70b4c2099ae43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.txt.twig"));

        $__internal_5db9279f884438efd83b711120d8cbf849c3f2b460432f53fb822c613f8e521d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5db9279f884438efd83b711120d8cbf849c3f2b460432f53fb822c613f8e521d->enter($__internal_5db9279f884438efd83b711120d8cbf849c3f2b460432f53fb822c613f8e521d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code"));
        echo " ";
        echo (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_b786bfaa21ce25adb96edfd8105f60d1dfbb5d70a98aa27d38a70b4c2099ae43->leave($__internal_b786bfaa21ce25adb96edfd8105f60d1dfbb5d70a98aa27d38a70b4c2099ae43_prof);

        
        $__internal_5db9279f884438efd83b711120d8cbf849c3f2b460432f53fb822c613f8e521d->leave($__internal_5db9279f884438efd83b711120d8cbf849c3f2b460432f53fb822c613f8e521d_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("Oops! An Error Occurred
=======================

The server returned a \"{{ status_code }} {{ status_text }}\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
", "@Twig/Exception/error.txt.twig", "C:\\www\\Web2\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.txt.twig");
    }
}
