<?php

/* @Framework/FormTable/button_row.html.php */
class __TwigTemplate_7959ef5ed9cdd813f00e4daf8ae070426af728311cdf56baa99670839740c46d extends Twig_Template
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
        $__internal_f85f25c489052ae3863545883f2ef135386e10ff7d699b5c285d35e471785fb4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f85f25c489052ae3863545883f2ef135386e10ff7d699b5c285d35e471785fb4->enter($__internal_f85f25c489052ae3863545883f2ef135386e10ff7d699b5c285d35e471785fb4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        $__internal_42ce7a1e21afc65aaa070eea30d826233462c929d4d77389c4f1a25ba671dc96 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_42ce7a1e21afc65aaa070eea30d826233462c929d4d77389c4f1a25ba671dc96->enter($__internal_42ce7a1e21afc65aaa070eea30d826233462c929d4d77389c4f1a25ba671dc96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_f85f25c489052ae3863545883f2ef135386e10ff7d699b5c285d35e471785fb4->leave($__internal_f85f25c489052ae3863545883f2ef135386e10ff7d699b5c285d35e471785fb4_prof);

        
        $__internal_42ce7a1e21afc65aaa070eea30d826233462c929d4d77389c4f1a25ba671dc96->leave($__internal_42ce7a1e21afc65aaa070eea30d826233462c929d4d77389c4f1a25ba671dc96_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/button_row.html.php";
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
        return new Twig_Source("<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/button_row.html.php", "C:\\www\\Web2\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\FormTable\\button_row.html.php");
    }
}
