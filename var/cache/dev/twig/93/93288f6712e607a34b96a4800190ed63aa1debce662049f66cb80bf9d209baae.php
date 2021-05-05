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

/* egresado/altaDatosPersonales.html.twig */
class __TwigTemplate_afa794c70a5513db1a5f6473bdc7bbecb84f4078521ec7c0cae79f049f8bd688 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "egresado/altaDatosPersonales.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "egresado/altaDatosPersonales.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "egresado/altaDatosPersonales.html.twig", 1);
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

        echo "Registro Digital - Alta Datos Personales ";
        
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
<h1 class = \"text-center\" >Alta datos personales</h1>
<div class = \"container\" id = \"divFormulario\"> 
    <a href = \"";
        // line 9
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("verEgresados");
        echo "\"><i class=\"fas fa-arrow-left grow\" style = \"font-size:30px; color: #0F9FA8;\"></i></a>
    
    ";
        // line 11
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formulario"]) || array_key_exists("formulario", $context) ? $context["formulario"] : (function () { throw new RuntimeError('Variable "formulario" does not exist.', 11, $this->source); })()), 'form_start', ["enctype" => "multipart/form-data"]);
        echo "
        <div class = \"container row mt-3 justify-content-center\">
            <div class = \"col-sm-3\">
                ";
        // line 14
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formulario"]) || array_key_exists("formulario", $context) ? $context["formulario"] : (function () { throw new RuntimeError('Variable "formulario" does not exist.', 14, $this->source); })()), "nombre", [], "any", false, false, false, 14), 'widget', ["attr" => ["class" => "form-control camposEstandar", "placeholder" => "Nombre"]]);
        echo "
            </div>
            <div class = \"col-sm-2\"></div>
            <div class = \"col-sm-3\">
                ";
        // line 18
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formulario"]) || array_key_exists("formulario", $context) ? $context["formulario"] : (function () { throw new RuntimeError('Variable "formulario" does not exist.', 18, $this->source); })()), "apellido", [], "any", false, false, false, 18), 'widget', ["attr" => ["class" => "form-control camposEstandar", "placeholder" => "Apellido"]]);
        echo "
            </div>
        </div>
        <div class = \"container row mt-4 justify-content-center\">
            <div class = \"col-sm-3\">
                ";
        // line 23
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formulario"]) || array_key_exists("formulario", $context) ? $context["formulario"] : (function () { throw new RuntimeError('Variable "formulario" does not exist.', 23, $this->source); })()), "tipoDocumentoIdentidad", [], "any", false, false, false, 23), 'widget', ["attr" => ["class" => "form-control camposEstandar"]]);
        echo "
            </div>
            <div class =\"col-sm-2\"></div>
            <div class = \"col-sm-3\">
                ";
        // line 27
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formulario"]) || array_key_exists("formulario", $context) ? $context["formulario"] : (function () { throw new RuntimeError('Variable "formulario" does not exist.', 27, $this->source); })()), "dni", [], "any", false, false, false, 27), 'widget', ["attr" => ["class" => "form-control camposEstandar", "placeholder" => "Doc de identidad"]]);
        echo "
                <h6 class = \"text-secondary  mt-2 ml-1 text-left\" style = \"font-size: 14px;\">*Sin puntos<h6>
            </div>
        </div>
        <div class = \"container row mt-4 justify-content-center\">
            <div class = \"col-sm-2\"></div>
            <div class =\"col-sm-3\">
                <h6 class = \"text-secondary  mt-2 ml-1 text-left\" style = \"font-size: 14px;\">Fecha de nacimiento<h6>
                ";
        // line 35
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formulario"]) || array_key_exists("formulario", $context) ? $context["formulario"] : (function () { throw new RuntimeError('Variable "formulario" does not exist.', 35, $this->source); })()), "fechaNacimiento", [], "any", false, false, false, 35), 'widget', ["attr" => ["class" => "form-control camposEstandar", "style" => "cursor: text;"]]);
        echo "
            </div>
            <div class = \"col-sm-2\"></div>
        </div>
        <div class = \"container row mt-4 justify-content-center\">
            <div class = \"col-sm-3\">
                ";
        // line 41
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formulario"]) || array_key_exists("formulario", $context) ? $context["formulario"] : (function () { throw new RuntimeError('Variable "formulario" does not exist.', 41, $this->source); })()), "telefono", [], "any", false, false, false, 41), 'widget', ["attr" => ["class" => "form-control camposEstandar", "placeholder" => "Teléfono"]]);
        echo "
                <h6 class = \"text-secondary ml-1 mt-2 text-left\" style = \"font-size: 14px;\">Anteponer código de área, sin 15 ni espacios<h6>
            </div>
            <div class = \"col-sm-1\"></div>
            <div class = \"col-sm-4\">
                ";
        // line 46
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formulario"]) || array_key_exists("formulario", $context) ? $context["formulario"] : (function () { throw new RuntimeError('Variable "formulario" does not exist.', 46, $this->source); })()), "email", [], "any", false, false, false, 46), 'widget', ["attr" => ["class" => "form-control camposEstandar", "placeholder" => "Email"]]);
        echo "
            </div>
        </div>
        <hr>
        <h6 class = \"text-info ml-5\" style = \"font-size: 14px;\">*Apartado domicilio egresado/a<h6>
        <div class = \"container row mt-4 justify-content-center\">
            <div class = \"col-sm-2\"></div>
            <div class = \"col-sm-3\">
                ";
        // line 54
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formulario"]) || array_key_exists("formulario", $context) ? $context["formulario"] : (function () { throw new RuntimeError('Variable "formulario" does not exist.', 54, $this->source); })()), "nacionalidad", [], "any", false, false, false, 54), 'widget', ["attr" => ["class" => "form-control camposEstandar", "placeholder" => "Nacionalidad"]]);
        echo "
            </div>
            <div class = \"col-sm-2\"></div>
        </div>
        <div class = \"container row mt-4 justify-content-center\">
            <div class = \"col-sm-3\">
                ";
        // line 60
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formulario"]) || array_key_exists("formulario", $context) ? $context["formulario"] : (function () { throw new RuntimeError('Variable "formulario" does not exist.', 60, $this->source); })()), "provincia", [], "any", false, false, false, 60), 'widget', ["attr" => ["class" => "form-control camposEstandar", "placeholder" => "Provincia"]]);
        echo "
            </div>
            <div class = \"col-sm-2\"></div>
            <div class = \"col-sm-3\">
                ";
        // line 64
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formulario"]) || array_key_exists("formulario", $context) ? $context["formulario"] : (function () { throw new RuntimeError('Variable "formulario" does not exist.', 64, $this->source); })()), "ciudad", [], "any", false, false, false, 64), 'widget', ["attr" => ["class" => "form-control camposEstandar", "placeholder" => "Ciudad"]]);
        echo "
            </div>
        </div>
        <div class = \"container row mt-4 justify-content-center\">
            <div class = \"col-sm-3\">
                ";
        // line 69
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formulario"]) || array_key_exists("formulario", $context) ? $context["formulario"] : (function () { throw new RuntimeError('Variable "formulario" does not exist.', 69, $this->source); })()), "calle", [], "any", false, false, false, 69), 'widget', ["attr" => ["class" => "form-control camposEstandar", "placeholder" => "Calle"]]);
        echo "
            </div>
            <div class = \"col-sm-1\">
            </div>
            <div class = \"col-sm-2\">
                ";
        // line 74
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formulario"]) || array_key_exists("formulario", $context) ? $context["formulario"] : (function () { throw new RuntimeError('Variable "formulario" does not exist.', 74, $this->source); })()), "nroDomicilio", [], "any", false, false, false, 74), 'widget', ["attr" => ["class" => "form-control camposEstandar"]]);
        echo "
                <h6 class = \"text-secondary mt-2 ml-1 text-left\" style = \"font-size: 14px;\">Nro de domicilio<h6>
               
            </div>
              <div class = \"col-sm-1\">
                ";
        // line 79
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formulario"]) || array_key_exists("formulario", $context) ? $context["formulario"] : (function () { throw new RuntimeError('Variable "formulario" does not exist.', 79, $this->source); })()), "piso", [], "any", false, false, false, 79), 'widget', ["attr" => ["class" => "form-control camposEstandar"]]);
        echo "
                <h6 class = \"text-secondary mt-2 ml-1 text-left\" style = \"font-size: 14px;\">Piso<h6>
            </div>
            <div class = \"col-sm-1\">
                ";
        // line 83
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formulario"]) || array_key_exists("formulario", $context) ? $context["formulario"] : (function () { throw new RuntimeError('Variable "formulario" does not exist.', 83, $this->source); })()), "depto", [], "any", false, false, false, 83), 'widget', ["attr" => ["class" => "form-control camposEstandar"]]);
        echo "
                <h6 class = \"text-secondary mt-2 ml-1 text-left\" style = \"font-size: 14px;\">Depto<h6>
            </div>
        </div>

        <div class = \"container mt-4 text-center\">
            ";
        // line 89
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formulario"]) || array_key_exists("formulario", $context) ? $context["formulario"] : (function () { throw new RuntimeError('Variable "formulario" does not exist.', 89, $this->source); })()), "Siguiente", [], "any", false, false, false, 89), 'widget', ["attr" => ["class" => "btn btn-outline-info btn-lg"]]);
        echo "
        </div>
    ";
        // line 91
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formulario"]) || array_key_exists("formulario", $context) ? $context["formulario"] : (function () { throw new RuntimeError('Variable "formulario" does not exist.', 91, $this->source); })()), 'form_end');
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
        return "egresado/altaDatosPersonales.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  227 => 91,  222 => 89,  213 => 83,  206 => 79,  198 => 74,  190 => 69,  182 => 64,  175 => 60,  166 => 54,  155 => 46,  147 => 41,  138 => 35,  127 => 27,  120 => 23,  112 => 18,  105 => 14,  99 => 11,  94 => 9,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Registro Digital - Alta Datos Personales {% endblock %}

