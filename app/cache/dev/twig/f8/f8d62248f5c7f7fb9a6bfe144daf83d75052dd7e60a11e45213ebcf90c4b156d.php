<?php

/* MyappuserBundle:Liraisonf:recherche.html.twig */
class __TwigTemplate_8acd2076b3e88ae9ad6078ed21a7ec44de45612d309331d238eaae803124e476 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("MyappuserBundle::layoutlogin.html.twig", "MyappuserBundle:Liraisonf:recherche.html.twig", 1);
        $this->blocks = array(
            'livraison' => array($this, 'block_livraison'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "MyappuserBundle::layoutlogin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_livraison($context, array $blocks = array())
    {
        // line 3
        echo "<h1>chercher Liste des livraisons </h1>
<form method=\"POST\"  action=\"\">
    <input type=\"text\" name=\"search\"/>
    <input type=\"submit\" value=\"rechercher\"/>
</form>

<table border=\"1\">
    <br>
    <tr>
       ";
        // line 13
        echo "         <td>nom</td>
          <td>prenom</td>
          <td>adresse</td>
          <td>telephone</td>
    </tr>
    ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["modeles"]) ? $context["modeles"] : $this->getContext($context, "modeles")));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 19
            echo "    <tr>
       ";
            // line 21
            echo "        <th>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["i"], "nom", array()), "html", null, true);
            echo "</th>
        <th>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["i"], "prenom", array()), "html", null, true);
            echo "</th>
        <th>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["i"], "adresse", array()), "html", null, true);
            echo "</th>
        <th>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["i"], "telephone", array()), "html", null, true);
            echo "</th>
       
          </tr>
         ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "</table>
   
    
         

";
    }

    public function getTemplateName()
    {
        return "MyappuserBundle:Liraisonf:recherche.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 28,  69 => 24,  65 => 23,  61 => 22,  56 => 21,  53 => 19,  49 => 18,  42 => 13,  31 => 3,  28 => 2,  11 => 1,);
    }
}
/* {% extends "MyappuserBundle::layoutlogin.html.twig" %}*/
/* {% block livraison %}*/
/* <h1>chercher Liste des livraisons </h1>*/
/* <form method="POST"  action="">*/
/*     <input type="text" name="search"/>*/
/*     <input type="submit" value="rechercher"/>*/
/* </form>*/
/* */
/* <table border="1">*/
/*     <br>*/
/*     <tr>*/
/*        {# <td>id</td>#}*/
/*          <td>nom</td>*/
/*           <td>prenom</td>*/
/*           <td>adresse</td>*/
/*           <td>telephone</td>*/
/*     </tr>*/
/*     {% for i in modeles %}*/
/*     <tr>*/
/*        {# <th>{{i.id}}</th>#}*/
/*         <th>{{i.nom}}</th>*/
/*         <th>{{i.prenom}}</th>*/
/*         <th>{{i.adresse}}</th>*/
/*         <th>{{i.telephone}}</th>*/
/*        */
/*           </tr>*/
/*          {% endfor %}*/
/* </table>*/
/*    */
/*     */
/*          */
/* */
/* {% endblock %}*/
