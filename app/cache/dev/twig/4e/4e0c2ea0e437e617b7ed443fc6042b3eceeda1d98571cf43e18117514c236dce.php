<?php

/* MyappResponsableBundle:View1nour:test2.html.twig */
class __TwigTemplate_6d76c0f29c0831f8cb4641d46915ea07818d6ba62e73a0b08fd6ed04fea60950 extends Twig_Template
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
