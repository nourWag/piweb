<?php

/* MyappResponsableBundle:View1nour:afficherProduit2.html.twig */
class __TwigTemplate_25c35d21dfcfb74b1dc293d61ddb310ffa1d2f6515a729233d2bdf5df03d91b1 extends Twig_Template
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
        echo "<table border=\"2\">
    <tr>
        <th> Id </th>
        <th> Title</th>
        <th> Show picture </th>
</tr>
   
    <tr>
        
</tr>
    
</table>
<div >
    ";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["modele"]) ? $context["modele"] : $this->getContext($context, "modele")), "getTotalItemCount", array()), "html", null, true);
        echo "
</div>
<table>
<tr>
";
        // line 19
        echo "    <th>";
        echo $this->env->getExtension('knp_pagination')->sortable($this->env, (isset($context["modele"]) ? $context["modele"] : $this->getContext($context, "modele")), "Id", "a.id");
        echo "</th>
    <th";
        // line 20
        if ($this->getAttribute((isset($context["modele"]) ? $context["modele"] : $this->getContext($context, "modele")), "isSorted", array(0 => "a.Title"), "method")) {
            echo " class=\"sorted\"";
        }
        echo ">";
        echo $this->env->getExtension('knp_pagination')->sortable($this->env, (isset($context["modele"]) ? $context["modele"] : $this->getContext($context, "modele")), "Title", "a.title");
        echo "</th>
</tr>
";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["modele"]) ? $context["modele"] : $this->getContext($context, "modele")));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 24
            echo "<tr ";
            if (($this->getAttribute($context["loop"], "index", array()) % 2 == 1)) {
                echo "class=\"color\"";
            }
            echo ">
    <td>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "id", array()), "html", null, true);
            echo "</td>
    <td>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "prixdachat", array()), "html", null, true);
            echo "</td>
</tr>
";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "</table>
";
        // line 31
        echo "<div class=\"navigation\">
    ";
        // line 32
        echo $this->env->getExtension('knp_pagination')->render($this->env, (isset($context["modele"]) ? $context["modele"] : $this->getContext($context, "modele")));
        echo "
</div>";
    }

    public function getTemplateName()
    {
        return "MyappResponsableBundle:View1nour:afficherProduit2.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 32,  103 => 31,  100 => 29,  83 => 26,  79 => 25,  72 => 24,  55 => 23,  46 => 20,  41 => 19,  34 => 14,  19 => 1,);
    }
}
/* <table border="2">*/
/*     <tr>*/
/*         <th> Id </th>*/
/*         <th> Title</th>*/
/*         <th> Show picture </th>*/
/* </tr>*/
/*    */
/*     <tr>*/
/*         */
/* </tr>*/
/*     */
/* </table>*/
/* <div >*/
/*     {{ modele.getTotalItemCount }}*/
/* </div>*/
/* <table>*/
/* <tr>*/
/* {# sorting of properties based on query components #}*/
/*     <th>{{ knp_pagination_sortable(modele, 'Id', 'a.id') }}</th>*/
/*     <th{% if modele.isSorted('a.Title') %} class="sorted"{% endif %}>{{ knp_pagination_sortable(modele, 'Title', 'a.title') }}</th>*/
/* </tr>*/
/* {# table body #}*/
/* {% for article in modele %}*/
/* <tr {% if loop.index is odd %}class="color"{% endif %}>*/
/*     <td>{{ article.id }}</td>*/
/*     <td>{{ article.prixdachat }}</td>*/
/* </tr>*/
/* {% endfor %}*/
/* </table>*/
/* {# display navigation #}*/
/* <div class="navigation">*/
/*     {{ knp_pagination_render(modele) }}*/
/* </div>*/
