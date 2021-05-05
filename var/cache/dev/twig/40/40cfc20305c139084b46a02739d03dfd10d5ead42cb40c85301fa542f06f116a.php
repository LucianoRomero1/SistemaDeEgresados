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

/* graduado/modificarImagenGraduado.html.twig */
class __TwigTemplate_09d30afebb8843b6091a75c629c910e793d6b7744619b083786e033bef586bf6 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "graduado/modificarImagenGraduado.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "graduado/modificarImagenGraduado.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "graduado/modificarImagenGraduado.html.twig", 1);
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

        echo "Registro Digital - Imagen TED Graduado/a";
        
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
<h1 class =\"text-center\">Imagen TED 1c emitida por SIU GUARANI</h1>
<div class = \"container mt-4\"  id = \"divFormulario\"> 
    ";
        // line 9
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formulario"]) || array_key_exists("formulario", $context) ? $context["formulario"] : (function () { throw new RuntimeError('Variable "formulario" does not exist.', 9, $this->source); })()), 'form_start', ["enctype" => "multipart/form-data"]);
        echo "
    <div class = \"container text-center\">
        ";
        // line 11
        if ((0 !== twig_compare((isset($context["imagen"]) || array_key_exists("imagen", $context) ? $context["imagen"] : (function () { throw new RuntimeError('Variable "imagen" does not exist.', 11, $this->source); })()), null))) {
            // line 12
            echo "            <ul class = \"mt-5\">
                <li>
                    <img src=\"";
            // line 14
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("svg/pdf2.png"), "html", null, true);
            echo "\" width=\"40\" alt=\"PDF\">
                    <a class=\"btn btn-primary ml-4 grow\" href=\"";
            // line 15
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("verImagenTED", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["graduado"]) || array_key_exists("graduado", $context) ? $context["graduado"] : (function () { throw new RuntimeError('Variable "graduado" does not exist.', 15, $this->source); })()), "id", [], "any", false, false, false, 15)]), "html", null, true);
            echo "\"><i class=\"fas fa-search\"></i></a>
                    <a class = \"btn btn-danger text-white ml-4 grow\" onclick=\"DeleteImagenTED(";
            // line 16
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["graduado"]) || array_key_exists("graduado", $context) ? $context["graduado"] : (function () { throw new RuntimeError('Variable "graduado" does not exist.', 16, $this->source); })()), "id", [], "any", false, false, false, 16), "html", null, true);
            echo ")\" ><i class=\"fas fa-ban\"></i></a>
                </li>
            </ul>
            
        ";
        } else {
            // line 21
            echo "            <h6 class = \"text-center\" style = \"font-size: 15px;\">*No hay imagen cargada</h6>
            ";
            // line 22
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formulario"]) || array_key_exists("formulario", $context) ? $context["formulario"] : (function () { throw new RuntimeError('Variable "formulario" does not exist.', 22, $this->source); })()), "imagenTED", [], "any", false, false, false, 22), 'widget', ["attr" => ["accept" => "application / .jpg, .png, .pdf, .docx, .doc, .jpeg"]]);
            echo "
        ";
        }
        // line 24
        echo "    </div>
    <div class = \"container mt-5 text-center\">
        ";
        // line 26
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formulario"]) || array_key_exists("formulario", $context) ? $context["formulario"] : (function () { throw new RuntimeError('Variable "formulario" does not exist.', 26, $this->source); })()), "Aceptar", [], "any", false, false, false, 26), 'widget', ["attr" => ["class" => "btn btn-outline-info btn-lg"]]);
        echo "
    </div>
    ";
        // line 29
        echo "</div>
<script src = \"";
        // line 30
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/deleteArchivos.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "graduado/modificarImagenGraduado.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  141 => 30,  138 => 29,  133 => 26,  129 => 24,  124 => 22,  121 => 21,  113 => 16,  109 => 15,  105 => 14,  101 => 12,  99 => 11,  94 => 9,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Registro Digital - Imagen TED Graduado/a{% endblock %}

{% block body %}
{{parent()}}
<h1 class =\"text-center\">Imagen TED 1c emitida por SIU GUARANI</h1>
<div class = \"container mt-4\"  id = \"divFormulario\"> 
    {{ form_start(formulario, {'enctype':'multipart/form-data'})}}
    <div class = \"container text-center\">
        {% if imagen != null %}
            <ul class = \"mt-5\">
                <li>
                    <img src=\"{{asset('svg/pdf2.png')}}\" width=\"40\" alt=\"PDF\">
                    <a class=\"btn btn-primary ml-4 grow\" href=\"{{ path('verImagenTED', {'id': graduado.id}) }}\"><i class=\"fas fa-search\"></i></a>
                    <a class = \"btn btn-danger text-white ml-4 grow\" onclick=\"DeleteImagenTED({{graduado.id}})\" ><i class=\"fas fa-ban\"></i></a>
                </li>
            </ul>
            
        {% else %}
            <h6 class = \"text-center\" style = \"font-size: 15px;\">*No hay imagen cargada</h6>
            {{form_widget ( formulario.imagenTED , { attr : {accept : 'application / .jpg, .png, .pdf, .docx, .doc, .jpeg'}})}}
        {% endif %}
    </div>
    <div class = \"container mt-5 text-center\">
        {{ form_widget(formulario.Aceptar, {attr: {class: 'btn btn-outline-info btn-lg'}})}}
    </div>
    {# {{ form_end(formulario)}} #}
</div>
<script src = \"{{asset('js/deleteArchivos.js')}}\"></script>
{% endblock %}", "graduado/modificarImagenGraduado.html.twig", "/var/www/html/RegistroDigital/templates/graduado/modificarImagenGraduado.html.twig");
    }
}
