<?php

/* base.html.twig */
class __TwigTemplate_d0c0e62e77f84af2f6d0a03bc951f243e771c2832abd5e6e04e6ef207f8d4fc5 extends Twig_Template
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
        $__internal_0a426a414fb35385f3f1f6cbb1e18d9fe6473e059cc0c638def474a2c507af87 = $this->env->getExtension("native_profiler");
        $__internal_0a426a414fb35385f3f1f6cbb1e18d9fe6473e059cc0c638def474a2c507af87->enter($__internal_0a426a414fb35385f3f1f6cbb1e18d9fe6473e059cc0c638def474a2c507af87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        // line 13
        echo "
    </head>
    <body>
      ";
        // line 16
        $this->displayBlock('header', $context, $blocks);
        // line 78
        echo "        ";
        $this->displayBlock('body', $context, $blocks);
        // line 79
        echo "        ";
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 81
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 89
        echo "    </body>
</html>
";
        
        $__internal_0a426a414fb35385f3f1f6cbb1e18d9fe6473e059cc0c638def474a2c507af87->leave($__internal_0a426a414fb35385f3f1f6cbb1e18d9fe6473e059cc0c638def474a2c507af87_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_42aa988bfa95a83eeeb466fdb1625ae2a6beeabbac5744b3c78ed318df8b3af7 = $this->env->getExtension("native_profiler");
        $__internal_42aa988bfa95a83eeeb466fdb1625ae2a6beeabbac5744b3c78ed318df8b3af7->enter($__internal_42aa988bfa95a83eeeb466fdb1625ae2a6beeabbac5744b3c78ed318df8b3af7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_42aa988bfa95a83eeeb466fdb1625ae2a6beeabbac5744b3c78ed318df8b3af7->leave($__internal_42aa988bfa95a83eeeb466fdb1625ae2a6beeabbac5744b3c78ed318df8b3af7_prof);

    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_b27e8cb98eb9e2bb8eb1b876daec8dbfcdbd62450969ebd1a6e1926e224887e3 = $this->env->getExtension("native_profiler");
        $__internal_b27e8cb98eb9e2bb8eb1b876daec8dbfcdbd62450969ebd1a6e1926e224887e3->enter($__internal_b27e8cb98eb9e2bb8eb1b876daec8dbfcdbd62450969ebd1a6e1926e224887e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 8
        echo "  <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("font-awesome/css/font-awesome.min.css"), "html", null, true);
        echo "\">
<link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css\" integrity=\"sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7\" crossorigin=\"anonymous\">
<link href=\"https://fonts.googleapis.com/css?family=Pacifico|Poiret+One\" rel=\"stylesheet\">
<link rel=\"stylesheet\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\">
      ";
        
        $__internal_b27e8cb98eb9e2bb8eb1b876daec8dbfcdbd62450969ebd1a6e1926e224887e3->leave($__internal_b27e8cb98eb9e2bb8eb1b876daec8dbfcdbd62450969ebd1a6e1926e224887e3_prof);

    }

    // line 16
    public function block_header($context, array $blocks = array())
    {
        $__internal_8839ab2c9a34c2db564c525cb9fcb8c4907f7b6505ec1f443484e82d96fd1b44 = $this->env->getExtension("native_profiler");
        $__internal_8839ab2c9a34c2db564c525cb9fcb8c4907f7b6505ec1f443484e82d96fd1b44->enter($__internal_8839ab2c9a34c2db564c525cb9fcb8c4907f7b6505ec1f443484e82d96fd1b44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 17
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
        // line 32
        if ($this->env->getExtension('security')->isGranted("ROLE_USER")) {
            echo "  <li><a href=\"";
            echo $this->env->getExtension('routing')->getPath("atelier_new");
            echo "\"><i class=\"fa fa-edit\" aria-hidden=\"true\"></i> Créer un atelier</a></li>
      <li><a href=\"";
            // line 33
            echo $this->env->getExtension('routing')->getPath("atelier_index");
            echo "\"><i class=\"fa fa-list-ul\" aria-hidden=\"true\"></i> Liste des ateliers</a></li>
      <li><a href=\"/notif\"><i class=\"fa fa-bell\" aria-hidden=\"true\"></i></i> Notifications</a></li>
      <li><a href=\"";
            // line 35
            echo $this->env->getExtension('routing')->getPath("accept");
            echo "\"><i class=\"fa fa-cutlery\" aria-hidden=\"true\"></i> Mes ateliers</a></li>
            <li><a href=\"/galerie\"><i class=\"fa fa-camera\" aria-hidden=\"true\"></i> Galerie</a></li>


      ";
        }
        // line 40
        echo "
      </ul>


      <ul class=\"nav navbar-nav navbar-right\">
        ";
        // line 45
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 46
            echo "        <li>
          <a href=\"/profile\" title=\"Profil\"><i class=\"fa fa-user\" aria-hidden=\"true\"></i> Bienvenue ";
            // line 47
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
            echo "</a>
        </li>


        ";
        } else {
            // line 52
            echo "
        <li>
          <a href=\"";
            // line 54
            echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
            echo "\"><i class=\"fa fa-sign-in\" aria-hidden=\"true\"></i> Connexion</a>
        </li>
        ";
        }
        // line 57
        echo "
        <li>
          ";
        // line 59
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 60
            echo "          <a href=\"";
            echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
            echo "\">Se déconnecter <i class=\"fa fa-sign-out\" aria-hidden=\"true\"></i>
          </a>
          ";
        } else {
            // line 63
            echo "
          <li>
            <a href=\"/register\">Inscription</a>
          </li>
          ";
        }
        // line 68
        echo "
        </li>
      </ul>
    </div>
  </div>
</nav>



";
        
        $__internal_8839ab2c9a34c2db564c525cb9fcb8c4907f7b6505ec1f443484e82d96fd1b44->leave($__internal_8839ab2c9a34c2db564c525cb9fcb8c4907f7b6505ec1f443484e82d96fd1b44_prof);

    }

    // line 78
    public function block_body($context, array $blocks = array())
    {
        $__internal_3b84f368d4e30d3020eddf4dc6ca39c84adb5ddbe3fcab2d06a518ffaa6feb34 = $this->env->getExtension("native_profiler");
        $__internal_3b84f368d4e30d3020eddf4dc6ca39c84adb5ddbe3fcab2d06a518ffaa6feb34->enter($__internal_3b84f368d4e30d3020eddf4dc6ca39c84adb5ddbe3fcab2d06a518ffaa6feb34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_3b84f368d4e30d3020eddf4dc6ca39c84adb5ddbe3fcab2d06a518ffaa6feb34->leave($__internal_3b84f368d4e30d3020eddf4dc6ca39c84adb5ddbe3fcab2d06a518ffaa6feb34_prof);

    }

    // line 79
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_26482012b5eaa97ee5bee6335229fed140aadf897efe66efd567a0d192e6fa7d = $this->env->getExtension("native_profiler");
        $__internal_26482012b5eaa97ee5bee6335229fed140aadf897efe66efd567a0d192e6fa7d->enter($__internal_26482012b5eaa97ee5bee6335229fed140aadf897efe66efd567a0d192e6fa7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 80
        echo "        ";
        
        $__internal_26482012b5eaa97ee5bee6335229fed140aadf897efe66efd567a0d192e6fa7d->leave($__internal_26482012b5eaa97ee5bee6335229fed140aadf897efe66efd567a0d192e6fa7d_prof);

    }

    // line 81
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_ab96ed6d24fefc5c112380fd82b6d68dd43acaf1027d7fbfa9628eeb7495664d = $this->env->getExtension("native_profiler");
        $__internal_ab96ed6d24fefc5c112380fd82b6d68dd43acaf1027d7fbfa9628eeb7495664d->enter($__internal_ab96ed6d24fefc5c112380fd82b6d68dd43acaf1027d7fbfa9628eeb7495664d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 82
        echo "        <script src=\"https://code.jquery.com/jquery-2.2.4.min.js\"
                integrity=\"sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=\"
                crossorigin=\"anonymous\"></script>
        <script src=\"https://cdnjs.cloudflare.com/ajax/libs/tether/1.3.1/js/tether.min.js\"
                type=\"text/javascript\" charset=\"utf-8\" async defer></script>
        <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js\"
        integrity=\"sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS\" crossorigin=\"anonymous\"></script>";
        
        $__internal_ab96ed6d24fefc5c112380fd82b6d68dd43acaf1027d7fbfa9628eeb7495664d->leave($__internal_ab96ed6d24fefc5c112380fd82b6d68dd43acaf1027d7fbfa9628eeb7495664d_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  238 => 82,  232 => 81,  225 => 80,  219 => 79,  208 => 78,  192 => 68,  185 => 63,  178 => 60,  176 => 59,  172 => 57,  166 => 54,  162 => 52,  154 => 47,  151 => 46,  149 => 45,  142 => 40,  134 => 35,  129 => 33,  123 => 32,  106 => 17,  100 => 16,  91 => 11,  84 => 8,  78 => 7,  66 => 6,  57 => 89,  54 => 81,  51 => 79,  48 => 78,  46 => 16,  41 => 13,  39 => 7,  35 => 6,  28 => 1,);
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
/* <link href="https://fonts.googleapis.com/css?family=Pacifico|Poiret+One" rel="stylesheet">*/
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
