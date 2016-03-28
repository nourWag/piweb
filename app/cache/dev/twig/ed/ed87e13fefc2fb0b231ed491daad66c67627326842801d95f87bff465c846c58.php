<?php

/* MyappResponsableBundle:View1nour:afficherdetailleProduit.html.twig */
class __TwigTemplate_ebf5a33f4addda8a8b1a980f1927717f21bce883c3abb57231e30b564c170f31 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("MyappResponsableBundle::layout.html.twig", "MyappResponsableBundle:View1nour:afficherdetailleProduit.html.twig", 1);
        $this->blocks = array(
            'produitDetaille' => array($this, 'block_produitDetaille'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "MyappResponsableBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_produitDetaille($context, array $blocks = array())
    {
        // line 3
        echo "<script type=\"text/javascript\">
\tjQuery(document).ready(function(){
\t\tif (\$('body').width() > 990) { 
\t\t\t\$('.nav__primary').tmStickUp({correctionSelector: \$('#menu_stick')});
\t\t};
\t});
</script>


<p id=\"back-top\"> <a href=\"#top\"><span></span></a> </p><div class=\"container\">
\t<ul class=\"breadcrumb\">
\t\t\t\t\t<li><a href=\"";
        // line 14
        echo $this->env->getExtension('routing')->getPath("pi2tst_homepage1");
        echo "\"><i class=\"fa fa-home\"></i></a></li>
\t\t\t\t\t<li><a href=\"";
        // line 15
        echo $this->env->getExtension('routing')->getPath("afficher_produits");
        echo "\">liste produit </a></li>
\t\t\t\t\t<li><a href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("afficherdetailleProduit", array("id" => $this->getAttribute((isset($context["modele"]) ? $context["modele"] : $this->getContext($context, "modele")), "id", array()))), "html", null, true);
        echo "\">Aenean viverra</a></li>
\t\t\t</ul>

\t<div class=\"row\">
\t
\t
\t<div id=\"content\" class=\"col-sm-12 product_page\">\t\t<div class=\"row product-content-columns\">
\t\t\t
\t\t\t<!-- Content left -->
\t\t\t<div class=\"col-sm-5 col-lg-7 product_page-left\">\t\t\t\t
\t\t\t\t<!-- product image -->
\t\t\t\t<div id=\"default_gallery\" class=\"product-gallery\">
\t\t\t\t\t\t\t\t
                                   \t
                                    <div class=\"image-thumb\"> 
                                         ";
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["images"]) ? $context["images"] : $this->getContext($context, "images")));
        foreach ($context['_seq'] as $context["_key"] => $context["m"]) {
            // line 32
            echo "\t\t\t\t\t<ul id=\"image-additional\"> 
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" data-image=\"";
            // line 35
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->env->getExtension('routing')->getPath("my_image_route2", array("id" => $this->getAttribute($context["m"], "id", array())))), "html", null, true);
            echo "\" data-zoom-image=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->env->getExtension('routing')->getPath("my_image_route2", array("id" => $this->getAttribute($context["m"], "id", array())))), "html", null, true);
            echo "\"> <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->env->getExtension('routing')->getPath("my_image_route2", array("id" => $this->getAttribute($context["m"], "id", array())))), "html", null, true);
            echo "\" alt=\"\" /> </a>
