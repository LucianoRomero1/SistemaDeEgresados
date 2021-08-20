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

/* egresado/verEgresados.html.twig */
class __TwigTemplate_f85abb0dde1a3a991755afbef14ae23efa166707cf50be3c7f10a6035816f9fb extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 2
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "egresado/verEgresados.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "egresado/verEgresados.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "egresado/verEgresados.html.twig", 2);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Registro Digital - Ver Titulaciones";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 6
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 7
        $this->displayParentBlock("body", $context, $blocks);
        echo "
<div class = \"container-fluid\">
    <div class=\"bordeSombreado  divBuscar\">
        ";
        // line 10
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formulario"]) || array_key_exists("formulario", $context) ? $context["formulario"] : (function () { throw new RuntimeError('Variable "formulario" does not exist.', 10, $this->source); })()), 'form_start', ["enctype" => "multipart/form-data"]);
        echo "
        <div class=\"row\">
            <div class=\"col-sm-6\">
                <h6 class = \"text-center\" style=\"color:#306086\">Búsqueda</h6>
                <div class = \"media\">
                    ";
        // line 15
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formulario"]) || array_key_exists("formulario", $context) ? $context["formulario"] : (function () { throw new RuntimeError('Variable "formulario" does not exist.', 15, $this->source); })()), "buscar", [], "any", false, false, false, 15), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Buscar por nombre..."]]);
        echo "  
                    ";
        // line 16
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formulario"]) || array_key_exists("formulario", $context) ? $context["formulario"] : (function () { throw new RuntimeError('Variable "formulario" does not exist.', 16, $this->source); })()), "Buscar", [], "any", false, false, false, 16), 'widget', ["attr" => ["class" => "btn btn-buscar"]]);
        echo " 
                </div>
            </div>
            <div class=\"col-sm-6\">
                <h6 style=\"color:#306086\" class = \"text-center\">Crear nueva titulación </h6>
                <div class = \"text-center\">
                    <a class = \"btn botonCeleste ancho text-white grow text-center\" style = \"\" href = \"";
        // line 22
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("altaDatosPersonales");
        echo "\">Nueva titulación</a>
                </div>
            </div>
        </div>
        <br>
        ";
        // line 27
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formulario"]) || array_key_exists("formulario", $context) ? $context["formulario"] : (function () { throw new RuntimeError('Variable "formulario" does not exist.', 27, $this->source); })()), 'form_end');
        echo "
        <div class = \"m-2\">
            <b style = \"color: #0F9FA8;\"> Cantidad de titulaciones cargadas: ";
        // line 29
        echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["egresados"]) || array_key_exists("egresados", $context) ? $context["egresados"] : (function () { throw new RuntimeError('Variable "egresados" does not exist.', 29, $this->source); })())), "html", null, true);
        echo " </b>
        </div>
    </div> 
    <br>
    <table class=\"table table-borderless mt-2\">
            <thead class = \"text-white\" style = \"background-color: #0F9FA8;\">
                    <th>Nº registro</th>
                    <th>Apellido</th>
                    <th>Nombre</th>
                    <th>Nº documento</th>
                    <th style=\"text-align: center;\">Datos Egresado</th>
                    <th style=\"text-align: center;\">Archivos</th>
                    <th style=\"text-align: center;\">Generar PDF</th>
                    <th style=\"text-align: center;\">Eliminar</th>
                </tr>
            </thead>
        
        <tbody id=\"myTable\">
            ";
        // line 47
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["egresados"]) || array_key_exists("egresados", $context) ? $context["egresados"] : (function () { throw new RuntimeError('Variable "egresados" does not exist.', 47, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["egresado"]) {
            // line 48
            echo "            <tr>
                <th class = \"pl-3\">";
            // line 49
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["egresado"], "id", [], "any", false, false, false, 49), "html", null, true);
            echo "</th>
                <td>";
            // line 50
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["egresado"], "apellido", [], "any", false, false, false, 50), "html", null, true);
            echo "</td>
                <td>";
            // line 51
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["egresado"], "nombre", [], "any", false, false, false, 51), "html", null, true);
            echo "</td>
                <td>";
            // line 52
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["egresado"], "dni", [], "any", false, false, false, 52), "html", null, true);
            echo "</td>
            
                <td style=\"text-align: center;\">
                    <a class =\"btn grow\" href=\"";
            // line 55
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("modificarDatosPersonales", ["id" => twig_get_attribute($this->env, $this->source, $context["egresado"], "id", [], "any", false, false, false, 55)]), "html", null, true);
            echo "\"><i class=\"fas fa-user-edit mb-3\" data-toggle=\"tooltip\" data-placement=\"left\" data-html=\"true\" title=\"Modificar datos personales\" style = \"font-size: 20px;color: #0F9FA8;\"></i></a>
                    <a class =\"btn grow\" href=\"";
            // line 56
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("modificarDatosAcademicos", ["id" => twig_get_attribute($this->env, $this->source, $context["egresado"], "id", [], "any", false, false, false, 56)]), "html", null, true);
            echo "\"><i class=\"fas fa-user-graduate mb-3\"  data-toggle=\"tooltip\" data-placement=\"bottom\" data-html=\"true\" title=\"Modificar datos academicos\" style = \"font-size: 20px;color: #0F9FA8;\"></i></a>
                    <a class =\"btn grow\" href=\"";
            // line 57
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("modificarDatosAdministrativos", ["id" => twig_get_attribute($this->env, $this->source, $context["egresado"], "id", [], "any", false, false, false, 57)]), "html", null, true);
            echo "\"><i class=\"fas fa-user-cog mb-3\"  data-toggle=\"tooltip\" data-placement=\"right\" data-html=\"true\" title=\"Modificar datos administrativos\" style = \"font-size: 20px; color: #0F9FA8;\" ></i></a>
                </td>
                <td style=\"text-align: center;\"><a class =\"btn grow\" href=\"";
            // line 59
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("modificarArchivos", ["id" => twig_get_attribute($this->env, $this->source, $context["egresado"], "id", [], "any", false, false, false, 59)]), "html", null, true);
            echo "\"><i class=\"fas fa-file-alt mb-3\"  data-toggle=\"tooltip\" data-placement=\"right\" data-html=\"true\" title=\"Modificar archivos\" style = \"font-size: 20px; color: #FEB413;\"></i></a></td>
                <td style=\"text-align: center;\"><a class =\"btn grow\" href=\"";
            // line 60
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("generatePdf", ["id" => twig_get_attribute($this->env, $this->source, $context["egresado"], "id", [], "any", false, false, false, 60)]), "html", null, true);
            echo "\"><i class=\"fas fa-file-pdf mb-3\"  data-toggle=\"tooltip\" data-placement=\"right\" data-html=\"true\" title=\"Generar PDF\" style = \"font-size: 20px; color: #306086;\"></i></a></td>
                <td style=\"text-align: center;\"><a class =\"btn grow\" onclick=\"DeleteFunction(";
            // line 61
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["egresado"], "id", [], "any", false, false, false, 61), "html", null, true);
            echo ")\"><i class=\" fas fa-trash text-danger\" style = \"font-size: 20px;\"></i></a></td>   
            ";
            // line 73
            echo "                
            </tr>
        
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['egresado'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 77
        echo "        </tbody>

    </table> 
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 82
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 83
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
<script src= \"";
        // line 84
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/deleteEgresado.js"), "html", null, true);
        echo "\"></script> 
<script src = \"";
        // line 85
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/popup.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "egresado/verEgresados.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  241 => 85,  237 => 84,  233 => 83,  223 => 82,  209 => 77,  200 => 73,  196 => 61,  192 => 60,  188 => 59,  183 => 57,  179 => 56,  175 => 55,  169 => 52,  165 => 51,  161 => 50,  157 => 49,  154 => 48,  150 => 47,  129 => 29,  124 => 27,  116 => 22,  107 => 16,  103 => 15,  95 => 10,  89 => 7,  79 => 6,  60 => 4,  37 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("
{% extends 'base.html.twig' %}

{% block title %}Registro Digital - Ver Titulaciones{% endblock %}

{% block body %}
{{parent()}}
<div class = \"container-fluid\">
    <div class=\"bordeSombreado  divBuscar\">
        {{ form_start(formulario, {'enctype':'multipart/form-data'})}}
        <div class=\"row\">
            <div class=\"col-sm-6\">
                <h6 class = \"text-center\" style=\"color:#306086\">Búsqueda</h6>
                <div class = \"media\">
                    {{ form_widget(formulario.buscar, {attr: {class: 'form-control',placeholder: 'Buscar por nombre...'} }) }}  
                    {{ form_widget(formulario.Buscar, {attr: {class: 'btn btn-buscar'} }) }} 
                </div>
            </div>
            <div class=\"col-sm-6\">
                <h6 style=\"color:#306086\" class = \"text-center\">Crear nueva titulación </h6>
                <div class = \"text-center\">
                    <a class = \"btn botonCeleste ancho text-white grow text-center\" style = \"\" href = \"{{path('altaDatosPersonales')}}\">Nueva titulación</a>
                </div>
            </div>
        </div>
        <br>
        {{ form_end(formulario) }}
        <div class = \"m-2\">
            <b style = \"color: #0F9FA8;\"> Cantidad de titulaciones cargadas: {{egresados|length}} </b>
        </div>
    </div> 
    <br>
    <table class=\"table table-borderless mt-2\">
            <thead class = \"text-white\" style = \"background-color: #0F9FA8;\">
                    <th>Nº registro</th>
                    <th>Apellido</th>
                    <th>Nombre</th>
                    <th>Nº documento</th>
                    <th style=\"text-align: center;\">Datos Egresado</th>
                    <th style=\"text-align: center;\">Archivos</th>
                    <th style=\"text-align: center;\">Generar PDF</th>
                    <th style=\"text-align: center;\">Eliminar</th>
                </tr>
            </thead>
        
        <tbody id=\"myTable\">
            {% for egresado in egresados %}
            <tr>
                <th class = \"pl-3\">{{egresado.id}}</th>
                <td>{{egresado.apellido}}</td>
                <td>{{egresado.nombre}}</td>
                <td>{{egresado.dni}}</td>
            
                <td style=\"text-align: center;\">
                    <a class =\"btn grow\" href=\"{{path('modificarDatosPersonales', {'id': egresado.id})}}\"><i class=\"fas fa-user-edit mb-3\" data-toggle=\"tooltip\" data-placement=\"left\" data-html=\"true\" title=\"Modificar datos personales\" style = \"font-size: 20px;color: #0F9FA8;\"></i></a>
                    <a class =\"btn grow\" href=\"{{path('modificarDatosAcademicos', {'id': egresado.id})}}\"><i class=\"fas fa-user-graduate mb-3\"  data-toggle=\"tooltip\" data-placement=\"bottom\" data-html=\"true\" title=\"Modificar datos academicos\" style = \"font-size: 20px;color: #0F9FA8;\"></i></a>
                    <a class =\"btn grow\" href=\"{{path('modificarDatosAdministrativos', {'id': egresado.id})}}\"><i class=\"fas fa-user-cog mb-3\"  data-toggle=\"tooltip\" data-placement=\"right\" data-html=\"true\" title=\"Modificar datos administrativos\" style = \"font-size: 20px; color: #0F9FA8;\" ></i></a>
                </td>
                <td style=\"text-align: center;\"><a class =\"btn grow\" href=\"{{path('modificarArchivos', {'id': egresado.id})}}\"><i class=\"fas fa-file-alt mb-3\"  data-toggle=\"tooltip\" data-placement=\"right\" data-html=\"true\" title=\"Modificar archivos\" style = \"font-size: 20px; color: #FEB413;\"></i></a></td>
                <td style=\"text-align: center;\"><a class =\"btn grow\" href=\"{{path('generatePdf', {'id': egresado.id})}}\"><i class=\"fas fa-file-pdf mb-3\"  data-toggle=\"tooltip\" data-placement=\"right\" data-html=\"true\" title=\"Generar PDF\" style = \"font-size: 20px; color: #306086;\"></i></a></td>
                <td style=\"text-align: center;\"><a class =\"btn grow\" onclick=\"DeleteFunction({{egresado.id}})\"><i class=\" fas fa-trash text-danger\" style = \"font-size: 20px;\"></i></a></td>   
            {# {% else %}
                
                <td style=\"text-align: center;\">
                    <a class =\"btn grow\" href=\"#\"><i class=\"fas fa-user-edit mb-3\" style = \"font-size: 20px;color: grey;\" data-toggle=\"tooltip\" data-placement=\"left\" data-html=\"true\" title=\"No tiene el rol necesario para esta acción\"></i></a>
                    <a class =\"btn grow\" href=\"#\"><i class=\"fas fa-user-graduate mb-3\"   style = \"font-size: 20px;color: grey;\" data-toggle=\"tooltip\" data-placement=\"left\" data-html=\"true\" title=\"No tiene el rol necesario para esta acción\"></i></a>
                    <a class =\"btn grow\" href=\"#\"><i class=\"fas fa-user-cog mb-3\" style = \"font-size: 20px; color: grey;\"data-toggle=\"tooltip\" data-placement=\"left\" data-html=\"true\" title=\"No tiene el rol necesario para esta acción\" ></i></a>
                </td>
                <td style=\"text-align: center;\"><a class =\"btn grow\" href=\"#\"><i class=\"fas fa-file-alt mb-3\" style = \"font-size: 20px; color: grey\" data-toggle=\"tooltip\" data-placement=\"left\" data-html=\"true\" title=\"No tiene el rol necesario para esta acción\"></i></a></td>
                <td style=\"text-align: center;\"><a class =\"btn grow\" href=\"#\"><i class=\"fas fa-file-pdf mb-3\" style = \"font-size: 20px; color: grey\" data-toggle=\"tooltip\" data-placement=\"left\" data-html=\"true\" title=\"No tiene el rol necesario para esta acción\"></i></a></td>
                <td style=\"text-align: center;\"><a class =\"btn grow\" onclick=\"#\"><i class=\" fas fa-trash\"   style = \"font-size: 20px; color:grey;\" data-toggle=\"tooltip\" data-placement=\"left\" data-html=\"true\" title=\"No tiene el rol necesario para esta acción\"></i></a></td>    
            {% endif %} #}
                
            </tr>
        
            {% endfor %}
        </tbody>

    </table> 
</div>
{% endblock %}
{% block  javascripts %}
{{parent()}}
<script src= \"{{asset('js/deleteEgresado.js')}}\"></script> 
<script src = \"{{asset('js/popup.js')}}\"></script>
{% endblock %}", "egresado/verEgresados.html.twig", "/var/www/html/RegistroDigital/templates/egresado/verEgresados.html.twig");
    }
}
