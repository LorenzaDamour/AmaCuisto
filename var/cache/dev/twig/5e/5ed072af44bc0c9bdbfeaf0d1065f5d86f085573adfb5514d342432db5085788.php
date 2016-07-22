<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_bc293d572c37246f2e95f8e49e85c8e009792e173dac6bafb8eacdb863fe8e4c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "FOSUserBundle:Security:login.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6425b26e6e4853dfaf0bf493d31538f2cffb33f1e29d8cd1e2587d240e1314ee = $this->env->getExtension("native_profiler");
        $__internal_6425b26e6e4853dfaf0bf493d31538f2cffb33f1e29d8cd1e2587d240e1314ee->enter($__internal_6425b26e6e4853dfaf0bf493d31538f2cffb33f1e29d8cd1e2587d240e1314ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6425b26e6e4853dfaf0bf493d31538f2cffb33f1e29d8cd1e2587d240e1314ee->leave($__internal_6425b26e6e4853dfaf0bf493d31538f2cffb33f1e29d8cd1e2587d240e1314ee_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_0674f3c6707263bbd70efbf16a85f83565c1e79cead4e8e2ae180faf1007fbb2 = $this->env->getExtension("native_profiler");
        $__internal_0674f3c6707263bbd70efbf16a85f83565c1e79cead4e8e2ae180faf1007fbb2->enter($__internal_0674f3c6707263bbd70efbf16a85f83565c1e79cead4e8e2ae180faf1007fbb2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "
";
        // line 5
        echo "
";
        // line 6
        $this->displayBlock('fos_user_content', $context, $blocks);
        
        $__internal_0674f3c6707263bbd70efbf16a85f83565c1e79cead4e8e2ae180faf1007fbb2->leave($__internal_0674f3c6707263bbd70efbf16a85f83565c1e79cead4e8e2ae180faf1007fbb2_prof);

    }

    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_5c189a7e244e99e83c3cc6ec25151015bdc5a9475cb1b8a05a1a24a14f6e5f3f = $this->env->getExtension("native_profiler");
        $__internal_5c189a7e244e99e83c3cc6ec25151015bdc5a9475cb1b8a05a1a24a14f6e5f3f->enter($__internal_5c189a7e244e99e83c3cc6ec25151015bdc5a9475cb1b8a05a1a24a14f6e5f3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 7
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 8
            echo "    <div>";
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
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Nom d'utilisateur"), "html", null, true);
        echo "</label>
          <input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 18
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" required=\"required\" class=\"form-control\"/>
        </div>
        <div class=\"form-group\">
          <label for=\"password\">";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Mot de passe"), "html", null, true);
        echo "</label>
          <input type=\"password\" id=\"password\" name=\"_password\" required=\"required\"  class=\"form-control\"/>
        </div>
        <div class=\"form-group\">
          <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" />
          <label for=\"remember_me\">";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Se souvenir de moi"), "html", null, true);
        echo "</label>
        </div>

        <input type=\"submit\" id=\"_submit\" name=\"_submit\" value=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Valider"), "html", null, true);
        echo "\" />

      </form>
    </div>
  </div>
</div>

";
        
        $__internal_5c189a7e244e99e83c3cc6ec25151015bdc5a9475cb1b8a05a1a24a14f6e5f3f->leave($__internal_5c189a7e244e99e83c3cc6ec25151015bdc5a9475cb1b8a05a1a24a14f6e5f3f_prof);

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
        return array (  106 => 29,  100 => 26,  92 => 21,  86 => 18,  82 => 17,  77 => 15,  73 => 14,  67 => 10,  61 => 8,  59 => 7,  47 => 6,  44 => 5,  41 => 3,  35 => 2,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* {% block body %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/* {% if error %}*/
/*     <div>{{ error.messageKey|trans(error.messageData, 'security') }}</div>*/
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
/* */
/*         <input type="submit" id="_submit" name="_submit" value="{{ 'Valider'|trans }}" />*/
/* */
/*       </form>*/
/*     </div>*/
/*   </div>*/
/* </div>*/
/* */
/* {% endblock fos_user_content %}*/
/* {% endblock %}*/
/* */
