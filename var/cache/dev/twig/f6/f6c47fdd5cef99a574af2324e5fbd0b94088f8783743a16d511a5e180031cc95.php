<?php

/* PartagePartageBundle:Photos:photoatelier.html.twig */
class __TwigTemplate_2a8c32a79f4cf1e88fd468156a671faa357c3b28db6db34806d29f99834bb027 extends Twig_Template
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
        $__internal_09f5f50292c9c4ab400ec6ed3ca7cad54f922044561dcbd451d91b1034b8d73f = $this->env->getExtension("native_profiler");
        $__internal_09f5f50292c9c4ab400ec6ed3ca7cad54f922044561dcbd451d91b1034b8d73f->enter($__internal_09f5f50292c9c4ab400ec6ed3ca7cad54f922044561dcbd451d91b1034b8d73f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PartagePartageBundle:Photos:photoatelier.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_09f5f50292c9c4ab400ec6ed3ca7cad54f922044561dcbd451d91b1034b8d73f->leave($__internal_09f5f50292c9c4ab400ec6ed3ca7cad54f922044561dcbd451d91b1034b8d73f_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_98c3ca048ce09cb32ab4dd4210d6623cb7defb712588435868f730cc65b6322c = $this->env->getExtension("native_profiler");
        $__internal_98c3ca048ce09cb32ab4dd4210d6623cb7defb712588435868f730cc65b6322c->enter($__internal_98c3ca048ce09cb32ab4dd4210d6623cb7defb712588435868f730cc65b6322c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "<div class=\"imagesatelier\">
  <h1 class=\"titre\">Photos des ateliers </h1>
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
        
        $__internal_98c3ca048ce09cb32ab4dd4210d6623cb7defb712588435868f730cc65b6322c->leave($__internal_98c3ca048ce09cb32ab4dd4210d6623cb7defb712588435868f730cc65b6322c_prof);

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
/*   <h1 class="titre">Photos des ateliers </h1>*/
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
/* <div class="rating"><!--*/
/* --><a href="#5" title="Donner 5 étoiles">☆</a><!--*/
/* --><a href="#4" title="Donner 4 étoiles">☆</a><!--*/
/* --><a href="#3" title="Donner 3 étoiles">☆</a><!--*/
/* --><a href="#2" title="Donner 2 étoiles">☆</a><!--*/
/* --><a href="#1" title="Donner 1 étoile">☆</a>*/
/* </div>*/
/* */
/*   {% endblock %}*/
/* */