\t\t\t\t\t\t</li>
                                                                        
                                                                       
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</ul>
                                                          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['m'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo "             \t
\t\t\t\t\t\t\t</div>
                                                                         
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"image\">
\t\t\t\t\t\t\t \t\t<img id=\"gallery_zoom\" src=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->env->getExtension('routing')->getPath("my_image_route", array("id" => $this->getAttribute((isset($context["modele"]) ? $context["modele"] : $this->getContext($context, "modele")), "id", array())))), "html", null, true);
        echo "\" data-zoom-image=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->env->getExtension('routing')->getPath("my_image_route", array("id" => $this->getAttribute((isset($context["modele"]) ? $context["modele"] : $this->getContext($context, "modele")), "id", array())))), "html", null, true);
        echo "\" alt=\"\" /> 
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t
\t\t\t\t
\t\t
\t\t\t\t\t\t\t\t<script type=\"text/javascript\">
\t\t\t\t\tjQuery(document).ready(function(){
\t\t\t\t\tvar myPhotoSwipe = \$(\"#gallery a\").photoSwipe({ enableMouseWheel: false , enableKeyboard: false, captionAndToolbarAutoHideDelay:0 });
\t\t\t\t\t});
\t\t\t\t</script>
\t\t\t\t<div id=\"full_gallery\">
\t\t\t\t\t<ul id=\"gallery\">
\t\t\t\t\t\t<li><a href=\"http://localhost:8000/template_52891_cw21kXN65RYum715QAIo/theme509/theme509((full))/image/cache/catalog/product-46-643x1000.png\" data-something=\"something\" data-another-thing=\"anotherthing\"><img src=\"http://localhost:8000/template_52891_cw21kXN65RYum715QAIo/theme509/theme509((full))/image/cache/catalog/product-46-643x1000.png\" title=\"Aenean viverra\" alt=\"Aenean viverra\" /></a></li>\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"http://localhost:8000/template_52891_cw21kXN65RYum715QAIo/theme509/theme509((full))/image/cache/catalog/product-46-643x1000.png\" data-something=\"something1\" data-another-thing=\"anotherthing1\"><img src=\"http://localhost:8000/template_52891_cw21kXN65RYum715QAIo/theme509/theme509((full))/image/cache/catalog/product-46-643x1000.png\" alt=\"Aenean viverra\" /></a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"http://localhost:8000/template_52891_cw21kXN65RYum715QAIo/theme509/theme509((full))/image/cache/catalog/product-48-643x1000.png\" data-something=\"something1\" data-another-thing=\"anotherthing1\"><img src=\"http://localhost:8000/template_52891_cw21kXN65RYum715QAIo/theme509/theme509((full))/image/cache/catalog/product-48-643x1000.png\" alt=\"Aenean viverra\" /></a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"http://localhost:8000/template_52891_cw21kXN65RYum715QAIo/theme509/theme509((full))/image/cache/catalog/product-47-643x1000.png\" data-something=\"something1\" data-another-thing=\"anotherthing1\"><img src=\"http://localhost:8000/template_52891_cw21kXN65RYum715QAIo/theme509/theme509((full))/image/cache/catalog/product-47-643x1000.png\" alt=\"Aenean viverra\" /></a></li>
\t\t\t\t\t\t\t\t\t\t\t\t</ul>\t\t\t
\t\t\t\t</div>
\t\t\t\t\t\t\t\t
\t\t\t</div>

\t\t\t<!-- Content right -->
\t\t\t<div class=\"col-sm-7 col-lg-5 product_page-right\">
\t\t\t\t<div class=\"general_info product-info\">

\t\t\t\t\t<h1 class=\"product-title\">";
        // line 70
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["modele"]) ? $context["modele"] : $this->getContext($context, "modele")), "designation", array()), "html", null, true);
        echo "</h1>
\t\t\t\t\t
\t\t\t\t\t<!-- Prodyuct rating status -->
<div class=\"rating-section product-rating-status\">
<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 74
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/starrating/css/rating.css"), "html", null, true);
        echo "\" />

    ";
        // line 76
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "8bb605b_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_8bb605b_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/8bb605b_rating_1.js");
            // line 78
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
        // line 80
        echo "    
\t<div class=\"rating\">
            ";
        // line 82
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "note", array()), 'widget');
        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t</div>
</div>

<div class=\"price-section\">
\t\t<span\tclass=\"price-new\"></span>
\t\t\t<span\tclass=\"price-new\">\$";
        // line 89
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["modele"]) ? $context["modele"] : $this->getContext($context, "modele")), "prixvente", array()), "html", null, true);
        echo " </span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"reward-block\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t\t<ul class=\"list-unstyled product-section\">
\t\t\t\t\t\t\t<li>Marque: <a href=\"";
        // line 95
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("pi2tst_homepage1", array("id" => $this->getAttribute((isset($context["modele"]) ? $context["modele"] : $this->getContext($context, "modele")), "marque", array()))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["modele"]) ? $context["modele"] : $this->getContext($context, "modele")), "marque", array()), "html", null, true);
        echo "</a></li>
\t\t\t\t\t\t\t<li>Code de produit: <span>";
        // line 96
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["modele"]) ? $context["modele"] : $this->getContext($context, "modele")), "reference", array()), "html", null, true);
        echo "8</span></li>
\t\t\t\t\t\t\t<li>disponible : <span>";
        // line 97
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["modele"]) ? $context["modele"] : $this->getContext($context, "modele")), "disponible", array()), "html", null, true);
        echo "</span></li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t\t
                                        
                                        
                                        
                                        
                                        
                                        
                                        
                                        
                                        
                                        
                                        
                                        
                                        
                                        
                                        
                                        
