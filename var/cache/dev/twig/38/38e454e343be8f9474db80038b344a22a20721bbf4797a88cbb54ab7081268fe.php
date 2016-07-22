<?php

/* PartagePartageBundle:atelier:indexAtelier.html.twig */
class __TwigTemplate_fb1c9b4ef79397cd8c9061dff48e68f0576674c222c0ee12e5ae15586729d3c0 extends Twig_Template
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
        $__internal_fd0545da455587d2bc6956c8ca2b6efe9c94deb389d6650ab18f53ccc39dd1fd = $this->env->getExtension("native_profiler");
        $__internal_fd0545da455587d2bc6956c8ca2b6efe9c94deb389d6650ab18f53ccc39dd1fd->enter($__internal_fd0545da455587d2bc6956c8ca2b6efe9c94deb389d6650ab18f53ccc39dd1fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PartagePartageBundle:atelier:indexAtelier.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fd0545da455587d2bc6956c8ca2b6efe9c94deb389d6650ab18f53ccc39dd1fd->leave($__internal_fd0545da455587d2bc6956c8ca2b6efe9c94deb389d6650ab18f53ccc39dd1fd_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_bf6cbc04b4b5959565807ade602b999eed1df5bde525b11ceb2e6953f4598633 = $this->env->getExtension("native_profiler");
        $__internal_bf6cbc04b4b5959565807ade602b999eed1df5bde525b11ceb2e6953f4598633->enter($__internal_bf6cbc04b4b5959565807ade602b999eed1df5bde525b11ceb2e6953f4598633_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
<section id=\"Atelier\">
  <div class=\"container\">

        <h1 class=\"titre\">Liste des ateliers</h1>
        <table class=\"table\">
               <thead class=\"thead-inverse\">
               <tr>
                   <th>Nom de l'atelier</th>
                   <th>Equipements</th>
                   <th>Ingrédients</th>
                   <th>Tarif</th>
                   
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
            echo "\"><button class=\"button is-turquoise\" id =\"envoyer\" type=\"submit\" >Participer</button> </a></td>
       </div>


    <td><a href= \"";
            // line 40
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("atelier_edit", array("id" => $this->getAttribute($context["atelier"], "id", array()))), "html", null, true);
            echo "\"><button class=\"button is-grapefruit\" id =\"envoyer\" type=\"submit\" >Modifier</button>
</a></td>

    <td><a href= \"";
            // line 43
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("atelier_delete", array("id" => $this->getAttribute($context["atelier"], "id", array()))), "html", null, true);
            echo "\"><i class=\"fa fa-trash\" aria-hidden=\"true\"></i></a></td>

</tr>


";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['atelier'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
        echo "
</tbody>
</table>
</div>
</div>

</section>
";
        
        $__internal_bf6cbc04b4b5959565807ade602b999eed1df5bde525b11ceb2e6953f4598633->leave($__internal_bf6cbc04b4b5959565807ade602b999eed1df5bde525b11ceb2e6953f4598633_prof);

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
        return array (  116 => 49,  104 => 43,  98 => 40,  91 => 36,  85 => 33,  80 => 31,  75 => 29,  70 => 27,  63 => 22,  59 => 21,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/* */
/* <section id="Atelier">*/
/*   <div class="container">*/
/* */
/*         <h1 class="titre">Liste des ateliers</h1>*/
/*         <table class="table">*/
/*                <thead class="thead-inverse">*/
/*                <tr>*/
/*                    <th>Nom de l'atelier</th>*/
/*                    <th>Equipements</th>*/
/*                    <th>Ingrédients</th>*/
/*                    <th>Tarif</th>*/
/*                    */
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
/*   <td><a href= "{{ path ('participation_new' ,{'id': atelier.id}) }}"><button class="button is-turquoise" id ="envoyer" type="submit" >Participer</button> </a></td>*/
/*        </div>*/
/* */
/* */
/*     <td><a href= "{{ path ('atelier_edit' ,{'id': atelier.id}) }}"><button class="button is-grapefruit" id ="envoyer" type="submit" >Modifier</button>*/
/* </a></td>*/
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
