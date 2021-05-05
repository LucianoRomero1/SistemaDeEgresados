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

/* egresado/modificarArchivos.html.twig */
class __TwigTemplate_927612e70a47f040aee9df8665bd1978eca395154a7912dc27b88fd4da5b98ac extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "egresado/modificarArchivos.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "egresado/modificarArchivos.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "egresado/modificarArchivos.html.twig", 1);
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

        echo "Registro Digital - Modificar Archivos";
        
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
<h1 class = \"text-center\">Modificar archivos cargados de: ";
        // line 7
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["egresado"]) || array_key_exists("egresado", $context) ? $context["egresado"] : (function () { throw new RuntimeError('Variable "egresado" does not exist.', 7, $this->source); })()), "nombre", [], "any", false, false, false, 7), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["egresado"]) || array_key_exists("egresado", $context) ? $context["egresado"] : (function () { throw new RuntimeError('Variable "egresado" does not exist.', 7, $this->source); })()), "apellido", [], "any", false, false, false, 7), "html", null, true);
        echo "</h1> 
<div class = \"container\" id= \"divFormulario\">
    <a href = \"";
        // line 9
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("verEgresados");
        echo "\"><i class=\"fas fa-arrow-left grow\" style = \"font-size:30px; color: #0F9FA8\"></i></a>
    
    ";
        // line 11
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formulario"]) || array_key_exists("formulario", $context) ? $context["formulario"] : (function () { throw new RuntimeError('Variable "formulario" does not exist.', 11, $this->source); })()), 'form_start', ["enctype" => "multipart/form-data"]);
        echo "
    <div class = \"row mt-5 justify-content-center\">
        <div class = \"col-sm-4 text-center\">
            ";
        // line 14
        if ((0 !== twig_compare((isset($context["pdf"]) || array_key_exists("pdf", $context) ? $context["pdf"] : (function () { throw new RuntimeError('Variable "pdf" does not exist.', 14, $this->source); })()), null))) {
            // line 15
            echo "                <h6 class = \"text-secondary text-center\"> Certificado Analítico<h6>
                <ul class = \"mt-5\">
                    <li>
                        <img src=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("svg/pdf2.png"), "html", null, true);
            echo "\" width=\"40\" alt=\"PDF\">
                        <a class=\"btn btn-primary ml-4 grow\" href=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("verPDF", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["egresado"]) || array_key_exists("egresado", $context) ? $context["egresado"] : (function () { throw new RuntimeError('Variable "egresado" does not exist.', 19, $this->source); })()), "id", [], "any", false, false, false, 19)]), "html", null, true);
            echo "\"><i class=\"fas fa-search\"></i></a>
                        <a class = \"btn btn-success ml-4 grow\" href = \"";
            // line 20
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/pdfsAnalitico/" . (isset($context["pdf"]) || array_key_exists("pdf", $context) ? $context["pdf"] : (function () { throw new RuntimeError('Variable "pdf" does not exist.', 20, $this->source); })()))), "html", null, true);
            echo " \" download =\"";
            echo twig_escape_filter($this->env, ((("pdfAnalitico de " . twig_get_attribute($this->env, $this->source, (isset($context["egresado"]) || array_key_exists("egresado", $context) ? $context["egresado"] : (function () { throw new RuntimeError('Variable "egresado" does not exist.', 20, $this->source); })()), "nombre", [], "any", false, false, false, 20)) . " ") . twig_get_attribute($this->env, $this->source, (isset($context["egresado"]) || array_key_exists("egresado", $context) ? $context["egresado"] : (function () { throw new RuntimeError('Variable "egresado" does not exist.', 20, $this->source); })()), "apellido", [], "any", false, false, false, 20)), "html", null, true);
            echo "\"><i class=\"fas fa-download\"></i></a>
                        <a class = \"btn btn-danger text-white ml-4 grow\" onclick=\"DeletePDF(";
            // line 21
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["egresado"]) || array_key_exists("egresado", $context) ? $context["egresado"] : (function () { throw new RuntimeError('Variable "egresado" does not exist.', 21, $this->source); })()), "id", [], "any", false, false, false, 21), "html", null, true);
            echo ")\" ><i class=\"fas fa-ban\"></i></a>
                    </li>
                </ul>
            ";
        } else {
            // line 25
            echo "                <h6 class = \"text-center\" style = \"font-size: 15px;\">*No hay pdf cargado</h6>
                ";
            // line 26
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formulario"]) || array_key_exists("formulario", $context) ? $context["formulario"] : (function () { throw new RuntimeError('Variable "formulario" does not exist.', 26, $this->source); })()), "pdfAnalitico", [], "any", false, false, false, 26), 'widget', ["attr" => ["accept" => " application / .pdf"]]);
            echo "
            ";
        }
        // line 28
        echo "        </div>
        <div class = \"col-sm-3\"></div>
        <div class = \"col-sm-5\">
            <h6 class = \"text-secondary text-center\">";
        // line 31
        echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["imagenes"]) || array_key_exists("imagenes", $context) ? $context["imagenes"] : (function () { throw new RuntimeError('Variable "imagenes" does not exist.', 31, $this->source); })())), "html", null, true);
        echo " de 5 imágenes cargadas<h6>
            ";
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["imagenes"]) || array_key_exists("imagenes", $context) ? $context["imagenes"] : (function () { throw new RuntimeError('Variable "imagenes" does not exist.', 32, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["imagen"]) {
            echo "    
                <ul>
                    <li class = \"mt-4\">
                        <img src=\"";
            // line 35
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/imagenesDigitales/" . twig_get_attribute($this->env, $this->source, $context["imagen"], "nombreArchivo", [], "any", false, false, false, 35))), "html", null, true);
            echo "\" width=\"55\" alt=\"PNG\">
                        <a class=\"btn btn-primary ml-5 grow\" href=\"";
            // line 36
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("verImagen", ["nombreImagen" => twig_get_attribute($this->env, $this->source, $context["imagen"], "nombreArchivo", [], "any", false, false, false, 36)]), "html", null, true);
            echo "\"><i class=\"fas fa-search\"></i></a>
                        <a class = \"btn btn-success ml-5 grow\"  href = \"";
            // line 37
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/imagenesDigitales/" . twig_get_attribute($this->env, $this->source, $context["imagen"], "nombreArchivo", [], "any", false, false, false, 37))), "html", null, true);
            echo " \" download =\"";
            echo twig_escape_filter($this->env, ((((twig_get_attribute($this->env, $this->source, (isset($context["egresado"]) || array_key_exists("egresado", $context) ? $context["egresado"] : (function () { throw new RuntimeError('Variable "egresado" does not exist.', 37, $this->source); })()), "nombre", [], "any", false, false, false, 37) . " ") . twig_get_attribute($this->env, $this->source, (isset($context["egresado"]) || array_key_exists("egresado", $context) ? $context["egresado"] : (function () { throw new RuntimeError('Variable "egresado" does not exist.', 37, $this->source); })()), "apellido", [], "any", false, false, false, 37)) . " ") . "imagenDigital"), "html", null, true);
            echo "\"><i class=\"fas fa-download\"></i></a>
                        <a class = \"btn btn-danger text-white ml-5 grow\" onclick=\"DeleteImagen(";
            // line 38
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["imagen"], "id", [], "any", false, false, false, 38), "html", null, true);
            echo ",";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["egresado"]) || array_key_exists("egresado", $context) ? $context["egresado"] : (function () { throw new RuntimeError('Variable "egresado" does not exist.', 38, $this->source); })()), "id", [], "any", false, false, false, 38), "html", null, true);
            echo ")\" ><i class=\"fas fa-ban\"></i></a>
                        <hr>
                    </li>
                </ul>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['imagen'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "            ";
        if ((-1 === twig_compare(twig_length_filter($this->env, (isset($context["imagenes"]) || array_key_exists("imagenes", $context) ? $context["imagenes"] : (function () { throw new RuntimeError('Variable "imagenes" does not exist.', 43, $this->source); })())), 5))) {
            // line 44
            echo "                ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formulario"]) || array_key_exists("formulario", $context) ? $context["formulario"] : (function () { throw new RuntimeError('Variable "formulario" does not exist.', 44, $this->source); })()), "archivosArray", [], "any", false, false, false, 44), 'widget', ["attr" => ["class" => "text-center", "style" => "color: #0F9FA8;", "accept" => "application / .jpg , .png, .pdf, .jpeg"]]);
            echo "    
            ";
        }
        // line 46
        echo "        </div>
    </div>

     <div class = \"container mt-5 text-center\">
        ";
        // line 50
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formulario"]) || array_key_exists("formulario", $context) ? $context["formulario"] : (function () { throw new RuntimeError('Variable "formulario" does not exist.', 50, $this->source); })()), "Aceptar", [], "any", false, false, false, 50), 'widget', ["attr" => ["class" => "btn btn-outline-info btn-lg"]]);
        echo "
    </div>
    ";
        // line 53
        echo "</div>
