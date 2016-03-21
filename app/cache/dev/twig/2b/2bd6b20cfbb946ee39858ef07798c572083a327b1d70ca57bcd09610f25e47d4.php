<?php

/* piwebappBundle:Default:index.html.twig */
class __TwigTemplate_8ae119e24be4fea8f06dc75fe4d6817d9a9b8d613146b4ad9525a42e468ae685 extends Twig_Template
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
        echo "Hello ";
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
        echo "!  
";
    }

    public function getTemplateName()
    {
        return "piwebappBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
/* Hello {{ name }}!  */
/* */
