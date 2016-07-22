<?php

/* atelier/indexAtelier.html.twig */
class __TwigTemplate_3f8929010acf4b736f201ee4a4d7e0bbfec7dc451f8f3fb01ddc7940ebbee5ef extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "atelier/indexAtelier.html.twig", 1);
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
        $__internal_85d9dc3c235c0e64fb410e01e21cc1c19d4fd6943a646c47ea3681d23399009b = $this->env->getExtension("native_profiler");
        $__internal_85d9dc3c235c0e64fb410e01e21cc1c19d4fd6943a646c47ea3681d23399009b->enter($__internal_85d9dc3c235c0e64fb410e01e21cc1c19d4fd6943a646c47ea3681d23399009b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "atelier/indexAtelier.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_85d9dc3c235c0e64fb410e01e21cc1c19d4fd6943a646c47ea3681d23399009b->leave($__internal_85d9dc3c235c0e64fb410e01e21cc1c19d4fd6943a646c47ea3681d23399009b_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_8753973a0e39934ccc73137af380792f09da525fe2c10c6fe126f436bbd78ea1 = $this->env->getExtension("native_profiler");
        $__internal_8753973a0e39934ccc73137af380792f09da525fe2c10c6fe126f436bbd78ea1->enter($__internal_8753973a0e39934ccc73137af380792f09da525fe2c10c6fe126f436bbd78ea1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
            echo "<tr>

    <td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["atelier"], "nom", array()), "html", null, true);
            echo "</td>

    <td>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["atelier"], "equipements", array()), "html", null, true);
            echo "</td>

    <td>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["atelier"], "ingredients", array()), "html", null, true);
            echo "</td>

    <td>";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($context["atelier"], "tarif", array()), "html", null, true);
            echo "</td>


  <td><a href= \"";
            // line 33
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("participation_new", array("id" => $this->getAttribute($context["atelier"], "id", array()))), "html", null, true);
            echo "\"><input type=\"button\" name=\"name\" value=\"participer\"></a></td>
</tr>


";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['atelier'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "
</tbody>
</table>
</div>
</div>

</section>
";
        
        $__internal_8753973a0e39934ccc73137af380792f09da525fe2c10c6fe126f436bbd78ea1->leave($__internal_8753973a0e39934ccc73137af380792f09da525fe2c10c6fe126f436bbd78ea1_prof);

    }

    public function getTemplateName()
    {
        return "atelier/indexAtelier.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 38,  88 => 33,  82 => 30,  77 => 28,  72 => 26,  67 => 24,  63 => 22,  59 => 21,  40 => 4,  34 => 3,  11 => 1,);
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
/* <tr>*/
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
/*   <td><a href= "{{ path ('participation_new' ,{'id': atelier.id}) }}"><input type="button" name="name" value="participer"></a></td>*/
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
