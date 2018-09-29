<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_1aee3d308f7f6ca7d8482ed2c462a9db0ff7fe9a9cecf0c98a137ce5d5e8db7f extends Twig_Template
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
        $__internal_830aa9476daab471e2df456fc4163e06f38969f7b7b956ed6fd0a4f41ee0fb7c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_830aa9476daab471e2df456fc4163e06f38969f7b7b956ed6fd0a4f41ee0fb7c->enter($__internal_830aa9476daab471e2df456fc4163e06f38969f7b7b956ed6fd0a4f41ee0fb7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        $__internal_ff92b5e0442159634faffb170d28181a6433212b8defad48064e48a7ea042106 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff92b5e0442159634faffb170d28181a6433212b8defad48064e48a7ea042106->enter($__internal_ff92b5e0442159634faffb170d28181a6433212b8defad48064e48a7ea042106_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_830aa9476daab471e2df456fc4163e06f38969f7b7b956ed6fd0a4f41ee0fb7c->leave($__internal_830aa9476daab471e2df456fc4163e06f38969f7b7b956ed6fd0a4f41ee0fb7c_prof);

        
        $__internal_ff92b5e0442159634faffb170d28181a6433212b8defad48064e48a7ea042106->leave($__internal_ff92b5e0442159634faffb170d28181a6433212b8defad48064e48a7ea042106_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
", "@Framework/Form/form.html.php", "C:\\www\\Web2\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form.html.php");
    }
}
