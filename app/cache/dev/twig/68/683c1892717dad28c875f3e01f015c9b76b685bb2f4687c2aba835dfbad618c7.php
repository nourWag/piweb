<?php

/* MyappuserBundle::layoutlogin.html.twig */
class __TwigTemplate_dcb052d776aed751e0238def6d2672c230c1407137dc334d27a8a9566e5280d2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'accueil' => array($this, 'block_accueil'),
            'produit' => array($this, 'block_produit'),
            'statistiques' => array($this, 'block_statistiques'),
            'livraison' => array($this, 'block_livraison'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "
<!DOCTYPE html>
<!--[if IE]><![endif]-->
<!--[if IE 8 ]><html dir=\"ltr\" lang=\"en\" class=\"ie8\"><![endif]-->
<!--[if IE 9 ]><html dir=\"ltr\" lang=\"en\" class=\"ie9\"><![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<html dir=\"ltr\" lang=\"en\">
<!--<![endif]-->
<head>
    <style type=\"text/css\">html,body,map{height: 100%;margin: 0;padding: 0;}</style>
    <script type=\"text/javascript\" src=\"https://maps.googleapis.com/maps/api/js?v=AIzaSyApOyIP4xYghfw5VTdc24lENjbOycrHFp8\"></script>
        
        <script type=\"text/javascript\">
            // When the window has finished loading create our google map below
            google.maps.event.addDomListener(window, 'load', init);
        
            function init() {
                // Basic options for a simple Google Map
                // For more options see: https://developers.google.com/maps/documentation/javascript/reference#MapOptions
                var mapOptions = {
                    // How zoomed in you want the map to start at (always required)
                    zoom: 11,
\t\t\t\t\tscrollwheel: false,

                    // The latitude and longitude to center the map (always required)
                    center: new google.maps.LatLng(36.793203, 10.173082), // Rue de la Feuille dErable, Tunis, Tunisie

                    // How you would like to style the map. 
                    // This is where you would paste any style found on Snazzy Maps.
                    
                };

                // Get the HTML DOM element that will contain your map 
                // We are using a div with id=\"map\" seen below in the <body>
                var mapElement = document.getElementById('map');

                // Create the Google Map using out element and options defined above
                var map = new google.maps.Map(mapElement, mapOptions);
                var marker = new  google.maps.Marker({
                    position:new google.maps.LatLng(36.793203, 10.173082),
                   map:map,
                   title: \"Tunisia Mall\"
                });
            }
        </script>
<meta charset=\"UTF-8\" />
<meta name=\"Tunisia Mall\" content=\"width=device-width, initial-scale=1\">
<title>Tunisia Mall</title>


<meta name=\"Tunisia Mall\" content=\"site web de tunisia mall \" />
<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
<h1 id=\"favicon1\"><a href=\"/\"><link href=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/catalog/FASION1.png"), "html", null, true);
        echo "\" rel=\"icon\" /></a></h1>
<script src=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/catalog/view/javascript/jquery/jquery-2.1.1.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
<link href=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/catalog/view/javascript/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" media=\"screen\" />
<script src=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/catalog/view/javascript/bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
<link href=\"";
        // line 57
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/catalog/view/javascript/font-awesome/css/font-awesome.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
<link href=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("///fonts.googleapis.com/css?family=Open+Sans:400,400i,300,700,600"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
<link href=\"";
        // line 59
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("///fonts.googleapis.com/css?family=Lora:400,700"), "html", null, true);
        echo "\" rel='stylesheet' type='text/css'>

<link rel=\"stylesheet\"  href=";
        // line 61
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/css/catalog/view/theme/theme509/js/fancybox/jquery.fancybox.css"), "html", null, true);
        echo " media=\"screen\" />
<link href=\"";
        // line 62
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/catalog/view/theme/theme509/stylesheet/livesearch.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
<link href=\"";
        // line 63
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/catalog/view/theme/theme509/stylesheet/photoswipe.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
<link href=\"";
        // line 64
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/catalog/view/theme/theme509/js/jquery.bxslider/jquery.bxslider.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
<link href=\"";
        // line 65
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/catalog/view/theme/theme509/stylesheet/stylesheet2.css"), "html", null, true);
        echo " \"rel=\"stylesheet\">
<link href=\"";
        // line 66
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/catalog/view/theme/theme509/stylesheet/superfish.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
<link href=\"";
        // line 67
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/catalog/view/theme/theme509/stylesheet/responsive.css"), "html", null, true);
        echo " \"rel=\"stylesheet\">
<link href=\"";
        // line 68
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/catalog/view/javascript/jquery/owl-carousel/owl.carousel.css"), "html", null, true);
        echo " \"type=\"text/css\" rel=\"stylesheet\" media=\"screen\" />
<link href=\"";
        // line 69
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/catalog/view/javascript/jquery/owl-carousel/owl.transitions.css"), "html", null, true);
        echo " \"type=\"text/css\" rel=\"stylesheet\" media=\"screen\" />
<!--<script src=\"catalog/view/javascript/common.js\" type=\"text/javascript\"></script>-->
<script src=\"";
        // line 71
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/catalog/view/theme/theme509/js/common.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>

<!--caustom script-->
<script src=\"";
        // line 74
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/catalog/view/theme/theme509/js/tm-stick-up.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
<script src=\"";
        // line 75
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/catalog/view/theme/theme509/js/jquery.unveil.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
<script src=\"";
        // line 76
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/catalog/view/theme/theme509/js/jquery.bxslider/jquery.bxslider.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
<script src=\"";
        // line 77
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/catalog/view/theme/theme509/js/fancybox/jquery.fancybox.pack.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 78
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/catalog/view/theme/theme509/js/elavatezoom/jquery.elevatezoom.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
<script src=\"";
        // line 79
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/catalog/view/theme/theme509/js/superfish.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
<!--video script-->
<script src=\"";
        // line 81
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/catalog/view/theme/theme509/js/jquery.vide.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
<script src=\"";
        // line 82
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/catalog/view/theme/theme509/js/jquery.touchSwipe.min.js"), "html", null, true);
        echo " \"type=\"text/javascript\"></script>
<!--Green Sock-->
<script src=\"";
        // line 84
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/catalog/view/theme/theme509/js/greensock/jquery.gsap.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
<script src=\"";
        // line 85
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/catalog/view/theme/theme509/js/greensock/TimelineMax.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
<script src=\"";
        // line 86
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/catalog/view/theme/theme509/js/greensock/TweenMax.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
<script src=\"";
        // line 87
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/catalog/view/theme/theme509/js/greensock/jquery.scrollmagic.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>


<!--photo swipe-->
<script src=\"";
        // line 91
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/catalog/view/theme/theme509/js/photo-swipe/klass.min.js"), "html", null, true);
        echo " \"type=\"text/javascript\"></script>
<script src=\"";
        // line 92
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/catalog/view/theme/theme509/js/photo-swipe/code.photoswipe.jquery-3.0.5.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
<script src=\"";
        // line 93
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/catalog/view/theme/theme509/js/photo-swipe/code.photoswipe-3.0.5.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>



<script src=\"";
        // line 97
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/catalog/view/theme/theme509/js/parallax/cherry-fixed-parallax.js"), "html", null, true);
        echo " \"type=\"text/javascript\"></script>
<script src=\"";
        // line 98
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/catalog/view/theme/theme509/js/parallax/device.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>

<script src=\"";
        // line 100
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/catalog/view/theme/theme509/js/script.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>

