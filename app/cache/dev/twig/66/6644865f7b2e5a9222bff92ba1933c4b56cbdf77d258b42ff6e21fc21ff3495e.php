<?php

/* MyappuserBundle:Image:affiche.html.twig */
class __TwigTemplate_8cfa9f3a35927178a254baef548af267b86117acc3a98aebb795092665e3ac4d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("MyappuserBundle::layout.html.twig", "MyappuserBundle:Image:affiche.html.twig", 2);
        $this->blocks = array(
            'pack' => array($this, 'block_pack'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "MyappuserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_pack($context, array $blocks = array())
    {
        // line 5
        echo "   <div> 
<img src=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->env->getExtension('routing')->getPath("my_image_route", array("id" => $this->getAttribute((isset($context["images"]) ? $context["images"] : $this->getContext($context, "images")), "id", array())))), "html", null, true);
        echo "\"/> 
</div> 


";
    }

    public function getTemplateName()
    {
        return "MyappuserBundle:Image:affiche.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 6,  31 => 5,  28 => 4,  11 => 2,);
    }
}
/* {# empty Twig template #}*/
/* {% extends "MyappuserBundle::layout.html.twig" %}*/
/* */
/* {% block pack %}*/
/*    <div> */
/* <img src="{{ asset(path('my_image_route', {'id': images.id})) }}"/> */
/* </div> */
/* */
/* */
/* {% endblock  %}*/
/* */
