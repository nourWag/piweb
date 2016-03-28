<?php

/* MyappuserBundle:Default/modulesUsed:utilisateursConnecte.html.twig */
class __TwigTemplate_c2fa809b0244ba16ee691eb3d809e0b697ef8f863c7b2f4660196de0a5a5937e extends Twig_Template
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
        // line 1
        echo "
<div class=\"well\">
    <ul class=\"nav nav-list\">
        <li>
            <a href=\"";
        // line 5
        echo $this->env->getExtension('routing')->getPath("fos_user_profile_show");
        echo "\">Mes informations</a>
        </li>
        <li>
            <a href=\"";
        // line 8
        echo $this->env->getExtension('routing')->getPath("fos_user_profile_edit");
        echo "\">Editer mes informations</a>
        </li>
        <li>
            <a href=\"";
        // line 11
        echo $this->env->getExtension('routing')->getPath("fos_user_change_password");
        echo "\">Changer mon mot de passe</a>
        </li>
        <li>
            <a href=\"#\">Mes factures</a>
        </li>
        <li>
            <a href=\"#\">Mes adresses</a>
        </li>
        <li>
            <a href=\"";
        // line 20
        echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
        echo "\">deconnexion</a>
        </li>
    </ul>
</div>
                          ";
    }

    public function getTemplateName()
    {
        return "MyappuserBundle:Default/modulesUsed:utilisateursConnecte.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 20,  37 => 11,  31 => 8,  25 => 5,  19 => 1,);
    }
}
/* */
/* <div class="well">*/
/*     <ul class="nav nav-list">*/
/*         <li>*/
/*             <a href="{{ path('fos_user_profile_show') }}">Mes informations</a>*/
/*         </li>*/
/*         <li>*/
/*             <a href="{{ path('fos_user_profile_edit') }}">Editer mes informations</a>*/
/*         </li>*/
/*         <li>*/
/*             <a href="{{ path('fos_user_change_password') }}">Changer mon mot de passe</a>*/
/*         </li>*/
/*         <li>*/
/*             <a href="#">Mes factures</a>*/
/*         </li>*/
/*         <li>*/
/*             <a href="#">Mes adresses</a>*/
/*         </li>*/
/*         <li>*/
/*             <a href="{{ path('fos_user_security_logout') }}">deconnexion</a>*/
/*         </li>*/
/*     </ul>*/
/* </div>*/
/*                           */
