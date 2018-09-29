<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_9bd17346f1151846329ee9bedb764f130a7eb79eb82f02ad955b2424b15b926c extends Twig_Template
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
        $__internal_105a47c984c9890ea313db796ba71500c85eb6787144a8c4ec26d500d898b496 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_105a47c984c9890ea313db796ba71500c85eb6787144a8c4ec26d500d898b496->enter($__internal_105a47c984c9890ea313db796ba71500c85eb6787144a8c4ec26d500d898b496_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        $__internal_91804625f16380c9b1137ae494ae2bedaf50904a3da48e9fa88da88065d5a56a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_91804625f16380c9b1137ae494ae2bedaf50904a3da48e9fa88da88065d5a56a->enter($__internal_91804625f16380c9b1137ae494ae2bedaf50904a3da48e9fa88da88065d5a56a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_105a47c984c9890ea313db796ba71500c85eb6787144a8c4ec26d500d898b496->leave($__internal_105a47c984c9890ea313db796ba71500c85eb6787144a8c4ec26d500d898b496_prof);

        
        $__internal_91804625f16380c9b1137ae494ae2bedaf50904a3da48e9fa88da88065d5a56a->leave($__internal_91804625f16380c9b1137ae494ae2bedaf50904a3da48e9fa88da88065d5a56a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
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
        return new Twig_Source("<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
", "@Framework/Form/collection_widget.html.php", "C:\\www\\Web2\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\collection_widget.html.php");
    }
}
