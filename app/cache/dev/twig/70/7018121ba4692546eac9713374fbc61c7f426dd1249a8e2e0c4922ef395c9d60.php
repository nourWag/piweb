<?php

/* MyappResponsableBundle:View1:list.html.twig */
class __TwigTemplate_1ccb14a242b0522e3424131ed0fec0187d2827538c93248bc35eee37b7e5324f extends Twig_Template
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
        echo "    
<div class=\"heading\">
    <i class=\"fa fa-key\"></i>
    <h2>Liste des boutiques</h2>
</div>
    \t
<div class=\"row\">
 
    ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["modele"]) ? $context["modele"] : $this->getContext($context, "modele")));
        foreach ($context['_seq'] as $context["_key"] => $context["m"]) {
            echo " 
    <li class=\"col-sm-3  first-in-line last_line\">
    
    <h1>";
            // line 14
            echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "nom", array()), "html", null, true);
            echo "</h1>
    <h1><p>";
            // line 15
            echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "categorie", array()), "html", null, true);
            echo "</p></h1>
    <h1>";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "promotion", array()), "html", null, true);
            echo "</h1>
        ";
            // line 17
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["m"], "image_cle", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 18
                echo "          
    <marquee align=\"center\" height=\"250\" scrolldelay=\"5\" scrollamount=\"3\" onmouseout=\"this.start()\" onmouseover=\"this.stop()\">\t
    <p><img border=\"1\" src=\"";
                // line 20
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->env->getExtension('routing')->getPath("my_image_route", array("id" => $this->getAttribute($context["i"], "id", array())))), "html", null, true);
                echo " \" alt=\"\" hspace=\"0\" height=\"300px\" width=\"300px\">    
    
    </p></marquee> 
    
   ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 25
            echo "
    <a href=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("delete", array("id" => $this->getAttribute($context["m"], "id", array()))), "html", null, true);
            echo "\"><button class=\"btn btn-primary\">Supprimer</button></a></td>
    <a href=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("update_boutique", array("id" => $this->getAttribute($context["m"], "id", array()))), "html", null, true);
            echo "\"><button class=\"btn btn-primary\">Modifier</button></a>
    
    </li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['m'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "</div>\t\t\t\t    
";
    }

    public function getTemplateName()
    {
        return "MyappResponsableBundle:View1:list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 31,  75 => 27,  71 => 26,  68 => 25,  57 => 20,  53 => 18,  49 => 17,  45 => 16,  41 => 15,  37 => 14,  29 => 11,  19 => 3,);
    }
}
/* {#{% extends 'pi2tstBundle::Boutique.html.twig'%}*/
/* {% block contents %}#}*/
/*     */
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
/*     <h1>{{m.nom}}</h1>*/
/*     <h1><p>{{m.categorie}}</p></h1>*/
/*     <h1>{{m.promotion}}</h1>*/
/*         {% for i in m.image_cle %}*/
/*           */
/*     <marquee align="center" height="250" scrolldelay="5" scrollamount="3" onmouseout="this.start()" onmouseover="this.stop()">	*/
/*     <p><img border="1" src="{{ asset(path('my_image_route', {'id': i.id})) }} " alt="" hspace="0" height="300px" width="300px">    */
/*     */
/*     </p></marquee> */
/*     */
/*    {% endfor %}*/
/* */
/*     <a href="{{path("delete",{'id':m.id})}}"><button class="btn btn-primary">Supprimer</button></a></td>*/
/*     <a href="{{path("update_boutique",{'id':m.id})}}"><button class="btn btn-primary">Modifier</button></a>*/
/*     */
/*     </li>*/
/*     {% endfor %}*/
/* </div>				    */
/* {#{% endblock %}#}*/
