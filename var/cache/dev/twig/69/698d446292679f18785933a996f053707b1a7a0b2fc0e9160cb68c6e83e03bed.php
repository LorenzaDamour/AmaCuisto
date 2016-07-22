<?php

/* FOSUserBundle:Profile:show.html.twig */
class __TwigTemplate_91067d655be9dbbd656e5f21609f93969cb0d6134c5a17208af2250e5575def1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "FOSUserBundle:Profile:show.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_bad5630626268f241ba61dfb85d6187c9055a8063df67875a6e0e84a69e1240b = $this->env->getExtension("native_profiler");
        $__internal_bad5630626268f241ba61dfb85d6187c9055a8063df67875a6e0e84a69e1240b->enter($__internal_bad5630626268f241ba61dfb85d6187c9055a8063df67875a6e0e84a69e1240b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bad5630626268f241ba61dfb85d6187c9055a8063df67875a6e0e84a69e1240b->leave($__internal_bad5630626268f241ba61dfb85d6187c9055a8063df67875a6e0e84a69e1240b_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_b3ffbe95f3856ff415efb06e718bcc3167afea29eb223cc496a29b69bd5b2c1a = $this->env->getExtension("native_profiler");
        $__internal_b3ffbe95f3856ff415efb06e718bcc3167afea29eb223cc496a29b69bd5b2c1a->enter($__internal_b3ffbe95f3856ff415efb06e718bcc3167afea29eb223cc496a29b69bd5b2c1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_b3ffbe95f3856ff415efb06e718bcc3167afea29eb223cc496a29b69bd5b2c1a->leave($__internal_b3ffbe95f3856ff415efb06e718bcc3167afea29eb223cc496a29b69bd5b2c1a_prof);

    }

    // line 4
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_1132a1c20bfc3c379ea578b034ed8c3b87517bea3fc12b3da4ad073a990cac0f = $this->env->getExtension("native_profiler");
        $__internal_1132a1c20bfc3c379ea578b034ed8c3b87517bea3fc12b3da4ad073a990cac0f->enter($__internal_1132a1c20bfc3c379ea578b034ed8c3b87517bea3fc12b3da4ad073a990cac0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 5
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 5)->display($context);
        
        $__internal_1132a1c20bfc3c379ea578b034ed8c3b87517bea3fc12b3da4ad073a990cac0f->leave($__internal_1132a1c20bfc3c379ea578b034ed8c3b87517bea3fc12b3da4ad073a990cac0f_prof);

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
        return array (  52 => 5,  46 => 4,  35 => 2,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/* {% block body %}{% endblock %}*/
/* */
/* {% block fos_user_content %}*/
/* {% include "FOSUserBundle:Profile:show_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
