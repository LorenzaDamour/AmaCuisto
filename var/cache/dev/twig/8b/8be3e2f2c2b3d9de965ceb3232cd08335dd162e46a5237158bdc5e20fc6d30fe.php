<?php

/* FOSUserBundle:Registration:register_content.html.twig */
class __TwigTemplate_7b76ca415409bc9181decf833497f61d174dfa03daf6276688843084dc88435b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "FOSUserBundle:Registration:register_content.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6c3611b426443272da3ba1d56b8c7a7de46805d61adb6b6b9c1c7eb1b1c35768 = $this->env->getExtension("native_profiler");
        $__internal_6c3611b426443272da3ba1d56b8c7a7de46805d61adb6b6b9c1c7eb1b1c35768->enter($__internal_6c3611b426443272da3ba1d56b8c7a7de46805d61adb6b6b9c1c7eb1b1c35768_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register_content.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6c3611b426443272da3ba1d56b8c7a7de46805d61adb6b6b9c1c7eb1b1c35768->leave($__internal_6c3611b426443272da3ba1d56b8c7a7de46805d61adb6b6b9c1c7eb1b1c35768_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_256b97a37cc3551688194e6e8434b82435573269870e5d6a3ba8267976df6d28 = $this->env->getExtension("native_profiler");
        $__internal_256b97a37cc3551688194e6e8434b82435573269870e5d6a3ba8267976df6d28->enter($__internal_256b97a37cc3551688194e6e8434b82435573269870e5d6a3ba8267976df6d28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<div class=\"container\">
  <div class=\"row\">
    <div class=\"col-md-offset-3 col-md-6\">

      ";
        // line 9
        echo "
      ";
        // line 10
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("method" => "post", "attr" => array("class" => "fos_user_registration_register")));
        echo "


         <div class=\"form-group\">

               ";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nom", array()), 'label');
        echo "
               ";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nom", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
               ";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nom", array()), 'errors');
        echo "

             </div>

           <div class=\"form-group\">
               ";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "prenom", array()), 'label');
        echo "
               ";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "prenom", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
             </div>

             <div class=\"form-group\">
               ";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username", array()), 'label');
        echo "
               ";
        // line 28
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
             </div>

             <div class=\"form-group\">
               ";
        // line 32
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'label');
        echo "
               ";
        // line 33
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
             </div>

             <div class=\"form-group\">
               ";
        // line 37
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "adresse", array()), 'label');
        echo "
               ";
        // line 38
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "adresse", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
             </div>

             <div class=\"form-group\">
               ";
        // line 42
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "tel", array()), 'label');
        echo "
               ";
        // line 43
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "tel", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
             </div>

             <div class=\"form-group\">
               ";
        // line 47
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "first", array()), 'label');
        echo "
               ";
        // line 48
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "first", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
               ";
        // line 49
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "first", array()), 'errors');
        echo "
             </div>

             <div class=\"form-group\">
               ";
        // line 53
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "second", array()), 'label');
        echo "
               ";
        // line 54
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "second", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
               ";
        // line 55
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "second", array()), 'errors');
        echo "
             </div>

             <div class=\"text-center\">
               <input id=\"envoyer\" type=\"submit\" value=\"Envoyer\" class=\"btn btn-success\" />
             </div>

      ";
        // line 62
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

    </div>
  </div>
</div>
";
        
        $__internal_256b97a37cc3551688194e6e8434b82435573269870e5d6a3ba8267976df6d28->leave($__internal_256b97a37cc3551688194e6e8434b82435573269870e5d6a3ba8267976df6d28_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  161 => 62,  151 => 55,  147 => 54,  143 => 53,  136 => 49,  132 => 48,  128 => 47,  121 => 43,  117 => 42,  110 => 38,  106 => 37,  99 => 33,  95 => 32,  88 => 28,  84 => 27,  77 => 23,  73 => 22,  65 => 17,  61 => 16,  57 => 15,  49 => 10,  46 => 9,  40 => 4,  34 => 2,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/* {% block body %}*/
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* <div class="container">*/
/*   <div class="row">*/
/*     <div class="col-md-offset-3 col-md-6">*/
/* */
/*       {#{ form_start(form, {'method': 'post', 'action': path('fos_user_registration_register'), 'attr': {'class': 'fos_user_registration_register'}}) }#}*/
/* */
/*       {{ form_start(form, {'method': 'post', 'attr': {'class': 'fos_user_registration_register'}}) }}*/
/* */
/* */
/*          <div class="form-group">*/
/* */
/*                {{ form_label(form.nom) }}*/
/*                {{ form_widget(form.nom, {'attr': {'class':'form-control'}}) }}*/
/*                {{ form_errors(form.nom) }}*/
/* */
/*              </div>*/
/* */
/*            <div class="form-group">*/
/*                {{ form_label(form.prenom) }}*/
/*                {{ form_widget(form.prenom, {'attr': {'class':'form-control'}}) }}*/
/*              </div>*/
/* */
/*              <div class="form-group">*/
/*                {{ form_label(form.username) }}*/
/*                {{ form_widget(form.username, {'attr': {'class':'form-control'}}) }}*/
/*              </div>*/
/* */
/*              <div class="form-group">*/
/*                {{ form_label(form.email) }}*/
/*                {{ form_widget(form.email, {'attr': {'class':'form-control'}}) }}*/
/*              </div>*/
/* */
/*              <div class="form-group">*/
/*                {{ form_label(form.adresse) }}*/
/*                {{ form_widget(form.adresse, {'attr': {'class':'form-control'}}) }}*/
/*              </div>*/
/* */
/*              <div class="form-group">*/
/*                {{ form_label(form.tel) }}*/
/*                {{ form_widget(form.tel, {'attr': {'class':'form-control'}}) }}*/
/*              </div>*/
/* */
/*              <div class="form-group">*/
/*                {{ form_label(form.plainPassword.first) }}*/
/*                {{ form_widget(form.plainPassword.first, {'attr': {'class':'form-control'}}) }}*/
/*                {{ form_errors(form.plainPassword.first) }}*/
/*              </div>*/
/* */
/*              <div class="form-group">*/
/*                {{ form_label(form.plainPassword.second) }}*/
/*                {{ form_widget(form.plainPassword.second, {'attr': {'class':'form-control'}}) }}*/
/*                {{ form_errors(form.plainPassword.second) }}*/
/*              </div>*/
/* */
/*              <div class="text-center">*/
/*                <input id="envoyer" type="submit" value="Envoyer" class="btn btn-success" />*/
/*              </div>*/
/* */
/*       {{ form_end(form) }}*/
/* */
/*     </div>*/
/*   </div>*/
/* </div>*/
/* {% endblock %}*/
/* */