<!--caustom script-->
<script src=\"";
        // line 103
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/catalog/view/javascript/jquery/owl-carousel/owl.carousel.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
<script src=\"";
        // line 104
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/catalog/view/theme/default/js/parallax/cherry-fixed-parallax.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
<script src=\"";
        // line 105
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/catalog/view/theme/default/js/parallax/device.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\" type=\"text/javascript\"></script>
</head>
<body class=\"common-home\">
<!-- swipe menu -->
<div class=\"swipe\">
\t<div class=\"swipe-menu\">
\t\t<ul>
\t\t\t
\t\t\t<li><a href=\"http://localhost:8000/template_52891_cw21kXN65RYum715QAIo/theme509/theme509((full))/index.php?route=account/account\" title=\"My Account\"><i class=\"fa fa-user\"></i> <span>My Account</span></a></li>
\t\t\t\t\t\t<li><a href=\"registerAccoun\"><i class=\"fa fa-user\"></i> Register</a></li>
\t\t\t<li><a href=\"http://localhost:8000/template_52891_cw21kXN65RYum715QAIo/theme509/theme509((full))/index.php?route=account/login\"><i class=\"fa fa-lock\"></i>Login</a></li>
\t\t\t\t\t\t<li><a href=\"http://localhost:8000/template_52891_cw21kXN65RYum715QAIo/theme509/theme509((full))/index.php?route=account/wishlist\" id=\"wishlist-total2\" title=\"Wish List (0)\"><i class=\"fa fa-heart\"></i> <span>Wish List (0)</span></a></li>
\t\t\t<li><a href=\"http://localhost:8000/template_52891_cw21kXN65RYum715QAIo/theme509/theme509((full))/index.php?route=checkout/cart\" title=\"Shopping Cart\"><i class=\"fa fa-shopping-cart\"></i> <span>Shopping Cart</span></a></li>
\t\t\t<li><a href=\"http://localhost:8000/template_52891_cw21kXN65RYum715QAIo/theme509/theme509((full))/index.php?route=checkout/checkout\" title=\"Checkout\"><i class=\"fa fa-share\"></i> <span>Checkout</span></a></li>
\t\t</ul>
\t\t\t\t<ul class=\"foot\">
\t\t\t\t\t\t\t\t\t<li><a href=\"http://localhost:8000/template_52891_cw21kXN65RYum715QAIo/theme509/theme509((full))/index.php?route=information/information&amp;information_id=4\">About Us</a></li>
\t\t\t\t\t\t<li><a href=\"http://localhost:8000/template_52891_cw21kXN65RYum715QAIo/theme509/theme509((full))/index.php?route=information/information&amp;information_id=6\">Delivery Information</a></li>
\t\t\t\t\t\t<li><a href=\"http://localhost:8000/template_52891_cw21kXN65RYum715QAIo/theme509/theme509((full))/index.php?route=information/information&amp;information_id=3\">Privacy Policy</a></li>
\t\t\t\t\t\t<li><a href=\"http://localhost:8000/template_52891_cw21kXN65RYum715QAIo/theme509/theme509((full))/index.php?route=information/information&amp;information_id=5\">Terms &amp; Conditions</a></li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t<ul class=\"foot foot-1\">
\t\t\t<li><a href=\"http://localhost:8000/template_52891_cw21kXN65RYum715QAIo/theme509/theme509((full))/index.php?route=information/contact\">Contact Us</a></li>
\t\t\t<li><a href=\"http://localhost:8000/template_52891_cw21kXN65RYum715QAIo/theme509/theme509((full))/index.php?route=account/return/insert\">Returns</a></li>
\t\t\t<li><a href=\"http://localhost:8000/template_52891_cw21kXN65RYum715QAIo/theme509/theme509((full))/index.php?route=information/sitemap\">Site Map</a></li>
\t\t</ul>
\t\t
\t\t<ul class=\"foot foot-2\">
\t\t\t<li><a href=\"http://localhost:8000/template_52891_cw21kXN65RYum715QAIo/theme509/theme509((full))/index.php?route=product/manufacturer\">Brands</a></li>
\t\t\t<li><a href=\"http://localhost:8000/template_52891_cw21kXN65RYum715QAIo/theme509/theme509((full))/index.php?route=account/voucher\">Gift Vouchers</a></li>
\t\t\t<li><a href=\"http://localhost:8000/template_52891_cw21kXN65RYum715QAIo/theme509/theme509((full))/index.php?route=affiliate/account\">Affiliates</a></li>
\t\t\t<li><a href=\"http://localhost:8000/template_52891_cw21kXN65RYum715QAIo/theme509/theme509((full))/index.php?route=product/special\">Specials</a></li>
\t\t</ul>
\t\t<ul class=\"foot foot-3\">
\t\t\t<li><a href=\"http://localhost:8000/template_52891_cw21kXN65RYum715QAIo/theme509/theme509((full))/index.php?route=account/order\">Order History</a></li>
\t\t\t<li><a href=\"http://localhost:8000/template_52891_cw21kXN65RYum715QAIo/theme509/theme509((full))/index.php?route=account/newsletter\">Newsletter</a></li>
\t\t</ul>
\t</div>
</div>
<div id=\"page\">
<div class=\"shadow\"></div>
<div class=\"toprow-1\">
\t<a class=\"swipe-control\" href=\"#\"><i class=\"fa fa-align-justify\"></i></a>
</div>
<div class=\"container\">
\t<nav id=\"top\" class=\"clearfix\">
\t\t<div class=\"box-currency\">
<form action=\"http://localhost:8000/template_52891_cw21kXN65RYum715QAIo/theme509/theme509((full))/index.php?route=common/currency/currency\" method=\"post\" enctype=\"multipart/form-data\" id=\"currency\">
  <div class=\"btn-group\">
\t<button class=\"btn btn-link dropdown-toggle\" data-toggle=\"dropdown\">
\t\t\t\t\t\t\t<strong>\$</strong>
\t\t\t<!--<span class=\"hidden-xs hidden-sm hidden-md\">Currency</span>--> <i class=\"fa fa-caret-down\"></i></button>
\t<ul class=\"dropdown-menu  pull-right\">
\t  \t  \t  <li><button class=\"currency-select btn btn-link btn-block\" type=\"button\" name=\"EUR\">€ Euro</button></li>
\t  \t  \t  \t  <li><button class=\"currency-select btn btn-link btn-block\" type=\"button\" name=\"GBP\">£ Pound Sterling</button></li>
\t  \t  \t  \t  <li><button class=\"currency-select btn btn-link btn-block\" type=\"button\" name=\"USD\">\$ US Dollar</button></li>
\t  \t  \t</ul>
  </div>
  <input type=\"hidden\" name=\"code\" value=\"\" />
  <input type=\"hidden\" name=\"redirect\" value=\"http://localhost:8000/template_52891_cw21kXN65RYum715QAIo/theme509/theme509((full))/index.php?route=common/home\" />
</form>
</div>
\t\t<div class=\"pull-right box-language\">
<form action=\"http://localhost:8000/template_52891_cw21kXN65RYum715QAIo/theme509/theme509((full))/index.php?route=common/language/language\" method=\"post\" enctype=\"multipart/form-data\" id=\"language\">
  <div class=\"btn-group\">
\t<button class=\"btn btn-link dropdown-toggle\" data-toggle=\"dropdown\">
\t\t\t<img src=\"";
        // line 171
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/flags/gb.png"), "html", null, true);
        echo "\" alt=\"English\" title=\"English\">
\ten\t\t\t\t\t\t\t<span class=\"hidden-xs hidden-sm hidden-md\">Language</span> <i class=\"fa fa-caret-down\"></i></button>
\t<ul class=\"dropdown-menu pull-right\">
\t  \t  <li><a href=\"en\"><img src=\"";
        // line 174
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/flags/gb.png"), "html", null, true);
        echo "\" alt=\"English\" title=\"English\" /> English</a></li>
\t  \t  <li><a href=\"de\"><img src=\"";
        // line 175
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/flags/de.png"), "html", null, true);
        echo "\" alt=\"Deutsch\" title=\"Deutsch\" /> Deutsch</a></li>
\t  \t  <li><a href=\"ru\"><img src=\"";
        // line 176
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/flags/ru.png"), "html", null, true);
        echo "\" alt=\"Русский\" title=\"Русский\" /> Русский</a></li>
\t  \t</ul>
  </div>
  <input type=\"hidden\" name=\"code\" value=\"\" />
  <input type=\"hidden\" name=\"redirect\" value=\"http://localhost:8000/template_52891_cw21kXN65RYum715QAIo/theme509/theme509((full))/index.php?route=common/home\" />
