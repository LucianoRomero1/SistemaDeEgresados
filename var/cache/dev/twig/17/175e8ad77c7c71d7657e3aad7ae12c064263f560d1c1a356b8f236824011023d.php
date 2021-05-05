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

/* egresado/modificarDatosAcademicos.html.twig */
class __TwigTemplate_e4cc1c1aace88e7cea3be0af78afa96fd56479eabecd0e048ef328ac5db0ab66 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "egresado/modificarDatosAcademicos.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "egresado/modificarDatosAcademicos.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "egresado/modificarDatosAcademicos.html.twig", 1);
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

        echo "Registro Digital - Modificar Datos Académicos ";
        
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
<h1 class = \"text-center\">Modificar datos académicos de: ";
        // line 7
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["egresado"]) || array_key_exists("egresado", $context) ? $context["egresado"] : (function () { throw new RuntimeError('Variable "egresado" does not exist.', 7, $this->source); })()), "nombre", [], "any", false, false, false, 7), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["egresado"]) || array_key_exists("egresado", $context) ? $context["egresado"] : (function () { throw new RuntimeError('Variable "egresado" does not exist.', 7, $this->source); })()), "apellido", [], "any", false, false, false, 7), "html", null, true);
        echo "</h1> 
<div class =\"container\" id = \"divFormulario\">
    <a href = \"";
        // line 9
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("verEgresados");
        echo "\"><i class=\"fas fa-arrow-left grow\" style = \"font-size:30px; color: #0F9FA8;\"></i></a>
    
    ";
        // line 11
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formulario"]) || array_key_exists("formulario", $context) ? $context["formulario"] : (function () { throw new RuntimeError('Variable "formulario" does not exist.', 11, $this->source); })()), 'form_start', ["enctype" => "multipart/form-data"]);
        echo "
    <div class = \"row mt-4 justify-content-center\">
        <div class = \"col-sm-6\">
            <h6 class = \"text-secondary text-left ml-1 \">Denominación de la carrera</h6>
            ";
        // line 15
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formulario"]) || array_key_exists("formulario", $context) ? $context["formulario"] : (function () { throw new RuntimeError('Variable "formulario" does not exist.', 15, $this->source); })()), "denominacionCarrera", [], "any", false, false, false, 15), 'widget', ["attr" => ["class" => "form-control camposEstandar carrera"]]);
        echo "
        </div>
        <div class = \"col-sm-1\"></div>
        <div class = \"col-sm-4\">
            <h6 class = \"text-secondary text-left ml-1 \">Tipo de documento emitido</h6>
            ";
        // line 20
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formulario"]) || array_key_exists("formulario", $context) ? $context["formulario"] : (function () { throw new RuntimeError('Variable "formulario" does not exist.', 20, $this->source); })()), "documentoEmitido", [], "any", false, false, false, 20), 'widget', ["attr" => ["class" => "form-control camposEstandar"]]);
        echo "
        </div>
    </div>
    <div class = \"row mt-4 justify-content-center\">
        <div class = \"col-sm-6\">
            <h6 class = \"text-secondary text-left ml-1 \">Título otorgado</h6>
            ";
        // line 26
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formulario"]) || array_key_exists("formulario", $context) ? $context["formulario"] : (function () { throw new RuntimeError('Variable "formulario" does not exist.', 26, $this->source); })()), "tituloOtorgado", [], "any", false, false, false, 26), 'widget', ["attr" => ["class" => "form-control camposEstandar "]]);
        echo "
        </div>
        <div class = \"col-sm-1\"></div>
        <div class = \"col-sm-4\">
             <h6 class = \"text-secondary text-left ml-1 \">Seleccionar</h6>
            ";
        // line 31
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formulario"]) || array_key_exists("formulario", $context) ? $context["formulario"] : (function () { throw new RuntimeError('Variable "formulario" does not exist.', 31, $this->source); })()), "originalDuplicado", [], "any", false, false, false, 31), 'widget', ["attr" => ["class" => "form-control camposEstandar ", "placeholder" => "Titulo Otorgado"]]);
        echo "
        </div>
    </div>
    <div class = \"row mt-4 justify-content-center\">
        <div class = \"col-sm-3\">
            <h6 class = \"text-secondary text-left ml-1 \"> Fecha de egreso </h6>
            ";
        // line 37
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formulario"]) || array_key_exists("formulario", $context) ? $context["formulario"] : (function () { throw new RuntimeError('Variable "formulario" does not exist.', 37, $this->source); })()), "fechaEgreso", [], "any", false, false, false, 37), 'widget', ["attr" => ["class" => "form-control camposEstandar", "style" => "cursor: text;"]]);
        echo "
        </div>
        <div class = \"col-sm-8\"></div>
        <div class = \"col-sm-8\"></div>
    </div>
    <div class = \"container mt-4 \">
        
    </div>
    <div class = \"container mt-5 text-center\">
        ";
        // line 46
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formulario"]) || array_key_exists("formulario", $context) ? $context["formulario"] : (function () { throw new RuntimeError('Variable "formulario" does not exist.', 46, $this->source); })()), "Aceptar", [], "any", false, false, false, 46), 'widget', ["attr" => ["class" => "btn btn-outline-info btn-lg"]]);
        echo "
    </div>
    ";
        // line 48
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formulario"]) || array_key_exists("formulario", $context) ? $context["formulario"] : (function () { throw new RuntimeError('Variable "formulario" does not exist.', 48, $this->source); })()), 'form_end');
        echo "
