<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_418c97ab816f1e9ca2296415bb7bde134ef12151a1e079213cc7737073bad346 extends Twig_Template
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
        $__internal_b4d719dddad130994d7a845d651a9b25bb0fc28ef461eb4d897682e3b8dec80c = $this->env->getExtension("native_profiler");
        $__internal_b4d719dddad130994d7a845d651a9b25bb0fc28ef461eb4d897682e3b8dec80c->enter($__internal_b4d719dddad130994d7a845d651a9b25bb0fc28ef461eb4d897682e3b8dec80c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b4d719dddad130994d7a845d651a9b25bb0fc28ef461eb4d897682e3b8dec80c->leave($__internal_b4d719dddad130994d7a845d651a9b25bb0fc28ef461eb4d897682e3b8dec80c_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_b0e404f1db823632d9705649b6303cf8979c6b892472226bc4e751451b36e4e6 = $this->env->getExtension("native_profiler");
        $__internal_b0e404f1db823632d9705649b6303cf8979c6b892472226bc4e751451b36e4e6->enter($__internal_b0e404f1db823632d9705649b6303cf8979c6b892472226bc4e751451b36e4e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_b0e404f1db823632d9705649b6303cf8979c6b892472226bc4e751451b36e4e6->leave($__internal_b0e404f1db823632d9705649b6303cf8979c6b892472226bc4e751451b36e4e6_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_4584246a5bb5ffe1b9940474e3f4f8ad9ac69f2f9bd476ba56cc0243972c5491 = $this->env->getExtension("native_profiler");
        $__internal_4584246a5bb5ffe1b9940474e3f4f8ad9ac69f2f9bd476ba56cc0243972c5491->enter($__internal_4584246a5bb5ffe1b9940474e3f4f8ad9ac69f2f9bd476ba56cc0243972c5491_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_4584246a5bb5ffe1b9940474e3f4f8ad9ac69f2f9bd476ba56cc0243972c5491->leave($__internal_4584246a5bb5ffe1b9940474e3f4f8ad9ac69f2f9bd476ba56cc0243972c5491_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_62322a12c1e8d77d5e1dee36c4458c82e63e7c371242f43c11226b0e730d679b = $this->env->getExtension("native_profiler");
        $__internal_62322a12c1e8d77d5e1dee36c4458c82e63e7c371242f43c11226b0e730d679b->enter($__internal_62322a12c1e8d77d5e1dee36c4458c82e63e7c371242f43c11226b0e730d679b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_62322a12c1e8d77d5e1dee36c4458c82e63e7c371242f43c11226b0e730d679b->leave($__internal_62322a12c1e8d77d5e1dee36c4458c82e63e7c371242f43c11226b0e730d679b_prof);

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
