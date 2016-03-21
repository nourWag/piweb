<?php

/* MyappResponsableBundle:View1nour:uploadImageModifier.html.twig */
class __TwigTemplate_93d548a45259301ba2beca6aeefd286176977d65441321b40b71f0168643f079 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("MyappResponsableBundle::layout.html.twig", "MyappResponsableBundle:View1nour:uploadImageModifier.html.twig", 1);
        $this->blocks = array(
            'modifierImage' => array($this, 'block_modifierImage'),
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
    public function block_modifierImage($context, array $blocks = array())
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
    <img src=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->env->getExtension('routing')->getPath("my_image_route2", array("id" => $this->getAttribute((isset($context["image"]) ? $context["image"] : $this->getContext($context, "image")), "id", array())))), "html", null, true);
        echo "\"/><br>
    <input type=\"submit\" value=\"Upload Document\" />    
</form>
    ";
    }

    public function getTemplateName()
    {
        return "MyappResponsableBundle:View1nour:uploadImageModifier.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 8,  43 => 7,  39 => 6,  35 => 5,  31 => 3,  28 => 2,  11 => 1,);
    }
}
/* {% extends "MyappResponsableBundle::layout.html.twig" %}*/
/* {% block modifierImage %}*/
/*              */
/* <h1>Upload File</h1>*/
/* <form action="#" method="post" {{ form_enctype(Form) }}>*/
/*     Produit : {{ form_widget(Form.produit) }}*/
/*     {{ form_widget(Form) }}*/
/*     <img src="{{ asset(path('my_image_route2', {'id': image.id})) }}"/><br>*/
/*     <input type="submit" value="Upload Document" />    */
/* </form>*/
/*     {% endblock %}*/
