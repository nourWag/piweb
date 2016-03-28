<?php

/* MyappResponsableBundle:View1nour:ajouterPlesieursImage.html.twig */
class __TwigTemplate_ed8ecd8ddeb9cdf7a7e453512a03db6ffc672562a5ee856d997ab702b6c95b85 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("MyappResponsableBundle::layout.html.twig", "MyappResponsableBundle:View1nour:ajouterPlesieursImage.html.twig", 1);
        $this->blocks = array(
            'produitajouterimages' => array($this, 'block_produitajouterimages'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "MyappResponsableBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_produitajouterimages($context, array $blocks = array())
    {
        // line 3
        echo "             
<h1>Upload File</h1>
<form action=\"#\" method=\"post\" ";
        // line 5
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["Form"]) ? $context["Form"] : $this->getContext($context, "Form")), 'enctype');
        echo ">
    Produit : ";
        // line 6
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["Form"]) ? $context["Form"] : $this->getContext($context, "Form")), "produit", array()), 'widget');
        echo "
    ";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["Form"]) ? $context["Form"] : $this->getContext($context, "Form")), 'widget');
        echo "
    <input type=\"submit\" value=\"Upload Document\" /> 
    
</form>
    ";
    }

    public function getTemplateName()
    {
        return "MyappResponsableBundle:View1nour:ajouterPlesieursImage.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 7,  39 => 6,  35 => 5,  31 => 3,  28 => 2,  11 => 1,);
    }
}
/* {% extends "MyappResponsableBundle::layout.html.twig" %}*/
/* {% block produitajouterimages %}*/
/*              */
/* <h1>Upload File</h1>*/
/* <form action="#" method="post" {{ form_enctype(Form) }}>*/
/*     Produit : {{ form_widget(Form.produit) }}*/
/*     {{ form_widget(Form) }}*/
/*     <input type="submit" value="Upload Document" /> */
/*     */
/* </form>*/
/*     {% endblock %} */
