<?php

/* PartagePartageBundle:accueil:index.html.twig */
class __TwigTemplate_54910b475c523c262f47982d91c4dc51552fceab8d1549ecc454a3accecbf70b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "PartagePartageBundle:accueil:index.html.twig", 1);
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
        $__internal_c232d3a9b5448c0a87ede82870e4e31b92e95dc3a035275e23ae8359fed16632 = $this->env->getExtension("native_profiler");
        $__internal_c232d3a9b5448c0a87ede82870e4e31b92e95dc3a035275e23ae8359fed16632->enter($__internal_c232d3a9b5448c0a87ede82870e4e31b92e95dc3a035275e23ae8359fed16632_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PartagePartageBundle:accueil:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c232d3a9b5448c0a87ede82870e4e31b92e95dc3a035275e23ae8359fed16632->leave($__internal_c232d3a9b5448c0a87ede82870e4e31b92e95dc3a035275e23ae8359fed16632_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_d677c462c554dcc180cc6ef764ea5d3b805f66e8d0ebdf5363936106190904d6 = $this->env->getExtension("native_profiler");
        $__internal_d677c462c554dcc180cc6ef764ea5d3b805f66e8d0ebdf5363936106190904d6->enter($__internal_d677c462c554dcc180cc6ef764ea5d3b805f66e8d0ebdf5363936106190904d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    ";
        $this->displayParentBlock("body", $context, $blocks);
        echo "


<div class=\"carousel slide carousel-fade\" data-ride=\"carousel\">

    <!-- Wrapper for slides -->
    <div class=\"carousel-inner\" role=\"listbox\">
        <div class=\"item active\">
        </div>
        <div class=\"item\">
        </div>
        <div class=\"item\">
        </div>
        <div class=\"item\">
        </div>
        <div class=\"item\">
        </div>
        <div class=\"item\">
        </div>
    </div>
</div>

<!-- Remeber to put all the content you want on top of the slider below the slider code -->
<div class=\"title\">
  <h1>AmaCuisto</h1>
  <p> Un site internet qui permet à des cuisiniers amateurs et passionnés de proposer des ateliers à des amateurs.
</p>
</div>

";
        
        $__internal_d677c462c554dcc180cc6ef764ea5d3b805f66e8d0ebdf5363936106190904d6->leave($__internal_d677c462c554dcc180cc6ef764ea5d3b805f66e8d0ebdf5363936106190904d6_prof);

    }

    public function getTemplateName()
    {
        return "PartagePartageBundle:accueil:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     {{ parent() }}*/
/* */
/* */
/* <div class="carousel slide carousel-fade" data-ride="carousel">*/
/* */
/*     <!-- Wrapper for slides -->*/
/*     <div class="carousel-inner" role="listbox">*/
/*         <div class="item active">*/
/*         </div>*/
/*         <div class="item">*/
/*         </div>*/
/*         <div class="item">*/
/*         </div>*/
/*         <div class="item">*/
/*         </div>*/
/*         <div class="item">*/
/*         </div>*/
/*         <div class="item">*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* */
/* <!-- Remeber to put all the content you want on top of the slider below the slider code -->*/
/* <div class="title">*/
/*   <h1>AmaCuisto</h1>*/
/*   <p> Un site internet qui permet à des cuisiniers amateurs et passionnés de proposer des ateliers à des amateurs.*/
/* </p>*/
/* </div>*/
/* */
/* {% endblock %}*/
/* */
