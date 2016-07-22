<?php

/* PartagePartageBundle:Default:atelierAccepte.html.twig */
class __TwigTemplate_040df89224c3d5b0ec04c410d7122d3c825e814a3dc23a46c35d1af8bc7d9f48 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "PartagePartageBundle:Default:atelierAccepte.html.twig", 1);
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
        $__internal_aae541f9b06859a9cb032464d9e1da1c6049a7673b630253f86dbc831fd9de18 = $this->env->getExtension("native_profiler");
        $__internal_aae541f9b06859a9cb032464d9e1da1c6049a7673b630253f86dbc831fd9de18->enter($__internal_aae541f9b06859a9cb032464d9e1da1c6049a7673b630253f86dbc831fd9de18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PartagePartageBundle:Default:atelierAccepte.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_aae541f9b06859a9cb032464d9e1da1c6049a7673b630253f86dbc831fd9de18->leave($__internal_aae541f9b06859a9cb032464d9e1da1c6049a7673b630253f86dbc831fd9de18_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_416466836c7c41bf6b8dfab9c5d97daa9168303bab6edc926136f7a51cd242e0 = $this->env->getExtension("native_profiler");
        $__internal_416466836c7c41bf6b8dfab9c5d97daa9168303bab6edc926136f7a51cd242e0->enter($__internal_416466836c7c41bf6b8dfab9c5d97daa9168303bab6edc926136f7a51cd242e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "<section id=\"reponseAtelier\">
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-md-8 col-md-offset-2\">
        <p class=\"text-center\">
          Vous avez accepté cette demande
        </p>
      </div>
    </div>
  </div>
</section>
";
        
        $__internal_416466836c7c41bf6b8dfab9c5d97daa9168303bab6edc926136f7a51cd242e0->leave($__internal_416466836c7c41bf6b8dfab9c5d97daa9168303bab6edc926136f7a51cd242e0_prof);

    }

    public function getTemplateName()
    {
        return "PartagePartageBundle:Default:atelierAccepte.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 3,  34 => 2,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* {% block body %}*/
/* <section id="reponseAtelier">*/
/*   <div class="container">*/
/*     <div class="row">*/
/*       <div class="col-md-8 col-md-offset-2">*/
/*         <p class="text-center">*/
/*           Vous avez accepté cette demande*/
/*         </p>*/
/*       </div>*/
/*     </div>*/
/*   </div>*/
/* </section>*/
/* {% endblock %}*/
/* */
