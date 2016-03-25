<?php

/* MyappResponsableBundle:View1nour:test2.html.twig */
class __TwigTemplate_4844ae2643f77840e4ad0b9205e3955316e7a0423dc4819247753fa0228fa39d extends Twig_Template
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
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), 'form');
        echo "
";
    }

    public function getTemplateName()
    {
        return "MyappResponsableBundle:View1nour:test2.html.twig";
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
/* {{ form(f)}}*/
/* */
