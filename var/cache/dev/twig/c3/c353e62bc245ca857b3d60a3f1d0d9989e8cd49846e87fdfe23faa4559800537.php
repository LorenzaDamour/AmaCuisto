<?php

/* PartagePartageBundle:atelier:edit.html.twig */
class __TwigTemplate_ce259e8b3c87aeb91710fb7c99e3203fcdac38e3cad904fe115d53d5fcafbe60 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "PartagePartageBundle:atelier:edit.html.twig", 1);
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
        $__internal_6139edee72f543ebd23206b4fbb3b11619ef8d43539ce27399ef41afa8dc1b9c = $this->env->getExtension("native_profiler");
        $__internal_6139edee72f543ebd23206b4fbb3b11619ef8d43539ce27399ef41afa8dc1b9c->enter($__internal_6139edee72f543ebd23206b4fbb3b11619ef8d43539ce27399ef41afa8dc1b9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PartagePartageBundle:atelier:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6139edee72f543ebd23206b4fbb3b11619ef8d43539ce27399ef41afa8dc1b9c->leave($__internal_6139edee72f543ebd23206b4fbb3b11619ef8d43539ce27399ef41afa8dc1b9c_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_3481de8cc86d5c9d41332d148199f54f70188237af34f91ed88397f610c4648e = $this->env->getExtension("native_profiler");
        $__internal_3481de8cc86d5c9d41332d148199f54f70188237af34f91ed88397f610c4648e->enter($__internal_3481de8cc86d5c9d41332d148199f54f70188237af34f91ed88397f610c4648e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
<section id=\"editAtelier\">
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-md-offset-3 col-md-6\">

        ";
        // line 10
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_start');
        echo "
        <div class=\"form-group\">
          ";
        // line 12
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "nom", array()), 'label');
        echo "
          ";
        // line 13
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "nom", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
          ";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "nom", array()), 'errors');
        echo "
        </div>

        <div class=\"form-group\">
          ";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "equipements", array()), 'label');
        echo "
          ";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "equipements", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
          ";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "equipements", array()), 'errors');
        echo "
        </div>

        <div class=\"form-group\">
          ";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "ingredients", array()), 'label');
        echo "
          ";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "ingredients", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
          ";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "ingredients", array()), 'errors');
        echo "
        </div>

        <div class=\"form-group\">
          ";
        // line 30
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "tarif", array()), 'label');
        echo "
          ";
        // line 31
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "tarif", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
          ";
        // line 32
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "tarif", array()), 'errors');
        echo "
        </div>

        <ul class=\"list-inline text-center\">
          <li>
            <input type=\"submit\" value=\"Modifié\" class=\"modifie\"/>
          </li>
       ";
        // line 39
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_end');
        echo "
        </ul>
      </div>
    </div>
  </div>
</section>
";
        
        $__internal_3481de8cc86d5c9d41332d148199f54f70188237af34f91ed88397f610c4648e->leave($__internal_3481de8cc86d5c9d41332d148199f54f70188237af34f91ed88397f610c4648e_prof);

    }

    public function getTemplateName()
    {
        return "PartagePartageBundle:atelier:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  116 => 39,  106 => 32,  102 => 31,  98 => 30,  91 => 26,  87 => 25,  83 => 24,  76 => 20,  72 => 19,  68 => 18,  61 => 14,  57 => 13,  53 => 12,  48 => 10,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/* */
/* <section id="editAtelier">*/
/*   <div class="container">*/
/*     <div class="row">*/
/*       <div class="col-md-offset-3 col-md-6">*/
/* */
/*         {{ form_start(edit_form) }}*/
/*         <div class="form-group">*/
/*           {{ form_label(edit_form.nom) }}*/
/*           {{ form_widget(edit_form.nom, {'attr': {'class':'form-control'}}) }}*/
/*           {{ form_errors(edit_form.nom) }}*/
/*         </div>*/
/* */
/*         <div class="form-group">*/
/*           {{ form_label(edit_form.equipements) }}*/
/*           {{ form_widget(edit_form.equipements, {'attr': {'class':'form-control'}}) }}*/
/*           {{ form_errors(edit_form.equipements) }}*/
/*         </div>*/
/* */
/*         <div class="form-group">*/
/*           {{ form_label(edit_form.ingredients) }}*/
/*           {{ form_widget(edit_form.ingredients, {'attr': {'class':'form-control'}}) }}*/
/*           {{ form_errors(edit_form.ingredients) }}*/
/*         </div>*/
/* */
/*         <div class="form-group">*/
/*           {{ form_label(edit_form.tarif) }}*/
/*           {{ form_widget(edit_form.tarif, {'attr': {'class':'form-control'}}) }}*/
/*           {{ form_errors(edit_form.tarif) }}*/
/*         </div>*/
/* */
/*         <ul class="list-inline text-center">*/
/*           <li>*/
/*             <input type="submit" value="Modifié" class="modifie"/>*/
/*           </li>*/
/*        {{ form_end(edit_form) }}*/
/*         </ul>*/
/*       </div>*/
/*     </div>*/
/*   </div>*/
/* </section>*/
/* {% endblock %}*/
/* */
