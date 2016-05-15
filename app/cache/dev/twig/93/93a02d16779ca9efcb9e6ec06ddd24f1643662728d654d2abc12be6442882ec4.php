<?php

/* KitpagesDataGridBundle:Grid:javascript_content.html.twig */
class __TwigTemplate_ec1062305da16357f8c0fb535fed67c5f10f04c1f951e71b049e8adcf848de18 extends Twig_Template
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
        echo "    (function(\$) {
        \"use strict\";

        var insertParamInQueryString = function (key, value) {
            key = encodeURIComponent(key);
            value = encodeURIComponent(value);

            var query = document.location.search.substr(1),
                kvp = query.length > 0 ? query.split('&') : [],
                i = kvp.length,
                x;

            while(i--) {
                x = kvp[i].split('=');
                if (x[0] == key) {
                    x[1] = value;
                    kvp[i] = x.join('=');
                    break;
                }
            }

            if(i < 0) {
                kvp[kvp.length] = [key, value].join('=');
            }

            //this will reload the page, it's likely better to store this until finished
            document.location.search = kvp.join('&');
        };

        \$('#";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["grid"]) ? $context["grid"] : $this->getContext($context, "grid")), "filterFormName", array()), "html", null, true);
        echo "_form').submit(function(e) {
            e.preventDefault();
            var value = \$('#";
        // line 32
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["grid"]) ? $context["grid"] : $this->getContext($context, "grid")), "filterFormName", array()), "html", null, true);
        echo "').val();
            insertParamInQueryString('";
        // line 33
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["grid"]) ? $context["grid"] : $this->getContext($context, "grid")), "filterFormName", array()), "html", null, true);
        echo "', value);
        });
    })(jQuery);
";
    }

    public function getTemplateName()
    {
        return "KitpagesDataGridBundle:Grid:javascript_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 33,  55 => 32,  50 => 30,  19 => 1,);
    }
}
/*     (function($) {*/
/*         "use strict";*/
/* */
/*         var insertParamInQueryString = function (key, value) {*/
/*             key = encodeURIComponent(key);*/
/*             value = encodeURIComponent(value);*/
/* */
/*             var query = document.location.search.substr(1),*/
/*                 kvp = query.length > 0 ? query.split('&') : [],*/
/*                 i = kvp.length,*/
/*                 x;*/
/* */
/*             while(i--) {*/
/*                 x = kvp[i].split('=');*/
/*                 if (x[0] == key) {*/
/*                     x[1] = value;*/
/*                     kvp[i] = x.join('=');*/
/*                     break;*/
/*                 }*/
/*             }*/
/* */
/*             if(i < 0) {*/
/*                 kvp[kvp.length] = [key, value].join('=');*/
/*             }*/
/* */
/*             //this will reload the page, it's likely better to store this until finished*/
/*             document.location.search = kvp.join('&');*/
/*         };*/
/* */
/*         $('#{{grid.filterFormName}}_form').submit(function(e) {*/
/*             e.preventDefault();*/
/*             var value = $('#{{grid.filterFormName}}').val();*/
/*             insertParamInQueryString('{{grid.filterFormName}}', value);*/
/*         });*/
/*     })(jQuery);*/
/* */
