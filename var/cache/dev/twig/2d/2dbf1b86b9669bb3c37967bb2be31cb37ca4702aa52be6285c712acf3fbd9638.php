<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_085a85f7e79281ea244521c36e11876f55a8fab2d97414eb6b08dbadae73c81a extends Twig_Template
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
        $__internal_ea31f29e7ccb9dfcc36fede6fdc0b9c8e3660bf9b83bb8c19e5673560ce6d671 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ea31f29e7ccb9dfcc36fede6fdc0b9c8e3660bf9b83bb8c19e5673560ce6d671->enter($__internal_ea31f29e7ccb9dfcc36fede6fdc0b9c8e3660bf9b83bb8c19e5673560ce6d671_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        $__internal_86d90782108cd63850a9c40401563c62813d9cd1df6464ee017606b223da2284 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_86d90782108cd63850a9c40401563c62813d9cd1df6464ee017606b223da2284->enter($__internal_86d90782108cd63850a9c40401563c62813d9cd1df6464ee017606b223da2284_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_ea31f29e7ccb9dfcc36fede6fdc0b9c8e3660bf9b83bb8c19e5673560ce6d671->leave($__internal_ea31f29e7ccb9dfcc36fede6fdc0b9c8e3660bf9b83bb8c19e5673560ce6d671_prof);

        
        $__internal_86d90782108cd63850a9c40401563c62813d9cd1df6464ee017606b223da2284->leave($__internal_86d90782108cd63850a9c40401563c62813d9cd1df6464ee017606b223da2284_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
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
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/form_row.html.php", "C:\\www\\Web2\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\FormTable\\form_row.html.php");
    }
}
