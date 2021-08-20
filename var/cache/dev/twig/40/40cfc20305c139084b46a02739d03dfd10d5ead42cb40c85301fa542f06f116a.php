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
    <a href = \"";
        // line 9
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("verGraduados");
        echo "\"><i class=\"fas fa-arrow-left grow\" style = \"font-size:30px; color: #0F9FA8;\"></i></a>
    ";
        // line 10
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formulario"]) || array_key_exists("formulario", $context) ? $context["formulario"] : (function () { throw new RuntimeError('Variable "formulario" does not exist.', 10, $this->source); })()), 'form_start', ["enctype" => "multipart/form-data"]);
        echo "
    <div class=\"row\">
        <div class = \"col-sm-4\"></div>
        <div class = \"col-sm-4\" id=\"divFormulario\">
            ";
        // line 14
        if ((0 !== twig_compare((isset($context["imagen"]) || array_key_exists("imagen", $context) ? $context["imagen"] : (function () { throw new RuntimeError('Variable "imagen" does not exist.', 14, $this->source); })()), null))) {
            // line 15
            echo "                <ul class = \"text-center\">
                    <li >
                        <div class=\"row justify-content-center m-3\">
                            <img src=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("svg/pdf2.png"), "html", null, true);
            echo "\"  width=\"60%\" alt=\"PDF\">
                        </div>
                        <div class=\"btn-group\">
                            <a class=\"btn btn-secondary grow\" href=\"";
            // line 21
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("verImagenTED", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["graduado"]) || array_key_exists("graduado", $context) ? $context["graduado"] : (function () { throw new RuntimeError('Variable "graduado" does not exist.', 21, $this->source); })()), "id", [], "any", false, false, false, 21)]), "html", null, true);
            echo "\"><i class=\"fas fa-search\"></i></a>
                            <a class = \"btn btn-secondary text-white grow\" onclick=\"DeleteImagenTED(";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["graduado"]) || array_key_exists("graduado", $context) ? $context["graduado"] : (function () { throw new RuntimeError('Variable "graduado" does not exist.', 22, $this->source); })()), "id", [], "any", false, false, false, 22), "html", null, true);
            echo ")\" ><i class=\"fas fa-ban\"></i></a>
                        </div>
                    </li>
                </ul>
                
            ";
        } else {
            // line 28
            echo "                <h6 class = \"text-center\" style = \"font-size: 15px;\">*No hay imagen cargada</h6>
                ";
            // line 29
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formulario"]) || array_key_exists("formulario", $context) ? $context["formulario"] : (function () { throw new RuntimeError('Variable "formulario" does not exist.', 29, $this->source); })()), "imagenTED", [], "any", false, false, false, 29), 'widget', ["attr" => ["accept" => "application / .jpg, .png, .pdf, .docx, .doc, .jpeg"]]);
            echo "
            ";
        }
        // line 31
        echo "        </div>
    </div>
    <div class = \"container mt-5 text-center\">
        ";
        // line 34
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formulario"]) || array_key_exists("formulario", $context) ? $context["formulario"] : (function () { throw new RuntimeError('Variable "formulario" does not exist.', 34, $this->source); })()), "Aceptar", [], "any", false, false, false, 34), 'widget', ["attr" => ["class" => "btn btn-outline-info btn-lg"]]);
        echo "
    </div>
    ";
        // line 37
        echo "    ";
        // line 38
        echo "</div>

<script src = \"";
        // line 40
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
        return array (  155 => 40,  151 => 38,  149 => 37,  144 => 34,  139 => 31,  134 => 29,  131 => 28,  122 => 22,  118 => 21,  112 => 18,  107 => 15,  105 => 14,  98 => 10,  94 => 9,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Registro Digital - Imagen TED Graduado/a{% endblock %}

{% block body %}
{{parent()}}
<h1 class =\"text-center\">Imagen TED 1c emitida por SIU GUARANI</h1>
<div class = \"container mt-4\"  id = \"divFormulario\"> 
    <a href = \"{{path('verGraduados')}}\"><i class=\"fas fa-arrow-left grow\" style = \"font-size:30px; color: #0F9FA8;\"></i></a>
    {{ form_start(formulario, {'enctype':'multipart/form-data'})}}
    <div class=\"row\">
        <div class = \"col-sm-4\"></div>
        <div class = \"col-sm-4\" id=\"divFormulario\">
            {% if imagen != null %}
                <ul class = \"text-center\">
                    <li >
                        <div class=\"row justify-content-center m-3\">
                            <img src=\"{{asset('svg/pdf2.png')}}\"  width=\"60%\" alt=\"PDF\">
                        </div>
                        <div class=\"btn-group\">
                            <a class=\"btn btn-secondary grow\" href=\"{{ path('verImagenTED', {'id': graduado.id}) }}\"><i class=\"fas fa-search\"></i></a>
                            <a class = \"btn btn-secondary text-white grow\" onclick=\"DeleteImagenTED({{graduado.id}})\" ><i class=\"fas fa-ban\"></i></a>
                        </div>
                    </li>
                </ul>
                
            {% else %}
                <h6 class = \"text-center\" style = \"font-size: 15px;\">*No hay imagen cargada</h6>
                {{form_widget ( formulario.imagenTED , { attr : {accept : 'application / .jpg, .png, .pdf, .docx, .doc, .jpeg'}})}}
            {% endif %}
        </div>
    </div>
    <div class = \"container mt-5 text-center\">
        {{ form_widget(formulario.Aceptar, {attr: {class: 'btn btn-outline-info btn-lg'}})}}
    </div>
    {# {{ form_end(formulario)}} #}
    {# NO CIERRO EL FORM PORQUE SINO TIRA ERROR Y NO SE ME OCULTA COMO YO QUIERO #}
</div>

<script src = \"{{asset('js/deleteArchivos.js')}}\"></script>
{% endblock %}", "graduado/modificarImagenGraduado.html.twig", "/var/www/html/RegistroDigital/templates/graduado/modificarImagenGraduado.html.twig");
    }
}
