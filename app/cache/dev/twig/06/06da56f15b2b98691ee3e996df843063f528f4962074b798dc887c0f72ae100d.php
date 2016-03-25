<?php

/* MyappuserBundle:Default/modulesUsed:utilisateurs.html.twig */
class __TwigTemplate_c71fb6bade08d2c0f149b03fa8c41cb4e6ab3151855a5185e807c4a44781f39a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("MyappuserBundle::layout.html.twig", "MyappuserBundle:Default/modulesUsed:utilisateurs.html.twig", 1);
        $this->blocks = array(
            'produit' => array($this, 'block_produit'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "MyappuserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_produit($context, array $blocks = array())
    {
        // line 4
        echo "

<div class=\"well\">
    <ul class=\"nav nav-list\">
        <li>
            <a href=\"";
        // line 9
        echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
        echo "\">Se connecter</a>
        </li>
        <li>
            <a href=\"";
        // line 12
        echo $this->env->getExtension('routing')->getPath("fos_user_registration_register");
        echo "\">S'inscrire</a>
        </li>
    </ul>
</div>
         ";
    }

    // line 17
    public function block_body($context, array $blocks = array())
    {
        // line 18
        echo "    ";
    }

    public function getTemplateName()
    {
        return "MyappuserBundle:Default/modulesUsed:utilisateurs.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 18,  54 => 17,  45 => 12,  39 => 9,  32 => 4,  29 => 3,  11 => 1,);
    }
}
/* {% extends "MyappuserBundle::layout.html.twig" %}*/
/* */
/* {% block produit %}*/
/* */
/* */
/* <div class="well">*/
/*     <ul class="nav nav-list">*/
/*         <li>*/
/*             <a href="{{ path('fos_user_security_login') }}">Se connecter</a>*/
/*         </li>*/
/*         <li>*/
/*             <a href="{{ path('fos_user_registration_register') }}">S'inscrire</a>*/
/*         </li>*/
/*     </ul>*/
/* </div>*/
/*          {% endblock produit %}*/
/* {% block body %}*/
/*     {% endblock body %}*/
