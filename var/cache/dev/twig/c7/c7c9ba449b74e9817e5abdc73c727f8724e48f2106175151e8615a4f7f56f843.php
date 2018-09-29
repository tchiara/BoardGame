<?php

/* @Framework/Form/repeated_row.html.php */
class __TwigTemplate_28e0390647397dc850855c2e15f8b5f03e44bf2bab3365e8d1ccb7939ec2f10c extends Twig_Template
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
        $__internal_5245f726947987b327a1252eb1546f2538f7cffca8383ff5bbc27b232cfc294b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5245f726947987b327a1252eb1546f2538f7cffca8383ff5bbc27b232cfc294b->enter($__internal_5245f726947987b327a1252eb1546f2538f7cffca8383ff5bbc27b232cfc294b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/repeated_row.html.php"));

        $__internal_02292e394b09753408694ca516324ac3f88175521cc195289e54cc1e212dddd0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_02292e394b09753408694ca516324ac3f88175521cc195289e54cc1e212dddd0->enter($__internal_02292e394b09753408694ca516324ac3f88175521cc195289e54cc1e212dddd0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/repeated_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_rows') ?>
";
        
        $__internal_5245f726947987b327a1252eb1546f2538f7cffca8383ff5bbc27b232cfc294b->leave($__internal_5245f726947987b327a1252eb1546f2538f7cffca8383ff5bbc27b232cfc294b_prof);

        
        $__internal_02292e394b09753408694ca516324ac3f88175521cc195289e54cc1e212dddd0->leave($__internal_02292e394b09753408694ca516324ac3f88175521cc195289e54cc1e212dddd0_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/repeated_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_rows') ?>
", "@Framework/Form/repeated_row.html.php", "C:\\www\\Web2\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\repeated_row.html.php");
    }
}
