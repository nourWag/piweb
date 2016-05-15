<?php

/* MyappadminBundle:Graphe:LineChart.html.twig */
class __TwigTemplate_df4d8e0c1c767cf0d3fbcaae2aa30cfcc5a1f7c6a5c1d3897cb52049b21ce507 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("MyappadminBundle::layoutAd.html.twig", "MyappadminBundle:Graphe:LineChart.html.twig", 1);
        $this->blocks = array(
            'statistiques' => array($this, 'block_statistiques'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "MyappadminBundle::layoutAd.html.twig";
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
/* {% extends "MyappadminBundle::layoutAd.html.twig" %}*/
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
