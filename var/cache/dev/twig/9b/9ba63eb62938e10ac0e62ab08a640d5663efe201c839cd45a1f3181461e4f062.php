<?php

/* FOSUserBundle:Profile:show.html.twig */
class __TwigTemplate_4fc93a7e0d373223e0235cc68fc219bc1b343da322ca2b5192e3a4935e72652c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Profile:show.html.twig", 1);
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
        $__internal_c26b87052320ce1f431e64e2287f4b4202ccdd0a759382c91773c22efbda31cb = $this->env->getExtension("native_profiler");
        $__internal_c26b87052320ce1f431e64e2287f4b4202ccdd0a759382c91773c22efbda31cb->enter($__internal_c26b87052320ce1f431e64e2287f4b4202ccdd0a759382c91773c22efbda31cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c26b87052320ce1f431e64e2287f4b4202ccdd0a759382c91773c22efbda31cb->leave($__internal_c26b87052320ce1f431e64e2287f4b4202ccdd0a759382c91773c22efbda31cb_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_b23d72ab3fc51836a585efa546e6c854bdd9c999b32ae9485209448406d41b6e = $this->env->getExtension("native_profiler");
        $__internal_b23d72ab3fc51836a585efa546e6c854bdd9c999b32ae9485209448406d41b6e->enter($__internal_b23d72ab3fc51836a585efa546e6c854bdd9c999b32ae9485209448406d41b6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 4)->display($context);
        
        $__internal_b23d72ab3fc51836a585efa546e6c854bdd9c999b32ae9485209448406d41b6e->leave($__internal_b23d72ab3fc51836a585efa546e6c854bdd9c999b32ae9485209448406d41b6e_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show.html.twig";
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
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% block fos_user_content %}*/
/* {% include "FOSUserBundle:Profile:show_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
