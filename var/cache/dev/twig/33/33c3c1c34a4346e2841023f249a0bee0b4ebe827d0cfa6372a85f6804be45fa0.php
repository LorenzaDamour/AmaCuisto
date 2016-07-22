<?php

/* participation/participation.html.twig */
class __TwigTemplate_d16f58323f83d000f67c5ef9117ecbe729d73e46d093d616792a7b7c784981d9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "participation/participation.html.twig", 1);
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
        $__internal_2c903328c7214f32c394282dcbc49317cc57a3ea20d693ee8563442d060056d1 = $this->env->getExtension("native_profiler");
        $__internal_2c903328c7214f32c394282dcbc49317cc57a3ea20d693ee8563442d060056d1->enter($__internal_2c903328c7214f32c394282dcbc49317cc57a3ea20d693ee8563442d060056d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "participation/participation.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2c903328c7214f32c394282dcbc49317cc57a3ea20d693ee8563442d060056d1->leave($__internal_2c903328c7214f32c394282dcbc49317cc57a3ea20d693ee8563442d060056d1_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_de7d69b81d0956471354c1c8a7a71eaa4074372dde22cd0d8970873e9d51b797 = $this->env->getExtension("native_profiler");
        $__internal_de7d69b81d0956471354c1c8a7a71eaa4074372dde22cd0d8970873e9d51b797->enter($__internal_de7d69b81d0956471354c1c8a7a71eaa4074372dde22cd0d8970873e9d51b797_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_de7d69b81d0956471354c1c8a7a71eaa4074372dde22cd0d8970873e9d51b797->leave($__internal_de7d69b81d0956471354c1c8a7a71eaa4074372dde22cd0d8970873e9d51b797_prof);

    }

    // line 43
    public function block_footer($context, array $blocks = array())
    {
        $__internal_f34d94beaa56b8830461f2c573f64fbd5a23e9ec6d1e0782adcc2b63137c20e2 = $this->env->getExtension("native_profiler");
        $__internal_f34d94beaa56b8830461f2c573f64fbd5a23e9ec6d1e0782adcc2b63137c20e2->enter($__internal_f34d94beaa56b8830461f2c573f64fbd5a23e9ec6d1e0782adcc2b63137c20e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        
        $__internal_f34d94beaa56b8830461f2c573f64fbd5a23e9ec6d1e0782adcc2b63137c20e2->leave($__internal_f34d94beaa56b8830461f2c573f64fbd5a23e9ec6d1e0782adcc2b63137c20e2_prof);

    }

    public function getTemplateName()
    {
        return "participation/participation.html.twig";
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
