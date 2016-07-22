<?php

/* atelier/atelierInteresse.html.twig */
class __TwigTemplate_d7efdff27e0046242d843d8f3bc1f8dbd28fb668dfcc0e1986a7cd4d49bcfcaf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "atelier/atelierInteresse.html.twig", 1);
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
        $__internal_5c58a18518bbadc9992d7df8c88e3cb2da028bd1116ff2273d6cc6aecc98b561 = $this->env->getExtension("native_profiler");
        $__internal_5c58a18518bbadc9992d7df8c88e3cb2da028bd1116ff2273d6cc6aecc98b561->enter($__internal_5c58a18518bbadc9992d7df8c88e3cb2da028bd1116ff2273d6cc6aecc98b561_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "atelier/atelierInteresse.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5c58a18518bbadc9992d7df8c88e3cb2da028bd1116ff2273d6cc6aecc98b561->leave($__internal_5c58a18518bbadc9992d7df8c88e3cb2da028bd1116ff2273d6cc6aecc98b561_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_25432fde3dc3f30708e64c92770d1fcc0d6bfc2b3dcd73ca98482acf4080e197 = $this->env->getExtension("native_profiler");
        $__internal_25432fde3dc3f30708e64c92770d1fcc0d6bfc2b3dcd73ca98482acf4080e197->enter($__internal_25432fde3dc3f30708e64c92770d1fcc0d6bfc2b3dcd73ca98482acf4080e197_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
<p style=\"margin-top:80px;\" class=\"text-center\">
Votre demande de participation a un atelier a été envoyé.
</p>

";
        
        $__internal_25432fde3dc3f30708e64c92770d1fcc0d6bfc2b3dcd73ca98482acf4080e197->leave($__internal_25432fde3dc3f30708e64c92770d1fcc0d6bfc2b3dcd73ca98482acf4080e197_prof);

    }

    public function getTemplateName()
    {
        return "atelier/atelierInteresse.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/* */
/* <p style="margin-top:80px;" class="text-center">*/
/* Votre demande de participation a un atelier a été envoyé.*/
/* </p>*/
/* */
/* {% endblock %}*/
/* */
