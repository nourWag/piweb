<?php

/* MyappResponsableBundle:imagenour:affiche.html.twig */
class __TwigTemplate_6c9043ecc7f3d2432daa1838a5e4bea1b1ced76abef36d40a97f54839d689851 extends Twig_Template
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
        echo "￼<div>
<img src=\"";
        // line 2
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->env->getExtension('routing')->getPath("my_image_route", array("id" => $this->getAttribute((isset($context["images"]) ? $context["images"] : $this->getContext($context, "images")), "id", array())))), "html", null, true);
        echo "\"/>
</div>";
    }

    public function getTemplateName()
    {
        return "MyappResponsableBundle:imagenour:affiche.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 2,  19 => 1,);
    }
}
/* ￼<div>*/
/* <img src="{{ asset(path('my_image_route', {'id': images.id})) }}"/>*/
/* </div>*/
