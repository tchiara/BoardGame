<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_e94e33310ae95e5c63f6ffc34d64de60e01a04381f8bbda4ddefed83ddd73229 extends Twig_Template
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
        $__internal_65e59e041d63701cb7b8e97b3ca4fa5da3f87b9e20da51a56ea49c8048012f69 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_65e59e041d63701cb7b8e97b3ca4fa5da3f87b9e20da51a56ea49c8048012f69->enter($__internal_65e59e041d63701cb7b8e97b3ca4fa5da3f87b9e20da51a56ea49c8048012f69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_8480d41c2a7399783c048a8afc0a4a57889d458f342aa810ce56b9f3f787c3cc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8480d41c2a7399783c048a8afc0a4a57889d458f342aa810ce56b9f3f787c3cc->enter($__internal_8480d41c2a7399783c048a8afc0a4a57889d458f342aa810ce56b9f3f787c3cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_65e59e041d63701cb7b8e97b3ca4fa5da3f87b9e20da51a56ea49c8048012f69->leave($__internal_65e59e041d63701cb7b8e97b3ca4fa5da3f87b9e20da51a56ea49c8048012f69_prof);

        
        $__internal_8480d41c2a7399783c048a8afc0a4a57889d458f342aa810ce56b9f3f787c3cc->leave($__internal_8480d41c2a7399783c048a8afc0a4a57889d458f342aa810ce56b9f3f787c3cc_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "C:\\www\\Web2\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\reset_widget.html.php");
    }
}
