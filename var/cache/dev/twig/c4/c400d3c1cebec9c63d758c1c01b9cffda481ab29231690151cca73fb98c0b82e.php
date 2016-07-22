<?php

/* PartagePartageBundle:atelier:indexAtelier.html.twig */
class __TwigTemplate_78ee50b1f62dec4dc47ad99bbd10b724a10e66fb33bb84cdf320f708fcf74a2c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "PartagePartageBundle:atelier:indexAtelier.html.twig", 1);
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
        $__internal_b71181db0db0946d13d776ced4712ba3280f0a011433eb727184ea6885ee6112 = $this->env->getExtension("native_profiler");
        $__internal_b71181db0db0946d13d776ced4712ba3280f0a011433eb727184ea6885ee6112->enter($__internal_b71181db0db0946d13d776ced4712ba3280f0a011433eb727184ea6885ee6112_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PartagePartageBundle:atelier:indexAtelier.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b71181db0db0946d13d776ced4712ba3280f0a011433eb727184ea6885ee6112->leave($__internal_b71181db0db0946d13d776ced4712ba3280f0a011433eb727184ea6885ee6112_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_cd1d496aa4e8ea7961c1532f6229604a19d50ce4ad82d6692cefe44c56371b6a = $this->env->getExtension("native_profiler");
        $__internal_cd1d496aa4e8ea7961c1532f6229604a19d50ce4ad82d6692cefe44c56371b6a->enter($__internal_cd1d496aa4e8ea7961c1532f6229604a19d50ce4ad82d6692cefe44c56371b6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
<section id=\"showAtelier\">
  <div class=\"container\">

        <h1 class=\"text-center\">Liste des ateliers</h1>
        <table class=\"table\">
               <thead class=\"thead-inverse\">
               <tr>
                   <th>Nom de l'atelier</th>
                   <th>Equipements</th>
                   <th>Ingrédients</th>
                   <th>Tarif</th>
                   <th>Participer</th>
               </tr>
               </thead>
               <tbody>

";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["atelier"]);
        foreach ($context['_seq'] as $context["_key"] => $context["atelier"]) {
            // line 22
            echo "

<tr>


    <td>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["atelier"], "nom", array()), "html", null, true);
            echo "</td>

    <td>";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($context["atelier"], "equipements", array()), "html", null, true);
            echo "</td>

    <td>";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($context["atelier"], "ingredients", array()), "html", null, true);
            echo "</td>

    <td>";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($context["atelier"], "tarif", array()), "html", null, true);
            echo "</td>


  <td><a href= \"";
            // line 36
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("participation_new", array("id" => $this->getAttribute($context["atelier"], "id", array()))), "html", null, true);
            echo "\"><input type=\"button\" name=\"name\" class=\"btn btn-success\" value=\"participer\"></a></td>

    <td><a href= \"";
            // line 38
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("atelier_edit", array("id" => $this->getAttribute($context["atelier"], "id", array()))), "html", null, true);
            echo "\"><input type=\"button\" name=\"name\" class=\"btn btn-danger\" value=\"modifier\"></a></td>

    <td><a href= \"";
            // line 40
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("atelier_delete", array("id" => $this->getAttribute($context["atelier"], "id", array()))), "html", null, true);
            echo "\"><i class=\"fa fa-trash\" aria-hidden=\"true\"></i></a></td>

</tr>


";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['atelier'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo "
</tbody>
</table>
</div>
</div>

</section>
";
        
        $__internal_cd1d496aa4e8ea7961c1532f6229604a19d50ce4ad82d6692cefe44c56371b6a->leave($__internal_cd1d496aa4e8ea7961c1532f6229604a19d50ce4ad82d6692cefe44c56371b6a_prof);

    }

    public function getTemplateName()
    {
        return "PartagePartageBundle:atelier:indexAtelier.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  113 => 46,  101 => 40,  96 => 38,  91 => 36,  85 => 33,  80 => 31,  75 => 29,  70 => 27,  63 => 22,  59 => 21,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/* */
/* <section id="showAtelier">*/
/*   <div class="container">*/
/* */
/*         <h1 class="text-center">Liste des ateliers</h1>*/
/*         <table class="table">*/
/*                <thead class="thead-inverse">*/
/*                <tr>*/
/*                    <th>Nom de l'atelier</th>*/
/*                    <th>Equipements</th>*/
/*                    <th>Ingrédients</th>*/
/*                    <th>Tarif</th>*/
/*                    <th>Participer</th>*/
/*                </tr>*/
/*                </thead>*/
/*                <tbody>*/
/* */
/* {% for atelier in atelier %}*/
/* */
/* */
/* <tr>*/
/* */
/* */
/*     <td>{{ atelier.nom }}</td>*/
/* */
/*     <td>{{ atelier.equipements }}</td>*/
/* */
/*     <td>{{ atelier.ingredients }}</td>*/
/* */
/*     <td>{{ atelier.tarif}}</td>*/
/* */
/* */
/*   <td><a href= "{{ path ('participation_new' ,{'id': atelier.id}) }}"><input type="button" name="name" class="btn btn-success" value="participer"></a></td>*/
/* */
/*     <td><a href= "{{ path ('atelier_edit' ,{'id': atelier.id}) }}"><input type="button" name="name" class="btn btn-danger" value="modifier"></a></td>*/
/* */
/*     <td><a href= "{{ path ('atelier_delete' ,{'id': atelier.id}) }}"><i class="fa fa-trash" aria-hidden="true"></i></a></td>*/
/* */
/* </tr>*/
/* */
/* */
/* {% endfor %}*/
/* */
/* </tbody>*/
/* </table>*/
/* </div>*/
/* </div>*/
/* */
/* </section>*/
/* {% endblock %}*/
/* */
