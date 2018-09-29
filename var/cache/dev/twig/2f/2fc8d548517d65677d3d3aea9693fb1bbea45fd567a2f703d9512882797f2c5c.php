<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_8731a420aec54a97ee655fb2d2b7631a4ae901573530878e2dc0fada578b27e6 extends Twig_Template
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
        $__internal_fa750233c406fe4dbdf094bf8a55ea96a62295d5dd88696346225851ab1ba7cb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fa750233c406fe4dbdf094bf8a55ea96a62295d5dd88696346225851ab1ba7cb->enter($__internal_fa750233c406fe4dbdf094bf8a55ea96a62295d5dd88696346225851ab1ba7cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_bf5ab16b29f36211717c8797743551cf3eab341f7582fa4716a3d83bfe63f051 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf5ab16b29f36211717c8797743551cf3eab341f7582fa4716a3d83bfe63f051->enter($__internal_bf5ab16b29f36211717c8797743551cf3eab341f7582fa4716a3d83bfe63f051_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_fa750233c406fe4dbdf094bf8a55ea96a62295d5dd88696346225851ab1ba7cb->leave($__internal_fa750233c406fe4dbdf094bf8a55ea96a62295d5dd88696346225851ab1ba7cb_prof);

        
        $__internal_bf5ab16b29f36211717c8797743551cf3eab341f7582fa4716a3d83bfe63f051->leave($__internal_bf5ab16b29f36211717c8797743551cf3eab341f7582fa4716a3d83bfe63f051_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
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
        return new Twig_Source("<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
", "@Framework/Form/form_enctype.html.php", "C:\\www\\Web2\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_enctype.html.php");
    }
}
