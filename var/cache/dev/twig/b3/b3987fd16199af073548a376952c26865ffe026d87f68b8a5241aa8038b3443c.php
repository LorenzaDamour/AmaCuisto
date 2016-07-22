<?php

/* PartagePartageBundle:Photos:photoatelier.html.twig */
class __TwigTemplate_5515dc0996970a3998df9cb9f62eb6a295391e14c617ce629d95aa8f4b6482a8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "PartagePartageBundle:Photos:photoatelier.html.twig", 1);
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
        $__internal_e4957e01cb3a862ea08dfb90fab9119b3943e9e6de35433b9637008f68659844 = $this->env->getExtension("native_profiler");
        $__internal_e4957e01cb3a862ea08dfb90fab9119b3943e9e6de35433b9637008f68659844->enter($__internal_e4957e01cb3a862ea08dfb90fab9119b3943e9e6de35433b9637008f68659844_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PartagePartageBundle:Photos:photoatelier.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e4957e01cb3a862ea08dfb90fab9119b3943e9e6de35433b9637008f68659844->leave($__internal_e4957e01cb3a862ea08dfb90fab9119b3943e9e6de35433b9637008f68659844_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_ff2256fa52431f2743f17e9f7815770c66432f42ca5e2ab318c5ccf3ca44c38b = $this->env->getExtension("native_profiler");
        $__internal_ff2256fa52431f2743f17e9f7815770c66432f42ca5e2ab318c5ccf3ca44c38b->enter($__internal_ff2256fa52431f2743f17e9f7815770c66432f42ca5e2ab318c5ccf3ca44c38b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "<div class=\"imagesatelier\">
  <h1 class=\"text-center\">Photos des ateliers </h1>
";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["galeriephoto"]) ? $context["galeriephoto"] : $this->getContext($context, "galeriephoto")));
        foreach ($context['_seq'] as $context["_key"] => $context["photoos"]) {
            // line 6
            echo "
<img src=\"/images/products/";
            // line 7
            echo twig_escape_filter($this->env, $this->getAttribute($context["photoos"], "imageName", array()), "html", null, true);
            echo "\"style=\"width:200px; height:250px\"/>
<td><a href= \"";
            // line 8
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("photos_delete", array("id" => $this->getAttribute($context["photoos"], "id", array()))), "html", null, true);
            echo "\"><i class=\"fa fa-trash\" aria-hidden=\"true\"></i></a></td>


";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['photoos'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        echo "</div>
<section id=\"formulaire\">
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-md-4 col-md-offset-4\">


";
        // line 19
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "

      <div class=\"form-group\">
        ";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "imageFile", array()), 'widget');
        echo "
      </div>


      <div>
        <input type=\"submit\" class=\"btn btn-success\" value=\"Valider\"/>
      </div>
    ";
        // line 29
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
</div>
</div>
</div>
</section>

<div class=\"rating\"><!--
   --><a href=\"#5\" title=\"Donner 5 étoiles\">☆</a><!--
   --><a href=\"#4\" title=\"Donner 4 étoiles\">☆</a><!--
   --><a href=\"#3\" title=\"Donner 3 étoiles\">☆</a><!--
   --><a href=\"#2\" title=\"Donner 2 étoiles\">☆</a><!--
   --><a href=\"#1\" title=\"Donner 1 étoile\">☆</a>
</div>
  ";
        
        $__internal_ff2256fa52431f2743f17e9f7815770c66432f42ca5e2ab318c5ccf3ca44c38b->leave($__internal_ff2256fa52431f2743f17e9f7815770c66432f42ca5e2ab318c5ccf3ca44c38b_prof);

    }

    public function getTemplateName()
    {
        return "PartagePartageBundle:Photos:photoatelier.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 29,  80 => 22,  74 => 19,  65 => 12,  55 => 8,  51 => 7,  48 => 6,  44 => 5,  40 => 3,  34 => 2,  11 => 1,);
    }
}
/* {% extends "base.html.twig" %}*/
/* {% block body %}*/
/* <div class="imagesatelier">*/
/*   <h1 class="text-center">Photos des ateliers </h1>*/
/* {% for photoos in galeriephoto %}*/
/* */
/* <img src="/images/products/{{photoos.imageName}}"style="width:200px; height:250px"/>*/
/* <td><a href= "{{ path ('photos_delete' ,{'id': photoos.id}) }}"><i class="fa fa-trash" aria-hidden="true"></i></a></td>*/
/* */
/* */
/* {% endfor %}*/
/* </div>*/
/* <section id="formulaire">*/
/*   <div class="container">*/
/*     <div class="row">*/
/*       <div class="col-md-4 col-md-offset-4">*/
/* */
/* */
/* {{ form_start(form) }}*/
/* */
/*       <div class="form-group">*/
/*         {{ form_widget(form.imageFile) }}*/
/*       </div>*/
/* */
/* */
/*       <div>*/
/*         <input type="submit" class="btn btn-success" value="Valider"/>*/
/*       </div>*/
/*     {{ form_end(form) }}*/
/* </div>*/
/* </div>*/
/* </div>*/
/* </section>*/
/* */
/* <div class="rating"><!--*/
/*    --><a href="#5" title="Donner 5 étoiles">☆</a><!--*/
/*    --><a href="#4" title="Donner 4 étoiles">☆</a><!--*/
/*    --><a href="#3" title="Donner 3 étoiles">☆</a><!--*/
/*    --><a href="#2" title="Donner 2 étoiles">☆</a><!--*/
/*    --><a href="#1" title="Donner 1 étoile">☆</a>*/
/* </div>*/
/*   {% endblock %}*/
/* */