\t\t\t\t<div id=\"product\">

\t\t\t\t\t<!-- Product options -->
\t\t\t\t\t<div class=\"product-options form-horizontal\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<h3>Available Options</h3>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label class=\"control-label col-sm-4\">Color</label>
\t\t<div id=\"input-option230\" class=\"col-sm-8\">
\t\t\t\t\t\t\t<div class=\"radio\">
                                                         
                                                          ";
        // line 127
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "couleur", array()), 'widget');
        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</div>
\t\t</div>
                                                 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group required\">
          <div class=\"form-group required\">
              <label class=\"control-label col-sm-4\" for=\"input-option224\">Size</label>
\t\t<div  >
\t\t   ";
        // line 136
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "size", array()), 'widget');
        echo "
                   
\t\t\t\t\t\t\t\t\t\t</div>\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t
\t\t\t\t
\t\t\t\t\t<!-- Add to cart form -->
<div class=\"form-group form-horizontal\">
\t\t\t\t\t\t
<div class=\"form-group\">
<label class=\"control-label col-sm-4\" for=\"input-quantity\">Qty</label>
\t\t\t\t\t\t\t<div class=\"col-sm-2\">
\t\t\t\t\t\t\t\t<input type=\"text\" name=\"quantity\" value=\"1\" size=\"2\" id=\"input-quantity\" class=\"form-control\" />
\t\t\t\t\t\t\t</div>
\t\t\t\t\t      </div>
\t\t\t\t\t\t

                         <a href=\"";
        // line 155
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("afficher_produits", array("id" => $this->getAttribute((isset($context["modele"]) ? $context["modele"] : $this->getContext($context, "modele")), "id", array()))), "html", null, true);
        echo "\">
                             
                             <button type=\"button\" id=\"button-cart\" data-loading-text=\"Loading...\" class=\"btn btn-add\" >Add to Cart</button>
                         </a>
</div>

\t\t\t\t\t<a href=\"";
        // line 161
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("afficher_produits", array("id" => $this->getAttribute((isset($context["modele"]) ? $context["modele"] : $this->getContext($context, "modele")), "id", array()))), "html", null, true);
        echo "\"><ul class=\"product-buttons\">
\t\t\t\t\t\t<li><button class=\"btn btn-icon\" onclick=\"wishlist.add('35');\"><i class=\"fa fa-heart\"></i> <span class=\"hidden-xs hidden-sm\">Add to Wish List</span></button></li>
\t\t\t\t\t\t
\t\t\t\t\t</ul></a>\t\t\t\t\t

\t\t\t\t<div class=\"product-share\">
\t\t\t\t\t\t<!-- AddThis Button BEGIN -->
\t\t\t\t\t\t<div class=\"addthis_toolbox addthis_default_style\"><a class=\"addthis_button_facebook_like\" fb:like:layout=\"button_count\"></a> <a class=\"addthis_button_tweet\"></a> <a class=\"addthis_button_pinterest_pinit\"></a> <a class=\"addthis_counter addthis_pill_style\"></a></div>
\t\t\t\t\t\t<script type=\"text/javascript\" src=\"//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-515eeaf54693130e\"></script> 
\t\t\t\t\t<!-- AddThis Button END --> 
\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t</div>

\t\t\t</div>
\t\t</div>
                                                <div height=\"100px\" >social</div>
\t\t

