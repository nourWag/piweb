<?php

/* MyappuserBundle:View1:index.html.twig */
class __TwigTemplate_5d75f66296029f1b23590b4322b5163badd0d935b7863ca1ff332fe5db0a1785 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'pack' => array($this, 'block_pack'),
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
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/catalog/favicon.png"), "html", null, true);
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
\t\t\t<li><a href=\"My Account\"><i class=\"fa fa-user\"></i> <span>My Account</span></a></li>
\t\t\t\t\t\t<li><a href=\"registerAccoun\"><i class=\"fa fa-user\"></i> Register</a></li>
                                                <li><a href=\"passwordAlreadyRequested\"><i class=\"fa fa-user\"></i> passwordAlreadyRequested</a></li>
\t\t\t                        <li><a href=\"loginAccoun\"><i class=\"fa fa-lock\"></i>Login</a></li>
                                                <li><a href=\"Wish List\"><i class=\"fa fa-heart\"></i> <span>Wish List (0)</span></a></li>
\t\t\t<li><a href=\"Shopping Cart\"><i class=\"fa fa-shopping-cart\"></i> <span>Shopping Cart</span></a></li>
\t\t\t<li><a href=\"Checkout\"><i class=\"fa fa-share\"></i> <span>Checkout</span></a></li>
\t\t</ul>
\t\t\t\t<ul class=\"foot\">
\t\t\t\t\t\t\t\t\t<li><a href=\"http://localhost/template_52891_cw21kXN65RYum715QAIo/theme509/theme509((full))/index.php?route=information/information&amp;information_id=4\">About Us</a></li>
\t\t\t\t\t\t<li><a href=\"http://localhost/template_52891_cw21kXN65RYum715QAIo/theme509/theme509((full))/index.php?route=information/information&amp;information_id=6\">Delivery Information</a></li>
\t\t\t\t\t\t<li><a href=\"http://localhost/template_52891_cw21kXN65RYum715QAIo/theme509/theme509((full))/index.php?route=information/information&amp;information_id=3\">Privacy Policy</a></li>
\t\t\t\t\t\t<li><a href=\"http://localhost/template_52891_cw21kXN65RYum715QAIo/theme509/theme509((full))/index.php?route=information/information&amp;information_id=5\">Terms &amp; Conditions</a></li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t<ul class=\"foot foot-1\">
\t\t\t<li><a href=\"contact\">Contact Us</a></li>
\t\t\t<li><a href=\"/return/insert\">Returns</a></li>
\t\t\t<li><a href=\"sitemap\">Site Map</a></li>
\t\t</ul>
\t\t
\t\t<ul class=\"foot foot-2\">
\t\t\t<li><a href=\"http://localhost/template_52891_cw21kXN65RYum715QAIo/theme509/theme509((full))/index.php?route=product/manufacturer\">Brands</a></li>
\t\t\t<li><a href=\"http://localhost/template_52891_cw21kXN65RYum715QAIo/theme509/theme509((full))/index.php?route=account/voucher\">Gift Vouchers</a></li>
\t\t\t<li><a href=\"http://localhost/template_52891_cw21kXN65RYum715QAIo/theme509/theme509((full))/index.php?route=affiliate/account\">Affiliates</a></li>
\t\t\t<li><a href=\"http://localhost/template_52891_cw21kXN65RYum715QAIo/theme509/theme509((full))/index.php?route=product/special\">Specials</a></li>
\t\t</ul>
\t\t<ul class=\"foot foot-3\">
\t\t\t<li><a href=\"order\">Order History</a></li>
\t\t\t<li><a href=\"newsletter\">Newsletter</a></li>
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
<form action=\"http://localhost/template_52891_cw21kXN65RYum715QAIo/theme509/theme509((full))/index.php?route=common/currency/currency\" method=\"post\" enctype=\"multipart/form-data\" id=\"currency\">
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
  <input type=\"hidden\" name=\"redirect\" value=\"home\" />
</form>
</div>
\t\t<div class=\"pull-right box-language\">
<form action=\"http://localhost/template_52891_cw21kXN65RYum715QAIo/theme509/theme509((full))/index.php?route=common/language/language\" method=\"post\" enctype=\"multipart/form-data\" id=\"language\">
  <div class=\"btn-group\">
\t<button class=\"btn btn-link dropdown-toggle\" data-toggle=\"dropdown\">
\t\t\t<img src=\"";
        // line 172
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/flags/gb.png"), "html", null, true);
        echo "\" alt=\"English\" title=\"English\">
\ten\t\t\t\t\t\t\t<span class=\"hidden-xs hidden-sm hidden-md\">Language</span> <i class=\"fa fa-caret-down\"></i></button>
\t<ul class=\"dropdown-menu pull-right\">
\t  \t  <li><a href=\"en\"><img src=\"";
        // line 175
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/flags/gb.png"), "html", null, true);
        echo "\" alt=\"English\" title=\"English\" /> English</a></li>
\t  \t  <li><a href=\"de\"><img src=\"";
        // line 176
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/flags/de.png"), "html", null, true);
        echo "\" alt=\"Deutsch\" title=\"Deutsch\" /> Deutsch</a></li>
\t  \t  <li><a href=\"ru\"><img src=\"";
        // line 177
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/flags/ru.png"), "html", null, true);
        echo "\" alt=\"Р�?�?�?кий\" title=\"Р�?�?�?кий\" /> Р�?�?�?кий</a></li>
\t  \t</ul>
  </div>
  <input type=\"hidden\" name=\"code\" value=\"\" />
  <input type=\"hidden\" name=\"redirect\" value=\"home\" />
</form>
</div>
\t\t<div id=\"top-links\" class=\"nav pull-left\">
\t\t<ul class=\"list-inline\">
\t\t\t<!--<li><a href=\"http://localhost/template_52891_cw21kXN65RYum715QAIo/theme509/theme509((full))/index.php?route=information/contact\"><i class=\"fa fa-phone\"></i></a> <span class=\"hidden-xs hidden-sm hidden-md\">800-2345-6789;</span></li>-->
\t\t\t<li class=\"first\"><a href=\"home\"><i class=\"fa fa-home\"></i><span class=\"hidden-xs hidden-sm hidden-md\">Home</span></a></li>
\t\t\t<li class=\"dropdown\"><a href=\"account\" title=\"My Account\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"><i class=\"fa fa-user\"></i> <span class=\"hidden-xs hidden-sm hidden-md\">My Account</span> <span class=\"caret\"></span></a>
\t\t\t<ul class=\"dropdown-menu dropdown-menu-left\">
\t\t                 <li><a href=\"register/\">Register</a></li>
\t\t\t\t <li><a href=\"login\">Login</a></li>
\t\t\t\t\t\t\t</ul>
\t\t\t</li>
\t\t\t<li><a href=\"wishlist\" id=\"wishlist-total\" title=\"Wish List (0)\"><i class=\"fa fa-heart\"></i> <span class=\"hidden-xs hidden-sm hidden-md\">Wish List (0)</span></a></li>
\t\t\t<li><a href=\"cart\" title=\"Shopping Cart\"><i class=\"fa fa-shopping-cart\"></i> <span class=\"hidden-xs hidden-sm hidden-md\">Shopping Cart</span></a></li>
\t\t\t<li><a href=\"checkout\" title=\"Checkout\"><i class=\"fa fa-share\"></i> <span class=\"hidden-xs hidden-sm hidden-md\">Checkout</span></a></li>
\t\t</ul>
\t\t</div>
\t</nav>
</div>
<header>
\t<div class=\"container\">
\t\t<div id=\"logo\">
\t\t\t\t\t\t<a href=\"pi2tst_homepage1\"><img src=\"";
        // line 204
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/catalog/logo1.png"), "html", null, true);
        echo "\" title=\"Tunisia Mall\" alt=\"Tunisia Mall\" class=\"img-responsive\" /></a>
\t\t\t\t\t</div>
\t\t<div class=\"checkout_button\">
\t\t\t<a href=\"checkout \" title=\"Checkout\">
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
<a href=\"http://localhost/template_52891_cw21kXN65RYum715QAIo/theme509/theme509((full))/index.php?route=product/category&amp;path=33\">Makeup</a>

</li>
<li>
<a href=\"profile\">profile</a>
<ul>
<li>
<a href=\"userBundle_Pages\">profile client</a>
</li>
<li>
<a href=\"respensablePages\">profile responsable</a>
</li>
<li>
<a href=\"http://localhost/template_52891_cw21kXN65RYum715QAIo/theme509/theme509((full))/index.php?route=product/category&amp;path=30\">Phasellus vel</a>
</li>
<li>
<a href=\"http://localhost/template_52891_cw21kXN65RYum715QAIo/theme509/theme509((full))/index.php?route=product/category&amp;path=28\" class=\"parent\">Praesent imperdiet</a><ul>
<li>
<a href=\"http://localhost/template_52891_cw21kXN65RYum715QAIo/theme509/theme509((full))/index.php?route=product/category&amp;path=36\">Aliquam eget</a>
</li>
<li>
<a href=\"http://localhost/template_52891_cw21kXN65RYum715QAIo/theme509/theme509((full))/index.php?route=product/category&amp;path=35\">Lorem ipsum</a>
</li>

</ul>

</li>
<li>
<a href=\"http://localhost/template_52891_cw21kXN65RYum715QAIo/theme509/theme509((full))/index.php?route=product/category&amp;path=29\">Praesent sodales</a>
</li>

</ul>

</li>
<li>
<a href=\"http://localhost/template_52891_cw21kXN65RYum715QAIo/theme509/theme509((full))/index.php?route=product/category&amp;path=20\">lip care</a>

</li>
<li>
<a href=\"http://localhost/template_52891_cw21kXN65RYum715QAIo/theme509/theme509((full))/index.php?route=product/category&amp;path=18\">cleansers</a>

</li>
<li>
<a href=\"http://localhost/template_52891_cw21kXN65RYum715QAIo/theme509/theme509((full))/index.php?route=product/category&amp;path=34\">toners</a>

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
<a href=\"Makeup\">Makeup</a>

</li>
<li>
<a href=\"skin care\">les profiles</a>
<ul>
<li>
<a href=\"";
        // line 303
        echo $this->env->getExtension('routing')->getPath("profile_user");
        echo "\">profile client</a>
</li>
<li>
     <a href=\"";
        // line 306
        echo $this->env->getExtension('routing')->getPath("respensablePages");
        echo "\">profile respensable</a>

</li>
<li>
<a href=\"admin/pages\">adminstrateur</a>
</li>
<li>
<a href=\"Praesent imperdiet\" class=\"parent\">Praesent imperdiet</a><ul>
<li>
<a href=\"http://localhost/template_52891_cw21kXN65RYum715QAIo/theme509/theme509((full))/index.php?route=product/category&amp;path=36\">Aliquam eget</a>
</li>
<li>
<a href=\"http://localhost/template_52891_cw21kXN65RYum715QAIo/theme509/theme509((full))/index.php?route=product/category&amp;path=35\">Lorem ipsum</a>
</li>

</ul>

</li>
<li>
<a href=\"Praesent sodales\">Praesent sodales</a>
</li>

</ul>

</li>
<li>
<a href=\"http://localhost/template_52891_cw21kXN65RYum715QAIo/theme509/theme509((full))/index.php?route=product/category&amp;path=20\">lip care</a>

</li>
<li>
<a href=\"http://localhost/template_52891_cw21kXN65RYum715QAIo/theme509/theme509((full))/index.php?route=product/category&amp;path=18\">cleansers</a>

</li>
<li>
<a href=\"http://localhost/template_52891_cw21kXN65RYum715QAIo/theme509/theme509((full))/index.php?route=product/category&amp;path=34\">toners</a>

</li>

</ul>
\t\t\t<div class=\"clear\"></div>
\t\t</div>
\t</div>
</div>

<p id=\"back-top\"> <a href=\"#top\"><span></span></a> </p>
\t\t\t<div class=\"header_modules\"><div id=\"parallax_2\" class=\"parallax\" >
  
\t\t\t
                            <div data-source-url=\"";
        // line 354
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/cache/catalog/parallax-1-jdida.jpg"), "html", null, true);
        echo "\" class=\"parallax-1\" style=\"width: 2050px; margin-left: -639px; left: 50%; background-image: url(";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/cache/catalog/parallax-1-jdida.jpg"), "html", null, true);
        echo "); background-attachment: fixed; background-position: 50% 81.5889%;\">
\t\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-sm-12\">
\t\t\t\t\t<h4>Define</h4>
<h2>beautiful</h2>
<h1>LOOK &amp;</h1>
<h3>sweet skin</h3>
<a href=\"Shop now\">Shop now!</a>\t\t\t\t</div>
\t\t\t</div>
\t\t\t</div>
\t\t</div>

\t
\t  
</div>

<script>
\tjQuery(document).ready(function() {
\tjQuery(\"#parallax_2>div\").cherryFixedParallax({
\t\tinvert: false,
\t\t});    
\t}); 
</script>
</div>
\t\t\t
<div class=\"container\">
  <div class=\"row\">\t\t\t\t<div id=\"content\" class=\"col-sm-12\"><div id=\"banner0\" class=\"banners row\">
\t\t\t<div class=\"col-sm-4\">
\t\t<div class=\"banner-box\">
\t\t\t<a class=\"clearfix\" href=\"index.php?route=product/product&amp;product_id=43\">
\t\t\t\t<img src=\"";
        // line 385
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/cache/catalog/banner-1-370x370.jpg"), "html", null, true);
        echo "\" alt=\"banner-1\" class=\"img-responsive\" />
\t\t\t\t\t\t\t\t<div class=\"s-desc\"><h2>Beauty</h2>
<h1>Products</h1></div>
\t\t\t\t\t\t\t</a>
\t\t</div>
\t</div>
\t\t\t\t<div class=\"col-sm-4\">
\t\t<div class=\"banner-box\">
\t\t\t<a class=\"clearfix\" href=\"index.php?route=product/product&amp;product_id=42\">
\t\t\t\t<img src=\"";
        // line 394
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/cache/catalog/banner-2-370x370.jpg"), "html", null, true);
        echo "\" alt=\"banner-2\" class=\"img-responsive\" />
\t\t\t\t\t\t\t\t<div class=\"s-desc\"><h2>Must</h2>
<h1>Have</h1></div>
\t\t\t\t\t\t\t</a>
\t\t</div>
\t</div>
\t\t\t\t<div class=\"col-sm-4\">
\t\t<div class=\"banner-box\">
\t\t\t<a class=\"clearfix\" href=\"index.php?route=product/product&amp;product_id=28\">
\t\t\t\t  ";
        // line 403
        $this->displayBlock('pack', $context, $blocks);
        // line 406
        echo "\t\t\t\t\t\t\t</a>
\t\t</div>
\t</div>
\t\t</div>
<div id=\"parallax_0\" class=\"parallax\" >
  
\t\t\t
\t\t\t<div data-source-url=";
        // line 413
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/cache/catalog/parallax-2-jdida.jpg"), "html", null, true);
        echo " class=\"parallax-2\" style=\"width: 1278px; margin-left: -639px; left: 50%; background-image: url(";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/cache/catalog/parallax-2-jdida.jpg"), "html", null, true);
        echo "); background-attachment: fixed; background-position: 50% 65.8314%;\">
                            <div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-sm-12\">
\t\t\t\t\t<h4>10%-20% off</h4>
<h2>ideal</h2>
<h1>skin</h1>
<h3>nutrition face care</h3>
<a href=\"index.php?route=product/product&product_id=30\">Shop now!</a>\t\t\t\t</div>
\t\t\t</div>
\t\t\t</div>
\t\t</div>

\t
\t  
</div>

<script>
\tjQuery(document).ready(function() {
\tjQuery(\"#parallax_0>div\").cherryFixedParallax({
\t\tinvert: false,
\t\t});    
\t}); 
</script>
<div class=\"box_html advertising\">
\t<div class=\"container\"><div class=\"row\"><div class=\"col-sm-4\" style=\"opacity: 1; left: 0px;\"><div><h1>Free Shipping</h1><h2>on orders over \$99</h2><p>Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p><a href=\"index.php?route=product/product&amp;product_id=43\"><i class=\"fa fa-angle-right\"></i></a></div></div><div class=\"col-sm-4\" style=\"opacity: 1; bottom: 0px;\"><div><h1>Order return</h1><h2>Returns within 14 days</h2><p>Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p><a href=\"index.php?route=product/product&amp;product_id=40\"><i class=\"fa fa-angle-right\"></i></a></div></div><div class=\"col-sm-4\" style=\"opacity: 1; right: 0px;\"><div><h1>COD</h1><h2>Cash on delivery</h2><p>Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p><a href=\"index.php?route=product/product&amp;product_id=30\"><i class=\"fa fa-angle-right\"></i></a></div></div></div></div></div>
<div id=\"parallax_1\" class=\"parallax\" >
  
