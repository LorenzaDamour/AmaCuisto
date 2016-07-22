<?php

/* PartagePartageBundle:Default:notifications.html.twig */
class __TwigTemplate_1f93424bf7dbe9a8300bce8d5f0676ddb399e3555c824c137af4d74adfd00df3 extends Twig_Template
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
        $__internal_09ae52fb2f1a59610eabcc69ebdcdf288dfa3a6793e10d266985ec44c9a5266e = $this->env->getExtension("native_profiler");
        $__internal_09ae52fb2f1a59610eabcc69ebdcdf288dfa3a6793e10d266985ec44c9a5266e->enter($__internal_09ae52fb2f1a59610eabcc69ebdcdf288dfa3a6793e10d266985ec44c9a5266e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PartagePartageBundle:Default:notifications.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_09ae52fb2f1a59610eabcc69ebdcdf288dfa3a6793e10d266985ec44c9a5266e->leave($__internal_09ae52fb2f1a59610eabcc69ebdcdf288dfa3a6793e10d266985ec44c9a5266e_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_0e6a68449adb0f2822747452fe7e6afa5726dbc0b2536f25a0d1c36a10420a37 = $this->env->getExtension("native_profiler");
        $__internal_0e6a68449adb0f2822747452fe7e6afa5726dbc0b2536f25a0d1c36a10420a37->enter($__internal_0e6a68449adb0f2822747452fe7e6afa5726dbc0b2536f25a0d1c36a10420a37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "<div class=\"container interesse\">
      <h1 class=\"text-center\">Personnes intéressées</h1>
      <table class=\"table\">
    <thead>
      <tr>
        <th>Nom de l'atelier</th>
        <th>Date</th>
        <th>Heure</th>
        <th>Choix</th>
      </tr>
    </thead>
      <tbody>

      ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["ateliers"]) ? $context["ateliers"] : $this->getContext($context, "ateliers")));
        foreach ($context['_seq'] as $context["_key"] => $context["atelier"]) {
            // line 17
            echo "
      ";
            // line 18
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["atelier"], "participations", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 19
                echo "
        <tr>
    <td>";
                // line 21
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["item"], "atelier", array()), "nom", array()), "html", null, true);
                echo "</td>
    <td>";
                // line 22
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["item"], "date", array()), "m/d/Y"), "html", null, true);
                echo "</td>
    <td>";
                // line 23
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["item"], "heure", array()), "h:i:s"), "html", null, true);
                echo "</td>


<td><div class=\"col-md-3\">
      <a href=\"";
                // line 27
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("atelier_accepte", array("id" => $this->getAttribute($context["atelier"], "id", array()), "atelierId" => $this->getAttribute($context["atelier"], "id", array()))), "html", null, true);
                echo "\" class=\"accepter\"><i class=\"fa fa-check\" aria-hidden=\"true\"></i> Accepter</a>|
      <a href=\"";
                // line 28
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("atelier_refuse", array("id" => $this->getAttribute($context["atelier"], "id", array()), "atelierId" => $this->getAttribute($context["atelier"], "id", array()))), "html", null, true);
                echo "\" class=\"accepter\"><i class=\"fa fa-check\" aria-hidden=\"true\"></i> Refuser </a></td>
    </div>
  </tr>

      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 33
            echo "



";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['atelier'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "</tbody>
</table>

</div>


";
        
        $__internal_0e6a68449adb0f2822747452fe7e6afa5726dbc0b2536f25a0d1c36a10420a37->leave($__internal_0e6a68449adb0f2822747452fe7e6afa5726dbc0b2536f25a0d1c36a10420a37_prof);

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
        return array (  110 => 38,  100 => 33,  89 => 28,  85 => 27,  78 => 23,  74 => 22,  70 => 21,  66 => 19,  62 => 18,  59 => 17,  55 => 16,  40 => 3,  34 => 2,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* {% block body %}*/
/* <div class="container interesse">*/
/*       <h1 class="text-center">Personnes intéressées</h1>*/
/*       <table class="table">*/
/*     <thead>*/
/*       <tr>*/
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
/*       {% for item in atelier.participations %}*/
/* */
/*         <tr>*/
/*     <td>{{item.atelier.nom}}</td>*/
/*     <td>{{item.date|date("m/d/Y")}}</td>*/
/*     <td>{{item.heure|date("h:i:s")}}</td>*/
/* */
/* */
/* <td><div class="col-md-3">*/
/*       <a href="{{ path ('atelier_accepte', {'id' : atelier.id, 'atelierId':atelier.id }) }}" class="accepter"><i class="fa fa-check" aria-hidden="true"></i> Accepter</a>|*/
/*       <a href="{{ path ('atelier_refuse', {'id' : atelier.id, 'atelierId':atelier.id }) }}" class="accepter"><i class="fa fa-check" aria-hidden="true"></i> Refuser </a></td>*/
/*     </div>*/
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
