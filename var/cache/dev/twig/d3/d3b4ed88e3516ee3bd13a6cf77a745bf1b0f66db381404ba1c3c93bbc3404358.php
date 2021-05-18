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

/* documentos/verDocumentos.html.twig */
class __TwigTemplate_f9780e52594b5a77292f0ec627b3d891a7dd4d2f1bb8586644e8dd5aa16c6b6f extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "documentos/verDocumentos.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "documentos/verDocumentos.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "documentos/verDocumentos.html.twig", 1);
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

        echo "Registro Digital - Ver Documentos";
        
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
<div class = \"container-fluid\">
    ";
        // line 8
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formulario"]) || array_key_exists("formulario", $context) ? $context["formulario"] : (function () { throw new RuntimeError('Variable "formulario" does not exist.', 8, $this->source); })()), 'form_start', ["enctype" => "multipart/form-data"]);
        echo "
    <div class = \"container row\">
        <div class = \"col-sm-1\">
            <a class = \"\" href = \"";
        // line 11
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("datosAcademicos");
        echo "\"><i class=\"fas fa-arrow-left grow\" title = \"Volver a ver secciones\" style = \"font-size:30px;color: #0F9FA8; margin-top: 5px;\"></i></a>
        </div>
        <div class = \"col-sm-6 media\">
            ";
        // line 14
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formulario"]) || array_key_exists("formulario", $context) ? $context["formulario"] : (function () { throw new RuntimeError('Variable "formulario" does not exist.', 14, $this->source); })()), "buscar", [], "any", false, false, false, 14), 'widget', ["attr" => ["class" => "form-control campoForm", "placeholder" => "Buscar por tipo de documento.."]]);
        echo "  
            ";
        // line 15
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formulario"]) || array_key_exists("formulario", $context) ? $context["formulario"] : (function () { throw new RuntimeError('Variable "formulario" does not exist.', 15, $this->source); })()), "Buscar", [], "any", false, false, false, 15), 'widget', ["attr" => ["class" => "btn btn-buscar d-inline"]]);
        echo "  
        </div>
        <div class = \"col-sm-3\"></div>
        <div class = \"col-sm-2\">
            <a class = \"btn form-control campoForm nueva\" style = \"background-color: #; color: white;\" href = \"";
        // line 19
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("altaDocumentos");
        echo "\">Nuevo doc.</a> 
        </div>
    </div>
    <hr>
    <div class = \"m-3\">
        <b style = \"color: #0F9FA8;\">Cantidad de documentos creados hasta el momento: ";
        // line 24
        echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["documentos"]) || array_key_exists("documentos", $context) ? $context["documentos"] : (function () { throw new RuntimeError('Variable "documentos" does not exist.', 24, $this->source); })())), "html", null, true);
        echo " </b>
    </div>
    ";
        // line 26
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formulario"]) || array_key_exists("formulario", $context) ? $context["formulario"] : (function () { throw new RuntimeError('Variable "formulario" does not exist.', 26, $this->source); })()), 'form_end');
        echo "
    <table class=\"table table-borderless\">
        <thead  class = \"text-white\">
                <tr style = \"background-color: #0F9FA8;\">
                <th>Nro</th>
                <th>Tipo de documentos</th>
                <th style=\"text-align: center;\">Editar</th>
                <th style=\"text-align: center;\">Eliminar</th>
            </tr>
        </thead>
        <tbody >
            ";
        // line 37
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["documentos"]) || array_key_exists("documentos", $context) ? $context["documentos"] : (function () { throw new RuntimeError('Variable "documentos" does not exist.', 37, $this->source); })()));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["documento"]) {
            // line 38
            echo "            <tr>
                <th>";
            // line 39
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 39), "html", null, true);
            echo "</th>
                <td>";
            // line 40
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["documento"], "tipoDocumento", [], "any", false, false, false, 40), "html", null, true);
            echo "</td>
                <td style=\"text-align: center;\"><a class =\"btn grow\" href=\"";
            // line 41
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("modificarDocumentos", ["id" => twig_get_attribute($this->env, $this->source, $context["documento"], "id", [], "any", false, false, false, 41)]), "html", null, true);
            echo "\" ><i class=\"far fa-edit text-success\" style = \"font-size: 20px;\"></i></a></td>
                <td style=\"text-align: center;\"><a class = \"btn grow\" onclick=\"DeleteFunction(";
            // line 42
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["documento"], "id", [], "any", false, false, false, 42), "html", null, true);
            echo ")\"><i class=\" fas fa-trash text-danger\"   style = \"font-size: 20px\"></i></a></td>
            </tr>
            ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['documento'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        echo "        </tbody>
    </table> 
</div>
<script src = \"";
        // line 48
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/deleteDocumentos.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "documentos/verDocumentos.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  197 => 48,  192 => 45,  175 => 42,  171 => 41,  167 => 40,  163 => 39,  160 => 38,  143 => 37,  129 => 26,  124 => 24,  116 => 19,  109 => 15,  105 => 14,  99 => 11,  93 => 8,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Registro Digital - Ver Documentos{% endblock %}

{% block body %}
{{parent()}}
<div class = \"container-fluid\">
    {{ form_start(formulario, {'enctype':'multipart/form-data'})}}
    <div class = \"container row\">
        <div class = \"col-sm-1\">
            <a class = \"\" href = \"{{path('datosAcademicos')}}\"><i class=\"fas fa-arrow-left grow\" title = \"Volver a ver secciones\" style = \"font-size:30px;color: #0F9FA8; margin-top: 5px;\"></i></a>
        </div>
        <div class = \"col-sm-6 media\">
            {{ form_widget(formulario.buscar, {attr: {class: 'form-control campoForm' , placeholder: 'Buscar por tipo de documento..'} }) }}  
            {{ form_widget(formulario.Buscar, {attr: {class: 'btn btn-buscar d-inline'} }) }}  
        </div>
        <div class = \"col-sm-3\"></div>
        <div class = \"col-sm-2\">
            <a class = \"btn form-control campoForm nueva\" style = \"background-color: #; color: white;\" href = \"{{path('altaDocumentos')}}\">Nuevo doc.</a> 
        </div>
    </div>
    <hr>
    <div class = \"m-3\">
        <b style = \"color: #0F9FA8;\">Cantidad de documentos creados hasta el momento: {{documentos|length}} </b>
    </div>
    {{ form_end(formulario) }}
    <table class=\"table table-borderless\">
        <thead  class = \"text-white\">
                <tr style = \"background-color: #0F9FA8;\">
                <th>Nro</th>
                <th>Tipo de documentos</th>
                <th style=\"text-align: center;\">Editar</th>
                <th style=\"text-align: center;\">Eliminar</th>
            </tr>
        </thead>
        <tbody >
            {% for documento in documentos %}
            <tr>
                <th>{{ loop.index }}</th>
                <td>{{documento.tipoDocumento}}</td>
                <td style=\"text-align: center;\"><a class =\"btn grow\" href=\"{{path('modificarDocumentos', {'id': documento.id})}}\" ><i class=\"far fa-edit text-success\" style = \"font-size: 20px;\"></i></a></td>
                <td style=\"text-align: center;\"><a class = \"btn grow\" onclick=\"DeleteFunction({{documento.id}})\"><i class=\" fas fa-trash text-danger\"   style = \"font-size: 20px\"></i></a></td>
            </tr>
            {% endfor %}
        </tbody>
    </table> 
</div>
<script src = \"{{asset('js/deleteDocumentos.js')}}\"></script>
{% endblock %}
", "documentos/verDocumentos.html.twig", "/var/www/html/RegistroDigital/templates/documentos/verDocumentos.html.twig");
    }
}
