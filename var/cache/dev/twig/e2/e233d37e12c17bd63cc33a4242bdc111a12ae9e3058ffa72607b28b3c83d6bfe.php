<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_4200d37ffa52f13af3d7ac4d14c8c6961ae98f0e2e8954cb8adc54233b648d9f extends Twig_Template
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
        $__internal_d9ba92200c7d931ab196895066807b032821fbd7e220826a954cf6eaeabc4215 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d9ba92200c7d931ab196895066807b032821fbd7e220826a954cf6eaeabc4215->enter($__internal_d9ba92200c7d931ab196895066807b032821fbd7e220826a954cf6eaeabc4215_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        $__internal_177f6b1051def27cd543b4ed5a887805ec73182cdbdc8bcabd266ebe274ba862 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_177f6b1051def27cd543b4ed5a887805ec73182cdbdc8bcabd266ebe274ba862->enter($__internal_177f6b1051def27cd543b4ed5a887805ec73182cdbdc8bcabd266ebe274ba862_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_d9ba92200c7d931ab196895066807b032821fbd7e220826a954cf6eaeabc4215->leave($__internal_d9ba92200c7d931ab196895066807b032821fbd7e220826a954cf6eaeabc4215_prof);

        
        $__internal_177f6b1051def27cd543b4ed5a887805ec73182cdbdc8bcabd266ebe274ba862->leave($__internal_177f6b1051def27cd543b4ed5a887805ec73182cdbdc8bcabd266ebe274ba862_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/integer_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
", "@Framework/Form/integer_widget.html.php", "C:\\www\\Web2\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\integer_widget.html.php");
    }
}
