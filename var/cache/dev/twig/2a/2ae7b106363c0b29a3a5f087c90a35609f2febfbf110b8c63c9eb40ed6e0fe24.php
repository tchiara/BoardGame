<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_71fad4b8f8f0a704383a073e7530ad0ab79a4eda6e833cddba57eb6d5755386c extends Twig_Template
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
        $__internal_ba4759c35e73aa24c61ce86279eac81b21d172dea15c356e5c5f6c4f40edab7b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ba4759c35e73aa24c61ce86279eac81b21d172dea15c356e5c5f6c4f40edab7b->enter($__internal_ba4759c35e73aa24c61ce86279eac81b21d172dea15c356e5c5f6c4f40edab7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        $__internal_cc8e0e2b6c79b0d6e66a4a1e1987a58215f05c322f668d6ab7052567fd7d1723 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc8e0e2b6c79b0d6e66a4a1e1987a58215f05c322f668d6ab7052567fd7d1723->enter($__internal_cc8e0e2b6c79b0d6e66a4a1e1987a58215f05c322f668d6ab7052567fd7d1723_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_ba4759c35e73aa24c61ce86279eac81b21d172dea15c356e5c5f6c4f40edab7b->leave($__internal_ba4759c35e73aa24c61ce86279eac81b21d172dea15c356e5c5f6c4f40edab7b_prof);

        
        $__internal_cc8e0e2b6c79b0d6e66a4a1e1987a58215f05c322f668d6ab7052567fd7d1723->leave($__internal_cc8e0e2b6c79b0d6e66a4a1e1987a58215f05c322f668d6ab7052567fd7d1723_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/email_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
", "@Framework/Form/email_widget.html.php", "C:\\www\\Web2\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\email_widget.html.php");
    }
}
