<?php

/* MyappResponsableBundle:View2:list_cat.html.twig */
class __TwigTemplate_81ad1450a687516e9608df98db4671b0e62faaa875c40e79dcb56921636b93b2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("MyappResponsableBundle::New.html.twig", "MyappResponsableBundle:View2:list_cat.html.twig", 3);
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

    // line 4
    public function block_contents($context, array $blocks = array())
    {
        // line 5
        echo "
<div class=\"heading\">
    
    <h2>Liste des boutiques</h2>
</div>
    \t
";
        // line 35
        echo "
 
    ";
        // line 37
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["modele"]) ? $context["modele"] : $this->getContext($context, "modele")));
        foreach ($context['_seq'] as $context["_key"] => $context["m"]) {
            echo " 
   
    <div class=\"col-sm-10\">
            <p><b><a href=\"";
            // line 40
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("path_categorie3", array("nom" => $this->getAttribute($context["m"], "nom", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "nom", array()), "html", null, true);
            echo "</a></b> 
    
                                                </div>
\t
    
   ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['m'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo "
   ";
        // line 49
        echo "    
    </li>
   
</div>
    
";
    }

    public function getTemplateName()
    {
        return "MyappResponsableBundle:View2:list_cat.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 49,  65 => 46,  51 => 40,  43 => 37,  39 => 35,  31 => 5,  28 => 4,  11 => 3,);
    }
}
/* {# empty Twig template #}*/
/* {# empty Twig template #}*/
/* {% extends 'MyappResponsableBundle::New.html.twig'%}*/
/* {% block contents %}*/
/* */
/* <div class="heading">*/
/*     */
/*     <h2>Liste des boutiques</h2>*/
/* </div>*/
/*     	*/
/* {#<div class="row">*/
/*  */
/*     {% for m in modele %} */
/*     <li class="col-sm-3  first-in-line last_line">*/
/*     */
/*     {{m.nom}}*/
/*     <p>{{m.description}}</p></h1>*/
/*     {{m.promotion}}*/
/*      {{m.categorie}}*/
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
/*   */
/*     */
/*     </li>*/
/*     {% endfor %}*/
/* </div>	#}*/
/* */
/*  */
/*     {% for m in modele %} */
/*    */
/*     <div class="col-sm-10">*/
/*             <p><b><a href="{{path("path_categorie3",{'nom':m.nom})}}">{{m.nom}}</a></b> */
/*     */
/*                                                 </div>*/
/* 	*/
/*     */
/*    {% endfor %}*/
/* */
/*    {# <a href="{{path("delete",{'id':m.id})}}"><button class="btn btn-primary">Supprimer</button></a></td>*/
/*     <a href="{{path("update_boutique",{'id':m.id})}}"><button class="btn btn-primary">Modifier</button></a>#}*/
/*     */
/*     </li>*/
/*    */
/* </div>*/
/*     */
/* {% endblock %}*/
