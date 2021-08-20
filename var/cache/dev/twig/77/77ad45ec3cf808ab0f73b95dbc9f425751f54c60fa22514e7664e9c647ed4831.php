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

/* graduado/modificarDatosPersonalesGraduado.html.twig */
class __TwigTemplate_cc6f2a2e9652b85a1c5762756546b0b1e3d2deee761e5b8270f0ce79dd81684a extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "graduado/modificarDatosPersonalesGraduado.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "graduado/modificarDatosPersonalesGraduado.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "graduado/modificarDatosPersonalesGraduado.html.twig", 1);
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

        echo "Registro Digital - Modificar Datos Personales Graduado/a";
        
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
<h1 class = \"text-center\" >Modificar datos personales de: ";
        // line 7
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["graduado"]) || array_key_exists("graduado", $context) ? $context["graduado"] : (function () { throw new RuntimeError('Variable "graduado" does not exist.', 7, $this->source); })()), "nombre", [], "any", false, false, false, 7), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["graduado"]) || array_key_exists("graduado", $context) ? $context["graduado"] : (function () { throw new RuntimeError('Variable "graduado" does not exist.', 7, $this->source); })()), "apellido", [], "any", false, false, false, 7), "html", null, true);
        echo "</h1>
<div class = \"container\" id = \"divFormulario\"> 
    <a href = \"";
        // line 9
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("verGraduados");
        echo "\"><i class=\"fas fa-arrow-left grow\" style = \"font-size:30px; color: #0F9FA8;\"></i></a>
    ";
        // line 10
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formulario"]) || array_key_exists("formulario", $context) ? $context["formulario"] : (function () { throw new RuntimeError('Variable "formulario" does not exist.', 10, $this->source); })()), 'form_start', ["enctype" => "multipart/form-data"]);
        echo "
        <div class = \"container row mt-3 justify-content-center\">
            <div class = \"col-sm-3\">
                <h6 class = \"text-secondary  mt-2 ml-1 text-left\" style = \"font-size: 14px;\">Nombre<h6>
                ";
        // line 14
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formulario"]) || array_key_exists("formulario", $context) ? $context["formulario"] : (function () { throw new RuntimeError('Variable "formulario" does not exist.', 14, $this->source); })()), "nombre", [], "any", false, false, false, 14), 'widget', ["attr" => ["class" => "form-control camposEstandar", "placeholder" => "Nombre"]]);
        echo "
            </div>
            <div class = \"col-sm-2\"></div>
            <div class = \"col-sm-3\">
                <h6 class = \"text-secondary  mt-2 text-left\" style = \"font-size: 14px;\">Apellido<h6>
                ";
        // line 19
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formulario"]) || array_key_exists("formulario", $context) ? $context["formulario"] : (function () { throw new RuntimeError('Variable "formulario" does not exist.', 19, $this->source); })()), "apellido", [], "any", false, false, false, 19), 'widget', ["attr" => ["class" => "form-control camposEstandar", "placeholder" => "Apellido"]]);
        echo "
            </div>
        </div>
        <div class = \"container row mt-4 justify-content-center\">
            <div class = \"col-sm-3\">
                ";
        // line 24
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formulario"]) || array_key_exists("formulario", $context) ? $context["formulario"] : (function () { throw new RuntimeError('Variable "formulario" does not exist.', 24, $this->source); })()), "tipoDocumentoIdentidad", [], "any", false, false, false, 24), 'widget', ["attr" => ["class" => "form-control camposEstandar"]]);
        echo "
            </div>
            <div class =\"col-sm-2\"></div>
            <div class = \"col-sm-3\">
                ";
        // line 28
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formulario"]) || array_key_exists("formulario", $context) ? $context["formulario"] : (function () { throw new RuntimeError('Variable "formulario" does not exist.', 28, $this->source); })()), "documentoIdentidad", [], "any", false, false, false, 28), 'widget', ["attr" => ["class" => "form-control camposEstandar", "placeholder" => "Doc de identidad"]]);
        echo "
                <h6 class = \"text-secondary  mt-2 ml-1 text-left\" style = \"font-size: 14px;\">*Sin puntos<h6>
            </div>
        </div>
        <div class = \"container row mt-4 justify-content-center\">
            <div class = \"col-sm-2\"></div>
            <div class =\"col-sm-3\">
                <h6 class = \"text-secondary  mt-2 ml-1 text-left\" style = \"font-size: 14px;\">Fecha de nacimiento<h6>
                ";
        // line 36
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formulario"]) || array_key_exists("formulario", $context) ? $context["formulario"] : (function () { throw new RuntimeError('Variable "formulario" does not exist.', 36, $this->source); })()), "fechaNacimiento", [], "any", false, false, false, 36), 'widget', ["attr" => ["class" => "form-control camposEstandar", "style" => "cursor: text;"]]);
        echo "
            </div>
            <div class = \"col-sm-2\"></div>
        </div>
        <div class = \"container row mt-4 justify-content-center\">
            <div class = \"col-sm-3\">
                ";
        // line 42
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formulario"]) || array_key_exists("formulario", $context) ? $context["formulario"] : (function () { throw new RuntimeError('Variable "formulario" does not exist.', 42, $this->source); })()), "telefono", [], "any", false, false, false, 42), 'widget', ["attr" => ["class" => "form-control camposEstandar", "placeholder" => "Teléfono"]]);
        echo "
                <h6 class = \"text-secondary ml-1 mt-2 text-left\" style = \"font-size: 14px;\">Anteponer código de área, sin 15 ni espacios<h6>
            </div>
            <div class = \"col-sm-1\"></div>
            <div class = \"col-sm-4\">
                ";
        // line 47
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formulario"]) || array_key_exists("formulario", $context) ? $context["formulario"] : (function () { throw new RuntimeError('Variable "formulario" does not exist.', 47, $this->source); })()), "email", [], "any", false, false, false, 47), 'widget', ["attr" => ["class" => "form-control camposEstandar", "placeholder" => "Email"]]);
        echo "
                <h6 class = \"text-secondary  mt-2 text-center\" style = \"font-size: 14px;\">Email<h6>
            </div>
        </div>
        <hr>
        <h6 class = \"text-info ml-5\" style = \"font-size: 14px;\">*Apartado domicilio graduado/a<h6>
        <div class = \"container row mt-4 justify-content-center\">
            <div class = \"col-sm-2\"></div>
            <div class = \"col-sm-3\">
                <h6 class = \"text-secondary  mt-2 ml-1 text-left\" style = \"font-size: 14px;\">Nacionalidad<h6>
                ";
        // line 57
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formulario"]) || array_key_exists("formulario", $context) ? $context["formulario"] : (function () { throw new RuntimeError('Variable "formulario" does not exist.', 57, $this->source); })()), "nacionalidad", [], "any", false, false, false, 57), 'widget', ["attr" => ["class" => "form-control camposEstandar"]]);
        echo "
            </div>
            <div class = \"col-sm-2\"></div>
        </div>
        <div class = \"container row mt-4 justify-content-center\">
            <div class = \"col-sm-3\">
                <h6 class = \"text-secondary  mt-2 ml-1 text-left\" style = \"font-size: 14px;\">Provincia<h6>
                ";
        // line 64
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formulario"]) || array_key_exists("formulario", $context) ? $context["formulario"] : (function () { throw new RuntimeError('Variable "formulario" does not exist.', 64, $this->source); })()), "provincia", [], "any", false, false, false, 64), 'widget', ["attr" => ["class" => "form-control camposEstandar"]]);
        echo "
            </div>
            <div class = \"col-sm-2\"></div>
            <div class = \"col-sm-3\">
                <h6 class = \"text-secondary  mt-2 ml-1 text-left\" style = \"font-size: 14px;\">Ciudad<h6>
                ";
        // line 69
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formulario"]) || array_key_exists("formulario", $context) ? $context["formulario"] : (function () { throw new RuntimeError('Variable "formulario" does not exist.', 69, $this->source); })()), "ciudad", [], "any", false, false, false, 69), 'widget', ["attr" => ["class" => "form-control camposEstandar"]]);
        echo "
            </div>
        </div>
        <div class = \"container row mt-4 justify-content-center\">
            <div class = \"col-sm-3\">
                <h6 class = \"text-secondary mt-2 ml-1 text-left\" style = \"font-size: 14px;\">Calle<h6>
                ";
        // line 75
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formulario"]) || array_key_exists("formulario", $context) ? $context["formulario"] : (function () { throw new RuntimeError('Variable "formulario" does not exist.', 75, $this->source); })()), "calle", [], "any", false, false, false, 75), 'widget', ["attr" => ["class" => "form-control camposEstandar"]]);
        echo "
            </div>
            <div class = \"col-sm-1\">
            </div>
            <div class = \"col-sm-2\">
                <h6 class = \"text-secondary mt-2 ml-1 text-left\" style = \"font-size: 14px;\">Nro de domicilio<h6>
                ";
        // line 81
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formulario"]) || array_key_exists("formulario", $context) ? $context["formulario"] : (function () { throw new RuntimeError('Variable "formulario" does not exist.', 81, $this->source); })()), "numeroCalle", [], "any", false, false, false, 81), 'widget', ["attr" => ["class" => "form-control camposEstandar"]]);
        echo "
            </div>
              <div class = \"col-sm-1\">
                <h6 class = \"text-secondary mt-2 ml-1 text-left\" style = \"font-size: 14px;\">Piso<h6>
                ";
        // line 85
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formulario"]) || array_key_exists("formulario", $context) ? $context["formulario"] : (function () { throw new RuntimeError('Variable "formulario" does not exist.', 85, $this->source); })()), "piso", [], "any", false, false, false, 85), 'widget', ["attr" => ["class" => "form-control camposEstandar"]]);
        echo "
                
            </div>
            <div class = \"col-sm-1\">
                <h6 class = \"text-secondary mt-2 ml-1 text-left\" style = \"font-size: 14px;\">Depto<h6>
                ";
        // line 90
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formulario"]) || array_key_exists("formulario", $context) ? $context["formulario"] : (function () { throw new RuntimeError('Variable "formulario" does not exist.', 90, $this->source); })()), "depto", [], "any", false, false, false, 90), 'widget', ["attr" => ["class" => "form-control camposEstandar"]]);
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
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "graduado/modificarDatosPersonalesGraduado.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  239 => 98,  234 => 96,  225 => 90,  217 => 85,  210 => 81,  201 => 75,  192 => 69,  184 => 64,  174 => 57,  161 => 47,  153 => 42,  144 => 36,  133 => 28,  126 => 24,  118 => 19,  110 => 14,  103 => 10,  99 => 9,  92 => 7,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Registro Digital - Modificar Datos Personales Graduado/a{% endblock %}

