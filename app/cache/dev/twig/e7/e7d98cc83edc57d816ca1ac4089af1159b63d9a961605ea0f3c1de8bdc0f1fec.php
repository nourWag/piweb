<?php

/* MyappuserBundle:Image:index.html.twig */
class __TwigTemplate_76eacd8962a8a21973fc1aa637f57a7c193b1234687ab752c7098f7c88eb39cc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("MyappuserBundle::layoutAd.html.twig", "MyappuserBundle:Image:index.html.twig", 1);
        $this->blocks = array(
            'contenu' => array($this, 'block_contenu'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "MyappuserBundle::layoutAd.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_contenu($context, array $blocks = array())
    {
        // line 4
        echo "
<h1>votre pack est bien ajouter </h1>

 \t  
 ";
    }

    public function getTemplateName()
    {
        return "MyappuserBundle:Image:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends 'MyappuserBundle::layoutAd.html.twig' %} */
/*  	  */
/*  {% block contenu %}*/
/* */
/* <h1>votre pack est bien ajouter </h1>*/
/* */
/*  	  */
/*  {% endblock contenu %}*/
