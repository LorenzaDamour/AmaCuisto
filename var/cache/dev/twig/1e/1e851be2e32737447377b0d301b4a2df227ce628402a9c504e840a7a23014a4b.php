<?php

/* PartagePartageBundle:Photos:photos.html.twig */
class __TwigTemplate_0751408b140c24cd74c1c04e1ca6026897d0d61b3a0e7bc076daf0d7faf6d6f7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "PartagePartageBundle:Photos:photos.html.twig", 1);
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
        $__internal_29d87331d3fd733bd5565e4c815ed5b095c14d4cbd25fd456f233f7856b52138 = $this->env->getExtension("native_profiler");
        $__internal_29d87331d3fd733bd5565e4c815ed5b095c14d4cbd25fd456f233f7856b52138->enter($__internal_29d87331d3fd733bd5565e4c815ed5b095c14d4cbd25fd456f233f7856b52138_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PartagePartageBundle:Photos:photos.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_29d87331d3fd733bd5565e4c815ed5b095c14d4cbd25fd456f233f7856b52138->leave($__internal_29d87331d3fd733bd5565e4c815ed5b095c14d4cbd25fd456f233f7856b52138_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_75818d179a2546531d379341a549a37134486fa8e93a52092469d1a12d503810 = $this->env->getExtension("native_profiler");
        $__internal_75818d179a2546531d379341a549a37134486fa8e93a52092469d1a12d503810->enter($__internal_75818d179a2546531d379341a549a37134486fa8e93a52092469d1a12d503810_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
<section id=\"formulaire\">
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-md-4 col-md-offset-4\">
      

";
        // line 11
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "

      <div class=\"form-group\">

        <label for=\"\">Photos atelier</label>
        ";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "imageFile", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
        ";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "imageFile", array()), 'errors');
        echo "
      </div>

      <div>
       <input type=\"submit\" class=\"btn btn-success\" value=\"Valider\"/>
     </div>

    ";
        // line 24
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
</div>
</div>
</div>
</section>

  ";
        
        $__internal_75818d179a2546531d379341a549a37134486fa8e93a52092469d1a12d503810->leave($__internal_75818d179a2546531d379341a549a37134486fa8e93a52092469d1a12d503810_prof);

    }

    public function getTemplateName()
    {
        return "PartagePartageBundle:Photos:photos.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 24,  61 => 17,  57 => 16,  49 => 11,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "base.html.twig" %}*/
/* */
/* {% block body %}*/
/* */
/* <section id="formulaire">*/
/*   <div class="container">*/
/*     <div class="row">*/
/*       <div class="col-md-4 col-md-offset-4">*/
/*       */
/* */
/* {{ form_start(form) }}*/
/* */
/*       <div class="form-group">*/
/* */
/*         <label for="">Photos atelier</label>*/
/*         {{ form_widget(form.imageFile, {'attr':{'class':'form-control'}}) }}*/
/*         {{ form_errors(form.imageFile) }}*/
/*       </div>*/
/* */
/*       <div>*/
/*        <input type="submit" class="btn btn-success" value="Valider"/>*/
/*      </div>*/
/* */
/*     {{ form_end(form) }}*/
/* </div>*/
/* </div>*/
/* </div>*/
/* </section>*/
/* */
/*   {% endblock %}*/
/* */
