<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_03e1df71ce0b6b49bc6927a38f198ba44bb38c50e09e9b103aa8ee49de9a3883 extends Twig_Template
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
        $__internal_0863a63e0bf995e15706ff2e2a51529230852871032d48eeb0fc7e1b9927ac93 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0863a63e0bf995e15706ff2e2a51529230852871032d48eeb0fc7e1b9927ac93->enter($__internal_0863a63e0bf995e15706ff2e2a51529230852871032d48eeb0fc7e1b9927ac93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        $__internal_02df398d54e847ad0623fb36b894cddfd6f29efdaf736d76178200a90a66cd38 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_02df398d54e847ad0623fb36b894cddfd6f29efdaf736d76178200a90a66cd38->enter($__internal_02df398d54e847ad0623fb36b894cddfd6f29efdaf736d76178200a90a66cd38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_0863a63e0bf995e15706ff2e2a51529230852871032d48eeb0fc7e1b9927ac93->leave($__internal_0863a63e0bf995e15706ff2e2a51529230852871032d48eeb0fc7e1b9927ac93_prof);

        
        $__internal_02df398d54e847ad0623fb36b894cddfd6f29efdaf736d76178200a90a66cd38->leave($__internal_02df398d54e847ad0623fb36b894cddfd6f29efdaf736d76178200a90a66cd38_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
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
        return new Twig_Source("<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/hidden_row.html.php", "C:\\www\\Web2\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\FormTable\\hidden_row.html.php");
    }
}
