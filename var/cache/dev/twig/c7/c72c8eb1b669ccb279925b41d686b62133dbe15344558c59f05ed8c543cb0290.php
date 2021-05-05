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

/* graduado/titulacionesGraduado.html.twig */
class __TwigTemplate_3187b8eacf65ac5fae389f792eab357a971769d114c9b263d85e37e44b4900ab extends Template
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
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "graduado/titulacionesGraduado.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "graduado/titulacionesGraduado.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "graduado/titulacionesGraduado.html.twig", 1);
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

        echo "Registro Digital - Titulaciones Graduado/a";
        
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
<h1 class = \"text-center\" >Alta datos personales graduado/a</h1>
<div class = \"container\" id = \"divFormulario\"> 
    ";
        // line 9
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formulario"]) || array_key_exists("formulario", $context) ? $context["formulario"] : (function () { throw new RuntimeError('Variable "formulario" does not exist.', 9, $this->source); })()), 'form_start', ["enctype" => "multipart/form-data"]);
        echo "
    <div class = \"container row mt-3 justify-content-center\">
        ";
        // line 12
        echo "        ";
        // line 36
        echo "    <div id = \"\">
        <div class = \"row justify-content-center\">
            <div class = \"col-sm-6\">
                <ul style=\"list-style:none;\" class=\"titulacion\" data-prototype=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["formulario"]) || array_key_exists("formulario", $context) ? $context["formulario"] : (function () { throw new RuntimeError('Variable "formulario" does not exist.', 39, $this->source); })()), "titulaciones", [], "any", false, false, false, 39), "vars", [], "any", false, false, false, 39), "prototype", [], "any", false, false, false, 39), 'widget'), "html_attr");
        echo "\">
                    <li data-collection-holder-class=\"titulacion\">";
        // line 40
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["formularioTitulacion"]) || array_key_exists("formularioTitulacion", $context) ? $context["formularioTitulacion"] : (function () { throw new RuntimeError('Variable "formularioTitulacion" does not exist.', 40, $this->source); })()), 'widget');
        echo "</li>
                    <h6 class = \"text-center text-secondary mt-2\">Fecha Egreso</h6>
                    <br>
                </ul>
            </div>
        </div>
        
        <div class =\"text-right\">
            <button type=\"button\" class=\"add_item_link btn btn-outline-info text-center\" data-collection-holder-class=\"titulacion\">Agregar otra titulación</button>
        </div>
    </div>
    <div class = \"container mt-4 text-center\">
        ";
        // line 52
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formulario"]) || array_key_exists("formulario", $context) ? $context["formulario"] : (function () { throw new RuntimeError('Variable "formulario" does not exist.', 52, $this->source); })()), "Cargar", [], "any", false, false, false, 52), 'widget', ["attr" => ["class" => "btn btn-outline-info btn-lg"]]);
        echo "
    </div>
    ";
        // line 54
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formulario"]) || array_key_exists("formulario", $context) ? $context["formulario"] : (function () { throw new RuntimeError('Variable "formulario" does not exist.', 54, $this->source); })()), 'form_end');
        echo "
    
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 57
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 58
        echo "        ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
        <script src=\"https://code.jquery.com/jquery-3.2.1.slim.min.js\" integrity=\"sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN\" crossorigin=\"anonymous\"></script>
        <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js\" integrity=\"sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q\" crossorigin=\"anonymous\"></script>
        <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js\" integrity=\"sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx\" crossorigin=\"anonymous\"></script>
        <script src=\"https://use.fontawesome.com/releases/v5.15.2/js/all.js\" data-search-pseudo-elements></script>
        <script src = \"";
        // line 63
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/integrarForm.js"), "html", null, true);
        echo "\"></script>
        
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "graduado/titulacionesGraduado.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  163 => 63,  154 => 58,  144 => 57,  131 => 54,  126 => 52,  111 => 40,  107 => 39,  102 => 36,  100 => 12,  95 => 9,  89 => 6,  79 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Registro Digital - Titulaciones Graduado/a{% endblock %}

