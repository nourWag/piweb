<?php

/* MyappadminBundle:Administration/pages/layout:recherche.html.twig */
class __TwigTemplate_a4a4e260927038f809d9209491ebac9e5484827fc86d0338c2626a5851143503 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("testMyapppagesBundle::layoutAd.html.twig", "MyappadminBundle:Administration/pages/layout:recherche.html.twig", 2);
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
        echo "<h1>Recherche Liste des client </h1>
<form method=\"POST\"  action=\"\">
    rechercher : <input type=\"text\" name=\"search\"/>
    <input type=\"submit\" value=\"chercher\"/>
</form>
 <div class=\"box box-info\">
                <div class=\"box-header with-border\">
                  <h3 class=\"box-title\">liste de client</h3>
                  <div class=\"box-tools pull-right\">
                    <button class=\"btn btn-box-tool\" data-widget=\"collapse\"><i class=\"fa fa-minus\"></i></button>
                    <button class=\"btn btn-box-tool\" data-widget=\"remove\"><i class=\"fa fa-times\"></i></button>
                  </div>


<div class=\"box-body\">
                  <div class=\"table-responsive\"/>
                    <table class=\"table no-margin\">
                      <thead>
                        <tr>
                          <th> ID</th>
                          <th>username</th>
                          <th>supprimer</th>
                    
                          
                        </tr>
                      </thead>
\t\t\t\t\t  <h1>Liste des clients </h1>

                      <body>
\t\t\t\t\t  ";
        // line 34
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["modeles"]) ? $context["modeles"] : $this->getContext($context, "modeles")));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 35
            echo "                        <tr>
                          <td><a href=\"\">";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute($context["i"], "id", array()), "html", null, true);
            echo "</a></td>
                         
                          <td><span class=\"label label-success\">";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute($context["i"], "username", array()), "html", null, true);
            echo "</span></td>
\t\t\t\t\t\t   <td><span class=\"label label-success\">
                             <a href=\"";
            // line 40
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("aaa", array("id" => $this->getAttribute($context["i"], "id", array()))), "html", null, true);
            echo " \">supprimer </a></td>
                        
                        </tr>
                         ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        echo "                      </body>
                    </table>
       ";
    }

    public function getTemplateName()
    {
        return "MyappadminBundle:Administration/pages/layout:recherche.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 44,  79 => 40,  74 => 38,  69 => 36,  66 => 35,  62 => 34,  31 => 5,  28 => 4,  11 => 2,);
    }
}
/* */
/* {% extends "testMyapppagesBundle::layoutAd.html.twig" %} */
/*  	  */
/*  {% block contenu %}*/
/* <h1>Recherche Liste des client </h1>*/
/* <form method="POST"  action="">*/
/*     rechercher : <input type="text" name="search"/>*/
/*     <input type="submit" value="chercher"/>*/
/* </form>*/
/*  <div class="box box-info">*/
/*                 <div class="box-header with-border">*/
/*                   <h3 class="box-title">liste de client</h3>*/
/*                   <div class="box-tools pull-right">*/
/*                     <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>*/
/*                     <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>*/
/*                   </div>*/
/* */
/* */
/* <div class="box-body">*/
/*                   <div class="table-responsive"/>*/
/*                     <table class="table no-margin">*/
/*                       <thead>*/
/*                         <tr>*/
/*                           <th> ID</th>*/
/*                           <th>username</th>*/
/*                           <th>supprimer</th>*/
/*                     */
/*                           */
/*                         </tr>*/
/*                       </thead>*/
/* 					  <h1>Liste des clients </h1>*/
/* */
/*                       <body>*/
/* 					  {% for i in modeles %}*/
/*                         <tr>*/
/*                           <td><a href="">{{i.id}}</a></td>*/
/*                          */
/*                           <td><span class="label label-success">{{i.username}}</span></td>*/
/* 						   <td><span class="label label-success">*/
/*                              <a href="{{path("aaa",{'id':i.id})}} ">supprimer </a></td>*/
/*                         */
/*                         </tr>*/
/*                          {% endfor %}*/
/*                       </body>*/
/*                     </table>*/
/*        {% endblock contenu %} */
/*         */
/* {#<table border="1">*/
/*     <tr>*/
/*         <td>Id</td>*/
/*          <td>username</td>*/
/*          */
/*     </tr>*/
/* </table>*/
/*     {% for i in modeles %}*/
/*     <tr>*/
/*         <th>{{i.id}}</th>*/
/*         <th>{{i.username}}</th>*/
/* */
/*        */
/*           </tr>*/
/*     {% endfor %}*/
/*     {% endblock %}#}*/
/* */
