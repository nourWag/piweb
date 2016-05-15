<?php

/* MyappadminBundle:image:upload.html.twig */
class __TwigTemplate_50b41626637295acb0652491c906393fced53cead9e748efe1960193b113f6b0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("MyappadminBundle::layoutAd.html.twig", "MyappadminBundle:image:upload.html.twig", 1);
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
        echo " \t  
 
<h1>Télécharger Image</h1> 
<form action=\"#\" method=\"post\" ";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["Form"]) ? $context["Form"] : $this->getContext($context, "Form")), 'enctype');
        echo "> 
    ";
        // line 8
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["Form"]) ? $context["Form"] : $this->getContext($context, "Form")), 'widget');
        echo "
    
    <input type=\"submit\" value=\"Upload Document\" class=\"btn btn-primary\" /> 

</form>
";
    }

    public function getTemplateName()
    {
        return "MyappadminBundle:image:upload.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 8,  36 => 7,  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends 'MyappadminBundle::layoutAd.html.twig' %} */
/*  	  */
/*  {% block contenu %}*/
/*  	  */
/*  */
/* <h1>Télécharger Image</h1> */
/* <form action="#" method="post" {{ form_enctype(Form) }}> */
/*     {{ form_widget(Form) }}*/
/*     */
/*     <input type="submit" value="Upload Document" class="btn btn-primary" /> */
/* */
/* </form>*/
/* {% endblock %}*/
/* */
/* */
