<?php

/* MyappResponsableBundle:View1nour:rechercheProduit.html.twig */
class __TwigTemplate_81064e4b2eb95ee1c89a55715b66d6844fb3179233f1e8661151765a6195c196 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("MyappResponsableBundle::layout.html.twig", "MyappResponsableBundle:View1nour:rechercheProduit.html.twig", 1);
        $this->blocks = array(
            'rechercherProduit' => array($this, 'block_rechercherProduit'),
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

    // line 3
    public function block_rechercherProduit($context, array $blocks = array())
    {
        // line 4
        echo "    
  <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/starrating/css/rating.css"), "html", null, true);
        echo "\" />
<script src=\"//ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js\"></script>
    ";
        // line 7
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "8bb605b_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_8bb605b_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/8bb605b_rating_1.js");
            // line 9
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
        // line 11
        echo "    
  <link href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/produit/styleproduit.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />  


<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
<title>liste de produits</title>

<meta name=\"description\" content=\"Example of category description\" >
<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">

\t\t\t
                                

<p id=\"back-top\"> <a href=\"#top\"><span></span></a> </p>
<div class=\"classpP\">
  <ul class=\"breadcrumb\">
\t\t<li><a href=\"";
        // line 27
        echo $this->env->getExtension('routing')->getPath("pi2tst_homepage1");
        echo "\"><i class=\"fa fa-home\"></i></a></li>
\t\t<li><a  href=\"";
        // line 28
        echo $this->env->getExtension('routing')->getPath("afficher_produits");
        echo "\">Liste des produits</a></li>
\t  </ul>
</div>
  <div class=\"rowp\">
      
\t\t\t\t<div id=\"contentproduit\"class=\"col-pr-2\" >\t  <h2 class=\"classpP2\">liste de produits</h2>
\t  \t  
\t\t\t\t\t\t
                                    <hr>
\t  \t  \t  \t\t<div class=\"product-filter clearfix\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-2\">
\t\t\t\t\t<label class=\"control-label\" for=\"input-sort\">Sort By:</label>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-3\">
                                    <a href=\"";
        // line 43
        echo $this->env->getExtension('routing')->getPath("order_produit_prix_achat");
        echo "\">order by prix d'achat</a><br>
\t\t\t            <a href=\"";
        // line 44
        echo $this->env->getExtension('routing')->getPath("order_produit_prixvendre");
        echo "\">order by prix de vendre </a>\t\t\t\t\t\t\t\t\t
\t\t                </div>
                                        
\t\t\t\t<div class=\"col-md-2\">
\t\t\t\t\t<label class=\"control-label\" for=\"input-limit\">Show:</label>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-2\">
                                    <a href=\"";
        // line 51
        echo $this->env->getExtension('routing')->getPath("fixer_nmb_produits", array("id" => 3));
        echo "\">3</a> ou <a href=\"";
        echo $this->env->getExtension('routing')->getPath("fixer_nmb_produits", array("id" => 2));
        echo "\">2</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t</div>
\t\t\t\t
\t\t\t\t<div class=\"col-md-3 text-right\">
\t\t\t\t\t<div class=\"button-view\">
\t\t\t\t\t\t<button type=\"button\" id=\"list-view\" class=\"btn btn-default\" data-toggle=\"tooltip\" title=\"List\"><i class=\"fa fa-th-list\"></i></button>
\t\t\t\t\t\t<button type=\"button\" id=\"grid-view\" class=\"btn btn-default\" data-toggle=\"tooltip\" title=\"Grid\"><i class=\"fa fa-th\"></i></button>
\t\t\t\t\t</div>
\t\t\t\t</div>
                                                                                   
\t\t\t</div>
\t\t</div>
                                 
<div class=\"navigation\">
                    
    ";
        // line 67
        echo $this->env->getExtension('knp_pagination')->render($this->env, (isset($context["modele"]) ? $context["modele"] : $this->getContext($context, "modele")));
        echo "
    
    
</div>    
    <p class=\"pull-left nam-page\">Showing  ";
        // line 71
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["modele"]) ? $context["modele"] : $this->getContext($context, "modele")), "getTotalItemCount", array()), "html", null, true);
        echo " (2 Pages)</p> 
                                   
