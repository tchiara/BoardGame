<?php

/* @Framework/Form/container_attributes.html.php */
class __TwigTemplate_af9d5bdf6c09edefd9bfb7319280c22aa25d12dc7917a84d01005859b6866263 extends Twig_Template
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
        $__internal_c9854ec86d8cf6482c7e4705f7dab2a1bb0c4e48456caa522ae7cad99d8923e8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c9854ec86d8cf6482c7e4705f7dab2a1bb0c4e48456caa522ae7cad99d8923e8->enter($__internal_c9854ec86d8cf6482c7e4705f7dab2a1bb0c4e48456caa522ae7cad99d8923e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        $__internal_1ec49b8ed62e553cb2825ff71a90cb7c44fc749e71e8efdadb6e7205ae44fa08 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ec49b8ed62e553cb2825ff71a90cb7c44fc749e71e8efdadb6e7205ae44fa08->enter($__internal_1ec49b8ed62e553cb2825ff71a90cb7c44fc749e71e8efdadb6e7205ae44fa08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_c9854ec86d8cf6482c7e4705f7dab2a1bb0c4e48456caa522ae7cad99d8923e8->leave($__internal_c9854ec86d8cf6482c7e4705f7dab2a1bb0c4e48456caa522ae7cad99d8923e8_prof);

        
        $__internal_1ec49b8ed62e553cb2825ff71a90cb7c44fc749e71e8efdadb6e7205ae44fa08->leave($__internal_1ec49b8ed62e553cb2825ff71a90cb7c44fc749e71e8efdadb6e7205ae44fa08_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/container_attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
", "@Framework/Form/container_attributes.html.php", "C:\\www\\Web2\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\container_attributes.html.php");
    }
}
