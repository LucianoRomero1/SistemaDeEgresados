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
    ";
        // line 9
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formulario"]) || array_key_exists("formulario", $context) ? $context["formulario"] : (function () { throw new RuntimeError('Variable "formulario" does not exist.', 9, $this->source); })()), 'form_start', ["enctype" => "multipart/form-data"]);
        echo "
    <div class = \"container row mt-3\">
        <div class = \"col-sm-7 media\">
            ";
        // line 12
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formulario"]) || array_key_exists("formulario", $context) ? $context["formulario"] : (function () { throw new RuntimeError('Variable "formulario" does not exist.', 12, $this->source); })()), "buscar", [], "any", false, false, false, 12), 'widget', ["attr" => ["class" => "form-control campoForm", "placeholder" => "Buscar por apellido o por DNI"]]);
        echo "  
            ";
        // line 13
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formulario"]) || array_key_exists("formulario", $context) ? $context["formulario"] : (function () { throw new RuntimeError('Variable "formulario" does not exist.', 13, $this->source); })()), "Buscar", [], "any", false, false, false, 13), 'widget', ["attr" => ["class" => "btn btn-buscar d-inline"]]);
        echo "  
        </div>
        <div class = \"col-sm-3\"></div>
        <div class = \"col-sm-2\">
            <a class = \"btn form-control campoForm nueva\" style = \"background-color: #; color: white;\" href = \"";
        // line 17
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("altaDatosPersonales");
        echo "\">Nueva titulación</a>
        </div>
    </div>
    <hr>
    <div class = \"m-3\">
        <b style = \"color: #0F9FA8;\">Cantidad de titulaciones encontradas: ";
        // line 22
        echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["egresados"]) || array_key_exists("egresados", $context) ? $context["egresados"] : (function () { throw new RuntimeError('Variable "egresados" does not exist.', 22, $this->source); })())), "html", null, true);
        echo " </b>
    </div>
    ";
        // line 24
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formulario"]) || array_key_exists("formulario", $context) ? $context["formulario"] : (function () { throw new RuntimeError('Variable "formulario" does not exist.', 24, $this->source); })()), 'form_end');
        echo "
    

    ";
        // line 28
        echo "    ";
        // line 52
        echo "    <table class=\"table table-borderless mt-2\">
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
        // line 66
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["egresados"]) || array_key_exists("egresados", $context) ? $context["egresados"] : (function () { throw new RuntimeError('Variable "egresados" does not exist.', 66, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["egresado"]) {
            // line 67
            echo "            <tr>
                <th class = \"pl-3\">";
            // line 68
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["egresado"], "id", [], "any", false, false, false, 68), "html", null, true);
            echo "</th>
                <td>";
            // line 69
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["egresado"], "apellido", [], "any", false, false, false, 69), "html", null, true);
            echo "</td>
                <td>";
            // line 70
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["egresado"], "nombre", [], "any", false, false, false, 70), "html", null, true);
            echo "</td>
                <td>";
            // line 71
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["egresado"], "dni", [], "any", false, false, false, 71), "html", null, true);
            echo "</td>
            
                <td style=\"text-align: center;\">
                    <a class =\"btn grow\" href=\"";
            // line 74
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("modificarDatosPersonales", ["id" => twig_get_attribute($this->env, $this->source, $context["egresado"], "id", [], "any", false, false, false, 74)]), "html", null, true);
            echo "\"><i class=\"fas fa-user-edit mb-3\" data-toggle=\"tooltip\" data-placement=\"left\" data-html=\"true\" title=\"Modificar datos personales\" style = \"font-size: 20px;color: #0F9FA8;\"></i></a>
                    <a class =\"btn grow\" href=\"";
            // line 75
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("modificarDatosAcademicos", ["id" => twig_get_attribute($this->env, $this->source, $context["egresado"], "id", [], "any", false, false, false, 75)]), "html", null, true);
            echo "\"><i class=\"fas fa-user-graduate mb-3\"  data-toggle=\"tooltip\" data-placement=\"bottom\" data-html=\"true\" title=\"Modificar datos academicos\" style = \"font-size: 20px;color: #0F9FA8;\"></i></a>
                    <a class =\"btn grow\" href=\"";
            // line 76
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("modificarDatosAdministrativos", ["id" => twig_get_attribute($this->env, $this->source, $context["egresado"], "id", [], "any", false, false, false, 76)]), "html", null, true);
            echo "\"><i class=\"fas fa-user-cog mb-3\"  data-toggle=\"tooltip\" data-placement=\"right\" data-html=\"true\" title=\"Modificar datos administrativos\" style = \"font-size: 20px; color: #0F9FA8;\" ></i></a>
                </td>
                <td style=\"text-align: center;\"><a class =\"btn grow\" href=\"";
            // line 78
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("modificarArchivos", ["id" => twig_get_attribute($this->env, $this->source, $context["egresado"], "id", [], "any", false, false, false, 78)]), "html", null, true);
            echo "\"><i class=\"fas fa-file-alt mb-3\"  data-toggle=\"tooltip\" data-placement=\"right\" data-html=\"true\" title=\"Modificar archivos\" style = \"font-size: 20px; color: #FEB413;\"></i></a></td>
                <td style=\"text-align: center;\"><a class =\"btn grow\" href=\"";
            // line 79
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("generatePdf", ["id" => twig_get_attribute($this->env, $this->source, $context["egresado"], "id", [], "any", false, false, false, 79)]), "html", null, true);
            echo "\"><i class=\"fas fa-file-pdf mb-3\"  data-toggle=\"tooltip\" data-placement=\"right\" data-html=\"true\" title=\"Generar PDF\" style = \"font-size: 20px; color: #306086;\"></i></a></td>
                <td style=\"text-align: center;\"><a class =\"btn grow\" onclick=\"DeleteFunction(";
            // line 80
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["egresado"], "id", [], "any", false, false, false, 80), "html", null, true);
            echo ")\"><i class=\" fas fa-trash text-danger\" style = \"font-size: 20px;\"></i></a></td>   
            ";
            // line 92
            echo "                
            </tr>
        
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['egresado'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 96
        echo "        </tbody>

    </table> 
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 101
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 102
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
<script src= \"";
        // line 103
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/deleteEgresado.js"), "html", null, true);
        echo "\"></script> 
<script src = \"";
        // line 104
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
        return array (  239 => 104,  235 => 103,  231 => 102,  221 => 101,  207 => 96,  198 => 92,  194 => 80,  190 => 79,  186 => 78,  181 => 76,  177 => 75,  173 => 74,  167 => 71,  163 => 70,  159 => 69,  155 => 68,  152 => 67,  148 => 66,  132 => 52,  130 => 28,  124 => 24,  119 => 22,  111 => 17,  104 => 13,  100 => 12,  94 => 9,  89 => 7,  79 => 6,  60 => 4,  37 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("
{% extends 'base.html.twig' %}

{% block title %}Registro Digital - Ver Titulaciones{% endblock %}

{% block body %}
{{parent()}}
<div class = \"container-fluid\">
    {{ form_start(formulario, {'enctype':'multipart/form-data'})}}
    <div class = \"container row mt-3\">
        <div class = \"col-sm-7 media\">
            {{ form_widget(formulario.buscar, {attr: {class: 'form-control campoForm' , placeholder: 'Buscar por apellido o por DNI'} }) }}  
            {{ form_widget(formulario.Buscar, {attr: {class: 'btn btn-buscar d-inline'} }) }}  
        </div>
        <div class = \"col-sm-3\"></div>
        <div class = \"col-sm-2\">
            <a class = \"btn form-control campoForm nueva\" style = \"background-color: #; color: white;\" href = \"{{path('altaDatosPersonales')}}\">Nueva titulación</a>
        </div>
    </div>
    <hr>
    <div class = \"m-3\">
        <b style = \"color: #0F9FA8;\">Cantidad de titulaciones encontradas: {{egresados|length}} </b>
    </div>
    {{ form_end(formulario) }}
    

    {# Esto es el filtro de busqueda, lo dejo comentado por si las dudas #}
    {# <div class=\"\">
        {{ form_start(formulario, {'enctype':'multipart/form-data'})}}
        <div style=\"text-align:center;\" class=\"container-fluid\">
            <h3 style=\"color:#306086\">Busqueda de titulaciones</h3>
        </div>
        <div class=\"container row mt-3\">
            
            <div class=\"col-sm-6\">
                {{ form_widget(formulario.buscar, {attr: {class: 'form-control',placeholder: 'Busque según el filtro aplicado'} }) }}  
            </div>
            <div class=\"col-sm-4\">
                {{ form_widget(formulario.filtrarPor, {attr: {class: 'form-control'} }) }}  
            </div>
            <div class = \"col-sm-2\">
                {{ form_widget(formulario.Buscar, {attr: {class: 'btn btn-outline-info ml-5'} }) }}  
            </div>
        </div>
        <hr>
        <div class = \"m-3\">
            <b style = \"color:#306086\">Cantidad de titulaciones cargadas: {{egresados|length}} </b>
            <a class = \"btn btn-outline-info ml-5 \"  href = \"{{path('altaDatosPersonales')}}\">Nueva titulación</a>
        </div>
        {{ form_end(formulario) }}
    </div> #}
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
