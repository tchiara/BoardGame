<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_841de668e0710b00073832b496127d5bfb678ba1ef750def646f3b188f7f556f extends Twig_Template
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
        $__internal_41b366e3575bfb25738d0f061d84a858f1fbebf5869a071293a5a03389a6a790 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_41b366e3575bfb25738d0f061d84a858f1fbebf5869a071293a5a03389a6a790->enter($__internal_41b366e3575bfb25738d0f061d84a858f1fbebf5869a071293a5a03389a6a790_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        $__internal_ddf243d9dd8965dba1a6fca243f3f0358ff79af0710b5b3260354434f3d16edd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ddf243d9dd8965dba1a6fca243f3f0358ff79af0710b5b3260354434f3d16edd->enter($__internal_ddf243d9dd8965dba1a6fca243f3f0358ff79af0710b5b3260354434f3d16edd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_41b366e3575bfb25738d0f061d84a858f1fbebf5869a071293a5a03389a6a790->leave($__internal_41b366e3575bfb25738d0f061d84a858f1fbebf5869a071293a5a03389a6a790_prof);

        
        $__internal_ddf243d9dd8965dba1a6fca243f3f0358ff79af0710b5b3260354434f3d16edd->leave($__internal_ddf243d9dd8965dba1a6fca243f3f0358ff79af0710b5b3260354434f3d16edd_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/search_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
", "@Framework/Form/search_widget.html.php", "C:\\www\\Web2\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\search_widget.html.php");
    }
}
