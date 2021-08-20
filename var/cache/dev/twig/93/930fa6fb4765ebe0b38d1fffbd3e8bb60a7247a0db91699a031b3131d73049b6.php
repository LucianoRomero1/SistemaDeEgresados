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
        // line 10
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formulario"]) || array_key_exists("formulario", $context) ? $context["formulario"] : (function () { throw new RuntimeError('Variable "formulario" does not exist.', 10, $this->source); })()), 'form_start', ["enctype" => "multipart/form-data"]);
        echo "
    <div class = \"row mt-5 justify-content-center\">
        <div class = \"col-lg-4 p-5 text-center\" id=\"divFormulario\">
            ";
        // line 13
        if ((0 !== twig_compare((isset($context["pdf"]) || array_key_exists("pdf", $context) ? $context["pdf"] : (function () { throw new RuntimeError('Variable "pdf" does not exist.', 13, $this->source); })()), null))) {
            // line 14
            echo "                
                <h6 class = \" text-center text-info\" >Certificado Analítico<h6>
                <ul class = \"mt-5\">
                    <li>
                        <div class=\"row justify-content-center m-3\">
                            <img class=\"img-responsive border\" data-pdf-thumbnail-file=\"";
            // line 19
            echo twig_escape_filter($this->env, ("https://intranet.unraf.edu.ar/RegistroDigital/uploads/pdfsAnalitico/" . twig_get_attribute($this->env, $this->source, (isset($context["egresado"]) || array_key_exists("egresado", $context) ? $context["egresado"] : (function () { throw new RuntimeError('Variable "egresado" does not exist.', 19, $this->source); })()), "pdfAnalitico", [], "any", false, false, false, 19)), "html", null, true);
            echo "\" src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("svg/pdf2.png"), "html", null, true);
            echo "\" width=\"60%\" alt=\"PDF\">
                        </div>
                        <div class=\"btn-group\">
                            <a class=\"btn btn-secondary grow\" href=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("verPDF", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["egresado"]) || array_key_exists("egresado", $context) ? $context["egresado"] : (function () { throw new RuntimeError('Variable "egresado" does not exist.', 22, $this->source); })()), "id", [], "any", false, false, false, 22)]), "html", null, true);
            echo "\"><i class=\"fas fa-eye\"></i></a>
                            <a class = \"btn btn-secondary grow\" href = \"";
            // line 23
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/pdfsAnalitico/" . (isset($context["pdf"]) || array_key_exists("pdf", $context) ? $context["pdf"] : (function () { throw new RuntimeError('Variable "pdf" does not exist.', 23, $this->source); })()))), "html", null, true);
            echo " \" download =\"";
            echo twig_escape_filter($this->env, ((("pdfAnalitico de " . twig_get_attribute($this->env, $this->source, (isset($context["egresado"]) || array_key_exists("egresado", $context) ? $context["egresado"] : (function () { throw new RuntimeError('Variable "egresado" does not exist.', 23, $this->source); })()), "nombre", [], "any", false, false, false, 23)) . " ") . twig_get_attribute($this->env, $this->source, (isset($context["egresado"]) || array_key_exists("egresado", $context) ? $context["egresado"] : (function () { throw new RuntimeError('Variable "egresado" does not exist.', 23, $this->source); })()), "apellido", [], "any", false, false, false, 23)), "html", null, true);
            echo "\"><i class=\"fas fa-download\"></i></a>
                            <a class = \"btn btn-secondary text-white grow\" onclick=\"DeletePDF(";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["egresado"]) || array_key_exists("egresado", $context) ? $context["egresado"] : (function () { throw new RuntimeError('Variable "egresado" does not exist.', 24, $this->source); })()), "id", [], "any", false, false, false, 24), "html", null, true);
            echo ")\" ><i class=\"fas fa-trash\"></i></a>
                        </div>  
                    </li>
                </ul>
            ";
        } else {
            // line 29
            echo "                <h6 class = \"text-center\" style = \"font-size: 15px;\">*No hay pdf cargado</h6>
                <div class=\"container\">
                    ";
            // line 31
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formulario"]) || array_key_exists("formulario", $context) ? $context["formulario"] : (function () { throw new RuntimeError('Variable "formulario" does not exist.', 31, $this->source); })()), "pdfAnalitico", [], "any", false, false, false, 31), 'widget', ["attr" => ["class" => "text-center", "style" => "color: #0F9FA8", "accept" => " application / .pdf"]]);
            echo "
                </div>
            ";
        }
        // line 34
        echo "        </div>
        <div class = \"col-lg-8 p-5 text-center\"  id=\"divFormulario\">
            <h6 class = \"text-info text-center\">";
        // line 36
        echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["imagenes"]) || array_key_exists("imagenes", $context) ? $context["imagenes"] : (function () { throw new RuntimeError('Variable "imagenes" does not exist.', 36, $this->source); })())), "html", null, true);
        echo " de 5 imágenes cargadas<h6>
            <div class=\"row mt-5\">
                ";
        // line 38
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["imagenes"]) || array_key_exists("imagenes", $context) ? $context["imagenes"] : (function () { throw new RuntimeError('Variable "imagenes" does not exist.', 38, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["imagen"]) {
            // line 39
            echo "                    <div class=\"card col-4 col-md-3 py-3\">
                        <img src=\"";
            // line 40
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/imagenesDigitales/" . twig_get_attribute($this->env, $this->source, $context["imagen"], "nombreArchivo", [], "any", false, false, false, 40))), "html", null, true);
            echo "\" class=\"card-img-top m-2\" alt=\"...\">
                        <div class=\"card-body p-0 m-0 g-0 \">
                            <div class=\"btn-group mw-100 \" role=\"group\">
                                <a class=\"btn btn-secondary\" href=\"";
            // line 43
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("verImagen", ["nombreImagen" => twig_get_attribute($this->env, $this->source, $context["imagen"], "nombreArchivo", [], "any", false, false, false, 43)]), "html", null, true);
            echo "\"><i class=\"fas fa-eye \"></i></a>
                                <a class = \"btn btn-secondary\"  href = \"";
            // line 44
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/imagenesDigitales/" . twig_get_attribute($this->env, $this->source, $context["imagen"], "nombreArchivo", [], "any", false, false, false, 44))), "html", null, true);
            echo " \" download =\"";
            echo twig_escape_filter($this->env, ((((twig_get_attribute($this->env, $this->source, (isset($context["egresado"]) || array_key_exists("egresado", $context) ? $context["egresado"] : (function () { throw new RuntimeError('Variable "egresado" does not exist.', 44, $this->source); })()), "nombre", [], "any", false, false, false, 44) . " ") . twig_get_attribute($this->env, $this->source, (isset($context["egresado"]) || array_key_exists("egresado", $context) ? $context["egresado"] : (function () { throw new RuntimeError('Variable "egresado" does not exist.', 44, $this->source); })()), "apellido", [], "any", false, false, false, 44)) . " ") . "imagenDigital"), "html", null, true);
            echo "\"><i class=\"fas fa-download \"></i></a>
                                <a class = \"btn btn-secondary text-white\" onclick=\"DeleteImagen(";
            // line 45
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["imagen"], "id", [], "any", false, false, false, 45), "html", null, true);
            echo ",";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["egresado"]) || array_key_exists("egresado", $context) ? $context["egresado"] : (function () { throw new RuntimeError('Variable "egresado" does not exist.', 45, $this->source); })()), "id", [], "any", false, false, false, 45), "html", null, true);
            echo ")\" ><i class=\"fas fa-trash \"></i></a>
                            </div>
                        </div>
                    </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['imagen'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        echo "            </div>
            
            ";
        // line 52
        if ((-1 === twig_compare(twig_length_filter($this->env, (isset($context["imagenes"]) || array_key_exists("imagenes", $context) ? $context["imagenes"] : (function () { throw new RuntimeError('Variable "imagenes" does not exist.', 52, $this->source); })())), 5))) {
            // line 53
            echo "                ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formulario"]) || array_key_exists("formulario", $context) ? $context["formulario"] : (function () { throw new RuntimeError('Variable "formulario" does not exist.', 53, $this->source); })()), "archivosArray", [], "any", false, false, false, 53), 'widget', ["attr" => ["class" => "text-center", "style" => "color: #0F9FA8;", "accept" => "application / .jpg , .png, .pdf, .jpeg"]]);
            echo "    
            ";
        }
        // line 55
        echo "        </div>
    </div>

     <div class = \"container mt-5 text-center\">
        ";
        // line 59
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formulario"]) || array_key_exists("formulario", $context) ? $context["formulario"] : (function () { throw new RuntimeError('Variable "formulario" does not exist.', 59, $this->source); })()), "Aceptar", [], "any", false, false, false, 59), 'widget', ["attr" => ["class" => "btn btn-outline-info btn-lg"]]);
        echo "
    </div>
