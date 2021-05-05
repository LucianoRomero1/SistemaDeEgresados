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

/* myPdf.html.twig */
class __TwigTemplate_8d2eebc253654fc7f210809dd91a8a571a70c1f6733a4d8a05732a4037aab2c2 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "myPdf.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "myPdf.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>PDF de ";
        // line 5
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["egresado"]) || array_key_exists("egresado", $context) ? $context["egresado"] : (function () { throw new RuntimeError('Variable "egresado" does not exist.', 5, $this->source); })()), "nombre", [], "any", false, false, false, 5), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["egresado"]) || array_key_exists("egresado", $context) ? $context["egresado"] : (function () { throw new RuntimeError('Variable "egresado" does not exist.', 5, $this->source); })()), "apellido", [], "any", false, false, false, 5), "html", null, true);
        echo "</title>
        <link href = \"";
        // line 6
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/pdfEstilos.css"), "html", null, true);
        echo "\" rel = \"stylesheet\" type = \"text/css\">
    </head>
    <body style = \"border: 1px solid; font-family: Helvetica, sans-serif;\">
        <div style = \"position:relative; left: 70%; top: 3%; height: 140px; width: 180px;\">
            <ul style = \"list-style-type:none; font-size: 12px;\">
                <li>
                    <b>Registro Nº: ";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["egresado"]) || array_key_exists("egresado", $context) ? $context["egresado"] : (function () { throw new RuntimeError('Variable "egresado" does not exist.', 12, $this->source); })()), "id", [], "any", false, false, false, 12), "html", null, true);
        echo "</b>
                    <p>Libro: ";
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["egresado"]) || array_key_exists("egresado", $context) ? $context["egresado"] : (function () { throw new RuntimeError('Variable "egresado" does not exist.', 13, $this->source); })()), "libro", [], "any", false, false, false, 13), "html", null, true);
        echo "</p>
                    <p>Folio: ";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["egresado"]) || array_key_exists("egresado", $context) ? $context["egresado"] : (function () { throw new RuntimeError('Variable "egresado" does not exist.', 14, $this->source); })()), "folio", [], "any", false, false, false, 14), "html", null, true);
        echo "</p>
                </li>
            </ul> 
        </div>
        <div style = \"text-align: center;  \">
            <b style = \"font-size: 18px; margin: 50px;\">Registro de emisión y entrega de Títulos Académicos de la Universidad Nacional de Rafaela</b>
        </div>
        <br>
        <div>
            <hr>
            <div style = \"margin: 8px; font-size: 14px;\"><b>Nombres y apellidos del/la egresado/a:</b> ";
        // line 24
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["egresado"]) || array_key_exists("egresado", $context) ? $context["egresado"] : (function () { throw new RuntimeError('Variable "egresado" does not exist.', 24, $this->source); })()), "nombre", [], "any", false, false, false, 24), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["egresado"]) || array_key_exists("egresado", $context) ? $context["egresado"] : (function () { throw new RuntimeError('Variable "egresado" does not exist.', 24, $this->source); })()), "apellido", [], "any", false, false, false, 24), "html", null, true);
        echo "</div>
            <hr>
            <div style = \"margin: 8px; font-size: 14px;\"><b>Lugar de nacimiento: </b>";
        // line 26
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["egresado"]) || array_key_exists("egresado", $context) ? $context["egresado"] : (function () { throw new RuntimeError('Variable "egresado" does not exist.', 26, $this->source); })()), "ciudad", [], "any", false, false, false, 26), "html", null, true);
        echo " - ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["egresado"]) || array_key_exists("egresado", $context) ? $context["egresado"] : (function () { throw new RuntimeError('Variable "egresado" does not exist.', 26, $this->source); })()), "provincia", [], "any", false, false, false, 26), "html", null, true);
        echo " <b style = \"margin-left: 60px;\">Fecha de nacimiento: </b> ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["egresado"]) || array_key_exists("egresado", $context) ? $context["egresado"] : (function () { throw new RuntimeError('Variable "egresado" does not exist.', 26, $this->source); })()), "fechaNacimiento", [], "any", false, false, false, 26), "d/m/Y"), "html", null, true);
        echo "</div>
            <hr>
            <div style = \"margin: 8px; font-size: 14px;\"><b>Nacionalidad: </b>";
        // line 28
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["egresado"]) || array_key_exists("egresado", $context) ? $context["egresado"] : (function () { throw new RuntimeError('Variable "egresado" does not exist.', 28, $this->source); })()), "nacionalidad", [], "any", false, false, false, 28), "html", null, true);
        echo "</div>
            <hr>
            <div style = \"margin: 8px; font-size: 14px;\"><b>Tipo documento de identidad: </b>";
        // line 30
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["egresado"]) || array_key_exists("egresado", $context) ? $context["egresado"] : (function () { throw new RuntimeError('Variable "egresado" does not exist.', 30, $this->source); })()), "tipoDocumentoIdentidad", [], "any", false, false, false, 30), "html", null, true);
        echo " <b style = \"margin-left: 60px;\">Nº: </b>";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["egresado"]) || array_key_exists("egresado", $context) ? $context["egresado"] : (function () { throw new RuntimeError('Variable "egresado" does not exist.', 30, $this->source); })()), "dni", [], "any", false, false, false, 30), "html", null, true);
        echo "</div>
            <hr>
            ";
        // line 32
        if ((((0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["egresado"]) || array_key_exists("egresado", $context) ? $context["egresado"] : (function () { throw new RuntimeError('Variable "egresado" does not exist.', 32, $this->source); })()), "piso", [], "any", false, false, false, 32), null)) || ((0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["egresado"]) || array_key_exists("egresado", $context) ? $context["egresado"] : (function () { throw new RuntimeError('Variable "egresado" does not exist.', 32, $this->source); })()), "piso", [], "any", false, false, false, 32), 0)) && (0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["egresado"]) || array_key_exists("egresado", $context) ? $context["egresado"] : (function () { throw new RuntimeError('Variable "egresado" does not exist.', 32, $this->source); })()), "depto", [], "any", false, false, false, 32), null)))) || (0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["egresado"]) || array_key_exists("egresado", $context) ? $context["egresado"] : (function () { throw new RuntimeError('Variable "egresado" does not exist.', 32, $this->source); })()), "depto", [], "any", false, false, false, 32), 0)))) {
            // line 33
            echo "                <div style = \"margin: 8px; font-size: 14px;\"><b>Domicilio del/la egresado/a: </b>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["egresado"]) || array_key_exists("egresado", $context) ? $context["egresado"] : (function () { throw new RuntimeError('Variable "egresado" does not exist.', 33, $this->source); })()), "calle", [], "any", false, false, false, 33), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["egresado"]) || array_key_exists("egresado", $context) ? $context["egresado"] : (function () { throw new RuntimeError('Variable "egresado" does not exist.', 33, $this->source); })()), "nroDomicilio", [], "any", false, false, false, 33), "html", null, true);
            echo "</div>
                <hr>  
            ";
        } else {
            // line 36
            echo "                <div style = \"margin: 8px; font-size: 14px;\"><b>Domicilio del/la egresado/a: </b>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["egresado"]) || array_key_exists("egresado", $context) ? $context["egresado"] : (function () { throw new RuntimeError('Variable "egresado" does not exist.', 36, $this->source); })()), "calle", [], "any", false, false, false, 36), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["egresado"]) || array_key_exists("egresado", $context) ? $context["egresado"] : (function () { throw new RuntimeError('Variable "egresado" does not exist.', 36, $this->source); })()), "nroDomicilio", [], "any", false, false, false, 36), "html", null, true);
            echo " <b style = \"margin-left: 60px;\">Piso: </b> ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["egresado"]) || array_key_exists("egresado", $context) ? $context["egresado"] : (function () { throw new RuntimeError('Variable "egresado" does not exist.', 36, $this->source); })()), "piso", [], "any", false, false, false, 36), "html", null, true);
            echo " <b style = \"margin-left: 50px;\">Depto: </b> ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["egresado"]) || array_key_exists("egresado", $context) ? $context["egresado"] : (function () { throw new RuntimeError('Variable "egresado" does not exist.', 36, $this->source); })()), "depto", [], "any", false, false, false, 36), "html", null, true);
            echo "</div>
                <hr>  
            ";
        }
        // line 39
        echo "            <div style = \"margin: 8px; font-size: 14px;\"><b>Denominación de la carrera: </b> ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["egresado"]) || array_key_exists("egresado", $context) ? $context["egresado"] : (function () { throw new RuntimeError('Variable "egresado" does not exist.', 39, $this->source); })()), "denominacionCarrera", [], "any", false, false, false, 39), "nombreCarrera", [], "any", false, false, false, 39), "html", null, true);
        echo "</div>
            <hr>
            <div style = \"margin: 8px; font-size: 14px;\"><b>Título otorgado:</b> ";
        // line 41
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["egresado"]) || array_key_exists("egresado", $context) ? $context["egresado"] : (function () { throw new RuntimeError('Variable "egresado" does not exist.', 41, $this->source); })()), "tituloOtorgado", [], "any", false, false, false, 41), "nombreTitulo", [], "any", false, false, false, 41), "html", null, true);
        echo "</div>
            <hr>
            <div style = \"margin: 8px; font-size: 14px;\"><b>Fecha de egreso: </b>";
        // line 43
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["egresado"]) || array_key_exists("egresado", $context) ? $context["egresado"] : (function () { throw new RuntimeError('Variable "egresado" does not exist.', 43, $this->source); })()), "fechaEgreso", [], "any", false, false, false, 43), "d/m/Y"), "html", null, true);
        echo "</div>
            <hr>
            <div style = \"margin: 8px; font-size: 14px;\"><b>Tipo de documento entregado: </b>";
        // line 45
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["egresado"]) || array_key_exists("egresado", $context) ? $context["egresado"] : (function () { throw new RuntimeError('Variable "egresado" does not exist.', 45, $this->source); })()), "documentoEmitido", [], "any", false, false, false, 45), "tipoDocumento", [], "any", false, false, false, 45), "html", null, true);
        echo " <b style = \"margin-left: 60px;\">Es: </b>";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["egresado"]) || array_key_exists("egresado", $context) ? $context["egresado"] : (function () { throw new RuntimeError('Variable "egresado" does not exist.', 45, $this->source); })()), "originalDuplicado", [], "any", false, false, false, 45), "html", null, true);
        echo "</div>
            <hr>
            <div style = \"margin: 8px; font-size: 14px;\"><b>Nº Resolución UNRaf de aprobación de la carrera: </b>";
        // line 47
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["egresado"]) || array_key_exists("egresado", $context) ? $context["egresado"] : (function () { throw new RuntimeError('Variable "egresado" does not exist.', 47, $this->source); })()), "nroResolucionAprob", [], "any", false, false, false, 47), "html", null, true);
        echo "</div>
            <hr> 
            <div style = \"margin: 8px; font-size: 14px;\"><b>Nº Resolución ME de aprobación de la carrera: </b> ";
        // line 49
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["egresado"]) || array_key_exists("egresado", $context) ? $context["egresado"] : (function () { throw new RuntimeError('Variable "egresado" does not exist.', 49, $this->source); })()), "nroResolucionME", [], "any", false, false, false, 49), "html", null, true);
        echo "</div>
            <hr> 
            <div style = \"margin: 8px; font-size: 14px;\"><b>Nº de expediente UNRaf de tramitación de la solicitud: </b>";
        // line 51
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["egresado"]) || array_key_exists("egresado", $context) ? $context["egresado"] : (function () { throw new RuntimeError('Variable "egresado" does not exist.', 51, $this->source); })()), "nroExpediente", [], "any", false, false, false, 51), "html", null, true);
        echo "</div>
            <hr> 
            <div style = \"margin: 8px; font-size: 14px;\"><b>Nº Resolución Rectoral de expedición: </b>";
        // line 53
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["egresado"]) || array_key_exists("egresado", $context) ? $context["egresado"] : (function () { throw new RuntimeError('Variable "egresado" does not exist.', 53, $this->source); })()), "nroResolucionRectoral", [], "any", false, false, false, 53), "html", null, true);
        echo "</div>
            <hr> 
            <div style = \"margin: 8px; font-size: 14px;\"><b>Nº de Diploma: </b>";
        // line 55
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["egresado"]) || array_key_exists("egresado", $context) ? $context["egresado"] : (function () { throw new RuntimeError('Variable "egresado" does not exist.', 55, $this->source); })()), "nroDiploma", [], "any", false, false, false, 55), "html", null, true);
        echo "</div>
            <hr> 
            <div style = \"margin: 8px; font-size: 14px;\"><b>Nº de Certificado Analítico: </b>";
        // line 57
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["egresado"]) || array_key_exists("egresado", $context) ? $context["egresado"] : (function () { throw new RuntimeError('Variable "egresado" does not exist.', 57, $this->source); })()), "nroAnalitico", [], "any", false, false, false, 57), "html", null, true);
        echo "</div>
            <hr> 
            <div style = \"margin: 8px; font-size: 14px;\"><b>Nº de Certificado de Reválida: </b>";
        // line 59
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["egresado"]) || array_key_exists("egresado", $context) ? $context["egresado"] : (function () { throw new RuntimeError('Variable "egresado" does not exist.', 59, $this->source); })()), "nroRevalida", [], "any", false, false, false, 59), "html", null, true);
        echo "</div>
            <hr>
            <div style = \"margin: 8px; font-size: 14px;\"><b>Nombre y apellido del/la Rector/a: </b>";
        // line 61
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["egresado"]) || array_key_exists("egresado", $context) ? $context["egresado"] : (function () { throw new RuntimeError('Variable "egresado" does not exist.', 61, $this->source); })()), "nombreRector", [], "any", false, false, false, 61), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["egresado"]) || array_key_exists("egresado", $context) ? $context["egresado"] : (function () { throw new RuntimeError('Variable "egresado" does not exist.', 61, $this->source); })()), "apellidoRector", [], "any", false, false, false, 61), "html", null, true);
        echo " </div>
            <hr> 
            <div style = \"margin: 8px; font-size: 14px;\"><b>Nombre y apellido del/la Secretario/a Académico/a: </b>";
        // line 63
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["egresado"]) || array_key_exists("egresado", $context) ? $context["egresado"] : (function () { throw new RuntimeError('Variable "egresado" does not exist.', 63, $this->source); })()), "nombreSecretario", [], "any", false, false, false, 63), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["egresado"]) || array_key_exists("egresado", $context) ? $context["egresado"] : (function () { throw new RuntimeError('Variable "egresado" does not exist.', 63, $this->source); })()), "apellidoSecretario", [], "any", false, false, false, 63), "html", null, true);
        echo " </div>
            <hr>
        </div>
        <br>
        <br>
        <br>
        <br>
        <div style = \"margin-top: 50px; margin-left: 80px;\">  
            <b style = \"font-size: 14px; \">
                En el día de la fecha recibí en conformidad la documentación que acredita el título de <span style = \"text-decoration: underline;\">";
        // line 72
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["egresado"]) || array_key_exists("egresado", $context) ? $context["egresado"] : (function () { throw new RuntimeError('Variable "egresado" does not exist.', 72, $this->source); })()), "nombre", [], "any", false, false, false, 72), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["egresado"]) || array_key_exists("egresado", $context) ? $context["egresado"] : (function () { throw new RuntimeError('Variable "egresado" does not exist.', 72, $this->source); })()), "apellido", [], "any", false, false, false, 72), "html", null, true);
        echo "</span> 
                expedido por la Universidad Nacional de Rafaela.
            </b>
        </div>
        <div style =\"text-align:center; margin-top: 25px;\">
            <h5>...............................................................</h5>
            <h5>Firma egresado/a</h5>
        </div>
        <div style =\"text-align:center; margin-top: 25px;\">
            <h5>...............................................................</h5>
            <h5>Aclaración egresado/a</h5>
        </div>
        <div style =\"text-align:center; margin-top: 25px;\">
            <h5>Lugar y fecha: .................................................................... , ............. de ............. de .............</h5>
        </div>
        <div style =\"text-align:center; margin-top: 100px; \">
            <div style = \"position:relative; left: -150px;\">
                <h5>.....................................................</h5>
                <h6>Firma y sello Director/a del</h6>
                <h6>Departamento de Títulos y Concursos</h6>
            </div>
            <div style = \"position:relative; top: -140px; left: 150px;\">
                <h5>.....................................................</h5>
                <h6>Firma y sello del/la Secretario/a Académico/a</h6>
            </div>
        </div>
    </body>
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "myPdf.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  216 => 72,  202 => 63,  195 => 61,  190 => 59,  185 => 57,  180 => 55,  175 => 53,  170 => 51,  165 => 49,  160 => 47,  153 => 45,  148 => 43,  143 => 41,  137 => 39,  124 => 36,  115 => 33,  113 => 32,  106 => 30,  101 => 28,  92 => 26,  85 => 24,  72 => 14,  68 => 13,  64 => 12,  55 => 6,  49 => 5,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>PDF de {{egresado.nombre}} {{egresado.apellido}}</title>
        <link href = \"{{asset(\"css/pdfEstilos.css\")}}\" rel = \"stylesheet\" type = \"text/css\">
    </head>
    <body style = \"border: 1px solid; font-family: Helvetica, sans-serif;\">
        <div style = \"position:relative; left: 70%; top: 3%; height: 140px; width: 180px;\">
            <ul style = \"list-style-type:none; font-size: 12px;\">
                <li>
                    <b>Registro Nº: {{egresado.id}}</b>
                    <p>Libro: {{egresado.libro}}</p>
                    <p>Folio: {{egresado.folio}}</p>
                </li>
            </ul> 
        </div>
        <div style = \"text-align: center;  \">
            <b style = \"font-size: 18px; margin: 50px;\">Registro de emisión y entrega de Títulos Académicos de la Universidad Nacional de Rafaela</b>
        </div>
        <br>
        <div>
            <hr>
            <div style = \"margin: 8px; font-size: 14px;\"><b>Nombres y apellidos del/la egresado/a:</b> {{egresado.nombre}} {{egresado.apellido}}</div>
            <hr>
            <div style = \"margin: 8px; font-size: 14px;\"><b>Lugar de nacimiento: </b>{{egresado.ciudad}} - {{egresado.provincia}} <b style = \"margin-left: 60px;\">Fecha de nacimiento: </b> {{egresado.fechaNacimiento|date(\"d/m/Y\")}}</div>
            <hr>
            <div style = \"margin: 8px; font-size: 14px;\"><b>Nacionalidad: </b>{{egresado.nacionalidad}}</div>
            <hr>
            <div style = \"margin: 8px; font-size: 14px;\"><b>Tipo documento de identidad: </b>{{egresado.tipoDocumentoIdentidad}} <b style = \"margin-left: 60px;\">Nº: </b>{{egresado.dni}}</div>
            <hr>
            {% if egresado.piso == null or egresado.piso == 0 and egresado.depto == null or egresado.depto == 0 %}
                <div style = \"margin: 8px; font-size: 14px;\"><b>Domicilio del/la egresado/a: </b>{{egresado.calle}} {{egresado.nroDomicilio}}</div>
                <hr>  
            {% else %}
                <div style = \"margin: 8px; font-size: 14px;\"><b>Domicilio del/la egresado/a: </b>{{egresado.calle}} {{egresado.nroDomicilio}} <b style = \"margin-left: 60px;\">Piso: </b> {{egresado.piso}} <b style = \"margin-left: 50px;\">Depto: </b> {{egresado.depto}}</div>
                <hr>  
            {% endif %}
            <div style = \"margin: 8px; font-size: 14px;\"><b>Denominación de la carrera: </b> {{egresado.denominacionCarrera.nombreCarrera}}</div>
            <hr>
            <div style = \"margin: 8px; font-size: 14px;\"><b>Título otorgado:</b> {{egresado.tituloOtorgado.nombreTitulo}}</div>
            <hr>
            <div style = \"margin: 8px; font-size: 14px;\"><b>Fecha de egreso: </b>{{egresado.fechaEgreso|date(\"d/m/Y\") }}</div>
            <hr>
            <div style = \"margin: 8px; font-size: 14px;\"><b>Tipo de documento entregado: </b>{{egresado.documentoEmitido.tipoDocumento}} <b style = \"margin-left: 60px;\">Es: </b>{{egresado.originalDuplicado}}</div>
            <hr>
            <div style = \"margin: 8px; font-size: 14px;\"><b>Nº Resolución UNRaf de aprobación de la carrera: </b>{{egresado.nroResolucionAprob}}</div>
            <hr> 
            <div style = \"margin: 8px; font-size: 14px;\"><b>Nº Resolución ME de aprobación de la carrera: </b> {{egresado.nroResolucionME}}</div>
            <hr> 
            <div style = \"margin: 8px; font-size: 14px;\"><b>Nº de expediente UNRaf de tramitación de la solicitud: </b>{{egresado.nroExpediente}}</div>
            <hr> 
            <div style = \"margin: 8px; font-size: 14px;\"><b>Nº Resolución Rectoral de expedición: </b>{{egresado.nroResolucionRectoral}}</div>
            <hr> 
            <div style = \"margin: 8px; font-size: 14px;\"><b>Nº de Diploma: </b>{{egresado.nroDiploma}}</div>
            <hr> 
            <div style = \"margin: 8px; font-size: 14px;\"><b>Nº de Certificado Analítico: </b>{{egresado.nroAnalitico}}</div>
            <hr> 
            <div style = \"margin: 8px; font-size: 14px;\"><b>Nº de Certificado de Reválida: </b>{{egresado.nroRevalida}}</div>
            <hr>
            <div style = \"margin: 8px; font-size: 14px;\"><b>Nombre y apellido del/la Rector/a: </b>{{egresado.nombreRector}} {{egresado.apellidoRector}} </div>
            <hr> 
            <div style = \"margin: 8px; font-size: 14px;\"><b>Nombre y apellido del/la Secretario/a Académico/a: </b>{{egresado.nombreSecretario}} {{egresado.apellidoSecretario}} </div>
            <hr>
        </div>
        <br>
        <br>
        <br>
        <br>
        <div style = \"margin-top: 50px; margin-left: 80px;\">  
            <b style = \"font-size: 14px; \">
                En el día de la fecha recibí en conformidad la documentación que acredita el título de <span style = \"text-decoration: underline;\">{{egresado.nombre}} {{egresado.apellido}}</span> 
                expedido por la Universidad Nacional de Rafaela.
            </b>
        </div>
        <div style =\"text-align:center; margin-top: 25px;\">
            <h5>...............................................................</h5>
            <h5>Firma egresado/a</h5>
        </div>
        <div style =\"text-align:center; margin-top: 25px;\">
            <h5>...............................................................</h5>
            <h5>Aclaración egresado/a</h5>
        </div>
        <div style =\"text-align:center; margin-top: 25px;\">
            <h5>Lugar y fecha: .................................................................... , ............. de ............. de .............</h5>
        </div>
        <div style =\"text-align:center; margin-top: 100px; \">
            <div style = \"position:relative; left: -150px;\">
                <h5>.....................................................</h5>
                <h6>Firma y sello Director/a del</h6>
                <h6>Departamento de Títulos y Concursos</h6>
            </div>
            <div style = \"position:relative; top: -140px; left: 150px;\">
                <h5>.....................................................</h5>
                <h6>Firma y sello del/la Secretario/a Académico/a</h6>
            </div>
        </div>
    </body>
</html>
", "myPdf.html.twig", "/var/www/html/RegistroDigital/templates/myPdf.html.twig");
    }
}
