<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_d00332b91ca86b3baf27455a0346136a25614166853519754025b4d9e12ea0ff extends Twig_Template
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
        $__internal_ccae9fbb13dfafa587c9762a70d86ac96e015fcd8ae41e76bd4f25e7ea760250 = $this->env->getExtension("native_profiler");
        $__internal_ccae9fbb13dfafa587c9762a70d86ac96e015fcd8ae41e76bd4f25e7ea760250->enter($__internal_ccae9fbb13dfafa587c9762a70d86ac96e015fcd8ae41e76bd4f25e7ea760250_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ccae9fbb13dfafa587c9762a70d86ac96e015fcd8ae41e76bd4f25e7ea760250->leave($__internal_ccae9fbb13dfafa587c9762a70d86ac96e015fcd8ae41e76bd4f25e7ea760250_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_e5f4d2fe0e93dac08a29c640fec196d993e6e6e6e6e5e753c43702caa00073db = $this->env->getExtension("native_profiler");
        $__internal_e5f4d2fe0e93dac08a29c640fec196d993e6e6e6e6e5e753c43702caa00073db->enter($__internal_e5f4d2fe0e93dac08a29c640fec196d993e6e6e6e6e5e753c43702caa00073db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_e5f4d2fe0e93dac08a29c640fec196d993e6e6e6e6e5e753c43702caa00073db->leave($__internal_e5f4d2fe0e93dac08a29c640fec196d993e6e6e6e6e5e753c43702caa00073db_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_51610b0f8c9ea309c58dd52bdb5b3e97ff26cfa48b4762a54f8fbb668a8062ac = $this->env->getExtension("native_profiler");
        $__internal_51610b0f8c9ea309c58dd52bdb5b3e97ff26cfa48b4762a54f8fbb668a8062ac->enter($__internal_51610b0f8c9ea309c58dd52bdb5b3e97ff26cfa48b4762a54f8fbb668a8062ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_51610b0f8c9ea309c58dd52bdb5b3e97ff26cfa48b4762a54f8fbb668a8062ac->leave($__internal_51610b0f8c9ea309c58dd52bdb5b3e97ff26cfa48b4762a54f8fbb668a8062ac_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_b1253045991d56133d9d679a64409619ec7ec93954b835f981dbef675c816b4b = $this->env->getExtension("native_profiler");
        $__internal_b1253045991d56133d9d679a64409619ec7ec93954b835f981dbef675c816b4b->enter($__internal_b1253045991d56133d9d679a64409619ec7ec93954b835f981dbef675c816b4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_b1253045991d56133d9d679a64409619ec7ec93954b835f981dbef675c816b4b->leave($__internal_b1253045991d56133d9d679a64409619ec7ec93954b835f981dbef675c816b4b_prof);

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
