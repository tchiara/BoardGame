<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_1a13ef417360f111dc8823e38a6fb3985a1c1f47a2ad650e4fb0b8666c609571 extends Twig_Template
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
        $__internal_0adc178be450c47e10d23ea6a01bf0d9ea995c19b81fe7b7aafa76af173b3520 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0adc178be450c47e10d23ea6a01bf0d9ea995c19b81fe7b7aafa76af173b3520->enter($__internal_0adc178be450c47e10d23ea6a01bf0d9ea995c19b81fe7b7aafa76af173b3520_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_1a951e952cb4eb6fe1b0864f1f7c7fb48c534d9348045c44910e5f3616b5bac1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a951e952cb4eb6fe1b0864f1f7c7fb48c534d9348045c44910e5f3616b5bac1->enter($__internal_1a951e952cb4eb6fe1b0864f1f7c7fb48c534d9348045c44910e5f3616b5bac1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_0adc178be450c47e10d23ea6a01bf0d9ea995c19b81fe7b7aafa76af173b3520->leave($__internal_0adc178be450c47e10d23ea6a01bf0d9ea995c19b81fe7b7aafa76af173b3520_prof);

        
        $__internal_1a951e952cb4eb6fe1b0864f1f7c7fb48c534d9348045c44910e5f3616b5bac1->leave($__internal_1a951e952cb4eb6fe1b0864f1f7c7fb48c534d9348045c44910e5f3616b5bac1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
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
        return new Twig_Source("<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
", "@Framework/Form/form_widget.html.php", "C:\\www\\Web2\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_widget.html.php");
    }
}
