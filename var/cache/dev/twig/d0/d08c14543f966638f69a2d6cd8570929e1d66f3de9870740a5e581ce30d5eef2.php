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

/* carreras/verCarreras.html.twig */
class __TwigTemplate_0cec4b26db4941589cf6cf3bd535e98891664b2d6e7ef16dd33f5dde907606e9 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "carreras/verCarreras.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "carreras/verCarreras.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "carreras/verCarreras.html.twig", 2);
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

        echo "Registro Digital - Ver Carreras";
        
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
<div class = \"container-fluid\">

    ";
        // line 10
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formulario"]) || array_key_exists("formulario", $context) ? $context["formulario"] : (function () { throw new RuntimeError('Variable "formulario" does not exist.', 10, $this->source); })()), 'form_start', ["enctype" => "multipart/form-data"]);
        echo "
    <div class = \"container row \">
        <div class = \"col-sm-1\">
            <a class = \"\"  href = \"";
        // line 13
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("datosAcademicos");
        echo "\"><i class=\"fas fa-arrow-left grow\" title = \"Volver a ver secciones\" style = \"font-size:30px;color: #0F9FA8; margin-top: 5px;\"></i></a>
        </div>
        <div class = \"col-sm-6 media\">
            ";
        // line 16
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formulario"]) || array_key_exists("formulario", $context) ? $context["formulario"] : (function () { throw new RuntimeError('Variable "formulario" does not exist.', 16, $this->source); })()), "buscar", [], "any", false, false, false, 16), 'widget', ["attr" => ["class" => "form-control campoForm", "placeholder" => "Buscar por título.."]]);
        echo "  
            ";
        // line 17
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formulario"]) || array_key_exists("formulario", $context) ? $context["formulario"] : (function () { throw new RuntimeError('Variable "formulario" does not exist.', 17, $this->source); })()), "Buscar", [], "any", false, false, false, 17), 'widget', ["attr" => ["class" => "btn btn-buscar d-inline"]]);
        echo "  
        </div>
        <div class = \"col-sm-3\"></div>
        <div class = \"col-sm-2\">
            <a class = \"btn form-control campoForm nueva\" style = \"background-color: #; color: white;\" href = \"";
        // line 21
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("altaCarreras");
        echo "\">Nueva carrera</a> 
        </div>
    </div>
    <hr>
    <div class = \"m-3\">
        <b style = \"color: #0F9FA8;\">Cantidad de carreras creadas hasta el momento: ";
        // line 26
        echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["carreras"]) || array_key_exists("carreras", $context) ? $context["carreras"] : (function () { throw new RuntimeError('Variable "carreras" does not exist.', 26, $this->source); })())), "html", null, true);
        echo " </b>
    </div>
    ";
        // line 28
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formulario"]) || array_key_exists("formulario", $context) ? $context["formulario"] : (function () { throw new RuntimeError('Variable "formulario" does not exist.', 28, $this->source); })()), 'form_end');
        echo "
    <table class=\"table table-borderless\">
        <thead>
            <tr style = \"background-color: #0F9FA8;\">
                <th>Nro</th>
                <th>Nombre Carrera</th>
                <th style=\"text-align: center;\">Editar</th>
                <th style=\"text-align: center;\">Eliminar</th>
            </tr>
        </thead>
        <tbody>
            ";
        // line 39
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["carreras"]) || array_key_exists("carreras", $context) ? $context["carreras"] : (function () { throw new RuntimeError('Variable "carreras" does not exist.', 39, $this->source); })()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["carrera"]) {
            // line 40
            echo "            <tr>
                <th>";
            // line 41
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 41), "html", null, true);
            echo "</th>
                <td>";
            // line 42
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["carrera"], "nombreCarrera", [], "any", false, false, false, 42), "html", null, true);
            echo "</td>
                <td style=\"text-align: center;\"><a class =\"btn grow\" href=\"";
            // line 43
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("modificarCarreras", ["id" => twig_get_attribute($this->env, $this->source, $context["carrera"], "id", [], "any", false, false, false, 43)]), "html", null, true);
            echo "\" ><i class=\"far fa-edit text-success\" style = \"font-size: 20px;\"></i></a></td>
                <td style=\"text-align: center;\"><a class = \"btn grow\" onclick=\"DeleteFunction(";
            // line 44
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["carrera"], "id", [], "any", false, false, false, 44), "html", null, true);
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['carrera'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo "        </tbody>
    </table>
</div>
<script src = \"";
        // line 50
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/deleteCarreras.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "carreras/verCarreras.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  198 => 50,  193 => 47,  176 => 44,  172 => 43,  168 => 42,  164 => 41,  161 => 40,  144 => 39,  130 => 28,  125 => 26,  117 => 21,  110 => 17,  106 => 16,  100 => 13,  94 => 10,  88 => 7,  78 => 6,  59 => 4,  36 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("
{% extends 'base.html.twig' %}

{% block title %}Registro Digital - Ver Carreras{% endblock %}

{% block body %}
{{parent()}}
<div class = \"container-fluid\">

    {{ form_start(formulario, {'enctype':'multipart/form-data'})}}
    <div class = \"container row \">
        <div class = \"col-sm-1\">
            <a class = \"\"  href = \"{{path('datosAcademicos')}}\"><i class=\"fas fa-arrow-left grow\" title = \"Volver a ver secciones\" style = \"font-size:30px;color: #0F9FA8; margin-top: 5px;\"></i></a>
        </div>
        <div class = \"col-sm-6 media\">
            {{ form_widget(formulario.buscar, {attr: {class: 'form-control campoForm' , placeholder: 'Buscar por título..'} }) }}  
            {{ form_widget(formulario.Buscar, {attr: {class: 'btn btn-buscar d-inline'} }) }}  
        </div>
        <div class = \"col-sm-3\"></div>
        <div class = \"col-sm-2\">
            <a class = \"btn form-control campoForm nueva\" style = \"background-color: #; color: white;\" href = \"{{path('altaCarreras')}}\">Nueva carrera</a> 
        </div>
    </div>
    <hr>
    <div class = \"m-3\">
        <b style = \"color: #0F9FA8;\">Cantidad de carreras creadas hasta el momento: {{carreras|length}} </b>
    </div>
    {{ form_end(formulario) }}
    <table class=\"table table-borderless\">
        <thead>
            <tr style = \"background-color: #0F9FA8;\">
                <th>Nro</th>
                <th>Nombre Carrera</th>
                <th style=\"text-align: center;\">Editar</th>
                <th style=\"text-align: center;\">Eliminar</th>
            </tr>
        </thead>
        <tbody>
            {% for carrera in carreras %}
            <tr>
                <th>{{ loop.index }}</th>
                <td>{{carrera.nombreCarrera}}</td>
                <td style=\"text-align: center;\"><a class =\"btn grow\" href=\"{{path('modificarCarreras', {'id': carrera.id})}}\" ><i class=\"far fa-edit text-success\" style = \"font-size: 20px;\"></i></a></td>
                <td style=\"text-align: center;\"><a class = \"btn grow\" onclick=\"DeleteFunction({{carrera.id}})\"><i class=\" fas fa-trash text-danger\"   style = \"font-size: 20px\"></i></a></td>
            </tr>
            {% endfor %}
        </tbody>
    </table>
</div>
<script src = \"{{asset('js/deleteCarreras.js')}}\"></script>
{% endblock %}
", "carreras/verCarreras.html.twig", "/var/www/html/RegistroDigital/templates/carreras/verCarreras.html.twig");
    }
}
