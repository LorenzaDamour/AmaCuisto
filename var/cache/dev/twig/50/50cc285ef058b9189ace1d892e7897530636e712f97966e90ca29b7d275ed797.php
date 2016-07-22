<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_0ea637a587756db8bbcb0fa23cfc11a734978e0347068734c8d521fea6fa36de extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:register.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_efd2f012c98bc4f90c937a4a08f25c3844aaed454455b1e896988d94ef8ba1d3 = $this->env->getExtension("native_profiler");
        $__internal_efd2f012c98bc4f90c937a4a08f25c3844aaed454455b1e896988d94ef8ba1d3->enter($__internal_efd2f012c98bc4f90c937a4a08f25c3844aaed454455b1e896988d94ef8ba1d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_efd2f012c98bc4f90c937a4a08f25c3844aaed454455b1e896988d94ef8ba1d3->leave($__internal_efd2f012c98bc4f90c937a4a08f25c3844aaed454455b1e896988d94ef8ba1d3_prof);

    }

    // line 2
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_2cc5730a045aad28920fba36b6a16531e377df04a50355be4346d31a9dc81b8f = $this->env->getExtension("native_profiler");
        $__internal_2cc5730a045aad28920fba36b6a16531e377df04a50355be4346d31a9dc81b8f->enter($__internal_2cc5730a045aad28920fba36b6a16531e377df04a50355be4346d31a9dc81b8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 3
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 3)->display($context);
        
        $__internal_2cc5730a045aad28920fba36b6a16531e377df04a50355be4346d31a9dc81b8f->leave($__internal_2cc5730a045aad28920fba36b6a16531e377df04a50355be4346d31a9dc81b8f_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 3,  34 => 2,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* {% block fos_user_content %}*/
/* {% include "FOSUserBundle:Registration:register_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
