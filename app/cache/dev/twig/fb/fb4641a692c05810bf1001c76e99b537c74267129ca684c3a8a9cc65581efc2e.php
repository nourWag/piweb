<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_185a73b04601445d0028a71959792ea60d780b1e46ad5cddebe9bbf832279ecf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("MyappuserBundle::layout.html.twig", "FOSUserBundle:Security:login.html.twig", 1);
        $this->blocks = array(
            'produit' => array($this, 'block_produit'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
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
        // line 4
        echo "

";
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('fos_user_content', $context, $blocks);
    }

    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 9
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 10
            echo "    <div>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageKey", array()), $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageData", array()), "security"), "html", null, true);
            echo "</div>
";
        }
        // line 12
        echo "<head>
<title>Lighting A Ecommerce Category Flat Bootstarp Resposive Website Template | Login :: w3layouts</title>
<link href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/bootstrap.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
<!-- Custom Theme files -->
<!--theme style-->
<link href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />\t
<script src=\"";
        // line 18
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
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/simpleCart.min.js"), "html", null, true);
        echo "\"> </script>
<!-- start menu -->
<link href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/memenu.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
<script type=\"text/javascript\" src=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/memenu.js"), "html", null, true);
        echo "\"></script>
<script>\$(document).ready(function(){\$(\".memenu\").memenu();});</script>\t
<!-- /start menu -->
</head>
<ol class=\"breadcrumb\">
\t\t 
\t\t  <li><a href=\" ";
        // line 36
        echo $this->env->getExtension('routing')->getPath("homme");
        echo "\">Homeeeeeeeeeee</a></li>
\t\t  <li class=\"active\">Login</li>
\t\t </ol>
\t\t 
\t\t 
\t\t <h2>Login</h2>
                  <div class=\"registration_left\">
\t\t <div class=\"col-md-6 log\">\t\t\t 
\t\t\t\t <p>Welcome, please enter the folling to continue.</p>
\t\t\t\t <p>If you have previously Login with us, <span> <a href=\"#\">click here </a></span></p>
                               
   <form action=\"";
        // line 47
        echo $this->env->getExtension('routing')->getPath("fos_user_security_check");
        echo "\" method=\"post\">
    <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 48
        echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token")), "html", null, true);
        echo "\" />

    <label for=\"username\">username</label>
    <input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 51
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" required=\"required\" />

    <label for=\"password\">password </label>
    <input type=\"password\" id=\"password\" name=\"_password\" required=\"required\" />
    <input class=\"acount-btn\"  type=\"submit\" id=\"_submit\" name=\"_submit\"  value=\"login\">
  
</form>
   
\t\t\t\t 
\t\t\t\t <a href=\"";
        // line 60
        echo $this->env->getExtension('routing')->getPath("fos_user_resetting_request");
        echo "\">Forgot Password ?</a>
\t\t\t\t\t
\t\t </div>\t
                                  </div>
\t\t\t\t
\t\t <div class=\"clearfix\"></div>
<div class=\"subscribe\">
\t <div class=\"container\">
\t\t <h3>Newsletter</h3>
\t\t <form>
\t\t\t <input type=\"text\" class=\"text\" value=\"Email\" onfocus=\"this.value = '';\" onblur=\"if (this.value == '') {this.value = 'Email';}\">
\t\t\t <input type=\"submit\" value=\"Subscribe\">
\t\t </form>
\t </div>
</div>

";
    }

    // line 78
    public function block_body($context, array $blocks = array())
    {
        // line 79
        echo "    ";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  158 => 79,  155 => 78,  134 => 60,  122 => 51,  116 => 48,  112 => 47,  98 => 36,  89 => 30,  85 => 29,  80 => 27,  68 => 18,  64 => 17,  58 => 14,  54 => 12,  48 => 10,  46 => 9,  40 => 8,  37 => 7,  33 => 4,  30 => 3,  11 => 1,);
    }
}
/* {% extends "MyappuserBundle::layout.html.twig" %}*/
/* */
/* {% block produit %}*/
/* */
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/* {% if error %}*/
/*     <div>{{ error.messageKey|trans(error.messageData, 'security') }}</div>*/
/* {% endif %}*/
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
/* <ol class="breadcrumb">*/
/* 		 */
/* 		  <li><a href=" {{ path ('homme') }}">Homeeeeeeeeeee</a></li>*/
/* 		  <li class="active">Login</li>*/
/* 		 </ol>*/
/* 		 */
/* 		 */
/* 		 <h2>Login</h2>*/
/*                   <div class="registration_left">*/
/* 		 <div class="col-md-6 log">			 */
/* 				 <p>Welcome, please enter the folling to continue.</p>*/
/* 				 <p>If you have previously Login with us, <span> <a href="#">click here </a></span></p>*/
/*                                */
/*    <form action="{{ path("fos_user_security_check") }}" method="post">*/
/*     <input type="hidden" name="_csrf_token" value="{{ csrf_token }}" />*/
/* */
/*     <label for="username">username</label>*/
/*     <input type="text" id="username" name="_username" value="{{ last_username }}" required="required" />*/
/* */
/*     <label for="password">password </label>*/
/*     <input type="password" id="password" name="_password" required="required" />*/
/*     <input class="acount-btn"  type="submit" id="_submit" name="_submit"  value="login">*/
/*   */
/* </form>*/
/*    */
/* 				 */
/* 				 <a href="{{ path ('fos_user_resetting_request') }}">Forgot Password ?</a>*/
/* 					*/
/* 		 </div>	*/
/*                                   </div>*/
/* 				*/
/* 		 <div class="clearfix"></div>*/
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
/* {% endblock fos_user_content %}*/
/* {% endblock produit %}*/
/* {% block body %}*/
/*     {% endblock body %}*/
/* */
