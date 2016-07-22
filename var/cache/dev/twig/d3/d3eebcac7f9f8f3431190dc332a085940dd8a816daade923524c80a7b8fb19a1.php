<?php

/* PartagePartageBundle:participation:participation.html.twig */
class __TwigTemplate_f98b14da1bb5b460de33557bfac5cafa138802b02bf71cf31b0ae8f3fd418f28 extends Twig_Template
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
        $__internal_13f6035b93bd26b17a857e3a32f0c510ef22a576293adb8eaee1d22fc23b6b00 = $this->env->getExtension("native_profiler");
        $__internal_13f6035b93bd26b17a857e3a32f0c510ef22a576293adb8eaee1d22fc23b6b00->enter($__internal_13f6035b93bd26b17a857e3a32f0c510ef22a576293adb8eaee1d22fc23b6b00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PartagePartageBundle:participation:participation.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_13f6035b93bd26b17a857e3a32f0c510ef22a576293adb8eaee1d22fc23b6b00->leave($__internal_13f6035b93bd26b17a857e3a32f0c510ef22a576293adb8eaee1d22fc23b6b00_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_2de324e429c99f0cf1b1f02159370c635c7804aceae76c42ce61248d26adf27f = $this->env->getExtension("native_profiler");
        $__internal_2de324e429c99f0cf1b1f02159370c635c7804aceae76c42ce61248d26adf27f->enter($__internal_2de324e429c99f0cf1b1f02159370c635c7804aceae76c42ce61248d26adf27f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_2de324e429c99f0cf1b1f02159370c635c7804aceae76c42ce61248d26adf27f->leave($__internal_2de324e429c99f0cf1b1f02159370c635c7804aceae76c42ce61248d26adf27f_prof);

    }

    // line 43
    public function block_footer($context, array $blocks = array())
    {
        $__internal_054495716fe3a37505a5e0b1b9901a9c5b10b17ecd57a67948e920a7ce81f7ce = $this->env->getExtension("native_profiler");
        $__internal_054495716fe3a37505a5e0b1b9901a9c5b10b17ecd57a67948e920a7ce81f7ce->enter($__internal_054495716fe3a37505a5e0b1b9901a9c5b10b17ecd57a67948e920a7ce81f7ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        
        $__internal_054495716fe3a37505a5e0b1b9901a9c5b10b17ecd57a67948e920a7ce81f7ce->leave($__internal_054495716fe3a37505a5e0b1b9901a9c5b10b17ecd57a67948e920a7ce81f7ce_prof);

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
