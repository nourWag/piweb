<?php

/* MyappuserBundle:Image:list.html.twig */
class __TwigTemplate_33dd838a93779c9ce4f33cee8b62121545f4266ec4338dd917b65aca8b419471 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("MyappuserBundle::layoutAd.html.twig", "MyappuserBundle:Image:list.html.twig", 2);
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

    // line 4
    public function block_contenu($context, array $blocks = array())
    {
        // line 5
        echo "<table border=\"2\"> 
<tr> 
<th> Id </th> 
<th> Title</th> 
<th> Show picture </th> 
</tr> 
";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["images"]) ? $context["images"] : $this->getContext($context, "images")));
        foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
            echo " 
<tr> 
<th>";
            // line 13
            echo twig_escape_filter($this->env, $this->getAttribute($context["image"], "id", array()), "html", null, true);
            echo "</th> 
<th>";
            // line 14
            echo twig_escape_filter($this->env, $this->getAttribute($context["image"], "titre", array()), "html", null, true);
            echo "</th> 
<th> 
<a href=\"";
            // line 16
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("my_image_route", array("id" => $this->getAttribute($context["image"], "id", array()))), "html", null, true);
            echo "\"> 
Show picture 
</a> 
</th> 
</tr> 
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo " 
</table> 

 \t  
 ";
    }

    public function getTemplateName()
    {
        return "MyappuserBundle:Image:list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 21,  55 => 16,  50 => 14,  46 => 13,  39 => 11,  31 => 5,  28 => 4,  11 => 2,);
    }
}
/* {# empty Twig template #}*/
/* {% extends 'MyappuserBundle::layoutAd.html.twig' %} */
/*  	  */
/*  {% block contenu %}*/
/* <table border="2"> */
/* <tr> */
/* <th> Id </th> */
/* <th> Title</th> */
/* <th> Show picture </th> */
/* </tr> */
/* {% for image in images %} */
/* <tr> */
/* <th>{{image.id}}</th> */
/* <th>{{image.titre}}</th> */
/* <th> */
/* <a href="{{path("my_image_route", {'id':image.id })}}"> */
/* Show picture */
/* </a> */
/* </th> */
/* </tr> */
/* {% endfor %} */
/* </table> */
/* */
/*  	  */
/*  {% endblock contenu %}*/
