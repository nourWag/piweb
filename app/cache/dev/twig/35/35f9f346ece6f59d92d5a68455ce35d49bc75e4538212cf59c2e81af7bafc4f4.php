<?php

/* MyappadminBundle:Administration/client:ajout2.html.twig */
class __TwigTemplate_aa5170b23a8e8c06d0be1ae3a3b58a011b5407c7ea3499ea86fc7d42cddd3d57 extends Twig_Template
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
        echo "<form method='post'>
<table>
    <tr><td>Libelle:</td><td>";
        // line 3
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "libelle", array()), 'widget');
        echo "</td></tr>
     <tr><td>Pays:</td><td>";
        // line 4
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "pays", array()), 'widget');
        echo "</td></tr>
    
</table>
      ";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), 'rest');
        echo "
</form>";
    }

    public function getTemplateName()
    {
        return "MyappadminBundle:Administration/client:ajout2.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 7,  27 => 4,  23 => 3,  19 => 1,);
    }
}
/* <form method='post'>*/
/* <table>*/
/*     <tr><td>Libelle:</td><td>{{form_widget(f.libelle)}}</td></tr>*/
/*      <tr><td>Pays:</td><td>{{form_widget(f.pays)}}</td></tr>*/
/*     */
/* </table>*/
/*       {{form_rest(f)}}*/
/* </form>*/