<script src = \"";
        // line 54
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/deleteArchivos.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "egresado/modificarArchivos.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  213 => 54,  210 => 53,  205 => 50,  199 => 46,  193 => 44,  190 => 43,  177 => 38,  171 => 37,  167 => 36,  163 => 35,  155 => 32,  151 => 31,  146 => 28,  141 => 26,  138 => 25,  131 => 21,  125 => 20,  121 => 19,  117 => 18,  112 => 15,  110 => 14,  104 => 11,  99 => 9,  92 => 7,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Registro Digital - Modificar Archivos{% endblock %}

{% block body %}
{{parent()}}
<h1 class = \"text-center\">Modificar archivos cargados de: {{egresado.nombre}} {{egresado.apellido}}</h1> 
<div class = \"container\" id= \"divFormulario\">
    <a href = \"{{path('verEgresados')}}\"><i class=\"fas fa-arrow-left grow\" style = \"font-size:30px; color: #0F9FA8\"></i></a>
    
    {{ form_start(formulario, {'enctype':'multipart/form-data'})}}
    <div class = \"row mt-5 justify-content-center\">
        <div class = \"col-sm-4 text-center\">
            {% if pdf != null %}
                <h6 class = \"text-secondary text-center\"> Certificado Analítico<h6>
                <ul class = \"mt-5\">
                    <li>
                        <img src=\"{{asset('svg/pdf2.png')}}\" width=\"40\" alt=\"PDF\">
                        <a class=\"btn btn-primary ml-4 grow\" href=\"{{ path('verPDF', {'id': egresado.id}) }}\"><i class=\"fas fa-search\"></i></a>
                        <a class = \"btn btn-success ml-4 grow\" href = \"{{asset('uploads/pdfsAnalitico/' ~ pdf )}} \" download =\"{{'pdfAnalitico de ' ~ egresado.nombre ~ ' ' ~ egresado.apellido }}\"><i class=\"fas fa-download\"></i></a>
                        <a class = \"btn btn-danger text-white ml-4 grow\" onclick=\"DeletePDF({{egresado.id}})\" ><i class=\"fas fa-ban\"></i></a>
                    </li>
                </ul>
            {% else %}
                <h6 class = \"text-center\" style = \"font-size: 15px;\">*No hay pdf cargado</h6>
                {{form_widget (formulario.pdfAnalitico , { attr : { accept : ' application / .pdf' }})}}
            {% endif %}
        </div>
        <div class = \"col-sm-3\"></div>
        <div class = \"col-sm-5\">
            <h6 class = \"text-secondary text-center\">{{imagenes|length}} de 5 imágenes cargadas<h6>
            {% for imagen in imagenes %}    
                <ul>
                    <li class = \"mt-4\">
                        <img src=\"{{asset('uploads/imagenesDigitales/' ~ imagen.nombreArchivo )}}\" width=\"55\" alt=\"PNG\">
                        <a class=\"btn btn-primary ml-5 grow\" href=\"{{ path('verImagen', {'nombreImagen': imagen.nombreArchivo})}}\"><i class=\"fas fa-search\"></i></a>
                        <a class = \"btn btn-success ml-5 grow\"  href = \"{{asset('uploads/imagenesDigitales/' ~ imagen.nombreArchivo )}} \" download =\"{{egresado.nombre ~ ' ' ~ egresado.apellido ~ ' ' ~ 'imagenDigital'}}\"><i class=\"fas fa-download\"></i></a>
                        <a class = \"btn btn-danger text-white ml-5 grow\" onclick=\"DeleteImagen({{imagen.id}},{{egresado.id}})\" ><i class=\"fas fa-ban\"></i></a>
                        <hr>
                    </li>
                </ul>
            {% endfor %}
            {% if imagenes|length < 5 %}
                {{form_widget ( formulario.archivosArray , { attr : { class: 'text-center' , style: 'color: #0F9FA8;' , accept : 'application / .jpg , .png, .pdf, .jpeg'  }})}}    
            {% endif %}
        </div>
    </div>

     <div class = \"container mt-5 text-center\">
        {{ form_widget(formulario.Aceptar, {attr: {class: 'btn btn-outline-info btn-lg'}})}}
    </div>
    {# No pongo el end form para que no me ponga el seleccionar #}
</div>
<script src = \"{{asset('js/deleteArchivos.js')}}\"></script>
{% endblock %}
", "egresado/modificarArchivos.html.twig", "/var/www/html/RegistroDigital/templates/egresado/modificarArchivos.html.twig");
    }
}
