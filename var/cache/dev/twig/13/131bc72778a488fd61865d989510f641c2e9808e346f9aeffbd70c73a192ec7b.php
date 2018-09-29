<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_58117fd9f6d2d7dc38774a342f0865639da2fab6efeb424eac1b69b8e8b293d4 extends Twig_Template
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
        $__internal_50d049d86bb17f312d0faa59dfb3783db5d83483638a8c661a4d90fcf1c11053 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_50d049d86bb17f312d0faa59dfb3783db5d83483638a8c661a4d90fcf1c11053->enter($__internal_50d049d86bb17f312d0faa59dfb3783db5d83483638a8c661a4d90fcf1c11053_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        $__internal_fee105a0acb903c6bbbc6e0521bb8d6cff1f49a537642cfbd3b8fc5fb587f027 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fee105a0acb903c6bbbc6e0521bb8d6cff1f49a537642cfbd3b8fc5fb587f027->enter($__internal_fee105a0acb903c6bbbc6e0521bb8d6cff1f49a537642cfbd3b8fc5fb587f027_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_50d049d86bb17f312d0faa59dfb3783db5d83483638a8c661a4d90fcf1c11053->leave($__internal_50d049d86bb17f312d0faa59dfb3783db5d83483638a8c661a4d90fcf1c11053_prof);

        
        $__internal_fee105a0acb903c6bbbc6e0521bb8d6cff1f49a537642cfbd3b8fc5fb587f027->leave($__internal_fee105a0acb903c6bbbc6e0521bb8d6cff1f49a537642cfbd3b8fc5fb587f027_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
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
        return new Twig_Source("<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
", "@Framework/Form/form_end.html.php", "C:\\www\\Web2\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_end.html.php");
    }
}
