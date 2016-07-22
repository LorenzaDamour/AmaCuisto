<?php

/* atelier/new.html.twig */
class __TwigTemplate_8a586fa81e5725e073fc400fa962dfb1da7803bc6fe6e40c58a3bd8319dc9374 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "atelier/new.html.twig", 1);
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
        $__internal_a934933bba011512b310327857daaa4d4a405263507b655fb8899ec4a1ef2437 = $this->env->getExtension("native_profiler");
        $__internal_a934933bba011512b310327857daaa4d4a405263507b655fb8899ec4a1ef2437->enter($__internal_a934933bba011512b310327857daaa4d4a405263507b655fb8899ec4a1ef2437_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "atelier/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a934933bba011512b310327857daaa4d4a405263507b655fb8899ec4a1ef2437->leave($__internal_a934933bba011512b310327857daaa4d4a405263507b655fb8899ec4a1ef2437_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_f26d2f327030671129e245a288742309b931345db94ba034ac7a74e824aa4674 = $this->env->getExtension("native_profiler");
        $__internal_f26d2f327030671129e245a288742309b931345db94ba034ac7a74e824aa4674->enter($__internal_f26d2f327030671129e245a288742309b931345db94ba034ac7a74e824aa4674_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<section id=\"newAtelier\">
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-md-offset-3 col-md-6\">

        ";
        // line 9
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
        <div class=\"form-group\">
          ";
        // line 11
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nom", array()), 'label');
        echo "
          ";
        // line 12
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nom", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
          ";
        // line 13
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nom", array()), 'errors');
        echo "
        </div>

        <div class=\"form-group\">
          ";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "equipements", array()), 'label');
        echo "
          ";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "equipements", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
          ";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "equipements", array()), 'errors');
        echo "
        </div>

        <div class=\"form-group\">
          ";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "ingredients", array()), 'label');
        echo "
          ";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "ingredients", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
          ";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "ingredients", array()), 'errors');
        echo "
        </div>

        <div class=\"form-group\">
          ";
        // line 29
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "tarif", array()), 'label');
        echo "
          ";
        // line 30
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "tarif", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
          ";
        // line 31
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "tarif", array()), 'errors');
        echo "
        </div>

        <div class=\"text-center\">
          <input id=\"envoyer\" type=\"submit\" value=\"Créer\" />
        </div>
        ";
        // line 37
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
      </div>
    </div>
  </div>
</section>

";
        
        $__internal_f26d2f327030671129e245a288742309b931345db94ba034ac7a74e824aa4674->leave($__internal_f26d2f327030671129e245a288742309b931345db94ba034ac7a74e824aa4674_prof);

    }

    // line 45
    public function block_footer($context, array $blocks = array())
    {
        $__internal_377162c4d0aef87a12264dc7790209ebbe4e7cd9c656ad1bfe1c2000c3c137a3 = $this->env->getExtension("native_profiler");
        $__internal_377162c4d0aef87a12264dc7790209ebbe4e7cd9c656ad1bfe1c2000c3c137a3->enter($__internal_377162c4d0aef87a12264dc7790209ebbe4e7cd9c656ad1bfe1c2000c3c137a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        
        $__internal_377162c4d0aef87a12264dc7790209ebbe4e7cd9c656ad1bfe1c2000c3c137a3->leave($__internal_377162c4d0aef87a12264dc7790209ebbe4e7cd9c656ad1bfe1c2000c3c137a3_prof);

    }

    public function getTemplateName()
    {
        return "atelier/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  129 => 45,  115 => 37,  106 => 31,  102 => 30,  98 => 29,  91 => 25,  87 => 24,  83 => 23,  76 => 19,  72 => 18,  68 => 17,  61 => 13,  57 => 12,  53 => 11,  48 => 9,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/* <section id="newAtelier">*/
/*   <div class="container">*/
/*     <div class="row">*/
/*       <div class="col-md-offset-3 col-md-6">*/
/* */
/*         {{ form_start(form) }}*/
/*         <div class="form-group">*/
/*           {{ form_label(form.nom) }}*/
/*           {{ form_widget(form.nom, {'attr': {'class':'form-control'}}) }}*/
/*           {{ form_errors(form.nom) }}*/
/*         </div>*/
/* */
/*         <div class="form-group">*/
/*           {{ form_label(form.equipements) }}*/
/*           {{ form_widget(form.equipements, {'attr': {'class':'form-control'}}) }}*/
/*           {{ form_errors(form.equipements) }}*/
/*         </div>*/
/* */
/*         <div class="form-group">*/
/*           {{ form_label(form.ingredients) }}*/
/*           {{ form_widget(form.ingredients, {'attr': {'class':'form-control'}}) }}*/
/*           {{ form_errors(form.ingredients) }}*/
/*         </div>*/
/* */
/*         <div class="form-group">*/
/*           {{ form_label(form.tarif) }}*/
/*           {{ form_widget(form.tarif, {'attr': {'class':'form-control'}}) }}*/
/*           {{ form_errors(form.tarif) }}*/
/*         </div>*/
/* */
/*         <div class="text-center">*/
/*           <input id="envoyer" type="submit" value="Créer" />*/
/*         </div>*/
/*         {{ form_end(form) }}*/
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
