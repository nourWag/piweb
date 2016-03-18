<?php

/* piwebappBundle:Default:index.html.twig */
class __TwigTemplate_f7992f77efc2de8ffd60c7652d4e5fbe623dee94475dd591716ff8c58c3662bf extends Twig_Template
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
