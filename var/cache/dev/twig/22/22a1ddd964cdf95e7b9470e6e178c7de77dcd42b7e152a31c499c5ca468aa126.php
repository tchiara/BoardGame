<?php

/* @Framework/Form/attributes.html.php */
class __TwigTemplate_438f95d2b8c6ae583edf5be0a0d7ac7aa708a2d782ceefea0f61bfe756daeb06 extends Twig_Template
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
        $__internal_037dbcbce9419bdb906b5404c35a734a3c0ab555b0c559d6006dca1d5bc8d749 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_037dbcbce9419bdb906b5404c35a734a3c0ab555b0c559d6006dca1d5bc8d749->enter($__internal_037dbcbce9419bdb906b5404c35a734a3c0ab555b0c559d6006dca1d5bc8d749_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        $__internal_f2b2ed7b298854cd78ffc78959d3f56e405291d08835e0d5b3436517f762082c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f2b2ed7b298854cd78ffc78959d3f56e405291d08835e0d5b3436517f762082c->enter($__internal_f2b2ed7b298854cd78ffc78959d3f56e405291d08835e0d5b3436517f762082c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
";
        
        $__internal_037dbcbce9419bdb906b5404c35a734a3c0ab555b0c559d6006dca1d5bc8d749->leave($__internal_037dbcbce9419bdb906b5404c35a734a3c0ab555b0c559d6006dca1d5bc8d749_prof);

        
        $__internal_f2b2ed7b298854cd78ffc78959d3f56e405291d08835e0d5b3436517f762082c->leave($__internal_f2b2ed7b298854cd78ffc78959d3f56e405291d08835e0d5b3436517f762082c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
", "@Framework/Form/attributes.html.php", "C:\\www\\Web2\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\attributes.html.php");
    }
}
