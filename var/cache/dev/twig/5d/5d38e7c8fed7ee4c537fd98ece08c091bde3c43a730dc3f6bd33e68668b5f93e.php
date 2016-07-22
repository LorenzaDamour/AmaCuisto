<?php

/* ::base.html.twig */
class __TwigTemplate_b31f6165242b5a98d88f9ea1da5f6a77498d89a07e317c8245dd7abeaed599ef extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'header' => array($this, 'block_header'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8efdb916c1751551e290730fb7553c7e118083aa31c1d9ab90b1f21f47813f39 = $this->env->getExtension("native_profiler");
        $__internal_8efdb916c1751551e290730fb7553c7e118083aa31c1d9ab90b1f21f47813f39->enter($__internal_8efdb916c1751551e290730fb7553c7e118083aa31c1d9ab90b1f21f47813f39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 10
        echo "
    </head>
    <body>
      ";
        // line 13
        $this->displayBlock('header', $context, $blocks);
        // line 72
        echo "        ";
        $this->displayBlock('body', $context, $blocks);
        // line 73
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 81
        echo "    </body>
</html>
";
        
        $__internal_8efdb916c1751551e290730fb7553c7e118083aa31c1d9ab90b1f21f47813f39->leave($__internal_8efdb916c1751551e290730fb7553c7e118083aa31c1d9ab90b1f21f47813f39_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_2be1d58304746b3230a3fda826d5da66308b2a325f1d2da4ea4399ffb7828e3f = $this->env->getExtension("native_profiler");
        $__internal_2be1d58304746b3230a3fda826d5da66308b2a325f1d2da4ea4399ffb7828e3f->enter($__internal_2be1d58304746b3230a3fda826d5da66308b2a325f1d2da4ea4399ffb7828e3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_2be1d58304746b3230a3fda826d5da66308b2a325f1d2da4ea4399ffb7828e3f->leave($__internal_2be1d58304746b3230a3fda826d5da66308b2a325f1d2da4ea4399ffb7828e3f_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_4e8b66db5466b6c100a18e3dd44109bfd788c9769e232323874983c06dd19e17 = $this->env->getExtension("native_profiler");
        $__internal_4e8b66db5466b6c100a18e3dd44109bfd788c9769e232323874983c06dd19e17->enter($__internal_4e8b66db5466b6c100a18e3dd44109bfd788c9769e232323874983c06dd19e17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "<link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css\" integrity=\"sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7\" crossorigin=\"anonymous\">
<link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\">
      ";
        
        $__internal_4e8b66db5466b6c100a18e3dd44109bfd788c9769e232323874983c06dd19e17->leave($__internal_4e8b66db5466b6c100a18e3dd44109bfd788c9769e232323874983c06dd19e17_prof);

    }

    // line 13
    public function block_header($context, array $blocks = array())
    {
        $__internal_9ab6d9dcad2bc5bf80aed5f7b4fe8cb853adaa1a092e4be37a3ff65942fc9b4d = $this->env->getExtension("native_profiler");
        $__internal_9ab6d9dcad2bc5bf80aed5f7b4fe8cb853adaa1a092e4be37a3ff65942fc9b4d->enter($__internal_9ab6d9dcad2bc5bf80aed5f7b4fe8cb853adaa1a092e4be37a3ff65942fc9b4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 14
        echo "<nav class=\"navbar navbar-fixed-top navbar-default\">

  <div class=\"container-fluid\">
    <div class=\"navbar-header\">
      <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\" aria-expanded=\"false\">
        <span class=\"icon-bar\"></span>
        <span class=\"icon-bar\"></span>
        <span class=\"icon-bar\"></span>
      </button>
      <a class=\"navbar-brand\" href=\"/\"><i class=\"fa fa-universal-access\" aria-hidden=\"true\"> </i>AmaCuisto</a>
    </div>

    <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
      <ul class=\"nav navbar-nav\">

      ";
        // line 29
        if ($this->env->getExtension('security')->isGranted("ROLE_USER")) {
            echo "  <li><a href=\"";
            echo $this->env->getExtension('routing')->getPath("atelier_new");
            echo "\"><i class=\"fa fa-edit\" aria-hidden=\"true\"></i> Créer un atelier</a></li>
      <li><a href=\"";
            // line 30
            echo $this->env->getExtension('routing')->getPath("atelier_index");
            echo "\"><i class=\"fa fa-edit\" aria-hidden=\"true\"></i> Liste des ateliers</a></li>
      <li><a href=\"/notif\"><i class=\"fa fa-edit\" aria-hidden=\"true\"></i> Notifications</a></li>
      <li><a href=\"";
            // line 32
            echo $this->env->getExtension('routing')->getPath("accept");
            echo "\"><i class=\"fa fa-edit\" aria-hidden=\"true\"></i>Mes ateliers</a></li>


      ";
        }
        // line 36
        echo "
      </ul>


      <ul class=\"nav navbar-nav navbar-right\">
        ";
        // line 41
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 42
            echo "        <li>
          <a href=\"/profile\" title=\"Profil\"><i class=\"fa fa-user\" aria-hidden=\"true\"></i> Bienvenue ";
            // line 43
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
            echo "</a>
        </li>


        ";
        } else {
            // line 48
            echo "
        <li>
          <a href=\"";
            // line 50
            echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
            echo "\"><i class=\"fa fa-sign-in\" aria-hidden=\"true\"></i> Connexion</a>
        </li>
        ";
        }
        // line 53
        echo "
        <li>
          ";
        // line 55
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 56
            echo "          <a href=\"";
            echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
            echo "\">Se déconnecter <i class=\"fa fa-sign-out\" aria-hidden=\"true\"></i>
          </a>
          ";
        } else {
            // line 59
            echo "
          <li>
            <a href=\"/register\">Inscription</a>
          </li>
          ";
        }
        // line 64
        echo "
        </li>
      </ul>
    </div>
  </div>
</nav>

";
        
        $__internal_9ab6d9dcad2bc5bf80aed5f7b4fe8cb853adaa1a092e4be37a3ff65942fc9b4d->leave($__internal_9ab6d9dcad2bc5bf80aed5f7b4fe8cb853adaa1a092e4be37a3ff65942fc9b4d_prof);

    }

    // line 72
    public function block_body($context, array $blocks = array())
    {
        $__internal_3646c4f5032f31ab1f2b86fa838d23f80da949f404a3aea042103744422ce835 = $this->env->getExtension("native_profiler");
        $__internal_3646c4f5032f31ab1f2b86fa838d23f80da949f404a3aea042103744422ce835->enter($__internal_3646c4f5032f31ab1f2b86fa838d23f80da949f404a3aea042103744422ce835_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_3646c4f5032f31ab1f2b86fa838d23f80da949f404a3aea042103744422ce835->leave($__internal_3646c4f5032f31ab1f2b86fa838d23f80da949f404a3aea042103744422ce835_prof);

    }

    // line 73
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_069427bb8d8eef8b23401b29b426d07a6a757e6c4e1b3646297db369095c52ed = $this->env->getExtension("native_profiler");
        $__internal_069427bb8d8eef8b23401b29b426d07a6a757e6c4e1b3646297db369095c52ed->enter($__internal_069427bb8d8eef8b23401b29b426d07a6a757e6c4e1b3646297db369095c52ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 74
        echo "        <script src=\"https://code.jquery.com/jquery-2.2.4.min.js\"
                integrity=\"sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=\"
                crossorigin=\"anonymous\"></script>
        <script src=\"https://cdnjs.cloudflare.com/ajax/libs/tether/1.3.1/js/tether.min.js\"
                type=\"text/javascript\" charset=\"utf-8\" async defer></script>
        <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js\"
        integrity=\"sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS\" crossorigin=\"anonymous\"></script>";
        
        $__internal_069427bb8d8eef8b23401b29b426d07a6a757e6c4e1b3646297db369095c52ed->leave($__internal_069427bb8d8eef8b23401b29b426d07a6a757e6c4e1b3646297db369095c52ed_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  213 => 74,  207 => 73,  196 => 72,  182 => 64,  175 => 59,  168 => 56,  166 => 55,  162 => 53,  156 => 50,  152 => 48,  144 => 43,  141 => 42,  139 => 41,  132 => 36,  125 => 32,  120 => 30,  114 => 29,  97 => 14,  91 => 13,  82 => 8,  79 => 7,  73 => 6,  61 => 5,  52 => 81,  49 => 73,  46 => 72,  44 => 13,  39 => 10,  37 => 6,  33 => 5,  27 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}*/
/* <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">*/
/* <link rel="stylesheet" href="{{ asset('css/style.css') }}">*/
/*       {% endblock %}*/
/* */
/*     </head>*/
/*     <body>*/
/*       {% block header %}*/
/* <nav class="navbar navbar-fixed-top navbar-default">*/
/* */
/*   <div class="container-fluid">*/
/*     <div class="navbar-header">*/
/*       <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">*/
/*         <span class="icon-bar"></span>*/
/*         <span class="icon-bar"></span>*/
/*         <span class="icon-bar"></span>*/
/*       </button>*/
/*       <a class="navbar-brand" href="/"><i class="fa fa-universal-access" aria-hidden="true"> </i>AmaCuisto</a>*/
/*     </div>*/
/* */
/*     <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">*/
/*       <ul class="nav navbar-nav">*/
/* */
/*       {% if is_granted('ROLE_USER')%}  <li><a href="{{ path ('atelier_new') }}"><i class="fa fa-edit" aria-hidden="true"></i> Créer un atelier</a></li>*/
/*       <li><a href="{{ path ('atelier_index') }}"><i class="fa fa-edit" aria-hidden="true"></i> Liste des ateliers</a></li>*/
/*       <li><a href="/notif"><i class="fa fa-edit" aria-hidden="true"></i> Notifications</a></li>*/
/*       <li><a href="{{ path ('accept') }}"><i class="fa fa-edit" aria-hidden="true"></i>Mes ateliers</a></li>*/
/* */
/* */
/*       {% endif %}*/
/* */
/*       </ul>*/
/* */
/* */
/*       <ul class="nav navbar-nav navbar-right">*/
/*         {% if is_granted("IS_AUTHENTICATED_REMEMBERED") %}*/
/*         <li>*/
/*           <a href="/profile" title="Profil"><i class="fa fa-user" aria-hidden="true"></i> Bienvenue {{ app.user.username }}</a>*/
/*         </li>*/
/* */
/* */
/*         {% else %}*/
/* */
/*         <li>*/
/*           <a href="{{ path('fos_user_security_login') }}"><i class="fa fa-sign-in" aria-hidden="true"></i> Connexion</a>*/
/*         </li>*/
/*         {% endif %}*/
/* */
/*         <li>*/
/*           {% if is_granted("IS_AUTHENTICATED_REMEMBERED") %}*/
/*           <a href="{{ path('fos_user_security_logout') }}">Se déconnecter <i class="fa fa-sign-out" aria-hidden="true"></i>*/
/*           </a>*/
/*           {% else %}*/
/* */
/*           <li>*/
/*             <a href="/register">Inscription</a>*/
/*           </li>*/
/*           {% endif %}*/
/* */
/*         </li>*/
/*       </ul>*/
/*     </div>*/
/*   </div>*/
/* </nav>*/
/* */
/* {% endblock %}*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}*/
/*         <script src="https://code.jquery.com/jquery-2.2.4.min.js"*/
/*                 integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="*/
/*                 crossorigin="anonymous"></script>*/
/*         <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.3.1/js/tether.min.js"*/
/*                 type="text/javascript" charset="utf-8" async defer></script>*/
/*         <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"*/
/*         integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
