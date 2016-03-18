<?php

/* MyappResponsableBundle:Image:upload.html.twig */
class __TwigTemplate_fce401249640c8f632ddb02983fb3d81a2b603474d4904c225a4fdb29440cf12 extends Twig_Template
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
        echo "<h1>Télécharger Image</h1> 
<form action=\"#\" method=\"post\" ";
        // line 4
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["Form"]) ? $context["Form"] : $this->getContext($context, "Form")), 'enctype');
        echo "> 
    ";
        // line 5
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["Form"]) ? $context["Form"] : $this->getContext($context, "Form")), 'widget');
        echo "
    
    <input type=\"submit\" value=\"Upload Document\" class=\"btn btn-primary\" /> 

</form>
";
        // line 11
        echo "
";
    }

    public function getTemplateName()
    {
        return "MyappResponsableBundle:Image:upload.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 11,  26 => 5,  22 => 4,  19 => 3,);
    }
}
/* {#{% extends 'pi2tstBundle::Boutique.html.twig'%}*/
/* {% block contents %}#}*/
/* <h1>Télécharger Image</h1> */
/* <form action="#" method="post" {{ form_enctype(Form) }}> */
/*     {{ form_widget(Form) }}*/
/*     */
/*     <input type="submit" value="Upload Document" class="btn btn-primary" /> */
/* */
/* </form>*/
/* {#{% endblock %}#}*/
/* */
/* */
