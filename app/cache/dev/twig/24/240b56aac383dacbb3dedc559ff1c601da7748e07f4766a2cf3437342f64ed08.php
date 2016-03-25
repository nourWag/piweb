<?php

/* MyappResponsableBundle:View1nour:testRecherche.html.twig */
class __TwigTemplate_5ef1499c463ac2860f2602af54366b15f4417785677fc752ee832c17a4802573 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<form action=\"#\" method=\"post\" >
       <input type=\"text\" name=\"search1\" value=\"\" placeholder=\"Search\"  />   
       <a href=\"";
        // line 3
        echo $this->env->getExtension('routing')->getPath("produit_rechercher");
        echo "\"> 
           <button type=\"submit\"  class=\"button-search\">
                
                <i class=\"fa fa-search\"></i>
        
        
           </button>
       </a>
           <button type=\"submit\"  class=\"button-search\">
                
                <i class=\"fa fa-search\"></i>
        
        
           </button>
           <input type=\"submit\"  class=\"button-search\"/>
           </form>
";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["modele"]) ? $context["modele"] : $this->getContext($context, "modele")));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 20
            echo "    ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "id", array()), "html", null, true);
            echo "
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "MyappResponsableBundle:View1nour:testRecherche.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 20,  42 => 19,  23 => 3,  19 => 1,);
    }
}
/* <form action="#" method="post" >*/
/*        <input type="text" name="search1" value="" placeholder="Search"  />   */
/*        <a href="{{ path('produit_rechercher') }}"> */
/*            <button type="submit"  class="button-search">*/
/*                 */
/*                 <i class="fa fa-search"></i>*/
/*         */
/*         */
/*            </button>*/
/*        </a>*/
/*            <button type="submit"  class="button-search">*/
/*                 */
/*                 <i class="fa fa-search"></i>*/
/*         */
/*         */
/*            </button>*/
/*            <input type="submit"  class="button-search"/>*/
/*            </form>*/
/* {%for item in modele %}*/
/*     {{ item.id}}*/
/*     {%endfor %}*/
/* */
