<?php

/* MyappResponsableBundle:Image:affiche.html.twig */
class __TwigTemplate_79dbf04f527bac3728c829eb91eb7c099b254b6bab2a524e33b0543c2947c135 extends Twig_Template
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
        echo "
<div> 
<img src=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->env->getExtension('routing')->getPath("my_image_route", array("id" => $this->getAttribute((isset($context["images"]) ? $context["images"] : $this->getContext($context, "images")), "id", array())))), "html", null, true);
        echo "\"/> 
</div> 


";
    }

    public function getTemplateName()
    {
        return "MyappResponsableBundle:Image:affiche.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  23 => 3,  19 => 1,);
    }
}
/* */
/* <div> */
/* <img src="{{ asset(path('my_image_route', {'id': images.id})) }}"/> */
/* </div> */
/* */
/* */
/* */
