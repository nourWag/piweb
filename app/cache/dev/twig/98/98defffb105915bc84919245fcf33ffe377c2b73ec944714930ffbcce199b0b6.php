<?php

/* MyappResponsableBundle:View1:ajout1.html.twig */
class __TwigTemplate_bc1f4cc5ab26611fc1a7d49ea2c34e5ed9d6f1d7465767f0576d0aa2b48afc72 extends Twig_Template
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
        echo "    <form method=\"post\" action=\"\">

    ";
        // line 5
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), 'rest');
        echo "</fieldset>   
";
    }

    public function getTemplateName()
    {
        return "MyappResponsableBundle:View1:ajout1.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  23 => 5,  19 => 3,);
    }
}
/* {#{% extends 'MyappResponsableBundle::Boutique.html.twig'%}*/
/* {% block contents %}#}*/
/*     <form method="post" action="">*/
/* */
/*     {{form_rest(f)}}</fieldset>   */
/* {#{% endblock %}#}*/
/* */
