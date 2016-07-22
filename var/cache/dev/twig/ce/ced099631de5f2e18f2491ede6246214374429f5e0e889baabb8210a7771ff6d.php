<?php

/* PartagePartageBundle:Default:atelierAccepte.html.twig */
class __TwigTemplate_c0ef835c32894b2886597e9c0dbb80f7d4f86546d042d2fe23553e2e5d50f059 extends Twig_Template
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
        $__internal_5d647bac08ad304bc06a27f8e391984a78aefc7f1cbed20320caf4d733d953fb = $this->env->getExtension("native_profiler");
        $__internal_5d647bac08ad304bc06a27f8e391984a78aefc7f1cbed20320caf4d733d953fb->enter($__internal_5d647bac08ad304bc06a27f8e391984a78aefc7f1cbed20320caf4d733d953fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PartagePartageBundle:Default:atelierAccepte.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5d647bac08ad304bc06a27f8e391984a78aefc7f1cbed20320caf4d733d953fb->leave($__internal_5d647bac08ad304bc06a27f8e391984a78aefc7f1cbed20320caf4d733d953fb_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_b0fc85df09c9f33ec9a897d142752cf956148a08fd9c4425982775f7a647994d = $this->env->getExtension("native_profiler");
        $__internal_b0fc85df09c9f33ec9a897d142752cf956148a08fd9c4425982775f7a647994d->enter($__internal_b0fc85df09c9f33ec9a897d142752cf956148a08fd9c4425982775f7a647994d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_b0fc85df09c9f33ec9a897d142752cf956148a08fd9c4425982775f7a647994d->leave($__internal_b0fc85df09c9f33ec9a897d142752cf956148a08fd9c4425982775f7a647994d_prof);

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
/*         */
/*         </p>*/
/*       </div>*/
/*     </div>*/
/*   </div>*/
/* </section>*/
/* {% endblock %}*/
/* */
