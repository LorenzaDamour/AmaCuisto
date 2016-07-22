<?php

/* PartagePartageBundle:Photos:photos.html.twig */
class __TwigTemplate_3c158a0384762b9cc12d4346ce9db8ec90d49a0e6494b0aa397383fef06e748f extends Twig_Template
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
        $__internal_b237df3596afe836b18526c7cd39ee5194979b448ea6e41913e9a7a8731c73f4 = $this->env->getExtension("native_profiler");
        $__internal_b237df3596afe836b18526c7cd39ee5194979b448ea6e41913e9a7a8731c73f4->enter($__internal_b237df3596afe836b18526c7cd39ee5194979b448ea6e41913e9a7a8731c73f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PartagePartageBundle:Photos:photos.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b237df3596afe836b18526c7cd39ee5194979b448ea6e41913e9a7a8731c73f4->leave($__internal_b237df3596afe836b18526c7cd39ee5194979b448ea6e41913e9a7a8731c73f4_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_9cdae0f121d46eeec84db40a27efeb3560bdfebafba251657953eabccc38fe30 = $this->env->getExtension("native_profiler");
        $__internal_9cdae0f121d46eeec84db40a27efeb3560bdfebafba251657953eabccc38fe30->enter($__internal_9cdae0f121d46eeec84db40a27efeb3560bdfebafba251657953eabccc38fe30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        ";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "imageFile", array()), 'widget');
        echo "
      </div>


      <div>
        <input type=\"submit\" class=\"btn btn-success\" value=\"Valider\"/>
      </div>
    ";
        // line 21
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
</div>
</div>
</div>
</section>

  ";
        
        $__internal_9cdae0f121d46eeec84db40a27efeb3560bdfebafba251657953eabccc38fe30->leave($__internal_9cdae0f121d46eeec84db40a27efeb3560bdfebafba251657953eabccc38fe30_prof);

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
        return array (  65 => 21,  55 => 14,  49 => 11,  40 => 4,  34 => 3,  11 => 1,);
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
/* */
/* */
/* {{ form_start(form) }}*/
/* */
/*       <div class="form-group">*/
/*         {{ form_widget(form.imageFile) }}*/
/*       </div>*/
/* */
/* */
/*       <div>*/
/*         <input type="submit" class="btn btn-success" value="Valider"/>*/
/*       </div>*/
/*     {{ form_end(form) }}*/
/* </div>*/
/* </div>*/
/* </div>*/
/* </section>*/
/* */
/*   {% endblock %}*/
/* */
