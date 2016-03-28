<?php

/* MyappadminBundle:Administration/client:recherche.html.twig */
class __TwigTemplate_6e3cf3f040ad5929e0d02a8f162527d37101731dcfe384b13b0b8503c71446cb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("testMyapppagesBundle::layoutAd.html.twig", "MyappadminBundle:Administration/client:recherche.html.twig", 2);
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
        echo "<h1>Recherche Liste des modeles </h1>
<form method=\"POST\"  action=\"\">
    rechercher : <input type=\"text\" name=\"search\"/>
    <input type=\"submit\" value=\"chercher\"/>
</form>
<table border=\"1\">
    <tr>
        <td>Id</td>
         <td>libelle</td>
          <td>pays</td>
    </tr>
    
    ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["modeles"]) ? $context["modeles"] : $this->getContext($context, "modeles")));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 18
            echo "    <tr>
        <th>";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["i"], "id", array()), "html", null, true);
            echo "</th>
        <th>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["i"], "libelle", array()), "html", null, true);
            echo "</th>
        <th>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["i"], "pays", array()), "html", null, true);
            echo "</th>
       
          </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "    ";
    }

    public function getTemplateName()
    {
        return "MyappadminBundle:Administration/client:recherche.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 25,  60 => 21,  56 => 20,  52 => 19,  49 => 18,  45 => 17,  31 => 5,  28 => 4,  11 => 2,);
    }
}
/* */
/* {% extends "testMyapppagesBundle::layoutAd.html.twig" %} */
/*  	  */
/*  {% block contenu %}*/
/* <h1>Recherche Liste des modeles </h1>*/
/* <form method="POST"  action="">*/
/*     rechercher : <input type="text" name="search"/>*/
/*     <input type="submit" value="chercher"/>*/
/* </form>*/
/* <table border="1">*/
/*     <tr>*/
/*         <td>Id</td>*/
/*          <td>libelle</td>*/
/*           <td>pays</td>*/
/*     </tr>*/
/*     */
/*     {% for i in modeles %}*/
/*     <tr>*/
/*         <th>{{i.id}}</th>*/
/*         <th>{{i.libelle}}</th>*/
/*         <th>{{i.pays}}</th>*/
/*        */
/*           </tr>*/
/*     {% endfor %}*/
/*     {% endblock %}*/
/* */
