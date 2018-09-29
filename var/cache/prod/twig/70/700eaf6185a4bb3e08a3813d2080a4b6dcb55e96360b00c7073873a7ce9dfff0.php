<?php

/* AppBundle:Default:_footer.html.twig */
class __TwigTemplate_1229040b2e4a11a39820b97d656c75bdd1b205609551c9eb458c854dd8bde138 extends Twig_Template
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
        // line 1
        echo "<div class=\"row\">
    <div class=\"col-md-12\">
        <nav>
            <ul class=\"nav nav-tabs nav-justified\">
                <li>Infos Légales</li>
                <li>Qui Sommes-Nous ?</li>
                <li>Forum</li>
                <li>Contact</li>
            </ul>
        </nav>



    </div>
</div>

";
    }

    public function getTemplateName()
    {
        return "AppBundle:Default:_footer.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "AppBundle:Default:_footer.html.twig", "C:\\www\\Web2\\src\\AppBundle\\Resources\\views\\Default\\_footer.html.twig");
    }
}
