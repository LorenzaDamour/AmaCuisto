<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_8fa0a98e63b8fa98f5997ef59ee70eddfc52d1d6d611f76dce70cf7e910bec8a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
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
        $__internal_9c219eedd95c82c153c2849c32e4373a12615ab1687657cfc86004b7778ce4a2 = $this->env->getExtension("native_profiler");
        $__internal_9c219eedd95c82c153c2849c32e4373a12615ab1687657cfc86004b7778ce4a2->enter($__internal_9c219eedd95c82c153c2849c32e4373a12615ab1687657cfc86004b7778ce4a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9c219eedd95c82c153c2849c32e4373a12615ab1687657cfc86004b7778ce4a2->leave($__internal_9c219eedd95c82c153c2849c32e4373a12615ab1687657cfc86004b7778ce4a2_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_2e16279368ab979ae4d3de17c1f1a774b479d294d0ec693cbbf0a7a5f71b32c0 = $this->env->getExtension("native_profiler");
        $__internal_2e16279368ab979ae4d3de17c1f1a774b479d294d0ec693cbbf0a7a5f71b32c0->enter($__internal_2e16279368ab979ae4d3de17c1f1a774b479d294d0ec693cbbf0a7a5f71b32c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_2e16279368ab979ae4d3de17c1f1a774b479d294d0ec693cbbf0a7a5f71b32c0->leave($__internal_2e16279368ab979ae4d3de17c1f1a774b479d294d0ec693cbbf0a7a5f71b32c0_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_bdb026398090a1e3e15ff4c719910a3fbe0f369581f66807086b6f10b7dec47b = $this->env->getExtension("native_profiler");
        $__internal_bdb026398090a1e3e15ff4c719910a3fbe0f369581f66807086b6f10b7dec47b->enter($__internal_bdb026398090a1e3e15ff4c719910a3fbe0f369581f66807086b6f10b7dec47b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_bdb026398090a1e3e15ff4c719910a3fbe0f369581f66807086b6f10b7dec47b->leave($__internal_bdb026398090a1e3e15ff4c719910a3fbe0f369581f66807086b6f10b7dec47b_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_fee87ec74e2279edd181fc4524ab0fb24d0f20d249762a1787dd5ceb91651547 = $this->env->getExtension("native_profiler");
        $__internal_fee87ec74e2279edd181fc4524ab0fb24d0f20d249762a1787dd5ceb91651547->enter($__internal_fee87ec74e2279edd181fc4524ab0fb24d0f20d249762a1787dd5ceb91651547_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_fee87ec74e2279edd181fc4524ab0fb24d0f20d249762a1787dd5ceb91651547->leave($__internal_fee87ec74e2279edd181fc4524ab0fb24d0f20d249762a1787dd5ceb91651547_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
