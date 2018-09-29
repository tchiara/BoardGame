<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_b124abf8e1ee7f9d3bfbd371b1e444633ae7c2267f94ff6dec1cbe52cfe8601b extends Twig_Template
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
        $__internal_5a582d3c2cd558a3cba179ca70fbdaeeee9d4b7ac97323a7777c460c803fd89b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5a582d3c2cd558a3cba179ca70fbdaeeee9d4b7ac97323a7777c460c803fd89b->enter($__internal_5a582d3c2cd558a3cba179ca70fbdaeeee9d4b7ac97323a7777c460c803fd89b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        $__internal_448fbdf2e462f5dc8e1f2f3df242d7b1d404c891816ccbe8d01103f0a4532f6c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_448fbdf2e462f5dc8e1f2f3df242d7b1d404c891816ccbe8d01103f0a4532f6c->enter($__internal_448fbdf2e462f5dc8e1f2f3df242d7b1d404c891816ccbe8d01103f0a4532f6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_5a582d3c2cd558a3cba179ca70fbdaeeee9d4b7ac97323a7777c460c803fd89b->leave($__internal_5a582d3c2cd558a3cba179ca70fbdaeeee9d4b7ac97323a7777c460c803fd89b_prof);

        
        $__internal_448fbdf2e462f5dc8e1f2f3df242d7b1d404c891816ccbe8d01103f0a4532f6c->leave($__internal_448fbdf2e462f5dc8e1f2f3df242d7b1d404c891816ccbe8d01103f0a4532f6c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
", "@Framework/Form/form_rest.html.php", "C:\\www\\Web2\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_rest.html.php");
    }
}