\t\t\t
\t\t\t<div data-source-url=";
        // line 442
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/cache/catalog/parallax-3-jdida.jpg"), "html", null, true);
        echo " class=\"parallax-3\" style=\"width: 1278px; margin-left: -639px; left: 50%; background-image: url(";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/cache/catalog/parallax-3-jdida.jpg"), "html", null, true);
        echo "); background-attachment: fixed; background-position: 50% 95.9994%;\">
                            <div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-sm-12\">
\t\t\t\t\t<h4>Choose from</h4>
<h2>a new</h2>
<h1>spring</h1>
<h3>collection</h3>
<a href=\"index.php?route=product/product&product_id=34\">Shop now!</a>\t\t\t\t</div>
\t\t\t</div>
\t\t\t</div>
\t\t</div>

\t
\t  
</div>

<script>
\tjQuery(document).ready(function() {
\tjQuery(\"#parallax_1>div\").cherryFixedParallax({
\t\tinvert: false,
\t\t});    
\t}); 
</script>
<script>
\t\$(document).ready(function() {
\t\t\$(\".quickview\").fancybox({
\t\t\tmaxWidth\t: 800,
\t\t\tmaxHeight\t: 600,
\t\t\tfitToView\t: false,
\t\t\twidth\t\t: '70%',
\t\t\theight\t\t: '70%',
\t\t\tautoSize\t: false,
\t\t\tcloseClick\t: false,
\t\t\topenEffect\t: 'elastic',
\t\t\tcloseEffect\t: 'elastic',
\t\t\t
\t\t});
\t});
</script>
<div class=\"box featured\">
\t<div class=\"box-heading\"><h3>Featured</h3></div>
\t<div class=\"box-content\">
\t\t<div class=\"row\">
\t\t\t\t<div class=\"product-layout col-lg-3 col-md-3 col-sm-3 col-xs-12\">
\t\t\t<div class=\"product-thumb transition\">
\t\t\t\t<a class=\"quickview\" rel=\"group\" href=\"#quickview_1\">
\t\t\t\t\tQuick View\t\t\t\t</a>
\t\t\t\t<div style=\"display:none\">
\t\t\t\t\t<div id=\"quickview_1\">
\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t<div class=\"left col-sm-4\">
\t\t\t\t\t\t\t\t\t<div class=\"quickview_image image\"><a href=\"http://localhost/template_52891_cw21kXN65RYum715QAIo/theme509/theme509((full))/index.php?route=product/product&amp;product_id=43\"><img alt=\"Quisque eget\" title=\"Quisque eget\" class=\"img-responsive\" src=\"";
        // line 494
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/cache/catalog/product-31-270x420.png"), "html", null, true);
        echo "\" /></a></div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"right col-sm-8\">
\t\t\t\t\t\t\t\t\t<h2>Quisque eget</h2>
\t\t\t\t\t\t\t\t\t<div class=\"inf\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"quickview_manufacture manufacture manufacture\">Brand: <a href=\"http://localhost/template_52891_cw21kXN65RYum715QAIo/theme509/theme509((full))/index.php?route=product/manufacturer/info&amp;manufacturer_id=8\">Lorem ipsum</a></p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"product_model model\">Model:Product 16</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"product_stock prod-stock-2\">Availability:</p>
\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"product_stock prod-stock\">In Stock</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"price\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"price-new\">\$400.00</span> <span class=\"price-old\">\$500.00</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"cart-button\">
\t\t\t\t\t\t\t\t\t\t<button class=\"btn btn-add\" type=\"button\" onclick=\"cart.add('43');\"><i class=\"fa fa-shopping-cart\"></i></button>
\t\t\t\t\t\t\t\t\t\t<button class=\"btn btn-icon\" type=\"button\" data-toggle=\"tooltip\" title=\"Add to Wish List\" onclick=\"wishlist.add('43');\"><i class=\"fa fa-heart\"></i></button>
\t\t\t\t\t\t\t\t\t\t<button class=\"btn btn-icon\" type=\"button\" data-toggle=\"tooltip\" title=\"Compare this Product\" onclick=\"compare.add('43');\"><i class=\"fa fa-exchange\"></i></button>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"clear\"></div>
\t\t\t\t\t\t\t\t\t<div class=\"rating\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-sm-12\">
\t\t\t\t\t\t\t\t\t<div class=\"quickview_description description\">
\t\t\t\t\t\t\t\t\t\t<iframe width=\"560\" height=\"315\" src=\"//www.youtube.com/embed/xvhDTxwUkEc?rel=0&amp;controls=0&amp;showinfo=0\" frameborder=\"0\" allowfullscreen></iframe>
<p><b>Traditions are the cornerstone</b> of our noble business and we know how to observe them. Being one of the leading perfume manufacturers, our company has priceless experience in creating new scents and successful brands. We are glad to welcome you at our first online store for real perfume connoisseurs. </p>

<p><b>If you want to sell</b> perfumes you should know that nice fragrance is not enough for success. You must tell original story that will give your perfumes enough charm to attract customers. So we are here to tell you many interesting stories with charming aroma.  </p>

<p><b>We are here to open</b> you the absolutely new world – a world full of sensuality, passion and positive emotions. Go ahead and pick one and you’ll see how it could change your life. Write your own story with our perfumes! Satisfied clients and perfect customer service are our main rules, so leave your hesitations behind and let’s start shopping! </p>\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"sale\">Sale</div>
\t\t\t\t\t\t<div class=\"image\"><a href=\"http://localhost/template_52891_cw21kXN65RYum715QAIo/theme509/theme509((full))/index.php?route=product/product&amp;product_id=43\"><img alt=\"Quisque eget\" title=\"Quisque eget\" class=\"img-responsive lazy\" data-src=\"";
        // line 536
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/cache/catalog/product-31-270x420.png"), "html", null, true);
        echo "\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/catalog/preload.gif"), "html", null, true);
        echo "\"  /></a></div>
\t\t\t<div class=\"caption\">
\t\t\t\t<div class=\"name\"><a href=\"http://localhost/template_52891_cw21kXN65RYum715QAIo/theme509/theme509((full))/index.php?route=product/product&amp;product_id=43\">Quisque eget</a></div>
\t\t\t\t<!--<div class=\"description\">
Traditions are the cornerstone of our noble business and we know how to observe them. Being one of..</div>-->
\t\t\t\t\t\t\t\t<div class=\"rating\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"price\">
\t\t\t\t\t\t\t\t<span class=\"price-new\">\$400.00</span> <span class=\"price-old\">\$500.00</span>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t<div class=\"cart-button\">
\t\t\t\t<button class=\"btn btn-add\" type=\"button\" onclick=\"cart.add('43');\"><i class=\"fa fa-shopping-cart hidden-lg\"></i> <span class=\"hidden-xs hidden-sm hidden-md\">Add to Cart</span></button>
\t\t\t\t<!--<button type=\"button\" data-toggle=\"tooltip\" title=\"Add to Wish List\" onclick=\"wishlist.add('43');\"><i class=\"fa fa-heart\"></i></button>
\t\t\t\t<button type=\"button\" data-toggle=\"tooltip\" title=\"Compare this Product\" onclick=\"compare.add('43');\"><i class=\"fa fa-exchange\"></i></button>-->
\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t\t\t<div class=\"product-layout col-lg-3 col-md-3 col-sm-3 col-xs-12\">
\t\t\t<div class=\"product-thumb transition\">
\t\t\t\t<a class=\"quickview\" rel=\"group\" href=\"#quickview_2\">
\t\t\t\t\tQuick View\t\t\t\t</a>
\t\t\t\t<div style=\"display:none\">
\t\t\t\t\t<div id=\"quickview_2\">
\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t<div class=\"left col-sm-4\">
\t\t\t\t\t\t\t\t\t<div class=\"quickview_image image\"><a href=\"http://localhost/template_52891_cw21kXN65RYum715QAIo/theme509/theme509((full))/index.php?route=product/product&amp;product_id=40\"><img alt=\"Vehicula libero sed\" title=\"Vehicula libero sed\" class=\"img-responsive\" src=\"";
        // line 567
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/cache/catalog/product-16-270x420.png"), "html", null, true);
        echo "\" /></a></div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"right col-sm-8\">
\t\t\t\t\t\t\t\t\t<h2>Vehicula libero sed</h2>
\t\t\t\t\t\t\t\t\t<div class=\"inf\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"quickview_manufacture manufacture manufacture\">Brand: <a href=\"http://localhost/template_52891_cw21kXN65RYum715QAIo/theme509/theme509((full))/index.php?route=product/manufacturer/info&amp;manufacturer_id=8\">Lorem ipsum</a></p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"product_model model\">Model:product 11</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"product_stock prod-stock-2\">Availability:</p>
\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"product_stock prod-stock\">In Stock</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"price\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\$101.00\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"cart-button\">
\t\t\t\t\t\t\t\t\t\t<button class=\"btn btn-add\" type=\"button\" onclick=\"cart.add('40');\"><i class=\"fa fa-shopping-cart\"></i></button>
\t\t\t\t\t\t\t\t\t\t<button class=\"btn btn-icon\" type=\"button\" data-toggle=\"tooltip\" title=\"Add to Wish List\" onclick=\"wishlist.add('40');\"><i class=\"fa fa-heart\"></i></button>
\t\t\t\t\t\t\t\t\t\t<button class=\"btn btn-icon\" type=\"button\" data-toggle=\"tooltip\" title=\"Compare this Product\" onclick=\"compare.add('40');\"><i class=\"fa fa-exchange\"></i></button>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"clear\"></div>
\t\t\t\t\t\t\t\t\t<div class=\"rating\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-sm-12\">
\t\t\t\t\t\t\t\t\t<div class=\"quickview_description description\">
\t\t\t\t\t\t\t\t\t\t<iframe width=\"560\" height=\"315\" src=\"//www.youtube.com/embed/xvhDTxwUkEc?rel=0&amp;controls=0&amp;showinfo=0\" frameborder=\"0\" allowfullscreen></iframe>
<p><b>Traditions are the cornerstone</b> of our noble business and we know how to observe them. Being one of the leading perfume manufacturers, our company has priceless experience in creating new scents and successful brands. We are glad to welcome you at our first online store for real perfume connoisseurs. </p>

<p><b>If you want to sell</b> perfumes you should know that nice fragrance is not enough for success. You must tell original story that will give your perfumes enough charm to attract customers. So we are here to tell you many interesting stories with charming aroma.  </p>

<p><b>We are here to open</b> you the absolutely new world – a world full of sensuality, passion and positive emotions. Go ahead and pick one and you’ll see how it could change your life. Write your own story with our perfumes! Satisfied clients and perfect customer service are our main rules, so leave your hesitations behind and let’s start shopping! </p>\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"image\"><a href=\"http://localhost/template_52891_cw21kXN65RYum715QAIo/theme509/theme509((full))/index.php?route=product/product&amp;product_id=40\"><img alt=\"Vehicula libero sed\" title=\"Vehicula libero sed\" class=\"img-responsive lazy\" data-src=\"";
        // line 607
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/cache/catalog/product-16-270x420.png"), "html", null, true);
        echo "\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/catalog/preload.gif"), "html", null, true);
        echo "\"  /></a></div>
\t\t\t<div class=\"caption\">
\t\t\t\t<div class=\"name\"><a href=\"http://localhost/template_52891_cw21kXN65RYum715QAIo/theme509/theme509((full))/index.php?route=product/product&amp;product_id=40\">Vehicula libero sed</a></div>
\t\t\t\t<!--<div class=\"description\">
Traditions are the cornerstone of our noble business and we know how to observe them. Being one of..</div>-->
\t\t\t\t\t\t\t\t<div class=\"rating\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"price\">
\t\t\t\t\t\t\t\t\$101.00\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t<div class=\"cart-button\">
\t\t\t\t<button class=\"btn btn-add\" type=\"button\" onclick=\"cart.add('40');\"><i class=\"fa fa-shopping-cart hidden-lg\"></i> <span class=\"hidden-xs hidden-sm hidden-md\">Add to Cart</span></button>
\t\t\t\t<!--<button type=\"button\" data-toggle=\"tooltip\" title=\"Add to Wish List\" onclick=\"wishlist.add('40');\"><i class=\"fa fa-heart\"></i></button>
\t\t\t\t<button type=\"button\" data-toggle=\"tooltip\" title=\"Compare this Product\" onclick=\"compare.add('40');\"><i class=\"fa fa-exchange\"></i></button>-->
\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t\t\t<div class=\"product-layout col-lg-3 col-md-3 col-sm-3 col-xs-12\">
\t\t\t<div class=\"product-thumb transition\">
\t\t\t\t<a class=\"quickview\" rel=\"group\" href=\"#quickview_3\">
\t\t\t\t\tQuick View\t\t\t\t</a>
\t\t\t\t<div style=\"display:none\">
\t\t\t\t\t<div id=\"quickview_3\">
\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t<div class=\"left col-sm-4\">
\t\t\t\t\t\t\t\t\t<div class=\"quickview_image image\"><a href=\"http://localhost/template_52891_cw21kXN65RYum715QAIo/theme509/theme509((full))/index.php?route=product/product&amp;product_id=30\"><img alt=\"Dolor sit amet\" title=\"Dolor sit amet\" class=\"img-responsive\" src=\"";
        // line 637
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/cache/catalog/product-04-270x420.png"), "html", null, true);
        echo "\" /></a></div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"right col-sm-8\">
\t\t\t\t\t\t\t\t\t<h2>Dolor sit amet</h2>
\t\t\t\t\t\t\t\t\t<div class=\"inf\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"quickview_manufacture manufacture manufacture\">Brand: <a href=\"http://localhost/template_52891_cw21kXN65RYum715QAIo/theme509/theme509((full))/index.php?route=product/manufacturer/info&amp;manufacturer_id=9\">Quisque sodales</a></p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"product_model model\">Model:Product 3</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"product_stock prod-stock-2\">Availability:</p>
\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"product_stock prod-stock\">In Stock</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"price\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"price-new\">\$80.00</span> <span class=\"price-old\">\$100.00</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"cart-button\">
\t\t\t\t\t\t\t\t\t\t<button class=\"btn btn-add\" type=\"button\" onclick=\"cart.add('30');\"><i class=\"fa fa-shopping-cart\"></i></button>
\t\t\t\t\t\t\t\t\t\t<button class=\"btn btn-icon\" type=\"button\" data-toggle=\"tooltip\" title=\"Add to Wish List\" onclick=\"wishlist.add('30');\"><i class=\"fa fa-heart\"></i></button>
\t\t\t\t\t\t\t\t\t\t<button class=\"btn btn-icon\" type=\"button\" data-toggle=\"tooltip\" title=\"Compare this Product\" onclick=\"compare.add('30');\"><i class=\"fa fa-exchange\"></i></button>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"clear\"></div>
\t\t\t\t\t\t\t\t\t<div class=\"rating\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-sm-12\">
\t\t\t\t\t\t\t\t\t<div class=\"quickview_description description\">
\t\t\t\t\t\t\t\t\t\t<iframe width=\"560\" height=\"315\" src=\"//www.youtube.com/embed/xvhDTxwUkEc?rel=0&amp;controls=0&amp;showinfo=0\" frameborder=\"0\" allowfullscreen></iframe>
<p><b>Traditions are the cornerstone</b> of our noble business and we know how to observe them. Being one of the leading perfume manufacturers, our company has priceless experience in creating new scents and successful brands. We are glad to welcome you at our first online store for real perfume connoisseurs. </p>

<p><b>If you want to sell</b> perfumes you should know that nice fragrance is not enough for success. You must tell original story that will give your perfumes enough charm to attract customers. So we are here to tell you many interesting stories with charming aroma.  </p>

<p><b>We are here to open</b> you the absolutely new world – a world full of sensuality, passion and positive emotions. Go ahead and pick one and you’ll see how it could change your life. Write your own story with our perfumes! Satisfied clients and perfect customer service are our main rules, so leave your hesitations behind and let’s start shopping! </p>\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"sale\">Sale</div>
\t\t\t\t\t\t<div class=\"image\"><a href=\"http://localhost/template_52891_cw21kXN65RYum715QAIo/theme509/theme509((full))/index.php?route=product/product&amp;product_id=30\"><img alt=\"Dolor sit amet\" title=\"Dolor sit amet\" class=\"img-responsive lazy\" data-src=\"";
        // line 679
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/cache/catalog/product-04-270x420.png"), "html", null, true);
        echo "\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/catalog/preload.gif"), "html", null, true);
        echo "\"  /></a></div>
