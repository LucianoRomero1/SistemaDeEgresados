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

/* graduado/datosPersonalesGraduado.html.twig */
class __TwigTemplate_c4ffd796360e1177922a2f17611342392343b070ea42e2f58a4912d0fbea635d extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "graduado/datosPersonalesGraduado.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "graduado/datosPersonalesGraduado.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "graduado/datosPersonalesGraduado.html.twig", 1);
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

        echo "Registro Digital - Datos Personales Graduado/a";
        
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
                ";
        // line 13
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formulario"]) || array_key_exists("formulario", $context) ? $context["formulario"] : (function () { throw new RuntimeError('Variable "formulario" does not exist.', 13, $this->source); })()), "nombre", [], "any", false, false, false, 13), 'widget', ["attr" => ["class" => "form-control camposEstandar", "placeholder" => "Nombre"]]);
        echo "
            </div>
            <div class = \"col-sm-2\"></div>
            <div class = \"col-sm-3\">
                ";
        // line 17
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formulario"]) || array_key_exists("formulario", $context) ? $context["formulario"] : (function () { throw new RuntimeError('Variable "formulario" does not exist.', 17, $this->source); })()), "apellido", [], "any", false, false, false, 17), 'widget', ["attr" => ["class" => "form-control camposEstandar", "placeholder" => "Apellido"]]);
        echo "
            </div>
        </div>
        <div class = \"container row mt-4 justify-content-center\">
            <div class = \"col-sm-3\">
                ";
        // line 22
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formulario"]) || array_key_exists("formulario", $context) ? $context["formulario"] : (function () { throw new RuntimeError('Variable "formulario" does not exist.', 22, $this->source); })()), "tipoDocumentoIdentidad", [], "any", false, false, false, 22), 'widget', ["attr" => ["class" => "form-control camposEstandar"]]);
        echo "
            </div>
            <div class =\"col-sm-2\"></div>
            <div class = \"col-sm-3\">
                ";
        // line 26
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formulario"]) || array_key_exists("formulario", $context) ? $context["formulario"] : (function () { throw new RuntimeError('Variable "formulario" does not exist.', 26, $this->source); })()), "documentoIdentidad", [], "any", false, false, false, 26), 'widget', ["attr" => ["class" => "form-control camposEstandar", "placeholder" => "Doc de identidad"]]);
        echo "
                <h6 class = \"text-secondary  mt-2 ml-1 text-left\" style = \"font-size: 14px;\">*Sin puntos<h6>
            </div>
        </div>
        <div class = \"container row mt-4 justify-content-center\">
            <div class = \"col-sm-2\"></div>
            <div class =\"col-sm-3\">
                <h6 class = \"text-secondary  mt-2 ml-1 text-left\" style = \"font-size: 14px;\">Fecha de nacimiento<h6>
                ";
        // line 34
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formulario"]) || array_key_exists("formulario", $context) ? $context["formulario"] : (function () { throw new RuntimeError('Variable "formulario" does not exist.', 34, $this->source); })()), "fechaNacimiento", [], "any", false, false, false, 34), 'widget', ["attr" => ["class" => "form-control camposEstandar", "style" => "cursor: text;"]]);
        echo "
            </div>
            <div class = \"col-sm-2\"></div>
        </div>
        <div class = \"container row mt-4 justify-content-center\">
            <div class = \"col-sm-3\">
                ";
        // line 40
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formulario"]) || array_key_exists("formulario", $context) ? $context["formulario"] : (function () { throw new RuntimeError('Variable "formulario" does not exist.', 40, $this->source); })()), "telefono", [], "any", false, false, false, 40), 'widget', ["attr" => ["class" => "form-control camposEstandar", "placeholder" => "Teléfono"]]);
        echo "
                <h6 class = \"text-secondary ml-1 mt-2 text-left\" style = \"font-size: 14px;\">Anteponer código de área, sin 15 ni espacios<h6>
            </div>
            <div class = \"col-sm-1\"></div>
            <div class = \"col-sm-4\">
                ";
        // line 45
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formulario"]) || array_key_exists("formulario", $context) ? $context["formulario"] : (function () { throw new RuntimeError('Variable "formulario" does not exist.', 45, $this->source); })()), "email", [], "any", false, false, false, 45), 'widget', ["attr" => ["class" => "form-control camposEstandar", "placeholder" => "Email"]]);
        echo "
            </div>
        </div>
        <hr>
        <h6 class = \"text-info ml-5\" style = \"font-size: 14px;\">*Apartado domicilio graduado/a<h6>
        <div class = \"container row mt-4 justify-content-center\">
            <div class = \"col-sm-2\"></div>
            <div class = \"col-sm-3\">
                ";
        // line 53
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formulario"]) || array_key_exists("formulario", $context) ? $context["formulario"] : (function () { throw new RuntimeError('Variable "formulario" does not exist.', 53, $this->source); })()), "nacionalidad", [], "any", false, false, false, 53), 'widget', ["attr" => ["class" => "form-control camposEstandar", "placeholder" => "Nacionalidad"]]);
        echo "
            </div>
            <div class = \"col-sm-2\"></div>
        </div>
        <div class = \"container row mt-4 justify-content-center\">
            <div class = \"col-sm-3\">
                ";
        // line 59
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formulario"]) || array_key_exists("formulario", $context) ? $context["formulario"] : (function () { throw new RuntimeError('Variable "formulario" does not exist.', 59, $this->source); })()), "provincia", [], "any", false, false, false, 59), 'widget', ["attr" => ["class" => "form-control camposEstandar", "placeholder" => "Provincia"]]);
        echo "
            </div>
            <div class = \"col-sm-2\"></div>
            <div class = \"col-sm-3\">
                ";
        // line 63
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formulario"]) || array_key_exists("formulario", $context) ? $context["formulario"] : (function () { throw new RuntimeError('Variable "formulario" does not exist.', 63, $this->source); })()), "ciudad", [], "any", false, false, false, 63), 'widget', ["attr" => ["class" => "form-control camposEstandar", "placeholder" => "Ciudad"]]);
        echo "
            </div>
        </div>
        <div class = \"container row mt-4 justify-content-center\">
            <div class = \"col-sm-3\">
                ";
        // line 68
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formulario"]) || array_key_exists("formulario", $context) ? $context["formulario"] : (function () { throw new RuntimeError('Variable "formulario" does not exist.', 68, $this->source); })()), "calle", [], "any", false, false, false, 68), 'widget', ["attr" => ["class" => "form-control camposEstandar", "placeholder" => "Calle"]]);
        echo "
            </div>
            <div class = \"col-sm-1\">
            </div>
            <div class = \"col-sm-2\">
                ";
        // line 73
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formulario"]) || array_key_exists("formulario", $context) ? $context["formulario"] : (function () { throw new RuntimeError('Variable "formulario" does not exist.', 73, $this->source); })()), "numeroCalle", [], "any", false, false, false, 73), 'widget', ["attr" => ["class" => "form-control camposEstandar"]]);
        echo "
                <h6 class = \"text-secondary mt-2 ml-1 text-left\" style = \"font-size: 14px;\">Nro de domicilio<h6>
               
            </div>
              <div class = \"col-sm-1\">
                ";
        // line 78
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formulario"]) || array_key_exists("formulario", $context) ? $context["formulario"] : (function () { throw new RuntimeError('Variable "formulario" does not exist.', 78, $this->source); })()), "piso", [], "any", false, false, false, 78), 'widget', ["attr" => ["class" => "form-control camposEstandar"]]);
        echo "
                <h6 class = \"text-secondary mt-2 ml-1 text-left\" style = \"font-size: 14px;\">Piso<h6>
            </div>
            <div class = \"col-sm-1\">
                ";
        // line 82
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formulario"]) || array_key_exists("formulario", $context) ? $context["formulario"] : (function () { throw new RuntimeError('Variable "formulario" does not exist.', 82, $this->source); })()), "depto", [], "any", false, false, false, 82), 'widget', ["attr" => ["class" => "form-control camposEstandar"]]);
        echo "
                <h6 class = \"text-secondary mt-2 ml-1 text-left\" style = \"font-size: 14px;\">Depto<h6>
            </div>
        </div>

        <div class = \"container mt-4 text-center\">
            ";
        // line 88
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formulario"]) || array_key_exists("formulario", $context) ? $context["formulario"] : (function () { throw new RuntimeError('Variable "formulario" does not exist.', 88, $this->source); })()), "Siguiente", [], "any", false, false, false, 88), 'widget', ["attr" => ["class" => "btn btn-outline-info btn-lg"]]);
        echo "
        </div>
    ";
        // line 90
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formulario"]) || array_key_exists("formulario", $context) ? $context["formulario"] : (function () { throw new RuntimeError('Variable "formulario" does not exist.', 90, $this->source); })()), 'form_end');
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
        return "graduado/datosPersonalesGraduado.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 90,  221 => 88,  212 => 82,  205 => 78,  197 => 73,  189 => 68,  181 => 63,  174 => 59,  165 => 53,  154 => 45,  146 => 40,  137 => 34,  126 => 26,  119 => 22,  111 => 17,  104 => 13,  98 => 10,  94 => 9,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Registro Digital - Datos Personales Graduado/a{% endblock %}

{% block body %}
{{parent()}}
<h1 class = \"text-center\" >Alta datos personales graduado/a</h1>
<div class = \"container\" id = \"divFormulario\"> 
    <a href = \"{{path('verGraduados')}}\"><i class=\"fas fa-arrow-left grow\" style = \"font-size:30px; color: #0F9FA8;\"></i></a>
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
            </div>
        </div>
        <hr>
        <h6 class = \"text-info ml-5\" style = \"font-size: 14px;\">*Apartado domicilio graduado/a<h6>
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
                {{ form_widget(formulario.numeroCalle, {attr: {class: 'form-control camposEstandar'}})}}
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
{% endblock %}", "graduado/datosPersonalesGraduado.html.twig", "/var/www/html/RegistroDigital/templates/graduado/datosPersonalesGraduado.html.twig");
    }
}
