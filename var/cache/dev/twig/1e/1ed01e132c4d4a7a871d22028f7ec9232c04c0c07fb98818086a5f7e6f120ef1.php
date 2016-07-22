<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_064c80ffefefcf6ceb9ef70214cabf094308bc626510c41253a458477ce58f8a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_bf7b2db0b32d4658d8d0e8e539a9faf573e6072a30ebbf41a700cb17d8f423bb = $this->env->getExtension("native_profiler");
        $__internal_bf7b2db0b32d4658d8d0e8e539a9faf573e6072a30ebbf41a700cb17d8f423bb->enter($__internal_bf7b2db0b32d4658d8d0e8e539a9faf573e6072a30ebbf41a700cb17d8f423bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bf7b2db0b32d4658d8d0e8e539a9faf573e6072a30ebbf41a700cb17d8f423bb->leave($__internal_bf7b2db0b32d4658d8d0e8e539a9faf573e6072a30ebbf41a700cb17d8f423bb_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_19d9c38dbf51dd363a2e77738f514c2ac00723dc294494d3a761de01f926db6c = $this->env->getExtension("native_profiler");
        $__internal_19d9c38dbf51dd363a2e77738f514c2ac00723dc294494d3a761de01f926db6c->enter($__internal_19d9c38dbf51dd363a2e77738f514c2ac00723dc294494d3a761de01f926db6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_19d9c38dbf51dd363a2e77738f514c2ac00723dc294494d3a761de01f926db6c->leave($__internal_19d9c38dbf51dd363a2e77738f514c2ac00723dc294494d3a761de01f926db6c_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_cfd21610726e99100e2158097325ccf2789760fceaa776e79e0042042e299696 = $this->env->getExtension("native_profiler");
        $__internal_cfd21610726e99100e2158097325ccf2789760fceaa776e79e0042042e299696->enter($__internal_cfd21610726e99100e2158097325ccf2789760fceaa776e79e0042042e299696_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_cfd21610726e99100e2158097325ccf2789760fceaa776e79e0042042e299696->leave($__internal_cfd21610726e99100e2158097325ccf2789760fceaa776e79e0042042e299696_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_9d40c249519fbd74099589d2c5f5cb6e88f81bb214bc64d6b039bfb31b8f7446 = $this->env->getExtension("native_profiler");
        $__internal_9d40c249519fbd74099589d2c5f5cb6e88f81bb214bc64d6b039bfb31b8f7446->enter($__internal_9d40c249519fbd74099589d2c5f5cb6e88f81bb214bc64d6b039bfb31b8f7446_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_9d40c249519fbd74099589d2c5f5cb6e88f81bb214bc64d6b039bfb31b8f7446->leave($__internal_9d40c249519fbd74099589d2c5f5cb6e88f81bb214bc64d6b039bfb31b8f7446_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
