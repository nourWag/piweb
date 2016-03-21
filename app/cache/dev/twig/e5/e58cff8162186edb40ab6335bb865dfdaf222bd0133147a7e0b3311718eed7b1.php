<?php

/* MyappResponsableBundle:View1:update.html.twig */
class __TwigTemplate_5c6c77fb6094980da3e1c7f8996236c873b743d3af83ddbaeeb4f1313ea3289b extends Twig_Template
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
        // line 3
        echo "    <form method=\"post\" action=''>
    <table>
        <tr><td>Nom :</td><tr>
    <tr>
        <td>";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "nom", array()), 'widget');
        echo "</td>
    </tr>
    <tr>
        <td>Description_boutique :</td><tr>
    <tr>
        <td>";
        // line 12
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "categorie", array()), 'widget');
        echo "</td>
    </tr>
    <tr>
        <td>Promotion_boutique :</td><tr>
    <tr>
        <td>";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "promotion", array()), 'widget');
        echo "</td>
    </tr>
    <tr>
        <td></td></tr>
    <tr><td></td></tr>
    <tr>
        <td><input type=\"submit\" value=\"Valider\" placeholder=\"Description boutique\" class=\"btn btn-primary\" /></td></tr>
    
    </table>
";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), 'rest');
        echo "
</form>
";
    }

    public function getTemplateName()
    {
        return "MyappResponsableBundle:View1:update.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 26,  41 => 17,  33 => 12,  25 => 7,  19 => 3,);
    }
}
/* {#{% extends 'pi2tstBundle::Boutique.html.twig'%}*/
/* {% block contents %}#}*/
/*     <form method="post" action=''>*/
/*     <table>*/
/*         <tr><td>Nom :</td><tr>*/
/*     <tr>*/
/*         <td>{{ form_widget(f.nom) }}</td>*/
/*     </tr>*/
/*     <tr>*/
/*         <td>Description_boutique :</td><tr>*/
/*     <tr>*/
/*         <td>{{ form_widget(f.categorie) }}</td>*/
/*     </tr>*/
/*     <tr>*/
/*         <td>Promotion_boutique :</td><tr>*/
/*     <tr>*/
/*         <td>{{ form_widget(f.promotion) }}</td>*/
/*     </tr>*/
/*     <tr>*/
/*         <td></td></tr>*/
/*     <tr><td></td></tr>*/
/*     <tr>*/
/*         <td><input type="submit" value="Valider" placeholder="Description boutique" class="btn btn-primary" /></td></tr>*/
/*     */
/*     </table>*/
/* {{form_rest(f)}}*/
/* </form>*/
/* {#{% endblock %}  #}*/
/* */
