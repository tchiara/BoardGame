<?php

/* @Framework/Form/hidden_row.html.php */
class __TwigTemplate_765cf7567bd13cb000f0a7606104138743636c1065830633d4ad1d23e480ec9a extends Twig_Template
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
        $__internal_68a44b40e8a78d3a748fc2dde6bad3f946049abf83e7f6b77535f36972700e90 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_68a44b40e8a78d3a748fc2dde6bad3f946049abf83e7f6b77535f36972700e90->enter($__internal_68a44b40e8a78d3a748fc2dde6bad3f946049abf83e7f6b77535f36972700e90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        $__internal_2528fd9506f565ae8df0e70a65d4c6250b91df61accfaad238dea5755bd4bc54 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2528fd9506f565ae8df0e70a65d4c6250b91df61accfaad238dea5755bd4bc54->enter($__internal_2528fd9506f565ae8df0e70a65d4c6250b91df61accfaad238dea5755bd4bc54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_68a44b40e8a78d3a748fc2dde6bad3f946049abf83e7f6b77535f36972700e90->leave($__internal_68a44b40e8a78d3a748fc2dde6bad3f946049abf83e7f6b77535f36972700e90_prof);

        
        $__internal_2528fd9506f565ae8df0e70a65d4c6250b91df61accfaad238dea5755bd4bc54->leave($__internal_2528fd9506f565ae8df0e70a65d4c6250b91df61accfaad238dea5755bd4bc54_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->widget(\$form) ?>
", "@Framework/Form/hidden_row.html.php", "C:\\www\\Web2\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\hidden_row.html.php");
    }
}
