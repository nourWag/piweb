<?php

/* KitpagesDataGridBundle:Grid:bootstrap3-grid.html.twig */
class __TwigTemplate_c8531d3cf040fdac3acae9e1f2ac7a4e8743906f34257ceec98e92a4058f798f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'kit_grid_main' => array($this, 'block_kit_grid_main'),
            'kit_grid_selector' => array($this, 'block_kit_grid_selector'),
            'kit_grid_filter' => array($this, 'block_kit_grid_filter'),
            'kit_grid_debug' => array($this, 'block_kit_grid_debug'),
            'kit_grid_thead' => array($this, 'block_kit_grid_thead'),
            'kit_grid_tbody' => array($this, 'block_kit_grid_tbody'),
            'kit_grid_row_class' => array($this, 'block_kit_grid_row_class'),
            'kit_grid_tbody_before_column' => array($this, 'block_kit_grid_tbody_before_column'),
            'kit_grid_paginator' => array($this, 'block_kit_grid_paginator'),
            'kit_grid_javascript' => array($this, 'block_kit_grid_javascript'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('kit_grid_main', $context, $blocks);
    }

    public function block_kit_grid_main($context, array $blocks = array())
    {
        // line 2
        echo "    <div class=\"kit-grid ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["grid"]) ? $context["grid"] : $this->getContext($context, "grid")), "getGridCssName", array()), "html", null, true);
        echo "\">
        ";
        // line 3
        $this->displayBlock('kit_grid_selector', $context, $blocks);
        // line 16
        echo "        ";
        $this->displayBlock('kit_grid_filter', $context, $blocks);
        // line 30
        echo "        ";
        $this->displayBlock('kit_grid_debug', $context, $blocks);
        // line 35
        echo "        ";
        $this->displayBlock("kit_grid_before_table", $context, $blocks);
        echo "
        <table class=\"table table-striped table-bordered table-hover\">
            ";
        // line 37
        $this->displayBlock('kit_grid_thead', $context, $blocks);
        // line 56
        echo "            ";
        $this->displayBlock('kit_grid_tbody', $context, $blocks);
        // line 81
        echo "        </table>
        ";
        // line 82
        $this->displayBlock("kit_grid_after_table", $context, $blocks);
        echo "
        ";
        // line 83
        $this->displayBlock('kit_grid_paginator', $context, $blocks);
        // line 87
        echo "        ";
        $this->displayBlock(" kit_grid_after_paginator", $context, $blocks);
        echo "
    </div>
    ";
        // line 89
        $this->displayBlock('kit_grid_javascript', $context, $blocks);
    }

    // line 3
    public function block_kit_grid_selector($context, array $blocks = array())
    {
        // line 4
        echo "            ";
        if (($this->getAttribute($this->getAttribute((isset($context["grid"]) ? $context["grid"] : $this->getContext($context, "grid")), "gridConfig", array()), "selectorList", array()) != null)) {
            // line 5
            echo "                <div class=\"kit-grid-selector\">
                    <ul class=\"nav nav-pills\">
                    ";
            // line 7
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["grid"]) ? $context["grid"] : $this->getContext($context, "grid")), "gridConfig", array()), "selectorList", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["selector"]) {
                // line 8
                echo "                        <li class=\"";
                if ($this->getAttribute((isset($context["grid"]) ? $context["grid"] : $this->getContext($context, "grid")), "isSelectorSelected", array(0 => $this->getAttribute($context["selector"], "field", array()), 1 => $this->getAttribute($context["selector"], "value", array())), "method")) {
                    echo "active";
                }
                echo "\">
                            <a href=\"";
                // line 9
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["grid"]) ? $context["grid"] : $this->getContext($context, "grid")), "getSelectorUrl", array(0 => $this->getAttribute($context["selector"], "field", array()), 1 => $this->getAttribute($context["selector"], "value", array())), "method"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["selector"], "label", array()), "html", null, true);
                echo "</a>
                        </li>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['selector'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 12
            echo "                    </ul>
                </div>
            ";
        }
        // line 15
        echo "        ";
    }

    // line 16
    public function block_kit_grid_filter($context, array $blocks = array())
    {
        // line 17
        echo "            <div class=\"kit-grid-filter\">
                <form class=\"form-inline\" action=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["grid"]) ? $context["grid"] : $this->getContext($context, "grid")), "requestUri", array()), "html", null, true);
        echo "\" id=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["grid"]) ? $context["grid"] : $this->getContext($context, "grid")), "filterFormName", array()), "html", null, true);
        echo "_form\" method=\"GET\">
                    <div class=\"form-group\">
                        <div class=\"input-group\">
                            <label class=\"sr-only\" for=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["grid"]) ? $context["grid"] : $this->getContext($context, "grid")), "filterFormName", array()), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("kitpages_data_grid.Filter"), "html", null, true);
        echo "</label>
                            <input type=\"text\" class=\"form-control\" id=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["grid"]) ? $context["grid"] : $this->getContext($context, "grid")), "filterFormName", array()), "html", null, true);
        echo "\" value=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["grid"]) ? $context["grid"] : $this->getContext($context, "grid")), "filterValue", array()), "html", null, true);
        echo "\" name=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["grid"]) ? $context["grid"] : $this->getContext($context, "grid")), "filterFormName", array()), "html", null, true);
        echo "\" placeholder=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("kitpages_data_grid.Filter"), "html", null, true);
        echo "\">
                        </div>
                    </div>
                    <button type=\"submit\" class=\"btn btn-default\">";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("kitpages_data_grid.Apply"), "html", null, true);
        echo "</button>
                    <a href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath($this->getAttribute((isset($context["grid"]) ? $context["grid"] : $this->getContext($context, "grid")), "requestCurrentRoute", array()), $this->getAttribute((isset($context["grid"]) ? $context["grid"] : $this->getContext($context, "grid")), "requestCurrentRouteParams", array())), "html", null, true);
        echo "\" id=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["grid"]) ? $context["grid"] : $this->getContext($context, "grid")), "filterFormName", array()), "html", null, true);
        echo "_reset_button\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("kitpages_data_grid.Reset"), "html", null, true);
        echo "</a>
                </form>
            </div>
        ";
    }

    // line 30
    public function block_kit_grid_debug($context, array $blocks = array())
    {
        // line 31
        echo "            ";
        if ($this->getAttribute((isset($context["grid"]) ? $context["grid"] : $this->getContext($context, "grid")), "debugMode", array())) {
            // line 32
            echo "                ";
            echo $this->getAttribute((isset($context["grid"]) ? $context["grid"] : $this->getContext($context, "grid")), "dump", array(), "method");
            echo "
            ";
        }
        // line 34
        echo "        ";
    }

    // line 37
    public function block_kit_grid_thead($context, array $blocks = array())
    {
        // line 38
        echo "                <thead>
                <tr>
                    ";
        // line 40
        $this->displayBlock("kit_grid_thead_before_column", $context, $blocks);
        echo "
                    ";
        // line 41
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["grid"]) ? $context["grid"] : $this->getContext($context, "grid")), "gridConfig", array()), "fieldList", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
            // line 42
            echo "                        ";
            if ($this->getAttribute($context["field"], "visible", array())) {
                // line 43
                echo "                            <th class=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["grid"]) ? $context["grid"] : $this->getContext($context, "grid")), "getSortCssClass", array(0 => $this->getAttribute($context["field"], "fieldName", array())), "method"), "html", null, true);
                echo "\">
                                ";
                // line 44
                if ($this->getAttribute($context["field"], "sortable", array())) {
                    // line 45
                    echo "                                    <a href=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["grid"]) ? $context["grid"] : $this->getContext($context, "grid")), "getSortUrl", array(0 => $this->getAttribute($context["field"], "fieldName", array())), "method"), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute($context["field"], "label", array())), "html", null, true);
                    echo "</a>
                                ";
                } else {
                    // line 47
                    echo "                                    ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute($context["field"], "label", array())), "html", null, true);
                    echo "
                                ";
                }
                // line 49
                echo "                            </th>
                        ";
            }
            // line 51
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 52
        echo "                    ";
        $this->displayBlock("kit_grid_thead_column", $context, $blocks);
        echo "
                </tr>
                </thead>
            ";
    }

    // line 56
    public function block_kit_grid_tbody($context, array $blocks = array())
    {
        // line 57
        echo "                <tbody>
                ";
        // line 58
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["grid"]) ? $context["grid"] : $this->getContext($context, "grid")), "itemList", array()));
        $context['_iterated'] = false;
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
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 59
            echo "                    <tr class=\"";
            if ((($this->getAttribute($context["loop"], "index", array()) % 2) == 0)) {
                echo "kit-grid-even ";
            } else {
                echo "kit-grid-odd ";
            }
            echo " ";
            $this->displayBlock('kit_grid_row_class', $context, $blocks);
            echo "\">
                        ";
            // line 60
            $this->displayBlock('kit_grid_tbody_before_column', $context, $blocks);
            // line 61
            echo "                        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["grid"]) ? $context["grid"] : $this->getContext($context, "grid")), "gridConfig", array()), "fieldList", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
                // line 62
                echo "                            ";
                if ($this->getAttribute($context["field"], "visible", array())) {
                    // line 63
                    echo "                                <td class=\"kit-grid-cell-";
                    echo twig_escape_filter($this->env, twig_replace_filter($this->getAttribute($context["field"], "fieldName", array()), array("." => "-")), "html", null, true);
                    echo "\">
                                    ";
                    // line 64
                    if ($this->getAttribute($context["field"], "translatable", array())) {
                        // line 65
                        echo "                                        ";
                        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["grid"]) ? $context["grid"] : $this->getContext($context, "grid")), "displayGridValue", array(0 => $context["item"], 1 => $context["field"]), "method")), "html", null, true);
                        echo "
                                    ";
                    } else {
                        // line 67
                        echo "                                        ";
                        echo $this->getAttribute((isset($context["grid"]) ? $context["grid"] : $this->getContext($context, "grid")), "displayGridValue", array(0 => $context["item"], 1 => $context["field"]), "method");
                        echo "
                                    ";
                    }
                    // line 69
                    echo "                                </td>
                            ";
                }
                // line 71
                echo "                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 72
            echo "                        ";
            $this->displayBlock("kit_grid_tbody_column", $context, $blocks);
            echo "
                    </tr>
                ";
            $context['_iterated'] = true;
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        if (!$context['_iterated']) {
            // line 75
            echo "                    <tr>
                        <td colspan=\"";
            // line 76
            echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["grid"]) ? $context["grid"] : $this->getContext($context, "grid")), "gridConfig", array()), "fieldList", array())), "html", null, true);
            echo "\" class=\"kit-grid-no-data\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("kitpages_data_grid.No-data-found"), "html", null, true);
            echo "</td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 79
        echo "                </tbody>
            ";
    }

    // line 59
    public function block_kit_grid_row_class($context, array $blocks = array())
    {
    }

    // line 60
    public function block_kit_grid_tbody_before_column($context, array $blocks = array())
    {
    }

    // line 83
    public function block_kit_grid_paginator($context, array $blocks = array())
    {
        // line 84
        echo "            ";
        $this->loadTemplate("KitpagesDataGridBundle:Grid:bootstrap3-grid.html.twig", "KitpagesDataGridBundle:Grid:bootstrap3-grid.html.twig", 84, "1490236755")->display(array_merge($context, array("paginator" => $this->getAttribute((isset($context["grid"]) ? $context["grid"] : $this->getContext($context, "grid")), "paginator", array()))));
        // line 86
        echo "        ";
    }

    // line 89
    public function block_kit_grid_javascript($context, array $blocks = array())
    {
        // line 90
        echo "        ";
        $this->loadTemplate("KitpagesDataGridBundle:Grid:javascript.html.twig", "KitpagesDataGridBundle:Grid:bootstrap3-grid.html.twig", 90)->display($context);
        // line 91
        echo "    ";
    }

    public function getTemplateName()
    {
        return "KitpagesDataGridBundle:Grid:bootstrap3-grid.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  377 => 91,  374 => 90,  371 => 89,  367 => 86,  364 => 84,  361 => 83,  356 => 60,  351 => 59,  346 => 79,  335 => 76,  332 => 75,  315 => 72,  309 => 71,  305 => 69,  299 => 67,  293 => 65,  291 => 64,  286 => 63,  283 => 62,  278 => 61,  276 => 60,  265 => 59,  247 => 58,  244 => 57,  241 => 56,  232 => 52,  226 => 51,  222 => 49,  216 => 47,  208 => 45,  206 => 44,  201 => 43,  198 => 42,  194 => 41,  190 => 40,  186 => 38,  183 => 37,  179 => 34,  173 => 32,  170 => 31,  167 => 30,  155 => 26,  151 => 25,  139 => 22,  133 => 21,  125 => 18,  122 => 17,  119 => 16,  115 => 15,  110 => 12,  99 => 9,  92 => 8,  88 => 7,  84 => 5,  81 => 4,  78 => 3,  74 => 89,  68 => 87,  66 => 83,  62 => 82,  59 => 81,  56 => 56,  54 => 37,  48 => 35,  45 => 30,  42 => 16,  40 => 3,  35 => 2,  29 => 1,);
    }
}


