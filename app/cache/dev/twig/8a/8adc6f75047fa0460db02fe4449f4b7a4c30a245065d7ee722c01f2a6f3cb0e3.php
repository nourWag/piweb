<?php

/* MyappuserBundle::error.html.twig */
class __TwigTemplate_be133f655544939354bbca55897ebcc2f79590a71d2483c62ae54d1d7a3ec7f7 extends Twig_Template
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
        // line 2
        echo "<!DOCTYPE html>
<html lang=\"en\">
  <head>
    <meta charset=\"utf-8\">
    <title>Bootshop online Shopping cart</title>
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">
<!--Less styles -->
   <!-- Other Less css file //different less files has different color scheam
\t<link rel=\"stylesheet/less\" type=\"text/css\" href=\"themes/less/simplex.less\">
\t<link rel=\"stylesheet/less\" type=\"text/css\" href=\"themes/less/classified.less\">
\t<link rel=\"stylesheet/less\" type=\"text/css\" href=\"themes/less/amelia.less\">  MOVE DOWN TO activate
\t-->
\t<!--<link rel=\"stylesheet/less\" type=\"text/css\" href=\"themes/less/bootshop.less\">
\t<script src=\"themes/js/less.js\" type=\"text/javascript\"></script> -->
\t
<!-- Bootstrap style --> 
    <link id=\"callCss\" rel=\"stylesheet\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("themes/bootshop/bootstrap.min.css"), "html", null, true);
        echo "\" media=\"screen\"/>
    <link href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("themes/css/base.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" media=\"screen\"/>
<!-- Bootstrap style responsive -->\t
\t<link href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("themes/css/bootstrap-responsive.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"/>
\t<link href= \"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("themes/css/font-awesome.css\" rel=\"stylesheet\" type=\"text/css"), "html", null, true);
        echo "\">
<!-- Google-code-prettify -->\t
\t<link href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("themes/js/google-code-prettify/prettify.css\" rel=\"stylesheet"), "html", null, true);
        echo "\"/>
<!-- fav and touch icons -->
    <link rel=\"shortcut icon\" href=\"themes/images/ico/favicon.ico\">
    <link rel=\"apple-touch-icon-precomposed\" sizes=\"144x144\" href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("themes/images/ico/apple-touch-icon-144-precomposed.png"), "html", null, true);
        echo "\">
    <link rel=\"apple-touch-icon-precomposed\" sizes=\"114x114\" href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("themes/images/ico/apple-touch-icon-114-precomposed.png"), "html", null, true);
        echo "\">
    <link rel=\"apple-touch-icon-precomposed\" sizes=\"72x72\" href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("themes/images/ico/apple-touch-icon-72-precomposed.png"), "html", null, true);
        echo "\">
    <link rel=\"apple-touch-icon-precomposed\" href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("themes/images/ico/apple-touch-icon-57-precomposed.png"), "html", null, true);
        echo "\">
\t<style type=\"text/css\" id=\"enject\"></style>
  </head>
<body>
<div id=\"header\">
<div class=\"container\">
<div id=\"welcomeLine\" class=\"row\">
\t<div class=\"span6\">Welcome!<strong> User</strong></div>
\t<div class=\"span6\">
\t<div class=\"pull-right\">
\t\t<a href=\"product_summary.html\"><span class=\"\">Fr</span></a>
\t\t<a href=\"product_summary.html\"><span class=\"\">Es</span></a>
\t\t<span class=\"btn btn-mini\">En</span>
\t\t<a href=\"product_summary.html\"><span>&pound;</span></a>
\t\t<span class=\"btn btn-mini\">\$155.00</span>
\t\t<a href=\"product_summary.html\"><span class=\"\">\$</span></a>
\t\t<a href=\"product_summary.html\"><span class=\"btn btn-mini btn-primary\"><i class=\"icon-shopping-cart icon-white\"></i> [ 3 ] Itemes in your cart </span> </a> 
\t</div>
\t</div>
</div>
<!-- Navbar ================================================== -->
<div id=\"logoArea\" class=\"navbar\">
<a id=\"smallScreen\" data-target=\"#topMenu\" data-toggle=\"collapse\" class=\"btn btn-navbar\">
\t<span class=\"icon-bar\"></span>
\t<span class=\"icon-bar\"></span>
\t<span class=\"icon-bar\"></span>
</a>
  <div class=\"navbar-inner\">
    <a class=\"brand\" href=\"index.html\"><img src=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("themes/images/logo.png"), "html", null, true);
        echo "\" alt=\"Bootsshop\"/></a>
\t\t<form class=\"form-inline navbar-search\" method=\"post\" action=\"products.html\" >
\t\t<input id=\"srchFld\" class=\"srchTxt\" type=\"text\" />
\t\t  <select class=\"srchTxt\">
\t\t\t<option>All</option>
\t\t\t<option>CLOTHES </option>
\t\t\t<option>FOOD AND BEVERAGES </option>
\t\t\t<option>HEALTH & BEAUTY </option>
\t\t\t<option>SPORTS & LEISURE </option>
\t\t\t<option>BOOKS & ENTERTAINMENTS </option>
\t\t</select> 
\t\t  <button type=\"submit\" id=\"submitButton\" class=\"btn btn-primary\">Go</button>
    </form>
    <ul id=\"topMenu\" class=\"nav pull-right\">
\t <li class=\"\"><a href=\"special_offer.html\">Specials Offer</a></li>
\t <li class=\"\"><a href=\"normal.html\">Delivery</a></li>
\t <li class=\"\"><a href=\"contact.html\">Contact</a></li>
\t <li class=\"\">
\t <a href=\"#login\" role=\"button\" data-toggle=\"modal\" style=\"padding-right:0\"><span class=\"btn btn-large btn-success\">Login</span></a>
\t<div id=\"login\" class=\"modal hide fade in\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"login\" aria-hidden=\"false\" >
\t\t  <div class=\"modal-header\">
\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">×</button>
\t\t\t<h3>Login Block</h3>
\t\t  </div>
\t\t  <div class=\"modal-body\">
\t\t\t<form class=\"form-horizontal loginFrm\">
\t\t\t  <div class=\"control-group\">\t\t\t\t\t\t\t\t
\t\t\t\t<input type=\"text\" id=\"inputEmail\" placeholder=\"Email\">
\t\t\t  </div>
\t\t\t  <div class=\"control-group\">
\t\t\t\t<input type=\"password\" id=\"inputPassword\" placeholder=\"Password\">
\t\t\t  </div>
\t\t\t  <div class=\"control-group\">
\t\t\t\t<label class=\"checkbox\">
\t\t\t\t<input type=\"checkbox\"> Remember me
\t\t\t\t</label>
\t\t\t  </div>
\t\t\t</form>\t\t
\t\t\t<button type=\"submit\" class=\"btn btn-success\">Sign in</button>
\t\t\t<button class=\"btn\" data-dismiss=\"modal\" aria-hidden=\"true\">Close</button>
\t\t  </div>
\t</div>
\t</li>
    </ul>
  </div>
