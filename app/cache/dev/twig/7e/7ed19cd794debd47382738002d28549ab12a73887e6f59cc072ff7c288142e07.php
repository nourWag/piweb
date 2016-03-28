<?php

/* MyappadminBundle:Graphe:LineChart.html.twig */
class __TwigTemplate_5e2522085d7c09f536d0f7e912aad8419b816d4af12ed1997cfdbcd6d290fb3e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("MyappadminBundle::layoutgraphe.html.twig", "MyappadminBundle:Graphe:LineChart.html.twig", 1);
        $this->blocks = array(
            'statistiques' => array($this, 'block_statistiques'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "MyappadminBundle::layoutgraphe.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_statistiques($context, array $blocks = array())
    {
        // line 3
        echo "<script src=\"http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js\"
type=\"text/javascript\"></script>  
<script src=\"//code.highcharts.com/4.0.1/highcharts.js\"></script>
<script src=\"//code.highcharts.com/4.0.1/modules/exporting.js\"></script> 
<script type=\"text/javascript\"> 
    ";
        // line 8
        echo $this->env->getExtension('highcharts_extension')->chart((isset($context["chart"]) ? $context["chart"] : $this->getContext($context, "chart")));
        echo " 
</script>  
<div id=\"linechart\" style=\"min-width: 400px; height: 400px; margin: 0 auto\"></div> 
 ";
    }

    public function getTemplateName()
    {
        return "MyappadminBundle:Graphe:LineChart.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 8,  31 => 3,  28 => 2,  11 => 1,);
    }
}
/* {% extends "MyappadminBundle::layoutgraphe.html.twig" %}*/
/* {% block statistiques %}*/
/* <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"*/
/* type="text/javascript"></script>  */
/* <script src="//code.highcharts.com/4.0.1/highcharts.js"></script>*/
/* <script src="//code.highcharts.com/4.0.1/modules/exporting.js"></script> */
/* <script type="text/javascript"> */
/*     {{ chart(chart) }} */
/* </script>  */
/* <div id="linechart" style="min-width: 400px; height: 400px; margin: 0 auto"></div> */
/*  {% endblock %}*/
