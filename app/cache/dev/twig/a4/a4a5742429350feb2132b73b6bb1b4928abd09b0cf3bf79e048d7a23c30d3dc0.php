<?php

/* MyappResponsableBundle:View1:rechercheBoutique.html.twig */
class __TwigTemplate_ed6b038ff29d8c7e64c95dd2df4e4c77917e5f49e73ec4e8593a0c09950ead46 extends Twig_Template
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
