<?php

/* KitpagesDataGridBundle:Grid:javascript.html.twig */
class __TwigTemplate_91b782b5d0e53cfc3f75dda759681d76f83601eb7de55af032e01a0c7f782127 extends Twig_Template
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
        echo "<script type=\"text/javascript\">
    ";
        // line 2
        $this->loadTemplate("KitpagesDataGridBundle:Grid:javascript_content.html.twig", "KitpagesDataGridBundle:Grid:javascript.html.twig", 2)->display($context);
        // line 3
        echo "</script>
";
    }

    public function getTemplateName()
    {
        return "KitpagesDataGridBundle:Grid:javascript.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  24 => 3,  22 => 2,  19 => 1,);
    }
}
/* <script type="text/javascript">*/
/*     {% include "KitpagesDataGridBundle:Grid:javascript_content.html.twig" %}*/
/* </script>*/
/* */