\t\t\t<div class=\"caption\">
\t\t\t\t<div class=\"name\"><a href=\"http://localhost/template_52891_cw21kXN65RYum715QAIo/theme509/theme509((full))/index.php?route=product/product&amp;product_id=30\">Dolor sit amet</a></div>
\t\t\t\t<!--<div class=\"description\">
Traditions are the cornerstone of our noble business and we know how to observe them. Being one of..</div>-->
\t\t\t\t\t\t\t\t<div class=\"rating\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"price\">
\t\t\t\t\t\t\t\t<span class=\"price-new\">\$80.00</span> <span class=\"price-old\">\$100.00</span>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t<div class=\"cart-button\">
\t\t\t\t<button class=\"btn btn-add\" type=\"button\" onclick=\"cart.add('30');\"><i class=\"fa fa-shopping-cart hidden-lg\"></i> <span class=\"hidden-xs hidden-sm hidden-md\">Add to Cart</span></button>
\t\t\t\t<!--<button type=\"button\" data-toggle=\"tooltip\" title=\"Add to Wish List\" onclick=\"wishlist.add('30');\"><i class=\"fa fa-heart\"></i></button>
\t\t\t\t<button type=\"button\" data-toggle=\"tooltip\" title=\"Compare this Product\" onclick=\"compare.add('30');\"><i class=\"fa fa-exchange\"></i></button>-->
\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t\t\t<div class=\"product-layout col-lg-3 col-md-3 col-sm-3 col-xs-12\">
\t\t\t<div class=\"product-thumb transition\">
\t\t\t\t<a class=\"quickview\" rel=\"group\" href=\"#quickview_4\">
\t\t\t\t\tQuick View\t\t\t\t</a>
\t\t\t\t<div style=\"display:none\">
\t\t\t\t\t<div id=\"quickview_4\">
\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t<div class=\"left col-sm-4\">
\t\t\t\t\t\t\t\t\t<div class=\"quickview_image image\"><a href=\"";
        // line 710
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/cache/catalog/product-01-270x420.png"), "html", null, true);
        echo "\" /></a></div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"right col-sm-8\">
\t\t\t\t\t\t\t\t\t<h2>Lorem ipsum</h2>
\t\t\t\t\t\t\t\t\t<div class=\"inf\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"quickview_manufacture manufacture manufacture\">Brand: <a href=\"http://localhost/template_52891_cw21kXN65RYum715QAIo/theme509/theme509((full))/index.php?route=product/manufacturer/info&amp;manufacturer_id=8\">Lorem ipsum</a></p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"product_model model\">Model:Product 15</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"product_stock prod-stock-2\">Availability:</p>
\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"product_stock prod-stock\">In Stock</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"price\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"price-new\">\$90.00</span> <span class=\"price-old\">\$100.00</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"cart-button\">
\t\t\t\t\t\t\t\t\t\t<button class=\"btn btn-add\" type=\"button\" onclick=\"cart.add('42');\"><i class=\"fa fa-shopping-cart\"></i></button>
\t\t\t\t\t\t\t\t\t\t<button class=\"btn btn-icon\" type=\"button\" data-toggle=\"tooltip\" title=\"Add to Wish List\" onclick=\"wishlist.add('42');\"><i class=\"fa fa-heart\"></i></button>
\t\t\t\t\t\t\t\t\t\t<button class=\"btn btn-icon\" type=\"button\" data-toggle=\"tooltip\" title=\"Compare this Product\" onclick=\"compare.add('42');\"><i class=\"fa fa-exchange\"></i></button>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"clear\"></div>
\t\t\t\t\t\t\t\t\t<div class=\"rating\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-sm-12\">
\t\t\t\t\t\t\t\t\t<div class=\"quickview_description description\">
\t\t\t\t\t\t\t\t\t\t<iframe width=\"560\" height=\"315\" src=\"//www.youtube.com/embed/xvhDTxwUkEc?rel=0&amp;controls=0&amp;showinfo=0\" frameborder=\"0\" allowfullscreen></iframe>
<p><b>Traditions are the cornerstone</b> of our noble business and we know how to observe them. Being one of the leading perfume manufacturers, our company has priceless experience in creating new scents and successful brands. We are glad to welcome you at our first online store for real perfume connoisseurs. </p>

<p><b>If you want to sell</b> perfumes you should know that nice fragrance is not enough for success. You must tell original story that will give your perfumes enough charm to attract customers. So we are here to tell you many interesting stories with charming aroma.  </p>

<p><b>We are here to open</b> you the absolutely new world – a world full of sensuality, passion and positive emotions. Go ahead and pick one and you’ll see how it could change your life. Write your own story with our perfumes! Satisfied clients and perfect customer service are our main rules, so leave your hesitations behind and let’s start shopping! </p>\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"sale\">Sale</div>
\t\t\t\t\t\t<div class=\"image\"><a href=\"http://localhost/template_52891_cw21kXN65RYum715QAIo/theme509/theme509((full))/index.php?route=product/product&amp;product_id=42\"><img alt=\"Lorem ipsum\" title=\"Lorem ipsum\" class=\"img-responsive lazy\" data-src=\"";
        // line 752
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/cache/catalog/product-01-270x420.png"), "html", null, true);
        echo "\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/catalog/preload.gif"), "html", null, true);
        echo "\"  /></a></div>
\t\t\t<div class=\"caption\">
\t\t\t\t<div class=\"name\"><a href=\"http://localhost/template_52891_cw21kXN65RYum715QAIo/theme509/theme509((full))/index.php?route=product/product&amp;product_id=42\">Lorem ipsum</a></div>
\t\t\t\t<!--<div class=\"description\">
Traditions are the cornerstone of our noble business and we know how to observe them. Being one of..</div>-->
\t\t\t\t\t\t\t\t<div class=\"rating\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"price\">
\t\t\t\t\t\t\t\t<span class=\"price-new\">\$90.00</span> <span class=\"price-old\">\$100.00</span>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t<div class=\"cart-button\">
\t\t\t\t<button class=\"btn btn-add\" type=\"button\" onclick=\"cart.add('42');\"><i class=\"fa fa-shopping-cart hidden-lg\"></i> <span class=\"hidden-xs hidden-sm hidden-md\">Add to Cart</span></button>
\t\t\t\t<!--<button type=\"button\" data-toggle=\"tooltip\" title=\"Add to Wish List\" onclick=\"wishlist.add('42');\"><i class=\"fa fa-heart\"></i></button>
\t\t\t\t<button type=\"button\" data-toggle=\"tooltip\" title=\"Compare this Product\" onclick=\"compare.add('42');\"><i class=\"fa fa-exchange\"></i></button>-->
\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t\t\t<div class=\"product-layout col-lg-3 col-md-3 col-sm-3 col-xs-12\">
\t\t\t<div class=\"product-thumb transition\">
\t\t\t\t<a class=\"quickview\" rel=\"group\" href=\"#quickview_5\">
\t\t\t\t\tQuick View\t\t\t\t</a>
\t\t\t\t<div style=\"display:none\">
\t\t\t\t\t<div id=\"quickview_5\">
\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t<div class=\"left col-sm-4\">
\t\t\t\t\t\t\t\t\t<div class=\"quickview_image image\"><a href=\"http://localhost/template_52891_cw21kXN65RYum715QAIo/theme509/theme509((full))/index.php?route=product/product&amp;product_id=33\"><img alt=\"Aliquam dolor tellus\" title=\"Aliquam dolor tellus\" class=\"img-responsive\" src=\"";
        // line 783
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/cache/catalog/product-52-270x420.png"), "html", null, true);
        echo "\" /></a></div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"right col-sm-8\">
\t\t\t\t\t\t\t\t\t<h2>Aliquam dolor tellus</h2>
\t\t\t\t\t\t\t\t\t<div class=\"inf\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"quickview_manufacture manufacture manufacture\">Brand: <a href=\"http://localhost/template_52891_cw21kXN65RYum715QAIo/theme509/theme509((full))/index.php?route=product/manufacturer/info&amp;manufacturer_id=10\">Fusce vestibulum</a></p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"product_model model\">Model:Product 6</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"product_stock prod-stock-2\">Availability:</p>
\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"product_stock prod-stock\">In Stock</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"price\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"price-new\">\$150.00</span> <span class=\"price-old\">\$200.00</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"cart-button\">
\t\t\t\t\t\t\t\t\t\t<button class=\"btn btn-add\" type=\"button\" onclick=\"cart.add('33');\"><i class=\"fa fa-shopping-cart\"></i></button>
\t\t\t\t\t\t\t\t\t\t<button class=\"btn btn-icon\" type=\"button\" data-toggle=\"tooltip\" title=\"Add to Wish List\" onclick=\"wishlist.add('33');\"><i class=\"fa fa-heart\"></i></button>
\t\t\t\t\t\t\t\t\t\t<button class=\"btn btn-icon\" type=\"button\" data-toggle=\"tooltip\" title=\"Compare this Product\" onclick=\"compare.add('33');\"><i class=\"fa fa-exchange\"></i></button>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"clear\"></div>
\t\t\t\t\t\t\t\t\t<div class=\"rating\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-sm-12\">
\t\t\t\t\t\t\t\t\t<div class=\"quickview_description description\">
\t\t\t\t\t\t\t\t\t\t<iframe width=\"560\" height=\"315\" src=\"//www.youtube.com/embed/xvhDTxwUkEc?rel=0&amp;controls=0&amp;showinfo=0\" frameborder=\"0\" allowfullscreen></iframe>
<p><b>Traditions are the cornerstone</b> of our noble business and we know how to observe them. Being one of the leading perfume manufacturers, our company has priceless experience in creating new scents and successful brands. We are glad to welcome you at our first online store for real perfume connoisseurs. </p>

<p><b>If you want to sell</b> perfumes you should know that nice fragrance is not enough for success. You must tell original story that will give your perfumes enough charm to attract customers. So we are here to tell you many interesting stories with charming aroma.  </p>

<p><b>We are here to open</b> you the absolutely new world – a world full of sensuality, passion and positive emotions. Go ahead and pick one and you’ll see how it could change your life. Write your own story with our perfumes! Satisfied clients and perfect customer service are our main rules, so leave your hesitations behind and let’s start shopping! </p>\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"sale\">Sale</div>
\t\t\t\t\t\t<div class=\"image\"><a href=\"http://localhost/template_52891_cw21kXN65RYum715QAIo/theme509/theme509((full))/index.php?route=product/product&amp;product_id=33\"><img alt=\"Aliquam dolor tellus\" title=\"Aliquam dolor tellus\" class=\"img-responsive lazy\" data-src=\"";
        // line 825
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/cache/catalog/product-52-270x420.png"), "html", null, true);
        echo "\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/catalog/preload.gif"), "html", null, true);
        echo "\"  /></a></div>
\t\t\t<div class=\"caption\">
\t\t\t\t<div class=\"name\"><a href=\"http://localhost/template_52891_cw21kXN65RYum715QAIo/theme509/theme509((full))/index.php?route=product/product&amp;product_id=33\">Aliquam dolor tellus</a></div>
\t\t\t\t<!--<div class=\"description\">
Traditions are the cornerstone of our noble business and we know how to observe them. Being one of..</div>-->
\t\t\t\t\t\t\t\t<div class=\"rating\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"price\">
\t\t\t\t\t\t\t\t<span class=\"price-new\">\$150.00</span> <span class=\"price-old\">\$200.00</span>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t<div class=\"cart-button\">

                            <button class=\"btn btn-add\" type=\"button\" onclick=\"cart.add('33');\"><i class=\"fa fa-shopping-cart hidden-lg\"></i> <span class=\"hidden-xs hidden-sm hidden-md\">Add to Cart</span></button>
\t\t\t\t<!--<button type=\"button\" data-toggle=\"tooltip\" title=\"Add to Wish List\" onclick=\"wishlist.add('33');\"><i class=\"fa fa-heart\"></i></button>
\t\t\t\t<button type=\"button\" data-toggle=\"tooltip\" title=\"Compare this Product\" onclick=\"compare.add('33');\"><i class=\"fa fa-exchange\"></i></button>-->
\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t\t\t<div class=\"product-layout col-lg-3 col-md-3 col-sm-3 col-xs-12\">
\t\t\t<div class=\"product-thumb transition\">
\t\t\t\t<a class=\"quickview\" rel=\"group\" href=\"#quickview_6\">
\t\t\t\t\tQuick View\t\t\t\t</a>
\t\t\t\t<div style=\"display:none\">
\t\t\t\t\t<div id=\"quickview_6\">
\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t<div class=\"left col-sm-4\">
\t\t\t\t\t\t\t\t\t<div class=\"quickview_image image\"><a href=\"http://localhost/template_52891_cw21kXN65RYum715QAIo/theme509/theme509((full))/index.php?route=product/product&amp;product_id=46\"><img alt=\"Suspendisse imperdiet\" title=\"Suspendisse imperdiet\" class=\"img-responsive\" src=\"";
        // line 857
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/cache/catalog/product-55-270x420.png"), "html", null, true);
        echo "\" /></a></div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"right col-sm-8\">
\t\t\t\t\t\t\t\t\t<h2>Suspendisse imperdiet</h2>
\t\t\t\t\t\t\t\t\t<div class=\"inf\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"quickview_manufacture manufacture manufacture\">Brand: <a href=\"http://localhost/template_52891_cw21kXN65RYum715QAIo/theme509/theme509((full))/index.php?route=product/manufacturer/info&amp;manufacturer_id=10\">Fusce vestibulum</a></p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"product_model model\">Model:Product 19</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"product_stock prod-stock-2\">Availability:</p>
\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"product_stock prod-stock\">In Stock</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"price\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\$1,000.00\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"cart-button\">
\t\t\t\t\t\t\t\t\t\t<button class=\"btn btn-add\" type=\"button\" onclick=\"cart.add('46');\"><i class=\"fa fa-shopping-cart\"></i></button>
\t\t\t\t\t\t\t\t\t\t<button class=\"btn btn-icon\" type=\"button\" data-toggle=\"tooltip\" title=\"Add to Wish List\" onclick=\"wishlist.add('46');\"><i class=\"fa fa-heart\"></i></button>
\t\t\t\t\t\t\t\t\t\t<button class=\"btn btn-icon\" type=\"button\" data-toggle=\"tooltip\" title=\"Compare this Product\" onclick=\"compare.add('46');\"><i class=\"fa fa-exchange\"></i></button>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"clear\"></div>
\t\t\t\t\t\t\t\t\t<div class=\"rating\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-sm-12\">
\t\t\t\t\t\t\t\t\t<div class=\"quickview_description description\">
\t\t\t\t\t\t\t\t\t\t<iframe width=\"560\" height=\"315\" src=\"//www.youtube.com/embed/xvhDTxwUkEc?rel=0&amp;controls=0&amp;showinfo=0\" frameborder=\"0\" allowfullscreen></iframe>
<p><b>Traditions are the cornerstone</b> of our noble business and we know how to observe them. Being one of the leading perfume manufacturers, our company has priceless experience in creating new scents and successful brands. We are glad to welcome you at our first online store for real perfume connoisseurs. </p>

<p><b>If you want to sell</b> perfumes you should know that nice fragrance is not enough for success. You must tell original story that will give your perfumes enough charm to attract customers. So we are here to tell you many interesting stories with charming aroma.  </p>

<p><b>We are here to open</b> you the absolutely new world – a world full of sensuality, passion and positive emotions. Go ahead and pick one and you’ll see how it could change your life. Write your own story with our perfumes! Satisfied clients and perfect customer service are our main rules, so leave your hesitations behind and let’s start shopping! </p>\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"image\"><a href=\"http://localhost/template_52891_cw21kXN65RYum715QAIo/theme509/theme509((full))/index.php?route=product/product&amp;product_id=46\"><img alt=\"Suspendisse imperdiet\" title=\"Suspendisse imperdiet\" class=\"img-responsive lazy\" data-src=\"";
        // line 897
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/cache/catalog/product-55-270x420.png"), "html", null, true);
        echo "\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/catalog/preload.gif"), "html", null, true);
        echo "\"  /></a></div>
