<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_7da94c75a485bd5d8225de6e30d7d8888732ffc8123f20fbe3f06471ca4eb03e extends Twig_Template
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
        $__internal_49a39c7a49181c826d9cbe3ce6d47a2cf7d18194b05d5fa1a7a67515208b6b0c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_49a39c7a49181c826d9cbe3ce6d47a2cf7d18194b05d5fa1a7a67515208b6b0c->enter($__internal_49a39c7a49181c826d9cbe3ce6d47a2cf7d18194b05d5fa1a7a67515208b6b0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_b37528681f822fd65a310c2b13d4122d13e21d82aa8fd2569880ca6874f665a1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b37528681f822fd65a310c2b13d4122d13e21d82aa8fd2569880ca6874f665a1->enter($__internal_b37528681f822fd65a310c2b13d4122d13e21d82aa8fd2569880ca6874f665a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_49a39c7a49181c826d9cbe3ce6d47a2cf7d18194b05d5fa1a7a67515208b6b0c->leave($__internal_49a39c7a49181c826d9cbe3ce6d47a2cf7d18194b05d5fa1a7a67515208b6b0c_prof);

        
        $__internal_b37528681f822fd65a310c2b13d4122d13e21d82aa8fd2569880ca6874f665a1->leave($__internal_b37528681f822fd65a310c2b13d4122d13e21d82aa8fd2569880ca6874f665a1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
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
        return new Twig_Source("<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
", "@Framework/Form/textarea_widget.html.php", "C:\\www\\Web2\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\textarea_widget.html.php");
    }
}
