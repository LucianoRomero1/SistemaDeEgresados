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

/* graduado/altaGraduado.html.twig */
class __TwigTemplate_3935bd8dbc348b50a523e0085fa602d67147dc1dda729e6f44522235eb26af32 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "graduado/altaGraduado.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "graduado/altaGraduado.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "graduado/altaGraduado.html.twig", 1);
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

        echo "Registro Digital - Alta Graduados/as";
        
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

<div class = \"container\" id = \"divFormulario\">
    ";
        // line 15
        echo "    <div class = \"lbl-menu\">
        <label for = \"radio1\">Datos Personales</label>
        <label for = \"radio2\">Domicilio</label>
        <label for = \"radio3\">Blog</label>
        <label for = \"radio4\">Contacto</label>
    </div>
    <div class = \"content\">
        <input type = \"radio\" name = \"radio\" id = \"radio1\" checked>
        <div class = \"tab1\">
            <h2>Inicio</h2>
            <div class = \"container row mt-3 justify-content-center\">
                <div class = \"col-sm-3\">
                    ";
        // line 27
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 27, $this->source); })()), "nombre", [], "any", false, false, false, 27), 'widget', ["attr" => ["class" => "form-control camposEstandar", "placeholder" => "Nombre"]]);
        echo "
                </div>
                <div class = \"col-sm-2\"></div>
                <div class = \"col-sm-3\">
                    ";
        // line 31
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 31, $this->source); })()), "apellido", [], "any", false, false, false, 31), 'widget', ["attr" => ["class" => "form-control camposEstandar", "placeholder" => "Apellido"]]);
        echo "
                </div>
            </div>
        </div>

        <input type = \"radio\" name = \"radio\" id = \"radio2\">
        <div class = \"tab2\">
            <h2>Servicios</h2>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
                Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. 
                It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, 
                and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
            </p>
        </div>

        <input type = \"radio\" name = \"radio\" id = \"radio3\">
        <div class = \"tab3\">
            <h2>Blog</h2>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
                Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. 
                It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, 
                and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
            </p>
        </div>

        <input type = \"radio\" name = \"radio\" id = \"radio4\">
        <div class = \"tab4\">
            <h2>Contactos</h2>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
                Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. 
                It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, 
                and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
            </p>
        </div>
    </div>
    ";
        // line 155
        echo "</div>
<br>
<br>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 160
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 161
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "graduado/altaGraduado.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  181 => 161,  171 => 160,  157 => 155,  116 => 31,  109 => 27,  95 => 15,  89 => 6,  79 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Registro Digital - Alta Graduados/as{% endblock %}

{% block body %}
{{parent()}}