\t\t\t
\t\t\t
\t\t</div>
\t 
         
 ";
        // line 78
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["modele"]) ? $context["modele"] : $this->getContext($context, "modele")));
        foreach ($context['_seq'] as $context["_key"] => $context["m"]) {
            // line 79
            echo "            <div id=\"afficheP\">
                 
             
\t\t\t\t<div class=\"product-layout product-list col-xs-12\">
\t\t  <div class=\"product-thumb\">
\t\t\t<div class=\"image\">
                          <p style=\"margin-bottom:60px;\">  <a href=\"";
            // line 85
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("afficherdetailleProduit", array("id" => $this->getAttribute($context["m"], "id", array()))), "html", null, true);
            echo "\">
                                <img src=\"";
            // line 86
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->env->getExtension('routing')->getPath("my_image_route", array("id" => $this->getAttribute($context["m"], "id", array())))), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "designation", array()), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "designation", array()), "html", null, true);
            echo "\" class=\"img-responsive\" /></a>
                          </p>
                        </div>
\t\t\t<div>
\t\t\t  <div class=\"caption\">
\t\t\t\t<div class=\"name name-product\"><a href=\"";
            // line 91
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("afficherdetailleProduit", array("id" => $this->getAttribute($context["m"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "designation", array()), "html", null, true);
            echo " : ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "marque", array()), "html", null, true);
            echo "</a></div>
\t\t\t\t<div class=\"description\">
Traditions are the cornerstone description ";
            // line 93
            echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "description", array()), "html", null, true);
            echo "</div>
                                <div class=\"description\">
                                    etat de produit  : ";
            // line 95
            echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "etat", array()), "html", null, true);
            echo "<br>
                                les taile disponible : ";
            // line 96
            echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "taille", array()), "html", null, true);
            echo "
                                <br>quantite  : ";
            // line 97
            echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "quantite", array()), "html", null, true);
            echo "<br>
                                reference : ";
            // line 98
            echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "reference", array()), "html", null, true);
            echo "
                                </div>
\t\t\t<div id=\"rating\">

     
         ";
            // line 103
            echo $this->env->getExtension('star_rating_extension')->rating($this->getAttribute($context["m"], "note", array()));
            echo "
\t\t\t\t  \t\t\t\t  \t\t\t\t  </div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"price price-product\">
                                                                                                    <span class=\"price-new\">prix d'achat : \$";
            // line 106
            echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "prixdachat", array()), "html", null, true);
            echo "</span> <br><span class=\"price-new\">prix de vente : \$";
            echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "prixvente", array()), "html", null, true);
            echo "</span>
\t\t\t\t  \t\t\t\t  \t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t<div class=\"cart-button\">
                                    <a href=\"";
            // line 110
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("modifierProduit", array("id" => $this->getAttribute($context["m"], "id", array()))), "html", null, true);
            echo "\">
                                        <button class=\"btn btn-add\" type=\"button\" onclick=\"cart.add('42');\">
                                            <i class=\"fa fa-shopping-cart hidden-lg\"></i>
                                            <span class=\"hidden-xs hidden-sm hidden-md\">modifer produit</span>
                                        </button>
                                    </a>
                                    <a href=\"";
            // line 116
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("SupprimerProduit", array("id" => $this->getAttribute($context["m"], "id", array()))), "html", null, true);
            echo "\">
                                        <button class=\"btn btn-add\" type=\"button\" onclick=\"cart.add('42');\"><i class=\"fa fa-shopping-cart hidden-lg\"></i> <span class=\"hidden-xs hidden-sm hidden-md\">supprimer produit  </span>
                                        </button>
                                    </a>    
