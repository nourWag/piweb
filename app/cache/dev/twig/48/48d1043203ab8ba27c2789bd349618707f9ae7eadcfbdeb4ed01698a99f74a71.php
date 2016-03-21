<?php

/* MyappuserBundle:Image:upload.html.twig */
class __TwigTemplate_764e12f657b4eadc74302287b6586be33b1101095e1f362a17577bbfbca6fe3f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("MyappuserBundle::layoutAd.html.twig", "MyappuserBundle:Image:upload.html.twig", 2);
        $this->blocks = array(
            'contenu' => array($this, 'block_contenu'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "MyappuserBundle::layoutAd.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_contenu($context, array $blocks = array())
    {
        // line 5
        echo "<h1>Upload File</h1> 
<form action=\"#\" method=\"post\" ";
        // line 6
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["Form"]) ? $context["Form"] : $this->getContext($context, "Form")), 'enctype');
        echo "> 
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
        return "MyappuserBundle:Image:upload.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 7,  34 => 6,  31 => 5,  28 => 4,  11 => 2,);
    }
}
/* */
/* {% extends 'MyappuserBundle::layoutAd.html.twig' %} */
/*  	  */
/*  {% block contenu %}*/
/* <h1>Upload File</h1> */
/* <form action="#" method="post" {{ form_enctype(Form) }}> */
/*     {{ form_widget(Form) }}*/
/*     <input type="submit" value="Upload Document" /> */
/* </form>*/
/* {% endblock contenu %}*/
