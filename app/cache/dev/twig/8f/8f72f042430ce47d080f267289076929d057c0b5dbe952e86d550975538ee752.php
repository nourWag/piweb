<?php

/* MyappResponsableBundle:View2:ajout1.html.twig */
class __TwigTemplate_0256bfebbf96e729bc9113614600d1922750ba467dc8c8cc1fd3ab64288a2a29 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("MyappResponsableBundle::layoutAdd.html.twig", "MyappResponsableBundle:View2:ajout1.html.twig", 1);
        $this->blocks = array(
            'contenu' => array($this, 'block_contenu'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "MyappResponsableBundle::layoutAdd.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_contenu($context, array $blocks = array())
    {
        // line 4
        echo "    <form method=\"post\" action=\"\">

    ";
        // line 6
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), 'rest');
        echo "</fieldset>  
    ";
    }

    public function getTemplateName()
    {
        return "MyappResponsableBundle:View2:ajout1.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 6,  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends 'MyappResponsableBundle::layoutAdd.html.twig' %} */
/*  	  */
/*  {% block contenu %}*/
/*     <form method="post" action="">*/
/* */
/*     {{form_rest(f)}}</fieldset>  */
/*     {% endblock %}*/
/* */
