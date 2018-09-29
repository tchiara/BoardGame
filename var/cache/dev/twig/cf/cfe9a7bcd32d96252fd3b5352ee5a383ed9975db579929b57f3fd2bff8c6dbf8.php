<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_e75baf544d14334debdb9011590cd4ff2eb394362b774ee9d4827ef13ed32c9d extends Twig_Template
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
        $__internal_fb5fbf7776c17cdf1190458f310743f3c9ea564ff233e1352449b647d771d8ca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fb5fbf7776c17cdf1190458f310743f3c9ea564ff233e1352449b647d771d8ca->enter($__internal_fb5fbf7776c17cdf1190458f310743f3c9ea564ff233e1352449b647d771d8ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_798cf480f4f5fcaa6029fecd3bd3577203542485a97ed901cfd4d758d934aabd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_798cf480f4f5fcaa6029fecd3bd3577203542485a97ed901cfd4d758d934aabd->enter($__internal_798cf480f4f5fcaa6029fecd3bd3577203542485a97ed901cfd4d758d934aabd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_fb5fbf7776c17cdf1190458f310743f3c9ea564ff233e1352449b647d771d8ca->leave($__internal_fb5fbf7776c17cdf1190458f310743f3c9ea564ff233e1352449b647d771d8ca_prof);

        
        $__internal_798cf480f4f5fcaa6029fecd3bd3577203542485a97ed901cfd4d758d934aabd->leave($__internal_798cf480f4f5fcaa6029fecd3bd3577203542485a97ed901cfd4d758d934aabd_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "C:\\www\\Web2\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\submit_widget.html.php");
    }
}
