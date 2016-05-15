<?php

/* FOSUserBundle:ChangePassword:changePassword_content.html.twig */
class __TwigTemplate_33f7a1e92b8bdbf5a24146510c2f5bef863aa3d88fc299989c674387945b41d9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'contenu' => array($this, 'block_contenu'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "
\t  
 ";
        // line 3
        $this->displayBlock('contenu', $context, $blocks);
    }

    public function block_contenu($context, array $blocks = array())
    {
        // line 4
        echo "
";
        // line 13
        echo "  
                
                
 <div class=\"registration_form\">
\t\t\t <!-- Form -->
                        ";
        // line 18
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("action" => $this->env->getExtension('routing')->getPath("fos_user_change_password"), "attr" => array("class" => "fos_user_change_password")));
        echo "
    ";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
                        <br />
                        <input class=\"btn btn-primary\" type=\"submit\" value=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("change_password"), "html", null, true);
        echo "\" />
                    ";
        // line 22
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
\t\t\t\t
\t\t\t\t\t
\t\t\t\t
\t\t\t\t<!-- /Form -->
\t\t\t </div>  
                          ";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:ChangePassword:changePassword_content.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  53 => 22,  49 => 21,  44 => 19,  40 => 18,  33 => 13,  30 => 4,  24 => 3,  20 => 1,);
    }
}
/* */
/* 	  */
/*  {% block contenu %}*/
/* */
/* {#{% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {{ form_start(form, { 'action': path('fos_user_change_password'), 'attr': { 'class': 'fos_user_change_password' } }) }}*/
/*     {{ form_widget(form) }}*/
/*     <div>*/
/*         <input type="submit" value="{{ 'change_password.submit'|trans }}" />*/
/*     </div>*/
/* {{ form_end(form) }}*/
/*                 {% endblock contenu %}  #}  */
/*                 */
/*                 */
/*  <div class="registration_form">*/
/* 			 <!-- Form -->*/
/*                         {{ form_start(form, { 'action': path('fos_user_change_password'), 'attr': { 'class': 'fos_user_change_password' } }) }}*/
/*     {{ form_widget(form) }}*/
/*                         <br />*/
/*                         <input class="btn btn-primary" type="submit" value="{{  'change_password'|trans}}" />*/
/*                     {{ form_end(form) }}*/
/* 				*/
/* 					*/
/* 				*/
/* 				<!-- /Form -->*/
/* 			 </div>  */
/*                           {% endblock contenu %}*/