\t\t\t<div class=\"caption\">
\t\t\t\t<div class=\"name\"><a href=\"http://localhost/template_52891_cw21kXN65RYum715QAIo/theme509/theme509((full))/index.php?route=product/product&amp;product_id=46\">Suspendisse imperdiet</a></div>
\t\t\t\t<!--<div class=\"description\">
Traditions are the cornerstone of our noble business and we know how to observe them. Being one of..</div>-->
\t\t\t\t\t\t\t\t<div class=\"rating\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"price\">
\t\t\t\t\t\t\t\t\$1,000.00\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t<div class=\"cart-button\">
\t\t\t\t<button class=\"btn btn-add\" type=\"button\" onclick=\"cart.add('46');\"><i class=\"fa fa-shopping-cart hidden-lg\"></i> <span class=\"hidden-xs hidden-sm hidden-md\">Add to Cart</span></button>
\t\t\t\t<!--<button type=\"button\" data-toggle=\"tooltip\" title=\"Add to Wish List\" onclick=\"wishlist.add('46');\"><i class=\"fa fa-heart\"></i></button>
\t\t\t\t<button type=\"button\" data-toggle=\"tooltip\" title=\"Compare this Product\" onclick=\"compare.add('46');\"><i class=\"fa fa-exchange\"></i></button>-->
\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t\t\t<div class=\"product-layout col-lg-3 col-md-3 col-sm-3 col-xs-12\">
\t\t\t<div class=\"product-thumb transition\">
\t\t\t\t<a class=\"quickview\" rel=\"group\" href=\"#quickview_7\">
\t\t\t\t\tQuick View\t\t\t\t</a>
\t\t\t\t<div style=\"display:none\">
\t\t\t\t\t<div id=\"quickview_7\">
\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t<div class=\"left col-sm-4\">
\t\t\t\t\t\t\t\t\t<div class=\"quickview_image image\"><a href=\"http://localhost/template_52891_cw21kXN65RYum715QAIo/theme509/theme509((full))/index.php?route=product/product&amp;product_id=32\"><img alt=\"Nulla vitae eleifend\" title=\"Nulla vitae eleifend\" class=\"img-responsive\" src=\"";
        // line 927
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/cache/catalog/product-28-270x420.png"), "html", null, true);
        echo "\" /></a></div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"right col-sm-8\">
\t\t\t\t\t\t\t\t\t<h2>Nulla vitae eleifend</h2>
\t\t\t\t\t\t\t\t\t<div class=\"inf\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"quickview_manufacture manufacture manufacture\">Brand: <a href=\"http://localhost/template_52891_cw21kXN65RYum715QAIo/theme509/theme509((full))/index.php?route=product/manufacturer/info&amp;manufacturer_id=8\">Lorem ipsum</a></p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"product_model model\">Model:Product 5</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"product_stock prod-stock-2\">Availability:</p>
\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"product_stock prod-stock\">In Stock</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"price\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"price-new\">\$90.00</span> <span class=\"price-old\">\$100.00</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"cart-button\">
\t\t\t\t\t\t\t\t\t\t<button class=\"btn btn-add\" type=\"button\" onclick=\"cart.add('32');\"><i class=\"fa fa-shopping-cart\"></i></button>
\t\t\t\t\t\t\t\t\t\t<button class=\"btn btn-icon\" type=\"button\" data-toggle=\"tooltip\" title=\"Add to Wish List\" onclick=\"wishlist.add('32');\"><i class=\"fa fa-heart\"></i></button>
\t\t\t\t\t\t\t\t\t\t<button class=\"btn btn-icon\" type=\"button\" data-toggle=\"tooltip\" title=\"Compare this Product\" onclick=\"compare.add('32');\"><i class=\"fa fa-exchange\"></i></button>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"clear\"></div>
\t\t\t\t\t\t\t\t\t<div class=\"rating\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-sm-12\">
\t\t\t\t\t\t\t\t\t<div class=\"quickview_description description\">
\t\t\t\t\t\t\t\t\t\t<iframe width=\"560\" height=\"315\" src=\"//www.youtube.com/embed/xvhDTxwUkEc?rel=0&amp;controls=0&amp;showinfo=0\" frameborder=\"0\" allowfullscreen></iframe>
<p><b>Traditions are the cornerstone</b> of our noble business and we know how to observe them. Being one of the leading perfume manufacturers, our company has priceless experience in creating new scents and successful brands. We are glad to welcome you at our first online store for real perfume connoisseurs. </p>

<p><b>If you want to sell</b> perfumes you should know that nice fragrance is not enough for success. You must tell original story that will give your perfumes enough charm to attract customers. So we are here to tell you many interesting stories with charming aroma.  </p>

<p><b>We are here to open</b> you the absolutely new world – a world full of sensuality, passion and positive emotions. Go ahead and pick one and you’ll see how it could change your life. Write your own story with our perfumes! Satisfied clients and perfect customer service are our main rules, so leave your hesitations behind and let’s start shopping! </p>\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"sale\">Sale</div>
\t\t\t\t\t\t<div class=\"image\"><a href=\"http://localhost/template_52891_cw21kXN65RYum715QAIo/theme509/theme509((full))/index.php?route=product/product&amp;product_id=32\"><img alt=\"Nulla vitae eleifend\" title=\"Nulla vitae eleifend\" class=\"img-responsive lazy\" data-src=\"";
        // line 969
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/cache/catalog/product-28-270x420.png"), "html", null, true);
        echo "\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/catalog/preload.gif"), "html", null, true);
        echo "\"  /></a></div>
\t\t\t<div class=\"caption\">
\t\t\t\t<div class=\"name\"><a href=\"http://localhost/template_52891_cw21kXN65RYum715QAIo/theme509/theme509((full))/index.php?route=product/product&amp;product_id=32\">Nulla vitae eleifend</a></div>
\t\t\t\t<!--<div class=\"description\">
Traditions are the cornerstone of our noble business and we know how to observe them. Being one of..</div>-->
\t\t\t\t\t\t\t\t<div class=\"rating\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"price\">
\t\t\t\t\t\t\t\t<span class=\"price-new\">\$90.00</span> <span class=\"price-old\">\$100.00</span>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t<div class=\"cart-button\">
\t\t\t\t<button class=\"btn btn-add\" type=\"button\" onclick=\"cart.add('32');\"><i class=\"fa fa-shopping-cart hidden-lg\"></i> <span class=\"hidden-xs hidden-sm hidden-md\">Add to Cart</span></button>
\t\t\t\t<!--<button type=\"button\" data-toggle=\"tooltip\" title=\"Add to Wish List\" onclick=\"wishlist.add('32');\"><i class=\"fa fa-heart\"></i></button>
\t\t\t\t<button type=\"button\" data-toggle=\"tooltip\" title=\"Compare this Product\" onclick=\"compare.add('32');\"><i class=\"fa fa-exchange\"></i></button>-->
\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t\t\t<div class=\"product-layout col-lg-3 col-md-3 col-sm-3 col-xs-12\">
\t\t\t<div class=\"product-thumb transition\">
\t\t\t\t<a class=\"quickview\" rel=\"group\" href=\"#quickview_8\">
\t\t\t\t\tQuick View\t\t\t\t</a>
\t\t\t\t<div style=\"display:none\">
\t\t\t\t\t<div id=\"quickview_8\">
\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t<div class=\"left col-sm-4\">
\t\t\t\t\t\t\t\t\t<div class=\"quickview_image image\"><a href=\"http://localhost/template_52891_cw21kXN65RYum715QAIo/theme509/theme509((full))/index.php?route=product/product&amp;product_id=28\"><img alt=\"Aliquam eget\" title=\"Aliquam eget\" class=\"img-responsive\" src=\"";
        // line 1000
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/cache/catalog/product-10-270x420.png"), "html", null, true);
        echo "\" /></a></div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"right col-sm-8\">
\t\t\t\t\t\t\t\t\t<h2>Aliquam eget</h2>
\t\t\t\t\t\t\t\t\t<div class=\"inf\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"quickview_manufacture manufacture manufacture\">Brand: <a href=\"http://localhost/template_52891_cw21kXN65RYum715QAIo/theme509/theme509((full))/index.php?route=product/manufacturer/info&amp;manufacturer_id=5\">Donec eu</a></p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"product_model model\">Model:Product 1</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"product_stock prod-stock-2\">Availability:</p>
\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"product_stock prod-stock\">In Stock</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"price\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"price-new\">\$80.00</span> <span class=\"price-old\">\$100.00</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"cart-button\">
\t\t\t\t\t\t\t\t\t\t<button class=\"btn btn-add\" type=\"button\" onclick=\"cart.add('28');\"><i class=\"fa fa-shopping-cart\"></i></button>
\t\t\t\t\t\t\t\t\t\t<button class=\"btn btn-icon\" type=\"button\" data-toggle=\"tooltip\" title=\"Add to Wish List\" onclick=\"wishlist.add('28');\"><i class=\"fa fa-heart\"></i></button>
\t\t\t\t\t\t\t\t\t\t<button class=\"btn btn-icon\" type=\"button\" data-toggle=\"tooltip\" title=\"Compare this Product\" onclick=\"compare.add('28');\"><i class=\"fa fa-exchange\"></i></button>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"clear\"></div>
\t\t\t\t\t\t\t\t\t<div class=\"rating\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-sm-12\">
\t\t\t\t\t\t\t\t\t<div class=\"quickview_description description\">
\t\t\t\t\t\t\t\t\t\t<iframe width=\"560\" height=\"315\" src=\"//www.youtube.com/embed/xvhDTxwUkEc?rel=0&amp;controls=0&amp;showinfo=0\" frameborder=\"0\" allowfullscreen></iframe>
<p><b>Traditions are the cornerstone</b> of our noble business and we know how to observe them. Being one of the leading perfume manufacturers, our company has priceless experience in creating new scents and successful brands. We are glad to welcome you at our first online store for real perfume connoisseurs. </p>

<p><b>If you want to sell</b> perfumes you should know that nice fragrance is not enough for success. You must tell original story that will give your perfumes enough charm to attract customers. So we are here to tell you many interesting stories with charming aroma.  </p>

<p><b>We are here to open</b> you the absolutely new world – a world full of sensuality, passion and positive emotions. Go ahead and pick one and you’ll see how it could change your life. Write your own story with our perfumes! Satisfied clients and perfect customer service are our main rules, so leave your hesitations behind and let’s start shopping! </p>\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"sale\">Sale</div>
\t\t\t\t\t\t<div class=\"image\"><a href=\"http://localhost/template_52891_cw21kXN65RYum715QAIo/theme509/theme509((full))/index.php?route=product/product&amp;product_id=28\"><img alt=\"Aliquam eget\" title=\"Aliquam eget\" class=\"img-responsive lazy\" data-src=\" ";
        // line 1042
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/cache/catalog/product-10-270x420.png"), "html", null, true);
        echo "\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/catalog/preload.gif"), "html", null, true);
        echo "\"  /></a></div>
\t\t\t<div class=\"caption\">
\t\t\t\t<div class=\"name\"><a href=\"http://localhost/template_52891_cw21kXN65RYum715QAIo/theme509/theme509((full))/index.php?route=product/product&amp;product_id=28\">Aliquam eget</a></div>
\t\t\t\t<!--<div class=\"description\">
Traditions are the cornerstone of our noble business and we know how to observe them. Being one of..</div>-->
\t\t\t\t\t\t\t\t<div class=\"rating\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"price\">
\t\t\t\t\t\t\t\t<span class=\"price-new\">\$80.00</span> <span class=\"price-old\">\$100.00</span>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t<div class=\"cart-button\">
\t\t\t\t<button class=\"btn btn-add\" type=\"button\" onclick=\"cart.add('28');\"><i class=\"fa fa-shopping-cart hidden-lg\"></i> <span class=\"hidden-xs hidden-sm hidden-md\">Add to Cart</span></button>
\t\t\t\t<!--<button type=\"button\" data-toggle=\"tooltip\" title=\"Add to Wish List\" onclick=\"wishlist.add('28');\"><i class=\"fa fa-heart\"></i></button>
\t\t\t\t<button type=\"button\" data-toggle=\"tooltip\" title=\"Compare this Product\" onclick=\"compare.add('28');\"><i class=\"fa fa-exchange\"></i></button>-->
\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t\t\t</div>
\t</div>
</div>
</div>
\t</div>
</div>
<div class=\"content_bottom\">
\t\t\t<div class=\"box_html video_block\">
                            <div style=\"position: absolute; z-index: -1; top: 0px; left: 0px; bottom: 0px; right: 0px; overflow: hidden; background-size: cover; background-position: 50% 50%; background-repeat: no-repeat;\"><video autoplay=\"\" loop=\"\" style=\"visibility: visible; margin: auto; position: absolute; z-index: -1; top: 50%; left: 50%; transform: translate(-50%, -50%); width: 2002px; height: auto;\"><source src=\"";
        // line 1073
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("video/TunisiaMall.mp4"), "html", null, true);
        echo "\" type=\"video/mp4\"><source src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("video/video_1.webm"), "html", null, true);
        echo "\" type=\"video/webm\"><source src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("video/video_1.ogv"), "html", null, true);
        echo "\" type=\"video/ogg\"></video>
                            <video autoplay=\"\" loop=\"\" style=\"visibility: visible; margin: auto; position: absolute; z-index: -1; top: 50%; left: 50%; transform: translate(-50%, -50%); width: 2002px; height: auto;\"><source src=\"";
        // line 1074
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("video/TunisiaMall.mp4"), "html", null, true);
        echo "\" type=\"video/mp4\"><source src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("video/video_1.webm"), "html", null, true);
        echo "\" type=\"video/webm\"><source src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("video/video_1.ogv"), "html", null, true);
        echo "\" type=\"video/ogg\"></video>
\t<source src=\"";
        // line 1075
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("video/TunisiaMall.mp4"), "html", null, true);
        echo "\" type=\"video/mp4\">
        <source src=\"";
        // line 1076
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("video/video_1.webm"), "html", null, true);
        echo "\" type=\"video/webm\">
        <source src=\"";
        // line 1077
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("video/video_1.ogv"), "html", null, true);
        echo "\" type=\"video/ogg\">
        <video autoplay=\"\" loop=\"\" style=\"visibility: visible; margin: auto; position: absolute; z-index: -1; top: 50%; left: 50%; transform: translate(-50%, -50%); width: 2002px; height: auto;\"><source src=\"";
        // line 1078
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("video/TunisiaMall.mp4"), "html", null, true);
        echo "\" type=\"video/mp4\"><source src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("video/video_1.webm"), "html", null, true);
        echo "\" type=\"video/webm\"><source src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("video/video_1.ogv"), "html", null, true);
        echo "\" type=\"video/ogg\">
        </video>
                        </div>
                            <div class=\"container\"><h4>Get up to</h4>

<h2>50%</h2>

<h1>OFF</h1>

<h3>on new arrivals</h3>

<a href=\"index.php?route=product/product&amp;product_id=42\">Shop now!</a></div></div>
<div class=\"box_html map\">
    <div id=\"map\">
        
    </div>
        
</div>
</div>
<footer>
  <div class=\"container\">
\t<div class=\"row\">
\t  \t  <div class=\"col-sm-2\">
\t\t<h5>Information</h5>
\t\t<ul class=\"list-unstyled\">
\t\t  \t\t  <li><a href=\"About Us\">About Us</a></li>
\t\t  \t\t  <li><a href=\"Delivery Information\">Delivery Information</a></li>
\t\t  \t\t  <li><a href=\"Privacy Policy\">Privacy Policy</a></li>
\t\t  \t\t  <li><a href=\"Conditions\">Terms &amp; Conditions</a></li>
\t\t  \t\t</ul>
\t  </div>
\t  \t  <div class=\"col-sm-2\">
\t\t<h5>Customer Service</h5>
\t\t<ul class=\"list-unstyled\">
\t\t  <li><a href=\"contact\">Contact Us</a></li>
\t\t  <li><a href=\"Returns\">Returns</a></li>
\t\t  <li><a href=\"Site Map\">Site Map</a></li>
\t\t</ul>
\t  </div>
\t  <div class=\"col-sm-2\">
\t\t<h5>Extras</h5>
\t\t<ul class=\"list-unstyled\">
\t\t  <li><a href=\"http://localhost/template_52891_cw21kXN65RYum715QAIo/theme509/theme509((full))/index.php?route=product/manufacturer\">Brands</a></li>
\t\t  <li><a href=\"http://localhost/template_52891_cw21kXN65RYum715QAIo/theme509/theme509((full))/index.php?route=account/voucher\">Gift Vouchers</a></li>
\t\t  <li><a href=\"http://localhost/template_52891_cw21kXN65RYum715QAIo/theme509/theme509((full))/index.php?route=affiliate/account\">Affiliates</a></li>
\t\t  <li><a href=\"http://localhost/template_52891_cw21kXN65RYum715QAIo/theme509/theme509((full))/index.php?route=product/special\">Specials</a></li>
\t\t</ul>
\t  </div>
\t  <div class=\"col-sm-2\">
\t\t<h5>My Account</h5>
\t\t<ul class=\"list-unstyled\">
\t\t  <li><a href=\"Account\">My Account</a></li>
\t\t  <li><a href=\"order\">Order History</a></li>
\t\t  <li><a href=\"wishlist\">Wish List</a></li>
\t\t  <li><a href=\"newsletter\">Newsletter</a></li>
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
        // line 1197
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/catalog/view/theme/theme509/js/livesearch.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>

