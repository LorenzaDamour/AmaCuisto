<?php

/* PartagePartageBundle:atelier:accept.html.twig */
class __TwigTemplate_9c2d1af8f209f11f5450ea76a9114fdaad1c71fa8f10175625b1b204ffd36eda extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "PartagePartageBundle:atelier:accept.html.twig", 1);
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
        $__internal_59829ae1db33e6f3ece5d9c5d5ebeb35007e179503c21793694c03cc463136cb = $this->env->getExtension("native_profiler");
        $__internal_59829ae1db33e6f3ece5d9c5d5ebeb35007e179503c21793694c03cc463136cb->enter($__internal_59829ae1db33e6f3ece5d9c5d5ebeb35007e179503c21793694c03cc463136cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PartagePartageBundle:atelier:accept.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_59829ae1db33e6f3ece5d9c5d5ebeb35007e179503c21793694c03cc463136cb->leave($__internal_59829ae1db33e6f3ece5d9c5d5ebeb35007e179503c21793694c03cc463136cb_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_9ddf803df718c731850ddd238d0fbcaf00c75993cade4d658fc183d626b094c1 = $this->env->getExtension("native_profiler");
        $__internal_9ddf803df718c731850ddd238d0fbcaf00c75993cade4d658fc183d626b094c1->enter($__internal_9ddf803df718c731850ddd238d0fbcaf00c75993cade4d658fc183d626b094c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div class=\"container ateliers\">
        <h1 class=\"text-center\">Ateliers</h1>

        <table class=\"table text-center\">
            <thead class=\"thead-inverse\">
            <tr>
                <th class=\"text-center\">Nom de l'atelier</th>

            </tr>
            </thead>
            <tbody>
            ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["choix"]) ? $context["choix"] : $this->getContext($context, "choix")));
        foreach ($context['_seq'] as $context["_key"] => $context["choix2"]) {
            // line 16
            echo "                <tr>
                    <td>";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["choix2"], "atelier", array()), "nom", array()), "html", null, true);
            echo "</td>

                </tr>

            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['choix2'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "            </tbody>
        </table>
    </div>
";
        
        $__internal_9ddf803df718c731850ddd238d0fbcaf00c75993cade4d658fc183d626b094c1->leave($__internal_9ddf803df718c731850ddd238d0fbcaf00c75993cade4d658fc183d626b094c1_prof);

    }

    public function getTemplateName()
    {
        return "PartagePartageBundle:atelier:accept.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 22,  60 => 17,  57 => 16,  53 => 15,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <div class="container ateliers">*/
/*         <h1 class="text-center">Ateliers</h1>*/
/* */
/*         <table class="table text-center">*/
/*             <thead class="thead-inverse">*/
/*             <tr>*/
/*                 <th class="text-center">Nom de l'atelier</th>*/
/* */
/*             </tr>*/
/*             </thead>*/
/*             <tbody>*/
/*             {% for choix2 in choix %}*/
/*                 <tr>*/
/*                     <td>{{choix2.atelier.nom}}</td>*/
/* */
/*                 </tr>*/
/* */
/*             {% endfor %}*/
/*             </tbody>*/
/*         </table>*/
/*     </div>*/
/* {% endblock %}*/
/* */
