<?php

/* MyappuserBundle:packet:affichage.html.twig */
class __TwigTemplate_c76bb97ec05837e2dd2e8906a8f940d88ad37d34ce52fcc4922cb7266270e989 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("MyappuserBundle::layout.html.twig", "MyappuserBundle:packet:affichage.html.twig", 2);
        $this->blocks = array(
            'pack' => array($this, 'block_pack'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "MyappuserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_pack($context, array $blocks = array())
    {
        // line 5
        echo "     
              <div class=\"box box-info\">
                <div class=\"box-header with-border\">
                  <h3 class=\"box-title\"></h3>
                  <div class=\"box-tools pull-right\">
                    <button class=\"btn btn-box-tool\" data-widget=\"collapse\"><i class=\"fa fa-minus\"></i></button>
                    <button class=\"btn btn-box-tool\" data-widget=\"remove\"><i class=\"fa fa-times\"></i></button>
                  </div>


<div class=\"box-body\">
                  <div class=\"table-responsive\">
                    <table class=\"table no-margin\">

                     
\t\t\t\t\t

                     
\t\t\t\t\t  ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["mod"]) ? $context["mod"] : $this->getContext($context, "mod")));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 24
            echo "                                              <tr>
    
                         <td><a href=\"\"><img src=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->env->getExtension('routing')->getPath("my_image_route", array("id" => $this->getAttribute($context["i"], "id", array())))), "html", null, true);
            echo "\"/> </a></td>
                         
\t\t\t\t\t\t   
                        
                        </tr>
                         ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "                      </tbody>
                    </table>
       ";
    }

    public function getTemplateName()
    {
        return "MyappuserBundle:packet:affichage.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 32,  59 => 26,  55 => 24,  51 => 23,  31 => 5,  28 => 4,  11 => 2,);
    }
}
/* */
/* {% extends "MyappuserBundle::layout.html.twig" %}*/
/* */
/* {% block pack %}*/
/*      */
/*               <div class="box box-info">*/
/*                 <div class="box-header with-border">*/
/*                   <h3 class="box-title"></h3>*/
/*                   <div class="box-tools pull-right">*/
/*                     <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>*/
/*                     <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>*/
/*                   </div>*/
/* */
/* */
/* <div class="box-body">*/
/*                   <div class="table-responsive">*/
/*                     <table class="table no-margin">*/
/* */
/*                      */
/* 					*/
/* */
/*                      */
/* 					  {% for i in mod %}*/
/*                                               <tr>*/
/*     */
/*                          <td><a href=""><img src="{{ asset(path('my_image_route', {'id': i.id})) }}"/> </a></td>*/
/*                          */
/* 						   */
/*                         */
/*                         </tr>*/
/*                          {% endfor %}*/
/*                       </tbody>*/
/*                     </table>*/
/*        {% endblock  %} */
/*         */