</div>
</div>
</div>
<!-- Header End====================================================================== -->
<div id=\"carouselBlk\">
\t<div id=\"myCarousel\" class=\"carousel slide\">
\t\t<div class=\"carousel-inner\">
\t\t  <div class=\"item active\">
\t\t  <div class=\"container\">
\t\t\t<a href=\"register.html\"><img style=\"width:100%\" src=\"themes/images/carousel/1.png\" alt=\"special offers\"/></a>
\t\t\t<div class=\"carousel-caption\">
\t\t\t\t  <h4>Second Thumbnail label</h4>
\t\t\t\t  <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
\t\t\t\t</div>
\t\t  </div>
\t\t  </div>
\t\t  <div class=\"item\">
\t\t  <div class=\"container\">
\t\t\t<a href=\"register.html\"><img style=\"width:100%\" src=\"themes/images/carousel/2.png\" alt=\"\"/></a>
\t\t\t\t<div class=\"carousel-caption\">
\t\t\t\t  <h4>Second Thumbnail label</h4>
\t\t\t\t  <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
\t\t\t\t</div>
\t\t  </div>
\t\t  </div>
\t\t  <div class=\"item\">
\t\t  <div class=\"container\">
\t\t\t<a href=\"register.html\"><img src=\"themes/images/carousel/3.png\" alt=\"\"/></a>
\t\t\t<div class=\"carousel-caption\">
\t\t\t\t  <h4>Second Thumbnail label</h4>
\t\t\t\t  <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
\t\t\t\t</div>
\t\t\t
\t\t  </div>
\t\t  </div>
\t\t   <div class=\"item\">
\t\t   <div class=\"container\">
\t\t\t<a href=\"register.html\"><img src=\"themes/images/carousel/4.png\" alt=\"\"/></a>
\t\t\t<div class=\"carousel-caption\">
\t\t\t\t  <h4>Second Thumbnail label</h4>
\t\t\t\t  <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
\t\t\t\t</div>
\t\t   
\t\t  </div>
\t\t  </div>
\t\t   <div class=\"item\">
\t\t   <div class=\"container\">
\t\t\t<a href=\"register.html\"><img src=\"themes/images/carousel/5.png\" alt=\"\"/></a>
\t\t\t<div class=\"carousel-caption\">
\t\t\t\t  <h4>Second Thumbnail label</h4>
\t\t\t\t  <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
\t\t\t</div>
\t\t  </div>
\t\t  </div>
\t\t   <div class=\"item\">
\t\t   <div class=\"container\">
\t\t\t<a href=\"register.html\"><img src=\"themes/images/carousel/6.png\" alt=\"\"/></a>
\t\t\t<div class=\"carousel-caption\">
\t\t\t\t  <h4>Second Thumbnail label</h4>
\t\t\t\t  <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
\t\t\t\t</div>
\t\t  </div>
\t\t  </div>
\t\t</div>
\t\t<a class=\"left carousel-control\" href=\"#myCarousel\" data-slide=\"prev\">&lsaquo;</a>
\t\t<a class=\"right carousel-control\" href=\"#myCarousel\" data-slide=\"next\">&rsaquo;</a>
\t  </div> 
</div>





<div id=\"mainBody\">
\t<div class=\"container\">
\t<div class=\"row\">
<!-- Sidebar ================================================== -->
\t<div id=\"sidebar\" class=\"span3\">
\t\t<div class=\"well well-small\"><a id=\"myCart\" href=\"product_summary.html\"><img src=\"themes/images/ico-cart.png\" alt=\"cart\">3 Items in your cart  <span class=\"badge badge-warning pull-right\">\$155.00</span></a></div>
\t\t<ul id=\"sideManu\" class=\"nav nav-tabs nav-stacked\">
\t\t\t<li class=\"subMenu open\"><a> ELECTRONICS [230]</a>
\t\t\t\t<ul>
\t\t\t\t<li><a class=\"active\" href=\"products.html\"><i class=\"icon-chevron-right\"></i>Cameras (100) </a></li>
\t\t\t\t<li><a href=\"products.html\"><i class=\"icon-chevron-right\"></i>Computers, Tablets & laptop (30)</a></li>
\t\t\t\t<li><a href=\"products.html\"><i class=\"icon-chevron-right\"></i>Mobile Phone (80)</a></li>
\t\t\t\t<li><a href=\"products.html\"><i class=\"icon-chevron-right\"></i>Sound & Vision (15)</a></li>
\t\t\t\t</ul>
\t\t\t</li>
\t\t\t<li class=\"subMenu\"><a> CLOTHES [840] </a>
\t\t\t<ul style=\"display:none\">
\t\t\t\t<li><a href=\"products.html\"><i class=\"icon-chevron-right\"></i>Women's Clothing (45)</a></li>
\t\t\t\t<li><a href=\"products.html\"><i class=\"icon-chevron-right\"></i>Women's Shoes (8)</a></li>\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t<li><a href=\"products.html\"><i class=\"icon-chevron-right\"></i>Women's Hand Bags (5)</a></li>\t
\t\t\t\t<li><a href=\"products.html\"><i class=\"icon-chevron-right\"></i>Men's Clothings  (45)</a></li>
\t\t\t\t<li><a href=\"products.html\"><i class=\"icon-chevron-right\"></i>Men's Shoes (6)</a></li>\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t<li><a href=\"products.html\"><i class=\"icon-chevron-right\"></i>Kids Clothing (5)</a></li>\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t<li><a href=\"products.html\"><i class=\"icon-chevron-right\"></i>Kids Shoes (3)</a></li>\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t</ul>
\t\t\t</li>
\t\t\t<li class=\"subMenu\"><a>FOOD AND BEVERAGES [1000]</a>
\t\t\t\t<ul style=\"display:none\">
\t\t\t\t<li><a href=\"products.html\"><i class=\"icon-chevron-right\"></i>Angoves  (35)</a></li>
\t\t\t\t<li><a href=\"products.html\"><i class=\"icon-chevron-right\"></i>Bouchard Aine & Fils (8)</a></li>\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t<li><a href=\"products.html\"><i class=\"icon-chevron-right\"></i>French Rabbit (5)</a></li>\t
\t\t\t\t<li><a href=\"products.html\"><i class=\"icon-chevron-right\"></i>Louis Bernard  (45)</a></li>
\t\t\t\t<li><a href=\"products.html\"><i class=\"icon-chevron-right\"></i>BIB Wine (Bag in Box) (8)</a></li>\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t<li><a href=\"products.html\"><i class=\"icon-chevron-right\"></i>Other Liquors & Wine (5)</a></li>\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t<li><a href=\"products.html\"><i class=\"icon-chevron-right\"></i>Garden (3)</a></li>\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t<li><a href=\"products.html\"><i class=\"icon-chevron-right\"></i>Khao Shong (11)</a></li>\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t</ul>
\t\t\t</li>
\t\t\t<li><a href=\"products.html\">HEALTH & BEAUTY [18]</a></li>
\t\t\t<li><a href=\"products.html\">SPORTS & LEISURE [58]</a></li>
\t\t\t<li><a href=\"products.html\">BOOKS & ENTERTAINMENTS [14]</a></li>
\t\t</ul>
\t\t<br/>
\t\t  <div class=\"thumbnail\">
\t\t\t<img src=\"themes/images/products/panasonic.jpg\" alt=\"Bootshop panasonoc New camera\"/>
\t\t\t<div class=\"caption\">
\t\t\t  <h5>Panasonic</h5>
\t\t\t\t<h4 style=\"text-align:center\"><a class=\"btn\" href=\"product_details.html\"> <i class=\"icon-zoom-in\"></i></a> <a class=\"btn\" href=\"#\">Add to <i class=\"icon-shopping-cart\"></i></a> <a class=\"btn btn-primary\" href=\"#\">\$222.00</a></h4>
\t\t\t</div>
\t\t  </div><br/>
\t\t\t<div class=\"thumbnail\">
\t\t\t\t<img src=\"themes/images/products/kindle.png\" title=\"Bootshop New Kindel\" alt=\"Bootshop Kindel\">
\t\t\t\t<div class=\"caption\">
\t\t\t\t  <h5>Kindle</h5>
\t\t\t\t    <h4 style=\"text-align:center\"><a class=\"btn\" href=\"product_details.html\"> <i class=\"icon-zoom-in\"></i></a> <a class=\"btn\" href=\"#\">Add to <i class=\"icon-shopping-cart\"></i></a> <a class=\"btn btn-primary\" href=\"#\">\$222.00</a></h4>
\t\t\t\t</div>
\t\t\t  </div><br/>
\t\t\t<div class=\"thumbnail\">
\t\t\t\t<img src=\"themes/images/payment_methods.png\" title=\"Bootshop Payment Methods\" alt=\"Payments Methods\">
\t\t\t\t<div class=\"caption\">
\t\t\t\t  <h5>Payment Methods</h5>
\t\t\t\t</div>
\t\t\t  </div>
\t</div>
<!-- Sidebar end=============================================== -->
\t<div class=\"span9\">
    <ul class=\"breadcrumb\">
