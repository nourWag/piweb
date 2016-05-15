<?php

/* MyappadminBundle:Administration:pages/layout/recherche.html.twig */
class __TwigTemplate_c14cf366559c406a82555cbc1348f50faf903a8e611508ba857e1e1777fa98d1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("MyappadminBundle::layoutAd.html.twig", "MyappadminBundle:Administration:pages/layout/recherche.html.twig", 2);
        $this->blocks = array(
            'contenu' => array($this, 'block_contenu'),
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

    // line 4
    public function block_contenu($context, array $blocks = array())
    {
        // line 5
        echo "<h1>Recherche Liste des client </h1>
<form method=\"POST\"  action=\"\">
    rechercher : <input type=\"text\" name=\"search\"/>
    <input type=\"submit\" value=\"chercher\"/>
</form>
 <div class=\"box box-info\">
                <div class=\"box-header with-border\">
                  <h3 class=\"box-title\">liste de client</h3>
                  <div class=\"box-tools pull-right\">
                    <button class=\"btn btn-box-tool\" data-widget=\"collapse\"><i class=\"fa fa-minus\"></i></button>
                    <button class=\"btn btn-box-tool\" data-widget=\"remove\"><i class=\"fa fa-times\"></i></button>
                  </div>


<div class=\"box-body\">
                  <div class=\"table-responsive\"/>
                    <table class=\"table no-margin\">
                <table id=\"dynamic-table\" class=\"table table-striped table-bordered table-hover\">
\t\t\t\t\t\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th>Login </th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th> Locked </th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th class=\"hidden-480\">E-mail</th>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ace-icon fa fa-clock-o bigger-110 hidden-480\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tLast Login
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</th>
                                                                                                                <th class=\"hidden-480\">Status</th>\t<th class=\"hidden-480\"> fff</th><th class=\"hidden-480\">modifier</th>


\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t</thead>

\t\t\t\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
                                                                                                              ";
        // line 43
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["modeles"]) ? $context["modeles"] : $this->getContext($context, "modeles")));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 44
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 47
            echo twig_escape_filter($this->env, $this->getAttribute($context["i"], "username", array()), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
                                                                                                                <td>
                                                                                                                    ";
            // line 50
            if (($this->getAttribute($context["i"], "locked", array()) == 0)) {
                // line 51
                echo "                                                                                                                        <span class=\"label label-sm label-warning\">NO</span>
                                                                                                                        ";
            } else {
                // line 53
                echo "                                                                                                                            <span class=\"label label-sm label-success\" >YES</span>
                                                                                                                            ";
            }
            // line 55
            echo "                                                                                                                </td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"hidden-480\">";
            // line 56
            echo twig_escape_filter($this->env, $this->getAttribute($context["i"], "email", array()), "html", null, true);
            echo "</td>
                                                                                                                <td>";
            // line 57
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["i"], "lastLogin", array()), "d/m/y h:m"), "html", null, true);
            echo "</td>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"hidden-480\">
                                                                                                                     ";
            // line 60
            if (($this->getAttribute($context["i"], "enabled", array()) == 0)) {
                // line 61
                echo "                                                                                                                        <span class=\"label label-sm label-warning\">Disabled Account</span>
                                                                                                                        ";
            } else {
                // line 63
                echo "                                                                                                                             <span class=\"label label-sm label-success\">Active Account</span>
                                                                                                                            ";
            }
            // line 65
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>

\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 73
            echo "
                                                                                                                                <td><a class=\"green\" href=\"\">
                                                                                                                                     <a href=\"";
            // line 75
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_users_lock_page", array("id" => $this->getAttribute($context["i"], "id", array()))), "html", null, true);
            echo "\">de </a></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ace-icon fa fa-pencil bigger-130\"></i>
                                                                                                              </a></td>

                                                                                                              <td><a class=\"red\" href=\"\">
                                                                                                                                     <a href=\"";
            // line 80
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("aaa", array("id" => $this->getAttribute($context["i"], "id", array()))), "html", null, true);
            echo " \">supprimer </a></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ace-icon fa fa-trash-o bigger-130\"></i>
                                                                                                              </a></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
                                                                                                                    

\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
                                                                                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 89
        echo "
