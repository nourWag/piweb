<?php

/* MyappadminBundle:Administration/client:ajout.html.twig */
class __TwigTemplate_e69b4b64b8c579af05b9e3e6c8ad39b73e1026c55509cb3fc4bb6f62529680d5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("MyAppParcBundle::layout.html.twig", "MyappadminBundle:Administration/client:ajout.html.twig", 1);
        $this->blocks = array(
            'dynamique' => array($this, 'block_dynamique'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "MyAppParcBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_dynamique($context, array $blocks = array())
    {
        // line 3
        echo "<h1>Interface d'ajout</h1>
<form method='post' action=''>
    libelle:<input type='text' name='libelle'><br>
    pays:<input type='text' name='pays'><br>
    <input type='submit' value='ajouter'>
</form>
";
    }

    public function getTemplateName()
    {
        return "MyappadminBundle:Administration/client:ajout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 3,  28 => 2,  11 => 1,);
    }
}
/* {% extends 'MyAppParcBundle::layout.html.twig' %}*/
/* {% block dynamique %}*/
/* <h1>Interface d'ajout</h1>*/
/* <form method='post' action=''>*/
/*     libelle:<input type='text' name='libelle'><br>*/
/*     pays:<input type='text' name='pays'><br>*/
/*     <input type='submit' value='ajouter'>*/
/* </form>*/
/* {% endblock %}*/
