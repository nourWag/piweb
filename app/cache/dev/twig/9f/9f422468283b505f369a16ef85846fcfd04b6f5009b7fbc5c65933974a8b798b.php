<?php

/* MyappadminBundle:image:list.html.twig */
class __TwigTemplate_a0134cb87a2576979dba0d779737615037425558f49555d541753d096b7ca195 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("MyappResponsableBundle::layoutAdd.html.twig", "MyappadminBundle:image:list.html.twig", 1);
        $this->blocks = array(
            'contenu' => array($this, 'block_contenu'),
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

    // line 3
    public function block_contenu($context, array $blocks = array())
    {
        // line 4
        echo "   <hr>
   <div class=\"row\">    \t 
";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["images"]) ? $context["images"] : $this->getContext($context, "images")));
        foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
            echo " 
    
       <li class=\"col-sm-3  first-in-line last_line\"><h3>";
            // line 8
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["image"], "boutiquecle", array()), "nom", array()), "html", null, true);
            echo "</h3>
\t<div class=\"image\"><img src=\"";
            // line 9
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->env->getExtension('routing')->getPath("my_image_ro", array("id" => $this->getAttribute($context["image"], "id", array())))), "html", null, true);
            echo "\" alt=\"\" height=\"300px\" width=\"300px\" class=\"img-responsive\"/></div>\t
\t
       
       
       
       
       </li>
                               \t\t\t\t\t\t\t
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "   </div>
";
    }

    public function getTemplateName()
    {
        return "MyappadminBundle:image:list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 18,  46 => 9,  42 => 8,  35 => 6,  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends 'MyappResponsableBundle::layoutAdd.html.twig' %} */
/*  	  */
/*  {% block contenu %}*/
/*    <hr>*/
/*    <div class="row">    	 */
/* {% for image in images %} */
/*     */
/*        <li class="col-sm-3  first-in-line last_line"><h3>{{image.boutiquecle.nom}}</h3>*/
/* 	<div class="image"><img src="{{ asset(path('my_image_ro', {'id': image.id})) }}" alt="" height="300px" width="300px" class="img-responsive"/></div>	*/
/* 	*/
/*        */
/*        */
/*        */
/*        */
/*        </li>*/
/*                                							*/
/* {% endfor %}*/
/*    </div>*/
/* {% endblock %}*/
/* */
/* */
