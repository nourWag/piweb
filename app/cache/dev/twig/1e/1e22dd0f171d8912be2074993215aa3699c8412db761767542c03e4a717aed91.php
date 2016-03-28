<?php

/* MyappuserBundle:Liraisonf:new.html.twig */
class __TwigTemplate_6daa8ef663fde21622a002b68a4c437db373a515fc000b5290856592eff79b2c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("MyappuserBundle::layoutlogin.html.twig", "MyappuserBundle:Liraisonf:new.html.twig", 1);
        $this->blocks = array(
            'livraison' => array($this, 'block_livraison'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "MyappuserBundle::layoutlogin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_livraison($context, array $blocks = array())
    {
        // line 3
        echo "    <h1>Nouvelle Livraison</h1>
   ";
        // line 4
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        echo "
    
    

        <ul class=\"record_actions\">
    <li>
        <a href=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("liraisonf");
        echo "\">
            Back to the list
        </a>
    </li>
</ul>

";
    }

    public function getTemplateName()
    {
        return "MyappuserBundle:Liraisonf:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 10,  34 => 4,  31 => 3,  28 => 2,  11 => 1,);
    }
}
/* {% extends "MyappuserBundle::layoutlogin.html.twig" %}*/
/* {% block livraison %}*/
/*     <h1>Nouvelle Livraison</h1>*/
/*    {{ form(form) }}*/
/*     */
/*     */
/* */
/*         <ul class="record_actions">*/
/*     <li>*/
/*         <a href="{{ path('liraisonf') }}">*/
/*             Back to the list*/
/*         </a>*/
/*     </li>*/
/* </ul>*/
/* */
/* {% endblock %}*/
/* */
