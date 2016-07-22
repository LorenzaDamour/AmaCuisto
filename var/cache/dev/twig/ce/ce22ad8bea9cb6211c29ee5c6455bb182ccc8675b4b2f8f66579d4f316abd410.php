<?php

/* PartagePartageBundle:atelier:atelierInteresse.html.twig */
class __TwigTemplate_853617a11b97e43d6d76833bb98a70c3e5093909c0b52f2e06580fb8048ee737 extends Twig_Template
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
        $__internal_a3b86b373fb217c08e695204ee45c7facd4a44c28daa005c9d6121d547051130 = $this->env->getExtension("native_profiler");
        $__internal_a3b86b373fb217c08e695204ee45c7facd4a44c28daa005c9d6121d547051130->enter($__internal_a3b86b373fb217c08e695204ee45c7facd4a44c28daa005c9d6121d547051130_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PartagePartageBundle:atelier:atelierInteresse.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a3b86b373fb217c08e695204ee45c7facd4a44c28daa005c9d6121d547051130->leave($__internal_a3b86b373fb217c08e695204ee45c7facd4a44c28daa005c9d6121d547051130_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_02b6d07ceb22eb0e25acd5170cd28d2c5501109e01941f1a3a71c713f6346b60 = $this->env->getExtension("native_profiler");
        $__internal_02b6d07ceb22eb0e25acd5170cd28d2c5501109e01941f1a3a71c713f6346b60->enter($__internal_02b6d07ceb22eb0e25acd5170cd28d2c5501109e01941f1a3a71c713f6346b60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
<p style=\"margin-top:80px;\" class=\"text-center\">
Votre demande de participation a un atelier a été envoyé.
</p>

";
        
        $__internal_02b6d07ceb22eb0e25acd5170cd28d2c5501109e01941f1a3a71c713f6346b60->leave($__internal_02b6d07ceb22eb0e25acd5170cd28d2c5501109e01941f1a3a71c713f6346b60_prof);

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