</div>



</body></html>";
    }

    // line 403
    public function block_pack($context, array $blocks = array())
    {
        echo "<img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/cache/catalog/banner-3-370x370.jpg"), "html", null, true);
        echo "\" alt=\"banner-3\" class=\"img-responsive\" />
\t\t\t\t\t\t\t\t<div class=\"s-desc\"><h2>Perfume</h2>
<h1>Gift set</h1></div>  ";
    }

    public function getTemplateName()
    {
        return "MyappuserBundle:View1:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1480 => 403,  1469 => 1197,  1343 => 1078,  1339 => 1077,  1335 => 1076,  1331 => 1075,  1323 => 1074,  1315 => 1073,  1279 => 1042,  1234 => 1000,  1198 => 969,  1153 => 927,  1118 => 897,  1075 => 857,  1038 => 825,  993 => 783,  957 => 752,  912 => 710,  876 => 679,  831 => 637,  796 => 607,  753 => 567,  717 => 536,  672 => 494,  615 => 442,  581 => 413,  572 => 406,  570 => 403,  558 => 394,  546 => 385,  510 => 354,  459 => 306,  453 => 303,  351 => 204,  321 => 177,  317 => 176,  313 => 175,  307 => 172,  237 => 105,  233 => 104,  229 => 103,  223 => 100,  218 => 98,  214 => 97,  207 => 93,  203 => 92,  199 => 91,  192 => 87,  188 => 86,  184 => 85,  180 => 84,  175 => 82,  171 => 81,  166 => 79,  162 => 78,  158 => 77,  154 => 76,  150 => 75,  146 => 74,  140 => 71,  135 => 69,  131 => 68,  127 => 67,  123 => 66,  119 => 65,  115 => 64,  111 => 63,  107 => 62,  103 => 61,  98 => 59,  94 => 58,  90 => 57,  86 => 56,  82 => 55,  78 => 54,  74 => 53,  20 => 1,);
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
/* <h1 id="favicon1"><a href="/"><link href="{{ asset('images/catalog/favicon.png')}}" rel="icon" /></a></h1>*/
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
/* 			<li><a href="My Account"><i class="fa fa-user"></i> <span>My Account</span></a></li>*/
/* 						<li><a href="registerAccoun"><i class="fa fa-user"></i> Register</a></li>*/
/*                                                 <li><a href="passwordAlreadyRequested"><i class="fa fa-user"></i> passwordAlreadyRequested</a></li>*/
/* 			                        <li><a href="loginAccoun"><i class="fa fa-lock"></i>Login</a></li>*/
/*                                                 <li><a href="Wish List"><i class="fa fa-heart"></i> <span>Wish List (0)</span></a></li>*/
/* 			<li><a href="Shopping Cart"><i class="fa fa-shopping-cart"></i> <span>Shopping Cart</span></a></li>*/
/* 			<li><a href="Checkout"><i class="fa fa-share"></i> <span>Checkout</span></a></li>*/
/* 		</ul>*/
/* 				<ul class="foot">*/
/* 									<li><a href="http://localhost/template_52891_cw21kXN65RYum715QAIo/theme509/theme509((full))/index.php?route=information/information&amp;information_id=4">About Us</a></li>*/
/* 						<li><a href="http://localhost/template_52891_cw21kXN65RYum715QAIo/theme509/theme509((full))/index.php?route=information/information&amp;information_id=6">Delivery Information</a></li>*/
/* 						<li><a href="http://localhost/template_52891_cw21kXN65RYum715QAIo/theme509/theme509((full))/index.php?route=information/information&amp;information_id=3">Privacy Policy</a></li>*/
/* 						<li><a href="http://localhost/template_52891_cw21kXN65RYum715QAIo/theme509/theme509((full))/index.php?route=information/information&amp;information_id=5">Terms &amp; Conditions</a></li>*/
/* 								</ul>*/
/* 				<ul class="foot foot-1">*/
/* 			<li><a href="contact">Contact Us</a></li>*/
/* 			<li><a href="/return/insert">Returns</a></li>*/
/* 			<li><a href="sitemap">Site Map</a></li>*/
/* 		</ul>*/
/* 		*/
/* 		<ul class="foot foot-2">*/
/* 			<li><a href="http://localhost/template_52891_cw21kXN65RYum715QAIo/theme509/theme509((full))/index.php?route=product/manufacturer">Brands</a></li>*/
/* 			<li><a href="http://localhost/template_52891_cw21kXN65RYum715QAIo/theme509/theme509((full))/index.php?route=account/voucher">Gift Vouchers</a></li>*/
/* 			<li><a href="http://localhost/template_52891_cw21kXN65RYum715QAIo/theme509/theme509((full))/index.php?route=affiliate/account">Affiliates</a></li>*/
/* 			<li><a href="http://localhost/template_52891_cw21kXN65RYum715QAIo/theme509/theme509((full))/index.php?route=product/special">Specials</a></li>*/
/* 		</ul>*/
/* 		<ul class="foot foot-3">*/
/* 			<li><a href="order">Order History</a></li>*/
/* 			<li><a href="newsletter">Newsletter</a></li>*/
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
/* <form action="http://localhost/template_52891_cw21kXN65RYum715QAIo/theme509/theme509((full))/index.php?route=common/currency/currency" method="post" enctype="multipart/form-data" id="currency">*/
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
/*   <input type="hidden" name="redirect" value="home" />*/
/* </form>*/
/* </div>*/
/* 		<div class="pull-right box-language">*/
/* <form action="http://localhost/template_52891_cw21kXN65RYum715QAIo/theme509/theme509((full))/index.php?route=common/language/language" method="post" enctype="multipart/form-data" id="language">*/
/*   <div class="btn-group">*/
/* 	<button class="btn btn-link dropdown-toggle" data-toggle="dropdown">*/
/* 			<img src="{{ asset('images/flags/gb.png') }}" alt="English" title="English">*/
/* 	en							<span class="hidden-xs hidden-sm hidden-md">Language</span> <i class="fa fa-caret-down"></i></button>*/
/* 	<ul class="dropdown-menu pull-right">*/
/* 	  	  <li><a href="en"><img src="{{ asset('images/flags/gb.png') }}" alt="English" title="English" /> English</a></li>*/
/* 	  	  <li><a href="de"><img src="{{ asset('images/flags/de.png') }}" alt="Deutsch" title="Deutsch" /> Deutsch</a></li>*/
/* 	  	  <li><a href="ru"><img src="{{ asset('images/flags/ru.png') }}" alt="Р�?�?�?кий" title="Р�?�?�?кий" /> Р�?�?�?кий</a></li>*/
/* 	  	</ul>*/
/*   </div>*/
/*   <input type="hidden" name="code" value="" />*/
/*   <input type="hidden" name="redirect" value="home" />*/
/* </form>*/
/* </div>*/
/* 		<div id="top-links" class="nav pull-left">*/
/* 		<ul class="list-inline">*/
/* 			<!--<li><a href="http://localhost/template_52891_cw21kXN65RYum715QAIo/theme509/theme509((full))/index.php?route=information/contact"><i class="fa fa-phone"></i></a> <span class="hidden-xs hidden-sm hidden-md">800-2345-6789;</span></li>-->*/
/* 			<li class="first"><a href="home"><i class="fa fa-home"></i><span class="hidden-xs hidden-sm hidden-md">Home</span></a></li>*/
/* 			<li class="dropdown"><a href="account" title="My Account" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> <span class="hidden-xs hidden-sm hidden-md">My Account</span> <span class="caret"></span></a>*/
/* 			<ul class="dropdown-menu dropdown-menu-left">*/
/* 		                 <li><a href="register/">Register</a></li>*/
/* 				 <li><a href="login">Login</a></li>*/
/* 							</ul>*/
/* 			</li>*/
/* 			<li><a href="wishlist" id="wishlist-total" title="Wish List (0)"><i class="fa fa-heart"></i> <span class="hidden-xs hidden-sm hidden-md">Wish List (0)</span></a></li>*/
/* 			<li><a href="cart" title="Shopping Cart"><i class="fa fa-shopping-cart"></i> <span class="hidden-xs hidden-sm hidden-md">Shopping Cart</span></a></li>*/
/* 			<li><a href="checkout" title="Checkout"><i class="fa fa-share"></i> <span class="hidden-xs hidden-sm hidden-md">Checkout</span></a></li>*/
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
/* 			<a href="checkout " title="Checkout">*/
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
/* <a href="http://localhost/template_52891_cw21kXN65RYum715QAIo/theme509/theme509((full))/index.php?route=product/category&amp;path=33">Makeup</a>*/
/* */
/* </li>*/
/* <li>*/
/* <a href="profile">profile</a>*/
/* <ul>*/
/* <li>*/
/* <a href="userBundle_Pages">profile client</a>*/
/* </li>*/
/* <li>*/
/* <a href="respensablePages">profile responsable</a>*/
/* </li>*/
/* <li>*/
/* <a href="http://localhost/template_52891_cw21kXN65RYum715QAIo/theme509/theme509((full))/index.php?route=product/category&amp;path=30">Phasellus vel</a>*/
/* </li>*/
/* <li>*/
/* <a href="http://localhost/template_52891_cw21kXN65RYum715QAIo/theme509/theme509((full))/index.php?route=product/category&amp;path=28" class="parent">Praesent imperdiet</a><ul>*/
/* <li>*/
/* <a href="http://localhost/template_52891_cw21kXN65RYum715QAIo/theme509/theme509((full))/index.php?route=product/category&amp;path=36">Aliquam eget</a>*/
/* </li>*/
/* <li>*/
/* <a href="http://localhost/template_52891_cw21kXN65RYum715QAIo/theme509/theme509((full))/index.php?route=product/category&amp;path=35">Lorem ipsum</a>*/
/* </li>*/
/* */
/* </ul>*/
/* */
/* </li>*/
/* <li>*/
/* <a href="http://localhost/template_52891_cw21kXN65RYum715QAIo/theme509/theme509((full))/index.php?route=product/category&amp;path=29">Praesent sodales</a>*/
/* </li>*/
/* */
/* </ul>*/
/* */
/* </li>*/
/* <li>*/
/* <a href="http://localhost/template_52891_cw21kXN65RYum715QAIo/theme509/theme509((full))/index.php?route=product/category&amp;path=20">lip care</a>*/
/* */
/* </li>*/
/* <li>*/
/* <a href="http://localhost/template_52891_cw21kXN65RYum715QAIo/theme509/theme509((full))/index.php?route=product/category&amp;path=18">cleansers</a>*/
/* */
/* </li>*/
/* <li>*/
/* <a href="http://localhost/template_52891_cw21kXN65RYum715QAIo/theme509/theme509((full))/index.php?route=product/category&amp;path=34">toners</a>*/
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
/* <a href="Makeup">Makeup</a>*/
/* */
/* </li>*/
/* <li>*/
/* <a href="skin care">les profiles</a>*/
/* <ul>*/
/* <li>*/
/* <a href="{{ path('profile_user') }}">profile client</a>*/
/* </li>*/
/* <li>*/
/*      <a href="{{ path('respensablePages') }}">profile respensable</a>*/
/* */
/* </li>*/
/* <li>*/
/* <a href="admin/pages">adminstrateur</a>*/
/* </li>*/
/* <li>*/
/* <a href="Praesent imperdiet" class="parent">Praesent imperdiet</a><ul>*/
/* <li>*/
/* <a href="http://localhost/template_52891_cw21kXN65RYum715QAIo/theme509/theme509((full))/index.php?route=product/category&amp;path=36">Aliquam eget</a>*/
/* </li>*/
/* <li>*/
/* <a href="http://localhost/template_52891_cw21kXN65RYum715QAIo/theme509/theme509((full))/index.php?route=product/category&amp;path=35">Lorem ipsum</a>*/
/* </li>*/
/* */
/* </ul>*/
/* */
/* </li>*/
/* <li>*/
/* <a href="Praesent sodales">Praesent sodales</a>*/
/* </li>*/
/* */
/* </ul>*/
/* */
/* </li>*/
/* <li>*/
/* <a href="http://localhost/template_52891_cw21kXN65RYum715QAIo/theme509/theme509((full))/index.php?route=product/category&amp;path=20">lip care</a>*/
/* */
/* </li>*/
/* <li>*/
/* <a href="http://localhost/template_52891_cw21kXN65RYum715QAIo/theme509/theme509((full))/index.php?route=product/category&amp;path=18">cleansers</a>*/
/* */
/* </li>*/
/* <li>*/
/* <a href="http://localhost/template_52891_cw21kXN65RYum715QAIo/theme509/theme509((full))/index.php?route=product/category&amp;path=34">toners</a>*/
/* */
/* </li>*/
/* */
/* </ul>*/
/* 			<div class="clear"></div>*/
/* 		</div>*/
/* 	</div>*/
/* </div>*/
/* */
/* <p id="back-top"> <a href="#top"><span></span></a> </p>*/
/* 			<div class="header_modules"><div id="parallax_2" class="parallax" >*/
/*   */
/* 			*/
/*                             <div data-source-url="{{ asset('images/cache/catalog/parallax-1-jdida.jpg') }}" class="parallax-1" style="width: 2050px; margin-left: -639px; left: 50%; background-image: url({{ asset('images/cache/catalog/parallax-1-jdida.jpg') }}); background-attachment: fixed; background-position: 50% 81.5889%;">*/
/* 			<div class="container">*/
/* 			<div class="row">*/
/* 				<div class="col-sm-12">*/
/* 					<h4>Define</h4>*/
/* <h2>beautiful</h2>*/
/* <h1>LOOK &amp;</h1>*/
/* <h3>sweet skin</h3>*/
/* <a href="Shop now">Shop now!</a>				</div>*/
/* 			</div>*/
/* 			</div>*/
/* 		</div>*/
/* */
/* 	*/
/* 	  */
/* </div>*/
/* */
/* <script>*/
/* 	jQuery(document).ready(function() {*/
/* 	jQuery("#parallax_2>div").cherryFixedParallax({*/
/* 		invert: false,*/
/* 		});    */
/* 	}); */
/* </script>*/
/* </div>*/
/* 			*/
/* <div class="container">*/
/*   <div class="row">				<div id="content" class="col-sm-12"><div id="banner0" class="banners row">*/
/* 			<div class="col-sm-4">*/
/* 		<div class="banner-box">*/
/* 			<a class="clearfix" href="index.php?route=product/product&amp;product_id=43">*/
/* 				<img src="{{ asset('images/cache/catalog/banner-1-370x370.jpg') }}" alt="banner-1" class="img-responsive" />*/
/* 								<div class="s-desc"><h2>Beauty</h2>*/
/* <h1>Products</h1></div>*/
/* 							</a>*/
/* 		</div>*/
/* 	</div>*/
/* 				<div class="col-sm-4">*/
/* 		<div class="banner-box">*/
/* 			<a class="clearfix" href="index.php?route=product/product&amp;product_id=42">*/
/* 				<img src="{{ asset('images/cache/catalog/banner-2-370x370.jpg')}}" alt="banner-2" class="img-responsive" />*/
/* 								<div class="s-desc"><h2>Must</h2>*/
/* <h1>Have</h1></div>*/
/* 							</a>*/
/* 		</div>*/
/* 	</div>*/
/* 				<div class="col-sm-4">*/
/* 		<div class="banner-box">*/
/* 			<a class="clearfix" href="index.php?route=product/product&amp;product_id=28">*/
/* 				  {% block pack %}<img src="{{ asset('images/cache/catalog/banner-3-370x370.jpg') }}" alt="banner-3" class="img-responsive" />*/
/* 								<div class="s-desc"><h2>Perfume</h2>*/
/* <h1>Gift set</h1></div>  {% endblock  %}*/
/* 							</a>*/
/* 		</div>*/
/* 	</div>*/
/* 		</div>*/
/* <div id="parallax_0" class="parallax" >*/
/*   */
/* 			*/
/* 			<div data-source-url={{ asset('images/cache/catalog/parallax-2-jdida.jpg') }} class="parallax-2" style="width: 1278px; margin-left: -639px; left: 50%; background-image: url({{ asset('images/cache/catalog/parallax-2-jdida.jpg') }}); background-attachment: fixed; background-position: 50% 65.8314%;">*/
/*                             <div class="container">*/
/* 			<div class="row">*/
/* 				<div class="col-sm-12">*/
/* 					<h4>10%-20% off</h4>*/
/* <h2>ideal</h2>*/
/* <h1>skin</h1>*/
/* <h3>nutrition face care</h3>*/
/* <a href="index.php?route=product/product&product_id=30">Shop now!</a>				</div>*/
/* 			</div>*/
/* 			</div>*/
/* 		</div>*/
/* */
/* 	*/
/* 	  */
/* </div>*/
/* */
/* <script>*/
/* 	jQuery(document).ready(function() {*/
/* 	jQuery("#parallax_0>div").cherryFixedParallax({*/
/* 		invert: false,*/
/* 		});    */
/* 	}); */
/* </script>*/
/* <div class="box_html advertising">*/
/* 	<div class="container"><div class="row"><div class="col-sm-4" style="opacity: 1; left: 0px;"><div><h1>Free Shipping</h1><h2>on orders over $99</h2><p>Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p><a href="index.php?route=product/product&amp;product_id=43"><i class="fa fa-angle-right"></i></a></div></div><div class="col-sm-4" style="opacity: 1; bottom: 0px;"><div><h1>Order return</h1><h2>Returns within 14 days</h2><p>Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p><a href="index.php?route=product/product&amp;product_id=40"><i class="fa fa-angle-right"></i></a></div></div><div class="col-sm-4" style="opacity: 1; right: 0px;"><div><h1>COD</h1><h2>Cash on delivery</h2><p>Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p><a href="index.php?route=product/product&amp;product_id=30"><i class="fa fa-angle-right"></i></a></div></div></div></div></div>*/
/* <div id="parallax_1" class="parallax" >*/
/*   */
/* 			*/
/* 			<div data-source-url={{ asset('images/cache/catalog/parallax-3-jdida.jpg') }} class="parallax-3" style="width: 1278px; margin-left: -639px; left: 50%; background-image: url({{ asset('images/cache/catalog/parallax-3-jdida.jpg') }}); background-attachment: fixed; background-position: 50% 95.9994%;">*/
/*                             <div class="container">*/
/* 			<div class="row">*/
/* 				<div class="col-sm-12">*/
/* 					<h4>Choose from</h4>*/
/* <h2>a new</h2>*/
/* <h1>spring</h1>*/
/* <h3>collection</h3>*/
/* <a href="index.php?route=product/product&product_id=34">Shop now!</a>				</div>*/
/* 			</div>*/
/* 			</div>*/
/* 		</div>*/
/* */
/* 	*/
/* 	  */
/* </div>*/
/* */
/* <script>*/
/* 	jQuery(document).ready(function() {*/
/* 	jQuery("#parallax_1>div").cherryFixedParallax({*/
/* 		invert: false,*/
/* 		});    */
/* 	}); */
/* </script>*/
/* <script>*/
/* 	$(document).ready(function() {*/
/* 		$(".quickview").fancybox({*/
/* 			maxWidth	: 800,*/
/* 			maxHeight	: 600,*/
/* 			fitToView	: false,*/
/* 			width		: '70%',*/
/* 			height		: '70%',*/
/* 			autoSize	: false,*/
/* 			closeClick	: false,*/
/* 			openEffect	: 'elastic',*/
/* 			closeEffect	: 'elastic',*/
/* 			*/
/* 		});*/
/* 	});*/
/* </script>*/
/* <div class="box featured">*/
/* 	<div class="box-heading"><h3>Featured</h3></div>*/
/* 	<div class="box-content">*/
/* 		<div class="row">*/
/* 				<div class="product-layout col-lg-3 col-md-3 col-sm-3 col-xs-12">*/
/* 			<div class="product-thumb transition">*/
/* 				<a class="quickview" rel="group" href="#quickview_1">*/
/* 					Quick View				</a>*/
/* 				<div style="display:none">*/
/* 					<div id="quickview_1">*/
/* 						<div>*/
/* 							<div class="left col-sm-4">*/
/* 									<div class="quickview_image image"><a href="http://localhost/template_52891_cw21kXN65RYum715QAIo/theme509/theme509((full))/index.php?route=product/product&amp;product_id=43"><img alt="Quisque eget" title="Quisque eget" class="img-responsive" src="{{ asset('images/cache/catalog/product-31-270x420.png') }}" /></a></div>*/
/* 								</div>*/
/* 								<div class="right col-sm-8">*/
/* 									<h2>Quisque eget</h2>*/
/* 									<div class="inf">*/
/* 																					<p class="quickview_manufacture manufacture manufacture">Brand: <a href="http://localhost/template_52891_cw21kXN65RYum715QAIo/theme509/theme509((full))/index.php?route=product/manufacturer/info&amp;manufacturer_id=8">Lorem ipsum</a></p>*/
/* 																															<p class="product_model model">Model:Product 16</p>*/
/* 																				<p class="product_stock prod-stock-2">Availability:</p>*/
/* 											*/
/* 																						<p class="product_stock prod-stock">In Stock</p>*/
/* 																															<div class="price">*/
/* 																				<span class="price-new">$400.00</span> <span class="price-old">$500.00</span>*/
/* 																														</div>*/
/* 																			</div>*/
/* 									<div class="cart-button">*/
/* 										<button class="btn btn-add" type="button" onclick="cart.add('43');"><i class="fa fa-shopping-cart"></i></button>*/
/* 										<button class="btn btn-icon" type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('43');"><i class="fa fa-heart"></i></button>*/
/* 										<button class="btn btn-icon" type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('43');"><i class="fa fa-exchange"></i></button>*/
/* 									</div>*/
/* 									<div class="clear"></div>*/
/* 									<div class="rating">*/
/* 																														<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>*/
/* 																																								<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>*/
/* 																																								<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>*/
/* 																																								<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>*/
/* 																																								<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>*/
/* 																													</div>*/
/* 										*/
/* 								</div>*/
/* 								<div class="col-sm-12">*/
/* 									<div class="quickview_description description">*/
/* 										<iframe width="560" height="315" src="//www.youtube.com/embed/xvhDTxwUkEc?rel=0&amp;controls=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>*/
/* <p><b>Traditions are the cornerstone</b> of our noble business and we know how to observe them. Being one of the leading perfume manufacturers, our company has priceless experience in creating new scents and successful brands. We are glad to welcome you at our first online store for real perfume connoisseurs. </p>*/
/* */
/* <p><b>If you want to sell</b> perfumes you should know that nice fragrance is not enough for success. You must tell original story that will give your perfumes enough charm to attract customers. So we are here to tell you many interesting stories with charming aroma.  </p>*/
/* */
/* <p><b>We are here to open</b> you the absolutely new world – a world full of sensuality, passion and positive emotions. Go ahead and pick one and you’ll see how it could change your life. Write your own story with our perfumes! Satisfied clients and perfect customer service are our main rules, so leave your hesitations behind and let’s start shopping! </p>									</div>*/
/* 								</div>*/
/* 						</div>*/
/* 					</div>*/
/* 				</div>*/
/* 							<div class="sale">Sale</div>*/
/* 						<div class="image"><a href="http://localhost/template_52891_cw21kXN65RYum715QAIo/theme509/theme509((full))/index.php?route=product/product&amp;product_id=43"><img alt="Quisque eget" title="Quisque eget" class="img-responsive lazy" data-src="{{ asset ('images/cache/catalog/product-31-270x420.png') }}" src="{{ asset ('images/catalog/preload.gif') }}"  /></a></div>*/
/* 			<div class="caption">*/
/* 				<div class="name"><a href="http://localhost/template_52891_cw21kXN65RYum715QAIo/theme509/theme509((full))/index.php?route=product/product&amp;product_id=43">Quisque eget</a></div>*/
/* 				<!--<div class="description">*/
/* Traditions are the cornerstone of our noble business and we know how to observe them. Being one of..</div>-->*/
/* 								<div class="rating">*/
/* 												<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>*/
/* 																<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>*/
/* 																<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>*/
/* 																<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>*/
/* 																<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>*/
/* 												</div>*/
/* 												<div class="price">*/
/* 								<span class="price-new">$400.00</span> <span class="price-old">$500.00</span>*/
/* 												</div>*/
/* 							</div>*/
/* 			<div class="cart-button">*/
/* 				<button class="btn btn-add" type="button" onclick="cart.add('43');"><i class="fa fa-shopping-cart hidden-lg"></i> <span class="hidden-xs hidden-sm hidden-md">Add to Cart</span></button>*/
/* 				<!--<button type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('43');"><i class="fa fa-heart"></i></button>*/
/* 				<button type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('43');"><i class="fa fa-exchange"></i></button>-->*/
/* 			</div>*/
/* 			</div>*/
/* 		</div>*/
/* 				<div class="product-layout col-lg-3 col-md-3 col-sm-3 col-xs-12">*/
/* 			<div class="product-thumb transition">*/
/* 				<a class="quickview" rel="group" href="#quickview_2">*/
/* 					Quick View				</a>*/
/* 				<div style="display:none">*/
/* 					<div id="quickview_2">*/
/* 						<div>*/
/* 							<div class="left col-sm-4">*/
/* 									<div class="quickview_image image"><a href="http://localhost/template_52891_cw21kXN65RYum715QAIo/theme509/theme509((full))/index.php?route=product/product&amp;product_id=40"><img alt="Vehicula libero sed" title="Vehicula libero sed" class="img-responsive" src="{{ asset('images/cache/catalog/product-16-270x420.png') }}" /></a></div>*/
/* 								</div>*/
/* 								<div class="right col-sm-8">*/
/* 									<h2>Vehicula libero sed</h2>*/
/* 									<div class="inf">*/
/* 																					<p class="quickview_manufacture manufacture manufacture">Brand: <a href="http://localhost/template_52891_cw21kXN65RYum715QAIo/theme509/theme509((full))/index.php?route=product/manufacturer/info&amp;manufacturer_id=8">Lorem ipsum</a></p>*/
/* 																															<p class="product_model model">Model:product 11</p>*/
/* 																				<p class="product_stock prod-stock-2">Availability:</p>*/
/* 											*/
/* 																						<p class="product_stock prod-stock">In Stock</p>*/
/* 																															<div class="price">*/
/* 																				$101.00																														</div>*/
/* 																			</div>*/
/* 									<div class="cart-button">*/
/* 										<button class="btn btn-add" type="button" onclick="cart.add('40');"><i class="fa fa-shopping-cart"></i></button>*/
/* 										<button class="btn btn-icon" type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('40');"><i class="fa fa-heart"></i></button>*/
/* 										<button class="btn btn-icon" type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('40');"><i class="fa fa-exchange"></i></button>*/
/* 									</div>*/
/* 									<div class="clear"></div>*/
/* 									<div class="rating">*/
/* 																														<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>*/
/* 																																								<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>*/
/* 																																								<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>*/
/* 																																								<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>*/
/* 																																								<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>*/
/* 																													</div>*/
/* 										*/
/* 								</div>*/
/* 								<div class="col-sm-12">*/
/* 									<div class="quickview_description description">*/
/* 										<iframe width="560" height="315" src="//www.youtube.com/embed/xvhDTxwUkEc?rel=0&amp;controls=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>*/
/* <p><b>Traditions are the cornerstone</b> of our noble business and we know how to observe them. Being one of the leading perfume manufacturers, our company has priceless experience in creating new scents and successful brands. We are glad to welcome you at our first online store for real perfume connoisseurs. </p>*/
/* */
/* <p><b>If you want to sell</b> perfumes you should know that nice fragrance is not enough for success. You must tell original story that will give your perfumes enough charm to attract customers. So we are here to tell you many interesting stories with charming aroma.  </p>*/
/* */
/* <p><b>We are here to open</b> you the absolutely new world – a world full of sensuality, passion and positive emotions. Go ahead and pick one and you’ll see how it could change your life. Write your own story with our perfumes! Satisfied clients and perfect customer service are our main rules, so leave your hesitations behind and let’s start shopping! </p>									</div>*/
/* 								</div>*/
/* 						</div>*/
/* 					</div>*/
/* 				</div>*/
/* 						<div class="image"><a href="http://localhost/template_52891_cw21kXN65RYum715QAIo/theme509/theme509((full))/index.php?route=product/product&amp;product_id=40"><img alt="Vehicula libero sed" title="Vehicula libero sed" class="img-responsive lazy" data-src="{{ asset('images/cache/catalog/product-16-270x420.png') }}" src="{{ asset('images/catalog/preload.gif') }}"  /></a></div>*/
/* 			<div class="caption">*/
/* 				<div class="name"><a href="http://localhost/template_52891_cw21kXN65RYum715QAIo/theme509/theme509((full))/index.php?route=product/product&amp;product_id=40">Vehicula libero sed</a></div>*/
/* 				<!--<div class="description">*/
/* Traditions are the cornerstone of our noble business and we know how to observe them. Being one of..</div>-->*/
/* 								<div class="rating">*/
/* 												<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>*/
/* 																<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>*/
/* 																<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>*/
/* 																<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>*/
/* 																<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>*/
/* 												</div>*/
/* 												<div class="price">*/
/* 								$101.00												</div>*/
/* 							</div>*/
/* 			<div class="cart-button">*/
/* 				<button class="btn btn-add" type="button" onclick="cart.add('40');"><i class="fa fa-shopping-cart hidden-lg"></i> <span class="hidden-xs hidden-sm hidden-md">Add to Cart</span></button>*/
/* 				<!--<button type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('40');"><i class="fa fa-heart"></i></button>*/
/* 				<button type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('40');"><i class="fa fa-exchange"></i></button>-->*/
/* 			</div>*/
/* 			</div>*/
/* 		</div>*/
/* 				<div class="product-layout col-lg-3 col-md-3 col-sm-3 col-xs-12">*/
/* 			<div class="product-thumb transition">*/
/* 				<a class="quickview" rel="group" href="#quickview_3">*/
/* 					Quick View				</a>*/
/* 				<div style="display:none">*/
/* 					<div id="quickview_3">*/
/* 						<div>*/
/* 							<div class="left col-sm-4">*/
/* 									<div class="quickview_image image"><a href="http://localhost/template_52891_cw21kXN65RYum715QAIo/theme509/theme509((full))/index.php?route=product/product&amp;product_id=30"><img alt="Dolor sit amet" title="Dolor sit amet" class="img-responsive" src="{{ asset('images/cache/catalog/product-04-270x420.png') }}" /></a></div>*/
/* 								</div>*/
/* 								<div class="right col-sm-8">*/
/* 									<h2>Dolor sit amet</h2>*/
/* 									<div class="inf">*/
/* 																					<p class="quickview_manufacture manufacture manufacture">Brand: <a href="http://localhost/template_52891_cw21kXN65RYum715QAIo/theme509/theme509((full))/index.php?route=product/manufacturer/info&amp;manufacturer_id=9">Quisque sodales</a></p>*/
/* 																															<p class="product_model model">Model:Product 3</p>*/
/* 																				<p class="product_stock prod-stock-2">Availability:</p>*/
/* 											*/
/* 																						<p class="product_stock prod-stock">In Stock</p>*/
/* 																															<div class="price">*/
/* 																				<span class="price-new">$80.00</span> <span class="price-old">$100.00</span>*/
/* 																														</div>*/
/* 																			</div>*/
/* 									<div class="cart-button">*/
/* 										<button class="btn btn-add" type="button" onclick="cart.add('30');"><i class="fa fa-shopping-cart"></i></button>*/
/* 										<button class="btn btn-icon" type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('30');"><i class="fa fa-heart"></i></button>*/
/* 										<button class="btn btn-icon" type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('30');"><i class="fa fa-exchange"></i></button>*/
/* 									</div>*/
/* 									<div class="clear"></div>*/
/* 									<div class="rating">*/
/* 																														<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>*/
/* 																																								<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>*/
/* 																																								<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>*/
/* 																																								<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>*/
/* 																																								<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>*/
/* 																													</div>*/
/* 										*/
/* 								</div>*/
/* 								<div class="col-sm-12">*/
/* 									<div class="quickview_description description">*/
/* 										<iframe width="560" height="315" src="//www.youtube.com/embed/xvhDTxwUkEc?rel=0&amp;controls=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>*/
/* <p><b>Traditions are the cornerstone</b> of our noble business and we know how to observe them. Being one of the leading perfume manufacturers, our company has priceless experience in creating new scents and successful brands. We are glad to welcome you at our first online store for real perfume connoisseurs. </p>*/
/* */
/* <p><b>If you want to sell</b> perfumes you should know that nice fragrance is not enough for success. You must tell original story that will give your perfumes enough charm to attract customers. So we are here to tell you many interesting stories with charming aroma.  </p>*/
/* */
/* <p><b>We are here to open</b> you the absolutely new world – a world full of sensuality, passion and positive emotions. Go ahead and pick one and you’ll see how it could change your life. Write your own story with our perfumes! Satisfied clients and perfect customer service are our main rules, so leave your hesitations behind and let’s start shopping! </p>									</div>*/
/* 								</div>*/
/* 						</div>*/
/* 					</div>*/
/* 				</div>*/
/* 							<div class="sale">Sale</div>*/
/* 						<div class="image"><a href="http://localhost/template_52891_cw21kXN65RYum715QAIo/theme509/theme509((full))/index.php?route=product/product&amp;product_id=30"><img alt="Dolor sit amet" title="Dolor sit amet" class="img-responsive lazy" data-src="{{ asset('images/cache/catalog/product-04-270x420.png') }}" src="{{ asset('images/catalog/preload.gif') }}"  /></a></div>*/
/* 			<div class="caption">*/
/* 				<div class="name"><a href="http://localhost/template_52891_cw21kXN65RYum715QAIo/theme509/theme509((full))/index.php?route=product/product&amp;product_id=30">Dolor sit amet</a></div>*/
/* 				<!--<div class="description">*/
/* Traditions are the cornerstone of our noble business and we know how to observe them. Being one of..</div>-->*/
/* 								<div class="rating">*/
/* 												<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>*/
/* 																<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>*/
/* 																<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>*/
/* 																<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>*/
/* 																<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>*/
/* 												</div>*/
/* 												<div class="price">*/
/* 								<span class="price-new">$80.00</span> <span class="price-old">$100.00</span>*/
/* 												</div>*/
/* 							</div>*/
/* 			<div class="cart-button">*/
/* 				<button class="btn btn-add" type="button" onclick="cart.add('30');"><i class="fa fa-shopping-cart hidden-lg"></i> <span class="hidden-xs hidden-sm hidden-md">Add to Cart</span></button>*/
/* 				<!--<button type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('30');"><i class="fa fa-heart"></i></button>*/
/* 				<button type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('30');"><i class="fa fa-exchange"></i></button>-->*/
/* 			</div>*/
/* 			</div>*/
/* 		</div>*/
/* 				<div class="product-layout col-lg-3 col-md-3 col-sm-3 col-xs-12">*/
/* 			<div class="product-thumb transition">*/
/* 				<a class="quickview" rel="group" href="#quickview_4">*/
/* 					Quick View				</a>*/
/* 				<div style="display:none">*/
/* 					<div id="quickview_4">*/
/* 						<div>*/
/* 							<div class="left col-sm-4">*/
/* 									<div class="quickview_image image"><a href="{{ asset('images/cache/catalog/product-01-270x420.png') }}" /></a></div>*/
/* 								</div>*/
/* 								<div class="right col-sm-8">*/
/* 									<h2>Lorem ipsum</h2>*/
/* 									<div class="inf">*/
/* 																					<p class="quickview_manufacture manufacture manufacture">Brand: <a href="http://localhost/template_52891_cw21kXN65RYum715QAIo/theme509/theme509((full))/index.php?route=product/manufacturer/info&amp;manufacturer_id=8">Lorem ipsum</a></p>*/
/* 																															<p class="product_model model">Model:Product 15</p>*/
/* 																				<p class="product_stock prod-stock-2">Availability:</p>*/
/* 											*/
/* 																						<p class="product_stock prod-stock">In Stock</p>*/
/* 																															<div class="price">*/
/* 																				<span class="price-new">$90.00</span> <span class="price-old">$100.00</span>*/
/* 																														</div>*/
/* 																			</div>*/
/* 									<div class="cart-button">*/
/* 										<button class="btn btn-add" type="button" onclick="cart.add('42');"><i class="fa fa-shopping-cart"></i></button>*/
/* 										<button class="btn btn-icon" type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('42');"><i class="fa fa-heart"></i></button>*/
/* 										<button class="btn btn-icon" type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('42');"><i class="fa fa-exchange"></i></button>*/
/* 									</div>*/
/* 									<div class="clear"></div>*/
/* 									<div class="rating">*/
/* 																														<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>*/
/* 																																								<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>*/
/* 																																								<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>*/
/* 																																								<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>*/
/* 																																								<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>*/
/* 																													</div>*/
/* 										*/
/* 								</div>*/
/* 								<div class="col-sm-12">*/
/* 									<div class="quickview_description description">*/
/* 										<iframe width="560" height="315" src="//www.youtube.com/embed/xvhDTxwUkEc?rel=0&amp;controls=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>*/
/* <p><b>Traditions are the cornerstone</b> of our noble business and we know how to observe them. Being one of the leading perfume manufacturers, our company has priceless experience in creating new scents and successful brands. We are glad to welcome you at our first online store for real perfume connoisseurs. </p>*/
/* */
/* <p><b>If you want to sell</b> perfumes you should know that nice fragrance is not enough for success. You must tell original story that will give your perfumes enough charm to attract customers. So we are here to tell you many interesting stories with charming aroma.  </p>*/
/* */
/* <p><b>We are here to open</b> you the absolutely new world – a world full of sensuality, passion and positive emotions. Go ahead and pick one and you’ll see how it could change your life. Write your own story with our perfumes! Satisfied clients and perfect customer service are our main rules, so leave your hesitations behind and let’s start shopping! </p>									</div>*/
/* 								</div>*/
/* 						</div>*/
/* 					</div>*/
/* 				</div>*/
/* 							<div class="sale">Sale</div>*/
/* 						<div class="image"><a href="http://localhost/template_52891_cw21kXN65RYum715QAIo/theme509/theme509((full))/index.php?route=product/product&amp;product_id=42"><img alt="Lorem ipsum" title="Lorem ipsum" class="img-responsive lazy" data-src="{{ asset('images/cache/catalog/product-01-270x420.png') }}" src="{{ asset('images/catalog/preload.gif') }}"  /></a></div>*/
/* 			<div class="caption">*/
/* 				<div class="name"><a href="http://localhost/template_52891_cw21kXN65RYum715QAIo/theme509/theme509((full))/index.php?route=product/product&amp;product_id=42">Lorem ipsum</a></div>*/
/* 				<!--<div class="description">*/
/* Traditions are the cornerstone of our noble business and we know how to observe them. Being one of..</div>-->*/
/* 								<div class="rating">*/
/* 												<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>*/
/* 																<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>*/
/* 																<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>*/
/* 																<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>*/
/* 																<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>*/
/* 												</div>*/
/* 												<div class="price">*/
/* 								<span class="price-new">$90.00</span> <span class="price-old">$100.00</span>*/
/* 												</div>*/
/* 							</div>*/
/* 			<div class="cart-button">*/
/* 				<button class="btn btn-add" type="button" onclick="cart.add('42');"><i class="fa fa-shopping-cart hidden-lg"></i> <span class="hidden-xs hidden-sm hidden-md">Add to Cart</span></button>*/
/* 				<!--<button type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('42');"><i class="fa fa-heart"></i></button>*/
/* 				<button type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('42');"><i class="fa fa-exchange"></i></button>-->*/
/* 			</div>*/
/* 			</div>*/
/* 		</div>*/
/* 				<div class="product-layout col-lg-3 col-md-3 col-sm-3 col-xs-12">*/
/* 			<div class="product-thumb transition">*/
/* 				<a class="quickview" rel="group" href="#quickview_5">*/
/* 					Quick View				</a>*/
/* 				<div style="display:none">*/
/* 					<div id="quickview_5">*/
/* 						<div>*/
/* 							<div class="left col-sm-4">*/
/* 									<div class="quickview_image image"><a href="http://localhost/template_52891_cw21kXN65RYum715QAIo/theme509/theme509((full))/index.php?route=product/product&amp;product_id=33"><img alt="Aliquam dolor tellus" title="Aliquam dolor tellus" class="img-responsive" src="{{ asset('images/cache/catalog/product-52-270x420.png') }}" /></a></div>*/
/* 								</div>*/
/* 								<div class="right col-sm-8">*/
/* 									<h2>Aliquam dolor tellus</h2>*/
/* 									<div class="inf">*/
/* 																					<p class="quickview_manufacture manufacture manufacture">Brand: <a href="http://localhost/template_52891_cw21kXN65RYum715QAIo/theme509/theme509((full))/index.php?route=product/manufacturer/info&amp;manufacturer_id=10">Fusce vestibulum</a></p>*/
/* 																															<p class="product_model model">Model:Product 6</p>*/
/* 																				<p class="product_stock prod-stock-2">Availability:</p>*/
/* 											*/
/* 																						<p class="product_stock prod-stock">In Stock</p>*/
/* 																															<div class="price">*/
/* 																				<span class="price-new">$150.00</span> <span class="price-old">$200.00</span>*/
/* 																														</div>*/
/* 																			</div>*/
/* 									<div class="cart-button">*/
/* 										<button class="btn btn-add" type="button" onclick="cart.add('33');"><i class="fa fa-shopping-cart"></i></button>*/
/* 										<button class="btn btn-icon" type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('33');"><i class="fa fa-heart"></i></button>*/
/* 										<button class="btn btn-icon" type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('33');"><i class="fa fa-exchange"></i></button>*/
/* 									</div>*/
/* 									<div class="clear"></div>*/
/* 									<div class="rating">*/
/* 																														<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>*/
/* 																																								<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>*/
/* 																																								<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>*/
/* 																																								<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>*/
/* 																																								<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>*/
/* 																													</div>*/
/* 										*/
/* 								</div>*/
/* 								<div class="col-sm-12">*/
/* 									<div class="quickview_description description">*/
/* 										<iframe width="560" height="315" src="//www.youtube.com/embed/xvhDTxwUkEc?rel=0&amp;controls=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>*/
/* <p><b>Traditions are the cornerstone</b> of our noble business and we know how to observe them. Being one of the leading perfume manufacturers, our company has priceless experience in creating new scents and successful brands. We are glad to welcome you at our first online store for real perfume connoisseurs. </p>*/
/* */
/* <p><b>If you want to sell</b> perfumes you should know that nice fragrance is not enough for success. You must tell original story that will give your perfumes enough charm to attract customers. So we are here to tell you many interesting stories with charming aroma.  </p>*/
/* */
/* <p><b>We are here to open</b> you the absolutely new world – a world full of sensuality, passion and positive emotions. Go ahead and pick one and you’ll see how it could change your life. Write your own story with our perfumes! Satisfied clients and perfect customer service are our main rules, so leave your hesitations behind and let’s start shopping! </p>									</div>*/
/* 								</div>*/
/* 						</div>*/
/* 					</div>*/
/* 				</div>*/
/* 							<div class="sale">Sale</div>*/
/* 						<div class="image"><a href="http://localhost/template_52891_cw21kXN65RYum715QAIo/theme509/theme509((full))/index.php?route=product/product&amp;product_id=33"><img alt="Aliquam dolor tellus" title="Aliquam dolor tellus" class="img-responsive lazy" data-src="{{ asset('images/cache/catalog/product-52-270x420.png') }}" src="{{ asset('images/catalog/preload.gif') }}"  /></a></div>*/
/* 			<div class="caption">*/
/* 				<div class="name"><a href="http://localhost/template_52891_cw21kXN65RYum715QAIo/theme509/theme509((full))/index.php?route=product/product&amp;product_id=33">Aliquam dolor tellus</a></div>*/
/* 				<!--<div class="description">*/
/* Traditions are the cornerstone of our noble business and we know how to observe them. Being one of..</div>-->*/
/* 								<div class="rating">*/
/* 												<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>*/
/* 																<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>*/
/* 																<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>*/
/* 																<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>*/
/* 																<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>*/
/* 												</div>*/
/* 												<div class="price">*/
/* 								<span class="price-new">$150.00</span> <span class="price-old">$200.00</span>*/
/* 												</div>*/
/* 							</div>*/
/* 			<div class="cart-button">*/
/* */
/*                             <button class="btn btn-add" type="button" onclick="cart.add('33');"><i class="fa fa-shopping-cart hidden-lg"></i> <span class="hidden-xs hidden-sm hidden-md">Add to Cart</span></button>*/
/* 				<!--<button type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('33');"><i class="fa fa-heart"></i></button>*/
/* 				<button type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('33');"><i class="fa fa-exchange"></i></button>-->*/
/* 			</div>*/
/* 			</div>*/
/* 		</div>*/
/* 				<div class="product-layout col-lg-3 col-md-3 col-sm-3 col-xs-12">*/
/* 			<div class="product-thumb transition">*/
/* 				<a class="quickview" rel="group" href="#quickview_6">*/
/* 					Quick View				</a>*/
/* 				<div style="display:none">*/
/* 					<div id="quickview_6">*/
/* 						<div>*/
/* 							<div class="left col-sm-4">*/
/* 									<div class="quickview_image image"><a href="http://localhost/template_52891_cw21kXN65RYum715QAIo/theme509/theme509((full))/index.php?route=product/product&amp;product_id=46"><img alt="Suspendisse imperdiet" title="Suspendisse imperdiet" class="img-responsive" src="{{ asset('images/cache/catalog/product-55-270x420.png') }}" /></a></div>*/
/* 								</div>*/
/* 								<div class="right col-sm-8">*/
/* 									<h2>Suspendisse imperdiet</h2>*/
/* 									<div class="inf">*/
/* 																					<p class="quickview_manufacture manufacture manufacture">Brand: <a href="http://localhost/template_52891_cw21kXN65RYum715QAIo/theme509/theme509((full))/index.php?route=product/manufacturer/info&amp;manufacturer_id=10">Fusce vestibulum</a></p>*/
/* 																															<p class="product_model model">Model:Product 19</p>*/
/* 																				<p class="product_stock prod-stock-2">Availability:</p>*/
/* 											*/
/* 																						<p class="product_stock prod-stock">In Stock</p>*/
/* 																															<div class="price">*/
/* 																				$1,000.00																														</div>*/
/* 																			</div>*/
/* 									<div class="cart-button">*/
/* 										<button class="btn btn-add" type="button" onclick="cart.add('46');"><i class="fa fa-shopping-cart"></i></button>*/
/* 										<button class="btn btn-icon" type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('46');"><i class="fa fa-heart"></i></button>*/
/* 										<button class="btn btn-icon" type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('46');"><i class="fa fa-exchange"></i></button>*/
/* 									</div>*/
/* 									<div class="clear"></div>*/
/* 									<div class="rating">*/
/* 																														<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>*/
/* 																																								<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>*/
/* 																																								<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>*/
/* 																																								<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>*/
/* 																																								<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>*/
/* 																													</div>*/
/* 										*/
/* 								</div>*/
/* 								<div class="col-sm-12">*/
/* 									<div class="quickview_description description">*/
/* 										<iframe width="560" height="315" src="//www.youtube.com/embed/xvhDTxwUkEc?rel=0&amp;controls=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>*/
/* <p><b>Traditions are the cornerstone</b> of our noble business and we know how to observe them. Being one of the leading perfume manufacturers, our company has priceless experience in creating new scents and successful brands. We are glad to welcome you at our first online store for real perfume connoisseurs. </p>*/
/* */
/* <p><b>If you want to sell</b> perfumes you should know that nice fragrance is not enough for success. You must tell original story that will give your perfumes enough charm to attract customers. So we are here to tell you many interesting stories with charming aroma.  </p>*/
/* */
/* <p><b>We are here to open</b> you the absolutely new world – a world full of sensuality, passion and positive emotions. Go ahead and pick one and you’ll see how it could change your life. Write your own story with our perfumes! Satisfied clients and perfect customer service are our main rules, so leave your hesitations behind and let’s start shopping! </p>									</div>*/
/* 								</div>*/
/* 						</div>*/
/* 					</div>*/
/* 				</div>*/
/* 						<div class="image"><a href="http://localhost/template_52891_cw21kXN65RYum715QAIo/theme509/theme509((full))/index.php?route=product/product&amp;product_id=46"><img alt="Suspendisse imperdiet" title="Suspendisse imperdiet" class="img-responsive lazy" data-src="{{ asset('images/cache/catalog/product-55-270x420.png') }}" src="{{ asset('images/catalog/preload.gif') }}"  /></a></div>*/
/* 			<div class="caption">*/
/* 				<div class="name"><a href="http://localhost/template_52891_cw21kXN65RYum715QAIo/theme509/theme509((full))/index.php?route=product/product&amp;product_id=46">Suspendisse imperdiet</a></div>*/
/* 				<!--<div class="description">*/
/* Traditions are the cornerstone of our noble business and we know how to observe them. Being one of..</div>-->*/
/* 								<div class="rating">*/
/* 												<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>*/
/* 																<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>*/
/* 																<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>*/
/* 																<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>*/
/* 																<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>*/
/* 												</div>*/
/* 												<div class="price">*/
/* 								$1,000.00												</div>*/
/* 							</div>*/
/* 			<div class="cart-button">*/
/* 				<button class="btn btn-add" type="button" onclick="cart.add('46');"><i class="fa fa-shopping-cart hidden-lg"></i> <span class="hidden-xs hidden-sm hidden-md">Add to Cart</span></button>*/
/* 				<!--<button type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('46');"><i class="fa fa-heart"></i></button>*/
/* 				<button type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('46');"><i class="fa fa-exchange"></i></button>-->*/
/* 			</div>*/
/* 			</div>*/
/* 		</div>*/
/* 				<div class="product-layout col-lg-3 col-md-3 col-sm-3 col-xs-12">*/
/* 			<div class="product-thumb transition">*/
/* 				<a class="quickview" rel="group" href="#quickview_7">*/
/* 					Quick View				</a>*/
/* 				<div style="display:none">*/
/* 					<div id="quickview_7">*/
/* 						<div>*/
/* 							<div class="left col-sm-4">*/
/* 									<div class="quickview_image image"><a href="http://localhost/template_52891_cw21kXN65RYum715QAIo/theme509/theme509((full))/index.php?route=product/product&amp;product_id=32"><img alt="Nulla vitae eleifend" title="Nulla vitae eleifend" class="img-responsive" src="{{ asset('images/cache/catalog/product-28-270x420.png') }}" /></a></div>*/
/* 								</div>*/
/* 								<div class="right col-sm-8">*/
/* 									<h2>Nulla vitae eleifend</h2>*/
/* 									<div class="inf">*/
/* 																					<p class="quickview_manufacture manufacture manufacture">Brand: <a href="http://localhost/template_52891_cw21kXN65RYum715QAIo/theme509/theme509((full))/index.php?route=product/manufacturer/info&amp;manufacturer_id=8">Lorem ipsum</a></p>*/
/* 																															<p class="product_model model">Model:Product 5</p>*/
/* 																				<p class="product_stock prod-stock-2">Availability:</p>*/
/* 											*/
/* 																						<p class="product_stock prod-stock">In Stock</p>*/
/* 																															<div class="price">*/
/* 																				<span class="price-new">$90.00</span> <span class="price-old">$100.00</span>*/
/* 																														</div>*/
/* 																			</div>*/
/* 									<div class="cart-button">*/
/* 										<button class="btn btn-add" type="button" onclick="cart.add('32');"><i class="fa fa-shopping-cart"></i></button>*/
/* 										<button class="btn btn-icon" type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('32');"><i class="fa fa-heart"></i></button>*/
/* 										<button class="btn btn-icon" type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('32');"><i class="fa fa-exchange"></i></button>*/
/* 									</div>*/
/* 									<div class="clear"></div>*/
/* 									<div class="rating">*/
/* 																														<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>*/
/* 																																								<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>*/
/* 																																								<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>*/
/* 																																								<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>*/
/* 																																								<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>*/
/* 																													</div>*/
/* 										*/
/* 								</div>*/
/* 								<div class="col-sm-12">*/
/* 									<div class="quickview_description description">*/
/* 										<iframe width="560" height="315" src="//www.youtube.com/embed/xvhDTxwUkEc?rel=0&amp;controls=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>*/
/* <p><b>Traditions are the cornerstone</b> of our noble business and we know how to observe them. Being one of the leading perfume manufacturers, our company has priceless experience in creating new scents and successful brands. We are glad to welcome you at our first online store for real perfume connoisseurs. </p>*/
/* */
/* <p><b>If you want to sell</b> perfumes you should know that nice fragrance is not enough for success. You must tell original story that will give your perfumes enough charm to attract customers. So we are here to tell you many interesting stories with charming aroma.  </p>*/
/* */
/* <p><b>We are here to open</b> you the absolutely new world – a world full of sensuality, passion and positive emotions. Go ahead and pick one and you’ll see how it could change your life. Write your own story with our perfumes! Satisfied clients and perfect customer service are our main rules, so leave your hesitations behind and let’s start shopping! </p>									</div>*/
/* 								</div>*/
/* 						</div>*/
/* 					</div>*/
/* 				</div>*/
/* 							<div class="sale">Sale</div>*/
/* 						<div class="image"><a href="http://localhost/template_52891_cw21kXN65RYum715QAIo/theme509/theme509((full))/index.php?route=product/product&amp;product_id=32"><img alt="Nulla vitae eleifend" title="Nulla vitae eleifend" class="img-responsive lazy" data-src="{{ asset('images/cache/catalog/product-28-270x420.png') }}" src="{{ asset('images/catalog/preload.gif') }}"  /></a></div>*/
/* 			<div class="caption">*/
/* 				<div class="name"><a href="http://localhost/template_52891_cw21kXN65RYum715QAIo/theme509/theme509((full))/index.php?route=product/product&amp;product_id=32">Nulla vitae eleifend</a></div>*/
/* 				<!--<div class="description">*/
/* Traditions are the cornerstone of our noble business and we know how to observe them. Being one of..</div>-->*/
/* 								<div class="rating">*/
/* 												<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>*/
/* 																<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>*/
/* 																<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>*/
/* 																<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>*/
/* 																<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>*/
/* 												</div>*/
/* 												<div class="price">*/
/* 								<span class="price-new">$90.00</span> <span class="price-old">$100.00</span>*/
/* 												</div>*/
/* 							</div>*/
/* 			<div class="cart-button">*/
/* 				<button class="btn btn-add" type="button" onclick="cart.add('32');"><i class="fa fa-shopping-cart hidden-lg"></i> <span class="hidden-xs hidden-sm hidden-md">Add to Cart</span></button>*/
/* 				<!--<button type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('32');"><i class="fa fa-heart"></i></button>*/
/* 				<button type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('32');"><i class="fa fa-exchange"></i></button>-->*/
/* 			</div>*/
/* 			</div>*/
/* 		</div>*/
/* 				<div class="product-layout col-lg-3 col-md-3 col-sm-3 col-xs-12">*/
/* 			<div class="product-thumb transition">*/
/* 				<a class="quickview" rel="group" href="#quickview_8">*/
/* 					Quick View				</a>*/
/* 				<div style="display:none">*/
/* 					<div id="quickview_8">*/
/* 						<div>*/
/* 							<div class="left col-sm-4">*/
/* 									<div class="quickview_image image"><a href="http://localhost/template_52891_cw21kXN65RYum715QAIo/theme509/theme509((full))/index.php?route=product/product&amp;product_id=28"><img alt="Aliquam eget" title="Aliquam eget" class="img-responsive" src="{{ asset('images/cache/catalog/product-10-270x420.png') }}" /></a></div>*/
/* 								</div>*/
/* 								<div class="right col-sm-8">*/
/* 									<h2>Aliquam eget</h2>*/
/* 									<div class="inf">*/
/* 																					<p class="quickview_manufacture manufacture manufacture">Brand: <a href="http://localhost/template_52891_cw21kXN65RYum715QAIo/theme509/theme509((full))/index.php?route=product/manufacturer/info&amp;manufacturer_id=5">Donec eu</a></p>*/
/* 																															<p class="product_model model">Model:Product 1</p>*/
/* 																				<p class="product_stock prod-stock-2">Availability:</p>*/
/* 											*/
/* 																						<p class="product_stock prod-stock">In Stock</p>*/
/* 																															<div class="price">*/
/* 																				<span class="price-new">$80.00</span> <span class="price-old">$100.00</span>*/
/* 																														</div>*/
/* 																			</div>*/
/* 									<div class="cart-button">*/
/* 										<button class="btn btn-add" type="button" onclick="cart.add('28');"><i class="fa fa-shopping-cart"></i></button>*/
/* 										<button class="btn btn-icon" type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('28');"><i class="fa fa-heart"></i></button>*/
/* 										<button class="btn btn-icon" type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('28');"><i class="fa fa-exchange"></i></button>*/
/* 									</div>*/
/* 									<div class="clear"></div>*/
/* 									<div class="rating">*/
/* 																														<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>*/
/* 																																								<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>*/
/* 																																								<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>*/
/* 																																								<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>*/
/* 																																								<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>*/
/* 																													</div>*/
/* 										*/
/* 								</div>*/
/* 								<div class="col-sm-12">*/
/* 									<div class="quickview_description description">*/
/* 										<iframe width="560" height="315" src="//www.youtube.com/embed/xvhDTxwUkEc?rel=0&amp;controls=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>*/
/* <p><b>Traditions are the cornerstone</b> of our noble business and we know how to observe them. Being one of the leading perfume manufacturers, our company has priceless experience in creating new scents and successful brands. We are glad to welcome you at our first online store for real perfume connoisseurs. </p>*/
/* */
/* <p><b>If you want to sell</b> perfumes you should know that nice fragrance is not enough for success. You must tell original story that will give your perfumes enough charm to attract customers. So we are here to tell you many interesting stories with charming aroma.  </p>*/
/* */
/* <p><b>We are here to open</b> you the absolutely new world – a world full of sensuality, passion and positive emotions. Go ahead and pick one and you’ll see how it could change your life. Write your own story with our perfumes! Satisfied clients and perfect customer service are our main rules, so leave your hesitations behind and let’s start shopping! </p>									</div>*/
/* 								</div>*/
/* 						</div>*/
/* 					</div>*/
/* 				</div>*/
/* 							<div class="sale">Sale</div>*/
/* 						<div class="image"><a href="http://localhost/template_52891_cw21kXN65RYum715QAIo/theme509/theme509((full))/index.php?route=product/product&amp;product_id=28"><img alt="Aliquam eget" title="Aliquam eget" class="img-responsive lazy" data-src=" {{ asset('images/cache/catalog/product-10-270x420.png') }}" src="{{ asset('images/catalog/preload.gif') }}"  /></a></div>*/
/* 			<div class="caption">*/
/* 				<div class="name"><a href="http://localhost/template_52891_cw21kXN65RYum715QAIo/theme509/theme509((full))/index.php?route=product/product&amp;product_id=28">Aliquam eget</a></div>*/
/* 				<!--<div class="description">*/
/* Traditions are the cornerstone of our noble business and we know how to observe them. Being one of..</div>-->*/
/* 								<div class="rating">*/
/* 												<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>*/
/* 																<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>*/
/* 																<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>*/
/* 																<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>*/
/* 																<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>*/
/* 												</div>*/
/* 												<div class="price">*/
/* 								<span class="price-new">$80.00</span> <span class="price-old">$100.00</span>*/
/* 												</div>*/
/* 							</div>*/
/* 			<div class="cart-button">*/
/* 				<button class="btn btn-add" type="button" onclick="cart.add('28');"><i class="fa fa-shopping-cart hidden-lg"></i> <span class="hidden-xs hidden-sm hidden-md">Add to Cart</span></button>*/
/* 				<!--<button type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('28');"><i class="fa fa-heart"></i></button>*/
/* 				<button type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('28');"><i class="fa fa-exchange"></i></button>-->*/
/* 			</div>*/
/* 			</div>*/
/* 		</div>*/
/* 				</div>*/
/* 	</div>*/
/* </div>*/
/* </div>*/
/* 	</div>*/
/* </div>*/
/* <div class="content_bottom">*/
/* 			<div class="box_html video_block">*/
/*                             <div style="position: absolute; z-index: -1; top: 0px; left: 0px; bottom: 0px; right: 0px; overflow: hidden; background-size: cover; background-position: 50% 50%; background-repeat: no-repeat;"><video autoplay="" loop="" style="visibility: visible; margin: auto; position: absolute; z-index: -1; top: 50%; left: 50%; transform: translate(-50%, -50%); width: 2002px; height: auto;"><source src="{{ asset('video/TunisiaMall.mp4') }}" type="video/mp4"><source src="{{ asset('video/video_1.webm') }}" type="video/webm"><source src="{{ asset('video/video_1.ogv') }}" type="video/ogg"></video>*/
/*                             <video autoplay="" loop="" style="visibility: visible; margin: auto; position: absolute; z-index: -1; top: 50%; left: 50%; transform: translate(-50%, -50%); width: 2002px; height: auto;"><source src="{{ asset('video/TunisiaMall.mp4') }}" type="video/mp4"><source src="{{ asset('video/video_1.webm') }}" type="video/webm"><source src="{{ asset('video/video_1.ogv') }}" type="video/ogg"></video>*/
/* 	<source src="{{ asset('video/TunisiaMall.mp4') }}" type="video/mp4">*/
/*         <source src="{{ asset('video/video_1.webm') }}" type="video/webm">*/
/*         <source src="{{ asset('video/video_1.ogv') }}" type="video/ogg">*/
/*         <video autoplay="" loop="" style="visibility: visible; margin: auto; position: absolute; z-index: -1; top: 50%; left: 50%; transform: translate(-50%, -50%); width: 2002px; height: auto;"><source src="{{ asset('video/TunisiaMall.mp4') }}" type="video/mp4"><source src="{{ asset('video/video_1.webm') }}" type="video/webm"><source src="{{ asset('video/video_1.ogv') }}" type="video/ogg">*/
/*         </video>*/
/*                         </div>*/
/*                             <div class="container"><h4>Get up to</h4>*/
/* */
/* <h2>50%</h2>*/
/* */
/* <h1>OFF</h1>*/
/* */
/* <h3>on new arrivals</h3>*/
/* */
/* <a href="index.php?route=product/product&amp;product_id=42">Shop now!</a></div></div>*/
/* <div class="box_html map">*/
/*     <div id="map">*/
/*         */
/*     </div>*/
/*         */
/* </div>*/
/* </div>*/
/* <footer>*/
/*   <div class="container">*/
/* 	<div class="row">*/
/* 	  	  <div class="col-sm-2">*/
/* 		<h5>Information</h5>*/
/* 		<ul class="list-unstyled">*/
/* 		  		  <li><a href="About Us">About Us</a></li>*/
/* 		  		  <li><a href="Delivery Information">Delivery Information</a></li>*/
/* 		  		  <li><a href="Privacy Policy">Privacy Policy</a></li>*/
/* 		  		  <li><a href="Conditions">Terms &amp; Conditions</a></li>*/
/* 		  		</ul>*/
/* 	  </div>*/
/* 	  	  <div class="col-sm-2">*/
/* 		<h5>Customer Service</h5>*/
/* 		<ul class="list-unstyled">*/
/* 		  <li><a href="contact">Contact Us</a></li>*/
/* 		  <li><a href="Returns">Returns</a></li>*/
/* 		  <li><a href="Site Map">Site Map</a></li>*/
/* 		</ul>*/
/* 	  </div>*/
/* 	  <div class="col-sm-2">*/
/* 		<h5>Extras</h5>*/
/* 		<ul class="list-unstyled">*/
/* 		  <li><a href="http://localhost/template_52891_cw21kXN65RYum715QAIo/theme509/theme509((full))/index.php?route=product/manufacturer">Brands</a></li>*/
/* 		  <li><a href="http://localhost/template_52891_cw21kXN65RYum715QAIo/theme509/theme509((full))/index.php?route=account/voucher">Gift Vouchers</a></li>*/
/* 		  <li><a href="http://localhost/template_52891_cw21kXN65RYum715QAIo/theme509/theme509((full))/index.php?route=affiliate/account">Affiliates</a></li>*/
/* 		  <li><a href="http://localhost/template_52891_cw21kXN65RYum715QAIo/theme509/theme509((full))/index.php?route=product/special">Specials</a></li>*/
/* 		</ul>*/
/* 	  </div>*/
/* 	  <div class="col-sm-2">*/
/* 		<h5>My Account</h5>*/
/* 		<ul class="list-unstyled">*/
/* 		  <li><a href="Account">My Account</a></li>*/
/* 		  <li><a href="order">Order History</a></li>*/
/* 		  <li><a href="wishlist">Wish List</a></li>*/
/* 		  <li><a href="newsletter">Newsletter</a></li>*/
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
