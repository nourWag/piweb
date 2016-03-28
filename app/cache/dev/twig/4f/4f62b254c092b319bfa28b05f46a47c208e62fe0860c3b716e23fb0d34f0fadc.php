<?php

/* MyappuserBundle:Panier:PanierView.html.twig */
class __TwigTemplate_dce0d39a0e647dd762f2c46d1fd350ed76f3016126cb438101deb74ac4349c99 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("MyappuserBundle::layout.html.twig", "MyappuserBundle:Panier:PanierView.html.twig", 1);
        $this->blocks = array(
            'panier' => array($this, 'block_panier'),
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

    // line 2
    public function block_panier($context, array $blocks = array())
    {
        // line 3
        echo "    
<body>
<h1> Mon Panier </h1>
<table class=\"table table-hover\" border=\"2px\">
    
 
<tr>
    <th> ID </th>
    <th> Reference </th>
    <th> Image </th>
    <th> prix unitaire </th>
    <th> Quantite </th>
    <th>Prix total</th>
    <th></th>
</tr>
";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["produits"]) ? $context["produits"] : $this->getContext($context, "produits")));
        foreach ($context['_seq'] as $context["_key"] => $context["pr"]) {
            // line 19
            echo "  <tr name=\"produit\" id=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["pr"], "idPr", array()), "html", null, true);
            echo "\">
    <td> ";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["pr"], "idPr", array()), "html", null, true);
            echo " </td>
    <td> ";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["pr"], "reference", array()), "html", null, true);
            echo " </td>
    <td><img style=\"width: 20%\" src=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->env->getExtension('routing')->getPath("my_image_route2", array("id" => $this->getAttribute($context["pr"], "img", array())))), "html", null, true);
            echo "\" alt=\"\" /></td>
    <td> ";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["pr"], "prix", array()), "html", null, true);
            echo " TND </td>
    <td> ";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["pr"], "quantite", array()), "html", null, true);
            echo " </td>
    <td>";
            // line 25
            echo twig_escape_filter($this->env, ($this->getAttribute($context["pr"], "prix", array()) * $this->getAttribute($context["pr"], "quantite", array())), "html", null, true);
            echo " TND</td>
    <td>
  <button type=\"button\" class=\"btn btn-danger\" name=\"btn_del\" id=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["pr"], "idpr", array()), "html", null, true);
            echo "\">Supprimer</button>
    </td>
  </tr>
  
  
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pr'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "    
 </table>
    <br>
    <br>
  <button type=\"button\" class=\"btn btn-primary\"> Continuer mes achats </button>  
  <button type=\"button\" class=\"btn btn-success\"> Valider mon panier </button>  
  
    
    
    
 <script>
\$(document).ready(function() {
    
        //Supprimer un produit
        \$(\"[name='btn_del']\").click(
        function(){
            var url='http://";
        // line 49
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "server", array()), "get", array(0 => "SERVER_NAME"), "method"), "html", null, true);
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->env->getExtension('routing')->getPath("tunisia_supprimer_du panier")), "html", null, true);
        echo "';
            var idProdui=\$( this ).attr(\"id\");
            \$.ajax({url:url,
                 method: 'GET',
                 data: { idprodui :idProdui },
                 success: function(result){
                    alert(\"le produit est supprimé\");
                    }
                });
            \$(\" tr[id=\"+idProdui+\"]\").remove();
            
        });
    });

</script>
</body>
<br>
    <br>
    <br>
    <br>
";
    }

    public function getTemplateName()
    {
        return "MyappuserBundle:Panier:PanierView.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 49,  94 => 33,  82 => 27,  77 => 25,  73 => 24,  69 => 23,  65 => 22,  61 => 21,  57 => 20,  52 => 19,  48 => 18,  31 => 3,  28 => 2,  11 => 1,);
    }
}
/* {% extends "MyappuserBundle::layout.html.twig" %}*/
/* {% block panier %}*/
/*     */
/* <body>*/
/* <h1> Mon Panier </h1>*/
/* <table class="table table-hover" border="2px">*/
/*     */
/*  */
/* <tr>*/
/*     <th> ID </th>*/
/*     <th> Reference </th>*/
/*     <th> Image </th>*/
/*     <th> prix unitaire </th>*/
/*     <th> Quantite </th>*/
/*     <th>Prix total</th>*/
/*     <th></th>*/
/* </tr>*/
/* {% for pr in produits %}*/
/*   <tr name="produit" id="{{pr.idPr}}">*/
/*     <td> {{pr.idPr}} </td>*/
/*     <td> {{pr.reference}} </td>*/
/*     <td><img style="width: 20%" src="{{ asset(path('my_image_route2', {'id': pr.img})) }}" alt="" /></td>*/
/*     <td> {{pr.prix}} TND </td>*/
/*     <td> {{pr.quantite}} </td>*/
/*     <td>{{pr.prix*pr.quantite}} TND</td>*/
/*     <td>*/
/*   <button type="button" class="btn btn-danger" name="btn_del" id="{{pr.idpr}}">Supprimer</button>*/
/*     </td>*/
/*   </tr>*/
/*   */
/*   */
/*     {% endfor %}*/
/*     */
/*  </table>*/
/*     <br>*/
/*     <br>*/
/*   <button type="button" class="btn btn-primary"> Continuer mes achats </button>  */
/*   <button type="button" class="btn btn-success"> Valider mon panier </button>  */
/*   */
/*     */
/*     */
/*     */
/*  <script>*/
/* $(document).ready(function() {*/
/*     */
/*         //Supprimer un produit*/
/*         $("[name='btn_del']").click(*/
/*         function(){*/
/*             var url='http://{{ app.request.server.get('SERVER_NAME')}}{{asset(path('tunisia_supprimer_du panier'))}}';*/
/*             var idProdui=$( this ).attr("id");*/
/*             $.ajax({url:url,*/
/*                  method: 'GET',*/
/*                  data: { idprodui :idProdui },*/
/*                  success: function(result){*/
/*                     alert("le produit est supprimé");*/
/*                     }*/
/*                 });*/
/*             $(" tr[id="+idProdui+"]").remove();*/
/*             */
/*         });*/
/*     });*/
/* */
/* </script>*/
/* </body>*/
/* <br>*/
/*     <br>*/
/*     <br>*/
/*     <br>*/
/* {%endblock %}*/
/* */
