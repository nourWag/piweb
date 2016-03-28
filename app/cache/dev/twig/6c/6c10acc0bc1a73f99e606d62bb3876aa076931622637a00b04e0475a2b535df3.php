<?php

/* MyappResponsableBundle:layoutprofile:upload.html.twig */
class __TwigTemplate_0316913e0643e03a3e8caa506ecb4897b641924afe60f034039f4bf1f1e6d3ad extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 4
        $this->parent = $this->loadTemplate("MyappResponsableBundle::layoutAd.html.twig", "MyappResponsableBundle:layoutprofile:upload.html.twig", 4);
        $this->blocks = array(
            'contenu' => array($this, 'block_contenu'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "MyappResponsableBundle::layoutAd.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 6
    public function block_contenu($context, array $blocks = array())
    {
        // line 7
        echo "     
<h1>Upload File</h1> 
<form action=\"#\" method=\"post\" ";
        // line 9
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["Form"]) ? $context["Form"] : $this->getContext($context, "Form")), 'enctype');
        echo "> 
    ";
        // line 10
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["Form"]) ? $context["Form"] : $this->getContext($context, "Form")), 'widget');
        echo "
    <input type=\"submit\" value=\"Upload Document\" /> 
</form>
   
";
    }

    public function getTemplateName()
    {
        return "MyappResponsableBundle:layoutprofile:upload.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 10,  35 => 9,  31 => 7,  28 => 6,  11 => 4,);
    }
}
/* */
/*     */
/* */
/* {% extends 'MyappResponsableBundle::layoutAd.html.twig' %} */
/*  	  */
/*  {% block contenu %}*/
/*      */
/* <h1>Upload File</h1> */
/* <form action="#" method="post" {{ form_enctype(Form) }}> */
/*     {{ form_widget(Form) }}*/
/*     <input type="submit" value="Upload Document" /> */
/* </form>*/
/*    */
/* {% endblock contenu %}*/