</div>
<br>
<script src = \"";
        // line 63
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
        return array (  224 => 63,  217 => 59,  211 => 55,  205 => 53,  203 => 52,  199 => 50,  186 => 45,  180 => 44,  176 => 43,  170 => 40,  167 => 39,  163 => 38,  158 => 36,  154 => 34,  148 => 31,  144 => 29,  136 => 24,  130 => 23,  126 => 22,  118 => 19,  111 => 14,  109 => 13,  103 => 10,  99 => 9,  92 => 7,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
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
        <div class = \"col-lg-4 p-5 text-center\" id=\"divFormulario\">
            {% if pdf != null %}
                
                <h6 class = \" text-center text-info\" >Certificado Analítico<h6>
                <ul class = \"mt-5\">
                    <li>
                        <div class=\"row justify-content-center m-3\">
                            <img class=\"img-responsive border\" data-pdf-thumbnail-file=\"{{(\"https://intranet.unraf.edu.ar/RegistroDigital/uploads/pdfsAnalitico/\" ~ egresado.pdfAnalitico)}}\" src=\"{{asset('svg/pdf2.png')}}\" width=\"60%\" alt=\"PDF\">
                        </div>
                        <div class=\"btn-group\">
                            <a class=\"btn btn-secondary grow\" href=\"{{ path('verPDF', {'id': egresado.id}) }}\"><i class=\"fas fa-eye\"></i></a>
                            <a class = \"btn btn-secondary grow\" href = \"{{asset('uploads/pdfsAnalitico/' ~ pdf )}} \" download =\"{{'pdfAnalitico de ' ~ egresado.nombre ~ ' ' ~ egresado.apellido }}\"><i class=\"fas fa-download\"></i></a>
                            <a class = \"btn btn-secondary text-white grow\" onclick=\"DeletePDF({{egresado.id}})\" ><i class=\"fas fa-trash\"></i></a>
                        </div>  
                    </li>
                </ul>
            {% else %}
                <h6 class = \"text-center\" style = \"font-size: 15px;\">*No hay pdf cargado</h6>
                <div class=\"container\">
                    {{form_widget (formulario.pdfAnalitico , { attr : {class: 'text-center' , style: 'color: #0F9FA8' ,accept : ' application / .pdf' }})}}
                </div>
            {% endif %}
        </div>
        <div class = \"col-lg-8 p-5 text-center\"  id=\"divFormulario\">
            <h6 class = \"text-info text-center\">{{imagenes|length}} de 5 imágenes cargadas<h6>
            <div class=\"row mt-5\">
                {% for imagen in imagenes %}
                    <div class=\"card col-4 col-md-3 py-3\">
                        <img src=\"{{asset('uploads/imagenesDigitales/' ~ imagen.nombreArchivo )}}\" class=\"card-img-top m-2\" alt=\"...\">
                        <div class=\"card-body p-0 m-0 g-0 \">
                            <div class=\"btn-group mw-100 \" role=\"group\">
                                <a class=\"btn btn-secondary\" href=\"{{ path('verImagen', {'nombreImagen': imagen.nombreArchivo})}}\"><i class=\"fas fa-eye \"></i></a>
                                <a class = \"btn btn-secondary\"  href = \"{{asset('uploads/imagenesDigitales/' ~ imagen.nombreArchivo )}} \" download =\"{{egresado.nombre ~ ' ' ~ egresado.apellido ~ ' ' ~ 'imagenDigital'}}\"><i class=\"fas fa-download \"></i></a>
                                <a class = \"btn btn-secondary text-white\" onclick=\"DeleteImagen({{imagen.id}},{{egresado.id}})\" ><i class=\"fas fa-trash \"></i></a>
                            </div>
                        </div>
                    </div>
            {% endfor %}
            </div>
            
            {% if imagenes|length < 5 %}
                {{form_widget ( formulario.archivosArray , { attr : { class: 'text-center' , style: 'color: #0F9FA8;' , accept : 'application / .jpg , .png, .pdf, .jpeg'  }})}}    
            {% endif %}
        </div>
    </div>

     <div class = \"container mt-5 text-center\">
        {{ form_widget(formulario.Aceptar, {attr: {class: 'btn btn-outline-info btn-lg'}})}}
    </div>
</div>
<br>
<script src = \"{{asset('js/deleteArchivos.js')}}\"></script>
{% endblock %}
", "egresado/modificarArchivos.html.twig", "/var/www/html/RegistroDigital/templates/egresado/modificarArchivos.html.twig");
    }
}
