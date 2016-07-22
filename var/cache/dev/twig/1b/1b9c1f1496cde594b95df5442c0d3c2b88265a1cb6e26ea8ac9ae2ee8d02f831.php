<?php

/* PartagePartageBundle:atelier:atelierInteresse.html.twig */
class __TwigTemplate_30b1d60c63c4671c1aaa6315a3fc35300aa4cfc5c1b5658ac034b2f78de2788b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "PartagePartageBundle:atelier:atelierInteresse.html.twig", 1);
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
        $__internal_1be60d7da3a7376ba7e311809772157b1ad547d46d5265de83e4e1abf74c0dd1 = $this->env->getExtension("native_profiler");
        $__internal_1be60d7da3a7376ba7e311809772157b1ad547d46d5265de83e4e1abf74c0dd1->enter($__internal_1be60d7da3a7376ba7e311809772157b1ad547d46d5265de83e4e1abf74c0dd1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PartagePartageBundle:atelier:atelierInteresse.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1be60d7da3a7376ba7e311809772157b1ad547d46d5265de83e4e1abf74c0dd1->leave($__internal_1be60d7da3a7376ba7e311809772157b1ad547d46d5265de83e4e1abf74c0dd1_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_042a2e057e8210626a9fede208614634e250124673c6f37621683029505b4e61 = $this->env->getExtension("native_profiler");
        $__internal_042a2e057e8210626a9fede208614634e250124673c6f37621683029505b4e61->enter($__internal_042a2e057e8210626a9fede208614634e250124673c6f37621683029505b4e61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
<p style=\"margin-top:80px;\" class=\"text-center\">
Votre demande de participation a un atelier a été envoyé.
</p>

";
        
        $__internal_042a2e057e8210626a9fede208614634e250124673c6f37621683029505b4e61->leave($__internal_042a2e057e8210626a9fede208614634e250124673c6f37621683029505b4e61_prof);

    }

    public function getTemplateName()
    {
        return "PartagePartageBundle:atelier:atelierInteresse.html.twig";
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
