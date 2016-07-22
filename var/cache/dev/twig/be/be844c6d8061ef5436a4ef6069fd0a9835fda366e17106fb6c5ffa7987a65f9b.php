<?php

/* atelier/accept.html.twig */
class __TwigTemplate_4bd41832304a680830f27e3e2fdd8375f3ae20f833e29423a65d533bdf71486e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "atelier/accept.html.twig", 1);
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
        $__internal_34322c89854a1d6376597881792096d85481a520ee5d7e543d7ca160b3b256a5 = $this->env->getExtension("native_profiler");
        $__internal_34322c89854a1d6376597881792096d85481a520ee5d7e543d7ca160b3b256a5->enter($__internal_34322c89854a1d6376597881792096d85481a520ee5d7e543d7ca160b3b256a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "atelier/accept.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_34322c89854a1d6376597881792096d85481a520ee5d7e543d7ca160b3b256a5->leave($__internal_34322c89854a1d6376597881792096d85481a520ee5d7e543d7ca160b3b256a5_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_1e9592d5a9c52634824806660e6c1ddecbbf594e5888df018151f6317f770f92 = $this->env->getExtension("native_profiler");
        $__internal_1e9592d5a9c52634824806660e6c1ddecbbf594e5888df018151f6317f770f92->enter($__internal_1e9592d5a9c52634824806660e6c1ddecbbf594e5888df018151f6317f770f92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div class=\"container ateliers\">
        <h1 class=\"text-center\">Ateliers</h1>

        <table class=\"table\">
            <thead class=\"thead-inverse\">
            <tr>
                <th>Nom de l'atelier</th>

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
        
        $__internal_1e9592d5a9c52634824806660e6c1ddecbbf594e5888df018151f6317f770f92->leave($__internal_1e9592d5a9c52634824806660e6c1ddecbbf594e5888df018151f6317f770f92_prof);

    }

    public function getTemplateName()
    {
        return "atelier/accept.html.twig";
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
/*         <table class="table">*/
/*             <thead class="thead-inverse">*/
/*             <tr>*/
/*                 <th>Nom de l'atelier</th>*/
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
