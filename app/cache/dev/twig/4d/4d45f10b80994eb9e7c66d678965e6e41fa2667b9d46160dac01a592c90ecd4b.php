<?php

/* FOSUserBundle:Registration:register_content.html.twig */
class __TwigTemplate_266294ff0de88301415f419371bcc8346c11ab25081a813607ed91eda6861818 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("MyappuserBundle::layout.html.twig", "FOSUserBundle:Registration:register_content.html.twig", 2);
        $this->blocks = array(
            'produit' => array($this, 'block_produit'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "MyappuserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_produit($context, array $blocks = array())
    {
        // line 5
        echo "<head>
<title>Lighting A Ecommerce Category Flat Bootstarp Resposive Website Template | Login :: w3layouts</title>
<link href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/bootstrap.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
<!-- Custom Theme files -->
<!--theme style-->
<link href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />\t
<script src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.min.js"), "html", null, true);
        echo "\"></script>

<!--//theme style-->
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
<meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
<meta name=\"keywords\" content=\"Wedding Store Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design\" />
<script type=\"application/x-javascript\"> addEventListener(\"load\", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- start menu -->
<script src=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/simpleCart.min.js"), "html", null, true);
        echo "\"> </script>
<!-- start menu -->
<link href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/memenu.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
<script type=\"text/javascript\" src=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/memenu.js"), "html", null, true);
        echo "\"></script>
<script>\$(document).ready(function(){\$(\".memenu\").memenu();});</script>\t
<!-- /start menu -->
</head>
<script src=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/responsiveslides.min.js"), "html", null, true);
        echo "\"></script>
<script>  
    \$(function () {
      \$(\"#slider\").responsiveSlides({
      \tauto: false,
      \tnav: true,
      \tspeed: 500,
        namespace: \"callbacks\",
        pager: false,
      });
    });
  </script>
  
<div class=\"header-top\">
\t <div class=\"header-bottom\">\t\t\t
\t\t\t\t
<ol class=\"breadcrumb\">
\t\t  <li><a href=\"index.html\">Home</a></li>
\t\t  <li class=\"active\">Account</li>
\t\t </ol>
\t <div class=\"registration\">
\t\t <div class=\"registration_left\">
\t\t\t <h2>new user? <span> create an account </span></h2>
\t\t\t <!-- [if IE] 
\t\t\t\t< link rel='stylesheet' type='text/css' href='";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("ie.css"), "html", null, true);
        echo "/>  
\t\t\t [endif] -->  
\t\t\t  
\t\t\t <!-- [if lt IE 7]>  
\t\t\t\t< link rel='stylesheet' type='text/css' href='";
        // line 55
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("ie6.css"), "html", null, true);
        echo "/>  
\t\t\t <! [endif] -->  
\t\t\t <script>
\t\t\t\t(function() {
\t\t\t
\t\t\t\t// Create input element for testing
\t\t\t\tvar inputs = document.createElement('input');
\t\t\t\t
\t\t\t\t// Create the supports object
\t\t\t\tvar supports = {};
\t\t\t\t
\t\t\t\tsupports.autofocus   = 'autofocus' in inputs;
\t\t\t\tsupports.required    = 'required' in inputs;
\t\t\t\tsupports.placeholder = 'placeholder' in inputs;
\t\t\t
\t\t\t\t// Fallback for autofocus attribute
\t\t\t\tif(!supports.autofocus) {
\t\t\t\t\t
\t\t\t\t}
\t\t\t\t
\t\t\t\t// Fallback for required attribute
\t\t\t\tif(!supports.required) {
\t\t\t\t\t
\t\t\t\t}
\t\t\t
\t\t\t\t// Fallback for placeholder attribute
\t\t\t\tif(!supports.placeholder) {
\t\t\t\t\t
\t\t\t\t}
\t\t\t\t
\t\t\t\t// Change text inside send button on submit
\t\t\t\tvar send = document.getElementById('register-submit');
\t\t\t\tif(send) {
\t\t\t\t\tsend.onclick = function () {
\t\t\t\t\t\tthis.innerHTML = '...Sending';
\t\t\t\t\t}
\t\t\t\t}
\t\t\t
\t\t\t })();
\t\t\t </script>
\t\t\t <div class=\"registration_form\">
\t\t\t <!-- Form -->
                         <form action=\"";
        // line 97
        echo $this->env->getExtension('routing')->getPath("fos_user_registration_register");
        echo "\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo " method=\"POST\" class=\"fos_user_registration_register\">
                        ";
        // line 98
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
                        <br />
                        <input class=\"btn btn-primary\" type=\"submit\" value=\"";
        // line 100
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
                    </form>
\t\t\t\t
\t\t\t\t\t<div class=\"sky-form\">
\t\t\t\t\t\t<label class=\"checkbox\"><input type=\"checkbox\" name=\"checkbox\" ><i></i>i agree Terms & conditions &nbsp;<a class=\"terms\" href=\"#\"> terms of service</a> </label>
\t\t\t\t\t</div>
\t\t\t\t
\t\t\t\t<!-- /Form -->
\t\t\t </div>
\t\t </div>
\t\t <div class=\"registration_left\">
\t\t\t <h2>existing user</h2>
\t\t\t <div class=\"registration_form\">
\t\t\t <!-- Form -->
\t\t\t\t  <form action=\"";
        // line 114
        echo $this->env->getExtension('routing')->getPath("fos_user_security_check");
        echo "\" method=\"post\">
    <input type=\"hidden\" name=\"_csrf_token\" value=\"csrf_token\" />

    <label for=\"username\">username</label>
    <input type=\"text\" id=\"username\" name=\"_username\" value=\" \" required=\"required\" />

    <label for=\"password\">password </label>
    <input type=\"password\" id=\"password\" name=\"_password\" required=\"required\" />
<input class=\"acount-btn\" type=\"submit\" id=\"_submit\" name=\"_submit\"  value=\"log in\">\t

</form>
\t\t\t <!-- /Form -->
\t\t\t </div>
\t\t </div>
\t\t <div class=\"clearfix\"></div>
\t </div>
</div>
<!---->
<div class=\"subscribe\">
\t <div class=\"container\">
\t\t <h3>Newsletter</h3>
\t\t <form>
\t\t\t <input type=\"text\" class=\"text\" value=\"Email\" onfocus=\"this.value = '';\" onblur=\"if (this.value == '') {this.value = 'Email';}\">
\t\t\t <input type=\"submit\" value=\"Subscribe\">
\t\t </form>
\t </div>
</div>


    <div>
        <input type=\"submit\" value=\"";
        // line 144
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
        
    </div>
";
    }

    // line 148
    public function block_body($context, array $blocks = array())
    {
        // line 149
        echo "    ";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  225 => 149,  222 => 148,  214 => 144,  181 => 114,  164 => 100,  159 => 98,  153 => 97,  108 => 55,  101 => 51,  74 => 27,  67 => 23,  63 => 22,  58 => 20,  46 => 11,  42 => 10,  36 => 7,  32 => 5,  29 => 3,  11 => 2,);
    }
}
/* */
/* {% extends "MyappuserBundle::layout.html.twig" %}*/
/* {% block produit %}*/
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* <head>*/
/* <title>Lighting A Ecommerce Category Flat Bootstarp Resposive Website Template | Login :: w3layouts</title>*/
/* <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet" type="text/css" media="all" />*/
/* <!-- Custom Theme files -->*/
/* <!--theme style-->*/
/* <link href="{{ asset('css/style.css') }}" rel="stylesheet" type="text/css" media="all" />	*/
/* <script src="{{ asset('js/jquery.min.js') }}"></script>*/
/* */
/* <!--//theme style-->*/
/* <meta name="viewport" content="width=device-width, initial-scale=1">*/
/* <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />*/
/* <meta name="keywords" content="Wedding Store Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, */
/* Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />*/
/* <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>*/
/* <!-- start menu -->*/
/* <script src="{{ asset('js/simpleCart.min.js') }}"> </script>*/
/* <!-- start menu -->*/
/* <link href="{{ asset('css/memenu.css') }}" rel="stylesheet" type="text/css" media="all" />*/
/* <script type="text/javascript" src="{{ asset('js/memenu.js') }}"></script>*/
/* <script>$(document).ready(function(){$(".memenu").memenu();});</script>	*/
/* <!-- /start menu -->*/
/* </head>*/
/* <script src="{{ asset('js/responsiveslides.min.js') }}"></script>*/
/* <script>  */
/*     $(function () {*/
/*       $("#slider").responsiveSlides({*/
/*       	auto: false,*/
/*       	nav: true,*/
/*       	speed: 500,*/
/*         namespace: "callbacks",*/
/*         pager: false,*/
/*       });*/
/*     });*/
/*   </script>*/
/*   */
/* <div class="header-top">*/
/* 	 <div class="header-bottom">			*/
/* 				*/
/* <ol class="breadcrumb">*/
/* 		  <li><a href="index.html">Home</a></li>*/
/* 		  <li class="active">Account</li>*/
/* 		 </ol>*/
/* 	 <div class="registration">*/
/* 		 <div class="registration_left">*/
/* 			 <h2>new user? <span> create an account </span></h2>*/
/* 			 <!-- [if IE] */
/* 				< link rel='stylesheet' type='text/css' href='{{ asset('ie.css') }}/>  */
/* 			 [endif] -->  */
/* 			  */
/* 			 <!-- [if lt IE 7]>  */
/* 				< link rel='stylesheet' type='text/css' href='{{ asset('ie6.css') }}/>  */
/* 			 <! [endif] -->  */
/* 			 <script>*/
/* 				(function() {*/
/* 			*/
/* 				// Create input element for testing*/
/* 				var inputs = document.createElement('input');*/
/* 				*/
/* 				// Create the supports object*/
/* 				var supports = {};*/
/* 				*/
/* 				supports.autofocus   = 'autofocus' in inputs;*/
/* 				supports.required    = 'required' in inputs;*/
/* 				supports.placeholder = 'placeholder' in inputs;*/
/* 			*/
/* 				// Fallback for autofocus attribute*/
/* 				if(!supports.autofocus) {*/
/* 					*/
/* 				}*/
/* 				*/
/* 				// Fallback for required attribute*/
/* 				if(!supports.required) {*/
/* 					*/
/* 				}*/
/* 			*/
/* 				// Fallback for placeholder attribute*/
/* 				if(!supports.placeholder) {*/
/* 					*/
/* 				}*/
/* 				*/
/* 				// Change text inside send button on submit*/
/* 				var send = document.getElementById('register-submit');*/
/* 				if(send) {*/
/* 					send.onclick = function () {*/
/* 						this.innerHTML = '...Sending';*/
/* 					}*/
/* 				}*/
/* 			*/
/* 			 })();*/
/* 			 </script>*/
/* 			 <div class="registration_form">*/
/* 			 <!-- Form -->*/
/*                          <form action="{{ path('fos_user_registration_register') }}" {{ form_enctype(form) }} method="POST" class="fos_user_registration_register">*/
/*                         {{ form_widget(form) }}*/
/*                         <br />*/
/*                         <input class="btn btn-primary" type="submit" value="{{ 'registration.submit'|trans }}" />*/
/*                     </form>*/
/* 				*/
/* 					<div class="sky-form">*/
/* 						<label class="checkbox"><input type="checkbox" name="checkbox" ><i></i>i agree Terms & conditions &nbsp;<a class="terms" href="#"> terms of service</a> </label>*/
/* 					</div>*/
/* 				*/
/* 				<!-- /Form -->*/
/* 			 </div>*/
/* 		 </div>*/
/* 		 <div class="registration_left">*/
/* 			 <h2>existing user</h2>*/
/* 			 <div class="registration_form">*/
/* 			 <!-- Form -->*/
/* 				  <form action="{{ path("fos_user_security_check") }}" method="post">*/
/*     <input type="hidden" name="_csrf_token" value="csrf_token" />*/
/* */
/*     <label for="username">username</label>*/
/*     <input type="text" id="username" name="_username" value=" " required="required" />*/
/* */
/*     <label for="password">password </label>*/
/*     <input type="password" id="password" name="_password" required="required" />*/
/* <input class="acount-btn" type="submit" id="_submit" name="_submit"  value="log in">	*/
/* */
/* </form>*/
/* 			 <!-- /Form -->*/
/* 			 </div>*/
/* 		 </div>*/
/* 		 <div class="clearfix"></div>*/
/* 	 </div>*/
/* </div>*/
/* <!---->*/
/* <div class="subscribe">*/
/* 	 <div class="container">*/
/* 		 <h3>Newsletter</h3>*/
/* 		 <form>*/
/* 			 <input type="text" class="text" value="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}">*/
/* 			 <input type="submit" value="Subscribe">*/
/* 		 </form>*/
/* 	 </div>*/
/* </div>*/
/* */
/* */
/*     <div>*/
/*         <input type="submit" value="{{ 'registration.submit'|trans }}" />*/
/*         */
/*     </div>*/
/* {% endblock produit %}*/
/* {% block body %}*/
/*     {% endblock body %}*/
/* */
/* */
