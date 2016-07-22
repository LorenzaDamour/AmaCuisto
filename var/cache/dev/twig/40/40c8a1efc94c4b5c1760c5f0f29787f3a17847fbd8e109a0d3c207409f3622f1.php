<?php

/* ::base.html.twig */
class __TwigTemplate_8166b53ad364f60f20e1cc15d8eed01df32f55bbbbf5b5b67fe75651bd8e052d extends Twig_Template
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
            'fos_user_content' => array($this, 'block_fos_user_content'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9c111e4064c069a32f6ffe642a700561879584516a02acf4603f034fe38827d3 = $this->env->getExtension("native_profiler");
        $__internal_9c111e4064c069a32f6ffe642a700561879584516a02acf4603f034fe38827d3->enter($__internal_9c111e4064c069a32f6ffe642a700561879584516a02acf4603f034fe38827d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
         <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        <title>";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 7
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 12
        echo "
    </head>
    <body>
      ";
        // line 15
        $this->displayBlock('header', $context, $blocks);
        // line 77
        echo "        ";
        $this->displayBlock('body', $context, $blocks);
        // line 78
        echo "        ";
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 80
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 88
        echo "    </body>
</html>
";
        
        $__internal_9c111e4064c069a32f6ffe642a700561879584516a02acf4603f034fe38827d3->leave($__internal_9c111e4064c069a32f6ffe642a700561879584516a02acf4603f034fe38827d3_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_bc260f3d6e0a0575771f831f84862355ef7d8242297e42f578521c314b846555 = $this->env->getExtension("native_profiler");
        $__internal_bc260f3d6e0a0575771f831f84862355ef7d8242297e42f578521c314b846555->enter($__internal_bc260f3d6e0a0575771f831f84862355ef7d8242297e42f578521c314b846555_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_bc260f3d6e0a0575771f831f84862355ef7d8242297e42f578521c314b846555->leave($__internal_bc260f3d6e0a0575771f831f84862355ef7d8242297e42f578521c314b846555_prof);

    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_25fd72df255011bfc18311d12ed6fa6a22b8716702a27055fd8c096c0bd81941 = $this->env->getExtension("native_profiler");
        $__internal_25fd72df255011bfc18311d12ed6fa6a22b8716702a27055fd8c096c0bd81941->enter($__internal_25fd72df255011bfc18311d12ed6fa6a22b8716702a27055fd8c096c0bd81941_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 8
        echo "  <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("font-awesome/css/font-awesome.min.css"), "html", null, true);
        echo "\">
<link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css\" integrity=\"sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7\" crossorigin=\"anonymous\">
<link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\">
      ";
        
        $__internal_25fd72df255011bfc18311d12ed6fa6a22b8716702a27055fd8c096c0bd81941->leave($__internal_25fd72df255011bfc18311d12ed6fa6a22b8716702a27055fd8c096c0bd81941_prof);

    }

    // line 15
    public function block_header($context, array $blocks = array())
    {
        $__internal_3a6fff0a35eac85a892594d0def8be8c5e9f061ade2ca3baa7af7170d38616bd = $this->env->getExtension("native_profiler");
        $__internal_3a6fff0a35eac85a892594d0def8be8c5e9f061ade2ca3baa7af7170d38616bd->enter($__internal_3a6fff0a35eac85a892594d0def8be8c5e9f061ade2ca3baa7af7170d38616bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 16
        echo "<nav class=\"navbar navbar-fixed-top navbar-default\">

  <div class=\"container-fluid\">
    <div class=\"navbar-header\">
      <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\" aria-expanded=\"false\">
        <span class=\"icon-bar\"></span>
        <span class=\"icon-bar\"></span>
        <span class=\"icon-bar\"></span>
      </button>
      <a class=\"navbar-brand\" href=\"/\">AmaCuisto</a>
    </div>

    <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
      <ul class=\"nav navbar-nav\">

      ";
        // line 31
        if ($this->env->getExtension('security')->isGranted("ROLE_USER")) {
            echo "  <li><a href=\"";
            echo $this->env->getExtension('routing')->getPath("atelier_new");
            echo "\"><i class=\"fa fa-edit\" aria-hidden=\"true\"></i> Créer un atelier</a></li>
      <li><a href=\"";
            // line 32
            echo $this->env->getExtension('routing')->getPath("atelier_index");
            echo "\"><i class=\"fa fa-list-ul\" aria-hidden=\"true\"></i> Liste des ateliers</a></li>
      <li><a href=\"/notif\"><i class=\"fa fa-bell\" aria-hidden=\"true\"></i></i> Notifications</a></li>
      <li><a href=\"";
            // line 34
            echo $this->env->getExtension('routing')->getPath("accept");
            echo "\"><i class=\"fa fa-cutlery\" aria-hidden=\"true\"></i> Mes ateliers</a></li>
            <li><a href=\"/galerie\"><i class=\"fa fa-camera\" aria-hidden=\"true\"></i> Galerie</a></li>


      ";
        }
        // line 39
        echo "
      </ul>


      <ul class=\"nav navbar-nav navbar-right\">
        ";
        // line 44
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 45
            echo "        <li>
          <a href=\"/profile\" title=\"Profil\"><i class=\"fa fa-user\" aria-hidden=\"true\"></i> Bienvenue ";
            // line 46
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
            echo "</a>
        </li>


        ";
        } else {
            // line 51
            echo "
        <li>
          <a href=\"";
            // line 53
            echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
            echo "\"><i class=\"fa fa-sign-in\" aria-hidden=\"true\"></i> Connexion</a>
        </li>
        ";
        }
        // line 56
        echo "
        <li>
          ";
        // line 58
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 59
            echo "          <a href=\"";
            echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
            echo "\">Se déconnecter <i class=\"fa fa-sign-out\" aria-hidden=\"true\"></i>
          </a>
          ";
        } else {
            // line 62
            echo "
          <li>
            <a href=\"/register\">Inscription</a>
          </li>
          ";
        }
        // line 67
        echo "
        </li>
      </ul>
    </div>
  </div>
</nav>



";
        
        $__internal_3a6fff0a35eac85a892594d0def8be8c5e9f061ade2ca3baa7af7170d38616bd->leave($__internal_3a6fff0a35eac85a892594d0def8be8c5e9f061ade2ca3baa7af7170d38616bd_prof);

    }

    // line 77
    public function block_body($context, array $blocks = array())
    {
        $__internal_35b4060872c641298712f6468f1d1460845ded0d20d634262ad448f4de5cad31 = $this->env->getExtension("native_profiler");
        $__internal_35b4060872c641298712f6468f1d1460845ded0d20d634262ad448f4de5cad31->enter($__internal_35b4060872c641298712f6468f1d1460845ded0d20d634262ad448f4de5cad31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_35b4060872c641298712f6468f1d1460845ded0d20d634262ad448f4de5cad31->leave($__internal_35b4060872c641298712f6468f1d1460845ded0d20d634262ad448f4de5cad31_prof);

    }

    // line 78
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_41e3652e25245c764cc0496b973bc61d9870a41994ba59702f75b2b5ab00de45 = $this->env->getExtension("native_profiler");
        $__internal_41e3652e25245c764cc0496b973bc61d9870a41994ba59702f75b2b5ab00de45->enter($__internal_41e3652e25245c764cc0496b973bc61d9870a41994ba59702f75b2b5ab00de45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 79
        echo "        ";
        
        $__internal_41e3652e25245c764cc0496b973bc61d9870a41994ba59702f75b2b5ab00de45->leave($__internal_41e3652e25245c764cc0496b973bc61d9870a41994ba59702f75b2b5ab00de45_prof);

    }

    // line 80
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_76427d761d1d815cb8d7abc90d81a28a8a22bf9a00123f9bdf343d1ab87b3a6e = $this->env->getExtension("native_profiler");
        $__internal_76427d761d1d815cb8d7abc90d81a28a8a22bf9a00123f9bdf343d1ab87b3a6e->enter($__internal_76427d761d1d815cb8d7abc90d81a28a8a22bf9a00123f9bdf343d1ab87b3a6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 81
        echo "        <script src=\"https://code.jquery.com/jquery-2.2.4.min.js\"
                integrity=\"sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=\"
                crossorigin=\"anonymous\"></script>
        <script src=\"https://cdnjs.cloudflare.com/ajax/libs/tether/1.3.1/js/tether.min.js\"
                type=\"text/javascript\" charset=\"utf-8\" async defer></script>
        <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js\"
        integrity=\"sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS\" crossorigin=\"anonymous\"></script>";
        
        $__internal_76427d761d1d815cb8d7abc90d81a28a8a22bf9a00123f9bdf343d1ab87b3a6e->leave($__internal_76427d761d1d815cb8d7abc90d81a28a8a22bf9a00123f9bdf343d1ab87b3a6e_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  237 => 81,  231 => 80,  224 => 79,  218 => 78,  207 => 77,  191 => 67,  184 => 62,  177 => 59,  175 => 58,  171 => 56,  165 => 53,  161 => 51,  153 => 46,  150 => 45,  148 => 44,  141 => 39,  133 => 34,  128 => 32,  122 => 31,  105 => 16,  99 => 15,  90 => 10,  84 => 8,  78 => 7,  66 => 6,  57 => 88,  54 => 80,  51 => 78,  48 => 77,  46 => 15,  41 => 12,  39 => 7,  35 => 6,  28 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*          <meta name="viewport" content="width=device-width, initial-scale=1">*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}*/
/*   <link rel="stylesheet" href="{{asset('font-awesome/css/font-awesome.min.css')}}">*/
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
/*       <a class="navbar-brand" href="/">AmaCuisto</a>*/
/*     </div>*/
/* */
/*     <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">*/
/*       <ul class="nav navbar-nav">*/
/* */
/*       {% if is_granted('ROLE_USER')%}  <li><a href="{{ path ('atelier_new') }}"><i class="fa fa-edit" aria-hidden="true"></i> Créer un atelier</a></li>*/
/*       <li><a href="{{ path ('atelier_index') }}"><i class="fa fa-list-ul" aria-hidden="true"></i> Liste des ateliers</a></li>*/
/*       <li><a href="/notif"><i class="fa fa-bell" aria-hidden="true"></i></i> Notifications</a></li>*/
/*       <li><a href="{{ path ('accept') }}"><i class="fa fa-cutlery" aria-hidden="true"></i> Mes ateliers</a></li>*/
/*             <li><a href="/galerie"><i class="fa fa-camera" aria-hidden="true"></i> Galerie</a></li>*/
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
/* */
/* */
/* {% endblock %}*/
/*         {% block body %}{% endblock %}*/
/*         {% block fos_user_content %}*/
/*         {% endblock %}*/
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
