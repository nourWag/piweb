<?php

/* MyappResponsableBundle:imagenour:upload.html.twig */
class __TwigTemplate_09ac4b619225aa0e6f6799dc4ff7c30fac38944518f44571f92272550cb2edc5 extends Twig_Template
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
        echo "<h1>Upload File</h1>
<form action=\"#\" method=\"post\" ";
        // line 2
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["Form"]) ? $context["Form"] : $this->getContext($context, "Form")), 'enctype');
        echo ">
    Produit : ";
        // line 3
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["Form"]) ? $context["Form"] : $this->getContext($context, "Form")), "produit", array()), 'widget');
        echo "
    ";
        // line 4
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["Form"]) ? $context["Form"] : $this->getContext($context, "Form")), 'widget');
        echo "
    <input type=\"submit\" value=\"Upload Document\" />    
</form>";
    }

    public function getTemplateName()
    {
        return "MyappResponsableBundle:imagenour:upload.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  26 => 3,  22 => 2,  19 => 1,);
    }
}
/* <h1>Upload File</h1>*/
/* <form action="#" method="post" {{ form_enctype(Form) }}>*/
/*     Produit : {{ form_widget(Form.produit) }}*/
/*     {{ form_widget(Form) }}*/
/*     <input type="submit" value="Upload Document" />    */
/* </form>*/
