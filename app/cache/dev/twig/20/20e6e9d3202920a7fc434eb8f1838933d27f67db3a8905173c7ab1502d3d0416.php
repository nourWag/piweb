<?php

/* MyappadminBundle:image:affiche.html.twig */
class __TwigTemplate_6e0cced657bd7b950688bedae7db0ec0eda39464ab166e075b4cd033411c153c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("MyappadminBundle::layoutAd.html.twig", "MyappadminBundle:image:affiche.html.twig", 2);
        $this->blocks = array(
            'contenu' => array($this, 'block_contenu'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "MyappadminBundle::layoutAd.html.twig";
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
                          <th>titre</th>
                          <th>supprimer</th>
                    
                          
                        </tr>
                      </thead>
\t\t\t\t\t  <h1>Liste des clients </h1>

                      <body>
\t\t\t\t\t  ";
        // line 30
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["mod"]) ? $context["mod"] : $this->getContext($context, "mod")));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 31
            echo "                        <tr>
                          <td><a href=\"\">";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($context["i"], "id", array()), "html", null, true);
            echo "</a></td>
                            <td><a href=\"\">";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($context["i"], "titre", array()), "html", null, true);
            echo "</a></td>
                         
                     ";
            // line 36
            echo "\t\t\t\t\t\t   <td><span class=\"label label-success\">
                             <a href=\"";
            // line 37
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("suprimerpack", array("id" => $this->getAttribute($context["i"], "id", array()))), "html", null, true);
            echo " \">supprimer </a></td>
                                   <td><span class=\"label label-success\">                     <a href=\"";
            // line 38
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("editpack", array("id" => $this->getAttribute($context["i"], "id", array()))), "html", null, true);
            echo " \">modifier  </a></td>
                        
                        </tr>
                         ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "                      </body>
                    </table>
       ";
    }

    public function getTemplateName()
    {
        return "MyappadminBundle:image:affiche.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 42,  81 => 38,  77 => 37,  74 => 36,  69 => 33,  65 => 32,  62 => 31,  58 => 30,  31 => 5,  28 => 4,  11 => 2,);
    }
}
/* */
/* {% extends 'MyappadminBundle::layoutAd.html.twig' %} */
/*  	  */
/*  {% block contenu %}*/
/*      */
/*               <div class="box box-info">*/
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
/*                           <th>titre</th>*/
/*                           <th>supprimer</th>*/
/*                     */
/*                           */
/*                         </tr>*/
/*                       </thead>*/
/* 					  <h1>Liste des clients </h1>*/
/* */
/*                       <body>*/
/* 					  {% for i in mod %}*/
/*                         <tr>*/
/*                           <td><a href="">{{i.id}}</a></td>*/
/*                             <td><a href="">{{i.titre}}</a></td>*/
/*                          */
/*                      {#    <td><span class="label label-success">{{i.id}}</span></td>#}*/
/* 						   <td><span class="label label-success">*/
/*                              <a href="{{path("suprimerpack",{'id':i.id})}} ">supprimer </a></td>*/
/*                                    <td><span class="label label-success">                     <a href="{{path("editpack",{'id':i.id})}} ">modifier  </a></td>*/
/*                         */
/*                         </tr>*/
/*                          {% endfor %}*/
/*                       </body>*/
/*                     </table>*/
/*        {% endblock contenu %} */
/*         */
