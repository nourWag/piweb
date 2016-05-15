<?php

/* MyappuserBundle:Liraisonf:edit.html.twig */
class __TwigTemplate_a98d23ad9d86578fea44a90b7c68a054c0433f9e6ff812e05d30cf2a81933fcf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("MyappuserBundle::layoutlogin.html.twig", "MyappuserBundle:Liraisonf:edit.html.twig", 1);
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
        echo "    <h1>modifier livraison</h1>

    ";
        // line 5
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form');
        echo "

        <ul class=\"record_actions\">
    <li>
        <a href=\"";
        // line 9
        echo $this->env->getExtension('routing')->getPath("liraisonf");
        echo "\">
            Back to the list
        </a>
    </li>
    <li>";
        // line 13
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form');
        echo "</li>
</ul>
";
    }

    public function getTemplateName()
    {
        return "MyappuserBundle:Liraisonf:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 13,  42 => 9,  35 => 5,  31 => 3,  28 => 2,  11 => 1,);
    }
}
/* {% extends "MyappuserBundle::layoutlogin.html.twig" %}*/
/* {% block livraison %}*/
/*     <h1>modifier livraison</h1>*/
/* */
/*     {{ form(edit_form) }}*/
/* */
/*         <ul class="record_actions">*/
/*     <li>*/
/*         <a href="{{ path('liraisonf') }}">*/
/*             Back to the list*/
/*         </a>*/
/*     </li>*/
/*     <li>{{ form(delete_form) }}</li>*/
/* </ul>*/
/* {% endblock %}*/
/* */
