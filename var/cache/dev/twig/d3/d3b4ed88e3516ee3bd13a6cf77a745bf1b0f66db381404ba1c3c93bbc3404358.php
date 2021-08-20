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
    <div class=\"bordeSombreado  divBuscar\">
        ";
        // line 9
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formulario"]) || array_key_exists("formulario", $context) ? $context["formulario"] : (function () { throw new RuntimeError('Variable "formulario" does not exist.', 9, $this->source); })()), 'form_start', ["enctype" => "multipart/form-data"]);
        echo "
        <div class=\"row\">
            <div class=\"col-sm-6\">
                <h6 class = \"text-center\" style=\"color:#306086\">Búsqueda</h6>
                <div class = \"media\">
                    ";
        // line 14
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formulario"]) || array_key_exists("formulario", $context) ? $context["formulario"] : (function () { throw new RuntimeError('Variable "formulario" does not exist.', 14, $this->source); })()), "buscar", [], "any", false, false, false, 14), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Buscar por nombre..."]]);
        echo "  
                    ";
        // line 15
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formulario"]) || array_key_exists("formulario", $context) ? $context["formulario"] : (function () { throw new RuntimeError('Variable "formulario" does not exist.', 15, $this->source); })()), "Buscar", [], "any", false, false, false, 15), 'widget', ["attr" => ["class" => "btn btn-buscar"]]);
        echo " 
                </div>
            </div>
            <div class=\"col-sm-6\">
                <h6 style=\"color:#306086\" class = \"text-center\">Cargar documento </h6>
                <div class = \"text-center\">
                    <a class = \"btn botonCeleste ancho text-white grow text-center\" style = \"\" href = \"";
        // line 21
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("altaDocumentos");
        echo "\">Nuevo doc.</a>
                </div>
            </div>
        </div>
        <br>
        ";
        // line 26
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formulario"]) || array_key_exists("formulario", $context) ? $context["formulario"] : (function () { throw new RuntimeError('Variable "formulario" does not exist.', 26, $this->source); })()), 'form_end');
        echo "
        <div class = \"m-2\">
            <b style = \"color: #0F9FA8;\">Cantidad de documentos encontrados: ";
        // line 28
        echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["documentos"]) || array_key_exists("documentos", $context) ? $context["documentos"] : (function () { throw new RuntimeError('Variable "documentos" does not exist.', 28, $this->source); })())), "html", null, true);
        echo " </b>
        </div>
    </div> 
    <br>
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
        // line 42
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["documentos"]) || array_key_exists("documentos", $context) ? $context["documentos"] : (function () { throw new RuntimeError('Variable "documentos" does not exist.', 42, $this->source); })()));
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
            // line 43
            echo "            <tr>
                <th>";
            // line 44
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 44), "html", null, true);
            echo "</th>
                <td>";
            // line 45
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["documento"], "tipoDocumento", [], "any", false, false, false, 45), "html", null, true);
            echo "</td>
                <td style=\"text-align: center;\"><a class =\"btn grow\" href=\"";
            // line 46
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("modificarDocumentos", ["id" => twig_get_attribute($this->env, $this->source, $context["documento"], "id", [], "any", false, false, false, 46)]), "html", null, true);
            echo "\" ><i class=\"far fa-edit text-success\" style = \"font-size: 20px;\"></i></a></td>
                <td style=\"text-align: center;\"><a class = \"btn grow\" onclick=\"DeleteFunction(";
            // line 47
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["documento"], "id", [], "any", false, false, false, 47), "html", null, true);
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
        // line 50
        echo "        </tbody>
    </table> 
</div>
<script src = \"";
        // line 53
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
        return array (  199 => 53,  194 => 50,  177 => 47,  173 => 46,  169 => 45,  165 => 44,  162 => 43,  145 => 42,  128 => 28,  123 => 26,  115 => 21,  106 => 15,  102 => 14,  94 => 9,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Registro Digital - Ver Documentos{% endblock %}

{% block body %}
{{parent()}}
<div class = \"container-fluid\">
    <div class=\"bordeSombreado  divBuscar\">
        {{ form_start(formulario, {'enctype':'multipart/form-data'})}}
        <div class=\"row\">
            <div class=\"col-sm-6\">
                <h6 class = \"text-center\" style=\"color:#306086\">Búsqueda</h6>
                <div class = \"media\">
                    {{ form_widget(formulario.buscar, {attr: {class: 'form-control',placeholder: 'Buscar por nombre...'} }) }}  
                    {{ form_widget(formulario.Buscar, {attr: {class: 'btn btn-buscar'} }) }} 
                </div>
            </div>
            <div class=\"col-sm-6\">
                <h6 style=\"color:#306086\" class = \"text-center\">Cargar documento </h6>
                <div class = \"text-center\">
                    <a class = \"btn botonCeleste ancho text-white grow text-center\" style = \"\" href = \"{{path('altaDocumentos')}}\">Nuevo doc.</a>
                </div>
            </div>
        </div>
        <br>
        {{ form_end(formulario) }}
        <div class = \"m-2\">
            <b style = \"color: #0F9FA8;\">Cantidad de documentos encontrados: {{documentos|length}} </b>
        </div>
    </div> 
    <br>
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
