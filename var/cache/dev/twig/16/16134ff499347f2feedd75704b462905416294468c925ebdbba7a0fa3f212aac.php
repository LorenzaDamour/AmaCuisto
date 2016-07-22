<?php

/* PartagePartageBundle:participation:participation.html.twig */
class __TwigTemplate_a5216875b037b492631969092d484a4d5aa719f57e5ea9781599d87aa41d0d8a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "PartagePartageBundle:participation:participation.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f66ab1911a9b53999b1be4796546be38c8fbd4933fa1dab42b19d73ed8cc5b6c = $this->env->getExtension("native_profiler");
        $__internal_f66ab1911a9b53999b1be4796546be38c8fbd4933fa1dab42b19d73ed8cc5b6c->enter($__internal_f66ab1911a9b53999b1be4796546be38c8fbd4933fa1dab42b19d73ed8cc5b6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PartagePartageBundle:participation:participation.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f66ab1911a9b53999b1be4796546be38c8fbd4933fa1dab42b19d73ed8cc5b6c->leave($__internal_f66ab1911a9b53999b1be4796546be38c8fbd4933fa1dab42b19d73ed8cc5b6c_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_6c98b27d271298c7f4bcd0bb670e45274e848cd261a79a5b3a6fba6e66237376 = $this->env->getExtension("native_profiler");
        $__internal_6c98b27d271298c7f4bcd0bb670e45274e848cd261a79a5b3a6fba6e66237376->enter($__internal_6c98b27d271298c7f4bcd0bb670e45274e848cd261a79a5b3a6fba6e66237376_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
<section id=\"newAtelier\">
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-md-offset-3 col-md-6\">

        ";
        // line 10
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "


        <div class=\"form-group\">
          ";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "date", array()), 'label');
        echo "
          ";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "date", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
          ";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "date", array()), 'errors');
        echo "
        </div>

        <div class=\"form-group\">
          ";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "heure", array()), 'label');
        echo "
          ";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "heure", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
          ";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "heure", array()), 'errors');
        echo "
        </div>

        <div class=\"text-center\">
      <input id=\"envoyer\" type=\"submit\" value=\"Envoyer\"/>
        </div>

        ";
        // line 29
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "




        </div>

      </div>
    </div>
  </div>
</section>

";
        
        $__internal_6c98b27d271298c7f4bcd0bb670e45274e848cd261a79a5b3a6fba6e66237376->leave($__internal_6c98b27d271298c7f4bcd0bb670e45274e848cd261a79a5b3a6fba6e66237376_prof);

    }

    // line 43
    public function block_footer($context, array $blocks = array())
    {
        $__internal_b2449faa5a523cc444f5b05cef72430e628707684d8e81c9dc542acb4b3d44e0 = $this->env->getExtension("native_profiler");
        $__internal_b2449faa5a523cc444f5b05cef72430e628707684d8e81c9dc542acb4b3d44e0->enter($__internal_b2449faa5a523cc444f5b05cef72430e628707684d8e81c9dc542acb4b3d44e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        
        $__internal_b2449faa5a523cc444f5b05cef72430e628707684d8e81c9dc542acb4b3d44e0->leave($__internal_b2449faa5a523cc444f5b05cef72430e628707684d8e81c9dc542acb4b3d44e0_prof);

    }

    public function getTemplateName()
    {
        return "PartagePartageBundle:participation:participation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  109 => 43,  89 => 29,  79 => 22,  75 => 21,  71 => 20,  64 => 16,  60 => 15,  56 => 14,  49 => 10,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/* */
/* <section id="newAtelier">*/
/*   <div class="container">*/
/*     <div class="row">*/
/*       <div class="col-md-offset-3 col-md-6">*/
/* */
/*         {{ form_start(form) }}*/
/* */
/* */
/*         <div class="form-group">*/
/*           {{ form_label(form.date) }}*/
/*           {{ form_widget(form.date, {'attr': {'class':'form-control'}}) }}*/
/*           {{ form_errors(form.date) }}*/
/*         </div>*/
/* */
/*         <div class="form-group">*/
/*           {{ form_label(form.heure) }}*/
/*           {{ form_widget(form.heure, {'attr': {'class':'form-control'}}) }}*/
/*           {{ form_errors(form.heure) }}*/
/*         </div>*/
/* */
/*         <div class="text-center">*/
/*       <input id="envoyer" type="submit" value="Envoyer"/>*/
/*         </div>*/
/* */
/*         {{ form_end(form) }}*/
/* */
/* */
/* */
/* */
/*         </div>*/
/* */
/*       </div>*/
/*     </div>*/
/*   </div>*/
/* </section>*/
/* */
/* {% endblock %}*/
/* */
/* {% block footer %}*/
/* {% endblock %}*/
/* */
