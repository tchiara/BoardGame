<?php

/* @Framework/Form/choice_options.html.php */
class __TwigTemplate_22d5a44fcb2daef5e3be10cc69e4fd9d3060b6833dc43bd50e6c647157d37e00 extends Twig_Template
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
        $__internal_c689e4d68d6b10a69dbfb6f5576a643a58f13a3fc74283afca3c8ad89db02b9d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c689e4d68d6b10a69dbfb6f5576a643a58f13a3fc74283afca3c8ad89db02b9d->enter($__internal_c689e4d68d6b10a69dbfb6f5576a643a58f13a3fc74283afca3c8ad89db02b9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        $__internal_fb9fe6e4ade7dbddc706e480553d26676a86ce9e9cce8d28fb3fd48ca14f17f9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fb9fe6e4ade7dbddc706e480553d26676a86ce9e9cce8d28fb3fd48ca14f17f9->enter($__internal_fb9fe6e4ade7dbddc706e480553d26676a86ce9e9cce8d28fb3fd48ca14f17f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_c689e4d68d6b10a69dbfb6f5576a643a58f13a3fc74283afca3c8ad89db02b9d->leave($__internal_c689e4d68d6b10a69dbfb6f5576a643a58f13a3fc74283afca3c8ad89db02b9d_prof);

        
        $__internal_fb9fe6e4ade7dbddc706e480553d26676a86ce9e9cce8d28fb3fd48ca14f17f9->leave($__internal_fb9fe6e4ade7dbddc706e480553d26676a86ce9e9cce8d28fb3fd48ca14f17f9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_options.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
", "@Framework/Form/choice_options.html.php", "C:\\www\\Web2\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\choice_options.html.php");
    }
}