\t\t

 ";
    }

    public function getTemplateName()
    {
        return "MyappResponsableBundle:View1nour:afficherdetailleProduit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  271 => 161,  262 => 155,  240 => 136,  228 => 127,  195 => 97,  191 => 96,  185 => 95,  176 => 89,  166 => 82,  162 => 80,  148 => 78,  144 => 76,  139 => 74,  132 => 70,  102 => 45,  96 => 41,  79 => 35,  74 => 32,  70 => 31,  52 => 16,  48 => 15,  44 => 14,  31 => 3,  28 => 2,  11 => 1,);
    }
}
/* {% extends "MyappResponsableBundle::layout.html.twig" %}*/
/* {% block produitDetaille %}*/
/* <script type="text/javascript">*/
/* 	jQuery(document).ready(function(){*/
/* 		if ($('body').width() > 990) { */
/* 			$('.nav__primary').tmStickUp({correctionSelector: $('#menu_stick')});*/
/* 		};*/
/* 	});*/
/* </script>*/
/* */
/* */
/* <p id="back-top"> <a href="#top"><span></span></a> </p><div class="container">*/
/* 	<ul class="breadcrumb">*/
/* 					<li><a href="{{ path('pi2tst_homepage1')}}"><i class="fa fa-home"></i></a></li>*/
/* 					<li><a href="{{ path('afficher_produits')}}">liste produit </a></li>*/
/* 					<li><a href="{{ path('afficherdetailleProduit', {'id': modele.id})}}">Aenean viverra</a></li>*/
/* 			</ul>*/
/* */
/* 	<div class="row">*/
/* 	*/
/* 	*/
/* 	<div id="content" class="col-sm-12 product_page">		<div class="row product-content-columns">*/
/* 			*/
/* 			<!-- Content left -->*/
/* 			<div class="col-sm-5 col-lg-7 product_page-left">				*/
/* 				<!-- product image -->*/
/* 				<div id="default_gallery" class="product-gallery">*/
/* 								*/
/*                                    	*/
/*                                     <div class="image-thumb"> */
/*                                          {% for m in images %}*/
/* 					<ul id="image-additional"> */
/* 								*/
/* 						<li>*/
/* 										<a href="#" data-image="{{ asset(path('my_image_route2', {'id': m.id})) }}" data-zoom-image="{{ asset(path('my_image_route2', {'id': m.id})) }}"> <img src="{{ asset(path('my_image_route2', {'id': m.id})) }}" alt="" /> </a>*/
/* 						</li>*/
/*                                                                         */
/*                                                                        */
/* 																	*/
/* 								</ul>*/
/*                                                           {% endfor %}             	*/
/* 							</div>*/
/*                                                                          */
/* 																						<div class="image">*/
/* 							 		<img id="gallery_zoom" src="{{ asset(path('my_image_route', {'id': modele.id})) }}" data-zoom-image="{{ asset(path('my_image_route', {'id': modele.id})) }}" alt="" /> */
/* 								</div>*/
/* 																</div>*/
/* 		*/
/* 				*/
/* 		*/
/* 								<script type="text/javascript">*/
/* 					jQuery(document).ready(function(){*/
/* 					var myPhotoSwipe = $("#gallery a").photoSwipe({ enableMouseWheel: false , enableKeyboard: false, captionAndToolbarAutoHideDelay:0 });*/
/* 					});*/
/* 				</script>*/
/* 				<div id="full_gallery">*/
/* 					<ul id="gallery">*/
/* 						<li><a href="http://localhost:8000/template_52891_cw21kXN65RYum715QAIo/theme509/theme509((full))/image/cache/catalog/product-46-643x1000.png" data-something="something" data-another-thing="anotherthing"><img src="http://localhost:8000/template_52891_cw21kXN65RYum715QAIo/theme509/theme509((full))/image/cache/catalog/product-46-643x1000.png" title="Aenean viverra" alt="Aenean viverra" /></a></li>												<li><a href="http://localhost:8000/template_52891_cw21kXN65RYum715QAIo/theme509/theme509((full))/image/cache/catalog/product-46-643x1000.png" data-something="something1" data-another-thing="anotherthing1"><img src="http://localhost:8000/template_52891_cw21kXN65RYum715QAIo/theme509/theme509((full))/image/cache/catalog/product-46-643x1000.png" alt="Aenean viverra" /></a></li>*/
/* 													<li><a href="http://localhost:8000/template_52891_cw21kXN65RYum715QAIo/theme509/theme509((full))/image/cache/catalog/product-48-643x1000.png" data-something="something1" data-another-thing="anotherthing1"><img src="http://localhost:8000/template_52891_cw21kXN65RYum715QAIo/theme509/theme509((full))/image/cache/catalog/product-48-643x1000.png" alt="Aenean viverra" /></a></li>*/
/* 													<li><a href="http://localhost:8000/template_52891_cw21kXN65RYum715QAIo/theme509/theme509((full))/image/cache/catalog/product-47-643x1000.png" data-something="something1" data-another-thing="anotherthing1"><img src="http://localhost:8000/template_52891_cw21kXN65RYum715QAIo/theme509/theme509((full))/image/cache/catalog/product-47-643x1000.png" alt="Aenean viverra" /></a></li>*/
/* 												</ul>			*/
/* 				</div>*/
/* 								*/
/* 			</div>*/
/* */
/* 			<!-- Content right -->*/
/* 			<div class="col-sm-7 col-lg-5 product_page-right">*/
/* 				<div class="general_info product-info">*/
/* */
/* 					<h1 class="product-title">{{ modele.designation }}</h1>*/
/* 					*/
/* 					<!-- Prodyuct rating status -->*/
/* <div class="rating-section product-rating-status">*/
/* <link rel="stylesheet" type="text/css" href="{{ asset('bundles/starrating/css/rating.css') }}" />*/
/* */
/*     {% javascripts*/
/*       '@StarRatingBundle/Resources/public/js/rating.js' %}*/
/*       <script src="{{ asset_url }}"></script>*/
/*     {% endjavascripts %}*/
/*     */
/* 	<div class="rating">*/
/*             {{ form_widget(f.note)}}*/
/* 																					*/
/* 	</div>*/
/* </div>*/
/* */
/* <div class="price-section">*/
/* 		<span	class="price-new"></span>*/
/* 			<span	class="price-new">${{ modele.prixvente }} </span>*/
/* 																		<div class="reward-block">*/
/* 																				</div>*/
/* 					</div>*/
/* 					*/
/* 					<ul class="list-unstyled product-section">*/
/* 							<li>Marque: <a href="{{ path('pi2tst_homepage1',{'id' : modele.marque})}}">{{ modele.marque }}</a></li>*/
/* 							<li>Code de produit: <span>{{ modele.reference }}8</span></li>*/
/* 							<li>disponible : <span>{{ modele.disponible }}</span></li>*/
/* 					</ul>*/
/* 				</div>*/
/* 				*/
/*                                         */
/*                                         */
/*                                         */
/*                                         */
/*                                         */
/*                                         */
/*                                         */
/*                                         */
/*                                         */
/*                                         */
/*                                         */
/*                                         */
/*                                         */
/*                                         */
/*                                         */
/*                                         */
/* 				<div id="product">*/
/* */
/* 					<!-- Product options -->*/
/* 					<div class="product-options form-horizontal">*/
/* 													<h3>Available Options</h3>*/
/* 																																<div class="form-group">*/
/* 					<label class="control-label col-sm-4">Color</label>*/
/* 		<div id="input-option230" class="col-sm-8">*/
/* 							<div class="radio">*/
/*                                                          */
/*                                                           {{ form_widget(f.couleur) }}*/
/* 													*/
/* 								</div>*/
/* 		</div>*/
/*                                                  */
/* 																																																																																																																<div class="form-group required">*/
/*           <div class="form-group required">*/
/*               <label class="control-label col-sm-4" for="input-option224">Size</label>*/
/* 		<div  >*/
/* 		   {{ form_widget(f.size) }}*/
/*                    */
/* 										</div>																								*/
/* 		</div>*/
/* 																																																																																																		</div>*/
/* */
/* 					*/
/* 				*/
/* 					<!-- Add to cart form -->*/
/* <div class="form-group form-horizontal">*/
/* 						*/
/* <div class="form-group">*/
/* <label class="control-label col-sm-4" for="input-quantity">Qty</label>*/
/* 							<div class="col-sm-2">*/
/* 								<input type="text" name="quantity" value="1" size="2" id="input-quantity" class="form-control" />*/
/* 							</div>*/
/* 					      </div>*/
/* 						*/
/* */
/*                          <a href="{{ path('afficher_produits', {'id': modele.id})}}">*/
/*                              */
/*                              <button type="button" id="button-cart" data-loading-text="Loading..." class="btn btn-add" >Add to Cart</button>*/
/*                          </a>*/
/* </div>*/
/* */
/* 					<a href="{{ path('afficher_produits', {'id': modele.id})}}"><ul class="product-buttons">*/
/* 						<li><button class="btn btn-icon" onclick="wishlist.add('35');"><i class="fa fa-heart"></i> <span class="hidden-xs hidden-sm">Add to Wish List</span></button></li>*/
/* 						*/
/* 					</ul></a>					*/
/* */
/* 				<div class="product-share">*/
/* 						<!-- AddThis Button BEGIN -->*/
/* 						<div class="addthis_toolbox addthis_default_style"><a class="addthis_button_facebook_like" fb:like:layout="button_count"></a> <a class="addthis_button_tweet"></a> <a class="addthis_button_pinterest_pinit"></a> <a class="addthis_counter addthis_pill_style"></a></div>*/
/* 						<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-515eeaf54693130e"></script> */
/* 					<!-- AddThis Button END --> */
/* 				</div>*/
/* */
/* 									</div>*/
/* */
/* 			</div>*/
/* 		</div>*/
/*                                                 <div height="100px" >social</div>*/
/* 		*/
/* */
/* 		*/
/* */
/*  {% endblock %}  */
