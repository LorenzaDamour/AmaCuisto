<?php

/* PartagePartageBundle:Default:notifications.html.twig */
class __TwigTemplate_293429af6a217009cc859f1da2bcaff483b10e8e6b819d828fecaaffecff3d46 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "PartagePartageBundle:Default:notifications.html.twig", 1);
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
        $__internal_eed195044ef2b2fc3345d31a2ff1e5b39229b575ff4ed4ad15a6932f437c780c = $this->env->getExtension("native_profiler");
        $__internal_eed195044ef2b2fc3345d31a2ff1e5b39229b575ff4ed4ad15a6932f437c780c->enter($__internal_eed195044ef2b2fc3345d31a2ff1e5b39229b575ff4ed4ad15a6932f437c780c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PartagePartageBundle:Default:notifications.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_eed195044ef2b2fc3345d31a2ff1e5b39229b575ff4ed4ad15a6932f437c780c->leave($__internal_eed195044ef2b2fc3345d31a2ff1e5b39229b575ff4ed4ad15a6932f437c780c_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_1209b4c9388b20f1c3f6ca2e6f55adcb6fb49d6898567d68bfd5ead6916ec56f = $this->env->getExtension("native_profiler");
        $__internal_1209b4c9388b20f1c3f6ca2e6f55adcb6fb49d6898567d68bfd5ead6916ec56f->enter($__internal_1209b4c9388b20f1c3f6ca2e6f55adcb6fb49d6898567d68bfd5ead6916ec56f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "<div class=\"container interesse\">
      <h1 class=\"titre\">Personnes intéressées</h1>
      <table class=\"table\">
    <thead>
      <tr>
        <th>Nom</th>
        <th>Adresse</th>
        <th>Tel</th>
        <th>Nom de l'atelier</th>
        <th>Date</th>
        <th>Heure</th>
        <th>Choix</th>
      </tr>
    </thead>
      <tbody>

      ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["ateliers"]) ? $context["ateliers"] : $this->getContext($context, "ateliers")));
        foreach ($context['_seq'] as $context["_key"] => $context["atelier"]) {
            // line 20
            echo "

      ";
            // line 22
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["atelier"], "participations", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 23
                echo "
        <tr>
    <td>";
                // line 25
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["item"], "user", array()), "nom", array()), "html", null, true);
                echo "</td>
    <td>";
                // line 26
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["item"], "user", array()), "adresse", array()), "html", null, true);
                echo "</td>
    <td>";
                // line 27
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["item"], "user", array()), "tel", array()), "html", null, true);
                echo "</td>
    <td>";
                // line 28
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["item"], "atelier", array()), "nom", array()), "html", null, true);
                echo "</td>
    <td>";
                // line 29
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["item"], "date", array()), "m/d/Y"), "html", null, true);
                echo "</td>
    <td>";
                // line 30
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["item"], "heure", array()), "h:i:s"), "html", null, true);
                echo "</td>


<td>
      <a href=\"";
                // line 34
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("atelier_accepte", array("id" => $this->getAttribute($context["atelier"], "id", array()), "atelierId" => $this->getAttribute($context["atelier"], "id", array()))), "html", null, true);
                echo "\" class=\"accepter\"><i class=\"fa fa-check\" aria-hidden=\"true\"></i></a>
      <a href=\"";
                // line 35
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("atelier_refuse", array("id" => $this->getAttribute($context["atelier"], "id", array()), "atelierId" => $this->getAttribute($context["atelier"], "id", array()))), "html", null, true);
                echo "\" class=\"accepter\"><i class=\"fa fa-times\" aria-hidden=\"true\"></i> </a></td>

  </tr>

      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 40
            echo "



";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['atelier'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        echo "</tbody>
</table>

</div>


";
        
        $__internal_1209b4c9388b20f1c3f6ca2e6f55adcb6fb49d6898567d68bfd5ead6916ec56f->leave($__internal_1209b4c9388b20f1c3f6ca2e6f55adcb6fb49d6898567d68bfd5ead6916ec56f_prof);

    }

    public function getTemplateName()
    {
        return "PartagePartageBundle:Default:notifications.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  126 => 45,  116 => 40,  105 => 35,  101 => 34,  94 => 30,  90 => 29,  86 => 28,  82 => 27,  78 => 26,  74 => 25,  70 => 23,  66 => 22,  62 => 20,  58 => 19,  40 => 3,  34 => 2,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* {% block body %}*/
/* <div class="container interesse">*/
/*       <h1 class="titre">Personnes intéressées</h1>*/
/*       <table class="table">*/
/*     <thead>*/
/*       <tr>*/
/*         <th>Nom</th>*/
/*         <th>Adresse</th>*/
/*         <th>Tel</th>*/
/*         <th>Nom de l'atelier</th>*/
/*         <th>Date</th>*/
/*         <th>Heure</th>*/
/*         <th>Choix</th>*/
/*       </tr>*/
/*     </thead>*/
/*       <tbody>*/
/* */
/*       {% for atelier in ateliers %}*/
/* */
/* */
/*       {% for item in atelier.participations %}*/
/* */
/*         <tr>*/
/*     <td>{{item.user.nom}}</td>*/
/*     <td>{{item.user.adresse}}</td>*/
/*     <td>{{item.user.tel}}</td>*/
/*     <td>{{item.atelier.nom}}</td>*/
/*     <td>{{item.date|date("m/d/Y")}}</td>*/
/*     <td>{{item.heure|date("h:i:s")}}</td>*/
/* */
/* */
/* <td>*/
/*       <a href="{{ path ('atelier_accepte', {'id' : atelier.id, 'atelierId':atelier.id }) }}" class="accepter"><i class="fa fa-check" aria-hidden="true"></i></a>*/
/*       <a href="{{ path ('atelier_refuse', {'id' : atelier.id, 'atelierId':atelier.id }) }}" class="accepter"><i class="fa fa-times" aria-hidden="true"></i> </a></td>*/
/* */
/*   </tr>*/
/* */
/*       {% endfor %}*/
/* */
/* */
/* */
/* */
/* {% endfor %}*/
/* </tbody>*/
/* </table>*/
/* */
/* </div>*/
/* */
/* */
/* {% endblock %}*/
/* */
