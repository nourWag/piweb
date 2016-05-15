<?php

/* MyappResponsableBundle:View2:list.html.twig */
class __TwigTemplate_18d3abe5f834e9eeba0f3e547ba5f25c21f47472da3517ad257f85a68881e7fe extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("MyappResponsableBundle::New.html.twig", "MyappResponsableBundle:View2:list.html.twig", 2);
        $this->blocks = array(
            'contents' => array($this, 'block_contents'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "MyappResponsableBundle::New.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_contents($context, array $blocks = array())
    {
        // line 4
        echo "
<div class=\"heading\">
    <i class=\"fa fa-key\"></i>
    <h2>Liste des boutiques</h2>
</div>
    \t
<div class=\"row\">
 
    ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["modele"]) ? $context["modele"] : $this->getContext($context, "modele")));
        foreach ($context['_seq'] as $context["_key"] => $context["m"]) {
            echo " 
    <li class=\"col-sm-3  first-in-line last_line\">
    
    ";
            // line 15
            echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "nom", array()), "html", null, true);
            echo "
    <p>";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "description", array()), "html", null, true);
            echo "</p></h1>
    ";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "promotion", array()), "html", null, true);
            echo "
    ";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "categorie", array()), "html", null, true);
            echo "
    <h1> ";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "Fax", array()), "html", null, true);
            echo "</h1>
        ";
            // line 20
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["m"], "image_cle", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 21
                echo "          
    <marquee align=\"center\" height=\"250\" scrolldelay=\"5\" scrollamount=\"3\" onmouseout=\"this.start()\" onmouseover=\"this.stop()\">\t
    <p><img border=\"1\" src=\"";
                // line 23
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->env->getExtension('routing')->getPath("my_image_route", array("id" => $this->getAttribute($context["i"], "id", array())))), "html", null, true);
                echo " \" alt=\"\" hspace=\"0\" height=\"300px\" width=\"300px\">    
    
    </p></marquee> 
    
   ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 28
            echo "
    </li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['m'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "</div>\t\t\t\t    \t\t\t\t\t\t    
";
    }

    public function getTemplateName()
    {
        return "MyappResponsableBundle:View2:list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 31,  88 => 28,  77 => 23,  73 => 21,  69 => 20,  65 => 19,  61 => 18,  57 => 17,  53 => 16,  49 => 15,  41 => 12,  31 => 4,  28 => 3,  11 => 2,);
    }
}
/* {# empty Twig template #}*/
/* {% extends 'MyappResponsableBundle::New.html.twig'%}*/
/* {% block contents %}*/
/* */
/* <div class="heading">*/
/*     <i class="fa fa-key"></i>*/
/*     <h2>Liste des boutiques</h2>*/
/* </div>*/
/*     	*/
/* <div class="row">*/
/*  */
/*     {% for m in modele %} */
/*     <li class="col-sm-3  first-in-line last_line">*/
/*     */
/*     {{m.nom}}*/
/*     <p>{{m.description}}</p></h1>*/
/*     {{m.promotion}}*/
/*     {{m.categorie}}*/
/*     <h1> {{m.Fax}}</h1>*/
/*         {% for i in m.image_cle %}*/
/*           */
/*     <marquee align="center" height="250" scrolldelay="5" scrollamount="3" onmouseout="this.start()" onmouseover="this.stop()">	*/
/*     <p><img border="1" src="{{ asset(path('my_image_route', {'id': i.id})) }} " alt="" hspace="0" height="300px" width="300px">    */
/*     */
/*     </p></marquee> */
/*     */
/*    {% endfor %}*/
/* */
/*     </li>*/
/*     {% endfor %}*/
/* </div>				    						    */
/* {% endblock %}*/
/* */
/* */
/* */
/* */
/* */
/* */
/* {# <a href="{{path("delete",{'id':m.id})}}"><button class="btn btn-primary">Supprimer</button></a></td>*/
/*     <a href="{{path("update_boutique",{'id':m.id})}}"><button class="btn btn-primary">Modifier</button></a>#}*/