\t\t\t\t\t<button class=\"btn btn-icon\" type=\"button\" data-toggle=\"tooltip\" title=\"Add to Wish List\" onclick=\"wishlist.add('42');\"><i class=\"fa fa-heart\"></i></button>
\t\t\t\t\t
\t\t\t\t</div>
\t\t\t</div>
\t\t\t\t
\t\t  </div>
\t\t</div>
\t\t\t\t
</div>
                                                                                                <hr>                                                                                   <br>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['m'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 130
        echo " 
                                    
                   <div class=\"cart-button\">
                                   
                                    <a href=\"";
        // line 134
        echo $this->env->getExtension('routing')->getPath("AjouterProduit");
        echo "\">
                                        <button class=\"btn btn-add\" type=\"button\" onclick=\"cart.add('42');\"><i class=\"fa fa-shopping-cart hidden-lg\"></i> <span class=\"hidden-xs hidden-sm hidden-md\">ajouter produit  </span>
                                        </button>
                                    </a>    
\t\t\t\t\t
\t\t\t\t\t
\t\t\t\t</div>        
                                    
                                    
                  <p> socail </p>
                

<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.min.js\"></script>

                                </div>
  
 
    ";
    }

    public function getTemplateName()
    {
        return "MyappResponsableBundle:View1nour:rechercheProduit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  265 => 134,  259 => 130,  238 => 116,  229 => 110,  220 => 106,  214 => 103,  206 => 98,  202 => 97,  198 => 96,  194 => 95,  189 => 93,  180 => 91,  168 => 86,  164 => 85,  156 => 79,  152 => 78,  142 => 71,  135 => 67,  114 => 51,  104 => 44,  100 => 43,  82 => 28,  78 => 27,  60 => 12,  57 => 11,  43 => 9,  39 => 7,  34 => 5,  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends "MyappResponsableBundle::layout.html.twig" %}*/
/* */
/* {% block rechercherProduit %}*/
/*     */
/*   <link rel="stylesheet" type="text/css" href="{{ asset('bundles/starrating/css/rating.css') }}" />*/
/* <script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>*/
/*     {% javascripts*/
/*       '@StarRatingBundle/Resources/public/js/rating.js' %}*/
/*       <script src="{{ asset_url }}"></script>*/
/*     {% endjavascripts %}*/
/*     */
/*   <link href="{{ asset('css/produit/styleproduit.css') }}" rel="stylesheet" type="text/css" />  */
/* */
/* */
/* <meta name="viewport" content="width=device-width, initial-scale=1">*/
/* <title>liste de produits</title>*/
/* */
/* <meta name="description" content="Example of category description" >*/
/* <meta http-equiv="X-UA-Compatible" content="IE=edge">*/
/* */
/* 			*/
/*                                 */
/* */
/* <p id="back-top"> <a href="#top"><span></span></a> </p>*/
/* <div class="classpP">*/
/*   <ul class="breadcrumb">*/
/* 		<li><a href="{{ path('pi2tst_homepage1') }}"><i class="fa fa-home"></i></a></li>*/
/* 		<li><a  href="{{ path('afficher_produits') }}">Liste des produits</a></li>*/
/* 	  </ul>*/
/* </div>*/
/*   <div class="rowp">*/
/*       */
/* 				<div id="contentproduit"class="col-pr-2" >	  <h2 class="classpP2">liste de produits</h2>*/
/* 	  	  */
/* 						*/
/*                                     <hr>*/
/* 	  	  	  		<div class="product-filter clearfix">*/
/* 			<div class="row">*/
/* 				<div class="col-md-2">*/
/* 					<label class="control-label" for="input-sort">Sort By:</label>*/
/* 				</div>*/
/* 				<div class="col-md-3">*/
/*                                     <a href="{{ path('order_produit_prix_achat') }}">order by prix d'achat</a><br>*/
/* 			            <a href="{{ path('order_produit_prixvendre') }}">order by prix de vendre </a>									*/
/* 		                </div>*/
/*                                         */
/* 				<div class="col-md-2">*/
/* 					<label class="control-label" for="input-limit">Show:</label>*/
/* 				</div>*/
/* 				<div class="col-md-2">*/
/*                                     <a href="{{ path('fixer_nmb_produits',{'id': 3 }) }}">3</a> ou <a href="{{ path('fixer_nmb_produits',{'id': 2 }) }}">2</a>*/
/* 															</select>*/
/* 				</div>*/
/* 				*/
/* 				<div class="col-md-3 text-right">*/
/* 					<div class="button-view">*/
/* 						<button type="button" id="list-view" class="btn btn-default" data-toggle="tooltip" title="List"><i class="fa fa-th-list"></i></button>*/
/* 						<button type="button" id="grid-view" class="btn btn-default" data-toggle="tooltip" title="Grid"><i class="fa fa-th"></i></button>*/
/* 					</div>*/
/* 				</div>*/
/*                                                                                    */
/* 			</div>*/
/* 		</div>*/
/*                                  */
/* <div class="navigation">*/
/*                     */
/*     {{ knp_pagination_render(modele) }}*/
/*     */
/*     */
/* </div>    */
/*     <p class="pull-left nam-page">Showing  {{ modele.getTotalItemCount }} (2 Pages)</p> */
/*                                    */
/* 			*/
/* 			*/
/* 		</div>*/
/* 	 */
/*          */
/*  {% for m in modele %}*/
/*             <div id="afficheP">*/
/*                  */
/*              */
/* 				<div class="product-layout product-list col-xs-12">*/
/* 		  <div class="product-thumb">*/
/* 			<div class="image">*/
/*                           <p style="margin-bottom:60px;">  <a href="{{ path('afficherdetailleProduit', {'id': m.id})}}">*/
/*                                 <img src="{{ asset(path('my_image_route', {'id': m.id})) }}" alt="{{ m.designation }}" title="{{ m.designation }}" class="img-responsive" /></a>*/
/*                           </p>*/
/*                         </div>*/
/* 			<div>*/
/* 			  <div class="caption">*/
/* 				<div class="name name-product"><a href="{{ path('afficherdetailleProduit', {'id': m.id})}}">{{ m.designation }} : {{ m.marque }}</a></div>*/
/* 				<div class="description">*/
/* Traditions are the cornerstone description {{ m.description }}</div>*/
/*                                 <div class="description">*/
/*                                     etat de produit  : {{ m.etat }}<br>*/
/*                                 les taile disponible : {{ m.taille }}*/
/*                                 <br>quantite  : {{ m.quantite }}<br>*/
/*                                 reference : {{ m.reference }}*/
/*                                 </div>*/
/* 			<div id="rating">*/
/* */
/*      */
/*          {{ m.note|rating }}*/
/* 				  				  				  </div>*/
/* 												<div class="price price-product">*/
/*                                                                                                     <span class="price-new">prix d'achat : ${{ m.prixdachat }}</span> <br><span class="price-new">prix de vente : ${{ m.prixvente }}</span>*/
/* 				  				  				</div>*/
/* 								</div>*/
/* 				<div class="cart-button">*/
/*                                     <a href="{{ path('modifierProduit', {'id': m.id})}}">*/
/*                                         <button class="btn btn-add" type="button" onclick="cart.add('42');">*/
/*                                             <i class="fa fa-shopping-cart hidden-lg"></i>*/
/*                                             <span class="hidden-xs hidden-sm hidden-md">modifer produit</span>*/
/*                                         </button>*/
/*                                     </a>*/
/*                                     <a href="{{ path('SupprimerProduit', {'id': m.id})}}">*/
/*                                         <button class="btn btn-add" type="button" onclick="cart.add('42');"><i class="fa fa-shopping-cart hidden-lg"></i> <span class="hidden-xs hidden-sm hidden-md">supprimer produit  </span>*/
/*                                         </button>*/
/*                                     </a>    */
/* 					<button class="btn btn-icon" type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('42');"><i class="fa fa-heart"></i></button>*/
/* 					*/
/* 				</div>*/
/* 			</div>*/
/* 				*/
/* 		  </div>*/
/* 		</div>*/
/* 				*/
/* </div>*/
/*                                                                                                 <hr>                                                                                   <br>*/
/*             {%endfor %} */
/*                                     */
/*                    <div class="cart-button">*/
/*                                    */
/*                                     <a href="{{ path('AjouterProduit')}}">*/
/*                                         <button class="btn btn-add" type="button" onclick="cart.add('42');"><i class="fa fa-shopping-cart hidden-lg"></i> <span class="hidden-xs hidden-sm hidden-md">ajouter produit  </span>*/
/*                                         </button>*/
/*                                     </a>    */
/* 					*/
/* 					*/
/* 				</div>        */
/*                                     */
/*                                     */
/*                   <p> socail </p>*/
/*                 */
/* */
/* <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.min.js"></script>*/
/* */
/*                                 </div>*/
/*   */
/*  */
/*     {%endblock %}*/
/*     */
/*        */
