<?php

/* MyappResponsableBundle:View1nour:modiffierProduit.html.twig */
class __TwigTemplate_9a5daf951d34cc4acb876046910fff95498d072e33fd3f528e99b2a82d0e13ef extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("MyappResponsableBundle::layout.html.twig", "MyappResponsableBundle:View1nour:modiffierProduit.html.twig", 1);
        $this->blocks = array(
            'produitmodifier' => array($this, 'block_produitmodifier'),
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
    public function block_produitmodifier($context, array $blocks = array())
    {
        // line 3
        echo "
<script type=\"text/javascript\">
\tjQuery(document).ready(function(){
\t\tif (\$('body').width() > 990) { 
\t\t\t\$('.nav__primary').tmStickUp({correctionSelector: \$('#menu_stick')});
\t\t};
\t});
</script>
  
<form name=f1 method=\"post\" action=''> 
    

<p id=\"back-top\"> <a href=\"#top\"><span></span></a> </p>
<div class=\"container\"> 
\t<ul class=\"breadcrumb\">
\t\t\t\t\t<li><a href=\"";
        // line 18
        echo $this->env->getExtension('routing')->getPath("pi2tst_homepage1");
        echo "\"><i class=\"fa fa-home\"></i></a></li>
\t\t\t\t\t<li><a href=\"";
        // line 19
        echo $this->env->getExtension('routing')->getPath("afficher_produits");
        echo "\">liste produit </a></li>
\t\t\t\t\t<li><a href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("modifierProduit", array("id" => $this->getAttribute((isset($context["modele"]) ? $context["modele"] : $this->getContext($context, "modele")), "id", array()))), "html", null, true);
        echo "\">modifier produit : ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["modele"]) ? $context["modele"] : $this->getContext($context, "modele")), "marque", array()), "html", null, true);
        echo " </a></li>
\t\t\t</ul>

\t<div class=\"row\">
\t
\t
\t<div id=\"content\" class=\"col-sm-12 product_page\">
           <div class=\"row product-content-columns\">
\t\t\t
\t\t\t<!-- Content left -->
\t\t\t<div class=\"col-sm-5 col-lg-7 product_page-left\">\t\t\t\t
\t\t\t\t<!-- product image -->
\t\t<div id=\"default_gallery\" class=\"product-gallery\">
\t\t\t\t\t\t\t
                                   \t
                                    <div class=\"image-thumb\"> 
                                         ";
        // line 36
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["images"]) ? $context["images"] : $this->getContext($context, "images")));
        foreach ($context['_seq'] as $context["_key"] => $context["m"]) {
            echo "\t
\t\t\t\t\t<ul id=\"image-additional\"> 
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" data-image=\"";
            // line 40
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->env->getExtension('routing')->getPath("my_image_route2", array("id" => $this->getAttribute($context["m"], "id", array())))), "html", null, true);
            echo "\" data-zoom-image=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->env->getExtension('routing')->getPath("my_image_route2", array("id" => $this->getAttribute($context["m"], "id", array())))), "html", null, true);
            echo "\"> <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->env->getExtension('routing')->getPath("my_image_route2", array("id" => $this->getAttribute($context["m"], "id", array())))), "html", null, true);
            echo "\" alt=\"\" /> </a>
\t\t\t\t\t\t</li>
                                                                        
                                                                       
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</ul>
                                            <a href=\"";
            // line 46
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("my_app_esprit_upload", array("id" => $this->getAttribute($context["m"], "id", array()))), "html", null, true);
            echo "\">modifier image</a> 
                                                         ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['m'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo "            \t
\t\t\t\t\t\t\t</div>
                                                                                
                                                                         
\t\t\t\t\t\t<div class=\"image\">
\t\t\t\t\t\t\t \t\t<img id=\"gallery_zoom\" src=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->env->getExtension('routing')->getPath("my_image_route", array("id" => $this->getAttribute((isset($context["modele"]) ? $context["modele"] : $this->getContext($context, "modele")), "id", array())))), "html", null, true);
        echo "\" data-zoom-image=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->env->getExtension('routing')->getPath("my_image_route", array("id" => $this->getAttribute((isset($context["modele"]) ? $context["modele"] : $this->getContext($context, "modele")), "id", array())))), "html", null, true);
        echo "\" alt=\"\" /> 
                                                                                                                    
                                               
                                                
                                                </div>
                                   
                                                             <a href=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("uploadAjout", array("id" => $this->getAttribute((isset($context["modele"]) ? $context["modele"] : $this->getContext($context, "modele")), "id", array()))), "html", null, true);
        echo "\">ajouter produit image</a> 
                                                                          
                 
                </div>
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
 
                                    <h1 class=\"product-title\">";
        // line 84
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "designation", array()), 'widget');
        echo "</h1>
 