<div class = \"container\" id = \"divFormulario\">
    {# <div id=\"pestanas\">
        <ul id='lista'>
            <li><label for = \"radio1\">Datos Personales</label></li>
            <li></li>
        </ul>
    </div> #}
    <div class = \"lbl-menu\">
        <label for = \"radio1\">Datos Personales</label>
        <label for = \"radio2\">Domicilio</label>
        <label for = \"radio3\">Blog</label>
        <label for = \"radio4\">Contacto</label>
    </div>
    <div class = \"content\">
        <input type = \"radio\" name = \"radio\" id = \"radio1\" checked>
        <div class = \"tab1\">
            <h2>Inicio</h2>
            <div class = \"container row mt-3 justify-content-center\">
                <div class = \"col-sm-3\">
                    {{ form_widget(form.nombre, {attr: {class: 'form-control camposEstandar', placeholder: 'Nombre'}})}}
                </div>
                <div class = \"col-sm-2\"></div>
                <div class = \"col-sm-3\">
                    {{ form_widget(form.apellido, {attr: {class: 'form-control camposEstandar', placeholder: 'Apellido'}})}}
                </div>
            </div>
        </div>

        <input type = \"radio\" name = \"radio\" id = \"radio2\">
        <div class = \"tab2\">
            <h2>Servicios</h2>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
                Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. 
                It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, 
                and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
            </p>
        </div>

        <input type = \"radio\" name = \"radio\" id = \"radio3\">
        <div class = \"tab3\">
            <h2>Blog</h2>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
                Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. 
                It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, 
                and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
            </p>
        </div>

        <input type = \"radio\" name = \"radio\" id = \"radio4\">
        <div class = \"tab4\">
            <h2>Contactos</h2>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
                Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. 
                It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, 
                and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
            </p>
        </div>
    </div>
    {# <div id=\"contenidopestanas\">
        {{ form_start(form, {'enctype':'multipart/form-data'})}}
        <div id = \"datosPersonales\" >
            
            <div class = \"container row mt-3 justify-content-center\">
                <div class = \"col-sm-3\">
                    {{ form_widget(form.nombre, {attr: {class: 'form-control camposEstandar', placeholder: 'Nombre'}})}}
                </div>
                <div class = \"col-sm-2\"></div>
                <div class = \"col-sm-3\">
                    {{ form_widget(form.apellido, {attr: {class: 'form-control camposEstandar', placeholder: 'Apellido'}})}}
                </div>
            </div>
            <div class = \"container row mt-4 justify-content-center\">
                <div class = \"col-sm-3\">
                    {{ form_widget(form.tipoDocumentoIdentidad, {attr: {class: 'form-control camposEstandar'}})}}
                </div>
                <div class =\"col-sm-2\"></div>
                <div class = \"col-sm-3\">
                    {{ form_widget(form.documentoIdentidad, {attr: {class: 'form-control camposEstandar', placeholder: 'Doc de identidad'}})}}
                    <h6 class = \"text-secondary  mt-2 ml-1 text-left\" style = \"font-size: 14px;\">*Sin puntos<h6>
                </div>
            </div>
            <div class = \"container row mt-4 justify-content-center\">
                <div class = \"col-sm-2\"></div>
                <div class =\"col-sm-3\">
                    <h6 class = \"text-secondary  mt-2 ml-1 text-left\" style = \"font-size: 14px;\">Fecha de nacimiento<h6>
                    {{ form_widget(form.fechaNacimiento, {attr: {class: 'form-control camposEstandar', style: 'cursor: text;'}})}}
                </div>
                <div class = \"col-sm-2\"></div>
            </div>
            <div class = \"container row mt-4 justify-content-center\">
                <div class = \"col-sm-3\">
                    {{ form_widget(form.telefono, {attr: {class: 'form-control camposEstandar', placeholder: 'Teléfono'}})}}
                    <h6 class = \"text-secondary ml-1 mt-2 text-left\" style = \"font-size: 14px;\">Anteponer código de área, sin 15 ni espacios<h6>
                </div>
                <div class = \"col-sm-1\"></div>
                <div class = \"col-sm-4\">
                    {{ form_widget(form.email, {attr: {class: 'form-control camposEstandar', placeholder: 'Email'}})}}
                </div>
            </div>
            <hr>
            <h6 class = \"text-info ml-5\" style = \"font-size: 14px;\">*Apartado domicilio graduado/a<h6>
            <div class = \"container row mt-4 justify-content-center\">
                <div class = \"col-sm-2\"></div>
                <div class = \"col-sm-3\">
                    {{ form_widget(form.nacionalidad, {attr: {class: 'form-control camposEstandar', placeholder: 'Nacionalidad'}})}}
                </div>
                <div class = \"col-sm-2\"></div>
            </div>
            <div class = \"container row mt-4 justify-content-center\">
                <div class = \"col-sm-3\">
                    {{ form_widget(form.provincia, {attr: {class: 'form-control camposEstandar', placeholder: 'Provincia'}})}}
                </div>
                <div class = \"col-sm-2\"></div>
                <div class = \"col-sm-3\">
                    {{ form_widget(form.ciudad, {attr: {class: 'form-control camposEstandar', placeholder: 'Ciudad'}})}}
                </div>
            </div>
            <div class = \"container row mt-4 justify-content-center\">
                <div class = \"col-sm-3\">
                    {{ form_widget(form.calle, {attr: {class: 'form-control camposEstandar', placeholder: 'Calle'}})}}
                </div>
                <div class = \"col-sm-1\">
                </div>
                <div class = \"col-sm-2\">
                    {{ form_widget(form.numeroCalle, {attr: {class: 'form-control camposEstandar'}})}}
                    <h6 class = \"text-secondary mt-2 ml-1 text-left\" style = \"font-size: 14px;\">Nro de domicilio<h6>
                
                </div>
                <div class = \"col-sm-1\">
                    {{ form_widget(form.piso, {attr: {class: 'form-control camposEstandar'}})}}
                    <h6 class = \"text-secondary mt-2 ml-1 text-left\" style = \"font-size: 14px;\">Piso<h6>
                </div>
                <div class = \"col-sm-1\">
                    {{ form_widget(form.depto, {attr: {class: 'form-control camposEstandar'}})}}
                    <h6 class = \"text-secondary mt-2 ml-1 text-left\" style = \"font-size: 14px;\">Depto<h6>
                </div>
            </div>
        </div>
    
        <div id = \"datosAcademicos\">
            PROBANDO PAI
        </div> 
        {{ form_end(form) }}
    </div>#}
</div>
<br>
<br>

{% endblock %}
{% block  javascripts %}
{{parent()}}

{% endblock %}

", "graduado/altaGraduado.html.twig", "/var/www/html/RegistroDigital/templates/graduado/altaGraduado.html.twig");
    }
}
