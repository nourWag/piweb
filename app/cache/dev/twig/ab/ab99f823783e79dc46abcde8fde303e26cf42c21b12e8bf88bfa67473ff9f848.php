<?php

/* MyappadminBundle:Administration/pages/layout:edit.html.twig */
class __TwigTemplate_f3191716e4dd2ed7dd68f1ddec8d94b50c11d95a480937931a210769f7baf1cd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout/layoutAdmin.html.twig", "MyappadminBundle:Administration/pages/layout:edit.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout/layoutAdmin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "<h2>Pages edit</h2>
<div class=\"span4\">
    ";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form');
        echo "
</div>
<div class=\"span12\">
    <ul class=\"record_actions\">
        <li>
            <a href=\"";
        // line 11
        echo $this->env->getExtension('routing')->getPath("adminPages");
        echo "\">
                Retour
            </a>
        </li>
        <li>";
        // line 15
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form');
        echo "</li>
    </ul>
</div>
";
    }

    public function getTemplateName()
    {
        return "MyappadminBundle:Administration/pages/layout:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 15,  43 => 11,  35 => 6,  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends '::layout/layoutAdmin.html.twig' %}*/
/* */
/* {% block body -%}*/
/* <h2>Pages edit</h2>*/
/* <div class="span4">*/
/*     {{ form(edit_form) }}*/
/* </div>*/
/* <div class="span12">*/
/*     <ul class="record_actions">*/
/*         <li>*/
/*             <a href="{{ path('adminPages') }}">*/
/*                 Retour*/
/*             </a>*/
/*         </li>*/
/*         <li>{{ form(delete_form) }}</li>*/
/*     </ul>*/
/* </div>*/
/* {% endblock %}*/
/* */