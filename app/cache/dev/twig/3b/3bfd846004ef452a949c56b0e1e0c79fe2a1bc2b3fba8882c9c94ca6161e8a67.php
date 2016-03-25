<?php

/* MyappResponsableBundle:View1:rechercheBoutique.html.twig */
class __TwigTemplate_6cb427a33676e884f89179a3afd99a1b0521a1c5498e12836b09a68bbe28e8ff extends Twig_Template
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
        echo "


";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["modeles"]) ? $context["modeles"] : $this->getContext($context, "modeles")));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 7
            echo "    ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["i"], "nom", array()), "html", null, true);
            echo "
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 10
        echo "


";
    }

    public function getTemplateName()
    {
        return "MyappResponsableBundle:View1:rechercheBoutique.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  37 => 10,  28 => 7,  24 => 6,  19 => 3,);
    }
}
/* {#{% extends 'pi2tstBundle::Boutique.html.twig'%}*/
/* {% block contents %}#}*/
/* */
/* */
/* */
/* {%for i in modeles %}*/
/*     {{ i.nom}}*/
/*     {%endfor %}*/
/* {#{% endblock %}#}*/
/* */
/* */
/* */
/* */
