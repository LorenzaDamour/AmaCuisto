<?php

/* PartagePartageBundle:Photos:galerie.html.twig */
class __TwigTemplate_1aeafd401ed4c68bc14f457f3d79309cf636e4e4b6a73eb0239dc4967877b643 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "PartagePartageBundle:Photos:galerie.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1380b2b24527c0575de290a335d3b4762435d478c1ddc5271d82070e612aa6ae = $this->env->getExtension("native_profiler");
        $__internal_1380b2b24527c0575de290a335d3b4762435d478c1ddc5271d82070e612aa6ae->enter($__internal_1380b2b24527c0575de290a335d3b4762435d478c1ddc5271d82070e612aa6ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PartagePartageBundle:Photos:galerie.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1380b2b24527c0575de290a335d3b4762435d478c1ddc5271d82070e612aa6ae->leave($__internal_1380b2b24527c0575de290a335d3b4762435d478c1ddc5271d82070e612aa6ae_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_5e5ea0524bbb11db7c87ec5652eef0b7ece3722f73307ac85213aa94e9db544b = $this->env->getExtension("native_profiler");
        $__internal_5e5ea0524bbb11db7c87ec5652eef0b7ece3722f73307ac85213aa94e9db544b->enter($__internal_5e5ea0524bbb11db7c87ec5652eef0b7ece3722f73307ac85213aa94e9db544b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<div  class = \"liste\">
  <div class=\"container\">
<table class=\"table\">
       <thead class=\"thead-inverse\">
       <tr>
           <th>Nom de l'atelier</th>
           <th>Photos</th>


       </tr>
       </thead>
       <tbody>
";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["atelier"]);
        foreach ($context['_seq'] as $context["_key"] => $context["atelier"]) {
            // line 17
            echo "

<tr>

    <td>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["atelier"], "nom", array()), "html", null, true);
            echo "</td>
    <td><a href= \"";
            // line 22
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("voir", array("id" => $this->getAttribute($context["atelier"], "id", array()))), "html", null, true);
            echo "\"><input type=\"button\" name=\"name\" class=\"btn btn-success\" value=\"Voir les photos\"></a></td>


</tr>


";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['atelier'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "</tbody>
</table>
</div>
</div>


";
        
        $__internal_5e5ea0524bbb11db7c87ec5652eef0b7ece3722f73307ac85213aa94e9db544b->leave($__internal_5e5ea0524bbb11db7c87ec5652eef0b7ece3722f73307ac85213aa94e9db544b_prof);

    }

    public function getTemplateName()
    {
        return "PartagePartageBundle:Photos:galerie.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 29,  68 => 22,  64 => 21,  58 => 17,  54 => 16,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "base.html.twig" %}*/
/* */
/* {% block body %}*/
/* <div  class = "liste">*/
/*   <div class="container">*/
/* <table class="table">*/
/*        <thead class="thead-inverse">*/
/*        <tr>*/
/*            <th>Nom de l'atelier</th>*/
/*            <th>Photos</th>*/
/* */
/* */
/*        </tr>*/
/*        </thead>*/
/*        <tbody>*/
/* {% for atelier in atelier %}*/
/* */
/* */
/* <tr>*/
/* */
/*     <td>{{ atelier.nom }}</td>*/
/*     <td><a href= "{{ path ('voir',{'id': atelier.id}) }}"><input type="button" name="name" class="btn btn-success" value="Voir les photos"></a></td>*/
/* */
/* */
/* </tr>*/
/* */
/* */
/* {% endfor %}*/
/* </tbody>*/
/* </table>*/
/* </div>*/
/* </div>*/
/* */
/* */
/* {% endblock %}*/
/* */
