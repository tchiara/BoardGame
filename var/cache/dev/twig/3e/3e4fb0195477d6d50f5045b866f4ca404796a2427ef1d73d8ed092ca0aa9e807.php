<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_ba4ae6009d75e433a538813d37b22ae62c1aadf7f2453b7ba4419ab24c13d67f extends Twig_Template
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
        $__internal_e76bb73f4ceeeeed6f11af455dce3eac0b8214e396f83744ea8447f1067a8729 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e76bb73f4ceeeeed6f11af455dce3eac0b8214e396f83744ea8447f1067a8729->enter($__internal_e76bb73f4ceeeeed6f11af455dce3eac0b8214e396f83744ea8447f1067a8729_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        $__internal_096a9a58fa5065984ca4d14b91b914e84df0a43eada2998a35530499b75fdf62 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_096a9a58fa5065984ca4d14b91b914e84df0a43eada2998a35530499b75fdf62->enter($__internal_096a9a58fa5065984ca4d14b91b914e84df0a43eada2998a35530499b75fdf62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_e76bb73f4ceeeeed6f11af455dce3eac0b8214e396f83744ea8447f1067a8729->leave($__internal_e76bb73f4ceeeeed6f11af455dce3eac0b8214e396f83744ea8447f1067a8729_prof);

        
        $__internal_096a9a58fa5065984ca4d14b91b914e84df0a43eada2998a35530499b75fdf62->leave($__internal_096a9a58fa5065984ca4d14b91b914e84df0a43eada2998a35530499b75fdf62_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
", "@Framework/Form/url_widget.html.php", "C:\\www\\Web2\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\url_widget.html.php");
    }
}