</form>
</div>
\t\t<div id=\"top-links\" class=\"nav pull-left\">
\t\t<ul class=\"list-inline\">
\t\t\t<!--<li><a href=\"http://localhost:8000/template_52891_cw21kXN65RYum715QAIo/theme509/theme509((full))/index.php?route=information/contact\"><i class=\"fa fa-phone\"></i></a> <span class=\"hidden-xs hidden-sm hidden-md\">800-2345-6789;</span></li>-->
\t\t\t<li class=\"first\"><a href=\"http://localhost:8000/template_52891_cw21kXN65RYum715QAIo/theme509/theme509((full))/index.php?route=common/home\"><i class=\"fa fa-home\"></i><span class=\"hidden-xs hidden-sm hidden-md\">Home</span></a></li>
\t\t\t<li class=\"dropdown\"><a href=\"http://localhost:8000/template_52891_cw21kXN65RYum715QAIo/theme509/theme509((full))/index.php?route=account/account\" title=\"My Account\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"><i class=\"fa fa-user\"></i> <span class=\"hidden-xs hidden-sm hidden-md\">My Account</span> <span class=\"caret\"></span></a>
\t\t\t<ul class=\"dropdown-menu dropdown-menu-left\">
\t\t\t\t\t\t\t\t<li><a href=\"register\">Register</a></li>
\t\t\t\t<li><a href=\"http://localhost:8000/template_52891_cw21kXN65RYum715QAIo/theme509/theme509((full))/index.php?route=account/login\">Login</a></li>
\t\t\t\t\t\t\t</ul>
\t\t\t</li>
\t\t\t<li><a href=\"http://localhost:8000/template_52891_cw21kXN65RYum715QAIo/theme509/theme509((full))/index.php?route=account/wishlist\" id=\"wishlist-total\" title=\"Wish List (0)\"><i class=\"fa fa-heart\"></i> <span class=\"hidden-xs hidden-sm hidden-md\">Wish List (0)</span></a></li>
\t\t\t<li><a href=\"http://localhost:8000/template_52891_cw21kXN65RYum715QAIo/theme509/theme509((full))/index.php?route=checkout/cart\" title=\"Shopping Cart\"><i class=\"fa fa-shopping-cart\"></i> <span class=\"hidden-xs hidden-sm hidden-md\">Shopping Cart</span></a></li>
\t\t\t<li><a href=\"http://localhost:8000/template_52891_cw21kXN65RYum715QAIo/theme509/theme509((full))/index.php?route=checkout/checkout\" title=\"Checkout\"><i class=\"fa fa-share\"></i> <span class=\"hidden-xs hidden-sm hidden-md\">Checkout</span></a></li>
\t\t</ul>
\t\t</div>
\t</nav>
</div>
<header>
\t<div class=\"container\">
\t\t<div id=\"logo\">
\t\t\t\t\t\t<a href=\"pi2tst_homepage1\"><img src=\"";
        // line 203
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/catalog/logo1.png"), "html", null, true);
        echo "\" title=\"Tunisia Mall\" alt=\"Tunisia Mall\" class=\"img-responsive\" /></a>
\t\t\t\t\t</div>
\t\t<div class=\"checkout_button\">
\t\t\t<a href=\"http://localhost:8000/template_52891_cw21kXN65RYum715QAIo/theme509/theme509((full))/index.php?route=checkout/checkout\" title=\"Checkout\">
\t\t\t\tCheckout\t\t\t</a>
\t\t</div>
\t\t<div class=\"box-cart\">
<div id=\"cart\">
\t<button type=\"button\" data-toggle=\"dropdown\" data-loading-text=\"Loading...\" class=\"dropdown-toggle\">
\t\t<i class=\"fa fa-shopping-cart\"></i> 
\t\t<span id=\"cart-total\">0 item(s) - \$0.00</span>
\t\t<span id=\"cart-total2\">0</span>\t</button>
  <ul class=\"dropdown-menu pull-right\">
\t\t<li>
\t  <p class=\"text-center\">Your shopping cart is empty!</p>
\t</li>
\t  </ul>
</div>
</div>
\t\t<div id=\"search\" class=\"clearfix\">
\t<input type=\"text\" name=\"search\" value=\"\" placeholder=\"Search\"  />
\t<button type=\"button\" class=\"button-search\"><i class=\"fa fa-search\"></i></button>
</div>\t</div>
</header>

<div class=\"container\">
\t<div id=\"menu-gadget\">
\t\t<div id=\"menu-icon\">Categories</div>
\t\t<ul class=\"menu\">
<li>
<a href=\"http://localhost:8000/template_52891_cw21kXN65RYum715QAIo/theme509/theme509((full))/index.php?route=product/category&amp;path=33\">Makeup</a>

</li>
<li>
<a href=\"http://localhost:8000/template_52891_cw21kXN65RYum715QAIo/theme509/theme509((full))/index.php?route=product/category&amp;path=25\">skin care</a>
<ul>
<li>
<a href=\"http://localhost:8000/template_52891_cw21kXN65RYum715QAIo/theme509/theme509((full))/index.php?route=product/category&amp;path=32\">Aenean viverra</a>
</li>
<li>
<a href=\"http://localhost:8000/template_52891_cw21kXN65RYum715QAIo/theme509/theme509((full))/index.php?route=product/category&amp;path=31\">Nullam iaculis</a>
</li>
<li>
<a href=\"http://localhost:8000/template_52891_cw21kXN65RYum715QAIo/theme509/theme509((full))/index.php?route=product/category&amp;path=30\">Phasellus vel</a>
</li>
<li>
<a href=\"http://localhost:8000/template_52891_cw21kXN65RYum715QAIo/theme509/theme509((full))/index.php?route=product/category&amp;path=28\" class=\"parent\">Praesent imperdiet</a><ul>
<li>
<a href=\"http://localhost:8000/template_52891_cw21kXN65RYum715QAIo/theme509/theme509((full))/index.php?route=product/category&amp;path=36\">Aliquam eget</a>
</li>
<li>
<a href=\"http://localhost:8000/template_52891_cw21kXN65RYum715QAIo/theme509/theme509((full))/index.php?route=product/category&amp;path=35\">Lorem ipsum</a>
</li>

</ul>

</li>
<li>
<a href=\"http://localhost:8000/template_52891_cw21kXN65RYum715QAIo/theme509/theme509((full))/index.php?route=product/category&amp;path=29\">Praesent sodales</a>
</li>

</ul>

</li>
<li>
<a href=\"http://localhost:8000/template_52891_cw21kXN65RYum715QAIo/theme509/theme509((full))/index.php?route=product/category&amp;path=20\">lip care</a>

</li>
<li>
<a href=\"http://localhost:8000/template_52891_cw21kXN65RYum715QAIo/theme509/theme509((full))/index.php?route=product/category&amp;path=18\">cleansers</a>

</li>
<li>
<a href=\"http://localhost:8000/template_52891_cw21kXN65RYum715QAIo/theme509/theme509((full))/index.php?route=product/category&amp;path=34\">toners</a>

</li>

</ul>
\t</div>
</div>
<script type=\"text/javascript\">
\tjQuery(document).ready(function(){
\t\tif (\$('body').width() > 990) { 
\t\t\t\$('.nav__primary').tmStickUp({correctionSelector: \$('#menu_stick')});
\t\t};
\t});
</script>
<div id=\"tm_menu\" class=\"nav__primary\">
\t<div class=\"menu-shadow\">
\t\t<div class=\"container\">
\t\t\t<ul class=\"menu\">
<li>
<a href=\"http://localhost:8000/template_52891_cw21kXN65RYum715QAIo/theme509/theme509((full))/index.php?route=product/category&amp;path=33\">Makeup</a>

</li>
<li>
<a href=\"http://localhost:8000/template_52891_cw21kXN65RYum715QAIo/theme509/theme509((full))/index.php?route=product/category&amp;path=25\">skin care</a>
<ul>
<li>
<a href=\"http://localhost:8000/template_52891_cw21kXN65RYum715QAIo/theme509/theme509((full))/index.php?route=product/category&amp;path=32\">Aenean viverra</a>
</li>
<li>
<a href=\"http://localhost:8000/template_52891_cw21kXN65RYum715QAIo/theme509/theme509((full))/index.php?route=product/category&amp;path=31\">Nullam iaculis</a>
</li>
<li>
<a href=\"http://localhost:8000/template_52891_cw21kXN65RYum715QAIo/theme509/theme509((full))/index.php?route=product/category&amp;path=30\">Phasellus vel</a>
</li>
<li>
<a href=\"http://localhost:8000/template_52891_cw21kXN65RYum715QAIo/theme509/theme509((full))/index.php?route=product/category&amp;path=28\" class=\"parent\">Praesent imperdiet</a><ul>
<li>
<a href=\"http://localhost:8000/template_52891_cw21kXN65RYum715QAIo/theme509/theme509((full))/index.php?route=product/category&amp;path=36\">Aliquam eget</a>
</li>
<li>
<a href=\"http://localhost:8000/template_52891_cw21kXN65RYum715QAIo/theme509/theme509((full))/index.php?route=product/category&amp;path=35\">Lorem ipsum</a>
</li>

</ul>

</li>
<li>
<a href=\"http://localhost:8000/template_52891_cw21kXN65RYum715QAIo/theme509/theme509((full))/index.php?route=product/category&amp;path=29\">Praesent sodales</a>
</li>

