<?php

/* MyappadminBundle:Image:edit.html.twig */
class __TwigTemplate_9495a8491b38871f98d7132d2d3338e4ad625f3f163ccb6b8e2cd2a889752c1b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("MyappadminBundle::layoutAd.html.twig", "MyappadminBundle:Image:edit.html.twig", 1);
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

    // line 3
    public function block_contenu($context, array $blocks = array())
    {
        // line 4
        echo "  
<h1>Modifier un modele </h1>
<form name=f1 method=\"post\"  ";
        // line 6
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo " action=''> 
    <table> 
    <tr>
        <td>Libelle: </td>
        <td>";
        // line 10
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "id", array()), 'widget');
        echo "</td>
        
    </tr>
    <tr>  
    <td>   Pays:</td>
    <td>";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "titre", array()), 'widget');
        echo "</td>
    </tr>
      
</table>
    <br>
  
";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
</form>
";
    }

    public function getTemplateName()
    {
        return "MyappadminBundle:Image:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 21,  50 => 15,  42 => 10,  35 => 6,  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends 'MyappadminBundle::layoutAd.html.twig' %} */
/*  	  */
/*  {% block contenu %}*/
/*   */
/* <h1>Modifier un modele </h1>*/
/* <form name=f1 method="post"  {{ form_enctype(form) }} action=''> */
/*     <table> */
/*     <tr>*/
/*         <td>Libelle: </td>*/
/*         <td>{{ form_widget(form.id)}}</td>*/
/*         */
/*     </tr>*/
/*     <tr>  */
/*     <td>   Pays:</td>*/
/*     <td>{{ form_widget(form.titre)}}</td>*/
/*     </tr>*/
/*       */
/* </table>*/
/*     <br>*/
/*   */
/* {{form_rest(form)}}*/
/* </form>*/
/* {% endblock %}*/
/* */