\t\t<li><a href=\"index.html\">Home</a> <span class=\"divider\">/</span></li>
\t\t<li class=\"active\">Products Compairsition</li>
    </ul>
\t<h3> Products Compairsition <small class=\"pull-right\"> 2 products are compaired </small></h3>\t
\t<hr class=\"soft\"/>

\t<table id=\"compairTbl\" class=\"table table-bordered\">
              <thead>
                <tr>
                  <th>Features</th>
                  <th>Product1 name here </th>
                  <th>Product2 name here</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>&nbsp;</td>
                  <td style=\"text-align:center\">
\t\t\t\t\t<p class=\"justify\">
\t\t\t\t\t\tNowadays the lingerie industry is one of the most successful business spheres.
\t\t\t\t\t\tWe always stay in touch with the latest fashion tendencies - that is why our 
\t\t\t\t\t\tgoods are so popular and we have a great number of faithful customers all over the country.
\t\t\t\t\t</p>
\t\t\t\t<img src=\"themes/images/products/1.jpg\" alt=\"\"/>
\t\t\t\t<form class=\"form-horizontal qtyFrm\">
\t\t\t\t<h3> \$222.00</h3><br/>
\t\t\t\t <a href=\"product_details.html\" class=\"btn btn-large btn-primary\"> Add to <i class=\" icon-shopping-cart\"></i></a>
\t\t\t\t <a href=\"product_details.html\" class=\"btn btn-large\"><i class=\"icon-zoom-in\"></i></a>
\t\t\t\t</form>
\t\t\t\t</td>
                  <td>
\t\t\t\t  <p class=\"justify\">
\t\t\t\t\tNowadays the lingerie industry is one of the most successful business spheres.
\t\t\t\t\tWe always stay in touch with the latest fashion tendencies - that is why our 
\t\t\t\t\tgoods are so popular and we have a great number of faithful customers all over the country.
\t\t\t\t</p>
\t\t\t\t<img src=\"themes/images/products/3.jpg\" alt=\"\"/>
\t\t\t\t
\t\t\t\t<form class=\"form-horizontal qtyFrm\">
\t\t\t\t<h3> \$190.00</h3>
\t\t\t\t<br/>
\t\t\t\t <a href=\"product_details.html\" class=\"btn btn-large btn-primary\"> Add to <i class=\" icon-shopping-cart\"></i></a>
\t\t\t\t <a href=\"product_details.html\" class=\"btn btn-large\"><i class=\"icon-zoom-in\"></i></a>
\t\t\t\t</form>
\t\t\t\t  </td>
                </tr>
                <tr>
                  <td>Height</td>
                  <td>2\"</td>
                  <td>2\"</td>
                </tr>
                <tr>
                  <td>Deepth</td>
                  <td>5\"</td>
                  <td>5\"</td>
                </tr>
\t\t\t\t<tr>
                  <td>Dimension</td>
                  <td>--</td>
                  <td>--</td>
                </tr>
\t\t\t\t<tr>
                  <td>Width</td>
                  <td>6.5\"</td>
                  <td>6.5\"</td>
                </tr>
\t\t\t\t<tr>
                  <td>Weight</td>
                  <td>0.5kg</td>
                  <td>0.5kg</td>
                </tr>
              </tbody>
            </table>\t\t
\t<a href=\"products.html\" class=\"btn btn-large pull-right\">Back Products Page</a>
\t
\t
</div>
</div>
</div>
</div>
<!-- MainBody End ============================= -->
<!-- Footer ================================================================== -->
\t<div  id=\"footerSection\">
\t<div class=\"container\">
\t\t<div class=\"row\">
\t\t\t<div class=\"span3\">
\t\t\t\t<h5>ACCOUNT</h5>
\t\t\t\t<a href=\"login.html\">YOUR ACCOUNT</a>
\t\t\t\t<a href=\"login.html\">PERSONAL INFORMATION</a> 
\t\t\t\t<a href=\"login.html\">ADDRESSES</a> 
\t\t\t\t<a href=\"login.html\">DISCOUNT</a>  
\t\t\t\t<a href=\"login.html\">ORDER HISTORY</a>
\t\t\t </div>
\t\t\t<div class=\"span3\">
\t\t\t\t<h5>INFORMATION</h5>
\t\t\t\t<a href=\"contact.html\">CONTACT</a>  
\t\t\t\t<a href=\"register.html\">REGISTRATION</a>  
\t\t\t\t<a href=\"legal_notice.html\">LEGAL NOTICE</a>  
\t\t\t\t<a href=\"tac.html\">TERMS AND CONDITIONS</a> 
\t\t\t\t<a href=\"faq.html\">FAQ</a>
\t\t\t </div>
\t\t\t<div class=\"span3\">
\t\t\t\t<h5>OUR OFFERS</h5>
\t\t\t\t<a href=\"#\">NEW PRODUCTS</a> 
\t\t\t\t<a href=\"#\">TOP SELLERS</a>  
\t\t\t\t<a href=\"special_offer.html\">SPECIAL OFFERS</a>  
\t\t\t\t<a href=\"#\">MANUFACTURERS</a> 
\t\t\t\t<a href=\"#\">SUPPLIERS</a> 
\t\t\t </div>
\t\t\t<div id=\"socialMedia\" class=\"span3 pull-right\">
\t\t\t\t<h5>SOCIAL MEDIA </h5>
\t\t\t\t<a href=\"#\"><img width=\"60\" height=\"60\" src=\"themes/images/facebook.png\" title=\"facebook\" alt=\"facebook\"/></a>
\t\t\t\t<a href=\"#\"><img width=\"60\" height=\"60\" src=\"themes/images/twitter.png\" title=\"twitter\" alt=\"twitter\"/></a>
\t\t\t\t<a href=\"#\"><img width=\"60\" height=\"60\" src=\"themes/images/youtube.png\" title=\"youtube\" alt=\"youtube\"/></a>
\t\t\t </div> 
\t\t </div>
\t\t<p class=\"pull-right\">&copy; Bootshop</p>
\t</div><!-- Container End -->
\t</div>
<!-- Placed at the end of the document so the pages load faster ============================================= -->
\t<script src=\"themes/js/jquery.js\" type=\"text/javascript\"></script>
\t<script src=\"themes/js/bootstrap.min.js\" type=\"text/javascript\"></script>
\t<script src=\"themes/js/google-code-prettify/prettify.js\"></script>
\t
\t<script src=\"themes/js/bootshop.js\"></script>
    <script src=\"themes/js/jquery.lightbox-0.5.js\"></script>
