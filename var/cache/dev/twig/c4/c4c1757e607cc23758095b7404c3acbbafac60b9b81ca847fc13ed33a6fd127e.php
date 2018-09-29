<?php

/* @Framework/Form/number_widget.html.php */
class __TwigTemplate_2802bf873dfcf0b291c23335fc1509bada7d758941c7223e860f128766bc7f78 extends Twig_Template
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
        $__internal_1bbae1a1699a3851c7ff249696e1e7144b585ae8d07042a55041b591afdc4493 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1bbae1a1699a3851c7ff249696e1e7144b585ae8d07042a55041b591afdc4493->enter($__internal_1bbae1a1699a3851c7ff249696e1e7144b585ae8d07042a55041b591afdc4493_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        $__internal_eb9b419102c3f9d3257f6bb6d8d2258a8ae5930d4ce26cd017914efb5fb5e44f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eb9b419102c3f9d3257f6bb6d8d2258a8ae5930d4ce26cd017914efb5fb5e44f->enter($__internal_eb9b419102c3f9d3257f6bb6d8d2258a8ae5930d4ce26cd017914efb5fb5e44f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_1bbae1a1699a3851c7ff249696e1e7144b585ae8d07042a55041b591afdc4493->leave($__internal_1bbae1a1699a3851c7ff249696e1e7144b585ae8d07042a55041b591afdc4493_prof);

        
        $__internal_eb9b419102c3f9d3257f6bb6d8d2258a8ae5930d4ce26cd017914efb5fb5e44f->leave($__internal_eb9b419102c3f9d3257f6bb6d8d2258a8ae5930d4ce26cd017914efb5fb5e44f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/number_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
", "@Framework/Form/number_widget.html.php", "C:\\www\\Web2\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\number_widget.html.php");
    }
}
