<?php

/* MyappResponsableBundle:Image:list.html.twig */
class __TwigTemplate_da54b1081f54fa8927e47b59f4be65848255e45c646e16ba3e6ef044c3176c75 extends Twig_Template
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
        // line 3
        echo "   <hr>
   <div class=\"row\">    \t 
";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["images"]) ? $context["images"] : $this->getContext($context, "images")));
        foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
            echo " 
    
       <li class=\"col-sm-3  first-in-line last_line\"><h3>";
            // line 7
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["image"], "boutiquecle", array()), "nom", array()), "html", null, true);
            echo "</h3>
\t<div class=\"image\"><img src=\"";
            // line 8
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->env->getExtension('routing')->getPath("my_image_route", array("id" => $this->getAttribute($context["image"], "id", array())))), "html", null, true);
            echo "\" alt=\"\" height=\"300px\" width=\"300px\"/></div>\t
\t</li>
                               \t\t\t\t\t\t\t
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        echo "   </div>
";
        // line 14
        echo "
";
    }

    public function getTemplateName()
    {
        return "MyappResponsableBundle:Image:list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 14,  44 => 12,  34 => 8,  30 => 7,  23 => 5,  19 => 3,);
    }
}
/* {#{% extends 'pi2tstBundle::Boutique.html.twig'%}*/
/* {% block contents %}#}*/
/*    <hr>*/
/*    <div class="row">    	 */
/* {% for image in images %} */
/*     */
/*        <li class="col-sm-3  first-in-line last_line"><h3>{{image.boutiquecle.nom}}</h3>*/
/* 	<div class="image"><img src="{{ asset(path('my_image_route', {'id': image.id})) }}" alt="" height="300px" width="300px"/></div>	*/
/* 	</li>*/
/*                                							*/
/* {% endfor %}*/
/*    </div>*/
/* {#{% endblock %}#}*/
/* */
/* */
