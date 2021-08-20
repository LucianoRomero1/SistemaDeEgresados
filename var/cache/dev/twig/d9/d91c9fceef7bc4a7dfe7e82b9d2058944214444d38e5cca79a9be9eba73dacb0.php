<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* base.html.twig */
class __TwigTemplate_4d092979eb686573951bfaa4824aaccb421fd25e7f5e816e27e56b273426efef extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
\t    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        <title>";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 7
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 14
        echo "    </head>
    <body> 
    ";
        // line 16
        $this->displayBlock('body', $context, $blocks);
        // line 147
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 159
        echo "        
    </body>
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 6
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Novedades - UNRaf";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 7
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 8
        echo "            <link href=\"//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css\" rel=\"stylesheet\" id=\"bootstrap-css\">
            <link href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/estiloBase.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
            <link href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/estilos.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
            
            <link rel=\"icon\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/iconoUnraf.png"), "html", null, true);
        echo "\">
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 16
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 17
        echo "    ";
        if ((($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER") || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_SUPERADMIN"))) {
            // line 18
            echo "    <div id=\"wrapper\" class=\"animate\">

        <nav class=\"navbar header-top fixed-top navbar-expand-lg  navbar-light bg-light\">


            ";
            // line 24
            echo "            <span class=\"navbar-toggler-icon leftmenutrigger\" id = \"rayitas\"></span>

            ";
            // line 27
            echo "            <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarText\" aria-controls=\"navbarText\"
                aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                <span class=\"navbar-toggler-icon\"></span>
            </button>

            ";
            // line 33
            echo "            <ul class=\"navbar-nav ml-md-auto\">
                <a style=\"margin-left: 10px;margin-top:5px;\" class=\"navbar-brand  color-unraf-light grow\" href=\"";
            // line 34
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("menuPrincipal");
            echo "\">Registro Digital</a>  
            </ul>
     
            ";
            // line 38
            echo "            <div class=\"collapse navbar-collapse\" id=\"navbarText\">
                <ul class=\"navbar-nav animate side-nav \" style = \"background: white;\">

                    ";
            // line 42
            echo "                    ";
            // line 45
            echo "                        
                            ";
            // line 47
            echo "                            ";
            // line 48
            echo "
                            ";
            // line 50
            echo "                            ";
            // line 54
            echo "                    
                    ";
            // line 56
            echo "                    <li id=\"menuDocumento\" class=\"nav-item perfil-p \">
                        <a class=\"nav-link\" href=\"";
            // line 57
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("menuPrincipal");
            echo "\"><button class=\"btn perfil-btn-light\" ><i class=\"fas fa-home\" style = \"color: #0F9FA8;\"></i></button>Inicio</a>
                    </li>


                    ";
            // line 61
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
                // line 62
                echo "                    ";
                // line 63
                echo "                    <li id=\"menuDocumento\" class=\"nav-item perfil-p mt-2\">
                        <a class=\"nav-link \" href=\"";
                // line 64
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("verEgresados");
                echo "\"><button class=\"btn perfil-btn-light\" ><i class=\"fas fa-graduation-cap\" ></i></button>Titulaciones</a>
                    </li>

                    ";
                // line 68
                echo "                    <li id=\"menuDocumento\" class=\"nav-item perfil-p mt-2\">
                        <a class=\"nav-link \" href=\"";
                // line 69
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("verGraduados");
                echo "\"><button class=\"btn perfil-btn-light\" ><i class=\"fas fa-graduation-cap\" ></i></button>Graduados</a>
                    </li>
                    
                    ";
                // line 73
                echo "                    <li id=\"menuDocumento\" class=\"nav-item perfil-p mt-2\">
                        <a class=\"nav-link\" href=\"";
                // line 74
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("datosAcademicos");
                echo "\"><button class=\"btn perfil-btn-light\" ><i class=\"fas fa-user-graduate\"></i></button>Datos académicos</a>
                    </li>
                    ";
            }
            // line 77
            echo "
                    ";
            // line 78
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_SUPERADMIN")) {
                // line 79
                echo "                    ";
                // line 80
                echo "                    <li id=\"menuDocumento\" class=\"nav-item perfil-p mt-2\">
                        <a class=\"nav-link\" href=\"";
                // line 81
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("roles");
                echo "\"><button class=\"btn perfil-btn-light\" ><i class=\"fas fa-user\"></i></button>Rol de usuarios</a>
                    </li>
                    ";
            }
            // line 84
            echo "                  

                    ";
            // line 87
            echo "                    ";
            // line 88
            echo "                    ";
            // line 91
            echo "
                </ul>  
                <ul class=\"navbar-nav ml-auto\">
                    <li class=\"nav-item dropdown\">
                        <a class=\"nav-link\" aria-haspopup=\"true\" aria-expanded=\"false\"  data-toggle=\"dropdown\" href=\"#\"><button class=\"btn perfil-btn-tomato\"><i class=\"fas fa-user\"></i></button></a>

                        <div class=\"dropdown-menu pers-drop-down\" aria-labelledby=\"navbarDropdownMenuLink\">
                            ";
            // line 99
            echo "                            <div class=\"container-fluid user-perfil\" style = \"padding: 5px;\">

                                <div class=\"media\">
                                    ";
            // line 103
            echo "                                    <img class=\"perfil-img\" src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/iconoUnraf.png"), "html", null, true);
            echo "\" style = \"padding: 1px;\"></img>
                                    ";
            // line 105
            echo "                                    <p class=\"perfil-email text-secondary\">";
            echo twig_escape_filter($this->env, twig_replace_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 105, $this->source); })()), "user", [], "any", false, false, false, 105), "email", [], "any", false, false, false, 105), ["@unraf.edu.ar" => ""]), "html", null, true);
            echo "</p>
                                </div>
                                <p style=\"font-size: 10px;\" class=\"text-secondary text-right mt-1\">ROL: ";
            // line 107
            echo twig_escape_filter($this->env, twig_slice($this->env, twig_last($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 107, $this->source); })()), "user", [], "any", false, false, false, 107), "roles", [], "any", false, false, false, 107)), 5, 10), "html", null, true);
            echo "</p>
                                <hr>
                                <div class = \"text-center\">
                                    <a class=\"user-link\" style = \"font-size: 18px;\" href=\"";
            // line 110
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("backIntranet");
            echo "\"><i class=\"fas fa-hand-point-left\"></i> Intranet</a>
                                </div>
                                
                            </div>
                        </div>
                    </li>
                </ul>
                
                  ";
            // line 122
            echo "            </div>
        </nav>
    </div>
        ";
            // line 125
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 125, $this->source); })()), "flashes", [0 => "correcto"], "method", false, false, false, 125));
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 126
                echo "                <div id=\"notificacion\" class=\"container alert alert-success mt-3 wobble-vertical\">
                    <a href=\"#\" class=\"close\" data-dismiss=\"alert\" aria-label=\"close\">&times;</a>
                    ";
                // line 128
                echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                echo "
                </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 131
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 131, $this->source); })()), "flashes", [0 => "error"], "method", false, false, false, 131));
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 132
                echo "                <div id=\"notificacion\" class=\"container alert alert-danger mt-3 wobble-vertical\">
                    <a href=\"#\" class=\"close\" data-dismiss=\"alert\" aria-label=\"close\">&times;</a>
                    ";
                // line 134
                echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                echo "
                </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 137
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 137, $this->source); })()), "flashes", [0 => "warning"], "method", false, false, false, 137));
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 138
                echo "                <div id=\"notificacion\" class=\"container alert alert-warning mt-3 wobble-vertical\">
                    <a href=\"#\" class=\"close\" data-dismiss=\"alert\" aria-label=\"close\">&times;</a>
                    ";
                // line 140
                echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                echo "
                </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 143
            echo "                
        
    ";
        }
        // line 145
        echo "   
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 147
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        echo " 
            <script src=\"https://intranet.unraf.edu.ar/RegistroDigital/public/pdfThumbnails/pdfThumbnails.js\" data-pdfjs-src=\"https://intranet.unraf.edu.ar/RegistroDigital/public/pdfThumbnails/pdf.js/build/pdf.js\"></script>
            <script
                src=\"https://code.jquery.com/jquery-3.5.1.min.js\"
                integrity=\"sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=\"
                crossorigin=\"anonymous\"></script> 
            <script src=\"";
        // line 153
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/accionesDinamicas.js"), "html", null, true);
        echo "\"></script>
            <script src= \"";
        // line 154
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/accionesQuery.js"), "html", null, true);
        echo "\"></script>
            <script type=\"text/javascript\" src=\"//cdnjs.cloudflare.com/ajax/libs/moment.js/2.15.2/moment.min.js\"></script>
            <script src=\"https://use.fontawesome.com/releases/v5.15.2/js/all.js\" data-search-pseudo-elements></script>
            <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js\" integrity=\"sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx\" crossorigin=\"anonymous\"></script>
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  397 => 154,  393 => 153,  376 => 147,  365 => 145,  360 => 143,  351 => 140,  347 => 138,  342 => 137,  333 => 134,  329 => 132,  324 => 131,  315 => 128,  311 => 126,  307 => 125,  302 => 122,  291 => 110,  285 => 107,  279 => 105,  274 => 103,  269 => 99,  260 => 91,  258 => 88,  256 => 87,  252 => 84,  246 => 81,  243 => 80,  241 => 79,  239 => 78,  236 => 77,  230 => 74,  227 => 73,  221 => 69,  218 => 68,  212 => 64,  209 => 63,  207 => 62,  205 => 61,  198 => 57,  195 => 56,  192 => 54,  190 => 50,  187 => 48,  185 => 47,  182 => 45,  180 => 42,  175 => 38,  169 => 34,  166 => 33,  159 => 27,  155 => 24,  148 => 18,  145 => 17,  135 => 16,  123 => 12,  118 => 10,  114 => 9,  111 => 8,  101 => 7,  82 => 6,  69 => 159,  66 => 147,  64 => 16,  60 => 14,  58 => 7,  54 => 6,  47 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
\t    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        <title>{% block title %}Novedades - UNRaf{% endblock %}</title>
        {% block stylesheets %}
            <link href=\"//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css\" rel=\"stylesheet\" id=\"bootstrap-css\">
            <link href=\"{{ asset(\"css/estiloBase.css\") }}\" rel=\"stylesheet\" type=\"text/css\">
            <link href=\"{{ asset(\"css/estilos.css\") }}\" rel=\"stylesheet\" type=\"text/css\">
            
            <link rel=\"icon\" href=\"{{ asset(\"img/iconoUnraf.png\") }}\">
        {% endblock %}
    </head>
    <body> 
    {% block body %}
    {% if is_granted('ROLE_USER') or is_granted('ROLE_ADMIN') or is_granted('ROLE_SUPERADMIN') %}
    <div id=\"wrapper\" class=\"animate\">

        <nav class=\"navbar header-top fixed-top navbar-expand-lg  navbar-light bg-light\">


            {# Boton responsive #}
            <span class=\"navbar-toggler-icon leftmenutrigger\" id = \"rayitas\"></span>

            {# Boton desplegable #}
            <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarText\" aria-controls=\"navbarText\"
                aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                <span class=\"navbar-toggler-icon\"></span>
            </button>

            {# Título del sistema #}
            <ul class=\"navbar-nav ml-md-auto\">
                <a style=\"margin-left: 10px;margin-top:5px;\" class=\"navbar-brand  color-unraf-light grow\" href=\"{{path('menuPrincipal')}}\">Registro Digital</a>  
            </ul>
     
            {# Div oculto #}
            <div class=\"collapse navbar-collapse\" id=\"navbarText\">
                <ul class=\"navbar-nav animate side-nav \" style = \"background: white;\">

                    {# Parte del perfil #}
                    {# <div class=\"container-fluid perfil\">

                        <div class=\"media perfil-p\"> #}
                        
                            {# Imágen de unraf con border radius #}
                            {# <img class=\"perfil-img\" src=\"{{asset('img/iconoUnraf.png')}}\"></img> #}

                            {# email #}
                            {# <p class=\"perfil-email text-secondary\">{{ app.user.email|replace({'@unraf.edu.ar': ''})}}</p>
                        </div>
                    <hr>
                    </div> #}
                    
                    {# Home #}
                    <li id=\"menuDocumento\" class=\"nav-item perfil-p \">
                        <a class=\"nav-link\" href=\"{{path('menuPrincipal')}}\"><button class=\"btn perfil-btn-light\" ><i class=\"fas fa-home\" style = \"color: #0F9FA8;\"></i></button>Inicio</a>
                    </li>


                    {% if is_granted('ROLE_ADMIN') %}
                    {# Titulaciones de egresados #}
                    <li id=\"menuDocumento\" class=\"nav-item perfil-p mt-2\">
                        <a class=\"nav-link \" href=\"{{path('verEgresados')}}\"><button class=\"btn perfil-btn-light\" ><i class=\"fas fa-graduation-cap\" ></i></button>Titulaciones</a>
                    </li>

                    {# Graduados #}
                    <li id=\"menuDocumento\" class=\"nav-item perfil-p mt-2\">
                        <a class=\"nav-link \" href=\"{{path('verGraduados')}}\"><button class=\"btn perfil-btn-light\" ><i class=\"fas fa-graduation-cap\" ></i></button>Graduados</a>
                    </li>
                    
                    {# Datos académicos #}
                    <li id=\"menuDocumento\" class=\"nav-item perfil-p mt-2\">
                        <a class=\"nav-link\" href=\"{{path('datosAcademicos')}}\"><button class=\"btn perfil-btn-light\" ><i class=\"fas fa-user-graduate\"></i></button>Datos académicos</a>
                    </li>
                    {% endif %}

                    {% if is_granted('ROLE_SUPERADMIN') %}
                    {# Roles #}
                    <li id=\"menuDocumento\" class=\"nav-item perfil-p mt-2\">
                        <a class=\"nav-link\" href=\"{{path('roles')}}\"><button class=\"btn perfil-btn-light\" ><i class=\"fas fa-user\"></i></button>Rol de usuarios</a>
                    </li>
                    {% endif %}
                  

                    {# Rol debajo de todo #}
                    {# {% set roles = app.user.roles %} #}
                    {# <li class=\"nav-item perfil-rol\">
                        <h6>{{roles|last|slice(5,10)}}</h6>
                    </li> #}

                </ul>  
                <ul class=\"navbar-nav ml-auto\">
                    <li class=\"nav-item dropdown\">
                        <a class=\"nav-link\" aria-haspopup=\"true\" aria-expanded=\"false\"  data-toggle=\"dropdown\" href=\"#\"><button class=\"btn perfil-btn-tomato\"><i class=\"fas fa-user\"></i></button></a>

                        <div class=\"dropdown-menu pers-drop-down\" aria-labelledby=\"navbarDropdownMenuLink\">
                            {# Parte del perfil #}
                            <div class=\"container-fluid user-perfil\" style = \"padding: 5px;\">

                                <div class=\"media\">
                                    {# Imágen de unraf con border radius #}
                                    <img class=\"perfil-img\" src=\"{{asset('img/iconoUnraf.png')}}\" style = \"padding: 1px;\"></img>
                                    {# email #}
                                    <p class=\"perfil-email text-secondary\">{{ app.user.email|replace({'@unraf.edu.ar': ''})}}</p>
                                </div>
                                <p style=\"font-size: 10px;\" class=\"text-secondary text-right mt-1\">ROL: {{app.user.roles|last|slice(5,10)}}</p>
                                <hr>
                                <div class = \"text-center\">
                                    <a class=\"user-link\" style = \"font-size: 18px;\" href=\"{{path('backIntranet')}}\"><i class=\"fas fa-hand-point-left\"></i> Intranet</a>
                                </div>
                                
                            </div>
                        </div>
                    </li>
                </ul>
                
                  {# <a class=\"nav-link itemMenu\" style=\"color:grey;\" href=\"#\"> 
                            Perfil: {{rolPrincipal|slice(5,rolPrincipal|length)|capitalize}}</a>
                            <a style=\"background-color:#0F9FA8;color:white;\" class=\"nav-link\" href=\"#\">
                            <img src=\"#\" class=\"svg\" width=\"18\" alt=\"P\">Volver a intranet</a> #}
            </div>
        </nav>
    </div>
        {% for message in app.flashes('correcto') %}
                <div id=\"notificacion\" class=\"container alert alert-success mt-3 wobble-vertical\">
                    <a href=\"#\" class=\"close\" data-dismiss=\"alert\" aria-label=\"close\">&times;</a>
                    {{ message }}
                </div>
            {% endfor %}
            {% for message in app.flashes('error') %}
                <div id=\"notificacion\" class=\"container alert alert-danger mt-3 wobble-vertical\">
                    <a href=\"#\" class=\"close\" data-dismiss=\"alert\" aria-label=\"close\">&times;</a>
                    {{ message }}
                </div>
            {% endfor %}
            {% for message in app.flashes('warning') %}
                <div id=\"notificacion\" class=\"container alert alert-warning mt-3 wobble-vertical\">
                    <a href=\"#\" class=\"close\" data-dismiss=\"alert\" aria-label=\"close\">&times;</a>
                    {{ message }}
                </div>
        {% endfor %}
                
        
    {% endif %}   
    {% endblock %}
        {% block javascripts %} 
            <script src=\"https://intranet.unraf.edu.ar/RegistroDigital/public/pdfThumbnails/pdfThumbnails.js\" data-pdfjs-src=\"https://intranet.unraf.edu.ar/RegistroDigital/public/pdfThumbnails/pdf.js/build/pdf.js\"></script>
            <script
                src=\"https://code.jquery.com/jquery-3.5.1.min.js\"
                integrity=\"sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=\"
                crossorigin=\"anonymous\"></script> 
            <script src=\"{{ asset(\"js/accionesDinamicas.js\") }}\"></script>
            <script src= \"{{asset('js/accionesQuery.js')}}\"></script>
            <script type=\"text/javascript\" src=\"//cdnjs.cloudflare.com/ajax/libs/moment.js/2.15.2/moment.min.js\"></script>
            <script src=\"https://use.fontawesome.com/releases/v5.15.2/js/all.js\" data-search-pseudo-elements></script>
            <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js\" integrity=\"sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx\" crossorigin=\"anonymous\"></script>
        {% endblock %}
        
    </body>
</html>
", "base.html.twig", "/var/www/html/RegistroDigital/templates/base.html.twig");
    }
}
