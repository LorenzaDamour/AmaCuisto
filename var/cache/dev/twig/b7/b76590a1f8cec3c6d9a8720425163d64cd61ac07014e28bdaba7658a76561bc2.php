<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_1295cf45cdb1d40d840551cf7ddee41bb5eac1d4907855e7c7e78a5357af93f2 extends Twig_Template
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
        $__internal_b3184009fca5347b799e9cc93998761a3e35424dc4bf8edbddf3cff961bf9737 = $this->env->getExtension("native_profiler");
        $__internal_b3184009fca5347b799e9cc93998761a3e35424dc4bf8edbddf3cff961bf9737->enter($__internal_b3184009fca5347b799e9cc93998761a3e35424dc4bf8edbddf3cff961bf9737_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b3184009fca5347b799e9cc93998761a3e35424dc4bf8edbddf3cff961bf9737->leave($__internal_b3184009fca5347b799e9cc93998761a3e35424dc4bf8edbddf3cff961bf9737_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_0570df1c428deb503f2409efff09de6b752f7a938903ce1755f4d4784d15aa43 = $this->env->getExtension("native_profiler");
        $__internal_0570df1c428deb503f2409efff09de6b752f7a938903ce1755f4d4784d15aa43->enter($__internal_0570df1c428deb503f2409efff09de6b752f7a938903ce1755f4d4784d15aa43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_0570df1c428deb503f2409efff09de6b752f7a938903ce1755f4d4784d15aa43->leave($__internal_0570df1c428deb503f2409efff09de6b752f7a938903ce1755f4d4784d15aa43_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_2f932f5f50a0c989af8235bcf652be5bbc6e40e70786fda5b5701e7e226c6fa4 = $this->env->getExtension("native_profiler");
        $__internal_2f932f5f50a0c989af8235bcf652be5bbc6e40e70786fda5b5701e7e226c6fa4->enter($__internal_2f932f5f50a0c989af8235bcf652be5bbc6e40e70786fda5b5701e7e226c6fa4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_2f932f5f50a0c989af8235bcf652be5bbc6e40e70786fda5b5701e7e226c6fa4->leave($__internal_2f932f5f50a0c989af8235bcf652be5bbc6e40e70786fda5b5701e7e226c6fa4_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_4a26e0575acf7b9c9ee177948c5b4055bc33fb272aeed2d4592316b4c84d1e1a = $this->env->getExtension("native_profiler");
        $__internal_4a26e0575acf7b9c9ee177948c5b4055bc33fb272aeed2d4592316b4c84d1e1a->enter($__internal_4a26e0575acf7b9c9ee177948c5b4055bc33fb272aeed2d4592316b4c84d1e1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_4a26e0575acf7b9c9ee177948c5b4055bc33fb272aeed2d4592316b4c84d1e1a->leave($__internal_4a26e0575acf7b9c9ee177948c5b4055bc33fb272aeed2d4592316b4c84d1e1a_prof);

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
