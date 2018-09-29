<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_8a4d41bb74f452199bf28de936c450a734ad83d53d445b4d2685954a776bba10 extends Twig_Template
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
        $__internal_e8ad7b53ba6162ccb750e276bed6be6e9dca613e184b61378b242c0107ecb65d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e8ad7b53ba6162ccb750e276bed6be6e9dca613e184b61378b242c0107ecb65d->enter($__internal_e8ad7b53ba6162ccb750e276bed6be6e9dca613e184b61378b242c0107ecb65d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        $__internal_918f362f7d51ee8dad4f616a278e87ecc87056c9ca8edaaabb18313f0d964e09 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_918f362f7d51ee8dad4f616a278e87ecc87056c9ca8edaaabb18313f0d964e09->enter($__internal_918f362f7d51ee8dad4f616a278e87ecc87056c9ca8edaaabb18313f0d964e09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_e8ad7b53ba6162ccb750e276bed6be6e9dca613e184b61378b242c0107ecb65d->leave($__internal_e8ad7b53ba6162ccb750e276bed6be6e9dca613e184b61378b242c0107ecb65d_prof);

        
        $__internal_918f362f7d51ee8dad4f616a278e87ecc87056c9ca8edaaabb18313f0d964e09->leave($__internal_918f362f7d51ee8dad4f616a278e87ecc87056c9ca8edaaabb18313f0d964e09_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
", "@Framework/Form/password_widget.html.php", "C:\\www\\Web2\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\password_widget.html.php");
    }
}
