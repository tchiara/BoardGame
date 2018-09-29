<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_548bcaa49779f00f944e90208efd9609ffbc26896996f67ee7c056a88554c014 extends Twig_Template
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
        $__internal_61788f6c3875f9dc2152c78c875370a13766c2ba27c1090d5763341b48311e86 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_61788f6c3875f9dc2152c78c875370a13766c2ba27c1090d5763341b48311e86->enter($__internal_61788f6c3875f9dc2152c78c875370a13766c2ba27c1090d5763341b48311e86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        $__internal_086ba3b407da51371bdc9842ccf5469dc51de8cdc1411315ce2f305d912077cc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_086ba3b407da51371bdc9842ccf5469dc51de8cdc1411315ce2f305d912077cc->enter($__internal_086ba3b407da51371bdc9842ccf5469dc51de8cdc1411315ce2f305d912077cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_61788f6c3875f9dc2152c78c875370a13766c2ba27c1090d5763341b48311e86->leave($__internal_61788f6c3875f9dc2152c78c875370a13766c2ba27c1090d5763341b48311e86_prof);

        
        $__internal_086ba3b407da51371bdc9842ccf5469dc51de8cdc1411315ce2f305d912077cc->leave($__internal_086ba3b407da51371bdc9842ccf5469dc51de8cdc1411315ce2f305d912077cc_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
", "@Framework/Form/hidden_widget.html.php", "C:\\www\\Web2\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\hidden_widget.html.php");
    }
}
