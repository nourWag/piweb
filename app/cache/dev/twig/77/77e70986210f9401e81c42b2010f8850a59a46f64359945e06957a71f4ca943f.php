<?php

/* MyappResponsableBundle:imagenour:list.html.twig */
class __TwigTemplate_8584df0807256035db41b270f9de8a4eaf02b9cb620643422d2e299741d0f8d8 extends Twig_Template
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
        echo "<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/starrating/css/rating.css"), "html", null, true);
        echo "\" />
 <script src=\"//ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js\"></script>
    ";
        // line 3
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "8bb605b_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_8bb605b_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/8bb605b_rating_1.js");
            // line 5
            echo "      <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
        } else {
            // asset "8bb605b"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_8bb605b") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/8bb605b.js");
            echo "      <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
        }
        unset($context["asset_url"]);
        // line 7
        echo "    ";
        echo $this->env->getExtension('star_rating_extension')->rating(2);
        echo "

<table border=\"2\">
    <tr>
        <th> Id </th>
        <th> Title</th>
        <th> Show picture </th>
</tr>
    ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["images"]) ? $context["images"] : $this->getContext($context, "images")));
        foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
            // line 16
            echo "    <tr>
        <th>";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute($context["image"], "id", array()), "html", null, true);
            echo "</th>
        <th><img src=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->env->getExtension('routing')->getPath("my_image_route2", array("id" => $this->getAttribute($context["image"], "id", array())))), "html", null, true);
            echo "\"/></th>
        <th>
           <a href=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("my_app_esprit_aff_img", array("id" => $this->getAttribute($context["image"], "id", array()))), "html", null, true);
            echo "\">
                  Show picture
</a> </th>
</tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "</table>
 ";
    }

    public function getTemplateName()
    {
        return "MyappResponsableBundle:imagenour:list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 25,  71 => 20,  66 => 18,  62 => 17,  59 => 16,  55 => 15,  43 => 7,  29 => 5,  25 => 3,  19 => 1,);
    }
}
/* <link rel="stylesheet" type="text/css" href="{{ asset('bundles/starrating/css/rating.css') }}" />*/
/*  <script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>*/
/*     {% javascripts*/
/*       '@StarRatingBundle/Resources/public/js/rating.js' %}*/
/*       <script src="{{ asset_url }}"></script>*/
/*     {% endjavascripts %}*/
/*     {{ 2|rating }}*/
/* */
/* <table border="2">*/
/*     <tr>*/
/*         <th> Id </th>*/
/*         <th> Title</th>*/
/*         <th> Show picture </th>*/
/* </tr>*/
/*     {% for image in images %}*/
/*     <tr>*/
/*         <th>{{image.id}}</th>*/
/*         <th><img src="{{ asset(path('my_image_route2', {'id': image.id})) }}"/></th>*/
/*         <th>*/
/*            <a href="{{path("my_app_esprit_aff_img", {'id':image.id })}}">*/
/*                   Show picture*/
/* </a> </th>*/
/* </tr>*/
/*     {% endfor %}*/
/* </table>*/
/*  */
