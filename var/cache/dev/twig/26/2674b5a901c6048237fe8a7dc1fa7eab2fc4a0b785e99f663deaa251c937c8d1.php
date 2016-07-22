<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_85ba04b9e5a35888cfedcb4e9c7148389236e8d95606dd8f8e33e7de53c9b220 extends Twig_Template
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
        $__internal_5f6c23243867c8e819f308974413aa0e6c25f8f99a09fdab32fe5708e05d5292 = $this->env->getExtension("native_profiler");
        $__internal_5f6c23243867c8e819f308974413aa0e6c25f8f99a09fdab32fe5708e05d5292->enter($__internal_5f6c23243867c8e819f308974413aa0e6c25f8f99a09fdab32fe5708e05d5292_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5f6c23243867c8e819f308974413aa0e6c25f8f99a09fdab32fe5708e05d5292->leave($__internal_5f6c23243867c8e819f308974413aa0e6c25f8f99a09fdab32fe5708e05d5292_prof);

    }

    // line 2
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_e33add9271895d775b155f5ce7b5a42c71a4461ff0837e55c619a88bffcf9ebf = $this->env->getExtension("native_profiler");
        $__internal_e33add9271895d775b155f5ce7b5a42c71a4461ff0837e55c619a88bffcf9ebf->enter($__internal_e33add9271895d775b155f5ce7b5a42c71a4461ff0837e55c619a88bffcf9ebf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 3
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 3)->display($context);
        
        $__internal_e33add9271895d775b155f5ce7b5a42c71a4461ff0837e55c619a88bffcf9ebf->leave($__internal_e33add9271895d775b155f5ce7b5a42c71a4461ff0837e55c619a88bffcf9ebf_prof);

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
