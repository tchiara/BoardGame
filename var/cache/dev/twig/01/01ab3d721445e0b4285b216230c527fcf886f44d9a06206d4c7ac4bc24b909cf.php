<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_9c10f6c23fadcd05dc81cb9a6167fe0506ed20ba4a39d2b95ee11e8337aa8d2c extends Twig_Template
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
        $__internal_0229e3d4d1b0f85b2018c9dbae3b249b14f041e5e0148055bb1b7bb210dbd742 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0229e3d4d1b0f85b2018c9dbae3b249b14f041e5e0148055bb1b7bb210dbd742->enter($__internal_0229e3d4d1b0f85b2018c9dbae3b249b14f041e5e0148055bb1b7bb210dbd742_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        $__internal_d6d007a9112eccdcc6c8bdd6054eb7b95b9a82150c4af5380bbfd49def59cc4f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d6d007a9112eccdcc6c8bdd6054eb7b95b9a82150c4af5380bbfd49def59cc4f->enter($__internal_d6d007a9112eccdcc6c8bdd6054eb7b95b9a82150c4af5380bbfd49def59cc4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_0229e3d4d1b0f85b2018c9dbae3b249b14f041e5e0148055bb1b7bb210dbd742->leave($__internal_0229e3d4d1b0f85b2018c9dbae3b249b14f041e5e0148055bb1b7bb210dbd742_prof);

        
        $__internal_d6d007a9112eccdcc6c8bdd6054eb7b95b9a82150c4af5380bbfd49def59cc4f->leave($__internal_d6d007a9112eccdcc6c8bdd6054eb7b95b9a82150c4af5380bbfd49def59cc4f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
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
        return new Twig_Source("<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/radio_widget.html.php", "C:\\www\\Web2\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\radio_widget.html.php");
    }
}
