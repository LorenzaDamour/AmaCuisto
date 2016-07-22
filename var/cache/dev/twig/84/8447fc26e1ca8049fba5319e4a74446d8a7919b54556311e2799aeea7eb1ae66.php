<?php

/* PartagePartageBundle:Default:atelierRefuse.html.twig */
class __TwigTemplate_8c38f79f0986befd016b6e3ccb8818a33a1fb730825fe0cc4e52d257cc63e479 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "PartagePartageBundle:Default:atelierRefuse.html.twig", 1);
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
        $__internal_e8e5b90d1642b904dc38cf71a1414bf1db9237c6082d233ab18a0ee6617ea27a = $this->env->getExtension("native_profiler");
        $__internal_e8e5b90d1642b904dc38cf71a1414bf1db9237c6082d233ab18a0ee6617ea27a->enter($__internal_e8e5b90d1642b904dc38cf71a1414bf1db9237c6082d233ab18a0ee6617ea27a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PartagePartageBundle:Default:atelierRefuse.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e8e5b90d1642b904dc38cf71a1414bf1db9237c6082d233ab18a0ee6617ea27a->leave($__internal_e8e5b90d1642b904dc38cf71a1414bf1db9237c6082d233ab18a0ee6617ea27a_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_015846684100d1b5fa22e1ce3d94772071e3047c3c92a6fbed69e4aa7fcc8fd6 = $this->env->getExtension("native_profiler");
        $__internal_015846684100d1b5fa22e1ce3d94772071e3047c3c92a6fbed69e4aa7fcc8fd6->enter($__internal_015846684100d1b5fa22e1ce3d94772071e3047c3c92a6fbed69e4aa7fcc8fd6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "<section id=\"reponseAtelier\">
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-md-8 col-md-offset-2\">
        <p class=\"text-center\">
          Vous avez refusé cet atelier.
        </p>
      </div>
    </div>
  </div>
</section>
";
        
        $__internal_015846684100d1b5fa22e1ce3d94772071e3047c3c92a6fbed69e4aa7fcc8fd6->leave($__internal_015846684100d1b5fa22e1ce3d94772071e3047c3c92a6fbed69e4aa7fcc8fd6_prof);

    }

    public function getTemplateName()
    {
        return "PartagePartageBundle:Default:atelierRefuse.html.twig";
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
/*           Vous avez refusé cet atelier.*/
/*         </p>*/
/*       </div>*/
/*     </div>*/
/*   </div>*/
/* </section>*/
/* {% endblock %}*/
/* */