</div>
<br>
<br>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "egresado/modificarDatosAcademicos.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  162 => 48,  157 => 46,  145 => 37,  136 => 31,  128 => 26,  119 => 20,  111 => 15,  104 => 11,  99 => 9,  92 => 7,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Registro Digital - Modificar Datos Académicos {% endblock %}

{% block body %}
{{parent()}}
<h1 class = \"text-center\">Modificar datos académicos de: {{egresado.nombre}} {{egresado.apellido}}</h1> 
<div class =\"container\" id = \"divFormulario\">
    <a href = \"{{path('verEgresados')}}\"><i class=\"fas fa-arrow-left grow\" style = \"font-size:30px; color: #0F9FA8;\"></i></a>
    
    {{ form_start(formulario, {'enctype':'multipart/form-data'})}}
    <div class = \"row mt-4 justify-content-center\">
        <div class = \"col-sm-6\">
            <h6 class = \"text-secondary text-left ml-1 \">Denominación de la carrera</h6>
            {{ form_widget(formulario.denominacionCarrera, {attr: {class: 'form-control camposEstandar carrera'}})}}
        </div>
        <div class = \"col-sm-1\"></div>
        <div class = \"col-sm-4\">
            <h6 class = \"text-secondary text-left ml-1 \">Tipo de documento emitido</h6>
            {{ form_widget(formulario.documentoEmitido, {attr: {class: 'form-control camposEstandar'}})}}
        </div>
    </div>
    <div class = \"row mt-4 justify-content-center\">
        <div class = \"col-sm-6\">
            <h6 class = \"text-secondary text-left ml-1 \">Título otorgado</h6>
            {{ form_widget(formulario.tituloOtorgado, {attr: {class: 'form-control camposEstandar '}})}}
        </div>
        <div class = \"col-sm-1\"></div>
        <div class = \"col-sm-4\">
             <h6 class = \"text-secondary text-left ml-1 \">Seleccionar</h6>
            {{ form_widget(formulario.originalDuplicado, {attr: {class: 'form-control camposEstandar ', placeholder: 'Titulo Otorgado'}})}}
        </div>
    </div>
    <div class = \"row mt-4 justify-content-center\">
        <div class = \"col-sm-3\">
            <h6 class = \"text-secondary text-left ml-1 \"> Fecha de egreso </h6>
            {{ form_widget(formulario.fechaEgreso, {attr: {class: 'form-control camposEstandar', style: 'cursor: text;'}})}}
        </div>
        <div class = \"col-sm-8\"></div>
        <div class = \"col-sm-8\"></div>
    </div>
    <div class = \"container mt-4 \">
        
    </div>
    <div class = \"container mt-5 text-center\">
        {{ form_widget(formulario.Aceptar, {attr: {class: 'btn btn-outline-info btn-lg'}})}}
    </div>
    {{ form_end(formulario) }}
</div>
<br>
<br>
{% endblock %}", "egresado/modificarDatosAcademicos.html.twig", "/var/www/html/RegistroDigital/templates/egresado/modificarDatosAcademicos.html.twig");
    }
}