{% block body %}
{{parent()}}
<h1 class = \"text-center\" >Alta datos personales graduado/a</h1>
<div class = \"container\" id = \"divFormulario\"> 
    {{ form_start(formulario, {'enctype':'multipart/form-data'})}}
    <div class = \"container row mt-3 justify-content-center\">
        {# ESTO LO COMENTE PORQUE NO ES NECESARIO DIRECTAMENTE EDITAR DESDE ABAJOOOOOOOOOOOOOOOOOOOOOOO #}
        {# <div class = \"col-sm-8\">
            <h6 class = \"text-secondary text-left ml-1  \">Nombre completo del título obtenido por el/la graduado/a</h6> 
            {{ form_widget(formulario.titulo, {attr: {class: 'form-control camposEstandar', placeholder: 'Título obtenido'}})}}
        </div>
        <div class = \"col-sm-1\"></div>
        <div class = \"col-sm-3\">
            <h6 class = \"text-secondary text-left ml-1  \">Fecha egreso</h6> 
            {{ form_widget(formulario.fechaEgreso, {attr: {class: 'form-control camposEstandar', placeholder: 'Título obtenido'}})}}
        </div>            
    </div>
    <div class = \"container row mt-4 justify-content-center\">
        <div class = \"col-sm-3\">
            <h6 class = \"text-secondary text-left ml-1  \">Nº resolución ministerial</h6> 
            {{ form_widget(formulario.nroME, {attr: {class: 'form-control camposEstandar', placeholder: 'Nº ME'}})}}
        </div>
        <div class = \"col-sm-3\">
            <h6 class = \"text-secondary text-left ml-1  \">Nº de resolución UNRaf</h6> 
            {{ form_widget(formulario.nroUnraf, {attr: {class: 'form-control camposEstandar', placeholder: 'Nº ME'}})}}
        </div>            
        <div class = \"col-sm-6\"></div>
    </div>
    <div class = \"text-center m-4\">
        <button class = \"btn btn-outline-info\" type=\"button\"  onclick=\"mostrarMas()\">¿Desea agregar otra titulación para el/la egresado/a?</button>
    </div> #}
    <div id = \"\">
        <div class = \"row justify-content-center\">
            <div class = \"col-sm-6\">
                <ul style=\"list-style:none;\" class=\"titulacion\" data-prototype=\"{{form_widget(formulario.titulaciones.vars.prototype)|e('html_attr') }}\">
                    <li data-collection-holder-class=\"titulacion\">{{ form_widget(formularioTitulacion)}}</li>
                    <h6 class = \"text-center text-secondary mt-2\">Fecha Egreso</h6>
                    <br>
                </ul>
            </div>
        </div>
        
        <div class =\"text-right\">
            <button type=\"button\" class=\"add_item_link btn btn-outline-info text-center\" data-collection-holder-class=\"titulacion\">Agregar otra titulación</button>
        </div>
    </div>
    <div class = \"container mt-4 text-center\">
        {{ form_widget(formulario.Cargar, {attr: {class: 'btn btn-outline-info btn-lg'}})}}
    </div>
    {{ form_end(formulario)}}
    
{% endblock %}
{% block javascripts %}
        {{parent()}}
        <script src=\"https://code.jquery.com/jquery-3.2.1.slim.min.js\" integrity=\"sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN\" crossorigin=\"anonymous\"></script>
        <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js\" integrity=\"sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q\" crossorigin=\"anonymous\"></script>
        <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js\" integrity=\"sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx\" crossorigin=\"anonymous\"></script>
        <script src=\"https://use.fontawesome.com/releases/v5.15.2/js/all.js\" data-search-pseudo-elements></script>
        <script src = \"{{asset('js/integrarForm.js')}}\"></script>
        
{% endblock %}
", "graduado/titulacionesGraduado.html.twig", "/var/www/html/RegistroDigital/templates/graduado/titulacionesGraduado.html.twig");
    }
}