\t\t\t\t\t
\t\t\t\t\t<!-- Prodyuct rating status -->
<div class=\"rating-section product-rating-status\">
<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 89
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/starrating/css/rating.css"), "html", null, true);
        echo "\" />

    ";
        // line 91
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "8bb605b_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_8bb605b_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/8bb605b_rating_1.js");
            // line 93
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
        // line 95
        echo "     
         <div class=\"rating\">
            ";
        // line 97
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "note", array()), 'widget');
        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
             </div>


            </div>
            ";
        // line 103
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["modele"]) ? $context["modele"] : $this->getContext($context, "modele")), "NbreV", array()), "html", null, true);
        echo "
<div class=\"price-section\">
\t\t<span\tclass=\"price-new\"></span>
\t\t\t<span\tclass=\"price-new\">\$";
        // line 106
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "prixvente", array()), 'widget');
        echo " </span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"reward-block\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t\t<ul class=\"list-unstyled product-section\">
\t\t\t\t\t\t\t<li>Marque: <a href=\"";
        // line 112
        echo $this->env->getExtension('routing')->getPath("afficher_produits");
        echo "\">";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "marque", array()), 'widget');
        echo "</a></li>
\t\t\t\t\t\t\t<li>Code de produit: <span>";
        // line 113
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "reference", array()), 'widget');
        echo "</span></li>
\t\t\t\t\t\t\t<li>disponible : <span>";
        // line 114
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "disponible", array()), 'widget');
        echo "</span></li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t\t
                                        
                                        
                                        
                                        
                                        
                                        
                                        
                                        
                                        
                                        
                                        
                                        
                                        
                                        
                                        
                                        
\t\t\t\t<div id=\"product\">

\t\t\t\t\t<!-- Product options -->
\t\t\t\t\t<div class=\"product-options form-horizontal\">
\t\t\t\t\t\t<h3>Available Options</h3>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label class=\"control-label col-sm-4\">Color</label>
\t\t<div id=\"input-option230\" class=\"col-sm-8\">
\t\t\t\t\t\t\t<div class=\"radio\">
                                                         
                                                          ";
        // line 144
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
        // line 155
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "size", array()), 'widget');
        echo "
                   
\t\t\t\t\t\t\t\t\t\t</div>\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t</div>
 <div class=\"form-group required\">
              <label class=\"control-label col-sm-4\" for=\"input-option224\">description</label>
\t\t<div  >
                   
\t\t   ";
        // line 163
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "description", array()), 'widget');
        echo "
                   
\t\t\t\t\t\t\t\t\t\t</div>\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t</div>\t
                  
                   <div class=\"form-group required\">
              <label class=\"control-label col-sm-4\" for=\"input-option224\">Taille</label>
\t\t<div  >
                   
\t\t   ";
        // line 172
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "taille", array()), 'widget');
        echo "
                   
\t\t\t\t\t\t\t\t\t\t</div>\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t</div>\t
                   
                    <div class=\"form-group required\">
              <label class=\"control-label col-sm-4\" for=\"input-option224\">Etat</label>
\t\t<div  >
                   
\t\t   ";
        // line 181
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "etat", array()), 'widget');
        echo "
                   
\t\t\t\t\t\t\t\t\t\t</div>\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t</div>\t
                   
                   
                    <div class=\"form-group required\">
              <label class=\"control-label col-sm-4\" for=\"input-option224\">Quantite</label>
