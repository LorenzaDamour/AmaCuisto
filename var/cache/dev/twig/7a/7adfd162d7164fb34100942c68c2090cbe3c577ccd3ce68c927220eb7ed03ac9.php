<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_4b2aacf1a0ae6e847b3ebf6f0e81d781fe5ed6c187917823aa60d943500252df extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "FOSUserBundle:Security:login.html.twig", 1);
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
        $__internal_1a3b1d4c3cf709becd4707583f8b26f769f5f51f97b80f9ee27b2658c66922ac = $this->env->getExtension("native_profiler");
        $__internal_1a3b1d4c3cf709becd4707583f8b26f769f5f51f97b80f9ee27b2658c66922ac->enter($__internal_1a3b1d4c3cf709becd4707583f8b26f769f5f51f97b80f9ee27b2658c66922ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1a3b1d4c3cf709becd4707583f8b26f769f5f51f97b80f9ee27b2658c66922ac->leave($__internal_1a3b1d4c3cf709becd4707583f8b26f769f5f51f97b80f9ee27b2658c66922ac_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_6cab508699b410ab83c1185198756a652dbfcbb996d28b953ba32cc6e594e0b3 = $this->env->getExtension("native_profiler");
        $__internal_6cab508699b410ab83c1185198756a652dbfcbb996d28b953ba32cc6e594e0b3->enter($__internal_6cab508699b410ab83c1185198756a652dbfcbb996d28b953ba32cc6e594e0b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "
";
        // line 5
        echo "

";
        // line 7
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 8
            echo "    <div class=\"erreur text-center\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageKey", array()), $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageData", array()), "security"), "html", null, true);
            echo "</div>
";
        }
        // line 10
        echo "
<div class=\"container\">
  <div class=\"row\">
    <div class=\"col-md-6 col-md-offset-3\">
      <form action=\"";
        // line 14
        echo $this->env->getExtension('routing')->getPath("fos_user_security_check");
        echo "\" method=\"post\">
        <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 15
        echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token")), "html", null, true);
        echo "\" />
        <div class=\"form-group\">
          <label for=\"username\">";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Nom d'utilisateur", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
          <input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 18
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" required=\"required\" class=\"form-control\"/>
        </div>
        <div class=\"form-group\">
          <label for=\"password\">";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Mot de passe", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
          <input type=\"password\" id=\"password\" name=\"_password\" required=\"required\"  class=\"form-control\"/>
        </div>
        <div class=\"form-group\">
          <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" />
          <label for=\"remember_me\">";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Se souvenir de moi", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
        </div>
        <div class=\"text-center\">
        <input type=\"submit\" id=\"_submit\" name=\"_submit\" class=\"btn btn-success\" value=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Valider", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
      </div>

    </form>
    </div>
  </div>
</div>


";
        
        $__internal_6cab508699b410ab83c1185198756a652dbfcbb996d28b953ba32cc6e594e0b3->leave($__internal_6cab508699b410ab83c1185198756a652dbfcbb996d28b953ba32cc6e594e0b3_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 29,  88 => 26,  80 => 21,  74 => 18,  70 => 17,  65 => 15,  61 => 14,  55 => 10,  49 => 8,  47 => 7,  43 => 5,  40 => 3,  34 => 2,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* {% block body %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* */
/* {% if error %}*/
/*     <div class="erreur text-center">{{ error.messageKey|trans(error.messageData, 'security') }}</div>*/
/* {% endif %}*/
/* */
/* <div class="container">*/
/*   <div class="row">*/
/*     <div class="col-md-6 col-md-offset-3">*/
/*       <form action="{{ path("fos_user_security_check") }}" method="post">*/
/*         <input type="hidden" name="_csrf_token" value="{{ csrf_token }}" />*/
/*         <div class="form-group">*/
/*           <label for="username">{{ 'Nom d\'utilisateur'|trans }}</label>*/
/*           <input type="text" id="username" name="_username" value="{{ last_username }}" required="required" class="form-control"/>*/
/*         </div>*/
/*         <div class="form-group">*/
/*           <label for="password">{{ 'Mot de passe'|trans }}</label>*/
/*           <input type="password" id="password" name="_password" required="required"  class="form-control"/>*/
/*         </div>*/
/*         <div class="form-group">*/
/*           <input type="checkbox" id="remember_me" name="_remember_me" value="on" />*/
/*           <label for="remember_me">{{ 'Se souvenir de moi'|trans }}</label>*/
/*         </div>*/
/*         <div class="text-center">*/
/*         <input type="submit" id="_submit" name="_submit" class="btn btn-success" value="{{ 'Valider'|trans }}" />*/
/*       </div>*/
/* */
/*     </form>*/
/*     </div>*/
/*   </div>*/
/* </div>*/
/* */
/* */
/* {% endblock %}*/
/* */
