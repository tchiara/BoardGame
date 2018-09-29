<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_231257d9426afdf8548b03ab6b3040d726d4e0f02bcbd26c8b9ef5d6663b4d4b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_bb993eeade5ef3662774835207e0ed738697a75a3d5733c0cf1e1ea939ebd124 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bb993eeade5ef3662774835207e0ed738697a75a3d5733c0cf1e1ea939ebd124->enter($__internal_bb993eeade5ef3662774835207e0ed738697a75a3d5733c0cf1e1ea939ebd124_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $__internal_7b7ee56e00a8e09934678e23113088a4d6cf344a7d896b1b30dbdb72b6ce3c26 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7b7ee56e00a8e09934678e23113088a4d6cf344a7d896b1b30dbdb72b6ce3c26->enter($__internal_7b7ee56e00a8e09934678e23113088a4d6cf344a7d896b1b30dbdb72b6ce3c26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bb993eeade5ef3662774835207e0ed738697a75a3d5733c0cf1e1ea939ebd124->leave($__internal_bb993eeade5ef3662774835207e0ed738697a75a3d5733c0cf1e1ea939ebd124_prof);

        
        $__internal_7b7ee56e00a8e09934678e23113088a4d6cf344a7d896b1b30dbdb72b6ce3c26->leave($__internal_7b7ee56e00a8e09934678e23113088a4d6cf344a7d896b1b30dbdb72b6ce3c26_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_a1b2726f6faa248d852f569998126f179ee24bee543b402cd1c5fb2411cbbf24 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a1b2726f6faa248d852f569998126f179ee24bee543b402cd1c5fb2411cbbf24->enter($__internal_a1b2726f6faa248d852f569998126f179ee24bee543b402cd1c5fb2411cbbf24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_ebb7b9c78f89d63fd44ba3de38c76aa1d613d796597ab25de11a81d8b8bd5844 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ebb7b9c78f89d63fd44ba3de38c76aa1d613d796597ab25de11a81d8b8bd5844->enter($__internal_ebb7b9c78f89d63fd44ba3de38c76aa1d613d796597ab25de11a81d8b8bd5844_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_ebb7b9c78f89d63fd44ba3de38c76aa1d613d796597ab25de11a81d8b8bd5844->leave($__internal_ebb7b9c78f89d63fd44ba3de38c76aa1d613d796597ab25de11a81d8b8bd5844_prof);

        
        $__internal_a1b2726f6faa248d852f569998126f179ee24bee543b402cd1c5fb2411cbbf24->leave($__internal_a1b2726f6faa248d852f569998126f179ee24bee543b402cd1c5fb2411cbbf24_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_41eaee5bba1452bf5130f37ec42b0eb2c40e80e7b508abb23242ea77bf6b0c41 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_41eaee5bba1452bf5130f37ec42b0eb2c40e80e7b508abb23242ea77bf6b0c41->enter($__internal_41eaee5bba1452bf5130f37ec42b0eb2c40e80e7b508abb23242ea77bf6b0c41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_3de1ec3783b9c64378b0426c00ce2dd28ff4e71fd022a5f1c6b887ff3738d302 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3de1ec3783b9c64378b0426c00ce2dd28ff4e71fd022a5f1c6b887ff3738d302->enter($__internal_3de1ec3783b9c64378b0426c00ce2dd28ff4e71fd022a5f1c6b887ff3738d302_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_3de1ec3783b9c64378b0426c00ce2dd28ff4e71fd022a5f1c6b887ff3738d302->leave($__internal_3de1ec3783b9c64378b0426c00ce2dd28ff4e71fd022a5f1c6b887ff3738d302_prof);

        
        $__internal_41eaee5bba1452bf5130f37ec42b0eb2c40e80e7b508abb23242ea77bf6b0c41->leave($__internal_41eaee5bba1452bf5130f37ec42b0eb2c40e80e7b508abb23242ea77bf6b0c41_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_205ead3d2ee12dd2c779cfb437aca7e3d063b9a7bb0c5bed3b1b8528948c0e1f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_205ead3d2ee12dd2c779cfb437aca7e3d063b9a7bb0c5bed3b1b8528948c0e1f->enter($__internal_205ead3d2ee12dd2c779cfb437aca7e3d063b9a7bb0c5bed3b1b8528948c0e1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_bd009cea11f2da743616a3cc33e8cce3429f2a75609ae6da4c96f2de0b280a69 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd009cea11f2da743616a3cc33e8cce3429f2a75609ae6da4c96f2de0b280a69->enter($__internal_bd009cea11f2da743616a3cc33e8cce3429f2a75609ae6da4c96f2de0b280a69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 141)->display($context);
        
        $__internal_bd009cea11f2da743616a3cc33e8cce3429f2a75609ae6da4c96f2de0b280a69->leave($__internal_bd009cea11f2da743616a3cc33e8cce3429f2a75609ae6da4c96f2de0b280a69_prof);

        
        $__internal_205ead3d2ee12dd2c779cfb437aca7e3d063b9a7bb0c5bed3b1b8528948c0e1f->leave($__internal_205ead3d2ee12dd2c779cfb437aca7e3d063b9a7bb0c5bed3b1b8528948c0e1f_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "TwigBundle:Exception:exception_full.html.twig", "C:\\www\\Web2\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
