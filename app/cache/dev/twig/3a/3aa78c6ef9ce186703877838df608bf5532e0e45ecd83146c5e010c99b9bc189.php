<?php

/* MyappResponsableBundle:Liraisonf:index.html.twig */
class __TwigTemplate_7622e1a8c55c59bef099cfced463be28aed4e7e16df787aff5705cb4c4cbf0ab extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("MyappResponsableBundle::layoutAdd.html.twig", "MyappResponsableBundle:Liraisonf:index.html.twig", 1);
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
    <h1> liste des livraisons</h1>
     <form action=\"#\" method=\"get\" class=\"sidebar-form\">
            <div class=\"input-group\">
              <input type=\"text\" name=\"q\" class=\"cp\" placeholder=\"Search...\">
              <span class=\"input-group-btn\">
                <button type=\"submit\" name=\"search\" id=\"search-btn\" class=\"btn btn-flat\"><i class=\"fa fa-search\"></i></button>
              </span>
            </div>
          </form>
    <table class=\"records_list\">
        <thead>
            <tr>
               ";
        // line 17
        echo "                <th>Nom</th>
                <th>Prenom</th>
                <th>Adresse</th>
                <th>Telephone</th>
               <th>Actions</th> 
               
            </tr>
        </thead>
        <tbody>
        ";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 27
            echo "            <tr>
               ";
            // line 29
            echo "                   ";
            // line 30
            echo "                <td>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "nom", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "prenom", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "adresse", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "telephone", array()), "html", null, true);
            echo "</td>
        
                <td>
                <ul>
                    <li>
                        <a href=\"";
            // line 38
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("liraisonf_showliv", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">show</a>
                    </li>
                    <li>
                        <a href=\"";
            // line 41
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("supprimerliv", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">supprimer</a>
                    </li> 
                </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo "        </tbody>
    </table>

 ";
        // line 57
        echo "    ";
    }

    public function getTemplateName()
    {
        return "MyappResponsableBundle:Liraisonf:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 57,  105 => 47,  93 => 41,  87 => 38,  79 => 33,  75 => 32,  71 => 31,  66 => 30,  64 => 29,  61 => 27,  57 => 26,  46 => 17,  31 => 3,  28 => 2,  11 => 1,);
    }
}
/* {% extends "MyappResponsableBundle::layoutAdd.html.twig" %}*/
/* {% block livraison %}*/
/* */
/*     <h1> liste des livraisons</h1>*/
/*      <form action="#" method="get" class="sidebar-form">*/
/*             <div class="input-group">*/
/*               <input type="text" name="q" class="cp" placeholder="Search...">*/
/*               <span class="input-group-btn">*/
/*                 <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i></button>*/
/*               </span>*/
/*             </div>*/
/*           </form>*/
/*     <table class="records_list">*/
/*         <thead>*/
/*             <tr>*/
/*                {# <th>Id</th>#}*/
/*                 <th>Nom</th>*/
/*                 <th>Prenom</th>*/
/*                 <th>Adresse</th>*/
/*                 <th>Telephone</th>*/
/*                <th>Actions</th> */
/*                */
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% for entity in entities %}*/
/*             <tr>*/
/*                {# <td><a href="{{ path('liraisonf_show', { 'id': entity.id }) }}">#}*/
/*                    {# {{ entity.id }}</a></td> #}*/
/*                 <td>{{ entity.nom }}</td>*/
/*                 <td>{{ entity.prenom }}</td>*/
/*                 <td>{{ entity.adresse }}</td>*/
/*                 <td>{{ entity.telephone }}</td>*/
/*         */
/*                 <td>*/
/*                 <ul>*/
/*                     <li>*/
/*                         <a href="{{ path('liraisonf_showliv', { 'id': entity.id }) }}">show</a>*/
/*                     </li>*/
/*                     <li>*/
/*                         <a href="{{ path('supprimerliv', { 'id': entity.id }) }}">supprimer</a>*/
/*                     </li> */
/*                 </ul>*/
/*                 </td>*/
/*             </tr>*/
/*         {% endfor %}*/
/*         </tbody>*/
/*     </table>*/
/* */
/*  {#       <ul>*/
/*         <li>*/
/*             <a href="{{ path('liraisonf_new') }}">*/
/*                 Create a new entry*/
/*             </a>*/
/*         </li>*/
/*     </ul>#}*/
/*     {% endblock %}*/
/* */
