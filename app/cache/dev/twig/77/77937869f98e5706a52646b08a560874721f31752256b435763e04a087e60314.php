<?php

/* MyappResponsableBundle:View1nour:AfficherProduitClient.html.twig */
class __TwigTemplate_6c71504edc549e8c586edbbbce977f7c125a847b7fbd77cd58ce3328f0922588 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("MyappResponsableBundle::layout.html.twig", "MyappResponsableBundle:View1nour:AfficherProduitClient.html.twig", 1);
        $this->blocks = array(
            'produitClient' => array($this, 'block_produitClient'),
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
    public function block_produitClient($context, array $blocks = array())
    {
        // line 3
        echo "  <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/starrating/css/rating.css"), "html", null, true);
        echo "\" />
<script src=\"//ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js\"></script>
    ";
        // line 5
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "8bb605b_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_8bb605b_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/8bb605b_rating_1.js");
            // line 7
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
        // line 9
        echo "    
  <link href=\"";
        // line 10
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
        // line 25
        echo $this->env->getExtension('routing')->getPath("pi2tst_homepage1");
        echo "\"><i class=\"fa fa-home\"></i></a></li>
\t\t<li><a  href=\"";
        // line 26
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
        // line 41
        echo $this->env->getExtension('routing')->getPath("order_produit_prix_achat");
        echo "\">order by prix d'achat</a><br>
\t\t\t            <a href=\"";
        // line 42
        echo $this->env->getExtension('routing')->getPath("order_produit_prixvendre");
        echo "\">order by prix de vendre </a>\t\t\t\t\t\t\t\t\t
\t\t                </div>
                                        
\t\t\t\t<div class=\"col-md-2\">
\t\t\t\t\t<label class=\"control-label\" for=\"input-limit\">Show:</label>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-2\">
                                    <a href=\"";
        // line 49
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
        // line 65
        echo $this->env->getExtension('knp_pagination')->render($this->env, (isset($context["modele"]) ? $context["modele"] : $this->getContext($context, "modele")));
        echo "
    
    
</div>    
    <p class=\"pull-left nam-page\">Showing  ";
        // line 69
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["modele"]) ? $context["modele"] : $this->getContext($context, "modele")), "getTotalItemCount", array()), "html", null, true);
        echo " (2 Pages)</p> 
\t\t\t
\t\t\t
\t\t</div>
\t 
         
 ";
        // line 75
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["modele"]) ? $context["modele"] : $this->getContext($context, "modele")));
        foreach ($context['_seq'] as $context["_key"] => $context["m"]) {
            // line 76
            echo "            <div id=\"afficheP\">
                 
             
\t\t\t\t<div class=\"product-layout product-list col-xs-12\">
\t\t  <div class=\"product-thumb\">
\t\t\t<div class=\"image\">
                          <p style=\"margin-bottom:60px;\">  <a href=\"";
            // line 82
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("afficherdetailleProduit", array("id" => $this->getAttribute($context["m"], "id", array()))), "html", null, true);
            echo "\">
                                <img src=\"";
            // line 83
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
            // line 88
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("afficherdetailleProduit", array("id" => $this->getAttribute($context["m"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "designation", array()), "html", null, true);
            echo " : ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "marque", array()), "html", null, true);
            echo "</a></div>
\t\t\t\t<div class=\"description\">
Traditions are the cornerstone description ";
            // line 90
            echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "description", array()), "html", null, true);
            echo "</div>
                                <div class=\"description\">
                                    etat de produit  : ";
            // line 92
            echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "etat", array()), "html", null, true);
            echo "<br>
                                les taile disponible : ";
            // line 93
            echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "taille", array()), "html", null, true);
            echo "
                                <br>quantite  : ";
            // line 94
            echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "quantite", array()), "html", null, true);
            echo "<br>
                                reference : ";
            // line 95
            echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "reference", array()), "html", null, true);
            echo "
                                </div>
\t\t\t<div id=\"rating\">

     
         ";
            // line 100
            echo $this->env->getExtension('star_rating_extension')->rating($this->getAttribute($context["m"], "note", array()));
            echo "
\t\t\t\t  \t\t\t\t  \t\t\t\t  </div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"price price-product\">
                                                                                                    <span class=\"price-new\">prix d'achat : \$";
            // line 103
            echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "prixdachat", array()), "html", null, true);
            echo "</span> <br><span class=\"price-new\">prix de vente : \$";
            echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "prixvente", array()), "html", null, true);
            echo "</span>
\t\t\t\t  \t\t\t\t  \t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t<div class=\"cart-button\">
                                   
                                    
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
        // line 119
        echo " 
                                    
                   <div class=\"cart-button\">
                                   
                                    
\t\t\t\t\t
\t\t\t\t<p> socail </p>\t
\t\t\t\t</div>        
                                    <a href=\"";
        // line 127
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->env->getExtension('nomaya_social_links')->getSocialLink("facebook")), "html", null, true);
        echo "\"><i class=\"fa fa-facebook\"></i></a>
                         
                  
                  <div> ";
        // line 130
        echo $this->env->getExtension('nomaya_social_bar')->getSocialButtons(array("facebook" => array("locale" => "fr_FR", "send" => "true")));
        echo "</div>
                  
                

<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.min.js\"></script>

                                </div>
  
 
    ";
    }

    public function getTemplateName()
    {
        return "MyappResponsableBundle:View1nour:AfficherProduitClient.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  258 => 130,  252 => 127,  242 => 119,  217 => 103,  211 => 100,  203 => 95,  199 => 94,  195 => 93,  191 => 92,  186 => 90,  177 => 88,  165 => 83,  161 => 82,  153 => 76,  149 => 75,  140 => 69,  133 => 65,  112 => 49,  102 => 42,  98 => 41,  80 => 26,  76 => 25,  58 => 10,  55 => 9,  41 => 7,  37 => 5,  31 => 3,  28 => 2,  11 => 1,);
    }
}
/* {% extends "MyappResponsableBundle::layout.html.twig" %}*/
/* {% block produitClient %}*/
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
/*                                    */
/*                                     */
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
/*                                     */
/* 					*/
/* 				<p> socail </p>	*/
/* 				</div>        */
/*                                     <a href="{{ asset( socialLink("facebook") )}}"><i class="fa fa-facebook"></i></a>*/
/*                          */
/*                   */
/*                   <div> {{ socialButtons( { 'facebook' : { 'locale':"fr_FR",'send': 'true' }} ) }}</div>*/
/*                   */
/*                 */
/* */
/* <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.min.js"></script>*/
/* */
/*                                 </div>*/
/*   */
/*  */
/*     {%endblock %}*/
/*     */