{% block body %}
{{parent()}}
<h1 class = \"text-center\" >Modificar datos personales de: {{graduado.nombre}} {{graduado.apellido}}</h1>
<div class = \"container\" id = \"divFormulario\"> 
    <a href = \"{{path('verGraduados')}}\"><i class=\"fas fa-arrow-left grow\" style = \"font-size:30px; color: #0F9FA8;\"></i></a>
    {{ form_start(formulario, {'enctype':'multipart/form-data'})}}
        <div class = \"container row mt-3 justify-content-center\">
            <div class = \"col-sm-3\">
                <h6 class = \"text-secondary  mt-2 ml-1 text-left\" style = \"font-size: 14px;\">Nombre<h6>
                {{ form_widget(formulario.nombre, {attr: {class: 'form-control camposEstandar', placeholder: 'Nombre'}})}}
            </div>
            <div class = \"col-sm-2\"></div>
            <div class = \"col-sm-3\">
                <h6 class = \"text-secondary  mt-2 text-left\" style = \"font-size: 14px;\">Apellido<h6>
                {{ form_widget(formulario.apellido, {attr: {class: 'form-control camposEstandar', placeholder: 'Apellido'}})}}
            </div>
        </div>
        <div class = \"container row mt-4 justify-content-center\">
            <div class = \"col-sm-3\">
                {{ form_widget(formulario.tipoDocumentoIdentidad, {attr: {class: 'form-control camposEstandar'}})}}
            </div>
            <div class =\"col-sm-2\"></div>
            <div class = \"col-sm-3\">
                {{ form_widget(formulario.documentoIdentidad, {attr: {class: 'form-control camposEstandar', placeholder: 'Doc de identidad'}})}}
                <h6 class = \"text-secondary  mt-2 ml-1 text-left\" style = \"font-size: 14px;\">*Sin puntos<h6>
            </div>
        </div>
        <div class = \"container row mt-4 justify-content-center\">
            <div class = \"col-sm-2\"></div>
            <div class =\"col-sm-3\">
                <h6 class = \"text-secondary  mt-2 ml-1 text-left\" style = \"font-size: 14px;\">Fecha de nacimiento<h6>
                {{ form_widget(formulario.fechaNacimiento, {attr: {class: 'form-control camposEstandar', style: 'cursor: text;'}})}}
            </div>
            <div class = \"col-sm-2\"></div>
        </div>
        <div class = \"container row mt-4 justify-content-center\">
            <div class = \"col-sm-3\">
                {{ form_widget(formulario.telefono, {attr: {class: 'form-control camposEstandar', placeholder: 'Teléfono'}})}}
                <h6 class = \"text-secondary ml-1 mt-2 text-left\" style = \"font-size: 14px;\">Anteponer código de área, sin 15 ni espacios<h6>
            </div>
            <div class = \"col-sm-1\"></div>
            <div class = \"col-sm-4\">
                {{ form_widget(formulario.email, {attr: {class: 'form-control camposEstandar', placeholder: 'Email'}})}}
                <h6 class = \"text-secondary  mt-2 text-center\" style = \"font-size: 14px;\">Email<h6>
            </div>
        </div>
        <hr>
        <h6 class = \"text-info ml-5\" style = \"font-size: 14px;\">*Apartado domicilio graduado/a<h6>
        <div class = \"container row mt-4 justify-content-center\">
            <div class = \"col-sm-2\"></div>
            <div class = \"col-sm-3\">
                <h6 class = \"text-secondary  mt-2 ml-1 text-left\" style = \"font-size: 14px;\">Nacionalidad<h6>
                {{ form_widget(formulario.nacionalidad, {attr: {class: 'form-control camposEstandar'}})}}
            </div>
            <div class = \"col-sm-2\"></div>
        </div>
        <div class = \"container row mt-4 justify-content-center\">
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
        <div class = \"container row mt-4 justify-content-center\">
            <div class = \"col-sm-3\">
                <h6 class = \"text-secondary mt-2 ml-1 text-left\" style = \"font-size: 14px;\">Calle<h6>
                {{ form_widget(formulario.calle, {attr: {class: 'form-control camposEstandar'}})}}
            </div>
            <div class = \"col-sm-1\">
            </div>
            <div class = \"col-sm-2\">
                <h6 class = \"text-secondary mt-2 ml-1 text-left\" style = \"font-size: 14px;\">Nro de domicilio<h6>
                {{ form_widget(formulario.numeroCalle, {attr: {class: 'form-control camposEstandar'}})}}
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
{% endblock %}", "graduado/modificarDatosPersonalesGraduado.html.twig", "/var/www/html/RegistroDigital/templates/graduado/modificarDatosPersonalesGraduado.html.twig");
    }
}
