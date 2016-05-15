<?php

/* MyappResponsableBundle:Liraisonf:show.html.twig */
class __TwigTemplate_536d6c649c5f327a6fb8dafed0052478ab673b74983abf940f5c55a45990e3a5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("MyappResponsableBundle::layoutAdd.html.twig", "MyappResponsableBundle:Liraisonf:show.html.twig", 1);
        $this->blocks = array(
            'livraison' => array($this, 'block_livraison'),
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

    // line 2
    public function block_livraison($context, array $blocks = array())
    {
        // line 3
        echo "

    <h1>Livraison</h1>

    <table class=\"record_properties\">
        <tbody>
           ";
        // line 13
        echo "            <tr>
                <th>Nom</th>
                <td>";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "nom", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Prenom</th>
                <td>";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "prenom", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Adresse</th>
                <td>";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "adresse", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Telephone</th>
                <td>";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "telephone", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

        <ul class=\"record_actions\">
    <li>
        <a href=\"";
        // line 34
        echo $this->env->getExtension('routing')->getPath("liraisonf");
        echo "\">
            Back to the list
        </a>
    </li>
";
        // line 44
        echo "</ul>
";
    }

    public function getTemplateName()
    {
        return "MyappResponsableBundle:Liraisonf:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 44,  74 => 34,  64 => 27,  57 => 23,  50 => 19,  43 => 15,  39 => 13,  31 => 3,  28 => 2,  11 => 1,);
    }
}
/* {% extends "MyappResponsableBundle::layoutAdd.html.twig" %}*/
/* {% block livraison %}*/
/* */
/* */
/*     <h1>Livraison</h1>*/
/* */
/*     <table class="record_properties">*/
/*         <tbody>*/
/*            {# <tr>*/
/*                 <th>Id</th>*/
/*                 <td>{{ entity.id }}</td>*/
/*             </tr>#}*/
/*             <tr>*/
/*                 <th>Nom</th>*/
/*                 <td>{{ entity.nom }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Prenom</th>*/
/*                 <td>{{ entity.prenom }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Adresse</th>*/
/*                 <td>{{ entity.adresse }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Telephone</th>*/
/*                 <td>{{ entity.telephone }}</td>*/
/*             </tr>*/
/*         </tbody>*/
/*     </table>*/
/* */
/*         <ul class="record_actions">*/
/*     <li>*/
/*         <a href="{{ path('liraisonf') }}">*/
/*             Back to the list*/
/*         </a>*/
/*     </li>*/
/* {#    <li>*/
/*         <a href="{{ path('liraisonf_edit', { 'id': entity.id }) }}">*/
/*             Edit*/
/*         </a>*/
/*     </li>*/
/*     <li>{{ form(delete_form) }}</li>#}*/
/* </ul>*/
/* {% endblock %}*/
/* */
