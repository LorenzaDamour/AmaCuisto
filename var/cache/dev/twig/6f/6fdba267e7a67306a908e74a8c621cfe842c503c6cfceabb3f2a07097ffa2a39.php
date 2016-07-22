<?php

/* base.html.twig */
class __TwigTemplate_3e1d1e6f692d08601803909978ba1c92fd95104240acaaf3db878a888eb6d57b extends Twig_Template
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
        $__internal_f11dbb6566095c111940a5591efa2ae72d8f8a999bfd7b9a25b9efded937ef8a = $this->env->getExtension("native_profiler");
        $__internal_f11dbb6566095c111940a5591efa2ae72d8f8a999bfd7b9a25b9efded937ef8a->enter($__internal_f11dbb6566095c111940a5591efa2ae72d8f8a999bfd7b9a25b9efded937ef8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_f11dbb6566095c111940a5591efa2ae72d8f8a999bfd7b9a25b9efded937ef8a->leave($__internal_f11dbb6566095c111940a5591efa2ae72d8f8a999bfd7b9a25b9efded937ef8a_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_1086289291c6d356516cb30d76ea8a0ad899ff4091aec9d6570acb49d39a045c = $this->env->getExtension("native_profiler");
        $__internal_1086289291c6d356516cb30d76ea8a0ad899ff4091aec9d6570acb49d39a045c->enter($__internal_1086289291c6d356516cb30d76ea8a0ad899ff4091aec9d6570acb49d39a045c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_1086289291c6d356516cb30d76ea8a0ad899ff4091aec9d6570acb49d39a045c->leave($__internal_1086289291c6d356516cb30d76ea8a0ad899ff4091aec9d6570acb49d39a045c_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_16eb8a30171c4e901eab2fab8151dea2d0308ec005f0156bab412e2eeaa08c93 = $this->env->getExtension("native_profiler");
        $__internal_16eb8a30171c4e901eab2fab8151dea2d0308ec005f0156bab412e2eeaa08c93->enter($__internal_16eb8a30171c4e901eab2fab8151dea2d0308ec005f0156bab412e2eeaa08c93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "<link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css\" integrity=\"sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7\" crossorigin=\"anonymous\">
<link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\">
      ";
        
        $__internal_16eb8a30171c4e901eab2fab8151dea2d0308ec005f0156bab412e2eeaa08c93->leave($__internal_16eb8a30171c4e901eab2fab8151dea2d0308ec005f0156bab412e2eeaa08c93_prof);

    }

    // line 13
    public function block_header($context, array $blocks = array())
    {
        $__internal_12e66f34a4e7707e99939cf8584a413afc9f4cd4c786461f9a72eb52070bf2aa = $this->env->getExtension("native_profiler");
        $__internal_12e66f34a4e7707e99939cf8584a413afc9f4cd4c786461f9a72eb52070bf2aa->enter($__internal_12e66f34a4e7707e99939cf8584a413afc9f4cd4c786461f9a72eb52070bf2aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

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
        
        $__internal_12e66f34a4e7707e99939cf8584a413afc9f4cd4c786461f9a72eb52070bf2aa->leave($__internal_12e66f34a4e7707e99939cf8584a413afc9f4cd4c786461f9a72eb52070bf2aa_prof);

    }

    // line 72
    public function block_body($context, array $blocks = array())
    {
        $__internal_3dd9dc3a636a803f0c3c2dc5a3cf06366305f2e00944c0ab6649ea5bc2a83ac3 = $this->env->getExtension("native_profiler");
        $__internal_3dd9dc3a636a803f0c3c2dc5a3cf06366305f2e00944c0ab6649ea5bc2a83ac3->enter($__internal_3dd9dc3a636a803f0c3c2dc5a3cf06366305f2e00944c0ab6649ea5bc2a83ac3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_3dd9dc3a636a803f0c3c2dc5a3cf06366305f2e00944c0ab6649ea5bc2a83ac3->leave($__internal_3dd9dc3a636a803f0c3c2dc5a3cf06366305f2e00944c0ab6649ea5bc2a83ac3_prof);

    }

    // line 73
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_6221e935748adfcd787f3dfa7dbfa4bf734312f367dc180288339be80781c1a4 = $this->env->getExtension("native_profiler");
        $__internal_6221e935748adfcd787f3dfa7dbfa4bf734312f367dc180288339be80781c1a4->enter($__internal_6221e935748adfcd787f3dfa7dbfa4bf734312f367dc180288339be80781c1a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 74
        echo "        <script src=\"https://code.jquery.com/jquery-2.2.4.min.js\"
                integrity=\"sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=\"
                crossorigin=\"anonymous\"></script>
        <script src=\"https://cdnjs.cloudflare.com/ajax/libs/tether/1.3.1/js/tether.min.js\"
                type=\"text/javascript\" charset=\"utf-8\" async defer></script>
        <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js\"
        integrity=\"sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS\" crossorigin=\"anonymous\"></script>";
        
        $__internal_6221e935748adfcd787f3dfa7dbfa4bf734312f367dc180288339be80781c1a4->leave($__internal_6221e935748adfcd787f3dfa7dbfa4bf734312f367dc180288339be80781c1a4_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
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