</ul>

</li>
<li>
<a href=\"http://localhost:8000/template_52891_cw21kXN65RYum715QAIo/theme509/theme509((full))/index.php?route=product/category&amp;path=20\">lip care</a>

</li>
<li>
<a href=\"http://localhost:8000/template_52891_cw21kXN65RYum715QAIo/theme509/theme509((full))/index.php?route=product/category&amp;path=18\">cleansers</a>

</li>
<li>
<a href=\"http://localhost:8000/template_52891_cw21kXN65RYum715QAIo/theme509/theme509((full))/index.php?route=product/category&amp;path=34\">toners</a>

</li>

</ul>
\t\t\t<div class=\"clear\"></div>
\t\t</div>
\t</div>
</div>
 
<div id=\"accueil\">
    ";
        // line 349
        $this->displayBlock('accueil', $context, $blocks);
        // line 351
        echo "</div>
<div id=\"produit\">
    ";
        // line 353
        $this->displayBlock('produit', $context, $blocks);
        // line 355
        echo "</div>
<div id=\"produit\">
    ";
        // line 357
        $this->displayBlock('statistiques', $context, $blocks);
        // line 359
        echo "</div>
<div id=\"produit\">
    ";
        // line 361
        $this->displayBlock('livraison', $context, $blocks);
        // line 363
        echo "</div>










<footer>
  <div class=\"container\">
\t<div class=\"row\">
\t  \t  <div class=\"col-sm-2\">
\t\t<h5>Information</h5>
\t\t<ul class=\"list-unstyled\">
\t\t  \t\t  <li><a href=\"http://localhost:8000/template_52891_cw21kXN65RYum715QAIo/theme509/theme509((full))/index.php?route=information/information&amp;information_id=4\">About Us</a></li>
\t\t  \t\t  <li><a href=\"http://localhost:8000/template_52891_cw21kXN65RYum715QAIo/theme509/theme509((full))/index.php?route=information/information&amp;information_id=6\">Delivery Information</a></li>
\t\t  \t\t  <li><a href=\"http://localhost:8000/template_52891_cw21kXN65RYum715QAIo/theme509/theme509((full))/index.php?route=information/information&amp;information_id=3\">Privacy Policy</a></li>
\t\t  \t\t  <li><a href=\"http://localhost:8000/template_52891_cw21kXN65RYum715QAIo/theme509/theme509((full))/index.php?route=information/information&amp;information_id=5\">Terms &amp; Conditions</a></li>
\t\t  \t\t</ul>
\t  </div>
\t  \t  <div class=\"col-sm-2\">
\t\t<h5>Customer Service</h5>
\t\t<ul class=\"list-unstyled\">
\t\t  <li><a href=\"http://localhost:8000/template_52891_cw21kXN65RYum715QAIo/theme509/theme509((full))/index.php?route=information/contact\">Contact Us</a></li>
\t\t  <li><a href=\"http://localhost:8000/template_52891_cw21kXN65RYum715QAIo/theme509/theme509((full))/index.php?route=account/return/add\">Returns</a></li>
\t\t  <li><a href=\"http://localhost:8000/template_52891_cw21kXN65RYum715QAIo/theme509/theme509((full))/index.php?route=information/sitemap\">Site Map</a></li>
\t\t</ul>
\t  </div>
\t  <div class=\"col-sm-2\">
\t\t<h5>Extras</h5>
\t\t<ul class=\"list-unstyled\">
\t\t  <li><a href=\"http://localhost:8000/template_52891_cw21kXN65RYum715QAIo/theme509/theme509((full))/index.php?route=product/manufacturer\">Brands</a></li>
\t\t  <li><a href=\"http://localhost:8000/template_52891_cw21kXN65RYum715QAIo/theme509/theme509((full))/index.php?route=account/voucher\">Gift Vouchers</a></li>
\t\t  <li><a href=\"http://localhost:8000/template_52891_cw21kXN65RYum715QAIo/theme509/theme509((full))/index.php?route=affiliate/account\">Affiliates</a></li>
\t\t  <li><a href=\"http://localhost:8000/template_52891_cw21kXN65RYum715QAIo/theme509/theme509((full))/index.php?route=product/special\">Specials</a></li>
\t\t</ul>
\t  </div>
\t  <div class=\"col-sm-2\">
\t\t<h5>My Account</h5>
\t\t<ul class=\"list-unstyled\">
\t\t  <li><a href=\"Account\">My Account</a></li>
\t\t  <li><a href=\"http://localhost:8000/template_52891_cw21kXN65RYum715QAIo/theme509/theme509((full))/index.php?route=account/order\">Order History</a></li>
\t\t  <li><a href=\"http://localhost:8000/template_52891_cw21kXN65RYum715QAIo/theme509/theme509((full))/index.php?route=account/wishlist\">Wish List</a></li>
\t\t  <li><a href=\"http://localhost:8000/template_52891_cw21kXN65RYum715QAIo/theme509/theme509((full))/index.php?route=account/newsletter\">Newsletter</a></li>
\t\t</ul>
\t  </div>
\t  <div class=\"col-sm-4\">

\t\t\t
<div class=\"box facebook info\">
\t<div class=\"box-heading\">
\t\t<h3>Facebook Mall</h3>
\t</div>
\t<div class=\"box-content\">
\t\t<div 
\t\tclass=\"fb-like-box\"
\t\tdata-href=\"https://www.facebook.com/Tunisia.Malll/\"
\t\tdata-width=\"370\"
\t\tdata-height=\"190\"
\t\tdata-show-faces=\"1\"
\t\tdata-stream=\"0\"
\t\tdata-header=\"0\"
\t\tdata-colorscheme=\"light\"
\t\tdata-show-border=\"0\"></div>
\t</div>
</div>


<script>
  window.fbAsyncInit = function() {
    FB.init({
            xfbml      : true,
      version    : 'v2.2'
    });
  };

  (function(d, s, id){
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement(s); js.id = id;
     js.src = \"//connect.facebook.net/en_US/sdk.js\";
     fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));
</script>
\t\t\t
\t\t<h5>Contact Us</h5>
\t\t<ul class=\"list-unstyled\">
\t\t  <li>Rue de la Feuille dErable, Tunis, Tunisie lac2</li>
\t\t  <li class=\"phone\">72-000-000;</li>
\t\t  <li class=\"phone\">72-000-000</li>
\t\t  
\t\t</ul>
\t\t<div class=\"socials\">
\t\t\t<a href=\"https://www.facebook.com/Tunisia.Malll/\"><i class=\"fa fa-facebook\"></i></a>
\t\t\t<a href=\"https://www.twitter.com/\"><i class=\"fa fa-twitter\"></i></a>
\t\t\t<a href=\"www.youtube.com/watch?v=3Xn2H2pQuLQ\"><i class=\"fa fa-youtube\"></i></a>
\t\t</div>
\t  </div>
\t</div>
\t
  </div>
\t<div class=\"copyright\">
\t\t<div class=\"container\">
\t\t\t
                    Powered By <a href=\"http://www.opencart.com\">OpenCart</a><br> 
\t\t</div> 
\t</div>
</footer>
<script src=\"";
        // line 474
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/catalog/view/theme/theme509/js/livesearch.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>

</div>



