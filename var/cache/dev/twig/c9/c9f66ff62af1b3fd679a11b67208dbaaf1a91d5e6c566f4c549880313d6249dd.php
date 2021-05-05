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

/* egresado/modificarDatosPersonales.html.twig */
class __TwigTemplate_3876525678ea20f2d9ca1d1770b83c6999737494a53a26d1dca8c22884d74e6f extends Template
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
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "egresado/modificarDatosPersonales.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "egresado/modificarDatosPersonales.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "egresado/modificarDatosPersonales.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Registro Digital - Modificar Datos Personales ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        $this->displayParentBlock("body", $context, $blocks);
        echo "
<h1 class = \"text-center\">Modificar datos personales de: ";
        // line 7
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["egresado"]) || array_key_exists("egresado", $context) ? $context["egresado"] : (function () { throw new RuntimeError('Variable "egresado" does not exist.', 7, $this->source); })()), "nombre", [], "any", false, false, false, 7), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["egresado"]) || array_key_exists("egresado", $context) ? $context["egresado"] : (function () { throw new RuntimeError('Variable "egresado" does not exist.', 7, $this->source); })()), "apellido", [], "any", false, false, false, 7), "html", null, true);
        echo "</h1>
<div class = \"container\" id = \"divFormulario\">
    <a href = \"";
        // line 9
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("verEgresados");
        echo "\"><i class=\"fas fa-arrow-left grow\" style = \"font-size:30px; color: #0F9FA8\"></i></a>
    
    ";
        // line 11
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formulario"]) || array_key_exists("formulario", $context) ? $context["formulario"] : (function () { throw new RuntimeError('Variable "formulario" does not exist.', 11, $this->source); })()), 'form_start', ["enctype" => "multipart/form-data"]);
        echo "
        <div class = \"row mt-3 justify-content-center\">
            <div class = \"col-sm-3\">
                <h6 class = \"text-secondary  mt-2 ml-1 text-left\" style = \"font-size: 14px;\">Nombre<h6>
                ";
        // line 15
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formulario"]) || array_key_exists("formulario", $context) ? $context["formulario"] : (function () { throw new RuntimeError('Variable "formulario" does not exist.', 15, $this->source); })()), "nombre", [], "any", false, false, false, 15), 'widget', ["attr" => ["class" => "form-control camposEstandar"]]);
        echo "
                
            </div>
            <div class = \"col-sm-2\"></div>
            <div class = \"col-sm-3\">
                <h6 class = \"text-secondary  mt-2 text-left\" style = \"font-size: 14px;\">Apellido<h6>
                ";
        // line 21
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formulario"]) || array_key_exists("formulario", $context) ? $context["formulario"] : (function () { throw new RuntimeError('Variable "formulario" does not exist.', 21, $this->source); })()), "apellido", [], "any", false, false, false, 21), 'widget', ["attr" => ["class" => "form-control camposEstandar"]]);
        echo "   
                
            </div>
        </div>
        <div class = \"row mt-3 justify-content-center \">
            <div class = \"col-sm-3\" >
                ";
        // line 27
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formulario"]) || array_key_exists("formulario", $context) ? $context["formulario"] : (function () { throw new RuntimeError('Variable "formulario" does not exist.', 27, $this->source); })()), "tipoDocumentoIdentidad", [], "any", false, false, false, 27), 'widget', ["attr" => ["class" => "form-control camposEstandar"]]);
        echo "
            </div>
            <div class =\"col-sm-2\"></div>
            <div class = \"col-sm-3\">
                ";
        // line 31
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formulario"]) || array_key_exists("formulario", $context) ? $context["formulario"] : (function () { throw new RuntimeError('Variable "formulario" does not exist.', 31, $this->source); })()), "dni", [], "any", false, false, false, 31), 'widget', ["attr" => ["class" => "form-control camposEstandar", "placeholder" => "Doc de identidad"]]);
        echo "
            </div>
        </div>
        <div class = \"row mt-3 justify-content-center\">
            <div class = \"col-sm-2\"></div>
            <div class =\"col-sm-3\">
                <h6 class = \"text-secondary  mt-2 ml-1 text-left\" style = \"font-size: 14px;\">Fecha de nacimiento<h6>
                ";
        // line 38
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formulario"]) || array_key_exists("formulario", $context) ? $context["formulario"] : (function () { throw new RuntimeError('Variable "formulario" does not exist.', 38, $this->source); })()), "fechaNacimiento", [], "any", false, false, false, 38), 'widget', ["attr" => ["class" => "form-control camposEstandar", "style" => "cursor: text;"]]);
        echo "
                
            </div>
            <div class = \"col-sm-2\"></div>
        </div>
        <div class = \"row mt-3 justify-content-center\">
            <div class = \"col-sm-3\">
                <h6 class = \"text-secondary mt-2 text-left ml-1\" style = \"font-size: 14px;\">Anteponer código de área, sin 15 ni espacios<h6>
                ";
        // line 46
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formulario"]) || array_key_exists("formulario", $context) ? $context["formulario"] : (function () { throw new RuntimeError('Variable "formulario" does not exist.', 46, $this->source); })()), "telefono", [], "any", false, false, false, 46), 'widget', ["attr" => ["class" => "form-control camposEstandar"]]);
        echo "
            </div>
            <div class = \"col-sm-1\"></div>
            <div class = \"col-sm-4 mt-3\">
                <h6 class = \"text-secondary  mt-2 text-center\" style = \"font-size: 14px;\">Email<h6>
                ";
        // line 51
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formulario"]) || array_key_exists("formulario", $context) ? $context["formulario"] : (function () { throw new RuntimeError('Variable "formulario" does not exist.', 51, $this->source); })()), "email", [], "any", false, false, false, 51), 'widget', ["attr" => ["class" => "form-control camposEstandar"]]);
        echo "     
            </div>
        </div>
        <hr>
        <h6 class = \"text-info ml-5\" style = \"font-size: 14px;\">*Apartado domicilio egresado/a<h6>
        <div class = \"row mt-3 justify-content-center\">
            <div class = \"col-sm-2\"></div>
            <div class = \"col-sm-3\">
                <h6 class = \"text-secondary  mt-2 ml-1 text-left\" style = \"font-size: 14px;\">Nacionalidad<h6>
                ";
        // line 60
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formulario"]) || array_key_exists("formulario", $context) ? $context["formulario"] : (function () { throw new RuntimeError('Variable "formulario" does not exist.', 60, $this->source); })()), "nacionalidad", [], "any", false, false, false, 60), 'widget', ["attr" => ["class" => "form-control camposEstandar"]]);
        echo "
                
            </div>
            <div class = \"col-sm-2\"></div>
        </div>
        <div class = \"row mt-3 justify-content-center\">
            <div class = \"col-sm-3\">
                <h6 class = \"text-secondary  mt-2 ml-1 text-left\" style = \"font-size: 14px;\">Provincia<h6>
                ";
        // line 68
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formulario"]) || array_key_exists("formulario", $context) ? $context["formulario"] : (function () { throw new RuntimeError('Variable "formulario" does not exist.', 68, $this->source); })()), "provincia", [], "any", false, false, false, 68), 'widget', ["attr" => ["class" => "form-control camposEstandar"]]);
        echo "
            </div>
            <div class = \"col-sm-2\"></div>
            <div class = \"col-sm-3\">
                <h6 class = \"text-secondary  mt-2 ml-1 text-left\" style = \"font-size: 14px;\">Ciudad<h6>
                ";
        // line 73
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formulario"]) || array_key_exists("formulario", $context) ? $context["formulario"] : (function () { throw new RuntimeError('Variable "formulario" does not exist.', 73, $this->source); })()), "ciudad", [], "any", false, false, false, 73), 'widget', ["attr" => ["class" => "form-control camposEstandar"]]);
        echo " 
            </div>
        </div>
        <div class = \"row mt-3 justify-content-center\">
            <div class = \"col-sm-3\">
                <h6 class = \"text-secondary mt-2 ml-1 text-left\" style = \"font-size: 14px;\">Calle<h6>
                ";
        // line 79
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formulario"]) || array_key_exists("formulario", $context) ? $context["formulario"] : (function () { throw new RuntimeError('Variable "formulario" does not exist.', 79, $this->source); })()), "calle", [], "any", false, false, false, 79), 'widget', ["attr" => ["class" => "form-control camposEstandar", "placeholder" => "Calle"]]);
        echo "
            </div>
            <div class = \"col-sm-1\"></div>
            <div class = \"col-sm-2\">
                <h6 class = \"text-secondary mt-2 ml-1 text-left\" style = \"font-size: 14px;\">Nro de domicilio<h6>
                ";
        // line 84
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formulario"]) || array_key_exists("formulario", $context) ? $context["formulario"] : (function () { throw new RuntimeError('Variable "formulario" does not exist.', 84, $this->source); })()), "nroDomicilio", [], "any", false, false, false, 84), 'widget', ["attr" => ["class" => "form-control camposEstandar"]]);
        echo "
            </div>
              <div class = \"col-sm-1\">
                <h6 class = \"text-secondary mt-2 ml-1 text-left\" style = \"font-size: 14px;\">Piso<h6>
                ";
        // line 88
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formulario"]) || array_key_exists("formulario", $context) ? $context["formulario"] : (function () { throw new RuntimeError('Variable "formulario" does not exist.', 88, $this->source); })()), "piso", [], "any", false, false, false, 88), 'widget', ["attr" => ["class" => "form-control camposEstandar"]]);
        echo " 
            </div>
            <div class = \"col-sm-1\">
                <h6 class = \"text-secondary mt-2 ml-1 text-left\" style = \"font-size: 14px;\">Depto<h6>
                ";
        // line 92
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formulario"]) || array_key_exists("formulario", $context) ? $context["formulario"] : (function () { throw new RuntimeError('Variable "formulario" does not exist.', 92, $this->source); })()), "depto", [], "any", false, false, false, 92), 'widget', ["attr" => ["class" => "form-control camposEstandar"]]);
        echo " 
            </div>
        </div>
        <div class = \"container mt-4 text-center\">
            ";
        // line 96
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formulario"]) || array_key_exists("formulario", $context) ? $context["formulario"] : (function () { throw new RuntimeError('Variable "formulario" does not exist.', 96, $this->source); })()), "Aceptar", [], "any", false, false, false, 96), 'widget', ["attr" => ["class" => "btn btn-outline-info btn-lg"]]);
        echo "
        </div>
    ";
        // line 98
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formulario"]) || array_key_exists("formulario", $context) ? $context["formulario"] : (function () { throw new RuntimeError('Variable "formulario" does not exist.', 98, $this->source); })()), 'form_end');
        echo "

