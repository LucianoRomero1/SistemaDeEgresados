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

/* egresado/modificarDatosAdministrativos.html.twig */
class __TwigTemplate_f583d78c6bfaa542f057a952342b6e269a7b8a7d4118eb9e429c7902bda2c19e extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "egresado/modificarDatosAdministrativos.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "egresado/modificarDatosAdministrativos.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "egresado/modificarDatosAdministrativos.html.twig", 1);
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

        echo "Registro Digital - Modificar Datos Administrativos ";
        
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
<h1 class = \"text-center\" >Modificar datos administrativos de: ";
        // line 7
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["egresado"]) || array_key_exists("egresado", $context) ? $context["egresado"] : (function () { throw new RuntimeError('Variable "egresado" does not exist.', 7, $this->source); })()), "nombre", [], "any", false, false, false, 7), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["egresado"]) || array_key_exists("egresado", $context) ? $context["egresado"] : (function () { throw new RuntimeError('Variable "egresado" does not exist.', 7, $this->source); })()), "apellido", [], "any", false, false, false, 7), "html", null, true);
        echo "</h1> 
<div class =\"container\" id = \"divFormulario\">
    <a href = \"";
        // line 9
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("verEgresados");
        echo "\"><i class=\"fas fa-arrow-left grow\" style = \"font-size:30px; color: #0F9FA8\"></i></a>
    
    ";
        // line 11
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formulario"]) || array_key_exists("formulario", $context) ? $context["formulario"] : (function () { throw new RuntimeError('Variable "formulario" does not exist.', 11, $this->source); })()), 'form_start', ["enctype" => "multipart/form-data"]);
        echo "
    <div class = \"row mt-2 justify-content-center\">
        <div class = \"col-sm-4\">
            <h6 class = \"text-secondary  mt-2 text-left ml-1\" style = \"font-size: 14px;\">Nombre rector/a<h6>
            ";
        // line 15
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formulario"]) || array_key_exists("formulario", $context) ? $context["formulario"] : (function () { throw new RuntimeError('Variable "formulario" does not exist.', 15, $this->source); })()), "nombreRector", [], "any", false, false, false, 15), 'widget', ["attr" => ["class" => "form-control camposEstandar"]]);
        echo "
        </div>
        <div class = \"col-sm-1\"></div>
        <div class = \"col-sm-4\">
            <h6 class = \"text-secondary  mt-2 text-left ml-1\" style = \"font-size: 14px;\">Apellido rector/a<h6>
            ";
        // line 20
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formulario"]) || array_key_exists("formulario", $context) ? $context["formulario"] : (function () { throw new RuntimeError('Variable "formulario" does not exist.', 20, $this->source); })()), "apellidoRector", [], "any", false, false, false, 20), 'widget', ["attr" => ["class" => "form-control camposEstandar"]]);
        echo "
        </div>
    </div>
    <div class = \"row mt-2 justify-content-center\">
        <div class = \"col-sm-4\">
            <h6 class = \"text-secondary  mt-2 text-left ml-1\" style = \"font-size: 14px;\">Nombre secretario/a<h6>
            ";
        // line 26
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formulario"]) || array_key_exists("formulario", $context) ? $context["formulario"] : (function () { throw new RuntimeError('Variable "formulario" does not exist.', 26, $this->source); })()), "nombreSecretario", [], "any", false, false, false, 26), 'widget', ["attr" => ["class" => "form-control camposEstandar"]]);
        echo "
            
        </div>
        <div class = \"col-sm-1\"></div>
        <div class = \"col-sm-4\">
            <h6 class = \"text-secondary  mt-2 text-left ml-1\" style = \"font-size: 14px;\">Apellido secretario/a<h6>
            ";
        // line 32
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formulario"]) || array_key_exists("formulario", $context) ? $context["formulario"] : (function () { throw new RuntimeError('Variable "formulario" does not exist.', 32, $this->source); })()), "apellidoSecretario", [], "any", false, false, false, 32), 'widget', ["attr" => ["class" => "form-control camposEstandar"]]);
        echo "
        </div>
    </div>
    <div class = \"row mt-2 justify-content-center\">
        <div class = \"col-sm-3\">
            <h6 class = \"text-secondary  mt-2 text-left ml-1\" style = \"font-size: 14px;\">Nº de aprobación de carrera UNRaf <h6>
            ";
        // line 38
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formulario"]) || array_key_exists("formulario", $context) ? $context["formulario"] : (function () { throw new RuntimeError('Variable "formulario" does not exist.', 38, $this->source); })()), "nroResolucionAprob", [], "any", false, false, false, 38), 'widget', ["attr" => ["class" => "form-control camposEstandar"]]);
        echo "
        </div>
        <div class = \"col-sm-3\">
            <h6 class = \"text-secondary  mt-2 text-left ml-1\" style = \"font-size: 14px;\">Nº de aprobación de carrera ME <h6>
            ";
        // line 42
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formulario"]) || array_key_exists("formulario", $context) ? $context["formulario"] : (function () { throw new RuntimeError('Variable "formulario" does not exist.', 42, $this->source); })()), "nroResolucionME", [], "any", false, false, false, 42), 'widget', ["attr" => ["class" => "form-control camposEstandar"]]);
        echo "
        </div>
        <div class = \"col-sm-3\"></div>
    </div>
    <div class = \"row mt-2 justify-content-center\">
        <div class = \"col-sm-3\">
            <h6 class = \"text-secondary  mt-2 text-left ml-1\" style = \"font-size: 14px;\">Nº Expediente de tramitación<h6>
            ";
        // line 49
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formulario"]) || array_key_exists("formulario", $context) ? $context["formulario"] : (function () { throw new RuntimeError('Variable "formulario" does not exist.', 49, $this->source); })()), "nroExpediente", [], "any", false, false, false, 49), 'widget', ["attr" => ["class" => "form-control camposEstandar"]]);
        echo "
        </div>
        <div class = \"col-sm-3\">
            <h6 class = \"text-secondary  mt-2 text-left ml-1\" style = \"font-size: 14px;\">N° Resolución Rectoral expedición <h6>
            ";
        // line 53
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formulario"]) || array_key_exists("formulario", $context) ? $context["formulario"] : (function () { throw new RuntimeError('Variable "formulario" does not exist.', 53, $this->source); })()), "nroResolucionRectoral", [], "any", false, false, false, 53), 'widget', ["attr" => ["class" => "form-control camposEstandar"]]);
        echo "
        </div>
        <div class = \"col-sm-3\">
               <h6 class = \"text-secondary  mt-2 text-left ml-1\" style = \"font-size: 14px;\">Nº Diploma<h6>
            ";
        // line 57
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formulario"]) || array_key_exists("formulario", $context) ? $context["formulario"] : (function () { throw new RuntimeError('Variable "formulario" does not exist.', 57, $this->source); })()), "nroDiploma", [], "any", false, false, false, 57), 'widget', ["attr" => ["class" => "form-control camposEstandar"]]);
        echo "
        </div>       
    </div>
    <div class = \"row mt-2 justify-content-center\">
        <div class = \"col-sm-3\">
            <h6 class = \"text-secondary  mt-2 text-left ml-1\" style = \"font-size: 14px;\">Nº Certificado analítico<h6>
            ";
        // line 63
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formulario"]) || array_key_exists("formulario", $context) ? $context["formulario"] : (function () { throw new RuntimeError('Variable "formulario" does not exist.', 63, $this->source); })()), "nroAnalitico", [], "any", false, false, false, 63), 'widget', ["attr" => ["class" => "form-control camposEstandar"]]);
        echo "
        </div>
        <div class = \"col-sm-3\">
            <h6 class = \"text-secondary  mt-2 text-left ml-1\" style = \"font-size: 14px;\">Nº Certificado reválida<h6>
            ";
        // line 67
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formulario"]) || array_key_exists("formulario", $context) ? $context["formulario"] : (function () { throw new RuntimeError('Variable "formulario" does not exist.', 67, $this->source); })()), "nroRevalida", [], "any", false, false, false, 67), 'widget', ["attr" => ["class" => "form-control camposEstandar"]]);
        echo "
        </div>
        <div class = \"col-sm-3\"></div>
    </div>
    <div class = \"row mt-4 justify-content-center\">
        <div class = \"col-sm-3\"></div>
        <div class = \"col-sm-3\">
            <h6 class = \"text-secondary text-left ml-1 mt-2\">Fecha de entrega de la documentación</h6>
            ";
        // line 75
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formulario"]) || array_key_exists("formulario", $context) ? $context["formulario"] : (function () { throw new RuntimeError('Variable "formulario" does not exist.', 75, $this->source); })()), "fechaEntrega", [], "any", false, false, false, 75), 'widget', ["attr" => ["class" => "form-control camposEstandar", "style" => "cursor: text;"]]);
        echo " 
        </div>
        <div class = \"col-sm-3\"></div>
    </div>
    <div class = \"container mt-4 text-center\">
        ";
        // line 80
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formulario"]) || array_key_exists("formulario", $context) ? $context["formulario"] : (function () { throw new RuntimeError('Variable "formulario" does not exist.', 80, $this->source); })()), "Aceptar", [], "any", false, false, false, 80), 'widget', ["attr" => ["class" => "btn btn-outline-info btn-lg"]]);
        echo "
    </div>
    ";
        // line 82
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formulario"]) || array_key_exists("formulario", $context) ? $context["formulario"] : (function () { throw new RuntimeError('Variable "formulario" does not exist.', 82, $this->source); })()), 'form_end');
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
        return "egresado/modificarDatosAdministrativos.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  217 => 82,  212 => 80,  204 => 75,  193 => 67,  186 => 63,  177 => 57,  170 => 53,  163 => 49,  153 => 42,  146 => 38,  137 => 32,  128 => 26,  119 => 20,  111 => 15,  104 => 11,  99 => 9,  92 => 7,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Registro Digital - Modificar Datos Administrativos {% endblock %}