\t\t\t\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t\t\t</table>
                    </table>
       ";
    }

    public function getTemplateName()
    {
        return "MyappadminBundle:Administration:pages/layout/recherche.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  151 => 89,  136 => 80,  128 => 75,  124 => 73,  119 => 65,  115 => 63,  111 => 61,  109 => 60,  103 => 57,  99 => 56,  96 => 55,  92 => 53,  88 => 51,  86 => 50,  80 => 47,  75 => 44,  71 => 43,  31 => 5,  28 => 4,  11 => 2,);
    }
}
/* */
/* {% extends "MyappadminBundle::layoutAd.html.twig" %} */
/*  	  */
/*  {% block contenu %}*/
/* <h1>Recherche Liste des client </h1>*/
/* <form method="POST"  action="">*/
/*     rechercher : <input type="text" name="search"/>*/
/*     <input type="submit" value="chercher"/>*/
/* </form>*/
/*  <div class="box box-info">*/
/*                 <div class="box-header with-border">*/
/*                   <h3 class="box-title">liste de client</h3>*/
/*                   <div class="box-tools pull-right">*/
/*                     <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>*/
/*                     <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>*/
/*                   </div>*/
/* */
/* */
/* <div class="box-body">*/
/*                   <div class="table-responsive"/>*/
/*                     <table class="table no-margin">*/
/*                 <table id="dynamic-table" class="table table-striped table-bordered table-hover">*/
/* 												<thead>*/
/* 													<tr>*/
/* 														*/
/* 														<th>Login </th>*/
/* 														<th> Locked </th>*/
/* 														<th class="hidden-480">E-mail</th>*/
/* */
/* 														<th>*/
/* 															<i class="ace-icon fa fa-clock-o bigger-110 hidden-480"></i>*/
/* 															Last Login*/
/* 														</th>*/
/*                                                                                                                 <th class="hidden-480">Status</th>	<th class="hidden-480"> fff</th><th class="hidden-480">modifier</th>*/
/* */
/* */
/* 														*/
/* 													</tr>*/
/* 												</thead>*/
/* */
/* 												<tbody>*/
/* 													<tr>*/
/*                                                                                                               {% for i in modeles %}*/
/* 														*/
/* */
/* 														<td>*/
/* 															{{i.username}}*/
/* 														</td>*/
/*                                                                                                                 <td>*/
/*                                                                                                                     {% if i.locked == 0 %}*/
/*                                                                                                                         <span class="label label-sm label-warning">NO</span>*/
/*                                                                                                                         {% else %}*/
/*                                                                                                                             <span class="label label-sm label-success" >YES</span>*/
/*                                                                                                                             {% endif %}*/
/*                                                                                                                 </td>*/
/* 														<td class="hidden-480">{{i.email}}</td>*/
/*                                                                                                                 <td>{{i.lastLogin|date('d/m/y h:m')}}</td>*/
/* */
/* 														<td class="hidden-480">*/
/*                                                                                                                      {% if i.enabled == 0 %}*/
/*                                                                                                                         <span class="label label-sm label-warning">Disabled Account</span>*/
/*                                                                                                                         {% else %}*/
/*                                                                                                                              <span class="label label-sm label-success">Active Account</span>*/
/*                                                                                                                             {% endif %}*/
/* 															*/
/* 														</td>*/
/* */
/* 													{#	<td>*/
/* 															<div class="hidden-sm hidden-xs action-buttons">*/
/* 																<a class="blue" href="#">*/
/* 																	<i class="ace-icon fa fa-search-plus bigger-130"></i>*/
/*                                                                                                                                 </a></td>#}*/
/* */
/*                                                                                                                                 <td><a class="green" href="">*/
/*                                                                                                                                      <a href="{{path('admin_users_lock_page',{'id':i.id})}}">de </a></td>*/
/* 																	<i class="ace-icon fa fa-pencil bigger-130"></i>*/
/*                                                                                                               </a></td>*/
/* */
/*                                                                                                               <td><a class="red" href="">*/
/*                                                                                                                                      <a href="{{path("aaa",{'id':i.id})}} ">supprimer </a></td>*/
/* 																	<i class="ace-icon fa fa-trash-o bigger-130"></i>*/
/*                                                                                                               </a></td>*/
/* 															</div>*/
/*                                                                                                                     */
/* */
/* 														</td>*/
/* 													</tr>*/
/*                                                                                                         {% endfor %}*/
/* */
/* 												</tbody>*/
/* 											</table>*/
/*                     </table>*/
/*        {% endblock contenu %} */
/*         */
/* {#<table border="1">*/
/*     <tr>*/
/*         <td>Id</td>*/
/*          <td>username</td>*/
/*          */
/*     </tr>*/
/* </table>*/
/*     {% for i in modeles %}*/
/*     <tr>*/
/*         <th>{{i.id}}</th>*/
/*         <th>{{i.username}}</th>*/
/* */
/*        */
/*           </tr>*/
/*     {% endfor %}*/
/*     {% endblock %}#}*/
/* */
