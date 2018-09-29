<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_c9372cd0d428595ee249934caeeac2fbb47a251c87d9b31904583c7286064470 extends Twig_Template
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
        $__internal_c8ec383877674bdb8a774a60f41a3e7e85d1776d77692ffb670849361404249e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c8ec383877674bdb8a774a60f41a3e7e85d1776d77692ffb670849361404249e->enter($__internal_c8ec383877674bdb8a774a60f41a3e7e85d1776d77692ffb670849361404249e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        $__internal_a9607c4ab0f2dd461f2b5d52d9a28a7b906772841d990995f0ac19547fd21dc7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a9607c4ab0f2dd461f2b5d52d9a28a7b906772841d990995f0ac19547fd21dc7->enter($__internal_a9607c4ab0f2dd461f2b5d52d9a28a7b906772841d990995f0ac19547fd21dc7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_c8ec383877674bdb8a774a60f41a3e7e85d1776d77692ffb670849361404249e->leave($__internal_c8ec383877674bdb8a774a60f41a3e7e85d1776d77692ffb670849361404249e_prof);

        
        $__internal_a9607c4ab0f2dd461f2b5d52d9a28a7b906772841d990995f0ac19547fd21dc7->leave($__internal_a9607c4ab0f2dd461f2b5d52d9a28a7b906772841d990995f0ac19547fd21dc7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
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
        return new Twig_Source("<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
", "@Framework/Form/button_widget.html.php", "C:\\www\\Web2\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\button_widget.html.php");
    }
}
