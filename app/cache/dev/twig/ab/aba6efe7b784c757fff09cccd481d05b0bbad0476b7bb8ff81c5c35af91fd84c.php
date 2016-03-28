<?php

/* MyappResponsableBundle:Image:affiche.html.twig */
class __TwigTemplate_3faa6da74827205a1d2ef18606b1c1b6eb68f8569f78e4aa17d59c7dd98c72ef extends Twig_Template
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
