<?php

/* base.html.twig */
class __TwigTemplate_4121a87bcfe731533423ab6c3c7ef40f0f275283f6f10104a91411921f8965f1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_85d0d4d9a7ec23bb2c863831c59eb13b574c157c5c9eb08648213995eb1cb037 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_85d0d4d9a7ec23bb2c863831c59eb13b574c157c5c9eb08648213995eb1cb037->enter($__internal_85d0d4d9a7ec23bb2c863831c59eb13b574c157c5c9eb08648213995eb1cb037_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_e6b149a24facccbb8e245eb90ca897340dd358d3d085f27d3c00865562986ecc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e6b149a24facccbb8e245eb90ca897340dd358d3d085f27d3c00865562986ecc->enter($__internal_e6b149a24facccbb8e245eb90ca897340dd358d3d085f27d3c00865562986ecc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_85d0d4d9a7ec23bb2c863831c59eb13b574c157c5c9eb08648213995eb1cb037->leave($__internal_85d0d4d9a7ec23bb2c863831c59eb13b574c157c5c9eb08648213995eb1cb037_prof);

        
        $__internal_e6b149a24facccbb8e245eb90ca897340dd358d3d085f27d3c00865562986ecc->leave($__internal_e6b149a24facccbb8e245eb90ca897340dd358d3d085f27d3c00865562986ecc_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_51a13fed34c50fe51fd556bdc0e85cd4be03114abf3ab52ef460999fd2cb82d9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_51a13fed34c50fe51fd556bdc0e85cd4be03114abf3ab52ef460999fd2cb82d9->enter($__internal_51a13fed34c50fe51fd556bdc0e85cd4be03114abf3ab52ef460999fd2cb82d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_11263aacc0f0069c5400fd06fe0af97dfce3655f63b20534b13941261afdf414 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_11263aacc0f0069c5400fd06fe0af97dfce3655f63b20534b13941261afdf414->enter($__internal_11263aacc0f0069c5400fd06fe0af97dfce3655f63b20534b13941261afdf414_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_11263aacc0f0069c5400fd06fe0af97dfce3655f63b20534b13941261afdf414->leave($__internal_11263aacc0f0069c5400fd06fe0af97dfce3655f63b20534b13941261afdf414_prof);

        
        $__internal_51a13fed34c50fe51fd556bdc0e85cd4be03114abf3ab52ef460999fd2cb82d9->leave($__internal_51a13fed34c50fe51fd556bdc0e85cd4be03114abf3ab52ef460999fd2cb82d9_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_1554d6a20aa5be49605b392f8a8714f3189b2eb7ff289077c7295dc300173949 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1554d6a20aa5be49605b392f8a8714f3189b2eb7ff289077c7295dc300173949->enter($__internal_1554d6a20aa5be49605b392f8a8714f3189b2eb7ff289077c7295dc300173949_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_f53831da12b509265514ace6d7f45df9527607fd87c95226b080d44dc6315c0e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f53831da12b509265514ace6d7f45df9527607fd87c95226b080d44dc6315c0e->enter($__internal_f53831da12b509265514ace6d7f45df9527607fd87c95226b080d44dc6315c0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_f53831da12b509265514ace6d7f45df9527607fd87c95226b080d44dc6315c0e->leave($__internal_f53831da12b509265514ace6d7f45df9527607fd87c95226b080d44dc6315c0e_prof);

        
        $__internal_1554d6a20aa5be49605b392f8a8714f3189b2eb7ff289077c7295dc300173949->leave($__internal_1554d6a20aa5be49605b392f8a8714f3189b2eb7ff289077c7295dc300173949_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_cd6e083b44040b53d29ac5015af18525fd20ebd139975ab5354cd0ab13e0d883 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cd6e083b44040b53d29ac5015af18525fd20ebd139975ab5354cd0ab13e0d883->enter($__internal_cd6e083b44040b53d29ac5015af18525fd20ebd139975ab5354cd0ab13e0d883_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_721f278f1a584313e540004a8dedf5bfba640021e857cb36cf18b0046efb1cbf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_721f278f1a584313e540004a8dedf5bfba640021e857cb36cf18b0046efb1cbf->enter($__internal_721f278f1a584313e540004a8dedf5bfba640021e857cb36cf18b0046efb1cbf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_721f278f1a584313e540004a8dedf5bfba640021e857cb36cf18b0046efb1cbf->leave($__internal_721f278f1a584313e540004a8dedf5bfba640021e857cb36cf18b0046efb1cbf_prof);

        
        $__internal_cd6e083b44040b53d29ac5015af18525fd20ebd139975ab5354cd0ab13e0d883->leave($__internal_cd6e083b44040b53d29ac5015af18525fd20ebd139975ab5354cd0ab13e0d883_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_9bd5d6b0aa3ac29c47ad0f14bed2fcca8a409e428a121db0128d11e2b31c39ac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9bd5d6b0aa3ac29c47ad0f14bed2fcca8a409e428a121db0128d11e2b31c39ac->enter($__internal_9bd5d6b0aa3ac29c47ad0f14bed2fcca8a409e428a121db0128d11e2b31c39ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_3cba1cfc18814f5c3e39907dc983d0a2e3214ac1beee0f718cdccb0816cb2380 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3cba1cfc18814f5c3e39907dc983d0a2e3214ac1beee0f718cdccb0816cb2380->enter($__internal_3cba1cfc18814f5c3e39907dc983d0a2e3214ac1beee0f718cdccb0816cb2380_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_3cba1cfc18814f5c3e39907dc983d0a2e3214ac1beee0f718cdccb0816cb2380->leave($__internal_3cba1cfc18814f5c3e39907dc983d0a2e3214ac1beee0f718cdccb0816cb2380_prof);

        
        $__internal_9bd5d6b0aa3ac29c47ad0f14bed2fcca8a409e428a121db0128d11e2b31c39ac->leave($__internal_9bd5d6b0aa3ac29c47ad0f14bed2fcca8a409e428a121db0128d11e2b31c39ac_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 11,  100 => 10,  83 => 6,  65 => 5,  53 => 12,  50 => 11,  48 => 10,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "C:\\www\\Web2\\app\\Resources\\views\\base.html.twig");
    }
}
