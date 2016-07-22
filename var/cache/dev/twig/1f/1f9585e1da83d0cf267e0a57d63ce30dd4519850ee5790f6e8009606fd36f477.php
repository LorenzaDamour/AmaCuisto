<?php

/* FOSUserBundle:Registration:confirmed.html.twig */
class __TwigTemplate_035fd1130b336d07342a99bb21210264170a6c94e7cbf695171141601df2400f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "FOSUserBundle:Registration:confirmed.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c07cba08751dc7911c4e29d536e139fb62aabd93c7311282148d81faff6282ad = $this->env->getExtension("native_profiler");
        $__internal_c07cba08751dc7911c4e29d536e139fb62aabd93c7311282148d81faff6282ad->enter($__internal_c07cba08751dc7911c4e29d536e139fb62aabd93c7311282148d81faff6282ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c07cba08751dc7911c4e29d536e139fb62aabd93c7311282148d81faff6282ad->leave($__internal_c07cba08751dc7911c4e29d536e139fb62aabd93c7311282148d81faff6282ad_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_5da7c1e910f27a0a08c837e29fe9c2108c4f4a54315df1ba53834ee9c1afdf9d = $this->env->getExtension("native_profiler");
        $__internal_5da7c1e910f27a0a08c837e29fe9c2108c4f4a54315df1ba53834ee9c1afdf9d->enter($__internal_5da7c1e910f27a0a08c837e29fe9c2108c4f4a54315df1ba53834ee9c1afdf9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 24
        echo "
";
        // line 25
        $this->displayBlock('footer', $context, $blocks);
        
        $__internal_5da7c1e910f27a0a08c837e29fe9c2108c4f4a54315df1ba53834ee9c1afdf9d->leave($__internal_5da7c1e910f27a0a08c837e29fe9c2108c4f4a54315df1ba53834ee9c1afdf9d_prof);

    }

    // line 4
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_6cdf947e91912cee41404862ce5124665053c29a030cf480082119e5d66572c0 = $this->env->getExtension("native_profiler");
        $__internal_6cdf947e91912cee41404862ce5124665053c29a030cf480082119e5d66572c0->enter($__internal_6cdf947e91912cee41404862ce5124665053c29a030cf480082119e5d66572c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 5
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
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.back"), "html", null, true);
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
        
        $__internal_6cdf947e91912cee41404862ce5124665053c29a030cf480082119e5d66572c0->leave($__internal_6cdf947e91912cee41404862ce5124665053c29a030cf480082119e5d66572c0_prof);

    }

    // line 25
    public function block_footer($context, array $blocks = array())
    {
        $__internal_349d6a624378850cd8b4f86d64685feb9956ca94cd48d16dd48838e4821b3e37 = $this->env->getExtension("native_profiler");
        $__internal_349d6a624378850cd8b4f86d64685feb9956ca94cd48d16dd48838e4821b3e37->enter($__internal_349d6a624378850cd8b4f86d64685feb9956ca94cd48d16dd48838e4821b3e37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        
        $__internal_349d6a624378850cd8b4f86d64685feb9956ca94cd48d16dd48838e4821b3e37->leave($__internal_349d6a624378850cd8b4f86d64685feb9956ca94cd48d16dd48838e4821b3e37_prof);

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
        return array (  97 => 25,  84 => 17,  76 => 15,  74 => 14,  69 => 12,  60 => 5,  54 => 4,  47 => 25,  44 => 24,  42 => 4,  36 => 2,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/* {% block body %}*/
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* {% block fos_user_content %}*/
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
/* {% endblock fos_user_content %}*/
/* */
/* {% block footer %}*/
/* {% endblock %}*/
/* {% endblock %}*/
/* */
