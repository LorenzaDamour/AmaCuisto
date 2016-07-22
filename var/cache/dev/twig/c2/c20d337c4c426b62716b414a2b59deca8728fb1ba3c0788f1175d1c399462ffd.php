<?php

/* PartagePartageBundle:Accueil:index.html.twig */
class __TwigTemplate_85de7365176d4e7471696571c01143086c5455eee4c9d3de57a5a7630bbe429a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "PartagePartageBundle:Accueil:index.html.twig", 1);
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
        $__internal_cafa9fc513100d5a1888fb6348f8004306df36446437b58d737ba7044077ecc3 = $this->env->getExtension("native_profiler");
        $__internal_cafa9fc513100d5a1888fb6348f8004306df36446437b58d737ba7044077ecc3->enter($__internal_cafa9fc513100d5a1888fb6348f8004306df36446437b58d737ba7044077ecc3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PartagePartageBundle:Accueil:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cafa9fc513100d5a1888fb6348f8004306df36446437b58d737ba7044077ecc3->leave($__internal_cafa9fc513100d5a1888fb6348f8004306df36446437b58d737ba7044077ecc3_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_ec5428e03db407278877ad74349e58731d3ce4ad04ec619342454991947dba1d = $this->env->getExtension("native_profiler");
        $__internal_ec5428e03db407278877ad74349e58731d3ce4ad04ec619342454991947dba1d->enter($__internal_ec5428e03db407278877ad74349e58731d3ce4ad04ec619342454991947dba1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    ";
        $this->displayParentBlock("body", $context, $blocks);
        echo "

<div id=\"carousel-example-generic\" class=\"carousel slide\" data-ride=\"carousel\">
  <!-- Indicators -->
  <div class=\"container\">
  <ol class=\"carousel-indicators\">
    <li data-target=\"#carousel-example-generic\" data-slide-to=\"0\" class=\"active\"></li>
    <li data-target=\"#carousel-example-generic\" data-slide-to=\"1\"></li>
    <li data-target=\"#carousel-example-generic\" data-slide-to=\"2\"></li>
    <li data-target=\"#carousel-example-generic\" data-slide-to=\"2\"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class=\"carousel-inner\" role=\"listbox\">
    <div class=\"item active\">
      <img src=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/cuisine1.jpg"), "html", null, true);
        echo "\" alt=\"\">
      <div class=\"carousel-caption\">

      </div>
    </div>
    <div class=\"item\">
      <img src=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/cuisine2.jpg"), "html", null, true);
        echo "\" alt=\"\">
      <div class=\"carousel-caption\">

      </div>
    </div>
    <div class=\"item\">
      <img src=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/cuisine3.jpg"), "html", null, true);
        echo "\" alt=\"\">
      <div class=\"carousel-caption\">

      </div>
    </div>
    <div class=\"item\">
      <img src=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/cuisine4.jpg"), "html", null, true);
        echo "\" alt=\"\">
      <div class=\"carousel-caption\">
      
      </div>
    </div>
    ...
  </div>

  <!-- Controls -->
  <a class=\"left carousel-control\" href=\"#carousel-example-generic\" role=\"button\" data-slide=\"prev\">
    <span class=\"glyphicon glyphicon-chevron-left\" aria-hidden=\"true\"></span>
    <span class=\"sr-only\">Previous</span>
  </a>
  <a class=\"right carousel-control\" href=\"#carousel-example-generic\" role=\"button\" data-slide=\"next\">
    <span class=\"glyphicon glyphicon-chevron-right\" aria-hidden=\"true\"></span>
    <span class=\"sr-only\">Next</span>
  </a>
</div>
</div>
";
        
        $__internal_ec5428e03db407278877ad74349e58731d3ce4ad04ec619342454991947dba1d->leave($__internal_ec5428e03db407278877ad74349e58731d3ce4ad04ec619342454991947dba1d_prof);

    }

    public function getTemplateName()
    {
        return "PartagePartageBundle:Accueil:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 37,  77 => 31,  68 => 25,  59 => 19,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     {{ parent() }}*/
/* */
/* <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">*/
/*   <!-- Indicators -->*/
/*   <div class="container">*/
/*   <ol class="carousel-indicators">*/
/*     <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>*/
/*     <li data-target="#carousel-example-generic" data-slide-to="1"></li>*/
/*     <li data-target="#carousel-example-generic" data-slide-to="2"></li>*/
/*     <li data-target="#carousel-example-generic" data-slide-to="2"></li>*/
/*   </ol>*/
/* */
/*   <!-- Wrapper for slides -->*/
/*   <div class="carousel-inner" role="listbox">*/
/*     <div class="item active">*/
/*       <img src="{{ asset('images/cuisine1.jpg') }}" alt="">*/
/*       <div class="carousel-caption">*/
/* */
/*       </div>*/
/*     </div>*/
/*     <div class="item">*/
/*       <img src="{{ asset('images/cuisine2.jpg') }}" alt="">*/
/*       <div class="carousel-caption">*/
/* */
/*       </div>*/
/*     </div>*/
/*     <div class="item">*/
/*       <img src="{{ asset('images/cuisine3.jpg') }}" alt="">*/
/*       <div class="carousel-caption">*/
/* */
/*       </div>*/
/*     </div>*/
/*     <div class="item">*/
/*       <img src="{{ asset('images/cuisine4.jpg') }}" alt="">*/
/*       <div class="carousel-caption">*/
/*       */
/*       </div>*/
/*     </div>*/
/*     ...*/
/*   </div>*/
/* */
/*   <!-- Controls -->*/
/*   <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">*/
/*     <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>*/
/*     <span class="sr-only">Previous</span>*/
/*   </a>*/
/*   <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">*/
/*     <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>*/
/*     <span class="sr-only">Next</span>*/
/*   </a>*/
/* </div>*/
/* </div>*/
/* {% endblock %}*/
/* */
