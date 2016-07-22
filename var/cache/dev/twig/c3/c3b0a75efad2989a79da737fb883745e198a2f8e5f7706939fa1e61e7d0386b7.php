<?php

/* FOSUserBundle:Registration:confirmed.html.twig */
class __TwigTemplate_6280a094501e034d990181787dd403bc7825a01d6695e649cad8818d841c99d4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "FOSUserBundle:Registration:confirmed.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_432348dd58aa5067f8bb2f9161f8bd203f0388572f3fd09dcc6f6b6f099c9749 = $this->env->getExtension("native_profiler");
        $__internal_432348dd58aa5067f8bb2f9161f8bd203f0388572f3fd09dcc6f6b6f099c9749->enter($__internal_432348dd58aa5067f8bb2f9161f8bd203f0388572f3fd09dcc6f6b6f099c9749_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_432348dd58aa5067f8bb2f9161f8bd203f0388572f3fd09dcc6f6b6f099c9749->leave($__internal_432348dd58aa5067f8bb2f9161f8bd203f0388572f3fd09dcc6f6b6f099c9749_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_7f997a5fc85cf0e8aa58dd92ec2da59a94ec205112cc0c3fe9f1fd1ebf9e4f86 = $this->env->getExtension("native_profiler");
        $__internal_7f997a5fc85cf0e8aa58dd92ec2da59a94ec205112cc0c3fe9f1fd1ebf9e4f86->enter($__internal_7f997a5fc85cf0e8aa58dd92ec2da59a94ec205112cc0c3fe9f1fd1ebf9e4f86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "

<section id=\"registrationConfirmerd\">
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-md-12\">

        <p>
Félicitations ";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "html", null, true);
        echo ", votre compte est maintenant activé.
        </p>
        ";
        // line 14
        if ((isset($context["targetUrl"]) ? $context["targetUrl"] : $this->getContext($context, "targetUrl"))) {
            // line 15
            echo "        <p><a href=\"";
            echo twig_escape_filter($this->env, (isset($context["targetUrl"]) ? $context["targetUrl"] : $this->getContext($context, "targetUrl")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.back", array(), "FOSUserBundle"), "html", null, true);
            echo "</a></p>
        ";
        }
        // line 17
        echo "
      </div>
    </div>
  </div>
</section>



";
        // line 25
        $this->displayBlock('footer', $context, $blocks);
        
        $__internal_7f997a5fc85cf0e8aa58dd92ec2da59a94ec205112cc0c3fe9f1fd1ebf9e4f86->leave($__internal_7f997a5fc85cf0e8aa58dd92ec2da59a94ec205112cc0c3fe9f1fd1ebf9e4f86_prof);

    }

    public function block_footer($context, array $blocks = array())
    {
        $__internal_6b9adcb40d31b466dab6b01a19cd53b1c1a8db8b1d24d261b309093e3126174a = $this->env->getExtension("native_profiler");
        $__internal_6b9adcb40d31b466dab6b01a19cd53b1c1a8db8b1d24d261b309093e3126174a->enter($__internal_6b9adcb40d31b466dab6b01a19cd53b1c1a8db8b1d24d261b309093e3126174a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        
        $__internal_6b9adcb40d31b466dab6b01a19cd53b1c1a8db8b1d24d261b309093e3126174a->leave($__internal_6b9adcb40d31b466dab6b01a19cd53b1c1a8db8b1d24d261b309093e3126174a_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:confirmed.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 25,  66 => 17,  58 => 15,  56 => 14,  51 => 12,  41 => 4,  35 => 2,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/* {% block body %}*/
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* */
/* <section id="registrationConfirmerd">*/
/*   <div class="container">*/
/*     <div class="row">*/
/*       <div class="col-md-12">*/
/* */
/*         <p>*/
/* Félicitations {{user.username}}, votre compte est maintenant activé.*/
/*         </p>*/
/*         {% if targetUrl %}*/
/*         <p><a href="{{ targetUrl }}">{{ 'registration.back'|trans }}</a></p>*/
/*         {% endif %}*/
/* */
/*       </div>*/
/*     </div>*/
/*   </div>*/
/* </section>*/
/* */
/* */
/* */
/* {% block footer %}*/
/* {% endblock %}*/
/* {% endblock %}*/
/* */
