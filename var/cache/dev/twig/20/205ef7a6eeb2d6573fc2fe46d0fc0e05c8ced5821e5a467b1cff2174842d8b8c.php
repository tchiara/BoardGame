<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_d89ef3ec34c16496f7f832d05f67fe2ae563e290bb80f5c2a450f71a057abc88 extends Twig_Template
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
        $__internal_41917927134a5602e6f270b3a5dd8c6eff13db118c48c4ace13b62608dcae7df = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_41917927134a5602e6f270b3a5dd8c6eff13db118c48c4ace13b62608dcae7df->enter($__internal_41917927134a5602e6f270b3a5dd8c6eff13db118c48c4ace13b62608dcae7df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        $__internal_d56b3da2f2a0d1d8cad400366d42bde0ddcdfefde9293d4553f545065f49b2e2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d56b3da2f2a0d1d8cad400366d42bde0ddcdfefde9293d4553f545065f49b2e2->enter($__internal_d56b3da2f2a0d1d8cad400366d42bde0ddcdfefde9293d4553f545065f49b2e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_41917927134a5602e6f270b3a5dd8c6eff13db118c48c4ace13b62608dcae7df->leave($__internal_41917927134a5602e6f270b3a5dd8c6eff13db118c48c4ace13b62608dcae7df_prof);

        
        $__internal_d56b3da2f2a0d1d8cad400366d42bde0ddcdfefde9293d4553f545065f49b2e2->leave($__internal_d56b3da2f2a0d1d8cad400366d42bde0ddcdfefde9293d4553f545065f49b2e2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
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
        return new Twig_Source("<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
", "@Framework/Form/choice_widget.html.php", "C:\\www\\Web2\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\choice_widget.html.php");
    }
}
