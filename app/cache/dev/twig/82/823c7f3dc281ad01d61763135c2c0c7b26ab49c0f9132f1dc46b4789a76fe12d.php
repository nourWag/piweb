<?php

/* MyappResponsableBundle:CarteFidelite:ModifierCarteFidelite.html.twig */
class __TwigTemplate_5e6e64da18f406ba50c89265deb15612c1209742cf5d7db727fbab1db2ef3831 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("MyappResponsableBundle::layoutAdd.html.twig", "MyappResponsableBundle:CarteFidelite:ModifierCarteFidelite.html.twig", 1);
        $this->blocks = array(
            'content2' => array($this, 'block_content2'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "MyappResponsableBundle::layoutAdd.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_content2($context, array $blocks = array())
    {
        // line 3
        echo "           
<h1> Modifier une carte </h1>
";
        // line 5
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        echo "
 ";
    }

    public function getTemplateName()
    {
        return "MyappResponsableBundle:CarteFidelite:ModifierCarteFidelite.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 5,  31 => 3,  28 => 2,  11 => 1,);
    }
}
/* {% extends "MyappResponsableBundle::layoutAdd.html.twig" %}*/
/* {% block content2 %}*/
/*            */
/* <h1> Modifier une carte </h1>*/
/* {{ form (form) }}*/
/*  {% endblock %}*/