/* KitpagesDataGridBundle:Grid:bootstrap3-grid.html.twig */
class __TwigTemplate_c8531d3cf040fdac3acae9e1f2ac7a4e8743906f34257ceec98e92a4058f798f_1490236755 extends Twig_Template
{
    protected function doGetParent(array $context)
    {
        // line 84
        return $this->loadTemplate($this->getAttribute($this->getAttribute((isset($context["kitpages_data_grid"]) ? $context["kitpages_data_grid"] : $this->getContext($context, "kitpages_data_grid")), "paginator", array()), "default_twig", array()), "KitpagesDataGridBundle:Grid:bootstrap3-grid.html.twig", 84);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    public function getTemplateName()
    {
        return "KitpagesDataGridBundle:Grid:bootstrap3-grid.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  398 => 84,  377 => 91,  374 => 90,  371 => 89,  367 => 86,  364 => 84,  361 => 83,  356 => 60,  351 => 59,  346 => 79,  335 => 76,  332 => 75,  315 => 72,  309 => 71,  305 => 69,  299 => 67,  293 => 65,  291 => 64,  286 => 63,  283 => 62,  278 => 61,  276 => 60,  265 => 59,  247 => 58,  244 => 57,  241 => 56,  232 => 52,  226 => 51,  222 => 49,  216 => 47,  208 => 45,  206 => 44,  201 => 43,  198 => 42,  194 => 41,  190 => 40,  186 => 38,  183 => 37,  179 => 34,  173 => 32,  170 => 31,  167 => 30,  155 => 26,  151 => 25,  139 => 22,  133 => 21,  125 => 18,  122 => 17,  119 => 16,  115 => 15,  110 => 12,  99 => 9,  92 => 8,  88 => 7,  84 => 5,  81 => 4,  78 => 3,  74 => 89,  68 => 87,  66 => 83,  62 => 82,  59 => 81,  56 => 56,  54 => 37,  48 => 35,  45 => 30,  42 => 16,  40 => 3,  35 => 2,  29 => 1,);
    }
}
/* {% block kit_grid_main %}*/
/*     <div class="kit-grid {{ grid.getGridCssName }}">*/
/*         {% block kit_grid_selector %}*/
/*             {% if grid.gridConfig.selectorList != null %}*/
/*                 <div class="kit-grid-selector">*/
/*                     <ul class="nav nav-pills">*/
/*                     {% for selector in grid.gridConfig.selectorList %}*/
/*                         <li class="{% if grid.isSelectorSelected(selector.field, selector.value) %}active{% endif %}">*/
/*                             <a href="{{ grid.getSelectorUrl(selector.field, selector.value) }}">{{ selector.label }}</a>*/
/*                         </li>*/
/*                     {% endfor %}*/
/*                     </ul>*/
/*                 </div>*/
/*             {% endif %}*/
/*         {% endblock %}*/
/*         {% block kit_grid_filter %}*/
/*             <div class="kit-grid-filter">*/
/*                 <form class="form-inline" action="{{ grid.requestUri }}" id="{{grid.filterFormName}}_form" method="GET">*/
/*                     <div class="form-group">*/
/*                         <div class="input-group">*/
/*                             <label class="sr-only" for="{{grid.filterFormName}}">{{ "kitpages_data_grid.Filter" | trans }}</label>*/
/*                             <input type="text" class="form-control" id="{{grid.filterFormName}}" value="{{ grid.filterValue }}" name="{{grid.filterFormName}}" placeholder="{{ "kitpages_data_grid.Filter" | trans }}">*/
/*                         </div>*/
/*                     </div>*/
/*                     <button type="submit" class="btn btn-default">{{ "kitpages_data_grid.Apply" | trans }}</button>*/
/*                     <a href="{{ path( grid.requestCurrentRoute, grid.requestCurrentRouteParams ) }}" id="{{grid.filterFormName}}_reset_button">{{ "kitpages_data_grid.Reset" | trans }}</a>*/
/*                 </form>*/
/*             </div>*/
/*         {% endblock %}*/
/*         {% block kit_grid_debug %}*/
/*             {% if grid.debugMode %}*/
/*                 {{ grid.dump() | raw }}*/
/*             {% endif %}*/
/*         {% endblock %}*/
/*         {{ block('kit_grid_before_table') }}*/
/*         <table class="table table-striped table-bordered table-hover">*/
/*             {% block kit_grid_thead %}*/
/*                 <thead>*/
/*                 <tr>*/
/*                     {{ block('kit_grid_thead_before_column') }}*/
/*                     {% for field in grid.gridConfig.fieldList %}*/
/*                         {% if field.visible %}*/
/*                             <th class="{{ grid.getSortCssClass(field.fieldName) }}">*/
/*                                 {% if field.sortable %}*/
/*                                     <a href="{{ grid.getSortUrl(field.fieldName) }}">{{ field.label | trans }}</a>*/
/*                                 {% else %}*/
/*                                     {{ field.label | trans }}*/
/*                                 {% endif %}*/
/*                             </th>*/
/*                         {% endif %}*/
/*                     {% endfor %}*/
/*                     {{ block('kit_grid_thead_column') }}*/
/*                 </tr>*/
/*                 </thead>*/
/*             {% endblock %}*/
/*             {% block kit_grid_tbody %}*/
/*                 <tbody>*/
/*                 {% for item in grid.itemList %}*/
/*                     <tr class="{% if loop.index % 2 == 0 %}kit-grid-even {% else %}kit-grid-odd {% endif %} {% block kit_grid_row_class %}{% endblock %}">*/
/*                         {% block kit_grid_tbody_before_column %}{%endblock%}*/
/*                         {% for field in grid.gridConfig.fieldList %}*/
/*                             {% if field.visible %}*/
/*                                 <td class="kit-grid-cell-{{ field.fieldName | replace({'.': '-'}) }}">*/
/*                                     {% if field.translatable %}*/
/*                                         {{ grid.displayGridValue ( item, field) | raw | trans }}*/
/*                                     {% else %}*/
/*                                         {{ grid.displayGridValue ( item, field) | raw }}*/
/*                                     {% endif %}*/
/*                                 </td>*/
/*                             {% endif %}*/
/*                         {% endfor %}*/
/*                         {{ block('kit_grid_tbody_column') }}*/
/*                     </tr>*/
/*                 {% else %}*/
/*                     <tr>*/
/*                         <td colspan="{{ grid.gridConfig.fieldList | length }}" class="kit-grid-no-data">{{ "kitpages_data_grid.No-data-found" | trans }}</td>*/
/*                     </tr>*/
/*                 {% endfor %}*/
/*                 </tbody>*/
/*             {% endblock %}*/
/*         </table>*/
/*         {{ block('kit_grid_after_table') }}*/
/*         {% block kit_grid_paginator %}*/
/*             {% embed kitpages_data_grid.paginator.default_twig with {'paginator':grid.paginator} %}*/
/*             {% endembed %}*/
/*         {% endblock %}*/
/*         {{ block(' kit_grid_after_paginator') }}*/
/*     </div>*/
/*     {% block kit_grid_javascript %}*/
/*         {% include "KitpagesDataGridBundle:Grid:javascript.html.twig" %}*/
/*     {% endblock kit_grid_javascript %}*/
/* {% endblock kit_grid_main %}*/
/* */