{% block body %}
{{parent()}}
<h1 class = \"text-center\" >Alta datos personales</h1>
<div class = \"container\" id = \"divFormulario\"> 
    <a href = \"{{path('verEgresados')}}\"><i class=\"fas fa-arrow-left grow\" style = \"font-size:30px; color: #0F9FA8;\"></i></a>
    
    {{ form_start(formulario, {'enctype':'multipart/form-data'})}}
        <div class = \"container row mt-3 justify-content-center\">
            <div class = \"col-sm-3\">
                {{ form_widget(formulario.nombre, {attr: {class: 'form-control camposEstandar', placeholder: 'Nombre'}})}}
            </div>
            <div class = \"col-sm-2\"></div>
            <div class = \"col-sm-3\">
                {{ form_widget(formulario.apellido, {attr: {class: 'form-control camposEstandar', placeholder: 'Apellido'}})}}
            </div>
        </div>
        <div class = \"container row mt-4 justify-content-center\">
            <div class = \"col-sm-3\">
                {{ form_widget(formulario.tipoDocumentoIdentidad, {attr: {class: 'form-control camposEstandar'}})}}
            </div>
            <div class =\"col-sm-2\"></div>
            <div class = \"col-sm-3\">
                {{ form_widget(formulario.dni, {attr: {class: 'form-control camposEstandar', placeholder: 'Doc de identidad'}})}}
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
            </div>
        </div>
        <hr>
        <h6 class = \"text-info ml-5\" style = \"font-size: 14px;\">*Apartado domicilio egresado/a<h6>
        <div class = \"container row mt-4 justify-content-center\">
            <div class = \"col-sm-2\"></div>
            <div class = \"col-sm-3\">
                {{ form_widget(formulario.nacionalidad, {attr: {class: 'form-control camposEstandar', placeholder: 'Nacionalidad'}})}}
            </div>
            <div class = \"col-sm-2\"></div>
        </div>
        <div class = \"container row mt-4 justify-content-center\">
            <div class = \"col-sm-3\">
                {{ form_widget(formulario.provincia, {attr: {class: 'form-control camposEstandar', placeholder: 'Provincia'}})}}
            </div>
            <div class = \"col-sm-2\"></div>
            <div class = \"col-sm-3\">
                {{ form_widget(formulario.ciudad, {attr: {class: 'form-control camposEstandar', placeholder: 'Ciudad'}})}}
            </div>
        </div>
        <div class = \"container row mt-4 justify-content-center\">
            <div class = \"col-sm-3\">
                {{ form_widget(formulario.calle, {attr: {class: 'form-control camposEstandar', placeholder: 'Calle'}})}}
            </div>
            <div class = \"col-sm-1\">
            </div>
            <div class = \"col-sm-2\">
                {{ form_widget(formulario.nroDomicilio, {attr: {class: 'form-control camposEstandar'}})}}
                <h6 class = \"text-secondary mt-2 ml-1 text-left\" style = \"font-size: 14px;\">Nro de domicilio<h6>
               
            </div>
              <div class = \"col-sm-1\">
                {{ form_widget(formulario.piso, {attr: {class: 'form-control camposEstandar'}})}}
                <h6 class = \"text-secondary mt-2 ml-1 text-left\" style = \"font-size: 14px;\">Piso<h6>
            </div>
            <div class = \"col-sm-1\">
                {{ form_widget(formulario.depto, {attr: {class: 'form-control camposEstandar'}})}}
                <h6 class = \"text-secondary mt-2 ml-1 text-left\" style = \"font-size: 14px;\">Depto<h6>
            </div>
        </div>

        <div class = \"container mt-4 text-center\">
            {{ form_widget(formulario.Siguiente, {attr: {class: 'btn btn-outline-info btn-lg'}})}}
        </div>
    {{ form_end(formulario) }}

</div>
<br>
<br>

{% endblock %}
", "egresado/altaDatosPersonales.html.twig", "/var/www/html/RegistroDigital/templates/egresado/altaDatosPersonales.html.twig");
    }
}
