<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_92f62d2846d202a26fb29024b582cd18584bc0b31caa89bf64db66d776a71f16 extends Twig_Template
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
        $__internal_67b01a2ffca2e5dcd5dee08457707547711b602120eeabc1ccb2106836a71251 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_67b01a2ffca2e5dcd5dee08457707547711b602120eeabc1ccb2106836a71251->enter($__internal_67b01a2ffca2e5dcd5dee08457707547711b602120eeabc1ccb2106836a71251_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        $__internal_e1ebc338618ca0bf50a7e8c965f782b08e4ab5d5104426b70983b52cf75ddb04 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e1ebc338618ca0bf50a7e8c965f782b08e4ab5d5104426b70983b52cf75ddb04->enter($__internal_e1ebc338618ca0bf50a7e8c965f782b08e4ab5d5104426b70983b52cf75ddb04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_67b01a2ffca2e5dcd5dee08457707547711b602120eeabc1ccb2106836a71251->leave($__internal_67b01a2ffca2e5dcd5dee08457707547711b602120eeabc1ccb2106836a71251_prof);

        
        $__internal_e1ebc338618ca0bf50a7e8c965f782b08e4ab5d5104426b70983b52cf75ddb04->leave($__internal_e1ebc338618ca0bf50a7e8c965f782b08e4ab5d5104426b70983b52cf75ddb04_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
", "@Framework/Form/form_rows.html.php", "C:\\www\\Web2\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_rows.html.php");
    }
}
