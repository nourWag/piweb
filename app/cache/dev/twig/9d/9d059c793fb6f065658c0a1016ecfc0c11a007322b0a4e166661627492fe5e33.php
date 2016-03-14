<?php

/* MyappadminBundle:Administration/client:modifier.html.twig */
class __TwigTemplate_abff76e12eef88415d47757a84d4473606446eb5f8f1ecf7a1c75379e58e1363 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "
<h1>Modifier un modele </h1>
<form action=\"\" method=\"post\" >
    <table> 
    <tr>
        <td>Libelle: </td>
        <td>";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "libelle", array()), 'widget');
        echo "</td>
        
    </tr>
    <tr>  
    <td>   Pays:</td>
    <td>";
        // line 12
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "pays", array()), 'widget');
        echo "</td>
    </tr>
      
</table>
    <br>
  
";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
</form>";
    }

    public function getTemplateName()
    {
        return "MyappadminBundle:Administration/client:modifier.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 18,  35 => 12,  27 => 7,  19 => 1,);
    }
}
/* */
/* <h1>Modifier un modele </h1>*/
/* <form action="" method="post" >*/
/*     <table> */
/*     <tr>*/
/*         <td>Libelle: </td>*/
/*         <td>{{ form_widget(form.libelle)}}</td>*/
/*         */
/*     </tr>*/
/*     <tr>  */
/*     <td>   Pays:</td>*/
/*     <td>{{ form_widget(form.pays)}}</td>*/
/*     </tr>*/
/*       */
/* </table>*/
/*     <br>*/
/*   */
/* {{form_rest(form)}}*/
/* </form>*/
