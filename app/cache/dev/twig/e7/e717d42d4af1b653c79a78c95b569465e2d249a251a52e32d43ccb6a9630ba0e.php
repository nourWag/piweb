<?php

/* MyappadminBundle:Administration/client:affichage.html.twig */
class __TwigTemplate_f6e6d6678ad2cc7fdd042fe288c96ad116d622254dc4720b457f0bebc0c4f901 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("testMyapppagesBundle::layoutAd.html.twig", "MyappadminBundle:Administration/client:affichage.html.twig", 2);
        $this->blocks = array(
            'contenu' => array($this, 'block_contenu'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "testMyapppagesBundle::layoutAd.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_contenu($context, array $blocks = array())
    {
        // line 5
        echo "     
<h1>affichage des modeles</h1>
<table border='1'>
    <tr><td>Id</td><td>Libelle</td><td>pays</td>
     <td>supprimer</td>
            <td>Modifier</td>
    </tr>
    ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["mod"]) ? $context["mod"] : $this->getContext($context, "mod")));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 13
            echo "        <tr>
            <td>";
            // line 14
            echo twig_escape_filter($this->env, $this->getAttribute($context["i"], "id", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 15
            echo twig_escape_filter($this->env, $this->getAttribute($context["i"], "libelle", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute($context["i"], "pays", array()), "html", null, true);
            echo "</td>
           
       <td>
 <a href=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("aaa", array("id" => $this->getAttribute($context["i"], "id", array()))), "html", null, true);
            echo " \">supprimer </a></td>
<td><a href=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("modifier", array("id" => $this->getAttribute($context["i"], "id", array()))), "html", null, true);
            echo "\">Modifier</a></td>           
        </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "</table>
       ";
    }

    public function getTemplateName()
    {
        return "MyappadminBundle:Administration/client:affichage.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 23,  65 => 20,  61 => 19,  55 => 16,  51 => 15,  47 => 14,  44 => 13,  40 => 12,  31 => 5,  28 => 4,  11 => 2,);
    }
}
/* */
/* {% extends 'testMyapppagesBundle::layoutAd.html.twig' %} */
/*  	  */
/*  {% block contenu %}*/
/*      */
/* <h1>affichage des modeles</h1>*/
/* <table border='1'>*/
/*     <tr><td>Id</td><td>Libelle</td><td>pays</td>*/
/*      <td>supprimer</td>*/
/*             <td>Modifier</td>*/
/*     </tr>*/
/*     {% for i in mod %}*/
/*         <tr>*/
/*             <td>{{i.id}}</td>*/
/*             <td>{{i.libelle}}</td>*/
/*             <td>{{i.pays}}</td>*/
/*            */
/*        <td>*/
/*  <a href="{{path("aaa",{'id':i.id})}} ">supprimer </a></td>*/
/* <td><a href="{{path("modifier",{'id':i.id})}}">Modifier</a></td>           */
/*         </tr>*/
/*         {% endfor %}*/
/* </table>*/
/*        {% endblock contenu %} */
/*   */
