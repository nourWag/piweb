<?php

/* MyappadminBundle:Administration/pages/layout:new.html.twig */
class __TwigTemplate_c88c5b0464f2003c798fbefb0821a87bd3edba68118f8cfe81ecb753eaf497b3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("testMyapppagesBundle::layoutAd.html.twig", "MyappadminBundle:Administration/pages/layout:new.html.twig", 1);
        $this->blocks = array(
            'contenu' => array($this, 'block_contenu'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "testMyapppagesBundle::layoutAd.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_contenu($context, array $blocks = array())
    {
        // line 4
        echo "
";
        // line 5
        $this->displayBlock('body', $context, $blocks);
    }

    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "<h2>Pages creation</h2>
<div class=\"span4\">
    ";
        // line 8
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        echo "
</div>
<div class=\"span12\">
    <ul class=\"record_actions\">
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("adminPages");
        echo "\">
                Retour
            </a>
        </li>
    </ul>
</div>
";
    }

    public function getTemplateName()
    {
        return "MyappadminBundle:Administration/pages/layout:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 13,  45 => 8,  41 => 6,  35 => 5,  32 => 4,  29 => 3,  11 => 1,);
    }
}
/* {% extends "testMyapppagesBundle::layoutAd.html.twig" %} */
/*    */
/* {% block contenu %}*/
/* */
/* {% block body %}*/
/* <h2>Pages creation</h2>*/
/* <div class="span4">*/
/*     {{ form(form) }}*/
/* </div>*/
/* <div class="span12">*/
/*     <ul class="record_actions">*/
/*         <li>*/
/*             <a href="{{ path('adminPages') }}">*/
/*                 Retour*/
/*             </a>*/
/*         </li>*/
/*     </ul>*/
/* </div>*/
/* {% endblock %}*/
/* {% endblock %}*/
/* */