\t\t<div  >
                   
\t\t   ";
        // line 191
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "quantite", array()), 'widget');
        echo "
                   
\t\t\t\t\t\t\t\t\t\t</div>\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t</div>\t
                   
                   
                   
                     </div>

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

                        
                             ";
        // line 214
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), 'rest');
        echo "
    

                           
                         
</div>

\t\t\t\t\t<a href=\"";
        // line 221
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

                                                                                                                                                                                                      

\t\t\t</div>
\t\t</div>
                                                </div>
                                                </div>
                                                </div>
                                                </div>
                                                </div>
                                                </div>


                                                <div height=\"100px\" >social</div>
\t\t

\t</form>
                                                
                                            
 ";
    }

    public function getTemplateName()
    {
        return "MyappResponsableBundle:View1nour:modiffierProduit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  354 => 221,  344 => 214,  318 => 191,  305 => 181,  293 => 172,  281 => 163,  270 => 155,  256 => 144,  223 => 114,  219 => 113,  213 => 112,  204 => 106,  198 => 103,  189 => 97,  185 => 95,  171 => 93,  167 => 91,  162 => 89,  154 => 84,  125 => 58,  114 => 52,  107 => 47,  99 => 46,  86 => 40,  77 => 36,  56 => 20,  52 => 19,  48 => 18,  31 => 3,  28 => 2,  11 => 1,);
    }
}
/* {% extends "MyappResponsableBundle::layout.html.twig" %}*/
/* {% block produitmodifier %}*/
/* */
/* <script type="text/javascript">*/
/* 	jQuery(document).ready(function(){*/
/* 		if ($('body').width() > 990) { */
/* 			$('.nav__primary').tmStickUp({correctionSelector: $('#menu_stick')});*/
/* 		};*/
/* 	});*/
/* </script>*/
/*   */
/* <form name=f1 method="post" action=''> */
/*     */
/* */
/* <p id="back-top"> <a href="#top"><span></span></a> </p>*/
/* <div class="container"> */
/* 	<ul class="breadcrumb">*/
/* 					<li><a href="{{ path('pi2tst_homepage1')}}"><i class="fa fa-home"></i></a></li>*/
/* 					<li><a href="{{ path('afficher_produits')}}">liste produit </a></li>*/
/* 					<li><a href="{{ path('modifierProduit', {'id': modele.id})}}">modifier produit : {{ modele.marque }} </a></li>*/
/* 			</ul>*/
/* */
/* 	<div class="row">*/
/* 	*/
/* 	*/
/* 	<div id="content" class="col-sm-12 product_page">*/
/*            <div class="row product-content-columns">*/
/* 			*/
/* 			<!-- Content left -->*/
/* 			<div class="col-sm-5 col-lg-7 product_page-left">				*/
/* 				<!-- product image -->*/
/* 		<div id="default_gallery" class="product-gallery">*/
/* 							*/
/*                                    	*/
/*                                     <div class="image-thumb"> */
/*                                          {% for m in images %}	*/
/* 					<ul id="image-additional"> */
/* 								*/
/* 						<li>*/
/* 										<a href="#" data-image="{{ asset(path('my_image_route2', {'id': m.id})) }}" data-zoom-image="{{ asset(path('my_image_route2', {'id': m.id})) }}"> <img src="{{ asset(path('my_image_route2', {'id': m.id})) }}" alt="" /> </a>*/
/* 						</li>*/
/*                                                                         */
/*                                                                        */
/* 																	*/
/* 								</ul>*/
/*                                             <a href="{{path("my_app_esprit_upload", {'id':m.id })}}">modifier image</a> */
/*                                                          {%endfor %}            	*/
/* 							</div>*/
/*                                                                                 */
/*                                                                          */
/* 						<div class="image">*/
/* 							 		<img id="gallery_zoom" src="{{ asset(path('my_image_route', {'id': modele.id})) }}" data-zoom-image="{{ asset(path('my_image_route', {'id': modele.id})) }}" alt="" /> */
/*                                                                                                                     */
/*                                                */
/*                                                 */
/*                                                 </div>*/
/*                                    */
/*                                                              <a href="{{path("uploadAjout", {'id':modele.id })}}">ajouter produit image</a> */
/*                                                                           */
/*                  */
/*                 </div>*/
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
/*  */
/*                                     <h1 class="product-title">{{ form_widget(f.designation) }}</h1>*/
/*  */
/* 					*/
/* 					<!-- Prodyuct rating status -->*/
/* <div class="rating-section product-rating-status">*/
/* <link rel="stylesheet" type="text/css" href="{{ asset('bundles/starrating/css/rating.css') }}" />*/
/* */
/*     {% javascripts*/
/*       '@StarRatingBundle/Resources/public/js/rating.js' %}*/
/*       <script src="{{ asset_url }}"></script>*/
/*     {% endjavascripts %}*/
/*      */
/*          <div class="rating">*/
/*             {{ form_widget(f.note)}}*/
/* 																					*/
/*              </div>*/
/* */
/* */
/*             </div>*/
/*             {{ modele.NbreV }}*/
/* <div class="price-section">*/
/* 		<span	class="price-new"></span>*/
/* 			<span	class="price-new">${{ form_widget(f.prixvente) }} </span>*/
/* 																		<div class="reward-block">*/
/* 																				</div>*/
/* 					</div>*/
/* 					*/
/* 					<ul class="list-unstyled product-section">*/
/* 							<li>Marque: <a href="{{ path('afficher_produits')}}">{{ form_widget(f.marque) }}</a></li>*/
/* 							<li>Code de produit: <span>{{ form_widget(f.reference )}}</span></li>*/
/* 							<li>disponible : <span>{{ form_widget(f.disponible) }}</span></li>*/
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
/* 						<h3>Available Options</h3>*/
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
/*                                                  */
/* 																																																																																																																<div class="form-group required">*/
/*           <div class="form-group required">*/
/*               <label class="control-label col-sm-4" for="input-option224">Size</label>*/
/* 		<div  >*/
/*                    */
/* 		   {{ form_widget(f.size) }}*/
/*                    */
/* 										</div>																								*/
/* 		</div>*/
/*  <div class="form-group required">*/
/*               <label class="control-label col-sm-4" for="input-option224">description</label>*/
/* 		<div  >*/
/*                    */
/* 		   {{ form_widget(f.description) }}*/
/*                    */
/* 										</div>																								*/
/* 		</div>	*/
/*                   */
/*                    <div class="form-group required">*/
/*               <label class="control-label col-sm-4" for="input-option224">Taille</label>*/
/* 		<div  >*/
/*                    */
/* 		   {{ form_widget(f.taille) }}*/
/*                    */
/* 										</div>																								*/
/* 		</div>	*/
/*                    */
/*                     <div class="form-group required">*/
/*               <label class="control-label col-sm-4" for="input-option224">Etat</label>*/
/* 		<div  >*/
/*                    */
/* 		   {{ form_widget(f.etat) }}*/
/*                    */
/* 										</div>																								*/
/* 		</div>	*/
/*                    */
/*                    */
/*                     <div class="form-group required">*/
/*               <label class="control-label col-sm-4" for="input-option224">Quantite</label>*/
/* 		<div  >*/
/*                    */
/* 		   {{ form_widget(f.quantite) }}*/
/*                    */
/* 										</div>																								*/
/* 		</div>	*/
/*                    */
/*                    */
/*                    */
/*                      </div>*/
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
/*                         */
/*                              {{form_rest(f)}}*/
/*     */
/* */
/*                            */
/*                          */
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
/*                                                                                                                                                                                                       */
/* */
/* 			</div>*/
/* 		</div>*/
/*                                                 </div>*/
/*                                                 </div>*/
/*                                                 </div>*/
/*                                                 </div>*/
/*                                                 </div>*/
/*                                                 </div>*/
/* */
/* */
/*                                                 <div height="100px" >social</div>*/
/* 		*/
/* */
/* 	</form>*/
/*                                                 */
/*                                             */
/*  {% endblock %}  */
/* */
