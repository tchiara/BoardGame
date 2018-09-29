<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_b8db74e7388c9908fdb56448401f378844b9ff3ea808bac03bf574c8f6c49ddf extends Twig_Template
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
        $__internal_e254257a3931d0e20c601c789a81d9875fa9e77b4a8c7c19cd102fe805d22fbb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e254257a3931d0e20c601c789a81d9875fa9e77b4a8c7c19cd102fe805d22fbb->enter($__internal_e254257a3931d0e20c601c789a81d9875fa9e77b4a8c7c19cd102fe805d22fbb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        $__internal_83a8053be701dac3b13577134ba2125354397b7a923ce0383ef89f9e98b95c7c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_83a8053be701dac3b13577134ba2125354397b7a923ce0383ef89f9e98b95c7c->enter($__internal_83a8053be701dac3b13577134ba2125354397b7a923ce0383ef89f9e98b95c7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_e254257a3931d0e20c601c789a81d9875fa9e77b4a8c7c19cd102fe805d22fbb->leave($__internal_e254257a3931d0e20c601c789a81d9875fa9e77b4a8c7c19cd102fe805d22fbb_prof);

        
        $__internal_83a8053be701dac3b13577134ba2125354397b7a923ce0383ef89f9e98b95c7c->leave($__internal_83a8053be701dac3b13577134ba2125354397b7a923ce0383ef89f9e98b95c7c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/button_row.html.php", "C:\\www\\Web2\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\button_row.html.php");
    }
}
