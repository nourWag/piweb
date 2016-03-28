<?php

/* MyappResponsableBundle:Mail:new.html.twig */
class __TwigTemplate_23fe52b27cf4a47dda4a3c6cbf1c4f090e9041dc8faef5eead2ad7d5fb5c77bb extends Twig_Template
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
        echo "    <head></head>
<body> 
<h2> <strong> Formulaire De Contact</strong> </h2>
 <p>";
        // line 6
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "</p>
 
 <form role=\"form\" id=\"fr\" method=\"POST\" action='";
        // line 8
        echo $this->env->getExtension('routing')->getPath("my_app_mail_sendpage");
        echo "' > 
 ";
        // line 9
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
 </form>
</body>
";
    }

    public function getTemplateName()
    {
        return "MyappResponsableBundle:Mail:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 9,  29 => 8,  24 => 6,  19 => 3,);
    }
}
/* {#{% extends 'pi2tstBundle::Boutique.html.twig'%}*/
/* {% block contents %}#}*/
/*     <head></head>*/
/* <body> */
/* <h2> <strong> Formulaire De Contact</strong> </h2>*/
/*  <p>{{form_errors(form)}}</p>*/
/*  */
/*  <form role="form" id="fr" method="POST" action='{{path('my_app_mail_sendpage')}}' > */
/*  {{form_widget(form)}}*/
/*  </form>*/
/* </body>*/
/* {#{% endblock %}#}*/
