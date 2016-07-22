<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_e4eab979cf90c98eb5cb8734d51f67dedec6a2706d2994215c4d875fad47d033 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a4033ccbd5e4f4f99e9e13477d7d4f49dd9266177b715799bb29cd3faf4c1d4d = $this->env->getExtension("native_profiler");
        $__internal_a4033ccbd5e4f4f99e9e13477d7d4f49dd9266177b715799bb29cd3faf4c1d4d->enter($__internal_a4033ccbd5e4f4f99e9e13477d7d4f49dd9266177b715799bb29cd3faf4c1d4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a4033ccbd5e4f4f99e9e13477d7d4f49dd9266177b715799bb29cd3faf4c1d4d->leave($__internal_a4033ccbd5e4f4f99e9e13477d7d4f49dd9266177b715799bb29cd3faf4c1d4d_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_383168a355cdcd97526d3db70ee0953cc97ac9c028e2d596129e64d376b0441e = $this->env->getExtension("native_profiler");
        $__internal_383168a355cdcd97526d3db70ee0953cc97ac9c028e2d596129e64d376b0441e->enter($__internal_383168a355cdcd97526d3db70ee0953cc97ac9c028e2d596129e64d376b0441e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_383168a355cdcd97526d3db70ee0953cc97ac9c028e2d596129e64d376b0441e->leave($__internal_383168a355cdcd97526d3db70ee0953cc97ac9c028e2d596129e64d376b0441e_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_49b1d0d382d16138bbc9812f4d80c4127631f18da5ee7b953dee5388267057e6 = $this->env->getExtension("native_profiler");
        $__internal_49b1d0d382d16138bbc9812f4d80c4127631f18da5ee7b953dee5388267057e6->enter($__internal_49b1d0d382d16138bbc9812f4d80c4127631f18da5ee7b953dee5388267057e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_49b1d0d382d16138bbc9812f4d80c4127631f18da5ee7b953dee5388267057e6->leave($__internal_49b1d0d382d16138bbc9812f4d80c4127631f18da5ee7b953dee5388267057e6_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_298e5a193ccf95f10ca477df458fdc96e8968696a657dea5fde4694ab7fdccbc = $this->env->getExtension("native_profiler");
        $__internal_298e5a193ccf95f10ca477df458fdc96e8968696a657dea5fde4694ab7fdccbc->enter($__internal_298e5a193ccf95f10ca477df458fdc96e8968696a657dea5fde4694ab7fdccbc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_298e5a193ccf95f10ca477df458fdc96e8968696a657dea5fde4694ab7fdccbc->leave($__internal_298e5a193ccf95f10ca477df458fdc96e8968696a657dea5fde4694ab7fdccbc_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 33,  114 => 32,  108 => 28,  106 => 27,  102 => 25,  96 => 24,  88 => 21,  82 => 17,  80 => 16,  75 => 14,  70 => 13,  64 => 12,  54 => 9,  48 => 6,  45 => 5,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     {% if collector.hasexception %}*/
/*         <style>*/
/*             {{ render(path('_profiler_exception_css', { token: token })) }}*/
/*         </style>*/
/*     {% endif %}*/
/*     {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block menu %}*/
/*     <span class="label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}">*/
/*         <span class="icon">{{ include('@WebProfiler/Icon/exception.svg') }}</span>*/
/*         <strong>Exception</strong>*/
/*         {% if collector.hasexception %}*/
/*             <span class="count">*/
/*                 <span>1</span>*/
/*             </span>*/
/*         {% endif %}*/
/*     </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     <h2>Exceptions</h2>*/
/* */
/*     {% if not collector.hasexception %}*/
/*         <div class="empty">*/
/*             <p>No exception was thrown and caught during the request.</p>*/
/*         </div>*/
/*     {% else %}*/
/*         <div class="sf-reset">*/
/*             {{ render(path('_profiler_exception', { token: token })) }}*/
/*         </div>*/
/*     {% endif %}*/
/* {% endblock %}*/
/* */