\t
\t<!-- Themes switcher section ============================================================================================= -->
<div id=\"secectionBox\">
<link rel=\"stylesheet\" href=\"themes/switch/themeswitch.css\" type=\"text/css\" media=\"screen\" />
<script src=\"themes/switch/theamswitcher.js\" type=\"text/javascript\" charset=\"utf-8\"></script>
\t<div id=\"themeContainer\">
\t<div id=\"hideme\" class=\"themeTitle\">Style Selector</div>
\t<div class=\"themeName\">Oregional Skin</div>
\t<div class=\"images style\">
\t<a href=\"themes/css/#\" name=\"bootshop\"><img src=\"themes/switch/images/clr/bootshop.png\" alt=\"bootstrap business templates\" class=\"active\"></a>
\t<a href=\"themes/css/#\" name=\"businessltd\"><img src=\"themes/switch/images/clr/businessltd.png\" alt=\"bootstrap business templates\" class=\"active\"></a>
\t</div>
\t<div class=\"themeName\">Bootswatch Skins (11)</div>
\t<div class=\"images style\">
\t\t<a href=\"themes/css/#\" name=\"amelia\" title=\"Amelia\"><img src=\"themes/switch/images/clr/amelia.png\" alt=\"bootstrap business templates\"></a>
\t\t<a href=\"themes/css/#\" name=\"spruce\" title=\"Spruce\"><img src=\"themes/switch/images/clr/spruce.png\" alt=\"bootstrap business templates\" ></a>
\t\t<a href=\"themes/css/#\" name=\"superhero\" title=\"Superhero\"><img src=\"themes/switch/images/clr/superhero.png\" alt=\"bootstrap business templates\"></a>
\t\t<a href=\"themes/css/#\" name=\"cyborg\"><img src=\"themes/switch/images/clr/cyborg.png\" alt=\"bootstrap business templates\"></a>
\t\t<a href=\"themes/css/#\" name=\"cerulean\"><img src=\"themes/switch/images/clr/cerulean.png\" alt=\"bootstrap business templates\"></a>
\t\t<a href=\"themes/css/#\" name=\"journal\"><img src=\"themes/switch/images/clr/journal.png\" alt=\"bootstrap business templates\"></a>
\t\t<a href=\"themes/css/#\" name=\"readable\"><img src=\"themes/switch/images/clr/readable.png\" alt=\"bootstrap business templates\"></a>\t
\t\t<a href=\"themes/css/#\" name=\"simplex\"><img src=\"themes/switch/images/clr/simplex.png\" alt=\"bootstrap business templates\"></a>
\t\t<a href=\"themes/css/#\" name=\"slate\"><img src=\"themes/switch/images/clr/slate.png\" alt=\"bootstrap business templates\"></a>
\t\t<a href=\"themes/css/#\" name=\"spacelab\"><img src=\"themes/switch/images/clr/spacelab.png\" alt=\"bootstrap business templates\"></a>
\t\t<a href=\"themes/css/#\" name=\"united\"><img src=\"themes/switch/images/clr/united.png\" alt=\"bootstrap business templates\"></a>
\t\t<p style=\"margin:0;line-height:normal;margin-left:-10px;display:none;\"><small>These are just examples and you can build your own color scheme in the backend.</small></p>
\t</div>
\t<div class=\"themeName\">Background Patterns </div>
\t<div class=\"images patterns\">
\t\t<a href=\"themes/css/#\" name=\"pattern1\"><img src=\"themes/switch/images/pattern/pattern1.png\" alt=\"bootstrap business templates\" class=\"active\"></a>
\t\t<a href=\"themes/css/#\" name=\"pattern2\"><img src=\"themes/switch/images/pattern/pattern2.png\" alt=\"bootstrap business templates\"></a>
\t\t<a href=\"themes/css/#\" name=\"pattern3\"><img src=\"themes/switch/images/pattern/pattern3.png\" alt=\"bootstrap business templates\"></a>
\t\t<a href=\"themes/css/#\" name=\"pattern4\"><img src=\"themes/switch/images/pattern/pattern4.png\" alt=\"bootstrap business templates\"></a>
\t\t<a href=\"themes/css/#\" name=\"pattern5\"><img src=\"themes/switch/images/pattern/pattern5.png\" alt=\"bootstrap business templates\"></a>
\t\t<a href=\"themes/css/#\" name=\"pattern6\"><img src=\"themes/switch/images/pattern/pattern6.png\" alt=\"bootstrap business templates\"></a>
\t\t<a href=\"themes/css/#\" name=\"pattern7\"><img src=\"themes/switch/images/pattern/pattern7.png\" alt=\"bootstrap business templates\"></a>
\t\t<a href=\"themes/css/#\" name=\"pattern8\"><img src=\"themes/switch/images/pattern/pattern8.png\" alt=\"bootstrap business templates\"></a>
\t\t<a href=\"themes/css/#\" name=\"pattern9\"><img src=\"themes/switch/images/pattern/pattern9.png\" alt=\"bootstrap business templates\"></a>
\t\t<a href=\"themes/css/#\" name=\"pattern10\"><img src=\"themes/switch/images/pattern/pattern10.png\" alt=\"bootstrap business templates\"></a>
\t\t
\t\t<a href=\"themes/css/#\" name=\"pattern11\"><img src=\"themes/switch/images/pattern/pattern11.png\" alt=\"bootstrap business templates\"></a>
\t\t<a href=\"themes/css/#\" name=\"pattern12\"><img src=\"themes/switch/images/pattern/pattern12.png\" alt=\"bootstrap business templates\"></a>
\t\t<a href=\"themes/css/#\" name=\"pattern13\"><img src=\"themes/switch/images/pattern/pattern13.png\" alt=\"bootstrap business templates\"></a>
\t\t<a href=\"themes/css/#\" name=\"pattern14\"><img src=\"themes/switch/images/pattern/pattern14.png\" alt=\"bootstrap business templates\"></a>
\t\t<a href=\"themes/css/#\" name=\"pattern15\"><img src=\"themes/switch/images/pattern/pattern15.png\" alt=\"bootstrap business templates\"></a>
\t\t
\t\t<a href=\"themes/css/#\" name=\"pattern16\"><img src=\"themes/switch/images/pattern/pattern16.png\" alt=\"bootstrap business templates\"></a>
\t\t<a href=\"themes/css/#\" name=\"pattern17\"><img src=\"themes/switch/images/pattern/pattern17.png\" alt=\"bootstrap business templates\"></a>
\t\t<a href=\"themes/css/#\" name=\"pattern18\"><img src=\"themes/switch/images/pattern/pattern18.png\" alt=\"bootstrap business templates\"></a>
\t\t<a href=\"themes/css/#\" name=\"pattern19\"><img src=\"themes/switch/images/pattern/pattern19.png\" alt=\"bootstrap business templates\"></a>
\t\t<a href=\"themes/css/#\" name=\"pattern20\"><img src=\"themes/switch/images/pattern/pattern20.png\" alt=\"bootstrap business templates\"></a>
\t\t 
\t</div>
\t</div>
</div>
<span id=\"themesBtn\"></span>
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "MyappuserBundle::error.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 60,  75 => 32,  71 => 31,  67 => 30,  63 => 29,  57 => 26,  52 => 24,  48 => 23,  43 => 21,  39 => 20,  19 => 2,);
    }
}
/* {# empty Twig template #}*/
/* <!DOCTYPE html>*/
/* <html lang="en">*/
/*   <head>*/
/*     <meta charset="utf-8">*/
/*     <title>Bootshop online Shopping cart</title>*/
/*     <meta name="viewport" content="width=device-width, initial-scale=1.0">*/
/*     <meta name="description" content="">*/
/*     <meta name="author" content="">*/
/* <!--Less styles -->*/
/*    <!-- Other Less css file //different less files has different color scheam*/
/* 	<link rel="stylesheet/less" type="text/css" href="themes/less/simplex.less">*/
/* 	<link rel="stylesheet/less" type="text/css" href="themes/less/classified.less">*/
/* 	<link rel="stylesheet/less" type="text/css" href="themes/less/amelia.less">  MOVE DOWN TO activate*/
/* 	-->*/
/* 	<!--<link rel="stylesheet/less" type="text/css" href="themes/less/bootshop.less">*/
/* 	<script src="themes/js/less.js" type="text/javascript"></script> -->*/
/* 	*/
/* <!-- Bootstrap style --> */
/*     <link id="callCss" rel="stylesheet" href="{{ asset('themes/bootshop/bootstrap.min.css') }}" media="screen"/>*/
/*     <link href="{{ asset('themes/css/base.css') }}" rel="stylesheet" media="screen"/>*/
/* <!-- Bootstrap style responsive -->	*/
/* 	<link href="{{ asset('themes/css/bootstrap-responsive.min.css') }}" rel="stylesheet"/>*/
/* 	<link href= "{{ asset('themes/css/font-awesome.css" rel="stylesheet" type="text/css') }}">*/
/* <!-- Google-code-prettify -->	*/
/* 	<link href="{{ asset('themes/js/google-code-prettify/prettify.css" rel="stylesheet') }}"/>*/
/* <!-- fav and touch icons -->*/
/*     <link rel="shortcut icon" href="themes/images/ico/favicon.ico">*/
/*     <link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{ asset('themes/images/ico/apple-touch-icon-144-precomposed.png') }}">*/
/*     <link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{ asset('themes/images/ico/apple-touch-icon-114-precomposed.png') }}">*/
/*     <link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{ asset('themes/images/ico/apple-touch-icon-72-precomposed.png') }}">*/
/*     <link rel="apple-touch-icon-precomposed" href="{{ asset('themes/images/ico/apple-touch-icon-57-precomposed.png') }}">*/
/* 	<style type="text/css" id="enject"></style>*/
/*   </head>*/
/* <body>*/
/* <div id="header">*/
/* <div class="container">*/
/* <div id="welcomeLine" class="row">*/
/* 	<div class="span6">Welcome!<strong> User</strong></div>*/
/* 	<div class="span6">*/
/* 	<div class="pull-right">*/
/* 		<a href="product_summary.html"><span class="">Fr</span></a>*/
/* 		<a href="product_summary.html"><span class="">Es</span></a>*/
/* 		<span class="btn btn-mini">En</span>*/
/* 		<a href="product_summary.html"><span>&pound;</span></a>*/
/* 		<span class="btn btn-mini">$155.00</span>*/
/* 		<a href="product_summary.html"><span class="">$</span></a>*/
/* 		<a href="product_summary.html"><span class="btn btn-mini btn-primary"><i class="icon-shopping-cart icon-white"></i> [ 3 ] Itemes in your cart </span> </a> */
/* 	</div>*/
/* 	</div>*/
/* </div>*/
/* <!-- Navbar ================================================== -->*/
/* <div id="logoArea" class="navbar">*/
/* <a id="smallScreen" data-target="#topMenu" data-toggle="collapse" class="btn btn-navbar">*/
/* 	<span class="icon-bar"></span>*/
/* 	<span class="icon-bar"></span>*/
/* 	<span class="icon-bar"></span>*/
/* </a>*/
/*   <div class="navbar-inner">*/
/*     <a class="brand" href="index.html"><img src="{{ asset('themes/images/logo.png') }}" alt="Bootsshop"/></a>*/
/* 		<form class="form-inline navbar-search" method="post" action="products.html" >*/
/* 		<input id="srchFld" class="srchTxt" type="text" />*/
/* 		  <select class="srchTxt">*/
/* 			<option>All</option>*/
/* 			<option>CLOTHES </option>*/
/* 			<option>FOOD AND BEVERAGES </option>*/
/* 			<option>HEALTH & BEAUTY </option>*/
/* 			<option>SPORTS & LEISURE </option>*/
/* 			<option>BOOKS & ENTERTAINMENTS </option>*/
/* 		</select> */
/* 		  <button type="submit" id="submitButton" class="btn btn-primary">Go</button>*/
/*     </form>*/
/*     <ul id="topMenu" class="nav pull-right">*/
/* 	 <li class=""><a href="special_offer.html">Specials Offer</a></li>*/
/* 	 <li class=""><a href="normal.html">Delivery</a></li>*/
/* 	 <li class=""><a href="contact.html">Contact</a></li>*/
/* 	 <li class="">*/
/* 	 <a href="#login" role="button" data-toggle="modal" style="padding-right:0"><span class="btn btn-large btn-success">Login</span></a>*/
/* 	<div id="login" class="modal hide fade in" tabindex="-1" role="dialog" aria-labelledby="login" aria-hidden="false" >*/
/* 		  <div class="modal-header">*/
/* 			<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>*/
/* 			<h3>Login Block</h3>*/
/* 		  </div>*/
/* 		  <div class="modal-body">*/
/* 			<form class="form-horizontal loginFrm">*/
/* 			  <div class="control-group">								*/
/* 				<input type="text" id="inputEmail" placeholder="Email">*/
/* 			  </div>*/
/* 			  <div class="control-group">*/
/* 				<input type="password" id="inputPassword" placeholder="Password">*/
/* 			  </div>*/
/* 			  <div class="control-group">*/
/* 				<label class="checkbox">*/
/* 				<input type="checkbox"> Remember me*/
/* 				</label>*/
/* 			  </div>*/
/* 			</form>		*/
/* 			<button type="submit" class="btn btn-success">Sign in</button>*/
/* 			<button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>*/
/* 		  </div>*/
/* 	</div>*/
/* 	</li>*/
/*     </ul>*/
/*   </div>*/
/* </div>*/
/* </div>*/
/* </div>*/
/* <!-- Header End====================================================================== -->*/
/* <div id="carouselBlk">*/
/* 	<div id="myCarousel" class="carousel slide">*/
/* 		<div class="carousel-inner">*/
/* 		  <div class="item active">*/
/* 		  <div class="container">*/
/* 			<a href="register.html"><img style="width:100%" src="themes/images/carousel/1.png" alt="special offers"/></a>*/
/* 			<div class="carousel-caption">*/
/* 				  <h4>Second Thumbnail label</h4>*/
/* 				  <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>*/
/* 				</div>*/
/* 		  </div>*/
/* 		  </div>*/
/* 		  <div class="item">*/
/* 		  <div class="container">*/
/* 			<a href="register.html"><img style="width:100%" src="themes/images/carousel/2.png" alt=""/></a>*/
/* 				<div class="carousel-caption">*/
/* 				  <h4>Second Thumbnail label</h4>*/
/* 				  <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>*/
/* 				</div>*/
/* 		  </div>*/
/* 		  </div>*/
/* 		  <div class="item">*/
/* 		  <div class="container">*/
/* 			<a href="register.html"><img src="themes/images/carousel/3.png" alt=""/></a>*/
/* 			<div class="carousel-caption">*/
/* 				  <h4>Second Thumbnail label</h4>*/
/* 				  <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>*/
/* 				</div>*/
/* 			*/
/* 		  </div>*/
/* 		  </div>*/
/* 		   <div class="item">*/
/* 		   <div class="container">*/
/* 			<a href="register.html"><img src="themes/images/carousel/4.png" alt=""/></a>*/
/* 			<div class="carousel-caption">*/
/* 				  <h4>Second Thumbnail label</h4>*/
/* 				  <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>*/
/* 				</div>*/
/* 		   */
/* 		  </div>*/
/* 		  </div>*/
/* 		   <div class="item">*/
/* 		   <div class="container">*/
/* 			<a href="register.html"><img src="themes/images/carousel/5.png" alt=""/></a>*/
/* 			<div class="carousel-caption">*/
/* 				  <h4>Second Thumbnail label</h4>*/
/* 				  <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>*/
/* 			</div>*/
/* 		  </div>*/
/* 		  </div>*/
/* 		   <div class="item">*/
/* 		   <div class="container">*/
/* 			<a href="register.html"><img src="themes/images/carousel/6.png" alt=""/></a>*/
/* 			<div class="carousel-caption">*/
/* 				  <h4>Second Thumbnail label</h4>*/
/* 				  <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>*/
/* 				</div>*/
/* 		  </div>*/
/* 		  </div>*/
/* 		</div>*/
/* 		<a class="left carousel-control" href="#myCarousel" data-slide="prev">&lsaquo;</a>*/
/* 		<a class="right carousel-control" href="#myCarousel" data-slide="next">&rsaquo;</a>*/
/* 	  </div> */
/* </div>*/
/* */
/* */
/* */
/* */
/* */
/* <div id="mainBody">*/
/* 	<div class="container">*/
/* 	<div class="row">*/
/* <!-- Sidebar ================================================== -->*/
/* 	<div id="sidebar" class="span3">*/
/* 		<div class="well well-small"><a id="myCart" href="product_summary.html"><img src="themes/images/ico-cart.png" alt="cart">3 Items in your cart  <span class="badge badge-warning pull-right">$155.00</span></a></div>*/
/* 		<ul id="sideManu" class="nav nav-tabs nav-stacked">*/
/* 			<li class="subMenu open"><a> ELECTRONICS [230]</a>*/
/* 				<ul>*/
/* 				<li><a class="active" href="products.html"><i class="icon-chevron-right"></i>Cameras (100) </a></li>*/
/* 				<li><a href="products.html"><i class="icon-chevron-right"></i>Computers, Tablets & laptop (30)</a></li>*/
/* 				<li><a href="products.html"><i class="icon-chevron-right"></i>Mobile Phone (80)</a></li>*/
/* 				<li><a href="products.html"><i class="icon-chevron-right"></i>Sound & Vision (15)</a></li>*/
/* 				</ul>*/
/* 			</li>*/
/* 			<li class="subMenu"><a> CLOTHES [840] </a>*/
/* 			<ul style="display:none">*/
/* 				<li><a href="products.html"><i class="icon-chevron-right"></i>Women's Clothing (45)</a></li>*/
/* 				<li><a href="products.html"><i class="icon-chevron-right"></i>Women's Shoes (8)</a></li>												*/
/* 				<li><a href="products.html"><i class="icon-chevron-right"></i>Women's Hand Bags (5)</a></li>	*/
/* 				<li><a href="products.html"><i class="icon-chevron-right"></i>Men's Clothings  (45)</a></li>*/
/* 				<li><a href="products.html"><i class="icon-chevron-right"></i>Men's Shoes (6)</a></li>												*/
/* 				<li><a href="products.html"><i class="icon-chevron-right"></i>Kids Clothing (5)</a></li>												*/
/* 				<li><a href="products.html"><i class="icon-chevron-right"></i>Kids Shoes (3)</a></li>												*/
/* 			</ul>*/
/* 			</li>*/
/* 			<li class="subMenu"><a>FOOD AND BEVERAGES [1000]</a>*/
/* 				<ul style="display:none">*/
/* 				<li><a href="products.html"><i class="icon-chevron-right"></i>Angoves  (35)</a></li>*/
/* 				<li><a href="products.html"><i class="icon-chevron-right"></i>Bouchard Aine & Fils (8)</a></li>												*/
/* 				<li><a href="products.html"><i class="icon-chevron-right"></i>French Rabbit (5)</a></li>	*/
/* 				<li><a href="products.html"><i class="icon-chevron-right"></i>Louis Bernard  (45)</a></li>*/
/* 				<li><a href="products.html"><i class="icon-chevron-right"></i>BIB Wine (Bag in Box) (8)</a></li>												*/
/* 				<li><a href="products.html"><i class="icon-chevron-right"></i>Other Liquors & Wine (5)</a></li>												*/
/* 				<li><a href="products.html"><i class="icon-chevron-right"></i>Garden (3)</a></li>												*/
/* 				<li><a href="products.html"><i class="icon-chevron-right"></i>Khao Shong (11)</a></li>												*/
/* 			</ul>*/
/* 			</li>*/
/* 			<li><a href="products.html">HEALTH & BEAUTY [18]</a></li>*/
/* 			<li><a href="products.html">SPORTS & LEISURE [58]</a></li>*/
/* 			<li><a href="products.html">BOOKS & ENTERTAINMENTS [14]</a></li>*/
/* 		</ul>*/
/* 		<br/>*/
/* 		  <div class="thumbnail">*/
/* 			<img src="themes/images/products/panasonic.jpg" alt="Bootshop panasonoc New camera"/>*/
/* 			<div class="caption">*/
/* 			  <h5>Panasonic</h5>*/
/* 				<h4 style="text-align:center"><a class="btn" href="product_details.html"> <i class="icon-zoom-in"></i></a> <a class="btn" href="#">Add to <i class="icon-shopping-cart"></i></a> <a class="btn btn-primary" href="#">$222.00</a></h4>*/
/* 			</div>*/
/* 		  </div><br/>*/
/* 			<div class="thumbnail">*/
/* 				<img src="themes/images/products/kindle.png" title="Bootshop New Kindel" alt="Bootshop Kindel">*/
/* 				<div class="caption">*/
/* 				  <h5>Kindle</h5>*/
/* 				    <h4 style="text-align:center"><a class="btn" href="product_details.html"> <i class="icon-zoom-in"></i></a> <a class="btn" href="#">Add to <i class="icon-shopping-cart"></i></a> <a class="btn btn-primary" href="#">$222.00</a></h4>*/
/* 				</div>*/
/* 			  </div><br/>*/
/* 			<div class="thumbnail">*/
/* 				<img src="themes/images/payment_methods.png" title="Bootshop Payment Methods" alt="Payments Methods">*/
/* 				<div class="caption">*/
/* 				  <h5>Payment Methods</h5>*/
/* 				</div>*/
/* 			  </div>*/
/* 	</div>*/
/* <!-- Sidebar end=============================================== -->*/
/* 	<div class="span9">*/
/*     <ul class="breadcrumb">*/
/* 		<li><a href="index.html">Home</a> <span class="divider">/</span></li>*/
/* 		<li class="active">Products Compairsition</li>*/
/*     </ul>*/
/* 	<h3> Products Compairsition <small class="pull-right"> 2 products are compaired </small></h3>	*/
/* 	<hr class="soft"/>*/
/* */
/* 	<table id="compairTbl" class="table table-bordered">*/
/*               <thead>*/
/*                 <tr>*/
/*                   <th>Features</th>*/
/*                   <th>Product1 name here </th>*/
/*                   <th>Product2 name here</th>*/
/*                 </tr>*/
/*               </thead>*/
/*               <tbody>*/
/*                 <tr>*/
/*                   <td>&nbsp;</td>*/
/*                   <td style="text-align:center">*/
/* 					<p class="justify">*/
/* 						Nowadays the lingerie industry is one of the most successful business spheres.*/
/* 						We always stay in touch with the latest fashion tendencies - that is why our */
/* 						goods are so popular and we have a great number of faithful customers all over the country.*/
/* 					</p>*/
/* 				<img src="themes/images/products/1.jpg" alt=""/>*/
/* 				<form class="form-horizontal qtyFrm">*/
/* 				<h3> $222.00</h3><br/>*/
/* 				 <a href="product_details.html" class="btn btn-large btn-primary"> Add to <i class=" icon-shopping-cart"></i></a>*/
/* 				 <a href="product_details.html" class="btn btn-large"><i class="icon-zoom-in"></i></a>*/
/* 				</form>*/
/* 				</td>*/
/*                   <td>*/
/* 				  <p class="justify">*/
/* 					Nowadays the lingerie industry is one of the most successful business spheres.*/
/* 					We always stay in touch with the latest fashion tendencies - that is why our */
/* 					goods are so popular and we have a great number of faithful customers all over the country.*/
/* 				</p>*/
/* 				<img src="themes/images/products/3.jpg" alt=""/>*/
/* 				*/
/* 				<form class="form-horizontal qtyFrm">*/
/* 				<h3> $190.00</h3>*/
/* 				<br/>*/
/* 				 <a href="product_details.html" class="btn btn-large btn-primary"> Add to <i class=" icon-shopping-cart"></i></a>*/
/* 				 <a href="product_details.html" class="btn btn-large"><i class="icon-zoom-in"></i></a>*/
/* 				</form>*/
/* 				  </td>*/
/*                 </tr>*/
/*                 <tr>*/
/*                   <td>Height</td>*/
/*                   <td>2"</td>*/
/*                   <td>2"</td>*/
/*                 </tr>*/
/*                 <tr>*/
/*                   <td>Deepth</td>*/
/*                   <td>5"</td>*/
/*                   <td>5"</td>*/
/*                 </tr>*/
/* 				<tr>*/
/*                   <td>Dimension</td>*/
/*                   <td>--</td>*/
/*                   <td>--</td>*/
/*                 </tr>*/
/* 				<tr>*/
/*                   <td>Width</td>*/
/*                   <td>6.5"</td>*/
/*                   <td>6.5"</td>*/
/*                 </tr>*/
/* 				<tr>*/
/*                   <td>Weight</td>*/
/*                   <td>0.5kg</td>*/
/*                   <td>0.5kg</td>*/
/*                 </tr>*/
/*               </tbody>*/
/*             </table>		*/
/* 	<a href="products.html" class="btn btn-large pull-right">Back Products Page</a>*/
/* 	*/
/* 	*/
/* </div>*/
/* </div>*/
/* </div>*/
/* </div>*/
/* <!-- MainBody End ============================= -->*/
/* <!-- Footer ================================================================== -->*/
/* 	<div  id="footerSection">*/
/* 	<div class="container">*/
/* 		<div class="row">*/
/* 			<div class="span3">*/
/* 				<h5>ACCOUNT</h5>*/
/* 				<a href="login.html">YOUR ACCOUNT</a>*/
/* 				<a href="login.html">PERSONAL INFORMATION</a> */
/* 				<a href="login.html">ADDRESSES</a> */
/* 				<a href="login.html">DISCOUNT</a>  */
/* 				<a href="login.html">ORDER HISTORY</a>*/
/* 			 </div>*/
/* 			<div class="span3">*/
/* 				<h5>INFORMATION</h5>*/
/* 				<a href="contact.html">CONTACT</a>  */
/* 				<a href="register.html">REGISTRATION</a>  */
/* 				<a href="legal_notice.html">LEGAL NOTICE</a>  */
/* 				<a href="tac.html">TERMS AND CONDITIONS</a> */
/* 				<a href="faq.html">FAQ</a>*/
/* 			 </div>*/
/* 			<div class="span3">*/
/* 				<h5>OUR OFFERS</h5>*/
/* 				<a href="#">NEW PRODUCTS</a> */
/* 				<a href="#">TOP SELLERS</a>  */
/* 				<a href="special_offer.html">SPECIAL OFFERS</a>  */
/* 				<a href="#">MANUFACTURERS</a> */
/* 				<a href="#">SUPPLIERS</a> */
/* 			 </div>*/
/* 			<div id="socialMedia" class="span3 pull-right">*/
/* 				<h5>SOCIAL MEDIA </h5>*/
/* 				<a href="#"><img width="60" height="60" src="themes/images/facebook.png" title="facebook" alt="facebook"/></a>*/
/* 				<a href="#"><img width="60" height="60" src="themes/images/twitter.png" title="twitter" alt="twitter"/></a>*/
/* 				<a href="#"><img width="60" height="60" src="themes/images/youtube.png" title="youtube" alt="youtube"/></a>*/
/* 			 </div> */
/* 		 </div>*/
/* 		<p class="pull-right">&copy; Bootshop</p>*/
/* 	</div><!-- Container End -->*/
/* 	</div>*/
/* <!-- Placed at the end of the document so the pages load faster ============================================= -->*/
/* 	<script src="themes/js/jquery.js" type="text/javascript"></script>*/
/* 	<script src="themes/js/bootstrap.min.js" type="text/javascript"></script>*/
/* 	<script src="themes/js/google-code-prettify/prettify.js"></script>*/
/* 	*/
/* 	<script src="themes/js/bootshop.js"></script>*/
/*     <script src="themes/js/jquery.lightbox-0.5.js"></script>*/
/* 	*/
/* 	<!-- Themes switcher section ============================================================================================= -->*/
/* <div id="secectionBox">*/
/* <link rel="stylesheet" href="themes/switch/themeswitch.css" type="text/css" media="screen" />*/
/* <script src="themes/switch/theamswitcher.js" type="text/javascript" charset="utf-8"></script>*/
/* 	<div id="themeContainer">*/
/* 	<div id="hideme" class="themeTitle">Style Selector</div>*/
/* 	<div class="themeName">Oregional Skin</div>*/
/* 	<div class="images style">*/
/* 	<a href="themes/css/#" name="bootshop"><img src="themes/switch/images/clr/bootshop.png" alt="bootstrap business templates" class="active"></a>*/
/* 	<a href="themes/css/#" name="businessltd"><img src="themes/switch/images/clr/businessltd.png" alt="bootstrap business templates" class="active"></a>*/
/* 	</div>*/
/* 	<div class="themeName">Bootswatch Skins (11)</div>*/
/* 	<div class="images style">*/
/* 		<a href="themes/css/#" name="amelia" title="Amelia"><img src="themes/switch/images/clr/amelia.png" alt="bootstrap business templates"></a>*/
/* 		<a href="themes/css/#" name="spruce" title="Spruce"><img src="themes/switch/images/clr/spruce.png" alt="bootstrap business templates" ></a>*/
/* 		<a href="themes/css/#" name="superhero" title="Superhero"><img src="themes/switch/images/clr/superhero.png" alt="bootstrap business templates"></a>*/
/* 		<a href="themes/css/#" name="cyborg"><img src="themes/switch/images/clr/cyborg.png" alt="bootstrap business templates"></a>*/
/* 		<a href="themes/css/#" name="cerulean"><img src="themes/switch/images/clr/cerulean.png" alt="bootstrap business templates"></a>*/
/* 		<a href="themes/css/#" name="journal"><img src="themes/switch/images/clr/journal.png" alt="bootstrap business templates"></a>*/
/* 		<a href="themes/css/#" name="readable"><img src="themes/switch/images/clr/readable.png" alt="bootstrap business templates"></a>	*/
/* 		<a href="themes/css/#" name="simplex"><img src="themes/switch/images/clr/simplex.png" alt="bootstrap business templates"></a>*/
/* 		<a href="themes/css/#" name="slate"><img src="themes/switch/images/clr/slate.png" alt="bootstrap business templates"></a>*/
/* 		<a href="themes/css/#" name="spacelab"><img src="themes/switch/images/clr/spacelab.png" alt="bootstrap business templates"></a>*/
/* 		<a href="themes/css/#" name="united"><img src="themes/switch/images/clr/united.png" alt="bootstrap business templates"></a>*/
/* 		<p style="margin:0;line-height:normal;margin-left:-10px;display:none;"><small>These are just examples and you can build your own color scheme in the backend.</small></p>*/
/* 	</div>*/
/* 	<div class="themeName">Background Patterns </div>*/
/* 	<div class="images patterns">*/
/* 		<a href="themes/css/#" name="pattern1"><img src="themes/switch/images/pattern/pattern1.png" alt="bootstrap business templates" class="active"></a>*/
/* 		<a href="themes/css/#" name="pattern2"><img src="themes/switch/images/pattern/pattern2.png" alt="bootstrap business templates"></a>*/
/* 		<a href="themes/css/#" name="pattern3"><img src="themes/switch/images/pattern/pattern3.png" alt="bootstrap business templates"></a>*/
/* 		<a href="themes/css/#" name="pattern4"><img src="themes/switch/images/pattern/pattern4.png" alt="bootstrap business templates"></a>*/
/* 		<a href="themes/css/#" name="pattern5"><img src="themes/switch/images/pattern/pattern5.png" alt="bootstrap business templates"></a>*/
/* 		<a href="themes/css/#" name="pattern6"><img src="themes/switch/images/pattern/pattern6.png" alt="bootstrap business templates"></a>*/
/* 		<a href="themes/css/#" name="pattern7"><img src="themes/switch/images/pattern/pattern7.png" alt="bootstrap business templates"></a>*/
/* 		<a href="themes/css/#" name="pattern8"><img src="themes/switch/images/pattern/pattern8.png" alt="bootstrap business templates"></a>*/
/* 		<a href="themes/css/#" name="pattern9"><img src="themes/switch/images/pattern/pattern9.png" alt="bootstrap business templates"></a>*/
/* 		<a href="themes/css/#" name="pattern10"><img src="themes/switch/images/pattern/pattern10.png" alt="bootstrap business templates"></a>*/
/* 		*/
/* 		<a href="themes/css/#" name="pattern11"><img src="themes/switch/images/pattern/pattern11.png" alt="bootstrap business templates"></a>*/
/* 		<a href="themes/css/#" name="pattern12"><img src="themes/switch/images/pattern/pattern12.png" alt="bootstrap business templates"></a>*/
/* 		<a href="themes/css/#" name="pattern13"><img src="themes/switch/images/pattern/pattern13.png" alt="bootstrap business templates"></a>*/
/* 		<a href="themes/css/#" name="pattern14"><img src="themes/switch/images/pattern/pattern14.png" alt="bootstrap business templates"></a>*/
/* 		<a href="themes/css/#" name="pattern15"><img src="themes/switch/images/pattern/pattern15.png" alt="bootstrap business templates"></a>*/
/* 		*/
/* 		<a href="themes/css/#" name="pattern16"><img src="themes/switch/images/pattern/pattern16.png" alt="bootstrap business templates"></a>*/
/* 		<a href="themes/css/#" name="pattern17"><img src="themes/switch/images/pattern/pattern17.png" alt="bootstrap business templates"></a>*/
/* 		<a href="themes/css/#" name="pattern18"><img src="themes/switch/images/pattern/pattern18.png" alt="bootstrap business templates"></a>*/
/* 		<a href="themes/css/#" name="pattern19"><img src="themes/switch/images/pattern/pattern19.png" alt="bootstrap business templates"></a>*/
/* 		<a href="themes/css/#" name="pattern20"><img src="themes/switch/images/pattern/pattern20.png" alt="bootstrap business templates"></a>*/
/* 		 */
/* 	</div>*/
/* 	</div>*/
/* </div>*/
/* <span id="themesBtn"></span>*/
/* </body>*/
/* </html>*/
