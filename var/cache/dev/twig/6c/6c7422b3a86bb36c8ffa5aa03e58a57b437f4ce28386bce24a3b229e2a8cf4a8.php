<?php

/* PartagePartageBundle:atelier:new.html.twig */
class __TwigTemplate_07f0b5ce9d87d824fdbd125d05b7c708eebb88bc95be36db40cb7cef836c7c78 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "PartagePartageBundle:atelier:new.html.twig", 1);
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
        $__internal_7275279bf8aff4d2bb279a41e5e472d98e38952c9d9726720528d85e2d45eb3a = $this->env->getExtension("native_profiler");
        $__internal_7275279bf8aff4d2bb279a41e5e472d98e38952c9d9726720528d85e2d45eb3a->enter($__internal_7275279bf8aff4d2bb279a41e5e472d98e38952c9d9726720528d85e2d45eb3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PartagePartageBundle:atelier:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7275279bf8aff4d2bb279a41e5e472d98e38952c9d9726720528d85e2d45eb3a->leave($__internal_7275279bf8aff4d2bb279a41e5e472d98e38952c9d9726720528d85e2d45eb3a_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_c4e9a9b0a657719abdd9be562f7ab0bc595cb98108f6a81940e6ff8267d6e614 = $this->env->getExtension("native_profiler");
        $__internal_c4e9a9b0a657719abdd9be562f7ab0bc595cb98108f6a81940e6ff8267d6e614->enter($__internal_c4e9a9b0a657719abdd9be562f7ab0bc595cb98108f6a81940e6ff8267d6e614_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<section id=\"Atelier\">
  <div class=\"container\">
  <h1 class=\"titre\">Créer un atelier</h1>
    <div class=\"row\">
      <div class=\"col-md-offset-3 col-md-6\">

        ";
        // line 10
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
        <div class=\"form-group\">
          ";
        // line 12
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nom", array()), 'label');
        echo "
          ";
        // line 13
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nom", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
          ";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nom", array()), 'errors');
        echo "
        </div>

        <div class=\"form-group\">
          ";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "equipements", array()), 'label');
        echo "
          ";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "equipements", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
          ";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "equipements", array()), 'errors');
        echo "
        </div>

        <div class=\"form-group\">
          ";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "ingredients", array()), 'label');
        echo "
          ";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "ingredients", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
          ";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "ingredients", array()), 'errors');
        echo "
        </div>

        <div class=\"form-group\">
          ";
        // line 30
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "tarif", array()), 'label');
        echo "
          ";
        // line 31
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "tarif", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
          ";
        // line 32
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "tarif", array()), 'errors');
        echo "
        </div>

        <div class=\"text-center\">

          <button class=\"button is-grapefruit\" id =\"envoyer\" type=\"submit\" >Créer</button>        </div>
        ";
        // line 38
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
      </div>
    </div>
  </div>
</section>

";
        
        $__internal_c4e9a9b0a657719abdd9be562f7ab0bc595cb98108f6a81940e6ff8267d6e614->leave($__internal_c4e9a9b0a657719abdd9be562f7ab0bc595cb98108f6a81940e6ff8267d6e614_prof);

    }

    // line 46
    public function block_footer($context, array $blocks = array())
    {
        $__internal_5af03d9a5c87d4ecfe41f7acc0a40d4c1636bc5e96b6fdb38767fb8355167db4 = $this->env->getExtension("native_profiler");
        $__internal_5af03d9a5c87d4ecfe41f7acc0a40d4c1636bc5e96b6fdb38767fb8355167db4->enter($__internal_5af03d9a5c87d4ecfe41f7acc0a40d4c1636bc5e96b6fdb38767fb8355167db4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        
        $__internal_5af03d9a5c87d4ecfe41f7acc0a40d4c1636bc5e96b6fdb38767fb8355167db4->leave($__internal_5af03d9a5c87d4ecfe41f7acc0a40d4c1636bc5e96b6fdb38767fb8355167db4_prof);

    }

    public function getTemplateName()
    {
        return "PartagePartageBundle:atelier:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  130 => 46,  116 => 38,  107 => 32,  103 => 31,  99 => 30,  92 => 26,  88 => 25,  84 => 24,  77 => 20,  73 => 19,  69 => 18,  62 => 14,  58 => 13,  54 => 12,  49 => 10,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/* <section id="Atelier">*/
/*   <div class="container">*/
/*   <h1 class="titre">Créer un atelier</h1>*/
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
/* */
/*           <button class="button is-grapefruit" id ="envoyer" type="submit" >Créer</button>        </div>*/
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
