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

/* sistema/datosAcademicos.html.twig */
class __TwigTemplate_cabc5ac1b00c4aac548046b7a76bc05b4c36c06f73f62cf2b11c5f3ba6db2829 extends Template
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
        // line 2
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "sistema/datosAcademicos.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "sistema/datosAcademicos.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "sistema/datosAcademicos.html.twig", 2);
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

        echo "Registro Digital - Datos Academicos";
        
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
<h1 class = \"text-center\">¿Que datos académicos desea modificar?</h1>
<div class = \"container list-group\"  id = \"divFormulario\">
    
    <div class = \"container mt-2 divDatosAcademicos\" >
        <input type = \"button\" value = \"Denominación de las carreras\" id = \"idCarreras\" class=\"list-group-item list-group-item-action datosAcademicos\">
        <div  class = \"container mt-1 divDatosAcademicosInt\" id = \"modificacionesCarrera\">
            ";
        // line 15
        echo "            <a href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("verCarreras");
        echo "\" class=\"list-group-item list-group-item-action mt-1 datosAcademicosInt\" id = \"acciones\">Ver/Modificar Carreras</a>
        </div>
    </div>
    <div class = \"container mt-2 divDatosAcademicos\">
        <input type = \"button\" value = \"Tipo de documento emitido\" id = \"idDocumentos\" class=\"list-group-item list-group-item-action datosAcademicos\">
        <div class = \"container mt-1 divDatosAcademicosInt\" id = \"modificacionesDocumentos\">
            ";
        // line 22
        echo "            <a href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("verDocumentos");
        echo "\" class=\"list-group-item list-group-item-action mt-1 datosAcademicosInt\"  id = \"acciones\">Ver/Modificar Documentos</a>
        </div>
    </div>
    <div class = \"container mt-2 divDatosAcademicos\" >
        <input type = \"button\" value = \"Título otorgado\" id = \"idTitulos\" class=\"list-group-item list-group-item-action datosAcademicos\">
        <div class = \"container mt-1 divDatosAcademicosInt\" id = \"modificacionesTitulos\">
            ";
        // line 29
        echo "            <a href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("verTitulos");
        echo "\" class=\"list-group-item list-group-item-action mt-1 datosAcademicosInt\" id = \"acciones\">Ver/Modificar Titulos</a>
        </div>
    </div>
   
  
</div>
<br>
<br>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "sistema/datosAcademicos.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  118 => 29,  108 => 22,  98 => 15,  88 => 7,  78 => 6,  59 => 4,  36 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("
{% extends 'base.html.twig' %}

{% block title %}Registro Digital - Datos Academicos{% endblock %}

{% block body %}
{{parent()}}
<h1 class = \"text-center\">¿Que datos académicos desea modificar?</h1>
<div class = \"container list-group\"  id = \"divFormulario\">
    
    <div class = \"container mt-2 divDatosAcademicos\" >
        <input type = \"button\" value = \"Denominación de las carreras\" id = \"idCarreras\" class=\"list-group-item list-group-item-action datosAcademicos\">
        <div  class = \"container mt-1 divDatosAcademicosInt\" id = \"modificacionesCarrera\">
            {# <a href=\"{{path('altaCarreras')}}\" class=\"list-group-item list-group-item-action datosAcademicosInt\" id = \"acciones\">Alta Carreras</a> #}
            <a href=\"{{path('verCarreras')}}\" class=\"list-group-item list-group-item-action mt-1 datosAcademicosInt\" id = \"acciones\">Ver/Modificar Carreras</a>
        </div>
    </div>
    <div class = \"container mt-2 divDatosAcademicos\">
        <input type = \"button\" value = \"Tipo de documento emitido\" id = \"idDocumentos\" class=\"list-group-item list-group-item-action datosAcademicos\">
        <div class = \"container mt-1 divDatosAcademicosInt\" id = \"modificacionesDocumentos\">
            {# <a href=\"{{path('altaDocumentos')}}\" class=\"list-group-item list-group-item-action datosAcademicosInt\" id = \"acciones\">Alta Documentos</a> #}
            <a href=\"{{path('verDocumentos')}}\" class=\"list-group-item list-group-item-action mt-1 datosAcademicosInt\"  id = \"acciones\">Ver/Modificar Documentos</a>
        </div>
    </div>
    <div class = \"container mt-2 divDatosAcademicos\" >
        <input type = \"button\" value = \"Título otorgado\" id = \"idTitulos\" class=\"list-group-item list-group-item-action datosAcademicos\">
        <div class = \"container mt-1 divDatosAcademicosInt\" id = \"modificacionesTitulos\">
            {# <a href=\"{{path('altaTitulos')}}\" class=\"list-group-item list-group-item-action datosAcademicosInt\" id = \"acciones\">Alta Titulos</a> #}
            <a href=\"{{path('verTitulos')}}\" class=\"list-group-item list-group-item-action mt-1 datosAcademicosInt\" id = \"acciones\">Ver/Modificar Titulos</a>
        </div>
    </div>
   
  
</div>
<br>
<br>
{% endblock %}
", "sistema/datosAcademicos.html.twig", "/var/www/html/RegistroDigital/templates/sistema/datosAcademicos.html.twig");
    }
}
