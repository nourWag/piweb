<?php

/* MyappResponsableBundle:CarteFidelite:AjouterCarteFidelite.html.twig */
class __TwigTemplate_0ad85a8dfa1551e2bb2070f3ddca23f0dba29226e60d9f3b64630f21de44a6f5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("MyappResponsableBundle::layoutAdd.html.twig", "MyappResponsableBundle:CarteFidelite:AjouterCarteFidelite.html.twig", 1);
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

    // line 2
    public function block_content2($context, array $blocks = array())
    {
        // line 3
        echo "            
<html>
    <head>
    </head>
    <body>
        
<form method=\"post\" >
        <fieldset>
            <legend>Ajouter Carte :</legend>
            <table>
                <tr>
                     <td>";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "</td>
                </tr>
              <tr>
                     <td>";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "</td>
                </tr>
               <tr>
                     <td>";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "</td>
                </tr>
           
            </table>
             
                    
           
        </fieldset>
                  ";
        // line 28
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "  
    </form>
    </body>
    ";
    }

    public function getTemplateName()
    {
        return "MyappResponsableBundle:CarteFidelite:AjouterCarteFidelite.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 28,  56 => 20,  50 => 17,  44 => 14,  31 => 3,  28 => 2,  11 => 1,);
    }
}
/* {% extends "MyappResponsableBundle::layoutAdd.html.twig" %}*/
/* {% block content2 %}*/
/*             */
/* <html>*/
/*     <head>*/
/*     </head>*/
/*     <body>*/
/*         */
/* <form method="post" >*/
/*         <fieldset>*/
/*             <legend>Ajouter Carte :</legend>*/
/*             <table>*/
/*                 <tr>*/
/*                      <td>{{ form_widget(form) }}</td>*/
/*                 </tr>*/
/*               <tr>*/
/*                      <td>{{ form_widget(form) }}</td>*/
/*                 </tr>*/
/*                <tr>*/
/*                      <td>{{ form_widget(form) }}</td>*/
/*                 </tr>*/
/*            */
/*             </table>*/
/*              */
/*                     */
/*            */
/*         </fieldset>*/
/*                   {{ form_end(form) }}  */
/*     </form>*/
/*     </body>*/
/*     {% endblock %}*/