</div>
<br>
<br>
<script src = \"";
        // line 103
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/validaciones.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "egresado/modificarDatosPersonales.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  247 => 103,  239 => 98,  234 => 96,  227 => 92,  220 => 88,  213 => 84,  205 => 79,  196 => 73,  188 => 68,  177 => 60,  165 => 51,  157 => 46,  146 => 38,  136 => 31,  129 => 27,  120 => 21,  111 => 15,  104 => 11,  99 => 9,  92 => 7,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Registro Digital - Modificar Datos Personales {% endblock %}

{% block body %}
{{parent()}}
<h1 class = \"text-center\">Modificar datos personales de: {{egresado.nombre}} {{egresado.apellido}}</h1>
<div class = \"container\" id = \"divFormulario\">
    <a href = \"{{path('verEgresados')}}\"><i class=\"fas fa-arrow-left grow\" style = \"font-size:30px; color: #0F9FA8\"></i></a>
    
    {{ form_start(formulario, {'enctype':'multipart/form-data'})}}
        <div class = \"row mt-3 justify-content-center\">
            <div class = \"col-sm-3\">
                <h6 class = \"text-secondary  mt-2 ml-1 text-left\" style = \"font-size: 14px;\">Nombre<h6>
                {{ form_widget(formulario.nombre, {attr: {class: 'form-control camposEstandar'}})}}
                
            </div>
            <div class = \"col-sm-2\"></div>
            <div class = \"col-sm-3\">
                <h6 class = \"text-secondary  mt-2 text-left\" style = \"font-size: 14px;\">Apellido<h6>
                {{ form_widget(formulario.apellido, {attr: {class: 'form-control camposEstandar'}})}}   
                
            </div>
        </div>
        <div class = \"row mt-3 justify-content-center \">
            <div class = \"col-sm-3\" >
                {{ form_widget(formulario.tipoDocumentoIdentidad, {attr: {class: 'form-control camposEstandar'}})}}
            </div>
            <div class =\"col-sm-2\"></div>
            <div class = \"col-sm-3\">
                {{ form_widget(formulario.dni, {attr: {class: 'form-control camposEstandar', placeholder: 'Doc de identidad'}})}}
            </div>
        </div>
        <div class = \"row mt-3 justify-content-center\">
            <div class = \"col-sm-2\"></div>
            <div class =\"col-sm-3\">
                <h6 class = \"text-secondary  mt-2 ml-1 text-left\" style = \"font-size: 14px;\">Fecha de nacimiento<h6>
                {{ form_widget(formulario.fechaNacimiento, {attr: {class: 'form-control camposEstandar', style: 'cursor: text;'}})}}
                
            </div>
            <div class = \"col-sm-2\"></div>
        </div>
        <div class = \"row mt-3 justify-content-center\">
            <div class = \"col-sm-3\">
                <h6 class = \"text-secondary mt-2 text-left ml-1\" style = \"font-size: 14px;\">Anteponer código de área, sin 15 ni espacios<h6>
                {{ form_widget(formulario.telefono, {attr: {class: 'form-control camposEstandar'}})}}
            </div>
            <div class = \"col-sm-1\"></div>
            <div class = \"col-sm-4 mt-3\">
                <h6 class = \"text-secondary  mt-2 text-center\" style = \"font-size: 14px;\">Email<h6>
                {{ form_widget(formulario.email, {attr: {class: 'form-control camposEstandar'}})}}     
            </div>
        </div>
        <hr>
        <h6 class = \"text-info ml-5\" style = \"font-size: 14px;\">*Apartado domicilio egresado/a<h6>
        <div class = \"row mt-3 justify-content-center\">
            <div class = \"col-sm-2\"></div>
            <div class = \"col-sm-3\">
                <h6 class = \"text-secondary  mt-2 ml-1 text-left\" style = \"font-size: 14px;\">Nacionalidad<h6>
                {{ form_widget(formulario.nacionalidad, {attr: {class: 'form-control camposEstandar'}})}}
                
            </div>
            <div class = \"col-sm-2\"></div>
        </div>
        <div class = \"row mt-3 justify-content-center\">
            <div class = \"col-sm-3\">
                <h6 class = \"text-secondary  mt-2 ml-1 text-left\" style = \"font-size: 14px;\">Provincia<h6>
                {{ form_widget(formulario.provincia, {attr: {class: 'form-control camposEstandar'}})}}
            </div>
            <div class = \"col-sm-2\"></div>
            <div class = \"col-sm-3\">
                <h6 class = \"text-secondary  mt-2 ml-1 text-left\" style = \"font-size: 14px;\">Ciudad<h6>
                {{ form_widget(formulario.ciudad, {attr: {class: 'form-control camposEstandar'}})}} 
            </div>
        </div>
        <div class = \"row mt-3 justify-content-center\">
            <div class = \"col-sm-3\">
                <h6 class = \"text-secondary mt-2 ml-1 text-left\" style = \"font-size: 14px;\">Calle<h6>
                {{ form_widget(formulario.calle, {attr: {class: 'form-control camposEstandar', placeholder: 'Calle'}})}}
            </div>
            <div class = \"col-sm-1\"></div>
            <div class = \"col-sm-2\">
                <h6 class = \"text-secondary mt-2 ml-1 text-left\" style = \"font-size: 14px;\">Nro de domicilio<h6>
                {{ form_widget(formulario.nroDomicilio, {attr: {class: 'form-control camposEstandar'}})}}
            </div>
              <div class = \"col-sm-1\">
                <h6 class = \"text-secondary mt-2 ml-1 text-left\" style = \"font-size: 14px;\">Piso<h6>
                {{ form_widget(formulario.piso, {attr: {class: 'form-control camposEstandar'}})}} 
            </div>
            <div class = \"col-sm-1\">
                <h6 class = \"text-secondary mt-2 ml-1 text-left\" style = \"font-size: 14px;\">Depto<h6>
                {{ form_widget(formulario.depto, {attr: {class: 'form-control camposEstandar'}})}} 
            </div>
        </div>
        <div class = \"container mt-4 text-center\">
            {{ form_widget(formulario.Aceptar, {attr: {class: 'btn btn-outline-info btn-lg'}})}}
        </div>
    {{ form_end(formulario) }}

</div>
<br>
<br>
<script src = \"{{asset('js/validaciones.js')}}\"></script>
{% endblock %}
", "egresado/modificarDatosPersonales.html.twig", "/var/www/html/RegistroDigital/templates/egresado/modificarDatosPersonales.html.twig");
    }
}
