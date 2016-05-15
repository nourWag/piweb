<?php

/* MyappResponsableBundle:CarteFidelite:AfficherCarteFidelite.html.twig */
class __TwigTemplate_3dfc7992cc77a9e2847481d5f88a9bf2f4e62a5219ef3bcdc1505a33d3105700 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("MyappResponsableBundle::layoutAdd.html.twig", "MyappResponsableBundle:CarteFidelite:AfficherCarteFidelite.html.twig", 2);
        $this->blocks = array(
            'content2' => array($this, 'block_content2'),
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

    // line 4
    public function block_content2($context, array $blocks = array())
    {
        // line 5
        echo "    
    <li class=\"icn_categories\"><a ";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["mds"]) ? $context["mds"] : $this->getContext($context, "mds")));
        foreach ($context['_seq'] as $context["_key"] => $context["m"]) {
            echo " href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("Rechercher_CarteFidelite", array("idCarteFidelite" => $this->getAttribute($context["m"], "idCarteFidelite", array()))), "html", null, true);
            echo "\" ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['m'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo ">
                                Recherche</a></li> 
    <center>
  <table border=\"2\">
    <tr>
        <td>
          idCarteFidelite
        </td>
    
         <td>
           NombreDePoint 
        </td>
         <td>
           dateCreationCarteFidelite
        </td>
        <td>
           supprimer 
        </td>
        <td>
           modifier 
        </td>
    </tr>  
    ";
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["mds"]) ? $context["mds"] : $this->getContext($context, "mds")));
        foreach ($context['_seq'] as $context["_key"] => $context["m"]) {
            // line 29
            echo "        <tr>
            <td>
               ";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "idCarteFidelite", array()), "html", null, true);
            echo " 
            </td> 
            <td>
               ";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "nombrePointFidele", array()), "html", null, true);
            echo "  
            </td>
            <td>
                ";
            // line 37
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["m"], "dateCreationCarteFidelite", array()), "d-m-Y-h-m"), "html", null, true);
            echo "  
            </td>
          <td>
             <a href=\"";
            // line 40
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("Supprimer_CarteFidelite", array("id" => $this->getAttribute($context["m"], "idCarteFidelite", array()))), "html", null, true);
            echo "\"
                  >supprimer</a> 
            </td>
             <td>
               <a href=\"";
            // line 44
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("Modifier_CarteFidelite", array("id" => $this->getAttribute($context["m"], "idCarteFidelite", array()))), "html", null, true);
            echo "\"
                  >modifier</a> 
            </td>
            
        </tr>
       ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['m'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        echo "   
      
</table>
</center> 


  ";
    }

    public function getTemplateName()
    {
        return "MyappResponsableBundle:CarteFidelite:AfficherCarteFidelite.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  113 => 50,  101 => 44,  94 => 40,  88 => 37,  82 => 34,  76 => 31,  72 => 29,  68 => 28,  34 => 6,  31 => 5,  28 => 4,  11 => 2,);
    }
}
/* {# empty Twig template #}*/
/* {% extends "MyappResponsableBundle::layoutAdd.html.twig" %}*/
/* */
/* {% block content2 %}*/
/*     */
/*     <li class="icn_categories"><a {% for m in mds%} href="{{path('Rechercher_CarteFidelite',{'idCarteFidelite' :  m.idCarteFidelite  })}}" {% endfor %}>*/
/*                                 Recherche</a></li> */
/*     <center>*/
/*   <table border="2">*/
/*     <tr>*/
/*         <td>*/
/*           idCarteFidelite*/
/*         </td>*/
/*     */
/*          <td>*/
/*            NombreDePoint */
/*         </td>*/
/*          <td>*/
/*            dateCreationCarteFidelite*/
/*         </td>*/
/*         <td>*/
/*            supprimer */
/*         </td>*/
/*         <td>*/
/*            modifier */
/*         </td>*/
/*     </tr>  */
/*     {% for m in mds%}*/
/*         <tr>*/
/*             <td>*/
/*                {{m.idCarteFidelite}} */
/*             </td> */
/*             <td>*/
/*                {{m.nombrePointFidele}}  */
/*             </td>*/
/*             <td>*/
/*                 {{m.dateCreationCarteFidelite|date('d-m-Y-h-m')}}  */
/*             </td>*/
/*           <td>*/
/*              <a href="{{path('Supprimer_CarteFidelite',{'id' : m.idCarteFidelite})}}"*/
/*                   >supprimer</a> */
/*             </td>*/
/*              <td>*/
/*                <a href="{{path('Modifier_CarteFidelite',{'id' : m.idCarteFidelite})}}"*/
/*                   >modifier</a> */
/*             </td>*/
/*             */
/*         </tr>*/
/*        {% endfor %}*/
/*    */
/*       */
/* </table>*/
/* </center> */
/* */
/* */
/*   {% endblock %} */
/* */
/* */
