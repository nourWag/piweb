<?php

/* MyappResponsableBundle:Default:productList.html.twig */
class __TwigTemplate_14856811c0d6eb80364f24ff22c0c9a2c01a469ce11c14148d3faa703bf8844a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("MyappResponsableBundle::layoutAdd.html.twig", "MyappResponsableBundle:Default:productList.html.twig", 1);
        $this->blocks = array(
            'contenu' => array($this, 'block_contenu'),
            'kit_grid_css' => array($this, 'block_kit_grid_css'),
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
    public function block_contenu($context, array $blocks = array())
    {
        // line 3
        $this->displayBlock('kit_grid_css', $context, $blocks);
        // line 5
        echo "

";
        // line 7
        $this->loadTemplate("MyappResponsableBundle:Default:productList.html.twig", "MyappResponsableBundle:Default:productList.html.twig", 7, "1929413609")->display(array_merge($context, array("grid" => (isset($context["grid"]) ? $context["grid"] : $this->getContext($context, "grid")))));
    }

    // line 3
    public function block_kit_grid_css($context, array $blocks = array())
    {
        echo "<link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css1/base.css"), "html", null, true);
        echo "\"/>
";
    }

    public function getTemplateName()
    {
        return "MyappResponsableBundle:Default:productList.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 3,  38 => 7,  34 => 5,  32 => 3,  29 => 2,  11 => 1,);
    }
}


/* MyappResponsableBundle:Default:productList.html.twig */
class __TwigTemplate_14856811c0d6eb80364f24ff22c0c9a2c01a469ce11c14148d3faa703bf8844a_1929413609 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'kit_grid_thead_column' => array($this, 'block_kit_grid_thead_column'),
            'kit_grid_tbody_column' => array($this, 'block_kit_grid_tbody_column'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 7
        return $this->loadTemplate($this->getAttribute($this->getAttribute((isset($context["kitpages_data_grid"]) ? $context["kitpages_data_grid"] : $this->getContext($context, "kitpages_data_grid")), "grid", array()), "default_twig", array()), "MyappResponsableBundle:Default:productList.html.twig", 7);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 9
    public function block_kit_grid_thead_column($context, array $blocks = array())
    {
        // line 10
        echo "            <th>Modifier</th>
            <th>Supprimer</th>
             <th>Produit</th>
        ";
    }

    // line 15
    public function block_kit_grid_tbody_column($context, array $blocks = array())
    {
        // line 16
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["modele"]) ? $context["modele"] : $this->getContext($context, "modele")));
        foreach ($context['_seq'] as $context["_key"] => $context["m"]) {
            echo " 
              
            <td><a href=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("path_update", array("id" => $this->getAttribute($context["m"], "id", array()))), "html", null, true);
            echo "\">Modifier</a></td>
            <td><a href=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("path_delete", array("id" => $this->getAttribute($context["m"], "id", array()))), "html", null, true);
            echo "\">Supprimer</a></td>
            <td><a href=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("afficherProduitResp", array("id" => $this->getAttribute($context["m"], "id", array()))), "html", null, true);
            echo "\">Consulter Produit</a></td>
           
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['m'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "        ";
    }

    public function getTemplateName()
    {
        return "MyappResponsableBundle:Default:productList.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  130 => 23,  121 => 20,  117 => 19,  113 => 18,  105 => 16,  102 => 15,  95 => 10,  92 => 9,  83 => 7,  42 => 3,  38 => 7,  34 => 5,  32 => 3,  29 => 2,  11 => 1,);
    }
}
/* {% extends 'MyappResponsableBundle::layoutAdd.html.twig'%}*/
/* {% block contenu %}*/
/* {% block kit_grid_css %}<link rel="stylesheet" href="{{ asset('css1/base.css') }}"/>*/
/* {%endblock%}*/
/* */
/* */
/* {% embed kitpages_data_grid.grid.default_twig with {'grid': grid} %}*/
/* */
/*         {% block kit_grid_thead_column %}*/
/*             <th>Modifier</th>*/
/*             <th>Supprimer</th>*/
/*              <th>Produit</th>*/
/*         {% endblock %}*/
/* */
/*         {% block kit_grid_tbody_column %}*/
/*             {% for m in modele %} */
/*               */
/*             <td><a href="{{ path ("path_update", {"id": m.id}) }}">Modifier</a></td>*/
/*             <td><a href="{{ path ("path_delete", {"id": m.id}) }}">Supprimer</a></td>*/
/*             <td><a href="{{ path ("afficherProduitResp", {"id": m.id}) }}">Consulter Produit</a></td>*/
/*            */
/*             {% endfor %}*/
/*         {% endblock %}*/
/* */
/* {% endembed %}*/
/* {% endblock %}*/