</body></html>";
    }

    // line 349
    public function block_accueil($context, array $blocks = array())
    {
        // line 350
        echo "        ";
    }

    // line 353
    public function block_produit($context, array $blocks = array())
    {
        // line 354
        echo "        ";
    }

    // line 357
    public function block_statistiques($context, array $blocks = array())
    {
        // line 358
        echo "        ";
    }

    // line 361
    public function block_livraison($context, array $blocks = array())
    {
        // line 362
        echo "        ";
    }

    public function getTemplateName()
    {
        return "MyappuserBundle::layoutlogin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  670 => 362,  667 => 361,  663 => 358,  660 => 357,  656 => 354,  653 => 353,  649 => 350,  646 => 349,  635 => 474,  522 => 363,  520 => 361,  516 => 359,  514 => 357,  510 => 355,  508 => 353,  504 => 351,  502 => 349,  353 => 203,  323 => 176,  319 => 175,  315 => 174,  309 => 171,  240 => 105,  236 => 104,  232 => 103,  226 => 100,  221 => 98,  217 => 97,  210 => 93,  206 => 92,  202 => 91,  195 => 87,  191 => 86,  187 => 85,  183 => 84,  178 => 82,  174 => 81,  169 => 79,  165 => 78,  161 => 77,  157 => 76,  153 => 75,  149 => 74,  143 => 71,  138 => 69,  134 => 68,  130 => 67,  126 => 66,  122 => 65,  118 => 64,  114 => 63,  110 => 62,  106 => 61,  101 => 59,  97 => 58,  93 => 57,  89 => 56,  85 => 55,  81 => 54,  77 => 53,  23 => 1,);
    }
}
/* */
/* <!DOCTYPE html>*/
/* <!--[if IE]><![endif]-->*/
/* <!--[if IE 8 ]><html dir="ltr" lang="en" class="ie8"><![endif]-->*/
/* <!--[if IE 9 ]><html dir="ltr" lang="en" class="ie9"><![endif]-->*/
/* <!--[if (gt IE 9)|!(IE)]><!-->*/
/* <html dir="ltr" lang="en">*/
/* <!--<![endif]-->*/
/* <head>*/
/*     <style type="text/css">html,body,map{height: 100%;margin: 0;padding: 0;}</style>*/
/*     <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?v=AIzaSyApOyIP4xYghfw5VTdc24lENjbOycrHFp8"></script>*/
/*         */
/*         <script type="text/javascript">*/
/*             // When the window has finished loading create our google map below*/
/*             google.maps.event.addDomListener(window, 'load', init);*/
/*         */
/*             function init() {*/
/*                 // Basic options for a simple Google Map*/
/*                 // For more options see: https://developers.google.com/maps/documentation/javascript/reference#MapOptions*/
/*                 var mapOptions = {*/
/*                     // How zoomed in you want the map to start at (always required)*/
/*                     zoom: 11,*/
/* 					scrollwheel: false,*/
/* */
/*                     // The latitude and longitude to center the map (always required)*/
/*                     center: new google.maps.LatLng(36.793203, 10.173082), // Rue de la Feuille dErable, Tunis, Tunisie*/
/* */
/*                     // How you would like to style the map. */
/*                     // This is where you would paste any style found on Snazzy Maps.*/
/*                     */
/*                 };*/
/* */
/*                 // Get the HTML DOM element that will contain your map */
/*                 // We are using a div with id="map" seen below in the <body>*/
/*                 var mapElement = document.getElementById('map');*/
/* */
/*                 // Create the Google Map using out element and options defined above*/
/*                 var map = new google.maps.Map(mapElement, mapOptions);*/
/*                 var marker = new  google.maps.Marker({*/
/*                     position:new google.maps.LatLng(36.793203, 10.173082),*/
/*                    map:map,*/
/*                    title: "Tunisia Mall"*/
/*                 });*/
/*             }*/
/*         </script>*/
/* <meta charset="UTF-8" />*/
/* <meta name="Tunisia Mall" content="width=device-width, initial-scale=1">*/
/* <title>Tunisia Mall</title>*/
/* */
/* */
/* <meta name="Tunisia Mall" content="site web de tunisia mall " />*/
/* <meta http-equiv="X-UA-Compatible" content="IE=edge">*/
/* <h1 id="favicon1"><a href="/"><link href="{{ asset('images/catalog/FASION1.png')}}" rel="icon" /></a></h1>*/
/* <script src="{{ asset('css/catalog/view/javascript/jquery/jquery-2.1.1.min.js') }}" type="text/javascript"></script>*/
/* <link href="{{ asset('css/catalog/view/javascript/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" media="screen" />*/
/* <script src="{{ asset('css/catalog/view/javascript/bootstrap/js/bootstrap.min.js') }}" type="text/javascript"></script>*/
/* <link href="{{ asset('css/catalog/view/javascript/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css" />*/
/* <link href="{{ asset('///fonts.googleapis.com/css?family=Open+Sans:400,400i,300,700,600') }}" rel="stylesheet" type="text/css" />*/
/* <link href="{{ asset('///fonts.googleapis.com/css?family=Lora:400,700') }}" rel='stylesheet' type='text/css'>*/
/* */
/* <link rel="stylesheet"  href={{ asset('/css/catalog/view/theme/theme509/js/fancybox/jquery.fancybox.css') }} media="screen" />*/
/* <link href="{{ asset('css/catalog/view/theme/theme509/stylesheet/livesearch.css') }}" rel="stylesheet">*/
/* <link href="{{ asset('css/catalog/view/theme/theme509/stylesheet/photoswipe.css') }}" rel="stylesheet">*/
/* <link href="{{ asset('css/catalog/view/theme/theme509/js/jquery.bxslider/jquery.bxslider.css') }}" rel="stylesheet">*/
/* <link href="{{ asset('css/catalog/view/theme/theme509/stylesheet/stylesheet2.css') }} "rel="stylesheet">*/
/* <link href="{{ asset('css/catalog/view/theme/theme509/stylesheet/superfish.css') }}" rel="stylesheet">*/
/* <link href="{{ asset('css/catalog/view/theme/theme509/stylesheet/responsive.css') }} "rel="stylesheet">*/
/* <link href="{{ asset('css/catalog/view/javascript/jquery/owl-carousel/owl.carousel.css') }} "type="text/css" rel="stylesheet" media="screen" />*/
/* <link href="{{ asset('css/catalog/view/javascript/jquery/owl-carousel/owl.transitions.css') }} "type="text/css" rel="stylesheet" media="screen" />*/
/* <!--<script src="catalog/view/javascript/common.js" type="text/javascript"></script>-->*/
/* <script src="{{ asset('css/catalog/view/theme/theme509/js/common.js') }}" type="text/javascript"></script>*/
/* */
/* <!--caustom script-->*/
/* <script src="{{ asset('css/catalog/view/theme/theme509/js/tm-stick-up.js') }}" type="text/javascript"></script>*/
/* <script src="{{ asset('css/catalog/view/theme/theme509/js/jquery.unveil.js') }}" type="text/javascript"></script>*/
/* <script src="{{ asset('css/catalog/view/theme/theme509/js/jquery.bxslider/jquery.bxslider.js') }}" type="text/javascript"></script>*/
/* <script src="{{ asset('css/catalog/view/theme/theme509/js/fancybox/jquery.fancybox.pack.js') }}"></script>*/
/* <script src="{{ asset('css/catalog/view/theme/theme509/js/elavatezoom/jquery.elevatezoom.js') }}" type="text/javascript"></script>*/
/* <script src="{{ asset('css/catalog/view/theme/theme509/js/superfish.js') }}" type="text/javascript"></script>*/
/* <!--video script-->*/
/* <script src="{{ asset('css/catalog/view/theme/theme509/js/jquery.vide.min.js') }}" type="text/javascript"></script>*/
/* <script src="{{ asset('css/catalog/view/theme/theme509/js/jquery.touchSwipe.min.js') }} "type="text/javascript"></script>*/
/* <!--Green Sock-->*/
/* <script src="{{ asset('css/catalog/view/theme/theme509/js/greensock/jquery.gsap.min.js') }}" type="text/javascript"></script>*/
/* <script src="{{ asset('css/catalog/view/theme/theme509/js/greensock/TimelineMax.min.js') }}" type="text/javascript"></script>*/
/* <script src="{{ asset('css/catalog/view/theme/theme509/js/greensock/TweenMax.min.js') }}" type="text/javascript"></script>*/
/* <script src="{{ asset('css/catalog/view/theme/theme509/js/greensock/jquery.scrollmagic.min.js') }}" type="text/javascript"></script>*/
/* */
/* */
/* <!--photo swipe-->*/
/* <script src="{{ asset('css/catalog/view/theme/theme509/js/photo-swipe/klass.min.js') }} "type="text/javascript"></script>*/
/* <script src="{{ asset('css/catalog/view/theme/theme509/js/photo-swipe/code.photoswipe.jquery-3.0.5.js') }}" type="text/javascript"></script>*/
/* <script src="{{ asset('css/catalog/view/theme/theme509/js/photo-swipe/code.photoswipe-3.0.5.min.js') }}" type="text/javascript"></script>*/
/* */
/* */
/* */
/* <script src="{{ asset('css/catalog/view/theme/theme509/js/parallax/cherry-fixed-parallax.js') }} "type="text/javascript"></script>*/
/* <script src="{{ asset('css/catalog/view/theme/theme509/js/parallax/device.min.js') }}" type="text/javascript"></script>*/
/* */
/* <script src="{{ asset('css/catalog/view/theme/theme509/js/script.js') }}" type="text/javascript"></script>*/
/* */
/* <!--caustom script-->*/
/* <script src="{{ asset('css/catalog/view/javascript/jquery/owl-carousel/owl.carousel.min.js') }}" type="text/javascript"></script>*/
/* <script src="{{ asset('css/catalog/view/theme/default/js/parallax/cherry-fixed-parallax.js') }}" type="text/javascript"></script>*/
/* <script src="{{ asset('css/catalog/view/theme/default/js/parallax/device.min.js') }}" type="text/javascript" type="text/javascript"></script>*/
/* </head>*/
/* <body class="common-home">*/
/* <!-- swipe menu -->*/
/* <div class="swipe">*/
/* 	<div class="swipe-menu">*/
/* 		<ul>*/
/* 			*/
/* 			<li><a href="http://localhost:8000/template_52891_cw21kXN65RYum715QAIo/theme509/theme509((full))/index.php?route=account/account" title="My Account"><i class="fa fa-user"></i> <span>My Account</span></a></li>*/
/* 						<li><a href="registerAccoun"><i class="fa fa-user"></i> Register</a></li>*/
/* 			<li><a href="http://localhost:8000/template_52891_cw21kXN65RYum715QAIo/theme509/theme509((full))/index.php?route=account/login"><i class="fa fa-lock"></i>Login</a></li>*/
/* 						<li><a href="http://localhost:8000/template_52891_cw21kXN65RYum715QAIo/theme509/theme509((full))/index.php?route=account/wishlist" id="wishlist-total2" title="Wish List (0)"><i class="fa fa-heart"></i> <span>Wish List (0)</span></a></li>*/
/* 			<li><a href="http://localhost:8000/template_52891_cw21kXN65RYum715QAIo/theme509/theme509((full))/index.php?route=checkout/cart" title="Shopping Cart"><i class="fa fa-shopping-cart"></i> <span>Shopping Cart</span></a></li>*/
/* 			<li><a href="http://localhost:8000/template_52891_cw21kXN65RYum715QAIo/theme509/theme509((full))/index.php?route=checkout/checkout" title="Checkout"><i class="fa fa-share"></i> <span>Checkout</span></a></li>*/
/* 		</ul>*/
/* 				<ul class="foot">*/
/* 									<li><a href="http://localhost:8000/template_52891_cw21kXN65RYum715QAIo/theme509/theme509((full))/index.php?route=information/information&amp;information_id=4">About Us</a></li>*/
/* 						<li><a href="http://localhost:8000/template_52891_cw21kXN65RYum715QAIo/theme509/theme509((full))/index.php?route=information/information&amp;information_id=6">Delivery Information</a></li>*/
/* 						<li><a href="http://localhost:8000/template_52891_cw21kXN65RYum715QAIo/theme509/theme509((full))/index.php?route=information/information&amp;information_id=3">Privacy Policy</a></li>*/
/* 						<li><a href="http://localhost:8000/template_52891_cw21kXN65RYum715QAIo/theme509/theme509((full))/index.php?route=information/information&amp;information_id=5">Terms &amp; Conditions</a></li>*/
/* 								</ul>*/
/* 				<ul class="foot foot-1">*/
/* 			<li><a href="http://localhost:8000/template_52891_cw21kXN65RYum715QAIo/theme509/theme509((full))/index.php?route=information/contact">Contact Us</a></li>*/
/* 			<li><a href="http://localhost:8000/template_52891_cw21kXN65RYum715QAIo/theme509/theme509((full))/index.php?route=account/return/insert">Returns</a></li>*/
/* 			<li><a href="http://localhost:8000/template_52891_cw21kXN65RYum715QAIo/theme509/theme509((full))/index.php?route=information/sitemap">Site Map</a></li>*/
/* 		</ul>*/
/* 		*/
/* 		<ul class="foot foot-2">*/
/* 			<li><a href="http://localhost:8000/template_52891_cw21kXN65RYum715QAIo/theme509/theme509((full))/index.php?route=product/manufacturer">Brands</a></li>*/
/* 			<li><a href="http://localhost:8000/template_52891_cw21kXN65RYum715QAIo/theme509/theme509((full))/index.php?route=account/voucher">Gift Vouchers</a></li>*/
/* 			<li><a href="http://localhost:8000/template_52891_cw21kXN65RYum715QAIo/theme509/theme509((full))/index.php?route=affiliate/account">Affiliates</a></li>*/
/* 			<li><a href="http://localhost:8000/template_52891_cw21kXN65RYum715QAIo/theme509/theme509((full))/index.php?route=product/special">Specials</a></li>*/
/* 		</ul>*/
/* 		<ul class="foot foot-3">*/
/* 			<li><a href="http://localhost:8000/template_52891_cw21kXN65RYum715QAIo/theme509/theme509((full))/index.php?route=account/order">Order History</a></li>*/
/* 			<li><a href="http://localhost:8000/template_52891_cw21kXN65RYum715QAIo/theme509/theme509((full))/index.php?route=account/newsletter">Newsletter</a></li>*/
/* 		</ul>*/
/* 	</div>*/
/* </div>*/
/* <div id="page">*/
/* <div class="shadow"></div>*/
/* <div class="toprow-1">*/
/* 	<a class="swipe-control" href="#"><i class="fa fa-align-justify"></i></a>*/
/* </div>*/
/* <div class="container">*/
/* 	<nav id="top" class="clearfix">*/
/* 		<div class="box-currency">*/
/* <form action="http://localhost:8000/template_52891_cw21kXN65RYum715QAIo/theme509/theme509((full))/index.php?route=common/currency/currency" method="post" enctype="multipart/form-data" id="currency">*/
/*   <div class="btn-group">*/
/* 	<button class="btn btn-link dropdown-toggle" data-toggle="dropdown">*/
/* 							<strong>$</strong>*/
/* 			<!--<span class="hidden-xs hidden-sm hidden-md">Currency</span>--> <i class="fa fa-caret-down"></i></button>*/
/* 	<ul class="dropdown-menu  pull-right">*/
/* 	  	  	  <li><button class="currency-select btn btn-link btn-block" type="button" name="EUR">€ Euro</button></li>*/
/* 	  	  	  	  <li><button class="currency-select btn btn-link btn-block" type="button" name="GBP">£ Pound Sterling</button></li>*/
/* 	  	  	  	  <li><button class="currency-select btn btn-link btn-block" type="button" name="USD">$ US Dollar</button></li>*/
/* 	  	  	</ul>*/
/*   </div>*/
/*   <input type="hidden" name="code" value="" />*/
/*   <input type="hidden" name="redirect" value="http://localhost:8000/template_52891_cw21kXN65RYum715QAIo/theme509/theme509((full))/index.php?route=common/home" />*/
/* </form>*/
/* </div>*/
/* 		<div class="pull-right box-language">*/
/* <form action="http://localhost:8000/template_52891_cw21kXN65RYum715QAIo/theme509/theme509((full))/index.php?route=common/language/language" method="post" enctype="multipart/form-data" id="language">*/
/*   <div class="btn-group">*/
/* 	<button class="btn btn-link dropdown-toggle" data-toggle="dropdown">*/
/* 			<img src="{{ asset('images/flags/gb.png') }}" alt="English" title="English">*/
/* 	en							<span class="hidden-xs hidden-sm hidden-md">Language</span> <i class="fa fa-caret-down"></i></button>*/
/* 	<ul class="dropdown-menu pull-right">*/
/* 	  	  <li><a href="en"><img src="{{ asset('images/flags/gb.png') }}" alt="English" title="English" /> English</a></li>*/
/* 	  	  <li><a href="de"><img src="{{ asset('images/flags/de.png') }}" alt="Deutsch" title="Deutsch" /> Deutsch</a></li>*/
/* 	  	  <li><a href="ru"><img src="{{ asset('images/flags/ru.png') }}" alt="Русский" title="Русский" /> Русский</a></li>*/
/* 	  	</ul>*/
/*   </div>*/
/*   <input type="hidden" name="code" value="" />*/
/*   <input type="hidden" name="redirect" value="http://localhost:8000/template_52891_cw21kXN65RYum715QAIo/theme509/theme509((full))/index.php?route=common/home" />*/
/* </form>*/
/* </div>*/
/* 		<div id="top-links" class="nav pull-left">*/
/* 		<ul class="list-inline">*/
/* 			<!--<li><a href="http://localhost:8000/template_52891_cw21kXN65RYum715QAIo/theme509/theme509((full))/index.php?route=information/contact"><i class="fa fa-phone"></i></a> <span class="hidden-xs hidden-sm hidden-md">800-2345-6789;</span></li>-->*/
/* 			<li class="first"><a href="http://localhost:8000/template_52891_cw21kXN65RYum715QAIo/theme509/theme509((full))/index.php?route=common/home"><i class="fa fa-home"></i><span class="hidden-xs hidden-sm hidden-md">Home</span></a></li>*/
/* 			<li class="dropdown"><a href="http://localhost:8000/template_52891_cw21kXN65RYum715QAIo/theme509/theme509((full))/index.php?route=account/account" title="My Account" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> <span class="hidden-xs hidden-sm hidden-md">My Account</span> <span class="caret"></span></a>*/
/* 			<ul class="dropdown-menu dropdown-menu-left">*/
/* 								<li><a href="register">Register</a></li>*/
/* 				<li><a href="http://localhost:8000/template_52891_cw21kXN65RYum715QAIo/theme509/theme509((full))/index.php?route=account/login">Login</a></li>*/
/* 							</ul>*/
/* 			</li>*/
/* 			<li><a href="http://localhost:8000/template_52891_cw21kXN65RYum715QAIo/theme509/theme509((full))/index.php?route=account/wishlist" id="wishlist-total" title="Wish List (0)"><i class="fa fa-heart"></i> <span class="hidden-xs hidden-sm hidden-md">Wish List (0)</span></a></li>*/
/* 			<li><a href="http://localhost:8000/template_52891_cw21kXN65RYum715QAIo/theme509/theme509((full))/index.php?route=checkout/cart" title="Shopping Cart"><i class="fa fa-shopping-cart"></i> <span class="hidden-xs hidden-sm hidden-md">Shopping Cart</span></a></li>*/
/* 			<li><a href="http://localhost:8000/template_52891_cw21kXN65RYum715QAIo/theme509/theme509((full))/index.php?route=checkout/checkout" title="Checkout"><i class="fa fa-share"></i> <span class="hidden-xs hidden-sm hidden-md">Checkout</span></a></li>*/
/* 		</ul>*/
/* 		</div>*/
/* 	</nav>*/
/* </div>*/
/* <header>*/
/* 	<div class="container">*/
/* 		<div id="logo">*/
/* 						<a href="pi2tst_homepage1"><img src="{{ asset('images/catalog/logo1.png') }}" title="Tunisia Mall" alt="Tunisia Mall" class="img-responsive" /></a>*/
/* 					</div>*/
/* 		<div class="checkout_button">*/
/* 			<a href="http://localhost:8000/template_52891_cw21kXN65RYum715QAIo/theme509/theme509((full))/index.php?route=checkout/checkout" title="Checkout">*/
/* 				Checkout			</a>*/
/* 		</div>*/
/* 		<div class="box-cart">*/
/* <div id="cart">*/
/* 	<button type="button" data-toggle="dropdown" data-loading-text="Loading..." class="dropdown-toggle">*/
/* 		<i class="fa fa-shopping-cart"></i> */
/* 		<span id="cart-total">0 item(s) - $0.00</span>*/
/* 		<span id="cart-total2">0</span>	</button>*/
/*   <ul class="dropdown-menu pull-right">*/
/* 		<li>*/
/* 	  <p class="text-center">Your shopping cart is empty!</p>*/
/* 	</li>*/
/* 	  </ul>*/
/* </div>*/
/* </div>*/
/* 		<div id="search" class="clearfix">*/
/* 	<input type="text" name="search" value="" placeholder="Search"  />*/
/* 	<button type="button" class="button-search"><i class="fa fa-search"></i></button>*/
/* </div>	</div>*/
/* </header>*/
/* */
/* <div class="container">*/
/* 	<div id="menu-gadget">*/
/* 		<div id="menu-icon">Categories</div>*/
/* 		<ul class="menu">*/
/* <li>*/
/* <a href="http://localhost:8000/template_52891_cw21kXN65RYum715QAIo/theme509/theme509((full))/index.php?route=product/category&amp;path=33">Makeup</a>*/
/* */
/* </li>*/
/* <li>*/
/* <a href="http://localhost:8000/template_52891_cw21kXN65RYum715QAIo/theme509/theme509((full))/index.php?route=product/category&amp;path=25">skin care</a>*/
/* <ul>*/
/* <li>*/
/* <a href="http://localhost:8000/template_52891_cw21kXN65RYum715QAIo/theme509/theme509((full))/index.php?route=product/category&amp;path=32">Aenean viverra</a>*/
/* </li>*/
/* <li>*/
/* <a href="http://localhost:8000/template_52891_cw21kXN65RYum715QAIo/theme509/theme509((full))/index.php?route=product/category&amp;path=31">Nullam iaculis</a>*/
/* </li>*/
/* <li>*/
/* <a href="http://localhost:8000/template_52891_cw21kXN65RYum715QAIo/theme509/theme509((full))/index.php?route=product/category&amp;path=30">Phasellus vel</a>*/
/* </li>*/
/* <li>*/
/* <a href="http://localhost:8000/template_52891_cw21kXN65RYum715QAIo/theme509/theme509((full))/index.php?route=product/category&amp;path=28" class="parent">Praesent imperdiet</a><ul>*/
/* <li>*/
/* <a href="http://localhost:8000/template_52891_cw21kXN65RYum715QAIo/theme509/theme509((full))/index.php?route=product/category&amp;path=36">Aliquam eget</a>*/
/* </li>*/
/* <li>*/
/* <a href="http://localhost:8000/template_52891_cw21kXN65RYum715QAIo/theme509/theme509((full))/index.php?route=product/category&amp;path=35">Lorem ipsum</a>*/
/* </li>*/
/* */
/* </ul>*/
/* */
/* </li>*/
/* <li>*/
/* <a href="http://localhost:8000/template_52891_cw21kXN65RYum715QAIo/theme509/theme509((full))/index.php?route=product/category&amp;path=29">Praesent sodales</a>*/
/* </li>*/
/* */
/* </ul>*/
/* */
/* </li>*/
/* <li>*/
/* <a href="http://localhost:8000/template_52891_cw21kXN65RYum715QAIo/theme509/theme509((full))/index.php?route=product/category&amp;path=20">lip care</a>*/
/* */
/* </li>*/
/* <li>*/
/* <a href="http://localhost:8000/template_52891_cw21kXN65RYum715QAIo/theme509/theme509((full))/index.php?route=product/category&amp;path=18">cleansers</a>*/
/* */
/* </li>*/
/* <li>*/
/* <a href="http://localhost:8000/template_52891_cw21kXN65RYum715QAIo/theme509/theme509((full))/index.php?route=product/category&amp;path=34">toners</a>*/
/* */
/* </li>*/
/* */
/* </ul>*/
/* 	</div>*/
/* </div>*/
/* <script type="text/javascript">*/
/* 	jQuery(document).ready(function(){*/
/* 		if ($('body').width() > 990) { */
/* 			$('.nav__primary').tmStickUp({correctionSelector: $('#menu_stick')});*/
/* 		};*/
/* 	});*/
/* </script>*/
/* <div id="tm_menu" class="nav__primary">*/
/* 	<div class="menu-shadow">*/
/* 		<div class="container">*/
/* 			<ul class="menu">*/
/* <li>*/
/* <a href="http://localhost:8000/template_52891_cw21kXN65RYum715QAIo/theme509/theme509((full))/index.php?route=product/category&amp;path=33">Makeup</a>*/
/* */
/* </li>*/
/* <li>*/
/* <a href="http://localhost:8000/template_52891_cw21kXN65RYum715QAIo/theme509/theme509((full))/index.php?route=product/category&amp;path=25">skin care</a>*/
/* <ul>*/
/* <li>*/
/* <a href="http://localhost:8000/template_52891_cw21kXN65RYum715QAIo/theme509/theme509((full))/index.php?route=product/category&amp;path=32">Aenean viverra</a>*/
/* </li>*/
/* <li>*/
/* <a href="http://localhost:8000/template_52891_cw21kXN65RYum715QAIo/theme509/theme509((full))/index.php?route=product/category&amp;path=31">Nullam iaculis</a>*/
/* </li>*/
/* <li>*/
/* <a href="http://localhost:8000/template_52891_cw21kXN65RYum715QAIo/theme509/theme509((full))/index.php?route=product/category&amp;path=30">Phasellus vel</a>*/
/* </li>*/
/* <li>*/
/* <a href="http://localhost:8000/template_52891_cw21kXN65RYum715QAIo/theme509/theme509((full))/index.php?route=product/category&amp;path=28" class="parent">Praesent imperdiet</a><ul>*/
/* <li>*/
/* <a href="http://localhost:8000/template_52891_cw21kXN65RYum715QAIo/theme509/theme509((full))/index.php?route=product/category&amp;path=36">Aliquam eget</a>*/
/* </li>*/
/* <li>*/
/* <a href="http://localhost:8000/template_52891_cw21kXN65RYum715QAIo/theme509/theme509((full))/index.php?route=product/category&amp;path=35">Lorem ipsum</a>*/
/* </li>*/
/* */
/* </ul>*/
/* */
/* </li>*/
/* <li>*/
/* <a href="http://localhost:8000/template_52891_cw21kXN65RYum715QAIo/theme509/theme509((full))/index.php?route=product/category&amp;path=29">Praesent sodales</a>*/
/* </li>*/
/* */
/* </ul>*/
/* */
/* </li>*/
/* <li>*/
/* <a href="http://localhost:8000/template_52891_cw21kXN65RYum715QAIo/theme509/theme509((full))/index.php?route=product/category&amp;path=20">lip care</a>*/
/* */
/* </li>*/
/* <li>*/
/* <a href="http://localhost:8000/template_52891_cw21kXN65RYum715QAIo/theme509/theme509((full))/index.php?route=product/category&amp;path=18">cleansers</a>*/
/* */
/* </li>*/
/* <li>*/
/* <a href="http://localhost:8000/template_52891_cw21kXN65RYum715QAIo/theme509/theme509((full))/index.php?route=product/category&amp;path=34">toners</a>*/
/* */
/* </li>*/
/* */
/* </ul>*/
/* 			<div class="clear"></div>*/
/* 		</div>*/
/* 	</div>*/
/* </div>*/
/*  */
/* <div id="accueil">*/
/*     {% block accueil %}*/
/*         {% endblock %}*/
/* </div>*/
/* <div id="produit">*/
/*     {% block produit %}*/
/*         {% endblock %}*/
/* </div>*/
/* <div id="produit">*/
/*     {% block statistiques %}*/
/*         {% endblock %}*/
/* </div>*/
/* <div id="produit">*/
/*     {% block livraison %}*/
/*         {% endblock %}*/
/* </div>*/
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* <footer>*/
/*   <div class="container">*/
/* 	<div class="row">*/
/* 	  	  <div class="col-sm-2">*/
/* 		<h5>Information</h5>*/
/* 		<ul class="list-unstyled">*/
/* 		  		  <li><a href="http://localhost:8000/template_52891_cw21kXN65RYum715QAIo/theme509/theme509((full))/index.php?route=information/information&amp;information_id=4">About Us</a></li>*/
/* 		  		  <li><a href="http://localhost:8000/template_52891_cw21kXN65RYum715QAIo/theme509/theme509((full))/index.php?route=information/information&amp;information_id=6">Delivery Information</a></li>*/
/* 		  		  <li><a href="http://localhost:8000/template_52891_cw21kXN65RYum715QAIo/theme509/theme509((full))/index.php?route=information/information&amp;information_id=3">Privacy Policy</a></li>*/
/* 		  		  <li><a href="http://localhost:8000/template_52891_cw21kXN65RYum715QAIo/theme509/theme509((full))/index.php?route=information/information&amp;information_id=5">Terms &amp; Conditions</a></li>*/
/* 		  		</ul>*/
/* 	  </div>*/
/* 	  	  <div class="col-sm-2">*/
/* 		<h5>Customer Service</h5>*/
/* 		<ul class="list-unstyled">*/
/* 		  <li><a href="http://localhost:8000/template_52891_cw21kXN65RYum715QAIo/theme509/theme509((full))/index.php?route=information/contact">Contact Us</a></li>*/
/* 		  <li><a href="http://localhost:8000/template_52891_cw21kXN65RYum715QAIo/theme509/theme509((full))/index.php?route=account/return/add">Returns</a></li>*/
/* 		  <li><a href="http://localhost:8000/template_52891_cw21kXN65RYum715QAIo/theme509/theme509((full))/index.php?route=information/sitemap">Site Map</a></li>*/
/* 		</ul>*/
/* 	  </div>*/
/* 	  <div class="col-sm-2">*/
/* 		<h5>Extras</h5>*/
/* 		<ul class="list-unstyled">*/
/* 		  <li><a href="http://localhost:8000/template_52891_cw21kXN65RYum715QAIo/theme509/theme509((full))/index.php?route=product/manufacturer">Brands</a></li>*/
/* 		  <li><a href="http://localhost:8000/template_52891_cw21kXN65RYum715QAIo/theme509/theme509((full))/index.php?route=account/voucher">Gift Vouchers</a></li>*/
/* 		  <li><a href="http://localhost:8000/template_52891_cw21kXN65RYum715QAIo/theme509/theme509((full))/index.php?route=affiliate/account">Affiliates</a></li>*/
/* 		  <li><a href="http://localhost:8000/template_52891_cw21kXN65RYum715QAIo/theme509/theme509((full))/index.php?route=product/special">Specials</a></li>*/
/* 		</ul>*/
/* 	  </div>*/
/* 	  <div class="col-sm-2">*/
/* 		<h5>My Account</h5>*/
/* 		<ul class="list-unstyled">*/
/* 		  <li><a href="Account">My Account</a></li>*/
/* 		  <li><a href="http://localhost:8000/template_52891_cw21kXN65RYum715QAIo/theme509/theme509((full))/index.php?route=account/order">Order History</a></li>*/
/* 		  <li><a href="http://localhost:8000/template_52891_cw21kXN65RYum715QAIo/theme509/theme509((full))/index.php?route=account/wishlist">Wish List</a></li>*/
/* 		  <li><a href="http://localhost:8000/template_52891_cw21kXN65RYum715QAIo/theme509/theme509((full))/index.php?route=account/newsletter">Newsletter</a></li>*/
/* 		</ul>*/
/* 	  </div>*/
/* 	  <div class="col-sm-4">*/
/* */
/* 			*/
/* <div class="box facebook info">*/
/* 	<div class="box-heading">*/
/* 		<h3>Facebook Mall</h3>*/
/* 	</div>*/
/* 	<div class="box-content">*/
/* 		<div */
/* 		class="fb-like-box"*/
/* 		data-href="https://www.facebook.com/Tunisia.Malll/"*/
/* 		data-width="370"*/
/* 		data-height="190"*/
/* 		data-show-faces="1"*/
/* 		data-stream="0"*/
/* 		data-header="0"*/
/* 		data-colorscheme="light"*/
/* 		data-show-border="0"></div>*/
/* 	</div>*/
/* </div>*/
/* */
/* */
/* <script>*/
/*   window.fbAsyncInit = function() {*/
/*     FB.init({*/
/*             xfbml      : true,*/
/*       version    : 'v2.2'*/
/*     });*/
/*   };*/
/* */
/*   (function(d, s, id){*/
/*      var js, fjs = d.getElementsByTagName(s)[0];*/
/*      if (d.getElementById(id)) {return;}*/
/*      js = d.createElement(s); js.id = id;*/
/*      js.src = "//connect.facebook.net/en_US/sdk.js";*/
/*      fjs.parentNode.insertBefore(js, fjs);*/
/*    }(document, 'script', 'facebook-jssdk'));*/
/* </script>*/
/* 			*/
/* 		<h5>Contact Us</h5>*/
/* 		<ul class="list-unstyled">*/
/* 		  <li>Rue de la Feuille dErable, Tunis, Tunisie lac2</li>*/
/* 		  <li class="phone">72-000-000;</li>*/
/* 		  <li class="phone">72-000-000</li>*/
/* 		  */
/* 		</ul>*/
/* 		<div class="socials">*/
/* 			<a href="https://www.facebook.com/Tunisia.Malll/"><i class="fa fa-facebook"></i></a>*/
/* 			<a href="https://www.twitter.com/"><i class="fa fa-twitter"></i></a>*/
/* 			<a href="www.youtube.com/watch?v=3Xn2H2pQuLQ"><i class="fa fa-youtube"></i></a>*/
/* 		</div>*/
/* 	  </div>*/
/* 	</div>*/
/* 	*/
/*   </div>*/
/* 	<div class="copyright">*/
/* 		<div class="container">*/
/* 			*/
/*                     Powered By <a href="http://www.opencart.com">OpenCart</a><br> */
/* 		</div> */
/* 	</div>*/
/* </footer>*/
/* <script src="{{ asset('css/catalog/view/theme/theme509/js/livesearch.js')}}" type="text/javascript"></script>*/
/* */
/* </div>*/
/* */
/* */
/* */
/* </body></html>*/
