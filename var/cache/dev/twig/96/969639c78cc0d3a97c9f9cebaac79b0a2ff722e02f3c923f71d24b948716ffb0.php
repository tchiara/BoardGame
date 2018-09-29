<?php

/* @Framework/Form/percent_widget.html.php */
class __TwigTemplate_81c1a5d396cec14460da97f1994277ab6492e5dca7b9ba87c8ce5a01022073b2 extends Twig_Template
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
        $__internal_73357634aeebe2941472d94ddb00f450136ca7f26840de834cd7603d54cfc4e8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_73357634aeebe2941472d94ddb00f450136ca7f26840de834cd7603d54cfc4e8->enter($__internal_73357634aeebe2941472d94ddb00f450136ca7f26840de834cd7603d54cfc4e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        $__internal_444a3acf1b982a4587f7c7aeb55e0e1c60d92b65c0ea90d2ab8fbff2bb5602b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_444a3acf1b982a4587f7c7aeb55e0e1c60d92b65c0ea90d2ab8fbff2bb5602b2->enter($__internal_444a3acf1b982a4587f7c7aeb55e0e1c60d92b65c0ea90d2ab8fbff2bb5602b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
        
        $__internal_73357634aeebe2941472d94ddb00f450136ca7f26840de834cd7603d54cfc4e8->leave($__internal_73357634aeebe2941472d94ddb00f450136ca7f26840de834cd7603d54cfc4e8_prof);

        
        $__internal_444a3acf1b982a4587f7c7aeb55e0e1c60d92b65c0ea90d2ab8fbff2bb5602b2->leave($__internal_444a3acf1b982a4587f7c7aeb55e0e1c60d92b65c0ea90d2ab8fbff2bb5602b2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/percent_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
", "@Framework/Form/percent_widget.html.php", "C:\\www\\Web2\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\percent_widget.html.php");
    }
}
