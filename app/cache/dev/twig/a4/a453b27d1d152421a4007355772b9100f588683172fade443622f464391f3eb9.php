<?php

/* MyappResponsableBundle:View1nour:test.html.twig */
class __TwigTemplate_97574af3e73080c4bdbbf08c4535513014ad0c3f5bb56daa0cf3846d5af79648 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("MyappResponsableBundle::layout.html.twig", "MyappResponsableBundle:View1nour:test.html.twig", 1);
        $this->blocks = array(
            'produitajouter' => array($this, 'block_produitajouter'),
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
    public function block_produitajouter($context, array $blocks = array())
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
        echo $this->env->getExtension('routing')->getPath("AjouterProduit");
        echo "\">ajouter produit  </a></li>
\t\t\t</ul>

\t<div class=\"row\">
\t
\t
\t<div id=\"content\" class=\"col-sm-12 product_page\">
           <div class=\"row product-content-columns\">
\t\t\t
\t\t\t<!-- Content left -->
\t\t\t

\t\t\t<!-- Content right -->
\t\t\t<div class=\"col-sm-7 col-lg-5 product_page-right\">
\t\t\t\t<div class=\"general_info product-info\">
 
                                    
 
\t\t\t\t\t
\t\t\t\t\t<!-- Prodyuct rating status -->
<div class=\"rating-section product-rating-status\">
<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/starrating/css/rating.css"), "html", null, true);
        echo "\" />

    ";
        // line 43
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "8bb605b_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_8bb605b_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/8bb605b_rating_1.js");
            // line 45
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
        // line 47
        echo "     
         <div class=\"rating\">
            ";
        // line 49
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "note", array()), 'widget');
        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
             </div>


            </div>
           
<div class=\"price-section\">
\t\t<span\tclass=\"price-new\"></span>
                designation : ";
        // line 58
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "designation", array()), 'widget');
        echo "<br>
\t\t\tprixvente :<span\tclass=\"price-new\">\$";
        // line 59
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "prixvente", array()), 'widget');
        echo " </span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"reward-block\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t\t<ul class=\"list-unstyled product-section\">
\t\t\t\t\t\t\t<li>Marque: ";
        // line 65
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "marque", array()), 'widget');
        echo "</a></li>
\t\t\t\t\t\t\t<li>Code de produit: <span>";
        // line 66
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "reference", array()), 'widget');
        echo "</span></li>
\t\t\t\t\t\t\t<li>disponible : <span>";
        // line 67
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
        // line 97
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "couleur", array()), 'widget');
        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</div>
\t\t</div>
                                                 
                          <label class=\"control-label col-sm-4\">Size</label>
\t\t<div id=\"input-option230\" class=\"col-sm-8\">
\t\t\t\t\t\t\t<div class=\"radio\">
                                                         
                                                          ";
        // line 106
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "size", array()), 'widget');
        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</div>
\t\t</div>                       
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group required\">
         
 <div class=\"form-group required\">
              <label class=\"control-label col-sm-4\" for=\"input-option224\">description</label>
\t\t<div  >
                   
\t\t   ";
        // line 116
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "description", array()), 'widget');
        echo "
                   
\t\t\t\t\t\t\t\t\t\t</div>\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t</div>\t
                  
                   <div class=\"form-group required\">
              <label class=\"control-label col-sm-4\" for=\"input-option224\">Taille</label>
\t\t<div  >
                   
\t\t   ";
        // line 125
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "taille", array()), 'widget');
        echo "
                   
\t\t\t\t\t\t\t\t\t\t</div>\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t</div>\t
                   
                    <div class=\"form-group required\">
              <label class=\"control-label col-sm-4\" for=\"input-option224\">Etat</label>
\t\t<div  >
                   
\t\t   ";
        // line 134
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "etat", array()), 'widget');
        echo "
                   
\t\t\t\t\t\t\t\t\t\t</div>\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t</div>\t
                   
                   
                    <div class=\"form-group required\">
              <label class=\"control-label col-sm-4\" for=\"input-option224\">Quantite</label>
\t\t<div  >
                   
\t\t   ";
        // line 144
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
        // line 167
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), 'rest');
        echo "
    

                           
                         
</div>

\t\t\t\t\t\t\t\t\t

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
        return "MyappResponsableBundle:View1nour:test.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  261 => 167,  235 => 144,  222 => 134,  210 => 125,  198 => 116,  185 => 106,  173 => 97,  140 => 67,  136 => 66,  132 => 65,  123 => 59,  119 => 58,  107 => 49,  103 => 47,  89 => 45,  85 => 43,  80 => 41,  56 => 20,  52 => 19,  48 => 18,  31 => 3,  28 => 2,  11 => 1,);
    }
}
/* {% extends "MyappResponsableBundle::layout.html.twig" %}*/
/* {% block produitajouter %}*/
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
/* 					<li><a href="{{ path('AjouterProduit')}}">ajouter produit  </a></li>*/
/* 			</ul>*/
/* */
/* 	<div class="row">*/
/* 	*/
/* 	*/
/* 	<div id="content" class="col-sm-12 product_page">*/
/*            <div class="row product-content-columns">*/
/* 			*/
/* 			<!-- Content left -->*/
/* 			*/
/* */
/* 			<!-- Content right -->*/
/* 			<div class="col-sm-7 col-lg-5 product_page-right">*/
/* 				<div class="general_info product-info">*/
/*  */
/*                                     */
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
/*            */
/* <div class="price-section">*/
/* 		<span	class="price-new"></span>*/
/*                 designation : {{ form_widget(f.designation) }}<br>*/
/* 			prixvente :<span	class="price-new">${{ form_widget(f.prixvente) }} </span>*/
/* 																		<div class="reward-block">*/
/* 																				</div>*/
/* 					</div>*/
/* 					*/
/* 					<ul class="list-unstyled product-section">*/
/* 							<li>Marque: {{ form_widget(f.marque) }}</a></li>*/
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
/*                           <label class="control-label col-sm-4">Size</label>*/
/* 		<div id="input-option230" class="col-sm-8">*/
/* 							<div class="radio">*/
/*                                                          */
/*                                                           {{ form_widget(f.size) }}*/
/* 													*/
/* 								</div>*/
/* 		</div>                       */
/* 																																																																																																																<div class="form-group required">*/
/*          */
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
/* 									*/
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