{% block body %}
{{parent()}}
<h1 class = \"text-center\" >Modificar datos administrativos de: {{egresado.nombre}} {{egresado.apellido}}</h1> 
<div class =\"container\" id = \"divFormulario\">
    <a href = \"{{path('verEgresados')}}\"><i class=\"fas fa-arrow-left grow\" style = \"font-size:30px; color: #0F9FA8\"></i></a>
    
    {{ form_start(formulario, {'enctype':'multipart/form-data'})}}
    <div class = \"row mt-2 justify-content-center\">
        <div class = \"col-sm-4\">
            <h6 class = \"text-secondary  mt-2 text-left ml-1\" style = \"font-size: 14px;\">Nombre rector/a<h6>
            {{ form_widget(formulario.nombreRector, {attr: {class: 'form-control camposEstandar'}})}}
        </div>
        <div class = \"col-sm-1\"></div>
        <div class = \"col-sm-4\">
            <h6 class = \"text-secondary  mt-2 text-left ml-1\" style = \"font-size: 14px;\">Apellido rector/a<h6>
            {{ form_widget(formulario.apellidoRector, {attr: {class: 'form-control camposEstandar'}})}}
        </div>
    </div>
    <div class = \"row mt-2 justify-content-center\">
        <div class = \"col-sm-4\">
            <h6 class = \"text-secondary  mt-2 text-left ml-1\" style = \"font-size: 14px;\">Nombre secretario/a<h6>
            {{ form_widget(formulario.nombreSecretario, {attr: {class: 'form-control camposEstandar'}})}}
            
        </div>
        <div class = \"col-sm-1\"></div>
        <div class = \"col-sm-4\">
            <h6 class = \"text-secondary  mt-2 text-left ml-1\" style = \"font-size: 14px;\">Apellido secretario/a<h6>
            {{ form_widget(formulario.apellidoSecretario, {attr: {class: 'form-control camposEstandar'}})}}
        </div>
    </div>
    <div class = \"row mt-2 justify-content-center\">
        <div class = \"col-sm-3\">
            <h6 class = \"text-secondary  mt-2 text-left ml-1\" style = \"font-size: 14px;\">Nº de aprobación de carrera UNRaf <h6>
            {{ form_widget(formulario.nroResolucionAprob, {attr: {class: 'form-control camposEstandar'}})}}
        </div>
        <div class = \"col-sm-3\">
            <h6 class = \"text-secondary  mt-2 text-left ml-1\" style = \"font-size: 14px;\">Nº de aprobación de carrera ME <h6>
            {{ form_widget(formulario.nroResolucionME, {attr: {class: 'form-control camposEstandar'}})}}
        </div>
        <div class = \"col-sm-3\"></div>
    </div>
    <div class = \"row mt-2 justify-content-center\">
        <div class = \"col-sm-3\">
            <h6 class = \"text-secondary  mt-2 text-left ml-1\" style = \"font-size: 14px;\">Nº Expediente de tramitación<h6>
            {{ form_widget(formulario.nroExpediente, {attr: {class: 'form-control camposEstandar'}})}}
        </div>
        <div class = \"col-sm-3\">
            <h6 class = \"text-secondary  mt-2 text-left ml-1\" style = \"font-size: 14px;\">N° Resolución Rectoral expedición <h6>
            {{ form_widget(formulario.nroResolucionRectoral, {attr: {class: 'form-control camposEstandar'}})}}
        </div>
        <div class = \"col-sm-3\">
               <h6 class = \"text-secondary  mt-2 text-left ml-1\" style = \"font-size: 14px;\">Nº Diploma<h6>
            {{ form_widget(formulario.nroDiploma, {attr: {class: 'form-control camposEstandar'}})}}
        </div>       
    </div>
    <div class = \"row mt-2 justify-content-center\">
        <div class = \"col-sm-3\">
            <h6 class = \"text-secondary  mt-2 text-left ml-1\" style = \"font-size: 14px;\">Nº Certificado analítico<h6>
            {{ form_widget(formulario.nroAnalitico, {attr: {class: 'form-control camposEstandar'}})}}
        </div>
        <div class = \"col-sm-3\">
            <h6 class = \"text-secondary  mt-2 text-left ml-1\" style = \"font-size: 14px;\">Nº Certificado reválida<h6>
            {{ form_widget(formulario.nroRevalida, {attr: {class: 'form-control camposEstandar'}})}}
        </div>
        <div class = \"col-sm-3\"></div>
    </div>
    <div class = \"row mt-4 justify-content-center\">
        <div class = \"col-sm-3\"></div>
        <div class = \"col-sm-3\">
            <h6 class = \"text-secondary text-left ml-1 mt-2\">Fecha de entrega de la documentación</h6>
            {{ form_widget(formulario.fechaEntrega, {attr: {class: 'form-control camposEstandar', style: 'cursor: text;'}})}} 
        </div>
        <div class = \"col-sm-3\"></div>
    </div>
    <div class = \"container mt-4 text-center\">
        {{ form_widget(formulario.Aceptar, {attr: {class: 'btn btn-outline-info btn-lg'}})}}
    </div>
    {{ form_end(formulario) }}
</div>
<br>
<br>
{% endblock %}", "egresado/modificarDatosAdministrativos.html.twig", "/var/www/html/RegistroDigital/templates/egresado/modificarDatosAdministrativos.html.twig");
    }
}
