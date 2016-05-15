<?php

/* KitpagesDataGridBundle:Paginator:bootstrap3-paginator.html.twig */
class __TwigTemplate_b0c86fa71cb711709c3509ed6a2ace2fc360f071dcc6fd797375b5b31836fb8d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'kit_grid_paginator' => array($this, 'block_kit_grid_paginator'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        if (($this->getAttribute((isset($context["paginator"]) ? $context["paginator"] : $this->getContext($context, "paginator")), "totalPageCount", array()) > 1)) {
            // line 2
            $this->displayBlock('kit_grid_paginator', $context, $blocks);
        }
    }

    public function block_kit_grid_paginator($context, array $blocks = array())
    {
        // line 3
        echo "<nav class=\"kit-grid-paginator\">
    <ul class=\"pagination\">
        ";
        // line 5
        if ($this->getAttribute((isset($context["paginator"]) ? $context["paginator"] : $this->getContext($context, "paginator")), "previousButtonPage", array())) {
            // line 6
            echo "            <li>
                <a href=\"";
            // line 7
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paginator"]) ? $context["paginator"] : $this->getContext($context, "paginator")), "getUrl", array(0 => "currentPage", 1 => $this->getAttribute((isset($context["paginator"]) ? $context["paginator"] : $this->getContext($context, "paginator")), "previousButtonPage", array())), "method"), "html", null, true);
            echo "\" title=\"previous\">
                    <span aria-hidden=\"true\">&laquo;</span><span class=\"sr-only\">";
            // line 8
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("kitpages_data_grid.Previous"), "html", null, true);
            echo "</span></a>
                </a>
            </li>
        ";
        }
        // line 12
        echo "
        ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["paginator"]) ? $context["paginator"] : $this->getContext($context, "paginator")), "pageRange", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
            // line 14
            echo "            <li class=\"";
            if (($context["page"] == $this->getAttribute((isset($context["paginator"]) ? $context["paginator"] : $this->getContext($context, "paginator")), "currentPage", array()))) {
                echo "active";
            }
            echo "\">
                <a href=\"";
            // line 15
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paginator"]) ? $context["paginator"] : $this->getContext($context, "paginator")), "getUrl", array(0 => "currentPage", 1 => $context["page"]), "method"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $context["page"], "html", null, true);
            echo "</a>
            </li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "
        ";
        // line 19
        if ($this->getAttribute((isset($context["paginator"]) ? $context["paginator"] : $this->getContext($context, "paginator")), "nextButtonPage", array())) {
            // line 20
            echo "            <li>
                <a href=\"";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paginator"]) ? $context["paginator"] : $this->getContext($context, "paginator")), "getUrl", array(0 => "currentPage", 1 => $this->getAttribute((isset($context["paginator"]) ? $context["paginator"] : $this->getContext($context, "paginator")), "nextButtonPage", array())), "method"), "html", null, true);
            echo "\" title=\"next\">
                    <span aria-hidden=\"true\">&raquo;</span><span class=\"sr-only\">";
            // line 22
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("kitpages_data_grid.Next"), "html", null, true);
            echo "</span></a>
                </a>
            </li>
        ";
        }
        // line 26
        echo "    </ul>
</nav>
";
    }

    public function getTemplateName()
    {
        return "KitpagesDataGridBundle:Paginator:bootstrap3-paginator.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 26,  86 => 22,  82 => 21,  79 => 20,  77 => 19,  74 => 18,  63 => 15,  56 => 14,  52 => 13,  49 => 12,  42 => 8,  38 => 7,  35 => 6,  33 => 5,  29 => 3,  22 => 2,  20 => 1,);
    }
}
/* {% if paginator.totalPageCount > 1%}*/
/* {% block kit_grid_paginator %}*/
/* <nav class="kit-grid-paginator">*/
/*     <ul class="pagination">*/
/*         {% if paginator.previousButtonPage %}*/
/*             <li>*/
/*                 <a href="{{ paginator.getUrl("currentPage",paginator.previousButtonPage) }}" title="previous">*/
/*                     <span aria-hidden="true">&laquo;</span><span class="sr-only">{{ "kitpages_data_grid.Previous" | trans }}</span></a>*/
/*                 </a>*/
/*             </li>*/
/*         {% endif %}*/
/* */
/*         {% for page in paginator.pageRange %}*/
/*             <li class="{% if page == paginator.currentPage %}active{% endif %}">*/
/*                 <a href="{{ paginator.getUrl("currentPage",page) }}">{{ page }}</a>*/
/*             </li>*/
/*         {% endfor %}*/
/* */
/*         {% if paginator.nextButtonPage %}*/
/*             <li>*/
/*                 <a href="{{ paginator.getUrl("currentPage",paginator.nextButtonPage) }}" title="next">*/
/*                     <span aria-hidden="true">&raquo;</span><span class="sr-only">{{ "kitpages_data_grid.Next" | trans }}</span></a>*/
/*                 </a>*/
/*             </li>*/
/*         {% endif %}*/
/*     </ul>*/
/* </nav>*/
/* {% endblock kit_grid_paginator %}*/
/* {% endif %}*/
/* */
